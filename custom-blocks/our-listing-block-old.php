<?php 
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    $args = array(  
    'post_type' => 'listings',
    'post_status' => 'publish',
    'posts_per_page' => 6, 
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
                                    <a href="<?php the_permalink(); ?>" title="Go to <?php the_title(); ?>">
                                    <div class="featured">
                                        <!-- https://adelaide-rv.redstarmedia.com.au/wp-content/uploads/csv/images/1053_1.jpg -->

                                        <?php 
                                        $img_path = "https://adelaiderv.com.au/images/"; 
                                        $img_url_1 = $img_path . get_field('stock_number', get_the_ID()) . "_1.jpg";
                                        $img_url_2 = $img_path . get_field('stock_number', get_the_ID()) . "_2.jpg";
                                        $img_url_3 = $img_path . get_field('stock_number', get_the_ID()) . "_3.jpg";
                                        $img_url_4 = $img_path . get_field('stock_number', get_the_ID()) . "_4.jpg";
                                        $img_url_5 = $img_path . get_field('stock_number', get_the_ID()) . "_5.jpg";
                                        // echo $img_url;
                                        ?>

                                        <?php // check if featured image url exists
                                            $urlToCheck = $img_url_1;
                                            if (urlExists($urlToCheck)) { ?>
                                                 <img src="<?php echo $img_url_1;?>" alt="featured" loading="lazy">
                                            <?php } else { ?>
                                                <img src="<?php echo get_template_directory_uri() ?>/img/not-available-1.webp" alt="featured" loading="lazy">
                                            <?php }
                                        ?>

                                    </div><!-- end featured -->

                                    <div class="thumbnails">

                                        <?php // check if image 2 url exists
                                            $urlToCheck = $img_url_2;
                                            if (urlExists($urlToCheck)) { ?>
                                                 <img src="<?php echo $img_url_2;?>" alt="featured" loading="lazy">
                                            <?php } else { ?>
                                                <img src="<?php echo get_template_directory_uri() ?>/img/not-available-1.webp" alt="featured" loading="lazy">
                                            <?php }
                                        ?>               

                                        <?php // check if image 3 url exists
                                            $urlToCheck = $img_url_3;
                                            if (urlExists($urlToCheck)) { ?>
                                                 <img src="<?php echo $img_url_3;?>" alt="featured" loading="lazy">
                                            <?php } else { ?>
                                                <img src="<?php echo get_template_directory_uri() ?>/img/not-available-1.webp" alt="featured" loading="lazy">
                                            <?php }
                                        ?> 
                                        
                                        <?php // check if image 4 url exists
                                            $urlToCheck = $img_url_4;
                                            if (urlExists($urlToCheck)) { ?>
                                                 <img src="<?php echo $img_url_4;?>" alt="featured" loading="lazy">
                                            <?php } else { ?>
                                                <img src="<?php echo get_template_directory_uri() ?>/img/not-available-1.webp" alt="featured" loading="lazy">
                                            <?php }
                                        ?>

                                            <?php // check if image 5 url exists
                                            $urlToCheck = $img_url_5;
                                            if (urlExists($urlToCheck)) { ?>
                                                 <img src="<?php echo $img_url_5;?>" alt="featured" loading="lazy">
                                            <?php } else { ?>
                                                <img src="<?php echo get_template_directory_uri() ?>/img/not-available-1.webp" alt="featured" loading="lazy">
                                            <?php }
                                        ?>

                                        <!-- <?php// if(get_field('stock_number', get_the_ID())) { ?>
                                            <img src="<?php //echo $img_path; the_field('stock_number', get_the_ID()); ?>_2.jpg" alt="featured" loading="lazy">
                                        <?php //} else { ?>
                                            <img src="<?php //echo get_template_directory_uri() ?>/img/not-available-1.webp" alt="featured" loading="lazy">
                                        <?php //} ?> -->

                                        <!-- <img src="<?php //echo get_template_directory_uri() ?>/img/caravan-featured-image-sample-1.jpg" alt="thumbnail" loading="lazy">
                                        <img src="<?php // echo get_template_directory_uri() ?>/img/caravan-featured-image-sample-1.jpg" alt="thumbnail" loading="lazy">
                                        <img src="<?php // echo get_template_directory_uri() ?>/img/caravan-featured-image-sample-1.jpg" alt="thumbnail" loading="lazy"> -->
                                    </div><!-- end thumbs -->
                                    </a>
                                </div><!-- end item images -->


                                <?php 
                                        // Get the terms for the taxonomy 'your_taxonomy'
                                        $terms = get_the_terms(get_the_ID(), 'make'); 
                                ?>

                                <div class="item-info">
                                    <div class="title-price">
                                        <h6 class="title">
                                        <?php /* 

                                            if ($terms && !is_wp_error($terms)) :
                                                foreach ($terms as $term) {
                                                    // Display the taxonomy name
                                                    echo $term->name . ' - ';
                                                }   endif; */
                                            ?> 
                                            <?php the_title();?>
                                        </h6>
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

                                            if ($terms && !is_wp_error($terms)) :
                                                foreach ($terms as $term) {
                                                    // Display the taxonomy name
                                                    echo '<li title="Make">' . $term->name . '</li>';
                                                }
                                            endif;
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
