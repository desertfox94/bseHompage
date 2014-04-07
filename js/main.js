 //functions
    function IsEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }

jQuery(function(){

//menu animation
jQuery('.navi > li > a').hover(function(){
		jQuery(this).css({
			"background-color":"#FAF9F3",
			"color":"black"
		});
},function(){
		jQuery(this).css({
			"background-color":"white",
			"color":"#898989"
		});
});	

//validate form
	jQuery('#formSubmit').click(function(){

		var formErrors = 0;
		var FormName = jQuery.trim(jQuery("#formName").val());
		var FormEmail = jQuery.trim(jQuery("#formEmail").val());
		var FormText = jQuery.trim(jQuery('#formText').val());

		if(FormName===""){
			jQuery('#FormNameError').text("Bitte geben Sie Ihren Namen ein.");
			formErrors++;
		}

		if(!IsEmail(FormEmail)){
			jQuery('#FormEmailError').text("Bitte geben Sie eine valide E-mail-Adresse ein.");
			formErrors++;
		}

		if(FormText===""){
			jQuery('#FormTextError').text("Bitte geben Sie einen Text ein.");
			formErrors++;
		}

		if(formErrors===0){

			jQuery.ajax({
				url: 'index.php?site=kontakt&action=sendmail',
				type: 'POST',
				dataType: 'html',
				async: true,

				data: {
					contactName: FormName,
					contactEmail: FormEmail,
					contactText: FormText
				},
				success: function(data) {
					jQuery('#FormNameError').text("");
					jQuery('#FormEmailError').text("");
					jQuery('#FormTextError').text("");
					
					jQuery("#formName").val("");
					jQuery("#formEmail").val("");
					jQuery('#formText').val("");

					jQuery('#formSubmit').fadeOut(1000);
					jQuery('#formSuccess').text('Formular erfolgreich versendet. Wir melden uns schnellstmöglich per E-Mail.');
				},
				error: function(data) {
					
				}
			});
		}


	});
});
