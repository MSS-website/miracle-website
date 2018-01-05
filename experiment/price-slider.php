
<!doctype html>
<html >
  <head>
  <title>Price slider</title>
   
    <link rel="alternate" type="application/rss+xml" title="Latest snippets from Bootsnipp.com" href="http://bootsnipp.com/feed.rss" />

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://bootsnipp.com/dist/bootsnipp.min.css?ver=7d23ff901039aef6293954d33d23c066">
       <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/default.css"/>
    <link rel="stylesheet" type="text/css" href="../css/component.css"/>
    
  <link rel="shortcut icon" href="../images/favicon.ico">
  
  <script src="step_files/jquery-1.10.2.min.js"></script>
    <script src="step_files/bootstrap.min.js"></script>
   
    <style type="text/css">
    #preview-container{
        height: 500px;
    }
</style>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    	<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
    	<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.2.0/respond.js"></script>
    <![endif]-->

   
   </head>
  <body>
<!-- BuySellAds Ad Code -->
<script type="text/javascript">
(function(){
  var bsa = document.createElement('script');
     bsa.type = 'text/javascript';
     bsa.async = true;
     bsa.src = '//s3.buysellads.com/ac/bsa.js';
  (document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);
})();
</script>
<!-- End BuySellAds Ad Code -->

    <div id="playground-container">
     
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <div id="editor-html" class="playground-editor">
    <div class="container">
    
   
      
      <!-- START -->
      <div class="price-box">

        <form class="form-horizontal form-pricing" role="form">

          <div class="price-slider">
            <h4 class="great">Amount</h4>
            <span>Minimum $10 is required</span>
            <div class="col-sm-12">
             <div id="slider" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false"><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 52%;"><label><span class="glyphicon glyphicon-chevron-left"></span> 520 <span class="glyphicon glyphicon-chevron-right"></span></label></a></div>
            </div>
          </div>
          <div class="price-slider">
            <h4 class="great">Duration</h4>
            <span>Minimum 1 day is required</span>
            <div class="col-sm-12">
              <div id="slider2" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false"><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 42.2%;"><label><span class="glyphicon glyphicon-chevron-left"></span> 211 <span class="glyphicon glyphicon-chevron-right"></span></label></a></div>
            </div>
          </div>

          <div class="price-form">

            <div class="form-group">
              <label for="amount" class="col-sm-6 control-label">Amount ($): </label>
              <span class="help-text">Please choose your amount</span>
              <div class="col-sm-6">
                <input type="hidden" id="amount" class="form-control" value="520">
                <p class="price lead" id="amount-label">520</p>
                <span class="price">.00</span>
              </div>
            </div>
            <div class="form-group">
              <label for="duration" class="col-sm-6 control-label">Duration: </label>
              <span class="help-text">Choose your commitment</span>
              <div class="col-sm-6">
                <input type="hidden" id="duration" class="form-control" value="211">
                <p class="price lead" id="duration-label">211</p>
                <span class="price">days</span>
              </div>
            </div>
            <hr class="style">
            <div class="form-group total">
              <label for="total" class="col-sm-6 control-label"><strong>Total: </strong></label>
              <span class="help-text">(Amount * Days)</span>
              <div class="col-sm-6">
                <input type="hidden" id="total" class="form-control" value="$109720">
                <p class="price lead" id="total-label">$109720</p>
                <span class="price">.00</span>
              </div>
            </div>

          </div>

          <div class="form-group">
            <div class="col-sm-12">
              <button type="submit" class="btn btn-primary btn-lg btn-block">Proceed <span class="glyphicon glyphicon-chevron-right pull-right" style="padding-right: 10px;"></span></button>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <img src="http://amirolahmad.github.io/bootstrap-pricing-slider/images/payment.png" class="img-responsive payment" />
            </div>
          </div>

        </form>

        <p class="text-center" style="padding-top:10px;font-size:12px;color:#2c3e50;font-style:italic;">Created by <a href="https://twitter.com/AmirolAhmad" target="_blank">AmirolAhmad</a></p>

      </div>

    </div>
        <script src="http://code.jquery.com/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
    <script>
        /*!
 * jQuery UI Touch Punch 0.2.3
 *
 * Copyright 2011&ndash;2014, Dave Furfero
 * Dual licensed under the MIT or GPL Version 2 licenses.
 *
 * Depends:
 *  jquery.ui.widget.js
 *  jquery.ui.mouse.js
 */
(function ($) {

  // Detect touch support
  $.support.touch = 'ontouchend' in document;

  // Ignore browsers without touch support
  if (!$.support.touch) {
    return;
  }

  var mouseProto = $.ui.mouse.prototype,
      _mouseInit = mouseProto._mouseInit,
      _mouseDestroy = mouseProto._mouseDestroy,
      touchHandled;

  /**
   * Simulate a mouse event based on a corresponding touch event
   * @param {Object} event A touch event
   * @param {String} simulatedType The corresponding mouse event
   */
  function simulateMouseEvent (event, simulatedType) {

    // Ignore multi-touch events
    if (event.originalEvent.touches.length > 1) {
      return;
    }

    event.preventDefault();

    var touch = event.originalEvent.changedTouches[0],
        simulatedEvent = document.createEvent('MouseEvents');
    
    // Initialize the simulated mouse event using the touch event's coordinates
    simulatedEvent.initMouseEvent(
      simulatedType,    // type
      true,             // bubbles                    
      true,             // cancelable                 
      window,           // view                       
      1,                // detail                     
      touch.screenX,    // screenX                    
      touch.screenY,    // screenY                    
      touch.clientX,    // clientX                    
      touch.clientY,    // clientY                    
      false,            // ctrlKey                    
      false,            // altKey                     
      false,            // shiftKey                   
      false,            // metaKey                    
      0,                // button                     
      null              // relatedTarget              
    );

    // Dispatch the simulated event to the target element
    event.target.dispatchEvent(simulatedEvent);
  }

  /**
   * Handle the jQuery UI widget's touchstart events
   * @param {Object} event The widget element's touchstart event
   */
  mouseProto._touchStart = function (event) {

    var self = this;

    // Ignore the event if another widget is already being handled
    if (touchHandled || !self._mouseCapture(event.originalEvent.changedTouches[0])) {
      return;
    }

    // Set the flag to prevent other widgets from inheriting the touch event
    touchHandled = true;

    // Track movement to determine if interaction was a click
    self._touchMoved = false;

    // Simulate the mouseover event
    simulateMouseEvent(event, 'mouseover');

    // Simulate the mousemove event
    simulateMouseEvent(event, 'mousemove');

    // Simulate the mousedown event
    simulateMouseEvent(event, 'mousedown');
  };

  /**
   * Handle the jQuery UI widget's touchmove events
   * @param {Object} event The document's touchmove event
   */
  mouseProto._touchMove = function (event) {

    // Ignore event if not handled
    if (!touchHandled) {
      return;
    }

    // Interaction was not a click
    this._touchMoved = true;

    // Simulate the mousemove event
    simulateMouseEvent(event, 'mousemove');
  };

  /**
   * Handle the jQuery UI widget's touchend events
   * @param {Object} event The document's touchend event
   */
  mouseProto._touchEnd = function (event) {

    // Ignore event if not handled
    if (!touchHandled) {
      return;
    }

    // Simulate the mouseup event
    simulateMouseEvent(event, 'mouseup');

    // Simulate the mouseout event
    simulateMouseEvent(event, 'mouseout');

    // If the touch interaction did not move, it should trigger a click
    if (!this._touchMoved) {

      // Simulate the click event
      simulateMouseEvent(event, 'click');
    }

    // Unset the flag to allow other widgets to inherit the touch event
    touchHandled = false;
  };

  /**
   * A duck punch of the $.ui.mouse _mouseInit method to support touch events.
   * This method extends the widget with bound touch event handlers that
   * translate touch events to mouse events and pass them to the widget's
   * original mouse event handling methods.
   */
  mouseProto._mouseInit = function () {
    
    var self = this;

    // Delegate the touch handlers to the widget's element
    self.element.bind({
      touchstart: $.proxy(self, '_touchStart'),
      touchmove: $.proxy(self, '_touchMove'),
      touchend: $.proxy(self, '_touchEnd')
    });

    // Call the original $.ui.mouse init method
    _mouseInit.call(self);
  };

  /**
   * Remove the touch event handlers
   */
  mouseProto._mouseDestroy = function () {
    
    var self = this;

    // Delegate the touch handlers to the widget's element
    self.element.unbind({
      touchstart: $.proxy(self, '_touchStart'),
      touchmove: $.proxy(self, '_touchMove'),
      touchend: $.proxy(self, '_touchEnd')
    });

    // Call the original $.ui.mouse destroy method
    _mouseDestroy.call(self);
  };

})(jQuery);
        
    </script>
    </div>
    
    <div id="editor-css" class="playground-editor">
        
        <style>
        body {
    padding-top: 50px;
    padding-bottom: 50px;
}

.price-box {
    margin: 0 auto;
    background: #E9E9E9;
	border-radius: 10px;
	padding: 40px 15px;
	width: 500px;
}

.ui-widget-content {
	border: 1px solid #bdc3c7;
	background: #e1e1e1;
	color: #222222;
	margin-top: 4px;
}

.ui-state-default, .ui-widget-content .ui-state-default{
background:transparent !important;
border:none !important;
}
.ui-slider .ui-slider-handle label{
    background: #428bca;
    border-radius: 20px;
    width:5.2em;
}

.ui-slider .ui-slider-handle {
	position: absolute;
	z-index: 2;
	width: 5.2em;
	height: 100px;
	cursor: default;
	margin: 0 -40px auto !important;
	text-align: center;	
	line-height: 35px;
	color: #FFFFFF;
	font-size: 15px;
    
}

.ui-slider .ui-slider-handle .glyphicon {
	color: #FFFFFF;
	margin: 0 3px; 
	font-size: 11px;
	opacity: 0.5;
}

.ui-corner-all {
	border-radius: 20px;
}

.ui-slider-horizontal .ui-slider-handle {
	top: -.9em;
}

.ui-state-default,
.ui-widget-content .ui-state-default {
	border: 1px solid #f9f9f9;
	background: #3498db;
}

.ui-slider-horizontal .ui-slider-handle {
	margin-left: -0.5em;
}

.ui-slider .ui-slider-handle {
	cursor: pointer;
}

.ui-slider a,
.ui-slider a:focus {
	cursor: pointer;
	outline: none;
}

.price, .lead p {
	font-weight: 600;
	font-size: 32px;
	display: inline-block;
	line-height: 60px;
}

h4.great {
	background: #00ac98;
	margin: 0 0 25px -60px;
	padding: 7px 15px;
	color: #ffffff;
	font-size: 18px;
	font-weight: 600;
	border-radius: 5px;
	display: inline-block;
	-moz-box-shadow:    2px 4px 5px 0 #ccc;
  	-webkit-box-shadow: 2px 4px 5px 0 #ccc;
  	box-shadow:         2px 4px 5px 0 #ccc;
}

.total {
	border-bottom: 1px solid #7f8c8d;
	/*display: inline;
	padding: 10px 5px;*/
	position: relative;
	padding-bottom: 20px;
}

.total:before {
	content: "";
	display: inline;
	position: absolute;
	left: 0;
	bottom: 5px;
	width: 100%;
	height: 3px;
	background: #7f8c8d;
	opacity: 0.5;
}

.price-slider {
	margin-bottom: 70px;
}

.price-slider span {
	font-weight: 200;
	display: inline-block;
	color: #7f8c8d;
	font-size: 13px;
}

.form-pricing {
	background: #ffffff;
	padding: 20px;
	border-radius: 4px;
}

.price-form {
	background: #ffffff;
	margin-bottom: 10px;
	padding: 20px;
	border: 1px solid #eeeeee;
	border-radius: 4px;
	/*-moz-box-shadow:    0 5px 5px 0 #ccc;
  	-webkit-box-shadow: 0 5px 5px 0 #ccc;
  	box-shadow:         0 5px 5px 0 #ccc;*/
}

.form-group {
	margin-bottom: 0;
}

.form-group span.price {
	font-weight: 200;
	display: inline-block;
	color: #7f8c8d;
	font-size: 14px;
}

.help-text {
	display: block;
	margin-top: 32px;
	margin-bottom: 10px;
	color: #737373;
	position: absolute;
	/*margin-left: 20px;*/
	font-weight: 200;
	text-align: right;
	width: 188px;
}

.price-form label {
	font-weight: 200;
	font-size: 21px;
}

img.payment {
	display: block;
    margin-left: auto;
    margin-right: auto
}

.ui-slider-range-min {
	background: #2980b9;
}

/* HR */

hr.style {
	margin-top: 0;
    border: 0;
    border-bottom: 1px dashed #ccc;
    background: #999;
}
}
</style>
</div>
 <div id="editor-js" class="playground-editor">
     <script>$(document).ready(function() {
          $("#slider").slider({
              animate: true,
              value:1,
              min: 0,
              max: 1000,
              step: 10,
              slide: function(event, ui) {
                  update(1,ui.value); //changed
              }
          });

          $("#slider2").slider({
              animate: true,
              value:0,
              min: 0,
              max: 500,
              step: 1,
              slide: function(event, ui) {
                  update(2,ui.value); //changed
              }
          });

          //Added, set initial value.
          $("#amount").val(0);
          $("#duration").val(0);
          $("#amount-label").text(0);
          $("#duration-label").text(0);
          
          update();
      });

      //changed. now with parameter
      function update(slider,val) {
        //changed. Now, directly take value from ui.value. if not set (initial, will use current value.)
        var $amount = slider == 1?val:$("#amount").val();
        var $duration = slider == 2?val:$("#duration").val();

        /* commented
        $amount = $( "#slider" ).slider( "value" );
        $duration = $( "#slider2" ).slider( "value" );
         */

         $total = "$" + ($amount * $duration);
         $( "#amount" ).val($amount);
         $( "#amount-label" ).text($amount);
         $( "#duration" ).val($duration);
         $( "#duration-label" ).text($duration);
         $( "#total" ).val($total);
         $( "#total-label" ).text($total);

         $('#slider a').html('<label><span class="glyphicon glyphicon-chevron-left"></span> '+$amount+' <span class="glyphicon glyphicon-chevron-right"></span></label>');
         $('#slider2 a').html('<label><span class="glyphicon glyphicon-chevron-left"></span> '+$duration+' <span class="glyphicon glyphicon-chevron-right"></span></label>');
      }
      </script>
</div>
                </div>
            </div>
        </div>
    </div>

     

   

    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="http://bootsnipp.com/dist/scripts.min.js"></script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script src="http://d1n0x3qji82z53.cloudfront.net/src-min-noconflict/ace.js"></script>
<script type="text/javascript">
(function($) { 
    var snippetSaved = false;
    var htmleditor = ace.edit("editor-html");
    var jseditor = ace.edit("editor-js");
    var csseditor = ace.edit("editor-css");
    var version = '3.1.0';
    var snippetTitle = $('#snippet-name');

    $('select[name="bootstrap-version"]').change(function(e)
    {
        version = $(this).val();
        $('#show-preview').click();
    });

    function setEditorOptions(editor, type){
        editor.setTheme("ace/theme/clouds");
        editor.setHighlightActiveLine(false);
        editor.getSession().setMode("ace/mode/"+type);
        editor.commands.addCommand({
            name: 'save',
            bindKey: {win: 'Ctrl-S',  mac: 'Command-S'},
            exec: function(editor) {
                $('#save-snippet').click();
            },
            readOnly: false
        });
        editor.commands.addCommand({
            name: 'evaluate',
            bindKey: {win: 'Ctrl-Return',  mac: 'Command-Return'},
            exec: function(editor) {
                $('#show-preview').click();
            },
              readOnly: true
        });
    };

    setEditorOptions(htmleditor,'html');
    setEditorOptions(jseditor,'javascript');
    setEditorOptions(csseditor,'css');

    $('#show-html').click(function(e){
        e.preventDefault();
        markActive(this);
        $('#editor-html').show().siblings().hide();
        $('#preview-container').hide();
        htmleditor.resize();
        htmleditor.focus();
    });

    $('#show-js').click(function(e){
        e.preventDefault();
        markActive(this);
        $('#editor-js').show().siblings().hide();
        $('#preview-container').hide();

        jseditor.resize();
        jseditor.focus();
    });

    $('#show-css').click(function(e){
        e.preventDefault();
        markActive(this);
        $('#editor-css').show().siblings().hide();
        $('#preview-container').hide();

        csseditor.resize();
        csseditor.focus();
    });

    $('#save-snippet').click(function(e){
        e.preventDefault();
        var l = Ladda.create(this);
        l.start();
        $.post("http://bootsnipp.com/user/snippets/z7pMK", 
            { "html": htmleditor.getValue() ,
              "css": csseditor.getValue() ,
              "js": jseditor.getValue(),
              "title" : $('input[name="title"]').val(),
              "version" : version
          },

          function(data){
            if (data.response != 'ok'){
                alert('There was an error while trying to save the snippet, please try again');
            } else {
                snippetSaved = true;
                $('#snippet-name').text($('input[name="title"]').val());
                console.log('snippet saved');
            }

          }, "json")
        .fail(function(jqXHR, textStatus, errorThrown) { 
            var messageBag = jQuery.parseJSON(jqXHR.responseText);
            alert(messageBag.response);
        })
        .always(function() { 
            l.stop();
        });
        return false;
    });

    $('#show-preview').click(function(e){
        e.preventDefault();

        markActive(this);

        $('.playground-editor').hide();

        var html = buildSource(htmleditor, jseditor, csseditor);
        var iframe = document.createElement('iframe');
        
        iframe.src = 'about:blank';
        iframe.frameBorder="0";
        iframe.height = 496;
        iframe.className = 'preview-iframe';
        
        $('.preview-iframe').remove();
        $('div#preview-container').append(iframe);
        
        iframe.contentWindow.document.open('text/html', 'replace');
        iframe.contentWindow.document.write(html);
        iframe.contentWindow.document.close();

        $('#preview-container').show();
    });

    function markActive(el)
    {
       $(el).siblings().removeClass('active');
       $(el).addClass('active'); 
    }
    var cssurls = {};
    var jsurls = {};

        cssurls['4.0.0'] = '//cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css';
    jsurls['4.0.0'] = '//cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js';
        cssurls['3.3.0'] = '//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css';
    jsurls['3.3.0'] = '//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js';
        cssurls['3.2.0'] = '//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css';
    jsurls['3.2.0'] = '//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js';
        cssurls['3.1.0'] = '//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css';
    jsurls['3.1.0'] = '//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js';
        cssurls['3.0.3'] = '//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css';
    jsurls['3.0.3'] = '//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js';
        cssurls['3.0.1'] = '//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css';
    jsurls['3.0.1'] = '//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js';
        cssurls['3.0.0'] = '//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css';
    jsurls['3.0.0'] = '//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js';
        cssurls['2.3.2'] = '//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css';
    jsurls['2.3.2'] = '//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js';
        

    function buildSource(htmleditor, jseditor, csseditor)
    {   
        var code = {};
        code.html = htmleditor.getValue();
        code.css = csseditor.getValue();
        code.js = jseditor.getValue();
        code.bootstrapcss = cssurls[version];
        code.bootstrapjs = jsurls[version];

        var template = "<!doctype html>\n\
                        <html>\n\
                            <head>\n\
                                <meta charset='utf-8'>\n\
                                <meta name='viewport' content='width=device-width, initial-scale=1'>\n\
                                <title>Snippet - Bootsnipp.com</title>\n\
                                <link href='|bootstrapcss|' rel='stylesheet'>\n\
                                <style>|css|\x3C/style>\n\
                                \x3Cscript type='text/javascript' src='//code.jquery.com/jquery-1.10.2.min.js'>\x3C/script>\n\
                                \x3Cscript type='text/javascript' src='|bootstrapjs|'>\x3C/script>\n\
                                \x3Cscript type='text/javascript'>|js|\x3C/script>\n\
                            </head>\n\
                            <body>\n\
                            |html|\n\
                            </body>\n\
                        </html>";

        content = template.replace(/\|(\w+)\|/g, function(match, str)
        {
            if(str in code) return code[str];
            return '';
        });   
                        
        return content;
    }

    var submitsnippet   = $('#submitsnippet');
    var thankyou        = $('#thankyou');
    var errorlist       = $('#error-list');
    var hideable        = $('.hideable');
    thankyou.hide();    
    submitsnippet.submit(function(e){
        e.preventDefault();
        if(snippetSaved){
            submitsnippet.spin();
            $.ajax({
                url: 'http://bootsnipp.com/api/snippets',
                type: 'POST',
                dataType: 'json',
                data: $('form#submitsnippet').serialize(),
                success: function(data) {
                    submitsnippet.spin(false);
                    hideable.fadeOut();         
                    thankyou.fadeIn('slow');
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    submitsnippet.spin(false);
                    alert('Error submitting snippet, please try again!');
                }
            });
        } else {
            alert('Please save the snippet first');
        }
        return false;
    });
})(jQuery);
</script>
  </body>
</html>
