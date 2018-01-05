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
        .tinted-image {
            background: /* top, transparent red */
            linear-gradient( rgba(0, 0, 0, 0.55), rgba(0, 0, 0, 0.55)), /* your image */
            url("images/code.png");
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        
        label {
            font-weight: 600;
        }
        
        .text-dark,
        .text-dark:hover,
        a.text-dark,
        a.text-dark:hover,
        a.text-dark:focus {
            background-color: #232527;
            color: #fff !important;
        }
        
        .emerald {
            background-color: #0d416b !important;
        }
        
        .container .left input {
            float: left;
            width: 188px;
            height: 42px;
            padding: 0 15px;
            border: 1px solid #e6e6e6;
            background-color: #eceff1;
            -moz-border-radius: 21px;
            -webkit-border-radius: 21px;
            border-radius: 21px;
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: 400;
        }
        
        .container .left input:focus {
            outline: none;
        }
        
        .container .left a.search {
            display: block;
            float: left;
            width: 42px;
            height: 42px;
            margin-left: 10px;
            border: 1px solid #e6e6e6;
            background-color: #00b0ff;
            background-image: url("http://s11.postimg.org/dpuahewmn/name_type.png");
            background-repeat: no-repeat;
            background-position: top 12px left 14px;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
        }
        
        .container .left .people {
            margin-left: -1px;
            border-right: 1px solid #e6e6e6;
            border-left: 1px solid #e6e6e6;
            width: -moz-calc(100% + 2px);
            width: -webkit-calc(100% + 2px);
            width: -o-calc(100% + 2px);
            width: calc(100% + 2px);
        }
        
        .container .left .people .person {
            position: relative;
            width: 100%;
            padding: 12px 10% 16px;
            cursor: pointer;
            background-color: #fff;
        }
        
        .container .left .people .person:after {
            position: absolute;
            bottom: 0;
            left: 50%;
            display: block;
            width: 80%;
            height: 1px;
            content: '';
            background-color: #e6e6e6;
            -moz-transform: translate(-50%, 0);
            -ms-transform: translate(-50%, 0);
            -webkit-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
        }
        
        .container .left .people .person img {
            float: left;
            width: 40px;
            height: 40px;
            margin-right: 12px;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
        }
        
        .container .left .people .person .name {
            font-size: 14px;
            line-height: 22px;
            color: #1a1a1a;
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: 600;
        }
        
        .container .left .people .person .time {
            font-size: 14px;
            position: absolute;
            top: 16px;
            right: 10%;
            padding: 0 0 5px 5px;
            color: #999;
            background-color: #fff;
        }
        
        .container .left .people .person .preview {
            font-size: 14px;
            display: inline-block;
            overflow: hidden !important;
            width: 70%;
            white-space: nowrap;
            text-overflow: ellipsis;
            color: #999;
        }
        
        .container .left .people .person.active,
        .container .left .people .person:hover {
            margin-top: -1px;
            margin-left: -1px;
            padding-top: 13px;
            border: 0;
            background-color: #00b0ff;
            width: -moz-calc(100% + 2px);
            width: -webkit-calc(100% + 2px);
            width: -o-calc(100% + 2px);
            width: calc(100% + 2px);
            padding-left: -moz-calc(10% + 1px);
            padding-left: -webkit-calc(10% + 1px);
            padding-left: -o-calc(10% + 1px);
            padding-left: calc(10% + 1px);
        }
        
        .container .left .people .person.active span,
        .container .left .people .person:hover span {
            color: #fff;
            background: transparent;
        }
        
        .container .left .people .person.active:after,
        .container .left .people .person:hover:after {
            display: none;
        }
        
        .container .right {
            position: relative;
            float: left;
           width: 88.4%;
            height: 100%;
        }
        
        .container .right .top {
            width: 100%;
            height: 47px;
            padding: 15px 29px;
            background-color: #eceff1;
        }
        
        .container .right .top span {
            font-size: 15px;
            color: #999;
        }
        
        .container .right .top span .name {
            color: #1a1a1a;
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: 600;
        }
        
        .container .right .chat {
            position: relative;
            display: none;
            overflow: hidden;
            padding: 0 35px 92px;
            border-width: 1px 1px 1px 0;
            border-style: solid;
            border-color: #e6e6e6;
            height: -moz-calc(100% - 48px);
            height: -webkit-calc(100% - 48px);
            height: -o-calc(100% - 48px);
            height: calc(100% - 48px);
            -webkit-justify-content: flex-end;
            justify-content: flex-end;
            -webkit-flex-direction: column;
            flex-direction: column;
        }
        
        .container .right .chat.active-chat {
            display: block;
            display: -webkit-flex;
            display: flex;
        }
        
        .container .right .chat.active-chat .bubble {
            -moz-transition-timing-function: cubic-bezier(0.4, -0.04, 1, 1);
            -o-transition-timing-function: cubic-bezier(0.4, -0.04, 1, 1);
            -webkit-transition-timing-function: cubic-bezier(0.4, -0.04, 1, 1);
            transition-timing-function: cubic-bezier(0.4, -0.04, 1, 1);
        }
        
        .container .right .chat.active-chat .bubble:nth-of-type(1) {
            -moz-animation-duration: 0.15s;
            -webkit-animation-duration: 0.15s;
            animation-duration: 0.15s;
        }
        
        .container .right .chat.active-chat .bubble:nth-of-type(2) {
            -moz-animation-duration: 0.3s;
            -webkit-animation-duration: 0.3s;
            animation-duration: 0.3s;
        }
        
        .container .right .chat.active-chat .bubble:nth-of-type(3) {
            -moz-animation-duration: 0.45s;
            -webkit-animation-duration: 0.45s;
            animation-duration: 0.45s;
        }
        
        .container .right .chat.active-chat .bubble:nth-of-type(4) {
            -moz-animation-duration: 0.6s;
            -webkit-animation-duration: 0.6s;
            animation-duration: 0.6s;
        }
        
        .container .right .chat.active-chat .bubble:nth-of-type(5) {
            -moz-animation-duration: 0.75s;
            -webkit-animation-duration: 0.75s;
            animation-duration: 0.75s;
        }
        
        .container .right .chat.active-chat .bubble:nth-of-type(6) {
            -moz-animation-duration: 0.9s;
            -webkit-animation-duration: 0.9s;
            animation-duration: 0.9s;
        }
        
        .container .right .chat.active-chat .bubble:nth-of-type(7) {
            -moz-animation-duration: 1.05s;
            -webkit-animation-duration: 1.05s;
            animation-duration: 1.05s;
        }
        
        .container .right .chat.active-chat .bubble:nth-of-type(8) {
            -moz-animation-duration: 1.2s;
            -webkit-animation-duration: 1.2s;
            animation-duration: 1.2s;
        }
        
        .container .right .chat.active-chat .bubble:nth-of-type(9) {
            -moz-animation-duration: 1.35s;
            -webkit-animation-duration: 1.35s;
            animation-duration: 1.35s;
        }
        
        .container .right .chat.active-chat .bubble:nth-of-type(10) {
            -moz-animation-duration: 1.5s;
            -webkit-animation-duration: 1.5s;
            animation-duration: 1.5s;
        }
        
        .container .right .write {
            position: absolute;
            bottom: 29px;
            left: 30px;
            height: 42px;
            padding-left: 8px;
            border: 1px solid #e6e6e6;
            background-color: #eceff1;
            width: -moz-calc(100% - 58px);
            width: -webkit-calc(100% - 58px);
            width: -o-calc(100% - 58px);
            width: calc(100% - 58px);
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            border-radius: 5px;
        }
        
        .container .right .write input {
            font-size: 16px;
            float: left;
            width: 347px;
            height: 40px;
            padding: 0 10px;
            color: #1a1a1a;
            border: 0;
            outline: none;
            background-color: #eceff1;
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: 400;
        }
        
        .container .right .write .write-link.attach:before {
            display: inline-block;
            float: left;
            width: 20px;
            height: 42px;
            content: '';
            background-image: url("http://s1.postimg.org/s5gfy283f/attachemnt.png");
            background-repeat: no-repeat;
            background-position: center;
        }
        
        .container .right .write .write-link.smiley:before {
            display: inline-block;
            float: left;
            width: 20px;
            height: 42px;
            content: '';
            background-image: url("http://s14.postimg.org/q2ug83h7h/smiley.png");
            background-repeat: no-repeat;
            background-position: center;
        }
        
        .container .right .write .write-link.send:before {
            display: inline-block;
            float: left;
            width: 20px;
            height: 42px;
            margin-left: 11px;
            content: '';
            background-image: url("http://s30.postimg.org/nz9dho0pp/send.png");
            background-repeat: no-repeat;
            background-position: center;
        }
        
        .container .right .bubble {
            font-size: 16px;
            position: relative;
            display: inline-block;
            clear: both;
            margin-bottom: 8px;
            padding: 13px 14px;
            vertical-align: top;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            border-radius: 5px;
        }
        
        .container .right .bubble:before {
            position: absolute;
            top: 19px;
            display: block;
            width: 8px;
            height: 6px;
            content: '\00a0';
            -moz-transform: rotate(29deg) skew(-35deg);
            -ms-transform: rotate(29deg) skew(-35deg);
            -webkit-transform: rotate(29deg) skew(-35deg);
            transform: rotate(29deg) skew(-35deg);
        }
        
        .container .right .bubble.you {
            float: left;
            color: #fff;
            margin-left: 15px;
            background-color: #86BB71;
            -webkit-align-self: flex-start;
            align-self: flex-start;
            -moz-animation-name: slideFromLeft;
            -webkit-animation-name: slideFromLeft;
            animation-name: slideFromLeft;
        }
        
        .bubble.you:before {
            left: -3px;
            background-color: #86BB71;
        }
        
        .bubble.me {
            float: right;
            margin-right: 15px;
            color: #1a1a1a;
            background-color: #94C2ED;
            -webkit-align-self: flex-end;
            align-self: flex-end;
            -moz-animation-name: slideFromRight;
            -webkit-animation-name: slideFromRight;
            animation-name: slideFromRight;
        }
        
        .bubble.me:before {
            right: -3px;
            background-color: #94C2ED;
        }
        
        .conversation-start {
            position: relative;
            width: 100%;
            margin-bottom: 27px;
            text-align: center;
        }
        
        .conversation-start span {
            font-size: 14px;
            display: inline-block;
            color: #999;
        }
        
        .conversation-start span:before,
        .container .right .conversation-start span:after {
            position: absolute;
            top: 10px;
            display: inline-block;
            width: 30%;
            height: 1px;
            content: '';
            background-color: #e6e6e6;
        }
        
        .conversation-start span:before {
            left: 0;
        }
        
        .conversation-start span:after {
            right: 0;
        }
        
        @keyframes slideFromLeft {
            0% {
                margin-left: -200px;
                filter: progid: DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0;
            }
            100% {
                margin-left: 0;
                filter: progid: DXImageTransform.Microsoft.Alpha(enabled=false);
                opacity: 1;
            }
        }
        
        @-webkit-keyframes slideFromLeft {
            0% {
                margin-left: -200px;
                filter: progid: DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0;
            }
            100% {
                margin-left: 0;
                filter: progid: DXImageTransform.Microsoft.Alpha(enabled=false);
                opacity: 1;
            }
        }
        
        @keyframes slideFromRight {
            0% {
                margin-right: -200px;
                filter: progid: DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0;
            }
            100% {
                margin-right: 0;
                filter: progid: DXImageTransform.Microsoft.Alpha(enabled=false);
                opacity: 1;
            }
        }
        
        @-webkit-keyframes slideFromRight {
            0% {
                margin-right: -200px;
                filter: progid: DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0;
            }
            100% {
                margin-right: 0;
                filter: progid: DXImageTransform.Microsoft.Alpha(enabled=false);
                opacity: 1;
            }
        }
    </style>
    <style type="text/css">
        .display-1 {
            font-size: 3rem !important;
        }
        
        .card {
            overflow: hidden;
            height: 100% !important;
        }
        
        .card-block .rotate {
            z-index: 8;
            float: right;
            height: 100% !important;
        }
        
        .card-block .rotate i {
            color: rgba(20, 20, 20, 0.15);
            position: absolute;
            left: 0;
            left: auto;
            right: -10px;
            bottom: 0;
            display: block;
            -webkit-transform: rotate(-44deg);
            -moz-transform: rotate(-44deg);
            -o-transform: rotate(-44deg);
            -ms-transform: rotate(-44deg);
            transform: rotate(-44deg);
        }
    </style>
    <style>
        .breadcrumb {
            margin: 0px !important;
        }
        
        .breadcrumb li,
        .breadcrumb li a {
            color: #FFF !important;
        }
        
        .text-dark,
        .text-dark:hover,
        a.text-dark,
        a.text-dark:hover,
        a.text-dark:focus {
            background-color: #232527;
            color: #fff;
        }
        
        .card {
            border: 0px !important;
        }
        
        .emerald {
            background-color: #0d416b !important;
            width: 100%;
        }
        
        .list-inline {
            margin-left: 0px!important;
            list-style: none;
        }
        
        #services1 {
            background-image: url('')
        }
        
        .msg-left-blue {
            background-color: #00aae7;
            height: 80px;
        }
        
        .msg-left-blue:hover {
            background-color: #1ac2ff;
        }
        
        .msg-left-blue:hover ~ .msg-left-blue {
            background-color: #1ac2ff;
        }
        
        .blu2:hover ~ .blu1 {
            background-color: #1ac2ff !important;
        }
        
        .msg-left-midblue {
            background-color: #2368a0;
            height: 80px;
        }
        
        .msg-left-darkblue {
            background-color: #0d416b;
            height: 80px;
        }
        
        .msg-left-grey {
            background-color: #8c8c8c;
            height: 80px;
        }
        
        .server-msg {
            background-color: #eeeeee;
            bottom: 60px !important;
            position: absolute;
            padding: 10px 10px 0;
            left: 15px;
            background-color: #00aae7;
            color: #ffffff;
        }
        
        .user-msg {
            background-color: #eeeeee;
            bottom: 120px !important;
            position: absolute;
            right: 15px;
            padding: 10px 10px 0;
        }
        
        .user-msg:after {
            content: "";
            position: absolute;
            left: 100%;
            top: 37%;
            width: 0;
            height: 0;
            border-top: 4px solid transparent;
            border-left: 7px solid #eeeeee;
            border-bottom: 6px solid transparent;
        }
        
        .user-msg2 {
            background-color: #eeeeee;
            bottom: 70px !important;
            position: absolute;
            right: 15px;
            padding: 10px 10px 0;
        }
        
        .user-msg1:after {
            content: "";
            position: absolute;
            left: 100%;
            top: 37%;
            width: 0;
            height: 0;
            border-top: 4px solid transparent;
            border-left: 7px solid #eeeeee;
            border-bottom: 6px solid transparent;
        }
        
        .server-msg:after,
        .server-msg:before {
            right: 100%;
            top: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
        }
        
        .server-msg:after {
            border-color: rgba(136, 183, 213, 0);
            border-right-color: #00aae7;
            border-width: 6px;
            margin-top: -6px;
        }
        
        .server-msg:before {
            border-color: rgba(194, 225, 245, 0);
            border-right-color: #00aae7;
            border-width: 0;
            margin-top: 0;
        }
        
        .user-msg1 {
            background-color: #eeeeee;
            bottom: 10px !important;
            position: absolute;
            right: 15px;
            padding: 10px 10px 0;
        }
        
        h5 {
            color: #ffffff !important;
        }
    </style>
    <style>
    .spinner {
            width: 70px;
            text-align: center;
            position: static !important;
            bottom: 0px !important;
        }
        
        .spinner > div {
            width: 10px;
            height: 10px;
            background-color: #fff;
            border-radius: 100%;
            display: inline-block;
            -webkit-animation: sk-bouncedelay 1.4s infinite ease-in-out both;
            animation: sk-bouncedelay 1.4s infinite ease-in-out both;
        }
        
        .spinner .bounce1 {
            -webkit-animation-delay: -0.32s;
            animation-delay: -0.32s;
        }
        
        .spinner .bounce2 {
            -webkit-animation-delay: -0.16s;
            animation-delay: -0.16s;
        }
        
        @-webkit-keyframes sk-bouncedelay {
            0%,
            80%,
            100% {
                -webkit-transform: scale(0)
            }
            40% {
                -webkit-transform: scale(1.0)
            }
        }
        
        @keyframes sk-bouncedelay {
            0%,
            80%,
            100% {
                -webkit-transform: scale(0);
                transform: scale(0);
            }
            40% {
                -webkit-transform: scale(1.0);
                transform: scale(1.0);
            }
        }
        
        #message1,
        #message2,
        #message3,
        #message4,
        #message5,
        #message6 {
            display: none;
        }
    
    
    
   
    
    .left-black{
        background-color:#232527 !important;
    }
    .left-black:hover{
        background-color:#8c8c8c !important;
        
    }
     .left-blue{
         background-color: #8c8c8c !important;
        
    }
    .left-blue:hover{
       background-color:  rgba(0, 170, 231, 0.70) !important;
          
        
    }
     .left-blue2{
         background-color: #0d416b !important;
        
    }
    .left-blue2:hover{
         background-color: rgba(13, 65, 107, 0.70) !important;
        
    }
    .left-red{
        background-color:#ef4048 !important;
    }
    .left-red:hover{
        background-color: rgba(234, 64, 72, 0.80) !important;
    }
    </style>
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
.chat{
cursor: pointer;
margin-top: 54%;
margin-right: 74px;
margin-bottom: 68px;
}
#page-menu nav li:hover a, #page-menu nav li.current a {
    background-color:transparent !important;
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
					
					</nav>

					<div id="page-submenu-trigger"><i class="icon-reorder"></i></div>

				</div>

			</div>

		</div><!-- #page-menu end -->



		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">
				
<!-- Chat Bot-->

        <section id="services1" style="background-color:#C5DDEB;">            
        <div class="container">
            <div class="row">
                <br>
                <div class="col-sm-12">
                  <div class="col-sm-6">
                      <div id="page-menu">
                          <nav>
                 	<div class="chat">
						
						<ul>
							<li>
								<a class="row" id="left1" data-href="#left1" class="no-offset">
                                <div><img class="img-responsive" src="/NewFolder/images/chat-bot1.png" alt="user"></div>
                               </a>
							</li>
						
						<!--	<li><a href="#" data-href="#section-services"><div>Services</div></a></li>
						
							<li><a href="#" data-href="#section-events"><div>Events</div></a></li> -->
								<li>
								   <a class="row" id="left2" data-href="#left2" class="no-offset">
                                <div><img class="img-responsive" src="/NewFolder/images/chat-bot2.png" alt="user"></div>
                        </a>
                        </li>
							<li> <a class="row" id="left3" data-href="#left3" class="no-offset">
                                <div><img class="img-responsive" src="/NewFolder/images/chat-bot3.png" alt="user"></div>
                        </a></li>
							<li><a class="row" id="left4" data-href="#left4" class="no-offset">
                                <div><img class="img-responsive" src="/NewFolder/images/chat-bot4.png" alt="user"></div>
                        </a></li>
						<!---	<li><a href="#" data-href="#section-contact"><div>Contact</div></a></li> 
								<li class=""><a href="#" data-href="#oc-clients-full"><div>Partnerships</div></a></li>--->
						</ul>
						</div></nav></div> </div>
                    <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-12 ">
                                </div>
                                <div id="chat-window" style="margin-top:45%">
                                    <div class="row container right" style="float:right;margin-right:8px" id="message1">
                                        <div class="col-sm-6 bubble me">
                                            hai
                                        </div>
                                    </div>
                                    
                                    <div class="row container right" style="float:left;margin-left:8px" id="message2">

                                        <div class="col-sm-6 bubble you">
                                            hai
                                        </div>
                                        
                                    </div>
                                    <div class="row container right" style="float:right;margin-right:8px" id="message3">

                                        <div class="col-sm-6 bubble me">
                                            hai
                                        </div>
                                    </div>
                                    <div class="row container right" style="float:left;margin-left:8px" id="message4">

                                        <div class="col-sm-6 bubble you">
                                            hai
                                        </div>
                                    </div>
                                    <div class="row container right" style="float:right;margin-right:8px" id="message5">

                                        <div class="col-sm-6   bubble me">
                                            hai
                                        </div>
                                    </div>

                                </div>
                            </div>

                    </div>

                </div>
                </div>
</div>

        </section>
				
				
<!--Chat Bot End-->				
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

	

	</div><!-- #wrapper end -->

</section>

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
	
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>


	<script type="text/javascript" src="js/rajfunction.js"></script>
<!-- Chat Bot-->

                <link rel="stylesheet" href="../../css/box.css">

                <script src="js/query.js"></script>
                <script src="js/bootstrap.js"></script>

                <script src="js/jquery-2.2.0.min.js"></script>
                <script src="js/bootstrap.min.js"></script>
                <script src="css/index.js"></script>
                <script src="js/plugins.js"></script>

                <script src="js/app.js"></script>
                <script>
                    var flag = 0;
                    var stage=1;
                    var messages=[];
                    var messages1 = ["Hai I'm Watson Bot One", "What the benefits of implementing a chatbot?", "There are many benefits of implementing chatbots, but the most common ones are in customer services.", "how about you ?", "Fine, Thank you ", "Nice to meet you"];
                    var messages2 = ["Hai I'm Watson Bot two", "Are chatbots useful for businesses?", "Companies in virtually all domain are adopting chatbots.", "how about you ?", "Fine, Thank you ", "Nice to meet you"];
                    var messages3 = ["Hai I'm Watson Bot three", "How is the project coming along? ", "Are we meeting today? Project has been already finished and I have results to show you. ", "how about you ?", "Fine, Thank you ", "Nice to meet you"];
                    var messages4 = ["Hai I'm Watson Bot four", " Have you faced any problems at the last phase of the project? ", "Actually everything was fine. I'm very excited to show this to our team. ", "how about you ?", "Fine, Thank you ", "Nice to meet you"];
                    var timeouts = [];
                    var i = 0;

                    function getMessage() {
                  
                        return messages[i];
                        
                    }

                    function toggleFlag() {
                        if (flag == 0)
                            flag = 1;
                        else
                            flag = 0;
                    }
                    loadMessages(messages1);
                    flag=1;
                    $("#left1").click(function(){
                        
                        if(1){
                        loadMessages(messages1);
                        toggleFlag();
                        }
                        else{
                            alert("please wait")
                        }
                        
                    });
                    $("#left2").click(function(){
                         if(1){
                        $(".left-blue2").css("background-color", "red");
                        loadMessages(messages2);
                        toggleFlag();
                        }
                        else{
                            alert("please wait")
                        }
                        
                       
                    });
                    $("#left3").click(function(){
                          if(1){
                        loadMessages(messages3);
                        toggleFlag();
                        }
                        else{
                            alert("please wait")
                        }
                        
                    });
                    $("#left4").click(function(){
                         if(1){
                        loadMessages(messages4);
                        toggleFlag();
                        }
                        else{
                            alert("please wait")
                        }
                        
                    });
                    
                    function loadMessages(messages_array){
                        var highestTimeoutId = setTimeout(";");
						for (var i = 0 ; i < highestTimeoutId ; i++) {
					    clearTimeout(i); 
					}
                        flag=1;
                        $("#chat-window").html("");
                        $("#chat-window").css('margin-top','5%');
                    messages=messages_array;
                    
                    setTimeout(function() {
                  
                        var message = '<div class="row right" style="float:left;margin-right:8px">' +
                            '<div class="col-sm-6 bubble you" id="div1">' +
                            '<div class="spinner">' +
                            '<div class="bounce1"></div>' +
                            '<div class="bounce2"></div>' +
                            '<div class="bounce3"></div>' +
                            '</div>' +
                            '</div>' +
                            '</div>';
                        $("#chat-window").append(message);
                        setTimeout(function() {
                            $('#div1').html(messages[0]);
                        }, 2000);
                    }, 1000);
                        
 
                    setTimeout(function() {

                        $("#chat-window").css('margin-top', '40%')
                        var message = '<div class="row container right" style="float:right;margin-left:8px">' +
                            '<div class="col-sm-6 bubble me" id="div2">' +
                            '<div class="spinner">' +
                            '<div class="bounce1"></div>' +
                            '<div class="bounce2"></div>' +
                            '<div class="bounce3"></div>' +
                            '</div>' +
                            '</div>' +

                            '</div>';
                        $("#chat-window").append(message);
                        setTimeout(function() {
                            $('#div2').html(messages[1]);
                        }, 2000);
                        $("#chat-window").css('margin-top', '40%')
                    }, 4000);
                    setTimeout(function() {

                      
                        var message = '<div class="row container right" style="float:left;margin-right:8px">' +
                            '<div class="col-sm-6 bubble you" id="div3">' +
                            '<div class="spinner">' +
                            '<div class="bounce1"></div>' +
                            '<div class="bounce2"></div>' +
                            '<div class="bounce3"></div>' +
                            '</div>' +
                            '</div>' +
                            '</div>';
                        $("#chat-window").append(message);
                        setTimeout(function() {
                            $('#div3').html(messages[2]);
                        }, 2000);
                        $("#chat-window").css('margin-top', '30%')
                    }, 7000);
                    setTimeout(function() {

                   
                        var message = '<div class="row container right" style="float:right;margin-left:8px">' +
                            '<div class="col-sm-6 bubble me" id="div4">' +
                            '<div class="spinner">' +
                            '<div class="bounce1"></div>' +
                            '<div class="bounce2"></div>' +
                            '<div class="bounce3"></div>' +
                            '</div>' +
                            '</div>' +
                            '</div>';
                        $("#chat-window").append(message);
                        setTimeout(function() {
                            $('#div4').html(messages[3]);
                        }, 2000);
                        $("#chat-window").css('margin-top', '20%')
                    }, 10000);
                    setTimeout(function() {

                     
                        var message = '<div class="row container right" style="float:left;margin-right:8px">' +
                            '<div class="col-sm-6 bubble you" id="div5">' +
                            '<div class="spinner">' +
                            '<div class="bounce1"></div>' +
                            '<div class="bounce2"></div>' +
                            '<div class="bounce3"></div>' +
                            '</div>' +
                            '</div>' +
                            '</div>';
                        $("#chat-window").append(message);
                        setTimeout(function() {
                            $('#div5').html(messages[4]);
                        }, 2000);
                        $("#chat-window").css('margin-top', '10%')
                    }, 13000);
                    setTimeout(function() {

                        var message = '<div class="row container right" style="float:right;margin-left:8px">' +
                            '<div class="col-sm-6 bubble me" id="div6">' +
                            '<div class="spinner">' +
                            '<div class="bounce1"></div>' +
                            '<div class="bounce2"></div>' +
                            '<div class="bounce3"></div>' +
                            '</div>' +
                            '</div>' +
                            '</div>';
                        $("#chat-window").append(message);
                        setTimeout(function() {
                            $('#div6').html(messages[5]);
                            toggleFlag();
                            if(stage==1){
                                stage=2;
                                loadMessages(messages2);
                            }
                            else if(stage==2){
                                stage=3;
                                loadMessages(messages3);
                            }
                            else if(stage==3){
                                stage=4;
                                loadMessages(messages4);
                            }
                            else if(stage==4){
                                stage=1;
                                loadMessages(messages1);
                            }
                        }, 2000);
                        $("#chat-window").css('margin-top', '0%')
                    }, 16000);
                    }
                </script>

</body>
 <?php include 'footer.php';?>
</html>