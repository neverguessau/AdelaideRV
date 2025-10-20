<?php
// 1) Pagination & Query
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = [
    'post_type'      => 'listings',
    'post_status'    => 'publish',
    'posts_per_page' => 4,
    'orderby'        => 'rand',
    'paged'          => $paged,
];
$loop = new WP_Query($args);

// 2) Image paths
$img_dir      = ABSPATH . 'images/';               // filesystem path: /var/www/html/images/
$img_url_base = home_url('/images/');              // URL base: https://your-domain.com/images/
?>

<?php if ($loop->have_posts()) : ?>
<section class="single-listings-item-view-more-wrapper section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-11">
                <h4 class="heading">View More Stock</h4>
                <div class="view-more-list-wrapper">

                    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                        <?php
                        // 3) Get stock number (ACF or fallback)
                        if (function_exists('get_field')) {
                            $stock_number = get_field('stock_number', get_the_ID());
                        }
                        if (empty($stock_number)) {
                            $stock_number = get_post_meta(get_the_ID(), 'stock_number', true);
                        }

                        // 4) Build filenames/paths
                        $filename = $stock_number . '_1.jpg';
                        $filepath = $img_dir . $filename;
                        $fileurl  = $img_url_base . $filename;
                        ?>

                        <div class="item-wrapper">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (file_exists($filepath)) : ?>
                                    <div class="img-wrapper">
                                        <img
                                            src="<?php echo esc_url($fileurl); ?>"
                                            alt="<?php the_title_attribute(); ?>"
                                            loading="lazy"
                                        >
                                    </div>
                                <?php else : ?>
                                    <div class="img-wrapper">
                                        <img
                                            src="<?php echo esc_url(get_template_directory_uri() . '/img/not-available-1.webp'); ?>"
                                            alt="<?php the_title_attribute(); ?>"
                                            loading="lazy"
                                        >
                                    </div>
                                <?php endif; ?>

                                <div class="title-price-wrapper">
                                    <h6 class="title"><?php the_title(); ?></h6>
                                    <?php
                                    $price = get_field('price', get_the_ID());
                                    if ($price) :
                                        $formatted = number_format($price, 0, '.', ',');
                                    ?>
                                        <h6 class="price">$<?php echo esc_html($formatted); ?></h6>
                                    <?php endif; ?>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; ?>

                </div><!-- .view-more-list-wrapper -->
            </div><!-- .col-xl-11 -->
        </div><!-- .row -->
    </div><!-- .container -->
</section>
<?php endif; ?>

<?php wp_reset_postdata(); ?>
