;(function($, undefined){
	"use strict";
	$(document).one('ready', init);
	function init(){
		// $('#frm-newsletter').on('cut copy paste', function(e){
		// 	e.preventDefault();
		// });
		$('#frm-newsletter').validate({
			rules: {				
				newsletter: {
					required: true,
					email: true
				}
			},
			messages: {				
				newsletter: {
					required: '',
					email: ''
				}
			}
		});
	}
})(jQuery);

