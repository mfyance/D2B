;(function($, undefined){
	"use strict";
	$(document).on('ready', init);
	
	function init(){	

		// Placeholder
		$('input, textarea').placeholder();		
		
		// isotope
		var $container = $('#col-second');    
		$container.imagesLoaded( function(){
			$container.isotope({
			  itemSelector : '.photo'
			});
		}); 	
		
		//Inview (show and hidden objects)
		if (document.all && document.querySelector && !document.getElementsByClassName){
		}else{			
			$("*[data-start]").each(function(){
				$(this).attr("data-start");
				$(this).attr('style',$(this).attr("data-start"));
			});
			$('*[data-finish]').bind('inview', function(event, visible) {
				if (visible) {
					var atributos = $(this).attr("data-finish").replace(/;+$/,"").split(';');
					var i = atributos.length - 1;
					var animacion = {};
					var name;
					for ( i; i >= 0; i--) 
					{
						name = atributos[i].split(':');
						animacion[name[0]]=name[1];
					}

					if($(this).attr("data-delay")!='undefined')
						$(this).delay($(this).attr("data-delay")).animate( animacion,1000);					
					else
						$(this).stop().animate( animacion,1000);
				}
		    });
		    $('*[data-transit]').bind('inview', function(event, visible) {
				if (visible) {
					var atributos = $(this).attr("data-transit").replace(/;+$/,"").split(';');
					var animacion = {};
					for (var i = atributos.length - 1; i >= 0; i--) 
					{
						var name = atributos[i].split(':');
						animacion[name[0]]=name[1];
					};

					if($(this).attr("data-delay")!='undefined')
						$(this).delay($(this).attr("data-delay")).transit( animacion, 1000);
					else
						$(this).stop().transit( animacion, 1000);
				}
			});
		}		
	}	
		
})(jQuery);

