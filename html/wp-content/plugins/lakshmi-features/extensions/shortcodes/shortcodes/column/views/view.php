<?php if (!defined('FW')) die('Forbidden');
$class = fw_ext_builder_get_item_width('page-builder', $atts['width'] . '/frontend_class');

$lsi_column_bgcolor = '';
if ( $atts['background_options']['background'] == 'image' && $atts['background_options']['image']['bgimage_bgcolor'] != '' ) {
	$lsi_column_bgcolor = 'background-color: '.$atts['background_options']['image']['bgimage_bgcolor'];
} elseif ( $atts['background_options']['background'] == 'color' && $atts['background_options']['color']['background_color'] != '' ) {
	$lsi_column_bgcolor = 'background-color: '.$atts['background_options']['color']['background_color'];
} elseif ( $atts['background_options']['background'] == 'gradient_color' ) {
	if ($atts['background_options']['gradient_color']['gradient_type'] == 'vertical') {
		$lsi_column_bgcolor = 'background: '.'linear-gradient('.$atts['background_options']['gradient_color']['gradient_bg_color_1'].', '.$atts['background_options']['gradient_color']['gradient_bg_color_2'].')';
	} elseif ($atts['background_options']['gradient_color']['gradient_type'] == 'horizontal') {
		$lsi_column_bgcolor = 'background: '.'linear-gradient(to right,'.$atts['background_options']['gradient_color']['gradient_bg_color_1'].', '.$atts['background_options']['gradient_color']['gradient_bg_color_2'].')';
	} elseif ($atts['background_options']['gradient_color']['gradient_type'] == 'radial') {
		$lsi_column_bgcolor = 'background: '.'radial-gradient('.$atts['background_options']['gradient_color']['gradient_bg_color_1'].', '.$atts['background_options']['gradient_color']['gradient_bg_color_2'].')';
	}
}
?>
<div class="lsi-col <?php echo esc_attr($class); ?><?php if ( $atts['hide_on_desktop'] == 'yes' ) { ?> lsi-hide-on-desktop<?php } if ( $atts['hide_on_smaller'] == 'yes' ) { ?> lsi-hide-on-smaller<?php } if ( $atts['width_on_smaller'] == 'yes' ) { ?> lsi-width-on-smaller<?php } if ( $atts['hide_on_tablet'] == 'yes' ) { ?> lsi-hide-on-tablet<?php } if ( $atts['width_on_tablet'] == 'yes' ) { ?> lsi-width-on-tablet<?php } if ( $atts['hide_on_mobile'] == 'yes' ) { ?> lsi-hide-on-mobile<?php } ?> <?php echo esc_attr($atts['customclass']); ?>" style="padding-top: <?php echo esc_attr($atts['top']); ?>px; padding-right: <?php echo esc_attr($atts['right']); ?>px; padding-bottom: <?php echo esc_attr($atts['bottom']); ?>px; padding-left: <?php echo esc_attr($atts['left']); ?>px;<?php if ($atts['align'] != '') { ?> text-align: <?php echo esc_attr($atts['align']); ?>;<?php } ?><?php if ($lsi_column_bgcolor != '') { ?> <?php echo esc_attr($lsi_column_bgcolor); ?>;<?php } ?><?php if ( $atts['background_options']['background'] == 'image') { ?> background-image: url('<?php echo esc_url($atts['background_options']['image']['bgimage']['url']); ?>'); background-size: <?php echo esc_attr($atts['background_options']['image']['image_size']); ?>; background-repeat: <?php echo esc_attr($atts['background_options']['image']['image_repeat']); ?>;<?php } ?><?php if ($atts['border']['on_off'] == 'yes') { if (!empty($atts['border']['yes']['border_top'])) { echo ' border-top: '.esc_attr($atts['border']['yes']['border_top']).';';} if (!empty($atts['border']['yes']['border_bottom'])) { echo ' border-bottom: '.esc_attr($atts['border']['yes']['border_bottom']).';';} if (!empty($atts['border']['yes']['border_left'])) { echo ' border-left: '.esc_attr($atts['border']['yes']['border_left']).';';} if (!empty($atts['border']['yes']['border_right'])) { echo ' border-right: '.esc_attr($atts['border']['yes']['border_right']).';';} } ?>">
	<?php if ( $atts['max_width'] != '' ) { ?><div class="lsi-col-content lsi-col-content-<?php echo esc_attr($atts['content_position']); ?>" style="max-width: <?php echo esc_attr($atts['max_width']); ?>;"><?php } ?>
	<?php echo do_shortcode($content); ?>
    <?php if ( $atts['max_width'] != '' ) { ?></div><?php } ?>
</div>