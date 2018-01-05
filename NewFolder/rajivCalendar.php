<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />
	<title>Miracle</title>

	<link href="../../css/bootstrap.min.css" rel="stylesheet">
      <link href="../../css/main.css" rel="stylesheet">
       <link rel="stylesheet" type="text/css" href="../../css/default.css" />
      <link rel="stylesheet" type="text/css" href="../../css/component.css" />
      <link rel="shortcut icon" href="../../images/favicon.ico">
       
 
   
    
	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />

	
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	
	<link rel="stylesheet" href="css/calendar.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- Document Title
	============================================= -->
	<title>Home - Events Layout | Canvas</title>

</head>
<style>
.entry-title h2{
	font-size:18px !important;
}
.fancy-title h3{
	color:#232527 !important;
}
.heading-block h3{
	color:#232527 !important;
}

		</style>
<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
	


		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

			

				<div class="section nobottommargin">
					<div class="container clearfix">

						<div class="heading-block center">
							<h3>Receive <span>regular</span> Event Updates</h3>
						</div>

						<div class="subscribe-widget">
							<div class="widget-subscribe-form-result"></div>
							<form id="widget-subscribe-form2" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
								<div class="input-group input-group-lg divcenter" style="max-width:600px;">
									<span class="input-group-addon"><i class="icon-email2"></i></span>
									<input type="email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
									<span class="input-group-btn">
										<button class="btn btn-default" type="submit">Subscribe Now</button>
									</span>
								</div>
							</form>
						</div>

					</div>
				</div>

				<div class="parallax bottommargin-lg dark" style="padding: 60px 0; background-image: url('images/parallax/calendar.jpg'); background-repeat: repeat-y; height: auto;" data-stellar-background-ratio="0.3">

					<div class="container clearfix">

						<div class="events-calendar">
							<div class="events-calendar-header clearfix">
					
								<h2 style="color:#ffffff!important;font-size:28px!important;margin-top:0px;">Events Calendar</h2>
							<h3 class="calendar-month-year" style="margin-top: -7px;">
									<span id="calendar-month" class="calendar-month"></span>
									<span id="calendar-year" class="calendar-year"></span>
									<nav>
										<span id="calendar-prev" class="calendar-prev"><i class="icon-chevron-left"></i></span>
										<span id="calendar-next" class="calendar-next"><i class="icon-chevron-right"></i></span>
										<span id="calendar-current" class="calendar-current" title="Got to current date"><i class="icon-reload"></i></span>
									</nav>
								</h3>
							</div>
							<div id="calendar" class="fc-calendar-container"></div>
						</div>


					</div>

				</div>

			

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
	
	<!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>
	<script type="text/javascript" src="js/jquery.calendario.js"></script>
	<script type="text/javascript" src="js/events-data.js"></script>
	
	

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>

	<script type="text/javascript">
		jQuery(document).ready( function($){
			var newDate = new Date(2016, 9, 31);
			$('#countdown-ex1').countdown({until: newDate});
		});

		var cal = $( '#calendar' ).calendario( {
			onDayClick : function( $el, $contentEl, dateProperties ) {

				for( var key in dateProperties ) {
					console.log( key + ' = ' + dateProperties[ key ] );
				}

			},
			caldata : canvasEvents
		} ),
		$month = $( '#calendar-month' ).html( cal.getMonthName() ),
		$year = $( '#calendar-year' ).html( cal.getYear() );

		$( '#calendar-next' ).on( 'click', function() {
			cal.gotoNextMonth( updateMonthYear );
		} );
		$( '#calendar-prev' ).on( 'click', function() {
			cal.gotoPreviousMonth( updateMonthYear );
		} );
		$( '#calendar-current' ).on( 'click', function() {
			cal.gotoNow( updateMonthYear );
		} );

		function updateMonthYear() {
			$month.html( cal.getMonthName() );
			$year.html( cal.getYear() );
		}

		$('#google-map4').gMap({
			 address: 'Australia',
			 maptype: 'ROADMAP',
			 zoom: 3,
			 markers: [
				{
					address: "Melbourne, Australia",
					html: "Melbourne, Australia"
				},
				{
					address: "Sydney, Australia",
					html: "Sydney, Australia"
				},
				{
					address: "Perth, Australia",
					html: "Perth, Australia"
				}
			 ],
			 doubleclickzoom: false,
			 controls: {
				 panControl: true,
				 zoomControl: true,
				 mapTypeControl: false,
				 scaleControl: false,
				 streetViewControl: false,
				 overviewMapControl: false
			 }
		});
	</script>
	 <?php include '../footer.php';?>
</body>
</html>