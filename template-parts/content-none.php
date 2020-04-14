<!-- ======= Services Section ======= -->
<!--     <section id="services" class="services section-bg">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>Services</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6" data-aos="fade-up">
        <div class="icon-box">
          <div class="icon"><i class="icofont-computer"></i></div>
          <h4 class="title"><a href="">Lorem Ipsum</a></h4>
          <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"><i class="icofont-chart-bar-graph"></i></div>
          <h4 class="title"><a href="">Dolor Sitema</a></h4>
          <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="icon-box">
          <div class="icon"><i class="icofont-earth"></i></div>
          <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
          <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="icon-box">
          <div class="icon"><i class="icofont-image"></i></div>
          <h4 class="title"><a href="">Magni Dolores</a></h4>
          <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="icon-box">
          <div class="icon"><i class="icofont-settings"></i></div>
          <h4 class="title"><a href="">Nemo Enim</a></h4>
          <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
        <div class="icon-box">
          <div class="icon"><i class="icofont-tasks-alt"></i></div>
          <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
          <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
        </div>
      </div>
    </div>

  </div>
</section> -->

<!-- End Services Section -->
<?php
$post_args = array(
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'post_type' => 'page',
    'meta_key' => 'is-service-page',
    'meta_value' => 'Yes'
);

$post_query = new WP_Query($post_args);
$loginUser = is_user_logged_in();
?>

<!-- ======= Values Section ======= -->
<section id="services" class="values">

    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2>Services</h2>
            <p>Here at Ultra Graphics, we have the tools and expertise to help you grow you business, utilizing multiple marketing channels in both print and online. Everything from business cards and stationery, to signs and vehicle graphics, to websites and social media advertising. Ultra Graphics is your one-stop solution for growing leads, revenue, and customer loyalty.</p>
        </div>
        <h2></h2>
        <div class="row justify-content-center">
            <?php
            if ($post_query->have_posts()):
                while ($post_query->have_posts()) : $post_query->the_post();
                    $featured_img_url = get_the_post_thumbnail_url();
                    ?>
                    <div class="col-md-4 d-flex align-items-stretch mt-4" data-aos="fade-up">
                        <div class="card" style="background-image: url(<?php echo $featured_img_url; ?>);">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="<?php echo $post->guid; ?>"><?php echo $post->post_title; ?> </a></h5>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
            endif;
            ?>
        </div>

    </div>
</section>
<!-- End Values Section -->



<!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing">
    <div class="container">

        <div class="section-title">
            <h2 data-aos="flip-left">Pricing</h2>
            <h5 data-aos="flip-left">Choose the hours you need. Access all services. Pay one flat rate.</h5>
        </div>

        <div class="row justify-content-center">

            <div class="col-lg-3 col-md-6" data-aos="flip-left">
                <div class="box">
                    <h3>Starter</h3>
                    <h4><sup>$</sup>99</h4>
                    <ul>
                        <li><h5>5 Hours</h5></li>
                        <li>Virtual Support</li>
                        <li>Graphic Design</li>
                        <li class="">Staffing </li>
                        <li class="na">Website and Mobile App Development</li>
                    </ul>
                    <div class="btn-wrap">                        
                        <a href="#" class="<?php echo (!$loginUser)?'xoo-el-action-sc xoo-el-login-tgr':'aaaa'?> btn-buy">Buy Now</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="flip-right" >
                <div class="box ">
                    <span class="advanced">Popular</span>
                    <h3>Premium</h3>
                    <h4><sup>$</sup>199<span></span></h4>
                    <ul>
                        <li><h5>15 Hours</h5></li>
                        <li>Virtual Support</li>
                        <li>Graphic Design</li>
                        <li class="">Staffing </li>
                        <li class="">Website and Mobile App Development</li>
                    </ul>
                    <div class="btn-wrap">                        
                        <a href="#" class="<?php echo (!$loginUser)?'xoo-el-action-sc xoo-el-login-tgr':'aaaa'?> btn-buy">Buy Now</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="flip-left" >
                <div class="box">
                    <h3>Super Premium</h3>
                    <h4><sup>$</sup>290<span></span></h4>
                    <ul>
                        <li><h5>35 Hours</h5></li>
                        <li>Virtual Support</li>
                        <li>Graphic Design</li>
                        <li class="">Staffing </li>
                        <li class="">Website and Mobile App Development</li>
                    </ul>
                    <div class="btn-wrap">                        
                        <a href="#" class="<?php echo (!$loginUser)?'xoo-el-action-sc xoo-el-login-tgr':'aaaa'?> btn-buy">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End Pricing Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="<?php echo get_template_directory_uri()?>/assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="<?php echo get_template_directory_uri()?>/assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="<?php echo get_template_directory_uri()?>/assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="<?php echo get_template_directory_uri()?>/assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="<?php echo get_template_directory_uri()?>/assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

