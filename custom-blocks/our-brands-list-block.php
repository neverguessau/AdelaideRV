<section class="our-brands-list-section section-padding">
    <div class="container">

        <?php
            if( have_rows('brands_list') ):
                while( have_rows('brands_list') ) : the_row();
                // $title= get_sub_field('sub_field');
        ?>

        <div class="row justify-content-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="content">
                    <?php if(get_sub_field('brand_name')) : ?>
                    <h3><?php the_sub_field('brand_name') ?></h3>
                    <?php endif; ?>
                    <br>
                    <?php if(get_sub_field('brand_name')) : ?>
                        <?php the_sub_field('brand_description') ?>
                    <?php endif; ?>
                    <br>
                    <a class="btn-md inverted"  <?php if( get_sub_field('brand_url') ) : ?> href="<?php the_sub_field('brand_url')?>" <?php endif ?> title="More Info" >More info</a>
                </div><!-- end content -->
            </div><!-- end col -->
           
            <div class="col-lg-5" data-aos="fade-left">
                <?php if( get_sub_field('brand_image') ): ?>
                    <a <?php if( get_sub_field('brand_url') ) : ?> href="<?php the_sub_field('brand_url')?>" <?php endif ?> title="More Info" >
                        <img src="<?php the_sub_field('brand_image'); ?>" alt="<?php the_sub_field('brand_name') ?>" loading="lazy" />
                    </a>
                <?php endif; ?>
            </div><!-- end col -->
        </div><!-- end row -->

        <?php endwhile;  endif; ?>

    </div><!-- end container -->
</section>