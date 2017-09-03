<?php

class Fudge_Lite_Media extends WP_Widget {

    public function __construct() {
	$widget_ops = array(
	    'classname'	 => 'fudge_lite_media main-bkg-color',
	    'description'	 => __('Shows a section displaying media by category in the media custom post type', 'fudge-lite'),
	);
	parent::__construct('fudge_lite_media', __('Fudge Lite Media Grid', 'fudge-lite'), $widget_ops);
    }

    public function widget($args, $instance) {
	$fudge_lite_media_title		 = isset($instance['mediatitle']) ? $instance['mediatitle'] : '';
	$fudge_lite_media_tagline	 = isset($instance['mediatagline']) ? $instance['mediatagline'] : '';
	$fudge_lite_media_more_text	 = isset($instance['mediamoretext']) ? $instance['mediamoretext'] : '';
	$fudge_lite_media_less_text	 = isset($instance['medialesstext']) ? $instance['medialesstext'] : '';

	echo $args['before_widget'];
	include(locate_template('templates/widget-media.php', false, false));
	echo $args['after_widget'];
    }

    public function form($instance) {
	$mediatitle	 = isset($instance['mediatitle']) ? $instance['mediatitle'] : '';
	$mediatagline	 = isset($instance['mediatagline']) ? $instance['mediatagline'] : '';
	$mediamoretext	 = isset($instance['mediamoretext']) ? $instance['mediamoretext'] : __('View More', 'fudge-lite');
	$medialesstext	 = isset($instance['medialesstext']) ? $instance['medialesstext'] : __('View Less', 'fudge-lite');
	?>
	<label><?php _e('Title:', 'fudge-lite'); ?></label><br />
	<input type="text" class="widefat" name="<?php echo esc_attr($this->get_field_name('mediatitle')); ?>" value="<?php echo esc_attr($mediatitle); ?>" />
	<br /><br />
	<label><?php _e('Tagline:', 'fudge-lite'); ?></label><br />
	<input type="tagline" class="widefat" name="<?php echo esc_attr($this->get_field_name('mediatagline')); ?>" value="<?php echo esc_attr($mediatagline); ?>"/>
	<br /><br />
	<label><?php _e('"View More" Button Text:', 'fudge-lite'); ?></label>
	<input type="text" class="widefat" name="<?php echo esc_attr($this->get_field_name('mediamoretext')); ?>" value="<?php echo esc_attr($mediamoretext); ?>"/>
	<br /><br />
	<label><?php _e('"View Less" Button Text:', 'fudge-lite'); ?></label>
	<input type="text" class="widefat" name="<?php echo esc_attr($this->get_field_name('medialesstext')); ?>" value="<?php echo esc_attr($medialesstext); ?>"/>
	<?php
    }

    public function update($new_instance, $old_instance) {
	$instance			 = array();
	$instance['mediatitle']		 = (!empty($new_instance['mediatitle']) ) ? sanitize_text_field($new_instance['mediatitle']) : '';
	$instance['mediatagline']	 = (!empty($new_instance['mediatagline']) ) ? sanitize_text_field($new_instance['mediatagline']) : '';
	$instance['mediamoretext']	 = (!empty($new_instance['mediamoretext']) ) ? sanitize_text_field($new_instance['mediamoretext']) : '';
	$instance['medialesstext']	 = (!empty($new_instance['medialesstext']) ) ? sanitize_text_field($new_instance['medialesstext']) : '';
	return $instance;
    }

}

add_action('widgets_init', create_function('', 'return register_widget("Fudge_Lite_Media");'));
