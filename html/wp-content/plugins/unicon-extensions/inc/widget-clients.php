<?php
/**
 * clients Widget
 *
 * @since 1.0.0
 *
 * @package unicon
 */


if ( !class_exists( 'unicon_client_widget' ) ) {

	class unicon_client_widget extends WP_Widget {

		public function __construct() {
			parent::__construct(
				'unicon-client-widget',
				__( 'unicon - Clients widget', 'unicon' ),
				array(
					'customize_selective_refresh' => true,
				)
			);
			
		}



		/**
		 * Display Widget
		 *
		 * @param $args
		 * @param $instance
		 */
		 function widget($args, $instance) {

				 extract($args);
 			 $unicon_checkbox_var = isset( $instance['unicon_checkbox_var'] ) ? $instance['unicon_checkbox_var'] : '';
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
				 <div class="row promte-clients mt50">
					 <ul class=" text-center">
						 <?php if( !empty($instance['image_uri1']) ): ?>
							 <!-- client one start -->
							 <li class="large-2 large-centered medium-3 medium-centered small-4  columns mb35 wow animated fadeIn">
								 <a <?php if( !empty($instance['client_uri1']) ):?> href="<?php echo esc_url($instance['client_uri1']);?>" <?php endif;?> <?php  if( 'on' == $unicon_checkbox_var ) : ?> target="_blank" <?php endif;?> >
									 <img src="<?php echo esc_url($instance['image_uri1']);?> "  >
								 </a>
							 </li>
							 <!-- client two end -->
						 <?php endif; ?>

						 <?php if( !empty($instance['image_uri2']) ): ?>
							 <!-- client one start -->
							 <li class="large-2 large-centered medium-3 medium-centered small-4  columns mb35 wow animated fadeIn">
								 <a <?php if( !empty($instance['client_uri2']) ):?> href="<?php echo esc_url($instance['client_uri2']);?>" <?php endif;?> <?php  if( 'on' == $unicon_checkbox_var ) : ?> target="_blank" <?php endif;?> >
									 <img src="<?php echo esc_url($instance['image_uri2']);?> "  >
								 </a>
							 </li>
							 <!-- client two end -->
						 <?php endif; ?>

						 <?php if( !empty($instance['image_uri3']) ): ?>
							 <!-- client three start -->
							 <li class="large-2 large-centered medium-3 medium-centered small-4  columns mb35 wow animated fadeIn">
								 <a <?php if( !empty($instance['client_uri3']) ):?> href="<?php echo esc_url($instance['client_uri3']);?>" <?php endif;?> <?php  if( 'on' == $unicon_checkbox_var ) : ?> target="_blank" <?php endif;?>>
									 <img src="<?php echo esc_url($instance['image_uri3']);?> "  >
								 </a>
							 </li>
							 <!-- client three end -->
						 <?php endif; ?>

						 <?php if( !empty($instance['image_uri4']) ): ?>
							 <!-- client four start -->
							 <li class="large-2 large-centered medium-3 medium-centered small-4  columns mb35 wow animated fadeIn">
								 <a <?php if( !empty($instance['client_uri4']) ):?> href="<?php echo esc_url($instance['client_uri4']);?>" <?php endif;?> <?php  if( 'on' == $unicon_checkbox_var ) : ?> target="_blank" <?php endif;?>>
									 <img src="<?php echo esc_url($instance['image_uri4']);?> "  >
								 </a>
							 </li>
							 <!-- client four end -->
						 <?php endif; ?>
						 <?php if( !empty($instance['image_uri5']) ): ?>
							 <!-- client five start -->
							 <li class="large-2 large-centered medium-3 medium-centered small-4  columns mb35 wow animated fadeIn">
								 <a <?php if( !empty($instance['client_uri5']) ):?> href="<?php echo esc_url($instance['client_uri5']);?>" <?php endif;?> <?php  if( 'on' == $unicon_checkbox_var ) : ?> target="_blank" <?php endif;?> >
									 <img src="<?php echo esc_url($instance['image_uri5']);?> "  >
								 </a>
							 </li>
							 <!-- client five end -->
						 <?php endif; ?>

					 </ul>
				 			 </div> <!-- end-->



 <?php
				 echo $after_widget;}

		 function update($new_instance, $old_instance) {

				 $instance = $old_instance;

		 /*Main title */
		 /*section title */
 				$instance['main_title'] = strip_tags($new_instance['main_title']);
 				$instance['sub_title'] = strip_tags($new_instance['sub_title']);


		 /*Client 1 */


		 $instance['image_uri1'] = strip_tags( $new_instance['image_uri1'] );
		 $instance['client_uri1'] = strip_tags( $new_instance['client_uri1'] );

		 /*Client 2 */


		 $instance['image_uri2'] = strip_tags( $new_instance['image_uri2'] );
		 $instance['client_uri2'] = strip_tags( $new_instance['client_uri2'] );

		 /*Client 3 */
			 $instance['image_uri3'] = strip_tags( $new_instance['image_uri3'] );
		 $instance['client_uri3'] = strip_tags( $new_instance['client_uri3'] );

		 /*Client 4 */


		 $instance['image_uri4'] = strip_tags( $new_instance['image_uri4'] );
		 $instance['client_uri4'] = strip_tags( $new_instance['client_uri4'] );

		 /*Client 5 */


		 $instance['image_uri5'] = strip_tags( $new_instance['image_uri5'] );
		 $instance['client_uri5'] = strip_tags( $new_instance['client_uri5'] );

		 $instance[ 'unicon_checkbox_var' ] = strip_tags($new_instance[ 'unicon_checkbox_var' ]);

				 return $instance;}
	 /* ---------------------------- */
	 /* ------- Display Widget -------- */
	 /* ---------------------------- */


		 function form($instance) {
			 /* Set up some default widget settings. */
	 		$defaults = array(
	 		'unicon_checkbox_var'=>'off',
	 		);
	 		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

			 <p>
			 			 <label for="<?php echo $this->get_field_id('main_title'); ?>"><?php _e('Main Title', 'unicon'); ?></label><br/>
			 			 <input type="text" name="<?php echo $this->get_field_name('main_title'); ?>" id="<?php echo $this->get_field_id('main_title'); ?>" value="<?php if( !empty($instance['main_title']) ): echo $instance['main_title']; endif; ?>" class="widefat">
			 	 </p>

			 	 <p>
			 			 <label for="<?php echo $this->get_field_id('sub_title'); ?>"><?php _e('Sub Title', 'unicon'); ?></label><br/>
			 			 <input type="text" name="<?php echo $this->get_field_name('sub_title'); ?>" id="<?php echo $this->get_field_id('sub_title'); ?>" value="<?php if( !empty($instance['sub_title']) ): echo $instance['sub_title']; endif; ?>" class="widefat">
			 	 </p>
 <div class="accordion_unicon">

				 <!--- Client 1-->

				<h4 > <?php _e('Client 1', 'unicon') ?></h4>
				 <div class="pane_unicon">
						 <div class="widget_input_wrap">
								 <label for="<?php echo $this->get_field_id( 'image_uri1' ); ?>"><?php _e('Image 1', 'unicon') ?></label>
								 <div class="media-picker-wrap">
								 <?php if(!empty($instance['image_uri1'])) { ?>
										 <img style="max-width:100%; height:auto;" class="media-picker-preview" src="<?php echo esc_url($instance['image_uri1']); ?>" />
										 <i class="fa fa-times media-picker-remove"></i>
								 <?php } ?>
								 <input class="widefat media-picker" id="<?php echo $this->get_field_id( 'image_uri1' ); ?>" name="<?php echo $this->get_field_name( 'image_uri1' ); ?>" value="<?php if( !empty($instance['image_uri1']) ): echo $instance['image_uri1']; endif; ?>" type="hidden" />
								 <a class="media-picker-button button" onclick="mediaPicker(this.id)" id="<?php echo $this->get_field_id( 'image_uri1' ).'mpick'; ?>"><?php _e('Select Image', 'unicon') ?></a>
								 </div>
										 </div>


				 <p>

			 <label for="<?php echo $this->get_field_id('client_uri1'); ?>"><?php _e('Link 1','unicon'); ?></label><br />
			 <input type="text" name="<?php echo $this->get_field_name('client_uri1'); ?>" id="<?php echo $this->get_field_id('client_uri1'); ?>" value="<?php if( !empty($instance['client_uri1']) ): echo esc_url($instance['client_uri1']); endif; ?>" class="widefat">
		 </p>
						 </div>




				 <!--- Client 2-->
				<h4><?php _e('Client 2', 'unicon') ?></h4>


 <div class="pane_unicon">
						 <div class="widget_input_wrap">
								 <label for="<?php echo $this->get_field_id( 'image_uri2' ); ?>"><?php _e('Image 2', 'unicon') ?></label>
								 <div class="media-picker-wrap">
								 <?php if(!empty($instance['image_uri2'])) { ?>
										 <img style="max-width:100%; height:auto;" class="media-picker-preview" src="<?php echo esc_url($instance['image_uri2']); ?>" />
										 <i class="fa fa-times media-picker-remove"></i>
								 <?php } ?>
								 <input class="widefat media-picker" id="<?php echo $this->get_field_id( 'image_uri2' ); ?>" name="<?php echo $this->get_field_name( 'image_uri2' ); ?>" value="<?php if( !empty($instance['image_uri2']) ): echo $instance['image_uri2']; endif; ?>" type="hidden" />
								 <a class="media-picker-button button" onclick="mediaPicker(this.id)" id="<?php echo $this->get_field_id( 'image_uri2' ).'mpick'; ?>"><?php _e('Select Image', 'unicon') ?></a>
								 </div>
						 </div>


				 <p>

			 <label for="<?php echo $this->get_field_id('client_uri2'); ?>"><?php _e('Link 2','unicon'); ?></label><br />
			 <input type="text" name="<?php echo $this->get_field_name('client_uri2'); ?>" id="<?php echo $this->get_field_id('client_uri2'); ?>" value="<?php if( !empty($instance['client_uri2']) ): echo esc_url($instance['client_uri2']); endif; ?>" class="widefat">
		 </p>

				 </div>



 <h4 > <?php _e('Client 3', 'unicon') ?></h4>
 <div class="pane_unicon">

						 <div class="widget_input_wrap">
								 <label for="<?php echo $this->get_field_id( 'image_uri3' ); ?>"><?php _e('Image 3', 'unicon') ?></label>
								 <div class="media-picker-wrap">
								 <?php if(!empty($instance['image_uri3'])) { ?>
										 <img style="max-width:100%; height:auto;" class="media-picker-preview" src="<?php echo esc_url($instance['image_uri3']); ?>" />
										 <i class="fa fa-times media-picker-remove"></i>
								 <?php } ?>
								 <input class="widefat media-picker" id="<?php echo $this->get_field_id( 'image_uri3' ); ?>" name="<?php echo $this->get_field_name( 'image_uri3' ); ?>" value="<?php if( !empty($instance['image_uri3']) ): echo $instance['image_uri3']; endif; ?>" type="hidden" />
								 <a class="media-picker-button button" onclick="mediaPicker(this.id)" id="<?php echo $this->get_field_id( 'image_uri3' ).'mpick'; ?>"><?php _e('Select Image', 'unicon') ?></a>
								 </div>
						 </div>


				 <p>

			 <label for="<?php echo $this->get_field_id('client_uri3'); ?>"><?php _e('Link 3','unicon'); ?></label><br />
			 <input type="text" name="<?php echo $this->get_field_name('client_uri3'); ?>" id="<?php echo $this->get_field_id('client_uri3'); ?>" value="<?php if( !empty($instance['client_uri3']) ): echo esc_url($instance['client_uri3']); endif; ?>" class="widefat">
		 </p>
 </div>


		<!--- Client 4-->


 <h4 > <?php _e('Client 4', 'unicon') ?></h4>
 <div class="pane_unicon">

						 <div class="widget_input_wrap">
								 <label for="<?php echo $this->get_field_id( 'image_uri4' ); ?>"><?php _e('Image 4', 'unicon') ?></label>
								 <div class="media-picker-wrap">
								 <?php if(!empty($instance['image_uri4'])) { ?>
										 <img style="max-width:100%; height:auto;" class="media-picker-preview" src="<?php echo esc_url($instance['image_uri4']); ?>" />
										 <i class="fa fa-times media-picker-remove"></i>
								 <?php } ?>
								 <input class="widefat media-picker" id="<?php echo $this->get_field_id( 'image_uri4' ); ?>" name="<?php echo $this->get_field_name( 'image_uri4' ); ?>" value="<?php if( !empty($instance['image_uri4']) ): echo $instance['image_uri4']; endif; ?>" type="hidden" />
								 <a class="media-picker-button button" onclick="mediaPicker(this.id)" id="<?php echo $this->get_field_id( 'image_uri4' ).'mpick'; ?>"><?php _e('Select Image', 'unicon') ?></a>
								 </div>
						 </div>


				 <p>

			 <label for="<?php echo $this->get_field_id('client_uri4'); ?>"><?php _e('Link 4','unicon'); ?></label><br />
			 <input type="text" name="<?php echo $this->get_field_name('client_uri4'); ?>" id="<?php echo $this->get_field_id('client_uri4'); ?>" value="<?php if( !empty($instance['client_uri4']) ): echo esc_url($instance['client_uri4']); endif; ?>" class="widefat">
		 </p>
 </div>

						<!--- Client 5-->


						 <h4 > <?php _e('Client 5', 'unicon') ?></h4>

 <div class="pane_unicon">
						 <div class="widget_input_wrap">
								 <label for="<?php echo $this->get_field_id( 'image_uri5' ); ?>"><?php _e('Image 5', 'unicon') ?></label>
								 <div class="media-picker-wrap">
								 <?php if(!empty($instance['image_uri5'])) { ?>
										 <img style="max-width:100%; height:auto;" class="media-picker-preview" src="<?php echo esc_url($instance['image_uri5']); ?>" />
										 <i class="fa fa-times media-picker-remove"></i>
								 <?php } ?>
								 <input class="widefat media-picker" id="<?php echo $this->get_field_id( 'image_uri5' ); ?>" name="<?php echo $this->get_field_name( 'image_uri5' ); ?>" value="<?php if( !empty($instance['image_uri5']) ): echo $instance['image_uri5']; endif; ?>" type="hidden" />
								 <a class="media-picker-button button" onclick="mediaPicker(this.id)" id="<?php echo $this->get_field_id( 'image_uri5' ).'mpick'; ?>"><?php _e('Select Image', 'unicon') ?></a>
								 </div>
						 </div>


				 <p>

			 <label for="<?php echo $this->get_field_id('client_uri5'); ?>"><?php _e('Link 5','unicon'); ?></label><br />
			 <input type="text" name="<?php echo $this->get_field_name('client_uri5'); ?>" id="<?php echo $this->get_field_id('client_uri5'); ?>" value="<?php if( !empty($instance['client_uri5']) ): echo esc_url($instance['client_uri5']); endif; ?>" class="widefat">
		 </p>
				 </div>

	 </div> <!---end accordino---->

	 <p>
	     <input class="checkbox" type="checkbox" <?php checked( $instance[ 'unicon_checkbox_var' ], 'on' ); ?> id="<?php echo $this->get_field_id( 'unicon_checkbox_var' ); ?>" name="<?php echo $this->get_field_name( 'unicon_checkbox_var' ); ?>" />
	     <label for="<?php echo $this->get_field_id( 'unicon_checkbox_var' ); ?>"><?php _e('Open In new tab', 'unicon'); ?></label>
	 </p>
			<?php

		 }
}
 }
