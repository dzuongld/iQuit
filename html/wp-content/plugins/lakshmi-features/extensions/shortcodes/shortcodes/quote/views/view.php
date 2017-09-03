<?php if (!defined('FW')) die( 'Forbidden' ); 

if ( $atts['style'] != '2' ) {
?>
<div class="lsi-blockquote-1">
    <h3 class="lsi-blockquote-1-author"><?php echo esc_html($atts['author']) ?></h3>
    <div class="lsi-blockquote-1-content"><?php echo esc_html($atts['content']) ?></div>
    <div class="clearfix"></div>
</div>
<?php } else { ?>	
<div class="lsi-blockquote-2-holder">
    <div class="lsi-blockquote-2">
        <div class="lsi-blockquote-2-content"><?php echo esc_html($atts['content']) ?></div>
        <h4 class="lsi-blockquote-2-author"><?php echo esc_html($atts['author']) ?></h4>
    </div>
</div>
<?php } ?>