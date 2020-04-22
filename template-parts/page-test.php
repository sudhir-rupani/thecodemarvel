<?php
/**
  Template Name: Test
 * @package thecodemarvel
 */
get_header();

?>
<!-- ======= Listing ======= -->
<section id="listing" class="Portfolio mt-10">
    <div class="container">

<div class="col-md-6"><?php

// echo do_shortcode('[wpforms id="155" title="false" description="false"]');
// echo do_shortcode('[wpforms id="108" title="false" description="false"]');
// echo do_shortcode('[wpforms id="160" title="false" description="false"]');
// echo do_shortcode('[wpuf_account]');
 // echo do_shortcode('[wpuf_form id="240"]');
echo do_shortcode('[fep form_name="graphics-post"]');

?></div>
    </div>
</section>
<!-- End Portfolio Section -->


<?php
get_footer();


