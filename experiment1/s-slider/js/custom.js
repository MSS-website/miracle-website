// JavaScript Document

   var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
		 autoplay: 2500,
        direction: 'vertical'
    });


$(document).ready(function() {
 
  $(".testi-slider").owlCarousel({
 
	  autoPlay: 30000, //Set AutoPlay to 3 seconds
 	  navigation : false,
	  items : 2,
	  itemsDesktop : [1199,3],
	  itemsDesktopSmall : [979,3]
 
  });
 
});

$(document).ready(function() {
 
  $(".cust-slider").owlCarousel({
 
	  autoPlay: 30000, //Set AutoPlay to 3 seconds
 	  navigation : false,
	  items : 5,
	  itemsDesktop : [1199,3],
	  itemsDesktopSmall : [979,3]
 
  });
 
});



    $(document).ready(function() {
     
      $(".testi1-slider").owlCarousel({
     
          navigation : true, // Show next and prev buttons
          slideSpeed : 300,
          paginationSpeed : 400,
          singleItem:true
     
          // "singleItem:true" is a shortcut for:
          // items : 1, 
          // itemsDesktop : false,
          // itemsDesktopSmall : false,
          // itemsTablet: false,
          // itemsMobile : false
     
      });
     
    });




$(document).ready(function() {
 
  $(".marketing-slider").owlCarousel({
  		  navigation : false, // Show next and prev buttons
          slideSpeed : 300,
          paginationSpeed : 400,
          singleItem:true
 
  });
 
});

$(window).scroll(function() {
    if ($(this).scrollTop() > 50){  
        $('header').addClass("sticky");
    }
    else{
        $('header').removeClass("sticky");
    }
});



$(function(){
	
	$(".click").click(function(){
		$(this).find('i').toggleClass('fa-navicon fa-close');
		
     $( ".menu" ).toggle( "slide", {direction: "left"}, 1000);
	});

	
});
	



/*
$(document).ready(function() {
 
  var owl = $(".slider");
 
  owl.owlCarousel({
    navigation : true,
	 autoPlay: 3000,
    singleItem : true,
    transitionStyle : "fadeUp"
  });
 
});

$(document).ready(function() {
 
  var owl = $(".plan-slide");
 
  owl.owlCarousel({
    navigation : false,
	 autoPlay: 3000,
    singleItem : true,
    transitionStyle : "fadeUp"
  });
 
});

$(document).ready(function() {
 
  $(".testi-slider").owlCarousel({
 
	  autoPlay: 30000, //Set AutoPlay to 3 seconds
 	  navigation : false,
	  items : 1,
	  itemsDesktop : [1199,3],
	  itemsDesktopSmall : [979,3]
 
  });
 
});

 

$(document).ready(function() {
    $(".tabs-menu a").click(function(event) {
        event.preventDefault();
        $(this).parent().addClass("current");
        $(this).parent().siblings().removeClass("current");
        var tab = $(this).attr("href");
        $(".tab-content").not(tab).css("display", "none");
        $(tab).fadeIn();
    });
});


    

$(function(){
	$(".search1").click(function(){
		$(".search-box").fadeToggle();
	})
	$(".close1").click(function(){
		$(".search-box").fadeOut();
	});
});
	
$(window).scroll(function() {
    if ($(this).scrollTop() > 50){  
        $('header').addClass("sticky");
    }
    else{
        $('header').removeClass("sticky");
    }
});



$(function(){
	
	$(".click").click(function(){
		$(this).find('i').toggleClass('fa-navicon fa-close');
		
     $( ".menu" ).toggle( "slide", {direction: "left"}, 1000);
	});

	
});
	

	

$(window).load(function() {
		// Animate loader off screen
		$(".LoadingOverlay").fadeOut("slow");;
});







	
		

$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});


wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    wow.init();



*/