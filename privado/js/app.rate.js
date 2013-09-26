;(function($, undefined){
	"use strict";
	$(document).on('ready', init);
	
	function init(){	
		// Ranking
		$.fn.raty.defaults.path = 'privado/imagenes/general';
		$('.ranking').raty();

		$('#rate1').raty({
			path   : 'privado/imagenes/rate/',
			half     : true,
			size     : 25,
			starHalf : 'half.png',
			starOff  : 'off.png',
			starOn   : 'on.png',
			target    : '#rate1-score',
  			targetType: 'number',
  			targetKeep: true,
  			score: 1,
  			precision: true,
  			numberMax: 5
		});
		$('#rate2').raty({
			path   : 'privado/imagenes/rate/',
			half     : true,
			size     : 25,
			starHalf : 'half.png',
			starOff  : 'off.png',
			starOn   : 'on.png',
			target    : '#rate2-score',
  			targetType: 'number',
  			targetKeep: true,
  			score: 1,
  			precision: true,
  			numberMax: 5
		});
		$('#rate3').raty({
			path   : 'privado/imagenes/rate/',
			half     : true,
			size     : 25,
			starHalf : 'half.png',
			starOff  : 'off.png',
			starOn   : 'on.png',
			target    : '#rate3-score',
  			targetType: 'number',
  			targetKeep: true,
  			score: 1,
  			precision: true,
  			numberMax: 5
		});
		$('#rate4').raty({
			path   : 'privado/imagenes/rate/',
			half     : true,
			size     : 25,
			starHalf : 'half.png',
			starOff  : 'off.png',
			starOn   : 'on.png',
			target    : '#rate4-score',
  			targetType: 'number',
  			targetKeep: true,
  			score: 1,
  			precision: true,
  			numberMax: 5
		});
		$('#rate5').raty({
			path   : 'privado/imagenes/rate/',
			half     : true,
			size     : 25,
			starHalf : 'half.png',
			starOff  : 'off.png',
			starOn   : 'on.png',
			target    : '#rate5-score',
  			targetType: 'number',
  			targetKeep: true,
  			score: 1,
  			precision: true,
  			numberMax: 5
		});
	}
})(jQuery);
