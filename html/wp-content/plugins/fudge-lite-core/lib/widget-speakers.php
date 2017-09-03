<?php

class Fudge_Lite_Speakers extends WP_Widget {

    public function __construct() {
	$widget_ops = array(
	    'classname'	 => 'fudge_lite_speakers main-bkg-color',
	    'description'	 => __('Shows a section displaying speakers created in the Speakers custom post type', 'fudge-lite'),
	);
	parent::__construct('fudge_lite_speakers', __('Fudge Lite Speaker List', 'fudge-lite'), $widget_ops);
    }

    public function widget($args, $instance) {
	$fudge_lite_speakers_title	 = isset($instance['speakerstitle']) ? $instance['speakerstitle'] : '';
	$fudge_lite_speakers_tagline	 = isset($instance['speakerstagline']) ? $instance['speakerstagline'] : '';
	$fudge_lite_speakers_more_text	 = isset($instance['speakersmoretext']) ? $instance['speakersmoretext'] : '';
	$fudge_lite_speakers_less_text	 = isset($instance['speakerslesstext']) ? $instance['speakerslesstext'] : '';

	echo $args['before_widget'];
	include(locate_template('templates/widget-speakers.php', false, false));
	echo $args['after_widget'];
    }

    public function form($instance) {
	$speakerstitle		 = isset($instance['speakerstitle']) ? $instance['speakerstitle'] : '';
	$speakerstagline	 = isset($instance['speakerstagline']) ? $instance['speakerstagline'] : '';
	$speakersmoretext	 = isset($instance['speakersmoretext']) ? $instance['speakersmoretext'] : __('View More', 'fudge-lite');
	$speakerslesstext	 = isset($instance['speakerslesstext']) ? $instance['speakerslesstext'] : __('View Less', 'fudge-lite');
	?>
	<label><?php _e('Title:', 'fudge-lite'); ?></label><br />
	<input type="text" class="widefat" name="<?php echo esc_attr($this->get_field_name('speakerstitle')); ?>" value="<?php echo esc_attr($speakerstitle); ?>" />
	<br /><br />
	<label><?php _e('Tagline:', 'fudge-lite'); ?></label><br />
	<input type="tagline" class="widefat" name="<?php echo esc_attr($this->get_field_name('speakerstagline')); ?>" value="<?php echo esc_attr($speakerstagline); ?>"/>
	<br /><br />
	<label><?php _e('"View More" Button Text:', 'fudge-lite'); ?></label>
	<input type="text" class="widefat" name="<?php echo esc_attr($this->get_field_name('speakersmoretext')); ?>" value="<?php echo esc_attr($speakersmoretext); ?>"/>
	<br /><br />
	<label><?php _e('"View Less" Button Text:', 'fudge-lite'); ?></label>
	<input type="text" class="widefat" name="<?php echo esc_attr($this->get_field_name('speakerslesstext')); ?>" value="<?php echo esc_attr($speakerslesstext); ?>"/>
	<?php
    }

    public function update($new_instance, $old_instance) {
	$instance			 = array();
	$instance['speakerstitle']	 = (!empty($new_instance['speakerstitle']) ) ? sanitize_text_field($new_instance['speakerstitle']) : '';
	$instance['speakerstagline']	 = (!empty($new_instance['speakerstagline']) ) ? sanitize_text_field($new_instance['speakerstagline']) : '';
	$instance['speakersmoretext']	 = (!empty($new_instance['speakersmoretext']) ) ? sanitize_text_field($new_instance['speakersmoretext']) : '';
	$instance['speakerslesstext']	 = (!empty($new_instance['speakerslesstext']) ) ? sanitize_text_field($new_instance['speakerslesstext']) : '';
	return $instance;
    }

}

add_action('widgets_init', create_function('', 'return register_widget("Fudge_Lite_Speakers");'));
