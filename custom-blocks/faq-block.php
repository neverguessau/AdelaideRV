<section class="faq-section section-padding">
    <div class="intro-wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2>FAQs</h2>
                    <p>Our FAQ section covers some of the most common questions we get about caravan servicing. Keep in mind, these are general answers and might not cover every specific situation or detail.</p>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end intro wrapper -->



    <?php if( have_rows('faq_list')): ?>
    <div class="accordion-wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                   
                
                <div class="accordion" id="accordionExample">

                    <?php $counter = 1 ;?> 
                    <?php while ( have_rows('faq_list')) : the_row(); ?>   
                    
                    <div class="accordion-item">
                        <p class="accordion-head">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $counter?>" aria-expanded="false" aria-controls="collapse<?php echo $counter?>">
                                <?php echo "Q".$counter.". "?><?php the_sub_field('question'); ?>
                            </button>
                        </p>
                        <div id="collapse<?php echo $counter?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $counter?>" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <?php the_sub_field('answer'); ?>
                            </div>
                        </div>
                    </div>
                    <?php $counter++ ;?> 
                    <?php endwhile ?>

                    <!-- <div class="accordion-item">
                        <p class="accordion-head">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Q2. What is checked at your Caravan’s first service?
                            </button>
                        </p>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        Check tyre pressures.<br>
                        Check wheel bearings and repack.<br>
                        Check brakes (including handbrake) and adjust if needed.<br>
                        Check all lights on caravan.<br>
                        Check chassis for faults.<br>
                        Check gas components and 240v components.<br>
                        Check house batteries.<br>
                        Check inside lights.<br>
                        Check Hot water System.<br>
                        Plus silicone checks and water test.
                        </div>
                        </div>
                    </div> -->

                    <!-- <div class="accordion-item">
                        <p class="accordion-head">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Q3. What is checked at your Caravan’s annual service? 
                            </button>
                        </p>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        Check tyre pressures.<br>
                        Check wheel bearings and repack.<br>
                        Check brakes (including handbrake) and adjust if needed.<br>
                        Check chassis for faults.
                        </div>
                        </div>
                    </div> -->

                    <!-- <div class="accordion-item">
                        <p class="accordion-head">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Q4. How often should I take my caravan in for a service?
                            </button>
                        </p>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        It is recommended to have your caravan serviced every 10,000km or 12 months whichever comes first.
                        </div>
                        </div>
                    </div> -->

                    <!-- <div class="accordion-item">
                        <p class="accordion-head">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Q5. What should I do if I experience issues with my caravan between services?
                            </button>
                        </p>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        If you encounter any problems with your caravan, contact our service department immediately. We can assess the issue, provide guidance, and schedule a service appointment if necessary.
                        </div>
                        </div>
                    </div> -->

                    <!-- <div class="accordion-item">
                        <p class="accordion-head">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Q6. How long does a typical caravan service take?
                            </button>
                        </p>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        The duration of a caravan service depends on the extent of the service required. On average, a standard service may take a few hours, 
                        but more extensive services or repairs could take longer. Our service team will provide you with an estimated timeframe.
                        </div>
                        </div>
                    </div> -->

                    <!-- <div class="accordion-item">
                        <p class="accordion-head">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                Q7. Is it necessary to service a new caravan?
                            </button>
                        </p>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        Yes, it is advisable to service a new caravan to maintain the manufacturer's warranty and ensure that all components are 
                        functioning correctly. Check your warranty documentation for specific requirements.
                        </div>
                        </div>
                    </div> -->

                    <!-- <div class="accordion-item">
                        <p class="accordion-head">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                Q8. How can I prepare my caravan for service?
                            </button>
                        </p>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        Before bringing in your caravan for service, empty and clean the interior, remove personal belongings, and make a note of any specific concerns or issues you've noticed. 
                        This helps our service team efficiently address your caravan's needs.
                        </div>
                        </div>
                    </div> -->

                </div><!-- end accordion -->



                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end accordion wrapper -->

    <?php endif ?>

</section>