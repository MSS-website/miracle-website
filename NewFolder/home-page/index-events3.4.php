<!DOCTYPE html>
<!-- saved from url=(0059)http://themes.semicolonweb.com/html/canvas/index-events.php -->
<html dir="ltr" lang="en-US"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link type="text/css" rel="stylesheet" href="./Home - Events Layout _ Canvas_files/css"><style type="text/css">.gm-style .gm-style-cc span,.gm-style .gm-style-cc a,.gm-style .gm-style-mtc div{font-size:10px}</style><style type="text/css">@media print {  .gm-style .gmnoprint, .gmnoprint {    display:none  }}@media screen {  .gm-style .gmnoscreen, .gmnoscreen {    display:none  }}</style><style type="text/css">.gm-style-pbc{transition:opacity ease-in-out;background-color:rgba(0,0,0,0.45);text-align:center}.gm-style-pbt{font-size:22px;color:white;font-family:Roboto,Arial,sans-serif;position:relative;margin:0;top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%)}</style>

	<script type="text/javascript" src="./Home - Events Layout _ Canvas_files/839484a19a"></script><script src="./Home - Events Layout _ Canvas_files/nr-998.min.js.download"></script><script async="" src="./Home - Events Layout _ Canvas_files/analytics.js.download"></script><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,t,n){function r(n){if(!t[n]){var o=t[n]={exports:{}};e[n][0].call(o.exports,function(t){var o=e[n][1][t];return r(o||t)},o,o.exports)}return t[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(e,t,n){function r(){}function o(e,t,n){return function(){return i(e,[(new Date).getTime()].concat(u(arguments)),t?null:this,n),t?void 0:this}}var i=e("handle"),a=e(2),u=e(3),c=e("ee").get("tracer"),f=NREUM;"undefined"==typeof window.newrelic&&(newrelic=f);var s=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit"],l="api-",p=l+"ixn-";a(s,function(e,t){f[t]=o(l+t,!0,"api")}),f.addPageAction=o(l+"addPageAction",!0),f.setCurrentRouteName=o(l+"routeName",!0),t.exports=newrelic,f.interaction=function(){return(new r).get()};var d=r.prototype={createTracer:function(e,t){var n={},r=this,o="function"==typeof t;return i(p+"tracer",[Date.now(),e,n],r),function(){if(c.emit((o?"":"no-")+"fn-start",[Date.now(),r,o],n),o)try{return t.apply(this,arguments)}finally{c.emit("fn-end",[Date.now()],n)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,t){d[t]=o(p+t)}),newrelic.noticeError=function(e){"string"==typeof e&&(e=new Error(e)),i("err",[e,(new Date).getTime()])}},{}],2:[function(e,t,n){function r(e,t){var n=[],r="",i=0;for(r in e)o.call(e,r)&&(n[i]=t(r,e[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;t.exports=r},{}],3:[function(e,t,n){function r(e,t,n){t||(t=0),"undefined"==typeof n&&(n=e?e.length:0);for(var r=-1,o=n-t||0,i=Array(o<0?0:o);++r<o;)i[r]=e[t+r];return i}t.exports=r},{}],ee:[function(e,t,n){function r(){}function o(e){function t(e){return e&&e instanceof r?e:e?c(e,u,i):i()}function n(n,r,o){if(!p.aborted){e&&e(n,r,o);for(var i=t(o),a=v(n),u=a.length,c=0;c<u;c++)a[c].apply(i,r);var f=s[w[n]];return f&&f.push([y,n,r,i]),i}}function d(e,t){b[e]=v(e).concat(t)}function v(e){return b[e]||[]}function g(e){return l[e]=l[e]||o(n)}function m(e,t){f(e,function(e,n){t=t||"feature",w[n]=t,t in s||(s[t]=[])})}var b={},w={},y={on:d,emit:n,get:g,listeners:v,context:t,buffer:m,abort:a,aborted:!1};return y}function i(){return new r}function a(){(s.api||s.feature)&&(p.aborted=!0,s=p.backlog={})}var u="nr@context",c=e("gos"),f=e(2),s={},l={},p=t.exports=o();p.backlog=s},{}],gos:[function(e,t,n){function r(e,t,n){if(o.call(e,t))return e[t];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,t,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[t]=r,r}var o=Object.prototype.hasOwnProperty;t.exports=r},{}],handle:[function(e,t,n){function r(e,t,n,r){o.buffer([e],r),o.emit(e,t,n)}var o=e("ee").get("handle");t.exports=r,r.ee=o},{}],id:[function(e,t,n){function r(e){var t=typeof e;return!e||"object"!==t&&"function"!==t?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");t.exports=r},{}],loader:[function(e,t,n){function r(){if(!h++){var e=y.info=NREUM.info,t=l.getElementsByTagName("script")[0];if(setTimeout(f.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&t))return f.abort();c(b,function(t,n){e[t]||(e[t]=n)}),u("mark",["onload",a()],null,"api");var n=l.createElement("script");n.src="https://"+e.agent,t.parentNode.insertBefore(n,t)}}function o(){"complete"===l.readyState&&i()}function i(){u("mark",["domContent",a()],null,"api")}function a(){return(new Date).getTime()}var u=e("handle"),c=e(2),f=e("ee"),s=window,l=s.document,p="addEventListener",d="attachEvent",v=s.XMLHttpRequest,g=v&&v.prototype;NREUM.o={ST:setTimeout,CT:clearTimeout,XHR:v,REQ:s.Request,EV:s.Event,PR:s.Promise,MO:s.MutationObserver},e(1);var m=""+location,b={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-998.min.js"},w=v&&g&&g[p]&&!/CriOS/.test(navigator.userAgent),y=t.exports={offset:a(),origin:m,features:{},xhrWrappable:w};l[p]?(l[p]("DOMContentLoaded",i,!1),s[p]("load",r,!1)):(l[d]("onreadystatechange",o),s[d]("onload",r)),u("mark",["firstbyte",a()],null,"api");var h=0},{}]},{},["loader"]);</script>
	<meta name="author" content="SemiColonWeb">

	<!-- Stylesheets
	============================================= -->
	<link href="css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="main.css" type="text/css">
	<link rel="stylesheet" href="calendar.css" type="text/css">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- Document Title
	============================================= -->
	<title>Home - Events Layout | Canvas</title>


<script type="text/javascript" charset="UTF-8" src="common.js"></script><script type="text/javascript" charset="UTF-8" src="map.js"></script><script type="text/javascript" charset="UTF-8" src="util.js"></script><script type="text/javascript" charset="UTF-8" src="geocoder.js"></script><script type="text/javascript" charset="UTF-8" src="marker.js"></script><style id="fit-vids-style">.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}</style><link id="swcolors-Css" rel="stylesheet" href="colors.php" type="text/css"><style type="text/css">.gm-style {
        font: 400 11px Roboto, Arial, sans-serif;
        text-decoration: none;
      }
      .gm-style img { max-width: none; }</style><script type="text/javascript" charset="UTF-8" src="onion.js"></script><script type="text/javascript" charset="UTF-8" src="controls.js"></script><script type="text/javascript" charset="UTF-8" src="infowindow.js"></script><script type="text/javascript" charset="UTF-8" src="stats.js"></script><script type="text/javascript" charset="UTF-8" src="QuotaService.RecordEvent"></script></head>

<body class="stretched device-lg">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix" style="animation-duration: 1.5s; opacity: 1;">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header">

			<div id="header-wrap" class="">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="http://themes.semicolonweb.com/html/canvas/index.php" class="standard-logo" data-dark-logo="http://canvashtml-cdn.semicolonweb.com/images/logo-dark.png"><img src="logo.png" alt="Canvas Logo"></a>
						<a href="http://themes.semicolonweb.com/html/canvas/index.php" class="retina-logo" data-dark-logo="http://canvashtml-cdn.semicolonweb.com/images/logo-dark@2x.png"><img src="logo@2x.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul class="sf-js-enabled" style="touch-action: pan-y;">
							<li class="current sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/index.php" class="sf-with-ul"><div>Home</div></a>
								<ul style="display: none;">
									<li class="sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/index-corporate.php" class="sf-with-ul"><div>Home - Corporate</div></a>
										<ul style="display: none;">
											<li><a href="http://themes.semicolonweb.com/html/canvas/index-corporate.php"><div>Corporate - Layout 1</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/index-corporate-2.php"><div>Corporate - Layout 2</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/index-corporate-3.php"><div>Corporate - Layout 3</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/index-corporate-4.php"><div>Corporate - Layout 4</div></a></li>
										</ul>
									</li>
									<li class="sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/index-portfolio.php" class="sf-with-ul"><div>Home - Portfolio</div></a>
										<ul style="display: none;">
											<li><a href="http://themes.semicolonweb.com/html/canvas/index-portfolio.php"><div>Portfolio - Layout 1</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/index-portfolio-2.php"><div>Portfolio - Layout 2</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/index-portfolio-3.php"><div>Portfolio - Masonry</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/index-portfolio-4.php"><div>Portfolio - AJAX</div></a></li>
										</ul>
									</li>
									<li class="sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/index-blog.php" class="sf-with-ul"><div>Home - Blog</div></a>
										<ul style="display: none;">
											<li><a href="http://themes.semicolonweb.com/html/canvas/index-blog.php"><div>Blog - Layout 1</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/index-blog-2.php"><div>Blog - Layout 2</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/index-blog-3.php"><div>Blog - Layout 3</div></a></li>
										</ul>
									</li>
									<li class="sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/index-shop.php" class="sf-with-ul"><div>Home - Shop</div></a>
										<ul style="display: none;">
											<li><a href="http://themes.semicolonweb.com/html/canvas/index-shop.php"><div>Shop - Layout 1</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/index-shop-2.php"><div>Shop - Layout 2</div></a></li>
										</ul>
									</li>
									<li class="sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/index-magazine.php" class="sf-with-ul"><div>Home - Magazine</div></a>
										<ul style="display: none;">
											<li><a href="http://themes.semicolonweb.com/html/canvas/index-magazine.php"><div>Magazine - Layout 1</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/index-magazine-2.php"><div>Magazine - Layout 2</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/index-magazine-3.php"><div>Magazine - Layout 3</div></a></li>
										</ul>
									</li>
									<li class="sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/landing.php" class="sf-with-ul"><div>Home - Landing Page</div></a>
										<ul style="display: none;">
											<li><a href="http://themes.semicolonweb.com/html/canvas/landing.php"><div>Landing Page - Layout 1</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/landing-2.php"><div>Landing Page - Layout 2</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/landing-3.php"><div>Landing Page - Layout 3</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/landing-4.php"><div>Landing Page - Layout 4</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/landing-5.php"><div>Landing Page - Layout 5</div></a></li>
										</ul>
									</li>
									<li class="sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/index-fullscreen-image.php" class="sf-with-ul"><div>Home - Full Screen</div></a>
										<ul style="display: none;">
											<li><a href="http://themes.semicolonweb.com/html/canvas/index-fullscreen-image.php"><div>Full Screen - Image</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/index-fullscreen-slider.php"><div>Full Screen - Slider</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/index-fullscreen-video.php"><div>Full Screen - Video</div></a></li>
										</ul>
									</li>
									<li class="sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/index-onepage.php" class="sf-with-ul"><div>Home - One Page</div></a>
										<ul style="display: none;">
											<li><a href="http://themes.semicolonweb.com/html/canvas/index-onepage.php"><div>One Page - Default</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/index-onepage-2.php"><div>One Page - Submenu</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/index-onepage-3.php"><div>One Page - Dots Style</div></a></li>
										</ul>
									</li>
									<li><a href="http://themes.semicolonweb.com/html/canvas/index-wedding.php"><div>Home - Wedding</div></a></li>
									<li><a href="http://themes.semicolonweb.com/html/canvas/index-restaurant.php"><div>Home - Restaurant</div></a></li>
									<li><a href="http://themes.semicolonweb.com/html/canvas/index-events.php"><div>Home - Events</div></a></li>
									<li><a href="http://themes.semicolonweb.com/html/canvas/index-parallax.php"><div>Home - Parallax</div></a></li>
									<li><a href="http://themes.semicolonweb.com/html/canvas/index-app-showcase.php"><div>Home - App Showcase</div></a></li>
									<li><a href="http://themes.semicolonweb.com/html/canvas/index-boxed.php"><div>Home - Boxed Layout</div></a></li>
								</ul>
							</li>
							<li class="sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="sf-with-ul"><div>Features</div></a>
								<ul style="display: none;">
									<li class="sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="sf-with-ul"><div><i class="icon-stack"></i>Sliders</div></a>
										<ul style="display: none;">
											<li class="sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/slider-revolution.php" class="sf-with-ul"><div>Revolution Slider</div></a>
												<ul style="display: none;">
													<li><a href="http://themes.semicolonweb.com/html/canvas/rs-demo-premium-concept.php"><div>Premium Templates</div></a></li>
													<li><a href="http://themes.semicolonweb.com/html/canvas/slider-revolution.php"><div>Full Screen</div></a></li>
													<li><a href="http://themes.semicolonweb.com/html/canvas/slider-revolution-fullwidth.php"><div>Full Width</div></a></li>
													<li><a href="http://themes.semicolonweb.com/html/canvas/slider-revolution-kenburns.php"><div>Kenburns Effect</div></a></li>
													<li><a href="http://themes.semicolonweb.com/html/canvas/slider-revolution-html5-videos.php"><div>HTML5 Video</div></a></li>
												</ul>
											</li>
											<li class="sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/slider-canvas.php" class="sf-with-ul"><div>Canvas Slider</div></a>
												<ul style="display: none;">
													<li><a href="http://themes.semicolonweb.com/html/canvas/slider-canvas.php"><div>Full Width</div></a></li>
													<li><a href="http://themes.semicolonweb.com/html/canvas/slider-canvas-fade.php"><div>Fade Transition</div></a></li>
													<li><a href="http://themes.semicolonweb.com/html/canvas/slider-canvas-autoplay.php"><div>Autoplay Feature</div></a></li>
													<li><a href="http://themes.semicolonweb.com/html/canvas/slider-canvas-video-event.php"><div>Custom Video Event</div></a></li>
													<li><a href="http://themes.semicolonweb.com/html/canvas/slider-canvas-pagination.php"><div>Pagination Navigation</div></a></li>
													<li><a href="http://themes.semicolonweb.com/html/canvas/slider-canvas-3.php"><div>3 Columns</div></a></li>
													<li><a href="http://themes.semicolonweb.com/html/canvas/slider-canvas-4.php"><div>4 Columns</div></a></li>
													<li><a href="http://themes.semicolonweb.com/html/canvas/slider-canvas-5.php"><div>5 Columns</div></a></li>
												</ul>
											</li>
											<li class="sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/slider-flex.php" class="sf-with-ul"><div>Flex Slider</div></a>
												<ul style="display: none;">
													<li><a href="http://themes.semicolonweb.com/html/canvas/slider-flex.php"><div>Default Layout</div></a></li>
													<li><a href="http://themes.semicolonweb.com/html/canvas/slider-flex-thumbs.php"><div>with Thumbs</div></a></li>
												</ul>
											</li>
											<li class="sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/slider-owl.php" class="sf-with-ul"><div>Owl Slider</div></a>
												<ul style="display: none;">
													<li><a href="http://themes.semicolonweb.com/html/canvas/slider-owl-full.php"><div>Full Width</div></a></li>
													<li><a href="http://themes.semicolonweb.com/html/canvas/slider-owl.php"><div>Boxed Width</div></a></li>
													<li><a href="http://themes.semicolonweb.com/html/canvas/slider-owl-videos.php"><div>Video Slider</div></a></li>
												</ul>
											</li>
											<li class="sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/static-parallax.php" class="sf-with-ul"><div>Static Media</div></a>
												<ul style="display: none;">
													<li><a href="http://themes.semicolonweb.com/html/canvas/static-parallax.php"><div>Static - Parallax</div></a></li>
													<li><a href="http://themes.semicolonweb.com/html/canvas/static-image.php"><div>Static - Image</div></a></li>
													<li><a href="http://themes.semicolonweb.com/html/canvas/static-thumbs-grid.php"><div>Static - Thumb Gallery</div></a></li>
													<li><a href="http://themes.semicolonweb.com/html/canvas/static-html5-video.php"><div>Static - HTML5 Video</div></a></li>
													<li><a href="http://themes.semicolonweb.com/html/canvas/static-embed-video.php"><div>Static - Embedded Video</div></a></li>
												</ul>
											</li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/slider-camera.php"><div>Camera Slider</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/slider-elastic.php"><div>Elastic Slider</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/slider-nivo.php"><div>Nivo Slider</div></a></li>
										</ul>
									</li>
									<li class="sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/widgets.php" class="sf-with-ul"><div><i class="icon-gift"></i>Widgets</div></a>
										<ul style="display: none;">
											<li><a href="http://themes.semicolonweb.com/html/canvas/widgets.php"><div>Links</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/widgets.php"><div>Flickr Photostream</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/widgets.php"><div>Dribbble Shots</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/widgets.php"><div>Instagram Feed</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/widgets.php"><div>Posts List</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/widgets.php"><div>Twitter Feed</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/widgets.php"><div>Tabbed Widgets</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/widgets.php"><div>Carousel</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/widgets.php"><div>Subscribers</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/widgets.php"><div>Social Icons</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/widgets.php"><div>Testimonials</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/widgets.php"><div>Quick Contact</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/widgets.php"><div>Tags Cloud</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/widgets.php"><div>Video Embeds</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/widgets.php"><div>Raw Text/HTML</div></a></li>
										</ul>
									</li>
									<li class="sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="sf-with-ul"><div><i class="icon-umbrella"></i>Headers</div></a>
										<ul style="display: none;">
											<li><a href="http://themes.semicolonweb.com/html/canvas/header-light.php"><div>Light Version</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/header-dark.php"><div>Dark Version</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/header-transparent.php"><div>Transparent</div></a></li>
											<li class="sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/header-semi-transparent.php" class="sf-with-ul"><div>Semi Transparent</div></a>
												<ul style="display: none;">
													<li><a href="http://themes.semicolonweb.com/html/canvas/header-semi-transparent.php"><div>Light Version</div></a></li>
													<li><a href="http://themes.semicolonweb.com/html/canvas/header-semi-transparent-dark.php"><div>Dark Version</div></a></li>
												</ul>
											</li>
											<li class="sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/header-side-left.php" class="sf-with-ul"><div>Left Side Header</div></a>
												<ul style="display: none;">
													<li><a href="http://themes.semicolonweb.com/html/canvas/header-side-left.php"><div>Fixed Position</div></a></li>
													<li><a href="http://themes.semicolonweb.com/html/canvas/header-side-left-open.php"><div>OnClick Open</div></a></li>
													<li><a href="http://themes.semicolonweb.com/html/canvas/header-side-left-open-push.php"><div>Push Content</div></a></li>
												</ul>
											</li>
											<li class="sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/header-side-right.php" class="sf-with-ul"><div>Right Side Header</div></a>
												<ul style="display: none;">
													<li><a href="http://themes.semicolonweb.com/html/canvas/header-side-right.php"><div>Fixed Position</div></a></li>
													<li><a href="http://themes.semicolonweb.com/html/canvas/header-side-right-open.php"><div>OnClick Open</div></a></li>
													<li><a href="http://themes.semicolonweb.com/html/canvas/header-side-right-open-push.php"><div>Push Content</div></a></li>
												</ul>
											</li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/header-floating.php"><div>Floating Version</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/static-sticky.php"><div>Static Sticky</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/responsive-sticky.php"><div>Responsive Sticky</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/logo-changer.php"><div>Alternate Logos</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/alternate-mobile-menu.php"><div>Alternate Mobile Menu</div></a></li>
										</ul>
									</li>
									<li class="sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/side-panel.php" class="sf-with-ul"><div><i class="icon-line-layout"></i>Side Panel</div></a>
										<ul style="display: none;">
											<li><a href="http://themes.semicolonweb.com/html/canvas/side-panel-left-overlay.php"><div>Left Overlay</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/side-panel-left-push.php"><div>Left Push</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/side-panel-right-overlay.php"><div>Right Overlay</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/side-panel.php"><div>Right Push</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/side-panel-light.php"><div>Light Background</div></a></li>
										</ul>
									</li>
									<li><a href="http://themes.semicolonweb.com/html/canvas/mega-menu.php"><div><i class="icon-line-columns"></i>Mega Menu</div></a></li>
									<li class="sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="sf-with-ul"><div><i class="icon-align-justify2"></i>Menu Styles</div></a>
										<ul style="display: none;">
											<li><a href="http://themes.semicolonweb.com/html/canvas/header-light.php"><div>Menu - Style 1</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/menu-2.php"><div>Menu - Style 2</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/menu-3.php"><div>Menu - Style 3</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/menu-4.php"><div>Menu - Style 4</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/menu-5.php"><div>Menu - Style 5</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/menu-6.php"><div>Menu - Style 6</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/menu-7.php"><div>Menu - Style 7</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/menu-8.php"><div>Menu - Style 8</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/menu-9.php"><div>Menu - Style 9</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/menu-10.php"><div>Menu - Overlay</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/split-menu.php"><div>Menu - Split Layout</div></a></li>
										</ul>
									</li>
									<li class="sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="sf-with-ul"><div><i class="icon-ok-sign"></i>Page Titles</div></a>
										<ul style="display: none;">
											<li><a href="http://themes.semicolonweb.com/html/canvas/page.php"><div>Left Align</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/page-title-right.php"><div>Right Align</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/page-title-center.php"><div>Center Align</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/page-titledark.php"><div>Dark Style</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/page-title-pattern.php"><div>Pattern Background</div></a></li>
											<li class="sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/page-title-parallax.php" class="sf-with-ul"><div>Parallax Background</div></a>
												<ul style="display: none;">
													<li><a href="http://themes.semicolonweb.com/html/canvas/page-title-parallax.php"><div>Default Header</div></a></li>
													<li><a href="http://themes.semicolonweb.com/html/canvas/page-title-parallax-header.php"><div>Transparent Header</div></a></li>
												</ul>
											</li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/page-title-video.php"><div>HTML5 Video</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/page-title-nobg.php"><div>No Background</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/page-title-mini.php"><div>Mini Version</div></a></li>
										</ul>
									</li>
									<li class="sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/contact.php" class="sf-with-ul"><div><i class="icon-envelope-alt"></i>Contact Pages</div></a>
										<ul style="display: none;">
											<li><a href="http://themes.semicolonweb.com/html/canvas/contact.php">Contact 1</a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/contact-2.php">Contact 2</a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/contact-3.php">Contact 3</a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/contact-4.php">Contact 4</a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/contact-5.php">Contact 5</a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/contact-6.php">Contact 6</a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/contact-7.php">Contact 7</a></li>
										</ul>
									</li>
									<li class="sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/index-events.php#footer" data-scrollto="#footer" class="sf-with-ul"><div><i class="icon-th"></i>Footers</div></a>
										<ul style="display: none;">
											<li><a href="http://themes.semicolonweb.com/html/canvas/sticky-footer.php"><div>Sticky Footer</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/index-events.php#footer" data-scrollto="#footer"><div>Footer - Layout 1</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/footer-2.php#footer"><div>Footer - Layout 2</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/footer-3.php#footer"><div>Footer - Layout 3</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/footer-4.php#footer"><div>Footer - Layout 4</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/footer-5.php#footer"><div>Footer - Layout 5</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/footer-6.php#footer"><div>Footer - Layout 6</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/footer-7.php#footer"><div>Footer - Layout 7</div></a></li>
										</ul>
									</li>
									<li class="sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="sf-with-ul"><div><i class="icon-calendar3"></i>Events</div></a>
										<ul style="display: none;">
											<li><a href="http://themes.semicolonweb.com/html/canvas/events-calendar.php"><div>Full Width Calendar</div></a></li>
											<li class="sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/events-list.php" class="sf-with-ul"><div>Events List</div></a>
												<ul style="display: none;">
													<li><a href="http://themes.semicolonweb.com/html/canvas/events-list.php"><div>Right Sidebar</div></a></li>
													<li><a href="http://themes.semicolonweb.com/html/canvas/events-list-left-sidebar.php"><div>Left Sidebar</div></a></li>
													<li><a href="http://themes.semicolonweb.com/html/canvas/events-list-both-sidebar.php"><div>Both Sidebar</div></a></li>
													<li><a href="http://themes.semicolonweb.com/html/canvas/events-list-fullwidth.php"><div>Full Width</div></a></li>
													<li><a href="http://themes.semicolonweb.com/html/canvas/events-list-parallax.php"><div>Parallax List</div></a></li>
												</ul>
											</li>
											<li class="sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/event-single.php" class="sf-with-ul"><div>Single Event</div></a>
												<ul style="display: none;">
													<li><a href="http://themes.semicolonweb.com/html/canvas/event-single-right-sidebar.php"><div>Right Sidebar</div></a></li>
													<li><a href="http://themes.semicolonweb.com/html/canvas/event-single-left-sidebar.php"><div>Left Sidebar</div></a></li>
													<li><a href="http://themes.semicolonweb.com/html/canvas/event-single-both-sidebar.php"><div>Both Sidebar</div></a></li>
													<li><a href="http://themes.semicolonweb.com/html/canvas/event-single.php"><div>Full Width</div></a></li>
												</ul>
											</li>
											<li class="sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/event-single-full-width-image.php" class="sf-with-ul"><div>Single Event - Full</div></a>
												<ul style="display: none;">
													<li><a href="http://themes.semicolonweb.com/html/canvas/event-single-full-width-image.php"><div>Parallax Image</div></a></li>
													<li><a href="http://themes.semicolonweb.com/html/canvas/event-single-full-width-map.php"><div>Google Map</div></a></li>
													<li><a href="http://themes.semicolonweb.com/html/canvas/event-single-full-width-slider.php"><div>Slider Gallery</div></a></li>
													<li><a href="http://themes.semicolonweb.com/html/canvas/event-single-full-width-video.php"><div>HTML5 Video</div></a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/modal-onload.php" class="sf-with-ul"><div><i class="icon-line-expand"></i>Modal OnLoad</div></a>
										<ul style="display: none;">
											<li><a href="http://themes.semicolonweb.com/html/canvas/modal-onload.php"><div>Simple Layout</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/modal-onload-iframe.php"><div>Video iFrame</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/modal-onload-subscribe.php"><div>Subscription Form</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/modal-onload-common-height.php"><div>Common Height</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/modal-onload-cookie.php"><div>Cookies Enabled</div></a></li>
										</ul>
									</li>
									<li class="sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/coming-soon.php" class="sf-with-ul"><div><i class="icon-time"></i>Coming Soon</div></a>
										<ul style="display: none;">
											<li><a href="http://themes.semicolonweb.com/html/canvas/coming-soon.php"><div>Simple Layout</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/coming-soon-2.php"><div>Parallax Image</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/coming-soon-3.php"><div>HTML5 Video</div></a></li>
										</ul>
									</li>
									<li><a href="http://themes.semicolonweb.com/html/canvas/profile.php"><div><i class="icon-user"></i>User Profile</div></a></li>
								</ul>
							</li>
							<li class="mega-menu sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="sf-with-ul"><div>Pages</div></a>
								<div class="mega-menu-content style-2 clearfix" style="display: none; width: 1289px;">
									<ul class="mega-menu-column col-md-3">
										<li class="mega-menu-title sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="sf-with-ul"><div>Introduction</div></a>
											<ul style="display: none;">
												<li><a href="http://themes.semicolonweb.com/html/canvas/about.php"><div>About Us</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/about-2.php"><div>About Us - Layout 2</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/about-me.php"><div>About Me</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/team.php"><div>Team Members</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/jobs.php"><div>Careers</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/side-navigation.php"><div>Side Navigation</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/page-submenu.php"><div>Page Submenu</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/sitemap.php"><div>Sitemap</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-md-3">
										<li class="mega-menu-title sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="sf-with-ul"><div>Utility</div></a>
											<ul style="display: none;">
												<li><a href="http://themes.semicolonweb.com/html/canvas/services.php"><div>Services - Layout 1</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/services-2.php"><div>Services - Layout 2</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/services-3.php"><div>Services - Layout 3</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/faqs.php"><div>FAQs - Layout 1</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/faqs-2.php"><div>FAQs - Layout 2</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/faqs-3.php"><div>FAQs - Layout 3</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/faqs-4.php"><div>FAQs - Layout 4</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/maintenance.php"><div>Maintenance Page</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-md-3">
										<li class="mega-menu-title sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="sf-with-ul"><div>Layout Grids</div></a>
											<ul style="display: none;">
												<li><a href="http://themes.semicolonweb.com/html/canvas/full-width.php"><div>Full Width</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/full-width-wide.php"><div>Full Width - Wide</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/right-sidebar.php"><div>Right Sidebar</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/left-sidebar.php"><div>Left Sidebar</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/sticky-sidebar.php"><div>Sticky Sidebar <div class="label bgcolor nott" style="position: relative; top: -1px; margin-left: 5px;">New</div></div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/both-right-sidebar.php"><div>Both Right Sidebar</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/both-left-sidebar.php"><div>Both Left Sidebar</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/blank-page.php"><div>Blank Page</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-md-3">
										<li class="mega-menu-title sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="sf-with-ul"><div>Miscellaneous</div></a>
											<ul style="display: none;">
												<li><a href="http://themes.semicolonweb.com/html/canvas/login-register.php"><div>Login/Register</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/login-register-2.php"><div>Login/Register - Style 2</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/login-register-3.php"><div>Login/Register - Style 3</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/login-1.php"><div>Login - Style 1</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/login-2.php"><div>Login - Style 2</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/404.php"><div>404 - Simple Layout</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/404-2.php"><div>404 - Parallax Image</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/404-3.php"><div>404 - HTML5 Video</div></a></li>
											</ul>
										</li>
									</ul>
								</div>
							</li>
							<li class="mega-menu sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="sf-with-ul"><div>Portfolio</div></a>
								<div class="mega-menu-content style-2 clearfix" style="display: none; width: 1289px;">
									<ul class="mega-menu-column col-5">
										<li class="mega-menu-title sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="sf-with-ul"><div>Grids</div></a>
											<ul style="display: none;">
												<li><a href="http://themes.semicolonweb.com/html/canvas/portfolio-1.php"><div>1 Column</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/portfolio-2.php"><div>2 Columns</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/portfolio-3.php"><div>3 Columns</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/portfolio.php"><div>4 Columns</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/portfolio-5.php"><div>5 Columns</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/portfolio-6.php"><div>6 Columns</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-5">
										<li class="mega-menu-title sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="sf-with-ul"><div>Masonry</div></a>
											<ul style="display: none;">
												<li><a href="http://themes.semicolonweb.com/html/canvas/portfolio-mixed-masonry.php"><div>Mixed Columns</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/portfolio-2-masonry.php"><div>2 Columns</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/portfolio-3-masonry.php"><div>3 Columns</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/portfolio-masonry.php"><div>4 Columns</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/portfolio-5-masonry.php"><div>5 Columns</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/portfolio-6-masonry.php"><div>6 Columns</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-5">
										<li class="mega-menu-title sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="sf-with-ul"><div>Loading Styles</div></a>
											<ul style="display: none;">
												<li><a href="http://themes.semicolonweb.com/html/canvas/portfolio.php"><div>jQuery Filter</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/portfolio-jpagination.php"><div>jQuery Pagination</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/portfolio-infinity-scroll.php"><div>Infinity Scroll</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/portfolio-ajax.php"><div>AJAX In Page</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/portfolio-ajax-in-modal.php"><div>AJAX In Modal</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/portfolio-filter-styles.php"><div>Filter Styles</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-5">
										<li class="mega-menu-title sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="sf-with-ul"><div>Single Project</div></a>
											<ul style="display: none;">
												<li><a href="http://themes.semicolonweb.com/html/canvas/portfolio-single-extended.php"><div>Extended Item</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/portfolio-single-fullwidth.php"><div>Parallax Image</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/portfolio-single-gallery-full.php"><div>Slider Gallery</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/portfolio-single-video-fullwidth-left-sidebar.php"><div>HTML5 Video</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/portfolio-single-thumbs-right-sidebar.php"><div>Masonry Thumbs</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/portfolio-single-video-both-sidebar.php"><div>Embed Video</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-5">
										<li class="mega-menu-title sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="sf-with-ul"><div>Layouts</div></a>
											<ul style="display: none;">
												<li><a href="http://themes.semicolonweb.com/html/canvas/portfolio-nomargin.php"><div>Default</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/portfolio-1-alt-right-sidebar.php"><div>Right Sidebar</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/portfolio-3-left-sidebar.php"><div>Left Sidebar</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/portfolio-2-both-sidebar.php"><div>Both Sidebar</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/portfolio-fullwidth-notitle.php"><div>100% Width</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/portfolio-parallax.php"><div>Parallax</div></a></li>
											</ul>
										</li>
									</ul>
								</div>
							</li>
							<li class="mega-menu sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="sf-with-ul"><div>Blog</div></a>
								<div class="mega-menu-content style-2 clearfix" style="display: none; width: 1289px;">
									<ul class="mega-menu-column col-md-3">
										<li class="mega-menu-title sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="sf-with-ul"><div>Default</div></a>
											<ul style="display: none;">
												<li><a href="http://themes.semicolonweb.com/html/canvas/blog.php"><div>Right Sidebar</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/blog-left-sidebar.php"><div>Left Sidebar</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/blog-both-sidebar.php"><div>Both Sidebar</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/blog-full-width.php"><div>Full Width</div></a></li>
											</ul>
										</li>
										<li class="mega-menu-title sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="sf-with-ul"><div>Timeline</div></a>
											<ul style="display: none;">
												<li><a href="http://themes.semicolonweb.com/html/canvas/blog-timeline-right-sidebar.php"><div>Right Sidebar</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/blog-timeline-left-sidebar.php"><div>Left Sidebar</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/blog-timeline.php"><div>Full Width</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-md-3">
										<li class="mega-menu-title sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="sf-with-ul"><div>Masonry</div></a>
											<ul style="display: none;">
												<li><a href="http://themes.semicolonweb.com/html/canvas/blog-masonry.php"><div>4 Columns</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/blog-masonry-3.php"><div>3 Columns</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/blog-masonry-2.php"><div>2 Columns</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/blog-masonry-full.php"><div>100% Width</div></a></li>
											</ul>
										</li>
										<li class="mega-menu-title sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="sf-with-ul"><div>Grid</div></a>
											<ul style="display: none;">
												<li><a href="http://themes.semicolonweb.com/html/canvas/blog-grid.php"><div>4 Columns</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/blog-grid-3.php"><div>3 Columns</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/blog-grid-2.php"><div>2 Columns</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-md-3">
										<li class="mega-menu-title sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="sf-with-ul"><div>Small Thumbs</div></a>
											<ul style="display: none;">
												<li><a href="http://themes.semicolonweb.com/html/canvas/blog-small-left-sidebar.php"><div>Left Sidebar</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/blog-small.php"><div>Right Sidebar</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/blog-small-both-sidebar.php"><div>Both Sidebar</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/blog-small-full-width.php"><div>Full Width</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/blog-small-alt.php"><div>Alternate Layout</div></a></li>
											</ul>
										</li>
										<li class="mega-menu-title sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="sf-with-ul"><div>Item Splitting</div></a>
											<ul style="display: none;">
												<li><a href="http://themes.semicolonweb.com/html/canvas/blog-grid.php"><div>Pagination</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/blog-masonry.php"><div>Infinite Scroll</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-md-3">
										<li class="mega-menu-title sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="sf-with-ul"><div>Single</div></a>
											<ul style="display: none;">
												<li><a href="http://themes.semicolonweb.com/html/canvas/blog-single.php"><div>Default Layout</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/blog-single-left-sidebar.php"><div>Left Sidebar</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/blog-single-full.php"><div>Full Width</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/blog-single-small.php"><div>Small Image</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/blog-single-split-right-sidebar.php"><div>Split Layout</div></a></li>
											</ul>
										</li>
										<li class="mega-menu-title sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="sf-with-ul"><div>Comments Module</div></a>
											<ul style="display: none;">
												<li><a href="http://themes.semicolonweb.com/html/canvas/blog-single-left-sidebar.php#comments"><div>Facebook Comments</div></a></li>
												<li><a href="http://themes.semicolonweb.com/html/canvas/blog-single-small.php#comments"><div>Disqus Comments</div></a></li>
											</ul>
										</li>
									</ul>
								</div>
							</li>
							<li class="sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/shop.php" class="sf-with-ul"><div>Shop</div></a>
								<ul style="display: none;">
									<li><a href="http://themes.semicolonweb.com/html/canvas/shop.php"><div>4 Columns</div></a></li>
									<li class="sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/shop-3.php" class="sf-with-ul"><div>3 Columns</div></a>
										<ul class="menu-pos-invert" style="display: none;">
											<li><a href="http://themes.semicolonweb.com/html/canvas/shop-3.php"><div>Full Width</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/shop-3-right-sidebar.php"><div>Right Sidebar</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/shop-3-left-sidebar.php"><div>Left Sidebar</div></a></li>
										</ul>
									</li>
									<li class="sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/shop-2.php" class="sf-with-ul"><div>2 Columns</div></a>
										<ul class="menu-pos-invert" style="display: none;">
											<li><a href="http://themes.semicolonweb.com/html/canvas/shop-2-right-sidebar.php"><div>Right Sidebar</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/shop-2-left-sidebar.php"><div>Left Sidebar</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/shop-2-both-sidebar.php"><div>Both Sidebar</div></a></li>
										</ul>
									</li>
									<li class="sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/shop-1.php" class="sf-with-ul"><div>1 Columns</div></a>
										<ul class="menu-pos-invert" style="display: none;">
											<li><a href="http://themes.semicolonweb.com/html/canvas/shop-1.php"><div>Full Width</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/shop-1-right-sidebar.php"><div>Right Sidebar</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/shop-1-left-sidebar.php"><div>Left Sidebar</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/shop-1-both-sidebar.php"><div>Both Sidebar</div></a></li>
										</ul>
									</li>
									<li><a href="http://themes.semicolonweb.com/html/canvas/shop-category-parallax.php"><div>Categories - Parallax</div></a></li>
									<li><a href="http://themes.semicolonweb.com/html/canvas/shop-combination-filter.php"><div>Combination Filter</div></a></li>
									<li class="sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/shop-single.php" class="sf-with-ul"><div>Single Product</div></a>
										<ul class="menu-pos-invert" style="display: none;">
											<li><a href="http://themes.semicolonweb.com/html/canvas/shop-single.php"><div>Full Width</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/shop-single-right-sidebar.php"><div>Right Sidebar</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/shop-single-left-sidebar.php"><div>Left Sidebar</div></a></li>
											<li><a href="http://themes.semicolonweb.com/html/canvas/shop-single-both-sidebar.php"><div>Both Sidebar</div></a></li>
										</ul>
									</li>
									<li><a href="http://themes.semicolonweb.com/html/canvas/cart.php"><div>Cart</div></a></li>
									<li><a href="http://themes.semicolonweb.com/html/canvas/checkout.php"><div>Checkout</div></a></li>
								</ul>
							</li>
							<li class="mega-menu sub-menu"><a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="sf-with-ul"><div>Shortcodes</div></a>
								<div class="mega-menu-content clearfix" style="display: none; width: 1289px;">
									<ul class="mega-menu-column col-5">
										<li><a href="http://themes.semicolonweb.com/html/canvas/animations.php"><div><i class="icon-magic"></i>Animations</div></a></li>
										<li><a href="http://themes.semicolonweb.com/html/canvas/buttons.php"><div><i class="icon-link"></i>Buttons</div></a></li>
										<li><a href="http://themes.semicolonweb.com/html/canvas/carousel.php"><div><i class="icon-heart3"></i>Carousel</div></a></li>
										<li><a href="http://themes.semicolonweb.com/html/canvas/charts.php"><div><i class="icon-bar-chart"></i>Charts</div></a></li>
										<li><a href="http://themes.semicolonweb.com/html/canvas/clients.php"><div><i class="icon-apple"></i>Clients</div></a></li>
										<li><a href="http://themes.semicolonweb.com/html/canvas/columns-grids.php"><div><i class="icon-th-large"></i>Columns</div></a></li>
										<li><a href="http://themes.semicolonweb.com/html/canvas/counters.php"><div><i class="icon-time"></i>Counters</div></a></li>
										<li><a href="http://themes.semicolonweb.com/html/canvas/component-datatable.php"><div><i class="icon-table"></i>Data Tables</div></a></li>
										<li><a href="http://themes.semicolonweb.com/html/canvas/component-datepicker.php"><div><i class="icon-calendar3"></i>Date &amp; Time Pickers</div></a></li>
									</ul>
									<ul class="mega-menu-column col-5">
										<li><a href="http://themes.semicolonweb.com/html/canvas/dividers.php"><div><i class="icon-indent-right"></i>Dividers</div></a></li>
										<li><a href="http://themes.semicolonweb.com/html/canvas/featured-boxes.php"><div><i class="icon-lightbulb"></i>Icon Boxes</div></a></li>
										<li><a href="http://themes.semicolonweb.com/html/canvas/gallery.php"><div><i class="icon-picture"></i>Galleries</div></a></li>
										<li><a href="http://themes.semicolonweb.com/html/canvas/headings-dropcaps.php"><div><i class="icon-pencil2"></i>Heading Styles</div></a></li>
										<li><a href="http://themes.semicolonweb.com/html/canvas/icon-lists.php"><div><i class="icon-list-alt"></i>Icon Lists</div></a></li>
										<li><a href="http://themes.semicolonweb.com/html/canvas/labels-badges.php"><div><i class="icon-plus-sign"></i>Labels</div></a></li>
										<li><a href="http://themes.semicolonweb.com/html/canvas/lightbox.php"><div><i class="icon-resize-full"></i>Lightbox</div></a></li>
										<li><a href="http://themes.semicolonweb.com/html/canvas/component-editable.php"><div><i class="icon-edit"></i>Editable Fields</div></a></li>
										<li><a href="http://themes.semicolonweb.com/html/canvas/component-uploads.php"><div><i class="icon-line-upload"></i>File Uploads</div></a></li>
									</ul>
									<ul class="mega-menu-column col-5">
										<li><a href="http://themes.semicolonweb.com/html/canvas/lists-panels.php"><div><i class="icon-th-list"></i>Lists &amp; Panels</div></a></li>
										<li><a href="http://themes.semicolonweb.com/html/canvas/maps.php"><div><i class="icon-map-marker2"></i>Maps</div></a></li>
										<li><a href="http://themes.semicolonweb.com/html/canvas/media-embeds.php"><div><i class="icon-play"></i>Media Embeds</div></a></li>
										<li><a href="http://themes.semicolonweb.com/html/canvas/modal-popovers.php"><div><i class="icon-move"></i>Modal Boxes</div></a></li>
										<li><a href="http://themes.semicolonweb.com/html/canvas/navigation.php"><div><i class="icon-align-justify2"></i>Navigations</div></a></li>
										<li><a href="http://themes.semicolonweb.com/html/canvas/pagination-progress.php"><div><i class="icon-cogs"></i>Pagination</div></a></li>
										<li><a href="http://themes.semicolonweb.com/html/canvas/pie-skills.php"><div><i class="icon-tasks"></i>Pies &amp; Skills</div></a></li>
										<li><a href="http://themes.semicolonweb.com/html/canvas/component-range-slider.php"><div><i class="icon-line-move"></i>Range Slider</div></a></li>
										<li><a href="http://themes.semicolonweb.com/html/canvas/component-ratings.php"><div><i class="icon-star3"></i>Star Ratings</div></a></li>
									</ul>
									<ul class="mega-menu-column col-5">
										<li><a href="http://themes.semicolonweb.com/html/canvas/pricing.php"><div><i class="icon-dollar"></i>Pricing Boxes</div></a></li>
										<li><a href="http://themes.semicolonweb.com/html/canvas/process-steps.php"><div><i class="icon-thumbs-up"></i>Process Steps</div></a></li>
										<li><a href="http://themes.semicolonweb.com/html/canvas/promo-boxes.php"><div><i class="icon-rocket"></i>Promo Boxes</div></a></li>
										<li><a href="http://themes.semicolonweb.com/html/canvas/quotes-blockquotes.php"><div><i class="icon-quote-left"></i>Blockquotes</div></a></li>
										<li><a href="http://themes.semicolonweb.com/html/canvas/responsive.php"><div><i class="icon-laptop2"></i>Responsive</div></a></li>
										<li><a href="http://themes.semicolonweb.com/html/canvas/sections.php"><div><i class="icon-folder-open"></i>Sections</div></a></li>
										<li><a href="http://themes.semicolonweb.com/html/canvas/social-icons.php"><div><i class="icon-facebook2"></i>Social Icons</div></a></li>
										<li><a href="http://themes.semicolonweb.com/html/canvas/component-select-picker.php"><div><i class="icon-select"></i>Select Picker</div></a></li>
										<li><a href="http://themes.semicolonweb.com/html/canvas/component-select-box.php"><div><i class="icon-line-columns"></i>Select Boxes</div></a></li>
									</ul>
									<ul class="mega-menu-column col-5">
										<li><a href="http://themes.semicolonweb.com/html/canvas/style-boxes.php"><div><i class="icon-exclamation-sign"></i>Alert Boxes</div></a></li>
										<li><a href="http://themes.semicolonweb.com/html/canvas/styled-icons.php"><div><i class="icon-flag2"></i>Styled Icons</div></a></li>
										<li><a href="http://themes.semicolonweb.com/html/canvas/tables.php"><div><i class="icon-table"></i>Tables</div></a></li>
										<li><a href="http://themes.semicolonweb.com/html/canvas/tabs.php"><div><i class="icon-star3"></i>Tabs</div></a></li>
										<li><a href="http://themes.semicolonweb.com/html/canvas/testimonials-twitter.php"><div><i class="icon-user4"></i>Testimonials</div></a></li>
										<li><a href="http://themes.semicolonweb.com/html/canvas/thumbnails-slider.php"><div><i class="icon-camera3"></i>Thumbnails</div></a></li>
										<li><a href="http://themes.semicolonweb.com/html/canvas/toggles-accordions.php"><div><i class="icon-ok-circle"></i>Toggles</div></a></li>
										<li><a href="http://themes.semicolonweb.com/html/canvas/component-radios-switches.php"><div><i class="icon-line-square-check"></i>Radios &amp; Switches</div></a></li>
										<li><a href="http://themes.semicolonweb.com/html/canvas/component-typeahead.php"><div><i class="icon-type"></i>Input Typeahead</div></a></li>
									</ul>
								</div>
							</li>
						</ul>

						<!-- Top Cart
						============================================= -->
						<div id="top-cart">
							<a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>5</span></a>
							<div class="top-cart-content">
								<div class="top-cart-title">
									<h4>Shopping Cart</h4>
								</div>
								<div class="top-cart-items">
									<div class="top-cart-item clearfix">
										<div class="top-cart-item-image">
											<a href="http://themes.semicolonweb.com/html/canvas/index-events.php#"><img src="1.jpg" alt="Blue Round-Neck Tshirt"></a>
										</div>
										<div class="top-cart-item-desc">
											<a href="http://themes.semicolonweb.com/html/canvas/index-events.php#">Blue Round-Neck Tshirt</a>
											<span class="top-cart-item-price">$19.99</span>
											<span class="top-cart-item-quantity">x 2</span>
										</div>
									</div>
									<div class="top-cart-item clearfix">
										<div class="top-cart-item-image">
											<a href="http://themes.semicolonweb.com/html/canvas/index-events.php#"><img src="6.jpg" alt="Light Blue Denim Dress"></a>
										</div>
										<div class="top-cart-item-desc">
											<a href="http://themes.semicolonweb.com/html/canvas/index-events.php#">Light Blue Denim Dress</a>
											<span class="top-cart-item-price">$24.99</span>
											<span class="top-cart-item-quantity">x 3</span>
										</div>
									</div>
								</div>
								<div class="top-cart-action clearfix">
									<span class="fleft top-checkout-price">$114.95</span>
									<button class="button button-3d button-small nomargin fright">View Cart</button>
								</div>
							</div>
						</div><!-- #top-cart end -->

						<!-- Top Search
						============================================= -->
						<div id="top-search">
							<a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
							<form action="http://themes.semicolonweb.com/html/canvas/search.php" method="get">
								<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
							</form>
						</div><!-- #top-search end -->

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<section id="slider" class="slider-parallax full-screen dark slider-parallax-visible" style="overflow: hidden; background: url(&quot;http://canvashtml-cdn.semicolonweb.com/images/events/parallax/home.jpg&quot;) center center / cover no-repeat; height: 513px;">

			<div class="slider-parallax-inner" style="height: 513px; transform: translateY(0px);">

				<div class="container clearfix vertical-middle" style="z-index: 3; position: absolute; top: 50%; width: 100%; padding-top: 0px; padding-bottom: 0px; margin-top: -221.5px; opacity: 1;">

					<div class="heading-block title-center nobottomborder">
						<h1>The Apple WWDC Event starts in:</h1>
					</div>

					<div id="countdown-ex1" class="countdown countdown-large coming-soon divcenter bottommargin is-countdown" style="max-width:700px;"><span class="countdown-row countdown-show3"><span class="countdown-section"><span class="countdown-amount">0</span><span class="countdown-period">Hours</span></span><span class="countdown-section"><span class="countdown-amount">0</span><span class="countdown-period">Minutes</span></span><span class="countdown-section"><span class="countdown-amount">0</span><span class="countdown-period">Seconds</span></span></span></div>


					<div class="center topmargin-lg">

						<a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="button button-3d button-purple button-rounded button-xlarge">Buy Tickets</a>
						<span class="hidden-xs"> - OR - </span>
						<a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="button button-3d button-white button-light button-rounded button-xlarge">Read Details</a>

					</div>

				</div>

			</div>

		</section>

		<!-- Content
		============================================= -->
		<section id="content" style="margin-bottom: 0px;">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="col_one_fourth nobottommargin">
						<div class="feature-box fbox-effect fbox-center fbox-outline fbox-dark nobottomborder">
							<div class="fbox-icon">
								<a href="http://themes.semicolonweb.com/html/canvas/index-events.php#"><i class="icon-calendar i-alt"></i></a>
							</div>
							<h3>Interactive Sessions<span class="subtitle">Lorem ipsum dolor sit</span></h3>
						</div>
					</div>

					<div class="col_one_fourth nobottommargin">
						<div class="feature-box fbox-effect fbox-center fbox-outline fbox-dark nobottomborder">
							<div class="fbox-icon">
								<a href="http://themes.semicolonweb.com/html/canvas/index-events.php#"><i class="icon-map i-alt"></i></a>
							</div>
							<h3>Great Locations<span class="subtitle">Officia ipsam laudantium</span></h3>
						</div>
					</div>

					<div class="col_one_fourth nobottommargin">
						<div class="feature-box fbox-effect fbox-center fbox-outline fbox-dark nobottomborder">
							<div class="fbox-icon">
								<a href="http://themes.semicolonweb.com/html/canvas/index-events.php#"><i class="icon-microphone2 i-alt"></i></a>
							</div>
							<h3>Global Speakers<span class="subtitle">Laudantium cum dignissimos</span></h3>
						</div>
					</div>

					<div class="col_one_fourth nobottommargin col_last">
						<div class="feature-box fbox-effect fbox-center fbox-outline fbox-dark nobottomborder">
							<div class="fbox-icon">
								<a href="http://themes.semicolonweb.com/html/canvas/index-events.php#"><i class="icon-food2 i-alt"></i></a>
							</div>
							<h3>In-between Meals<span class="subtitle">Perferendis accusantium quae</span></h3>
						</div>
					</div>

					<div class="clear"></div>

					<div class="divider divider-short divider-center"><i class="icon-circle-blank"></i></div>

					<div class="heading-block center">
						<h2>Speakers.</h2>
						<span>Over 15 Speakers &amp; 1000+ Developers in attendance.</span>
					</div>

					<div class="col_one_third nobottommargin">

						<div class="team">
							<div class="team-image">
								<img src="3.jpg" alt="John Doe">
							</div>
							<div class="team-desc">
								<div class="team-title"><h4>John Doe</h4><span>/ CEO, <small>Apple Inc.</small></span></div>
								<div class="team-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat assumenda similique unde mollitia eum rerum at voluptatibus saepe totam possimus.</div>
							</div>
						</div>

					</div>

					<div class="col_one_third nobottommargin">

						<div class="team">
							<div class="team-image">
								<img src="2.jpg" alt="Josh Thompson">
							</div>
							<div class="team-desc">
								<div class="team-title"><h4>Josh Thompson</h4><span>/ Co-Founder, <small>Google Inc.</small></span></div>
								<div class="team-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat assumenda similique unde mollitia eum rerum at voluptatibus saepe totam possimus.</div>
							</div>
						</div>

					</div>

					<div class="col_one_third nobottommargin col_last">

						<div class="team">
							<div class="team-image">
								<img src="8.jpg" alt="Mary Jane">
							</div>
							<div class="team-desc">
								<div class="team-title"><h4>Mary Jane</h4><span>/ Entreprenuer</span></div>
								<div class="team-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat assumenda similique unde mollitia eum rerum at voluptatibus saepe totam possimus.</div>
							</div>
						</div>

					</div>

					<div class="clear"></div>

				</div>

				<div class="section nobottommargin">
					<div class="container clearfix">

						<div class="heading-block center">
							<h3>Receive <span>regular</span> Event Updates</h3>
						</div>

						<div class="subscribe-widget">
							<div class="widget-subscribe-form-result"></div>
							<form id="widget-subscribe-form2" action="http://themes.semicolonweb.com/html/canvas/include/subscribe.php" role="form" method="post" class="nobottommargin" novalidate="novalidate">
								<div class="input-group input-group-lg divcenter" style="max-width:600px;">
									<span class="input-group-addon"><i class="icon-email2"></i></span>
									<input type="email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email" aria-required="true">
									<span class="input-group-btn">
										<button class="btn btn-default" type="submit">Subscribe Now</button>
									</span>
								</div>
							</form>
						</div>

					</div>
				</div>

				<div class="parallax bottommargin-lg dark" style="padding: 60px 0px; background-image: url(&quot;http://canvashtml-cdn.semicolonweb.com/images/parallax/calendar.jpg&quot;); background-repeat: repeat-y; height: auto; background-position: 50% 575.93px;" data-stellar-background-ratio="0.3">

					<div class="container clearfix">

						<div class="events-calendar">
							<div class="events-calendar-header clearfix">
								<h2>Events Calendar</h2>
								<h3 class="calendar-month-year">
									<span id="calendar-month" class="calendar-month">July</span>
									<span id="calendar-year" class="calendar-year">2017</span>
									<nav>
										<span id="calendar-prev" class="calendar-prev"><i class="icon-chevron-left"></i></span>
										<span id="calendar-next" class="calendar-next"><i class="icon-chevron-right"></i></span>
										<span id="calendar-current" class="calendar-current" title="Got to current date"><i class="icon-reload"></i></span>
									</nav>
								</h3>
							</div>
							<div id="calendar" class="fc-calendar-container"><div class="fc-calendar fc-six-rows"><div class="fc-head"><div>Monday</div><div>Tuesday</div><div>Wednesday</div><div>Thursday</div><div>Friday</div><div>Saturday</div><div>Sunday</div></div><div class="fc-body clearfix"><div class="fc-row"><div></div><div></div><div></div><div></div><div></div><div><span class="fc-date">1</span><span class="fc-weekday">Sat</span></div><div><span class="fc-date">2</span><span class="fc-weekday">Sun</span></div></div><div class="fc-row"><div><span class="fc-date">3</span><span class="fc-weekday">Mon</span></div><div><span class="fc-date">4</span><span class="fc-weekday">Tue</span></div><div><span class="fc-date">5</span><span class="fc-weekday">Wed</span></div><div><span class="fc-date">6</span><span class="fc-weekday">Thu</span></div><div><span class="fc-date">7</span><span class="fc-weekday">Fri</span></div><div><span class="fc-date">8</span><span class="fc-weekday">Sat</span></div><div><span class="fc-date">9</span><span class="fc-weekday">Sun</span></div></div><div class="fc-row"><div><span class="fc-date">10</span><span class="fc-weekday">Mon</span></div><div><span class="fc-date">11</span><span class="fc-weekday">Tue</span></div><div><span class="fc-date">12</span><span class="fc-weekday">Wed</span></div><div><span class="fc-date">13</span><span class="fc-weekday">Thu</span></div><div><span class="fc-date">14</span><span class="fc-weekday">Fri</span></div><div><span class="fc-date">15</span><span class="fc-weekday">Sat</span></div><div class="fc-content"><span class="fc-date">16</span><span class="fc-weekday">Sun</span><div><a href="http://google.com/" target="_blank">Dolorum, iusto quisquam distinctio dolore quo aperiam reiciendis.</a></div></div></div><div class="fc-row"><div><span class="fc-date">17</span><span class="fc-weekday">Mon</span></div><div><span class="fc-date">18</span><span class="fc-weekday">Tue</span></div><div class="fc-today "><span class="fc-date">19</span><span class="fc-weekday">Wed</span></div><div><span class="fc-date">20</span><span class="fc-weekday">Thu</span></div><div><span class="fc-date">21</span><span class="fc-weekday">Fri</span></div><div><span class="fc-date">22</span><span class="fc-weekday">Sat</span></div><div class="fc-content"><span class="fc-date">23</span><span class="fc-weekday">Sun</span><div><a href="http://google.com/" target="_blank">Blanditiis maiores odio cumque eligendi facilis iure.</a></div></div></div><div class="fc-row"><div><span class="fc-date">24</span><span class="fc-weekday">Mon</span></div><div><span class="fc-date">25</span><span class="fc-weekday">Tue</span></div><div><span class="fc-date">26</span><span class="fc-weekday">Wed</span></div><div><span class="fc-date">27</span><span class="fc-weekday">Thu</span></div><div><span class="fc-date">28</span><span class="fc-weekday">Fri</span></div><div><span class="fc-date">29</span><span class="fc-weekday">Sat</span></div><div><span class="fc-date">30</span><span class="fc-weekday">Sun</span></div></div><div class="fc-row"><div><span class="fc-date">31</span><span class="fc-weekday">Mon</span></div><div></div><div></div><div></div><div></div><div></div><div></div></div></div></div></div>
						</div>


					</div>

				</div>

				<div class="container clearfix">

					<div class="col_three_fifth bothsidebar nobottommargin">

						<div class="fancy-title title-border">
							<h3>Upcoming Events</h3>
						</div>

						<div id="posts" class="events small-thumbs">

							<div class="entry clearfix">
								<div class="entry-image hidden-sm">
									<a href="http://themes.semicolonweb.com/html/canvas/index-events.php#">
										<img src="1(1).jpg" alt="Inventore voluptates velit totam ipsa tenetur">
										<div class="entry-date">10<span>Apr</span></div>
									</a>
								</div>
								<div class="entry-c">
									<div class="entry-title">
										<h2><a href="http://themes.semicolonweb.com/html/canvas/index-events.php#">Inventore voluptates velit totam ipsa tenetur</a></h2>
									</div>
									<ul class="entry-meta clearfix">
										<li><span class="label label-warning">Private</span></li>
										<li><a href="http://themes.semicolonweb.com/html/canvas/index-events.php#"><i class="icon-time"></i> 11:00 - 19:00</a></li>
										<li><a href="http://themes.semicolonweb.com/html/canvas/index-events.php#"><i class="icon-map-marker2"></i> Melbourne</a></li>
									</ul>
									<div class="entry-content">
										<a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="btn btn-default" disabled="disabled">Buy Tickets</a> <a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="btn btn-danger">Read More</a>
									</div>
								</div>
							</div>

							<div class="entry clearfix">
								<div class="entry-image hidden-sm">
									<a href="http://themes.semicolonweb.com/html/canvas/index-events.php#">
										<img src="2(1).jpg" alt="Nemo quaerat nam beatae iusto minima vel">
										<div class="entry-date">16<span>Apr</span></div>
									</a>
								</div>
								<div class="entry-c">
									<div class="entry-title">
										<h2><a href="http://themes.semicolonweb.com/html/canvas/index-events.php#">Nemo quaerat nam beatae iusto minima vel</a></h2>
									</div>
									<ul class="entry-meta clearfix">
										<li><span class="label label-danger">Urgent</span></li>
										<li><a href="http://themes.semicolonweb.com/html/canvas/index-events.php#"><i class="icon-time"></i> 11:00 - 19:00</a></li>
										<li><a href="http://themes.semicolonweb.com/html/canvas/index-events.php#"><i class="icon-map-marker2"></i> Perth</a></li>
									</ul>
									<div class="entry-content">
										<a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="btn btn-info">RSVP</a> <a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="btn btn-danger">Read More</a>
									</div>
								</div>
							</div>

							<div class="entry clearfix">
								<div class="entry-image hidden-sm">
									<a href="http://themes.semicolonweb.com/html/canvas/index-events.php#">
										<img src="3(1).jpg" alt="Ducimus ipsam error fugiat harum recusandae">
										<div class="entry-date">3<span>May</span></div>
									</a>
								</div>
								<div class="entry-c">
									<div class="entry-title">
										<h2><a href="http://themes.semicolonweb.com/html/canvas/index-events.php#">Ducimus ipsam error fugiat harum recusandae</a></h2>
									</div>
									<ul class="entry-meta clearfix">
										<li><span class="label label-info">Public</span></li>
										<li><a href="http://themes.semicolonweb.com/html/canvas/index-events.php#"><i class="icon-time"></i> 11:00 - 19:00</a></li>
										<li><a href="http://themes.semicolonweb.com/html/canvas/index-events.php#"><i class="icon-map-marker2"></i> Melbourne</a></li>
									</ul>
									<div class="entry-content">
										<a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="btn btn-default">Buy Tickets</a> <a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="btn btn-danger">Read More</a>
									</div>
								</div>
							</div>

							<div class="entry clearfix">
								<div class="entry-image hidden-sm">
									<a href="http://themes.semicolonweb.com/html/canvas/index-events.php#">
										<img src="4.jpg" alt="Nisi officia adipisci molestiae aliquam">
										<div class="entry-date">16<span>Jun</span></div>
									</a>
								</div>
								<div class="entry-c">
									<div class="entry-title">
										<h2><a href="http://themes.semicolonweb.com/html/canvas/index-events.php#">Nisi officia adipisci molestiae aliquam</a></h2>
									</div>
									<ul class="entry-meta clearfix">
										<li><span class="label label-warning">Private</span></li>
										<li><a href="http://themes.semicolonweb.com/html/canvas/index-events.php#"><i class="icon-time"></i> 12:00 - 18:00</a></li>
										<li><a href="http://themes.semicolonweb.com/html/canvas/index-events.php#"><i class="icon-map-marker2"></i> New York</a></li>
									</ul>
									<div class="entry-content">
										<a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="btn btn-info">RSVP</a> <a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="btn btn-danger">Read More</a>
									</div>
								</div>
							</div>

						</div>

					</div>

					<div class="col_two_fifth nobottommargin col_last">

						<div class="fancy-title title-border">
							<h4>Favourite Locations</h4>
						</div>

						<div id="google-map4" style="height: 300px; position: relative; overflow: hidden;" class="gmap bottommargin"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;"><div tabindex="0" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;http://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default;"><div style="z-index: 1; position: absolute; top: 0px; left: 0px; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; position: absolute; left: -35px; top: 1px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 221px; top: 1px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -35px; top: -255px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -35px; top: 257px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 221px; top: -255px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 221px; top: 257px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -35px; top: 1px;"><canvas draggable="false" height="256" width="256" style="user-select: none; position: absolute; left: 0px; top: 0px; height: 256px; width: 256px;"></canvas></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 221px; top: 1px;"><canvas draggable="false" height="256" width="256" style="user-select: none; position: absolute; left: 0px; top: 0px; height: 256px; width: 256px;"></canvas></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -35px; top: -255px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -35px; top: 257px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 221px; top: -255px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 221px; top: 257px;"></div></div></div></div><div style="position: absolute; z-index: 0; left: 0px; top: 0px;"><div style="overflow: hidden; width: 429px; height: 300px;"><img src="StaticMapService.GetMapImage" style="width: 429px; height: 300px;"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="position: absolute; left: -35px; top: 1px; transition: opacity 200ms ease-out;"><img src="./Home - Events Layout _ Canvas_files/vt(1)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 221px; top: 1px; transition: opacity 200ms ease-out;"><img src="./Home - Events Layout _ Canvas_files/vt(2)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -35px; top: -255px; transition: opacity 200ms ease-out;"><img src="./Home - Events Layout _ Canvas_files/vt(3)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -35px; top: 257px; transition: opacity 200ms ease-out;"><img src="./Home - Events Layout _ Canvas_files/vt(4)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 221px; top: -255px; transition: opacity 200ms ease-out;"><img src="./Home - Events Layout _ Canvas_files/vt(5)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 221px; top: 257px; transition: opacity 200ms ease-out;"><img src="./Home - Events Layout _ Canvas_files/vt(6)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div></div><div class="gm-style-pbc" style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;"><p class="gm-style-pbt"></p></div><div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"><div style="z-index: 1; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"></div></div><div style="z-index: 4; position: absolute; top: 0px; left: 0px; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" href="https://maps.google.com/maps?ll=-25.274398,133.775136&amp;z=3&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3" title="Click to see this area on Google Maps" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 66px; height: 26px; cursor: pointer;"><img src="./Home - Events Layout _ Canvas_files/google4.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a></div><div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 65px; top: 60px;"><div style="padding: 0px 0px 10px; font-size: 16px;">Map Data</div><div style="font-size: 13px;">Map data ©2017 Google, INEGI</div><div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img src="./Home - Events Layout _ Canvas_files/mapcnt6.png" draggable="false" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 72px; bottom: 0px; width: 150px;"><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">Map Data</a><span>Map data ©2017 Google, INEGI</span></div></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Map data ©2017 Google, INEGI</div></div><div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/en-US_US/help/terms_maps.html" target="_blank" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Terms of Use</a></div></div><div style="cursor: pointer; width: 25px; height: 25px; overflow: hidden; display: none; margin: 10px 14px; position: absolute; top: 0px; right: 0px;"><img src="./Home - Events Layout _ Canvas_files/sv9.png" draggable="false" class="gm-fullscreen-control" style="position: absolute; left: -52px; top: -86px; width: 164px; height: 175px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px; display: none; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_new" title="Report errors in the road map or imagery to Google" href="https://www.google.com/maps/@-25.274398,133.775136,3z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Report a map error</a></div></div><div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" controlwidth="28" controlheight="55" style="margin: 10px; user-select: none; position: absolute; bottom: 69px; right: 28px;"><div class="gmnoprint" controlwidth="28" controlheight="55" style="position: absolute; left: 0px; top: 0px;"><div draggable="false" style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 28px; height: 55px;"><div title="Zoom in" style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;"><div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img src="./Home - Events Layout _ Canvas_files/tmapctrl.png" draggable="false" style="position: absolute; left: 0px; top: 0px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div></div><div style="position: relative; overflow: hidden; width: 67%; height: 1px; left: 16%; background-color: rgb(230, 230, 230); top: 0px;"></div><div title="Zoom out" style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;"><div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img src="./Home - Events Layout _ Canvas_files/tmapctrl.png" draggable="false" style="position: absolute; left: 0px; top: -15px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div></div></div></div></div></div></div></div>


						<div class="fancy-title title-border">
							<h4>Gallery</h4>
						</div>

						<div class="col_full masonry-thumbs col-4 clearfix" data-lightbox="gallery" style="position: relative; height: 161px;">
							<a href="http://canvashtml-cdn.semicolonweb.com/images/events/1.jpg" data-lightbox="gallery-item" style="width: 107px; position: absolute; left: 0px; top: 0px;"><img class="image_fade" src="1(1).jpg" alt="Gallery Thumb 1"></a>
							<a href="http://canvashtml-cdn.semicolonweb.com/images/events/2.jpg" data-lightbox="gallery-item" style="width: 107px; position: absolute; left: 107px; top: 0px;"><img class="image_fade" src="2(1).jpg" alt="Gallery Thumb 2"></a>
							<a href="http://canvashtml-cdn.semicolonweb.com/images/events/3.jpg" data-lightbox="gallery-item" style="width: 107px; position: absolute; left: 214px; top: 0px;"><img class="image_fade" src="3(1).jpg" alt="Gallery Thumb 3"></a>
							<a href="http://canvashtml-cdn.semicolonweb.com/images/events/4.jpg" data-lightbox="gallery-item" style="width: 107px; position: absolute; left: 321px; top: 0px;"><img class="image_fade" src="4.jpg" alt="Gallery Thumb 4"></a>
							<a href="http://canvashtml-cdn.semicolonweb.com/images/events/5.jpg" data-lightbox="gallery-item" style="width: 107px; position: absolute; left: 0px; top: 80px;"><img class="image_fade" src="5.jpg" alt="Gallery Thumb 5"></a>
							<a href="http://canvashtml-cdn.semicolonweb.com/images/events/6.jpg" data-lightbox="gallery-item" style="width: 107px; position: absolute; left: 107px; top: 80px;"><img class="image_fade" src="6(1).jpg" alt="Gallery Thumb 6"></a>
							<a href="http://canvashtml-cdn.semicolonweb.com/images/events/7.jpg" data-lightbox="gallery-item" style="width: 107px; position: absolute; left: 214px; top: 80px;"><img class="image_fade" src="7.jpg" alt="Gallery Thumb 7"></a>
							<a href="http://canvashtml-cdn.semicolonweb.com/images/events/8.jpg" data-lightbox="gallery-item" style="width: 107px; position: absolute; left: 321px; top: 80px;"><img class="image_fade" src="8(1).jpg" alt="Gallery Thumb 8"></a>
						</div>

						<div class="fancy-title title-border">
							<h4>Video</h4>
						</div>

						<div class="fluid-width-video-wrapper" style="padding-top: 56.2%;"><iframe src="./Home - Events Layout _ Canvas_files/30626474.html" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" id="fitvid0"></iframe></div>

					</div>

					<div class="clear"></div>

					<div id="oc-clients-full" class="owl-carousel owl-carousel-full image-carousel bottommargin-sm carousel-widget owl-loaded owl-drag" data-margin="30" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false" data-items-xxs="2" data-items-xs="3" data-items-sm="4" data-items-md="5" data-items-lg="6">

						
						
						
						
						
						
						
						
						
						
						
						
						
						

					<div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-2340px, 0px, 0px); transition: 0.25s; width: 5460px;"><div class="owl-item cloned" style="width: 165px; margin-right: 30px;"><div class="oc-item"><a href="http://logofury.com/"><img src="./Home - Events Layout _ Canvas_files/8.png" alt="Clients"></a></div></div><div class="owl-item cloned" style="width: 165px; margin-right: 30px;"><div class="oc-item"><a href="http://logofury.com/"><img src="./Home - Events Layout _ Canvas_files/9.png" alt="Clients"></a></div></div><div class="owl-item cloned" style="width: 165px; margin-right: 30px;"><div class="oc-item"><a href="http://logofury.com/"><img src="10.png" alt="Clients"></a></div></div><div class="owl-item cloned" style="width: 165px; margin-right: 30px;"><div class="oc-item"><a href="http://logofury.com/"><img src="./Home - Events Layout _ Canvas_files/11.png" alt="Clients"></a></div></div><div class="owl-item cloned" style="width: 165px; margin-right: 30px;"><div class="oc-item"><a href="http://logofury.com/"><img src="./Home - Events Layout _ Canvas_files/12.png" alt="Clients"></a></div></div><div class="owl-item cloned" style="width: 165px; margin-right: 30px;"><div class="oc-item"><a href="http://logofury.com/"><img src="./Home - Events Layout _ Canvas_files/13.png" alt="Clients"></a></div></div><div class="owl-item cloned" style="width: 165px; margin-right: 30px;"><div class="oc-item"><a href="http://logofury.com/"><img src="./Home - Events Layout _ Canvas_files/14.png" alt="Clients"></a></div></div><div class="owl-item" style="width: 165px; margin-right: 30px;"><div class="oc-item"><a href="http://logofury.com/"><img src="./Home - Events Layout _ Canvas_files/1.png" alt="Clients"></a></div></div><div class="owl-item" style="width: 165px; margin-right: 30px;"><div class="oc-item"><a href="http://logofury.com/"><img src="./Home - Events Layout _ Canvas_files/2.png" alt="Clients"></a></div></div><div class="owl-item" style="width: 165px; margin-right: 30px;"><div class="oc-item"><a href="http://logofury.com/"><img src="./Home - Events Layout _ Canvas_files/3.png" alt="Clients"></a></div></div><div class="owl-item" style="width: 165px; margin-right: 30px;"><div class="oc-item"><a href="http://logofury.com/"><img src="./Home - Events Layout _ Canvas_files/4.png" alt="Clients"></a></div></div><div class="owl-item" style="width: 165px; margin-right: 30px;"><div class="oc-item"><a href="http://logofury.com/"><img src="./Home - Events Layout _ Canvas_files/5.png" alt="Clients"></a></div></div><div class="owl-item active" style="width: 165px; margin-right: 30px;"><div class="oc-item"><a href="http://logofury.com/"><img src="./Home - Events Layout _ Canvas_files/6.png" alt="Clients"></a></div></div><div class="owl-item active" style="width: 165px; margin-right: 30px;"><div class="oc-item"><a href="http://logofury.com/"><img src="./Home - Events Layout _ Canvas_files/7.png" alt="Clients"></a></div></div><div class="owl-item active" style="width: 165px; margin-right: 30px;"><div class="oc-item"><a href="http://logofury.com/"><img src="./Home - Events Layout _ Canvas_files/8.png" alt="Clients"></a></div></div><div class="owl-item active" style="width: 165px; margin-right: 30px;"><div class="oc-item"><a href="http://logofury.com/"><img src="./Home - Events Layout _ Canvas_files/9.png" alt="Clients"></a></div></div><div class="owl-item active" style="width: 165px; margin-right: 30px;"><div class="oc-item"><a href="http://logofury.com/"><img src="./Home - Events Layout _ Canvas_files/10.png" alt="Clients"></a></div></div><div class="owl-item active" style="width: 165px; margin-right: 30px;"><div class="oc-item"><a href="http://logofury.com/"><img src="./Home - Events Layout _ Canvas_files/11.png" alt="Clients"></a></div></div><div class="owl-item" style="width: 165px; margin-right: 30px;"><div class="oc-item"><a href="http://logofury.com/"><img src="./Home - Events Layout _ Canvas_files/12.png" alt="Clients"></a></div></div><div class="owl-item" style="width: 165px; margin-right: 30px;"><div class="oc-item"><a href="http://logofury.com/"><img src="./Home - Events Layout _ Canvas_files/13.png" alt="Clients"></a></div></div><div class="owl-item" style="width: 165px; margin-right: 30px;"><div class="oc-item"><a href="http://logofury.com/"><img src="./Home - Events Layout _ Canvas_files/14.png" alt="Clients"></a></div></div><div class="owl-item cloned" style="width: 165px; margin-right: 30px;"><div class="oc-item"><a href="http://logofury.com/"><img src="./Home - Events Layout _ Canvas_files/1.png" alt="Clients"></a></div></div><div class="owl-item cloned" style="width: 165px; margin-right: 30px;"><div class="oc-item"><a href="http://logofury.com/"><img src="./Home - Events Layout _ Canvas_files/2.png" alt="Clients"></a></div></div><div class="owl-item cloned" style="width: 165px; margin-right: 30px;"><div class="oc-item"><a href="http://logofury.com/"><img src="./Home - Events Layout _ Canvas_files/3.png" alt="Clients"></a></div></div><div class="owl-item cloned" style="width: 165px; margin-right: 30px;"><div class="oc-item"><a href="http://logofury.com/"><img src="./Home - Events Layout _ Canvas_files/4.png" alt="Clients"></a></div></div><div class="owl-item cloned" style="width: 165px; margin-right: 30px;"><div class="oc-item"><a href="http://logofury.com/"><img src="./Home - Events Layout _ Canvas_files/5.png" alt="Clients"></a></div></div><div class="owl-item cloned" style="width: 165px; margin-right: 30px;"><div class="oc-item"><a href="http://logofury.com/"><img src"/6.png" alt="Clients"></a></div></div><div class="owl-item cloned" style="width: 165px; margin-right: 30px;"><div class="oc-item"><a href="http://logofury.com/"><img src="./Home - Events Layout _ Canvas_files/7.png" alt="Clients"></a></div></div></div></div><div class="owl-nav disabled"><div class="owl-prev"><i class="icon-angle-left"></i></div><div class="owl-next"><i class="icon-angle-right"></i></div></div><div class="owl-dots disabled"></div></div>


				</div>

				<div class="section footer-stick notopmargin">

					<h4 class="uppercase center"><span>Attendees</span> Feedback</h4>

					<div class="fslider testimonial testimonial-full" data-animation="fade" data-arrows="false">
						<div class="flexslider" style="height: 239.498px; overflow: hidden;">
							<div class="slider-wrap">
								<div class="slide" data-thumb-alt="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0.480711; display: block; z-index: 1;">
									<div class="testi-image">
										<a href="http://themes.semicolonweb.com/html/canvas/index-events.php#"><img src="3(2).jpg" alt="Customer Testimonails" draggable="false"></a>
									</div>
									<div class="testi-content">
										<p>Similique fugit repellendus expedita excepturi iure perferendis provident quia eaque. Repellendus, vero numquam?</p>
										<div class="testi-meta">
											Steve Jobs
											<span>Apple Inc.</span>
										</div>
									</div>
								</div>
								<div class="slide flex-active-slide" data-thumb-alt="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0.519289; display: block; z-index: 2;">
									<div class="testi-image">
										<a href="http://themes.semicolonweb.com/html/canvas/index-events.php#"><img src="2(2).jpg" alt="Customer Testimonails" draggable="false"></a>
									</div>
									<div class="testi-content">
										<p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
										<div class="testi-meta">
											Collis Ta'eed
											<span>Envato Inc.</span>
										</div>
									</div>
								</div>
								<div class="slide" data-thumb-alt="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;">
									<div class="testi-image">
										<a href="http://themes.semicolonweb.com/html/canvas/index-events.php#"><img src="./Home - Events Layout _ Canvas_files/1(2).jpg" alt="Customer Testimonails" draggable="false"></a>
									</div>
									<div class="testi-content">
										<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
										<div class="testi-meta">
											John Doe
											<span>XYZ Inc.</span>
										</div>
									</div>
								</div>
							</div>
						<ol class="flex-control-nav flex-control-paging"><li><a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="">1</a></li><li><a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="flex-active">2</a></li><li><a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="">3</a></li></ol></div>
					</div>

				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">

					<div class="col_two_third">

						<div class="col_one_third">

							<div class="widget clearfix">

								<img src="footer-widget-logo.png" alt="" class="footer-logo">

								<p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards.</p>

								<div style="background: url(&#39;http://canvashtml-cdn.semicolonweb.com/images/world-map.png&#39;) no-repeat center center; background-size: 100%;">
									<address>
										<strong>Headquarters:</strong><br>
										795 Folsom Ave, Suite 600<br>
										San Francisco, CA 94107<br>
									</address>
									<abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
									<abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br>
									<abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
								</div>

							</div>

						</div>

						<div class="col_one_third">

							<div class="widget widget_links clearfix">

								<h4>Blogroll</h4>

								<ul>
									<li><a href="http://codex.wordpress.org/">Documentation</a></li>
									<li><a href="http://wordpress.org/support/forum/requests-and-feedback">Feedback</a></li>
									<li><a href="http://wordpress.org/extend/plugins/">Plugins</a></li>
									<li><a href="http://wordpress.org/support/">Support Forums</a></li>
									<li><a href="http://wordpress.org/extend/themes/">Themes</a></li>
									<li><a href="http://wordpress.org/news/">WordPress Blog</a></li>
									<li><a href="http://planet.wordpress.org/">WordPress Planet</a></li>
								</ul>

							</div>

						</div>

						<div class="col_one_third col_last">

							<div class="widget clearfix">
								<h4>Recent Posts</h4>

								<div id="post-list-footer">
									<div class="spost clearfix">
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="http://themes.semicolonweb.com/html/canvas/index-events.php#">Lorem ipsum dolor sit amet, consectetur</a></h4>
											</div>
											<ul class="entry-meta">
												<li>10th July 2014</li>
											</ul>
										</div>
									</div>

									<div class="spost clearfix">
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="http://themes.semicolonweb.com/html/canvas/index-events.php#">Elit Assumenda vel amet dolorum quasi</a></h4>
											</div>
											<ul class="entry-meta">
												<li>10th July 2014</li>
											</ul>
										</div>
									</div>

									<div class="spost clearfix">
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="http://themes.semicolonweb.com/html/canvas/index-events.php#">Debitis nihil placeat, illum est nisi</a></h4>
											</div>
											<ul class="entry-meta">
												<li>10th July 2014</li>
											</ul>
										</div>
									</div>
								</div>
							</div>

						</div>

					</div>

					<div class="col_one_third col_last">

						<div class="widget clearfix" style="margin-bottom: -20px;">

							<div class="row">

								<div class="col-md-6 bottommargin-sm">
									<div class="counter counter-small"><span data-from="50" data-to="15065421" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
									<h5 class="nobottommargin">Total Downloads</h5>
								</div>

								<div class="col-md-6 bottommargin-sm">
									<div class="counter counter-small"><span data-from="100" data-to="18465" data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>
									<h5 class="nobottommargin">Clients</h5>
								</div>

							</div>

						</div>

						<div class="widget subscribe-widget clearfix">
							<h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
							<div class="widget-subscribe-form-result"></div>
							<form id="widget-subscribe-form" action="http://themes.semicolonweb.com/html/canvas/include/subscribe.php" role="form" method="post" class="nobottommargin" novalidate="novalidate">
								<div class="input-group divcenter">
									<span class="input-group-addon"><i class="icon-email2"></i></span>
									<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email" aria-required="true">
									<span class="input-group-btn">
										<button class="btn btn-success" type="submit">Subscribe</button>
									</span>
								</div>
							</form>
						</div>

						<div class="widget clearfix" style="margin-bottom: -20px;">

							<div class="row">

								<div class="col-md-6 clearfix bottommargin-sm">
									<a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="http://themes.semicolonweb.com/html/canvas/index-events.php#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
								</div>
								<div class="col-md-6 clearfix">
									<a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px;">
										<i class="icon-rss"></i>
										<i class="icon-rss"></i>
									</a>
									<a href="http://themes.semicolonweb.com/html/canvas/index-events.php#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
								</div>

							</div>

						</div>

					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						Copyrights © 2014 All Rights Reserved by Canvas Inc.<br>
						<div class="copyright-links"><a href="http://themes.semicolonweb.com/html/canvas/index-events.php#">Terms of Use</a> / <a href="http://themes.semicolonweb.com/html/canvas/index-events.php#">Privacy Policy</a></div>
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="social-icon si-small si-borderless si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="social-icon si-small si-borderless si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>

							<a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="social-icon si-small si-borderless si-pinterest">
								<i class="icon-pinterest"></i>
								<i class="icon-pinterest"></i>
							</a>

							<a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="social-icon si-small si-borderless si-vimeo">
								<i class="icon-vimeo"></i>
								<i class="icon-vimeo"></i>
							</a>

							<a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="social-icon si-small si-borderless si-github">
								<i class="icon-github"></i>
								<i class="icon-github"></i>
							</a>

							<a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="social-icon si-small si-borderless si-yahoo">
								<i class="icon-yahoo"></i>
								<i class="icon-yahoo"></i>
							</a>

							<a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" class="social-icon si-small si-borderless si-linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>
						</div>

						<div class="clear"></div>

						<i class="icon-envelope2"></i> info@canvas.com <span class="middot">·</span> <i class="icon-headphones"></i> +91-11-6541-6369 <span class="middot">·</span> <i class="icon-skype2"></i> CanvasOnSkype
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up" style="display: none;"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="jquery.calendario.js"></script>
	<script type="text/javascript" src="events-data.js"></script>
	<script type="text/javascript" src="js"></script>
	<script type="text/javascript" src="jquery.gmap.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="functions.js"></script>

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

<div class="switcher clearfix" style="left: -260px;"><div class="switcher-head"><span>Style Switcher<a href="http://themes.semicolonweb.com/html/canvas/index-events.php#" id="switcher-reset-button" class="btn btn-danger fright btn-xs" style="margin-top: 12px;">Reset</a></span><div class="switcher-trigger icon-line-cog"></div></div><div class="switcher-body clearfix"><!-- <div id="switcher-op-layout"><a href="#" data-layout="stretched" class="button button-3d button-black" style="margin: 0 10px 0 0;">Wide</a><a href="#" data-layout="boxed" class="button button-3d button-white button-light nomargin">Boxed</a></div><div class="line"></div> --><div class="switcher-op-pt"><h5>Page Loading Styles:</h5><a href="http://themes.semicolonweb.com/html/canvas/index-events.php?page-loader=1" class="button button-3d button-small noleftmargin">1</a><a href="http://themes.semicolonweb.com/html/canvas/index-events.php?page-loader=2" class="button button-3d button-small">2</a><a href="http://themes.semicolonweb.com/html/canvas/index-events.php?page-loader=3" class="button button-3d button-small noleftmargin">3</a><a href="http://themes.semicolonweb.com/html/canvas/index-events.php?page-loader=4" class="button button-3d button-small">4</a><a href="http://themes.semicolonweb.com/html/canvas/index-events.php?page-loader=5" class="button button-3d button-small noleftmargin">5</a><a href="http://themes.semicolonweb.com/html/canvas/index-events.php?page-loader=6" class="button button-3d button-small">6</a><a href="http://themes.semicolonweb.com/html/canvas/index-events.php?page-loader=7" class="button button-3d button-small">7</a><a href="http://themes.semicolonweb.com/html/canvas/index-events.php?page-loader=8" class="button button-3d button-small">8</a><a href="http://themes.semicolonweb.com/html/canvas/index-events.php?page-loader=9" class="button button-3d button-small noleftmargin">9</a><a href="http://themes.semicolonweb.com/html/canvas/index-events.php?page-loader=10" class="button button-3d button-small">10</a><a href="http://themes.semicolonweb.com/html/canvas/index-events.php?page-loader=11" class="button button-3d button-small">11</a><a href="http://themes.semicolonweb.com/html/canvas/index-events.php?page-loader=12" class="button button-3d button-small noleftmargin norightmargin">12</a><a href="http://themes.semicolonweb.com/html/canvas/index-events.php?page-loader=13" class="button button-3d button-small noleftmargin">13</a><a href="http://themes.semicolonweb.com/html/canvas/index-events.php?page-loader=14" class="button button-3d button-small">14</a></div><div class="line"></div><div class="switcher-op-colors"><h5>Choose Color:</h5><ul id="switcher-option-color" class="switcher-op-selectors clearfix"><li style="background-color: #1abc9c;" data-color="1abc9c"></li><li style="background-color: #3498db;" data-color="3498db"></li><li style="background-color: #9b59b6;" data-color="9b59b6"></li><li style="background-color: #34495e;" data-color="34495e"></li><li style="background-color: #e67e22;" data-color="e67e22"></li><li style="background-color: #c0392b;" data-color="c0392b"></li><li style="background-color: #336E7B;" data-color="336E7B"></li><li style="background-color: #3A539B;" data-color="3A539B"></li><li style="background-color: #019875;" data-color="019875"></li></ul></div><div class="line"></div><!-- <div class="switcher-op-patterns"><p><strong>Choose Pattern:</strong></p><ul id="switcher-option-pattern" class="switcher-op-selectors clearfix"><li style="background-image: url('switcher/patterns/light/pattern1.png');" data-url="switcher/patterns/light/pattern1.png"></li><li style="background-image: url('switcher/patterns/light/pattern3.png');" data-url="switcher/patterns/light/pattern3.png"></li><li style="background-image: url('switcher/patterns/light/pattern4.png');" data-url="switcher/patterns/light/pattern4.png"></li><li style="background-image: url('switcher/patterns/light/pattern6.png');" data-url="switcher/patterns/light/pattern6.png"></li><li style="background-image: url('switcher/patterns/light/pattern7.png');" data-url="switcher/patterns/light/pattern7.png"></li><li style="background-image: url('switcher/patterns/light/pattern8.png');" data-url="switcher/patterns/light/pattern8.png"></li><li style="background-image: url('switcher/patterns/light/pattern9.png');" data-url="switcher/patterns/light/pattern9.png"></li><li style="background-image: url('switcher/patterns/light/pattern10.png');" data-url="switcher/patterns/light/pattern10.png"></li><li style="background-image: url('switcher/patterns/light/pattern13.png');" data-url="switcher/patterns/light/pattern13.png"></li><li style="background-image: url('switcher/patterns/dark/pattern1.png');" data-url="switcher/patterns/dark/pattern1.png"></li><li style="background-image: url('switcher/patterns/dark/pattern2.png');" data-url="switcher/patterns/dark/pattern2.png"></li><li style="background-image: url('switcher/patterns/dark/pattern3.png');" data-url="switcher/patterns/dark/pattern3.png"></li><li style="background-image: url('switcher/patterns/dark/pattern4.png');" data-url="switcher/patterns/dark/pattern4.png"></li><li style="background-image: url('switcher/patterns/dark/pattern5.png');" data-url="switcher/patterns/dark/pattern5.png"></li><li style="background-image: url('switcher/patterns/dark/pattern6.png');" data-url="switcher/patterns/dark/pattern6.png"></li><li style="background-image: url('switcher/patterns/dark/pattern7.png');" data-url="switcher/patterns/dark/pattern7.png"></li><li style="background-image: url('switcher/patterns/dark/pattern8.png');" data-url="switcher/patterns/dark/pattern8.png"></li><li style="background-image: url('switcher/patterns/dark/pattern9.png');" data-url="switcher/patterns/dark/pattern9.png"></li></ul></div><div class="line"></div><div class="switcher-op-bgimages"><p><strong>Background Images:</strong></p><ul id="switcher-option-bgimage" class="switcher-op-selectors clearfix"><li data-url="images/parallax/home/1.jpg"><img src="switcher/bgimages/1.jpg" alt="Background Image 1" title="Background Image 1"/></li><li data-url="images/parallax/home/2.jpg"><img src="switcher/bgimages/2.jpg" alt="Background Image 2" title="Background Image 2"/></li><li data-url="images/parallax/home/4.jpg"><img src="switcher/bgimages/4.jpg" alt="Background Image 3" title="Background Image 3"/></li><li data-url="images/parallax/home/5.jpg"><img src="switcher/bgimages/5.jpg" alt="Background Image 4" title="Background Image 4"/></li><li data-url="images/parallax/home/6.jpg"><img src="switcher/bgimages/6.jpg" alt="Background Image 5" title="Background Image 5"/></li><li data-url="images/parallax/home/7.jpg"><img src="switcher/bgimages/7.jpg" alt="Background Image 6" title="Background Image 6"/></li><li data-url="images/parallax/home/9.jpg"><img src="switcher/bgimages/9.jpg" alt="Background Image 7" title="Background Image 7"/></li><li data-url="images/parallax/home/10.jpg"><img src="switcher/bgimages/10.jpg" alt="Background Image 8" title="Background Image 8"/></li><li data-url="images/parallax/home/11.jpg"><img src="switcher/bgimages/11.jpg" alt="Background Image 9" title="Background Image 9"/></li></ul></div><div class="line"></div> --><div id="switcher-option-footer" class="switcher-op-footerc clearfix"><a href="http://themes.semicolonweb.com/html/canvas/dark/index-events.php" class="button button-3d button-large button-black center noleftmargin notopmargin nobottommargin" style="padding:0 25px;">Dark</a><a href="http://themes.semicolonweb.com/html/canvas/intro.php" class="button button-3d button-large button-black center nomargin" style="padding:0 25px;">Demos</a></div></div></div><script type="text/javascript" src="./Home - Events Layout _ Canvas_files/switcher.js.download"></script><script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-23255544-12', 'auto');
  ga('send', 'pageview');
</script><script>jQuery(document).ready(function(e){e("#primary-menu > ul li").find('.new-badge').children("div").append('<span class="label label-danger" style="display:inline-block;margin-left:8px;position:relative;top:-1px;text-transform:none;">New</span>')});</script>
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"839484a19a","applicationID":"5289971","transactionName":"ZQEDZxZUD0FZVkxfX1xLNEENGglGVVkXVVFcEgBAS1wPVl1NFVNGVwoVQEpFCUI=","queueTime":0,"applicationTime":1,"atts":"SUYAEV5OHE8=","errorBeacon":"bam.nr-data.net","agent":""}</script>
</body></html>