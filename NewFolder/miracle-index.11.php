
<!DOCTYPE html>
<html lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/swiper.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	
	<!---Miracle links----->
	   <link href="../css/bootstrap.min.css" rel="stylesheet">
       
        <link href="../css/main.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="../css/default.css" rel="stylesheet" type="text/css">
        <link href="../css/component.css" rel="stylesheet" type="text/css">
        <script src="../js/modernizr.custom.js"></script>
  	 <link rel="shortcut icon" href="../images/favicon.ico">
  
	<title>Home | Miracle</title>
<style>
.thumbnail {
  
 border: 1px solid #ffffff !important; 
  
}
/* carousel */
.media-carousel 
{
  margin-bottom: 0;
  padding: 0 40px 30px 40px;
  margin-top: 30px;
}
/* Previous button  */
.media-carousel .carousel-control.left 
{
  left: -12px;
  background-image: none;
  background: none repeat scroll 0 0 #222222;
 
  border-radius: 23px 23px 23px 23px;
  height: 40px;
  width : 40px;
  margin-top: 30px
}
/* Next button  */
.media-carousel .carousel-control.right 
{
  right: -12px !important;
  background-image: none;
  background: none repeat scroll 0 0 #222222;

  border-radius: 23px 23px 23px 23px;
  height: 40px;
  width : 40px;
  margin-top: 30px
}
/* Changes the position of the indicators */
.media-carousel .carousel-indicators 
{
  right: 50%;
  top: auto;
  bottom: 0px;
  margin-right: -19px;
}
/* Changes the colour of the indicators */
.media-carousel .carousel-indicators li 
{
  background: #c0c0c0;
}
.media-carousel .carousel-indicators .active 
{
  background: #333333;
}


/* End carousel */
	#header.full-header #logo {
   
    margin-left: 30px; }
   
    img.grayscale:hover {
    filter: none;
    -webkit-filter: grayscale(0%);
}
#top-cart {
    margin-right: 30px;
}
.slider-caption:not(.dark),
.slider-caption:not(.dark) ,h5 {
	color: #EEE !important;
	text-shadow: none;
}
h3{color:#232527 !important;}
h2 { font-size:40px !important; color:#232527 !important; }
.feature-box.media-box.fbox-bg .fbox-desc {
    padding: 10px;
    
   border:none;
    border-top: 0;
    border-radius:0;
    margin-bottom: 10px;
}
.feature-box.media-box .fbox-media, .feature-box.media-box .fbox-media a, .feature-box.media-box .fbox-media img {
    position: relative;
    display: block;
    width: 300px;
    height: 200px;
}
.topmargin-lg {
    margin-top: 80px !important;
}
.topmargin-lg1 {
    margin-top: 40px !important;
}
#bottom .wet-asphalt{
	background-color:#232527 !important;
}
.light{
	color:#EEEEEE !important;
}
.btn:hover, .btn:focus {
    color: #232527;
    text-decoration: none;
    background-color: #ffffff;
}
.mega-menu-content{
	width:50% !important;
	margin-left:45% !important;
}
.swiper-slide{
	background-color:rgba(0,0,0,0.5);
}
body{
	overflow-x:hidden;
}
.icon1:hover{
  transform: rotate(360deg);
   transition: 0.3s transform;
	}


.middle-block {
  width: 100%;
  height: 100%;
 background:url("images/city_sunny.jpg");
   background-repeat: no-repeat;
   
    background-position: center; 
  background-size: cover;
  	opacity: .9 !important;
  	
  	
  
}
.head{
	padding:31px 20px 20px 20px;
	margin-top:-35px !important;
	}
	#top-cart .top-cart-content {
   
    top: 31px !important;
  
}
	.middle-btn{
		margin-left:20px !important;
		}
		.bottommargin-lg{
			margin-bottom:27px !important;
			margin-top:-40px !important;
			}
		@import "compass/css3";

/*==========  Variables  ==========*/

$pg-bg:             #dcdcdc;
$rr-bg:             #232527;
$rr-bg-hover:       darken($rr-bg, 10%);

$rr-height:         200px;
$rr-slant:          100px;
$rr-gutter:         1%;
$rr-width:          50%;


/*==========  Styles  ==========*/

// Scaffolding


.rr > div { text-align: center; }

// Construct the rectangles
.rr {
	position: relative;
	height: $rr-height;
	background: $rr-bg;
	&.rr-left {
		z-index: 1;
		float: left;
		width: $rr-width + 5%; // + 5% adjustment for slant offset
	}
	
}

// Add slanted edges
.rr:after,
.rr:before {
	content: "";
	position: absolute;
	top: 0;
	width: 0;
	height: 0;
}
.rr-left:after {
	right: 0;
	border-left: $rr-slant solid $rr-bg;
	border-bottom: $rr-height solid $pg-bg;
}


// Add padding around inner content
.rr-left > div {
	margin-right: $rr-slant;
	margin-left: $rr-slant/2;
}


// Hover styles
.rr:hover { background: $rr-bg-hover; }
.rr-left:hover:after { border-left-color: $rr-bg-hover; }


.r1 div{
    position: relative;
  width: 70%;
  margin: 0;
  overflow: hidden;
  padding:10px;
 }
 
.left:after {
  content: '';
  position: absolute;
  width: 1100%; height: 1100%;
  top: 20px; right: -500%;
  background: rgba(0,170,231,0.7);
  transform-origin: 54% 0;
  transform: rotate(140deg);
  z-index: 1;
}
.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 1;
  transition: .5s ease;}
.text{
    z-index: 5;
  }
  #header.transparent-header + #slider,
  #header.transparent-header + #page-title.page-title-parallax,
  #header.transparent-header + #google-map, #slider + #header.transparent-header {
    top: -141px !important;
    margin-bottom: -100px !important;
}
#header, #header-wrap, #logo img {
    height: 62px !important;
}
.slide h2{
		text-transform: capitalize !important;
	
	}

</style>
</head>

<body class="stretched sticky-responsive-pagemenu">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
	<header id="header" class="transparent-header full-header page-section" data-sticky-class="not-dark">

			<div id="header-wrap">

				<div class=" clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.html" class="standard-logo" data-dark-logo="../NewFolder/miracle-logo.svg" width="150px" height="70px"><img src="../NewFolder/miracle-logo.svg" width="150px" height="70px"alt="Miracle Logo"></a>
						<a href="index.html" class="retina-logo" data-dark-logo="../NewFolder/miracle-logo.svg" width="150px" height="70px"><img src="../NewFolder/miracle-logo.svg" width="150px" height="70px" alt="Miracle Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" style="padding-top:5px;">

						<ul>
							
							<li class="mega-menu"><a href="#"><div>Company</div></a>
								<div class="mega-menu-content style-2 clearfix " style="width:100%">
									<ul class="mega-menu-column col-md-4">
									<li class="mega-menu-title"><a href="http://www.miraclesoft.com/company/"><div>About US</div></a>
											<ul>
												<li><a href="http://www.miraclesoft.com/company/about-us"><div>Company</div></a></li>
													<li><a href="http://www.miraclesoft.com/contact/locations"><div>Global Presence</div></a></li>
												<li><a href="http://www.miraclesoft.com/partnerships/"><div>Partnerships</div></a></li>
												<li><a href="http://www.miraclesoft.com/company/vision"><div>Vision 2020</div></a></li>
												<li><a href="http://www.miraclesoft.com/company/awards"><div>Awards & Certifications</div></a></li>
											
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-md-4">
										<li class="mega-menu-title"><a href="http://www.miraclesoft.com/why/"><div>Why Miracle</div></a>
											<ul>
												<li><a href="http://www.miraclesoft.com/why/global"><div>Global Delivery Model</div></a></li>
												<li><a href="http://www.miraclesoft.com/why/methodologies"><div>Our Methodologies</div></a></li>
												<li><a href="http://www.miraclesoft.com/library/index?flag=success"><div>Success Stories</div></a></li>
												<li><a href="http://www.miraclesoft.com/why/excellence"><div>CoE Ecosystem</div></a></li>
												<li><a href="http://www.miraclesoft.com/why/innovation"><div>Innovation Center</div></a></li>
												
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-md-4">
										<li class="mega-menu-title"><a href="http://www.miraclesoft.com/contact/"><div>Contact</div></a>
											<ul>
												<li><a href="http://www.miraclesoft.com/contact/"><div>Contact Us</div></a></li>
											
											<li><a href="http://www.miraclesoft.com/contact/verify"><div>Employee Verification</div></a></li>
												<li><a href="http://www.miraclesoft.com/contact/employee-referrals"><div>Employee Referral</div></a></li>
												<li><a href="http://www.miraclesoft.com/contact/suggestion-login"><div>Suggestion Box</div></a></li>
												
											</ul>
										</li>
									</ul>
									
								</div>
							</li>
							<li class="mega-menu"><a href="#"><div>Our Services</div></a>
								<div class="mega-menu-content style-2 clearfix">
									<ul class="mega-menu-column col-md-6">
										<li class="mega-menu-title"><a href="http://www.miraclesoft.com/services/"><div>Services</div></a>
											<ul>
												<li><a href="http://www.miraclesoft.com/services/application-services"><div>Application Services</div></a></li>
												<li><a href="http://www.miraclesoft.com/services/architecture-consulting"><div>Architecture and Consulting</div></a></li>
												<li><a href="http://www.miraclesoft.com/services/bpo"><div>BPO Services</div></a></li>
												<li><a href="http://www.miraclesoft.com/services/cloud-services"><div>Cloud Services</div></a></li>
												<li><a href="http://www.miraclesoft.com/services/infrastructure-services"><div>Infrastructure Services</div></a></li>
												<li><a href="http://www.miraclesoft.com/services/managed-services"><div>Managed Services</div></a></li>
												<li><a href="http://www.miraclesoft.com/services/project-management-offerings/"><div>Project Management Offerings</div></a></li>
												<li><a href="http://www.miraclesoft.com/services/recruitement-hcm"><div>RPO / HCM Services</div></a></li>
												<li><a href="http://www.miraclesoft.com/services/software-sales-renewals"><div>Software Sales and Renewals</div></a></li>
												<li><a href="http://www.miraclesoft.com/services/quality-assurance/"><div>Testing and QA Services</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-md-6">
										<li class="mega-menu-title"><a href="http://www.miraclesoft.com/technologies/"><div>Technologies</div></a>
											<ul>
												<li><a href="http://www.miraclesoft.com/technologies/api/"><div>API Management</div></a></li>
												<li><a href="http://www.miraclesoft.com/technologies/big-data-cloud-mobile"><div>Big Data, Cloud and Mobile</div></a></li>
												<li><a href="http://www.miraclesoft.com/technologies/business-process-management"><div>Business Process Management</div></a></li>
												<li><a href="http://www.miraclesoft.com/technologies/data-analytics"><div>Data, ETL and Analytics</div></a></li>
												<li><a href="http://www.miraclesoft.com/technologies/digital-experience-commerence"><div>Digital Experience</div></a></li>
												<li><a href="http://www.miraclesoft.com/technologies/b2b/"><div>File Transfer and B2B/EDI</div></a></li>
								             	<li><a href="http://www.miraclesoft.com/partnerships/microsoft/"><div>Microsoft Technology</div></a></li>
								             <li><a href="http://www.miraclesoft.com/technologies/oracle-middleware"><div>Oracle Middleware</div></a></li>
								            <li><a href="http://www.miraclesoft.com/technologies/sap-services"><div>SAP Services</div></a></li>
								           <li><a href="http://www.miraclesoft.com/technologies/application-integration"><div>SOA, Connectivity and Middleware</div></a></li>
								           
								             													
											</ul>
										</li>
									</ul>
								<!--	<ul class="mega-menu-column col-md-4">
										<li class="mega-menu-title"><a href="http://www.miraclesoft.com/industries/"><div>Industries</div></a>
											<ul>
												<li><a href="http://www.miraclesoft.com/industries/utilities"><div>Energy and Utilities</div></a></li>
												<li><a href="http://www.miraclesoft.com/industries/finance"><div>Finance and Insurance</div></a></li>
												<li><a href="http://www.miraclesoft.com/industries/healthcare"><div>Healthcare Industry</div></a></li>
												<li><a href="http://www.miraclesoft.com/industries/logistics"><div>Logistics Industry</div></a></li>
												<li><a href="http://www.miraclesoft.com/industries/manufacturing"><div>Manufacturing Industry</div></a></li>
												<li><a href="http://www.miraclesoft.com/industries/retail"><div>Retail Industry</div></a></li>
											</ul>
										</li>
									</ul>-->
									
									
								</div>
							</li>
								<li class="mega-menu"><a href="http://www.miraclesoft.com/library/"><div>Library</div></a></li>
							<li class="mega-menu"><a href="http://www.miraclesoft.com/careers/"><div>Careers</div></a>
								<div class="mega-menu-content style-2 clearfix">
									<ul class="mega-menu-column col-md-4">
										<li class="mega-menu-title"><a href="#"><div>careers</div></a>
											<ul>
												<li><a href="http://www.miraclesoft.com/careers/benefits-india"><div>Careers in India</div></a></li>
												<li><a href="http://www.miraclesoft.com/careers/benefits-us"><div>Careers in USA</div></a></li>
												<li><a href="http://www.miraclesoft.com/careers/life-at-miracle"><div>Life at Miracle</div></a></li>
												<li><a href="http://www.miraclesoft.com/careers/open-positions"><div>Open Positions</div></a></li>
												
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-md-4">
										<li class="mega-menu-title"><a href="http://www.miraclesoft.com/careers/fresher-oppurtunity"><div>Fresher's</div></a>
											<ul>
												<li><a href="http://www.miraclesoft.com/careers/career-growth"><div>Career Growth Plan</div></a></li>
												<li><a href="http://www.miraclesoft.com/careers/faq"><div>Frequently Asked Questions</div></a></li>
												<li><a href="http://www.miraclesoft.com/careers/job-fairs-drives"><div>Job Fairs and Drives</div></a></li>
												<li><a href="http://www.miraclesoft.com/careers/fresher-oppurtunity"><div>Opportunities</div></a></li>
																				
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-md-4">
										<li class="mega-menu-title"><a href="http://www.miraclesoft.com/careers/mile"><div>Programs</div></a>
											<ul>
												<li><a href="http://www.miraclesoft.com/careers/itg"><div>IT Gurukulam</div></a></li>
												<li><a href="http://www.miraclesoft.com/careers/mile"><div>MILE - Leadership Institute</div></a></li>
												<li><a href="http://www.miraclesoft.com/careers/refresh-america"><div>Refresh America</div></a></li>
												
											</ul>
										</li>
									</ul>
									
									
								</div>
							</li>
								<li class="mega-menu sub-menu"><a href="http://www.miraclesoft.com/events/"><div>Events</div></a>
								<ul class="sub-menu" style="margin-left:1100px !important;">
								<li><a href="http://www.miraclesoft.com/events/"><div>upcoming Events</div></a></li>
								<li><a href="http://www.miraclesoft.com/events/recent"><div>Recent Events</div></a></li>
								<li><a href="http://www.miraclesoft.com/gallery/"><div>Gallery</div></a></li>
								</ul>
						    </li>
							<!--	<div class="mega-menu-content style-2 clearfix">
									<ul class="mega-menu-column col-md-4">
										<li class="mega-menu-title"><a href="#"><div></div></a>
											<ul>
												
												<li><center><a href="http://www.miraclesoft.com/events/"><div>upcoming Events</div></a></center></li>
												<center><a href="http://www.miraclesoft.com/events/"><img src="images/others/upcoming-events.png" alt="Upcoming Events" class="img-responsive"></a></center>
										
							                      </ul>
							                      
							                      </li>
							                      </ul>
							                      <ul class="mega-menu-column col-md-4">
										<li class="mega-menu-title"><a href="#"><div></div></a>
											<ul>
												
												<li><center><a href="http://www.miraclesoft.com/events/recent"><div>Recent Events</div></a></center></li>
													<center><a href="http://www.miraclesoft.com/events/recent"><img src="images/others/recent-events.png" alt="Recent Events" class="img-responsive"></a></center>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-md-4">
										<li class="mega-menu-title"><a href="#"><div></div></a>
											<ul>
												<li><center><a href="http://www.miraclesoft.com/gallery/"><div>Gallery</div></a></center></li>
												<center><a href="http://www.miraclesoft.com/gallery/"><img src="images/others/gallery.png" alt="Gallery" class="img-responsive"></a></center>
											</ul>
										</li>
									</ul>
							                      </div>-->
							                      </li>
							               
					                       	</ul>

						<!-- Top Cart
						============================================= -->
					
						<div id="top-cart" style="margin-left:20px;">
						<div class="head">
							<a href="#" id="top-cart-trigger"><i class="fa fa-user"></i></a>
							</div>
							<div class="top-cart-content">
								<div class="top-cart-title">
									<h4>Sign In</h4>
								</div>
								<div class="top-cart-items">
									<div class="top-cart-item clearfix">
										<div class="signin-input">
									<label for="template-contactform-email">Username </label>
									<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
								</div>
								
								<div class="signin-input">
									<label for="template-contactform-phone">Password</label>
									<input type="password" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
								</div>
								
									</div>
								<div class="col_full">
								<br>	<button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d nomargin signin-input">Submit</button> <br>
								</div>
								</div>
								<div>
									
								</div>
								
							</div>
						</div>
					
						<!-- #top-cart end -->
						<!-- Top Search
						============================================= -->
						

					</nav><!-- #primary-menu end -->
				</div>
			</div>
		</header><!-- #header end -->

		<section id="slider" data-loop="true" class="slider-parallax full-screen force-full-screen with-header swiper_wrapper page-section clearfix slider-parallax-visible" data-ride="carousel" >

			<div class="" style="transform: translateY(0px);">

				<div class="swiper-container swiper-parent swiper-container-horizontal" style="cursor: -webkit-grab;">
					<div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
						<div class="swiper-slide dark swiper-slide-active" style="background-image: url(../images/carousel/summint.png); height: 494px; width: 1263px;">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center" style="transform: translateY(0px); opacity: 1; top: 164px;">
									<h2 data-caption-animate="fadeInUp" class="fadeInUp animated">ASUG Michigan Chapter Meeting</h2>
									<p data-caption-animate="fadeInUp" data-caption-delay="200" class="fadeInUp animated">October 27 , 2017 | Livonia, MI</p>
									<center><a href="https://www.asug.com/events/asug-michigan-chapter-meeting-fall-2017"><button type="button" class="btn btn-transparent btn-lg">Register</button></a></center>
								</div>
							</div>
						</div>
					
							<div class="swiper-slide dark swiper-slide-active" style="background-image: url(../images/carousel/parallelox1.png); height: 494px; width: 1263px;background-size:cover;">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center" style="transform: translateY(0px); opacity: 1; top: 164px;">
									<h2 data-caption-animate="fadeInUp" class="not-animated">Online Webinar<br><span style="font-size:28px !important; color:#ffffff !important;">Agile Development Strategies to Sterling Integrator with IBM Urbancode Deploy and Docker Containers</span></h2>
									<p data-caption-animate="fadeInUp" data-caption-delay="200" class="not-animated">November 01 , 2017 | Technical Webinar</p>
										<center><a href="http://www.miraclesoft.com/webinars/agile-development-strategies-to-sterling-integrator-ibm-urbancode-deploy-docker-containers"><button type="button" class="btn btn-transparent btn-lg">Register</button></a></center>
								</div>
							</div>
							</div>
					
					
						<div class="swiper-slide" style="background-image: url(images/miracle/partnership.png); background-position: center top; height: 494px; width: 1263px;background-color: rgba(0, 170, 231, 0.32);">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center" style="transform: translateY(0px); opacity: 0.4; top: 127px;">
									<h2 data-caption-animate="fadeInUp" class="not-animated">Digital Library<br><span style="font-size:28px !important; color:#ffffff !important;">DataStage and UNIX Platform Migration for a Leading Financial Enterprise</span></h2>
									<p data-caption-animate="fadeInUp" data-caption-delay="200" class="not-animated"><font>October 24 , 2017 | Case Study</font></p>
									<center><a href="http://www.miraclesoft.com/library/CaseStudy/datastage-unix-platform-migration-leading-financial-enterprise.php"><button type="button" class="btn btn-transparent btn-lg" >Check Now</button></a></center>
								</div>
							</div>
						</div>
					<div class="swiper-slide" style="background-image: url(images/miracle/c1.png); background-position: center top; height: 494px; width: 1263px;background-color: rgba(0, 170, 231, 0.32);">
							<div class="container clearfix">
					<!--<iframe src="https://player.vimeo.com/video/168188924" width="1263px" height=" 494px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen style="margin-top:190px;"></iframe>-->
							<div class="row">
							<div class="col-sm-6">
								<div class="slider-caption slider-caption-center slide" style="transform: translateY(0px); opacity: 0.4; top: 127px;">
									<h2 data-caption-animate="fadeInUp" class="not-animated">Video Series<br><span style="font-size:28px !important; color:#ffffff !important;text-transform:uppercase !important;">Building a Health Check Bot for Skype with Microsoft Bot Framework </span></h2>
								
								</div>
							</div>
							<div class="col-sm-6 yvideo">
							
							<iframe width="560" height="290" src="https://www.youtube.com/embed/uxYsfTHc3CU" frameborder="0" allowfullscreen style="margin-top:320px;"> </iframe>
							</div>
							
								</div>
									</div>
						</div>
					</div>
					<div id="slider-arrow-left" class="swiper-button-disabled" style="opacity: 1;"><i class="icon-angle-left"></i></div>
					<div id="slider-arrow-right" style="opacity: 1;"><i class="icon-angle-right"></i></div>
					<div id="slide-number"><div id="slide-number-current">1</div><span>/</span><div id="slide-number-total"></div></div>
					<a href="#" data-scrollto="#section-about" class="one-page-arrow dark">
						<i class="icon-angle-down infinite animated fadeInDown"></i>
					</a>
				</div>

			</div>

		</section>

		<!-- Page Sub Menu
		============================================= -->
		<div id="page-menu">

			<div id="page-menu-wrap">

				<div class="container clearfix">

					<div class="menu-title">Explore <span>Miracle</span></div>

					<nav class="one-page-menu">
						<ul>
						
							<li><a href="#" data-href="#section-about"><div>About</div></a></li>
						
						<!--	<li><a href="#" data-href="#section-services"><div>Services</div></a></li>
						
							<li><a href="#" data-href="#section-events"><div>Events</div></a></li> -->
								<li><a href="#" data-href="#section-numbers"><div>Numbers</div></a></li>
							<li><a href="#" data-href="#section-why" class="no-offset"><div>Why Us?</div></a></li>
							<li><a href="#" data-href="#section-positions" class="no-offset"><div>Life at Miracle</div></a></li>
						<!---	<li><a href="#" data-href="#section-contact"><div>Contact</div></a></li> --->
								<li class=""><a href="#" data-href="#oc-clients-full"><div>Partnerships</div></a></li>
						</ul>
					</nav>

					<div id="page-submenu-trigger"><i class="icon-reorder"></i></div>

				</div>

			</div>

		</div><!-- #page-menu end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<section id="section-about" class="page-section">

					<div class="container ">

						<div class="heading-block center">
							<h2>We are <span>Miracle</span></h2>
						<!--	<span>One of the most Versatile Theme on Themeforest</span>-->
						</div>
<br>
						<div class="col_one_third ">
							<div class="feature-box media-box">
								<div class="fbox-media">
									<img src="images/services/1.jpg" alt="Why choose Us?">
								</div>
								<div class="fbox-desc">
									<h3>Thought Leadership<!--<span class="subtitle">Because we are Reliable.</span>--></h3>
									<p>At Miracle we believe in execution at the speed of thought along with the power of leadership which helps us drive forward</p>
								</div>
							</div>
						</div>

					 	<div class="col_one_third ">
							<div class="feature-box media-box">
								<div class="fbox-media">
									<img src="images/services/2.jpg" alt="Why choose Us?">
								</div>
								<div class="fbox-desc">
									<h3>Industry Expertise<!--<span class="subtitle">To Redefine your Brand.</span>--></h3>
									<p>Nobody knows the IT landscape and Industry verticals as we do at Miracle and this helps us to understand your problems much better</p>
								</div>
							</div>
						</div>

						<div class="col_one_third  col_last">
							<div class="feature-box media-box">
								<div class="fbox-media">
									<img src="images/services/3.jpg" alt="Why choose Us?">
								</div>
								<div class="fbox-desc">
									<h3>Technical Excellence<!--<span class="subtitle">Make our Customers Happy.</span>--></h3>
									<p>Miracle's core strength is its Technical Excellence which helps us to give our customers the highest possible business value</p>
								</div>
							</div>
						</div>
					</div>
					</section>
					<!--	<div class="section parallax" style="background-image: url('../images/carousel/ibm4.png');  padding: 0px 0px 12px 0px; background-attachment:fixed;background-position:center;background-size:cover;" data-stellar-background-ratio="0.3">
						<div class=" center ">
							<h2><font color="#ffffff">"SAPPHIRE ASUG ANNUAL CONFERENCE"  <br>March 16th-18th</font></h2>
							<center><a href="http://events.sap.com/sapandasug/en/home"><button type="button" class="btn btn-transparent btn-lg" >Register</button></a></center>
						</div>
					</div>-->
				<div class="row" id="section-numbers">

					<div class="col-md-3 col-sm-6 dark center col-padding" style="background-color:#00aae7; height: 326px;">
						<div>
							<i class="i-plain i-xlarge divcenter fa fa-handshake-o"></i>
							<div class="counter counter-lined light"><span data-from="1" data-to="27" data-refresh-interval="50" data-speed="2000">27</span></div>
							<h5>Technical Partners</h5>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #2368a0; height: 326px;">
						<div>
						
							<i class="i-plain i-xlarge divcenter fa fa-group"></i>
							
							<div class="counter counter-lined light"><span data-from="1" data-to="2520" data-refresh-interval="100" data-speed="2500">2520</span></div>
							<h5>Dynamic Employee</h5>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 dark center col-padding" style="background-color:#0d416b; height: 326px;">
						<div>
							<i class="i-plain i-xlarge divcenter fa fa-smile-o"></i>
							<div class="counter counter-lined light"><span data-from="60"  data-to="250" data-refresh-interval="30" data-speed="2700" >250</span><i class="fa fa-plus" style="font-size:25px;"></i></div>
							<h5>Happy Clients</h5>
						
						</div>
					</div>

					<div class="col-md-3 col-sm-6 dark center col-padding" style="background-color:#8c8c8c; height: 326px;">
						<div>
							<i class="i-plain i-xlarge divcenter fa fa-globe"></i>
							<div class="counter counter-lined light"><span data-from="1" data-to="11" data-refresh-interval="25" data-speed="3500">11</span></div>
							<h5>Global Locations</h5>
						</div>
					</div>

				</div>
				
				<section class="page-section" id="section-why">
					<div class="heading-block center">
						<h2>Why <span> Us?</span></h2>
					
					</div> 	<br>
				<div class="row clearfix  common-height ">

					<div class="col-md-4 dark col-padding ohidden" style="background-color: rgb(26, 188, 156); height: 381px;padding: 40px;">
						<div>
							<h3 class="uppercase light" style="font-weight: 600;">Why choose Us</h3>
							<p class="light" style="line-height: 1.8;">Transform, agency working families thinkers who make change happen communities. Developing nations legal aid public sector our ambitions future aid The Elders economic security Rosa.</p>
							<a href="#" class="button button-border button-light button-rounded uppercase nomargin">Read More</a>
							<i class="icon-bulb bgicon"></i>
						</div>
					</div>

					<div class="col-md-4 dark col-padding ohidden" style="background-color: rgb(52, 73, 94); height: 381px;padding: 40px;">
						<div>
							<h3 class="uppercase light" style="font-weight: 600;">Our Mission</h3>
							<p class="light" style="line-height: 1.8;">Frontline respond, visionary collaborative cities advancement overcome injustice, UNHCR public-private partnerships cause. Giving, country educate rights-based approach; leverage disrupt solution.</p>
							<a href="#" class="button button-border button-light button-rounded uppercase nomargin">Read More</a>
							<i class="icon-cog bgicon"></i>
						</div>
					</div>

					<div class="col-md-4 dark col-padding ohidden" style="background-color: rgb(231, 76, 60); height: 381px;padding: 40px;">
						<div>
							<h3 class="uppercase light" style="font-weight: 600;">What you get</h3>
							<p class="light" style="line-height: 1.8;">Sustainability involvement fundraising campaign connect carbon rights, collaborative cities convener truth. Synthesize change lives treatment fluctuation participatory monitoring underprivileged equal.</p>
							<a href="#" class="button button-border button-light button-rounded uppercase nomargin">Read More</a>
							<i class="icon-thumbs-up bgicon"></i>
						</div>
					</div>

				
			</section>
		    
		<section id="section-positions" class="page-section topmargin-lg">

					<div class="heading-block center bottommargin-lg" style="position:relative;top:-7px !important;">
					    
						<h2>Life at <span> Miracle</span></h2>
						<!--<span>Life at miracle</span>-->
					</div>
					<div class="fluid-container">
					   <div class="col-sm-12" id="paralex">
					   <div class="container">
					     <div class="col-sm-6" style="border-radius:5px;padding:25px;font-size:29px;color:#232527;background-color:rgba(255,255,255,0.9)">
					        At Miracle we provide a solid foundation for young learners to build their careers and shape 
					        their future. Being a tech savvy company, our encouraging and energetic environment helps young talent to blossom and grow. 
					        Join us today to make your mark on the IT field with new disruptive innovations.
					     </div>
					   </div>
					</div>
					
				</div>
				<div class="clear"></div>
		   </section>
				 

			<div class="heading-block center" id="oc-clients-full" >

						<h2>Our <span>Partners</span></h2> 
					
					</div>		<br> 
				<br>
						
					<div class="container">
					
						<div class="row">
					<div class="col-sm-6">
					
					<div class="row">
					<div class="col-sm-4">
					<img src="images/logos/oracle-gold-partner-mark-light-Converted.jpg" class="img-responsive"></img>
					</div>
					<div class=" col-sm-8">
					<p class="methodText greyText">We have a strong relationship with the technology giant, Oracle and it possess many Oracle Certified Consultants who can improve customer’s business value</p>
					</div>
					</div>
					</div>
					<div class=" col-sm-6 ">
					<div class="row">
					<div class="col-sm-4">
					<img src="images/logos/MS-Gold-Competency_TransprentLogo.png" class="img-responsive"></img>
					</div>
					<div class="col-sm-8">
					<p class="methodText greyText">Microsoft's ambitions are anything but small, and they are venturing into the world of Enterprise Software. With Microsoft, we deliver application development solutions to our customers.</p>
					</div>
					</div>
					</div>
					</div>
					
					<div class="row">
					<div class=" col-sm-6 ">
					
					<div class="row">
					<div class="col-sm-4">
					<img src="images/logos/ibm-premier-business-partner-mark.png" class="img-responsive"></img>
					</div>
					<div class=" col-sm-8">
					<p class="methodText greyText">As a Consulting Partner with Amazon Web Services, our teams enable customers easily migrate or set up their cloud initiatives .Since forming a strategic alliance with IBM in 2002.</p>
					</div>
					</div>
					</div>
					<div class=" col-sm-6 ">
					<div class="row">
					<div class="col-sm-4">
					<img src="images/logos/sap-partner-mark.jpg" class="img-responsive"></img>
					</div>
					<div class="col-sm-8">
					<p class="methodText greyText">Having formed, the National Implementation and Development Partnership in 1997 with SAP, the leader in enterprise applications, we deliver innovative solutions to our customers.</p>
					</div>
					</div>
					</div>
					</div>
					
					
					
					
					
					
					</div>









		
				
 
			
				

			</div>

		</section><!-- #content end -->

			
				<section class="page-section" id="section-why">
					<div class="heading-block center">
						<h2>Why <span> Us?</span></h2>
					
					</div> 	<br>
				<div class="row clearfix  common-height ">

					<div class="col-md-4 dark col-padding ohidden" style="margin-bottom:0 !important;background-color: rgb(26, 188, 156); height: 381px;padding: 40px;">
						<div>
							<h3 class="uppercase light" style="font-weight: 600;">Why choose Us</h3>
							<p class="light" style="line-height: 1.8;">Transform, agency working families thinkers who make change happen communities. Developing nations legal aid public sector our ambitions future aid The Elders economic security Rosa.</p>
							<a href="#" class="button button-border button-light button-rounded uppercase nomargin">Read More</a>
							<i class="icon-bulb bgicon"></i>
						</div>
					</div>

					<div class="col-md-4 dark col-padding ohidden" style="margin-bottom:0 !important;background-color: rgb(52, 73, 94); height: 381px;padding: 40px;">
						<div>
							<h3 class="uppercase light" style="font-weight: 600;">Our Mission</h3>
							<p class="light" style="line-height: 1.8;">Frontline respond, visionary collaborative cities advancement overcome injustice, UNHCR public-private partnerships cause. Giving, country educate rights-based approach; leverage disrupt solution.</p>
							<a href="#" class="button button-border button-light button-rounded uppercase nomargin">Read More</a>
							<i class="icon-cog bgicon"></i>
						</div>
					</div>

					<div class="col-md-4 dark col-padding ohidden" style="margin-bottom:0 !important;background-color: rgb(231, 76, 60); height: 381px;padding: 40px;">
						<div>
							<h3 class="uppercase light" style="font-weight: 600;">What you get</h3>
							<p class="light" style="line-height: 1.8;">Sustainability involvement fundraising campaign connect carbon rights, collaborative cities convener truth. Synthesize change lives treatment fluctuation participatory monitoring underprivileged equal.</p>
							<a href="#" class="button button-border button-light button-rounded uppercase nomargin">Read More</a>
							<i class="icon-thumbs-up bgicon"></i>
						</div>
					</div>

				
			</section>
		    
		<section class="row" style="background-color:#00aae7;">
 <div class="col-sm-6" style="text-align:center;padding-top: 25%;padding-left: 15%;">
 	<div class="col-sm-3"><img class="img-responsive" src="/NewFolder/images/chat-bot4.png" onclick="showImg()"/></div>
 	<div class="col-sm-3"><img class="img-responsive" src="/NewFolder/images/chat-bot2.png" onclick="showImg1()"/></div>
 	<div class="col-sm-3"><img class="img-responsive" src="/NewFolder/images/chat-bot1.png" onclick="showImg2()"/></div>
 		<div class="col-sm-3"><img class="img-responsive" src="/NewFolder/images/chat-bot3.png" onclick="showImg3()"/></div>
 </div>
 <div class="col-sm-6">
 <img id="image01" class="img-responsive show" src="/NewFolder/images/chat.gif" alt="chat" style="margin-left:175px;"> <!-- end container -->
 <img id="image02" class="img-responsive hide" src="/NewFolder/images/blue-bg.gif" alt="chat" style="margin-left:175px;"> <!-- end container -->
 <img id="image03" class="img-responsive hide" src="/NewFolder/images/chat.1.gif" alt="chat" style="margin-left:175px;"> <!-- end container -->
 <img id="image04" class="img-responsive hide" src="/NewFolder/images/blue-bg.1.gif" alt="chat" style="margin-left:175px;"> <!-- end container -->

 </div>
			
		   </section>
				 
			<div class="heading-block center" id="oc-clients-full" >

						<h2>Our <span>Partners</span></h2> 
					
					</div>		<br> 
				<br>
						
					<div class="container">
					
						<div class="row">
					<div class="col-sm-6">
					
					<div class="row">
					<div class="col-sm-4">
					<img src="images/logos/oracle-gold-partner-mark-light-Converted.jpg" class="img-responsive"></img>
					</div>
					<div class=" col-sm-8">
					<p class="methodText greyText">We have a strong relationship with the technology giant, Oracle and it possess many Oracle Certified Consultants who can improve customer’s business value</p>
					</div>
					</div>
					</div>
					<div class=" col-sm-6 ">
					<div class="row">
					<div class="col-sm-4">
					<img src="images/logos/MS-Gold-Competency_TransprentLogo.png" class="img-responsive"></img>
					</div>
					<div class="col-sm-8">
					<p class="methodText greyText">Microsoft's ambitions are anything but small, and they are venturing into the world of Enterprise Software. With Microsoft, we deliver application development solutions to our customers.</p>
					</div>
					</div>
					</div>
					</div>
					
					<div class="row">
					<div class=" col-sm-6 ">
					
					<div class="row">
					<div class="col-sm-4">
					<img src="images/logos/ibm-premier-business-partner-mark.png" class="img-responsive"></img>
					</div>
					<div class=" col-sm-8">
					<p class="methodText greyText">As a Consulting Partner with Amazon Web Services, our teams enable customers easily migrate or set up their cloud initiatives .Since forming a strategic alliance with IBM in 2002.</p>
					</div>
					</div>
					</div>
					<div class=" col-sm-6 ">
					<div class="row">
					<div class="col-sm-4">
					<img src="images/logos/sap-partner-mark.jpg" class="img-responsive"></img>
					</div>
					<div class="col-sm-8">
					<p class="methodText greyText">Having formed, the National Implementation and Development Partnership in 1997 with SAP, the leader in enterprise applications, we deliver innovative solutions to our customers.</p>
					</div>
					</div>
					</div>
					</div>
					
					
					
					
					
					
					</div>

			</div>

		</section><!-- #content end -->

	

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
<!---	<div id="gotoTop" class="icon-angle-up"></div> --->

	<!-- External JavaScripts
	============================================= -->
	<script>
	$(document).ready(function () {
            $('#media').carousel({
                pause: true,
                interval: 1000,
            });
        });
	</script>
	
	<script type="text/javascript">
function showImg()
{
	var obj=document.getElementById('image01');
	var obj1=document.getElementById('image02');
	var obj2=document.getElementById('image03');
	var obj3=document.getElementById('image04');
obj.className = 'show';
obj1.className = 'hide';
obj2.className = 'hide';
obj3.className = 'hide';
}
function showImg1()
{
var obj=document.getElementById('image01');
var obj1=document.getElementById('image02');
var obj2=document.getElementById('image03');
	var obj3=document.getElementById('image04');
obj1.className = 'show';
obj.className = 'hide';
obj3.className = 'hide';
obj2.className = 'hide';

}
function showImg2()
{
	var obj=document.getElementById('image01');
	var obj1=document.getElementById('image02');
var obj2=document.getElementById('image03');
	var obj3=document.getElementById('image04');
obj2.className = 'show';
obj1.className = 'hide';
obj.className = 'hide';
obj3.className = 'hide';
}
function showImg3()
{
	var obj=document.getElementById('image01');
	var obj1=document.getElementById('image02');
	var obj2=document.getElementById('image03');
	var obj3=document.getElementById('image04');
	obj3.className = 'show';
	obj1.className = 'hide';
	obj2.className = 'hide';
	obj.className = 'hide';
}
</script>
	<style class="cp-pen-styles">@import url(https://fonts.googleapis.com/css?family=Lato:400,700);
*, *:before, *:after {box-sizing: border-box;}

.people-list {
  width: 260px;
  float: left;
}
.people-list .search {
  padding: 20px;
}
.people-list input {
  border-radius: 3px;
  border: none;
  padding: 14px;
  color: white;
  background: #6A6C75;
  width: 90%;
  font-size: 14px;
}
.people-list .fa-search {
  position: relative;
  left: -25px;
}
.people-list ul {
  padding: 20px;
  height: 760px;
}
.people-list ul li {
  padding-bottom: 20px;
}
.people-list img {
  float: left;
}
.people-list .about {
  float: left;
  margin-top: 8px;
}
.people-list .about {
  padding-left: 8px;
}
.people-list .status {
  color: #92959E;
}

.chat {
  width: 490px;
  float: left;
  background: #F2F5F8;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
  color: #434651;
}
.chat .chat-header {
  padding: 20px;
  border-bottom: 2px solid white;
}
.chat .chat-header img {
  float: left;
}
.chat .chat-header .chat-about {
  float: left;
  padding-left: 10px;
  margin-top: 6px;
}
.chat .chat-header .chat-with {
  font-weight: bold;
  font-size: 16px;
}
.chat .chat-header .chat-num-messages {
  color: #92959E;
}
.chat .chat-header .fa-star {
  float: right;
  color: #D8DADF;
  font-size: 20px;
  margin-top: 12px;
}
.chat .chat-history {
  padding: 30px 30px 20px;
  border-bottom: 2px solid white;
  overflow-y: scroll;
  height: 575px;
}
.chat .chat-history .message-data {
  margin-bottom: 15px;
}
.chat .chat-history .message-data-time {
  color: #a8aab1;
  padding-left: 6px;
}
.chat .chat-history .message {
  color: white;
  padding: 18px 20px;
  line-height: 26px;
  font-size: 16px;
  border-radius: 7px;
  margin-bottom: 30px;
  width: 90%;
  position: relative;
}
.chat .chat-history .message:after {
  bottom: 100%;
  left: 7%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
  border-bottom-color: #86BB71;
  border-width: 10px;
  margin-left: -10px;
}
.chat .chat-history .my-message {
  background: #86BB71;
}
.chat .chat-history .other-message {
  background: #94C2ED;
}
.chat .chat-history .other-message:after {
  border-bottom-color: #94C2ED;
  left: 93%;
}
.chat .chat-message {
  padding: 30px;
}
.chat .chat-message textarea {
  width: 100%;
  border: none;
  padding: 10px 20px;
  font: 14px/22px "Lato", Arial, sans-serif;
  margin-bottom: 10px;
  border-radius: 5px;
  resize: none;
}
.chat .chat-message .fa-file-o, .chat .chat-message .fa-file-image-o {
  font-size: 16px;
  color: gray;
  cursor: pointer;
}
.chat .chat-message button {
  float: right;
  color: #94C2ED;
  font-size: 16px;
  text-transform: uppercase;
  border: none;
  cursor: pointer;
  font-weight: bold;
  background: #F2F5F8;
}
.chat .chat-message button:hover {
  color: #75b1e8;
}

.online, .offline, .me {
  margin-right: 3px;
  font-size: 10px;
}

.online {
  color: #86BB71;
}

.offline {
  color: #E38968;
}

.me {
  color: #94C2ED;
}

.align-left {
  text-align: left;
}

.align-right {
  text-align: right;
}

.float-right {
  float: right;
}

.clearfix:after {
  visibility: hidden;
  display: block;
  font-size: 0;
  content: " ";
  clear: both;
  height: 0;
}
.clickme:hover{
  background-color:red;
}
</style>

	
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>


	<script type="text/javascript" src="js/rajfunction.js"></script>


</body>
  <html>
<!-- Bottom Part -->

    <section id="bottom" class="wet-asphalt">
      
            <div class="row"> <br>
            <div class="col-sm-12">
                <div class="col-sm-12">
                      <div class="col-md-4 col-sm-6">
                    <h4 class="noMargin">Recent Articles</h4>
                    <div class="row">
                        <div class="col-sm-3 noMargin">
                            <hr>
                        </div>
                    </div>
                    <a class="noMargin" href="../library/scc-product-brief.php"><strong>Enhanced MFT Visibility and Control</strong><br>with IBM Sterling Control Center</a>
                    <div class="greyText noMargin">
                        B2B Integration and MFT
                    </div>
                    <br>
                    <a class="noMargin" href="../library/faq-mq.php"><strong>The 10 things that you need to know</strong><br>about IBM's new MQ Appliance</a>
                    <div class="greyText noMargin">
                        SOA and Connectivity
                    </div>
                    <br>
                    <a class="noMargin" href="../why/sstory7.php"><strong>Enhanced Visibility and Control</strong><br>for Global Food Distributor</a>
                    <div class="greyText noMargin">
                        B2B Integration and MFT
                    </div>
                </div>
                   <!--/.col-md-4-->
                    <div class="col-md-2 col-sm-6">
                    <h4 class="noMargin">Team Miracle</h4>
                    <div class="row">
                        <div class="col-sm-5 noMargin">
                            <hr>
                        </div>
                    </div>
                    <div>
                        <ul class="arrow">
                            <li><a href="../">Home</a></li>
                            <li><a href="../company/">The Company</a></li>
                            <li><a href="../company/partnerships.php">Partnerships</a></li>
                            <li><a href="../services/">Our Services</a></li>
                            <li><a href="../coming-soon.php">Library</a></li>
                            <li><a href="../contact/locations.php">Locations</a></li>
                            <li><a href="../privacy.php">Privacy Policy</a></li>
                            <li><a href="../gallery/">Memory Gallery</a></li>
                            <li><a href="../contact/">Contact Us</a></li>
                        </ul>
                    </div>
                </div><!--/.col-md-2-->
                <div class="col-md-3 col-sm-6">
                    <h4 class="noMargin">Opportunities</h4>
                    <div class="row">
                        <div class="col-sm-3 noMargin">
                            <hr>
                        </div>
                    </div>
                    <div>
                        <div class="media">
                            <div class="media-body">
                                <span class="media-heading"><a href="../careers/refresh-america.php">Refresh America<br/>Ph : (248)-233-1100</a></span>
                                <small class="muted"><a href="../careers/jobs-us.php">Multiple Positions Available - USA</a></small>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-body">
                                <span class="media-heading"><a href="../careers/itg.php">IT Gurukulam<br/>Ph : +91-(891)-662-3555</a></span>
                                <small class="muted"><a href="../careers/jobs-india.php">Hiring 2015 Freshers - India</a></small>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-body">
                                <span class="media-heading"><a href="../careers/">Opportunities<br/>Ph : (248)-233-1175</a></span>
                            </div>
                        </div>
                    </div>  
                </div><!--/.col-md-3-->
                <div class="col-md-3 col-sm-6">
                    <h4 class="noMargin">Corporate HQ</h4>
                    <div class="row">
                        <div class="col-sm-3 noMargin">
                            <hr>
                        </div>
                    </div>
                    <address>
                        <strong>Miracle Software Systems, Inc.</strong><br>
                        Global Headquarters<br>
                        45625 Grand River Avenue<br>
                        Novi, MI - USA(48374)<br>
                        Ph: (248)-233-1100<br>
                        E : info@miraclesoft.com
                    </address>
                    <a href="../contact/"><button type="button" class="btn btn-primary btn-md">Get in Touch</button></a>
                </div> <!--/.col-md-3-->
                </div>
            </div>
            </div>
        </br>
    </section><!--/#bottom-->
    <!--
    <script>
              (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
              })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            
              ga('create', 'UA-57869278-1', 'auto');
              ga('send', 'pageview');
        
    </script>-->
    <footer id="footer" class="midnight-blue dark">
       
            <div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-12">
                         <div class="col-sm-6">
                    &copy; 2017 <a target="_blank" href="http://www.miraclesoft.com" title="Copyright">Miracle Software Systems, Inc.</a>
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right socialHover">
                        <a class="btn btn-social btn-facebook" href="https://www.facebook.com/miracle45625"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="https://plus.google.com/105262074634409319991/"><i class="icon-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="https://twitter.com/Team_MSS"><i class="icon-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="https://www.linkedin.com/company/miracle-software-systems-inc"><i class="icon-linkedin"></i></a>  <a class="btn btn-social btn-youtube" href="https://www.youtube.com/c/Team_MSS"><i class="icon-youtube-play"></i></a> <!-- <a class="icomoon icon-flickr-4" href="https://www.flickr.com/photos/team_miracle"><img width="30px" height="30px" src="../images/icons/flikr.png"></a> -->
                        <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li><!--#gototop-->
                    </ul>
                </div>
                    </div>
                   
                </div>
                
            </div>
       
    </footer><!--/#footer-->
    </html></html>