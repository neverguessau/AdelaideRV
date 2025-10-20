<?php // Check rows exists

if( have_rows('social_media_list', 'option') ): ?>

<ul class="social-media-links">

    <?php // Loop through rows.
    while( have_rows('social_media_list', 'option') ) : the_row();

        // Load sub field value.
        $link = get_sub_field('link_url'); 
        $title = get_sub_field('link_title'); 
        $icon = get_sub_field('link_icon'); 
        ?>
        
        <li>
            <a href="<?php echo $link; ?>" 
            title="Follow us on <?php echo $title; ?>" 
            target="_blank"><?php echo $icon; ?></a>
        </li>
        
    <?php endwhile; ?>

</ul>

<?php endif; ?>