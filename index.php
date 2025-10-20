<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Redstar Media
 */

get_header(); ?>

<section class="blog-posts-wrapper section-padding">
    
    <!-- start recent post -->
    <?php         

    $data= new WP_Query(array(
        'post_type'=>'post', // your post type name
        'posts_per_page' => 1, // post per page
        'post__in'            => get_option( 'sticky_posts' ),
        'ignore_sticky_posts' => 1,
        
    ));

    if ($data->have_posts()) :
        while($data->have_posts())  : $data->the_post();?>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="recent-post">
                        <?php
                            if ( has_post_thumbnail() ) { ?>
                            <div class="featured-img">
                                 <img src="<?php the_post_thumbnail_url('post-feature-image-md') ?>" alt="<?php the_title() ?>feature image">
                            </div>
                        <?php } ?>
                        <h1 class="post-title"><?php the_title();?></h1>
                        <?php the_content(); ?>
                    </div><!-- recent post --> 
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->

    <?php endwhile; ?>
    <?php endif; ?>  
    <?php wp_reset_postdata(); ?>

    <!-- end recent post -->




    <!-- start related posts -->

<div class="related-posts" style="display:none">
    <div class="container">
        <div class="row gy-3 justify-content-center">

            <div class="col-lg-3">
                <div class="related-posts-heading">
                    <h6>Read More</h6>
                </div>
            </div>

            <?php 
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            $data= new WP_Query(array(
            'post_type'=>'post', // your post type name
            'posts_per_page' => 6, // post per page
            'post__not_in' => get_option( 'sticky_posts' ),
            'paged' => $paged,
            ));

            if ($data->have_posts()) : ?>

            <div class="col-lg-7">
                <div class="related-posts-list-wrapper">
                    <?php  while($data->have_posts())  : $data->the_post();?>
                        <div class="post-thumbnail-wrapper">
                            <img src="<?php echo get_template_directory_uri() ?>/img/blog-card-bg-1.png" alt="<?php the_title(); ?>">
                            <div class="front-card">
                                <div class="content">
                                    <h6><?php the_title()?></h6>
                                    <a class="learn-more-btn" href="#">Learn More</a>
                                </div>
                            </div><!-- end front card -->
                        </div>
                    <?php endwhile; ?>
                </div><!-- end related posts list wrapper -->  
            </div><!-- end col -->  

            <?php endif; ?>  

            </div><!-- end row --> 
        </div><!-- end container -->

    </div><!-- end related posts -->

        
        <?php $total_pages = $data->max_num_pages;

        if ($total_pages > 1) {  echo '<div class="container"><div class="posts-pagination-container">';

            $current_page = max(1, get_query_var('paged'));

            echo paginate_links(array(
                'base' => get_pagenum_link(1) . '%_%',
                'format' => '/page/%#%',
                'current' => $current_page,
                'total' => $total_pages,
                'prev_text'    => __('« prev'),
                'next_text'    => __('next »'),
            ));

            echo '</div></div>';
        }?>

<?php wp_reset_postdata(); ?>


</section>

<?php get_footer();
