<?php if (!defined('FW')) die('Forbidden');

$fullwidth_slider = 'allow';
$post_id = get_the_ID();  
if ( function_exists( 'fw_get_db_post_option') ) {
	$lsi_basic_post_layer_select = fw_get_db_post_option( $post_id, 'lsi_basic_post_layer_select' ) ;
}
if ( function_exists( 'fw_get_db_customizer_option') ) {
	$lsi_basic_layer_select = fw_get_db_customizer_option( 'lsi_basic_layer_select');
}

if ($lsi_basic_post_layer_select == '2-col-l' || $lsi_basic_post_layer_select == '2-col-r') {
	$fullwidth_slider = 'disable';
} elseif ($lsi_basic_layer_select == '2-col-l' || $lsi_basic_layer_select == '2-col-r') {
	$fullwidth_slider = 'disable';
}

if ($data['settings']['extra']['delay'] == '' ) { 
	$data['settings']['extra']['delay'] = '8000';
}

if (!($data['settings']['extra']['fullwidth'] == 'yes' && $fullwidth_slider == 'disable')) :

$random_slider_number = rand(1000,9999);
$lsi_blank_uri = LAKSHMI_PLUGIN_URL . '/extensions/media/extensions/slider/extensions/lakshmi-slider/static/images/blank.png';
?>

<?php if (isset($data['slides'])): ?>
	<!--Slider-->
	<section id="lsi-slider-section" class="wrap-nivoslider theme-default lakshmi-custom-slider lsi-snav-<?php echo esc_attr($data['settings']['extra']['navigation']); ?><?php if ($data['settings']['extra']['fullwidth'] == 'yes') { ?> lakshmi-fullwidth-slider<?php } ?><?php if ( $data['settings']['extra']['hide_on_desktop'] == 'yes' ) { ?> lsi-hide-on-desktop<?php } if ( $data['settings']['extra']['hide_on_smaller'] == 'yes' ) { ?> lsi-hide-on-smaller<?php } if ( $data['settings']['extra']['hide_on_tablet'] == 'yes' ) { ?> lsi-hide-on-tablet<?php } if ( $data['settings']['extra']['hide_on_mobile'] == 'yes' ) { ?> lsi-hide-on-mobile<?php } ?>" style="display: none;">
    	<div class="lakshmi-slider-holder">
            <div class="nivoSlider nivoSlider-<?php echo esc_attr($random_slider_number) ; ?>">
                <?php foreach ($data['slides'] as $id => $slide): ?>
                <img  width="<?php echo esc_attr($dimensions['width']); ?>"
                      height="<?php echo esc_attr($dimensions['height']); ?>"
                      src="<?php echo esc_attr(fw_resize($slide['src'], $dimensions['width'], $dimensions['height'], true)); ?>"
                      alt="<?php echo esc_attr($slide['title']); ?>"
                      title="#nivo-<?php echo esc_attr($id); ?>" />
                <?php endforeach; ?>
            </div>
            <?php foreach ($data['slides'] as $id => $slide): ?>
            <div id="nivo-<?php echo esc_attr($id) ?>" class="nivo-html-caption">
                <div class="lsi-slider-caption-holder container">
                    <?php if($slide['extra']['lsi_ta']['on_off'] == 'on') { ?>
                    <div id="lsi-slider-tah" class="lsi-slider-ta-<?php echo esc_html($slide['extra']['lsi_ta']['on']['lsi_ta_align']) ?>"<?php if(($slide['extra']['lsi_ta']['on']['lsi_ta_pos_top'] != '') || ($slide['extra']['lsi_ta']['on']['lsi_ta_pos_side'] != '')) { ?> style="top:<?php echo esc_attr($slide['extra']['lsi_ta']['on']['lsi_ta_pos_top']) ?>; <?php if($slide['extra']['lsi_ta']['on']['lsi_ta_align'] != 'right') { ?>left:<?php echo esc_attr($slide['extra']['lsi_ta']['on']['lsi_ta_pos_side']) ?>;<?php } else { ?>right:<?php echo esc_attr($slide['extra']['lsi_ta']['on']['lsi_ta_pos_side']) ?>;<?php } ?>"<?php } ?>>
                    	<div id="lsi-slider-ta">
                        	<p class="lsi-sta-title"><?php echo wp_kses_post($slide['title']) ?></p>
                            <?php if($slide['extra']['lsi_ta']['on']['lsi_ta_subtitle'] != '') { ?><p class="lsi-sta-subtitle"><?php echo wp_kses_post($slide['extra']['lsi_ta']['on']['lsi_ta_subtitle']) ?></p><?php } ?>
                            <?php if($slide['extra']['lsi_ta']['on']['lsi_ta_text'] != '') { ?><p class="lsi-sta-text"><?php echo wp_kses_post($slide['extra']['lsi_ta']['on']['lsi_ta_text']) ?></p><?php } ?>
                            <?php if(($slide['extra']['lsi_ta']['on']['lsi_ta_button_1'] != '') || ($slide['extra']['lsi_ta']['on']['lsi_ta_button_2'] != '')) { ?>
                            <div class="lsi-sta-buttons">
                            	<?php if($slide['extra']['lsi_ta']['on']['lsi_ta_button_1'] != '') { ?>
                                <a href="<?php echo esc_url($slide['extra']['lsi_ta']['on']['lsi_ta_b1_url']) ?>">
                            	<div class="lsi-sta-button-1">
                                	<?php echo wp_kses_post($slide['extra']['lsi_ta']['on']['lsi_ta_button_1']) ?>
                                </div>
                                </a>
                                <?php } ?>
                                <?php if($slide['extra']['lsi_ta']['on']['lsi_ta_button_2'] != '') { ?>
                                <a href="<?php echo esc_url($slide['extra']['lsi_ta']['on']['lsi_ta_b2_url']) ?>">
                                <div class="lsi-sta-button-2">
                                	<?php echo wp_kses_post($slide['extra']['lsi_ta']['on']['lsi_ta_button_2']) ?>
                                </div>
                                </a>
                                <?php } ?>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>
                    <?php $i = 0;
					foreach ($slide['extra']['lsi_pis'] as $key => $lsi_pis) : 
					$random_number = rand(1000,9999); ?>
                    <div id="lsi-slider-pi" class="lsi-slider-pi-<?php echo esc_attr($random_number); ?>-<?php echo esc_attr($i); ?>">
                    	<div id="lsi-slider-pi-img"<?php if(($lsi_pis['lsi_pi_top'] != '') || ($lsi_pis['lsi_pi_right'] != '') || ($lsi_pis['lsi_pi_bottom'] != '') || ($lsi_pis['lsi_pi_left'] != '')) { ?> style=" <?php if($lsi_pis['lsi_pi_top'] != '') { ?> top:<?php echo esc_attr($lsi_pis['lsi_pi_top']) ?>;<?php } ?><?php if($lsi_pis['lsi_pi_right'] != '') { ?> right:<?php echo esc_attr($lsi_pis['lsi_pi_right']) ?>;<?php } ?><?php if($lsi_pis['lsi_pi_bottom'] != '') { ?> bottom:<?php echo esc_attr($lsi_pis['lsi_pi_bottom']) ?>;<?php } ?><?php if($lsi_pis['lsi_pi_left'] != '') { ?> left:<?php echo esc_attr($lsi_pis['lsi_pi_left']) ?>;<?php } ?>"<?php } ?>>
                        	<div class="lsi-slider-pi-img-i">
                            	<div id="lsi-slider-pi-img-animation">
                    				<img src="<?php echo esc_url($lsi_pis['lsi_pi_image']['url']);?>" alt="<?php echo esc_attr($lsi_pis['lsi_pi_name']); ?>" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
	</section>
    <script type="text/javascript"> 
		jQuery(function($) {
			$('.nivoSlider-<?php echo esc_attr($random_slider_number) ; ?>').nivoSlider({
				effect:'<?php echo esc_attr($data['settings']['extra']['effect']); ?>',
				prevText: '<i class="fa fa-chevron-left"></i>',
				nextText: '<i class="fa fa-chevron-right"></i>',
				pauseTime: <?php echo esc_attr($data['settings']['extra']['delay']); ?>,
			});
		});
	</script>
	<!--/Slider-->
<?php endif; ?>
<?php endif; ?>