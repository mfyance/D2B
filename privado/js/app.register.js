;(function($, undefined){
	"use strict";
	$(document).on('ready', init);
	
	function init(){
		// placeholder to many explorers	
		$('input, textarea').placeholder();

		// Input complete
		$('#tags4search1').tagit();
		$('#tags4search2').tagit();
		$('#tags4search3').tagit();

		// Clone input
		$("#reg-designer input#username").keyup(
            function(){
            	var valinput = $('#reg-designer input#username').val();
            	$('.usernameclone.designer').html(valinput);
            }
        );
        $("#reg-wholesaler input#username").keyup(
            function(){
            	var valinput = $('#reg-wholesaler input#username').val();
            	$('.usernameclone.wholesaler').html(valinput);
            }
        );
        $("#reg-retailer input#username").keyup(
            function(){
            	var valinput = $('#reg-retailer input#username').val();
            	$('.usernameclone.retailer').html(valinput);
            }
        );
		// Validate content inputs
		$('#frm-reg-designer').on('cut copy paste', function(e){
			e.preventDefault();
		});
		$('#frm-reg-wholesaler').on('cut copy paste', function(e){
			e.preventDefault();
		});
		$('#frm-reg-retailer').on('cut copy paste', function(e){
			e.preventDefault();
		});
			// New Method
		$.validator.addMethod(
			"regex",
			function(value, element, regexp) {
				var re = new RegExp(regexp);
				return this.optional(element) || re.test(value);
			},
			""
		);      
		$('#frm-reg-designer').validate({
			rules: {
				username: {
					required: true					
				},
				password: {
					required: true,
					minlength: 5						
				},
				repassword: {
					required: true,
					minlength: 5,
					equalTo: "#password"			
				},
				brand: {
					required: true
				},
				name: {
					required: true,
					regex:"^[a-zA-Z\u00E1\u00E9\u00ED\u00F3\u00FA \u00C1\u00C9\u00CD\u00D3\u00DA \u00F1\u00D1]+$"		
				},
				lastname:{
					required: true,
					regex:"^[a-zA-Z\u00E1\u00E9\u00ED\u00F3\u00FA \u00C1\u00C9\u00CD\u00D3\u00DA \u00F1\u00D1]+$"
				},
				companyemail:{
					required: true,
					email: true
				},
				personalemail:{
					required: true,
					email: true
				},
				safetypay:{
					required: true,
					regex : "^[0-9 ()\-\/\*]{6,50}$"
				},
				telephono:{
					regex : "^[0-9 ()\-\/\*]{6,50}$"
				},
				mobile:{
					regex : "^[0-9 ()\-\/\*]{6,50}$"
				},
				zipcode:{
					regex : "^[0-9 ()\-\/\*]{6,50}$"
				}
			},
			messages: {
				username: {
					required: 'Lorem ipsum'					
				},
				password: {
					required: 'Lorem ipsum',
					minlength: 'Min. 5 characters'						
				},
				repassword: {
					required: 'Lorem ipsum',
					minlength: 'Min. 5 characters',
					equalTo: 'Not match'			
				},
				brand: {
					required: 'Lorem ipsum'
				},
				name: {
					required: 'Lorem ipsum',
					regex: "Only letters"
				},
				lastname:{
					required: 'Lorem ipsum',
					regex: "Only letters"
				},
				companyemail:{
					required: 'Lorem ipsum',
					email: 'Only email'
				},
				personalemail:{
					required: 'Lorem ipsum',
					email: 'Only email'
				},
				safetypay:{
					required: 'Lorem ipsum',
					regex: "Only numbers"
				},
				telephono:{
					regex: "Only numbers"
				},
				mobile:{
					regex: "Only numbers"
				},
				zipcode:{					
					regex : "Only zipcode"
				}
			}
		});
		
		$('#frm-reg-wholesaler').validate({
			rules: {
				username: {
					required: true					
				},
				password: {
					required: true,
					minlength: 5						
				},
				repassword: {
					required: true,
					minlength: 5,
					equalTo: "#password"			
				},
				brand: {
					required: true
				},
				name: {
					required: true,
					regex:"^[a-zA-Z\u00E1\u00E9\u00ED\u00F3\u00FA \u00C1\u00C9\u00CD\u00D3\u00DA \u00F1\u00D1]+$"		
				},
				lastname:{
					required: true,
					regex:"^[a-zA-Z\u00E1\u00E9\u00ED\u00F3\u00FA \u00C1\u00C9\u00CD\u00D3\u00DA \u00F1\u00D1]+$"
				},
				companyemail:{
					required: true,
					email: true
				},
				personalemail:{
					required: true,
					email: true
				},
				safetypay:{
					required: true,
					regex : "^[0-9 ()\-\/\*]{6,50}$"
				},
				telephono:{
					regex : "^[0-9 ()\-\/\*]{6,50}$"
				},
				mobile:{
					regex : "^[0-9 ()\-\/\*]{6,50}$"
				},
				zipcode:{
					regex : "^[0-9 ()\-\/\*]{6,50}$"
				}
			},
			messages: {
				username: {
					required: 'Lorem ipsum'					
				},
				password: {
					required: 'Lorem ipsum',
					minlength: 'Min. 5 characters'						
				},
				repassword: {
					required: 'Lorem ipsum',
					minlength: 'Min. 5 characters',
					equalTo: 'Not match'			
				},
				brand: {
					required: 'Lorem ipsum'
				},
				name: {
					required: 'Lorem ipsum',
					regex: "Only letters"
				},
				lastname:{
					required: 'Lorem ipsum',
					regex: "Only letters"
				},
				companyemail:{
					required: 'Lorem ipsum',
					email: 'Only email'
				},
				personalemail:{
					required: 'Lorem ipsum',
					email: 'Only email'
				},
				safetypay:{
					required: 'Lorem ipsum',
					regex: "Only numbers"
				},
				telephono:{
					regex: "Only numbers"
				},
				mobile:{
					regex: "Only numbers"
				},
				zipcode:{					
					regex : "Only zipcode"
				}
			}
		});
		
		$('#frm-reg-retailer').validate({
			rules: {
				username: {
					required: true					
				},
				password: {
					required: true,
					minlength: 5						
				},
				repassword: {
					required: true,
					minlength: 5,
					equalTo: "#password"			
				},
				brand: {
					required: true
				},
				name: {
					required: true,
					regex:"^[a-zA-Z\u00E1\u00E9\u00ED\u00F3\u00FA \u00C1\u00C9\u00CD\u00D3\u00DA \u00F1\u00D1]+$"		
				},
				lastname:{
					required: true,
					regex:"^[a-zA-Z\u00E1\u00E9\u00ED\u00F3\u00FA \u00C1\u00C9\u00CD\u00D3\u00DA \u00F1\u00D1]+$"
				},
				companyemail:{
					required: true,
					email: true
				},
				personalemail:{
					required: true,
					email: true
				},
				safetypay:{
					required: true,
					regex : "^[0-9 ()\-\/\*]{6,50}$"
				},
				telephono:{
					regex : "^[0-9 ()\-\/\*]{6,50}$"
				},
				mobile:{
					regex : "^[0-9 ()\-\/\*]{6,50}$"
				},
				zipcode:{
					regex : "^[0-9 ()\-\/\*]{6,50}$"
				}
			},
			messages: {
				username: {
					required: 'Lorem ipsum'					
				},
				password: {
					required: 'Lorem ipsum',
					minlength: 'Min. 5 characters'						
				},
				repassword: {
					required: 'Lorem ipsum',
					minlength: 'Min. 5 characters',
					equalTo: 'Not match'			
				},
				brand: {
					required: 'Lorem ipsum'
				},
				name: {
					required: 'Lorem ipsum',
					regex: "Only letters"
				},
				lastname:{
					required: 'Lorem ipsum',
					regex: "Only letters"
				},
				companyemail:{
					required: 'Lorem ipsum',
					email: 'Only email'
				},
				personalemail:{
					required: 'Lorem ipsum',
					email: 'Only email'
				},
				safetypay:{
					required: 'Lorem ipsum',
					regex: "Only numbers"
				},
				telephono:{
					regex: "Only numbers"
				},
				mobile:{
					regex: "Only numbers"
				},
				zipcode:{					
					regex : "Only zipcode"
				}
			}
		});

		// Menu Register
		$('dl dd').hide();
		$('dl dt').click(function(e){
			var $mytop = $('#acordeon');
			$('html, body').stop().animate({
				scrollTop: $mytop.offset().top
			},1000, 'swing');
			e.preventDefault();	

			if ($(this).hasClass('activo')) {
			   $(this).removeClass('activo');
			   $(this).next().animate({
			   		opacity : '0'
			   },'slow');
			   $(this).next().slideUp('fast');
			} else {
			   $('dl dt').removeClass('activo');
			   $(this).addClass('activo');
			   $('dl dd').slideUp();
			   $(this).next().slideDown('fast');
			   $(this).next().animate({
			   		opacity : '1'
			   },'slow');
			}
		});
		

		// Add accounts
		var maxPersonajes = 3;
		var contPersonaje = $('#personajes #personaje-'+contPersonaje).length + 1;
		var addPersonaje = $('#addButton');
		var removePersonaje = $('#removeButton');
        
		$(addPersonaje).click(function (e) {
			if(contPersonaje<=maxPersonajes){
				var newPersonaje = $(document.createElement('div')).attr({
					id: 'personaje-' + contPersonaje				
				});
				
				var content = $('<div id="personaje-'+contPersonaje+'" class="myrow color-style2 cleaner"><div class="cleaner"><label for="namepersoninchange_'+ contPersonaje+'">(*) Name of person in change:</label><input type="text" class="style2" name="namepersoninchange_'+contPersonaje+'" id="namepersoninchange_'+contPersonaje+'" placeholder="name of person in change"></div><div class="cleaner"><label for="changeincompany_'+contPersonaje+'">(*) Change in company:</label><input type="text" class="style2" name="changeincompany_'+contPersonaje+'" id="changeincompany_'+contPersonaje+'" placeholder="change in company"></div><div class="cleaner"><label for="emailpersoninchange_'+contPersonaje+'">(*) E-mail of person in change:</label><input type="text" class="style2" name="emailpersoninchange_'+contPersonaje+'" id="emailpersoninchange_'+contPersonaje+'" placeholder="email of person in change"></div></div>');
				newPersonaje.html(content);
				newPersonaje.appendTo("#personajes");
				contPersonaje++;
			}  
			else{
				$('.newaccount-hidden').hide();
			}
			return false;		
		});

		$(removePersonaje).click(function (e){
			if(contPersonaje!=2){
				contPersonaje--;
				$("#personaje-" + contPersonaje).remove();
			}   
			return false;
		});


	

	}
})(jQuery);
