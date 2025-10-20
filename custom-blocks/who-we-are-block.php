<section class="who-we-are section-padding">
    <div class="container">
         <div class="row gy-5">

            <?php if( have_rows('list') ) : ?>
                <?php while( have_rows('list') ): the_row(); ?>

            <div class="col-lg-3 col-md-6">
                <div class="box" data-aos="fade-right">
                    <img src="<?php the_sub_field('icon') ?>" alt="<?php the_sub_field('heading') ?>">
                    <div class="content">
                        <strong><?php the_sub_field('heading') ?></strong>
                        <p><?php the_sub_field('subheading') ?></p>
                    </div>
                </div>
            </div>

                <?php endwhile ?>
            <?php endif ?>

            <!-- <div class="col-lg-3 col-md-6">
                <div class="box" data-aos="fade-right" data-aos-delay="300">
                    <img src="<?php //echo get_template_directory_uri() ?>/img/responsibility-icon.svg" alt="We are Passionate">
                    <div class="content">
                        <strong>We are Responsible</strong>
                        <p>We own our attitude and are adaptable in our actions</p>
                    </div>  
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="box" data-aos="fade-right" data-aos-delay="600">
                    <img src="<?php //echo get_template_directory_uri() ?>/img/trust-icon.svg" alt="We are Passionate">
                    <div class="content">
                        <strong>We are Trusted</strong>
                        <p>Consistency and integrity in every interaction</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="box" data-aos="fade-right" data-aos-delay="900">
                    <img src="<?php //echo get_template_directory_uri() ?>/img/team-icon.svg" alt="We are Passionate">
                    <div class="content">
                        <strong>We are a Team</strong>
                        <p>Coming together through action and accountability</p>
                    </div>
                </div>
            </div> -->



        </div><!-- end row -->
    </div>
</section>