<section class="homepage-selection-container">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <?php if( have_rows('links_list') ): ?>
                            <ul>
                                <?php while( have_rows('links_list') ): the_row(); ?>
                                    <li>
                                        <a class="btn btn-primary" href="<?php the_sub_field('button_url'); ?>"><?php the_sub_field('button_name'); ?></a>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div><!-- end content -->
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</section>

