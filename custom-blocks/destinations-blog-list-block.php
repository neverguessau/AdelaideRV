<?php
// Get pagination value from ACF field 
$numPerPage = 9;
if (get_field('items_per_page')) {
    $numPerPage = get_field('items_per_page'); 
  }
?>

<?php 
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    $args = array(  
    'post_type' => 'post',
    'category_name' => 'destinations',
    'post_status' => 'publish',
    'posts_per_page' => $numPerPage, 
    'orderby' => 'date', 
    'order' => 'DESC', 
    'paged' => $paged,
    );

    $loop = new WP_Query( $args ); 
?>

<section id="list" class="destinations-list section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <?php if ( $loop->have_posts() ) : ?>

                <div class="blogs-list-wrapper">

                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                    <div class="item-wrapper">
                        <a href="<?php the_permalink(); ?>">
                            <div class="thumb-wrapper">
                                <?php 
                                    $featured_img_url = "";
                                    if (get_the_post_thumbnail_url(get_the_ID(),'blog-thumb')) {
                                    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'blog-thumb'); ?>
                                        <img class="featured-img" src="<?php echo $featured_img_url ; ?>" alt="<?php the_title(); ?>">        
                                    <?php } else { ?> 
                                        <img src="<?php echo get_template_directory_uri() ?>/img/not-available-1.webp" alt="Featured Image">
                                    <?php } ?>
                                
                            </div>

                            <div class="item-info">
                                <h6 class="title"><?php the_title(); ?></h6>
                                <div class="excerpt">
                                    <?php the_excerpt() ?>
                                </div>
                            </div>

                            <p class="btn-md">Read more</p>
                        </a>
                    </div><!-- end item wrapper -->

                    <?php endwhile ?>

                </div><!-- end blog list wrapper -->

                <?php endif ?>

                <?php wp_reset_postdata(); ?>

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




            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>