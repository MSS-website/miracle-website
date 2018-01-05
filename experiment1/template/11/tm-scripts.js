function include(scriptUrl) {
    document.write('<script src="' + scriptUrl + '"></script>');
}

function isIE() {
    var myNav = navigator.userAgent.toLowerCase();
    return (myNav.indexOf('msie') != -1) ? parseInt(myNav.split('msie')[1]) : false;
};


/* Stick up menus
 ========================================================*/
;
(function ($) {
    var o = $('html');
    if (o.hasClass('desktop')) {
        include('tmstickup.js');

        $(document).ready(function () {
            $('#stuck_container').TMStickUp({})
        });
    }
})(jQuery);

/* ToTop
 ========================================================*/
;
(function ($) {
    var o = $('html');
    if (o.hasClass('desktop')) {
        include('jquery.ui.totop.js');

        $(document).ready(function () {
            $().UItoTop({
                easingType: 'easeOutQuart',
                containerClass: 'toTop fa fa-angle-up'
            });
        });
    }
})(jQuery);

/* EqualHeights
 ========================================================*/
;
(function ($) {
    var o = $('[data-equal-group]');
    if (o.length > 0) {
        include('jquery.equalheights.js');
    }
})(jQuery);



/* Copyright Year
 ========================================================*/
;
(function ($) {
    var currentYear = (new Date).getFullYear();
    $(document).ready(function () {
        $("#copyright-year").text((new Date).getFullYear());
    });
})(jQuery);




;
(function ($) {
    function include(url) {
	document.write('<script src="js/' + url + '"></script>');
	return false;
}
	include('superfish.js');
	jQuery(function () {
})
})(jQuery);



/* Navbar
 ========================================================*/
;
(function ($) {
    include('jquery.rd-navbar.js');
})(jQuery);


/* Google Map
 ========================================================*/
;
(function ($) {
    var o = document.getElementById("google-map");
    if (o) {
        include('//maps.google.com/maps/api/js?sensor=false');
        include('jquery.rd-google-map.js');

        $(document).ready(function () {
            var o = $('#google-map');
            if (o.length > 0) {
                o.googleMap({styles:[]});
            }
        });
    }
})
(jQuery);

/* Owl Carousel
 ========================================================*/
;(function ($) {
    var o = $('.owl-carousel');
    if (o.length > 0) {
        include('owl.carousel.min.js');
        $(document).ready(function () {
            o.owlCarousel({
                autoplay: true,
                margin: 0,
                smartSpeed: 450,
                loop: true,
                dots: false,
                dotsEach: 1,
                nav: true,
                navClass: ['owl-prev fa fa-angle-left', 'owl-next fa fa-angle-right'],
                responsive: {
                    0: { items: 2 },
                    768: { items: 4},
                    980: { items: 5},
                    1199: {items: 6}
                }
            });
        });
    }
})(jQuery);


/* WOW
 ========================================================*/
;
(function ($) {
    var o = $('html');

    if ((navigator.userAgent.toLowerCase().indexOf('msie') == -1 ) || (isIE() && isIE() > 9)) {
        if (o.hasClass('desktop')) {
            include('wow.js');

            $(document).ready(function () {
                new WOW().init();
            });
        }
    }
})(jQuery);



/* Orientation tablet fix
 ========================================================*/
$(function () {
    // IPad/IPhone
    var viewportmeta = document.querySelector && document.querySelector('meta[name="viewport"]'),
        ua = navigator.userAgent,

        gestureStart = function () {
            viewportmeta.content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0";
        },

        scaleFix = function () {
            if (viewportmeta && /iPhone|iPad/.test(ua) && !/Opera Mini/.test(ua)) {
                viewportmeta.content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
                document.addEventListener("gesturestart", gestureStart, false);
            }
        };

    scaleFix();
    // Menu Android
    if (window.orientation != undefined) {
        var regM = /ipod|ipad|iphone/gi,
            result = ua.match(regM);
        if (!result) {
            $('.sf-menus li').each(function () {
                if ($(">ul", this)[0]) {
                    $(">a", this).toggle(
                        function () {
                            return false;
                        },
                        function () {
                            window.location.href = $(this).attr("href");
                        }
                    );
                }
            })
        }
    }
});
var ua = navigator.userAgent.toLocaleLowerCase(),
    regV = /ipod|ipad|iphone/gi,
    result = ua.match(regV),
    userScale = "";
if (!result) {
    userScale = ",user-scalable=0"
}
document.write('<meta name="viewport" content="width=device-width,initial-scale=1.0' + userScale + '">');




/* Camera
========================================================*/
;(function ($) {
var o = $('#camera');
    if (o.length > 0) {
        if (!(isIE() && (isIE() > 9))) {
            include('jquery.mobile.customized.min.js');
        }

        include('camera.js');

        $(document).ready(function () {
            o.camera({
                autoAdvance: true,
                height: '36.75%',
                minHeight: '300px',
                pagination: false,
                thumbnails: false,
                playPause: false,
                hover: false,
                loader: 'none',
                navigation: true,
                navigationHover: true,
                mobileNavHover: false,
                fx: 'simpleFade'
            })
        });
    }
})(jQuery);


/* Search.js
 ========================================================*/
;
(function ($) {
    var o = $('.search-form');
    if (o.length > 0) {
        include('TMSearch.js');
    }
})(jQuery);


$(window).scroll(
	function () {
		if (
			$(this).scrollTop() > 0) {
			$("#advanced").css({
				position: 'fixed'
			});
		} else {
			$("#advanced").css({
				position: 'relative'
			});
		}
	}
);
$(function () {
	var
		strCookies1 = $.cookie('panel1'),
		isAnimate = false,
		isOpen = false;

	if (strCookies1 == null) {
		$.cookie('panel1', 'closed');
		strCookies1 = $.cookie('panel1');
		isOpen = false;
	}

	if (strCookies1 == 'opened') {
		$("#advanced").css({
			marginTop: '0px'
		}).removeClass('closed');
		isOpen = true;
		$('#stuck_container').trigger('rePosition', 50); //for sticky menu
	} else {
		$("#advanced").css({
			marginTop: '-50px'
		}).addClass('closed');
		isOpen = false;
		$('#stuck_container').trigger('rePosition', 0); //for sticky menu
	}

	$("#advanced .trigger").click(
		function () {
			if (!isOpen) {
				$(this).find('strong').animate({
					opacity: 0
				}).parent().parent('#advanced').removeClass('closed').animate({
					marginTop: '0px'
				}, 500);
				$.cookie('panel1', 'opened');
				strCookies1 = $.cookie('panel1');

				isOpen = true;
				$('#stuck_container').trigger('rePosition', 50);
			} else {
				$(this).find('strong').animate({
					opacity: 1
				}).parent().parent('#advanced').addClass('closed').animate({
					marginTop: '-50px'
				}, 700)
				$.cookie('panel1', 'closed');
				strCookies1 = $.cookie('panel1');

				isOpen = false;
				$('#stuck_container').trigger('rePosition', 0); //for sticky menu
			}
		}
	)
});
/*--------- end panel *------------*/


/* Parallax
=============================================*/
;(function ($) {
    include('jquery.rd-parallax.js');
})(jQuery);



