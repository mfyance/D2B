;(function($, undefined){
	"use strict";
	$(document).on('ready', init);
	
	function init(){			
		// first slider      
		$('.bxslider').bxSlider();

		$('.gall-infosign').bxSlider();

		// cambiar color		
		$('.gallery .bx-next').hover(cambiar2, nocambiar2);
		$('.gallery .bx-prev').hover(cambiar3, nocambiar3);

		$('.ad-slider .bx-next').hover(cambiar, nocambiar);	
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
	function cambiar2(){
		$('.myarrow-1.next').stop().css({
			background: '#634c78'
		});
		$('.myarrow-1.next span').stop().css({
			'border-top-color': '#fff',
			'border-right-color': '#fff'
		});
	}
	function nocambiar2(){
		$('.myarrow-1.next').stop().css({
			'background': '#fff'
		});
		$('.myarrow-1.next span').stop().css({
			'border-top-color': '#634c78',
			'border-right-color': '#634c78'
		});
	}
	function cambiar3(){
		$('.myarrow-1.prev').stop().css({
			background: '#634c78'
		});
		$('.myarrow-1.prev span').stop().css({
			'border-top-color': '#fff',
			'border-right-color': '#fff'
		});
	}
	function nocambiar3(){
		$('.myarrow-1').stop().css({
			'background': '#fff'
		});
		$('.myarrow-1 span').stop().css({
			'border-top-color': '#634c78',
			'border-right-color': '#634c78'
		});
	}
})(jQuery);
