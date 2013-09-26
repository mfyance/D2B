;(function($, undefined){
	"use strict";
	$(document).on('ready', init);
	
	function init(){
		// Valdate Form
		$('#frm-login').on('cut copy paste', function(e){
			e.preventDefault();
		});
		$('#frm-recover').on('cut copy paste', function(e){
			e.preventDefault();
		});		
		// Show recover Form
		$('#showformrecover').hide();
		$('#forgot').change(function(){
	        if($("#forgot:checked").val()!=1){	          
	            $('#showformrecover').hide(); 
	        }else{	
	            $('#showformrecover').show('', function(){
	            	$(this).find('a').trigger('click');
	            }); 
	        }
   		});
   		// Go to recover pass
		$('#hidescroll').click(function(e){   			
	       var $anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			},1500, 'swing');
			e.preventDefault();	        
   		});  
		$('#frm-login').validate({
			rules: {
				mail: {
					required: true,
					email: true
				},
				pass: {
					required: true,
					minlength: 5				
				}		
			},
			messages: {
				mail: {
					required: 'Required',
					email: 'Only email'		
				},
				pass: {
					required: 'Required',
					minlength: 'Min. 5 characters'						
				}				
			}
		});
		$('#frm-recover').validate({
			rules: {
				mail: {
					required: true,
					email: true
				}	
			},
			messages: {
				mail: {
					required: 'Required',
					email: 'Only email'		
				}			
			}
		});
	}
})(jQuery);
