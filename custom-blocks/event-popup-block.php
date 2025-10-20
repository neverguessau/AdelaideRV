<?php
// The Query
$query = new WP_Query( array( 
    'category_name' => 'events', 
    'posts_per_page' => 1, 
    ) );

// The Loop
if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
        $query->the_post();
        ?>
        <a href="<?php the_permalink(); ?>">
            <?php 
            if ( has_post_thumbnail() ) {
                the_post_thumbnail( 'popup' );
            } 
            ?>
        </a>
        <?php
    }
} else {
    // no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
?>