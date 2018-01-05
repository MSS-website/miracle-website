/*
Template Name: Leader - HTML template for Political Party
Author: Cbsnet
Version: 1.0
*/

jQuery(function ($) {

    'use strict';



    /* ======= Preloader ======= */
    
    $('#status').fadeOut();
    $('#preloader').delay(200).fadeOut('slow');
    


    /* ======= sticky menu ======= */

    $(window).scroll(function() {
        if ($(".navbar").offset().top > 50) {
            $(".navbar-fixed-top").addClass("sticky");
        } else {
            $(".navbar-fixed-top").removeClass("sticky");
        }
    });

	
	 /* ======= slideshow ======= */
	
	var tpj=jQuery;			
        var revapi4;
        tpj(document).ready(function() {
        if(tpj("#rev_slider_4_1").revolution == undefined){
            revslider_showDoubleJqueryError("#rev_slider_4_1");
        }else{
            revapi4 = tpj("#rev_slider_4_1").show().revolution({
                sliderType:"standard",
                jsFileLocation:"revolution/js/",
                sliderLayout:"fullscreen",
                dottedOverlay:"none",
                delay:9000,
                navigation: {
                    keyboardNavigation:"off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation:"off",
                    onHoverStop:"off",
                    touch:{
                        touchenabled:"on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    }
                    ,
                    arrows: {
                        style:"zeus",
                        enable:true,
                        hide_onmobile:true,
                        hide_under:600,
                        hide_onleave:true,
                        hide_delay:200,
                        hide_delay_mobile:1200,
                        tmp:'<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div> </div>',
                        left: {
                            h_align:"left",
                            v_align:"center",
                            h_offset:30,
                            v_offset:0
                        },
                        right: {
                            h_align:"right",
                            v_align:"center",
                            h_offset:30,
                            v_offset:0
                        }
                    }
                    ,
                    bullets: {
                        enable:true,
                        hide_onmobile:true,
                        hide_under:600,
                        style:"metis",
                        hide_onleave:true,
                        hide_delay:200,
                        hide_delay_mobile:1200,
                        direction:"horizontal",
                        h_align:"center",
                        v_align:"bottom",
                        h_offset:0,
                        v_offset:30,
                        space:5,
        
                    }
                },
                viewPort: {
                    enable:true,
                    outof:"pause",
                    visible_area:"80%"
                },
                responsiveLevels:[1240,1024,778,480],
                gridwidth:[1240,1024,778,480],
                gridheight:[600,600,500,400],
                lazyType:"none",
                parallax: {
                    type:"mouse",
                    origo:"slidercenter",
                    speed:2000,
                    levels:[2,3,4,5,6,7,12,16,10,50],
                },
                shadow:0,
                spinner:"off",
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,
                shuffle:"off",
                autoHeight:"off",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                    simplifyAll:"off",
                    nextSlideOnWindowFocus:"off",
                    disableFocusListener:false,
                }
            });	
			       }
        });	
	
	
	
	
	
	

    /* === jQuery for page scrolling feature - requires jQuery Easing plugin === */
    
    $('a.page-scroll').on('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
    
	

    /* ======= Full Screen Background ======= */
    
    $(".tt-fullHeight").height($(window).height());
    $(window).resize(function(){
        $(".tt-fullHeight").height($(window).height());
    });



    /* === Counter === */

    $('.fact-section').on('inview', function(event, visible, visiblePartX, visiblePartY) {
        if (visible) {
            $(this).find('.timer').each(function () {
                var $this = $(this);
                $({ Counter: 0 }).animate({ Counter: $this.text() }, {
                    duration: 2000,
                    easing: 'swing',
                    step: function () {
                        $this.text(Math.ceil(this.Counter));
                    }
                });
            });
            $(this).off('inview');
        }
    });



	

    /* === Social Counter === */
    
    $('.social-counter').on('inview', function(event, visible, visiblePartX, visiblePartY) {
        if (visible) {
            $(this).find('.timer').each(function () {
                var $this = $(this);
                $({ Counter: 0 }).animate({ Counter: $this.text() }, {
                    duration: 2000,
                    easing: 'swing',
                    step: function () {
                        $this.text(Math.ceil(this.Counter));
                    }
                });
            });
            $(this).off('inview');
        }
    });




	
		/* === Twitter feed === */
		$(document).ready(function() {
			$('#tweecool').tweecool( {
			//settings
			username : 'jquery',
			profile_image : false,
			show_time : true,
			show_media : false,
			limit : 3
			});
		});




	/* === Skill bar === */
    jQuery(document).ready(function(){
	jQuery('.skillbar').each(function(){
		jQuery(this).find('.skillbar-bar').animate({
			width:jQuery(this).attr('data-percent')
		},4000);
	});
});



    /* === Tab to Collapse === */

    if ($('#abilitiesTab').length > 0) { 
       $('#abilitiesTab').tabCollapse();
    }

		    


    /* ======= Magnific Popup ======= */

    $('.image-link').magnificPopup({

        gallery: {
          enabled: true
        },
        removalDelay: 300, // Delay in milliseconds before popup is removed
        mainClass: 'mfp-with-zoom', // this class is for CSS animation below
        type:'image'

    });


    /* ======= Team Carousel ======= */
    (function () {

        $('.team-carousel').owlCarousel({
            loop:true,
            margin:30,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:4
                }
            }
        })

    }());



    /* ======= Countdown ======= */    

    $("#countdown").countdown({
        date: "10 december 2016 12:00:00",
        format: "on"
    });



    /* ======= Client Carousel ======= */
    (function () {

        $('.client-carousel').owlCarousel({
            autoplay:true,
            loop:true,
            margin:30,
            dots: false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:6
                }
            }
        })

    }());



    /* === Detect IE version === */
    (function () {
        
        function getIEVersion() {
            var match = navigator.userAgent.match(/(?:MSIE |Trident\/.*; rv:)(\d+)/);
            return match ? parseInt(match[1], 10) : false;
        }

        if( getIEVersion() ){
            $('html').addClass('ie'+getIEVersion());
        }

    }());





    /* === Mail Chimp subscription form settings === */
    (function () {
  
        $('.mailchimp').ajaxChimp({
            callback: mailchimpCallback,
            //replace below url with your own mailchimp form post url inside the url: "---".
            //to learn how to get your own URL, please check documentation file.
            url: "your mailchimp form post url" 
        }); 
        function mailchimpCallback(resp) {
             if (resp.result === 'success') {
                $('.subscription-success').html('<i class="fa fa-check"></i>' + resp.msg).fadeIn(1000);
                $('.subscription-error').fadeOut(500);
                
            } else if(resp.result === 'error') {
                $('.subscription-error').html('<i class="fa fa-times"></i>' + resp.msg).fadeIn(1000);
            }  
        }

    }()); 
	




	//Donation Modal Form
		$('.predefined-amount input[name=donation-amount]:checked').parent('label').addClass("selected");
		$('.predefined-amount input[name=donation-amount]').click(function () {
			$('.predefined-amount input[name=donation-amount]:not(:checked)').parent('label').removeClass("selected");
			$(this).parent('label').addClass("selected");
		});
		
		$(window).load(function(){
			$(".format-image").each(function(){
				$(this).find(".media-box").append("<span class='zoom'><span class='icon'><i class='fa fa-search'></i></span></span>");
			});
			$(".format-standard").each(function(){
				$(this).find(".media-box").append("<span class='zoom'><span class='icon'><i class='fa fa-plus'></i></span></span>");
			});
			$(".format-video").each(function(){
				$(this).find(".media-box").append("<span class='zoom'><span class='icon'><i class='fa fa-play'></i></span></span>");
			});
			$(".format-link").each(function(){
				$(this).find(".media-box").append("<span class='zoom'><span class='icon'><i class='fa fa-link'></i></span></span>");
			});
			$(".additional-images .owl-carousel .item-video").each(function(){
				$(this).append("<span class='icon'><i class='fa fa-play'></i></span>");
			});
			$('.carousel-wrapper').css('background','none');
			
		});


    /* ======= Back to Top ======= */
    (function(){

          $('body').append('<div id="toTop"><i class="fa fa-angle-up"></i></div>');

            $(window).scroll(function () {
                if ($(this).scrollTop() != 0) {
                    $('#toTop').fadeIn();
                } else {
                    $('#toTop').fadeOut();
                }
            }); 

        $('#toTop').on('click',function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        });

    }());



	

    /* ======= Contact Form ======= */
	
   
	 if ($('#contactForm').length > 0) { 

        $('#contactForm').on('submit',function(e){

            e.preventDefault();

            var $action = $(this).prop('action');
            var $data = $(this).serialize();
            var $this = $(this);

            $this.prevAll('.alert').remove();

            $.post( $action, $data, function( data ) {

                if( data.response=='error' ){

                    $this.before( '<div class="alert alert-danger">'+data.message+'</div>' );
					
                }

                if( data.response=="success" ){
					
                    $this.before( '<div class="alert alert-success" >'+data.message+'</div>' );
                    $this.find('input, textarea').val('');
					$(function(){					
					$("#fields").submit(function(){
						 $(this).hide();
					  });
					});
                }
				

            }, "json");

        });
    }




    /* ======= GOOGLE MAP ======= */
    (function () {

        //set your google maps parameters
        var $latitude = 42.3580189, //If you unable to find latitude and longitude of your address. Please visit http://www.latlong.net/convert-address-to-lat-long.html you can easily generate.
            $longitude = -71.0587038,
            $map_zoom = 16 /* ZOOM SETTING */

        //google map custom marker icon 
        var $marker_url = 'images/marker.png';

        //we define here the style of the map
        var style = [{
            "stylers": [{
                "hue": "#000"
            }, {
                "saturation": -100
            }, {
                "gamma": 2.15
            }, {
                "lightness": 12
            }]
        }];

        //set google map options
        var map_options = {
            center: new google.maps.LatLng($latitude, $longitude),
            zoom: $map_zoom,
            panControl: true,
            zoomControl: true,
            mapTypeControl: true,
            streetViewControl: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: false,
            styles: style
        }
        //inizialize the map
        var map = new google.maps.Map(document.getElementById('myMap'), map_options);
        //add a custom marker to the map                
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng($latitude, $longitude),
            map: map,
            visible: true,
            icon: $marker_url
        });

        var contentString = '<div id="mapcontent">' + '<p>Leader, 896 Donovan Ave, Boston, MA.</p></div>';
        var infowindow = new google.maps.InfoWindow({
            maxWidth: 320,
            content: contentString
        });

        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map, marker);
        });

    }());


}); 



$(window).load(function() {

    "use strict";


    /* ======= Stellar for background scrolling ======= */
    (function () {

        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
         
        }else {
            $(window).stellar({
                horizontalScrolling: false,
                responsive: true
            });
        }

    }());


    /* === Shuffle for portfolio filter  === */


    if ($('#gridWrapper').length > 0) {
     
        /* initialize shuffle plugin */
        var $grid = $('#gridWrapper');

        $grid.shuffle({
            itemSelector: '.portfolio-wrapper' // the selector for the items in the grid
        });

        /* reshuffle when user clicks a filter item */
        $('#filter a').on('click', function (e) {
            e.preventDefault();

            // set active class
            $('#filter a').removeClass('active');
            $(this).addClass('active');

            // get group name from clicked item
            var groupName = $(this).attr('data-group');

            // reshuffle grid
            $grid.shuffle('shuffle', groupName );
        });
    }


});