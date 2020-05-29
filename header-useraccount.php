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
      .success {
        background: #00b961;
      }

      .info {
        background: #2a92bf;
      }

      .warning {
        background: #f4ce46;
      }

      .error {
        background: #fb7d44;
      }

  </style>

  <style type="text/css">
    

/*
4px:  $spacer * 0.25
8px:  $spacer * 0.5
16px: $spacer
20px: $spacer * 1.25
24px: $spacer * 1.5
*/
html,
body {
  font-family: "Roboto", "Helvetica Neue", Helvetica, Arial, sans-serif;
  color: #333;
  background-color: #eeeded;
  height: 100%;
}

.sidebar-toggler {
  padding: 0.25rem 0.75rem;
  font-size: 1.25rem;
  line-height: 1;
  background-color: transparent;
  border: 1px solid transparent;
  border-radius: 0.25rem;
  color: rgba(0, 0, 0, 0.5);
  border-color: rgba(0, 0, 0, 0.1);
}
.sidebar-toggler .sidebar-toggler-icon {
  display: inline-block;
  width: 1.5em;
  height: 1.5em;
  vertical-align: middle;
  content: "";
  background: no-repeat center center;
  background-size: 100% 100%;
  background-image: url("data:image/svg+xml;charset=utf8,<svg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'><path stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/></svg>");
  cursor: pointer;
}

.sidebar {
  position: relative;
  width: 100%;
  z-index: 1;
}
.sidebar .sidebar-user .category-content {
  padding: 1rem;
  text-align: center;
  color: #fff;
  background: url(https://picsum.photos/260/80?image=652&blur) center center no-repeat;
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
}
.sidebar .sidebar-user .category-content:first-child {
  border-bottom-right-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}
.sidebar .sidebar-user .category-content:last-child {
  border-top-right-radius: 0.25rem;
  border-top-left-radius: 0.25rem;
}
.sidebar .sidebar-content {
  position: relative;
  border-radius: 0.25rem;
  margin-bottom: 1.25rem;
}
.sidebar .category-title {
  position: relative;
  margin: 0;
  padding: 12px 20px;
  padding-right: 46px;
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}
.sidebar.sidebar-default .category-title {
  border-bottom-color: #dee2e6;
}
.sidebar.sidebar-default .category-title > span {
  display: block;
  text-transform: uppercase;
  font-weight: 500;
  font-size: 0.75rem;
}
.sidebar.sidebar-default .category-content .nav li > a {
  color: #333;
}
.sidebar.sidebar-default .category-content .nav li > a.active, .sidebar.sidebar-default .category-content .nav li > a[aria-expanded="true"], .sidebar.sidebar-default .category-content .nav li > a:hover, .sidebar.sidebar-default .category-content .nav li > a:focus {
  background-color: #f4f4f4;
}
.sidebar .category-content {
  position: relative;
}
.sidebar .category-content .nav {
  position: relative;
  margin: 0;
  padding: 0.5rem 0;
}
.sidebar .category-content .nav li {
  position: relative;
  list-style: none;
}
.sidebar .category-content .nav li > a {
  font-size: 0.875rem;
  border-bottom: 1px solid rgba(255, 255, 255, 0.5);
  transition: background 0.15s linear, color 0.15s linear;
}
.sidebar .category-content .nav li > a[data-toggle="collapse"] {
  padding-right: 2rem;
}
.sidebar .category-content .nav li > a[data-toggle="collapse"]:after {
  position: absolute;
  top: 0.5rem;
  right: 1rem;
  height: 1.5rem;
  line-height: 1.5rem;
  display: block;
  content: "\f105";
  font-family: FontAwesome;
  font-size: 1.5rem;
  font-weight: normal;
  transform: rotate(0deg);
  transition: -webkit-transform 0.2s ease-in-out;
}
.sidebar .category-content .nav li > a[data-toggle="collapse"][aria-expanded="true"]:after {
  transform: rotate(90deg);
}
.sidebar .category-content .nav li > a > i {
  float: left;
  top: 0;
  margin-top: 2px;
  margin-right: 15px;
  transition: opacity 0.2s ease-in-out;
}
.sidebar .category-content .nav li ul {
  padding: 0;
}
.sidebar .category-content .nav li ul > li a {
  padding-left: 2.75rem;
}
.sidebar .category-content .nav > li > a {
  font-weight: 500;
}

@media (min-width: 768px) {
  .sidebar {
    /*padding-top: 2rem !important;*/
    display: table-cell;
    vertical-align: top;
    width: 280px;
    padding: 0 1.25rem;
  }
  .sidebar.sidebar-fixed {
    position: sticky;
    top: 5.5rem;
  }
  .sidebar.sidebar-default .sidebar-category {
    background-color: #fff;
  }
  .sidebar.sidebar-separate .sidebar-content {
    box-shadow: none;
  }
  .sidebar.sidebar-separate .sidebar-category {
    margin-bottom: 1.25rem;
    border-radius: 0.25rem;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
  }

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
<!--   <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container tag-line" data-aos="fade-in">
      <h1>Welcome to TheCodeMarvel</h1>
      <h2>Digital solutions at quick clicks!! Let's step with ideas to real world.
 </h2>
      <div class="d-flex align-items-center start-contener">
        <i class="bx bxs-right-arrow-alt get-started-icon"></i>

        <a href="#why-us" class="btn-get-started scrollto">Get Started</a>
      </div>
    </div>
  </section> --><!-- End Hero -->

  <main id="main">

