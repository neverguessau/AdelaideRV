<?php 
    $post_id = get_field('floorplans');
    $args = array(  
    'post_type' => 'floorplan',
    'p' => $post_id,
    );

    $loop = new WP_Query( $args ); 
?>

<!-- start floorplans loop to get layouts images from the floorplans post -->
<?php if ( $loop->have_posts() ) : ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

        <?php 
        $images = get_field('floorplans_list');
        ?>

    <?php endwhile; ?>
<?php endif; wp_reset_postdata(); ?>
<!-- end floorplans loop -->


<?php if( $images ): ?>

<section class="floorplans-section-wrapper section-padding">
    <div class="container">

        <h2>FLOORPLANS</h2>

        <?php // the_field('floorplans'); ?>

        <!-- START CAROUSEL -->
        <div id="floorplans-carousel" class="owl-carousel floorplans-carousel">

      
            <?php foreach( $images as $image ): ?>
                    <!-- <li>
                        <a href="<?php echo esc_url($image['url']); ?>">
                            <img src="<?php echo esc_url($image['sizes']['floorplan-thumb']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        </a>
                        <p><?php //echo esc_html($image['caption']); ?></p>
                    </li> -->

                <div class="item">
                    <a href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['title']); ?>">
                        <img src="<?php echo esc_url($image['sizes']['floorplan-thumb']); ?>" alt="<?php echo esc_html($image['title']); ?> floorplan">
                    </a>
                </div>

            <?php endforeach; ?>


            
        </div>
         <!-- END CAROUSEL -->
    </div>
</section>

<?php endif; ?>

<script>
    jQuery(document).ready(function($){
        $('#floorplans-carousel').owlCarousel({
        
        autoplay: false,
        loop:false,
        nav:true,
        margin:0,
        dots:true,
        // stagePadding:80,
        navText : ["&lt;","&gt;"],
        responsive : {
            // breakpoint from 0 up
            0 : {
                items:2,
            },
            // breakpoint from 480 up
            768 : {
                items:3,
            },
            // breakpoint from 768 up
            991 : {
                items:3, 
            }
        }
        });



        /*** start popup ***/    

        $(".floorplans-carousel").each(function() {
            $(this).magnificPopup({
                delegate: 'a', // child items selector, by clicking on it popup will open
                type: 'image',
                gallery: {
                    enabled: true
                }
                // other options
            });
	    });

        /*** end popup ***/

    });
   
</script>