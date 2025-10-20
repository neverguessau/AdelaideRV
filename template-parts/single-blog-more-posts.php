
<?php 

    // Get current post category
    $current_post = get_queried_object();

    // Get the category IDs of the current post
    $category_ids = wp_get_post_categories($current_post->ID);

    // If the current post has categories
    if ($category_ids) {
        // Create an array of category IDs
        $category_id_array = array();
        foreach ($category_ids as $cat_id) {
            $category_id_array[] = $cat_id;
        }
    }
    //****** */

    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    $args = array(  
    'post_type' => 'post',
    'post_status' => 'publish',
    'category__in' => $category_id_array,
    'post__not_in' => array($current_post->ID), // Exclude the current post
    'posts_per_page' => 4, 
    'orderby' => 'rand',
    );

    $loop = new WP_Query( $args ); 
?>


<?php if ( $loop->have_posts() ) : ?>

<section class="single-listings-item-view-more-wrapper single-post-more-posts section-bottom-padding">
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <h4 CLASS="heading">You May Also Like</h4>
                
                <div class="view-more-list-wrapper">
                    
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                    <?php 
                        $featured_img_url = "";
                        if (get_the_post_thumbnail_url(get_the_ID(),'full')) {
                        $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'model-md');
                        } 
                    ?> 

                    <div class="item-wrapper">
                        <a href="<?php the_permalink(); ?>">
                            
                            <div class="img-wrapper">
                                <?php if ($featured_img_url) { ?>
                                    <img class="featured" src="<?php echo $featured_img_url;?>" alt="<?php the_title(); ?>" loading="lazy">
                                <?php } else { ?>
                                    <img src="<?php echo get_template_directory_uri() ?>/img/not-available-1.webp" alt="featured image not available" loading="lazy">
                                <?php } ?>
                            </div>

                            <div class="title-wrapper">
                                <h6 class="title"><?php the_title(); ?></h6>
                            </div>
                            
                        </a>
                    </div><!-- end item wrapper -->

                    <?php endwhile ;?>

                </div><!-- end view more list wrapper -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>

<?php endif; ?>

<?php wp_reset_postdata(); ?>