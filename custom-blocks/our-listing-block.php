<?php
// Get pagination value from ACF field 
$numPerPage = 6;
if (get_field('items_per_page')) {
    $numPerPage = get_field('items_per_page'); 
  }
?>

<?php 
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    $args = array(  
    'post_type' => 'listings',
    'post_status' => 'publish',
    'posts_per_page' => $numPerPage, 
    // 'orderby' => 'date', 
    // 'order' => 'ASC', 
    'paged' => $paged,
    'meta_key'       => 'stock_number',  // Custom field name
    'orderby'        => 'meta_value_num',  // Order by numeric value
    'order'          => 'DESC',  // ASC for ascending, DESC for descending
    );

    $loop = new WP_Query( $args ); 
?>


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
if (!function_exists('arb_build_stock_gallery')) {
    function arb_build_stock_gallery($post_id) {
        $stock_number = get_field('stock_number', $post_id);
        $na_img  = get_template_directory_uri() . '/img/not-available-1.webp';
        $scope_id = 'alb-gallery-' . $post_id;

        // Images live at https://adelaiderv.com.au/images/<file>.jpg
        $img_path_relative = '/images';
        $img_abs_base = rtrim($_SERVER['DOCUMENT_ROOT'], '/') . $img_path_relative . '/';
        $img_url_base = untrailingslashit( home_url( $img_path_relative ) );

        // Main image
        $main_filename = $stock_number . '_1.jpg';
        $main_file = $img_abs_base . $main_filename;
        $main_url  = $img_url_base . '/' . $main_filename;

        ob_start(); ?>
        <div id="<?php echo esc_attr($scope_id); ?>" class="our-listing-block--gallery">
            <div class="featured">
                <div class="main-image-wrapper popup">
                    <div class="main-img">
                        <?php if ($stock_number && file_exists($main_file)) { ?>
                            <a class="gallery" href="<?php echo esc_url($main_url); ?>">
                                <img src="<?php echo esc_url($main_url); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy">
                            </a>
                        <?php } else { ?>
                            <img src="<?php echo esc_url($na_img); ?>" alt="featured" loading="lazy">
                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="thumbnails">
                <div class="owl-carousel single-listings-item-carousel popup">
                    <?php
                    if ($stock_number) {
                        for ($i = 2; $i <= 45; $i++) {
                            $filename = $stock_number . "_{$i}.jpg";
                            $filepath = $img_abs_base . $filename;
                            $fileurl  = $img_url_base . '/' . $filename;

                            if (file_exists($filepath)) {
                                echo '<div class="item">
                        <a class="gallery" href="' . esc_url($fileurl) . '">
                          <img src="' . esc_url($fileurl) . '" alt="' . esc_attr(get_the_title($post_id)) . '" loading="lazy">
                        </a>
                      </div>';
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>

        <script>
            jQuery(function($){
                var $root = $('#<?php echo esc_js($scope_id); ?>');
                var $carousel = $root.find('.owl-carousel.single-listings-item-carousel');

                if ($carousel.length && !$carousel.data('owl-initialized')) {
                    // Hide until Owl finishes to avoid flashing all thumbs
                    $carousel.css('opacity', 0);

                    $carousel.on('initialized.owl.carousel', function(){
                        $(this).css('opacity', 1);
                    });

                    $carousel.owlCarousel({
                        items: 4,
                        margin: 10,
                        nav: true,
                        dots: false,
                        responsive:{
                            0:    { items: 2 },
                            480:  { items: 3 },
                            768:  { items: 4 },
                            1024: { items: 4 }
                        }
                    }).data('owl-initialized', true);
                }

                if ($.fn.magnificPopup) {
                    var $pop = $root.find('.popup');
                    if ($pop.length && !$pop.data('mfp-bound')) {
                        $pop.magnificPopup({
                            delegate:'a.gallery',
                            type:'image',
                            gallery:{enabled:true}
                        }).data('mfp-bound', true);
                    }
                }
            });
        </script>


        <style>
            #<?php echo esc_attr($scope_id); ?> .featured .main-img img { width: 100%; height: auto; display:block; }
            #<?php echo esc_attr($scope_id); ?> .owl-carousel .item img { width: 100%; height: auto; display:block; }
            /* Prevent layout jump before Owl init */
            #<?php echo esc_attr($scope_id); ?> .thumbnails .owl-carousel { overflow: hidden; }
        </style>
        <?php
        return ob_get_clean();
    }
}

?>



<section id="list" class="listings-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 ">

                <div class="listings-sidebar">
                    <h6>FILTER YOUR SEARCH BELOW</h6>
                    <div class="filters-wrapper">
                        <?php echo do_shortcode( '[fe_widget]' ) ?>
                    </div><!-- end filter wrapper-->
                </div><!-- end listing side bar -->

            </div><!-- end col -->

            <div class="col-lg-9 col-md-8 ">
            
                <?php if ( $loop->have_posts() ) : ?>
                <div class="right-col-container">    
                    <div id="our_stock_list" class="list-wrapper">
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <div class="item-wrapper">

                                <div class="item-images">
                                        <?php echo arb_build_stock_gallery(get_the_ID()); ?>
                                </div><!-- end item images -->


                                <?php 
                                        // Get the terms for the taxonomy 'your_taxonomy'
                                        $terms = get_the_terms(get_the_ID(), 'make'); 
                                ?>

                                <div class="item-info">
                                    <div class="title-price">
                                        <div class="name-wrapper">
                                            <h5 class="title">
                                            <?php 

                                                if ($terms && !is_wp_error($terms)) :
                                                    foreach ($terms as $term) {
                                                        // Display the taxonomy name
                                                        echo $term->name;
                                                    }   endif;
                                                ?> 
                                                <?php // the_title();?>
                                            </h5>
                                            <h6 class="subtitle"><?php the_field('year', get_the_ID()); ?> <?php the_title();?></h6>
                                        </div><!-- end name wrapper -->
                                        
                                        <?php 
                                            $formatted_price = "";
                                            if (get_field('price', get_the_ID())) {
                                                $price = get_field('price', get_the_ID());
                                                $formatted_price = number_format($price, 0, '.', ','); 
                                            }
                                        ?>
                                        <?php if ($formatted_price) { ?>
                                            <h6 class="price">$<?php echo $formatted_price; ?></h6>
                                        <?php } ?>
                                        
                                        
                                    </div><!-- end title & price -->

                                    <div class="tags-wrapper">

                                        <ul class="tags">
                                        <?php 

                                            /*if ($terms && !is_wp_error($terms)) :
                                                foreach ($terms as $term) {
                                                    // Display the taxonomy name
                                                    echo '<li title="Make">' . $term->name . '</li>';
                                                }
                                            endif;*/
                                            ?>                                         
                                            <?php if (get_field('body', get_the_ID())) { ?>
                                                <li title="Body type"><?php the_field('body', get_the_ID());?></li>
                                            <?php } ?>

                                            <?php if (get_field('new_used', get_the_ID()) == "True") { ?>
                                                <li title="Condition">Used</li>
                                            <?php } else { ?>
                                                <li title="Condition">New</li>
                                            <?php } ?>

                                            <?php if (get_field('shower', get_the_ID()) !=="") { ?>
                                                <li title="Has shower">Shower</li>
                                            <?php } ?>

                                            <?php if (get_field('toilet', get_the_ID()) !== "" && get_field('toilet', get_the_ID()) !== "No" ) { ?>
                                                <li title="Has toilet">Toilet</li>
                                            <?php } ?>

                                            <?php if (get_field('sleeping_capacity', get_the_ID()) !=="") { ?>
                                                <li title="Sleeping capacity: <?php the_field('sleeping_capacity', get_the_ID()); ?>">Sleeps <?php the_field('sleeping_capacity', get_the_ID()); ?></li>
                                            <?php } ?>
                                        
                                            
                                        </ul>
                                    </div><!-- end tags wrapper -->
                                </div><!-- end item info --> 

                                <a href="<?php the_permalink(); ?>" class="btn-md btn-more">More Info</a>

                            </div><!-- end item wrapper -->
                        <?php endwhile; wp_reset_postdata(); ?>
                    </div><!-- end list wrapper -->

                     <!-- start pagination  -->
                    <?php $total_pages = $loop->max_num_pages;

                    if ($total_pages > 1) {  echo '<div class="pagination-container">';

                    $current_page = max(1, get_query_var('paged'));

                    echo paginate_links(array(
                        // 'base' => get_pagenum_link(1) . '%_%#list',
                        // 'format' => 'page/%#%',
                        'format'       => '?paged=%#%#list',
                        'current' => $current_page,
                        'total' => $total_pages,
                        'prev_text'    => __('prev'),
                        'next_text'    => __('next'),
                    ));

                        echo '</div>';
                    } ?>

          

                    <!-- end pagination -->

                </div><!-- end right col container --> 

                <?php else : ?>
                    <h5>Sorry, we could't find what you are looking for. Try something else.</h5>
                    <script>
                        setTimeout(function () {
                        window.location.href= '<?php bloginfo('url') ?>/our-stock#list'; // the redirect goes here

                        },3000); // 5 seconds
                    </script>
                <?php endif ?>          
            </div><!-- end right col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>

<script>
    // TURN OFF AUTO COMPLETE OF SEARCH FIELD
    const searchField = document.querySelector(".wpc-search-field");
    searchField.setAttribute("autocomplete", "off");

    
    // START  SET EQUAL HEIGHT

    function titleEqualHeights() {

        const viewportWidth = window.innerWidth || document.documentElement.clientWidth;
        // Get all elements with the class name "description"
        const titleElements = document.querySelectorAll(".title-price");

        // Reset heights to "auto" before calculating the new equal height
        titleElements.forEach((element) => {
            element.style.height = "auto";
        });

        // Check if the viewport width is less than 991px
        if (viewportWidth > 991) {

        // Find the maximum height among all elements
        let maxHeight = 0;
        titleElements.forEach((element) => {
            const elementHeight = element.offsetHeight;
            if (elementHeight > maxHeight) {
            maxHeight = elementHeight;
            }
        });

        // Set the height of all elements to the maximum height
        titleElements.forEach((element) => {
            element.style.height = `${maxHeight}px`;
        });

    }
}


// Call the function initially to set equal heights
titleEqualHeights();

// Call the function again whenever the window is resized
window.addEventListener("resize", titleEqualHeights);

/*** END TITLE HEIGHT ***/



// START TAGS HEIGHT  *******************************************

function tagsEqualHeights() {

    const viewportWidth = window.innerWidth || document.documentElement.clientWidth;
    // Get all elements with the class name "description"
    const tagsElements = document.querySelectorAll(".tags-wrapper");

    // Reset heights to "auto" before calculating the new equal height
    tagsElements.forEach((element) => {
        element.style.height = "auto";
    });

    // Check if the viewport width is less than 991px
    if (viewportWidth > 991) {

    // Find the maximum height among all elements
    let maxHeight = 0;
    tagsElements.forEach((element) => {
        const elementHeight = element.offsetHeight;
        if (elementHeight > maxHeight) {
        maxHeight = elementHeight;
        }
    });

    // Set the height of all elements to the maximum height
    tagsElements.forEach((element) => {
        element.style.height = `${maxHeight}px`;
    });

    }

}

// Call the function initially to set equal heights
tagsEqualHeights();

// Call the function again whenever the window is resized
window.addEventListener("resize", tagsEqualHeights);

// END TAGS HEIGHT ********************************************

/****** END SET EQUAL HEIGHT ****/
</script>



<?php
// The Query
// $args = array(
//     'post_type' => 'listings',
//     'post_status' => 'publish',
//     'posts_per_page' => -1, // You can adjust the number of posts to display
// );

// $custom_query = new WP_Query($args);

// The Loop
// if ($custom_query->have_posts()) :
//     while ($custom_query->have_posts()) : $custom_query->the_post();

//         // Get the custom field value
//         $custom_field_value = get_post_meta(get_the_ID(), 'year', true);

//         // Check if the custom field has a value
//         if ($custom_field_value) {
//             // Output the custom field value
//             echo '<p>' . $custom_field_value . '</p>';
//         }

//     endwhile;

//     // Reset Post Data
//     wp_reset_postdata();

// else :
//     echo 'No posts found';

// endif;
?>
