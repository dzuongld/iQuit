jQuery( document ).ready(function( $ ){
$(window).load(function() {
	
	// Plugin default options
    $.fn.directionalHover.defaults = {
        overlay: "lsi-iconbox-overlay",
        easing: "swing",
        speed: 300
    };
	
	$('.lsi-iconbox').directionalHover();
});
});