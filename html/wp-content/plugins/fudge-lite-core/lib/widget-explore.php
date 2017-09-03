<?php

class Fudge_Lite_Explore extends WP_Widget {

    public function __construct() {
	$widget_ops = array(
	    'classname'	 => 'fudge_lite_explore',
	    'description'	 => __('Shows a section displaying points of interest & maps', 'fudge-lite'),
	);
	parent::__construct('fudge_lite_explore', __('Fudge Lite Points of Interest', 'fudge-lite'), $widget_ops);
    }

    public function widget($args, $instance) {
	$fudge_lite_explore_main_title		 = isset($instance['exploremaintitle']) ? $instance['exploremaintitle'] : '';
	$fudge_lite_explore_secondary_title	 = isset($instance['exploresecondarytitle']) ? $instance['exploresecondarytitle'] : '';
	$fudge_lite_explore_tagline		 = isset($instance['exploretagline']) ? $instance['exploretagline'] : '';
	$poi_query				 = new WP_Query(array('post_type' => 'poi', 'orderby' => 'menu_order', 'order' => 'ASC'));

	echo $args['before_widget'];
	include(locate_template('templates/widget-explore.php', false, false));
	echo $args['after_widget'];
    }

    public function form($instance) {
	$exploremaintitle	 = isset($instance['exploremaintitle']) ? $instance['exploremaintitle'] : '';
	$exploresecondarytitle	 = isset($instance['exploresecondarytitle']) ? $instance['exploresecondarytitle'] : '';
	$exploretagline		 = isset($instance['exploretagline']) ? $instance['exploretagline'] : '';
	?>
	<label><?php _e('Main Title:', 'fudge-lite'); ?></label><br />
	<input type="text" class="widefat" name="<?php echo esc_attr($this->get_field_name('exploremaintitle')); ?>" value="<?php echo esc_attr($exploremaintitle); ?>" />
	<br /><br />
	<label><?php _e('Secondary Title:', 'fudge-lite'); ?></label><br />
	<input type="text" class="widefat" name="<?php echo esc_attr($this->get_field_name('exploresecondarytitle')); ?>" value="<?php echo esc_attr($exploresecondarytitle); ?>" />
	<br /><br />
	<label><?php _e('Tagline:', 'fudge-lite'); ?></label><br />
	<input type="tagline" class="widefat" name="<?php echo esc_attr($this->get_field_name('exploretagline')); ?>" value="<?php echo esc_attr($exploretagline); ?>"/>
	<?php
    }

    public function update($new_instance, $old_instance) {
	$instance				 = array();
	$instance['exploremaintitle']		 = (!empty($new_instance['exploremaintitle']) ) ? sanitize_text_field($new_instance['exploremaintitle']) : '';
	$instance['exploresecondarytitle']	 = (!empty($new_instance['exploresecondarytitle']) ) ? sanitize_text_field($new_instance['exploresecondarytitle']) : '';
	$instance['exploretagline']		 = (!empty($new_instance['exploretagline']) ) ? sanitize_text_field($new_instance['exploretagline']) : '';
	return $instance;
    }

}

add_action('widgets_init', create_function('', 'return register_widget("Fudge_Lite_Explore");'));
