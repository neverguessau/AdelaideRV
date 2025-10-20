<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Redstar Media
 */

?>

</div><!-- close page wrapper in opened in header -->

<footer>

<!-- start footer top -->
 <div class="footer-top-container">
	<div class="container">
		<div class="row-  gx-0 footer-top-col-wrapper">

			<?php if (is_active_sidebar('footer-1')) { ?>
				<div class="col-xxl-3- left-wrapper">
					<div class="left-col">
						<!-- <a href="<?php bloginfo( 'url' ) ?>" class="logo-footer"><img src="<?php //echo get_template_directory_uri() ?>/img/adelaide-rv-logo.svg" alt="Adelaide RV Logo"></a>
						<p>Adelaide RV is a Proud Member of
						the Caravan and Camping Industries
						Association of South Australia.</p>
						<ul class="social-media-links">
							<li>
								<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
							</li>

							<li>
								<a href="#"><i class="fa-brands fa-instagram"></i></a>
							</li>

							<li>
								<a href="#"><i class="fa-brands fa-youtube"></i></a>
							</li>
						</ul> -->
	
						<?php dynamic_sidebar('footer-1'); ?>
						<?php get_template_part('template-parts/social-media-links'); ?>
						<?php get_template_part( 'template-parts/mailchimp-form'); ?>
						
					</div><!-- end left col -->
				</div>
			<?php } ?>	

			<div class="col-xxl-9- right-wrapper">
				<div class="right-col">
					
					<?php if (is_active_sidebar('footer-2')) { ?>
						<div class="box">
							<!-- <h6 class="heading">Links</h6>
							<ul>
								<li><a>Our Brands</a></li>
								<li><a>Our Stock</a></li>
								<li><a>Contact Us</a></li>
								<li><a>Our Stock</a></li>
							</ul> -->
							<?php dynamic_sidebar('footer-2'); ?>
						</div><!-- end box -->
					<?php } ?>	


					<?php if (is_active_sidebar('footer-3')) { ?>	
						<div class="box">
							<!-- <h6 class="heading">Our Brands</h6>
							<ul>
								<li><a>Supreme Caravans</a></li>
								<li><a>Goldstream RV</a></li>
								<li><a>Leader Caravans</a></li>
							</ul> -->
							<?php dynamic_sidebar('footer-3'); ?>
						</div><!-- end box -->
					<?php } ?>	

					<?php if (is_active_sidebar('footer-4')) { ?>	
					<div class="box">
						<!-- <h6 class="heading">Our Services</h6>
						<ul>
							<li><a>Service & Maintenance</a></li>
							<li><a>Warranty Claims</a></li>
							<li><a>Insurance Repairs</a></li>
							<li><a>Book Online</a></li>
						</ul> -->
						<?php dynamic_sidebar('footer-4'); ?>
					</div><!-- end box -->
					<?php } ?>	

					<div class="box location">
						<h6 class="heading">Location</h6>
						<div class="wrapper">
							<ul>
								<strong>Sales</strong>
								<li class="icon">
									<i class="fa-solid fa-location-dot"></i>
									<a href="https://maps.app.goo.gl/YX9RNwqR9EkpjkbF8" target="_blank">674 Port Wakefield Road, Green Fields, SA 5107</a>
								</li>

								<li class="icon">
									<i class="fa-solid fa-phone"></i>
									<a href="tel:0882818889">8281 8889</a>
								</li>
								<li class="icon">
									<i class="fa-regular fa-envelope"></i>	
									<a href="mailto:sales@adelaiderv.com.au">sales@adelaiderv.com.au</a>
								</li>
							</ul>

							<ul>
								<strong>Service</strong>
								<li class="icon">
									<i class="fa-solid fa-location-dot"></i>
									<a href="https://maps.app.goo.gl/cgjARtPDz4DKhuYu6" target="_blank">127 Ryans Road, Parafield Gardens, SA 5107</a>
								</li>

								<li class="icon">
									<i class="fa-solid fa-phone"></i>
									<a href="tel:0882818889">8281 8889</a>
								</li>
								<li class="icon">
									<i class="fa-regular fa-envelope"></i>
									<a href="mailto:service@adelaiderv.com.au">service@adelaiderv.com.au</a>
								</li>
							</ul>
						</div><!-- end wrapper -->

					</div><!-- end box -->
					
				</div><!-- end right column -->
			</div>

			<?php //
				//if (is_active_sidebar('footer-1')) { ?>
					<!-- <div class="col">
						<?php //dynamic_sidebar('footer-1'); ?>
					</div> -->
				<?php //} ?>	
		</div><!-- end row -->
	</div><!-- container -->
</div> 
<!-- end footer top -->

<!-- start footer bottom -->

<div class="footer-credits">
	<div class="container">
		<div class="row gy-1">
			<div class="col-sm-6">
				<div class="copyrights">
					Adelaide RV. All rights reserved &copy; <?php echo date('Y'); ?>
				</div>
			</div><!-- col -->
			
			<div class="col-sm-6">
				<div class="credits">
				Website by <a href="https://redstarmedia.com.au" target="_blank">Redstar Media</a>
				</div>
			</div>
		</div><!-- row -->
	</div><!-- end container -->
</div>
<!-- end footer bottom -->

<a id="back-to-top-btn"><i class="fa-solid fa-chevron-up"></i></a>

</footer>


<script src="<?php echo get_template_directory_uri() ?>/js/aos.js"></script>

<script>
    AOS.init({
		once: true,
		duration: 1000
	});
</script>

<?php wp_footer(); ?>

</body>
</html>
