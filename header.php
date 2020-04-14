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
  <link href="<?php echo get_template_directory_uri()?>/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri()?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri()?>/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri()?>/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri()?>/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo get_template_directory_uri()?>/assets/css/style.css" rel="stylesheet">
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
        <h1 class="text-light"><a href="<?php echo home_url();?>"><span>TheCodeMarvel</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
<nav id="site-navigation" class="nav-menu d-none d-lg-block">
			<?php
			wp_nav_menu( array(
				 'menu' => 'Header menu',
				 'container'       => '',
			) );
			?>
</nav>
<!--      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#pricing">Pricing</a></li>
          <li><a href="<?php home_url();?>/contact">Contact</a></li>

        </ul>
      </nav>-->
        <!-- .nav-menu -->
    </div>
  </header><!-- End Header -->


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container tag-line" data-aos="fade-in">
      <h1>Welcome to TheCodeMarvel</h1>
      <h2>Digital solutions at quick clicks!! Let's step with ideas to real world.
 </h2>
      <div class="d-flex align-items-center start-contener">
        <i class="bx bxs-right-arrow-alt get-started-icon"></i>

        <a href="#why-us" class="btn-get-started scrollto">Get Started</a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

