<?php if (get_the_post_thumbnail_url(get_the_ID(),'full')) {
        $featured_bg_url = get_the_post_thumbnail_url(get_the_ID(),'full');
    } else {
        $featured_bg_url = get_template_directory_uri().'/img/hero-slide-1.webp';    
    } 
?>


<section class="page-banner">
    <?php if (is_single()) { ?>
        <?php if (get_field('brand_header_image')) { ?>
            <img src="<?php the_field('brand_header_image'); ?>" alt="<?php the_title() ?>">
        <?php } else { ?>   
            <img src="<?php echo get_template_directory_uri().'/img/hero-slide-1.webp' ?>" alt="<?php the_title() ?>">
        <?php } ?>

    <?php } else { ?>
        <img src="<?php echo $featured_bg_url ?>" alt="<?php the_title() ?>">
    <?php } ?>

    <div class="content" <?php if (get_field('page_title_position')) { ?> style="top:<?php the_field('page_title_position') ?>%" <?php }  ?>>
        <h2 class="page-title" data-aos="fade-down">
            <?php
                if (get_field('page_title')) {
                    the_field('page_title');
                } else {
                    the_title();
                }
            ?>            
        </h2>


        <?php
            if (get_field('page_subtitle'))  : ?>
                 <h1 class="page-subtitle" data-aos="fade-up"><?php the_field('page_subtitle');?></h1>
            <?php endif                     
        ?> 

    </div><!-- end content -->
</section>


