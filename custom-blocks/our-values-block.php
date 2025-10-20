<?php 
    $group = get_field('our_values_section');
?>

<section class="our-values-section section-padding">
   <div class="container">
        <div class="row">
            <?php if ($group['featured_image']) :?>
            <div class="left-column col-lg-5 col-md-6">
                <div class="left-image">
                    <img src="<?php echo $group['featured_image']; ?>" alt="Our Values">
                </div>
            </div><!-- end col -->
            <?php endif?>

            <div class="col-lg-6 col-md-6">
                <div class="right-content ">

                    <?php if ($group) : echo $group['content']; endif ?>
                    <!-- <h4>OUR BRAND VALUES : OUR PROMISE TO YOU</h4>
                    <br>

                    <div data-aos="fade-right">
                        <h4>Enthusiastic</h4>
                        <p>We share your excitement, offering support and understanding for fun
                        and adventure from the moment we meet.</p>
                    </div>
                

                    <br>
                    <div data-aos="fade-right" data-aos-delay="300">
                        <h4>Personable</h4>    
                        <p>Friendly, polite, and knowledgeable, we prioritise quality, safety, and
                        comfort, building long-term relationships with warm and memorable
                        interactions.</p>
                    </div>

                    <br>
                    <div data-aos="fade-right" data-aos-delay="300">
                        <h4>Adventurous</h4>
                        <p>Adventure is at our core. We inspire affordable holidays in comfort
                        and style, reconnecting to fun and adventure in this beautiful land.</p>
                    </div> -->

                </div>
            </div><!-- end col -->

        </div><!-- end row -->    
   </div><!-- end container -->
</section>

