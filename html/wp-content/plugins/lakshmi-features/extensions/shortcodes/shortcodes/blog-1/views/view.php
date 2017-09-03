<?php if (!defined('FW')) die( 'Forbidden' );

$atts['category'] = trim($atts['category']);
if ($atts['number'] == '') $atts['number'] = 1000;
if ($atts['only_posts']['on_off'] == 'off') $atts['only_posts']['on']['posts'] = '';

$blog_template = array(
    'category_name' => '' . sanitize_title($atts['category']) . '',
	'orderby' => '' . esc_attr($atts['order_by']) . '',
    'order'    => '' . esc_attr($atts['order']) . '',
	'posts_per_page'	=>	'' . esc_attr($atts['number']) . '',
	'post__in' => $atts['only_posts']['on']['posts']
);

query_posts($blog_template);


?>
<div id="lsi-blog-normal-content">
	<?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
    <?php 
	$post_id = get_the_ID();
	$post_format = get_post_format();
	$excerpt = get_the_excerpt();
	if ( function_exists( 'fw_get_db_post_option') ) {  
		$lsi_gallery_format = fw_get_db_post_option( $post_id, 'lsi_gallery_format' ) ;
		$lsi_video_format_source = fw_get_db_post_option( $post_id, 'lsi_video_format_source' ) ;
		$lsi_video_format = fw_get_db_post_option( $post_id, 'lsi_video_format' ) ;
		$lsi_audio_format = fw_get_db_post_option( $post_id, 'lsi_audio_format' ) ;	
		$lsi_quote_format = fw_get_db_post_option( $post_id, 'lsi_quote_format' ) ;
		$lsi_quote_format_author = fw_get_db_post_option( $post_id, 'lsi_quote_format_author' ) ;
		$lsi_link_format = fw_get_db_post_option( $post_id, 'lsi_link_format' ) ;	
		$unique_excerpt = fw_get_db_post_option( $post_id, 'lsi_post_excerpt' ) ;
		if ($unique_excerpt != '') $excerpt = $unique_excerpt;
	}
	?> 
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    	<div class="lsi-article-container">
			<?php if ($post_format == 'quote') { ?>
            <div class="entry-content">
                <div class="lsi-blockquote-2-holder">
                    <div class="lsi-blockquote-2">
                        <?php if( !empty ($lsi_quote_format)){ ?>
                        <div class="lsi-blockquote-2-content"><?php echo esc_html($lsi_quote_format); ?></div>
                        <?php } ?>
                        <?php if( !empty ($lsi_quote_format_author)){ ?>
                        <h3 class="lsi-blockquote-2-author"><?php echo esc_html($lsi_quote_format_author); ?></h3>
                        <?php } ?>
                        <div class="clear"></div>
                    </div>
                </div>	
            </div>
            <div class="clearfix"></div>
            <?php } else { ?>
            <div class="blog-entry">
                <div class="entry-image">
                	<?php if (($post_format == 'audio') && (!empty ($lsi_audio_format))) { ?>
                    	<div class="iframe-holder"><iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/<?php echo esc_attr($lsi_audio_format); ?>&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe></div>
                    <?php } elseif (($post_format == 'video') && (!empty ($lsi_video_format))) { 
							if ($lsi_video_format_source == 'youtube') { ?>	
						<div class="iframe-holder"><iframe src="//www.youtube.com/embed/<?php echo esc_attr($lsi_video_format); ?>?wmode=transparent" wmode="Opaque" frameborder="0" allowfullscreen></iframe></div>
							<?php } else if ($lsi_video_format_source == 'vimeo') { ?>
						<div class="iframe-holder"><iframe src="//player.vimeo.com/video/<?php echo esc_attr($lsi_video_format); ?>?title=0&amp;byline=0&amp;portrait=0" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
							<?php }
					} elseif (($post_format == 'gallery') && (!empty ($lsi_gallery_format))) { ?>
                    	<div class="postimg">
                            <div id="postgallery-<?php echo get_the_ID() ; ?>" class="flexslider">
                                <ul class="slides">
                                    <?php foreach ( $lsi_gallery_format as $attachment):  ?>
                                    <li class="slide">
                                        <div class="lsi-spih">
                                            <div class="single-post-image" style="background-image: url(<?php echo esc_url ( $attachment['url'] );?>)"></div>
                                        </div>
                                    </li>
                                    <?php endforeach; ?> 
                                </ul>
                            </div>
                        </div>
                    <?php } else { ?>
					<div class="lsi-spih">
                    	<?php the_post_thumbnail( 'lakshmi-entry-image' ) ; ?>
                    </div>
                    <?php } ?>
                </div>
                <div class="lsi-entry-texts">
                    <div class="lsi-psth">
                        <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'lakshmi-features' ), the_title_attribute( 'echo=0' ) ); ?>"><h3 class="lsi-post-single-title"><?php echo the_title(); ?></h3></a>
                        <p class="lsi-ps-categories"><?php the_category(' '); ?></p>
                    </div>     
                    <div class="entry-content">
                            <p class="lsi-entry-excerpt"><?php echo wp_kses_post($excerpt); ?></p>
                        <div class="lsi-post-button-holder">    
                        <a class="lsi-btn lsi-btn-basic" href="<?php if (($post_format == 'link') && (!empty ($lsi_link_format))) { echo esc_url($lsi_link_format); } else { the_permalink(); }?>">
                            <div class="lsi-btn-overlay"></div>
                            <div class="lsi-btn-content"><?php lakshmi_lite_read_more_text(); ?></div>
                        </a>
                        </div>
                    </div>
                    <div class="lsi-entry-infos">
                        <div class="lsi-entry-utility">
                        	<?php if( (isset($atts['infos']['date'])) || (isset($atts['infos']['author'])) || (isset($atts['infos']['categories'])) || (isset($atts['infos']['comments'])) ){ ?>
                        	<div class="lsi-post-infos">
								<?php if(isset($atts['infos']['date'])){ ?>
                                <div class="date"><i class="fa fa-calendar"></i> <?php the_time(get_option('date_format')); ?></div>
                                <?php } ?>
                                <?php if(isset($atts['infos']['author'])){ ?>
                                <div class="user"> <i class="fa fa-user"></i> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) );?>"><?php the_author();?></a></div>
                                <?php } ?>
                                <?php if(isset($atts['infos']['categories'])){ ?>
                                <div class="category"> <i class="fa fa-folder"></i> <?php the_category(', '); ?></div>
                                <?php } ?>
                                <?php if(isset($atts['infos']['comments'])){ ?>
                                <div class="comment"> <i class="fa fa-comment"></i> 
                                    <?php 
                                      comments_popup_link( 
                                      __( 'No Comments', 'lakshmi-features' ), 
                                      __( '1 Comment', 'lakshmi-features' ), 
                                      __( '% Comments', 'lakshmi-features' ),
                                      __( 'Comments Closed', 'lakshmi-features' )
                                      );
                                    ?>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                        <?php if(isset($atts['infos']['tags'])){ ?>
                        <div class="lsi-entry-tag">
							<?php
                            $posttags = get_the_tags();
                            if($posttags){
                            ?>
                            <span class="lsi-tag-text"><?php _e('Tags:','lakshmi-features'); ?></span>
                            <?php 
                            the_tags('<div class="lsi-tag-items"><span>','</span><span>','</span></div>'); 
                            } 
                            ?>
                        </div>
                        <?php } ?>
                    </div>    
            	</div>
            </div>
            <div class="clearfix"></div>
            <?php } ?>
        </div>
	</article>
	<?php endwhile; // End the loop. Whew. ?>
    
    <?php endif; ?>
    <?php wp_reset_query(); ?>
</div>