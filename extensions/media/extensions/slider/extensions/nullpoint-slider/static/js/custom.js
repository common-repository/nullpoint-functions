jQuery(function( $ ){
	$(nptsliderfunction);
	$(window).on('resize',nptsliderfunction);
	function nptsliderfunction() {
		var mediaWidth = $('#npt-page-holder').width();
		$('.nullpoint-fullwidth-slider .nullpoint-slider-holder').css({ 'width': mediaWidth+'px' });
	}
	$("#npt-slider-section").css("display", "block");
});