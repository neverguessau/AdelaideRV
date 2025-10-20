<section class="curvy-content-wrapper content-arch model-intro">
    <div class="content-arch-container curvy-container container">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-md-9 mx-auto">
                    <div style="text-align:center">
                    Adelaide RV is a prominent dealership exclusively stocking new caravans from esteemed Australian brands Supreme Caravans, 
                    Leader Caravans, and Goldstream RV. 
                    <br><br>
                    Our inventory also features a comprehensive range of high-quality used caravans, providing options for every type of adventurer. Dedicated to catering to a wide audience, from those purchasing their first caravan to seasoned travelers, Adelaide RV is committed to offering a diverse and exceptional selection.
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end curvy container -->
</section>

<?php 
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
?>

<!-- <div class="featured-image-single">
    <img class="featured" src="<?php //echo $featured_img_url; ?>" alt="<?php the_title();?> Featured Image" loading="lazy">
</div> -->


<script>
  
        let circle = document.querySelector(".curvy-container");
        window.addEventListener("scroll", function(){
            let scrollValue = window.scrollY ;
            circle.style.borderTopLeftRadius = scrollValue +"px";
            circle.style.borderTopRightRadius = scrollValue +"px"
            
        })
    
</script>