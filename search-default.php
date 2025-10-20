<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>

<main id="site-content" role="main">

	<?php if ( have_posts() ) : ?>

		<header class="page-header">
			<h1 class="page-title"><?php
			printf(
				/* translators: %s: search query. */
				esc_html__( 'Search Results for: %s', 'twentytwentyone' ),
				'<span>' . get_search_query() . '</span>'
			);
			?></h1>
		</header><!-- .page-header -->

		<?php
		// Start the Loop.
		while ( have_posts() ) :
			the_post();
			?>

			<article <?php post_class(); ?>>

				<header class="entry-header">
					<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php
					// Get the excerpt and highlight the search term.
					$search_term = get_search_query();
					$excerpt = get_the_excerpt();
					$highlighted_excerpt = str_replace( $search_term, '<strong>' . $search_term . '</strong>', $excerpt );
					echo wp_trim_words( $highlighted_excerpt, 25 );
					?>
				</div><!-- .entry-content -->

			</article><!-- #post-<?php the_ID(); ?> -->

			<?php
		endwhile;
		?>

		<?php
		// Previous/next page navigation.
		the_posts_pagination(
			array(
				'prev_text'          => __( 'Previous page', 'twentytwentyone' ),
				'next_text'          => __( 'Next page', 'twentytwentyone' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentytwentyone' ) . ' </span>',
			)
		);

	// If no content, include the "No posts found" template.
	else :
		get_template_part( 'template-parts/content/content-none' );

	endif;
	?>

</main><!-- #site-content -->

<?php get_footer(); ?>
