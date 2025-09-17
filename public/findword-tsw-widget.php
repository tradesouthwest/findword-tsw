<?php
/**
 * Register widget with WordPress.
 */
class Findword_Tsw_Widget extends WP_Widget {

	function __construct() {

 	$widget_options = array (
  		'classname' => 'findword_tsw_widget',
  		'description' => 'Add search words widget to sidebar.'
    );
	parent::__construct( 
		'findword_tsw_widget', 
		'Findword Tools', 
		$widget_options 
	);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	function widget( $args, $instance ) {
	    $atname = ( empty( get_option('fwtsw_option_main')['fwtsw_wrapper_class'] ) ) 
				? 'hentry' :  
				get_option( 'fwtsw_option_main')['fwtsw_wrapper_class'];
		$subtxt = ( empty( get_option('fwtsw_option_plus')['fwtsw_submit_text'] ) ) 
				? __( 'Open Finder', 'findword-tsw' ) : 
				get_option('fwtsw_option_plus')['fwtsw_submit_text'];
		$title = apply_filters( 'widget_title', $instance['title'] );
		// before and after widget arguments are defined by themes
		echo $args['before_widget'];
        ?>
		<div class="findwordtsw-widget-container">
			<?php 
			if ( ! empty( $title ) ) {
				echo $args['before_title'] . $title . $args['after_title'];
			}

			
			?>
			<div class="findword-app" data-finder-wrapper 
					data-finder-scroll-offset="175">

			<button class="finder-activator" data-finder-activator>
			<?php echo esc_attr__( $subtxt, 'findword-tsw' ); ?></button>

			<?php 
			if (function_exists('findword_tswplus_toolbox_render') ) 
			do_action( 'findword_tswplus_toolbox' );
			?>
			</div>
			<script id="findword-footer-attribute">
			jQuery(document).ready(function(){
				jQuery(".<?php echo esc_attr($atname); ?>").attr("data", "data-finder-content");
			});	</script>
		</div>
		<?php 
		echo $args['after_widget'];
}
	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	// Widget Backend
	function form( $instance ) {
 		$title = ! empty( $instance['title'] ) ? $instance['title'] : '';
	// Widget admin form
	?>
	<p>
 <label for="<?php echo $this->get_field_id( 'title'); ?>">Title:</label>
 <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $title ); ?>" /></p>

<p>
<?php 
	}
	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	// Updating widget replacing old instances with new
	function update( $new_instance, $old_instance ) {
 		$instance = $old_instance;
 		$instance['title'] = strip_tags( $new_instance['title'] );
	}
} // Ends class fwtsw_Widget
