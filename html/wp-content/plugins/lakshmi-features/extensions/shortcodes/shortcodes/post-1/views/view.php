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

$atts['title'] = trim($atts['title']);
		
$postmiracle_2 = array(
	'posts_per_page' => 1,
	'name' => '' . sanitize_title($atts['title']) . '');

$postmiracle_2 = new WP_Query( $postmiracle_2 ); 
while ($postmiracle_2->have_posts()) : $postmiracle_2->the_post(); 

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
if (has_post_thumbnail( $postmiracle_2->ID ) ){
$image = get_post_thumbnail_id($postmiracle_2->ID);
$image = wp_get_attachment_image_src($image,'medium');
$image = $image[0];
}
?>
<div class="lsi-post-sc lsi-post-sc-single lsi-cta-col lsi-cta-col-<?php echo esc_attr($lsi_s_cta_line); ?>-line lsi-cta-col-<?php echo esc_attr($lsi_s_cta_img_an); ?>-img-an<?php if ($lsi_s_cta_colors == 'on') { ?> lsi-cta-colors<?php } ?>"<?php echo esc_attr($lsi_s_cta_padding); ?>>
    <div class="lsi-post-1-content lsi-cta-content">
    	<div class="lsi-cta-content-bg"<?php if (has_post_thumbnail( $postmiracle_2->ID ) ){ ?> style="background-image: url(<?php echo esc_url($image); ?>);"<?php } ?>></div>
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
<?php 							  
endwhile;
wp_reset_query(); ?>