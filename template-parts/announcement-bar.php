<?php if (get_field('announcement_bar', 'option')): ?>
<div class="announcement-bar-wrapper">
    <div class="container">
        <div class="content">
            <i class="fa-solid fa-bullhorn"></i>
            <?php the_field('announcement_bar', 'option') ; ?>
        </div>
    </div>
</div><!-- end announcement bar -->
<?php endif ;?>