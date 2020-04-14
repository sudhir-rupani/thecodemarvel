<?php
/**
 * The main template file
 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package thecodemarvel
 */
get_header();
?>

<!-- ======= Why Us Section ======= -->
<section id="why-us" class="why-us">
    <div class="container">

        <div class="row">
            <div class="col-xl-4 col-lg-5" data-aos="fade-up">
                <div class="content">
                    <h3>Why Choose TheCodeMarvel ?</h3>
                    <p>
                        Our company provide it solutions to clients. We provide fixed rate packages in which clients can ask for any of the services we provide for permitted hours according to the package selected. When client  is out of available service hours , they can renew with the same package or other.
                    </p>
<!--                    <div class="text-center">
                        <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                    </div>-->
                </div>
            </div>
            <div class="col-xl-8 col-lg-7 d-flex">
                <div class="icon-boxes d-flex flex-column justify-content-center">
                    <div class="row">
                        <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon-box mt-4 mt-xl-0">
                                <i class="bx bx-receipt"></i>
                                <h4>Professionally Managed Services</h4>
                                <p></p>
                            </div>
                        </div>
                        <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon-box mt-4 mt-xl-0">
                                <i class="bx bx-cube-alt"></i>
                                <h4>Quality Control </h4>
                                <p></p>
                            </div>
                        </div>
                        <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon-box mt-4 mt-xl-0">
                                <i class="bx bx-chat"></i>

                                <h4>24/7 Chat, Email, Phone Support</h4>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section><!-- End Why Us Section -->


<?php
echo do_shortcode('');

// load this while home page else single tmp
get_template_part('template-parts/content', 'none');

//get_sidebar();
get_footer();
