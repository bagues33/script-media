<?php 
/**
 * Theme Functions.
 *
 * @package Script Media
 */


if ( ! defined( 'SM_DIR_PATH' ) ) {
	define( 'SM_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'SM_DIR_URI' ) ) {
	define( 'SM_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

require_once SM_DIR_PATH . '/inc/helpers/autoloader.php';
require_once SM_DIR_PATH . '/inc/helpers/template-tags.php';

function sm_get_theme_instance() {
	\SM_THEME\Inc\SM_THEME::get_instance();
}

sm_get_theme_instance();



