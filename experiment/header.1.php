<!DOCTYPE html>
<html>
    <head>
        <meta content="width=device-width, initial-scale=1" name="viewport"><!--[if lte IE 8]>
<div id="warning">
<META http-equiv="refresh" content="0;URL=http://www.miraclesoft.com/outdated-browser.php">
</div>-->
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="../js/modernizr.custom.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>
$(function(){
        cbpHorizontalMenu.init();
        });
        </script>
      <style>
      .cbp-hrmenu > ul, .cbp-hrmenu .cbp-hrsub-inner {
   
    max-width: 48em;}
    .navbar-inverse .navbar-brand {
    
    line-height: 30px;}
    .navbar-brand {
   
    padding: 9px;}
  .cbp-hrmenu > ul, .cbp-hrmenu .cbp-hrsub-inner {
    width: 66%;
}
.cbp-hrmenu > ul, .cbp-hrmenu .cbp-hrsub-inner {
    width: 62%;
}
</style>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/main.js"></script>
        <title></title>
    </head>
    <body>
        
        <header class="navbar navbar-inverse navbar-fixed-top stickyHeader">
        <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-1">
            <div class="navbar-header" id="menu">
                <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button> <a class="navbar-brand" href="../"><img alt="logo" src="../images/logo.png"></a>
            </div>
            </div>
            <div class="col-sm-9">
            <div class="main">
                <div class="collapse navbar-collapse">
                    <nav class="cbp-hrmenu" id="cbp-hrmenu">
                        <ul>
                            <li>
                                <a>Company</a>
                                <!-- /cbp-hrsub -->
                            </li>
                            <li>
                                <a>Services</a>
                               <!-- /cbp-hrsub -->
                            </li>
                            <li>
                                <a>Contact</a>
                                <!-- /cbp-hrsub -->
                            </li>
                           
                        </ul>
                    </nav>
                </div>
            </div>
            </div>
            <div class="col-sm-1"></div>
            </div>
        </header><script>
var cbpHorizontalMenu = (function() {

        var $listItems = $( '#cbp-hrmenu > ul > li' ),
        $menuItems = $listItems.children( 'a' ),
        $body = $( 'body' ),
        current = -1;

        function init() {
        $menuItems.on( 'mouseover', open );
        $listItems.on( 'mouseover', function( event ) { event.stopPropagation(); } );
        }

        function open( event ) {

        if( current !== -1 ) {
            $listItems.eq( current ).removeClass( 'cbp-hropen' );
        }

        var $item = $( event.currentTarget ).parent( 'li' ),
            idx = $item.index();

        if( current === idx ) {
            $item.removeClass( 'cbp-hropen' );
            current = -1;
        }
        else {
            $item.addClass( 'cbp-hropen' );
            current = idx;
            $body.off( 'mouseover' ).on( 'mouseover', close );
        }

        return false;

        }

        function close( event ) {
        $listItems.eq( current ).removeClass( 'cbp-hropen' );
        current = -1;
        }

        return { init : init };

        })();
        </script>
        <script type="text/javascript">
function downloadJSAtOnload() {
var element = document.createElement("script");
element.src = "../js/modernizr.custom.js";
document.body.appendChild(element);
}
if (window.addEventListener)
window.addEventListener("load", downloadJSAtOnload, false);
else if (window.attachEvent)
window.attachEvent("onload", downloadJSAtOnload);
else window.onload = downloadJSAtOnload;
</script>
    </body>
</html>