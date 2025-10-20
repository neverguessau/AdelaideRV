<section class="curvy-content-wrapper content-arch model-intro">
    <div class="content-arch-container curvy-container container">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-md-9 mx-auto">
                    <?php the_field('model_introduction') ?>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end curvy container -->
</section>

<?php 
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
?>

<div class="featured-image-single">
    <img class="featured" src="<?php echo $featured_img_url; ?>" alt="<?php the_title();?> Featured Image" loading="lazy">
</div>


<script>
  
        let circle = document.querySelector(".curvy-container");
        window.addEventListener("scroll", function(){
            let scrollValue = window.scrollY ;
            circle.style.borderTopLeftRadius = scrollValue +"px";
            circle.style.borderTopRightRadius = scrollValue +"px"
            
        })
    
</script>