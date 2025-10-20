<?php
    $group = get_field('our_mission');
?>

<?php if( $group ): ?>

<section class="our-mission-section">
    <div class="our-mission-container">
        <div class="container">
            <div class="row g-5 justify-content-evenly">
                
                <div class="col-xxl-4 col-xl-5 col-md-6" data-aos="fade-left">
                    <?php echo $group['left_column'] ; ?>
                    <!-- <h2>OUR PURPOSE</h2>
                    <h3>IS TO INSPIRE AND MOTIVATE PEOPLE TO TRAVEL</h3> -->
                </div><!-- end col -->

            <div class="col-xxl-4 col-xl-5 col-md-6" data-aos="fade-right">
                <?php echo $group['right_column'] ; ?>
                <!-- <h2>OUR MISSION</h2>
                <h3>IS TO HELP 10,000 PEOPLE TRAVEL AUSTRALIA BY 2030</h3> -->
            </div><!-- end col -->

            </div><!-- end row --> 
        </div><!-- end container -->
    </div><!-- end our section container-->
</section>


<?php endif; ?>