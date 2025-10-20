<?php 
    $default_featured_bg_url = get_template_directory_uri().'/img/hero-slide-1.webp';        
?>


<?php

if( have_rows('single_stock_item', 'option') ) : ?>
    <?php // Loop through rows.
    while( have_rows('single_stock_item', 'option') ) : the_row(); ?>

        <?php $banner_bg_url = get_sub_field('banner_background_image'); ?>
        <?php $banner_overlay = get_sub_field('banner_overlay_visibility'); ?>
        <?php $title = get_sub_field('page_title'); ?>
        <?php $subtitle = get_sub_field('page_subtitle'); ?>
        
    <?php endwhile; // first while ?>


<?php endif; // first while ?>




<section class="page-banner">
        <?php if ($banner_bg_url) { ?>
            <img src="<?php echo $banner_bg_url ?>" alt="Banner image">
            
            <?php if ($banner_overlay) { ?>
                <div class="overlay" <?php if($banner_overlay !== "" ) { ?> style="opacity:0.<?php echo $banner_overlay ?>" <?php } ?>></div> 
            <?php } else { ?>
                <div class="overlay"></div> 
            <?php } ?> 

        <?php } else { ?> 
            <img src="<?php echo $default_featured_bg_url ?>" alt="Banner image">
        <?php } ?>

    <div class="content" <?php if (get_field('page_title_position')) { ?> style="top:<?php the_field('page_title_position') ?>%" <?php }  ?>>
        
        <h2 class="page-title" data-aos="fade-down"><?php echo $title ?></h2>
        <h1 class="page-subtitle" data-aos="fade-up"><?php echo $subtitle ;?></h1>

    </div><!-- end content -->
</section>

