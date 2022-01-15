<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link 
 *
 * @package Script-Media
 * @subpackage Script-Media
 * @since Script Media 1.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>


</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#">Control Panel</a>
        <a href="#"> ID / ENG </a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <!-- <h1 class="logo"><a href="index.html">BizLand<span>.</span></a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
       <a href="index.html" class="logo"><img src="<?php echo get_template_directory_uri() . '/assets/img/logo.png';?>')"></a>
        
           <?php 
              $args = array(
                  'theme_location'    => 'navbar',
                  'container'         => 'nav',
                  'container_class'   => 'navbar',
                  'container_id'      => 'navbar',
                  'menu'              => 'ul',
                  'menu_class'        => 'dropdown',
                  'depth  '           => 0,
              );
              wp_nav_menu( $args ); 
           ?>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#">Home</a></li>
           <li class="dropdown"><a href="#"><span>Server</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            <li><a href="shared-hosting.php">Shared Hosting</a></li>
              <li><a href="cloud-server.php">Cloud Server</a></li>
              <li><a href="vps.php">VPS</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Dedicated Severs</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="cloud-dediacated-server.php">Cloud Dedicated Servers</a></li>
              <li><a href="virtual-dedicated-server.php">Virtual Dedicated Severs</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>More</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="domain.php">Domains</a></li>
              <li><a href="iix.php">IIX (location Singapore)</a></li>
              <li><a href="usa.php">USA (location USA)</a></li>
              <li><a href="cpanel.php">Cpanel (optional)</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto " href="pricing.php">Pricing</a></li>
          <li class="dropdown"><a href="#"><span>Support</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Control Panel</a></li>
              <li><a href="#">Contact Support</a></li>
              <li><a href="#">Contact Sales</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Solutions for you?</a></li>
            </ul>
          </li>
        </ul>
     
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->