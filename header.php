<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * 
 *
 * @package Script-Media
 * @subpackage Script-Media
 * @since Script Media 1.0
 */
  
$menu_class = \SM_THEME\Inc\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id( 'sm-header-menu' );

$header_menus = wp_get_nav_menu_items( $header_menu_id );

 
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

  <?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
  } 
  ?>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-none d-md-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
      </div>
      <div class="social-links d-md-flex align-items-center">
         <a href="#">Control Panel</a>
            <?php 
              $menuParameters = array(
                'theme_location' => 'sm-topbar-menu',
                'container'       => false,
                'echo'            => false,
                'menu_class'      => 'id',
                'items_wrap'      => '%3$s',
                'depth'           => 0,
              );

              echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
             ?>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <!-- <h1 class="logo"><a href="index.html">BizLand<span>.</span></a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.php" class="logo">
       <?php 
          $custom_logo_id = get_theme_mod( 'custom_logo' );
          $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
 
            if ( has_custom_logo() ) {
                  echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
              } else {
                  echo '<h1 class="text-primary">' . get_bloginfo('name') . '</h1>';
            }
        ?>
        </a>
           <?php 
              // $args = array(
              //     'theme_location'    => 'sm-header-menu',
              //     'container'         => 'nav',
              //     'container_class'   => 'navbar',
              //     'container_id'      => 'navbar',
              //     'menu'              => 'ul',
              //     'depth  '           => 0,
              // );
              // wp_nav_menu( $args ); 
           ?>
      <nav id="navbar" class="navbar">
        <?php 
            if ( ! empty( $header_menus ) && is_array( $header_menus ) ) {
         ?>
          <ul>
             <?php 
                foreach ($header_menus as $menu_item) {
                  if ( ! $menu_item->menu_item_parent ) {
                    $child_menu_items = $menu_class->get_child_menu_items( $header_menus, $menu_item->ID );
                    $has_children = ! empty( $child_menu_items ) && is_array( $child_menu_items );

                    if ( ! $has_children ) {
                      ?>
                       <li><a class="nav-link scrollto" href="<?php echo esc_url( $menu_item->url ); ?>"><?php echo esc_html( $menu_item->title ); ?></a></li>
                       <?php
                    } else {
                      ?>
                      <li class="dropdown"><a href="<?php echo esc_url( $menu_item->url ); ?>"><span><?php echo esc_html( $menu_item->title ); ?></span></a>
                        <ul>
                          <?php 
                            foreach ( $child_menu_items as $child_menu_item ) {
                              ?>
                                <li><a href="<?php echo esc_url( $child_menu_item->url ); ?>"><?php echo esc_html( $child_menu_item->title ); ?></a></li>
                             <?php
                            }
                           ?>
                        </ul>
                      </li>
                       <?php 
                    }
                   
                  }
                }
              ?>
          </ul>
        <?php } ?>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->