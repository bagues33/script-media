<?php

/**
 *Enqueue theme assets
 *
 *@package SM
 */

namespace SM_THEME\Inc;

use SM_THEME\Inc\Traits\Singleton;

class Assets {
	use Singleton;

		protected function __construct() {

		//load class.
		$this->setup_hooks();
	}

	protected function setup_hooks() {
		//actions and filters

		add_action( 'wp_enqueue_scripts', [ $this, 'register_styles' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'register_scripts' ] );
	}

	public function register_styles() {

		wp_register_style( 'customize-style', get_stylesheet_uri(), [], filemtime( SM_DIR_PATH . '/style.css' ), 'all' );
		wp_register_style('bootstrap-style',  SM_DIR_URI . '/assets/vendor/bootstrap/css/bootstrap.min.css', [], false, 'all' );
		wp_register_style('bootstrap-icon-style',  SM_DIR_URI . '/assets/vendor/bootstrap-icons/bootstrap-icons.css', [], false, 'all' );
		wp_register_style('boxicons-icon-style',  SM_DIR_URI . '/assets/vendor/boxicons/css/boxicons.min.css', [], false, 'all' );

		wp_enqueue_style( 'customize-style' );
		wp_enqueue_style( 'bootstrap-style' );
		wp_enqueue_style( 'bootstrap-icon-style' );
		wp_enqueue_style( 'boxicons-icon-style' );

	}

	public function register_scripts() {
		// wp_register_script( 'main-script',  SM_DIR_URI . '/assets/js/main.js', [], filemtime( SM_DIR_PATH . '/assets/js/main.js' ), true);
		wp_register_script( 'main-script', SM_DIR_URI . '/assets/js/main.js', ['jquery'], filemtime( SM_DIR_PATH . '/assets/js/main.js' ), true );
		wp_register_script( 'bootstrap-script',  SM_DIR_URI . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', ['jquery'], false, true);
		wp_register_script( 'glightbox-script',  SM_DIR_URI . '/assets/vendor/glightbox/js/glightbox.min.js', array(), '', true);
		wp_register_script( 'isotope-script',  SM_DIR_URI . '/assets/vendor/isotope-layout/isotope.pkgd.min.js', array(), '', true);
		wp_register_script( 'swiper-script',  SM_DIR_URI . '/assets/vendor/waypoints/noframework.waypoints.js', array(), '', true);

		wp_enqueue_script( 'main-script' );
		wp_enqueue_script( 'bootstrap-script' );
		wp_enqueue_script( 'glightbox-script' );
		wp_enqueue_script( 'isotope-script' );
		wp_enqueue_script( 'swiper-script' );
	}

}