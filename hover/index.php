<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Hover Effects</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Direction-Aware Hover Effect with CSS3 and jQuery" />
        <meta name="keywords" content="hover, css3, jquery, effect, direction, aware, depending, thumbnails" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
		<link href='https://fonts.googleapis.com/css?family=Alegreya+SC:700,400italic' rel='stylesheet' type='text/css' />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script src="js/modernizr.custom.97074.js"></script>
        <noscript><link rel="stylesheet" type="text/css" href="css/noJS.css"/></noscript>
        <script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-7243260-2']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

		</script>
		<style>.da-thumbs {
	list-style: none;
	width: 984px;
	height: 600px;
	position: relative;
	margin: 20px auto;
	padding: 0;
}
.da-thumbs li {
	float: left;
	margin: 5px;
	background: #fff;
	padding: 8px;
	position: relative;
	box-shadow: 0 1px 3px rgba(0,0,0,0.1);
}
.da-thumbs li a,
.da-thumbs li a img {
	display: block;
	position: relative;
}
.da-thumbs li a {
	overflow: hidden;
}
.da-thumbs li a div {
	position: absolute;
	background: #333;
	background: rgba(75,75,75,0.7);
	width: 100%;
	height: 100%;
}
.da-thumbs li a div.custom-hover-object {
	position: absolute;
	background: #333;
	background: rgba(255,255,255,0.7);
	width: 100%;
	height: 100%;
}
*,
*:after,
*:before {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	padding: 0;
	margin: 0;
}

.clearfix:before,
.clearfix:after {
    content: " "; 
    display: table; 
}

.clearfix:after {
    clear: both;
}

.clearfix {
    *zoom: 1;
}


a{
	color: #555;
	text-decoration: none;
}
.container{
	width: 100%;
	position: relative;
	min-height: 750px;
}
.clr{
	clear: both;
	padding: 0;
	height: 0;
	margin: 0;
}
.container > header{
	margin: 10px;
	padding: 20px 10px 10px 10px;
	position: relative;
	display: block;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.2);
    text-align: center;
}
.container > header > span{
	font-family: 'Alegreya SC', Georgia, serif;
	font-size: 20px;
	line-height: 20px;
	display: block;
	font-weight: 400;
	font-style: italic;
	color: #719dab;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.1);
}
.container > header h1{
	font-size: 40px;
	line-height: 40px;
	margin: 0;
	position: relative;
	font-weight: 300;
	color: #498ea5;
	padding: 5px 0px;
	text-shadow: 1px 1px 1px rgba(255,255,255,0.7);
}
.container > header h1 span{
	font-weight: 700;
}
.container > header h2{
	font-size: 14px;
	font-weight: 300;
	letter-spacing: 2px;
	text-transform: uppercase;
	margin: 0;
	padding: 15px 0 5px 0;
	color: #6190ca;
	text-shadow: 1px 1px 1px rgba(255,255,255,0.7);
}
.container > header p{
	font-style: italic;
	color: #aaa;
	text-shadow: 1px 1px 1px rgba(255,255,255,0.7);
}
/* Header Style */
.codrops-top{
	line-height: 24px;
	font-size: 11px;
	background: #fff;
	background: rgba(255, 255, 255, 0.6);
	text-transform: uppercase;
	z-index: 9999;
	position: relative;
	font-family: Cambria, Georgia, serif;
	box-shadow: 1px 0px 2px rgba(0,0,0,0.2);
}
.codrops-top a{
	padding: 0px 10px;
	letter-spacing: 1px;
	color: #333;
	display: inline-block;
}
.codrops-top a:hover{
	background: rgba(255,255,255,0.9);
}
.codrops-top span.right{
	float: right;
}
.codrops-top span.right a{
	float: left;
	display: block;
}
/* Demo Buttons Style */
.codrops-demos{
    text-align:center;
	display: block;
	line-height: 30px;
	padding: 5px 0px;
}
.codrops-demos a{
    display: inline-block;
	margin: 0px 4px;
	padding: 0px 6px;
	color: #aaa;
	line-height: 20px;	
	font-size: 13px;
	text-shadow: 1px 1px 1px #fff;
	border: 1px solid #ddd;
	background: #ffffff; /* Old browsers */
	background: -moz-linear-gradient(top, #ffffff 0%, #f6f6f6 47%, #ededed 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(47%,#f6f6f6), color-stop(100%,#ededed)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top, #ffffff 0%,#f6f6f6 47%,#ededed 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top, #ffffff 0%,#f6f6f6 47%,#ededed 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top, #ffffff 0%,#f6f6f6 47%,#ededed 100%); /* IE10+ */
	background: linear-gradient(top, #ffffff 0%,#f6f6f6 47%,#ededed 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ededed',GradientType=0 ); /* IE6-9 */
	box-shadow: 0px 1px 1px rgba(255, 255, 255, 0.5);
}
.codrops-demos a:hover{
	color: #333;
	box-shadow: 0px 1px 1px rgba(255, 255, 255, 0.5);
}
.codrops-demos a:active{
	background: #fff;
}
.codrops-demos a.current-demo,
.codrops-demos a.current-demo:hover{
	background: #f6f6f6;
}
.da-thumbs li a div {
	top: 0px;
	left: -100%;
	-webkit-transition: all 0.3s ease;
	-moz-transition: all 0.3s ease-in-out;
	-o-transition: all 0.3s ease-in-out;
	-ms-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
}
.da-thumbs li a:hover div{
	left: 0px;
}
.da-thumbs li a div span {
	display: block;
	padding: 10px 0;
	margin: 40px 20px 20px 20px;
	text-transform: uppercase;
	font-weight: normal;
	color: rgba(255,255,255,0.9);
	text-shadow: 1px 1px 1px rgba(0,0,0,0.2);
	border-bottom: 1px solid rgba(255,255,255,0.5);
	box-shadow: 0 1px 0 rgba(0,0,0,0.1), 0 -10px 0 rgba(255,255,255,0.3);
}
.da-thumbs li a div.custom-hover-object span {
	color: rgba(75,75,75,0.9);
	text-shadow: 1px 1px 1px rgba(255,255,255,0.2);
	border-bottom: 1px solid rgba(0,0,0,0.5);
	box-shadow: 0 1px 0 rgba(255,255,255,255.1), 0 -10px 0 rgba(0,0,0,0.3);
}
img{width:100%;}
body {
  padding : 10px ;
  
}

#exTab1 .tab-content {
  color : white;
  background-color: #428bca;
  padding : 5px 15px;
}

#exTab2 h3 {
  color : white;
  background-color: #428bca;
  padding : 5px 15px;
}

/* remove border radius for the tab */

#exTab1 .nav-pills > li > a {
  border-radius: 0;
}

/* change border radius for the tab , apply corners on top*/

#exTab3 .nav-pills > li > a {
  border-radius: 4px 4px 0 0 ;
}

#exTab3 .tab-content {
  color : white;
  background-color: #428bca;
  padding : 5px 15px;
}





</style>
    </head>
    <body>
        <div class="container">
		
<div class="container"><h1>Bootstrap  tab panel example (using nav-pills)  </h1></div>
<div id="exTab1" class="container">	
<ul  class="nav nav-pills">
			<li class="active">
        <a  href="#1a" data-toggle="tab">Overview</a>
			</li>
			<li><a href="#2a" data-toggle="tab">Using nav-pills</a>
			</li>
			<li><a href="#3a" data-toggle="tab">Applying clearfix</a>
			</li>
  		<li><a href="#4a" data-toggle="tab">Background color</a>
			</li>
		</ul>

			<div class="tab-content clearfix">
			  <div class="tab-pane active" id="1a">
          <h3>Content's background color is the same for the tab</h3>
				</div>
				<div class="tab-pane" id="2a">
          <h3>We use the class nav-pills instead of nav-tabs which automatically creates a background color for the tab</h3>
				</div>
        <div class="tab-pane" id="3a">
          <h3>We applied clearfix to the tab-content to rid of the gap between the tab and the content</h3>
				</div>
          <div class="tab-pane" id="4a">
          <h3>We use css to change the background color of the content to be equal to the tab</h3>
				</div>
			</div>
  </div>


<hr></hr>
<div class="container"><h2>Example tab 2 (using standard nav-tabs)</h2></div>

<div id="exTab2" class="container">	
<ul class="nav nav-tabs">
			<li class="active">
        <a  href="#1" data-toggle="tab">Overview</a>
			</li>
			<li><a href="#2" data-toggle="tab">Without clearfix</a>
			</li>
			<li><a href="#3" data-toggle="tab">Solution</a>
			</li>
		</ul>

			<div class="tab-content ">
			  <div class="tab-pane active" id="1">
          <h3>Standard tab panel created on bootstrap using nav-tabs</h3>
				</div>
				<div class="tab-pane" id="2">
          <h3>Notice the gap between the content and tab after applying a background color</h3>
				</div>
        <div class="tab-pane" id="3">
          <h3>add clearfix to tab-content (see the css)</h3>
				</div>
			</div>
  </div>

<hr></hr>





<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
			<section>
				<ul id="da-thumbs" class="da-thumbs">
					<li>
						<a href="http://dribbble.com/shots/505046-Menu">
							<img src="images/food360-178.png" />
							<center><div><span>Miracle</span></div></center>
						</a>
					</li>
					<li>
						<a href="http://dribbble.com/shots/504336-TN-Aquarium">
							<img src="images/food360-178.png" />
						<center><div><span>Miracle</span></div></center>
						</a>
					</li>
					<li>
						<a href="http://dribbble.com/shots/504197-Mr-Crabs">
							<img src="images/food360-178.png" />
							<center><div><span>Miracle</span></div></center>
						</a>
					</li>
					<li>
						<a href="http://dribbble.com/shots/503731-Gallery-of-Mo-2-Mo-logo">
							<img src="images/food360-178.png" />
						<center><div><span>Miracle</span></div></center>
						</a>
					</li>
					<li>	
						<a href="http://dribbble.com/shots/503058-Ice-Cream-nom-nom">
							<img src="images/food360-178.png" />
							<center><div><span>Miracle</span></div></center>
						</a>
					</li>
					<li>
						<a href="http://dribbble.com/shots/502927-My-Muse">
							<img src="images/food360-178.png" />
						<center><div><span>Miracle</span></div></center>
						</a>
					</li>
					<li>
						<a href="http://dribbble.com/shots/502538-Natalie-Justin-Cleaning">
							<img src="images/food360-178.png" />
							<center><div><span>Miracle</span></div></center>
						</a>
					</li>
					<li>
						<a href="http://dribbble.com/shots/502523-App-Preview">
							<img src="images/food360-178.png" />
						<center><div><span>Miracle</span></div></center>
						</a>
					</li>
					<li>
						<a href="http://dribbble.com/shots/501695-Cornwall-Map">
							<img src="images/food360-178.png" />
							<center><div><span>Miracle</span></div></center>
						</a>
					</li>
					<li>
						<a href="http://dribbble.com/shots/500861-final-AD-logo">
							<img src="images/food360-178.png" />
							<center><div><span>Miracle</span></div></center>
						</a>
					</li>
					<li>
						<a href="http://dribbble.com/shots/500369-Land-Those-Planes">
							<img src="images/food360-178.png" />
							<center><div><span>Miracle</span></div></center>
						</a>
					</li>
					<li>
						<a href="http://dribbble.com/shots/497795-Seahorse">
							<img src="images/food360-178.png" />
							<center><div><span>Miracle</span></div></center>
						</a>
					</li>
				</ul>
			</section>
        </div>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.hoverdir.js"></script>	
		<script type="text/javascript">
			$(function() {
			
				$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

			});
			(function (factory) {
    'use strict';
    if (typeof define === 'function' && define.amd) {
        define(['jquery'], factory);
    } else if (typeof exports !== 'undefined') {
        module.exports = factory(require('jquery'));
    } else {
        factory(jQuery);
    }
})(function ($) {
    'use strict';

    function Hoverdir(element, options) {
        this.$el = $(element);
        // set options
        this.options = $.extend(true, {}, this.defaults, options);
        // initialize visibility to false for show and hide method
        this.isVisible = false;
        // get the hover for this element
        this.$hoverElem = this.$el.find(this.options.hoverElem);
        // transition properties
        this.transitionProp = 'all ' + this.options.speed + 'ms ' + this.options.easing;
        // support for CSS transitions
        this.support = this._supportsTransitions();
        // load the events
        this._loadEvents();
    }

    Hoverdir.prototype = {
        defaults: {
            speed: 300,
            easing: 'ease',
            hoverDelay: 0,
            inverse: false,
            hoverElem: 'div'
        },
        constructor: Hoverdir,
        /**
         * Detect if CSS transitions are supported
         *
         * @return {Boolean}
         */
        _supportsTransitions: function () {
            if (typeof Modernizr !== 'undefined') {
                return Modernizr.csstransitions;
            } else {
                var b = document.body || document.documentElement,
                    s = b.style,
                    p = 'transition';

                if (typeof s[p] === 'string') {
                    return true;
                }

                // Tests for vendor specific prop
                var v = ['Moz', 'webkit', 'Webkit', 'Khtml', 'O', 'ms'];
                p = p.charAt(0).toUpperCase() + p.substr(1);

                for (var i = 0; i < v.length; i++) {
                    if (typeof s[v[i] + p] === 'string') {
                        return true;
                    }
                }

                return false;
            }
        },
        /**
         * Bind the events to the element
         */
        _loadEvents: function () {
            this.$el.on('mouseenter.hoverdir mouseleave.hoverdir', $.proxy(function (event) {
                this.direction = this._getDir({x: event.pageX, y: event.pageY});

                if (event.type === 'mouseenter') {
                    this._showHover();
                }
                else {
                    this._hideHover();
                }
            }, this));
        },
        /**
         * Show the hover of the element
         */
        _showHover: function () {
            var styleCSS = this._getStyle(this.direction);

            if (this.support) {
                this.$hoverElem.css('transition', '');
            }

            this.$hoverElem.hide().css(styleCSS.from);
            clearTimeout(this.tmhover);

            this.tmhover = setTimeout($.proxy(function () {
                this.$hoverElem.show(0, $.proxy(function () {
                    if (this.support) {
                        this.$hoverElem.css('transition', this.transitionProp);
                    }
                    this._applyAnimation(styleCSS.to);

                }, this));
            }, this), this.options.hoverDelay);

            this.isVisible = true;
        },
        /**
         * Hide the hover to the element
         */
        _hideHover: function () {
            var styleCSS = this._getStyle(this.direction);
            if (this.support) {
                this.$hoverElem.css('transition', this.transitionProp);
            }
            clearTimeout(this.tmhover);
            this._applyAnimation(styleCSS.from);
            this.isVisible = false;
        },
        /**
         * get the direction when the event is triggered
         * credits : http://stackoverflow.com/a/3647634
         *
         * @param {Object} coordinates
         * @returns {Interger}
         */
        _getDir: function (coordinates) {
            // the width and height of the current div
            var w = this.$el.width(),
                h = this.$el.height(),
                // calculate the x and y to get an angle to the center of the div from that x and y.
                // gets the x value relative to the center of the DIV and "normalize" it
                x = (coordinates.x - this.$el.offset().left - (w / 2)) * (w > h ? (h / w) : 1),
                y = (coordinates.y - this.$el.offset().top - (h / 2)) * (h > w ? (w / h) : 1),
                // the angle and the direction from where the mouse came in/went out clockwise (TRBL=0123);
                // first calculate the angle of the point,
                // add 180 deg to get rid of the negative values
                // divide by 90 to get the quadrant
                // add 3 and do a modulo by 4 to shift the quadrants to a proper clockwise TRBL (top/right/bottom/left) **/
                direction = Math.round((((Math.atan2(y, x) * (180 / Math.PI)) + 180) / 90) + 3) % 4;
            return direction;
        },
        /**
         * get the style when the event is triggered
         *
         * @param {(Interger|String)} direction
         * @returns {Object}
         */
        _getStyle: function (direction) {
            var fromStyle, toStyle,
                slideFromTop = {'left': '0', 'top': '-100%'},
            slideFromBottom = {'left': '0', 'top': '100%'},
            slideFromLeft = {'left': '-100%', 'top': '0'},
            slideFromRight = {'left': '100%', 'top': '0'},
            slideTop = {'top': '0'},
            slideLeft = {'left': '0'};

            switch (direction) {
                case 0:
                case 'top':
                    // from top
                    fromStyle = !this.options.inverse ? slideFromTop : slideFromBottom;
                    toStyle = slideTop;
                    break;
                case 1:
                case 'right':
                    // from right
                    fromStyle = !this.options.inverse ? slideFromRight : slideFromLeft;
                    toStyle = slideLeft;
                    break;
                case 2:
                case 'bottom':
                    // from bottom
                    fromStyle = !this.options.inverse ? slideFromBottom : slideFromTop;
                    toStyle = slideTop;
                    break;
                case 3:
                case 'left':
                    // from left
                    fromStyle = !this.options.inverse ? slideFromLeft : slideFromRight;
                    toStyle = slideLeft;
                    break;
            }

            return {from: fromStyle, to: toStyle};
        },
        /**
         * Apply a transition or fallback to jquery animate based on Modernizr.csstransitions support
         *
         * @param {Object} styleCSS
         */
        _applyAnimation: function (styleCSS) {
            $.fn.applyStyle = this.support ? $.fn.css : $.fn.animate;
            this.$hoverElem.stop().applyStyle(styleCSS, $.extend(true, [], {duration: this.options.speed}));
        },
        /**
         * Show $hoverElem from the direction in argument
         *
         * @param {String} [direction=top] direction
         */
        show: function (direction) {
            this.$el.off('mouseenter.hoverdir mouseleave.hoverdir');
            if (!this.isVisible) {
                this.direction = direction || 'top';
                this._showHover();
            }
        },
        /**
         * Hide $hoverElem from the direction in argument
         *
         * @param {String} [direction=bottom] direction
         */
        hide: function (direction) {
            this.rebuild();
            if (this.isVisible) {
                this.direction = direction || 'bottom';
                this._hideHover();
            }
        },
        setOptions: function (options) {
            this.options = $.extend(true, {}, this.defaults, this.options, options);
        },
        /**
         * Unbinds the plugin.
         */
        destroy: function () {
            this.$el.off('mouseenter.hoverdir mouseleave.hoverdir');
            this.$el.data('hoverdir', null);
        },
        /**
         * Bind the plugin.
         */
        rebuild: function (options) {
            if (typeof options === 'object') {
                this.setOptions(options);
            }
            this._loadEvents();
        }
    };

    $.fn.hoverdir = function (option, parameter) {
        return this.each(function () {
            var data = $(this).data('hoverdir');
            var options = typeof option === 'object' && option;

            // Initialize hoverdir.
            if (!data) {
                data = new Hoverdir(this, options);
                $(this).data('hoverdir', data);
            }

            // Call hoverdir method.
            if (typeof option === 'string') {
                data[option](parameter);

                if (option === 'destroy') {
                    $(this).data('hoverdir', false);
                }
            }
        });
    };

    $.fn.hoverdir.Constructor = Hoverdir;
});
		</script>
		<script src="//tympanus.net/codrops/adpacks/demoad.js"></script>
    </body>
</html>