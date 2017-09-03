<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
} 
?>
<?php if (!empty($atts['link'])): ?>
<a href="<?php echo esc_url($atts['link']); ?>">
<?php endif; ?>
    <div class="lsi-iconbox">
    	<div class="lsi-iconbox-overlay"></div>
        <div class="lsi-iconbox-content">
            <div class="icon">
                <i class="<?php echo esc_attr($atts['icon']); ?>"></i>
            </div>
            <h3 class="name"><?php echo esc_html($atts['title']); ?></h3>
            <div class="desc">
                <p><?php echo wp_kses_post($atts['content']); ?></p>
            </div>
        </div>
    </div>
<?php if (!empty($atts['link'])): ?>
</a>
<?php endif; ?>