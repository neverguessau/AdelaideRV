<div 
<?php if(get_field('section_tag')) : ?>id="<?php the_field('section_tag'); ?>" <?php endif ?> class="content-container section-padding <?php if (get_field('remove_top_padding')) : echo 'remove-top-padding'; endif ?>" <?php if (get_field('background_color')) :?>style="background-color:<?php the_field('background_color'); ?><?php endif?>" data-aos="fade-in">
    <div class="container<?php if (get_field('full_width')) : echo '-fluid'; endif ?> clearfix">
            
            <div class="row justify-content-center">
                <div class="col-xl-<?php the_field('content_width'); ?>">
                    <?php the_field('content'); ?>
                </div>
            </div>
               
    </div>
</div><!-- end fw container -->





