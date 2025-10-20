<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Redstar Media
 */

get_header();
?>

<?php if (!is_front_page()) {
    get_template_part( 'template-parts/page-banner');
} ?>


<?php get_template_part( 'template-parts/single-model-intro-arch'); ?>

<?php get_template_part( 'template-parts/single-model-main-content'); ?>

<?php get_template_part( 'template-parts/single-model-features'); ?>

<?php if (get_field('gallery')) : 
			get_template_part( 'template-parts/single-model-gallery'); 
	endif;
?>

<?php if (get_field('floorplans')) : 
			get_template_part( 'template-parts/single-model-floorplans'); 
	endif;
?>


<?php get_template_part( 'template-parts/single-model-contact-us'); ?>



<?php 
$images = get_field('project_gallery');
if( $images ): ?>
<section class="gallery-thumbs-container -section-padding">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="row gy-4">
					<?php foreach( $images as $image ): ?>
					
						<div class="col-md-4 col-6">
							<div class="card">
								<img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								<div class="card-body">
									<a class="text-primary" href="<?php echo esc_url($image['url']); ?>">Download</a>
								</div>
							</div>
						</div><!-- end col -->

					<?php endforeach; ?>
				</div><!-- end row -->
			</div><!-- end col -->
		</div><!-- end row -->
	</div><!-- end container -->
</section>
    
<?php endif; ?>


<?php get_footer();
