<!DOCTYPE html>
<html>
    <head>
        <title>
            rajiv popups
        </title>
        
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link href="../../css/bootstrap.min.css" rel="stylesheet">
        <link href="../../css/main.css" rel="stylesheet" type="text/css">
        <link href="../../css/default.css" rel="stylesheet" type="text/css">
        <link href="../../css/component.css" rel="stylesheet" type="text/css">
        <link href="../../css/font-awesome.min.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="../../images/favicon.ico" rel="shortcut icon">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css" rel="stylesheet">
        
        
        
        
        
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        
     
        
        
        
        
        
        
        <style>
             #page-content {
    padding: 10px 5px 1px;
   
}
/* Media Items */
.media-items {
    position: relative;
    margin-bottom: 20px;
    padding: 10px;
    border-radius: 5px;
    text-align: center;
     background-color: #ebeef2;
    -webkit-transition: all .1s ease-out;
    transition: all .1s ease-out;
}

.media-items:hover {
    background: rgba(255, 255, 255, 1);
    -webkit-box-shadow: 0 3px 5px rgba(0, 0, 0, .1);
    box-shadow: 0 3px 5px rgba(0, 0, 0, .1);
}

.media-items:hover .media-items-options {
    display: block;
}

.media-items .media-items-options {
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    padding: 10px;
    display: none;
}

.media-items .media-items-content {
    padding: 10px 0;
}
 #page-content.inner-sidebar-left,
    #page-content.inner-sidebar-right {
        position: relative;
    }

    #page-content.inner-sidebar-left {
        padding-left: 240px;
    }

    #page-content.inner-sidebar-right {
        padding-right: 240px;
    }

    #page-content-sidebar {
        margin: 0;
        width: 220px;
        position: absolute;
        top: 0;
        bottom: 0;
        overflow-y: auto;
        border-bottom: none;
    }

    #page-content.inner-sidebar-left #page-content-sidebar {
        left: 0;
        border-right: 1px solid #dae0e8;
    }

    #page-container.sidebar-light #page-content.inner-sidebar-left #page-content-sidebar {
        border-left: 1px solid #dae0e8;
    }

    #page-content.inner-sidebar-right #page-content-sidebar {
        right: 0;
        border-left: 1px solid #dae0e8;
    }



/* MFP popup CSS */

.mfp-bg {
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1042;
    overflow: hidden;
    position: fixed;
    background: #0b0b0b;
    opacity: 0.8;
    filter: alpha(opacity=80);
}
.mfp-wrap {
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1043;
    position: fixed;
    outline: none !important;
    -webkit-backface-visibility: hidden;
}
.mfp-container {
    text-align: center;
    position: absolute;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    padding: 0 8px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.mfp-container:before {
    content: '';
    display: inline-block;
    height: 100%;
    vertical-align: middle;
}
.mfp-align-top .mfp-container:before {
    display: none;
}
.mfp-content {
    position: relative;
    display: inline-block;
    vertical-align: middle;
    margin: 0 auto;
    text-align: left;
    z-index: 1045;
}
.mfp-inline-holder .mfp-content,
.mfp-ajax-holder .mfp-content {
    width: 100%;
    cursor: auto;
}
.mfp-ajax-cur {
    cursor: progress;
}
.mfp-zoom-out-cur,
.mfp-zoom-out-cur .mfp-image-holder .mfp-close {
    cursor: -moz-zoom-out;
    cursor: -webkit-zoom-out;
    cursor: zoom-out;
}
.mfp-zoom {
    cursor: pointer;
    cursor: -webkit-zoom-in;
    cursor: -moz-zoom-in;
    cursor: zoom-in;
}
.mfp-auto-cursor .mfp-content {
    cursor: auto;
}
.mfp-close,
.mfp-arrow,
.mfp-preloader,
.mfp-counter {
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
}
.mfp-loading.mfp-figure {
    display: none;
}
.mfp-hide {
    display: none !important;
}
.mfp-preloader {
    color: #CCC;
    position: absolute;
    top: 50%;
    width: auto;
    text-align: center;
    margin-top: -0.8em;
    left: 8px;
    right: 8px;
    z-index: 1044;
}
.mfp-preloader a {
    color: #CCC;
}
.mfp-preloader a:hover {
    color: #FFF;
}
.mfp-s-ready .mfp-preloader {
    display: none;
}
.mfp-s-error .mfp-content {
    display: none;
}
button.mfp-close,
button.mfp-arrow {
    overflow: visible;
    cursor: pointer;
    background: transparent;
    border: 0;
    -webkit-appearance: none;
    display: block;
    outline: none;
    padding: 0;
    z-index: 1046;
    -webkit-box-shadow: none;
    box-shadow: none;
}
button::-moz-focus-inner {
    padding: 0;
    border: 0;
}
.mfp-close {
    width: 44px;
    height: 44px;
    line-height: 44px;
    position: absolute;
    right: 0;
    top: 0;
    text-decoration: none;
    text-align: center;
    opacity: 0.65;
    filter: alpha(opacity=65);
    padding: 0 0 18px 10px;
    color: #FFF;
    font-style: normal;
    font-size: 28px;
    font-family: Arial, Baskerville, monospace;
}
.mfp-close:hover,
.mfp-close:focus {
    opacity: 1;
    filter: alpha(opacity=100);
}
.mfp-close:active {
    top: 1px;
}
.mfp-close-btn-in .mfp-close {
    color: #333;
}
.mfp-image-holder .mfp-close,
.mfp-iframe-holder .mfp-close {
    color: #FFF;
    right: -6px;
    text-align: right;
    padding-right: 6px;
    width: 100%;
}
.mfp-counter {
    position: absolute;
    top: 0;
    right: 0;
    color: #CCC;
    font-size: 12px;
    line-height: 18px;
    white-space: nowrap;
}
.mfp-arrow {
    position: absolute;
    opacity: 0.65;
    filter: alpha(opacity=65);
    margin: 0;
    top: 50%;
    margin-top: -55px;
    padding: 0;
    width: 90px;
    height: 110px;
    -webkit-tap-highlight-color: transparent;
}
.mfp-arrow:active {
    margin-top: -54px;
}
.mfp-arrow:hover,
.mfp-arrow:focus {
    opacity: 1;
    filter: alpha(opacity=100);
}
.mfp-arrow:before,
.mfp-arrow:after,
.mfp-arrow .mfp-b,
.mfp-arrow .mfp-a {
    content: '';
    display: block;
    width: 0;
    height: 0;
    position: absolute;
    left: 0;
    top: 0;
    margin-top: 35px;
    margin-left: 35px;
    border: medium inset transparent;
}
.mfp-arrow:after,
.mfp-arrow .mfp-a {
    border-top-width: 13px;
    border-bottom-width: 13px;
    top: 8px;
}
.mfp-arrow:before,
.mfp-arrow .mfp-b {
    border-top-width: 21px;
    border-bottom-width: 21px;
    opacity: 0.7;
}
.mfp-arrow-left {
    left: 0;
}
.mfp-arrow-left:after,
.mfp-arrow-left .mfp-a {
    border-right: 17px solid #FFF;
    margin-left: 31px;
}
.mfp-arrow-left:before,
.mfp-arrow-left .mfp-b {
    margin-left: 25px;
    border-right: 27px solid #3F3F3F;
}
.mfp-arrow-right {
    right: 0;
}
.mfp-arrow-right:after,
.mfp-arrow-right .mfp-a {
    border-left: 17px solid #FFF;
    margin-left: 39px;
}
.mfp-arrow-right:before,
.mfp-arrow-right .mfp-b {
    border-left: 27px solid #3F3F3F;
}
.mfp-iframe-holder {
    padding-top: 40px;
    padding-bottom: 40px;
}
.mfp-iframe-holder .mfp-content {
    line-height: 0;
    width: 100%;
    max-width: 900px;
}
.mfp-iframe-holder .mfp-close {
    top: -40px;
}
.mfp-iframe-scaler {
    width: 100%;
    height: 0;
    overflow: hidden;
    padding-top: 56.25%;
}
.mfp-iframe-scaler iframe {
    position: absolute;
    display: block;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    box-shadow: 0 0 8px rgba(0, 0, 0, 0.6);
    background: #000;
}
/* Main image in popup */

img.mfp-img {
    width: auto;
    max-width: 100%;
    height: auto;
    display: block;
    line-height: 0;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    padding: 40px 0 40px;
    margin: 0 auto;
}
/* The shadow behind the image */

.mfp-figure {
    line-height: 0;
}
.mfp-figure:after {
    content: '';
    position: absolute;
    left: 0;
    top: 40px;
    bottom: 40px;
    display: block;
    right: 0;
    width: auto;
    height: auto;
    z-index: -1;
    box-shadow: 0 0 8px rgba(0, 0, 0, 0.6);
    background: #444;
}
.mfp-figure small {
    color: #BDBDBD;
    display: block;
    font-size: 12px;
    line-height: 14px;
}
.mfp-figure figure {
    margin: 0;
}
.mfp-bottom-bar {
    margin-top: -36px;
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
    cursor: auto;
}
.mfp-title {
    text-align: left;
    line-height: 18px;
    color: #F3F3F3;
    word-wrap: break-word;
    padding-right: 36px;
}
.mfp-image-holder .mfp-content {
    max-width: 100%;
}
.mfp-gallery .mfp-image-holder .mfp-figure {
    cursor: pointer;
}
@media screen and (max-width: 800px) and (orientation: landscape),
screen and (max-height: 300px) {
    /**
       * Remove all paddings around the image on small screen
       */

    .mfp-img-mobile .mfp-image-holder {
        padding-left: 0;
        padding-right: 0;
    }
    .mfp-img-mobile img.mfp-img {
        padding: 0;
    }
    .mfp-img-mobile .mfp-figure:after {
        top: 0;
        bottom: 0;
    }
    .mfp-img-mobile .mfp-figure small {
        display: inline;
        margin-left: 5px;
    }
    .mfp-img-mobile .mfp-bottom-bar {
        background: rgba(0, 0, 0, 0.6);
        bottom: 0;
        margin: 0;
        top: auto;
        padding: 3px 5px;
        position: fixed;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    .mfp-img-mobile .mfp-bottom-bar:empty {
        padding: 0;
    }
    .mfp-img-mobile .mfp-counter {
        right: 5px;
        top: 3px;
    }
    .mfp-img-mobile .mfp-close {
        top: 0;
        right: 0;
        width: 35px;
        height: 35px;
        line-height: 35px;
        background: rgba(0, 0, 0, 0.6);
        position: fixed;
        text-align: center;
        padding: 0;
    }
}
@media all and (max-width: 900px) {
    .mfp-arrow {
        -webkit-transform: scale(0.75);
        transform: scale(0.75);
    }
    .mfp-arrow-left {
        -webkit-transform-origin: 0;
        transform-origin: 0;
    }
    .mfp-arrow-right {
        -webkit-transform-origin: 100%;
        transform-origin: 100%;
    }
    .mfp-container {
        padding-left: 6px;
        padding-right: 6px;
    }
}
.mfp-ie7 .mfp-img {
    padding: 0;
}
.mfp-ie7 .mfp-bottom-bar {
    width: 600px;
    left: 50%;
    margin-left: -300px;
    margin-top: 5px;
    padding-bottom: 5px;
}
.mfp-ie7 .mfp-container {
    padding: 0;
}
.mfp-ie7 .mfp-content {
    padding-top: 44px;
}
.mfp-ie7 .mfp-close {
    top: 0;
    right: 0;
    padding-top: 0;
}


.tinted-image {
  background: 
    /* top, transparent red */
    linear-gradient(
      rgba(0, 0, 0, 0.55), 
      rgba(0, 0, 0, 0.55)
    ),
    /* your image */
    url("API-Management/images/key.jpg");
-webkit-background-size: cover;
              -moz-background-size: cover;
              -o-background-size: cover;
              background-size: cover;
           
    
}

.view{
    
}

.breadcrumb {margin:0px !important;}
.breadcrumb li,.breadcrumb li a{color:#FFF !important;}
.text-dark, .text-dark:hover, a.text-dark, a.text-dark:hover, a.text-dark:focus {
    background-color: #232527;
    color:#fff;
}

         </style>   
         
         
            <style>
            rows{
                width:100%;height:100%;background:gray;margin:0;
            }
            oneness{
                width:100%;height:100%;background:gray;margin:0;
            }
            main{
                width:100%;height:100%;position:absolute;
            }
            #my_image{
                width:200px;margin:20px;cursor:pointer;
            }
            #my_image:hover{
                opacity:0.7;
            }
            #appear_image_div{
                width:100%;height:100%;top:83px;position:absolute;z-index:10;opacity:0.7;background:#666666;
            }
            #appear_image{
                display:block;height:500px;margin:auto;position:relative;z-index:11;top:-210px;
            }
            #close_image{
                position:fixed;z-index:12;top:100px;right:20px;cursor:pointer;height:40px;
            }
            #close_image:hover{
                
            }
        </style>
         
         
        
        <script type="text/javascript">
            jQuery(function($){
               $('#my_image').click(function(){
                   var img=$(this).attr("src");
                   var appear_image="<div id='appear_image_div' onclick='closeImage()'></div>";
                   
                   appear_image=appear_image.concat("<img id='appear_image' src='"+img+"'/>");
                   appear_image=appear_image.concat("<img id='close_image' onclick='closeImage()' src='rajiv-collaterols/close.png'/>");
                   $('.oneness').append(appear_image);               
                   
               }) ;
            });
            
            function closeImage(){
                $('#appear_image_div').remove();
                $('#appear_image').remove();
                $('#close_image').remove();
            }
        </script>
        
           <?php include '../header.php';?>
    </head>
    
    <body>
        <br><br><br>
        
        <div class="emerald tinted-image">
        <div class="container ">
             <div class="row">
                  <br><br><br>
             <div class="col-sm-6 text-left">  
            <h1 class="heavy micro">Corporate Collaterals</h1>
          
          </div>
          <div class="col-sm-6 text-right">
            <ul class="breadcrumb pull-right">
                <li><a href="#">Home</a></li>
                <li><a href="#">Technologies</a></li>
                <li  class="active" >Corporate Collaterals</li>
                
            </ul>
          </div>
          
          </div>
          </div>
          <br>
        </div>
        
        <br><br><br><br><br><br><br>
        
        <div class="container">
            
            
            <div class="row">
                            <div class="col-sm-4 col-lg-3">
                                <div class="media-items animation-fadeInQuick2" data-category="zip">
                                    <div class="media-items-options text-right">
                                        <a href="javascript:void(0)" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                    </div>
                                    <div class="media-items-content">
                                        <i class="fa fa-file-archive-o fa-5x text-muted"></i>
                                    </div>
                                    <h4>
                                        <strong>Document</strong>.pdf<br>
                                        <small>3 hours ago, 3.2MB</small>
                                    </h4>
                                </div>
                            </div>
                            <div class="col-sm-4 col-lg-3">
                                <div class="media-items animation-fadeInQuick2" data-category="image">
                                    <div class="media-items-options text-right">
                                        
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">View</button>
                                    
                                        <a href="javascript:void(0)" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                    </div>
                                    
                                    
                                      <div class="modal fade" id="myModal" role="dialog">
                                                        <div class="modal-dialog" style="left:1% !important">
                                                        
                                                          <!-- Modal content-->
                                                          <div class="modal-content">
                                                            <div class="modal-header">
                                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                              <h4 class="modal-title">Bigdata</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                              <img src="rajiv-collaterols/three.jpeg" style="width:100%">
                                                            </div>
                                                            <div class="modal-footer">
                                                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            </div>
                                                          </div>
                                                          
                                                        </div>
                                                      </div>
                                    
                                    
                                    
                                    <div class="media-items-content">
                                        <i class="fa fa-file-picture-o fa-5x text-success"></i>
                                    </div>
                                    <h4>
                                        <strong>Bigdata</strong>.jpg<br>
                                        <small>API-Management, 1.5MB</small>
                                    </h4>
                                    
                                    
                                </div>
                                
                                
                            </div>
                            
                            
                            
                            
                            <div class="col-sm-4 col-lg-3">
                                <div class="media-items animation-fadeInQuick2" data-category="video">
                                    <div class="media-items-options text-right">
                                        <a href="javascript:void(0)" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                    </div>
                                    <div class="media-items-content">
                                        <i class="fa fa-file-video-o fa-5x text-danger"></i>
                                    </div>
                                    <h4>
                                        <strong>Presentation</strong>.ppt<br>
                                        <small>7 hours ago, 120MB</small>
                                    </h4>
                                </div>
                            </div>
                            <div class="col-sm-4 col-lg-3">
                                <div class="media-items animation-fadeInQuick2" data-category="video">
                                    <div class="media-items-options text-right">
                                        <a href="javascript:void(0)" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                    </div>
                                    <div class="media-items-content">
                                        <i class="fa fa-file-archive-o fa-5x text-danger"></i>
                                    </div>
                                    <h4>
                                        <strong>Presentation</strong>.ppt<br>
                                        <small>7 hours ago, 120MB</small>
                                    </h4>
                                </div>
                            </div>
                          
                            
                        </div>
            
            
            
            
            
            
            
            
            
       
        
        
        </div>
        
        
        <br><br><br><br><br><br><br><br><br><br><br>
        
        
        <?php include '../footer.php';?>
        
        
        
    </body>
</html>