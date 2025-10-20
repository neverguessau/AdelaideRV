<?php 

if (function_exists('acf_register_block_type')){
    add_action( 'acf/init', 'register_acf_blocks_types' );
}

function register_acf_blocks_types() {

    acf_register_block_type(
        array (
            'name' => 'content-container',
            'title' => __('Redstar Content Container'),
            'description' => __('Content container'),
            'render_template' => '/custom-blocks/content-container-block.php',
            'icon' => 'button',
            'keywords' => array ('redstar', 'container'),
        )
    );

    acf_register_block_type(
        array (
            'name' => 'multiple-columns',
            'title' => __('Redstar Multiple Columns'),
            'description' => __('Content container with multiple columns'),
            'render_template' => '/custom-blocks/multiple-columns-block.php',
            'icon' => 'columns',
            'keywords' => array ('redstar', 'multiple', 'columns', 'container'),
        )
    );

    acf_register_block_type(
        array (
            'name' => 'homepage-hero',
            'title' => __('Homepage Hero'),
            'description' => __('Homepage hero section'),
            'render_template' => '/custom-blocks/homepage-hero-block.php',
            'icon' => 'superhero-alt',
            'keywords' => array ('redstar', 'homepage', 'hero', 'section'),
        )
    );

    acf_register_block_type(
        array (
            'name' => 'homepage-our-brands',
            'title' => __('Homepage Our Brands'),
            'description' => __('Homepage our brands section'),
            'render_template' => '/custom-blocks/homepage-our-brands-block.php',
            'icon' => 'editor-table',
            'keywords' => array ('redstar', 'homepage', 'our', 'brands', 'section'),
        )
    );

    acf_register_block_type(
        array (
            'name' => 'homepage-book-now',
            'title' => __('Homepage Book Now'),
            'description' => __('Homepage book now section'),
            'render_template' => '/custom-blocks/homepage-book-now-block.php',
            'icon' => 'editor-table',
            'keywords' => array ('redstar', 'homepage', 'book', 'now', 'section'),
        )
    );

    acf_register_block_type(
        array (
            'name' => 'homepage-about',
            'title' => __('Homepage - About Section'),
            'description' => __('About us'),
            'render_template' => '/custom-blocks/homepage-about-block.php',
            'icon' => 'editor-table',
            'keywords' => array ('redstar', 'about', 'homepage'),
        )
    );

    acf_register_block_type(
        array (
            'name' => 'testimonials',
            'title' => __('Testimonials'),
            'description' => __('Testimonials'),
            'render_template' => '/custom-blocks/testimonials-block.php',
            'icon' => 'editor-quote',
            'keywords' => array ('redstar', 'testimonials'),
        )
    );

    acf_register_block_type(
        array (
            'name' => 'contact-info',
            'title' => __('Contacts'),
            'description' => __('Contacts'),
            'render_template' => '/custom-blocks/contacts-block.php',
            'icon' => 'info-outline',
            'keywords' => array ('redstar', 'contacts'),
        )
    );

    acf_register_block_type(
        array (
            'name' => 'our-stock',
            'title' => __('Our Stock List'),
            'description' => __('Our stock list'),
            'render_template' => '/custom-blocks/our-stock-list-block.php',
            'icon' => 'editor-ul',
            'keywords' => array ('redstar', 'our', 'stock', 'list'),
        )
    );

    acf_register_block_type(
        array (
            'name' => 'social-media-links',
            'title' => __('Social Media Links'),
            'description' => __('Social media links'),
            'render_template' => '/custom-blocks/social-media-links-block.php',
            'icon' => 'share',
            'keywords' => array ('redstar', 'social', 'media', 'link', 'list'),
        )
    );

    acf_register_block_type(
        array (
            'name' => 'classic-text-editor',
            'title' => __('Classic Text Editor'),
            'description' => __('Classic text editor'),
            'render_template' => '/custom-blocks/classic-text-editor-block.php',
            'icon' => 'editor-paste-text',
            'keywords' => array ('redstar', 'classic', 'text', 'editor'),
        )
    );

    acf_register_block_type(
        array (
            'name' => 'homepage-card',
            'title' => __('Homepage Card'),
            'description' => __('Homepage card'),
            'render_template' => '/custom-blocks/homepage-card-block.php',
            'icon' => 'button',
            'keywords' => array ('redstar', 'homepage', 'card'),
        )
    );

    acf_register_block_type(
        array (
            'name' => 'meet-the-founder',
            'title' => __('Meet The Founder'),
            'description' => __('Meet the founder'),
            'render_template' => '/custom-blocks/meet-the-founder-block.php',
            'icon' => 'editor-table',
            'keywords' => array ('redstar', 'meet', 'the', 'founder'),
        )
    );

    acf_register_block_type(
        array (
            'name' => 'about-us',
            'title' => __('About Us & Meet the Team'),
            'description' => __('About us & meet the team'),
            'render_template' => '/custom-blocks/about-us-meet-the-team-block.php',
            'icon' => 'editor-table',
            'keywords' => array ('redstar', 'about', 'us', 'meet', 'the', 'team'),
        )
    );

    acf_register_block_type(
        array (
            'name' => 'our-values',
            'title' => __('Our Values'),
            'description' => __('Our values'),
            'render_template' => '/custom-blocks/our-values-block.php',
            'icon' => 'editor-table',
            'keywords' => array ('redstar', 'our', 'values'),
        )
    );

    acf_register_block_type(
        array (
            'name' => 'who-we-are',
            'title' => __('Who we are'),
            'description' => __('Who we are'),
            'render_template' => '/custom-blocks/who-we-are-block.php',
            'icon' => 'editor-table',
            'keywords' => array ('redstar', 'who', 'we', 'are'),
        )
    );

    acf_register_block_type(
        array (
            'name' => 'our-mission',
            'title' => __('Our Mission'),
            'description' => __('Our Mission'),
            'render_template' => '/custom-blocks/our-mission-block.php',
            'icon' => 'editor-table',
            'keywords' => array ('redstar', 'our', 'mission'),
        )
    );

    acf_register_block_type(
        array (
            'name' => 'contact-us-shortcut',
            'title' => __('Contact us Shortcut'),
            'description' => __('Contact us shortcut'),
            'render_template' => '/custom-blocks/contact-us-shortcut-block.php',
            'icon' => 'editor-table',
            'keywords' => array ('redstar', 'contact', 'us', 'shortcut'),
        )
    );

    acf_register_block_type(
        array (
            'name' => 'content-arch',
            'title' => __('Content Arch Container'),
            'description' => __('Content arch container'),
            'render_template' => '/custom-blocks/content-arch-block.php',
            'icon' => 'editor-table',
            'keywords' => array ('redstar', 'content', 'arch', 'container'),
        )
    );

    acf_register_block_type(
        array (
            'name' => 'our-listing',
            'title' => __('Our Listing'),
            'description' => __('Our listing'),
            'render_template' => '/custom-blocks/our-listing-block.php',
            'icon' => 'editor-table',
            'keywords' => array ('redstar', 'our', 'listing', 'stock'),
        )
    );

    acf_register_block_type(
        array (
            'name' => 'servicing-1',
            'title' => __('Servicing Section 1'),
            'description' => __('Servicing section 1'),
            'render_template' => '/custom-blocks/servicing-section-1-block.php',
            'icon' => 'editor-table',
            'keywords' => array ('redstar', 'servicing', 'section', '1'),
        )
    );

    acf_register_block_type(
        array (
            'name' => 'servicing-2',
            'title' => __('Servicing Section 2'),
            'description' => __('Servicing section 2'),
            'render_template' => '/custom-blocks/servicing-section-2-block.php',
            'icon' => 'editor-table',
            'keywords' => array ('redstar', 'servicing', 'section', '2'),
        )
    );

    acf_register_block_type(
        array (
            'name' => 'book-now',
            'title' => __('Book Now'),
            'description' => __('Book now'),
            'render_template' => '/custom-blocks/book-now-block.php',
            'icon' => 'editor-table',
            'keywords' => array ('redstar', 'book', 'now'),
        )
    );

    acf_register_block_type(
        array (
            'name' => 'faq',
            'title' => __('FAQ Section'),
            'description' => __('Faq section'),
            'render_template' => '/custom-blocks/faq-block.php',
            'icon' => 'info-outline',
            'keywords' => array ('redstar', 'faq', 'section'),
        )
    );

    acf_register_block_type(
        array (
            'name' => 'contact-us-1',
            'title' => __('Contact Us Section 1'),
            'description' => __('Contact us section'),
            'render_template' => '/custom-blocks/contact-us-section-1-block.php',
            'icon' => 'editor-table',
            'keywords' => array ('redstar', 'contact', 'us', '1', 'section'),
        )
    );

    acf_register_block_type(
        array (
            'name' => 'contact-us-2',
            'title' => __('Contact Us Section 2'),
            'description' => __('Contact us section'),
            'render_template' => '/custom-blocks/contact-us-section-2-block.php',
            'icon' => 'editor-table',
            'keywords' => array ('redstar', 'contact', 'us', '2', 'section'),
        )
    );

    acf_register_block_type(
        array (
            'name' => 'contact-form-1',
            'title' => __('Contact Form'),
            'description' => __('Contact form'),
            'render_template' => '/custom-blocks/contact-form-block.php',
            'icon' => 'editor-table',
            'keywords' => array ('redstar', 'contact', 'form', 'section'),
        )
    );

    acf_register_block_type(
        array (
            'name' => 'contact-form-2',
            'title' => __('Servicing Contact Form'),
            'description' => __('Servicing Contact form'),
            'render_template' => '/custom-blocks/servicing-contact-form-block.php',
            'icon' => 'editor-table',
            'keywords' => array ('redstar', 'servicing', 'contact', 'form', 'section'),
        )
    );

    acf_register_block_type(
        array (
            'name' => 'our-brands-list',
            'title' => __('Our Brands List'),
            'description' => __('Our brands list'),
            'render_template' => '/custom-blocks/our-brands-list-block.php',
            'icon' => 'editor-table',
            'keywords' => array ('redstar', 'our', 'brands', 'section'),
        )
    );

    acf_register_block_type(
        array (
            'name' => 'models-list',
            'title' => __('Models List'),
            'description' => __('Models list'),
            'render_template' => '/custom-blocks/models-list-block.php',
            'icon' => 'editor-ul',
            'keywords' => array ('redstar', 'models', 'list', 'section'),
        )
    );

    acf_register_block_type(
        array (
            'name' => 'hints-tips-short-list',
            'title' => __('Hints & Tips Short List'),
            'description' => __('Hints and tips short list'),
            'render_template' => '/custom-blocks/hints-tips-short-list-block.php',
            'icon' => 'editor-ul',
            'keywords' => array ('redstar', 'hints', 'tips', 'short', 'list', 'section'),
        )
    );
    
    acf_register_block_type(
        array (
            'name' => 'weight-calculator-shortcut',
            'title' => __('Weight Calculator Shortcut'),
            'description' => __('Weight calculator shortcut'),
            'render_template' => '/custom-blocks/weight-calculator-shortcut-block.php',
            'icon' => 'calculator',
            'keywords' => array ('redstar', 'weight', 'calculator', 'shortcut', 'section'),
        )
    );

    acf_register_block_type(
        array (
            'name' => 'weight-calculator-form',
            'title' => __('Weight Calculator Form'),
            'description' => __('Weight calculator form'),
            'render_template' => '/custom-blocks/weight-calculator-form-block.php',
            'icon' => 'forms',
            'keywords' => array ('redstar', 'weight', 'calculator', 'form', 'section'),
        )
    );

    acf_register_block_type(
        array (
            'name' => 'newsletter-subscription-form',
            'title' => __('Newsletter Subscription Form'),
            'description' => __('Newsletter subscription form'),
            'render_template' => '/custom-blocks/newsletter-subscription-form-block.php',
            'icon' => 'forms',
            'keywords' => array ('redstar', 'newsletter', 'subscription', 'form', 'section'),
        )
    );

    acf_register_block_type(
        array (
            'name' => 'events-list',
            'title' => __('Events List'),
            'description' => __('Events list'),
            'render_template' => '/custom-blocks/events-list-block.php',
            'icon' => 'editor-ul',
            'keywords' => array ('redstar', 'events', 'list', 'section'),
        )
    );

    acf_register_block_type(
        array (
            'name' => 'destinations-blog-list',
            'title' => __('Destinations Blog List'),
            'description' => __('Destinations blog list'),
            'render_template' => '/custom-blocks/destinations-blog-list-block.php',
            'icon' => 'editor-ul',
            'keywords' => array ('redstar', 'destinations', 'blog', 'list', 'section'),
        )
    );

    acf_register_block_type(
        array (
            'name' => 'event-popup',
            'title' => __('Event Popup'),
            'description' => __('Event popup block to display recent post from events category'),
            'render_template' => '/custom-blocks/event-popup-block.php',
            'icon' => 'editor-ul',
            'keywords' => array ('redstar', 'event', 'popup'),
        )
    );

    
}
