<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!-- Navigation -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    	<link rel="stylesheet" type="text/css" href="../css/default.css" />
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.11.1/jquery-ui.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/component.css" />
	<script src="js/modernizr.custom.js"></script>
    <!--[if lt IE 9]>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.11.1/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <![endif]-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../images/favicon.ico">
<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
<a id="to-top" class="btn btn-lg btn-dark" href="#top">
    <span class="sr-only">Toggle to Top Navigation</span>
	<i class="fa fa-chevron-up"></i>
</a>

<?php include 'header.1.php';?>
</head>
    
</head>
<body>
<style>
    @charset "utf-8";
    *, *:  before, *:after {
    -webkit-box-sizing: border-box !important;
    -moz-box-sizing: border-box !important;
    box-sizing: border-box !important;
}
body {
    width: 100%;
    height: 100%;
    font-family: "Source Sans Pro",  "Helvetica Neue",  Helvetica,  Arial,  sans-serif;
    overflow-x: hidden;
}
html {
    width: 100%;
    height: 100%;
}
#sidebar-wrapper {
    z-index: 1000;
    position: fixed;
    right: 0;
    width: 350px;
    height: 345px;
   
    overflow-y: auto;
    background: #fff;
    -webkit-transition: all 0.4s ease-in-out 0s;
    -moz-transition: all 0.4s ease-in-out 0s;
    -ms-transition: all 0.4s ease-in-out 0s;
    -o-transition: all 0.4s ease-in-out 0s;
    transition: all 0.4s ease-in-out 0s;
}
.sidebar-nav {
    position: absolute;
    top: 0px;
    bottom:100px;
    width: 350px;
    margin: 0;
    padding: 0;
    list-style: none;
}
.sidebar-nav li {
    position: relative;
    line-height: 20px;
    display: inline-block;
    width: 100%;
    font-size: 110%;
    font-weight: 800;
    text-transform: uppercase;
    outline: none;
}
.sidebar-nav li:before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    z-index: -1;
    height: 100%;
    width: 3px;
    background-color: #000;
    -webkit-transition: width .4s ease-in-out;
    -moz-transition: width .4s ease-in-out;
    -ms-transition: width .4s ease-in-out;
    transition: width .4s ease-in-out;
}
.sidebar-nav li:nth-child(1):before {
    background-color: #0D416B;
}
.sidebar-nav li:nth-child(2):before {
    background-color: #ef4048;
}
.sidebar-nav li:nth-child(3):before {
    background-color: #8c8c8c;
}
.sidebar-nav li:nth-child(4):before {
    background-color: #00aae7;
}
.sidebar-nav li:nth-child(6):before {
    background-color: #279636;
}
.sidebar-nav li:nth-child(7):before {
    background-color: #7d5d81;
}
.sidebar-nav li:nth-child(8):before {
    background-color: #ead24c;
}
.sidebar-nav li:nth-child(9):before {
    background-color: #2d2366;
}
.sidebar-nav li:nth-child(10):before {
    background-color: #35acdf;
}
.sidebar-nav li:hover:before, .sidebar-nav li.open:hover:before {
    width: 100%;
    -webkit-transition: width .4s ease-in-out;
    -moz-transition: width .4s ease-in-out;
    -ms-transition: width .4s ease-in-out;
    transition: width .4s ease-in-out;
}
.sidebar-nav li a {
    display: block;
    color: #000;
    text-decoration: none;
    padding: 10px 15px 10px 30px;
}
.sidebar-nav li a:hover, .sidebar-nav li a:active, .sidebar-nav li a:focus, .sidebar-nav li.open a:hover, .sidebar-nav li.open a:active, .sidebar-nav li.open a:focus {
    color: #fff;
    text-decoration: none;
    background-color: transparent;
}
.sidebar-nav > .sidebar-brand {
    height: 44px;
    font-size: 18px;
    line-height: 1.43;
}
.sidebar-nav .dropdown-menu {
    position: relative;
    width: 100%;
    padding: 0;
    margin: 0;
    border-radius: 0;
    border: none;
    background-color: #222;
    box-shadow: none;
}
#menu-toggle {
    z-index: 801;
    position: fixed;
    top: 0;
    right: 15px;
}
#sidebar-wrapper.active {
    right: 250px;
    width: 250px;
    -webkit-transition: all 0.4s ease 0s;
    -moz-transition: all 0.4s ease 0s;
    -ms-transition: all 0.4s ease 0s;
    -o-transition: all 0.4s ease 0s;
    transition: all 0.4s ease 0s;
}
.toggle {
    margin: 5px 5px 0 0;
}
#to-top {
    position: fixed;
    right: 1.5%;
    bottom: .5%;
    z-index: 799;
}
.btn-dark {
    border-radius: 0;
    color: #fff;
    background-color: rgba(0,  0,  0,  0.4);
}
.btn-dark:hover, .btn-dark:focus, .btn-dark:active {
    color: #fff;
    background-color: rgba(0,  0,  0,  0.7);
}
.btn-light {
    border-radius: 0;
    color: #333;
    background-color: rgb(255,  255,  255);
}
.btn-light:hover, .btn-light:focus, .btn-light:active {
    color: #333;
    background-color: rgba(255,  255,  255,  0.8);
}
.btn {
    border-radius: 0px;
    box-shadow: inset 0 0 0 2px #fff;
    -moz-box-shadow: inset 0 0 0 2px #fff;
    -webkit-box-shadow: inset 0 0 0 2px #fff;
    overflow: hidden;
}
.btn-success:hover, .btn-success:focus, .btn-success.focus, .btn-success:active, .btn-success.active, .open > .dropdown-toggle.btn-success {
    color: #fff;
    background-color: #449d44;
    border-color: #398439;
    box-shadow: inset 0 0 0 2px #398439;
}
.btn-danger:hover, .btn-danger:focus, .btn-danger.focus, .btn-danger:active, .btn-danger.active, .open > .dropdown-toggle.btn-danger {
    color: #fff;
    background-color: #c9302c;
    border-color: #ac2925;
    box-shadow: inset 0 0 0 2px #ac2925;
}
.btn-primary:hover, .btn-primary:focus, .btn-primary.focus, .btn-primary:active, .btn-primary.active, .open > .dropdown-toggle.btn-primary {
    color: #fff;
    background-color: #286090;
    border-color: #204d74;
    box-shadow: inset 0 0 0 2px #204d74;
}
.btn-default {
    color: #333;
    background-color: #efefef;
    border-color: #ccc;
}
.btn-default:hover, .btn-default:focus, .btn-default.focus, .btn-default:active, .btn-default.active, .open > .dropdown-toggle.btn-default {
    color: #333;
    background-color: #e6e6e6;
    border-color: #adadad;
    box-shadow: inset 0 0 0 5px #adadad;
}
.btn-inverse {
    background-color: #222;
    border-color: #080808;
    color: #9d9d9d;
}
.btn-inverse:hover, .btn-inverse:focus, .btn-inverse.focus, .btn-inverse:active, .btn-inverse.active, .open > .dropdown-toggle.btn-inverse {
    color: #fff;
    background-color: #080808;
    border-color: #333;
    box-shadow: inset 0 0 0 2px #333;
}
.btn-danger:hover, .btn-danger:focus, .btn-danger.focus, .btn-danger:active, .btn-danger.active, .open > .dropdown-toggle.btn-danger {
    color: #fff;
    background-color: #c9302c;
    border-color: #ac2925;
    box-shadow: inset 0 0 0 2px #ac2925;
}
.btn-danger.active, .btn-danger.focus, .btn-danger:active, .btn-danger:focus, .btn-danger:hover, .open>.dropdown-toggle.btn-danger {
    color: #c9302c;
    background-color: #fff;
    box-shadow: inset 0 0 0 2px #c9302c;
    border-color: #ac2925;
}
.panel {
    border-radius: 0;
    margin-top: 0;
    width:100%;
}

/*!
 * Soldier-up Designs - Soldier-up Designs Custom Bootstrap Accordion Form (https://soldierupdesigns.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
*/
@charset "UTF-8";
.accordion{
    width:50%;
    position:fixed;
	bottom:0;
	margin-bottom:0;
	padding-bottom:0;
}

.contact-panel{
	border-radius:0;
	background-color: #d9534f;
	border-color: #d43f3a;
	margin-bottom:0;
	position:fixed;
	bottom:0;
	width:100%;
}

.accordion label{
	color:#fff;
}
.accordion input{
	border-radius:0;
}

.panel-heading,
.panel-heading:hover
{
    position: absolute;
    top: 0;
    right: 0;
    z-index: -1;
    height: 100%;
    width: 3px;
    background-color: #1c1c1c;
    -webkit-transition: width .4s ease-in-out;
    -moz-transition: width .4s ease-in-out;
    -ms-transition: width .4s ease-in-out;
    transition: width .4s ease-in-out;
    
    }
.panel-heading:focus,
.panel-heading.focus,
.panel-heading:active,
.panel-heading.active{
	cursor:pointer;
	background-color: #000000;
	border-color: #ac2925;
	outline:none;
}

.accordion-toggle{
	text-align:center;
}

.accordion-toggle span:after{
    /* symbol for "opening" panels */
	font-family: 'FontAwesome';
	/* essential for enabling glyphicon */
	content:"\f078";
    position:absolute;
    top:0;
    bottom:0;
    right:5%;
	color: white;
	text-align:right;
	float:right;
	vertical-align:middle;
	margin-top:0;
	font-weight:700;
	font-size:120%;
}

.collapsed span:after{
	/* symbol for "collapsed" panels */
	content:"\f077";	
}

.contact-panel{
	border-radius:0;
	background-color: #d9534f;
	border-color: #d43f3a;
    margin-bottom:0;
    position:fixed;
    bottom:0;
    width:100%;
    vertical-align:middle;
}

.btn-dark{
	border-radius: 0;
	color: #fff;
	background-color: rgba(0,0,0,0.4);
}

.btn-dark:hover,
.btn-dark:focus,
.btn-dark:active,
.btn-dark.active{
	color: #fff;
	background-color: rgba(0,0,0,0.7);
}

@media(min-width: 768px){
	.contact-panel{
		width:50%;
	}
}

.social {
    z-index: 801;
    position: fixed;
    top: .5%;
    left: 0;
    padding: 0;
    margin: 0;
    font-size: 100%}
.social ul {
    background: #222;
}
.social ul li {
    list-style: none outside none;
    display: block;
    background: #222;
    padding: 0;
    margin: 0;
}
.nav>li>a {
    position: relative;
    display: block;
    padding: 0%;
    margin: 0;
}
.nav>li>a:focus, .nav>li>a:hover {
    text-decoration: none;
    background-color: #222;
}
.social i {
    width: 40px;
    height: 40px;
    color: #FFF;
    background-color: #222;
    font-size: 22px;
    text-align: center;
    padding-top: 12px;
    -webkit-transition: all ease 0.3s;
    -moz-transition: all ease 0.3s;
    -ms-transition: all ease 0.3s;
    -o-transition: all ease 0.3s;
    transition: all ease 0.3s;
}
.social .fa-facebook:hover {
    background: #4060A5;
    border: 1px solid #4060A5;
}
.social .fa-twitter:hover {
    background: #00ABE3;
    border: 1px solid #00ABE3;
}
.social .fa-google-plus:hover {
    background: #e64522;
    border: 1px solid #e64522;
}
.social .fa-github:hover {
    background: #343434;
    border: 1px solid #343434;
}
.social .fa-linkedin:hover {
    background: #0094BC;
    border: 1px solid #0094BC;
}
.social .fa-stack-overflow:hover {
    background: #FEA501;
    border: 1px solid #FEA501;
}
.social .fa-skype:hover {
    background: #00C6FF;
    border: 1px solid #00C6FF;
}
.social .fa-stack-exchange:hover {
    background: #4D86C9;
    border: 1px solid #4D86C9;

}
.social .fa-rss:hover {
    background: #e88845;
    border: 1px solid #e88845;
}
#social-collapse:after {
    font-family: 'FontAwesome';
    content: "\f068";
    float: none;
    position: relative;
    color: white;
}
#social-collapse.collapsed:after {
    content: "\f067";
}
ol.linenums{
    counter-reset:linenumber;
}
ol.linenums li{
    list-style-type:none;
    counter-increment:linenumber;
}
ol.linenums li:before{
    content: counter(linenumber);
    float:left;
    margin-left:-4em;
    text-align:right;
    width:3em;
}

.mt {
    margin-top: 2%;
}
.text-vertical-center {
	display: table-cell;
	text-align: center;
	vertical-align: middle;
}
.text-vertical-center h1 {
	margin: 0;
	padding: 0;
	font-size: 4.5em;
	font-weight: 700;
}
section {
	padding-bottom: 5%;
}
.bg-inverse {
	color: #FFF;
	background-color: #333;
}
.centered {
	text-align: center;
}
.mt {
	margin-top: 2%;
}
.text-vertical-center {
	display: table-cell;
	text-align: center;
	vertical-align: middle;
}
.text-vertical-center h1 {
    margin: 0;
    padding: 0;
    font-size: 4.5em;
    font-weight: 700;
}
hr.small {
	max-width: 100px;
}
.page-header{
	text-align: center;    
}

/*page styling*/
.bs-callout {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-color: #eee;
    border-image: none;
    border-radius: 3px;
    border-style: solid;
    border-width: 1px 1px 1px 5px;
    margin-bottom: 5px;
    padding: 20px;
}
.bs-callout:last-child {
    margin-bottom: 0px;
}
.bs-callout h4,
.bs-callout h5 {
    margin-bottom: 10px;
    margin-top: 0;
    font-weight: 600;
}

.bs-callout-danger {
    border-left-color: #d9534f;
}

.bs-callout-danger h4,
.bs-callout-danger h5{
    color: #d9534f;
}

.header-title {
    color: #fff;
}
.title-thin {
	font-weight: 300;
}
.service-item {
	margin-bottom: 30px;
}

/* 
========================
Social Accordion Styling
========================
*/
.nav > li > a {
    position: relative;
	display: block;
	padding: 0;
	margin: 0;
}
.nav > li > a:focus, .nav > li > a:hover {
	text-decoration: none;
	background-color: #222;
}
/*
===============================
Custom Bootstrap Form Styling
===============================
*/
.nav-tabs.nav-justified {
    border-bottom: 0 none;
    width: 100%}
.nav-tabs.nav-justified > li {
    display: table-cell;
    width: 1%;
    float: none;
}
.container-form .nav-tabs.nav-justified > li > a, .container-form .nav-tabs.nav-justified > li > a:hover, .container-form .nav-tabs.nav-justified > li > a:focus {
    background: #333333;
    border: 0 none;
    color: #ffffff;
    margin-bottom: 0;
    margin-right: 0;
    border-radius: 0;
    padding: 6% 3%;
    line-height: 1.5;
    font-weight: 600;
    font-size: 100%;
    outline: 0 none;
}
.container-form .nav-tabs.nav-justified > .active > a, .container-form .nav-tabs.nav-justified > .active > a:hover, .container-form .nav-tabs.nav-justified > .active > a:focus {
    background: #ffffff;
    color: #333333;
}
.container-form .nav-tabs.nav-justified > li > a:hover, .container-form .nav-tabs.nav-justified > li > a:focus {
    background: #de2f18;
}
.tabs-login {
    background: #ffffff;
    border: medium none;
    margin-top: -1px;
    padding: 10px 30px;
}
.container-form h2 {
    color: #222222;
}
.container-form {
    margin: 0 auto;
    padding: 2%}
.container-form h1 {
    border: 2px solid #222;
    background: #222;
    color: #fff;
    text-transform: uppercase;
    font-family: Montserrat,  "Helvetica Neue",  Helvetica,  Arial,  sans-serif;
    font-weight: 800;
    letter-spacing: 1px;
    -webkit-box-shadow: inset 0 0 0 2px #fff;
    -moz-box-shadow: inset 0 0 0 2px #fff;
    box-shadow: inset 0 0 0 2px #fff;
}
form {
    background: #d9534f;
    margin-top: -2%;
    width: 100%}
label {
    color: #fff;
}
.form-control {
    background-color: #c9302c !important;
    background-image: none;
    border: none;
    border-radius: 0;
    box-shadow: 0 1px 1px rgba(0,  0,  0,  0.075) inset;
    display: block;
    font-size: 14px;
    height: 34px;
    line-height: 1.42857;
    padding: 6px 12px;
    transition: border-color 0.15s ease-in-out 0s,  box-shadow 0.15s ease-in-out 0s;
    width: 100%;
    color: #inherit !important;
    -webkit-transition: all .8s ease-in-out;
    -moz-transition: all .8s ease-in-out;
    -ms-transition: all .8s ease-in-out;
    transition: all .8s ease-in-out;
    outline: none;
}
.form-control:hover {
    border-color: rgba(255,  00,  00,  0.75);
    background-color: #990000 !important;
    background-image: none;
    color: #inherit !important;
    color: #fff;
    -webkit-box-shadow: 0 0 10px rgba(255,  00,  00,  0.8);
    -moz-box-shadow: 0 0 10px rgba(255,  00,  00,  0.8);
    box-shadow: 0 0 10px rgba(255,  00,  00,  0.8);
}
.form-control:focus {
    border-color: rgba(22,  22,  22,  .75);
    outline: 0;
    outline: thin dotted 9;
    background: #fff !important;
    color: #333 !important;
    -webkit-box-shadow: 0 0 8px rgba(22,  22,  22,  .6);
    -moz-box-shadow: 0 0 8px rgba(22,  22,  22,  .6);
    box-shadow: 0 0 8px rgba(22,  22,  22,  .6);
}
::-webkit-input-placeholder {
    color: #fff !important;
    font-weight: 800;
    text-transform: uppercase;
}
.form-control:-moz-placeholder {
    color: #fff !important;
    opacity: 1;
    font-weight: 800;
    text-transform: uppercase;
}
::-moz-placeholder {
    color: #fff !important;
    opacity: 1;
    font-weight: 800;
    text-transform: uppercase;
}
:-ms-input-placeholder {
    color: #fff !important;
    font-weight: 800;
    text-transform: uppercase;
}
:focus::-webkit-input-placeholder {
    color: #333 !important;
    font-weight: 800;
    text-transform: uppercase;
}
.form-control:focus:-moz-placeholder {
    color: #333 !important;
    opacity: 1;
    font-weight: 800;
    text-transform: uppercase;
}
:focus::-moz-placeholder {
    color: #333 !important;
    opacity: 1;
    font-weight: 800;
    text-transform: uppercase;
}
:focus:-ms-input-placeholder {
    color: #333 !important;
    font-weight: 800;
    text-transform: uppercase;
}
[type="text"] {
    -webkit-appearance: textfield;
    -moz-appearance: textfield;
    appearance: textfield;
    color: #333;
}
.container-form .checkbox {
    margin-top: -15px;
}
.container1{
  width:100%!important;  
}
.container-form .btn {
    background-color: #222222;
    border-color: #222222;
    color: #ffffff;
    border-radius: 0;
    font-size: 18px;
    line-height: 1.33;
    padding: 10px 16px;
    width: 100%;
    box-shadow: inset 0 0 0 2px #fff;
}
.container-form .btn:hover, .container-form .btn:focus {
    background: #ffffff;
    border-color: #ededed;
    box-shadow: inset 0 0 0 2px #222;
    color: #222;
    -webkit-transition: background .8s ease-in-out;
    -moz-transition: background .8s ease-in-out;
    -ms-transition: background .8s ease-in-out;
    transition: background .8s ease-in-out;
}

.nocode{
    font-weight:700;
    color:#444444;
}

blockquote
{
    font-size: 80% !important;
    page-break-inside: avoid;
    border: 3px solid #fff;
    width: 80%;
     -webkit-box-shadow: inset 5px 0px 0px 0px #f60, 8px 8px 8px 2px #888;
        -mox-box-shadow: inset 5px 0px 0px 0px #f60, 8px 8px 8px 2px #888;
         -ms-box-shadow: inset 5px 0px 0px 0px #f60, 8px 8px 8px 2px #888;
             box-shadow: inset 5px 0px 0px 0px #f60, 8px 8px 8px 2px #888;
    
    padding: 10px 20px;
    margin: 0 0 20px;
    font-size: 17.5px;
    border-left: none;
}
</style>
<script>
   
$(document).ready(function()
{
	
	// Closes the sidebar menu on menu-close button click event
	$("#menu-close").click(function(e)							//declare the element event ...'(e)' = event (shorthand)
	{
																// - will not work otherwise")
		$("#sidebar-wrapper").toggleClass("active");			//instead on click event toggle active CSS element
		e.preventDefault(); 									//prevent the default action ("Do not remove as the code
		
		/*!
		======================= Notes ===============================
		* see: .sidebar-wrapper.active in: style.css
		==================== END Notes ==============================
		*/
	});															//Close 'function()'

	// Open the Sidebar-wrapper on Hover
	$("#menu-toggle").hover(function(e)							//declare the element event ...'(e)' = event (shorthand)
	{
		$("#sidebar-wrapper").toggleClass("active",true);		//instead on click event toggle active CSS element
		e.preventDefault();										//prevent the default action ("Do not remove as the code
	});

	$("#menu-toggle").bind('click',function(e)					//declare the element event ...'(e)' = event (shorthand)
	{
		$("#sidebar-wrapper").toggleClass("active",true);		//instead on click event toggle active CSS element
		e.preventDefault();										//prevent the default action ("Do not remove as the code
	});															//Close 'function()'

	$('#sidebar-wrapper').mouseleave(function(e)				//declare the jQuery: mouseleave() event 
																// - see: ('//api.jquery.com/mouseleave/' for details)
	{
		/*! .toggleClass( className, state ) */
		$('#sidebar-wrapper').toggleClass('active',false);		/* toggleClass: Add or remove one or more classes from each element
																in the set of matched elements, depending on either the class's
																presence or the value of the state argument */
		e.stopPropagation();									//Prevents the event from bubbling up the DOM tree
																// - see: ('//api.jquery.com/event.stopPropagation/' for details)
																
		e.preventDefault();										// Prevent the default action of the event will not be triggered
																// - see: ('//api.jquery.com/event.preventDefault/' for details)
	});
});
/*!


Simply:

	a[href*=#] 

		* get all anchors (a) that contains # in href but with:

	:not([href=#])

		* exclude anchors with href exaclty equals to #

example:

	<a href="#step1">yes</a>
	<a href="page.php#step2">yes</a>
	<a href="#">no</a> 

		* the selectors get first two anchor but it exclude the last
		source: http://stackoverflow.com/questions/20947529/what-does-ahref-nothref-code-mean

*/

$(document).ready(function()
{
    /* smooth scrolling for scroll to top */
	$('#to-top').bind('click', function()
	{
		$('body,html').animate({
			scrollTop: 0}, 
			2500);
	});

	//Easing Scroll replace Anchor name in URL and Offset Position
	$(function(){
		$('a[href*=#]:not([href=#])').click(function()
		{
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					$('html,body').animate({
						scrollTop: target.offset().top -420
					}, 3500, 'easeOutBounce');
					return false;
				}
			}
		});
	});
});


</script>

<section id="about-us" class="container">
        <br>
        <br>
        <br>
        <br>
        <div class="row">
          
          <div class="col-sm-6 text-left">
            <h1 class="heavy">API Management</h1>
          </div>
          <div class="col-sm-6 text-right">
            <ul class="breadcrumb pull-right">
                <li><a href="../">Home</a></li>
                <li><a href="../technologies/">Technologies</a></li>
                <li class="active">API Management</li>
            </ul>
          </div>
         
        </div>
<div class="row">
          
            <div class="col-sm-9">


<!-- Tab panes -->

 <p class="methodText">With customers becoming more demanding than ever, enterprises are becoming more adventurous and in turn the traditional enterprise boundaries are blurring rapidly.  Organizations are willing to open their on-premise data and applications to partners, customers, cloud services, mobile apps and websites. This definition of the modern “Open Enterprise” is being driven by the emergence of API’s and enterprises are looking to leverage their power to cope with the ever-changing business needs.  </p>
     
   <p class="methodText">API's provide a solution to enterprises that are looking to open up new revenue streams and add value to existing infrastructure. Rapid Scalability, Extreme Flexibility and Redefined Business Value are all advantages of an API initiative. To tell you the truth, API’s are not different when compared to SOA option selected by many enterprises. We expose services for consumption as API’s, but in turn create much more open model, with rapid utilization and innovative possibilities. </p>     
  
   
   <div class="row">
        
        <div class="col-sm-3 center">
          
          <center>
            <img src="../images/services/build.png" class="img-responsive" alt="Build" title="Build">
          </center>
          
          <div class="row">
            
            <div class="col-sm-12">
              
              <center>
                
                <h3 class="heavy">
         
                    Build
         
                </h3>
              
              </center>
              
            </div>
          </div>
        </div>
        <div class="col-sm-3 center">
          
          <center>
            <img src="../images/services/expose.png" class="img-responsive"  alt="Expose" title="Expose">
          </center>
          
          <div class="row">
            <div class="col-sm-12">
              <center>
                <h3 class="heavy">Expose</h3>
              </center>
            </div>
          </div>
        </div>
        <div class="col-sm-3 center">
          <center>
            <img src="../images/services/secure.png" class="img-responsive"  alt="Secure" title="Secure">
          </center>
          <div class="row">
            <div class="col-sm-12">
              <center>
                <h3 class="heavy">Secure</h3>
              </center>
            </div>
          </div>
        </div>
        <div class="col-sm-3 center">
          
          <center>
            <img src="../images/services/innovate.png" class="img-responsive" alt="Responsive image" alt="Innovate" title="Innovate">
          </center>
          
          <div class="row">
            <div class="col-sm-12">
              <center>
                <h3 class="heavy">
                   Innovate
                </h3>
              </center>
            </div>
          </div>
        </div>
      </div>
   <p class="methodText">These API’s provide options for developers to do magical things through these gateways into back-end systems. But, how do we <strong>manage</strong> these API’s? Is there a way to provide <strong>security</strong> for these openly exposed services? How do we control <strong>access</strong> to their consumption? What happens to applications consuming these API’s when we make <strong>version</strong> changes to the original API?</p>
   <p class="methodText">These are all questions that will pop up for an enterprise looking to adopt an open and flexible API solution for their growth. The answer to all these questions is the upcoming trend in IT, API Management. </p>
   <p class="methodText">API Management products help enterprises to understand, document and analyze their API’s. It is very important that organizations secure their API’s and provide restricted access to them. API Management also provides a way for organizations to gain insights into the usage of their API's through analytics. This helps organizations to provide better service and experience to consumers of their API’s. </p>
   <p class="methodText">API’s provide a simple, flexible and scalable approach to solve the needs of a rapidly changing enterprise. To acquire more information on how an API initiative can drive your organization please contact us at <a class="linkText" href="mailto:api@miraclesoft.com"><strong><u>api@miraclesoft.com</u></strong></a> . </p>
      </br>
     </br>
      
  </div>
  <div class="col-sm-3" >
      <nav id="sidebar-wrapper">
	<ul class="sidebar-nav">
		<li class="bs-callout bs-callout-danger">
			<a href="#top" title="Go to Top">Upcoming Webinars</a>
		</li>
		<li class="bs-callout bs-callout-danger">
			<a href="#" title="Go to About Us section">On-Demands Replay</a>
		</li>
		<li class="bs-callout bs-callout-danger">
			<a href="#" title="Navigate to Jonathan Adcox IT Resume">Technical Articles</a>
		</li>
		<li class="bs-callout bs-callout-danger">
			<a href="#" title="Navigate to 'Our Services' section">Case Study</a>
		</li>
	
	</ul>
</nav>
      
  </div>
  <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
 
  
</div>  

<div id="footer"></div>
    </section>
<script>
$(document).ready(function() {
  $.stickysidebarscroll("#<id_of_last_element>",{offset: {top: 10, bottom: 200}});
});
</script>

<?php include 'footer.1.php';?>
     
   
</body>
</html>