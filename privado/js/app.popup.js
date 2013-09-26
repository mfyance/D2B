;(function($, undefined){
	"use strict";
	$(document).on('ready', init);
	
	function init(){	
		// Pop up
		$('.mylogin').fancybox({
			width : 460,
			type : 'iframe',
			padding : 10,
			autoScale:'false'
		});


		// Main Video
		$('#showvideo').fancybox({
			maxWidth	: 700,
			maxHeight	: 600,
			fitToView	: false,
			width		: '70%',
			height		: '70%',
			autoSize	: false,
			closeClick	: false,
			openEffect	: 'none',
			closeEffect	: 'none',
			padding		: 0,
			autoScale		: false,
			transitionIn	: 'none',
			transitionOut	: 'none'
		});	
	}
})(jQuery);
