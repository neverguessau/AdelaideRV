<?php 

    $term_id =  get_field('brand_selection');

    $args = array(  
    'post_type' => 'model',
    'post_status' => 'publish',


    'tax_query' => array(
        array(
            'taxonomy' => 'brand', // Your custom taxonomy
            'field' => 'term_id',
            'terms' => $term_id,
        ),
    ),

    'orderby' => 'date', 
    'order' => 'DESC', 
    'posts_per_page' => -1, 
    );

    $loop = new WP_Query( $args ); 
?>

<?php // Loop Start
if ( $loop->have_posts() ) : ?>

<section id="list" class="models-list-section section-padding">
    <div class="container">
        <div class="row g-5">

       
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

            <div class="col-lg-6 item-col" data-aos="fade-up" data-aos-delay="300">
                <div class="item-wrapper">

                    <?php 
                        $featured_img_url = "";
                        if (get_the_post_thumbnail_url(get_the_ID(),'full')) {
                        $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'model-md');
                    } ?>

                    <a href="<?php the_permalink(); ?>">
                        <img class="featured" src="<?php echo $featured_img_url; ?>" alt="<?php the_title();?> Featured Image" loading="lazy">
                    </a>
                    <div class="title">
                        <a href="<?php the_permalink(); ?>"><h3><?php the_title();?></h3></a>
                    </div>

                    <?php get_template_part( 'template-parts/features-icons-list'); ?>

                    <div class="content">
                        <?php the_field('short_description', get_the_ID());?>
                    </div>

                    <a class="btn-md inverted"  href="<?php the_permalink();?>">More info</a>
                </div><!-- end item wrapper -->
            </div><!-- end col -->

            <?php endwhile; wp_reset_postdata(); ?>
        </div><!-- end row -->
    </div><!-- end container -->
</section>

<?php  endif; ?>
