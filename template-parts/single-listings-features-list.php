<div class="features-wrapper">
    <h5 class="heading">Features</h5>
    <ul class="features-list">

        <!-- <li><strong>Listing Type</strong><p>For Sale</p></li> -->

        <!-- START MAKE -->
        <?php
        // Get the terms for the taxonomy 'your_taxonomy'
        $terms = get_the_terms(get_the_ID(), 'make');
        if ($terms && ! is_wp_error($terms)) :
            foreach ($terms as $term) {
                // Display the taxonomy name
                echo '<li><strong>Make</strong><p>' . $term->name . '</p></li>';
            }
        endif;
        ?>
        <!-- <li><strong>Make</strong><p>Goldstream</p></li> -->
        <!-- END MAKE -->

        <li><strong>Model</strong><p><?php the_title(); ?></p></li>

        <li><strong>Year</strong><p><?php the_field('year') ?></p></li>

        <li><strong>Rego</strong><p><?php the_field('rego') ?></p></li>

        <li><strong>Tow Ball (kg)</strong><p><?php the_field('tow_ball_weight') ?></p></li>
        <!-- <li><strong>Listing Type</strong><p>New</p></li> -->
        <!-- <li><strong>Axle Configuration</strong><p><?php //the_field('axle_configuration') ?></p></li> -->

        <li><strong>Tare (kg)</strong><p><?php the_field('tare') ?></p></li>
        
        <li><strong>ATM (kg)</strong><p><?php the_field('atm') ?></p></li> 

        <li><strong>Sleeps</strong><p><?php the_field('sleeping_capacity') ?></p></li>

        <li><strong>Toilet</strong><p><?php the_field('toilet') ?></p></li>

        <li><strong>Length (ft)</strong><p><?php the_field('length') ?></p></li>

        <li><strong>Wheels</strong><p><?php the_field('wheels') ?></p></li>

        <!-- <li><strong>Size</strong><p><?php // the_field('wheel_size') ?></p></li> -->

        <li><strong>Suspension</strong><p><?php the_field('suspension') ?></p></li>

        <li><strong>Air Conditioning</strong><p><?php the_field('air_con') ?></p></li>

        <li><strong>Fridge</strong><p><?php the_field('fridge') ?></p></li>
        <li><strong>Stereo</strong><p><?php the_field('stereo') ?></p></li>             
        <li><strong>Shower</strong><p><?php the_field('shower') ?></p></li>             
        <!-- <li><strong>Warranty</strong><p><?php // the_field('warranty') ?></p></li> -->             
        <li><strong>Brakes</strong><p>electric</p></li>
    </ul>
</div><!-- end featurs wrapper -->


<div class="call-to-action features-list">
    <div class="container">
            <a href="tel:<?php the_field('phone_number', 'option') ?>" class="btn-lg call-us-btn mobile-only">Call Now</a>


        <?php if ( have_rows('sales_contacts', 'options') ): ?>
            <?php while ( have_rows('sales_contacts', 'options') ): the_row(); ?>
                <a href="#"
                   class="btn-lg call-us-btn desktop-only"
                   data-bs-toggle="modal"
                   data-bs-target="#enquiryModal">
                    Enquire Now
                </a>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div><!-- end call-to-action -->


<!-- Enquiry Now Modal -->
<div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg"><!-- add modal-lg if you need a larger form -->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="enquiryModalLabel">Send an Enquiry</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php
                // Renders WPForms form ID 3092
                echo do_shortcode( '[wpforms id="3092"]' );
                ?>
            </div>
        </div>
    </div>
</div>
