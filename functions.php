<?php
/**
 * A Starter Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Redstar Media
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function restar_register_widget() {
	
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Column 1', 'redstar' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets here.', 'redstar' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h6 class="widget-title">',
			'after_title'   => '</h6>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Column 2', 'redstar' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add widgets here.', 'redstar' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h6 class="widget-title heading">',
			'after_title'   => '</h6>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Column 3', 'redstar' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Add widgets here.', 'redstar' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h6 class="widget-title heading">',
			'after_title'   => '</h6>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Column 4', 'redstar' ),
			'id'            => 'footer-4',
			'description'   => esc_html__( 'Add widgets here.', 'redstar' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h6 class="widget-title heading">',
			'after_title'   => '</h6>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'redstar' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'redstar' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'restar_register_widget' );


// ---------------------- My Code ----------------------------

/**
 * Enqueue scripts and styles.
 */
function a_starter_theme_scripts() {
	
	// bootstrap css
	wp_register_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '5.2.0', 'all');
	wp_enqueue_style( 'bootstrap_css' );

	// owl css
	wp_register_style( 'owl_css', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), '5.2.0', 'all');
	wp_enqueue_style( 'owl_css' );

	// magnific css
	wp_register_style( 'magnific_css', get_template_directory_uri() . '/css/magnific-popup.css', array(),  'all');
	wp_enqueue_style( 'magnific_css' );
	
	// google fonts Koulen
	wp_register_style( 'google_fonts_abeezee', 'https://fonts.googleapis.com/css2?family=ABeeZee:ital@0;1&display=swap');
	wp_enqueue_style( 'google_fonts_abeezee' );
	
	// adobe fonts
	wp_register_style( 'adobe_fonts', 'https://use.typekit.net/kcd8aen.css');
	wp_enqueue_style( 'adobe_fonts' );


	// Font Awesome
	wp_register_style( 'font_awesome', get_template_directory_uri() . '/css/font-awesome/css/all.css', false, false, 'all');
	wp_enqueue_style( 'font_awesome' );

	
	// animate css AOS
	wp_register_style( 'animate_css', get_template_directory_uri() . '/css/aos.css', false, false, 'all');
	wp_enqueue_style( 'animate_css' );

	// main styles
	wp_enqueue_style( 'a-starter-theme-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all');

	// jquery
	wp_enqueue_script( 'jquery' );


	// bootstrap js
	wp_register_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', 'jquery', false, true );
	wp_enqueue_script( 'bootstrap_js' );

	// magnific js
	wp_register_script( 'magnific_js', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', ['jquery'], 1, true );
	wp_enqueue_script( 'magnific_js' );

	// main js
	wp_register_script( 'main_js', get_template_directory_uri() . '/js/main.js', 'jquery', false, true );
	wp_enqueue_script( 'main_js' );

	// owl carousel js
	wp_register_script( 'owl_js', get_template_directory_uri() . '/js/owl.carousel.min.js', 'jquery', false, true );
	wp_enqueue_script( 'owl_js' );

	
}
add_action( 'wp_enqueue_scripts', 'a_starter_theme_scripts' );

/*** Theme Support ***/

add_theme_support( 'title-tag' );

// Menus 
function wpb_custom_new_menu() {
	register_nav_menus(
	  array(
		'main-menu' => __( 'Main Nav' ),
		'mobile-main-menu' => __( 'Mobile Nav' ),
		'footer-menu' => __( 'Footer Nav' )
	  )
	);
  }
  add_action( 'init', 'wpb_custom_new_menu' );
  

// Hide version number
function rsm_remove_version() {
	return '';
	}
add_filter('the_generator', 'rsm_remove_version');  


// Disable block widgets
//add_filter( 'use_widgets_block_editor', '__return_false' );

// Disable block editor
// add_filter('use_block_editor_for_post', '__return_false');


// Disable block editor for custom post type
function disable_gutenberg_for_custom_posts($use_block_editor, $post_type) {
    if ($post_type === 'listings' || $post_type === 'model' || $post_type === 'floorplan' || $post_type === 'post') {
        return false;
    }
    return $use_block_editor;
}
add_filter('use_block_editor_for_post_type', 'disable_gutenberg_for_custom_posts', 10, 2);


// disable comments
add_action('admin_init', function () {
    // Redirect any user trying to access comments page
    global $pagenow;
    
    if ($pagenow === 'edit-comments.php') {
        wp_safe_redirect(admin_url());
        exit;
    }

    // Remove comments metabox from dashboard
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');

    // Disable support for comments and trackbacks in post types
    foreach (get_post_types() as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
});

// Close comments on the front-end
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);

// Hide existing comments
add_filter('comments_array', '__return_empty_array', 10, 2);

// Remove comments page in menu
add_action('admin_menu', function () {
    remove_menu_page('edit-comments.php');
});

// Remove comments links from admin bar
add_action('init', function () {
    if (is_admin_bar_showing()) {
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
    }
});

// end disable comments


/*** Enable ACF options page ***/
if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Theme Global Settings',
        'menu_title'    => 'Global Settings',
        'menu_slug'     => 'theme-global-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
    
}



/*** gutenburg blocks ***/
include_once( get_stylesheet_directory() . '/custom-blocks.php' );


/**
 * Registers support for editor styles & Enqueue it.
 */
function ghub_child_setup() {
	// Add support for editor styles.
	add_theme_support( 'editor-styles' );
  
	// Enqueue editor styles.
	add_editor_style( get_template_directory_uri() . '/css/bootstrap.min.css' );
	add_editor_style( get_template_directory_uri() . '/css/style-editor.css' );
	
}
add_action( 'after_setup_theme', 'ghub_child_setup' );





// Activate TinyMCE sub & super scripts buttons

function my_mce_buttons_2( $buttons ) {	
	/**
	 * Add in a core button that's disabled by default
	 */
	$buttons[] = 'superscript';
	$buttons[] = 'subscript';

	return $buttons;
}
add_filter( 'mce_buttons_2', 'my_mce_buttons_2' );


/*** custom excerpt ***/

function my_excerpt_length($length){
	return 18;
	}
add_filter('excerpt_length', 'my_excerpt_length');


/*** remove read more [...]  ***/
function mytheme_excerpt_more( $more ) {
    return '...';
}
add_filter('excerpt_more', 'mytheme_excerpt_more');

// Adding excerpt for page
//add_post_type_support( 'page', 'excerpt' );


// Feature image
function my_theme_setup(){
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'my_theme_setup');


/*** add image sizes ***/

add_image_size( 'page-header-2x', 1920, 500, true ); //  hard crop mode
add_image_size( 'page-header-lg', 1500, 500, true ); //  hard crop mode
add_image_size( 'model-md', 700, 400, true ); //  hard crop mode
add_image_size( 'gallery-thumb', 640, 426, true ); //  hard crop mode  
add_image_size( 'floorplan-thumb', 560, 240, false ); 
add_image_size( 'blog-thumb', 572, 322, true ); //  hard crop mode  
add_image_size( 'popup', 1200, false ); //  



/*** Login logo  ***/

function my_login_logo_one() {
	?>
	<style type="text/css">
	body.login div#login h1 a {
	background-image: url(<?php echo get_template_directory_uri() . '/img/login-logo.png' ?>);
	background-size:320px;
	width:320px;
	height:180px;
	}
	</style>
	 <?php
	} add_action( 'login_enqueue_scripts', 'my_login_logo_one' );
	
	
	function change_header_url ($url) {
		  $url = get_site_url();
		  return $url;
	}
	
	add_filter('login_headerurl', 'change_header_url');
	
	
/****/

/**** Hide Dashboard Section ****/
function remove_dashboard_widget() {
    remove_meta_box('dashboard_primary', 'dashboard', 'side');
	remove_meta_box('dashboard_site_health', 'dashboard', 'normal');
	remove_meta_box('dashboard_activity', 'dashboard', 'normal');
	remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
}
add_action('wp_dashboard_setup', 'remove_dashboard_widget');
/*** End  ***/



/*** Hide Dashboard Help ***/
function remove_help_dropdown() {
    echo '<style>#contextual-help-link-wrap {display: none;}</style>';
}
add_action('admin_head', 'remove_help_dropdown');
/*** End ***/


/*** Replace Dashboard Footer Content ***/
function custom_dashboard_footer_text($text) {
    $new_text = 'Website developed by <a href="https://www.redstarmedia.com.au" target="_blank">Redstar Media</a>'; // Replace 'Your Custom Text Here' with your own text
    return $new_text;
}
add_filter('admin_footer_text', 'custom_dashboard_footer_text');
/*** End ***/


/*** Replace Dashboard Footer Version Content ***/
function custom_dashboard_footer_version_text($text) {
    global $wp_version;
    $new_text = 'Version ' . $wp_version;
    return $new_text;
}
add_filter('update_footer', 'custom_dashboard_footer_version_text', 11);
/*** End ***/


/*** Block URLs from inside form on Single Line Text and Paragraph Text form fields ***/
  
function wpf_dev_check_for_urls( $field_id, $field_submit, $form_data ) {
 
    if( strpos($field_submit, 'http') !== false || strpos($field_submit, 'www.') !== false || strpos($field_submit, '.co') !== false ) {
        wpforms()->process->errors[ $form_data[ 'id' ] ][ $field_id ] = esc_html__( 'No URLs allowed.', 'wpforms' );
        return;
    } 
     
}
   
add_action( 'wpforms_process_validate_textarea', 'wpf_dev_check_for_urls', 10, 3 );
add_action( 'wpforms_process_validate_text', 'wpf_dev_check_for_urls', 10, 3 );

/*** END ***/



/*** Start Must login ***/

// is_admin() || add_action( 'template_redirect', function() {
//     if ( ! is_user_logged_in() )
//         auth_redirect();
// });

/*** End Must login ***/


/*** Disable Show Admin Bar ***/

add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
	if (!current_user_can('administrator') && !is_admin()) {
	show_admin_bar(false);
	}
}

/*** End Disable Show Admin Bar ***/


/*** Start Enable SVG upload */

function enable_svg_upload( $upload_mimes ) {
     $upload_mimes['svg'] = 'image/svg+xml';
     $upload_mimes['svgz'] = 'image/svg+xml';
     return $upload_mimes;
 }
 add_filter( 'upload_mimes', 'enable_svg_upload', 10, 1 );

/*** End Enable SVG upload */


 /*** Hide the ACF "Edit field group" cog in metaboxes. ***/

add_action( 'acf/input/admin_head', function () { ?>
	<style>
	.postbox-header .handle-actions a{ display: none !important; }
	</style>
<?php });

/*** End Hide the ACF "Edit field group" cog in metaboxes. ***/

function custom_admin_favicon() {
    echo '<link rel="icon" type="image/svg+xml" href="' . get_template_directory_uri() . '/img/favicon.svg" />';
}
add_action('admin_head', 'custom_admin_favicon');
add_action('login_head', 'custom_admin_favicon');