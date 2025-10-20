<?php 
$service_group = get_field('service_contacts', 'option');
$service_address_group = $service_group['address'];
?>

<section class="servicing-section-2">

    <div class="two-col-container">
        <div class="left-col">
            <img src="<?php echo get_template_directory_uri() ?>/img/servicing-bg-2.webp" alt="Featured Image">
        </div><!-- left-col -->

        <div class="right-col">
            <div class="wrapper">
                <div class="contacts-circle">
                    <div class="content">
                        <ul>
                            <!-- Address -->
                            <li><a href="<?php echo $service_address_group['url']; ?>" target="_blank"><?php echo $service_address_group['content']; ?></a></li>

                            <!-- Phone -->
                            <li><a href="tel:<?php echo $service_group['phone']; ?>"><?php echo $service_group['phone']; ?></a></li>

                            <!-- Email -->
                            <li><a href="mailto:<?php echo $service_group['email']; ?>"><?php echo $service_group['email']; ?></a></li>

                            <!-- Working hours -->
                            <?php if( have_rows('service_contacts' , 'options')): while ( have_rows('service_contacts' , 'options')) : the_row(); ?>
                            <li>
                                
                                <!-- <pre><?php //the_sub_field('days') ?>         <?php //the_sub_field('hours') ?></pre> -->
                                <table>
                                    <?php if( have_rows('working_hours')): while ( have_rows('working_hours')) : the_row(); ?>
                                    <tr>
                                        <td><?php the_sub_field('days') ?></td><td class="table-cell-hours"><?php the_sub_field('hours') ?></td>
                                    </tr>
                                    <?php endwhile; endif ?>
                                </table>
                                <!-- <pre>Saturday - Sunday     Closed</pre> -->
                            </li>
                            <?php endwhile; endif ?>
                        </ul>
                    </div><!-- end content -->
                </div>
            </div><!-- end wrapper -->
        </div><!-- right-col -->

    </div><!-- end two col container -->

</section>