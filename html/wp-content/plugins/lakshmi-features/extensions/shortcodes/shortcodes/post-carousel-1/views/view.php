<?php if (!defined('FW')) die( 'Forbidden' );

$lsi_s_cta_padding = '';
$lsi_s_cta_line = fw_get_db_customizer_option( 'lsi_s_cta_line');
$lsi_s_cta_img_an = fw_get_db_customizer_option( 'lsi_s_cta_img_an');
$lsi_s_cta_colors = fw_get_db_customizer_option( 'lsi_s_cta_colors/on_off');

if ($atts['lsi_s_cta_unique']['on_off'] == 'on') {
	$lsi_s_cta_padding = ' style=padding:'.$atts['lsi_s_cta_unique']['on']['lsi_s_cta_padding'].' !important;';
	$lsi_s_cta_line = $atts['lsi_s_cta_unique']['on']['lsi_s_cta_line'];
	$lsi_s_cta_img_an = $atts['lsi_s_cta_unique']['on']['lsi_s_cta_img_an'];
}

$atts['category'] = trim($atts['category']);

$atts['column'] = trim($atts['column']);
if ( $atts['column'] != '1'  && $atts['column'] != '2' && $atts['column'] != '4' ) $atts['column'] = '3';
$lesscolumn = $atts['column'];
if ( $atts['column']==4 ) $lesscolumn = 3;

$fullwidth = $atts['fullwidth'];
$post_id = get_the_ID();  
$lsi_basic_post_layer_select = fw_get_db_post_option( $post_id, 'lsi_basic_post_layer_select' ) ;
$lsi_basic_layer_select = fw_get_db_customizer_option( 'lsi_basic_layer_select');

if ($lsi_basic_post_layer_select == '2-col-l' || $lsi_basic_post_layer_select == '2-col-r') {
	$fullwidth = 'no';
} elseif ($lsi_basic_layer_select == '2-col-l' || $lsi_basic_layer_select == '2-col-r') {
	$fullwidth = 'no';
}

$random_carousel_1_number = rand(1000,9999);
?>
<div id="lsi-owl-news-h"<?php if ( $fullwidth == 'yes') { ?> class="lsi-fullwidth-h"<?php } ?>>
	<div id="lsi-owl-news" class="owl-carousel carousel owl row lsi-owl-news-<?php echo esc_attr($random_carousel_1_number); ?> lsi-owl-pagination-<?php echo esc_attr($atts['pagination']); ?> lsi-owl-navigation-<?php echo esc_attr($atts['navigation']); ?><?php if ( $fullwidth == 'yes') { ?> lsi-fullwidth<?php } ?>">
	<?php 
	$slider = array(
    'category_name' => '' . sanitize_title($atts['category']) . '',
    'order'    => 'DESC',
	'posts_per_page'	=>	1000,);
    $slider = new WP_Query( $slider ); 

    while ($slider->have_posts()) : $slider->the_post(); 
    
	$permalink = get_permalink();
	$title = get_the_title() ;
	$excerpt = substr(get_the_excerpt(), 0,150);
	$post_id = get_the_ID();
	$unique_excerpt = fw_get_db_post_option( $post_id, 'lsi_post_excerpt' ) ;
	if ($unique_excerpt != '') $excerpt = substr($unique_excerpt, 0,150);
	$taglist = get_the_tag_list( '<span class="tag-list">', '</span><span class="tag-list"> ', '</span>' ) ;
	$month = get_the_time('M') ;
	$day = get_the_time('d') ;
	$tag = get_the_tags();
	$image = '';
	if (has_post_thumbnail( $slider->ID ) ){
	$image = get_post_thumbnail_id($slider->ID);
	$image = wp_get_attachment_image_src($image,'medium');
	$image = $image[0];
	}
	?>
        <div class="lsi-post-sc lsi-cta-col lsi-cta-col-<?php echo esc_attr($lsi_s_cta_line); ?>-line lsi-cta-col-<?php echo esc_attr($lsi_s_cta_img_an); ?>-img-an<?php if ($lsi_s_cta_colors == 'on') { ?> lsi-cta-colors<?php } ?>"<?php echo esc_attr($lsi_s_cta_padding); ?>>
            <div class="lsi-post-1-content lsi-cta-content">
            	<div class="lsi-cta-content-bg"<?php if (has_post_thumbnail( $slider->ID ) ){ ?> style="background-image: url(<?php echo esc_url($image); ?>);"<?php } ?>></div>
                <div class="lsi-cta-layer"></div>
                <div class="lsi-cta-layer-2"></div>
                <div class="lsi-cta-cover">
                    <div class="lsi-post-1-date">
                        <div class="lsi-post-date-ch">
                            <div class="lsi-post-date-c">
                                <h4><?php echo esc_html($day); ?></h4>
                                <h4><?php echo esc_html($month); ?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="lsi-post-1-title">
                    	<h2><?php echo esc_html($title); ?></h2>
                    </div>
                </div>
                <div class="lsi-cta-hover">
					<div class="lsi-cta-hover-content">
                        <h3><?php echo wp_kses_post($taglist); ?></h3>
                        <p><?php echo wp_kses_post($excerpt); ?>...</p>
                        <a href="<?php echo esc_url($permalink); ?>" title="<?php echo esc_html($title); ?>">
                            <h4 class="lsi-post-1-more"><?php lakshmi_lite_read_more_text(); ?></h4>
                        </a>
                    </div>
                </div>
            </div>
		</div>
	<?php endwhile; ?>
    </div>
</div>
<script type="text/javascript"> 
	jQuery(document).ready(function($){
		$(document).ready(function() {
	
		  var owl = $(".lsi-owl-news-<?php echo esc_attr($random_carousel_1_number); ?>");
	
		  owl.owlCarousel({
			  
		  navigation : true, // Show next and prev buttons
		  navigationText : ['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
		  pagination : true,
	 
		  items : <?php echo esc_attr($atts['column']); ?>, 
		  itemsDesktop : [5000,<?php echo esc_attr($atts['column']); ?>], 
		  itemsDesktop : [1170,<?php echo esc_attr($lesscolumn); ?>],
		  itemsDesktopSmall : [900,1], 
		  itemsTablet: [600,1], 
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
<?php wp_reset_query(); ?>	