<?php
/**
 * Quote Form Widget
 */

class QuoteForm_Widget extends WP_Widget {

  function __construct() {
		parent::__construct(
			'quoteform_widget', 
			__( 'Quote Form', 'qf' ), 
			[
        'description' => __( 'Quote form...!' )
      ]
		);
  }
  
  public function widget( $args, $instance ) {
    echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}
		echo '<div class="quote-form-container"></div>';
		echo $args['after_widget'];
  }

  public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : __( 'Quote Form', 'qf' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php _e( esc_attr( 'Title:' ) ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<?php 
  }
  
  public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}
}

function quote_form_widget() { 
  register_widget( 'QuoteForm_Widget' );
}

add_action( 'widgets_init', 'quote_form_widget' );