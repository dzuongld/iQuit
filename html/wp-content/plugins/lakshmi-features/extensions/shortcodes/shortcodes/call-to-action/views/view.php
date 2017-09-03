<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
} 

$lsi_s_cta_padding = '';
$lsi_s_cta_line = fw_get_db_customizer_option( 'lsi_s_cta_line');
$lsi_s_cta_img_an = fw_get_db_customizer_option( 'lsi_s_cta_img_an');
$lsi_s_cta_colors = fw_get_db_customizer_option( 'lsi_s_cta_colors/on_off');

if ($atts['lsi_s_cta_unique']['on_off'] == 'on') {
	$lsi_s_cta_padding = ' style=padding:'.$atts['lsi_s_cta_unique']['on']['lsi_s_cta_padding'].' !important;';
	$lsi_s_cta_line = $atts['lsi_s_cta_unique']['on']['lsi_s_cta_line'];
	$lsi_s_cta_img_an = $atts['lsi_s_cta_unique']['on']['lsi_s_cta_img_an'];
}

$atts['column'] = trim($atts['column']);
if ( $atts['column'] != '1'  && $atts['column'] != '2' && $atts['column'] != '4' ) $atts['column'] = '3';
$lesscolumn = $atts['column'];
if ( $atts['column']==4 ) $lesscolumn = 3;

$random_cta_number = rand(1000,9999);

$fullwidth = $atts['fullwidth'];
$post_id = get_the_ID();  
$lsi_basic_post_layer_select = fw_get_db_post_option( $post_id, 'lsi_basic_post_layer_select' ) ;
$lsi_basic_layer_select = fw_get_db_customizer_option( 'lsi_basic_layer_select');

if ($lsi_basic_post_layer_select == '2-col-l' || $lsi_basic_post_layer_select == '2-col-r') {
	$fullwidth = 'no';
} elseif ($lsi_basic_layer_select == '2-col-l' || $lsi_basic_layer_select == '2-col-r') {
	$fullwidth = 'no';
}

?>
<div class="lsi-cta-h<?php if ( $fullwidth == 'yes') { ?> lsi-fullwidth-h<?php } ?>">
    <div id="lsi-cta" class="owl-carousel carousel owl row lsi-cta-<?php echo esc_attr($random_cta_number); ?> lsi-owl-pagination-<?php echo esc_attr($atts['pagination']); ?> lsi-owl-navigation-<?php echo esc_attr($atts['navigation']); ?><?php if ( $fullwidth == 'yes') { ?> lsi-fullwidth<?php } ?>">
    <?php foreach ($atts['cta'] as $key => $cta) : ?>
		<div class="lsi-cta-col lsi-cta-col-<?php echo esc_attr($lsi_s_cta_line); ?>-line lsi-cta-col-<?php echo esc_attr($lsi_s_cta_img_an); ?>-img-an<?php if ($lsi_s_cta_colors == 'on') { ?> lsi-cta-colors<?php } ?>"<?php echo esc_attr($lsi_s_cta_padding); ?>>
        	<?php if (!empty($cta['link'])): ?>
        	<a href="<?php echo esc_url($cta['link']); ?>">
            <?php endif; ?>
                <div class="lsi-cta-content">
                	<div class="lsi-cta-content-bg"<?php if ($cta['img'] != '') { ?> style="background-image: url(<?php echo esc_url($cta['img']['url']); ?>);"<?php } ?>></div>
                    <div class="lsi-cta-layer"></div>
                    <div class="lsi-cta-layer-2"></div>
                    <div class="lsi-cta-cover">
                        <i class="<?php echo esc_attr($cta['icon']); ?>"></i>
                        <h2><?php echo esc_html($cta['name']); ?></h2>
                    </div>
                    <div class="lsi-cta-hover">
                            <h3><?php echo esc_html($cta['head']); ?></h3>
                            <p><?php echo esc_html($cta['desc']); ?></p>
                            <?php if (!empty($cta['link'])): ?>
                            <h4 class="lsi-cta-more"><?php lakshmi_lite_read_more_text(); ?></h4>
                            <?php endif; ?>
                    </div>
                </div>
            <?php if (!empty($cta['link'])): ?>
            </a>
            <?php endif; ?>
        </div>
	<?php endforeach; ?>
    </div>
    <div class="clearfix"></div>
</div>
<script type="text/javascript"> 
	jQuery(document).ready(function($){
		$(document).ready(function() {
	
		  var owl = $(".lsi-cta-<?php echo esc_attr($random_cta_number); ?>");
	
		  owl.owlCarousel({
			  
		  navigation : true, // Show next and prev buttons
		  navigationText : ['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
		  pagination : true,
	 
		  items : <?php echo esc_attr($atts['column']); ?>, 
		  itemsDesktop : [5000,<?php echo esc_attr($atts['column']); ?>], 
		  itemsDesktop : [1170,<?php echo esc_attr($lesscolumn); ?>],
		  itemsDesktopSmall : [900,<?php echo esc_attr($lesscolumn); ?>], 
		  itemsTablet: [767,1], 
		  itemsMobile : [400,1],
		  <?php if ( $atts['delay'] != 'false' && $atts['delay'] != '') { ?> 			  
		  autoPlay : <?php echo esc_attr($atts['delay']); ?>000,
		  <?php } else { ?>
		  autoPlay : false,
		  <?php } ?>		
		  });
		});
	 });
</script>