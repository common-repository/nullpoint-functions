/**
 * NULLPOINT FULLWIDTH
 *
 */
jQuery(function( $ ){
	$(nptfwfunction);
	$(window).on('resize',nptfwfunction);
	
	function nptfwfunction() {
		var mediaWidth = $('#npt-page-holder').width();
		
		$('.npt-fullwidth').css({ 'width': mediaWidth+'px' });
	}
});
