<?php
/**
  Template Name: Contact 
 * @package thecodemarvel
 */

get_header();
?>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact ">
      <div class="container">

        <div class="section-title mt-5">
          <h2 data-aos="fade-up">Contact Us</h2>
          <!-- <p data-aos="fade-up"></p> -->
        </div>

        <div class="row justify-content-center">

          <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h5></h5>
              <h3>India</h3>
              <p>1391-sharad nagar,
                 Tarshali,Vadodara,
          	  	 Gujarat
          	  </p>
<!--              <i class="bx bx-map"></i>
              <h5></h5>
              <h3>USA</h3>
              <p>8720 Tamar drive 
				 Columbia maryland 
				 21045 USA
				</p>-->
            </div>
          </div>

          <div class="col-xl-4 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>
<!--              	<a href="mailto:info@thecodemarvel.com">info@thecodemarvel.com</a>
              	 <br>-->
              	<a href="mailto:ron.wilson@thecodemarvel.com">ron.wilson@thecodemarvel.com</a>
              </p>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>
              	<a href="tel:+17153938494">+1 715 393 8494</a>
              	<br>
              	<a href="tel:+917622012595">+91 76220 12595</a>
              	
              </p>
            </div>
          </div>
        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
          <div class="col-xl-9 col-lg-12 mt-4">
		    <div class="php-email-form">
              <?php echo do_shortcode('[contact-form-7 id="81" title="Contact form 1"]' ); ?>
			</div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->


<?php

get_footer();
