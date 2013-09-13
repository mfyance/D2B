;(function($, undefined){
	"use strict";
	$(document).on('ready', init);
	
	function init(){
		// placeholder
		$('input, textarea').placeholder();
		// Pop ups to iamges
    	$('.fancybox').fancybox();
  		
  		// Banner Bottom Designer
  		$('.bxslider').bxSlider({
			minSlides: 4,
			maxSlides: 4,
			slideWidth: 240,
			slideMargin: 10
		});

		// Tooltip
		$('.butshare').mouseover(function(){
            $('.mytooltip', this).css({
            	opacity: '1',
            	top: '-60px'
            });
        }).mouseout( function(){
            $('.mytooltip', this).css({
            	opacity: '0',
            	top: '-130px'
            });
        });
  		
		// Progressbar
		$('.progressbar').removeClass('loader');	    
		$('.begin-progress').click(function(){
			$('.progressbar').removeClass('loader').delay(10).queue(function(next){
				$(this).addClass('loader');
			     if ($(this).hasClass('loader')){	
			     	$('.done')
					.delay(9500)
					.queue( function(next){ 
					$(this).css({
			     		'visibility':'visible'
			     	});
					next(); 
					});
			    }
		        next();
		    });		   
		    return false;
		});

		// Change Data from Inputs
		$("#aboutme-butcorrect").click(function(){    
	        if ($('#aboutme').hasClass("noedit")) {
	            $('#aboutme').removeClass("noedit");
	            $('#aboutme-txtarea').removeAttr('readonly');          
	            $('#aboutme .butsave').css('visibility','visible');
	        } else {
	        	$('#aboutme-txtarea').attr('readonly', true);
	        	$('#aboutme .butsave').css('visibility','hidden');
	        	$('#aboutme').addClass("noedit");
	        }
	    });
	    $("#wexp-butcorrect").click(function(){    
	        if ($('#workexperience').hasClass("noedit")) {
	            $('#workexperience').removeClass("noedit");
	            $('.list textarea,.list input').removeAttr('readonly');          
	            $('#workexperience .butsave').css('visibility','visible');
	        } else {
	        	$('.list textarea,.list input').attr('readonly', true);
	        	$('#workexperience .butsave').css('visibility','hidden');
	        	$('#workexperience').addClass("noedit");
	        }
	    });
	    $("#post-butcorrect1").click(function(){    
	        if ($('.post-news').hasClass("noedit")) {
	            $('.post-news').removeClass("noedit");
	            $('.post-news textarea').removeAttr('readonly');          
	            $('.post-news .butsave').css('visibility','visible');
	        } else {
	        	$('.post-news textarea').attr('readonly', true);
	        	$('.post-news .butsave').css('visibility','hidden');
	        	$('.post-news').addClass("noedit");
	        }
	    });
	    $("#post-butcorrect2").click(function(){    
	        if ($('.post-image').hasClass("noedit")) {
	            $('.post-image').removeClass("noedit");
	            $('.post-image textarea, .post-image input').removeAttr('readonly');          
	            $('.post-image .butsave').css('visibility','visible');
	        } else {
	        	$('.post-image textarea, .post-image input').attr('readonly', true);
	        	$('.post-image .butsave').css('visibility','hidden');
	        	$('.post-image').addClass("noedit");
	        }
	    });
	    $("#post-butcorrect3").click(function(){    
	        if ($('.post-video').hasClass("noedit")) {
	            $('.post-video').removeClass("noedit");
	            $('.post-video textarea, .post-video input').removeAttr('readonly');
	        } else {
	        	$('.post-video textarea, .post-video input').attr('readonly', true);
	        	$('.post-video').addClass("noedit");
	        }
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

		// View Old POsts
		$('.old-posts').hide();
		$('button.butoldview').on('click', viewPosts);

		// Change Data - Upload Images
		$('input[type="file"]#addimages1').on('change', function(){
			var contenedor = this.value;
			$("#new-addimages1").val(contenedor);
		});
		$('input[type="file"]#addimages2').on('change', function(){
			var contenedor = this.value;
			$("#new-addimages2").val(contenedor);
		});
		$('input[type="file"]#addimages3').on('change', function(){
			var contenedor = this.value;
			$("#new-addimages3").val(contenedor);
		});
		$('input[type="file"]#addimages4').on('change', function(){
			var contenedor = this.value;
			$("#new-addimages4").val(contenedor);
		});		

		// Update info
		$('.butupdate').on('click', function(){
			$('.profile-update').addClass('bounceIn');
			$('.profile-update').css('visibility', 'visible');
		});	

		// Read more
  		// $(".vermas").readMoreReadLess({
    //         itemInSummary: 1
    //     });

	}		

	function viewPosts(){
		$('.old-posts').addClass('fadeIn');
		$('.old-posts:first').clone(true, true).insertAfter('.butoldview');		
		$('.butoldview').clone().end().hide().appendTo($('.old-posts').parent('.view-old-posts'));
		$('.old-posts').next().show();	
	}

})(jQuery);
// Get info & show preview
function GetFileInfo() {
    var fileInput = document.getElementById("inp-addprofile");    
    $(".myphoto>p").css("display", "none");
    oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("inp-addprofile").files[0]);
    oFReader.onload = function(oFREvent) {
        document.getElementById("img-example").src = oFREvent.target.result;
    };
}

(function () {
	var input = document.getElementById("addimages1"), 
		formdata = false;

	function showUploadedItem (source) {
  		var list = document.getElementById("image-list"),
	  		li   = document.createElement("li"),
	  		img  = document.createElement("img");
  		img.src = source;
  		li.appendChild(img);
		list.appendChild(li);
	}   
	
 	input.addEventListener("change", function (evt) {
 		var i = 0, len = this.files.length, img, reader, file;	
		for ( ; i < len; i++ ) {
			file = this.files[i];
	
			if (!!file.type.match(/image.*/)) {
				if ( window.FileReader ) {
					reader = new FileReader();
					reader.onloadend = function (e) { 
						showUploadedItem(e.target.result, file.fileName);
					};
					reader.readAsDataURL(file);
				}
				if (formdata) {
					formdata.append("images[]", file);
				}
			}	
		}
		
	}, false);
}());
