<?php 
/**
 * Static
 */

function qf_enqueue_scripts() {
  wp_enqueue_script( 'qf-script', QF_URI . '/dist/frontend.bundle.js', [ 'jquery' ], QF_VER, true );
}

add_action( 'wp_enqueue_scripts', 'qf_enqueue_scripts' );