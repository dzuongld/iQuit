<?php

class Fudge_Lite_Contact extends WP_Widget {

    public function __construct() {
	$widget_ops = array(
	    'classname'	 => 'fudge_lite_contact',
	    'description'	 => __('Shows a section displaying the latest four posts', 'fudge-lite'),
	);
	parent::__construct('fudge_lite_contact', __('Fudge Lite Contact Form', 'fudge-lite'), $widget_ops);
    }

    public function widget($args, $instance) {
	$fudge_lite_contact_title	 = isset($instance['contacttitle']) ? $instance['contacttitle'] : '';
	$fudge_lite_contact_tagline	 = isset($instance['contacttagline']) ? $instance['contacttagline'] : '';
	$fudge_lite_contact_show_social	 = isset($instance['contactshowsocial']) ? $instance['contactshowsocial'] : '';

	echo $args['before_widget'];
	include(locate_template('templates/widget-contact.php', false, false));
	echo $args['after_widget'];
    }

    public function form($instance) {
	$contacttitle		 = isset($instance['contacttitle']) ? $instance['contacttitle'] : '';
	$contacttagline		 = isset($instance['contacttagline']) ? $instance['contacttagline'] : '';
	$contactshowsocial	 = isset($instance['contactshowsocial']) ? $instance['contactshowsocial'] : '';
	?>
	<label><?php _e('Title:', 'fudge-lite'); ?></label><br />
	<input type="text" class="widefat" name="<?php echo esc_attr($this->get_field_name('contacttitle')); ?>" value="<?php echo esc_attr($contacttitle); ?>" />
	<br /><br />
	<label><?php _e('Tagline:', 'fudge-lite'); ?></label><br />
	<input type="text" class="widefat" name="<?php echo esc_attr($this->get_field_name('contacttagline')); ?>" value="<?php echo esc_attr($contacttagline); ?>"/>
	<br /><br />
	<label><?php _e('Show social links:', 'fudge-lite'); ?></label>
	<input type="checkbox" class="widefat" name="<?php echo esc_attr($this->get_field_name('contactshowsocial')); ?>" value="1" <?php echo(!empty($contactshowsocial) ? 'checked="checked"' : ''); ?>/>
	<br /><br />
	<?php
    }

    public function update($new_instance, $old_instance) {
	$instance			 = array();
	$instance['contacttitle']	 = (!empty($new_instance['contacttitle']) ) ? sanitize_text_field($new_instance['contacttitle']) : '';
	$instance['contacttagline']	 = (!empty($new_instance['contacttagline']) ) ? sanitize_text_field($new_instance['contacttagline']) : '';
	$instance['contactshowsocial']	 = (!empty($new_instance['contactshowsocial']) ) ? sanitize_text_field($new_instance['contactshowsocial']) : '';
	return $instance;
    }

}

add_action('widgets_init', create_function('', 'return register_widget("Fudge_Lite_Contact");'));
