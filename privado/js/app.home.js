;(function($, undefined){
	"use strict";
	$(document).on('ready', init);
	
	function init(){
		
		// Placeholder
		$('input, textarea').placeholder();
		// first slider      
		$('.bxslider').bxSlider();
		// cambiar color		
		$('.bx-next').hover(cambiar, nocambiar);
		
		// isotope
		var $container = $('#col-second');    
		$container.imagesLoaded( function(){
			$container.isotope({
			  itemSelector : '.photo'
			});
		}); 

		// Ranking
		$.fn.raty.defaults.path = 'privado/imagenes/general';
		$('.ranking').raty();		
		
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
	function cambiar(){
		$('div.arrow').stop().css({
			background: '#634c78'
		});
		$('div.arrow span').stop().css({
			'border-top-color': '#fff',
			'border-right-color': '#fff'
		});
	}
	function nocambiar(){
		$('div.arrow').stop().css({
			'background': '#fff'
		});
		$('div.arrow span').stop().css({
			'border-top-color': '#634c78',
			'border-right-color': '#634c78'
		});
	}	
})(jQuery);

