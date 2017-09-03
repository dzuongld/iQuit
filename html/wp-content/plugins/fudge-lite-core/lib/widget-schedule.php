<?php

class Fudge_Lite_Schedule extends WP_Widget {

    public function __construct() {
	$widget_ops = array(
	    'classname'	 => 'fudge_lite_schedule',
	    'description'	 => __('Displays Event Schedule widget', 'fudge-lite'),
	);
	parent::__construct('fudge_lite_schedule', __('Fudge Lite Event Schedule', 'fudge-lite'), $widget_ops);
    }

    public function widget($args, $instance) {
	$fudge_lite_schedule_title	 = isset($instance['scheduletitle']) ? $instance['scheduletitle'] : '';
	$fudge_lite_schedule_tagline	 = isset($instance['scheduletagline']) ? $instance['scheduletagline'] : '';
	$fudge_lite_schedule_text	 = isset($instance['scheduletext']) ? $instance['scheduletext'] : '';
	$session_dates			 = fudge_lite_get_session_dates();
	$session_tracks			 = get_terms('session-track');
	$session_locations		 = get_terms('session-location');
	$fudge_lite_schedule_more_text	 = isset($instance['schedulemoretext']) ? $instance['schedulemoretext'] : '';
	$fudge_lite_schedule_less_text	 = isset($instance['schedulelesstext']) ? $instance['schedulelesstext'] : '';

	echo $args['before_widget'];
	include(locate_template('templates/widget-schedule.php', false, false));
	echo $args['after_widget'];
    }

    public function form($instance) {
	$scheduletitle		 = isset($instance['scheduletitle']) ? $instance['scheduletitle'] : '';
	$scheduletagline	 = isset($instance['scheduletagline']) ? $instance['scheduletagline'] : '';
	$scheduletext		 = isset($instance['scheduletext']) ? $instance['scheduletext'] : '';
	$schedulemoretext	 = isset($instance['schedulemoretext']) ? $instance['schedulemoretext'] : __('View More', 'fudge-lite');
	$schedulelesstext	 = isset($instance['schedulelesstext']) ? $instance['schedulelesstext'] : __('View Less', 'fudge-lite');
	?>
	<label><?php _e('Title:', 'fudge-lite'); ?></label><br />
	<input type="text" class="widefat" name="<?php echo esc_attr($this->get_field_name('scheduletitle')); ?>" value="<?php echo esc_attr($scheduletitle); ?>" />
	<br /><br />
	<label><?php _e('Tagline:', 'fudge-lite'); ?></label><br />
	<input type="tagline" class="widefat" name="<?php echo esc_attr($this->get_field_name('scheduletagline')); ?>" value="<?php echo esc_attr($scheduletagline); ?>"/>
	<br /><br />
	<label><?php _e('Main Text:', 'fudge-lite'); ?></label><br />
	<textarea rows="10" class="widefat" name="<?php echo esc_attr($this->get_field_name('scheduletext')); ?>"><?php echo esc_attr($scheduletext); ?></textarea>
	<br /><br />
	<?php _e('"View More" Button Text:', 'fudge-lite'); ?>
	<input type="text" class="widefat" name="<?php echo esc_attr($this->get_field_name('schedulemoretext')); ?>" value="<?php echo esc_attr($schedulemoretext); ?>"/>
	<br /><br />
	<?php _e('"View Less" Button Text:', 'fudge-lite'); ?>
	<input type="text" class="widefat" name="<?php echo esc_attr($this->get_field_name('schedulelesstext')); ?>" value="<?php echo esc_attr($schedulelesstext); ?>"/>
	<?php
    }

    public function update($new_instance, $old_instance) {
	$instance			 = array();
	$instance['scheduletitle']	 = (!empty($new_instance['scheduletitle']) ) ? sanitize_text_field($new_instance['scheduletitle']) : '';
	$instance['scheduletagline']	 = (!empty($new_instance['scheduletagline']) ) ? sanitize_text_field($new_instance['scheduletagline']) : '';
	$instance['scheduletext']	 = (!empty($new_instance['scheduletext']) ) ? sanitize_text_field($new_instance['scheduletext']) : '';
	$instance['schedulemoretext']	 = (!empty($new_instance['schedulemoretext']) ) ? sanitize_text_field($new_instance['schedulemoretext']) : '';
	$instance['schedulelesstext']	 = (!empty($new_instance['schedulelesstext']) ) ? sanitize_text_field($new_instance['schedulelesstext']) : '';
	return $instance;
    }

}

add_action('widgets_init', create_function('', 'return register_widget("Fudge_Lite_Schedule");'));
