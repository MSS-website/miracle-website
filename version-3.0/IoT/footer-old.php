<!DOCTYPE html>
<html>
    <head>
 	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="../css/dark.css" type="text/css" />
	<link rel="stylesheet" href="../css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="../css/animate.css" type="text/css" />
	<link rel="stylesheet" href="../css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<style>
	    /* Widget - Links
-----------------------------------------------------------------*/

.widget_nav_menu ul,
.widget_nav_menu li,
.widget_links ul,
.widget_links li,
.widget_meta ul,
.widget_meta li,
.widget_archive ul,
.widget_archive li,
.widget_recent_comments ul,
.widget_recent_comments li,
.widget_recent_entries ul,
.widget_recent_entries li,
.widget_categories ul,
.widget_categories li,
.widget_pages ul,
.widget_pages li,
.widget_rss ul,
.widget_rss li {
	list-style: none;
	margin: 0;
}

.widget_nav_menu li,
.widget_links li,
.widget_meta li,
.widget_archive li,
.widget_recent_comments li,
.widget_recent_entries li,
.widget_categories li,
.widget_pages li,
.widget_rss li { padding: 4px; }

.widget_nav_menu li a,
.widget_links li a,
.widget_meta li a,
.widget_archive li a,
.widget_recent_entries li a,
.widget_categories li a,
.widget_pages li a,
.widget_rss li a,
.widget_recent_comments li {
	display: inline-block;
	padding: 0 3px 0 12px;
}

.widget_recent_comments li {
	display: block;
	background: url("images/icons/widget-comment.png") left top no-repeat;
	padding: 4px 0 4px 20px;
}

.widget_nav_menu li a,
.widget_links li a,
.widget_meta li a,
.widget_archive li a,
.widget_recent_entries li a,
.widget_categories li a,
.widget_pages li a,
.widget_rss li a,
.widget_recent_comments li a {
	background: url("images/icons/widget-link.png") left top no-repeat;
	border: none !important;
	color: #444;
	font-size: 14px;
}

.widget_nav_menu li a:hover,
.widget_links li a:hover,
.widget_meta li a:hover,
.widget_archive li a:hover,
.widget_recent_entries li a:hover,
.widget_categories li a:hover,
.widget_pages li a:hover,
.widget_rss li a:hover,
.widget_recent_comments li a:hover { color: #000; }

.widget_recent_comments li a {
	display: inline;
	padding: 0;
	background: none !important;
}

.widget_nav_menu > ul > li:first-child,
.widget_links > ul > li:first-child,
.widget_meta > ul > li:first-child,
.widget_archive > ul > li:first-child,
.widget_recent_comments > ul > li:first-child,
.widget_recent_entries > ul > li:first-child,
.widget_categories > ul > li:first-child,
.widget_pages > ul > li:first-child,
.widget_rss > ul > li:first-child { border-top: 0 !important; }

.widget_nav_menu > ul,
.widget_links > ul,
.widget_meta > ul,
.widget_archive > ul,
.widget_recent_comments > ul,
.widget_recent_entries > ul,
.widget_categories > ul,
.widget_pages > ul,
.widget_rss > ul { margin-top: -4px !important; }

.widget_nav_menu ul ul,
.widget_links ul ul,
.widget_meta ul ul,
.widget_archive ul ul,
.widget_recent_comments ul ul,
.widget_recent_entries ul ul,
.widget_categories ul ul,
.widget_pages ul ul,
.widget_rss ul ul { margin-left: 15px; }


/* Widget - Testimonial & Twitter
-----------------------------------------------------------------*/

.widget .testimonial.no-image .testi-image { display: none; }

.widget .testimonial.twitter-scroll .testi-image { margin-right: 10px; }

.widget .testimonial:not(.twitter-scroll) .testi-image,
.widget .testimonial:not(.twitter-scroll) .testi-image a,
.widget .testimonial:not(.twitter-scroll) .testi-image img {
	width: 42px;
	height: 42px;
}

.widget .testimonial.twitter-scroll .testi-image,
.widget .testimonial.twitter-scroll .testi-image a,
.widget .testimonial.twitter-scroll .testi-image img,
.widget .testimonial.twitter-scroll .testi-image i {
	width: 28px;
	height: 28px;
}

.widget .testimonial.twitter-scroll .testi-image i {
	background-color: #EEE;
	line-height: 28px;
	font-size: 14px;
	color: #888;
}

.widget .testimonial p { font-size: 14px; }


/* Widget - Quick Contact Form
-----------------------------------------------------------------*/

.quick-contact-widget .form-control,
.quick-contact-widget .input-group,
.quick-contact-widget .sm-form-control { margin-bottom: 10px; }

.quick-contact-widget .input-group .form-control { margin-bottom: 0; }

.quick-contact-widget form,
#template-contactform { position: relative; }


/* Newsletter Widget
-----------------------------------------------------------------*/

.subscribe-widget h5 {
	font-weight: 300;
	font-size: 14px;
	line-height: 1.5;
}


/* Twitter Feed Widget
-----------------------------------------------------------------*/

.widget-twitter-feed li { margin: 15px 0 0 0; }

.widget-twitter-feed li:first-child { margin-top: 0; }

.widget-twitter-feed small {
	display: block;
	margin-top: 3px;
}

.widget-twitter-feed small a { color: #999; }

.widget-twitter-feed .twitter-feed:not(.twitter-feed-avatar) a.twitter-avatar { display: none; }

.widget-twitter-feed .twitter-feed.twitter-feed-avatar i.icon-twitter { display: none; }

.widget-twitter-feed .twitter-feed-avatar { margin-left: 44px; }

.widget-twitter-feed .twitter-feed-avatar > li a.twitter-avatar {
    display: block;
    position: absolute;
    left: -44px;
    text-align: center;
    top: 2px;
    width: 32px;
    height: 32px;
}

.twitter-feed-avatar a.twitter-avatar img { border-radius: 50%; }


/* Widget Filter Links
-----------------------------------------------------------------*/

.widget-filter-links ul {
	list-style: none;
	margin-bottom: 0;
}

.widget-filter-links .widget-filter-reset {
	position: absolute;
	top: 0;
	left: auto;
	right: 0;
	font-size: 12px;
	line-height: 22px;
}

.widget:not(:first-child) .widget-filter-reset { top: 50px; }

.widget-filter-links .widget-filter-reset a { color: red; }

.widget-filter-links .widget-filter-reset.active-filter { display: none; }

.widget-filter-links li {
	position: relative;
	font-size: 15px;
	line-height: 24px;
}

.widget-filter-links li:not(:first-child) { margin-top: 10px; }

.widget-filter-links li a {
	display: block;
	color: #444;
	font-family: 'Lato', sans-serif;
	font-weight: 500;
}

.widget-filter-links li span {
	position: absolute;
	top: 1px;
	left: auto;
	right: 0;
	font-size: 11px;
	width: 22px;
	height: 22px;
	line-height: 22px;
	text-align: center;
	color: #777;
	background-color: #EEE;
	border-radius: 50%;
}

.widget-filter-links li:hover a { color: #777; }

.widget-filter-links li.active-filter a { font-weight: 700; }

.widget-filter-links li.active-filter span {
	color: #FFF;
	background-color: #00aae7;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.1);
}

.spost,
.mpost {
	margin-top: 20px;
	padding-top: 20px;
	border-top: 1px dashed #E5E5E5;
}

.mpost {
	margin-top: 25px;
	padding-top: 25px;
}

.spost:first-child,
.mpost:first-child {
	margin-top: 0;
	padding-top: 0;
	border-top: 0;
}

.spost .entry-image,
.mpost .entry-image {
	float: left;
	margin: 0 15px 0 0;
	text-align: center;
}

.spost .entry-image,
.spost .entry-image a,
.spost .entry-image img,
.spost .entry-image i {
	width: 48px;
	height: 48px;
}

.spost .entry-image a i,
.mpost .entry-image a i {
	font-size: 28px;
	line-height: 48px;
	color: #666;
	background-color: #EEE;
}

.spost .entry-title h4,
.mpost .entry-title h4 {
	margin: 0;
	font-size: 14px;
	font-weight: 600;
}

.spost .entry-title h4 a,
.mpost .entry-title h4 a { color: #333; }

.spost .entry-title h4 a:hover,
.mpost .entry-title h4 a:hover { color: #00aae7; }

.spost .entry-meta { margin: 8px -10px 0 0; }

.spost .entry-meta li,
.mpost .entry-meta li {
	font-size: 13px;
	margin: 0 10px 0 0;
}


/* Medium Post
-----------------------------------------------------------------*/

.mpost .entry-image { margin-right: 20px; }

.mpost .entry-image,
.mpost .entry-image a,
.mpost .entry-image img,
.mpost .entry-image i {
	width: 170px;
	height: 128px;
}

.mpost .entry-image a,
.mpost .entry-image img { border-radius: 2px; }

.mpost .entry-image a i {
	font-size: 42px;
	line-height: 128px;
}

.mpost .entry-title h4 {
	margin: 0;
	font-size: 17px;
	font-weight: 600;
}

.mpost .entry-meta { margin-top: 5px; }

.mpost .entry-meta li i { margin-right: 2px; }

.mpost .entry-content { margin-top: 15px; }

.post-navigation + .line { margin: 40px 0 50px; }


/* ----------------------------------------------------------------
	Blog - Author
-----------------------------------------------------------------*/

.author-image {
	float: left;
	width: 84px;
	height: 84px;
	margin-right: 15px;
}

.author-image img {
	width: 84px;
	height: 84px;
}


	</style>
   </head>
   <body><footer id="footer" class="dark">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">

					<div class="col_two_third">

						<div class="col_one_third">

							<div class="widget clearfix">

								<img src="images/footer-widget-logo.png" alt="" class="footer-logo">

								<p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards.</p>

								<div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
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
												<h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
											</div>
											<ul class="entry-meta">
												<li>10th July 2014</li>
											</ul>
										</div>
									</div>

									<div class="spost clearfix">
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
											</div>
											<ul class="entry-meta">
												<li>10th July 2014</li>
											</ul>
										</div>
									</div>

									<div class="spost clearfix">
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
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
							<form id="widget-subscribe-form" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
								<div class="input-group divcenter">
									<span class="input-group-addon"><i class="icon-email2"></i></span>
									<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
									<span class="input-group-btn">
										<button class="btn btn-success" type="submit">Subscribe</button>
									</span>
								</div>
							</form>
						</div>

						<div class="widget clearfix" style="margin-bottom: -20px;">

							<div class="row">

								<div class="col-md-6 clearfix bottommargin-sm">
									<a href="#" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
								</div>
								<div class="col-md-6 clearfix">
									<a href="#" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px;">
										<i class="icon-rss"></i>
										<i class="icon-rss"></i>
									</a>
									<a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
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
						Copyrights &copy; 2014 All Rights Reserved by Canvas Inc.<br>
						<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<a href="#" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-pinterest">
								<i class="icon-pinterest"></i>
								<i class="icon-pinterest"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-vimeo">
								<i class="icon-vimeo"></i>
								<i class="icon-vimeo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-github">
								<i class="icon-github"></i>
								<i class="icon-github"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-yahoo">
								<i class="icon-yahoo"></i>
								<i class="icon-yahoo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>
						</div>

						<div class="clear"></div>

						<i class="icon-envelope2"></i> info@canvas.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +91-11-6541-6369 <span class="middot">&middot;</span> <i class="icon-skype2"></i> CanvasOnSkype
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->
			<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>
		</body>
		</html>
   