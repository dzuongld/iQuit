<?php
/**
 * service Widget
 *
 * @since 1.0.0
 *
 * @package unicon
 */


if ( !class_exists( 'unicon_team_widget' ) ) {

	class unicon_team_widget extends WP_Widget {

		public function __construct() {
			parent::__construct(
				'unicon-team-widget',
				__( 'unicon - Team widget', 'unicon-pro' ),
				array(
					'customize_selective_refresh' => true,
				)
			);
			
		}


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
	 		<div class="row mt50">
	     	<ul class="team_ul text-center">
	          <!-- team one start -->
					 		<?php	if (!empty($instance['icon1']) || !empty($instance['title1']) || !empty($instance['box_uri1']) || !empty($instance['image_uri1'])): ?>
								<?php if( !empty($instance['box_uri1']) ):?>
									<a  href="<?php echo esc_url($instance['box_uri1']);?>" <?php  if( 'on' == $unicon_checkbox_var ) : ?> target="_blank" <?php endif;?>  >
								<?php endif;?>
	              	<li class="team_block  columns mb35">
	                	<div class="team team-two">
									  	<?php if (!empty($instance['image_uri1'])): ?>
	                 			<img src="<?php echo esc_url($instance['image_uri1']); ?>" alt="" >
											<?php endif;?>
											<?php if (!empty($instance['title1'])): ?>
	                   		<h5><?php echo apply_filters('widget_title', $instance['title1']); ?> </h5>
											<?php endif;?>
											<?php if (!empty($instance['icon1'])): ?>
	                    	<p><?php echo esc_attr($instance['icon1']); ?></p>
											<?php endif;?>
		              	</div>
	              	</li>
								<?php if( !empty($instance['box_uri1']) ):?>
									</a>
								<?php endif;?>
							<?php endif; ?>
	          <!-- team one end -->

						<!-- team two start -->
					 		<?php	if (!empty($instance['icon2']) || !empty($instance['title2']) || !empty($instance['box_uri2']) || !empty($instance['image_uri2'])): ?>
								<?php if( !empty($instance['box_uri2']) ):?>
									<a  href="<?php echo esc_url($instance['box_uri2']);?>" <?php  if( 'on' == $unicon_checkbox_var ) : ?> target="_blank" <?php endif;?>  >
								<?php endif;?>
	              	<li class="team_block  columns mb35">
	                	<div class="team team-two">
									  	<?php if (!empty($instance['image_uri2'])): ?>
	                 			<img src="<?php echo esc_url($instance['image_uri2']); ?>" alt="" >
											<?php endif;?>
											<?php if (!empty($instance['title2'])): ?>
	                   		<h5><?php echo apply_filters('widget_title', $instance['title2']); ?> </h5>
											<?php endif;?>
											<?php if (!empty($instance['icon2'])): ?>
	                    	<p><?php echo esc_attr($instance['icon2']); ?></p>
											<?php endif;?>
		              	</div>
	              	</li>
								<?php if( !empty($instance['box_uri2']) ):?>
									</a>
								<?php endif;?>
							<?php endif; ?>
	          <!-- team two end -->

						<!-- team three start -->
					 		<?php	if (!empty($instance['icon3']) || !empty($instance['title3']) || !empty($instance['box_uri3']) || !empty($instance['image_uri3'])): ?>
								<?php if( !empty($instance['box_uri3']) ):?>
									<a  href="<?php echo esc_url($instance['box_uri3']);?>" <?php  if( 'on' == $unicon_checkbox_var ) : ?> target="_blank" <?php endif;?>  >
								<?php endif;?>
	              	<li class="team_block  columns mb35">
	                	<div class="team team-two">
									  	<?php if (!empty($instance['image_uri3'])): ?>
	                 			<img src="<?php echo esc_url($instance['image_uri3']); ?>" alt="" >
											<?php endif;?>
											<?php if (!empty($instance['title3'])): ?>
	                   		<h5><?php echo apply_filters('widget_title', $instance['title3']); ?> </h5>
											<?php endif;?>
											<?php if (!empty($instance['icon3'])): ?>
	                    	<p><?php echo esc_attr($instance['icon3']); ?></p>
											<?php endif;?>
		              	</div>
	              	</li>
								<?php if( !empty($instance['box_uri3']) ):?>
									</a>
								<?php endif;?>
							<?php endif; ?>
	          <!-- team three end -->

						<!-- team 4 start -->
					 		<?php	if (!empty($instance['icon4']) || !empty($instance['title4']) || !empty($instance['box_uri4']) || !empty($instance['image_uri4'])): ?>
								<?php if( !empty($instance['box_uri4']) ):?>
									<a  href="<?php echo esc_url($instance['box_uri4']);?>" <?php  if( 'on' == $unicon_checkbox_var ) : ?> target="_blank" <?php endif;?>  >
								<?php endif;?>
	              	<li class="team_block  columns mb35">
	                	<div class="team team-two">
									  	<?php if (!empty($instance['image_uri4'])): ?>
	                 			<img src="<?php echo esc_url($instance['image_uri4']); ?>" alt="" >
											<?php endif;?>
											<?php if (!empty($instance['title4'])): ?>
	                   		<h5><?php echo apply_filters('widget_title', $instance['title4']); ?> </h5>
											<?php endif;?>
											<?php if (!empty($instance['icon4'])): ?>
	                    	<p><?php echo esc_attr($instance['icon4']); ?></p>
											<?php endif;?>
		              	</div>
	              	</li>
								<?php if( !empty($instance['box_uri4']) ):?>
									</a>
								<?php endif;?>
							<?php endif; ?>
	          <!-- team 4 end -->
	      </ul>
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
        $instance['icon1'] = strip_tags( $new_instance['icon1'] );
				$instance['image_uri1'] = strip_tags( $new_instance['image_uri1'] );
        $instance['title1'] = strip_tags($new_instance['title1']);
				$instance['box_uri1'] = strip_tags( $new_instance['box_uri1'] );

		/*Box 2 */
        $instance['icon2'] = strip_tags( $new_instance['icon2'] );
				$instance['image_uri2'] = strip_tags( $new_instance['image_uri2'] );
        $instance['title2'] = strip_tags($new_instance['title2']);
				$instance['box_uri2'] = strip_tags( $new_instance['box_uri2'] );

		/*Box 3 */
        $instance['icon3'] = strip_tags( $new_instance['icon3'] );
				$instance['image_uri3'] = strip_tags( $new_instance['image_uri3'] );
        $instance['title3'] = strip_tags($new_instance['title3']);
				$instance['box_uri3'] = strip_tags( $new_instance['box_uri3'] );
		/*Box 4 */
		    $instance['icon4'] = strip_tags( $new_instance['icon4'] );
				$instance['image_uri4'] = strip_tags( $new_instance['image_uri4'] );
		    $instance['title4'] = strip_tags($new_instance['title4']);
				$instance['box_uri4'] = strip_tags( $new_instance['box_uri4'] );

				$instance[ 'unicon_checkbox_var' ] = strip_tags($new_instance[ 'unicon_checkbox_var' ]);
        return $instance;

    }

    function form($instance) {
			/* Set up some default widget settings. */
			$defaults = array(
			'unicon_checkbox_var'=>'off',
			);
			$instance = wp_parse_args( (array) $instance, $defaults ); ?>


	<p>
			 <label for="<?php echo $this->get_field_id('main_title'); ?>"><?php _e('Main Title', 'unicon-pro'); ?></label><br/>
			 <input type="text" name="<?php echo $this->get_field_name('main_title'); ?>" id="<?php echo $this->get_field_id('main_title'); ?>" value="<?php if( !empty($instance['main_title']) ): echo $instance['main_title']; endif; ?>" class="widefat">
	 </p>

	 <p>
			 <label for="<?php echo $this->get_field_id('sub_title'); ?>"><?php _e('Sub Title', 'unicon-pro'); ?></label><br/>
			 <input type="text" name="<?php echo $this->get_field_name('sub_title'); ?>" id="<?php echo $this->get_field_id('sub_title'); ?>" value="<?php if( !empty($instance['sub_title']) ): echo $instance['sub_title']; endif; ?>" class="widefat">
	 </p>
        <!--BLOCK 1 START-->
				 <h5><?php _e('Note: Team Image size (258 x 258) ', 'unicon-pro') ?></h5>
        <div class="accordion_unicon">
          <h4> <?php _e('Team 1', 'unicon-pro') ?></h4>
          <div class="pane_unicon">

						<p>
								<label for="<?php echo $this->get_field_id('title1'); ?>"><?php _e('Title', 'unicon-pro'); ?></label><br/>
								<input type="text" name="<?php echo $this->get_field_name('title1'); ?>" id="<?php echo $this->get_field_id('title1'); ?>" value="<?php if( !empty($instance['title1']) ): echo $instance['title1']; endif; ?>" class="widefat">
						</p>

        	<p>
            <label for="<?php echo $this->get_field_id('icon1'); ?>"><?php _e('Designation', 'unicon-pro'); ?></label><br/>
            <input type="text" name="<?php echo $this->get_field_name('icon1'); ?>" id="<?php echo $this->get_field_id('icon1'); ?>" value="<?php if( !empty($instance['icon1']) ): echo $instance['icon1']; endif; ?>" class="widefat">
        	</p>

        <div class="media-picker-wrap">
          <?php if(!empty($instance['image_uri1'])) { ?>
            <img style="max-width:100%; height:auto;" class="media-picker-preview" src="<?php echo esc_url($instance['image_uri1']); ?>" />
              <i class="fa fa-times media-picker-remove"></i>
          <?php } ?>
          <input class="widefat media-picker" id="<?php echo $this->get_field_id( 'image_uri1' ); ?>" name="<?php echo $this->get_field_name( 'image_uri1' ); ?>" value="<?php if( !empty($instance['image_uri1']) ): echo $instance['image_uri1']; endif; ?>" type="hidden" />
          	<a class="media-picker-button button" onclick="mediaPicker(this.id)" id="<?php echo $this->get_field_id( 'image_uri1' ).'mpick'; ?>"><?php _e('Select Image', 'unicon-pro') ?></a>
        </div>
        <p>

					<label for="<?php echo $this->get_field_id('box_uri1'); ?>"><?php _e('Link 1','unicon-pro'); ?></label><br />
					<input type="text" name="<?php echo $this->get_field_name('box_uri1'); ?>" id="<?php echo $this->get_field_id('box_uri1'); ?>" value="<?php if( !empty($instance['box_uri1']) ): echo esc_url($instance['box_uri1']); endif; ?>" class="widefat">
				</p>
    </div>


         <!--BLOCK 2 START-->
    	<h4> <?php _e('Team 2', 'unicon-pro') ?></h4>
      <div class="pane_unicon">
				<p>
						<label for="<?php echo $this->get_field_id('title2'); ?>"><?php _e('Title', 'unicon-pro'); ?></label><br/>
						<input type="text" name="<?php echo $this->get_field_name('title2'); ?>" id="<?php echo $this->get_field_id('title2'); ?>" value="<?php if( !empty($instance['title2']) ): echo $instance['title2']; endif; ?>" class="widefat">
				</p>

        <p>
            <label for="<?php echo $this->get_field_id('icon2'); ?>"><?php _e('Designation', 'unicon-pro'); ?></label><br/>
            <input type="text" name="<?php echo $this->get_field_name('icon2'); ?>" id="<?php echo $this->get_field_id('icon2'); ?>" value="<?php if( !empty($instance['icon2']) ): echo $instance['icon2']; endif; ?>" class="widefat">
        </p>

        <div class="media-picker-wrap">
          <?php if(!empty($instance['image_uri2'])) { ?>
            <img style="max-width:100%; height:auto;" class="media-picker-preview" src="<?php echo esc_url($instance['image_uri2']); ?>" />
            <i class="fa fa-times media-picker-remove"></i>
          <?php } ?>
          <input class="widefat media-picker" id="<?php echo $this->get_field_id( 'image_uri2' ); ?>" name="<?php echo $this->get_field_name( 'image_uri2' ); ?>" value="<?php if( !empty($instance['image_uri2']) ): echo $instance['image_uri2']; endif; ?>" type="hidden" />
          <a class="media-picker-button button" onclick="mediaPicker(this.id)" id="<?php echo $this->get_field_id( 'image_uri2' ).'mpick'; ?>"><?php _e('Select Image', 'unicon-pro') ?></a>
        </div>

        <p>
					<label for="<?php echo $this->get_field_id('box_uri2'); ?>"><?php _e('Link ','unicon-pro'); ?></label><br />
					<input type="text" name="<?php echo $this->get_field_name('box_uri2'); ?>" id="<?php echo $this->get_field_id('box_uri2'); ?>" value="<?php if( !empty($instance['box_uri2']) ): echo esc_url($instance['box_uri2']); endif; ?>" class="widefat">
				</p>
      </div>

         <!--BLOCK 3 START-->
      <h4> <?php _e('Team 3', 'unicon-pro') ?></h4>
        <div class="pane_unicon">
					<p>
						<label for="<?php echo $this->get_field_id('title3'); ?>"><?php _e('Title', 'unicon-pro'); ?></label><br/>
						<input type="text" name="<?php echo $this->get_field_name('title3'); ?>" id="<?php echo $this->get_field_id('title3'); ?>" value="<?php if( !empty($instance['title3']) ): echo $instance['title3']; endif; ?>" class="widefat">
					</p>

        	<p>
            <label for="<?php echo $this->get_field_id('icon3'); ?>"><?php _e('Designation', 'unicon-pro'); ?></label><br/>
            <input type="text" name="<?php echo $this->get_field_name('icon3'); ?>" id="<?php echo $this->get_field_id('icon3'); ?>" value="<?php if( !empty($instance['icon3']) ): echo $instance['icon3']; endif; ?>" class="widefat">
        	</p>

        <div class="media-picker-wrap">
          <?php if(!empty($instance['image_uri3'])) { ?>
            <img style="max-width:100%; height:auto;" class="media-picker-preview" src="<?php echo esc_url($instance['image_uri3']); ?>" />
            <i class="fa fa-times media-picker-remove"></i>
          <?php } ?>
          <input class="widefat media-picker" id="<?php echo $this->get_field_id( 'image_uri3' ); ?>" name="<?php echo $this->get_field_name( 'image_uri3' ); ?>" value="<?php if( !empty($instance['image_uri3']) ): echo $instance['image_uri3']; endif; ?>" type="hidden" />
          <a class="media-picker-button button" onclick="mediaPicker(this.id)" id="<?php echo $this->get_field_id( 'image_uri3' ).'mpick'; ?>"><?php _e('Select Image', 'unicon-pro') ?></a>
        </div>

        <p>
					<label for="<?php echo $this->get_field_id('box_uri3'); ?>"><?php _e('Link ','unicon-pro'); ?></label><br />
					<input type="text" name="<?php echo $this->get_field_name('box_uri3'); ?>" id="<?php echo $this->get_field_id('box_uri3'); ?>" value="<?php if( !empty($instance['box_uri3']) ): echo esc_url($instance['box_uri3']); endif; ?>" class="widefat">
				</p>
      </div>

			<!--BLOCK 4 START-->
	 <h4> <?php _e('Team 4', 'unicon-pro') ?></h4>
		 <div class="pane_unicon">
			 <p>
				 <label for="<?php echo $this->get_field_id('title4'); ?>"><?php _e('Title', 'unicon-pro'); ?></label><br/>
				 <input type="text" name="<?php echo $this->get_field_name('title4'); ?>" id="<?php echo $this->get_field_id('title4'); ?>" value="<?php if( !empty($instance['title4']) ): echo $instance['title4']; endif; ?>" class="widefat">
			 </p>

			 <p>
				 <label for="<?php echo $this->get_field_id('icon4'); ?>"><?php _e('Designation', 'unicon-pro'); ?></label><br/>
				 <input type="text" name="<?php echo $this->get_field_name('icon4'); ?>" id="<?php echo $this->get_field_id('icon4'); ?>" value="<?php if( !empty($instance['icon4']) ): echo $instance['icon4']; endif; ?>" class="widefat">
			 </p>

		 <div class="media-picker-wrap">
			 <?php if(!empty($instance['image_uri4'])) { ?>
				 <img style="max-width:100%; height:auto;" class="media-picker-preview" src="<?php echo esc_url($instance['image_uri4']); ?>" />
				 <i class="fa fa-times media-picker-remove"></i>
			 <?php } ?>
			 <input class="widefat media-picker" id="<?php echo $this->get_field_id( 'image_uri4' ); ?>" name="<?php echo $this->get_field_name( 'image_uri4' ); ?>" value="<?php if( !empty($instance['image_uri4']) ): echo $instance['image_uri4']; endif; ?>" type="hidden" />
			 <a class="media-picker-button button" onclick="mediaPicker(this.id)" id="<?php echo $this->get_field_id( 'image_uri4' ).'mpick'; ?>"><?php _e('Select Image', 'unicon-pro') ?></a>
		 </div>

		 <p>
			 <label for="<?php echo $this->get_field_id('box_uri4'); ?>"><?php _e('Link ','unicon-pro'); ?></label><br />
			 <input type="text" name="<?php echo $this->get_field_name('box_uri4'); ?>" id="<?php echo $this->get_field_id('box_uri4'); ?>" value="<?php if( !empty($instance['box_uri4']) ): echo esc_url($instance['box_uri4']); endif; ?>" class="widefat">
		 </p>
	 </div>
</div> <!---end accordino---->

<p>
    <input class="checkbox" type="checkbox" <?php checked( $instance[ 'unicon_checkbox_var' ], 'on' ); ?> id="<?php echo $this->get_field_id( 'unicon_checkbox_var' ); ?>" name="<?php echo $this->get_field_name( 'unicon_checkbox_var' ); ?>" />
    <label for="<?php echo $this->get_field_id( 'unicon_checkbox_var' ); ?>"><?php _e('Open In new tab', 'unicon-pro'); ?></label>
</p>
 <?php
	}
		//ENQUEUE CSS
   }
}
