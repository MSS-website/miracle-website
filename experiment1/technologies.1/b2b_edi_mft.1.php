<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="description">
        <meta content="" name="author">
        <title>
            File Transfer and B2B/EDI | Miracle
        </title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet">
        <link href="../css/main.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="../css/default.css" rel="stylesheet" type="text/css">
        <link href="../css/component.css" rel="stylesheet" type="text/css">
        <script src="js/modernizr.custom.js"></script><!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="../images/favicon.ico" rel="shortcut icon">
        <!--slider-->
        <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script>

jQuery(function(){ // on DOM load
	menu1 = new sidetogglemenu({  // initialize first menu example
		id: 'togglemenu1',
		marginoffset: 10
	})

	menu2 = new sidetogglemenu({  // initialize second menu example
		id: 'togglemenu2',
		position: 'right',
		source: 'togglemenu.txt',
		revealamt: -5
	})
})

</script>
<style>
body { /* CSS for BODY transition when menu is set to push BODY content. */
-moz-transition: left 100ms ease-in-out, right 100ms ease-in-out;
-webkit-transition: left 100ms ease-in-out, right 100ms ease-in-out;
transition: left 100ms ease-in-out, right 100ms ease-in-out;
}
.sidetogglemenu { /* shared class for side toggle menus */
border-right: 5px solid #ff573b;
background-color: white;
width: 170px; /* default menu width */
height: 100%;
position: fixed;
top: -100%;
clear: both;
display: block;
visibility: 'hidden';
box-shadow: 5px 0 5px rgba(174, 174, 174, .8);
-moz-transition: all 100ms ease-in-out; /* change 100ms to slide in animation time */
-webkit-transition: all 100ms ease-in-out;
transition: all 100ms ease-in-out;
}
.sidetogglemenu ul {
padding: 0;
margin: 0;
list-style: none;
}
.sidetogglemenu a {
font: bold 13px Verdana;
padding: 10px;
display: block;
color: #595959;
text-decoration: none;
border-bottom: 1px solid #C0C0C0;
}
.sidetogglemenu a:hover {
background: red;
color: white;
}
/* #######  Additional CSS for toggle menu #togglemenu2  ####### */

#togglemenu2 {
width: 250px;
border-width: 0;
background: rgb(53,106,160);
box-shadow: -5px 0 5px rgba(174, 174, 174, .8);
}
#togglemenu2 ul a {
color: white;
border-bottom: 1px solid #eee;
font: bold 14px;
text-transform: uppercase;
}
#togglemenu2 a:hover {
background: #162a50;
color: white;
}
/* #######  Responsive Menu related CSS  ####### */

div#smallscreentoggler { /* CSS for small screen menus toggler, shown when device width is below specified */
width: 1.5em;
z-index: 10000;
color: white;
position: relative;
float: right;
overflow: hidden;
background: gray;
font: normal 1.8em Arial;
margin-bottom: 0.5em;
text-align: center;
box-shadow: -3px 3px 5px gray;
cursor: pointer;
border-radius: 2px;
display: none;
-moz-transition: all 200ms ease-in-out;
-webkit-transition: all 200ms ease-in-out;
transition: all 200ms ease-in-out;
}
div#smallscreentoggler:hover {
background: #eee;
color: black;
-moz-transition: all 200ms ease-in-out;
-webkit-transition: all 200ms ease-in-out;
transition: all 200ms ease-in-out;
}
 @media screen and (max-width: 480px) { /* CSS when device width is 480px or less */
div#smallscreentoggler {
display: block; /* show small screen menus toggler */
}
.sidetogglemenu { /* Set position of menus to static */
position: static;
border-width: 0;
border-top-width: 1px;
width: 98% !important;
height: auto;
box-shadow: 5px 0 5px rgba(174, 174, 174, .8) !important;
margin-left: 5px;
margin-bottom: 10px;
display: none;
}
}

</style>
<script>
/*
* Responsive Side Toggle Menu (c) Dynamic Drive (www.dynamicdrive.com)
* Last updated: June 2nd, 2013
* Visit http://www.dynamicdrive.com/ for this script and 100s more.
* Requires: jQuery 1.7 or higher
*/

(function(w, $){

	var mediabreakpoint = 'screen and (max-width: 480px)' // CSS media query. Should match that find in CSS above
	var $smallscreentoggler = $('<div id="smallscreentoggler" data-state="closed">&equiv;</div>') // HTML for small screen menus toggler

	var defaults = {
		position: 'left',
		pushcontent: true,
		source: 'inline',
		revealamt: 0,
		marginoffset: 0,
		dismissonclick: true,
		curstate: 'closed'
	}

	var menusarray = []

	w.sidetogglemenu = function(options){
		var s = $.extend({}, defaults, options)
		if ( !window.matchMedia ){ // if browser doesn't support media query detection via JavaScript
			s.pushcontent = false // disable revealing menu by pushing page content (as window.matchMedia is used in this case to restore BODY margins)
		}
		var thismenu = this,
				$body = $('body'),
				$menu = '',
				expandlength = ''
		menusarray.push( [this, s] )

		function init(menuref){
			$menu = $(menuref).css({top: 0, visibility: 'hidden', zIndex: 1000}).prependTo(document.body)
			$menu.on('click', function(e){
				if (e.target.tagName != 'A')
					e.stopPropagation()
			})
			$smallscreentoggler.prependTo(document.body)
			var delta = parseInt($menu.outerWidth()) - s.revealamt
			if ($smallscreentoggler.css('display') != 'block')
				this.toggle(s.curstate, delta)
			$menu.css((s.position == 'left')? 'left' : 'right', -delta)
			$menu.css({visibility: 'visible'})
			return delta
		}

		this.getmenu = function(){
			return $menu
		}

		this.toggle = function(action, w){
			var delta = w || expandlength
			s.curstate = action || ( (s.curstate == 'closed')? 'open' : 'closed' )
			if ($menu.css('position') != 'static'){
				var animprop = (s.position == 'left')? 'left' : 'right'
				$menu.css(animprop, (s.curstate == 'open')? 0 : -delta)
				if (s.pushcontent === true){
					$body.css(animprop, (s.curstate == 'open')? delta + s.marginoffset : 0)
				}
			}
			else{
				$smallscreentoggler.trigger('toggle', action)
			}
		}

		if (s.pushcontent === true){
			$body.css({position: 'absolute'})
		}

		if (s.source == 'inline'){
			expandlength = init.call(this, 'div#' + s.id)
		}
		else{
			$.ajax({
				url: s.source,
				dataType: 'html',
				error:function(ajaxrequest){
					alert('Error fetching content.<br />Server Response: '+ajaxrequest.responseText)
				},
				success:function(content){
					expandlength = init.call(thismenu, content)
				}
			})
		}

		return this

	}

	jQuery(function(){ // run once in document load
		$smallscreentoggler.prependTo(document.body)
		
		$('body').on('click', function(e){ // dismiss menus onclick of BODY
			var $target = $(e.target)
			if (e.type == 'click' && !$target.hasClass('sideviewtoggle')){
				for (var i=0; i < menusarray.length; i++){
					if (menusarray[i][1].dismissonclick && menusarray[i][1].curstate == 'open')
						menusarray[i][0].toggle('closed')
				}
			}
		})

		$smallscreentoggler.on('toggle', function(e, action){ // define custom "toggle" event on smallscreentoggler
			for (var i=0; i < menusarray.length; i++){
				var $menu = menusarray[i][0].getmenu()
				$menu.css('display', ($menu.css('display') != 'block')? 'block' : 'none')
			}
		})

		$smallscreentoggler.on('click', function(e){ // trigger toggle event onclick of smallscreentoggler
			$smallscreentoggler.trigger('toggle')
			e.stopPropagation()
		})

		if (window.matchMedia){ 
			var mql = window.matchMedia( mediabreakpoint ) // CSS media queries matching
			var handlemediamatch = (function t(mql){
				if (mql.matches){ // if CSS media query condition met (ie: device width less than 480px)
					$('body').css({left:0, right:0})
				}
		    for (var i=0; i<menusarray.length; i++){
					var $menu = menusarray[i][0].getmenu()
					$menu.css('display', (mql.matches)? 'none' : 'block')
				}
					return t
			}) (mql)
			mql.addListener(function(){handlemediamatch(mql)})
		}
	})


}) (window, jQuery)
</script>
    </head><!--/head-->
    <?php include '../header.php';?>
    <body>
        <section class="container" id="about-us">
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-5 text-left">
                    <h1 class="heavy">
                        File Transfer and B2B/EDI
                    </h1>
                </div>
                <div class="col-sm-5 text-right">
                    <ul class="breadcrumb pull-right">
                        <li>
                            <a href="../">Home</a>
                        </li>
                        <li>
                            <a href="../technologies/">Technologies</a>
                        </li>
                        <li class="active">File Transfer and B2B/EDI
                        </li>
                    </ul>
                </div>
                <div class="col-sm-1"></div>
            </div>
           
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a data-toggle="tab" href="#overview">Overview</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#Services">Services</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#Products">Products</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#Accelerators">Accelerators & Frameworks</a>
                        </li>
                    </ul><!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="overview">
                            <br>
                            <p class="methodText">
                                <strong>Multi-Enterprise Collaboration</strong> is at the heart of nearly every organization and is essential for an enterprise to become efficient and dynamic. However, effective collaboration can be a challenging task to achieve due to dynamic nature of the business ecosystem. With increasing customer demands, varying trading partner capabilities, resource constraints and ever-changing industry standards and regulations, many businesses find it difficult to find the right strategy for their large ecosystem of partners, customers and suppliers.
                            </p>
                            <p class="methodText">
                                In order to succeed organizations must connect, integrate and synchronize their extended value chains so they may become essential to customers, partners and suppliers. Quickly being able to adapt to trading partner needs, optimizing supply chains and constant monitoring the performance of on-going EDI transactions is required to create the dream On-Demand Enterprise. For the past 20 years File Transfer and B2B/EDI have been integral parts of Miracle's Service Portfolio, with one of the largest contingents of certified B2B/EDI consultants present in our team.
                            </p>
                            
                            <p class="methodText">
                                Innovation is at the key of our teams strategies, and our <a class="linkText" href="../why/excellence.php"><strong>Center of Excellence</strong></a> for B2B lets us research into the common challenges and issues faced by the common business. This analysis has helped us over the years to quickly understand the needs of the industry and the enterprise and quickly build and adaptive strategy for optimizing your costs and increasing productivity. Our teams have been able to build Accelerators and Frameworks which help in providing an insight into your transactional processes and brings greater ease for working with your dynamic partners. Seamless consolidation of your B2B/EDI systems and quick customization capabilities, help us to give you the best solution possible.
                            </p>
                            <p class="methodText">
                                Contact us today to get more insight into how we can help your business become whatever you want it to be.
                            </p>
                            <p>
                                For more information on <strong>File Transfer and B2B/EDI</strong>, contact us at <a class="linkText" href="mailto:b2b@miraclesoft.com"><strong style="text-decoration: underline">b2b@miraclesoft.com</strong></a>
                            </p><br>
                            <br>
                        </div>
                        <div class="tab-pane" id="Services">
                            <br>
                            <button onClick="menu1.toggle();" class="sideviewtoggle">Toggle Menu 1</button>
<button onClick="menu2.toggle()" class="sideviewtoggle">Toggle Menu 2</button>

<div id="togglemenu2" class="sidetogglemenu">
<ul>
<li><a href="#">Dynamic Drive</a></li>
<li><a href="#">CSS Library</a></li>
<li><a href="#">Forums</a></li>
<li><a href="#">Gif Optimizer</a></li>
<li><a href="#">Favicon Creator</a></li>
<li><a href="#">Button Maker</a></li>
</ul>
<p style="padding:10px"> This menu's markup is defined inline on the page. With the setting <code>pushcontent: true</code>, the menu shifts the rest of the page's content to make room for itself when revealed. </p>
</div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <p class="methodText">
                                        <strong>B2B/EDI Services</strong>
                                    </p>
                                    <ul>
                                        <li>Consulting and Custom Training Services
                                        </li>
                                        <li>B2B/EDI Managed Services
                                        </li>
                                        <li>B2B Integration Health Check Services
                                        </li>
                                        <li>Product Evaluation and Selection
                                        </li>
                                        <li>B2B/EDI Testing Services
                                        </li>
                                        <li>Legacy EDI Platform Consolidation/Migration
                                        </li>
                                        <li>Supply Chain Visibility Services
                                        </li>
                                        <li>Software Sales and Renewals
                                        </li>
                                        <li>B2B Security Services
                                        </li>
                                        <li>Alerts and Monitoring Frameworks
                                        </li>
                                       
                                    </ul>
                                    <p class="methodText">
                                        <strong>Managed File Transfer Services</strong>
                                    </p>
                                    
                                    <ul>
                                        <li>Architecture and Design
                                        </li>
                                        <li>ROI/TCO/Competitive Analysis
                                        </li>
                                        <li>Operation Support and Monitoring
                                        </li>
                                        <li>Development and Deployment
                                        </li>
                                        <li>24x7 MFT Managed Services
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div><br>
                            <br>
                        </div>
                        <div class="tab-pane" id="Products">
                            <br>
                            <div class="row">
                                <div class="col-sm-12">
                                    <p class="methodText">
                                        <strong>B2B/EDI</strong>
                                    </p>
                                    
                                    <ul>
                                        <li>SAP Netweaver Process Integrator
                                        </li>
                                        <li>IBM Sterling B2B Integrator
                                        </li>
                                        <li>Seeburger Business Integration Suite
                                        </li>
                                        <li>IBM Standards Processing Engine
                                        </li>
                                        <li>IBM Partner Engagement Manager 
                                        </li>
                                         
                                        <li>Axway B2Bi</li>
                                        <li>WebSphere Transformation Extender</li>
                                        
                                    </ul>
                                    <p class="methodText">
                                        <strong>Managed File Transfer</strong>
                                    </p>
                                    <ul>
                                        <li>Aspera File Transfer
                                        </li>
                                        <li>Sterling File Gateway
                                        </li>
                                        <li>Sterling Secure Proxy
                                        </li>
                                        <li>Sterling Control Center
                                        </li>
                                        <li>Sterling Connect:Direct
                                        </li>
                                        <li>Sterling Multi Enterprise Gateway
                                        </li>
                                        <li>WMQ File Transfer Edition</li>
                                        <li>Axway MFT</li>
                                    </ul>
                                </div>
                            </div><br>
                            <br>
                        </div>
                        <div class="tab-pane" id="Accelerators">
                            <br>
                            <p class="methodText">
                                In today's dynamic marketplace it is critical for businesses to have a solid IT platform to enable themselves to become optimized and high performance leaders in the industry. Streamlining and optimizing your B2B/EDI operations is essential to enable ourselves to scale up rapidly, while maintaining a high output level. With Miracle's Custom-Built B2B/EDI/MFT frameworks, this is exactly what we provide. Through experience, research and technology our teams have been able to build optimized frameworks which help you to get the best business value with both reduced time and cost.
                            </p>
                            <p class="methodText">
                                <strong>Through our B2B Frameworks and Accelerators you can have,</strong>
                            </p>
                            <ul>
                                <li>
                                    <strong><span style="color:#0000FF !important">Faster Time-To-Market</span></strong> with pre-built and re-usable components available
                                </li>
                                <li>
                                    <strong><span style="color:#EE3B3B !important">Reduced Implementation Costs</span></strong> with common use cases already implemented for you
                                </li>
                                <li>
                                    <strong><span style="color:#659D32 !important">Improved Quality</span></strong><span style="color:#659D32 !important"></span> through multiple instances of proven installation and implementation
                                </li>
                            </ul>
                            <p class="methodText">
                                <strong>Some of the Accelerators and Frameworks that our teams have built are,</strong>
                            </p>
                            <ul>
                                <li>
                                    <strong><a class="linkText" href="../technologies/miracle-b2b-framework.php">B2B Framework for Sterling B2B Integrator</a></strong>
                                </li>
                                <li>
                                    <strong><a class="linkText" href="../technologies/miracle-supply-chain-visibility-portal.php">Supply Chain Visibility Portal</a></strong>
                                </li>
                                <li>EDI Testing Harness
                                </li>
                                <li>Trading Partner On-Boarding Utilities
                                </li>
                                <li>vAlerts Monitoring Framework
                                </li>
                                <li>B2B Integration Patterns
                                </li>
                            </ul><br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/#about-us-->
       
        <?php include '../footer.php';?>
    </body>
</html>