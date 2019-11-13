$(document).ready(function(){
	// Owl carousel creation for services slider
	if($('body').hasClass("single-service")){
		var owl = $('.owl-carousel');
		owl.owlCarousel({
		  items:1,
		  center: true,
		  dots: true,
		});
		
		if(owl.length > 0) {
			// Arrow navigation 
			$('.slider-forward-arrow').click(function() {
			    owl.trigger('next.owl.carousel');
			});
			$('.slider-back-arrow').click(function() {
			    owl.trigger('prev.owl.carousel');
			});
			
			var orangeLine = $('.inner-nav .orange-line');
			orangeLine.animate({
				width: $('.inner-nav .activeTopNav').position().left,
				}, 300);
			// Hide/show arrows
			owl.on('changed.owl.carousel', function(event) {
				var currentSlideIndex= event.item.index;
				var maxSlides = event.item.count;
				
				// Prev arrow
				if(currentSlideIndex == 0){
					$('.slider-back-arrow i').hide();
				}
				else {
					$('.slider-back-arrow i').show();
				}
				
				//Next arrow
				if(currentSlideIndex == maxSlides - 1){
					$('.slider-forward-arrow i').hide();
				}
				else {
					$('.slider-forward-arrow i').show();
				}
				
				// Top nav
				$('.inner-nav .slider-single-nav').each(function(index) {
					if(index <= currentSlideIndex){
						$(this).addClass('activeTopNav');
						
					}
					else {
						$(this).removeClass('activeTopNav');
					}
				});
				
				// Orange arrow animation
				if(currentSlideIndex == maxSlides - 1) {
					orangeLine.animate({
						width: '100%',
					}, 300);
				}
				else {
					orangeLine.animate({
						width: $('.inner-nav .slider-single-nav:nth-child('+(currentSlideIndex+3)+')').position().left,
					}, 300);
				}
				//$('.inner-nav .activeTopNav').removeClass('activeTopNav');
				//$('.inner-nav .slider-single-nav:nth-child('+(currentSlideIndex+3)+')').addClass('activeTopNav');
			});	
		}
	}
	// Owl carousel creation for mobile sliders
	var owl_posts = $('.mobile-slider');
	owl_posts.owlCarousel({
	  items:1,
	  center: true,
	  dots: true,
	  singleItem:true,
	});
});