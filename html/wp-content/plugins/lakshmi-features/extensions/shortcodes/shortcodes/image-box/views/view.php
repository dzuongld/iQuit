<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

if ( $atts['link_type'] !='lightbox' ) $atts['link_type'] = 'normal';
?>
<div class="lsi-imagebox">
	<?php if ( $atts['image'] != '' ) { ?>
	<div class="image">
		<?php if ( $atts['link_type'] =='lightbox' ) { ?>
        <a href="<?php echo esc_url($atts['image']['url']); ?>" data-gal="prettyPhoto[0]">
        <?php } elseif ($atts['link'] != '' ) { ?>
        <a href="<?php echo esc_url($atts['link']); ?>">
        <?php } ?>
			<img src="<?php echo esc_url($atts['image']['url']); ?>" alt="<?php echo esc_html($atts['name']); ?>"/>
		<?php if ($atts['link'] != '' || $atts['link_type'] == 'lightbox') { ?>
        </a>
        <?php } ?>
	</div>
    <?php } ?>
	<div class="text">
    <?php if ($atts['link'] != '') { ?>
		<a href="<?php echo esc_url($atts['link']); ?>">
    <?php } ?>
	<?php if ($atts['name'] != '') { ?>
			<h4 class="name"><?php echo esc_html($atts['name']); ?></h4>
    <?php } ?>
	<?php if ($atts['link'] != '') { ?>
		</a>
	<?php } ?>
		<div class="desc"><?php echo wp_kses_post($atts['content']); ?></div>
    </div>
</div>