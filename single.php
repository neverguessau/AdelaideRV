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

<section class="single-hints-tips-wrapper section-padding">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<article class="content">
					<?php the_content(); ?>
				</article>
			</div><!-- end col -->
		</div><!-- end row -->
	</div><!-- end container -->
</section>

<?php get_template_part( 'template-parts/single-blog-more-posts' )?>

<script>
    // Get the iframe element
    var iframe = document.querySelector('.single-hints-tips-wrapper .content iframe');

    // Create a new div element
    var divElement = document.createElement('div');

    // Add the "video" class to the div
    divElement.className = 'video';

    // Insert the div before the iframe in the parent node
    iframe.parentNode.insertBefore(divElement, iframe);

    // Move the iframe into the newly created div
    divElement.appendChild(iframe);
  </script>


<?php get_footer();
