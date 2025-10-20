<?php if( have_rows('features_icon_list',  get_the_ID() ) ): ?>
    <div class="features-icons-list-wrapper">
        <ul class="icons-list">
            <?php while( have_rows('features_icon_list',  get_the_ID()) ): the_row(); ?>

                <?php if (get_sub_field('sleeps_up_to')) : ?>
                    <li>
                        <img src="<?php echo get_template_directory_uri() ?>/img/bed-icon-2.svg" alt="Feature icon">
                        <p>Up to <?php the_sub_field('sleeps_up_to');?></p>
                    </li>
                <?php endif; ?>


                <?php if (get_sub_field('toilet') === true) : ?>
                    <li>
                        <img src="<?php echo get_template_directory_uri() ?>/img/toilet-icon-1.svg" alt="Feature icon">
                        <p>Toilet</p>
                    </li>
                <?php endif; ?>

                <?php if (get_sub_field('laundry') === true) : ?>
                    <li>
                        <img src="<?php echo get_template_directory_uri() ?>/img/laundry-icon-1.svg" alt="Feature icon">
                        <p>Laundry</p>
                    </li>
                <?php endif; ?>

                <?php if (get_sub_field('shower') === true) : ?>
                    <li>
                        <img src="<?php echo get_template_directory_uri() ?>/img/shower-icon-1.svg" alt="Feature icon">
                        <p>Shower</p>
                    </li>
                <?php endif; ?>

                <?php if (get_sub_field('garage') === true) : ?>
                    <li>
                        <img src="<?php echo get_template_directory_uri() ?>/img/garage-icon-1.svg" alt="Feature icon">
                        <p>Garage</p>
                    </li>
                <?php endif; ?>

                <?php // if (get_sub_field('battery') === true) : ?>
                    <!-- <li>
                        <img src="<?php //echo get_template_directory_uri() ?>/img/battery-icon-1.svg" alt="Feature icon">
                        <p>REDARC<br>manager</p>
                    </li> -->
                <?php // endif; ?>

                <!-- START ROAD TYPE -->
                <?php if (get_sub_field('road_type')) : ?>
                    <?php if (get_sub_field('road_type') == "Off-road") { ?>
                        <li>
                            <img src="<?php echo get_template_directory_uri() ?>/img/off-road-icon-1.svg" alt="Feature icon">
                            <p>Off-road</p>
                        </li>
                    <?php } elseif  (get_sub_field('road_type') == "Semi Off-road") { ?>
                        <li>
                            <img src="<?php echo get_template_directory_uri() ?>/img/semi-off-road-icon-1.svg" alt="Feature icon">
                            <p>Semi Off-road</p>
                        </li>
                    <?php } elseif  (get_sub_field('road_type') == "Touring") { ?>
                        <li>
                            <img src="<?php echo get_template_directory_uri() ?>/img/touring-icon-1.svg" alt="Feature icon">
                            <p>Touring</p>
                        </li>
                    <?php } ?>
                <?php endif;?>
                <!-- END ROAD TYPE -->

               <!-- START BATTERY TYPE -->
               <?php if (get_sub_field('battery_type')) : ?>
                    <?php if (get_sub_field('battery_type') == "REDARC<br>Manager 30") { ?>
                        <li>
                            <img src="<?php echo get_template_directory_uri() ?>/img/battery-icon-1.svg" alt="Feature icon">
                            <p><?php the_sub_field('battery_type') ?></p>
                        </li>
                    <?php } elseif   (get_sub_field('battery_type') == "Lithium Battery") { ?>
                        <li>
                            <img src="<?php echo get_template_directory_uri() ?>/img/battery-icon-1.svg" alt="Feature icon">
                            <p><?php the_sub_field('battery_type') ?></p>
                        </li>
                <?php } endif ?>
                <!-- END BATTERY TYPE -->

      

                <?php if (get_sub_field('layout')) : ?>
                    <li>
                        <img src="<?php echo get_template_directory_uri() ?>/img/layout-icon-1.svg" alt="Feature icon">
                        <p><?php the_sub_field('layout'); ?></p>
                    </li>
                <?php endif; ?>

        <?php endwhile; ?>
    </ul>
</div><!-- end wrapper -->

<?php endif; ?>