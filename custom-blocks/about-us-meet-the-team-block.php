
<section class="team-carousel-wrapper section-padding">

        <?php // Check rows exists.
        if( have_rows('members_list') ): ?>

            <div class="container">

                        <div class="meet-our-team-container">
                            <h2 class="text-center" data-aos="fade-up">MEET OUR TEAM</h2>
                           
                            <div id="meet-our-team-carousel" class="owl-carousel meet-our-team-carousel" data-aos="fade-up">

                                    <?php // Loop through rows.
                                    while( have_rows('members_list') ) : the_row(); ?>

                                      
                                    <?php if (get_sub_field('thumbnail')) {
                                        $featured_img_url = get_sub_field('thumbnail');
                                    } else {
                                        $featured_img_url = get_template_directory_uri().'/img/staff-default.webp';    
                                    } ?>

                                    
                                    <div class="item">
                                        <img src="<?php echo esc_url($featured_img_url); ?>" alt="Team member thumbnail" loading="lazy">
                                        <h5 class="name"><?php echo esc_html( get_sub_field('name')); ?></h5>
                                        <p class="title"><?php echo esc_html( get_sub_field('title')); ?></p>
                                        <p class="fav">Favourite Travel Destination:</p>
                                        <p class="disc"><?php echo esc_html( get_sub_field('favourite_destination')); ?></p>

                                    </div><!-- end item -->

                                    <?php endwhile;  ?>
                               

                            </div><!-- end meet-our-team-carousel -->
                        </div><!-- end meet our team -->

            </div><!-- end container -->

            <?php endif; ?>
</section>


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



