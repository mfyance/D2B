// Forum
;(function($, undefined){
	"use strict";
	$(document).on('ready', init);
	
	function init(){
        // Menu forum
        $('.listcategories').hide();
        $('#mainthemedetails').hide();
        $('#bepartdiscution').hide();
        $('.buts button').on('click', function(){
            $('.buts button').removeClass('active');
            $('#mainthemedetails').hide();
            $('#bepartdiscution').hide();
             $('#paginator').show();
            $(this).addClass('active');
            if($(this).attr('id') == 'menucategories'){
                $('.listcategories').slideToggle('slow', function(){                  
                    $('.close').click(function(){
                        $('#menucategories button').removeClass('active');
                        $('.listcategories').hide();
                    });
                });         
            }else{
                $('.listcategories').hide();
            }
        });  

        // Show theme
        $('.showtheme').on('click', function(e){
            e.preventDefault();
            $('#mainthemedetails').show();
            $('#forumthemes').hide();
            $('#bepartdiscution').show();
        });

        // Placeholder to Inputs Tags
        $('#tags4search .ui-widget-content').attr('placeholder','Example: Works, Jobs');
        $('#tags4search .ui-widget-content').on('click', function(){
            $('#tags4search .ui-widget-content').attr('placeholder','');
        });

        // Active Tags inputs
        $('#tags4search').tagit();

        // Create new theme
        $('#createtheme').hide();
        $('#btn-create-theme').on('click', function(){
            $('#createtheme').fadeIn('slow');
            $('#forumthemes').hide();
            $('#paginator').hide();
            $('.listcategories').hide();

        });

        // Button action
        $('.foruminside').on('click', function(){
            $('#forumthemes').fadeIn('slow');
            $('#createtheme').hide();
        });
        
        // Themes filter
        $('#cat-all').on('click', function(){
            $('a>.theme').removeClass('fadeOutDown');
            $('a>.theme').removeClass('fadeInUp');
            $('a>.theme').not('.cat-all').addClass('fadeOutDown').fadeOut();
            $('a>.theme').filter('.cat-all').addClass('fadeInUp').fadeIn();
        });
        $('#cat-more').on('click', function(){
            $('a>.theme').removeClass('fadeOutDown');
            $('a>.theme').removeClass('fadeInUp');
            $('a>.theme').not('.cat-more').addClass('fadeOutDown').fadeOut();
            $('a>.theme').filter('.cat-more').addClass('fadeInUp').fadeIn();    
        });
        $('#cat-discution').on('click', function(){
            $('a>.theme').removeClass('fadeOutDown');
            $('a>.theme').removeClass('fadeInUp');
            $('a>.theme').not('.cat-discution').addClass('fadeOutDown').fadeOut();
            $('a>.theme').filter('.cat-discution').addClass('fadeInUp').fadeIn();
        });
        $('.cat-info').on('click', function(){
            $('a>.theme').removeClass('fadeOutDown');
            $('a>.theme').removeClass('fadeInUp');
            $('a>.theme').not('.cat-info').addClass('fadeOutDown').fadeOut();
            $('a>.theme').filter('.cat-info').addClass('fadeInUp').fadeIn(); 
        });

	}		
})(jQuery);
