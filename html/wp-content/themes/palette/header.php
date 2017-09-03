<?php
/**
 * The Header for Palette theme.
 *
 */



// Theme Settings
if ( function_exists( 'fw_get_db_customizer_option') ) {
    $lsi_theme_layout = fw_get_db_customizer_option( 'lsi_theme_layout/type');
	$lsi_header_layout = fw_get_db_customizer_option( 'lsi_header_layout');
	$lsi_logo_advert = fw_get_db_customizer_option( 'lsi_logo_advert');
	$lsi_menu_item_hover_effect = fw_get_db_customizer_option( 'lsi_menu_item_hover_effect');
	$lsi_header_buttons = fw_get_db_customizer_option( 'lsi_header_buttons/on_off');
	$lsi_extra_button_link = fw_get_db_customizer_option( 'lsi_header_buttons/on/lsi_link');
	$lsi_extra_button_text = fw_get_db_customizer_option( 'lsi_header_buttons/on/lsi_text');
	$lsi_hb_search = fw_get_db_customizer_option( 'lsi_header_buttons/on/lsi_hb_search');
	$lsi_mm = fw_get_db_customizer_option( 'lsi_mm/on_off');
	$lsi_secondary_header = fw_get_db_customizer_option( 'lsi_secondary_header');
	$lsi_sh_position = fw_get_db_customizer_option( 'lsi_sh_position');
	$lsi_enable_responsive = fw_get_db_customizer_option( 'lsi_enable_responsive');
	$lsi_th_allow = fw_get_db_customizer_option( 'lsi_th_allow');
	$lsi_feautered_blog_posts = fw_get_db_customizer_option( 'lsi_feautered_blog_posts');
	$lsi_body_class = '' ;
	$lsi_return_transparent_header = '';
	
	if ( is_page()) {
		$post_id = get_the_ID();
		$lsi_post_transparent_header = fw_get_db_post_option( $post_id, 'lsi_post_transparent_header');
		
		if ($lsi_post_transparent_header == 'yes') { 
			$lsi_body_class = 'lsi-body-th' ;
			$lsi_return_transparent_header = 'yes';
		} elseif ($lsi_post_transparent_header == 'no') {
			$lsi_body_class = '' ;
			$lsi_return_transparent_header = '';
		} else {
			if ($lsi_th_allow == 'yes') { 
				$lsi_body_class = 'lsi-body-th' ;
				$lsi_return_transparent_header = 'yes';
			}
		}
	}
} else {
	$lsi_body_class = '' ;
	$lsi_return_transparent_header = '';
	$lsi_header_layout = 'logo-menu-buttons';
	$lsi_secondary_header = 'on';
	$lsi_sh_position = 'top';
	$lsi_menu_item_hover_effect = 'line-through';
	$lsi_header_buttons = 'on';
	$lsi_hb_search = 'yes';
	$lsi_mm = 'on';
	$lsi_extra_button_link = get_theme_mod( 'header_button_link', '' );
	$lsi_extra_button_text = get_theme_mod( 'header_button_text', '' );
	$lsi_feautered_blog_posts = get_theme_mod( 'feautered_blog_posts', 'on' );
} 
?>
<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />

<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php endif; ?>

<?php if(isset($lsi_enable_responsive) && ($lsi_enable_responsive == 'no')){ } else { ?>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
<?php } ?>

<?php wp_head(); ?>

</head>

<body <?php body_class($lsi_body_class); ?>>

<div id="lsi-page-holder"<?php if(isset($lsi_theme_layout) && ($lsi_theme_layout == 'boxed')){ ?> class="lsi-page-boxed"<?php } ?>>
	<div id="lsi-outercontainer">
        <!-- HEADER -->
        <?php
        if(isset($lsi_secondary_header) && ($lsi_secondary_header == 'on') && ($lsi_sh_position == 'top')){ 
			lakshmi_lite_secondary_header();
		} ?>
        <?php if ($lsi_return_transparent_header == 'yes') { ?><div id="lsi-transparent-header" class="active"><?php } ?>
        <div id="lsi-outerheader">
        	<div class="container">
            	<header id="lsi-header" class="lsi-<?php echo esc_attr($lsi_header_layout); ?>">
                <?php
				$header_order = $lsi_header_layout;
				$header_order_elements = explode('-', $header_order);
				foreach ($header_order_elements as $element) {
				?>
                	<?php if ($element == 'logo' || $element == 'centerlogo' || $element == 'toplogo' || $element == 'toplogowa' || $element == 'rightlogo') { ?>
                    <?php if ($element == 'toplogowa') { ?>
                    <div id="lsi-logo-wa">
                    <?php } ?>
                    <div id="lsi-logo"><?php lakshmi_lite_logo();?></div>
                    <?php if ($element == 'toplogowa') { ?>
                    <div id="lsi-logo-advert"><?php echo wp_kses_post($lsi_logo_advert) ; ?></div>
                    </div>
                    <?php } ?>
                    <?php } ?>
					<?php if ($element == 'menu' || $element == 'centermenu' || $element == 'rightmenu') { ?>
                    <div id="lsi-header-menus">
                    	<?php if(isset($lsi_mm) && ($lsi_mm == 'on')){ ?>
                        <a id="lsi-toggleMenu" href="#"><?php echo __( 'Menu', 'palette') ; ?><span class="menu-icon"><i class="fa fa-bars"></i></span></a>
                        <nav id="lsi-mobile-navigation" class="lsi-toggle_container">
                            <?php wp_nav_menu( array(
                              'container'       => 'ul', 
                              'menu_class'      => 'lsi-mobile-menu',
                              'menu_id'         => 'topnav-mobile', 
                              'depth'           => 4,
                              'sort_column'     => 'menu_order',
                              'theme_location'  => 'mobilmenu' 
                              )); 
                            ?>                                                             
                        </nav>
                        <?php } ?>
                        <nav id="lsi-header-navigation"<?php if(isset($lsi_menu_item_hover_effect) && ($lsi_menu_item_hover_effect == 'line-animation')){ ?> class="lsi-line-animation"<?php } ?>>
                            <?php wp_nav_menu( array(
                              'container'       => 'ul', 
                              'menu_class'      => 'lsi-menu',
                              'menu_id'         => 'topnav', 
                              'depth'           => 4,
                              'sort_column'     => 'menu_order',
                              'theme_location'  => 'mainmenu',
                              'link_before' => '<span>',
                              'link_after' => '</span>'
                              )); 
                            ?>                                                             
                        </nav>
                    </div>
                    <?php } ?>
					<?php if ($element == 'buttons' || $element == 'centerbuttons') { ?>
                    	<?php if(isset($lsi_header_buttons) && ($lsi_header_buttons == 'on')){ ?>
                    <div id="lsi-header-buttons">
                    	<?php if(isset($lsi_hb_search) && ($lsi_hb_search == 'yes')){ ?>
                    	<a id="lsi-header-search" class="lsi-btn lsi-btn-hb" href="#">
                        	<div class="lsi-btn-overlay"></div>
                            <div class="lsi-btn-content"><i class="fa fa-search"></i></div>
                        </a>
                        <div id="lsi-hb-search">
                            <?php get_search_form(); ?>
                        </div>
                        <?php } ?>
                        <?php if(isset($lsi_extra_button_text) && ($lsi_extra_button_text != '')){ ?>
                        <a class="lsi-btn lsi-btn-hb" href="<?php echo esc_url($lsi_extra_button_link) ; ?>">
                            <div class="lsi-btn-overlay"></div>
                            <div class="lsi-btn-content"><?php echo esc_html($lsi_extra_button_text) ; ?></div>
                        </a>
                        <?php } ?>
                    </div>
                    	<?php } ?>
                    <?php } ?>
                <?php } ?>
                </header>
            </div>
		</div>
        <?php if ($lsi_return_transparent_header == 'yes') { ?></div><?php } ?>
        <?php
        if(isset($lsi_secondary_header) && ($lsi_secondary_header == 'on') && ($lsi_sh_position == 'bottom')){ 
			lakshmi_lite_secondary_header();
		} ?>
        <!-- END HEADER --> 
        <!-- MAIN CONTENT -->               
        <div id="lsi-maincontent"> 
        <?php if ((is_home() || is_tax() || is_archive() || is_search() || is_404()) && $lsi_feautered_blog_posts == 'on') {
			$lsi_featured_query_args = array(
				'post_type' => 'post',
				'posts_per_page' => 1,
				'meta_query' => array(array('key' => '_thumbnail_id'))
				
			);
            $lsi_featured_query = new WP_Query( $lsi_featured_query_args ); 
			
			if ( $lsi_featured_query->have_posts() ) :
				while ( $lsi_featured_query->have_posts() ) : $lsi_featured_query->the_post(); ?>
        <div id="lsi-featured-post-holder">
        	<?php if ( has_post_thumbnail() ) { ?>
			<img src="<?php the_post_thumbnail_url(); ?>" >
            <div class="lsi-fp-content-h container">
            	<div class="lsi-fp-content">
        			<h2><?php the_title(); ?></h2>
                    <p><?php echo wp_trim_words( get_the_content(), 20, '...' ); ?></p>
                    <div class="lsi-fp-button-h">
						<a href="<?php the_permalink(); ?>"><div class="lsi-fp-button"><?php esc_html_e('Read more', 'palette'); ?> <i class="fa fa-arrow-right"></i></div></a>
                    </div>
            	</div>
            </div>
			<?php } ?>
        </div>          
                    
                <?php endwhile;
				wp_reset_postdata();
			endif;
			
			$lsi_featured_cta_query_args = array(
				'post_type' => 'post',
				'posts_per_page' => 3,
				'offset' => 1,
				
			);
            $lsi_featured_cta_query = new WP_Query( $lsi_featured_cta_query_args ); 
			
			if ( $lsi_featured_cta_query->have_posts() ) : ?>
        <div class="lsi-cta-h lsi-fullwidth-h">
        	<div id="lsi-cta" class="owl-carousel carousel owl row lsi-cta-fp lsi-owl-pagination-true lsi-owl-navigation-normal lsi-fullwidth">
            	<?php while ( $lsi_featured_cta_query->have_posts() ) : $lsi_featured_cta_query->the_post(); ?>
                <div class="lsi-cta-col lsi-cta-col-frame-line lsi-cta-col-zoom-img-an">
					<a href="<?php the_permalink(); ?>">
                    	<div class="lsi-cta-content">
                			<div class="lsi-cta-content-bg" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></div>
                            <div class="lsi-cta-layer"></div>
                            <div class="lsi-cta-layer-2"></div>
                            <div class="lsi-cta-cover">
                                <h2><?php the_title(); ?></h2>
                            </div>
                    		<div class="lsi-cta-hover">
                                <h3><?php the_title(); ?></h3>
                                <p><?php echo wp_trim_words( get_the_content(), 20, '...' ); ?></p>
                                <h4 class="lsi-cta-more"><?php esc_html_e('Read more', 'palette'); ?></h4>
                            </div>
                		</div>
                    </a>
                </div>
                <?php endwhile;
				wp_reset_postdata(); ?>
            </div>
            <div class="clearfix"></div>
        </div>
			<?php endif; ?>
		<?php } ?>
            <div class="container">
                <div class="row">
          
                <div id="content" class="<?php lakshmi_lite_maincontent_with_sidebar(); ?>">
                	<div class="main">							