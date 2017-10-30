<?php
/**
 * feature Widget
 *
 * @since 1.0.0
 *
 * @package unicon
 */



 if ( !class_exists( 'unicon_feature_widget' ) ) {

    class unicon_feature_widget extends WP_Widget {

      public function __construct() {
        parent::__construct(
          'unicon-feature-widget',
          __( 'unicon - Feature widget', 'unicon' ),
          array(
            'description' => __( 'You can add use this widgte in any section or page', 'unicon' ),
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
				 $bg_color = isset( $instance['bg_color'] ) ? $instance['bg_color'] : '#BCBDD4';
				 $content_bgimage = isset( $instance['content_bgimage'] ) ? $instance['content_bgimage'] : '';
				 $showcase_link = isset( $instance[ 'bg_position' ]) ? $instance['bg_position']  : '';

				 echo $before_widget;

				 ?>


<!-- Feature Area
=====================================-->
<div id="feature" class="pt50 pb50" style="Background-color:<?php echo $bg_color; ?>;<?php if (!empty($content_bgimage)): ?> background:url(<?php echo $content_bgimage ;?>) no-repeat <?php if( 'on' == $showcase_link ) : ?> fixed <?php endif; ?> ; background-size: cover;<?php endif; ?>">
  <!--section head end-->
     <?php if ( !empty($instance['title']) || !empty($instance['sub_title']) ):?>
        <div class=" row mt50 mb50">
            <div class="section-header wow fadeIn animated " data-wow-duration="1s">
              <?php if( !empty($instance['title']) ): ?>
                <h1 class="section-title wow fadeIn"  style="color:<?php echo esc_attr($instance['title_color']); ?>;" >
                  <?php echo apply_filters('widget_title', $instance['title']); ?>
                </h1>
                  <div class="colored-line"></div>
             <?php endif;?>
             <?php if( !empty($instance['sub_title']) ): ?>
                <div class="section-description">
                    <h2 style="color:<?php echo esc_attr($instance['subtitle_color']); ?>;" ><?php echo apply_filters('widget_title', $instance['sub_title']); ?></h2>
                </div>
              <?php endif;?>
            </div><!--section head end-->
        </div><!--row end-->
    <?php endif; ?>

        <div class="row mt50">
          <?php	if (!empty($instance['icon1']) || !empty($instance['title1']) || !empty($instance['text1']) ): ?>
            <div class="matchhe large-4 medium-6 small-12 columns">
              <div class="content-box content-box-left-icon mb30">
									<?php if (!empty($instance['icon1'])): ?>
                <span class="icon-mobile " style="color:<?php echo esc_attr($instance['icon_color1']); ?>;"><i class="fa <?php echo esc_attr($instance['icon1']); ?> " aria-hidden="true"></i></span>
								<?php endif;?>
								<?php if (!empty($instance['title1'])): ?>
                  <h5 style="color:<?php echo esc_attr($instance['contenttitle_color']); ?>;"><?php echo apply_filters('widget_title', $instance['title1']); ?></h5>
                <?php endif;?>
                <?php if (!empty($instance['text1'])): ?>
                  <p style="color:<?php echo esc_attr($instance['content_color']); ?>;"><?php echo htmlspecialchars_decode(apply_filters('widget_title', $instance['text1'])); ?></p>
                <?php endif;?>
              </div>
            </div>
	        <?php endif; ?>

          <?php	if (!empty($instance['icon2']) || !empty($instance['title2']) || !empty($instance['text2']) ): ?>
            <div class="matchhe large-4 medium-6 small-12 columns">
              <div class="content-box content-box-left-icon mb30">
								<?php if (!empty($instance['icon2'])): ?>
                <span class="icon-mobile " style="color:<?php echo esc_attr($instance['icon_color2']); ?>;"><i class="fa <?php echo esc_attr($instance['icon2']); ?> " aria-hidden="true"></i></span>
							<?php endif;?>
							  <?php if (!empty($instance['title2'])): ?>
                  <h5 style="color:<?php echo esc_attr($instance['contenttitle_color']); ?>;"><?php echo apply_filters('widget_title', $instance['title2']); ?></h5>
                <?php endif;?>
                <?php if (!empty($instance['text2'])): ?>
                  <p style="color:<?php echo esc_attr($instance['content_color']); ?>;"><?php echo htmlspecialchars_decode(apply_filters('widget_title', $instance['text2'])); ?></p>
                <?php endif;?>
              </div>
            </div>
	        <?php endif; ?>
          <?php	if (!empty($instance['icon3']) || !empty($instance['title3']) || !empty($instance['text3']) ): ?>
            <div class="matchhe large-4 medium-6 small-12 columns">
              <div class="content-box content-box-left-icon mb30">
								<?php if (!empty($instance['icon3'])): ?>
                <span class="icon-mobile " style="color:<?php echo esc_attr($instance['icon_color3']); ?>;"><i class="fa <?php echo esc_attr($instance['icon3']); ?> " aria-hidden="true"></i></span>
								<?php endif;?>
							  <?php if (!empty($instance['title3'])): ?>
                  <h5 style="color:<?php echo esc_attr($instance['contenttitle_color']); ?>;"><?php echo apply_filters('widget_title', $instance['title3']); ?></h5>
                <?php endif;?>
                <?php if (!empty($instance['text3'])): ?>
                  <p style="color:<?php echo esc_attr($instance['content_color']); ?>;"><?php echo htmlspecialchars_decode(apply_filters('widget_title', $instance['text3'])); ?></p>
                <?php endif;?>
              </div>
            </div>
	        <?php endif; ?>
          <?php	if (!empty($instance['icon4']) || !empty($instance['title4']) || !empty($instance['text4']) ): ?>
            <div class="matchhe large-4 medium-6 small-12 columns">
              <div class="content-box content-box-left-icon mb30">
								<?php if (!empty($instance['icon4'])): ?>
                <span class="icon-mobile " style="color:<?php echo esc_attr($instance['icon_color4']); ?>;"><i class="fa <?php echo esc_attr($instance['icon4']); ?> " aria-hidden="true"></i></span>
							<?php endif;?>
							  <?php if (!empty($instance['title4'])): ?>
                  <h5 style="color:<?php echo esc_attr($instance['contenttitle_color']); ?>;"><?php echo apply_filters('widget_title', $instance['title4']); ?></h5>
                <?php endif;?>
                <?php if (!empty($instance['text4'])): ?>
                  <p style="color:<?php echo esc_attr($instance['content_color']); ?>;"><?php echo htmlspecialchars_decode(apply_filters('widget_title', $instance['text4'])); ?></p>
                <?php endif;?>
              </div>
            </div>
	        <?php endif; ?>
          <?php	if (!empty($instance['icon5']) || !empty($instance['title5']) || !empty($instance['text5']) ): ?>
            <div class="matchhe large-4 medium-6 small-12 columns">
              <div class="content-box content-box-left-icon mb30">
								<?php if (!empty($instance['icon5'])): ?>
                <span class="icon-mobile " style="color:<?php echo esc_attr($instance['icon_color5']); ?>;"><i class="fa <?php echo esc_attr($instance['icon5']); ?> " aria-hidden="true"></i></span>
							<?php endif;?>
								<?php if (!empty($instance['title5'])): ?>
                  <h5 style="color:<?php echo esc_attr($instance['contenttitle_color']); ?>;"><?php echo apply_filters('widget_title', $instance['title5']); ?></h5>
                <?php endif;?>
                <?php if (!empty($instance['text5'])): ?>
                  <p style="color:<?php echo esc_attr($instance['content_color']); ?>;"><?php echo htmlspecialchars_decode(apply_filters('widget_title', $instance['text5'])); ?></p>
                <?php endif;?>
              </div>
            </div>
	        <?php endif; ?>
          <?php	if (!empty($instance['icon6']) || !empty($instance['title6']) || !empty($instance['text6']) ): ?>
            <div class="matchhe large-4 medium-6 small-12  columns">
              <div class="content-box content-box-left-icon mb30">
								<?php if (!empty($instance['icon6'])): ?>
                <span class="icon-mobile " style="color:<?php echo esc_attr($instance['icon_color6']); ?>;"><i class="fa <?php echo esc_attr($instance['icon6']); ?> " aria-hidden="true"></i></span>
								<?php endif;?>
								<?php if (!empty($instance['title6'])): ?>
                  <h5 style="color:<?php echo esc_attr($instance['contenttitle_color']); ?>;"><?php echo apply_filters('widget_title', $instance['title6']); ?></h5>
                <?php endif;?>
                <?php if (!empty($instance['text6'])): ?>
                  <p style="color:<?php echo esc_attr($instance['content_color']); ?>;"><?php echo htmlspecialchars_decode(apply_filters('widget_title', $instance['text6'])); ?></p>
                <?php endif;?>
              </div>
            </div>
	        <?php endif; ?>


        </div>
</div>

<?php
        echo $after_widget;


    }

    function update($new_instance, $old_instance) {

        $instance = $old_instance;

		/*section title */
				$instance['title'] = strip_tags($new_instance['title']);
				$instance['sub_title'] = strip_tags($new_instance['sub_title']);
		/*Box 1 */
        $instance['icon1'] = strip_tags( $new_instance['icon1'] );
				$instance['icon_color1'] = strip_tags($new_instance['icon_color1']);
        $instance['title1'] = strip_tags($new_instance['title1']);
				$instance['text1'] = stripslashes(wp_filter_post_kses($new_instance['text1']));

		/*Box 2 */
        $instance['icon2'] = strip_tags( $new_instance['icon2'] );
				$instance['icon_color2'] = strip_tags($new_instance['icon_color2']);
        $instance['title2'] = strip_tags($new_instance['title2']);
				$instance['text2'] = stripslashes(wp_filter_post_kses($new_instance['text2']));


		/*Box 3 */
        $instance['icon3'] = strip_tags( $new_instance['icon3'] );
				$instance['icon_color3'] = strip_tags($new_instance['icon_color3']);
        $instance['title3'] = strip_tags($new_instance['title3']);
				$instance['text3'] = stripslashes(wp_filter_post_kses($new_instance['text3']));

    /*Box 4 */
        $instance['icon4'] = strip_tags( $new_instance['icon4'] );
    		$instance['icon_color4'] = strip_tags($new_instance['icon_color4']);
        $instance['title4'] = strip_tags($new_instance['title4']);
    		$instance['text4'] = stripslashes(wp_filter_post_kses($new_instance['text4']));
    /*Box 5 */
        $instance['icon5'] = strip_tags( $new_instance['icon5'] );
        $instance['icon_color5'] = strip_tags($new_instance['icon_color5']);
        $instance['title5'] = strip_tags($new_instance['title5']);
        $instance['text5'] = stripslashes(wp_filter_post_kses($new_instance['text5']));
    /*Box 6 */
        $instance['icon6'] = strip_tags( $new_instance['icon6'] );
        $instance['icon_color6'] = strip_tags($new_instance['icon_color6']);
        $instance['title6'] = strip_tags($new_instance['title6']);
        $instance['text6'] = stripslashes(wp_filter_post_kses($new_instance['text6']));
        //* color setup *//

        $instance['title_color'] = strip_tags($new_instance['title_color']);
        $instance['subtitle_color'] = strip_tags($new_instance['subtitle_color']);
        $instance['bg_color'] = strip_tags($new_instance['bg_color']);
        $instance['content_color'] = strip_tags($new_instance['content_color']);
        $instance['contenttitle_color'] = strip_tags($new_instance['contenttitle_color']);
        $instance['content_bgimage'] = strip_tags($new_instance['content_bgimage']);
        $instance['bg_position'] = strip_tags($new_instance['bg_position']);


        return $instance;

    }

    function form($instance) {
      /* Set up some default widget settings. */
     $defaults = array(

     'bg_color' => '#fff',
     'title' => 'Amazing Template Features',
     'title_color' => '#0a0a0a',
     'subtitle_color' => '#747474',
     'contenttitle_color' => '#000',
     'content_color' => '#747474',
     'bg_position'=>'off',
     'icon1' => 'fa-code',
     'title1'=>'Mobile Optimzed',
     'text1'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit commodi pariatur magni omnis reiciendis architecto.',
     'icon_color1'=>'#73baae',
     'icon_color2'=>'#73baae',
     'icon_color3'=>'#73baae',
     'icon_color4'=>'#73baae',
     'icon_color5'=>'#73baae',
     'icon_color6'=>'#73baae',

     );
     $instance = wp_parse_args( (array) $instance, $defaults ); ?>
	<p>
			 <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e(' Title', 'unicon'); ?></label><br/>
			 <input type="text" name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>" value="<?php if( !empty($instance['title']) ): echo $instance['title']; endif; ?>" class="widefat">
	 </p>

	 <p>
			 <label for="<?php echo $this->get_field_id('sub_title'); ?>"><?php _e('Sub Title', 'unicon'); ?></label><br/>
			 <input type="text" name="<?php echo $this->get_field_name('sub_title'); ?>" id="<?php echo $this->get_field_id('sub_title'); ?>" value="<?php if( !empty($instance['sub_title']) ): echo $instance['sub_title']; endif; ?>" class="widefat">
	 </p>
   <p>
     <label for="<?php echo $this->get_field_id( 'title_color' ); ?>" class="icon-color"><?php _e('Title Color', 'unicon') ?></label>
     <input class="widefat color-picker" id="<?php echo $this->get_field_id( 'title_color' ); ?>" name="<?php echo $this->get_field_name( 'title_color' ); ?>" value="<?php echo $instance['title_color']; ?>" type="text" />
   </p>
   <p>
     <label for="<?php echo $this->get_field_id( 'subtitle_color' ); ?>" class="icon-color"><?php _e('Sub Title Color', 'unicon') ?></label>
     <input class="widefat color-picker" id="<?php echo $this->get_field_id( 'subtitle_color' ); ?>" name="<?php echo $this->get_field_name( 'subtitle_color' ); ?>" value="<?php echo $instance['subtitle_color']; ?>" type="text" />
   </p>

         <h5><?php _e('For font-awesome icon visit ', 'unicon') ?><a href="<?php echo esc_url('https://fortawesome.github.io/Font-Awesome/icons/');?>"><?php _e('font-awesome','unicon')?></a></h5>
        <!--BLOCK 1 START-->
        <div class="accordion_unicon">
          <h4> <?php _e('Block 1', 'unicon') ?></h4>
          <div class="pane_unicon">
        	<p>
            <label for="<?php echo $this->get_field_id('icon1'); ?>"><?php _e('Icon', 'unicon'); ?></label><br/>
            <input type="text" name="<?php echo $this->get_field_name('icon1'); ?>" id="<?php echo $this->get_field_id('icon1'); ?>" value="<?php if( !empty($instance['icon1']) ): echo $instance['icon1']; endif; ?>" class="widefat">
        	</p>
					<p>
				<label for="<?php echo $this->get_field_id( 'icon_color1' ); ?>" class="icon-color"><?php _e('Icon Color', 'unicon') ?></label>
				<input class="widefat color-picker" id="<?php echo $this->get_field_id( 'icon_color1' ); ?>" name="<?php echo $this->get_field_name( 'icon_color1' ); ?>" value="<?php echo $instance['icon_color1']; ?>" type="text" />
			</p>


        <p>
            <label for="<?php echo $this->get_field_id('title1'); ?>"><?php _e('Title', 'unicon'); ?></label><br/>
            <input type="text" name="<?php echo $this->get_field_name('title1'); ?>" id="<?php echo $this->get_field_id('title1'); ?>" value="<?php if( !empty($instance['title1']) ): echo $instance['title1']; endif; ?>" class="widefat">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('text1'); ?>"><?php _e('Text', 'unicon'); ?></label><br/>
            <textarea class="widefat" rows="8" cols="20" name="<?php echo $this->get_field_name('text1'); ?>" id="<?php echo $this->get_field_id('text1'); ?>"><?php if( !empty($instance['text1']) ): echo htmlspecialchars_decode($instance['text1']); endif; ?></textarea>
        </p>

    </div>


         <!--BLOCK 2 START-->
    	<h4> <?php _e('Block 2', 'unicon') ?></h4>
      <div class="pane_unicon">
        <p>
            <label for="<?php echo $this->get_field_id('icon2'); ?>"><?php _e('Icon', 'unicon'); ?></label><br/>
            <input type="text" name="<?php echo $this->get_field_name('icon2'); ?>" id="<?php echo $this->get_field_id('icon2'); ?>" value="<?php if( !empty($instance['icon2']) ): echo $instance['icon2']; endif; ?>" class="widefat">
        </p>
				<p>
			<label for="<?php echo $this->get_field_id( 'icon_color2' ); ?>" class="icon-color"><?php _e('Icon Color', 'unicon') ?></label>
			<input class="widefat color-picker" id="<?php echo $this->get_field_id( 'icon_color2' ); ?>" name="<?php echo $this->get_field_name( 'icon_color2' ); ?>" value="<?php echo $instance['icon_color2']; ?>" type="text" />
				</p>
	      <p>
            <label for="<?php echo $this->get_field_id('title2'); ?>"><?php _e('Title', 'unicon'); ?></label><br/>
            <input type="text" name="<?php echo $this->get_field_name('title2'); ?>" id="<?php echo $this->get_field_id('title2'); ?>" value="<?php if( !empty($instance['title2']) ): echo $instance['title2']; endif; ?>" class="widefat">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('text2'); ?>"><?php _e('Text', 'unicon'); ?></label><br/>
            <textarea class="widefat" rows="8" cols="20" name="<?php echo $this->get_field_name('text2'); ?>" id="<?php echo $this->get_field_id('text2'); ?>"><?php if( !empty($instance['text2']) ): echo htmlspecialchars_decode($instance['text2']); endif; ?></textarea>
        </p>

      </div>

         <!--BLOCK 3 START-->
      <h4> <?php _e('Block 3', 'unicon') ?></h4>
        <div class="pane_unicon">
        	<p>
            <label for="<?php echo $this->get_field_id('icon3'); ?>"><?php _e('Icon', 'unicon'); ?></label><br/>
            <input type="text" name="<?php echo $this->get_field_name('icon3'); ?>" id="<?php echo $this->get_field_id('icon3'); ?>" value="<?php if( !empty($instance['icon3']) ): echo $instance['icon3']; endif; ?>" class="widefat">
        	</p>
					<p>
				<label for="<?php echo $this->get_field_id( 'icon_color3' ); ?>" class="icon-color"><?php _e('Icon Color', 'unicon') ?></label>
				<input class="widefat color-picker" id="<?php echo $this->get_field_id( 'icon_color3' ); ?>" name="<?php echo $this->get_field_name( 'icon_color3' ); ?>" value="<?php echo $instance['icon_color3']; ?>" type="text" />
					</p>

          <p>
            <label for="<?php echo $this->get_field_id('title3'); ?>"><?php _e('Title', 'unicon'); ?></label><br/>
            <input type="text" name="<?php echo $this->get_field_name('title3'); ?>" id="<?php echo $this->get_field_id('title3'); ?>" value="<?php if( !empty($instance['title3']) ): echo $instance['title3']; endif; ?>" class="widefat">
        	</p>


        <p>
            <label for="<?php echo $this->get_field_id('text3'); ?>"><?php _e('Text', 'unicon'); ?></label><br/>
            <textarea class="widefat" rows="8" cols="20" name="<?php echo $this->get_field_name('text3'); ?>" id="<?php echo $this->get_field_id('text3'); ?>"><?php if( !empty($instance['text3']) ): echo htmlspecialchars_decode($instance['text3']); endif; ?></textarea>
        </p>

      </div>
      <!--BLOCK 4 START-->
   <h4> <?php _e('Block 4', 'unicon') ?></h4>
     <div class="pane_unicon">
       <p>
         <label for="<?php echo $this->get_field_id('icon4'); ?>"><?php _e('Icon', 'unicon'); ?></label><br/>
         <input type="text" name="<?php echo $this->get_field_name('icon4'); ?>" id="<?php echo $this->get_field_id('icon4'); ?>" value="<?php if( !empty($instance['icon4']) ): echo $instance['icon4']; endif; ?>" class="widefat">
       </p>
       <p>
     <label for="<?php echo $this->get_field_id( 'icon_color4' ); ?>" class="icon-color"><?php _e('Icon Color', 'unicon') ?></label>
     <input class="widefat color-picker" id="<?php echo $this->get_field_id( 'icon_color4' ); ?>" name="<?php echo $this->get_field_name( 'icon_color4' ); ?>" value="<?php echo $instance['icon_color4']; ?>" type="text" />
       </p>

       <p>
         <label for="<?php echo $this->get_field_id('title4'); ?>"><?php _e('Title', 'unicon'); ?></label><br/>
         <input type="text" name="<?php echo $this->get_field_name('title4'); ?>" id="<?php echo $this->get_field_id('title4'); ?>" value="<?php if( !empty($instance['title4']) ): echo $instance['title4']; endif; ?>" class="widefat">
       </p>


     <p>
         <label for="<?php echo $this->get_field_id('text4'); ?>"><?php _e('Text', 'unicon'); ?></label><br/>
         <textarea class="widefat" rows="8" cols="20" name="<?php echo $this->get_field_name('text4'); ?>" id="<?php echo $this->get_field_id('text4'); ?>"><?php if( !empty($instance['text4']) ): echo htmlspecialchars_decode($instance['text4']); endif; ?></textarea>
     </p>

   </div>


   <!--BLOCK 5 START-->
<h4> <?php _e('Block 5', 'unicon') ?></h4>
  <div class="pane_unicon">
   <p>
      <label for="<?php echo $this->get_field_id('icon5'); ?>"><?php _e('Icon', 'unicon'); ?></label><br/>
      <input type="text" name="<?php echo $this->get_field_name('icon5'); ?>" id="<?php echo $this->get_field_id('icon5'); ?>" value="<?php if( !empty($instance['icon5']) ): echo $instance['icon5']; endif; ?>" class="widefat">
   </p>
   <p>
 <label for="<?php echo $this->get_field_id( 'icon_color5' ); ?>" class="icon-color"><?php _e('Icon Color', 'unicon') ?></label>
 <input class="widefat color-picker" id="<?php echo $this->get_field_id( 'icon_color5' ); ?>" name="<?php echo $this->get_field_name( 'icon_color5' ); ?>" value="<?php echo $instance['icon_color5']; ?>" type="text" />
   </p>

    <p>
      <label for="<?php echo $this->get_field_id('title5'); ?>"><?php _e('Title', 'unicon'); ?></label><br/>
      <input type="text" name="<?php echo $this->get_field_name('title5'); ?>" id="<?php echo $this->get_field_id('title5'); ?>" value="<?php if( !empty($instance['title5']) ): echo $instance['title5']; endif; ?>" class="widefat">
   </p>


  <p>
      <label for="<?php echo $this->get_field_id('text5'); ?>"><?php _e('Text', 'unicon'); ?></label><br/>
      <textarea class="widefat" rows="8" cols="20" name="<?php echo $this->get_field_name('text5'); ?>" id="<?php echo $this->get_field_id('text5'); ?>"><?php if( !empty($instance['text5']) ): echo htmlspecialchars_decode($instance['text5']); endif; ?></textarea>
  </p>

</div>

<!--BLOCK 6 START-->
<h4> <?php _e('Block 6', 'unicon') ?></h4>
<div class="pane_unicon">
 <p>
   <label for="<?php echo $this->get_field_id('icon6'); ?>"><?php _e('Icon', 'unicon'); ?></label><br/>
   <input type="text" name="<?php echo $this->get_field_name('icon6'); ?>" id="<?php echo $this->get_field_id('icon6'); ?>" value="<?php if( !empty($instance['icon6']) ): echo $instance['icon6']; endif; ?>" class="widefat">
 </p>
 <p>
<label for="<?php echo $this->get_field_id( 'icon_color6' ); ?>" class="icon-color"><?php _e('Icon Color', 'unicon') ?></label>
<input class="widefat color-picker" id="<?php echo $this->get_field_id( 'icon_color6' ); ?>" name="<?php echo $this->get_field_name( 'icon_color6' ); ?>" value="<?php echo $instance['icon_color6']; ?>" type="text" />
 </p>

 <p>
   <label for="<?php echo $this->get_field_id('title6'); ?>"><?php _e('Title', 'unicon'); ?></label><br/>
   <input type="text" name="<?php echo $this->get_field_name('title6'); ?>" id="<?php echo $this->get_field_id('title6'); ?>" value="<?php if( !empty($instance['title6']) ): echo $instance['title6']; endif; ?>" class="widefat">
 </p>


<p>
   <label for="<?php echo $this->get_field_id('text6'); ?>"><?php _e('Text', 'unicon'); ?></label><br/>
   <textarea class="widefat" rows="8" cols="20" name="<?php echo $this->get_field_name('text6'); ?>" id="<?php echo $this->get_field_id('text6'); ?>"><?php if( !empty($instance['text6']) ): echo htmlspecialchars_decode($instance['text6']); endif; ?></textarea>
</p>

</div>
</div> <!---end accordino---->

<p>
  <label for="<?php echo $this->get_field_id( 'contenttitle_color' ); ?>" class="icon-color"><?php _e('Content Title Color', 'unicon') ?></label>
  <input class="widefat color-picker" id="<?php echo $this->get_field_id( 'contenttitle_color' ); ?>" name="<?php echo $this->get_field_name( 'contenttitle_color' ); ?>" value="<?php echo $instance['contenttitle_color']; ?>" type="text" />
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'content_color' ); ?>" class="icon-color"><?php _e('Content Color', 'unicon') ?></label>
  <input class="widefat color-picker" id="<?php echo $this->get_field_id( 'content_color' ); ?>" name="<?php echo $this->get_field_name( 'content_color' ); ?>" value="<?php echo $instance['content_color']; ?>" type="text" />
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'bg_color' ); ?>" class="icon-color"><?php _e('Background Color', 'unicon') ?></label>
  <input class="widefat color-picker" id="<?php echo $this->get_field_id( 'bg_color' ); ?>" name="<?php echo $this->get_field_name( 'bg_color' ); ?>" value="<?php echo $instance['bg_color']; ?>" type="text" />
</p>
<p>
  <div class="widget_input_wrap">
      <label for="<?php echo $this->get_field_id( 'content_bgimage' ); ?>"><?php _e('Background Image ', 'unicon') ?></label>
      <div class="media-picker-wrap">
      <?php if(!empty($instance['content_bgimage'])) { ?>
          <img style="max-width:100%; height:auto;" class="media-picker-preview" src="<?php echo esc_url($instance['content_bgimage']); ?>" />
          <i class="fa fa-times media-picker-remove"></i>
      <?php } ?>

      <input class="widefat media-picker" id="<?php echo $this->get_field_id( 'content_bgimage' ); ?>" name="<?php echo $this->get_field_name( 'content_bgimage' ); ?>" value="<?php if( !empty($instance['content_bgimage']) ): echo $instance['content_bgimage']; endif; ?>" type="hidden" />
      <a class="media-picker-button button" onclick="mediaPicker(this.id)" id="<?php echo $this->get_field_id( 'content_bgimage' ).'mpick'; ?>"><?php _e('Select Image', 'unicon') ?></a>
      </div>
  </div>
</p>

<p>
<input class="checkbox" type="checkbox" <?php checked( $instance[ 'bg_position' ], 'on'); ?> id="<?php echo $this->get_field_id( 'bg_position' ); ?>" name="<?php echo $this->get_field_name( 'bg_position' ); ?>" />
<label for="<?php echo $this->get_field_id( 'bg_position' ); ?>"><?php _e(' Make background image fixed ', 'unicon') ?></label>
</p>
 <?php
	}
		//ENQUEUE CSS
   }
}
