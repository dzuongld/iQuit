jQuery(function( $ ){
	$(lsisliderfunction);
	$(window).on('resize',lsisliderfunction);
	function lsisliderfunction() {
		var mediaWidth = $('#lsi-page-holder').width();
		$('.lakshmi-fullwidth-slider .lakshmi-slider-holder').css({ 'width': mediaWidth+'px' });
	}
	$("#lsi-slider-section").css("display", "block");
});