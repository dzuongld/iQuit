<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
} ?>

<div class="lsi-subtext" style="text-align: <?php echo esc_attr($atts['align']); ?>;<?php if ($atts['color'] != '') { ?> color: <?php echo esc_attr($atts['color']); ?>;<?php } ?>">
	<h5><?php echo wp_kses_post($atts['content']); ?></h5>
</div>