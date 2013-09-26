// App GENERAL ( All templates)
;(function($, undefined){
	"use strict";
	$(document).on('ready', init);
	
	function init(){
        $("html,body").css("display", "none");            
        $("html,body").fadeIn(800);

        // Not action in main logo
        $('#inicio.nologged h1>a').click(function(e){
            e.preventDefault();
        });
        
        // Go to top
        var irTop = $('#gototop');
        $(irTop).hide();
        $(window).scroll(function() {
            $(this).scrollTop() >= 400 ? $(irTop).fadeIn("slow") : $(irTop).fadeOut("slow");
        });     
        $(irTop).click(toHead); 

        // Select Head
        $(window).on('load', function () {
            $('.selectpicker').selectpicker();
        });

        // menu user
		$('#user-menu').hide();	
		$('#wholesaler').on('click', function(){
			$(this).addClass('arrowhover');
			$('#user-menu').slideToggle('slow', function(){
				$(this).on({	        
			        'mouseover': function() { 
			        	$(this).show(); 
			        	$('#wholesaler').addClass('arrowhover');     	
			        },
			        'mouseout': function() { 
			        	$(this).hide();
			        	$('#wholesaler').removeClass('arrowhover');          
			        }			       
			    });
			});			
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
        $('.apreciate').hover(
	        function(){ $(this).find('i').addClass('bounceIn') },
	        function(){ $(this).find('i').removeClass('bounceIn') }
		);
		$('.butsave, .butupdate').hover(
	        function(){ $(this).children().addClass('rollIn') },
	        function(){ $(this).children().removeClass('rollIn') }
		);
		$('.butshare, .butconfirm').hover(
	        function(){ $(this).children().addClass('fadeIn') },
	        function(){ $(this).children().removeClass('fadeIn') }
		);
        // Update info
        $('.butupdate, .butregister, .butrate').on('click', function(){
            $('.success').addClass('bounceIn');
            $('.success').css('visibility', 'visible');
        }); 

		// Limited (Read more)
  		$('.text-limited p').each(function(){     
            var longitud= 500;         
            if($(this).text().length > longitud){         
                var texto=$(this).text().substring(0,longitud);
                var indiceUltimoEspacio= texto.lastIndexOf(' ');
                texto=texto.substring(0,indiceUltimoEspacio) +'<span class="points">...</span>';         
                var primeraParte = '<em class="text-visible">' + texto + '</em>';
                var segundaParte = '<em class="text-hidden">' + $(this).text().substring(indiceUltimoEspacio,$(this).text().length - 1) + '</em>';         
                $(this).html(primeraParte + segundaParte);
                $(this).after('<em class="cleaner btn-text-limited">Read more</em>');  
            };         
        });
        $('.btn-text-limited').on('click',function(e){
            e.preventDefault();
            if($(this).prev().find('.text-hidden').css('display') == 'none'){
                $(this).prev().find('.text-hidden').css('display','inline');
                $(this).prev().find('.points').css('display','none');
                $(this).text('Read less');
            }else{
                $(this).prev().find('.text-hidden').css('display','none');
                $(this).prev().find('.points').css('display','inline');
                $(this).html('Read more');
            };
        });

        // My Tooltips
        // Rates
        $('.ranking').mouseover(function(){
            $('.mytooltip', this).css({
            	visibility: 'visible',
            	opacity: '1',
            	top: '-60px'
            });
        }).mouseout( function(){
            $('.mytooltip', this).css({
            	visibility: 'hidden',
            	opacity: '0',
            	top: '-130px'
            });
        });	
        // Socials
		$('.butshare').mouseover(function(){
            $('.mytooltip2', this).css({
            	visibility: 'visible',
            	opacity: '1',
            	top: '-60px'
            });
        }).mouseout( function(){
            $('.mytooltip2', this).css({
            	visibility: 'hidden',
            	opacity: '0',
            	top: '-130px'
            });
        });

        // Play Video
        $('.play').on('click', function(){
            $(this).next().trigger('click');
        });
      
	}
    function toHead(e){
        e.preventDefault();
        $('body,html').animate({ 
            scrollTop: 0
        }, 2000);
        return false;
    }   
    
   
})(jQuery);

// MaxLength Textarea
function init_contadorTa(idTextArea, idAccounter,max){
    $("#"+idTextArea).keyup(function(){
        updateContadorTa(idTextArea, idAccounter,max);
    });
    $("#"+idTextArea).change(function(){
        updateContadorTa(idTextArea, idAccounter,max);
    });    
}
function updateContadorTa(idTextArea, idAccounter,max){
    var contador = $("#"+idAccounter);
    var ta =     $("#"+idTextArea);
    contador.html("0/"+max);
    
    contador.html(ta.val().length+"/"+max);
    if(parseInt(ta.val().length)>max)
    {
        ta.val(ta.val().substring(0,max-1));
        contador.html(max+"/"+max);
    }
}