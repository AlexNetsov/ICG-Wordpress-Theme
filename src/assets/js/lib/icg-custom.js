$(document).ready(function(){
	// Scroll to Top 
	$(window).scroll(function() {
	    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
	        $('#return-to-top').fadeIn(200);    // Fade in the arrow
	    } else {
	        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
	    }
	});
	$('#return-to-top').click(function() {      // When arrow is clicked
	    $('body,html').animate({
	        scrollTop : 0                       // Scroll to top of body
	    }, 500);
	});
	
	// Show language switcher in mobile menu
	$('.title-bar-left button.menu-icon').click(function(){
		var lang_switcher = $('.language-switcher-container');
		if(lang_switcher.is(":visible")) {
			lang_switcher.hide();
		}
		else {
			lang_switcher.show();
		}
	});
	
	$(document).on("gform_confirmation_loaded", function (e, form_id) {
		if ($('body').hasClass('page-template-page-contacts')){
			window.stop();
			console.log('opkkk');	
		}
	});

});