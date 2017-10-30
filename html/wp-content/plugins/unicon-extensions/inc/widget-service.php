<?php
/**
 * service Widget
 *
 * @since 1.0.0
 *
 * @package unicon
 */


if ( !class_exists( 'unicon_service_widget' ) ) {

	class unicon_service_widget extends WP_Widget {

		public function __construct() {
			parent::__construct(
				'unicon-service-widget',
				__( 'unicon - Service widget', 'unicon' ),
				array(
					'customize_selective_refresh' => true,
				)
			);
		
		}


		function widget($args, $instance) {

 			 extract($args);

 			 echo $before_widget;

 			 ?>
			 <!--section head end-->
			 <?php if ( !empty($instance['main_title']) || !empty($instance['sub_title']) ):?>
					<div class=" row mt50 mb50">
							<div class="section-header wow fadeIn animated " data-wow-duration="1s">
								<?php if( !empty($instance['main_title']) ): ?>
									<h1 class="section-title wow fadeIn"   >
										<?php echo apply_filters('widget_title', $instance['main_title']); ?>
									</h1>
										<div class="colored-line"></div>
							 <?php endif;?>
							 <?php if( !empty($instance['sub_title']) ): ?>
									<div class="section-description">
											<h2 ><?php echo apply_filters('widget_title', $instance['sub_title']); ?></h2>
									</div>
								<?php endif;?>
							</div><!--section head end-->
					</div><!--row end-->
			<?php endif; ?>
			 <div class="row mt50">
				 <?php	if ( !empty($instance['title1']) || !empty($instance['text1']) || !empty($instance['image_uri1'])): ?>
								 <!-- feature one start -->
					 <div class="matchhe large-3 medium-6 small-12 columns mb35 ">
						 <div class="feature">

									 <?php if (!empty($instance['image_uri1'])): ?>
										 <div class="feature__icon">
											 <div class="iconcontent">
												 <img src="<?php echo esc_url($instance['image_uri1']); ?> " alt=""/>
											</div>
										 </div>
									 <?php endif;?>
									 <?php if (!empty($instance['title1'])): ?>
										 <h3 class="feature__title"><?php echo apply_filters('widget_title', $instance['title1']); ?></h3>
									 <?php endif;?>
									 <?php if (!empty($instance['text1'])): ?>
										 <div class="feature__content">
											 <p><?php echo htmlspecialchars_decode(apply_filters('widget_title', $instance['text1'])); ?></p>
										 </div>
									 <?php endif;?>
								 <?php if( !empty($instance['url1']) ):?>
									 <div class="feature__button">
										 <div class="button-wrapper ">
											 <span>
												 <a class="bttn hvr-shutter-out-vertical " href="<?php echo esc_url($instance['url1']);?>">
													 <span><?php if( !empty($instance['link_text1']) ):?> <?php echo $instance['link_text1'];?><?php endif;?></span>
												 </a>
											 </span>
										 </div>
									 </div>
								 <?php endif;?>
						 </div>
					 </div>
						 <!-- feature one end -->
					 <?php endif; ?>

					 <?php	if ( !empty($instance['title2']) || !empty($instance['text2']) || !empty($instance['image_uri2'])): ?>
									 <!-- feature two start -->
						 <div class="matchhe large-3 medium-6 small-12 columns mb35 ">
								<div class="feature">

										 <?php if (!empty($instance['image_uri2'])): ?>
											 <div class="feature__icon">
												 <div class="iconcontent">
													 <img src="<?php echo esc_url($instance['image_uri2']); ?> " alt=""/>
												</div>
											 </div>
										 <?php endif;?>
										 <?php if (!empty($instance['title2'])): ?>

											 <h3 class="feature__title"><?php echo apply_filters('widget_title', $instance['title2']); ?></h3>

										 <?php endif;?>
										 <?php if (!empty($instance['text2'])): ?>
											 <div class="feature__content">
												 <p><?php echo htmlspecialchars_decode(apply_filters('widget_title', $instance['text2'])); ?></p>
											 </div>
										 <?php endif;?>
										 <?php if( !empty($instance['url2']) ):?>
											 <div class="feature__button">
												 <div class="button-wrapper ">
													 <span>
														 <a class="bttn hvr-shutter-out-vertical " href="<?php echo esc_url($instance['url2']);?>">
															 <span><?php if( !empty($instance['link_text2']) ):?> <?php echo $instance['link_text2'];?><?php endif;?></span>
														 </a>
													 </span>
												 </div>
											 </div>
										 <?php endif;?>

								 </div>
							 </div>
							 <!-- feature two end -->
						 <?php endif; ?>

						 <?php	if (!empty($instance['title3']) || !empty($instance['text3']) || !empty($instance['image_uri3'])): ?>
										 <!-- feature three start -->
							 <div class="matchhe large-3 medium-6 small-12 columns mb35 ">
								 <div class="feature">
											 <?php if (!empty($instance['image_uri3'])): ?>
												 <div class="feature__icon">
													 <div class="iconcontent">
														 <img src="<?php echo esc_url($instance['image_uri3']); ?> " alt=""/>
													</div>
												 </div>
											 <?php endif;?>
											 <?php if (!empty($instance['title3'])): ?>
												 <h3 class="feature__title"><?php echo apply_filters('widget_title', $instance['title3']); ?></h3>
											 <?php endif;?>
											 <?php if (!empty($instance['text3'])): ?>
												 <div class="feature__content">
													 <p><?php echo htmlspecialchars_decode(apply_filters('widget_title', $instance['text3'])); ?></p>
												 </div>
											 <?php endif;?>
											 <?php if( !empty($instance['url3']) ):?>
												 <div class="feature__button">
													 <div class="button-wrapper ">
														 <span>
															 <a class="bttn hvr-shutter-out-vertical " href="<?php echo esc_url($instance['url3']);?>">
																 <span><?php if( !empty($instance['link_text3']) ):?> <?php echo $instance['link_text3'];?><?php endif;?></span>
															 </a>
														 </span>
													 </div>
												 </div>
											 <?php endif;?>

									 </div>
								 </div>
								 <!-- feature three end -->
							 <?php endif; ?>
							 <?php	if ( !empty($instance['title4']) || !empty($instance['text4']) || !empty($instance['image_uri4'])): ?>
											 <!-- feature three start -->
								 <div class="matchhe large-3 medium-6 small-12 columns mb35 ">
									 <div class="feature">

												 <?php if (!empty($instance['image_uri4'])): ?>
													 <div class="feature__icon">
														 <div class="iconcontent">
															 <img src="<?php echo esc_url($instance['image_uri4']); ?> " alt=""/>
														</div>
													 </div>
												 <?php endif;?>
												 <?php if (!empty($instance['title4'])): ?>
													 <h3 class="feature__title"><?php echo apply_filters('widget_title', $instance['title4']); ?></h3>
												 <?php endif;?>
												 <?php if (!empty($instance['text4'])): ?>
													 <div class="feature__content">
														 <p><?php echo htmlspecialchars_decode(apply_filters('widget_title', $instance['text4'])); ?></p>
													 </div>
												 <?php endif;?>
												 <?php if( !empty($instance['url4']) ):?>
													 <div class="feature__button">
														 <div class="button-wrapper ">
															 <span>
																 <a class="bttn hvr-shutter-out-vertical" href="<?php echo esc_url($instance['url4']);?>">
																	 <span><?php if( !empty($instance['link_text4']) ):?> <?php echo $instance['link_text4'];?><?php endif;?></span>
																 </a>
															 </span>
														 </div>
													 </div>
												 <?php endif;?>

										 </div>
									 </div>
									 <!-- feature four end -->
								 <?php endif; ?>

		 </div><!--row end-->

<?php
		 echo $after_widget;

 }

 function update($new_instance, $old_instance) {

		 $instance = $old_instance;

 /*section title */
		 $instance['main_title'] = strip_tags($new_instance['main_title']);
		 $instance['sub_title'] = strip_tags($new_instance['sub_title']);
 /*Box 1 */
		 $instance['image_uri1'] = strip_tags( $new_instance['image_uri1'] );
		 $instance['title1'] = strip_tags($new_instance['title1']);
		 $instance['text1'] = stripslashes(wp_filter_post_kses($new_instance['text1']));
		 $instance['link_text1'] = strip_tags( $new_instance['link_text1'] );
		 $instance['url1'] = strip_tags( $new_instance['url1'] );

 /*Box 2 */
	 $instance['image_uri2'] = strip_tags( $new_instance['image_uri2'] );
		 $instance['title2'] = strip_tags($new_instance['title2']);
		 $instance['text2'] = stripslashes(wp_filter_post_kses($new_instance['text2']));
		 $instance['link_text2'] = strip_tags( $new_instance['link_text2'] );
		 $instance['url2'] = strip_tags( $new_instance['url2'] );


 /*Box 3 */
		 $instance['image_uri3'] = strip_tags( $new_instance['image_uri3'] );
		 $instance['title3'] = strip_tags($new_instance['title3']);
		 $instance['text3'] = stripslashes(wp_filter_post_kses($new_instance['text3']));
		 $instance['link_text3'] = strip_tags( $new_instance['link_text3'] );
		 $instance['url3'] = strip_tags( $new_instance['url3'] );

		 /*Box 4 */
				 $instance['image_uri4'] = strip_tags( $new_instance['image_uri4'] );
				 $instance['title4'] = strip_tags($new_instance['title4']);
				 $instance['text4'] = stripslashes(wp_filter_post_kses($new_instance['text4']));
				 $instance['link_text4'] = strip_tags( $new_instance['link_text4'] );
				 $instance['url4'] = strip_tags( $new_instance['url4'] );

		 return $instance;

 }

 function form($instance) {
	?>

<p>
		<label for="<?php echo $this->get_field_id('main_title'); ?>"><?php _e('Main Title', 'unicon'); ?></label><br/>
		<input type="text" name="<?php echo $this->get_field_name('main_title'); ?>" id="<?php echo $this->get_field_id('main_title'); ?>" value="<?php if( !empty($instance['main_title']) ): echo $instance['main_title']; endif; ?>" class="widefat">
</p>

<p>
		<label for="<?php echo $this->get_field_id('sub_title'); ?>"><?php _e('Sub Title', 'unicon'); ?></label><br/>
		<input type="text" name="<?php echo $this->get_field_name('sub_title'); ?>" id="<?php echo $this->get_field_id('sub_title'); ?>" value="<?php if( !empty($instance['sub_title']) ): echo $instance['sub_title']; endif; ?>" class="widefat">
</p>
	 <!--BLOCK 1 START-->
		 <div class="accordion_unicon">
			 <h4> <?php _e('Block 1', 'unicon') ?></h4>
			 <div class="pane_unicon">

		 <div class="media-picker-wrap">
			 <?php if(!empty($instance['image_uri1'])) { ?>
				 <img style="max-width:100%; height:auto;" class="media-picker-preview" src="<?php echo esc_url($instance['image_uri1']); ?>" />
					 <i class="fa fa-times media-picker-remove"></i>
			 <?php } ?>
			 <input class="widefat media-picker" id="<?php echo $this->get_field_id( 'image_uri1' ); ?>" name="<?php echo $this->get_field_name( 'image_uri1' ); ?>" value="<?php if( !empty($instance['image_uri1']) ): echo $instance['image_uri1']; endif; ?>" type="hidden" />
				 <a class="media-picker-button button" onclick="mediaPicker(this.id)" id="<?php echo $this->get_field_id( 'image_uri1' ).'mpick'; ?>"><?php _e('Select Image', 'unicon') ?></a>
		 </div>

		 <p>
				 <label for="<?php echo $this->get_field_id('title1'); ?>"><?php _e('Title', 'unicon'); ?></label><br/>
				 <input type="text" name="<?php echo $this->get_field_name('title1'); ?>" id="<?php echo $this->get_field_id('title1'); ?>" value="<?php if( !empty($instance['title1']) ): echo $instance['title1']; endif; ?>" class="widefat">
		 </p>

		 <p>
				 <label for="<?php echo $this->get_field_id('text1'); ?>"><?php _e('Text', 'unicon'); ?></label><br/>
				 <textarea class="widefat" rows="8" cols="20" name="<?php echo $this->get_field_name('text1'); ?>" id="<?php echo $this->get_field_id('text1'); ?>"><?php if( !empty($instance['text1']) ): echo htmlspecialchars_decode($instance['text1']); endif; ?></textarea>
		 </p>
		 <p>
			 <label for="<?php echo $this->get_field_id('link_text1'); ?>"><?php _e('Link Text', 'promote'); ?></label><br/>
			 <input type="text" name="<?php echo $this->get_field_name('link_text1'); ?>" id="<?php echo $this->get_field_id('link_text1'); ?>" value="<?php if( !empty($instance['link_text1']) ): echo $instance['link_text1']; endif; ?>" class="widefat">
		 </p>
		 <p>
			 <label for="<?php echo $this->get_field_id('url1'); ?>"><?php _e('Link', 'promote'); ?></label><br/>
			 <input type="text" name="<?php echo $this->get_field_name('url1'); ?>" id="<?php echo $this->get_field_id('url1'); ?>" value="<?php if( !empty($instance['url1']) ): echo esc_url($instance['url1']); endif; ?>" >
		 </p>

 </div>


			<!--BLOCK 2 START-->
	 <h4> <?php _e('Block 2', 'unicon') ?> </h4>
	 <div class="pane_unicon">
 <div class="media-picker-wrap">
			 <?php if(!empty($instance['image_uri2'])) { ?>
				 <img style="max-width:100%; height:auto;" class="media-picker-preview" src="<?php echo esc_url($instance['image_uri2']); ?>" />
				 <i class="fa fa-times media-picker-remove"></i>
			 <?php } ?>
			 <input class="widefat media-picker" id="<?php echo $this->get_field_id( 'image_uri2' ); ?>" name="<?php echo $this->get_field_name( 'image_uri2' ); ?>" value="<?php if( !empty($instance['image_uri2']) ): echo $instance['image_uri2']; endif; ?>" type="hidden" />
			 <a class="media-picker-button button" onclick="mediaPicker(this.id)" id="<?php echo $this->get_field_id( 'image_uri2' ).'mpick'; ?>"><?php _e('Select Image', 'unicon') ?></a>
		 </div>
		 <p>
				 <label for="<?php echo $this->get_field_id('title2'); ?>"><?php _e('Title', 'unicon'); ?></label><br/>
				 <input type="text" name="<?php echo $this->get_field_name('title2'); ?>" id="<?php echo $this->get_field_id('title2'); ?>" value="<?php if( !empty($instance['title2']) ): echo $instance['title2']; endif; ?>" class="widefat">
		 </p>
		 <p>
				 <label for="<?php echo $this->get_field_id('text2'); ?>"><?php _e('Text', 'unicon'); ?></label><br/>
				 <textarea class="widefat" rows="8" cols="20" name="<?php echo $this->get_field_name('text2'); ?>" id="<?php echo $this->get_field_id('text2'); ?>"><?php if( !empty($instance['text2']) ): echo htmlspecialchars_decode($instance['text2']); endif; ?></textarea>
		 </p>
		 <p>
			 <label for="<?php echo $this->get_field_id('link_text2'); ?>"><?php _e('Link Text', 'promote'); ?></label><br/>
			 <input type="text" name="<?php echo $this->get_field_name('link_text2'); ?>" id="<?php echo $this->get_field_id('link_text2'); ?>" value="<?php if( !empty($instance['link_text2']) ): echo $instance['link_text2']; endif; ?>" class="widefat">
		 </p>
		 <p>
			 <label for="<?php echo $this->get_field_id('url2'); ?>"><?php _e('Link', 'promote'); ?></label><br/>
			 <input type="text" name="<?php echo $this->get_field_name('url2'); ?>" id="<?php echo $this->get_field_id('url2'); ?>" value="<?php if( !empty($instance['url2']) ): echo esc_url($instance['url2']); endif; ?>" class="widefat">
		 </p>

	 </div>

			<!--BLOCK 3 START-->
	 <h4> <?php _e('Block 3', 'unicon') ?></h4>
		 <div class="pane_unicon">
 <div class="media-picker-wrap">
			 <?php if(!empty($instance['image_uri3'])) { ?>
				 <img style="max-width:100%; height:auto;" class="media-picker-preview" src="<?php echo esc_url($instance['image_uri3']); ?>" />
				 <i class="fa fa-times media-picker-remove"></i>
			 <?php } ?>
			 <input class="widefat media-picker" id="<?php echo $this->get_field_id( 'image_uri3' ); ?>" name="<?php echo $this->get_field_name( 'image_uri3' ); ?>" value="<?php if( !empty($instance['image_uri3']) ): echo $instance['image_uri3']; endif; ?>" type="hidden" />
			 <a class="media-picker-button button" onclick="mediaPicker(this.id)" id="<?php echo $this->get_field_id( 'image_uri3' ).'mpick'; ?>"><?php _e('Select Image', 'unicon') ?></a>
		 </div>
			 <p>
				 <label for="<?php echo $this->get_field_id('title3'); ?>"><?php _e('Title', 'unicon'); ?></label><br/>
				 <input type="text" name="<?php echo $this->get_field_name('title3'); ?>" id="<?php echo $this->get_field_id('title3'); ?>" value="<?php if( !empty($instance['title3']) ): echo $instance['title3']; endif; ?>" class="widefat">
			 </p>


		 <p>
				 <label for="<?php echo $this->get_field_id('text3'); ?>"><?php _e('Text', 'unicon'); ?></label><br/>
				 <textarea class="widefat" rows="8" cols="20" name="<?php echo $this->get_field_name('text3'); ?>" id="<?php echo $this->get_field_id('text3'); ?>"><?php if( !empty($instance['text3']) ): echo htmlspecialchars_decode($instance['text3']); endif; ?></textarea>
				 <p>
					 <label for="<?php echo $this->get_field_id('link_text3'); ?>"><?php _e('Link Text', 'promote'); ?></label><br/>
					 <input type="text" name="<?php echo $this->get_field_name('link_text3'); ?>" id="<?php echo $this->get_field_id('link_text3'); ?>" value="<?php if( !empty($instance['link_text3']) ): echo $instance['link_text3']; endif; ?>" class="widefat">
				 </p>
				 <p>
					 <label for="<?php echo $this->get_field_id('url3'); ?>"><?php _e('Link', 'promote'); ?></label><br/>
					 <input type="text" name="<?php echo $this->get_field_name('url3'); ?>" id="<?php echo $this->get_field_id('url3'); ?>" value="<?php if( !empty($instance['url3']) ): echo esc_url($instance['url3']); endif; ?>" class="widefat">
				 </p>
	 </p>

	 </div>
	 <!--BLOCK 4 START-->
<h4> <?php _e('Block 4', 'unicon') ?></h4>
	<div class="pane_unicon">
<div class="media-picker-wrap">
		<?php if(!empty($instance['image_uri4'])) { ?>
			<img style="max-width:100%; height:auto;" class="media-picker-preview" src="<?php echo esc_url($instance['image_uri4']); ?>" />
			<i class="fa fa-times media-picker-remove"></i>
		<?php } ?>
		<input class="widefat media-picker" id="<?php echo $this->get_field_id( 'image_uri4' ); ?>" name="<?php echo $this->get_field_name( 'image_uri4' ); ?>" value="<?php if( !empty($instance['image_uri4']) ): echo $instance['image_uri4']; endif; ?>" type="hidden" />
		<a class="media-picker-button button" onclick="mediaPicker(this.id)" id="<?php echo $this->get_field_id( 'image_uri4' ).'mpick'; ?>"><?php _e('Select Image', 'unicon') ?></a>
	</div>
		<p>
			<label for="<?php echo $this->get_field_id('title4'); ?>"><?php _e('Title', 'unicon'); ?></label><br/>
			<input type="text" name="<?php echo $this->get_field_name('title4'); ?>" id="<?php echo $this->get_field_id('title4'); ?>" value="<?php if( !empty($instance['title4']) ): echo $instance['title4']; endif; ?>" class="widefat">
		</p>


	<p>
			<label for="<?php echo $this->get_field_id('text4'); ?>"><?php _e('Text', 'unicon'); ?></label><br/>
			<textarea class="widefat" rows="8" cols="20" name="<?php echo $this->get_field_name('text4'); ?>" id="<?php echo $this->get_field_id('text4'); ?>"><?php if( !empty($instance['text4']) ): echo htmlspecialchars_decode($instance['text4']); endif; ?></textarea>
			<p>
				<label for="<?php echo $this->get_field_id('link_text4'); ?>"><?php _e('Link Text', 'promote'); ?></label><br/>
				<input type="text" name="<?php echo $this->get_field_name('link_text4'); ?>" id="<?php echo $this->get_field_id('link_text4'); ?>" value="<?php if( !empty($instance['link_text4']) ): echo $instance['link_text4']; endif; ?>" class="widefat">
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('url4'); ?>"><?php _e('Link', 'promote'); ?></label><br/>
				<input type="text" name="<?php echo $this->get_field_name('url4'); ?>" id="<?php echo $this->get_field_id('url4'); ?>" value="<?php if( !empty($instance['url4']) ): echo esc_url($instance['url4']); endif; ?>" class="widefat">
			</p>
</p>

</div>
</div> <!---end accordino---->

<?php
}
 //ENQUEUE CSS
}
}
