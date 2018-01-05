<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Thought Leadership</title>
      <link href="../../css/bootstrap.min.css" rel="stylesheet">
      <link href="../../css/font-awesome.min.css" rel="stylesheet">
      <link href="../../css/main.css" rel="stylesheet">
      <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="../../css/default.css" />
      <link rel="stylesheet" type="text/css" href="../../css/component.css" />
      <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
      <link href="/css/themes.css" rel="stylesheet">
      <link rel="shortcut icon" href="../../images/favicon.ico">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="css/side-bar.css">
      <style>
      
    
         .tinted-image {
         background: 
         /* top, transparent red */
         linear-gradient(
         rgba(0, 0, 0, 0.55), 
         rgba(0, 0, 0, 0.55)
         ),
         /* your image */
         url("images/iot-header.png");
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
         }
        
      </style>
    
      <style>
         
         .effect:hover{
            top:-5px;
         }
          .hoverform{
            margin-top:-390px;
            display:none;
           
         }
         .hover1:hover .hoverform{
            display:block;
         }
         .slide{
             overflow:hidden !important;
         }
      </style>
   </head>
   <!--/head-->
   <?php include '../sap/mheader.2.php';?>
   <body>
      <section id="services" >
       <div class="emerald tinted-image">
            <div class="container ">
               <div class="row">
                  <br><br><br>
                  <div class="col-sm-6 text-left">
                     <h1 class="heavy micro">Thought Leadership</h1>
                  </div>
                  <div class="col-sm-6 text-right">
                     <ul class="breadcrumb pull-right">
                        <li><a href="../">Home</a></li>
                        <li><a href="../technologies/">Technologies</a></li>
                        <li><a href="../IoT/">IoT</a></li>
                        <li class="active">Thought Leadership</li>
                     </ul>
                  </div>
               </div>
            </div>
            <br>
         </div>
      </section>
      <section id="services" class="container">
         <div class="row">
         <div class="col-sm-9">
            <div class="row">
               <div class="col-sm-12">
                   <br>
                   <p class="methodText">Miracle has been a thought leader in the space of IoT over the last few years. Through our <strong>Digital
Library</strong> you can explore a vast amount of resources and thought leadership pieces around the space of
IoT.</p>
               </div>
           <br>
               <div class="col-sm-12 hover1" > 
               <iframe src="https://player.vimeo.com/video/201273052" width="100%" height="380" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>


                 <!---onhover form--->
                  <div class="row hoverform" >
                     
                        <div class="col-sm-12" style="background-color:rgba(255,255,255,1);">
                           <ul class="nav nav-tabs">

                            <li class="active">
                                <a data-toggle="tab" href="#sign-in-for-access"><h6 class="bluefont"><strong>Sign Up </strong></h6></a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#emplyolee-sign-in"><h6><strong>Employee Sign In</strong></h6></a>
                            </li>
                        </ul>
                        
                        <div class="tab-content">
                            <div class="tab-pane active" id="sign-in-for-access">
                                <br>

                                <form method="post" action="" id="myForm">
                                    <div class="row">
                                        <!--copy 1 from contact first row starts-->
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control col-sm-12" id="firstname" name="firstname" placeholder="First Name*" required="required" type="text" onchange="fieldLengthValidator(this);">
                                            </div>

                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control col-sm-12" name="lastname" id="lastname" placeholder="Last Name*" required="required" type="text" onchange="fieldLengthValidator(this);">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Organization*" name="organization" id="organization" required="required" type="text" onchange="fieldLengthValidator(this);">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Designation*" name="designation" id="designation" required="required" type="text" onchange="fieldLengthValidator(this);">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Email*" name="email" id="email" required="required" type="text" onchange="return checkResourceEmail(this);">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Work Phone*" name="workPhone" id="workPhone" required="required" type="text" onchange="return formatPhone(this);" onblur="return validatenumber(this)" onkeypress="return isNumberKey(event)">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12"> 
                                            <div class="alert alert-danger" style="display:none" id="errorMsgDivEX">
                                                <button type="button" class="close" onclick="closeErrorMsgEx()" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                <strong><span id="resultMessageEX">Invalid details!!</span></strong> 
                                            </div>                        
                                        </div>
                                    </div>
                                    <!--copy 1 from contact first row ends-->
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <button class="btn btn-primary col-sm-12" id="btnSubmit" name="btnSubmit" tabindex="12" type="submit"> Submit </button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                              
                                    <p class="methodText greyText" >
                                        The given information will not be used or be distributed to any sources and will be used only for User Authentication. Miracle has copyrights and is authorized to use and circulate all the resources which are being provided to you.
                                    </p> <br>

                               
                            </div>  <!--first tab ends-->

                            <div class="tab-pane" id="emplyolee-sign-in">
                                <br>
                                <form id="employeeLoginForm" method="post" action="#">
                                    <p class="methodText greyText" >
                                        You must be a Miraclite to gain access to this. Please validate yourself using your Miracle credentials for further access.
                                    </p> <br>
                                    <div class="row ">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" id="loginId" name="loginId" placeholder="loginId*" required="required" type="text" onkeydown="return enableLoginWhenEnter(event);">
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <input class="form-control" id="password" name="password" placeholder="password*" required="required" type="password" onkeydown="return enableLoginWhenEnter(event);">
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12"> 
                                            <div class="alert alert-danger" style="display:none" id="errorMsgDiv">
                                                <button type="button" class="close" onclick="closeErrorMsg()" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                <strong><span id="resultMessage">Invalid details!!</span></strong> 
                                            </div>                        
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                               
                                                <button type="button" class="btn btn-primary col-sm-12" data-loading-text="<i class='fa fa-spinner fa-spin '></i> loading..." style="margin-left:1px;" name="btnLoginSubmit" id="btnLoginSubmit" onclick="doSubmit();" tabindex="3">Login</button>									

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 noMargin">
                                            <p class="methodText">Forgot password!<a href="../../forgot-password.php" class="linkText"><strong> Click here.</strong></a></p> 
                                        </div>
                                        <div class="col-sm-6"></div>
                                    </div> 
                                </form> 
                              
                              <br>
                            </div>
                        </div>
                        </div>
                     
                      
                  </div>
                    </div>
          
           </div>
         
          <div class="row">
             <div class="col-sm-12">
                <h1 class="heavy">More Resources</h1>
              <p class="methodText">Learn more about how Miracle’s teams have helped organizations improve their test processes through innovative techniques. </p>
                    <a class="btn btn-danger" href="#scroller" data-slide="prev"><i class="icon-angle-left"></i></a>
                        <a class="btn btn-danger" href="#scroller" data-slide="next"><i class="icon-angle-right"></i></a>
         </div>
         </div>
          <div class="row">
                <div class="col-sm-12">
                    <div id="scroller" class="carousel slide" >
                        <div class="carousel-inner" >
                            <div class="item active" >
                                <div class="row">
                                    <div class="col-sm-4"><!--webinar--->
                                        <div class="portfolio-item">
                                            
                                                     <div class="card ">
                                       <div class="embed-responsive embed-responsive-16by9">
                                       <a class="linkText1" target="_blank"  href="http://www.miraclesoft.com/events/webinar-after.php?eventId=206"><img src="images/exploring.png" alt="QA" class="img-responsive"></a>
                                         
  
                                       </div>
                                        <a class="linkText1" target="_blank"  href="http://www.miraclesoft.com/events/webinar-after.php?eventId=206">
                                          <div class="container" style="background-color:#eee; margin-top:-5px;">
                        
                                                <p class="methodText"><center><strong>Exploring IoT Use Cases and Serverless with AWS IoT and Lambda</strong></center></p>
                                          </div>
                                       </a>
                    
                                      </div>
                                        </div>
                                    </div>  
                                      <div class="col-sm-4"><!--webinar--->
                                        <div class="portfolio-item">
                                            
                                                     <div class="card ">
                                       <div class="embed-responsive embed-responsive-16by9">
                                           <a class="linkText1" target="_blank"  href="http://www.miraclesoft.com/events/webinar-after.php?eventId=126"><img src="images/connecting.png" alt="QA" class="img-responsive"></a>
                                            
                                            

                                       </div>
                                        <a class="linkText1" target="_blank"  href="http://www.miraclesoft.com/events/webinar-after.php?eventId=126">
                                          <div class="container" style="background-color:#eee; margin-top:-5px;">
                        
                                                <p class="methodText"><center><strong>Connecting an OBD II Sensor to the Watson IoT Platform<br>&nbsp;&nbsp;&nbsp;</strong></center></p>
                                          </div>
                                       </a>
                    
                                      </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4"><!--webinar--->
                                        <div class="portfolio-item">
                                            
                                                 <div class="card">
                                                 <div class="embed-responsive embed-responsive-16by9"> 
                                                  <a class="linkText1" target="_blank"  href="http://www.miraclesoft.com/events/webinar-after.php?eventId=73"><img src="images/simplify.png" alt="QA" class="img-responsive"></a>
                                              
                                              
                        
                                               <a class="linkText1" target="_blank"  href="http://www.miraclesoft.com/events/webinar-after.php?eventId=73">
                                                  <div class="container" style="background-color:#eee; margin-top:-5px;">
                                
                                                        <p><center><strong>Simplifying the IoT Use Case with Bluemix, Devices and People</strong></center></p> 
                                                  </div>
                                               </a>
                                           </div>
                                           </div>
                                            
                                        </div>
                                    </div>
                                    
                                     </div><!--/.row-->
                            </div><!--/.item-->
                                    
                               
                            <div class="item">
                                <div class="row">
                                 <div class="col-sm-4"><!--webinar--->
                                        <div class="portfolio-item">
                                            
                                                     <div class="card ">
                                       <div class="embed-responsive embed-responsive-16by9">
                                           <a class="linkText1" target="_blank"  href="http://www.miraclesoft.com/events/webinar-after.php?eventId=186"><img src="images/watson.png" alt="QA" class="img-responsive"></a>
                                            
                                            

                                       </div>
                                        <a class="linkText1" target="_blank"  href="http://www.miraclesoft.com/events/webinar-after.php?eventId=186">
                                          <div class="container" style="background-color:#eee; margin-top:-5px;">
                        
                                                <p class="methodText"><center><strong>Watson IoT Deep Dive<br> - The Anatomy of an IoT Solution</strong></center></p>
                                          </div>
                                       </a>
                    
                                      </div>
                                        </div>
                                    </div> 
                                   <div class="col-sm-4"><!--webinar--->
                                        <div class="portfolio-item">
                                            
                                                     <div class="card ">
                                       <div class="embed-responsive embed-responsive-16by9">
                                         <a class="linkText1" target="_blank"  href="http://www.miraclesoft.com/events/webinar-after.php?eventId=140"><img src="images/building.png" alt="QA" class="img-responsive"></a>
                                           
                                           


                                       </div>
                                        <a class="linkText1" target="_blank"  href="http://www.miraclesoft.com/events/webinar-after.php?eventId=140">
                                          <div class="container" style="background-color:#eee; margin-top:-5px;">
                        
                                                <p class="methodText"><center><strong>Building Connected IoT Mobile Apps using Xamarin and Azure App Services</strong></center></p>
                                          </div>
                                       </a>
                    
                                      </div>
                                        </div>
                                    </div>
                                    
                                   
                                    </div>
                                    </div>
                                 
                                    
                                  
                                   
                                <!--/.item-->
                            
                        </div>
                    </div>
                </div>
           <!--/.row-->
        </div>
   
           
         </div>
         <div class="col-sm-3 sidebar pull-right">
            <br>
            <div class="mini-submenu">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
            </div>
            <div class="list-group">
              
               <a href="iot.php" class="list-group-item-1">
                  <div>
                     <center><strong><font size="3%!important" color="#ffffff"  onMouseOut="this.style.color='#ffffff'" onMouseOver="this.style.color='#b7b2b3'">&nbsp; Internet of Things
                        </font></strong>
                     </center>
                  </div>
               </a>
               <a href="service-offerings.php" class="list-group-item">
                  <div >
                     <center><strong><font size="3%!important" color="#000">&nbsp;Our Service Offerings
                        </font></strong>
                     </center>
                  </div>
               </a>
               <a href="bring-iot-home.php" class="list-group-item">
                  <div>
                     <center><strong><font size="3%!important" color="#000">&nbsp;Bring IoT Home
                        </font></strong>
                     </center>
                  </div>
               </a>
               
               <a href="solution-anatomy.php" class="list-group-item">
                  <div>
                     <center>
                     <strong><font size="3%!important" color="#000">&nbsp;IoT Solution Anatomy
                     </font></strong>
                     <center>
                  </div>
               </a>
               <a href="#" class="list-group-item">
                  <div>
                     <center>
                     <strong><font size="3%!important" color="#00aae7">&nbsp;Thought Leadership
                     </font></strong>
                     <center>
                  </div>
               </a>
               <br>
               <div >
                  <div class="widget-content themed-background text-light-op">
                     <center><strong><font color="#ffffff">Tech Article</font></strong></center>
                  </div>
                  <div class="widget box">
                     <div class="widget-content" id="check" >
                      
                        <center>
                           <a href="#">
                              <h3 class="heavy"></h3>
                              <p><font size="3px"color="#ffffff"><style="opacity:0!important;"><strong>Simplifying the IoT Realization Process with IBM Bluemix and Raspberry Pi</strong></style></font></p>
                           </a>
                        </center>
                     </div>
                  </div>
                  <div class="widget-content  text-dark register-hover">
                     <a class="linkText1" href="http://www.miraclesoft.com/library/CaseStudy/hybrid-integration-architecture-retail-customer" target="_blank">
                        <center><strong><font color="#ffffff"  onMouseOut="this.style.color='#ffffff'" onMouseOver="this.style.color='#b7b2b3'">Read Today</font></strong></center>
                     </a>
                  </div>
                  </a>
               </div>
               <div>
                  <ul class="footer-nav footer-nav-links list-inline">
                     <li><a href="https://www.facebook.com/miracle45625" target="_blank" class="social-facebook" data-toggle="tooltip" title="" data-original-title="Like our Facebook page"><i class="fa fa-fw fa-facebook"></i></a></li>
                     <li><a href="https://twitter.com/Team_MSS" target="_blank" class="social-twitter" data-toggle="tooltip" title="" data-original-title="Follow us on Twitter"><i class="fa fa-fw fa-twitter"></i></a></li>
                     <li><a href="https://plus.google.com/105262074634409319991/" target="_blank" class="social-google-plus" data-toggle="tooltip" title="" data-original-title="Like our Google+ page"><i class="fa fa-fw fa-google-plus"></i></a></li>
                     <li><a href="https://www.linkedin.com/company/miracle-software-systems-inc" target="_blank" class="social-linkedin" data-toggle="tooltip" title="" data-original-title="Follow us on LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                     <li><a href="https://www.flickr.com/photos/team_miracle" target="_blank" class="social-flickr" data-toggle="tooltip" title="" data-original-title="Follow us on LinkedIn"><i class="fa fa-flickr"></i></a></li>
                     <span><a href="https://www.youtube.com/c/Team_MSS" target="_blank" class="social-youtube" data-toggle="tooltip" title="" data-original-title="Watch our videos on YouTube"><i class="fa fa-youtube-play"></i></a><span>
                  </ul>
               </div>
            <span data-toggle="collapse">
                    <div class="widget">
                   <a href="mailto:iot@miraclesoft.com" > <div class="widget-content widget-hover themed-background text-light-op">
                            <center><strong><font color="#ffffff">
                                Contact Us</font></strong></center>
                        </div></a>
           </div>
          </span>
            </div>
            <div class="col-sm-3">
               <br>
            </div>
            </div>
         </div>
         
         
         <div class="row">
            
                <div class="col-sm-12">
             
            <p class="methodText">
               For more information about <strong>Miracle’s Internet of Things Offerings</strong>, reach out to<strong><a href="mailto:iot@miraclesoft.com" class="linkText"> iot@miraclesoft.com</a></strong>
            </p></div>
            
         </div>

         <link rel="stylesheet" href="../../css/box.css">
         
         <script src="js/query.js"></script>
         <script src="js/bootstrap.js"></script>
         <br>
         
      </section>
      <!--/#about-us-->
      <?php include 'footer.php';?>
   </body>
</html>