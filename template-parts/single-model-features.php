<section class="single-model-features-container">
    <div class="single-model-features-wrapper">
    <div class="container">

        <h2 class="title">Features</h2>

        <div class="row justify-content-center">
            <div class="col-md-12">
            <?php if( have_rows('features') ): ?>
                
                <div class="features-wrapper" data-aos="fade-up">
                    <?php while ( have_rows('features') ) : the_row(); ?>
                    <div class="single-entry">
                        <img src="<?php the_sub_field('icon') ?>" alt="Icon">
                        <?php the_sub_field('content') ?>
                    </div><!-- end single entry -->
                    <?php endwhile; ?>
                </div><!-- end features wrapper -->

            <?php endif; ?>

            <div class="notes-wrapper">
                <p>*Not available in all layouts</p>
            </div>

            <div class="btn-wrapper">
                <?php if (get_field('brochure_url')) : ?>
                    <a href="<?php the_field('brochure_url') ?>" class="btn-lg" target="_blank">View Brochure</a>
                <?php endif; ?>
                
                <?php if (get_field('v_tour')) : ?>
                    <a class="btn-lg popup-link" href="<?php the_field('v_tour')?>">Virtual Tour</a> 
                <?php endif; ?>
                <!-- <a class="test-popup-link" 
                href="https://sh.smartviewmedia.com.au/m/wnz5276/?post_id=5276&m=PZSZZbZAGuo&play=0&qs=1&brand=&search=&ts=1&help=0&wh=1&nozoom=0&dh=1&gt=1&vr=1&title=0&hl=0&hr=1">Open popup</a> -->
            </div>

            </div>
        </div><!-- end row -->
    </div><!-- end container -->
    </div>
</section>

<script>
  
        let circle2 = document.querySelector(".single-model-features-wrapper");
        window.addEventListener("scroll", function(){
            let scrollValue = window.scrollY -1500 ;
            circle2.style.borderRadius = scrollValue +"px";
            
        });

        jQuery(document).ready(function($){

            $('.popup-link').magnificPopup({
                type: 'iframe'
            // other options
            });
        });
    
</script>