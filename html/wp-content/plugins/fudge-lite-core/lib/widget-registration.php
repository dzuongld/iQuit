<?php

class Fudge_Lite_Registration extends WP_Widget {

    public function __construct() {
        $widget_ops = array(
            'classname'   => 'fudge_lite_registration',
            'description' => __('Shows registration information & ticket display', 'fudge-lite'),
        );
        parent::__construct('fudge_lite_registration', __('Fudge Lite Registration', 'fudge-lite'), $widget_ops);
    }

    public function widget($args, $instance) {
        $fudge_lite_registration_title      = isset($instance['registrationtitle']) ? $instance['registrationtitle'] : '';
        $fudge_lite_registration_tagline    = isset($instance['registrationtagline']) ? $instance['registrationtagline'] : '';
        $fudge_lite_registration_text       = isset($instance['registrationtext']) ? $instance['registrationtext'] : '';
        $fudge_lite_registration_eventbrite = isset($instance['registrationeventbrite']) ? $instance['registrationeventbrite'] : '';

        echo $args['before_widget'];
        include(locate_template('templates/widget-registration.php', false, false));
        echo $args['after_widget'];
    }

    public function form($instance) {
        $registrationtitle      = isset($instance['registrationtitle']) ? $instance['registrationtitle'] : '';
        $registrationtagline    = isset($instance['registrationtagline']) ? $instance['registrationtagline'] : '';
        $registrationtext       = isset($instance['registrationtext']) ? $instance['registrationtext'] : '';
        $registrationeventbrite = isset($instance['registrationeventbrite']) ? $instance['registrationeventbrite'] : '';
        ?>
        <label><?php _e('Title:', 'fudge-lite'); ?></label><br />
        <input type="text" class="widefat" name="<?php echo esc_attr($this->get_field_name('registrationtitle')); ?>" value="<?php echo esc_attr($registrationtitle); ?>" />
        <br /><br />
        <label><?php _e('Tagline:', 'fudge-lite'); ?></label><br />
        <input type="tagline" class="widefat" name="<?php echo esc_attr($this->get_field_name('registrationtagline')); ?>" value="<?php echo esc_attr($registrationtagline); ?>"/>
        <br /><br />
        <label><?php _e('Main Text:', 'fudge-lite'); ?></label><br />
        <textarea rows="10" class="widefat" name="<?php echo esc_attr($this->get_field_name('registrationtext')); ?>"><?php echo esc_textarea($registrationtext); ?></textarea>
        <br /><br />
        <label><?php _e('Registration Embed Code:', 'fudge-lite'); ?></label><br />
        <textarea rows="10" class="widefat" name="<?php echo esc_attr($this->get_field_name('registrationeventbrite')); ?>"><?php echo esc_textarea($registrationeventbrite); ?></textarea>
        <?php
    }

    public function update($new_instance, $old_instance) {
        $instance                           = array();
        $instance['registrationtitle']      = (!empty($new_instance['registrationtitle']) ) ? sanitize_text_field($new_instance['registrationtitle']) : '';
        $instance['registrationtagline']    = (!empty($new_instance['registrationtagline']) ) ? sanitize_text_field($new_instance['registrationtagline']) : '';
        $instance['registrationtext']       = (!empty($new_instance['registrationtext']) ) ? $new_instance['registrationtext'] : '';
        $instance['registrationeventbrite'] = (!empty($new_instance['registrationeventbrite']) ) ? $new_instance['registrationeventbrite'] : '';
        return $instance;
    }

}

add_action('widgets_init', create_function('', 'return register_widget("Fudge_Lite_Registration");')
);
