
<!DOCTYPE html>
<!--

  Coda Slider 3.0
  Kevin Batdorf

  http://kevinbatdorf.github.com/codaslider

-->
<html>

  <head>
    <meta charset='utf-8' />
    <meta http-equiv="X-UA-Compatible" content="chrome=1" />
    <meta name="description" content="Codaslider : JQuery Slider Plugin" />

    <!--
      Here is the style sheet for the Coda Slider
      You may want to "minify" this after making edits
      http://www.refresh-sf.com/yui/
    -->
    <link rel="stylesheet" type="text/css" media="screen" href="coda-slider.css">

    <!-- This is just styling for the demo to make it a little less crowded at the top -->
    <style>h1{margin:100px;}</style>


    <!-- Coda Slider relies on jQuery and easing effects-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- This of course is required. The full version (not .min) is also included in the js directory -->
    <script src="coda.js"></script>

    <title>Coda Slider 3.0</title>

    <script>
    $(function(){

      /* Here is the slider using default settings */
      $('#slider-id').codaSlider();
      /* If you want to adjust the settings, you set an option
         as follows:

          $('#slider-id').codaSlider({
            autoSlide:true,
            autoHeight:false
          });

      */
    });

    </script>

<style>
           body{
           	    font-family: Lato bold !important;
           }
        .parallax{
    background-image:url('../images/events/event-nomination-header.jpeg');
    background-size:cover;
    background-repeat:no-repeat;
    
    height:200px;
    }
    .overlay{
        background-color:rgba(0,0,0,0.3);
        height:200px;
        
    }

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
.modal-dialog {
    width:660px;
}

.margin{
    color:black !important;
    
}
.parallax {
    height: 160px; 
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    opacity:0.9;
}
.transparent{
        border: 1px solid #D6D5D4;
    color: #000;
    display: inline-block;
    line-height: 14px;
    height: 36px;
    padding: 10px 50px;
    text-align: center;
    text-decoration: none;
    text-transform: uppercase;
    vertical-align: middle;
    background: transparent;
}
.transparent:hover{
    border: 1px solid #00aae7;
}
.hov:hover .transparent{
    border: 1px solid #00aae7;
}






@font-face {

	src:url('../fonts/anyoldicon/anyoldicon.eot');
	src:url('../fonts/anyoldicon/anyoldicon.eot?#iefix') format('embedded-opentype'),
		url('../fonts/anyoldicon/anyoldicon.woff') format('woff'),
		url('../fonts/anyoldicon/anyoldicon.ttf') format('truetype'),
		url('../fonts/anyoldicon/anyoldicon.svg#anyoldicon') format('svg');
	font-weight: normal;
	font-style: normal;
}

/* General grid styles */
.cbp-ig-grid {
	list-style: none;
	padding: 0 0 50px 0;
	margin: 0;
}

/* Clear floats */
.cbp-ig-grid:before, 
.cbp-ig-grid:after { 
	content: " "; 
	display: table; 
}

.cbp-ig-grid:after { 
	clear: both; 
}

/* grid item */
.cbp-ig-grid li {
	width: 33%;
	float: left;
	height: 320px;
	text-align: center;
	border-top: 1px solid #ddd;
}

/* we are using a combination of borders and box shadows to control the grid lines */
.cbp-ig-grid li:nth-child(-n+3){
	border-top: none;
}

.cbp-ig-grid li:nth-child(3n-1),
.cbp-ig-grid li:nth-child(3n-2) {
	box-shadow: 1px 0 0 #ddd;
}

/* anchor style */
.cbp-ig-grid li > a {
	display: block;
	height: 100%;
	color: #47a3da;
	-webkit-transition: background 0.2s;
	-moz-transition: background 0.2s;
	transition: background 0.2s;
}

/* the icon with pseudo class for icon font */
.cbp-ig-icon {
	padding: 30px 0 0 0;
	display: block;
	-webkit-transition: -webkit-transform 0.2s;
	transition: -moz-transform 0.2s;
	transition: transform 0.2s;
}

.cbp-ig-icon:before {
    font-family: Lato bold !important;
	font-size: 14em;
	speak: none;
	font-style: normal;
	font-weight: normal;
	font-variant: normal;
	text-transform: none;
	line-height: 1;
	-webkit-font-smoothing: antialiased;
}

.cbp-ig-icon-shoe:before {
	content: "\e000";
}

.cbp-ig-icon-ribbon:before {
	content: "\e001";
}

.cbp-ig-icon-milk:before {
	content: "\e002";
}

.cbp-ig-icon-whippy:before {
	content: "\e003";
}

.cbp-ig-icon-spectacles:before {
	content: "\e004";
}

.cbp-ig-icon-doumbek:before {
	content: "\e007";
}

/* title element */
.cbp-ig-grid .cbp-ig-title {
	margin: 20px 0 10px 0;
	padding: 20px 0 0 0;
	font-size: 2em;
	position: relative;
	-webkit-transition: -webkit-transform 0.2s;
	-moz-transition: -moz-transform 0.2s;
	transition: transform 0.2s;
	font-weight: 700;
}

.cbp-ig-grid .cbp-ig-title:before {
	content: '';
	position: absolute;
	background: #47a3da;
	width: 160px;
	height: 6px;
	top: 10px;
	left: 50%;
	margin: -10px 0 0 -80px;
	-webkit-transition: margin-top 0.2s; /* top or translate does not seem to work in Firefox */
	-moz-transition: margin-top 0.2s;
	transition: margin-top 0.2s;
}

.cbp-ig-grid .cbp-ig-category {

	display: inline-block;
	font-size: 1em;
	letter-spacing: 1px;
	color: #fff;
	-webkit-transform: translateY(10px);
	-moz-transform: -moz-translateY(10px);
	-ms-transform: -ms-translateY(10px);
	transform: translateY(10px);
	opacity: 0;
	-webkit-transition: -webkit-transform 0.3s, opacity 0.2s;
	-moz-transition: -moz-transform 0.3s, opacity 0.2s;
	-webkit-transition: transform 0.3s, opacity 0.2s;
}

.cbp-ig-grid li:hover .cbp-ig-category,
.touch .cbp-ig-grid li .cbp-ig-category {
	opacity: 1;
	-webkit-transform: translateY(0px);
	-moz-transform: translateY(0px);
	-ms-transform: translateY(0px);
	transform: translateY(10px);
}

/* Hover styles */

.cbp-ig-grid li > a:hover {
	background: #2368a0;
}

.cbp-ig-grid li > a:hover .cbp-ig-icon {
	-webkit-transform: translateY(10px);
	-moz-transform: translateY(10px);
	-ms-transform: translateY(10px);
	transform: translateY(10px);
}

.cbp-ig-grid li > a:hover .cbp-ig-icon:before,
.cbp-ig-grid li > a:hover .cbp-ig-title {
	color: #fff !important;
}



/*
.cbp-ig-grid li > a:hover img{
	background-color: #fff !important;
}

*/



.cbp-ig-grid li > a:hover .cbp-ig-title {
	-webkit-transform: translateY(-30px);
	-moz-transform: translateY(-30px);
	-ms-transform: translateY(-30px);
	transform: translateY(-20px);
}

.cbp-ig-grid li > a:hover .cbp-ig-title:before {
	background: #fff;
	margin-top: 54px;
}


@media screen and (max-width: 62.75em) {
	.cbp-ig-grid li {
		width: 50%;
	}

	/* reset the grid lines */
	.cbp-ig-grid li:nth-child(-n+3){
		border-top: 1px solid #ddd;
	}

	.cbp-ig-grid li:nth-child(3n-1),
	.cbp-ig-grid li:nth-child(3n-2) {
		box-shadow: none;
	}

	.cbp-ig-grid li:nth-child(-n+2){
		border-top: none;
	}

	.cbp-ig-grid li:nth-child(2n-1) {
		box-shadow: 1px 0 0 #ddd;
	}
}

@media screen and (max-width: 41.6em) { 
	.cbp-ig-grid li {
		width: 100%;
	}

	.cbp-ig-grid li:nth-child(-n+2){
		border-top: 1px solid #ddd;
	}

	.cbp-ig-grid li:nth-child(2n-1) {
		box-shadow: none
	}

	.cbp-ig-grid li:first-child {
		border-top: none;
	}
}

@media screen and (max-width: 25em) { 
	.cbp-ig-grid {
		font-size: 80%;
	}

	.cbp-ig-grid .cbp-ig-category {
		margin-top: 20px;
	}
}


 .emerald{
         background-color:#0d416b !important;}
         }.breadcrumb {0px !important;}.tinted-image {
         background: 
         /* top, transparent red */
         linear-gradient(
         rgba(0, 0, 0, 0.55), 
         rgba(0, 0, 0, 0.55)
         ),
         /* your image */
         url("code.1.png");
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
         }
.emerald{background-color:#0d416b !important;width:100%;}
 .breadcrumb {margin:0px !important;}
         .breadcrumb li,.breadcrumb li a{color:#FFF !important;}
          .micro{
         margin-top:3px !important;
         }
    </style>
  </head>
  <body>

 

    <div class="coda-slider"  id="slider-id">
      <div>
        
<div class="container">
    <ul class="cbp-ig-grid">
	<li  onmouseover="myFunction()" onmouseout="myFunction1()">
		<a href="#pagetwo" data-transition="slide">
			
			<center><img id="chg" class="cbp-ig-icon" src="Standards-1.png" style="height:200px;"></center>
			<h3 class="cbp-ig-title">Corporate Standards</h3>
			<span class="cbp-ig-category">A portal to share the Miracle brand</span>
	
					<script>
function myFunction() {
    document.getElementById("chg").src = "Badge2.png";
}
</script>
		<script>
function myFunction1() {
    document.getElementById("chg").src = "Standards-1.png";
}
</script>
	
		</a>
	</li>
	<li onmouseover="myFunction2()" onmouseout="myFunction3()">
		<a href="#">
			<center><img id="chg2" class="cbp-ig-icon" src="Webinar-1.png" style="height:200px;"></center>
			<h3 class="cbp-ig-title">Internal Webinars</h3>
			<span class="cbp-ig-category">We are doing these Together</span>
		
						<script>
function myFunction2() {
    document.getElementById("chg2").src = "speaker2.png";
}
</script>
		<script>
function myFunction3() {
    document.getElementById("chg2").src = "Webinar-1.png";
}
</script>
		
		</a>
	</li>
	<li onmouseover="myFunction6()" onmouseout="myFunction7()">
			<a href="#">
			<center><img id="chg4" class="cbp-ig-icon" src="Network.png" style="height:200px;"></center>
			<h3 class="cbp-ig-title">Employee Referral</h3>
			<span class="cbp-ig-category">Bring your friend to Miracle Family</span>
		
		
				
						<script>
function myFunction6() {
    document.getElementById("chg4").src = "userlady2.png";
}
</script>
		<script>
function myFunction7() {
    document.getElementById("chg4").src = "Network.png";
}
</script>
		
		</a>
	</li>
	<li onmouseover="myFunction8()" onmouseout="myFunction9()">
	    	<a href="#">
			<center><img id="chg5" class="cbp-ig-icon" src="Suggestion.png" style="height:200px;"></center>
			<h3 class="cbp-ig-title">Suggestion Box</h3>
			<span class="cbp-ig-category">Your Ideas are our future</span>
	
	
		<script>
function myFunction8() {
    document.getElementById("chg5").src = "Bulb3.png";
}
</script>
		<script>
function myFunction9() {
    document.getElementById("chg5").src = "Suggestion.png";
}
</script>
	
		</a>
	</li>
	
	<li onmouseover="myFunction4()" onmouseout="myFunction5()">
		<a href="#">
			<center><img id="chg3" class="cbp-ig-icon" src="Hubble.png" style="height:200px;"></center>
			<h3 class="cbp-ig-title">Hubble</h3>
			<span class="cbp-ig-category">Employee Dashboard</span>
	
					<script>
function myFunction4() {
    document.getElementById("chg3").src = "Lock.png";
}
</script>
		<script>
function myFunction5() {
    document.getElementById("chg3").src = "Hubble.png";
}
</script>
	
	
		</a>
	</li>
	<li>
		
	</li>
	

</ul>
</div>

      </div>
      <div>
        
<div class="container">
    <ul class="cbp-ig-grid">
	<li onmouseover="myFunction()" onmouseout="myFunction1()">
		<a href="#">
			
			<center><img id="dhg" class="cbp-ig-icon" src="justice.png" style="height:200px;"></center>
			<h3 class="cbp-ig-title">Corporate Standards</h3>
			<span class="cbp-ig-category">A portal to share the Miracle brand</span>
	
					<script>
function myFunction() {
    document.getElementById("dhg").src = "justice.png";
}
</script>
		<script>
function myFunction1() {
    document.getElementById("dhg").src = "justice.png";
}
</script>
	
		</a>
	</li>
	<li onmouseover="myFunction2()" onmouseout="myFunction3()">
		<a href="#">
			<center><img id="dhg2" class="cbp-ig-icon" src="fountain(1).png" style="height:200px;"></center>
			<h3 class="cbp-ig-title">Email Signature</h3>
			<span class="cbp-ig-category">We are doing these Together</span>
		
						<script>
function myFunction2() {
    document.getElementById("dhg2").src = "fountain(1).png";
}
</script>
		<script>
function myFunction3() {
    document.getElementById("dhg2").src = "fountain(1).png";
}
</script>
		
		</a>
	</li>
	<li onmouseover="myFunction6()" onmouseout="myFunction7()">
			<a href="#">
			<center><img id="dhg4" class="cbp-ig-icon" src="justice.png" style="height:200px;"></center>
			<h3 class="cbp-ig-title">Social Media Policy</h3>
			<span class="cbp-ig-category">Bring your friend to Miracle Family</span>
		
		
				
						<script>
function myFunction6() {
    document.getElementById("dhg4").src = "justice.png";
}
</script>
		<script>
function myFunction7() {
    document.getElementById("dhg4").src = "justice.png";
}
</script>
		
		</a>
	</li>



</ul>
</div>


      </div>
      
     
    </div>

  </body>
</html>
