<section class="single-model-contact-us-wrapper section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="intro" data-aos="fade-down">
                    <h2>Explore the luxury of the <?php the_title(); ?> – where sophistication meets adventure.</h2>
                    <p>Our sales team is here to help.</p>
                </div>
                
                <ul class="contact-us" data-aos="fade-up">
                    <li>
                    <img src="<?php echo get_template_directory_uri() ?>/img/phone-icon-1.svg" alt="call us">
                        <a class="btn-lg inverted" href="tel:<?php the_field('phone_number', 'option') ?>">Call us</a>
                    </li>

                    <li>
                        <img src="<?php echo get_template_directory_uri() ?>/img/chat-icon-1.svg" alt="message us">
                        <a class="btn-lg inverted" href="<?php bloginfo('url');?>/contact-us#contact-form">Message Us</a>
                    </li>
                </ul>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>