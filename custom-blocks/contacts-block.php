<section class="homepage-contact">
    
      <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12">
                <div class="left-col section-padding">
                    <div class="content">
                        
                        <?php 
                        
                        $group = get_field('homepage_contacts'); 
                        
                        // Get Sales contacts values
                        $sales_group = get_field('sales_contacts', 'option');
                        $sales_address_group = $sales_group['address'];
                        // var_dump($sales_address_group);
                        
                        ?>

                        <?php echo $group['heading']  ?>
                        <!-- <h2 data-aos="fade-right">WHERE TO FIND US</h2> -->
                        <ul>
                            <?php if($sales_address_group['content']) : ?>
                            <li data-aos="fade-up">
                                <i class="fa-solid fa-location-dot"></i>
                                <a class="location" <?php if ($sales_address_group['url']) { ?> href="<?php echo $sales_address_group['url'];?>" <?php } ?> target="_blank"><?php echo $sales_address_group['content']; ?></a>
                            </li>
                            <?php endif ?>

                            <!-- Phone -->
                            <li data-aos="fade-up">
                                <i class="fa-solid fa-phone"></i>
                                <a class="phone" href="tel:<?php echo $sales_group['phone']; ?>"><?php echo $sales_group['phone'];?></a>
                            </li>

                            <!-- Email -->
                            <?php if($sales_group['email']) : ?>
                            <li data-aos="fade-up">
                                <i class="fa-regular fa-envelope"></i>
                                <a class="email" href="mailto:<?php echo esc_html( antispambot( $sales_group['email'] ) ); ?>"><?php echo esc_html( antispambot( $sales_group['email'] ) ); ?></a>
                            </li>
                            <?php endif ?>

                            <!-- Working hours -->

                            <?php if( have_rows('sales_contacts' , 'options')): while ( have_rows('sales_contacts' , 'options')) : the_row(); ?>
                              
                            <li class="working-hrs" data-aos="fade-up">
                                <i class="fa-regular fa-clock"></i>
                                <div class="wrapper">
                                    <div class="left">
                                        <?php if( have_rows('working_hours')): while ( have_rows('working_hours')) : the_row(); ?>
                                        <p><?php the_sub_field('days') ?></p>
                                        <!-- <p>Saturday</p>
                                        <p>Sunday</p> -->
                                        <?php endwhile; endif  ?>
                                    </div>
                                   
                                    <div class="right">
                                        <?php if( have_rows('working_hours')): while ( have_rows('working_hours')) : the_row(); ?>
                                        <p><?php the_sub_field('hours') ?></p>
                                        <!-- <p>9am - 3pm</p>
                                        <p>Closed</p> -->
                                        <?php endwhile; endif  ?>
                                    </div>
                                </div>
                            </li>


                            <?php endwhile; endif ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="google-map-wrapper">
    
    <?php echo $group['google_maps']; ?>
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3276.658092973847!2d138.59533060609238!3d-34.789381714427755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ab0b727397b6f25%3A0x90418287dfb2c87f!2sAdelaide%20RV!5e0!3m2!1sen!2sau!4v1700097178385!5m2!1sen!2sau" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
    </div>

</section>