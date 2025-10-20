<section class="book-now-section">

    <div class="container">

        <div class="row">
            <div class="col-xxl-11 col-xl-12 mx-auto">
                <div class="two-col-container">

                    <div class="left-col">
                        <?php if(get_field('heading')) : the_field('heading'); endif; ?><!-- INSURANCE CLAIMS -->
                        <?php if (get_field('sub_heading')) : the_field('sub_heading'); endif; ?>
                        <!-- <p>We can help with your hailstone and insurance claim repairs</p> -->
                    </div><!-- left col -->

                    <div class="right-col">
                        <a class="btn-lg" <?php if (get_field('button_url') !== "") : ?> href="<?php the_field('button_url') ?>" <?php endif; ?>>Book Now</a>
                    </div><!-- left col -->

                </div><!-- two col container -->
            </div><!-- end col -->
        </div><!-- end row --> 
       
    </div><!-- end container -->

</section>

<?php if (get_field('background')) : ?>
<style>
    .book-now-section {
        background: url(<?php echo get_template_directory_uri() ?>/img/contact-us-border-bg-3.svg) repeat-x #000 center 2px ;
    }
</style>
<?php endif; ?>