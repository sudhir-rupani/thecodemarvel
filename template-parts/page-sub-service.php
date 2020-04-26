<?php
/**
  Template Name: Sub Service
 * @package thecodemarvel
 */
get_header();
 
 $post_args = array(
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'post_type' => 'page',
    'meta_key' => 'is-service-page',
    'meta_value' => 'Yes',
    'post_parent' =>$post->ID
);
$post_query = new WP_Query($post_args);
// echo"<pre>";
// print_r($post_query->posts);
// echo"</pre>";
?>

<!-- ======= Listing ======= -->
<section id="listing" class="Portfolio">
    <div class="container">

        <div class="section-title mt-4">
            <h2 id="page-title" ><?php echo $post->post_title; ?></h2>
            <p > <?php echo($post->post_content); ?></p>
        </div>

          
            <?php


            $result = get_cfc_meta('imagesanddescription');
            // if ($result) {
            //     foreach ($result as $key => $value) {
            //         $image_array = get_cfc_field('imagesanddescription', 'images', false, $key);
        if ($post_query->have_posts()){
                while ($post_query->have_posts()) : $post_query->the_post();
                    $featured_img_url = get_the_post_thumbnail_url();
                    ?>
            <div class="row portfolio-container sub-service-list mt-2 "  >
                 <div class="col-lg-6 col-xl-6 col-md-6 col-xs-12  ">
                    <img src="<?php echo $featured_img_url; ?>" class="img-fluid" alt="">
                   <!--  <div class="portfolio-info">
                        <h4><?php echo $post->post_title; ?></h4>

                        <a href="<?php echo $featured_img_url; ?>" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="<?php echo $post->guid; ?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                         <p><?php //echo $post->post_content; ?></p>
                    </div> -->
                </div> 
                 <div class="col-xl-6 col-lg-6 col-xs-12 icon-boxes d-flex flex-column align-items-stretch justify-content-center  px-lg-5">
                   
                    <?php echo $post->post_content; ?>
                    <!--   <h4 class="title"><a href="">Nemo Enim</a></h4>
                      <p class="description">test test</p> -->
                 </div>
        </div>
             <?php
                 endwhile;
                 wp_reset_postdata();
             }
             else 
             {
                ?>         
                <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Web 3</h4>

                        <a href="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div> -->
              
            <?php }
              wp_reset_postdata();
            ?> 
    

    </div>
</section>
<!-- End Portfolio Section -->





<?php  if($post->post_name == 'graphic-design'){  ?>
    <!-- ======= Tools We use======= -->
    <section id="clients" class="clients">
      <div class="container" >

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
