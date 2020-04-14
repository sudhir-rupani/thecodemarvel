<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package thecodemarvel
 */
?>
</main>
<!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>TheCodeMarvel</h3>
                    <p>
                        1391-sharad nagar,<br>
                        Tarshali,Vadodara,<br>
                        Gujarat
                        India <br><br>
                        <strong>Phone:</strong> +1 715 393 8494<br>
                        <strong>Phone:</strong> +91 76220 12595<br>
                        <strong>Email:</strong> ron.wilson@thecodemarvel.com<br>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <?php
                    wp_nav_menu(array(
                        'menu' => 'Footer Service Menu',
                        'container' => '',
                        'link_before' => '<i class="bx bx-chevron-right"></i>  '
                    ));
                    ?>
                    <!--                    <ul>
                                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                                            <li><i class="bx bx-chevron-right"></i> <a href="#">Staffing Services and Assistance</a></li>
                                            <li><i class="bx bx-chevron-right"></i> <a href="#">E-Commerce</a></li>
                                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web and Mobile App development</a></li>
                                            <li><i class="bx bx-chevron-right"></i> <a href="#">Virtual Assistance</a></li>
                    
                                        </ul>-->
                </div>

                <!--          <div class="col-lg-4 col-md-6 footer-newsletter">
                            <h4>Join Our Newsletter</h4>
                            <p>Our latest news will get you by newsletter</p>
                            <form action="" method="post">
                              <input type="email" name="email"><input type="submit" value="Subscribe">
                            </form>
                          </div>-->

            </div>
        </div>
    </div>

    <div class="container d-lg-flex py-4">

        <div class="mr-lg-auto text-center text-lg-left">
            <div class="copyright">
                &copy; Copyright <strong><span>TheCodeMarvel</span></strong>. All Rights Reserved
            </div>
            <div class="credits">

                Designed by <a href="#">TheCodeMarvel</a>
            </div>
        </div>
        <div class="social-links text-center text-lg-right pt-3 pt-lg-0">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>



</div><!-- #page -->

<!-- Vendor JS Files -->
<script src="<?php echo get_template_directory_uri() ?>/assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/vendor/php-email-form/validate.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/vendor/jquery-sticky/jquery.sticky.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/vendor/venobox/venobox.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script href="<?php echo get_template_directory_uri() ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/main.js"></script>
<?php wp_footer(); ?>

</body>
</html>
