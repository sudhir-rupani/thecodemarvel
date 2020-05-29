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


<?php
 echo do_shortcode('[wpuf_sub_pack]');

// load this while home page else single tmp
get_template_part('template-parts/content', 'none');

//get_sidebar();
get_footer();
