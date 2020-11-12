<?php
/**
 * Plugin Name: wptest-quote-form
 * Plugin URI: #
 * Description: Quote form
 * Author: #
 * Author URI: #
 * Version: 1.0.0
 * License: GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 *
 */

{
  /**
   * Define
   */
  define( 'QF_VER', '1.0.0' );
  define( 'QF_DIR', plugin_dir_path( __FILE__ ) );
  define( 'QF_URI', plugin_dir_url( __FILE__ ) );
}

{
  /**
   * Include
   */
  require( QF_DIR . '/inc/static.php' );
  require( QF_DIR . '/inc/helpers.php' );
  require( QF_DIR . '/inc/hooks.php' );
  require( QF_DIR . '/inc/ajax.php' );

  require( QF_DIR . '/inc/quote-form-widget.php' );
  require( QF_DIR . '/inc/quote-form-shortcode.php' );
}