<?php if (!defined('FW')) die( 'Forbidden' ); ?>
<div class="lsi-flexslider">
	<div class="flexslider">
    	<ul class="slides">
        <?php foreach ($atts['flexslider'] as $key => $slide) : ?>
			<li class="slide">
				<img src="<?php echo esc_url($slide['slide_image']['url']); ?>" />
            </li>
        <?php endforeach; ?>
        </ul>
	</div>
</div>