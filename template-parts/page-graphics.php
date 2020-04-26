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
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Web 3</h4>
                      <p>Web</p>
                      <a href="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                      <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                  </div>
            <?php }
            ?> 
        </div>

    </div>
</section>
<!-- End Portfolio Section -->

<?php  if($post->post_name == 'graphic-design'){  ?>
    <!-- ======= Tools We use======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="fade-up">

		<div class="owl-carousel clients-carousel">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/software/adobeAcrobat.png" alt="">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/software/adobe-photoshop.png" alt="">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/software/adobe-indesign.png" alt="">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/software/adobe-illustrator.png" alt="">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/software/CorelDraw.png" alt="">

        </div>

      </div>
    </section><!-- End Tools We use  -->
<?php } ?>

<?php
get_footer();
