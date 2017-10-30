
<?php
/**
 * Team section
 *
 * @package WordPress
 * @subpackage unicons
 * @since unicons 1.0
 */
 ?>

 <?php if ( is_active_sidebar( 'sidebar-team' ) ) :?>
	<div id="team1" >
<?php dynamic_sidebar( 'sidebar-team' );?>
		<!-- /team widgets -->

  </div> <!-- end-->
<?php endif; ?>
