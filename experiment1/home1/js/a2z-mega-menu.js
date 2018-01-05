
;(function($) {

	// DOM ready
	$(function() {
		
		// Append the mobile icon nav
		$('.a2z-mega-menu').append($('<div class="nav-mobile"><i class="fa fa-align-justify"></i></div>'));
		
		// Add a <span> to every .hc-li that has a <ul> inside
		$('.hc-li').has('ul').prepend('<span class="nav-click"><i class="fa fa-angle-right nav-arrow"></i></span>');
		
		// Click to reveal the nav
		$('.nav-mobile').click(function(){
			$('.nav-list').slideToggle(500);
		});
	
		// Dynamic binding to on 'click'
		$('.nav-list').on('click', '.nav-click', function(){
		
			// Toggle the nested nav
			$(this).siblings('.nav-submenu').slideToggle(500);
			
			// Toggle the arrow using CSS3 transforms
			$(this).children('.nav-arrow').toggleClass('nav-rotate');
			
		});
	    
	});
	
})(jQuery);