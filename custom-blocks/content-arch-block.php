<?php
$post_slug = get_post_field( 'post_name', get_post() );
?>
<style>
    section.curvy-content-wrapper.leader-caravans, section.curvy-content-wrapper.supreme-caravans, section.curvy-content-wrapper.goldstream-rv {
        display: none;
    }
</style>
<section class="curvy-content-wrapper content-arch <?php the_field('classes') ?> <?php echo esc_attr( $post_slug ); ?>">
    <div class="content-arch-container curvy-container container">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-md-9 mx-auto">
                    <?php the_field('content') ?>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end curvy container -->
</section>

<script>
  
        let circle = document.querySelector(".curvy-container");
        window.addEventListener("scroll", function(){
            let scrollValue = window.scrollY ;
            circle.style.borderTopLeftRadius = scrollValue +"px";
            circle.style.borderTopRightRadius = scrollValue +"px";
        })
    
</script>