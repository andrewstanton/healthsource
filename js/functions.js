(function($){
    $('figure').removeAttr('style');

	/*
	 * Test if inline SVGs are supported.
	 * @link https://github.com/Modernizr/Modernizr/
	 */
	function supportsInlineSVG() {
		var div = document.createElement( 'div' );
		div.innerHTML = '<svg/>';
		return 'http://www.w3.org/2000/svg' === ( 'undefined' !== typeof SVGRect && div.firstChild && div.firstChild.namespaceURI );
	}

	if ( true === supportsInlineSVG() ) {
		document.documentElement.className = document.documentElement.className.replace( /(\s*)no-svg(\s*)/, '$1svg$2' );
	}
	
	if($('.video-banner iframe').length > 0){
		$('.video-banner iframe').attr({'height': '', 'width': ''});
	}

	if($('.video-inner-banner video').length > 0){
		var $vid = $('.video-inner-banner video');
		$vid.prop({'muted': true, "controls": false, "loop": true});
		setTimeout(function(){
			$vid.get(0).play();
		}, 1000);
	}


})(jQuery);


