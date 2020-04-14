<?php
/**
  Template Name: Graphics
 * @package thecodemarvel
 */
get_header();
?>
<!-- ======= Listing ======= -->
<section id="listing" class="Portfolio">
    <div class="container">

        <div class="section-title mt-4">
            <h2 id="page-title" data-aos="fade-up"><?php echo $post->post_title; ?></h2>
            <p data-aos="fade-up"> <?php echo($post->post_content); ?></p>
        </div>

        <!--        <div class="row" data-aos="fade-up" data-aos-delay="100">
                  <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                      <li data-filter="*" class="filter-active">All</li>
                      <li data-filter=".filter-app">App</li>
                      <li data-filter=".filter-card">Card</li>
                      <li data-filter=".filter-web">Web</li>
                    </ul>
                  </div>
                </div>-->

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            <?php
            $result = get_cfc_meta('imagesanddescription');
            if ($result) {
                foreach ($result as $key => $value) {
                    $image_array = get_cfc_field('imagesanddescription', 'images', false, $key);
                    ?>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="<?php echo $image_array['url']; ?>" class="img-fluid" alt="">
                        <div href="<?php echo $image_array['url']; ?>" data-gall="portfolioGallery" class="venobox preview-link" title="">
                            <div class="portfolio-info">
                                <h4><?php echo $value['service-title']; ?></h4> <i class="bx bx-plus"></i>
                                <!--<p><?php echo $value['servicedescription']; ?></p>-->
                            </div>
                        </div>
                    </div>           
                    <?php
                }
            } else {
                ?>


                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Web 3</h4>

                        <a href="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>App 2</h4>     
                        <a href="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                        <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Card 2</h4>
                        <a href="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                        <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Web 2</h4>
                        <a href="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                        <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>App 3</h4>
                        <a href="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                        <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <!--          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                              <h4>Card 1</h4>
                              <p>Card</p>
                              <a href="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                              <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                          </div>
                
                          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                              <h4>Card 3</h4>
                              <p>Card</p>
                              <a href="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                              <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                          </div>
                
                          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                              <h4>Web 3</h4>
                              <p>Web</p>
                              <a href="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                              <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                          </div>-->
            <?php }
            ?> 
        </div>

    </div>
</section>
<!-- End Portfolio Section -->


<?php
get_footer();
