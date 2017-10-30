<?php
/**
 *	The template for displaying the front page.
 *
 *	@package WordPress
 *	@subpackage
 */


get_header();


if( get_option( 'show_on_front' ) == 'posts' ): ?>
<div id="sub_banner" <?php if ( get_header_image() ) : ?> style="background:url(<?php header_image(); ?>) 50% no-repeat;" <?php endif;?>>
  <?php if ( get_header_image() ) : ?>
     <div class="overlay"></div>
     <?php endif;?>
   <h1>
     <?php	$uniconspage_title = get_the_title( get_option('page_for_posts', true) ); ?>
     <?php echo	$uniconspage_title ; ?>
  </h1>

</div>
	<section class="blog-content-section">
  		<div class="row">
    		<div class="large-9 medium-8 small-12 left-column sidebar-type-2 columns <?php if ( !is_active_sidebar( 'sidebar' ) ){ ?> nosid <?php }?>">
  					<?php if ( have_posts() ) : ?>

						<?php /* Start the Loop */ ?>
							<?php while ( have_posts() ) : the_post(); ?>
								<?php
								/*
							 	* Include the Post-Format-specific template for the content.
								 * If unicons want to override this in a child theme, then include a file
					 		 	* called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 			*/
								get_template_part( 'content', get_post_format() );
								?>

						 <?php endwhile; ?>

			 		<?php get_template_part('pagination'); ?>

				<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
		</div><!--POST END-->

 			<div class=" wow fadeIn large-3 medium-4 small-12 columns">

   				<?php get_sidebar();?>

			</div><!--sidebar END-->
	 </div><!--row END-->
</section><!--section END-->
<?php
else:
get_template_part('template','frontpage');

endif;

get_footer(); ?>
