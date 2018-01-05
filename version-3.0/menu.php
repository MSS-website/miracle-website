<!DOCTYPE html>
<!-- saved from url=(0054)http://bootsnipp-env.elasticbeanstalk.com/iframe/50A4a -->
<html>
  <head>
    <link href="header/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
    @import url(http://fonts.googleapis.com/css?family=Open+Sans:400,700);
body {
  font-family: 'Open Sans', 'sans-serif';
}
.mega-dropdown {
  position: static !important;
}
.mega-dropdown-menu {
    padding: 20px 0px;
    width: 100%;
    box-shadow: none;
    -webkit-box-shadow: none;
}
.mega-dropdown-menu > li > ul {
  padding: 0;
  margin: 0;
}
.mega-dropdown-menu > li > ul > li {
  list-style: none;
}
.mega-dropdown-menu > li > ul > li > a {
  display: block;
  color: #222;
  padding: 3px 5px;
}
.mega-dropdown-menu > li ul > li > a:hover,
.mega-dropdown-menu > li ul > li > a:focus {
  text-decoration: none;
}
.mega-dropdown-menu .dropdown-header {
  font-size: 18px;
  color: #ff3546;
  padding: 5px 60px 5px 5px;
  line-height: 30px;
}

.carousel-control {
  width: 30px;
  height: 30px;
  top: -35px;

}
.left.carousel-control {
  right: 30px;
  left: inherit;
}
.carousel-control .glyphicon-chevron-left, 
.carousel-control .glyphicon-chevron-right {
  font-size: 12px;
  background-color: #fff;
  line-height: 30px;
  text-shadow: none;
  color: #333;
  border: 1px solid #ddd;
}
    </style>
    <script src="header/jquery-1.10.2.min.js"></script>
    <script src="header/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function change./CSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, '');
        });
    </script>
<link type="text/css" rel="stylesheet" charset="UTF-8" href="header/translateelement.css"></head>
<body style="">
	<div class="container">
  <nav class="navbar navbar-inverse">
    <div class="navbar-header">
    	<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
			<span class="sr-only"><font><font>Toggle navigation</font></font></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#"><font><font>CuteCute</font></font></a>
	</div>
	
	<div class="collapse navbar-collapse js-navbar-collapse">
		<ul class="nav navbar-nav">
			<li class="dropdown mega-dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><font><font class="">accessories </font></font><span class="caret"></span></a>				
				<ul class="dropdown-menu mega-dropdown-menu" style="display: none;">
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header"><font><font>Men Collection</font></font></li>                            
                            <div id="menCollection" class="carousel slide" data-ride="carousel">
                              <div class="carousel-inner">
                                <div class="item">
                                    <a href="#"><img src="header/text.png" class="img-responsive" alt="1 product"></a>
                                    <h4><small><font><font>Summer dress floral prints</font></font></small></h4>                                        
                                    <button class="btn btn-primary" type="button"><font><font>€ 49.99</font></font></button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span><font><font> Add to Wishlist</font></font></button>       
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="header/text1.png" class="img-responsive" alt="product 2"></a>
                                    <h4><small><font><font>Gold sandals with shiny touch</font></font></small></h4>                                        
                                    <button class="btn btn-primary" type="button"><font><font>9,99 €</font></font></button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span><font><font> Add to Wishlist</font></font></button>        
                                </div><!-- End Item -->
                                <div class="item active">
                                    <a href="#"><img src="header/text2.png" class="img-responsive" alt="3 product"></a>
                                    <h4><small><font><font>Denin jacket stamped</font></font></small></h4>                                        
                                    <button class="btn btn-primary" type="button"><font><font>€ 49.99</font></font></button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span><font><font> Add to Wishlist</font></font></button>      
                                </div><!-- End Item -->                                
                              </div><!-- End Carousel Inner -->
                              <!-- Controls -->
                              <a class="left carousel-control" href="#" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only"><font><font>Previous</font></font></span>
                              </a>
                              <a class="right carousel-control" href="#" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only"><font><font>Next</font></font></span>
                              </a>
                            </div><!-- /.carousel -->
                            <li class="divider"></li>
                            <li><a href="#"><font><font>View all Collection </font></font><span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header"><font><font>Features</font></font></li>
							<li><a href="#"><font><font>Auto Carousel</font></font></a></li>
                            <li><a href="#"><font><font>Carousel Control</font></font></a></li>
                            <li><a href="#"><font><font>Left &amp; Right Navigation</font></font></a></li>
							<li><a href="#"><font><font>Four Columns Grid</font></font></a></li>
							<li class="divider"></li>
							<li class="dropdown-header"><font><font>Fonts</font></font></li>
                            <li><a href="#"><font><font>Glyphicon</font></font></a></li>
							<li><a href="#"><font><font>Google Fonts</font></font></a></li>
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header"><font><font>Plus</font></font></li>
							<li><a href="#"><font><font>Navbar Inverse</font></font></a></li>
							<li><a href="#"><font><font>Pull Right Elements</font></font></a></li>
							<li><a href="#"><font><font>Coloured Headers</font></font></a></li>                            
							<li><a href="#"><font><font>Primary Buttons &amp; Default</font></font></a></li>							
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header"><font><font>Much more</font></font></li>
                            <li><a href="#"><font><font>Easy to Customize</font></font></a></li>
							<li><a href="#"><font><font>Calls to action</font></font></a></li>
							<li><a href="#"><font><font>Custom Fonts</font></font></a></li>
							<li><a href="#"><font><font>Slide down on Hover</font></font></a></li>                         
						</ul>
					</li>
				</ul>				
			</li>
            
            
            
                		<li class="dropdown mega-dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><font>
				  <font>accessories </font></font><span class="caret"></span></a>				
				<ul class="dropdown-menu mega-dropdown-menu" style="display: none;">
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header"><font><font>Men Collection</font></font></li>                            
                            <div id="menCollection" class="carousel slide" data-ride="carousel">
                              <div class="carousel-inner">
                                <div class="item">
                                    <a href="#"><img src="header/text.png" class="img-responsive" alt="1 product"></a>
                                    <h4><small><font><font>Summer dress floral prints</font></font></small></h4>                                        
                                    <button class="btn btn-primary" type="button"><font><font>€ 49.99</font></font></button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span><font><font> Add to Wishlist</font></font></button>       
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="header/text1.png" class="img-responsive" alt="product 2"></a>
                                    <h4><small><font><font>Gold sandals with shiny touch</font></font></small></h4>                                        
                                    <button class="btn btn-primary" type="button"><font><font>9,99 €</font></font></button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span><font><font> Add to Wishlist</font></font></button>        
                                </div><!-- End Item -->
                                <div class="item active">
                                    <a href="#"><img src="header/text2.png" class="img-responsive" alt="3 product"></a>
                                    <h4><small><font><font>Denin jacket stamped</font></font></small></h4>                                        
                                    <button class="btn btn-primary" type="button"><font><font>€ 49.99</font></font></button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span><font><font> Add to Wishlist</font></font></button>      
                                </div><!-- End Item -->                                
                              </div><!-- End Carousel Inner -->
                              <!-- Controls -->
                              <a class="left carousel-control" href="#" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only"><font><font>Previous</font></font></span>
                              </a>
                              <a class="right carousel-control" href="#" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only"><font><font>Next</font></font></span>
                              </a>
                            </div><!-- /.carousel -->
                            <li class="divider"></li>
                            <li><a href="#"><font><font>View all Collection </font></font><span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header"><font><font>Features</font></font></li>
							<li><a href="#"><font><font>Auto Carousel</font></font></a></li>
                            <li><a href="#"><font><font>Carousel Control</font></font></a></li>
                            <li><a href="#"><font><font>Left &amp; Right Navigation</font></font></a></li>
							<li><a href="#"><font><font>Four Columns Grid</font></font></a></li>
							<li class="divider"></li>
							<li class="dropdown-header"><font><font>Fonts</font></font></li>
                            <li><a href="#"><font><font>Glyphicon</font></font></a></li>
							<li><a href="#"><font><font>Google Fonts</font></font></a></li>
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header"><font><font>Plus</font></font></li>
							<li><a href="#"><font><font>Navbar Inverse</font></font></a></li>
							<li><a href="#"><font><font>Pull Right Elements</font></font></a></li>
							<li><a href="#"><font><font>Coloured Headers</font></font></a></li>                            
							<li><a href="#"><font><font>Primary Buttons &amp; Default</font></font></a></li>							
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header"><font><font>Much more</font></font></li>
                            <li><a href="#"><font><font>Easy to Customize</font></font></a></li>
							<li><a href="#"><font><font>Calls to action</font></font></a></li>
							<li><a href="#"><font><font>Custom Fonts</font></font></a></li>
							<li><a href="#"><font><font>Slide down on Hover</font></font></a></li>                         
						</ul>
					</li>
				</ul>				
			</li>
            
            
            
                		<li class="dropdown mega-dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><font><font>accessories </font></font><span class="caret"></span></a>				
				<ul class="dropdown-menu mega-dropdown-menu" style="display: none;">
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header"><font><font>Men Collection</font></font></li>                            
                            <div id="menCollection" class="carousel slide" data-ride="carousel">
                              <div class="carousel-inner">
                                <div class="item">
                                    <a href="#"><img src="header/text.png" class="img-responsive" alt="1 product"></a>
                                    <h4><small><font><font>Summer dress floral prints</font></font></small></h4>                                        
                                    <button class="btn btn-primary" type="button"><font><font>€ 49.99</font></font></button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span><font><font> Add to Wishlist</font></font></button>       
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="header/text1.png" class="img-responsive" alt="product 2"></a>
                                    <h4><small><font><font>Gold sandals with shiny touch</font></font></small></h4>                                        
                                    <button class="btn btn-primary" type="button"><font><font>9,99 €</font></font></button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span><font><font> Add to Wishlist</font></font></button>        
                                </div><!-- End Item -->
                                <div class="item active">
                                    <a href="#"><img src="header/text2.png" class="img-responsive" alt="3 product"></a>
                                    <h4><small><font><font>Denin jacket stamped</font></font></small></h4>                                        
                                    <button class="btn btn-primary" type="button"><font><font>€ 49.99</font></font></button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span><font><font> Add to Wishlist</font></font></button>      
                                </div><!-- End Item -->                                
                              </div><!-- End Carousel Inner -->
                              <!-- Controls -->
                              <a class="left carousel-control" href="#" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only"><font><font>Previous</font></font></span>
                              </a>
                              <a class="right carousel-control" href="#" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only"><font><font>Next</font></font></span>
                              </a>
                            </div><!-- /.carousel -->
                            <li class="divider"></li>
                            <li><a href="#"><font><font>View all Collection </font></font><span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header"><font><font>Features</font></font></li>
							<li><a href="#"><font><font>Auto Carousel</font></font></a></li>
                            <li><a href="#"><font><font>Carousel Control</font></font></a></li>
                            <li><a href="#"><font><font>Left &amp; Right Navigation</font></font></a></li>
							<li><a href="#"><font><font>Four Columns Grid</font></font></a></li>
							<li class="divider"></li>
							<li class="dropdown-header"><font><font>Fonts</font></font></li>
                            <li><a href="#"><font><font>Glyphicon</font></font></a></li>
							<li><a href="#"><font><font>Google Fonts</font></font></a></li>
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header"><font><font>Plus</font></font></li>
							<li><a href="#"><font><font>Navbar Inverse</font></font></a></li>
							<li><a href="#"><font><font>Pull Right Elements</font></font></a></li>
							<li><a href="#"><font><font>Coloured Headers</font></font></a></li>                            
							<li><a href="#"><font><font>Primary Buttons &amp; Default</font></font></a></li>							
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header"><font><font>Much more</font></font></li>
                            <li><a href="#"><font><font>Easy to Customize</font></font></a></li>
							<li><a href="#"><font><font>Calls to action</font></font></a></li>
							<li><a href="#"><font><font>Custom Fonts</font></font></a></li>
							<li><a href="#"><font><font>Slide down on Hover</font></font></a></li>                         
						</ul>
					</li>
				</ul>				
			</li>
            
 
            
            <li class="dropdown mega-dropdown">
    			<a href="#" class="dropdown-toggle" data-toggle="dropdown"><font><font>decoration </font></font><span class="caret"></span></a>				
				<ul class="dropdown-menu mega-dropdown-menu" style="display: none;">
					<li class="col-sm-3">
    					<ul>
							<li class="dropdown-header"><font><font>Features</font></font></li>
							<li><a href="#"><font><font>Auto Carousel</font></font></a></li>
                            <li><a href="#"><font><font>Carousel Control</font></font></a></li>
                            <li><a href="#"><font><font>Left &amp; Right Navigation</font></font></a></li>
							<li><a href="#"><font><font>Four Columns Grid</font></font></a></li>
							<li class="divider"></li>
							<li class="dropdown-header"><font><font>Fonts</font></font></li>
              <li><a href="#"><font><font>Glyphicon</font></font></a></li>
							<li><a href="#"><font><font>Google Fonts</font></font></a></li>
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header"><font><font>Plus</font></font></li>
							<li><a href="#"><font><font>Navbar Inverse</font></font></a></li>
							<li><a href="#"><font><font>Pull Right Elements</font></font></a></li>
							<li><a href="#"><font><font>Coloured Headers</font></font></a></li>                            
							<li><a href="#"><font><font>Primary Buttons &amp; Default</font></font></a></li>							
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header"><font><font>Much more</font></font></li>
              <li><a href="#"><font><font>Easy to Customize</font></font></a></li>
							<li><a href="#"><font><font>Calls to action</font></font></a></li>
							<li><a href="#"><font><font>Custom Fonts</font></font></a></li>
							<li><a href="#"><font><font>Slide down on Hover</font></font></a></li>                         
						</ul>
					</li>
                    <li class="col-sm-3">
    					<ul>
							<li class="dropdown-header"><font><font>Women Collection</font></font></li>                            
                            <div id="womenCollection" class="carousel slide" data-ride="carousel">
                              <div class="carousel-inner">
                                <div class="item">
                                    <a href="#"><img src="header/text.png" class="img-responsive" alt="1 product"></a>
                                    <h4><small><font><font>Summer dress floral prints</font></font></small></h4>                                        
                                    <button class="btn btn-primary" type="button"><font><font>€ 49.99</font></font></button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span><font><font> Add to Wishlist</font></font></button>       
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="header/text1.png" class="img-responsive" alt="product 2"></a>
                                    <h4><small><font><font>Gold sandals with shiny touch</font></font></small></h4>                                        
                                    <button class="btn btn-primary" type="button"><font><font>9,99 €</font></font></button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span><font><font> Add to Wishlist</font></font></button>        
                                </div><!-- End Item -->
                                <div class="item active">
                                    <a href="#"><img src="header/text2.png" class="img-responsive" alt="3 product"></a>
                                    <h4><small><font><font>Denin jacket stamped</font></font></small></h4>                                        
                                    <button class="btn btn-primary" type="button"><font><font>€ 49.99</font></font></button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span><font><font> Add to Wishlist</font></font></button>      
                                </div><!-- End Item -->                                
                              </div><!-- End Carousel Inner -->
                              <!-- Controls -->
                              <a class="left carousel-control" href="#" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only"><font><font>Previous</font></font></span>
                              </a>
                              <a class="right carousel-control" href="#" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only"><font><font>Next</font></font></span>
                              </a>
                            </div><!-- /.carousel -->
                            <li class="divider"></li>
                            <li><a href="#"><font><font>View all Collection </font></font><span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
						</ul>
					</li>
				</ul>				
			</li>
            <li><a href="#"><font><font>Store locator</font></font></a></li>
		</ul>
        <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><font><font>My account </font></font><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu" style="display: none;">
            <li><a href="#"><font><font>Action</font></font></a></li>
            <li><a href="#"><font><font>Another action</font></font></a></li>
            <li><a href="#"><font><font>Something else here</font></font></a></li>
            <li class="divider"></li>
            <li><a href="#"><font><font>Separated link</font></font></a></li>
          </ul>
        </li>
        <li><a href="#"><font><font>My cart (0) items</font></font></a></li>
      </ul>
	</div><!-- /.nav-collapse -->
  </nav>
</div>

	<script type="text/javascript">
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
            $(this).toggleClass('open');       
        }
    );
});
	</script><div id="goog-gt-tt" class="goog-tooltip skiptranslate" dir="ltr" style="visibility: hidden; left: 238px; top: 54px; display: none;">
	  <div style="padding: 8px;"><div><div class="logo">
	    <img src="header/translate_24dp.png" width="20" height="20"></div></div></div>
	  <div class="top" style="padding: 8px; float: left; width: 100%;"><h1 class="title gray">Original text</h1></div><div class="middle" style="padding: 8px;"><div class="original-text">Аксессуары</div></div><div class="bottom" style="padding: 8px;"><div class="activity-links"><span class="activity-link">Contribute a better translation</span><span class="activity-link"></span></div>
	  <div class="started-activity-container"><hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;"><div class="activity-root"></div></div></div><div class="status-message" style="display: none; opacity: 0;"></div></div>


</body></html>