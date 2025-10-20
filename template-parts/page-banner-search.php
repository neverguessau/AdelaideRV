<?php if (get_the_post_thumbnail_url(get_the_ID(),'full')) {
        $featured_bg_url = get_the_post_thumbnail_url(get_the_ID(),'full');
    } else {
        $featured_bg_url = get_template_directory_uri().'/img/hero-slide-1.webp';    
    } 
?>

<section class="page-banner search">
    <img src="<?php echo get_template_directory_uri() ?>/img/hero-slide-3.webp" alt="<?php the_title() ?> page header background">
    <div class="content">
        <h2 class="page-title" data-aos="fade-down">Search</h2>
    </div><!-- end content -->
</section>



