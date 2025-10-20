<section class="testimonials-section">
    <div class="container">
        <h2 class="homepage section-heading" data-aos="fade-right"><?php the_field('heading') ?></h2>

        <?php if( have_rows('testimonies_list') ) : ?>

        <div id="testimonials-carousel" class="owl-carousel testimonials-carousel" data-aos="fade-up">
            <?php while( have_rows('testimonies_list') ): the_row(); ?>
           
            <div class="item">
                <img src="<?php echo get_template_directory_uri() ?>/img/quote-icon.svg" alt="quote">
                <p class="content"><?php the_sub_field('content') ?></p>
                <b class="name"><?php the_sub_field('name')?></b>
            </div>

            <?php endwhile ?>
        

            <!-- <div class="item">
                <img src="<?php //echo get_template_directory_uri() ?>/img/quote-icon.svg" alt="quote">
                <p class="content">Loving our weekend getaways in the
                Supreme Classic Tourer.
                Great handover, friendly staff and
                responsive service by Brad when I had
                a few random power questions.
                Thanks to the team at Adelaide RV</p>
                <b class="name">Warren Porteous</b>
            </div> -->

            <!-- <div class="item">
                <img src="<?php //echo get_template_directory_uri() ?>/img/quote-icon.svg" alt="quote">
                <p class="content">Recently purchased a caravan from
                Adelaide RV. Pleasant experience
                throughout. Friendly knowledgeable
                salesman. Timely delivery of caravan as
                promised. Can’t fault this transaction.
                Thanks to all the staff.</p>
                <b class="name">Nicole Huwart</b>
            </div> -->

            <!-- <div class="item">
                <img src="<?php //echo get_template_directory_uri() ?>/img/quote-icon.svg" alt="quote">
                <p class="content">Customer service at its best both friendly and welcoming. 
                    A pleasure to deal with all of the staff. Well presented business with service to back it up.</p>
                <b class="name">Kieron Gubbins</b>
            </div> -->

        </div>
        <?php endif ?>


    </div><!-- end container -->
</section>

<script>
    jQuery(document).ready(function($){
        $('#testimonials-carousel').owlCarousel({
        items:3,
        autoplay: true,
        loop:true,
        nav:true,
        margin:70,
        stagePadding:70,
        navText : ["&lt;","&gt;"],
        responsive : {
            // breakpoint from 0 up
            0 : {
                items:1,
                nav:false,
                stagePadding:0,
            },
            // breakpoint from 480 up
            768 : {
                items:2,
            },
            // breakpoint from 768 up
            991 : {
                items:3, 
            }
        }
        });

        document.querySelector('.testimonials-carousel .owl-nav').classList.add('container');
    });


/****** SET EQUAL HEIGHT ****/

function descEqualHeights() {

    const viewportWidth = window.innerWidth || document.documentElement.clientWidth;
  // Get all elements 
  const descriptionElements = document.querySelectorAll(".testimonials-carousel .item ");

    // Reset heights to "auto" before calculating the new equal height
    descriptionElements.forEach((element) => {
        element.style.height = "auto";
    });

   // Check if the viewport width is less than 991px
   if (viewportWidth > 991) {

    // Find the maximum height among all elements
    let maxHeight = 0;
    descriptionElements.forEach((element) => {
        const elementHeight = element.offsetHeight;
        if (elementHeight > maxHeight) {
        maxHeight = elementHeight;
        }
    });

    // Set the height of all elements to the maximum height
    descriptionElements.forEach((element) => {
        element.style.height = `${maxHeight}px`;
    });

    }

}

// Call the function initially to set equal heights
window.addEventListener("load", descEqualHeights);


// Call the function again whenever the window is resized
window.addEventListener("resize", descEqualHeights);


   
</script>

