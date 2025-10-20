<?php 
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    $args = array(  
    'post_type' => 'team',
    'post_status' => 'publish',
    'orderby' => 'date', 
    'order' => 'DESC',
    'posts_per_page' => -1, 
    );

    $loop = new WP_Query( $args ); 
?>

<section class="about-us-wrapper curvy-content-wrapper">
    <div class="about-us-container curvy-container">
        <div class="container">
            <div class="row">
                <div class="col-md-9 mx-auto">
                    <h2 class="text-center">MEET OUR FOUNDERS</h2>
                    <br><br>
                    <p>Founded in 2016 by directors Jeb and Cassie, our mission is to inspire Australians to travel our
                    beautiful country, fostering family connections through unforgettable adventures.<br><br>
                    Jeb & Cassie Grose, the heartbeat of Adelaide RV. In 2007, Jeb immersed himself in the caravan industry.
                    Starting as an RV Service technician in a small workshop in Broken Hill, NSW, Jeb's journey evolved into
                    sales, travelling across this country selling Caravans with the Fleetwood Group. After nine years of honing his
                    technical craft, both in service, and sales Jeb (26) and Cassie (23) relocated to South Australia, breathing life
                    into Adelaide RV in September 2016. When the two began, Cassie was the life behind the operations, a
                    system and process whiz and built out a business model to sustain a very bright and prosperous future. The
                    two were young when they set on this mission, however, what they lacked in age they made up for in energy,
                    vision, and enthusiasm. It was very humble beginnings on Port Wakefield Road, where they resided in an old
                    written off caravan for months with every dollar going back into building their dream.<br><br>
                    The pair worked tirelessly for years on end with a clear vision –
                    To grow a dealership that would help thousands of Aussie families travel. Today, Jeb and Cassie lead
                    a dynamic team of 24 talented individuals, steering Adelaide RV towards new horizons.</p>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->



        <?php if ( $loop->have_posts() ) : ?>

            <div class="container">
                <div class="row">
                    <div class="col-md-12 mx-auto">
                        <div class="meet-our-team-container">
                            <h2 class="text-center">MEET OUR TEAM</h2>
                           
                            <div id="meet-our-team-carousel" class="owl-carousel meet-our-team-carousel">
                                  
                                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                                    <?php if (get_the_post_thumbnail_url(get_the_ID(),'full')) {
                                        $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
                                    } else {
                                        $featured_img_url = get_template_directory_uri().'/img/staff-default.png';    
                                    } ?>

                                    
                                    <div class="item">
                                        <img src="<?php echo esc_url($featured_img_url); ?>" alt="Team member thumbnail" loading="lazy">
                                        <h5 class="name"><?php the_title();?></h5>
                                        <p class="title"><?php echo esc_html( get_field('title')); ?></p>
                                        <p class="fav">Favourite Travel Destination:</p>
                                        <p class="disc"><?php echo esc_html( get_field('favourite_distination')); ?></p>

                                    </div><!-- end item -->
                                   

                                <?php endwhile; wp_reset_postdata(); ?>


                            </div><!-- end meet-our-team-carousel -->
                        </div><!-- end meet our team -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->

        <?php endif; ?>


       

    </div><!-- end curvy container -->
</section>




<!------------------------- ****************** ---------------------->


<!-- <?php 
                                        $field_value = get_field('page_subtitle');
                                        var_dump($field_value);
                                        ?> -->



<?php 


    $args2 = array(  
    'post_type' => 'team',
    'post_status' => 'publish',
    'orderby' => 'date', 
    'order' => 'DESC',
    'posts_per_page' => -1, 
    );

    $loop2 = new WP_Query( $args2 ); 
?>


<?php if ( $loop->have_posts() ) : ?>

                      
                    <?php while ( $loop2->have_posts() ) : $loop2->the_post(); ?>

                    <?php 
                                        $field_value = get_field('test', $post_id);
                                        var_dump($field_value);

                                        the_field('title');
                                        ?>


             <?php endwhile; wp_reset_postdata(); endif; ?>


<!------------------------- ****************** ---------------------->



<!---     *********************************      ---------------------->

<?php
// Your custom post loop within the ACF block
$args = array(
    'post_type' => 'team', // Replace with your actual custom post type
    'posts_per_page' => -1,
);

$custom_query = new WP_Query($args);

if ($custom_query->have_posts()) :
    while ($custom_query->have_posts()) : $custom_query->the_post();
        // Display the title of the post
        the_title('<h2>', '</h2>');

        // Display the content of the post
        the_content();

        // Display the value of the ACF field 'your_custom_field'
        $custom_field_value = get_field('favourite_distination');
    
        if ($custom_field_value) {
            echo '<p>' . esc_html($custom_field_value) . '</p>';
        } else {
            echo '<p>No value found for the field.</p>';
        }

    endwhile;
    wp_reset_postdata(); // Reset post data to avoid conflicts with the main loop
else :
    echo 'No posts found.';
endif;


echo '<p>Post ID: ' . get_the_ID() . '</p>';
$custom_field_value = get_field('your_custom_field');
echo '<p>Field Value: ' . esc_html($custom_field_value) . '</p>';
?>

<!---     *********************************      ---------------------->




<script>
  
        let circle = document.querySelector(".curvy-container");
        window.addEventListener("scroll", function(){
            let scrollValue = window.scrollY ;
            circle.style.borderTopLeftRadius = scrollValue +"px";
            circle.style.borderTopRightRadius = scrollValue +"px"
            
        })
    
</script>

<script>
    jQuery(document).ready(function($){
        $('#meet-our-team-carousel').owlCarousel({
        
        autoplay: true,
        loop:true,
        nav:true,
        margin:60,
        stagePadding:80,
        navText : ["&lt;","&gt;"],
        responsive : {
            // breakpoint from 0 up
            0 : {
                items:1,
                nav:false,
                stagePadding:0,
                dots:false,
            },
            // breakpoint from 480 up
            768 : {
                items:2,
            },
            // breakpoint from 768 up
            991 : {
                items:3, 
            }
        }
        });

        document.querySelector('.meet-our-team-carousel .owl-nav').classList.add('container');
    });

   
</script>



