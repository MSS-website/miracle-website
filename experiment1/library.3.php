<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Miracle’s Quality Assurance and Engineering teams ensure a seamless end-to-end testing which ensures the business process continuity for all of your applications" name="description">
        <meta content="" name="author">
        <title>
         The laboratory | Miracle
        </title>
        
       <link href="../../css/bootstrap.min.css" rel="stylesheet">
        <link href="../../css/font-awesome.min.css" rel="stylesheet">
        <link href="../../css/main.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="../../css/default.css" rel="stylesheet" type="text/css">
        <link href="../../css/component.css" rel="stylesheet" type="text/css">
        <script src="../../js/modernizr.custom.js"></script><!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
       <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="../../images/favicon.ico" rel="shortcut icon">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <style>
        html body {
 
    overflow-x: hidden;
}
          .modal.fade .modal-dialog {
    -webkit-transform: scale(0.1);
    -moz-transform: scale(0.1);
    -ms-transform: scale(0.1);
    transform: scale(0.1);
    top: 300px;
    opacity: 0;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
}

.modal.fade.in .modal-dialog {
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
    -webkit-transform: translate3d(0, -300px, 0);
    transform: translate3d(0, -300px, 0);
    opacity: 1;
}

.modal-header {
  font-family: "Bree Serif";
  background-color: #F6F5F5;
  border-radius: 5px;
}

.modal-body {
  font-size: 16px;
}

p {
  margin: 50px;
}
       

 
  .carousel-fade .carousel-inner .item {
  -webkit-transition-property: opacity;
  transition-property: opacity;
}
.carousel-fade .carousel-inner .item,
.carousel-fade .carousel-inner .active.left,
.carousel-fade .carousel-inner .active.right {
  opacity: 0;
}
.carousel-fade .carousel-inner .active,
.carousel-fade .carousel-inner .next.left,
.carousel-fade .carousel-inner .prev.right {
  opacity: 1;
}
.carousel-fade .carousel-inner .next,
.carousel-fade .carousel-inner .prev,
.carousel-fade .carousel-inner .active.left,
.carousel-fade .carousel-inner .active.right {
  left: 0;
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
}
.carousel-fade .carousel-control {
  z-index: 2;
}
.carousel-inner{
height:355px;
}
/*
Fade content bs-carousel with hero headers
Code snippet by maridlcrmn (Follow me on Twitter @maridlcrmn) for Bootsnipp.com
Image credits: unsplash.com
*/

/********************************/
/*       Fade Bs-carousel       */
/********************************/
.fade-carousel {
    position: relative;
}
.fade-carousel .carousel-inner .item {
    height: 100vh;
}
.fade-carousel .carousel-indicators > li {
    margin: 0 2px;
    background-color: #f39c12;
    border-color: #f39c12;
    opacity: .7;
}
.fade-carousel .carousel-indicators > li.active {
  width: 10px;
  height: 10px;
  opacity: 1;
}

/********************************/
/*          Hero Headers        */
/********************************/
.hero {
    position: absolute;
    top: 30%;
    left: 50%;
    z-index: 3;
    color: #fff;
    float:left !important;
    text-transform: uppercase;
    text-shadow: 1px 1px 0 rgba(0,0,0,.75);
      -webkit-transform: translate3d(-50%,-50%,0);
         -moz-transform: translate3d(-50%,-50%,0);
          -ms-transform: translate3d(-50%,-50%,0);
           -o-transform: translate3d(-50%,-50%,0);
              transform: translate3d(-50%,-50%,0);
}
.hero h1 {
    font-size: 6em;    
    font-weight: bold;
    margin: 0;
    padding: 0;
}
.hero1 {
    position: absolute;
    top: 30%;
    left: 60%;
    z-index: 3;
    color: #fff;
    text-align: right !important;
    text-transform: uppercase;
    text-shadow: 1px 1px 0 rgba(0,0,0,.75);
      -webkit-transform: translate3d(-50%,-50%,0);
         -moz-transform: translate3d(-50%,-50%,0);
          -ms-transform: translate3d(-50%,-50%,0);
           -o-transform: translate3d(-50%,-50%,0);
              transform: translate3d(-50%,-50%,0);
}
.hero1 h1 {
    font-size: 6em;    
    font-weight: bold;
    margin: 0;
    padding: 0;
}
.fade-carousel .carousel-inner .item .hero {
    opacity: 0;
    -webkit-transition: 2s all ease-in-out .1s;
       -moz-transition: 2s all ease-in-out .1s; 
        -ms-transition: 2s all ease-in-out .1s; 
         -o-transition: 2s all ease-in-out .1s; 
            transition: 2s all ease-in-out .1s; 
}
.fade-carousel .carousel-inner .item.active .hero {
    opacity: 1;
    -webkit-transition: 2s all ease-in-out .1s;
       -moz-transition: 2s all ease-in-out .1s; 
        -ms-transition: 2s all ease-in-out .1s; 
         -o-transition: 2s all ease-in-out .1s; 
            transition: 2s all ease-in-out .1s;    
}

/********************************/
/*            Overlay           */
/********************************/

/********************************/
/*          Custom Buttons      */
/********************************/
.btn.btn-lg {padding: 10px 40px;}
.btn.btn-hero,
.btn.btn-hero:hover,
.btn.btn-hero:focus {
    color: #f5f5f5;
    background-color: #ef4048;
    border-color: #ef4048;
    outline: none;
    margin: 20px auto;
}

/********************************/
/*       Slides backgrounds     */
/********************************/
.fade-carousel .slides .slide-1, 
.fade-carousel .slides .slide-2,
.fade-carousel .slides .slide-3 {
  height: 100vh;
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
}
.fade-carousel .slides .slide-1 {
  background-image: url(slide-finance-1.jpg); 
}
.fade-carousel .slides .slide-2 {
  background-image: url(slide-finance-2.jpg);
}


/********************************/
/*          Media Queries       */
/********************************/
@media screen and (min-width: 980px){
    .hero { width: 980px; }    
}
@media screen and (max-width: 640px){
    .hero h1 { font-size: 4em; }    
}
html .background-color-secondary {
    background-color: #25272c !important;
}
.custom-home-intro {
    padding: 20px 0 20px 0;
}

.home-intro {
    background-color: #171717;
   
    padding: 20px 0 10px 0;
    position: relative;
    text-align: left;
}
.custom-home-intro p {
    max-width: none;
}
color-light {
    color: #ffffff !important;
}
.home-intro p {
    color: #FFF;
    display: inline-block;
    font-size: 1.4em;
    font-weight: 300;
    max-width: 800px;
    padding-top: 5px;
}
.mb-xs {
    margin-bottom: 5px !important;
}
.mt-xs {
    margin-top: 5px !important;
}
.custom-home-intro p span {
    position: relative;
    display: inline-block;
    padding-top: 0;
}
color-primary {
    color: #6a80a9 !important;
}
.custom-home-intro p span:before {
    content: '';
    display: block;
    position: absolute;
    top: 50%;
    right: -40px;
    width: 30px;
    border-bottom: 1px solid #FFF;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%);
}
.custom-home-intro p span:after {
    content: '';
    display: block;
    position: absolute;
    top: 50%;
    right: -44px;
    width: 0;
    height: 0;
    border-top: 5px solid transparent;
    border-bottom: 5px solid transparent;
    border-left: 5px solid #FFF;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%);
}
h1 {
  margin: 0 0 .5em;
  padding: 0;
}

.animate-reveal {
  font: bold 1.5em sans-serif;
  text-transform: uppercase;
  letter-spacing: 2px;
  opacity: 0;
  -webkit-animation: reveal 1s cubic-bezier(0, 1, 0.5, 1) 1 normal forwards;
     -moz-animation: reveal 1s ease-in 1 normal forwards;
       -o-animation: reveal 1s cubic-bezier(0, 1, 0.5, 1) 1 normal forwards;
          animation: reveal 1s cubic-bezier(0, 1, 0.5, 1) 1 normal forwards;
}

.animate-first {
  -webkit-animation-delay:1s;
     -moz-animation-delay:1s;
       -o-animation-delay:1s;
          animation-delay:1s;
}

.animate-second {
  -webkit-animation-delay: 2s;
     -moz-animation-delay: 2s;
       -o-animation-delay: 2s;
          animation-delay: 2s;
}

.animate-third {
  -webkit-animation-delay: 3s;
     -moz-animation-delay: 3s;
       -o-animation-delay: 3s;
          animation-delay: 3s;
}

@-webkit-keyframes reveal {
  0% {
    opacity: 0;
    -webkit-transform: translateY(100%);
       -moz-transform: translateY(100%);
         -o-transform: translateY(100%);
            transform: translateY(100%);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
       -moz-transform: translateY(0);
         -o-transform: translateY(0);
            transform: translateY(0);
  }
}

@-moz-keyframes reveal {
  0% {
    opacity: 0;
    -webkit-transform: translateY(100%);
       -moz-transform: translateY(100%);
         -o-transform: translateY(100%);
            transform: translateY(100%);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
       -moz-transform: translateY(0);
         -o-transform: translateY(0);
            transform: translateY(0);
  }
}

@-o-keyframes reveal {
  0% {
    opacity: 0;
    -webkit-transform: translateY(100%);
       -moz-transform: translateY(100%);
         -o-transform: translateY(100%);
            transform: translateY(100%);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
       -moz-transform: translateY(0);
         -o-transform: translateY(0);
            transform: translateY(0);
  }
}

@keyframes reveal {
  0% {
    opacity: 0;
    -webkit-transform: translateY(100%);
       -moz-transform: translateY(100%);
         -o-transform: translateY(100%);
            transform: translateY(100%);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
       -moz-transform: translateY(0);
         -o-transform: translateY(0);
            transform: translateY(0);
  }
}
.parallax {
    /* The image used */
    background-image: url("cloudcomputing.jpeg");

    /* Set a specific height */
    min-height: 300px; 
width:103%;
    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.hope{
  
  background-color:#f4f4f4;
  height:300px;
  padding: 50px 0;
      margin-left: -11px;

  }
  .parallax1 {
    /* The image used */
    background-image: url("iot.jpeg");

    /* Set a specific height */
    min-height: 300px; 
width:105%;
    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
     margin: -9px !important;
}
.hope1{
  
  background-color:#f4f4f4;
  height:300px;
  padding: 50px 0;
 margin: -9px !important;
    width: 106%;
  }
  .parallax3 {
    /* The image used */
    background-image: url("startup-photos.jpg");

    /* Set a specific height */
    min-height: 300px; 
width:103%;
    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.hope3{
  
  background-color:#f4f4f4;
  height:300px;
  padding: 50px 0;
      margin-left: -11px;

  }
  .col-half-section {
    width: 100%;
    min-height: 1px;
    padding-left: 15px;
    padding-right: 15px;
    position: relative;
    max-width: 570px;
    float: left;
    margin-left: 30px;
    margin-right: 0;
}
.text-uppercase {
    text-transform: uppercase !important;
}


.font-weight-bold {
    font-weight: 700 !important;
}
 .heading-dark,  .lnk-dark,  .text-color-dark {
    color: #2e353e !important;
}
.custom-text-color-1 {
    color: #818898 !important;
}


.mb-xlg {
    margin-bottom: 30px !important;
}
html .btn-borders.btn-primary {
    background: transparent;
    border-color: #6a80a9;
    color: #6a80a9;
    text-shadow: none;
}
.col-half-section.col-half-section-right {
    float: right;
    margin-left: 0;
    margin-right: 30px;
}
.custom-text-align-right {
    text-align: right !important;
}
.section-primary {
    background-color: #0d416b !important;
    border-color: #0d416b !important;
    padding: 60px 0 !important;
        margin-top: -10px;
}
.front-head{
    border-bottom:1px solid #eee !important;
    }
    .front{
        padding:20px;
        
        }
   .custom{
       position: absolute;
  margin-top: -56px;
    right: 20px;
    border-radius: 100%;
    font-size: 2em;
    line-height: 0.76;
    width: 30px;
    height: 30px;
    font-weight: 100;
    text-align: center;
    padding-top: 5px;
       background-color:#ef4048;
       }
 .item img {
  max-width: 100%;
  
  -moz-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
.item:hover img {
  -moz-transform: scale(1.1);
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}
@media (min-width: 768px){

.modal-content {
    -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
    right: 635px !important;
}
}
.custom-testimonial-style.testimonial-with-quotes blockquote:before, .custom-testimonial-style.testimonial-with-quotes blockquote:after {
    font-size: 50px;
    color: #2e353e;
}

.testimonial.testimonial-with-quotes blockquote:after {
    color: #777;
    display: block !important;
    right: 10px;
    font-size: 80px;
    font-style: normal;
    line-height: 1;
    position: absolute;
    bottom: -0.5em;
    content: "”";
}

.testimonial.testimonial-style-2 blockquote:before, .testimonial.testimonial-style-2 blockquote:after {
    display: none;
}

.testimonial blockquote:after {
    color: #FFF;
    content: "”";
    font-size: 80px;
    font-style: normal;
    line-height: 1;
    position: absolute;
    bottom: -0.5em;
    right: 10px;
}
.testimonial.testimonial-with-quotes blockquote:before {
    color: #777;
    display: block !important;
    left: 10px;
    top: 0;
    content: "“";
    font-size: 80px;
    font-style: normal;
    line-height: 1;
    position: absolute;
    margin-left:-17px;
}

.testimonial.testimonial-style-2 blockquote:before, .testimonial.testimonial-style-2 blockquote:after {
    display: none;
}

.testimonial blockquote:before {
    left: 10px;
    top: 0;
    color: #FFF;
    content: "“";
    font-size: 80px;
    font-style: normal;
    line-height: 1;
    position: absolute;
}
blockquote {
    padding: 10px 20px;
    margin: 0 0 20px;
    font-size: 17.5px;
    border-left: 0px solid #eeeeee !important;
}
#quote-carousel {
    padding: 0 10px 30px 10px;
    margin-top: 30px;
    /* Control buttons  */
    /* Previous button  */
    /* Next button  */
    /* Changes the position of the indicators */
    /* Changes the color of the indicators */
}
#quote-carousel .carousel-control {
    background: none;
    color: #CACACA;
    font-size: 2.3em;
    text-shadow: none;
    margin-top: 30px;
}
#quote-carousel .carousel-control.left {
    left: -60px;
}
#quote-carousel .carousel-control.right {
    right: -60px;
}
#quote-carousel .carousel-indicators {
    right: 50%;
    top: auto;
    bottom: 0px;
    margin-right: -19px;
}
#quote-carousel .carousel-indicators li {
    width: 50px;
    height: 50px;
    margin: 5px;
    cursor: pointer;
    border: 4px solid #CCC;
    border-radius: 50px;
    opacity: 0.4;
    overflow: hidden;
    transition: all 0.4s;
}
#quote-carousel .carousel-indicators .active {
    background: #333333;
    width: 128px;
    height: 128px;
    border-radius: 100px;
    border-color: #f33;
    opacity: 1;
    overflow: hidden;
}
.item blockquote {
    border-left: none;
    margin: 0;
}
.item blockquote p:before {
    content: "\f10d";
    font-family: 'Fontawesome';
    float: left;
    margin-right: 10px;
}

</style>
    </head><!--/head-->
    <?php include '../headerm.php';?>
    <body>
    
       <div class="carousel fade-carousel slide carousel-fade" data-ride="carousel" data-interval="8000" id="bs-carousel">

 
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item slides active">
      <div class="slide-1">
          <div class="overlay"></div>
      </div>
      <div class="hero">
        <hgroup>
            <h1 class="animate-reveal animate-first">We are creative</h1>        
            <h3 class="animate-reveal animate-second">Get start your next awesome project</h3>
        </hgroup>
        <button class="btn btn-hero btn-lg animate-reveal animate-third" role="button">See all features</button>
      </div>
       
    </div>
    <div class="item slides">
      <div class="slide-2">
          <div class="overlay"></div>
      </div>
      <div class="hero1">        
        <hgroup>
            <h1 class="animate-reveal animate-first">We are smart</h1>        
            <h3 class="animate-reveal animate-second">Get start your next awesome project</h3>
        </hgroup>       
        <button class="btn btn-hero btn-lg animate-reveal animate-third" role="button">See all features</button>
      </div>
      
    </div>
  
    <a class="left carousel-control" href="#bs-carousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#bs-carousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
   
  </div> 
</div>

 <div id="home-intro" class="home-intro custom-home-intro background-color-secondary m-none">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<p class="text-color-light mb-xs mt-xs">
								The fastest way to grow your business with the leader in investments.
								<span class="text-color-primary" style="color:#00aae7;">Learn more about our strategy</span>
							</p>
						</div>
						<div class="col-md-4">
							<a href="demo-finance-strategies.html" class="btn btn-primary custom-btn-style-1 text-uppercase font-weight-semibold pull-right mt-sm" style="margin-top:20px;">read more</a>
						</div>
					</div>
				</div>
			</div>
<div class="">
<div class="row">
<div class="col-sm-6">
<div class="parallax">

</div>
</div>
<div class="col-sm-6">
<div class="hope">
<div class="col-half-section col-half-section-left">
									<h2 class="text-uppercase font-weight-bold">Cloud Applications</h2>
										<p class="text-md text-color-dark">What we can do for you</p>
									<p class="custom-text-color-1 mb-xlg">A cloud application, or cloud app, is a software program where cloud-based and local components work together. This model relies on remote servers for processing logic that is accessed through a web browser with a continual internet connection.</p>
									<a href="cloudapplications.php" class="btn btn-borders btn-primary custom-btn-style-2 font-weight-semibold text-color-dark text-uppercase mt-sm">View video</a>
								</div>
</div>

</div>
</div>
<div class="row">
<div class="col-sm-6">
<div class="hope1">
<div class="col-half-section col-half-section-right custom-text-align-right">
									<h2 class="text-uppercase font-weight-bold">Internet of Things</h2>
									<p class="text-md text-color-dark">What we can do for you</p>
									<p class="custom-text-color-1 mb-xlg">IoT creates these systems by connecting things, animate or inanimate, to the Internet with unique identifiers that provide context, giving visibility into the network, the devices themselves, and their environment. </p>
									<a href="iot.php" class="btn btn-borders btn-primary custom-btn-style-2 font-weight-semibold text-color-dark text-uppercase mt-sm">View Video</a>
								</div>
</div>

</div>
<div class="col-sm-6">
<div class="parallax1">

</div>
</div>

</div>
<div class="row">
<div class="col-sm-6">
<div class="parallax3">

</div>
</div>
<div class="col-sm-6">
<div class="hope3">
<div class="col-half-section col-half-section-left">
									<h2 class="text-uppercase font-weight-bold">Congnitive computing</h2>
									<p class="text-md text-color-dark">Let's talk</p>
									<p class="custom-text-color-1 mb-xlg">Cognitive computing might be closer to the idea of artificial intelligence. Cognitive systems are designed to solve problems the way humans solve problems, by thinking, reasoning and remembering</p>
									<a href="conginitive.php" class="btn btn-borders btn-primary custom-btn-style-2 font-weight-semibold text-color-dark text-uppercase mt-sm">View video</a>
								</div>
</div>

</div>
</div>
</div>
<div class="section-primary">
<div class="row">
<div class="col-sm-4">
<div class="counter center">
		<span data-to="18" style="font-size: 3.6em;color:#ffffff;">18</span>
		
</div>
</div>
<div class="col-sm-4">
<div class="counter center">
									<span data-to="200"  style="font-size: 3.6em;color:#ffffff;">200+</span>
							
								</div>
</div>

<div class="col-sm-4">
<div class="counter center">
									
									<span data-to="15" style="font-size: 3.6em;color:#ffffff"><span>$</span>15</span>
								
								</div>
</div>


</div>
</div><br>
<div class="row">
<div class="col-sm-12">
<p class="methodText"><center><strong>INVESTED YOUR MONEY WITH REAL PROFESSIONALS </strong></center></p>
<p class="greyText"><center>Meet our Team of Specialists</center></p>
</div>

</div>
<br>
<div class="row">
<div class="col-sm-12">
<div class="col-sm-12">
<div class="col-sm-3">
<a href="#" data-toggle="modal" data-target="#demo">
<div class="item">
<img src="library/images/team/team-1.jpg" class="img-responsive"></img>
<br>
<div class="front-head">
<div class="front">
<p><strong>Jhon Doe</strong></p>
<p><strong>Ceo</strong></p>
<span class="custom">+</span>
</div>
</div>
</div></a>
</div> 
<div class="col-sm-3">
<a href=""  data-toggle="modal" data-target="#demo1">
<div class="item">
<img src="library/images/team/team-2.jpg" class="img-responsive"></img>
<br>
<div class="front-head">
<div class="front">
<p><strong>Jhon Doe</strong></p>
<p><strong>Ceo</strong></p>
<span class="custom">+</span>
</div>
</div>
</div>
</a>
</div>
<div class="col-sm-3">
<a href="#"  data-toggle="modal" data-target="#demo2">
<div class="item">
<img src="library/images/team/team-3.jpg" class="img-responsive"></img>
<br>
<div class="front-head">
<div class="front">
<p><strong>Jhon Doe</strong></p>
<p><strong>Ceo</strong></p>
<span class="custom">+</span>
</div>
</div>
</div>
</a>
</div>
<div class="col-sm-3">
<a href="#"  data-toggle="modal" data-target="#demo2">
<div class="item">
<img src="library/images/team/team-4.jpg" class="img-responsive"></img>
<br>
<div class="front-head">
<div class="front">
<p><strong>Jhon Doe</strong></p>
<p><strong>Ceo</strong></p>
<span class="custom">+</span>
</div>
</div>
</div>
</a>
</div>
</div>
</div>
</div>


<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">


<div class="modal fade" id="demo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
       
      </div>
      <div class="modal-body">
        <div class="row">
        <div class="col-sm-4">
        <img src="library/images/team/team-1.jpg" class="img-responsive"></img>
        </div>
         <div class="col-sm-8">
         <p class="methodText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at elementum lacus. Fusce luctus urna ac mauris consequat, ac eleifend odio imperdiet. Sed euismod tempor orci, ullamcorper accumsan justo semper eu. Donec venenatis elit et euismod iaculis. Integer vehicula imperdiet metus at convallis. Donec ullamcorper at nunc lobortis ultricies. Nam tincidunt.</p>
        <br>
        <p class="methodText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at elementum lacus. Fusce luctus urna ac mauris consequat, ac eleifend odio imperdiet. Sed euismod tempor orci, ullamcorper accumsan justo semper eu. Donec venenatis elit et euismod iaculis. Integer vehicula imperdiet metus at convallis. Donec ullamcorper at nunc lobortis ultricies. Nam tincidunt.</P>
        </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="demo1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
       
      </div>
      <div class="modal-body">
        <div class="row">
        <div class="col-sm-4">
        <img src="library/images/team/team-2.jpg" class="img-responsive"></img>
        </div>
         <div class="col-sm-8">
         <p class="methodText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at elementum lacus. Fusce luctus urna ac mauris consequat, ac eleifend odio imperdiet. Sed euismod tempor orci, ullamcorper accumsan justo semper eu. Donec venenatis elit et euismod iaculis. Integer vehicula imperdiet metus at convallis. Donec ullamcorper at nunc lobortis ultricies. Nam tincidunt.</p>
        <br>
        <p class="methodText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at elementum lacus. Fusce luctus urna ac mauris consequat, ac eleifend odio imperdiet. Sed euismod tempor orci, ullamcorper accumsan justo semper eu. Donec venenatis elit et euismod iaculis. Integer vehicula imperdiet metus at convallis. Donec ullamcorper at nunc lobortis ultricies. Nam tincidunt.</P>
        </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="demo2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
       
      </div>
      <div class="modal-body">
        <div class="row">
        <div class="col-sm-4">
        <img src="library/images/team/team-3.jpg" class="img-responsive"></img>
        </div>
         <div class="col-sm-8">
         <p class="methodText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at elementum lacus. Fusce luctus urna ac mauris consequat, ac eleifend odio imperdiet. Sed euismod tempor orci, ullamcorper accumsan justo semper eu. Donec venenatis elit et euismod iaculis. Integer vehicula imperdiet metus at convallis. Donec ullamcorper at nunc lobortis ultricies. Nam tincidunt.</p>
        <br>
        <p class="methodText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at elementum lacus. Fusce luctus urna ac mauris consequat, ac eleifend odio imperdiet. Sed euismod tempor orci, ullamcorper accumsan justo semper eu. Donec venenatis elit et euismod iaculis. Integer vehicula imperdiet metus at convallis. Donec ullamcorper at nunc lobortis ultricies. Nam tincidunt.</P>
        </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

   <div class="modal fade" id="demo3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
       
      </div>
      <div class="modal-body">
        <div class="row">
        <div class="col-sm-4">
        <img src="library/images/team/team-4.jpg" class="img-responsive"></img>
        </div>
         <div class="col-sm-8">
         <p class="methodText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at elementum lacus. Fusce luctus urna ac mauris consequat, ac eleifend odio imperdiet. Sed euismod tempor orci, ullamcorper accumsan justo semper eu. Donec venenatis elit et euismod iaculis. Integer vehicula imperdiet metus at convallis. Donec ullamcorper at nunc lobortis ultricies. Nam tincidunt.</p>
        <br>
        <p class="methodText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at elementum lacus. Fusce luctus urna ac mauris consequat, ac eleifend odio imperdiet. Sed euismod tempor orci, ullamcorper accumsan justo semper eu. Donec venenatis elit et euismod iaculis. Integer vehicula imperdiet metus at convallis. Donec ullamcorper at nunc lobortis ultricies. Nam tincidunt.</P>
        </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="front-head" style="background-color:#eeeeee;padding:80px;">
<h1 class="heavy"><center>WHY CHOOSE US?</center></h1>
<p class="greyText"><center>3 Basic Steps to Succeed</center></p>
<div class="row">
<div class="col-sm-4">
<center><img src="library/images/why-choose-us/why-choose-us-icon-1.png" class="img-responsive"></img>
<h3 class="heavy">PRODUCT</h3>
<p class="methodText">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae aliquam numquam, aspernatur expedita ipsa molestiae.</P></center>
</div>
<div class="col-sm-4">
<center><img src="library/images/why-choose-us/why-choose-us-icon-2.png" class="img-responsive"></img>
<h3 class="heavy">PROCESS</h3>
<p class="methodText">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae aliquam numquam, aspernatur expedita ipsa molestiae.</P></center>
</div>
<div class="col-sm-4">
<center><img src="library/images/why-choose-us/why-choose-us-icon-3.png" class="img-responsive"></img>
<h3 class="heavy">PEOPLE</h3>
<p class="methodText">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae aliquam numquam, aspernatur expedita ipsa molestiae.</P><center>
</div>

</div>
</div>

<div class="row">
<h1 class="heavy"><center>TESTIMONIALS</center></h1>
<h3 class="greyText"><center>Cases of Success</center></h3>
<div class="row">
                    <div class="col-md-12" data-wow-delay="0.2s">
                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                            <!-- Bottom Carousel Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="library/images/team/team-1.jpg" alt="">
                                </li>
                                <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="library/images/team/team-2.jpg" alt="">
                                </li>
                                <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="library/images/team/team-3.jpg" alt="">
                                </li>
                            </ol>

                            <!-- Carousel Slides / Quotes -->
                            <div class="carousel-inner text-center">

                                <!-- Quote 1 -->
                                <div class="item active">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">

                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. !</p>
                                                <small>Someone famous</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 2 -->
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">

                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                <small>Someone famous</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 3 -->
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">

                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. .</p>
                                                <small>Someone famous</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>

                            <!-- Carousel Buttons Next/Prev -->
                            <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                            <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>

      <br><br><br>  <?php include '../footer.php';?>
       
    </body>
</html>
