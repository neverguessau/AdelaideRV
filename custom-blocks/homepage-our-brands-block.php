<section class="homepage-our-brands-wrapper">
    <!-- <div class="arch"></div>     -->
    <!-- <div class="curve-wrapper">
           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 2000 1000" width="2000" height="1000" preserveAspectRatio="xMidYMid meet" style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px); content-visibility: visible;"><defs><clipPath id="__lottie_element_6"><rect width="2000" height="1000" x="0" y="0"></rect></clipPath></defs><g clip-path="url(#__lottie_element_6)"><g transform="matrix(1,0,0,1,999.9420166015625,499.875)" opacity="1" style="display: block;"><g opacity="1" transform="matrix(1.0004299879074097,0,0,1.0001499652862549,0,0)"><path fill="rgb(242,234,215)" fill-opacity="1" d=" M999.468994140625,480.1789855957031 C999.468994140625,480.1789855957031 999.68701171875,500.0820007324219 999.68701171875,500.0820007324219 C999.68701171875,500.0820007324219 -999.510009765625,500.04998779296875 -999.510009765625,500.04998779296875 C-999.510009765625,500.04998779296875 -999.72802734375,480.1780090332031 -999.72802734375,480.1780090332031 C-999.2960205078125,60.11600112915039 -678.9819946289062,-500.07501220703125 0.4320000112056732,-500 C679.843994140625,-499.92498779296875 999.406982421875,0.125 999.468994140625,480.1789855957031z"></path></g></g></g></svg>
    </div> -->

    <div class="homepage-our-brands">
         <div class="container">

            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h2 class="homepage section-heading" data-aos="fade-up"><?php the_field('heading') ?></h2>
                    <div data-aos="fade-down"><?php the_field('subheading') ?></div>
                </div><!-- end col -->
            </div><!-- end row -->

        </div>

        <?php if( have_rows('brands_list') ) : ?>
        <div class="brands-wrapper">
            <div class="row justify-content-center g-5">
                
                <?php while( have_rows('brands_list') ): the_row(); ?>

                <div class="col-lg-3">
                    <div class="item" data-aos="fade-right">
                        <a href="<?php the_sub_field('brand_url') ?>"><img src="<?php the_sub_field('image') ?>" alt="<?php the_sub_field('brand_name') ?>">
                        <h5><?php the_sub_field('brand_name') ?></h5></a>
                    </div>
                </div>

                <?php endwhile; ?>

                <!-- <div class="col-lg-3">
                    <div class="item">
                        <a href="<?php //bloginfo('url') ?>/our-brands/leader-caravans/"><img src="<?php // echo get_template_directory_uri() ?>/img/leader-car-thumb-1.png" alt="Leader Caravans">
                        <h5>Leader Caravans</h5></a>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="item" data-aos="fade-left">
                        <a href="<?php //bloginfo('url') ?>/our-brands/goldstream-rv/"><img src="<?php // echo get_template_directory_uri() ?>/img/goldstream-car-thumb-1.png" alt="Goldstream RV">
                        <h5>Goldstream RV</h5></a>
                    </div>
                </div> -->
            </div><!-- end row -->
        </div><!-- end brands wrapper -->
            <?php endif ; ?>


            <?php 
                $link = get_field('learn_more_button');
                if ( $link ) : 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
            ?>

            <a class="btn-md" href="<?php echo esc_url( $link_url ); ?>" title="<?php echo esc_html( $link_title ); ?>" ><?php echo esc_html( $link_title ); ?></a>

        <?php endif; ?>
    </div>

    
</section>


<script>
  
        let circle = document.querySelector(".homepage-our-brands");
        window.addEventListener("scroll", function(){
            let scrollValue = window.scrollY ;
            circle.style.borderTopLeftRadius = scrollValue +"px";
            circle.style.borderTopRightRadius = scrollValue +"px"
            
        })
   
        
    
</script>