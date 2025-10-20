<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Redstar Media
 */

get_header(); ?>

<?php  get_template_part( 'template-parts/page-banner-search'); ?>


<?php 
		// Set the number of search results to display per page
		$search_results_per_page = 6;

		// Calculate the total number of search results and the number of pages
		$total_results = $wp_query->found_posts;
		$total_pages = ceil($total_results / $search_results_per_page);

		// Get the current page number
		$current_page = max(1, get_query_var('paged'));

		// Set up the pagination arguments
		$pagination_args = array(
			'base' => str_replace(999999999, '%#%' , esc_url(get_pagenum_link(999999999))) ,
			'format' => '?paged=%#%',
			'total' => $total_pages,
			'current' => $current_page,
			'prev_text' => __('Prev'),
			'next_text' => __('Next'),
			'type' => 'array',
		);
?>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-8">

			<div class="section-padding">

				<?php
				if ( have_posts() ) { ?>

				<div class="search-page-header">
					<h4>
						<?php
							/* translators: %s: search query. */
							printf( esc_html__( 'Search results for: %s', 'a-starter-theme' ), '<span>' . get_search_query() . '</span>' );
						?>
					</h4>
				</div><!-- .page-header -->


				<?php while ( have_posts() ) {
					the_post();

					$excerpt = get_the_excerpt();
					$excerpt = substr($excerpt, 0, 200);
					$result = substr($excerpt, 0, strrpos($excerpt, ' '));
					
					?>

						<article id="list" class="card search-results-item-wrapper">
							<div class="card-body">
								<a href="<?php the_permalink(); ?>">
									<h5><?php the_title(); ?></h5>
								</a>
								<?php if ($result) { ?>
								<p><?php echo $result; ?> ... </p>
								<?php } ?>
							</div>	
						</article>


					<?php $excerpt = '';

					
				}

				// Output the pagination links as page numbers
				if ( $total_pages > 1 ) {
					echo '<div class="container"><div class="posts-pagination-container pagination-container">';


					foreach ( paginate_links($pagination_args) as $page_link ) {
						echo  $page_link ;
					}

					echo '</div></div>';
				}

			} else { ?>
				<div class="search-page-header">
					<h4>
						Sorry, we could't find what you looking for.
					</h4>
					<p>Try somthing else</p>
				</div><!-- .page-header -->

			<?php } ?>


			</div><!-- end section -->
		</div><!-- end col -->
	</div><!-- end row -->
</div><!-- end container -->

<?php get_footer(); ?>
