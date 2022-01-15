<?php 

/**
 * Theme Functions.
 */

function tuts_scripts() {
	// wp_enqueue_style( 'sm_scripts', get_stylesheet_uri(), [], '0.1.0' );
	wp_enqueue_style('customize-style', get_stylesheet_uri());
	wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style('bootstrap-icon-style', get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css');
	wp_enqueue_style('boxicons-icon-style', get_template_directory_uri() . '/assets/vendor/boxicons/css/boxicons.min.css');
	// wp_enqueue_style('glightbox-style', get_template_directory_uri() . '/assets/vendor/glightbox/css/glightbox.min.css');
	// wp_enqueue_style('swiper-style', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css');



	wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/main.js', array(), '', true);
	wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), '', true);
	wp_enqueue_script( 'glightbox-script', get_template_directory_uri() . '/assets/vendor/glightbox/js/glightbox.min.js', array(), '', true);
	wp_enqueue_script( 'isotope-script', get_template_directory_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js', array(), '', true);
	// wp_enqueue_script( 'swiper-script', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.js', array(), '', true);
	wp_enqueue_script( 'swiper-script', get_template_directory_uri() . '/assets/vendor/waypoints/noframework.waypoints.js', array(), '', true);
	// wp_enqueue_script( 'swiper-script', get_template_directory_uri() . '/assets/vendor/aos/aos.js', array(), '', true);


}

add_action('wp_enqueue_scripts', 'tuts_scripts');


/**
 * Register.
 */
function tuts_register() {
	register_nav_menu( 'navbar', 'Menu Utama');
}

add_action( 'init', 'tuts_register' );
