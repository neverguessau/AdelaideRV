<section class="page-banner">

    <?php if (is_front_page() || is_page( 28 ) || is_page( 32 ))  { ?>

     <video playsinline autoplay muted loop preload="none" poster="<?php echo get_template_directory_uri() ?>/img/homepage-video-cover-poster.jpg">
        <source src="<?php echo get_template_directory_uri() ?>/img/video-cover-fhd.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <?php } else { ?>

        <video playsinline autoplay muted preload="none" poster="<?php echo get_template_directory_uri() ?>/img/homepage-video-cover-poster.jpg">
        <source src="<?php echo get_template_directory_uri() ?>/img/video-cover-fhd.mp4" type="video/mp4">
        Your browser does not support the video tag.
        </video>

    <?php } ?>


    <!-- start page banner background -->
    <div class="page-banner-bg">
        <?php if (is_page(22)) { ?>
            <img src="<?php echo get_template_directory_uri() ?>/img/website-header-bg-1.jpg" alt="<?php the_title(); ?>">
        <?php } elseif (is_page(24)) { ?>
            <img src="<?php echo get_template_directory_uri() ?>/img/marketing-header-bg-1.jpg" alt="<?php the_title(); ?>">
        <?php } elseif (is_page(26)) { ?>
            <img src="<?php echo get_template_directory_uri() ?>/img/sposorship-header-bg-1.jpg" alt="<?php the_title(); ?>">
        <?php } elseif (is_page(28)) { ?>
            <img src="<?php echo get_template_directory_uri() ?>/img/packages-header-bg-1.jpg" alt="<?php the_title(); ?>">
        <?php } elseif (is_home()) { ?>
            <img src="<?php echo get_template_directory_uri() ?>/img/blog-header-bg-1.jpg" alt="<?php the_title(); ?>">
        <?php } elseif (is_page(32)) { ?>
            <img src="<?php echo get_template_directory_uri() ?>/img/contact-header-bg-1.jpg" alt="<?php the_title(); ?>">
       <?php } ?>
    </div>
    <!-- end page banner background -->

    <div class="content">
        <div class="logo-wrapper">
            <?php if (is_front_page()) { ?>
                <img src="<?php echo get_template_directory_uri() ?>/img/ace-of-clubs-logo-purple.svg" alt="<?php bloginfo( 'title' ); ?> Logo">
            <?php } else { ?>
                <img src="<?php echo get_template_directory_uri() ?>/img/ace-of-clubs-logo-white.svg" alt="<?php bloginfo( 'title' ); ?> Logo">
            <?php } ?>
        </div>

        <div class="slogan">
            <?php if (is_front_page()) { ?>
            Creating Strong Local Community Connections
            <?php } elseif (is_page(22)) { ?>
                <h1>Websites</h1>
            <?php } elseif (is_page(24)) { ?>
                <h1>Marketing & Communication</h1>
            <?php } elseif (is_home()) { ?>
                <h2>Handy Hints</h2>
            <?php } elseif (is_page(32)) { ?>
                <h1>Contact</h1>
            <?php } ?> 
        </div>
    </div><!-- end content -->
</section>

<script>
// Get the video header
const video = document.querySelector(".page-banner video");
const background = document.querySelector(".page-banner .page-banner-bg");
// Add an event listener 
video.addEventListener("ended", function() {
  // Hide the video 
  video.style.display = "none";
  background.style.opacity = 0.5;
  
});

</script>


