<?php
/**
 * The header for our theme

 * @package thecodemarvel
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <!-- Favicons -->
<!--   <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo get_template_directory_uri()?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="<?php echo get_template_directory_uri()?>/assets/css/style.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri()?>/assets/dragboard/jkanban.min.css" rel="stylesheet">
  
  <script src="<?php echo get_template_directory_uri() ?>/assets/dragboard/jkanban.js"></script>

  <style type="text/css">
    
  .content-wrapper {
    display: table-cell;
  }
}

.main{margin-top:-50px;}
.sidebar .category-content .nav li > a.sub-menu[data-toggle="collapse"]:after {
  content: "";

}
section {
    padding:0px;
 
}
.tabContent {
    display:none;
}  
  </style>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>
<div id="page" class="site">

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <ul>
          <li><i class="icofont-envelope"></i><a href="mailto:ron.wilson@thecodemarvel.com">ron.wilson@thecodemarvel.com</a></li>
          <li><i class="icofont-phone"></i> +1 715 393 8494</li>
          <li><i class="icofont-phone"></i> +91 76220 12595</li>
          <li><i class="icofont-clock-time icofont-flip-horizontal"></i> Mon-Fri 10am - 6pm</li>
        </ul>

      </div>
      <div class="cta">
                  <?php echo do_shortcode( '[xoo_el_action type="login" change_to="logout"]' ); ?>
        <!--<a href="#about" class="scrollto">Get Started</a>-->
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">

    <div class="container d-flex">

      <div class="logo mr-auto">
<!--         <h1 class="text-light"><a href="<?php echo home_url();?>"><span>TheCodeMarvel</span></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
<a href="index.html"><img src="<?php echo home_url();?>/wp-content/uploads/2020/04/output-onlinepngtools.png" alt="" class="img-fluid"></a>
      </div>
<nav id="site-navigation" class="nav-menu d-none d-lg-block">
			<?php
			// wp_nav_menu( array(
			// 	 'menu' => 'Header menu',
			// 	 'container'       => '',
			// ) );
			?>
</nav>
    </div>
  </header><!-- End Header -->
  
  <main id="main">

