<?php 
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    $args = array(  
    'post_type' => 'listings',
    'post_status' => 'publish',
    'posts_per_page' => 10, 
    'orderby' => 'date', 
    'order' => 'DESC', 
    'paged' => $paged,
    );

    $loop = new WP_Query( $args ); 
?>

<section>
    <div class="container"><?php echo do_shortcode( '[fe_chips]' ) ?></div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
            
                <?php if ( $loop->have_posts() ) { ?>
                <div class="card-">
                    <ul class="list-group">
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <li class="list-group-item">
                                <a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a>
                            </li>
                        <?php endwhile; wp_reset_postdata(); ?>
                    </ul>
                </div><!-- end content -->
                <?php } ?>   
                
                

                <!-- start pagination  -->
                <?php $total_pages = $loop->max_num_pages;

                if ($total_pages > 1) {  echo '<div class="projects-pagination-container">';

                $current_page = max(1, get_query_var('paged'));

                echo paginate_links(array(
                    'base' => get_pagenum_link(1) . '%_%',
                    'format' => '/page/%#%',
                    'current' => $current_page,
                    'total' => $total_pages,
                    'prev_text'    => __('« prev'),
                    'next_text'    => __('next »'),
                ));

                    echo '</div>';
                } ?>

                
                <!-- end pagination -->

            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</section>


<section>
    <div class="container">
        <?php echo do_shortcode( '[fe_widget]' ) ?>
    </div>
</section>