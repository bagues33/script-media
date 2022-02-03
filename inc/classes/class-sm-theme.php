<?php 
/**
 * Bootstraps the Theme.
 *
 * @package Script Media
 */

namespace SM_THEME\Inc;

use SM_THEME\Inc\Traits\Singleton;

class SM_THEME {
	use Singleton;

	protected function __construct() {

		//load class.

		Assets::get_instance();
		Menus::get_instance();
		Meta_Boxes::get_instance();
		Sidebars::get_instance();
		Block_Patterns::get_instance();
		Blocks::get_instance();
		Home::get_instance();
		Shared_Hosting::get_instance();
		Cloud_Server::get_instance();
		VPS::get_instance();
		Cloud_Dedicated_Servers::get_instance();
		Virtual_Dedicated_Servers::get_instance();
		Domain::get_instance();
		IIX::get_instance();
		USA::get_instance();
		Pricing::get_instance();
		Contact_Sales::get_instance();

		$this->setup_hooks(); 
	}

	protected function setup_hooks() {
		//actions

		add_action( 'after_setup_theme', [ $this, 'setup_theme' ] );


	}

	public function setup_theme() {

		add_theme_support( 'title-tag' );

		add_theme_support( 'custom-logo', [
			'header-text' => [ 'site-title', 'site-description' ],
			'height'	  => 100,
			'width'		  => 400,
			'flex-height' => true,
			'flex-width'  => true,

		] );

		add_theme_support( 'custom-background', [
			'default-color'  => '',
			'default-image'  => '',
			'default-repeat' => 'no-repeat',

		] );

		add_theme_support( 'post-thumbnails' ); 

		add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );

		/**
		 * Register image sizes.
		 */
		add_image_size( 'featured-thumbnail', 1280, 900, true );

		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 
			'html5', 
			[
				'search-form',
				'comment-form',
				'comment-list',   
				'gallery',
				'caption',
				'script',
				'style',
			]

		 );

		add_editor_style();

		add_theme_support( 'wp-block-styles' );

		add_theme_support( 'align-wide' );

		global $content_width;
		if ( ! isset( $content_width ) ) {
			$content_width = 1240;
		}


	}


}