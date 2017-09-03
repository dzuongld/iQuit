/**
 * LAKSHMI FULLWIDTH
 *
 */
 
jQuery(function( $ ){
	$(lsifwfunction);
	$(window).on('resize',lsifwfunction);
	
	function lsifwfunction() {
		var mediaWidth = $('#lsi-page-holder').width();
		
		$('.lsi-fullwidth').css({ 'width': mediaWidth+'px' });
	}
});