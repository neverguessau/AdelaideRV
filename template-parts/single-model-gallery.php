
<style>
    .single-model-features-container {
	background: linear-gradient( #fff 50%, #577b59 50%);
}
</style>


<?php 
        $images = get_field('gallery');
?>
<section class="single-model-gallery-wrapper section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <?php if( $images ): ?>
                    <ul class="gallery-list">
                    <?php foreach( $images as $image ): ?>
                            <li>
                                <a href="<?php echo esc_url($image['url']); ?>">
                                    <img src="<?php echo esc_url($image['sizes']['gallery-thumb']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                </a>
                            </li> 
                    <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>

<script>
    jQuery(document).ready(function($){
            /*** start popup ***/    

        $(".gallery-list").each(function() {
            $(this).magnificPopup({
                delegate: 'a', // child items selector, by clicking on it popup will open
                type: 'image',
                gallery: {
                    enabled: true
                }
                // other options
            });
	    });

        /*** end popup ***/

    });
   
</script>