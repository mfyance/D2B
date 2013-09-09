// App GENERAL ( All templates)
;(function($, undefined){
	"use strict";
	$(document).on('ready', init);
	
	function init(){
        $(window).on('load', function () {
            $('.selectpicker').selectpicker();
        });
        // menu user
		$('#user-menu').hide();	
		$('#wholesaler button').on('click', function(){
			$('#user-menu').slideToggle('slow');
			$('#wholesaler').toggleClass('arrowhover');
		});

		// Hover animated css3
		$('.butpublic').hover(
	        function(){ $(this).children().addClass('bounceIn') },
	        function(){ $(this).children().removeClass('bounceIn') }
		);
		$('.butlike div, .like').hover(
	        function(){ $(this).children().addClass('bounceIn') },
	        function(){ $(this).children().removeClass('bounceIn') }
		);
		$('.butsave, .butupdate').hover(
	        function(){ $(this).children().addClass('rollIn') },
	        function(){ $(this).children().removeClass('rollIn') }
		);
		$('.butshare').hover(
	        function(){ $(this).children().addClass('fadeIn') },
	        function(){ $(this).children().removeClass('fadeIn') }
		);	
	}		
})(jQuery);

