<?php
/**
 * generate-full-feed.php
 * Atomic, locked CSV generator for 11550.csv
 */

declare(strict_types=1);

$token      = 'XPR1BIS86BGX5X755ZSP';
$listUrl    = 'http://service.ultimate.net.au/ubs_mtaq/member/upload/ubs_mtaq_get_stock_details.asp';
$detailUrl  = 'http://service.ultimate.net.au/ubs_mtaq/member/ws/ubs_mtaq_get_vehicle.asp';

$baseDir    = __DIR__;
$outputCsv  = $baseDir . '/11550.csv';
$tmpCsv     = $baseDir . '/11550.csv.tmp';
$lockFile   = $baseDir . '/11550.feed.lock';
$logFile    = $baseDir . '/feed-gen.log';

$delayMicro = 200000;      // 0.2s between vehicle detail calls
$minBytes   = 1024;        // minimum acceptable CSV size before swap
$retries    = 3;           // HTTP retry count
$timeoutSec = 20;          // HTTP timeout

set_time_limit(0);
ignore_user_abort(true);

function logmsg(string $m) {
    global $logFile;
    $line = '[' . date('c') . '] ' . $m . PHP_EOL;
    file_put_contents($logFile, $line, FILE_APPEND);
    echo $line;
}

$headers = [
    'ID','StockNumber','Year','IsUsed','Price','body','RegoNum','TowBallWeight','AxleConfiguration','Tare',
    'EngineMake','SleepingCapacity','toilet','Wheels','WheelSize','AirConditioning','fridge','stereo','shower','warranty',
    'EnginePower','suspension','Make','Model','Badge','VIN','Odometer','Color','EngineSize','GearType','FuelType',
    'StandardFeatures','OptionalFeatures','AdvDescription','YardCode','Series','NVIC','SpecialPrice',
    'IsDemo','IsSpecial','IsPrestiged','StockType','RegoExpiry','VideoLink','Drive','DoorNum',
    'Cylinders','RedbookCode','IsMiles','ShortDescription','InteriorColour','RegoState',
    'BuildDate','ComplianceDate','GCM','GVM','IsDAP','StockStatus','engine_number','GearCount',
    'PowerkW','Powerhp','GPS','SerialNumber'
];

/** HTTP helper with timeout */
function http_get(string $url, int $timeoutSec) {
    $ctx = stream_context_create([
        'http' => [
            'timeout' => $timeoutSec,
            'header'  => "Connection: close\r\nUser-Agent: ARVFeed/1.0\r\n",
        ]
    ]);
    return @file_get_contents($url, false, $ctx);
}

/** Fetch XML with retries */
function fetchXmlRetry(string $url, int $retries, int $timeoutSec): SimpleXMLElement {
    for ($i = 1; $i <= $retries; $i++) {
        $raw = http_get($url, $timeoutSec);
        if ($raw !== false) {
            libxml_use_internal_errors(true);
            $xml = simplexml_load_string($raw, 'SimpleXMLElement', LIBXML_NOCDATA);
            if ($xml) return $xml;
        }
        logmsg("Attempt $i failed for $url");
        usleep(250000 * $i); // backoff
    }
    throw new Exception("Fetch or parse failed for $url");
}

/** Acquire non-blocking lock so parallel cron runs bail out */
$lock = fopen($lockFile, 'c');
if (!$lock || !flock($lock, LOCK_EX | LOCK_NB)) {
    logmsg('Another generate-full-feed.php is already running. Exiting.');
    exit(0);
}

try {
    // 1) vehicle list
    $listXml = fetchXmlRetry("{$listUrl}?token={$token}", $retries, $timeoutSec);
    $vehiclesNode = $listXml->vehicles->vehicle ?? [];
    $vehicleCount = is_array($vehiclesNode) ? count($vehiclesNode) : count($listXml->vehicles->vehicle);

    if ($vehicleCount === 0) {
        logmsg('No vehicles found. Will not overwrite existing CSV.');
        exit(0);
    }
    logmsg("Found {$vehicleCount} vehicles.");

    // 2) write to temp CSV
    $out = fopen($tmpCsv, 'w');
    if (!$out) throw new Exception("Cannot open temp file $tmpCsv for writing");
    fputcsv($out, $headers);

    $written = 0;

    foreach ($listXml->vehicles->vehicle as $v0) {
        $vid = (string)$v0['id'];
        try {
            $det = fetchXmlRetry("{$detailUrl}?token={$token}&vehicle_id={$vid}&pic_summary=yes", $retries, $timeoutSec);
        } catch (Exception $e) {
            logmsg("Skipping $vid: {$e->getMessage()}");
            continue;
        }

        $v = $det->vehicles->vehicle[0] ?? null;
        if (!$v) { logmsg("No detail node for $vid"); continue; }

        // parse description blocks
        $rawDesc = html_entity_decode((string)$v['vehicle-desc'], ENT_QUOTES | ENT_HTML5);
        $lines   = preg_split('#<br\s*/?>#i', $rawDesc) ?: [];
        $inFeat = false; $features = [];
        foreach ($lines as $L) {
            $t = trim(strip_tags($L));
            if (!$inFeat && stripos($t, 'FEATURES') !== false) { $inFeat = true; continue; }
            if ($inFeat && $t !== '') $features[] = $t;
        }
        $weights = [];
        if (preg_match('/WEIGHTS(.*?)FEATURES/s', $rawDesc, $mW)) {
            foreach (preg_split('#<br\s*/?>#i', $mW[1]) as $wl) {
                $t = trim(strip_tags($wl)); if ($t !== '') $weights[] = $t;
            }
        }
        $access = [];
        foreach ($v->accessories->accessory as $a) $access[] = (string)$a['desc'];
        $all = array_merge($access, $features, $weights);
        $find = function ($kw) use ($all) {
            foreach ($all as $s) if (stripos($s, $kw) !== false) return $s;
            return null;
        };

        // build row
        $row = [];
        foreach ($headers as $h) {
            switch ($h) {
                case 'ID':               $row[] = $vid; break;
                case 'StockNumber':      $row[] = (string)$v['stock-number']; break;
                case 'Year':             $row[] = (string)$v->dates['build-year']; break;
                case 'IsUsed':           $row[] = ((string)$v['type'] === 'USED') ? 'Pre-owned' : 'New'; break;
                case 'Price':            $row[] = (string)$v['asking-price']; break;
                case 'body':             $row[] = (string)$v->model['body']; break;
                case 'RegoNum':          $row[] = (string)$v->registration['plate']; break;
                case 'TowBallWeight':
                    $tb = (string)$v['ball'];
                    if ($tb === '' && preg_match('/Ball Weight.*?(\d+)/i', implode('|', $weights), $m)) $tb = $m[1];
                    $row[] = $tb; break;
                case 'AxleConfiguration': $row[] = $find('Axle') ?: ''; break;
                case 'Tare':             $row[] = (string)$v['tare']; break;
                case 'EngineMake':
                    $atm = (string)$v['atm'];
                    if ($atm === '' && preg_match('/ATM.*?(\d+)/i', implode('|', $weights), $m2)) $atm = $m2[1];
                    $row[] = $atm ? $atm . 'kg' : ''; break;
                case 'SleepingCapacity':
                    $sleepCount = 0;
                    foreach ($features as $feat) {
                        $f = strtolower($feat);
                        if (strpos($f, 'island bed') !== false) $sleepCount += 2;
                        elseif (strpos($f, 'quad bunk') !== false) $sleepCount += 4;
                        elseif (strpos($f, 'triple bunk') !== false) $sleepCount += 3;
                        elseif (strpos($f, 'double bunk') !== false) $sleepCount += 2;
                        elseif (strpos($f, 'bunk bed') !== false) $sleepCount += 2;
                        elseif (strpos($f, 'queen bed') !== false) $sleepCount += 2;
                        elseif (strpos($f, 'king bed') !== false) $sleepCount += 2;
                        elseif (strpos($f, 'double bed') !== false) $sleepCount += 2;
                        elseif (strpos($f, 'foldable single bed') !== false) $sleepCount += 1;
                        elseif (strpos($f, 'single bed') !== false && (strpos($f, 'fold') !== false || strpos($f, 'foldable') !== false)) $sleepCount += 1;
                    }
                    if ($sleepCount === 0) $sleepCount = (int) $v['seats'];
                    $row[] = $sleepCount; break;
                case 'toilet':           $row[] = stripos($rawDesc, 'toilet') !== false ? 'Yes' : 'No'; break;
                case 'Wheels':           $row[] = (string)$v['wheels']; break;
                case 'WheelSize':        $row[] = (string)$v['wheel-size']; break;
                case 'AirConditioning':  $row[] = (stripos($rawDesc, 'aircon') !== false || stripos($rawDesc, 'air conditioner') !== false) ? 'Yes' : 'No'; break;
                case 'fridge':           $row[] = stripos($rawDesc, 'fridge') !== false ? 'Yes' : 'No'; break;
                case 'stereo':
                    $found = false;
                    foreach ($features as $feat) {
                        $t = strtolower($feat);
                        if (
                            strpos($t, 'stereo') !== false || strpos($t, 'radio') !== false ||
                            strpos($t, 'antenna') !== false || strpos($t, 'aerial') !== false ||
                            strpos($t, 'entertainment') !== false || strpos($t, 'sound system') !== false ||
                            strpos($t, 'audio system') !== false || strpos($t, 'speaker') !== false ||
                            strpos($t, 'am/fm') !== false || strpos($t, 'cd player') !== false ||
                            strpos($t, 'bluetooth') !== false || strpos($t, 'head unit') !== false
                        ) { $found = true; break; }
                    }
                    $row[] = $found ? 'Yes' : 'No'; break;
                case 'shower':           $row[] = stripos($rawDesc, 'shower') !== false ? 'Yes' : 'No'; break;
                case 'warranty':         $row[] = ''; break;
                case 'EnginePower':
                    $len = (float)$v['int-length-metric'];
                    $row[] = $len ? round($len * 3.28084, 1) : ''; break;
                case 'suspension':       $row[] = $find('suspension') ?: ''; break;
                default:
                    switch ($h) {
                        case 'Make':     $row[]=(string)$v->model['make']; break;
                        case 'Model':    $row[]=(string)$v->model['model']; break;
                        case 'Badge':    $row[]=(string)$v->model['variant']; break;
                        case 'VIN':      $row[]=(string)$v['vin']; break;
                        case 'Odometer': $row[]=(string)$v['odometer']; break;
                        case 'Color':    $row[]=(string)$v['colour']; break;
                        case 'EngineSize':   $row[]=(string)$v['engine-size-ltr']; break;
                        case 'GearType':     $row[]=(string)$v['transmission']; break;
                        case 'FuelType':     $row[]=(string)$v['fuel-type']; break;
                        case 'StandardFeatures': $row[]=implode('|',$access); break;
                        case 'OptionalFeatures': $row[]=implode('|',$features); break;
                        case 'AdvDescription':   $row[]=$rawDesc; break;
                        case 'YardCode':        $row[]=(string)$v['branch-id']; break;
                        case 'Series':          $row[]=(string)$v->model['series']; break;
                        case 'NVIC':            $row[]=''; break;
                        case 'SpecialPrice':    $row[]=(string)$v['driveaway-price']; break;
                        case 'IsDemo':          $row[]=''; break;
                        case 'IsSpecial':       $row[]=''; break;
                        case 'IsPrestiged':     $row[]=''; break;
                        case 'StockType':       $row[]=(string)$v['type']; break;
                        case 'RegoExpiry':      $row[]=(string)$v->registration['expiry-date']; break;
                        case 'VideoLink':       $row[]=''; break;
                        case 'Drive':           $row[]=(string)$v['drive-type']; break;
                        case 'DoorNum':         $row[]=(string)$v['doors']; break;
                        case 'Cylinders':       $row[]=(string)$v['cylinders']; break;
                        case 'RedbookCode':     $row[]=''; break;
                        case 'IsMiles':         $row[]=''; break;
                        case 'ShortDescription':$row[]=''; break;
                        case 'InteriorColour':  $row[]=''; break;
                        case 'RegoState':       $row[]=(string)$v->registration['state']; break;
                        case 'BuildDate':       $row[]=(string)$v->dates['build-date']; break;
                        case 'ComplianceDate':  $row[]=(string)$v->dates['compliance-date']; break;
                        case 'GCM':             $row[]=(string)$v['gcm']; break;
                        case 'GVM':             $row[]=(string)$v['gvm']; break;
                        case 'IsDAP':           $row[]=''; break;
                        case 'StockStatus':     $row[]=''; break;
                        case 'engine_number':   $row[]=(string)$v['engine-number']; break;
                        case 'GearCount':       $row[]=''; break;
                        case 'PowerkW':         $row[]=''; break;
                        case 'Powerhp':         $row[]=''; break;
                        case 'GPS':             $row[]=''; break;
                        case 'SerialNumber':    $row[]=''; break;
                        default:                $row[]='';
                    }
            }
        }

        fputcsv($out, $row);
        $written++;
        usleep($delayMicro);
    }

    fflush($out);
    fclose($out);

    if ($written > 0 && filesize($tmpCsv) > $minBytes) {
        rename($tmpCsv, $outputCsv); // atomic swap
        logmsg("✅ Wrote {$written} rows to $outputCsv");
    } else {
        @unlink($tmpCsv);
        logmsg("Generated feed was empty or too small. Kept previous CSV.");
    }

} catch (Throwable $e) {
    if (is_file($tmpCsv)) @unlink($tmpCsv);
    logmsg('Error: ' . $e->getMessage());
} finally {
    if (isset($lock) && $lock) { flock($lock, LOCK_UN); fclose($lock); }
}