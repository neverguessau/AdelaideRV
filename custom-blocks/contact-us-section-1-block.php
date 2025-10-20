<section class="curvy-content-wrapper content-arch contact-us-section-1">
    <div class="content-arch-container curvy-container container-fluid">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="intro">
                        <?php the_field('introduction') ?>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->

            <div class="row justify-content-center g-5">

                <div class="col-xl-4 col-lg-5">
                    <div class="left-content two-col-content">
                        <?php the_field('left_column_content') ?>
                    </div>
                </div><!-- end col -->

                <div class="col-xl-4 col-lg-5">
                    <div class="right-content two-col-content">
                        <?php the_field('right_column_content') ?>
                    </div>
                </div><!-- end col -->

            </div><!-- end row -->


           

        </div><!-- end container -->
    </div><!-- end curvy container -->

   
    <div class="social-media-container">
        <div class="social-media-links-wrapper">
            <?php get_template_part('template-parts/social-media-links'); ?>
        </div>
    </div><!-- end-container -->     

</section>

<script>
  
        let circle = document.querySelector(".curvy-container");
        window.addEventListener("scroll", function(){
            let scrollValue = window.scrollY ;
            circle.style.borderTopLeftRadius = scrollValue +"px";
            circle.style.borderTopRightRadius = scrollValue +"px"
            
        })
    
</script>