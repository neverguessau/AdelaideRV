<?php // check url existence function
    if (!function_exists('urlExists')) {
        function urlExists($url) {
        $headers = @get_headers($url);
        // If get_headers fails or the response code is not 200 OK, the URL does not exist
        return ($headers && strpos($headers[0], '200 OK') !== false);
    }
}
?>

<?php 
    $img_path = "https://adelaiderv.com.au/images/"; 
    $img_url_1 = $img_path . get_field('stock_number', get_the_ID()) . "_1.jpg";
    $img_url_2 = $img_path . get_field('stock_number', get_the_ID()) . "_2.jpg";
    $img_url_3 = $img_path . get_field('stock_number', get_the_ID()) . "_3.jpg";
    $img_url_4 = $img_path . get_field('stock_number', get_the_ID()) . "_4.jpg";
    $img_url_5 = $img_path . get_field('stock_number', get_the_ID()) . "_5.jpg";
    $img_url_6 = $img_path . get_field('stock_number', get_the_ID()) . "_6.jpg";
    $img_url_7 = $img_path . get_field('stock_number', get_the_ID()) . "_7.jpg";
    $img_url_8 = $img_path . get_field('stock_number', get_the_ID()) . "_8.jpg";
    $img_url_9 = $img_path . get_field('stock_number', get_the_ID()) . "_9.jpg";
    $img_url_10 = $img_path . get_field('stock_number', get_the_ID()) . "_10.jpg";
    $img_url_11 = $img_path . get_field('stock_number', get_the_ID()) . "_11.jpg";
    $img_url_12 = $img_path . get_field('stock_number', get_the_ID()) . "_12.jpg";
    $img_url_13 = $img_path . get_field('stock_number', get_the_ID()) . "_13.jpg";
    $img_url_14 = $img_path . get_field('stock_number', get_the_ID()) . "_14.jpg";
    $img_url_15 = $img_path . get_field('stock_number', get_the_ID()) . "_15.jpg";
    $img_url_16 = $img_path . get_field('stock_number', get_the_ID()) . "_16.jpg";
    $img_url_17 = $img_path . get_field('stock_number', get_the_ID()) . "_17.jpg";
    $img_url_18 = $img_path . get_field('stock_number', get_the_ID()) . "_18.jpg";
    $img_url_19 = $img_path . get_field('stock_number', get_the_ID()) . "_19.jpg";
    $img_url_20 = $img_path . get_field('stock_number', get_the_ID()) . "_20.jpg";
    $img_url_21 = $img_path . get_field('stock_number', get_the_ID()) . "_21.jpg";
    $img_url_22 = $img_path . get_field('stock_number', get_the_ID()) . "_22.jpg";
    $img_url_23 = $img_path . get_field('stock_number', get_the_ID()) . "_23.jpg";
    $img_url_24 = $img_path . get_field('stock_number', get_the_ID()) . "_24.jpg";
    $img_url_25 = $img_path . get_field('stock_number', get_the_ID()) . "_25.jpg";
?>

<section class="single-stock-item-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="main-image-wrapper">
                    <div class="main-img">
                        <?php // check if featured image url exists
                            $urlToCheck = $img_url_1;
                            if (urlExists($urlToCheck)) { ?>
                                    <img src="<?php echo $img_url_1;?>" alt="<?php the_title(); ?>" loading="lazy">
                            <?php } else { ?>
                                <img src="<?php echo get_template_directory_uri() ?>/img/not-available-1.webp" alt="featured" loading="lazy">
                            <?php }
                            $urlToCheck = null
                        ?>
                    </div><!-- end main img -->
                </div>





                <!-- START CAROUSEL -->
                <div id="listings-carousel" class="owl-carousel single-listings-item-carousel">

                <?php // check if image url exists
                    $urlToCheck = $img_url_1;
                    if (urlExists($urlToCheck)) { ?>
                        <div class="item">
                            <a href="<?php echo $urlToCheck ;?>">
                                <img src="<?php echo $urlToCheck ;?>" alt="<?php the_title(); ?>" loading="lazy">
                            </a>
                        </div><!-- end item -->
                    <?php } $urlToCheck = null
                 ?><!-- end img -->

                <?php // check if image url exists
                    $urlToCheck = $img_url_2;
                    if (urlExists($urlToCheck)) { ?>
                        <div class="item">
                            <a href="<?php echo $urlToCheck ;?>">
                                <img src="<?php echo $urlToCheck ;?>" alt="<?php the_title(); ?>" loading="lazy">
                            </a>
                        </div><!-- end item -->
                    <?php } $urlToCheck = null
                 ?><!-- end img -->

                <?php // check if image url exists
                    $urlToCheck = $img_url_3;
                    if (urlExists($urlToCheck)) { ?>
                        <div class="item">
                            <a href="<?php echo $urlToCheck ;?>">
                                <img src="<?php echo $urlToCheck ;?>" alt="<?php the_title(); ?>" loading="lazy">
                            </a>
                        </div><!-- end item -->
                    <?php } $urlToCheck = null
                 ?><!-- end img -->
                
                
                <?php // check if image url exists
                    $urlToCheck = $img_url_4;
                    if (urlExists($urlToCheck)) { ?>
                        <div class="item">
                            <a href="<?php echo $urlToCheck ;?>">
                                <img src="<?php echo $urlToCheck ;?>" alt="<?php the_title(); ?>" loading="lazy">
                            </a>
                        </div><!-- end item -->
                    <?php } $urlToCheck = null
                 ?><!-- end img -->

                <?php // check if image url exists
                    $urlToCheck = $img_url_5;
                    if (urlExists($urlToCheck)) { ?>
                        <div class="item">
                            <a href="<?php echo $urlToCheck ;?>">
                                <img src="<?php echo $urlToCheck ;?>" alt="<?php the_title(); ?>" loading="lazy">
                            </a>
                        </div><!-- end item -->
                    <?php } $urlToCheck = null
                 ?><!-- end img -->

                <?php // check if image url exists
                    $urlToCheck = $img_url_6;
                    if (urlExists($urlToCheck)) { ?>
                        <div class="item">
                            <a href="<?php echo $urlToCheck ;?>">
                                <img src="<?php echo $urlToCheck ;?>" alt="<?php the_title(); ?>" loading="lazy">
                            </a>
                        </div><!-- end item -->
                    <?php } $urlToCheck = null
                 ?><!-- end img -->

                <?php // check if image url exists
                    $urlToCheck = $img_url_7;
                    if (urlExists($urlToCheck)) { ?>
                        <div class="item">
                            <a href="<?php echo $urlToCheck ;?>">
                                <img src="<?php echo $urlToCheck ;?>" alt="<?php the_title(); ?>" loading="lazy">
                            </a>
                        </div><!-- end item -->
                    <?php } $urlToCheck = null
                 ?><!-- end img -->

                <?php // check if image url exists
                    $urlToCheck = $img_url_8;
                    if (urlExists($urlToCheck)) { ?>
                        <div class="item">
                            <a href="<?php echo $urlToCheck ;?>">
                                <img src="<?php echo $urlToCheck ;?>" alt="<?php the_title(); ?>" loading="lazy">
                            </a>
                        </div><!-- end item -->
                    <?php } $urlToCheck = null
                 ?><!-- end img -->

                <?php // check if image url exists
                    $urlToCheck = $img_url_9;
                    if (urlExists($urlToCheck)) { ?>
                        <div class="item">
                            <a href="<?php echo $urlToCheck ;?>">
                                <img src="<?php echo $urlToCheck ;?>" alt="<?php the_title(); ?>" loading="lazy">
                            </a>
                        </div><!-- end item -->
                    <?php } $urlToCheck = null
                 ?><!-- end img -->

                <?php // check if image url exists
                    $urlToCheck = $img_url_10;
                    if (urlExists($urlToCheck)) { ?>
                        <div class="item">
                            <a href="<?php echo $urlToCheck ;?>">
                                <img src="<?php echo $urlToCheck ;?>" alt="<?php the_title(); ?>" loading="lazy">
                            </a>
                        </div><!-- end item -->
                    <?php } $urlToCheck = null
                 ?><!-- end img -->

                <?php // check if image url exists
                    $urlToCheck = $img_url_11;
                    if (urlExists($urlToCheck)) { ?>
                        <div class="item">
                            <a href="<?php echo $urlToCheck ;?>">
                                <img src="<?php echo $urlToCheck ;?>" alt="<?php the_title(); ?>" loading="lazy">
                            </a>
                        </div><!-- end item -->
                    <?php } $urlToCheck = null
                 ?><!-- end img -->

                <?php // check if image url exists
                    $urlToCheck = $img_url_12;
                    if (urlExists($urlToCheck)) { ?>
                        <div class="item">
                            <a href="<?php echo $urlToCheck ;?>">
                                <img src="<?php echo $urlToCheck ;?>" alt="<?php the_title(); ?>" loading="lazy">
                            </a>
                        </div><!-- end item -->
                    <?php } $urlToCheck = null
                 ?><!-- end img -->

                <?php // check if image url exists
                    $urlToCheck = $img_url_13;
                    if (urlExists($urlToCheck)) { ?>
                        <div class="item">
                            <a href="<?php echo $urlToCheck ;?>">
                                <img src="<?php echo $urlToCheck ;?>" alt="<?php the_title(); ?>" loading="lazy">
                            </a>
                        </div><!-- end item -->
                    <?php } $urlToCheck = null
                 ?><!-- end img -->

                <?php // check if image url exists
                    $urlToCheck = $img_url_14;
                    if (urlExists($urlToCheck)) { ?>
                        <div class="item">
                            <a href="<?php echo $urlToCheck ;?>">
                                <img src="<?php echo $urlToCheck ;?>" alt="<?php the_title(); ?>" loading="lazy">
                            </a>
                        </div><!-- end item -->
                    <?php } $urlToCheck = null
                 ?><!-- end img -->

                <?php // check if image url exists
                    $urlToCheck = $img_url_15;
                    if (urlExists($urlToCheck)) { ?>
                        <div class="item">
                            <a href="<?php echo $urlToCheck ;?>">
                                <img src="<?php echo $urlToCheck ;?>" alt="<?php the_title(); ?>" loading="lazy">
                            </a>
                        </div><!-- end item -->
                    <?php } $urlToCheck = null
                 ?><!-- end img -->

                <?php // check if image url exists
                    $urlToCheck = $img_url_16;
                    if (urlExists($urlToCheck)) { ?>
                        <div class="item">
                            <a href="<?php echo $urlToCheck ;?>">
                                <img src="<?php echo $urlToCheck ;?>" alt="<?php the_title(); ?>" loading="lazy">
                            </a>
                        </div><!-- end item -->
                    <?php } $urlToCheck = null
                 ?><!-- end img -->

                <?php // check if image url exists
                    $urlToCheck = $img_url_17;
                    if (urlExists($urlToCheck)) { ?>
                        <div class="item">
                            <a href="<?php echo $urlToCheck ;?>">
                                <img src="<?php echo $urlToCheck ;?>" alt="<?php the_title(); ?>" loading="lazy">
                            </a>
                        </div><!-- end item -->
                    <?php } $urlToCheck = null
                 ?><!-- end img -->

                <?php // check if image url exists
                    $urlToCheck = $img_url_18;
                    if (urlExists($urlToCheck)) { ?>
                        <div class="item">
                            <a href="<?php echo $urlToCheck ;?>">
                                <img src="<?php echo $urlToCheck ;?>" alt="<?php the_title(); ?>" loading="lazy">
                            </a>
                        </div><!-- end item -->
                    <?php } $urlToCheck = null
                 ?><!-- end img -->

                <?php // check if image url exists
                    $urlToCheck = $img_url_19;
                    if (urlExists($urlToCheck)) { ?>
                        <div class="item">
                            <a href="<?php echo $urlToCheck ;?>">
                                <img src="<?php echo $urlToCheck ;?>" alt="<?php the_title(); ?>" loading="lazy">
                            </a>
                        </div><!-- end item -->
                    <?php } $urlToCheck = null
                 ?><!-- end img -->

                <?php // check if image url exists
                    $urlToCheck = $img_url_20;
                    if (urlExists($urlToCheck)) { ?>
                        <div class="item">
                            <a href="<?php echo $urlToCheck ;?>">
                                <img src="<?php echo $urlToCheck ;?>" alt="<?php the_title(); ?>" loading="lazy">
                            </a>
                        </div><!-- end item -->
                    <?php } $urlToCheck = null
                 ?><!-- end img -->

                <?php // check if image url exists
                    $urlToCheck = $img_url_21;
                    if (urlExists($urlToCheck)) { ?>
                        <div class="item">
                            <a href="<?php echo $urlToCheck ;?>">
                                <img src="<?php echo $urlToCheck ;?>" alt="<?php the_title(); ?>" loading="lazy">
                            </a>
                        </div><!-- end item -->
                    <?php } $urlToCheck = null
                 ?><!-- end img -->

                <?php // check if image url exists
                    $urlToCheck = $img_url_22;
                    if (urlExists($urlToCheck)) { ?>
                        <div class="item">
                            <a href="<?php echo $urlToCheck ;?>">
                                <img src="<?php echo $urlToCheck ;?>" alt="<?php the_title(); ?>" loading="lazy">
                            </a>
                        </div><!-- end item -->
                    <?php } $urlToCheck = null
                 ?><!-- end img -->

                <?php // check if image url exists
                    $urlToCheck = $img_url_23;
                    if (urlExists($urlToCheck)) { ?>
                        <div class="item">
                            <a href="<?php echo $urlToCheck ;?>">
                                <img src="<?php echo $urlToCheck ;?>" alt="<?php the_title(); ?>" loading="lazy">
                            </a>
                        </div><!-- end item -->
                    <?php } $urlToCheck = null
                 ?><!-- end img -->

                <?php // check if image url exists
                $urlToCheck = $img_url_24;
                if (urlExists($urlToCheck)) { ?>
                    <div class="item">
                        <a href="<?php echo $urlToCheck ;?>">
                            <img src="<?php echo $urlToCheck ;?>" alt="<?php the_title(); ?>" loading="lazy">
                        </a>
                    </div><!-- end item -->
                <?php } $urlToCheck = null
                ?><!-- end img -->

                <?php // check if image url exists
                $urlToCheck = $img_url_25;
                if (urlExists($urlToCheck)) { ?>
                    <div class="item">
                        <a href="<?php echo $urlToCheck ;?>">
                            <img src="<?php echo $urlToCheck ;?>" alt="<?php the_title(); ?>" loading="lazy">
                        </a>
                    </div><!-- end item -->
                <?php } $urlToCheck = null
                ?><!-- end img -->





                </div><!-- end listings carousel -->

                <!-- END CAROUSEL -->

                <?php 
                        // Get the terms for the taxonomy 'your_taxonomy'
                        $terms = get_the_terms(get_the_ID(), 'make'); 
                ?>
                
                <div class="title-price-wrapper">
                    <h3 class="title">
                        <?php 

                            if ($terms && !is_wp_error($terms)) :
                            foreach ($terms as $term) {
                                // Display the taxonomy name
                                echo $term->name . ' - ';
                            }   endif; 
                        ?>
                        <?php the_title();?>
                    </h3>
                    <?php 
                        $formatted_price = "";
                        if (get_field('price', get_the_ID())) {
                            $price = get_field('price', get_the_ID());
                            $formatted_price = number_format($price, 0, '.', ','); 
                        }
                    ?>
                    <?php if ($formatted_price) { ?>
                        <h3 class="price">$<?php echo $formatted_price; ?></h3>
                    <?php } ?>
                </div><!-- end title price wrapper -->


            </div><!-- end left col -->

            <div class="col-lg-4">

                <?php get_template_part( 'template-parts/single-listings-features-list'); ?>

            </div><!-- end right col -->
        </div><!-- end row -->
    </div><!-- container -->

    
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="item-description">
                    <?php the_content(); ?>                
                </div><!-- end item description -->            
            </div>
        </div>
    </div>

</section>



<script>
    jQuery(document).ready(function($){
        $('#listings-carousel').owlCarousel({
        
        autoplay: true,
        loop:false,
        nav:true,
        margin:15,
        dots:false,
        // stagePadding:80,
        navText : ["&lt;","&gt;"],
        responsive : {
            // breakpoint from 0 up
            0 : {
                items:3,
            },
            // breakpoint from 480 up
            768 : {
                items:3,
            },
            // breakpoint from 768 up
            991 : {
                items:4, 
            }
        }
        });



        /***/    

        $(".single-listings-item-carousel").each(function() {
            $(this).magnificPopup({
                delegate: 'a', // child items selector, by clicking on it popup will open
                type: 'image',
                gallery: {
                    enabled: true
                }
                // other options
            });
	    });


        /***/


    });

    
   
</script>