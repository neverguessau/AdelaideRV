<section class="contact-us-shortcut-section section-padding">
   
    <!-- <div class="container">
        <div class="sub-section one" data-aos="fade">
            Over the past 7 years, Adelaide RV has grown into a household name among many. Our values and promises stand true, with
            thousands of Aussie Families currently on the road and part of our extended family. Our Founder has been recognised for his
            achievements at the highest level in the Caravan Industry, on two occasions being named the Young Achiever of the Year in SA,
            and more recently taking it out on the national stage, winning the top award for the THL Future leaders of the Year award at the
            Caravan and Camping Industries of Australia.
            <br><br>
            If you are Adventure Ready - Join Adelaide RV, where every journey is an adventure, and every adventure is a celebration of life.
        </div>
    </div>--><!-- end container -->


   
        <!-- <a class="button" href="<?php //echo esc_url( $link_url ); ?>" target="<?php //echo esc_attr( $link_target ); ?>"><?php //echo esc_html( $link_title ); ?></a> -->



   
    <div class="sub-section two section-padding">
        <div class="container">
            <h2 data-aos="fade-down"><?php the_field('heading') ?></h2>
            <h4 data-aos="fade-down" data-aos-delay="100"><?php the_field('subheading') ?></h4>


            <?php 
                $link = get_field('contact_us_button');
                if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="btn-lg inverted" data-aos="fade-down" data-aos-delay="200"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>
        </div><!-- end container -->
    </div>
</section>





