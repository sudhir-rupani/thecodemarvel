
<?php
$post_args = array(
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'post_type' => 'page',
    'meta_key' => 'is-service-page',
    'meta_value' => 'Yes',
     'post_parent' =>0
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
              wp_reset_postdata();
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


<?php  
    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => 10,
        'product_cat'    => 'subscription'
    );

    $productQuery = new WP_Query( $args );
//echo'<pre>';
//print_r($productQuery);
//echo'</pre>';
    while ( $productQuery->have_posts() ) : $productQuery->the_post();
        global $product;

			$subscription_price = get_post_meta( get_the_ID(), '_subscription_sign_up_fee', true );
?>
            <div class="col-lg-3 col-md-6" data-aos="flip-left">
                <div class="box">
                    <h3><?php echo get_the_title() ?></h3>
                    <h4><sup>$</sup><?php echo $subscription_price;?></h4>
                    <?php print(htmlspecialchars_decode(get_the_excerpt()));  ?>
                    <div class="btn-wrap">                       
						<?php if(!$loginUser){ ?>
                        <a href="#" class="xoo-el-action-sc xoo-el-login-tgr btn-buy">Buy Now</a>			
						<?php }else{?>
                        <a href="<?php echo"?add-to-cart=".get_the_id() ?>" class="btn-buy">Buy Now</a>
						<?php }?>
                    </div>
                </div>
            </div>
<?php 
    endwhile;
    wp_reset_query();
?>
            <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="flip-right" >
                <div class="box ">
                    <h3>Premium</h3>
                    <h4><sup>$</sup>199<span></span></h4>
                    <span class="advanced">Popular</span>
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
            <h3>Joseph Ronald</h3>
            <h4>CEO at Ronald Enterprise</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              “TheCodeMarvel made an immediate impact on our online reorganization.”
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="<?php echo get_template_directory_uri()?>/assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3>Maria Stone</h3>
            <h4>Owner – Wood-Villa Hotels</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              “ TheCodeMarvel made our client base international, I’m glad I found them. ”
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

