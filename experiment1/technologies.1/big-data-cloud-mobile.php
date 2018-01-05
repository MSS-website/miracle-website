<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
      <title>
 Big Data, Cloud and Mobile
        </title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/main.css" rel="stylesheet" type="text/css">
        <link href="../css/default.css" rel="stylesheet" type="text/css">
        <link href="../css/component.css" rel="stylesheet" type="text/css">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="../images/favicon.ico" rel="shortcut icon">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
      
                     <script language="JavaScript">
// function setVisibility(id) {
// if(document.getElementById('bt1').value=='Hide Layer'){
// document.getElementById('bt1').value = 'Show Layer';
// document.getElementById(id).style.display = 'none';
// }else{
// document.getElementById('bt1').value = 'Hide Layer';
// document.getElementById(id).style.display = 'inline';
// }
// }

 function side_popup() {
     
      $(".nb").hide();
                $("#bt1").click(function() {
                 
                    $(".nb").animate({
                        width: 'toggle'
                    });
                });
                
            }
 </script>
      
       
        <script src="jquery-1.7.1.min.js" type="text/javascript"></script>
    <script type="text/javascript">
		$(function(){ // document ready

		  if (!!$('.sticky').offset()) { // make sure ".sticky" element exists

		    var stickyTop = $('.sticky').offset().top; // returns number 

		    $(window).scroll(function(){ // scroll event

		      var windowTop = $(window).scrollTop(); // returns number 

		      if (stickyTop < windowTop){
		        $('.sticky').css({ position: 'fixed', top: 0 });
		      }
		      else {
		        $('.sticky').css('position','static');
		      }

		    });

		  }

		});
	</script>
	 <style>
               
	h6 {
    text-align: center;
} 

border {
    border-style: zero;
    border-bottom: solid black;
}

@media (min-width: 300px) {

    #sidebar.affix {
    width:90px;
    height:100%;
    top: 100px;
     }
 
    html.easy-sidebar-active {
	height: 100%;
	overflow-x: hidden;
	overflow-y: scroll;
	margin: 0;
	padding: 0;
     }

    .nb.easy-sidebar {
	
	position: fixed;
	width: 250px;

	right: 0px;

	border-radius: 0;
	margin: 0;
	
    collapse;
    background-color:#00aae7;
    }
    .easy-sidebar .btn {
	width: 100%;
    }
    .nb.easy-sidebar .nb-toggle {
	display: inline-block;
    }
    .nb.easy-sidebar .nav.nb-nav>li {
	float: none;
    }
    .nb.easy-sidebar .nav.nb-nav>li>a {
	padding: 10px 15px;
    }
    .nb.easy-sidebar .nb-nav .open .dropdown-menu .divider {
	box-shadow: 0 1px 0 rgba(255,255,255, 0.1);
    }

    .nb.easy-sidebar .nb-form {
	padding: 10px 15px;
	margin: 8px -15px;
	border-top-width: 1px;
	border-top-style: solid;
	border-bottom-width: 1px;
	border-bottom-style: solid;
	box-shadow: inset 0 1px 0 rgba(255,255,255,.1),0 1px 0 rgba(255,255,255,.1);
    }
    .nb.easy-sidebar .nb-form .form-group {
	margin-bottom: 5px;
	display: block;
    }
    .nb.easy-sidebar .nb-form .form-group .form-control {
	display: block;
	width: 100%;
    }
</style>
           
        <?php include '../header.php';?>
    </head>
    
    <body onload="side_popup()">
        <div class="container">
            <br>
            <br>
            <br>
            <br>
            
               
                   <nav class="nb nb-inverse easy-sidebar">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
  <h3 class="heavy">
    <font color="#fff">Upcoming Webinars</font>
  </h3>
   <h3 class="heavy">
    <font color="#fff">Tech  Articles</font>
  </h3>
  <h3 class="heavy">
    <font color="#fff">Case Studies</font>
  </h3>
   
    
  </div>
  <!-- /.container-fluid --> 
</nav>

<h1>Bootstrap Easy Sidebar Example</h1>
<button class="btn btn-danger easy-sidebar-toggle" name=type id='bt1' value='Show Layer'>Toggle Sidebar</button>
<p>
    Irrespective of the size of the enterprise, connectivity plays a vital role in defining how connected your enterprise is. Over the past 20 years our teams have help numerous customers transition their IT architecture to enable an agile and on-demand enterprise. Through messaging and connectivity the enterprise becomes much more flexible to changes in a demanding market place while also ensuring quicker time-to-market and reduced support development costs. Contact us today to learn more about how a SOA-based approach will help you become the connected enterprise (or) how APIs can help open a whole new world of possibilities for your developers. 
</p>
<p>
    Irrespective of the size of the enterprise, connectivity plays a vital role in defining how connected your enterprise is. Over the past 20 years our teams have help numerous customers transition their IT architecture to enable an agile and on-demand enterprise. Through messaging and connectivity the enterprise becomes much more flexible to changes in a demanding market place while also ensuring quicker time-to-market and reduced support development costs. Contact us today to learn more about how a SOA-based approach will help you become the connected enterprise (or) how APIs can help open a whole new world of possibilities for your developers. 
</p>
<p>
    Irrespective of the size of the enterprise, connectivity plays a vital role in defining how connected your enterprise is. Over the past 20 years our teams have help numerous customers transition their IT architecture to enable an agile and on-demand enterprise. Through messaging and connectivity the enterprise becomes much more flexible to changes in a demanding market place while also ensuring quicker time-to-market and reduced support development costs. Contact us today to learn more about how a SOA-based approach will help you become the connected enterprise (or) how APIs can help open a whole new world of possibilities for your developers. 
</p>
<p>
    Irrespective of the size of the enterprise, connectivity plays a vital role in defining how connected your enterprise is. Over the past 20 years our teams have help numerous customers transition their IT architecture to enable an agile and on-demand enterprise. Through messaging and connectivity the enterprise becomes much more flexible to changes in a demanding market place while also ensuring quicker time-to-market and reduced support development costs. Contact us today to learn more about how a SOA-based approach will help you become the connected enterprise (or) how APIs can help open a whole new world of possibilities for your developers. 
</p>
<p>
    Irrespective of the size of the enterprise, connectivity plays a vital role in defining how connected your enterprise is. Over the past 20 years our teams have help numerous customers transition their IT architecture to enable an agile and on-demand enterprise. Through messaging and connectivity the enterprise becomes much more flexible to changes in a demanding market place while also ensuring quicker time-to-market and reduced support development costs. Contact us today to learn more about how a SOA-based approach will help you become the connected enterprise (or) how APIs can help open a whole new world of possibilities for your developers. 
</p>
<div class="jquery-script-ads" style="margin:30px auto;">
<script type="text/javascript"><!--
google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script> 
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> 

<script>
// $('.easy-sidebar-toggle').click(function(e) {
//     e.preventDefault();
//     $('body').toggleClass('toggled');
//     $('.nb.easy-sidebar').removeClass('toggled');
// });
// $('html').on('swiperight', function(){
//     $('body').addClass('toggled');
// });
// $('html').on('swipeleft', function(){
//     $('body').removeClass('toggled');
// });



 </script>
   <script> 
   /**
 * jquery.detectSwipe v2.1.1
 * jQuery Plugin to obtain touch gestures from iPhone, iPod Touch, iPad and Android
 * http://github.com/marcandre/detect_swipe
 * Based on touchwipe by Andreas Waltl, netCU Internetagentur (http://www.netcu.de)
 */
(function($) {

  $.detectSwipe = {
    version: '2.1.1',
    enabled: 'ontouchstart' in document.documentElement,
    preventDefault: false,
    threshold: -20
  };

  var startX,
    startY,
    isMoving = false;

  function onTouchEnd() {
    this.removeEventListener('touchmove', onTouchMove);
    this.removeEventListener('touchend', onTouchEnd);
    isMoving = false;
  }

  function onTouchMove(e) {
    if ($.detectSwipe.preventDefault) { e.preventDefault(); }
    if(isMoving) {
      var x = e.touches[0].pageX;
      var y = e.touches[0].pageY;
      var dx = startX - x;
      var dy = startY - y;
      var dir;
      if(Math.abs(dx) >= $.detectSwipe.threshold) {
        dir = dx > 0 ? 'left' : 'right'
      }
      else if(Math.abs(dy) >= $.detectSwipe.threshold) {
        dir = dy > 0 ? 'down' : 'up'
      }
      if(dir) {
        onTouchEnd.call(this);
        $(this).trigger('swipe', dir).trigger('swipe' + dir);
      }
    }
  }

  function onTouchStart(e) {
    if (e.touches.length == 1) {
      startX = e.touches[0].pageX;
      startY = e.touches[0].pageY;
      isMoving = true;
      this.addEventListener('touchmove', onTouchMove, false);
      this.addEventListener('touchend', onTouchEnd, false);
    }
  }

  function setup() {
    this.addEventListener && this.addEventListener('touchstart', onTouchStart, false);
  }

  function teardown() {
    this.removeEventListener('touchstart', onTouchStart);
  }

  $.event.special.swipe = { setup: setup };

  $.each(['left', 'up', 'down', 'right'], function () {
    $.event.special['swipe' + this] = { setup: function(){
      $(this).on('swipe', $.noop);
    } };
  });
})(jQuery);

   </script>                     
                  
                         
                      <br>
                        <br>
                    </div>
                    
                    <div class"col-xs-1"></div>
                </div>
            </div>
        </div>
        </div>
        <div class="footer-wrapper">
            <div class="footer">
                <?php include '../footer.php';?>
            </div>
        </div>
    
    </body>
</html>