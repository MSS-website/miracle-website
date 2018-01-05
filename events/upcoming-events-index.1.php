<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Upcoming Events | MSS</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/prettyPhoto.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/default.css" />
	<link rel="stylesheet" type="text/css" href="../css/component.css" />
	  
    
    <link rel="shortcut icon" href="../images/favicon.ico">
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
		<!-- Latest compiled and minified Bootstrap CSS -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,700">
		
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		
		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
		<title>Simple jQuery Accordion</title>

		<!-- Latest compiled and minified Bootstrap CSS -->
		<style>
		
* {
  margin: 0;
 
}



a:hover, a:focus {
  text-decoration: none;
  outline: 0 none;
}







/* accordion style */


.ac-pane { margin-bottom: 15px; background-color:#16A085; color:#fff;}

.ac-pane:last-child { margin-bottom: 0; }

.ac-content { display: none; }

.ac-title {
  border: 1px solid #fff;
  color: #fff;
  display: block;
  padding: 12px;
  background-color:#1ABC9C;
}

.ac-title i {
  float: right;
  font-size: 20px;
}

.ac-title i:before { content: "\f107"; }

.active .ac-title i:before { content: "\f106"; }

.ac-content {
  border: 1px solid #fff;
  margin-top: -1px;
  padding: 15px;
}

		</style>
		<script>
		/* jQuery pacordion plugin
|* by Muhammad Morshed
|* https://www.github.com/morshedx/pacordion
|* version: 1.0
|* Created: December 7, 2015
|* Enjoy.
|* 
|* Thanks,
|* Morshed */

$(function() {
	'use strict';
	
	var selector = $('.ac-title');

	$('.accordion-wrapper').each(function() {
		if ($(this).find('.ac-pane').hasClass('active')) {
			$('.ac-pane.active .ac-content').css('display', 'block');
		}
	});
	
	selector.on('click', function(event) {
		event.preventDefault();

		// get the attr value
		var attr = selector.attr('data-accordion');
		var getparent = $(this).closest('.accordion-wrapper');

		if ( $(this).attr('data-accordion') == 'true' ) {

		    if ($(this).next('.ac-content').is(':visible')) {
		    	return false;
		    }else {

		    	getparent.find('.ac-content').slideUp();
		    	$(this).next('.ac-content').slideDown();
		    	getparent.find('.ac-pane').removeClass('active');
		    	$(this).parent().addClass('active');
		    }

		} else {
		    $(this).next('.ac-content').slideToggle();
		    $(this).parent().toggleClass('active');
		}
		
	});
});
		</script>
    <style>
         @import url("http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,400italic");
    @import url("//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css");
   
    
    .event-list {
		list-style: none;
		font-family: 'Lato', sans-serif;
		margin: 0px;
		padding: 0px;
	}
	.event-list > li {
		background-color: rgb(255, 255, 255);
		box-shadow: 0px 0px 5px rgb(51, 51, 51);
		box-shadow: 0px 0px 5px rgba(51, 51, 51, 0.7);
		padding: 0px;
		margin: 0px 0px 20px;
	}
	.event-list > li > time {
		display: inline-block;
		width: 100%;
		color: rgb(255, 255, 255);
		background-color:#2368a0;
		padding: 5px;
		text-align: center;
		text-transform: uppercase;
	}
	.event-list > li:nth-child(even) > time {
		background-color: #00aae7;
	}
	.event-list > li > time > span {
		display: none;
	}
	.event-list > li > time > .day {
		display: block;
		font-size: 56pt;
		font-weight: 100;
		line-height: 1;
	}
	.event-list > li time > .month {
		display: block;
		font-size: 24pt;
		font-weight: 900;
		line-height: 1;
	}
	.event-list > li > img {
		width: 100%;
	}
	.event-list > li > .info {
		
		text-align: center;
	}
	.event-list > li > .info > .title {
		font-size: 17pt;
		font-weight: 700;
		margin: 0px;
	}
	.event-list > li > .info > .desc {
		font-size: 13pt;
		font-weight: 300;
		margin: 0px;
	}
	.event-list > li > .info > ul,
	.event-list > li > .social > ul {
		display: table;
		list-style: none;
		margin: 10px 0px 0px;
		padding: 0px;
		width: 100%;
		text-align: center;
	}
	.event-list > li > .social > ul {
		margin: 0px;
	}
	.event-list > li > .info > ul > li,
	.event-list > li > .social > ul > li {
		display: table-cell;
		cursor: pointer;
		color: rgb(30, 30, 30);
		font-size: 11pt;
		font-weight: 300;
        padding: 3px 0px;
	}
    .event-list > li > .info > ul > li > a {
		display: block;
		width: 100%;
		color: rgb(30, 30, 30);
		text-decoration: none;
	} 
    .event-list > li > .social > ul > li {    
        padding: 0px;
    }
    .event-list > li > .social > ul > li > a {
        padding: 3px 0px;
	} 
	.event-list > li > .info > ul > li:hover,
	.event-list > li > .social > ul > li:hover {
		color: rgb(30, 30, 30);
		background-color: rgb(200, 200, 200);
	}
	.facebook a,
	.twitter a,
	.google-plus a 
	.linkedin a{
		display: block;
		width: 100%;
		color: rgb(75, 110, 168) !important;
	}
	.twitter a {
		color: rgb(79, 213, 248) !important;
	}
	.google-plus a {
		color: rgb(221, 75, 57) !important;
	}
	.facebook:hover a {
		color: rgb(255, 255, 255) !important;
		background-color: rgb(75, 110, 168) !important;
	}
	.twitter:hover a {
		color: rgb(255, 255, 255) !important;
		background-color: rgb(79, 213, 248) !important;
	}
	.google-plus:hover a {
		color: rgb(255, 255, 255) !important;
		background-color: rgb(221, 75, 57) !important;
	}
.linkedin:hover a {
 	color: #fff !important;
		background-color: #0d416b !important;
	
}
	@media (min-width: 768px) {
	
		.event-list > li {
			position: relative;
			display: block;
			width: 100%;
		
			padding: 0px;
			height: 120px;
		}
		.event-list > li > time,
		.event-list > li > img  {
			display: inline-block;
		}
		.event-list > li > time,
		.event-list > li > img {
			width: 120px;
			float: left;
			height: 120px;
		
		}
		.event-list > li > .info {
			background-color: rgb(245, 245, 245);
			overflow: hidden;
		}
	
		.event-list > li > .info {
			position: relative;
			height: 120px;
			text-align: left;
			padding-right: 40px;
		}	
		.event-list > li > .info > .title, 
		.event-list > li > .info > .desc {
			padding: 0px 10px;
		}
		.event-list > li > .info > ul {
			position: absolute;
			left: 0px;
			bottom: 0px;
		}
		.event-list > li > .social {
			position: absolute;
			top: 0px;
			right: 0px;
			display: block;
			width: 40px;
		}
        .event-list > li > .social > ul {
            border-left: 1px solid rgb(230, 230, 230);
        }
		.event-list > li > .social > ul > li {			
			display: block;
            padding: 0px;
		}
		.event-list > li > .social > ul > li > a {
			display: block;
			width: 40px;
			padding: 10px 0px 9px;
		}
		.title{
			font-size:16px !important;
		}
	}
	
	h2 {
    font-size: 28px !important;
    color: #0d416b !important;
	}
    </style>
</head><!--/head-->
 <?php include '../header.php';?>
<body>
 <section id="portfolio" class="container">
        <br>
        <br>
        <br>
        <br>
       
        <div class="row">
          
          <div class="col-sm-7 text-left">
            <h1 class="heavy">Upcoming Events</h1>
          </div>
          <div class="col-sm-5 text-right">
            <ul class="breadcrumb pull-right">
                <li><a href="../">Home</a></li>
                <li><a href="../events/recent.php">Events</a></li>
                <li class="active">Upcoming Events</li>
            </ul>
          </div>
          
        </div>
        </section>
         <div class="container">
         	<br>
		<div class="row">
			<div class="col-sm-6">
				
				<!--	<li>
						<time datetime="2014-07-20">
						 <br>
							<span class="day">4</span>
							<span class="month">Jul</span>
							<span class="year">2014</span>
							<span class="time">ALL DAY</span>
						</time>
						<div class="info" style="background-color:#232527">
						 <br>
							<center><h2 class="title heavy"><font color="#ef4048">IBM Amplify '16 </font></h2></center>
						<strong><center><p class="desc"><font color="#ffffff">Tampa Convention Center, FL </font> </p></center>	</strong>
						</div>
						<div class="social">
							<ul>
								<li class="facebook" style="width:33%;"><a href="#fb-root"><span class="fa fa-facebook"></span></a>
							
<div class="fb-post" data-href="YOUR_URL_HERE"></div></li>
								<li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
								<li class="linkedin" style="width:33%;"><a href="#linkedin"><span class="fa fa-linkedin"></span></a></li>
								<li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
							</ul>
						</div>
					</li>

					<li>
						<time datetime="2014-07-20 0000">
						 <br>
							<span class="day">8</span>
							<span class="month">Jul</span>
							<span class="year">2014</span>
							<span class="time">12:00 AM</span>
						</time>
						<div class="info" style="background-color:#b7b2b3" >
							<center><h2 class="title heavy"><strong><font color="#2368a0">Why Context drives Experience for Enterprise Mobility </font></strong></h2></center>
							<strong><center><p class="desc"><font color="#ffffff">Online Webinar </font> </p><center></strong>
							
						</div>
						<div class="social">
							<ul>
								<li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
								<li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
								<li class="linkedin" style="width:33%;"><a href="#linkedin"><span class="fa fa-linkedin"></span></a></li>
								<li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
							</ul>
						</div>
					</li>
		--><ul class="event-list">
					<li>
						<time datetime="2014-07-20 2000">
						 
							<span class="day">21</span>
							<span class="month">Sep</span>
							<span class="year">2016</span>
							<span class="time">8:00 PM</span>
						</time>
						<div class="info">
													<center><h2 class="title heavy"><strong>IBM MQ Appliance Networking Event</strong> </h2></center>
								<strong><center><p class="desc">Meet us at Texas  </p>	</center></strong>
							
						</div>
						<div class="social">
							<ul>
								<li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
								<li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
								<li class="linkedin" style="width:33%;"><a href="#linkedin"><span class="fa fa-linkedin"></span></a></li>
							
							</ul>
						</div>
					</li>

					<li>
						<time datetime="2014-07-31 1600">
						 
						 
							<span class="day">22</span>
							<span class="month">Sep</span>
							<span class="year">2014</span>
							<span class="time">4:00 PM</span>
						</time>
						<div class="info">
							<center><h2 class="title heavy"><strong>Sales Enablement : Introducing Morpheus and its Offerings  </strong></h2></center>
							<strong><center><p class="desc">Online Webinar </p><center></strong>
								
						</div>
						<div class="social">
						<ul>
								<li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
								<li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
								<li class="linkedin" style="width:33%;"><a href="#linkedin"><span class="fa fa-linkedin"></span></a></li>
							
							</ul>
						</div>
					</li>
						<li>
						<time datetime="2014-07-31 1600">
						 
						 
							<span class="day">26</span>
							<span class="month">Sep</span>
							<span class="year">2014</span>
							<span class="time">4:00 PM</span>
						</time>
						<div class="info">
							<center><h2 class="title heavy"><strong> MQ Technical Conference v2.0.1.6 </strong></h2></center>
							<strong><center><p class="desc">Join Us at Ohio  </p><center></strong>
								
						</div>
						<div class="social">
						<ul>
								<li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
								<li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
								<li class="linkedin" style="width:33%;"><a href="#linkedin"><span class="fa fa-linkedin"></span></a></li>
								
							</ul>
						</div>
					</li>
						<li>
						<time datetime="2014-07-31 1600">
						 
						 
							<span class="day">6</span>
							<span class="month">Oct</span>
							<span class="year">2014</span>
							<span class="time">4:00 PM</span>
						</time>
						<div class="info">
							<center><h2 class="title heavy"><strong> Discover-Innovating  <br>with Speed and agility </strong></h2></center>
							<strong><center><p class="desc">Online Webinar </p><center></strong>
								
						</div>
						<div class="social">
						<ul>
								<li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
								<li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
								<li class="linkedin" style="width:33%;"><a href="#linkedin"><span class="fa fa-linkedin"></span></a></li>
							
							</ul>
						</div>
					</li>
						<li>
						<time datetime="2014-07-31 1600">
						 
						 
							<span class="day">31</span>
							<span class="month">Jan</span>
							<span class="year">2014</span>
							<span class="time">4:00 PM</span>
						</time>
						<div class="info">
							<center><h2 class="title heavy"><strong> Reporting Performance <br>with SAP HANA Models </strong></h2></center>
							<strong><center><p class="desc">Online Webinar </p><center></strong>
								
						</div>
						<div class="social">
						<ul>
								<li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
								<li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
								<li class="linkedin" style="width:33%;"><a href="#linkedin"><span class="fa fa-linkedin"></span></a></li>
								
							</ul>
						</div>
					</li>
				</ul>
			</div>
			<div class="col-sm-6">
		<ul class="event-list">
					<li>
						<time datetime="2014-07-20 2000">
						 
							<span class="day">22</span>
							<span class="month">Sep</span>
							<span class="year">2014</span>
							<span class="time">8:00 PM</span>
						</time>
						<div class="info">
													<center><h2 class="title heavy"><strong>Exploring Microservices, SOA  <br> and APIs - Friends (or) Foes? </strong> </h2></center>
								<strong><center><p class="desc">Online Webinar  </p>	</center></strong>
							
						</div>
						<div class="social">
							<ul>
								<li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
								<li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
								<li class="linkedin" style="width:33%;"><a href="#linkedin"><span class="fa fa-linkedin"></span></a></li>
							
							</ul>
						</div>
					</li>

					<li>
						<time datetime="2014-07-31 1600">
						 
						 
							<span class="day">26</span>
							<span class="month">Sep</span>
							<span class="year">2014</span>
							<span class="time">4:00 PM</span>
						</time>
						<div class="info">
							<center><h2 class="title heavy"><strong> Microsoft Ignite </strong></h2></center>
							<br><strong><center><p class="desc">Join us at Atlanta, GA </p><center></strong>
								
						</div>
						<div class="social">
						<ul>
								<li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
								<li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
								<li class="linkedin" style="width:33%;"><a href="#linkedin"><span class="fa fa-linkedin"></span></a></li>
							
							</ul>
						</div>
					</li>
						<li>
						<time datetime="2014-07-31 1600">
						 
						 
							<span class="day">29</span>
							<span class="month">Sep</span>
							<span class="year">2014</span>
							<span class="time">4:00 PM</span>
						</time>
						<div class="info">
							<center><h2 class="title heavy"><strong>Design-Automating Application Deployment for Hybrid Cloud Environments </strong></h2></center>
							<strong><center><p class="desc">Meet us at Detroit </p><center></strong>
								
						</div>
						<div class="social">
						<ul>
								<li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
								<li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
								<li class="linkedin" style="width:33%;"><a href="#linkedin"><span class="fa fa-linkedin"></span></a></li>
							
							</ul>
						</div>
					</li>
						<li>
						<time datetime="2014-07-31 1600">
						 
						 
							<span class="day">11</span>
							<span class="month">Oct</span>
							<span class="year">2014</span>
							<span class="time">4:00 PM</span>
						</time>
						<div class="info">
							<center><h2 class="title heavy"><strong> Design-Automating Application Deployment for Hybrid Cloud Environments </strong></h2></center>
							<strong><center><p class="desc">Meet us at Atlanta </p><center></strong>
								
						</div>
						<div class="social">
						<ul>
								<li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
								<li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
								<li class="linkedin" style="width:33%;"><a href="#linkedin"><span class="fa fa-linkedin"></span></a></li>
							
							</ul>
						</div>
					</li>
						<li>
						<time datetime="2014-07-31 1600">
						 
						 
							<span class="day">31</span>
							<span class="month">Jan</span>
							<span class="year">2014</span>
							<span class="time">4:00 PM</span>
						</time>
						<div class="info">
							<center><h2 class="title heavy"><strong> Reporting Performance <br>with SAP HANA Models </strong></h2></center>
							<strong><center><p class="desc">Online Webinar </p><center></strong>
								
						</div>
						<div class="social">
						<ul>
								<li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
								<li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
								<li class="linkedin" style="width:33%;"><a href="#linkedin"><span class="fa fa-linkedin"></span></a></li>
							
							</ul>
						</div>
					</li>
				</ul>

 
   <!--<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading" style = "background-color:#00aae7;" >
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
       <font color = "#ffffff">   Collapsible Group Item #1</font>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" style = "background-color:#2368a0;">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          <font color = "#ffffff">   Collapsible Group Item #2</font>
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" style ="background-color:#0d416b">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
          <font color = "#ffffff">   Collapsible Group Item #3</font>
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>
  -->
  

					</div>
		</div>
	</div>
    <style>
    	.panel-heading .accordion-toggle:after {
    /* symbol for "opening" panels */
    font-family: 'Glyphicons Halflings';  /* essential for enabling glyphicon */
    content: "\e114";    /* adjust as needed, taken from bootstrap.css */
    float: right;        /* adjust as needed */
    color: grey;         /* adjust as needed */
}
.panel-heading .accordion-toggle.collapsed:after {
    /* symbol for "collapsed" panels */
    content: "\e080";    /* adjust as needed, taken from bootstrap.css */
}

    </style>
   <?php include '../footer.php';?>
   <!--/#footer-->
   
   
</body>
</html>
