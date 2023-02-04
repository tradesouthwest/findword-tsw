<?php
/**
 * Register widget with WordPress.
 */
class Findword_Tsw_Widget extends WP_Widget {

	function __construct() {
    parent::__construct(
    // Base ID of widget
    'Findword_Tsw_Widget',

    // Widget name will appear in UI
    __( 'Find Words', 'findword-tsw' ), // Name
	array(
        'description' => __( 'Adds Widget for findword-tsw Plugin',
                            'findword-tsw' ),
        ));
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		
        $title = apply_filters( 'widget_title', $instance['title'] );
		// before and after widget arguments are defined by themes
		echo $args['before_widget'];
		
        if ( ! empty( $title ) ) {
            echo $args['before_title'] . $title . $args['after_title']; 
        }

        echo '<div class="findwordtsw-widget-container">';
       
        $atname = ( empty( get_option('fwtsw_option_main')['fwtsw_wrapper_class'] ) ) 
        		? 'hentry' 
        		: sanitize_text_field( get_option(
				'fwtsw_option_main')['fwtsw_wrapper_class'] );
		$subtxt = ( empty( get_option('fwtsw_option_plus')['fwtsw_submit_text'] ) ) 
                ? __( 'Open Finder', 'findword-tsw' ) 
                : get_option('fwtsw_option_plus')['fwtsw_submit_text'];
	
        echo '<div class="findword-app" data-finder-wrapper 
                data-finder-scroll-offset="175">

	    <button class="finder-activator" data-finder-activator>'
		. esc_attr__( $subtxt, 'findword-tsw' ) . '</button>';

		if (function_exists('findword_tswplus_toolbox_render') ) 
		do_action( 'findword_tswplus_toolbox' );

		echo '</div>
		<script id="findword-footer-attribute">
		jQuery(document).ready(function(){
			jQuery(".'. esc_attr($atname) . '").attr("data", "data-finder-content");
		});	</script>';

        // return after widget parts
        echo '</div>';
}
	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	// Widget Backend
	public function form( $instance ) {
	if ( isset( $instance[ 'title' ] ) ) {
	$title = $instance[ 'title' ];
	}
	else {
	$title = __( 'Widget Findwords', 'optsw' );
	}
	// Widget admin form
	?>
	<p>
	<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php esc_html_e( 'Title:', 'optsw' ); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
	</p>
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
	public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        return $instance;
	}
} // Ends class fwtsw_Widget
