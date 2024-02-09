<?php 
/*
Plugin Name: Adding Widgets
Description: This will add the widgeet for custom html 
Version:1.0
Author:Abdullah Sarfraz Ali 
Author URI: http://positivawebsite.local/
*/

class My_Custom_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'my-custom-widget', // Base ID
            'HTML Markup', // Name
            array( 'description' => 'A widget for displaying and saving custom HTML markup' )
        );
    }



    public function form( $instance ) {
        $html_markup = ! empty( $instance['html_markup'] ) ? $instance['html_markup'] : '';
        ?>

        <p>
            <label for="<?php echo $this->get_field_id( 'html_markup' ); ?>">HTML Markup:</label>
            <textarea class="widefat" rows="10" id="<?php echo $this->get_field_id( 'html_markup' ); ?>" name="<?php echo $this->get_field_name( 'html_markup' ); ?>"><?php echo esc_textarea( $html_markup ); ?></textarea>
        </p>
        <?php
    }

    public function update( $new_instance, $old_instance ) {
        $instance = $old_instance;

        $instance['html_markup'] = wp_kses_post( $new_instance['html_markup'] ); // Sanitize HTML
        return $instance;
    }

    public function widget( $args, $instance ) {
        echo $args['before_widget'];
        echo '<div class="widget-content">';
        if ( ! empty( $instance['html_markup'] ) ) {
            // Sanitize and escape HTML before outputting
            echo wp_kses_post( $instance['html_markup'] );
        }
        echo '</div>';
        echo $args['after_widget'];
    }

}

// Register the widget
function my_custom_widget_register() {
    register_widget( 'My_Custom_Widget' );
}
add_action( 'widgets_init', 'my_custom_widget_register' );
