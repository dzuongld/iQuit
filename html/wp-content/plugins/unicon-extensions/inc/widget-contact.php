<?php
/**
 * Contact Widget
 *
 * @since 1.0.0
 *
 * @package unicon
 */
 if ( !class_exists( 'unicon_contact_widget' ) ) {

    class unicon_contact_widget extends WP_Widget {

  		public function __construct() {
  			parent::__construct(
  				'unicon-contact-widget',
  				__( 'unicon - Contact widget', 'unicon' ),
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
$widget_text = ! empty( $instance['form_sort'] ) ? $instance['form_sort'] : '';
$text = apply_filters( 'widget_text', $widget_text, $instance, $this );
 				 echo $before_widget;

 				 ?>


        <div class="row">
          <div class="medium-6 columns mb50">
            <div class="row">
              <!-- title start -->
              <div class="medium-12 columns mt50 mb50">
                <?php if ( !empty($instance['main_title']) || !empty($instance['sub_title']) ):?>
                  <h1 >
                    <?php if( !empty($instance['main_title']) ): ?>
                      <small class="color-light"> <?php echo apply_filters('widget_title', $instance['main_title']); ?></br></small>
                    <?php endif;?>
                    <?php echo esc_attr($instance['sub_title']); ?>
                  </h1>
                <?php endif;?>
                <?php if( !empty($instance['title_dsc']) ): ?>
                  <h5 class="color-light"><?php echo $instance['title_dsc']; ?></h5>
                <?php endif;?>
              </div>
              <!-- title end -->
              <!-- contact info start -->
              <div class="contact-text ">
                <?php if ( !empty($instance['address_t']) || !empty($instance['address']) ):?>
                  <div class="large-5 small-12 columns  ">
                    <i class="fa fa-map-o " aria-hidden="true"></i>
                    <?php if( !empty($instance['address_t']) ): ?>
                      <h5 ><strong><?php echo $instance['address_t']; ?></strong></h5>
                    <?php endif;?>
                    <?php if( !empty($instance['address']) ): ?>
                        <p ><?php echo $instance['address']; ?></p>
                    <?php endif;?>
                  </div>
                <?php endif;?>

                <?php if ( !empty($instance['Phone_t']) || !empty($instance['Phone']) ):?>
                  <div class="large-3 small-6 columns">
                    <i class="fa fa-phone-square " aria-hidden="true"></i>
                    <?php if( !empty($instance['Phone_t']) ): ?> <h5 ><strong><?php echo $instance['Phone_t']; ?></strong></h5>  <?php endif;?>
                    <?php if( !empty($instance['Phone']) ): ?><p><?php echo $instance['Phone']; ?></p><?php endif;?>
                  </div>
                <?php endif;?>

                <?php if ( !empty($instance['email_t']) || !empty($instance['email']) ):?>
                  <div class="large-3 small-6 columns float-left">
                    <i class="fa fa-address-book-o " aria-hidden="true"></i>
                    <?php if( !empty($instance['email_t']) ): ?> <h5 ><strong><?php echo $instance['email_t']; ?></strong></h5>  <?php endif;?>
                    <?php if( !empty($instance['email']) ): ?><p><?php echo $instance['email']; ?></p><?php endif;?>
                  </div>
                <?php endif;?>
              </div>
              <!-- contact info end -->

            </div><!-- row left end -->
          </div><!-- col left end -->
          <div class="medium-6 columns">
            <div class="contact contact-us-one mt50 mb50">
              <div class="small-12 large-12 columns text-center mb20">
                <h4 class="pb25 bb-solid-1 ">
                  <?php if( !empty($instance['form_title']) ): ?>  <?php echo $instance['form_title']; ?></br>  <?php endif;?>
                  <?php if( !empty($instance['form_sub']) ): ?> <small ><?php echo $instance['form_sub']; ?></small><?php endif;?>
                </h4>
                <?php echo  wpautop( $text ) ; ?>
              </div>
            </div><!-- div contact end -->
          </div><!-- col end -->
        </div><!-- row end -->
  <?php
    echo $after_widget;
  }
  function update($new_instance, $old_instance) {
    $instance = $old_instance;

      /*section title */
      $instance['main_title'] = strip_tags($new_instance['main_title']);
      $instance['sub_title'] = strip_tags($new_instance['sub_title']);
      $instance['title_dsc'] = stripslashes(wp_filter_post_kses($new_instance['title_dsc']));

      /*address*/
      $instance['address_t'] = strip_tags( $new_instance['address_t'] );
      $instance['address'] = stripslashes(wp_filter_post_kses($new_instance['address']));
      /*Phone*/
      $instance['Phone_t'] = strip_tags( $new_instance['Phone_t'] );
      $instance['Phone'] = strip_tags( $new_instance['Phone'] );
      /*email*/
      $instance['email_t'] = strip_tags( $new_instance['email_t'] );
      $instance['email'] = strip_tags( $new_instance['email'] );

      /*contact form */
      $instance['form_title'] = strip_tags($new_instance['form_title']);
      $instance['form_sub'] = strip_tags($new_instance['form_sub']);
      if ( current_user_can( 'unfiltered_html' ) ) {
        $instance['form_sort'] = $new_instance['form_sort'];
      } else {
        $instance['form_sort'] = wp_kses_post( $new_instance['form_sort'] );
      }

      return $instance;

  }

  function form($instance) {
?>
<div class="accordion_unicon">
  <h4> <?php _e('Content', 'unicon') ?></h4>

  <!--Title START-->
  <div class="pane_unicon">
<p>
     <label for="<?php echo $this->get_field_id('main_title'); ?>"><?php _e('Main Title', 'unicon'); ?></label><br/>
     <input type="text" name="<?php echo $this->get_field_name('main_title'); ?>" id="<?php echo $this->get_field_id('main_title'); ?>" value="<?php if( !empty($instance['main_title']) ): echo $instance['main_title']; endif; ?>" class="widefat">
 </p>

 <p>
     <label for="<?php echo $this->get_field_id('sub_title'); ?>"><?php _e('Sub Title', 'unicon'); ?></label><br/>
     <input type="text" name="<?php echo $this->get_field_name('sub_title'); ?>" id="<?php echo $this->get_field_id('sub_title'); ?>" value="<?php if( !empty($instance['sub_title']) ): echo $instance['sub_title']; endif; ?>" class="widefat">
 </p>

 <p>
   <label for="<?php echo $this->get_field_id('title_dsc'); ?>"><?php _e('Description', 'unicon'); ?></label><br/>
   <textarea class="widefat" rows="8" cols="20" name="<?php echo $this->get_field_name('title_dsc'); ?>" id="<?php echo $this->get_field_id('title_dsc'); ?>"><?php if( !empty($instance['title_dsc']) ): echo htmlspecialchars_decode($instance['title_dsc']); endif; ?></textarea>
 </p>

</div>
<!--Title END-->

<!--Address-email-phone START-->
<h4> <?php _e('Address-email-phone', 'unicon') ?></h4>
  <div class="pane_unicon">
    <p>
      <label for="<?php echo $this->get_field_id('address_t'); ?>"><?php _e('Address', 'unicon'); ?></label><br/>
      <input type="text" name="<?php echo $this->get_field_name('address_t'); ?>" id="<?php echo $this->get_field_id('address_t'); ?>" value="<?php if( !empty($instance['address_t']) ): echo $instance['address_t']; endif; ?>" class="widefat">
    </p>

    <p>
      <label for="<?php echo $this->get_field_id('address'); ?>"><?php _e('Address details', 'unicon'); ?></label><br/>
      <textarea class="widefat" rows="8" cols="20" name="<?php echo $this->get_field_name('address'); ?>" id="<?php echo $this->get_field_id('address'); ?>"><?php if( !empty($instance['address']) ): echo htmlspecialchars_decode($instance['address']); endif; ?></textarea>
    </p>

    <p>
      <label for="<?php echo $this->get_field_id('Phone_t'); ?>"><?php _e('Phone', 'unicon'); ?></label><br/>
      <input type="text" name="<?php echo $this->get_field_name('Phone_t'); ?>" id="<?php echo $this->get_field_id('Phone_t'); ?>" value="<?php if( !empty($instance['Phone_t']) ): echo $instance['Phone_t']; endif; ?>" class="widefat">
    </p>
    <p>
      <label for="<?php echo $this->get_field_id('Phone'); ?>"><?php _e('Phone Number', 'unicon'); ?></label><br/>
      <input type="text" name="<?php echo $this->get_field_name('Phone'); ?>" id="<?php echo $this->get_field_id('Phone'); ?>" value="<?php if( !empty($instance['Phone']) ): echo $instance['Phone']; endif; ?>" class="widefat">
    </p>


    <p>
      <label for="<?php echo $this->get_field_id('email_t'); ?>"><?php _e('Email', 'unicon'); ?></label><br/>
      <input type="text" name="<?php echo $this->get_field_name('email_t'); ?>" id="<?php echo $this->get_field_id('email_t'); ?>" value="<?php if( !empty($instance['email_t']) ): echo $instance['email_t']; endif; ?>" class="widefat">
    </p>
    <p>
      <label for="<?php echo $this->get_field_id('email'); ?>"><?php _e('Email Address', 'unicon'); ?></label><br/>
      <input type="text" name="<?php echo $this->get_field_name('email'); ?>" id="<?php echo $this->get_field_id('email'); ?>" value="<?php if( !empty($instance['email']) ): echo $instance['email']; endif; ?>" class="widefat">
    </p>

  </div>
<!--Address-email-phone END-->

<!--Address-email-phone START-->
<h4> <?php _e('Contact Form', 'unicon') ?></h4>
  <div class="pane_unicon">
    <p>
      <label for="<?php echo $this->get_field_id('form_title'); ?>"><?php _e('Form Title', 'unicon'); ?></label><br/>
      <input type="text" name="<?php echo $this->get_field_name('form_title'); ?>" id="<?php echo $this->get_field_id('form_title'); ?>" value="<?php if( !empty($instance['form_title']) ): echo $instance['form_title']; endif; ?>" class="widefat">
    </p>
    <p>
      <label for="<?php echo $this->get_field_id('form_sub'); ?>"><?php _e('Form Sub Title', 'unicon'); ?></label><br/>
      <input type="text" name="<?php echo $this->get_field_name('form_sub'); ?>" id="<?php echo $this->get_field_id('form_sub'); ?>" value="<?php if( !empty($instance['form_sub']) ): echo $instance['form_sub']; endif; ?>" class="widefat">
    </p>
    <h5><?php _e('Please Install Contact form 7 plugins ', 'unicon') ?><a href="<?php echo esc_url('https://wordpress.org/plugins/contact-form-7/');?>"><?php _e('contact-form-7','unicon')?></a></h5>


    <p><label for="<?php echo $this->get_field_id( 'form_sort' ); ?>"><?php _e( 'Put contact-form-7 shortcode:','unicon' ); ?></label>
    <textarea class="widefat" rows="8" cols="20" id="<?php echo $this->get_field_id('form_sort'); ?>" name="<?php echo $this->get_field_name('form_sort'); ?>"><?php if( !empty($instance['form_sort']) ):echo esc_textarea( $instance['form_sort'] );endif; ?></textarea></p>

  </div>
<!--Address-email-phone END-->
</div>

         <?php
          }
            //ENQUEUE CSS
           }
         }
