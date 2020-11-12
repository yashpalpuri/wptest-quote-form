<?php 
/**
 * Quote form shortcode
 */

function quote_form_shortcode_func( $atts ) {
	$a = shortcode_atts( [
    'heading' => __( 'Request a quote' ),
    'description' => __( 'Please fill in your details below and a member of our Account Team will be in touch to discuss your requirements.' ),
    'className' => '',
  ], $atts );

  ob_start();
  ?>
  <div class="<?= implode( ' ', [ 'quote-form', $a[ 'className' ] ] ) ?>">
    <h4 class="heading-text"><?= $a[ 'heading' ] ?></h4>
    <?= wpautop( $a[ 'description' ] ) ?>
    <div class="quote-form-container"></div>
  </div>
  <?php 
  return ob_get_clean();
}

add_shortcode( 'quote-form', 'quote_form_shortcode_func' );