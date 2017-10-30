<?php
/**
 * ribbon Widget
 *
 * @since 1.0.0
 *
 * @package promote
 */


if ( !class_exists( 'unicon_ribbon_widget' ) ) {

	class unicon_ribbon_widget extends WP_Widget {

		public function __construct() {
			parent::__construct(
				'unicon-ribbon-widget',
				__( 'Unicon &gt; Ribbon widget', 'unicon' ),
        // Widget description
				array(
          'description' => __( 'You can add use this widgte in any section', 'unicon' ),
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
				 echo $before_widget;

				 ?>


<div id="ribbon" style="Background-color:<?php echo $bg_color; ?>;">

                <div class="row">
                    <div class="medium-6 small-12 columns " >
                      <?php if (!empty($instance['image_uri'])): ?>
                        <img src="<?php echo esc_url($instance['image_uri']); ?>" class="img-responsive center-block">
                      <?php endif;?>
                    </div>
                    <div class="medium-6 small-12 columns">
                       <?php if( !empty($instance['main_title']) ): ?>
                        <h3 style="color:<?php echo esc_attr($instance['tile_color']); ?>;">
                          <?php echo apply_filters('widget_title', $instance['main_title']); ?>
                            <small style="color:<?php echo esc_attr($instance['tile_color']); ?>;" class="heading heading-solid"></small>
                        </h3>
                        <?php endif;?>
                        <?php if (!empty($instance['text'])): ?>
                        <p style="color:<?php echo esc_attr($instance['content_color']); ?>;">
                          <?php echo htmlspecialchars_decode(apply_filters('widget_title', $instance['text'])); ?>

                        </p>
                        <?php endif;?>
                        <?php if( !empty($instance['box_uri1']) ):?>
                        <a href="<?php echo esc_url($instance['box_uri1']);?>"  class="hvr-shutter-out-vertical team_bt1" style="color:<?php echo esc_attr($instance['buttontext_color']); ?>; background:<?php echo esc_attr($instance['button_color']); ?>;"><?php if( !empty($instance['link_text']) ):?> <?php echo $instance['link_text'];?><?php endif;?></a>
                        <?php endif;?>

                    </div>

                </div>
        </div>

  <?php
    echo $after_widget;}
      function update($new_instance, $old_instance) {
        $instance = $old_instance;
			     $instance['main_title'] = strip_tags($new_instance['main_title']);
			     $instance['text'] = stripslashes(wp_filter_post_kses($new_instance['text']));
           $instance['image_uri'] = strip_tags( $new_instance['image_uri'] );
           $instance['box_uri1'] = strip_tags( $new_instance['box_uri1'] );
           $instance['link_text'] = strip_tags( $new_instance['link_text'] );
					 //* color setup *//
					 $instance['bg_color'] = strip_tags($new_instance['bg_color']);
					 $instance['tile_color'] = strip_tags($new_instance['tile_color']);
					 $instance['content_color'] = strip_tags($new_instance['content_color']);
					 $instance['button_color'] = strip_tags($new_instance['button_color']);
					 $instance['buttontext_color'] = strip_tags($new_instance['buttontext_color']);

           return $instance;

       }

       function form($instance) {
				 /* Set up some default widget settings. */
		 		$defaults = array(

		 		'bg_color' => '#BCBDD4',
				'tile_color' => '#0a0a0a',
				'content_color' => '#0a0a0a',
				'button_color' => '#f8cf27',
				'buttontext_color' => '#fff',


		 		);
		 		$instance = wp_parse_args( (array) $instance, $defaults ); ?>
    <p>
         <label for="<?php echo $this->get_field_id('main_title'); ?>"><?php _e(' Title', 'promote-pro'); ?></label><br/>
         <input type="text" name="<?php echo $this->get_field_name('main_title'); ?>" id="<?php echo $this->get_field_id('main_title'); ?>" value="<?php if( !empty($instance['main_title']) ): echo $instance['main_title']; endif; ?>" class="widefat">
     </p>
    <p>
        <label for="<?php echo $this->get_field_id('text'); ?>"><?php _e('Text', 'promote-pro'); ?></label><br/>
        <textarea class="widefat" rows="8" cols="20" name="<?php echo $this->get_field_name('text'); ?>" id="<?php echo $this->get_field_id('text'); ?>"><?php if( !empty($instance['text']) ): echo htmlspecialchars_decode($instance['text']); endif; ?></textarea>
    </p>
    <div class="media-picker-wrap">
      <?php if(!empty($instance['image_uri'])) { ?>
        <img style="max-width:100%; height:auto;" class="media-picker-preview" src="<?php echo esc_url($instance['image_uri']); ?>" />
          <i class="fa fa-times media-picker-remove"></i>
      <?php } ?>
      <input class="widefat media-picker" id="<?php echo $this->get_field_id( 'image_uri' ); ?>" name="<?php echo $this->get_field_name( 'image_uri' ); ?>" value="<?php if( !empty($instance['image_uri']) ): echo $instance['image_uri']; endif; ?>" type="hidden" />
        <a class="media-picker-button button" onclick="mediaPicker(this.id)" id="<?php echo $this->get_field_id( 'image_uri' ).'mpick'; ?>"><?php _e('Select Image', 'promote-pro') ?></a>
    </div>
    <p>
        <label for="<?php echo $this->get_field_id('link_text'); ?>"><?php _e('link text', 'promote-pro'); ?></label><br/>
        <input type="text" name="<?php echo $this->get_field_name('link_text'); ?>" id="<?php echo $this->get_field_id('link_text'); ?>" value="<?php if( !empty($instance['link_text']) ): echo $instance['link_text']; endif; ?>" class="widefat">
    </p>
    <p>

      <label for="<?php echo $this->get_field_id('box_uri1'); ?>"><?php _e('Link ','promote-pro'); ?></label><br />
      <input type="text" name="<?php echo $this->get_field_name('box_uri1'); ?>" id="<?php echo $this->get_field_id('box_uri1'); ?>" value="<?php if( !empty($instance['box_uri1']) ): echo esc_url($instance['box_uri1']); endif; ?>" class="widefat">
    </p>

		<p>
			<label for="<?php echo $this->get_field_id( 'tile_color' ); ?>" class="icon-color"><?php _e('Title Color', 'promote-pro') ?></label>
			<input class="widefat color-picker" id="<?php echo $this->get_field_id( 'tile_color' ); ?>" name="<?php echo $this->get_field_name( 'tile_color' ); ?>" value="<?php echo $instance['tile_color']; ?>" type="text" />
		</p>
		<p>

		<p>
			<label for="<?php echo $this->get_field_id( 'content_color' ); ?>" class="icon-color"><?php _e('Content Color', 'promote-pro') ?></label>
			<input class="widefat color-picker" id="<?php echo $this->get_field_id( 'content_color' ); ?>" name="<?php echo $this->get_field_name( 'content_color' ); ?>" value="<?php echo $instance['content_color']; ?>" type="text" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'button_color' ); ?>" class="icon-color"><?php _e('Button Background Color', 'promote-pro') ?></label>
			<input class="widefat color-picker" id="<?php echo $this->get_field_id( 'button_color' ); ?>" name="<?php echo $this->get_field_name( 'button_color' ); ?>" value="<?php echo $instance['button_color']; ?>" type="text" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'buttontext_color' ); ?>" class="icon-color"><?php _e('Button text Color', 'promote-pro') ?></label>
			<input class="widefat color-picker" id="<?php echo $this->get_field_id( 'buttontext_color' ); ?>" name="<?php echo $this->get_field_name( 'buttontext_color' ); ?>" value="<?php echo $instance['buttontext_color']; ?>" type="text" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'bg_color' ); ?>" class="icon-color"><?php _e('Background Color', 'promote-pro') ?></label>
			<input class="widefat color-picker" id="<?php echo $this->get_field_id( 'bg_color' ); ?>" name="<?php echo $this->get_field_name( 'bg_color' ); ?>" value="<?php echo $instance['bg_color']; ?>" type="text" />
		</p>


    <?php
     }
       //ENQUEUE CSS
      }
    }
