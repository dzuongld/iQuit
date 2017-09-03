<?php
/*
  Plugin Name: Fudge Lite Core
  Description: Core functionality for Fudge Lite theme
  Version:     1.0
  Author:      Showthemes
  Author URI:  http://www.showthemes.com
 */

require_once(plugin_dir_path(__FILE__) . 'lib/geocode.php');
require_once(plugin_dir_path(__FILE__) . 'lib/widget-registration.php');
require_once(plugin_dir_path(__FILE__) . 'lib/widget-explore.php');
require_once(plugin_dir_path(__FILE__) . 'lib/widget-media.php');
require_once(plugin_dir_path(__FILE__) . 'lib/widget-schedule.php');
require_once(plugin_dir_path(__FILE__) . 'lib/widget-speakers.php');
require_once(plugin_dir_path(__FILE__) . 'lib/widget-contact.php');

add_action('init', 'fudge_lite_core_init', 1);
add_action('add_meta_boxes', 'fudge_lite_core_metaboxes');
add_action('save_post', 'fudge_lite_core_save_post');
add_action('session-track_add_form_fields', 'fudge_lite_core_add_track_color');
add_action('session-track_edit_form_fields', 'fudge_lite_core_edit_track_color');
add_action('edit_session-track', 'fudge_lite_core_edit_track');
add_action('create_session-track', 'fudge_lite_core_edit_track');
add_action('admin_enqueue_scripts', 'fudge_lite_core_admin_enqueue_scripts');
add_action('admin_head-edit-tags.php', 'fudge_lite_core_admin_head');
add_action('admin_head-term.php', 'fudge_lite_core_admin_head');
add_action('admin_footer-edit-tags.php', 'fudge_lite_core_admin_footer');
add_action('admin_footer-term.php', 'fudge_lite_core_admin_footer');
add_action('wp_enqueue_scripts', 'fudge_lite_core_enqueue_scripts');
add_action('wp_ajax_nopriv_send_contact_email', 'fudge_lite_core_ajax_send_contact_email');
add_action('wp_ajax_send_contact_email', 'fudge_lite_core_ajax_send_contact_email');

function fudge_lite_core_init() {
    register_post_type('event-media', array(
	'labels'		 => array(
	    'name'			 => __('Event Media', 'fudge-lite'),
	    'singular_name'		 => __('Event Media', 'fudge-lite'),
	    'add_new'		 => __('Add New', 'fudge-lite'),
	    'add_new_item'		 => __('Add New Event Media', 'fudge-lite'),
	    'edit_item'		 => __('Edit Event Media', 'fudge-lite'),
	    'new_item'		 => __('New Event Media', 'fudge-lite'),
	    'view_item'		 => __('View Event Media', 'fudge-lite'),
	    'search_items'		 => __('Search Event Media', 'fudge-lite'),
	    'not_found'		 => __('No Event Media found', 'fudge-lite'),
	    'not_found_in_trash'	 => __('No Event Media found in trash', 'fudge-lite'),
	    'menu_name'		 => __('Event Media', 'fudge-lite'),
	),
	'public'		 => true,
	'show_ui'		 => true,
	'capability_type'	 => 'post',
	'hierarchical'		 => false,
	'rewrite'		 => true,
	'query_var'		 => false,
	'supports'		 => array('title', 'editor', 'thumbnail')
    ));

    register_post_type('poi', array(
	'labels'		 => array(
	    'name'			 => __('Points of Interest', 'fudge-lite'),
	    'singular_name'		 => __('Point of Interest', 'fudge-lite'),
	    'add_new'		 => __('Add New', 'fudge-lite'),
	    'add_new_item'		 => __('Add New Point of Interest', 'fudge-lite'),
	    'edit_item'		 => __('Edit Point of Interest', 'fudge-lite'),
	    'new_item'		 => __('New Point of Interest', 'fudge-lite'),
	    'view_item'		 => __('View Point of Interest', 'fudge-lite'),
	    'search_items'		 => __('Search Points of Interest', 'fudge-lite'),
	    'not_found'		 => __('No Points of Interest found', 'fudge-lite'),
	    'not_found_in_trash'	 => __('No Points of Interest found in trash', 'fudge-lite'),
	    'menu_name'		 => __('Points of Interest', 'fudge-lite'),
	),
	'public'		 => true,
	'show_ui'		 => true,
	'capability_type'	 => 'post',
	'hierarchical'		 => false,
	'rewrite'		 => true,
	'query_var'		 => false,
	'supports'		 => array('title', 'editor', 'page-attributes')
    ));

    register_post_type('speaker', array(
	'labels'		 => array(
	    'name'			 => __('Speakers', 'fudge-lite'),
	    'singular_name'		 => __('Speaker', 'fudge-lite'),
	    'add_new'		 => __('Add New', 'fudge-lite'),
	    'add_new_item'		 => __('Add New Speaker', 'fudge-lite'),
	    'edit_item'		 => __('Edit Speaker', 'fudge-lite'),
	    'new_item'		 => __('New Speaker', 'fudge-lite'),
	    'view_item'		 => __('View Speaker', 'fudge-lite'),
	    'search_items'		 => __('Search Speakers', 'fudge-lite'),
	    'not_found'		 => __('No Speakers found', 'fudge-lite'),
	    'not_found_in_trash'	 => __('No Speakers found in trash', 'fudge-lite'),
	    'menu_name'		 => __('Speakers', 'fudge-lite'),
	),
	'public'		 => true,
	'publicly_queryable'	 => true,
	'show_ui'		 => true,
	'show_in_menu'		 => true,
	'query_var'		 => true,
	'rewrite'		 => array('slug' => 'speakers'),
	'capability_type'	 => 'post',
	'has_archive'		 => false,
	'hierarchical'		 => false,
	'menu_position'		 => 5,
	'supports'		 => array('title', 'editor', 'thumbnail', 'page-attributes')
    ));

    register_post_type('session', array(
	'labels'		 => array(
	    'name'			 => __('Sessions', 'fudge-lite'),
	    'singular_name'		 => __('Session', 'fudge-lite'),
	    'add_new'		 => __('Add New', 'fudge-lite'),
	    'add_new_item'		 => __('Add New Session', 'fudge-lite'),
	    'edit_item'		 => __('Edit Session', 'fudge-lite'),
	    'new_item'		 => __('New Session', 'fudge-lite'),
	    'view_item'		 => __('View Session', 'fudge-lite'),
	    'search_items'		 => __('Search Sessions', 'fudge-lite'),
	    'not_found'		 => __('No Sessions found', 'fudge-lite'),
	    'not_found_in_trash'	 => __('No Sessions found in trash', 'fudge-lite'),
	    'menu_name'		 => __('Sessions', 'fudge-lite'),
	),
	'public'		 => true,
	'publicly_queryable'	 => true,
	'show_ui'		 => true,
	'show_in_menu'		 => true,
	'query_var'		 => true,
	'rewrite'		 => array('slug' => 'sessions'),
	'capability_type'	 => 'post',
	'has_archive'		 => false,
	'hierarchical'		 => false,
	'menu_position'		 => 5,
	'supports'		 => array('title', 'editor', 'thumbnail')
    ));
    register_taxonomy('media-type', 'event-media', array(
	'hierarchical'	 => true,
	'labels'	 => array(
	    'name'			 => __('Media Types', 'fudge-lite'),
	    'singular_name'		 => __('Media Type', 'fudge-lite'),
	    'search_items'		 => __('Search Media Types', 'fudge-lite'),
	    'all_items'		 => __('All Media Types', 'fudge-lite'),
	    'parent_item'		 => __('Parent Media Type', 'fudge-lite'),
	    'parent_item_colon'	 => __('Parent Media Type:', 'fudge-lite'),
	    'edit_item'		 => __('Edit Media Type', 'fudge-lite'),
	    'update_item'		 => __('Update Media Type', 'fudge-lite'),
	    'add_new_item'		 => __('Add New Media Type', 'fudge-lite'),
	    'new_item_name'		 => __('New Media Type', 'fudge-lite'),
	    'menu_name'		 => __('Media Types', 'fudge-lite'),
	),
	'query_var'	 => true,
	'rewrite'	 => true)
    );
    register_taxonomy('session-track', 'session', array(
	'hierarchical'	 => true,
	'labels'	 => array(
	    'name'			 => __('Session Tracks', 'fudge-lite'),
	    'singular_name'		 => __('Session Track', 'fudge-lite'),
	    'search_items'		 => __('Search Session Tracks', 'fudge-lite'),
	    'all_items'		 => __('All Session Tracks', 'fudge-lite'),
	    'parent_item'		 => __('Parent Session Track', 'fudge-lite'),
	    'parent_item_colon'	 => __('Parent Session Track:', 'fudge-lite'),
	    'edit_item'		 => __('Edit Session Track', 'fudge-lite'),
	    'update_item'		 => __('Update Session Track', 'fudge-lite'),
	    'add_new_item'		 => __('Add New Session Track', 'fudge-lite'),
	    'new_item_name'		 => __('New Session Track', 'fudge-lite'),
	    'menu_name'		 => __('Tracks', 'fudge-lite'),
	),
	'query_var'	 => true,
	'rewrite'	 => true)
    );
    register_taxonomy('session-location', 'session', array(
	'hierarchical'	 => true,
	'labels'	 => array(
	    'name'			 => __('Session Locations', 'fudge-lite'),
	    'singular_name'		 => __('Session Location', 'fudge-lite'),
	    'search_items'		 => __('Search Session Locations', 'fudge-lite'),
	    'all_items'		 => __('All Session Locations', 'fudge-lite'),
	    'parent_item'		 => __('Parent Session Location', 'fudge-lite'),
	    'parent_item_colon'	 => __('Parent Session Location:', 'fudge-lite'),
	    'edit_item'		 => __('Edit Session Location', 'fudge-lite'),
	    'update_item'		 => __('Update Session Location', 'fudge-lite'),
	    'add_new_item'		 => __('Add New Session Location', 'fudge-lite'),
	    'new_item_name'		 => __('New Session Location', 'fudge-lite'),
	    'menu_name'		 => __('Locations', 'fudge-lite'),
	),
	'query_var'	 => true,
	'rewrite'	 => true)
    );
    register_meta('term', 'color', 'fudge_lite_sanitize_hex');
}

function fudge_lite_core_metaboxes() {
    $post_id = isset($_GET['post']) ? $_GET['post'] : (isset($_POST['post_ID']) ? $_POST['post_ID'] : 0);

    add_meta_box('metabox-media', __('Media Content', 'fudge-lite'), 'fudge_lite_core_metabox_media', 'event-media', 'normal', 'high');
    add_meta_box('metabox-poi', __('POI Address Info', 'fudge-lite'), 'fudge_lite_core_metabox_poi', 'poi', 'normal', 'high');
    add_meta_box('metabox-speaker', __('Speaker Details', 'fudge-lite'), 'fudge_lite_core_metabox_speaker', 'speaker', 'normal', 'high');
    add_meta_box('metabox-session', __('Session Details', 'fudge-lite'), 'fudge_lite_core_metabox_session', 'session', 'normal', 'high');
    add_meta_box('metabox-session-speakers', __('Speakers', 'fudge-lite'), 'fudge_lite_core_metabox_session_speakers', 'session', 'normal', 'high');
}

function fudge_lite_core_metabox_media($post) {
    $video_url = get_post_meta($post->ID, 'video_url', true);
    ?>
    <p>
        <label for="video_url"><?php _e('Video URL', 'fudge-lite'); ?></label>
        <input type="text" class="widefat" id="video_url" name="video_url" value="<?php echo esc_attr($video_url); ?>" />
    </p>
    <?php
    wp_nonce_field('update_media', 'fudge_lite');
}

function fudge_lite_core_metabox_poi($post) {
    $street_address_1	 = get_post_meta($post->ID, 'street_address_1', true);
    $street_address_2	 = get_post_meta($post->ID, 'street_address_2', true);
    $city			 = get_post_meta($post->ID, 'city', true);
    $postal_code		 = get_post_meta($post->ID, 'postal_code', true);
    $country		 = get_post_meta($post->ID, 'country', true);
    ?>
    <p>
        <label for="street_address_1"><?php _e('Street Address 1', 'fudge-lite'); ?></label>
        <input type="text" class="widefat" id="street_address_1" name="street_address_1" value="<?php echo esc_attr($street_address_1); ?>" />
    </p>
    <p>
        <label for="street_address_2"><?php _e('Street Address 2', 'fudge-lite'); ?></label>
        <input type="text" class="widefat" id="street_address_2" name="street_address_2" value="<?php echo esc_attr($street_address_2); ?>" />
    </p>
    <p>
        <label for="city"><?php _e('City', 'fudge-lite'); ?></label>
        <input type="text" class="widefat" id="city" name="city" value="<?php echo esc_attr($city); ?>" />
    </p>
    <p>
        <label for="postal_code"><?php _e('Postal Code / Zip Code', 'fudge-lite'); ?></label>
        <input type="text" class="widefat" id="postal_code" name="postal_code" value="<?php echo esc_attr($postal_code); ?>" />
    </p>
    <p>
        <label for="country"><?php _e('Country', 'fudge-lite'); ?></label>
        <input type="text" class="widefat" id="country" name="country" value="<?php echo esc_attr($country); ?>" />
    </p>
    <?php
    wp_nonce_field('update_poi', 'fudge_lite');
}

function fudge_lite_core_metabox_speaker($post) {
    $company		 = get_post_meta($post->ID, 'company', true);
    $short_bio		 = get_post_meta($post->ID, 'short_bio', true);
    $website_url		 = get_post_meta($post->ID, 'website_url', true);
    $twitter_username	 = get_post_meta($post->ID, 'twitter_username', true);
    ?>
    <p>
        <label for="company"><?php _e('Company', 'fudge-lite'); ?></label>
        <input type="text" class="widefat" id="company" name="company" value="<?php echo esc_attr($company); ?>" />
    </p>
    <p>
        <label for="short_bio"><?php _e('Short Bio', 'fudge-lite'); ?></label>
        <input type="text" class="widefat" id="short_bio" name="short_bio" value="<?php echo esc_attr($short_bio); ?>" />
    </p>

    <p>
        <label for="website_url">Website Url</label>
        <input type="text" class="widefat" id="website_url" name="website_url" value="<?php echo esc_url($website_url); ?>" />
    </p>
    <p>
        <label for="twitter_username"><?php _e('Twitter Username', 'fudge-lite'); ?></label>
        <input type="text" class="widefat" id="twitter_username" name="twitter_username" value="<?php echo esc_attr($twitter_username); ?>" />
    </p>
    <?php
    wp_nonce_field('update_speaker', 'fudge_lite');
}

function fudge_lite_core_metabox_session($post) {
    $date		 = get_post_meta($post->ID, 'date', true);
    $time		 = get_post_meta($post->ID, 'time', true);
    $end_time	 = get_post_meta($post->ID, 'end_time', true);
    ?>
    <script type="text/javascript">
        jQuery(document).ready(function () {
    	jQuery('#date_str').datepicker({
    	    changeMonth: true,
    	    changeYear: true,
    	    dateFormat: 'mm/dd/yy',
    	    altFormat: 'yy-mm-dd',
    	    altField: '#date'
    	});
        });
    </script>
    <p>
        <label for="date"><?php _e('Date', 'fudge-lite'); ?></label>
        <input type="text" id="date_str" value="<?php echo(esc_html(!empty($date) ? date('m/d/Y', fudge_lite_timestamp_fix($date)) : '')); ?>" />
        <input type="hidden" id="date" name="date" value="<?php echo(esc_html(!empty($date) ? date('Y-m-d', fudge_lite_timestamp_fix($date)) : '')); ?>" />
    </p>
    <p>
        <label for="time"><?php _e('Start Time', 'fudge-lite'); ?></label>
        <input type="text" id="time" name="time" value="<?php echo esc_attr($time); ?>" />
        <span><?php _e('Format hh:mm', 'fudge-lite'); ?></span>
    </p>
    <p>
        <label for="end_time"><?php _e('End Time', 'fudge-lite'); ?></label>
        <input type="text" id="end_time" name="end_time" value="<?php echo esc_attr($end_time); ?>" />
        <span><?php _e('Format hh:mm', 'fudge-lite'); ?></span>
    </p>
    <?php
    wp_nonce_field('update_session', 'fudge_lite');
}

function fudge_lite_core_metabox_session_speakers($post) {
    $speakers		 = get_posts(array('post_type' => 'speaker', 'post_status' => 'publish', 'suppress_filters' => false, 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC'));
    $associated_speakers	 = get_post_meta($post->ID, 'speakers_list', true);
    ?>
    <ul>
	<?php
	foreach ($speakers as $speaker) {
	    $checked = '';
	    if (!empty($associated_speakers) && count($associated_speakers) > 0 && in_array($speaker->ID, $associated_speakers))
		$checked = 'checked="checked"';
	    ?>
	    <li>
		<input type="checkbox" name="speakers_list[]" id="speakers_list_<?php echo intval($speaker->ID); ?>" value="<?php echo intval($speaker->ID); ?>" <?php echo $checked; ?> />
		<label><?php echo esc_html($speaker->post_title); ?></label>
	    </li>
	    <?php
	}
	?>
    </ul>
    <?php
    wp_nonce_field('update_session', 'fudge_lite');
}

function fudge_lite_core_save_post($id) {

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
	return;
    }
    $nonce = isset($_REQUEST['fudge_lite']) ? $_REQUEST['fudge_lite'] : false;

    if ($nonce) {
	if (wp_verify_nonce($nonce, 'update_media')) {
	    if (isset($_POST['video_url'])) {
		update_post_meta($id, 'video_url', esc_url_raw($_POST['video_url']));
	    }
	}

	if (wp_verify_nonce($nonce, 'update_poi')) {
	    if (isset($_POST['country'])) {
		update_post_meta($id, 'country', sanitize_text_field($_POST['country']));
	    }
	    if (isset($_POST['postal_code'])) {
		update_post_meta($id, 'postal_code', sanitize_text_field($_POST['postal_code']));
	    }
	    if (isset($_POST['city'])) {
		update_post_meta($id, 'city', sanitize_text_field($_POST['city']));
	    }
	    if (isset($_POST['street_address_2'])) {
		update_post_meta($id, 'street_address_2', sanitize_text_field($_POST['street_address_2']));
	    }
	    if (isset($_POST['street_address_1'])) {
		update_post_meta($id, 'street_address_1', sanitize_text_field($_POST['street_address_1']));

		$location = Fudge_Lite_Core_Geocoder::getLocation(sprintf('%s %s, %s, %s, %s', sanitize_text_field($_POST['street_address_1']), sanitize_text_field($_POST['street_address_2']), sanitize_text_field($_POST['city']), sanitize_text_field($_POST['postal_code']), sanitize_text_field($_POST['country'])));
		if ($location !== false) {
		    update_post_meta($id, 'lat', sanitize_text_field($location['lat']));
		    update_post_meta($id, 'lng', sanitize_text_field($location['lng']));
		}
	    }
	}

	if (wp_verify_nonce($nonce, 'update_speaker')) {
	    if (isset($_POST['company'])) {
		update_post_meta($id, 'company', sanitize_text_field($_POST['company']));
	    }
	    if (isset($_POST['short_bio'])) {
		update_post_meta($id, 'short_bio', sanitize_text_field($_POST['short_bio']));
	    }
	    if (isset($_POST['website_url'])) {
		update_post_meta($id, 'website_url', esc_url_raw($_POST['website_url']));
	    }
	    if (isset($_POST['twitter_username'])) {
		update_post_meta($id, 'twitter_username', sanitize_text_field($_POST['twitter_username']));
	    }
	}

	if (wp_verify_nonce($nonce, 'update_session')) {
	    if (isset($_POST['date'])) {
		update_post_meta($id, 'date', strtotime($_POST['date']) * 1000);
	    }
	    if (isset($_POST['time'])) {
		update_post_meta($id, 'time', sanitize_text_field($_POST['time']));
	    }
	    if (isset($_POST['end_time'])) {
		update_post_meta($id, 'end_time', sanitize_text_field($_POST['end_time']));
	    }
	    if (isset($_POST['speakers_list'])) {
		if (is_array($_POST['speakers_list'])) {
		    update_post_meta($id, 'speakers_list', $_POST['speakers_list']);
		}
	    } else {
		delete_post_meta($id, 'speakers_list');
	    }
	}
    }
}

function fudge_lite_core_add_track_color() {
    wp_nonce_field(basename(__FILE__), 'fudge_lite_term_color_nonce');
    ?>
    <div class="form-field fudge-lite-term-color-wrap">
        <label for="fudge-lite-term-color"><?php _e('Color', 'fudge-lite'); ?></label>
        <input type="text" name="fudge_lite_term_color" id="fudge-lite-term-color" value="" class="fudge-lite-term-color-field" />
    </div>
    <?php
}

function fudge_lite_core_edit_track_color($term) {
    $default = '';
    $color	 = fudge_lite_core_get_track_color($term->term_id, true);
    if (!$color) {
	$color = $default;
    }
    ?>
    <tr class="form-field fudge-lite-term-color-wrap">
        <th scope="row"><label for="fudge-lite-term-color"><?php _e('Color', 'fudge-lite'); ?></label></th>
        <td>
	    <?php wp_nonce_field(basename(__FILE__), 'fudge_lite_term_color_nonce'); ?>
    	<input type="text" name="fudge_lite_term_color" id="fudge-lite-term-color" value="<?php echo esc_attr($color); ?>" class="fudge-lite-term-color-field" data-default-color="<?php echo esc_attr($default); ?>" />
        </td>
    </tr>
    <?php
}

function fudge_lite_core_edit_track($term_id) {
    if (!isset($_POST['fudge_lite_term_color_nonce']) || !wp_verify_nonce($_POST['fudge_lite_term_color_nonce'], basename(__FILE__))) {
	return;
    }
    $old_color	 = fudge_lite_core_get_track_color($term_id);
    $new_color	 = isset($_POST['fudge_lite_term_color']) ? fudge_lite_core_sanitize_hex($_POST['fudge_lite_term_color']) : '';
    if ($old_color && '' === $new_color) {
	delete_term_meta($term_id, 'color');
    } else if ($old_color !== $new_color) {
	update_term_meta($term_id, 'color', $new_color);
    }
}

function fudge_lite_core_get_track_color($term_id, $hash = false) {
    $color	 = get_term_meta($term_id, 'color', true);
    $color	 = fudge_lite_core_sanitize_hex($color);
    return $hash && $color ? "#{$color}" : $color;
}

function fudge_lite_core_sanitize_hex($color) {
    $color = ltrim($color, '#');
    return preg_match('/([A-Fa-f0-9]{3}){1,2}$/', $color) ? $color : '';
}

function fudge_lite_core_admin_enqueue_scripts($hook_suffix) {
    if (!in_array($hook_suffix, array('edit-tags.php', 'term.php')) || 'session-track' !== get_current_screen()->taxonomy) {
	return;
    }
    wp_enqueue_style('wp-color-picker');
    wp_enqueue_script('wp-color-picker');
}

function fudge_lite_core_admin_head() {
    ?>
    <style type="text/css">
        .column-color { width: 50px; }
        .column-color .color-block { display: inline-block; width: 28px; height: 28px; border: 1px solid #ddd; }
    </style>
    <?php
}

function fudge_lite_core_admin_footer() {
    ?>
    <script type="text/javascript">
        jQuery(document).ready(function () {
    	jQuery('.fudge-lite-term-color-field').wpColorPicker();
        });
    </script>
    <?php
}

function fudge_lite_core_enqueue_scripts() {
    if (is_page_template('template-home.php')) {
	$google_maps_key	 = '';
	$fudge_lite_options	 = wp_parse_args(
		get_option('fudge_lite_theme_options', array()), array('fudge_lite_googlemaps_key' => '')
	);
	if (!empty($fudge_lite_options['fudge_lite_googlemaps_key'])) {
	    $google_maps_key = urlencode($fudge_lite_options['fudge_lite_googlemaps_key']);
	}
	$pois = fudge_lite_core_get_pois_list();

	wp_enqueue_script('fudge-lite-google-maps', 'https://maps.googleapis.com/maps/api/js?key=' . $google_maps_key, false, false, true);
	wp_enqueue_script('fudge-lite-jquery-ui-map', plugins_url('js/jquery.ui.map.full.min.js', __FILE__), array('jquery'), false, true);
	wp_enqueue_script('fudge-lite-pois', plugins_url('js/pois.js', __FILE__), array('jquery'), false, true);
	wp_localize_script('fudge-lite-pois', 'fudge_lite_pois_vars', array(
	    'template_directory_uri' => esc_url_raw(trailingslashit(get_template_directory_uri())),
	    'palette'		 => get_theme_mod('color_palette'),
	    'pois'			 => $pois
		)
	);
    }
}

function fudge_lite_core_get_pois_list() {
    $pois		 = array();
    $poi_query	 = new WP_Query(array('post_type' => 'poi'));
    if ($poi_query->have_posts()) {
	while ($poi_query->have_posts()) {
	    $poi_query->the_post();
	    $pois[] = array(
		'address'	 => sprintf('%s %s<br/>%s - %s - %s<br/>%s', sanitize_text_field(get_post_meta(get_the_ID(), 'street_address_1', true)), sanitize_text_field(get_post_meta(get_the_ID(), 'street_address_2', true)), sanitize_text_field(get_post_meta(get_the_ID(), 'city', true)), sanitize_text_field(get_post_meta(get_the_ID(), 'postal_code', true)), sanitize_text_field(get_post_meta(get_the_ID(), 'country', true)), sanitize_text_field(get_the_content())),
		'lat'		 => sanitize_text_field(get_post_meta(get_the_ID(), 'lat', true)),
		'lng'		 => sanitize_text_field(get_post_meta(get_the_ID(), 'lng', true)),
	    );
	}
	wp_reset_postdata();
    }
    return $pois;
}

function fudge_lite_core_ajax_send_contact_email() {
    $ret = array(
	'sent'		 => false,
	'error'		 => false,
	'message'	 => ''
    );

    $nonce = isset($_REQUEST['fudge_lite']) ? $_REQUEST['fudge_lite'] : false;
    if ($nonce && wp_verify_nonce($nonce, 'send_contact_message')) {
	$contactAdminEmail	 = sanitize_email(apply_filters('fudge_lite_core_contact_email', get_option('admin_email')));
	$contactEmail		 = sanitize_email(trim($_POST['email']));
	$contactName		 = sanitize_text_field(trim($_POST['contactName']));
	$contactPhone		 = sanitize_text_field(trim($_POST['phone']));
	$contactMessage		 = sanitize_text_field(trim($_POST['comments']));

	// require a name from user
	if (empty($contactName)) {
	    $ret['message']	 = esc_html__('Forgot your name!', 'fudge-lite');
	    $ret['error']	 = true;
	}

	// need valid email
	if (empty($contactEmail)) {
	    $ret['message']	 = esc_html__('Forgot to enter in your e-mail address.', 'fudge-lite');
	    $ret['error']	 = true;
	} else if (!is_email($contactEmail)) {
	    $ret['message']	 = esc_html__('You entered an invalid email address.', 'fudge-lite');
	    $ret['error']	 = true;
	}

	// we need at least some content
	if (empty($contactMessage)) {
	    $ret['message']	 = esc_html__('You forgot to enter a message!', 'fudge-lite');
	    $ret['error']	 = true;
	}

	// upon no failure errors let's email now!
	if (!$ret['error']) {
	    $subject = sprintf('%s %s', esc_html__('Submitted message from ', 'fudge-lite'), $contactName);
	    $body	 = sprintf("%s %s\n\n%s %s\n\n%s %s\n\n%s %s", esc_html__('Name:', 'fudge-lite'), $contactName, esc_html__('Email:', 'fudge-lite'), $contactEmail, esc_html__('Phone:', 'fudge-lite'), $contactPhone, esc_html__('Comments:', 'fudge-lite'), $contactMessage);
	    $headers = sprintf("From: %s \r\nReply-to: %s\r\n", $contactEmail, $contactEmail);

	    try {
		wp_mail($contactAdminEmail, $subject, $body, $headers);
		$ret['sent']	 = true;
		$ret['message']	 = esc_html__('Your email was sent.', 'fudge-lite');
	    } catch (Exception $e) {
		$ret['message'] = esc_html__('Error submitting the form', 'fudge-lite');
	    }
	}
    }
    echo json_encode($ret);
    die;
}
