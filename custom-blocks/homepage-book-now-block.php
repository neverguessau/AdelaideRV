<section class="homepage-book-now section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="content" data-aos="fade-up">
                   <h2><?php the_field('heading') ?></h2>
                    <?php the_field('subheading') ?>


                    <?php 
                        $link = get_field('book_now_button');
                        if ( $link ) : 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                    ?>

                        <a class="btn-lg" href="<?php echo esc_url( $link_url ); ?>" title="<?php echo esc_html( $link_title ); ?>" ><?php echo esc_html( $link_title ); ?></a> 

                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>