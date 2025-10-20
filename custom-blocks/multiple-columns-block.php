<div class="pgg-fw-container section-padding">
        
    <div class="container<?php if (get_field('full_width')) : echo '-fluid'; endif ?>">
        <div class="row gy-4 <?php if (get_field('justify_columns')) : echo ' justify-content-center'; endif ?>">
            
            <?php if( have_rows('column') ): ?>
                <?php while( have_rows('column') ) : the_row();?>
                <div class="col-md-<?php the_field('number_of_columns'); ?>">
                    <div class="content-box" <?php if (get_field('background_color')) :?>style="background-color:<?php the_field('background_color'); ?><?php endif?>">
                        <?php the_sub_field('content');?>
                    </div>
                </div>
                <?php endwhile ?>
            <?php endif ?>

        </div>
    </div>
</div><!-- end fw container -->


<!-- <style>
    <?php //if (get_field('background_color')) :?>
        .pgg-fw-container {
            background-color:<?php //the_field('background_color'); ?>
        }
    <?php //endif ?>
</style> -->
