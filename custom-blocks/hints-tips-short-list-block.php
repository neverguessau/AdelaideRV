<?php 
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    $args = array(  
    'post_type' => 'post',
    'category_name' => 'hints-tips',
    'post_status' => 'publish',
    'posts_per_page' => -1, 
    'orderby' => 'date', 
    'order' => 'DESC', 
    'paged' => $paged,
    );

    $loop = new WP_Query( $args ); 
?>


<?php if ( $loop->have_posts() ) : ?>
<section class="hints-tips-short-list-section section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <ul class="hints-tips-list">
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                    <?php 
                        $featured_img_url = "";
                        if (get_the_post_thumbnail_url(get_the_ID(),'full')) {
                        $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'model-md');
                        } 
                    ?> 

                    <li>
                        <a href="<?php the_permalink(); ?>">
                        <div class="img-wrapper">
                            <?php if ($featured_img_url) { ?>
                                <img class="featured" src="<?php echo $featured_img_url;?>" alt="<?php the_title(); ?>" loading="lazy">
                            <?php } else { ?>
                                <img src="<?php echo get_template_directory_uri() ?>/img/not-available-1.webp" alt="featured image not available" loading="lazy">
                            <?php } ?>
                        </div>
                        <h6 class="title"><?php the_title(); ?></h6>
                        <p class="btn-md">Read More</p>
                        </a>
                    </li> 
                    <?php endwhile; ?>
                </ul>
            </div><!-- end col -->
        </div><!-- end row -->
    </div>
</section>

<?php endif; wp_reset_postdata(); ?>


<script>

// START  SET EQUAL HEIGHT

function titleEqualHeights() {
  // Get all elements with the class name "description"
  const titleElements = document.querySelectorAll(".hints-tips-short-list-section .hints-tips-list .title");


  // Reset heights to "auto" before calculating the new equal height
  titleElements.forEach((element) => {
    element.style.height = "auto";
  });

  // Find the maximum height among all elements
  let maxHeight = 0;
  titleElements.forEach((element) => {
    const elementHeight = element.offsetHeight;
    if (elementHeight > maxHeight) {
      maxHeight = elementHeight;
    }
  });

  // Set the height of all elements to the maximum height
  titleElements.forEach((element) => {
    element.style.height = `${maxHeight}px`;
  });
}

// Call the function initially to set equal heights
titleEqualHeights();

// Call the function again whenever the window is resized
window.addEventListener("resize", titleEqualHeights);

</script>