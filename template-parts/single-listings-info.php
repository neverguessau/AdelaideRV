<?php
$stock_number = get_field('stock_number', get_the_ID());

// Paths
$img_path_relative = '/images/';
$img_path_absolute = $_SERVER['DOCUMENT_ROOT'] . $img_path_relative;
$img_path_url = home_url($img_path_relative);

// Main image
$main_image_filename = $stock_number . "_1.jpg";
$main_image_file = $img_path_absolute . $main_image_filename;
$main_image_url = $img_path_url . '/' . $main_image_filename;
?>

<section class="single-stock-item-wrapper popup-group">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- Main Image -->
                <div class="main-image-wrapper popup">
                    <div class="main-img">
                        <?php if (file_exists($main_image_file)) { ?>
                            <a class="gallery" href="<?php echo esc_url($main_image_url); ?>">
                                <img src="<?php echo esc_url($main_image_url); ?>" alt="<?php the_title(); ?>" loading="lazy">
                            </a>
                        <?php } else { ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/not-available-1.webp" alt="featured" loading="lazy">
                        <?php } ?>
                    </div>
                </div>

                <!-- Carousel -->
                <div id="listings-carousel" class="owl-carousel single-listings-item-carousel popup">
                    <?php
                    for ($i = 2; $i <= 45; $i++) {
                        $filename = $stock_number . "_{$i}.jpg";
                        $filepath = $img_path_absolute . $filename;
                        $fileurl = $img_path_url . '/' . $filename;

                        if (file_exists($filepath)) {
                            echo '<div class="item">
                                    <a class="gallery" href="' . esc_url($fileurl) . '">
                                        <img src="' . esc_url($fileurl) . '" alt="' . esc_attr(get_the_title()) . '" loading="lazy">
                                    </a>
                                  </div>';
                        }
                    }
                    ?>
                </div>
                <!-- End Carousel -->

                <?php
                $terms = get_the_terms(get_the_ID(), 'make');
                ?>
                <div class="title-price-wrapper">
                    <h1 class="title">
                        <?php
                        if ($terms && !is_wp_error($terms)) :
                            foreach ($terms as $term) {
                                echo esc_html($term->name) . ' - ';
                            }
                        endif;
                        ?>
                        <?php the_title(); ?>
                    </h1>
                    <?php
                    if ($price = get_field('price', get_the_ID())) {
                        $formatted_price = number_format($price, 0, '.', ',');
                        echo '<h3 class="price">$' . esc_html($formatted_price) . '</h3>';
                    }
                    ?>
                </div>
            </div>

            <div class="col-lg-4">
                <?php get_template_part('template-parts/single-listings-features-list'); ?>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="item-description">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    jQuery(document).ready(function($){
        $('#listings-carousel').owlCarousel({
            autoplay: true,
            loop: false,
            nav: true,
            margin: 15,
            dots: false,
            navText : ["&lt;","&gt;"],
            responsive : {
                0 : { items: 3 },
                768 : { items: 3 },
                991 : { items: 4 }
            }
        });

        $(".popup-group").magnificPopup({
            delegate: 'a.gallery',
            type: 'image',
            gallery: { enabled: true }
        });
    });
</script>
