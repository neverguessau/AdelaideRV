<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Redstar Media
 */

get_header(); ?>


<?php if (!is_front_page()) {
    get_template_part( 'template-parts/page-banner');
} ?>

<main class="page-blocks-wrapper">
    <?php the_content(); ?>
</main>



<?php get_footer(); ?>




