<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Redstar Media
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<!-- Google tag (gtag.js) By Redstar Media --> 
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-8TJCV3Z597"></script> 
	<script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-8TJCV3Z597'); </script>
	<!-- End Google tag (gtag.js) --> 
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- start preloader -->
<div id="preloader" class="page-loader-container">
	<div class="load">
		<div class="icon-wrapper">
			<img src="<?php echo get_template_directory_uri() ?>/img/preloader-inner.png">
			<div class="outer"><img  src="<?php echo get_template_directory_uri() ?>/img/preloader-outer.png"></div>
		</div>
	</div>
</div>
<!-- end preloader -->


<!-- Start preloader -->
<script>

document.body.classList.toggle('disable-scroll');
let preLoader = document.getElementById("preloader");	

window.addEventListener('load', function() {
  // Fade out the whole document body
  //document.body.style.opacity = '0';
  document.getElementById('preloader').style.display='none';
  document.body.classList.toggle('disable-scroll');	

  setTimeout(function() {
  	document.getElementById('preloader').style.transition = 'opacity 0.3s ease-in-out';
    document.getElementById('preloader').style.opacity = '0';
  }, 3000);

  // Hide the preloader after a delay of 1 second
  setTimeout(function() {
    document.getElementById('preloader').style.display = 'none';
  }, 4000);

   // Removed the preloader after a delay of 1 second
   setTimeout(function() {
		document.body.removeChild(preLoader);
   } , 5000 );

});

</script>
<!-- End preloader -->


<?php if ( is_front_page() ) : 
	get_template_part( 'template-parts/announcement-bar' );
endif;
?>

<header>

<!-- <?php //get_template_part( 'template-parts/page-banner' ) ?> -->



	
<!-- START MAIN NAV -->
<div class="nav-bar" >
	<div class="container">

		<a href="<?php bloginfo( 'url' ) ?>" class="logo" title="<?php bloginfo( 'title' ) ?>">
			<img src="<?php echo get_template_directory_uri() ?>/img/adelaide-rv-logo-emblem.svg" 
			alt="<?php bloginfo( 'title' ) ?>">
		</a>
		
		<div class="menu-wrapper">
		
			<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'main-menu',
							'menu_class'      => 'navigation-main',
							'container_class' => 'primary-menu-container desktop',
							'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
							'fallback_cb'     => false,
						)
					);
			?>

			<div id="openSidebarMenu" class="hamburger-toggle-btn">
					<span></span><span></span><span></span>
			</div>	
			
		</div><!-- end menu wrapper -->

		<ul class="search-phone">
			<li><a id="search-btn" title="Search"><i class="fa-solid fa-magnifying-glass"></i></a></li>
			<li><a href="tel:<?php the_field('phone_number', 'option') ?>" title="Call Us"><i class="fa-solid fa-phone-flip"></i></a></li>
		</ul>

	</div><!-- end container -->
</div><!-- end nav bar -->
<!-- END MAIN NAV -->


<!-- mobile side menu -->
	<div id="myDIV" class="slide-menu-container">

		<div id="close-btn" class="close-btn">
			<span></span>
			<span></span>
		</div><!-- end close btn -->

		<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'mobile-main-menu',
					'menu_class'      => 'navigation-main-',
					'container_class' => 'primary-menu-container menu-top-menu-container',
					'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
					'fallback_cb'     => false,
				)
			);
		?>

	</div><!-- end side menu container -->
</header>

<div class="searchform-overlay">
	<div class="searchform-wrapper">
		<?php get_search_form();?>
		<a id="search-close-btn" class="close-btn"><i class="fa-solid fa-xmark"></i></a>
	</div>
</div>

<div class="slide-menu-overlay"></div>

<!-- closed in the footer -->
<div id="page-wrapper" class="page-wrapper">

