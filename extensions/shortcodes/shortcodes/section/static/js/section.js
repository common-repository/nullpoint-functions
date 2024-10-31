jQuery(function( $ ){
	$(sectionfunction);
	$(window).on('resize',sectionfunction);
	
	function sectionfunction() {
		if (window.matchMedia('(min-width: 1170px)').matches) {
		
		var mediaWidth = $('#npt-page-holder').width(),
			halfsectionWidth = mediaWidth / 2 ;
		
		$('.nullpoint-fullwidth-section .section-image-left').css({ 'width': halfsectionWidth+'px' });
		$('.nullpoint-fullwidth-section .section-image-right').css({ 'width': halfsectionWidth+'px' });
		$('.nullpoint-fullwidth-section .section-content-left').css({ 'width': halfsectionWidth+'px' });
		$('.nullpoint-fullwidth-section .section-content-right').css({ 'width': halfsectionWidth+'px' });
		$('.nullpoint-fullwidth-section .section-layer-holder').css({ 'width': mediaWidth+'px' });
		$('.nullpoint-fullwidth-section .section-dynamic-width').css({ 'width': mediaWidth+'px' });
		}
	}
	
	$(smallsectionfunction);
	$(window).on('resize',smallsectionfunction);
	
	function smallsectionfunction() {
		if (window.matchMedia('(max-width: 1169px)').matches) {
		
		var mediaWidth = $('#npt-page-holder').width();
		
		$('.nullpoint-fullwidth-section .section-content-left').css({ 'width': mediaWidth+'px' });
		$('.nullpoint-fullwidth-section .section-content-right').css({ 'width': mediaWidth+'px' });
		$('.nullpoint-fullwidth-section .section-content').css({ 'width': mediaWidth+'px' });
		$('.nullpoint-fullwidth-section .section-layer-holder').css({ 'width': mediaWidth+'px' });
		$('.nullpoint-fullwidth-section .section-dynamic-width').css({ 'width': mediaWidth+'px' });
		}
	}
});