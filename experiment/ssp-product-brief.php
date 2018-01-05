<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="description">
        <meta content="" name="author">
        <title>
            SSP Product | Miracle
        </title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet">
        <link href="../css/main.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="../css/default.css" rel="stylesheet" type="text/css">
        <link href="../css/component.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="./css1/default1.css" />
		<link rel="stylesheet" type="text/css" href="./css1/component1.css" />
        <script src="js/modernizr.custom.js"></script><!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="../images/favicon.ico" rel="shortcut icon">
        
<style>
     /* entire container, keeps perspective */
.flip-container {
	perspective: 1000;
}
	/* flip the pane when hovered */
	.flip-container.hover .flipper {
		transform: rotateY(180deg);
	}
    



/* flip speed goes here */
.flipper {
	transition: 0.6s;
	transform-style: preserve-3d;

	position: relative;
}

/* hide back of pane during swap */
.front, .back {
	backface-visibility: hidden;

	position: absolute;
	top: 0;
	left: 0;
}

/* front pane, placed above back */
.front {

	/* for firefox 31 */
	transform: rotateY(0deg);
}

/* back, initially hidden pane */
 .back {
	transform: rotateY(180deg);
  

}
.container{
	max-width:2000px; !imporatant;
	
}

 </style>
 
        </style>
    </head><!--/head-->
    <?php include '../header.php';?>
    <body>
        <section class="container">
           
            <!--modal-->
            
            
		<!-- All modals added here for the demo. You would of course just have one, dynamically created -->
	
		<div class="md-modal md-effect-17 " id="modal-17">
			<div class="md-content">
				    <div class="flip-container" ontouchstart="this.classList.toggle('active');" id="flip-toggle">
                    <div class="flipper">
                      <div class="front" id="prevDiv">
                       <!-- front content -->
                        <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                           </button>
                            <h3 class="modal-title" id="memberModalLabel">
                              <strong>Enhanced EDI Transaction Visibility with Miracle's Supply Chain Visibility Portal</strong>
                             </h3>
                            </div>
                              <div class="modal-body">
                            
                              <p class="methodText greyText">
                                Increased visibility into your Supply Chain is a critical strategy for any enterprise aiming at increasing efficiency and optimizing costs. The importance of visibility into your transactional flows only increases when you have global supply chain networks with increasing trading partner numbers. Miracle's Supply Chain Visibility Portal provides complete visibility into your Order-to-Cash and Procure-to-Pay cycles. Through the various roles and modules available in the portal, you can use meaningful and enriched transactional data to track and trace the exchange of your EDI documents. 
                                </p>
                                 <p class="methodText greyText">
                                   As our B2Bi and MFT experts give able guidance on how our Supply Chain Visibility Portal can help Global Enterprises gain critical visibility and control of their EDI Transactions. A live demo, architectural discussions followed by some great success stories make this a session that you do not want to miss. 
                                   </p>
                                                                          
                                      </div>
                                       <div class="modal-footer">
                                     <div class="row">
                                      <div class="col-sm-6"></div>
                                      <div class="col-sm-6"> <button class="btn btn-primary col-sm-12" onclick="document.querySelector('#flip-toggle').classList.toggle('hover');">Download </button></div>
                                       </div>
                                      </div>
                                       </div>
                                        <div class="back" id="formDiv">
                                         <!-- back content -->
                                                                            
                                            <div class="modal-header">
                                            <h3 class="modal-title" id="memberModalLabel">
                                             <strong>Sign Up For Download</strong>
                                              </h3>
                                              
                                                </div>
                                             <div class="modal-body noMargin">
                                              <form>
                                                                                               
                                               <div class="row">
                                               <div class="col-sm-6">
                                                <div class="form-group">
                                                <input class="form-control" style="width: 245px;" id="firstname" name="firstname" placeholder="First Name*" required="required" type="text">
                                                 </div>
                                                </div>
                                                  <div class="col-sm-6">
                                                  <div class="form-group">
                                                   <input class="form-control" style="width: 245px;" placeholder="Last Name*" required="required" type="text">
                                                  </div>
                                                   </div>
                                                   </div>
                                                   <div class="row">
                                                     <div class="col-sm-6">
                                                    <div class="form-group">
                                                      <input class="form-control" style="width: 245px;" placeholder="Organization*" required="required" type="text">
                                                     </div>
                                                       </div>
                                                        <div class="col-sm-6">
                                                         <div class="form-group">
                                                           <input class="form-control" style="width: 245px;" placeholder="Designation*" required="required" type="text">
                                                          </div>
                                                           </div>
                                                            </div>
                                                           <div class="row">
                                                               <div class="col-sm-6">
                                                                  <div class="form-group">
                                                                       <input class="form-control" style="width: 245px;" placeholder="Email*" required="required" type="text">
                                                                          </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                       <div class="form-group">
                                                             <input class="form-control" style="width: 245px;" placeholder="Work Phone*" required="required" type="text">
                                                                </div>
                                                                  </div>
                                                                    </div>
                                                                    <!--copy 1 from contact first row ends-->
                                                                <div class="row">
                                                         <div class="col-sm-12">
                                                               <div class="form-group">
                                                                 <input type="button" class="btn btn-primary col-sm-12" id="btnSubmit" name="btnSubmit" tabindex="12" type="submit" value="Submit">
                                                                   </div>
                                                                     </div>
                                                                      </div>
                                                                       <p class="methodText greyText">
                                                                             The given information will not be used or be distributed to any sources and will be used only for User Authentication. Miracle has copyrights and is authorized to use and circulate all the resources which are being provided to you.
                                                                        </p>
                                                                        </form>
                                                                        </div>
                                                                        <hr>
                                                                       <div class="row">
                                                                         <div class="col-sm-4">
                                                                           <button class="btn btn-primary btn-lg" onclick="document.querySelector('#flip-toggle').classList.toggle('hover');">
                                                                               <span> <i class="fa fa-arrow-left"></i> </span>
                                                                                 Return
                                                                            </button>
                                                                                	</div>
                                                                              <div class="col-sm-4"></div>
                                                                              <div class="col-sm-4"></div>
                                                                                </div>
                                                                                </div>
                                                                                     </div>
                                                                                   </div>
			</div>
		</div>
		
	
			<!-- Top Navigation -->
			
			
		<div class="main clearfix">
				
				<div  role="main" class="ui-content" >
				
                              
					<button class="md-trigger md-setperspective" id="modalTrigger" style="display: none" data-modal="modal-17"> <a href="#"  class="ui-btn ui-btn-b ui-btn-icon-left ui-icon-info ui-corner-all" id="foo">Read More</a></button>
					
			</div>
		</div><!-- /container -->
	<!-- the overlay element -->
	

		<!-- classie.js by @desandro: https://github.com/desandro/classie -->
		<script src="./js/classie.js"></script>
		<script src="./js/modalEffects.js"></script>

		<!-- for the blur effect -->
		<!-- by @derSchepp https://github.com/Schepp/CSS-Filters-Polyfill -->
		<script>
			// this is important for IEs
			var polyfilter_scriptpath = '/js/';
		</script>
		<script src="./js/cssParser.js"></script>
		<script src="./js/css-filters-polyfill.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
                <script type="text/javascript">
      $(window).load(function(){
           jQuery('#modalTrigger').click();
          
    });
   </script>
            
            
            <!--modal-->
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-5 text-left">
                    <h1>
                       <strong>Edge Security for Multi-Enterprise Data Exchanges</strong> using IBM Sterling Secure Proxy
                    </h1>
                </div>
                <div class="col-sm-5 text-right">
                    <ul class="breadcrumb pull-right">
                        <li>
                            <a href="../">Home</a>
                        </li>
                        <li>
                            <a href="index.php">Library</a>
                        </li>
                        <li class="active">SSP Product Brief
                        </li>
                    </ul>
                </div>
                <div class="col-sm-1"></div>
            </div>
            
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                   <hr>
                   <h5 class="heavy noMargin">Edge Security!!</h5>
                   <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                    <p class="methodText">As global business become more and more interconnected, traditional organization boundaries are being redefined and the exchange of data across these boundaries is increasing rapidly. With such openness being created, a malicious “denial-of-service” (or) “man-in-the-middle” attack could cause terrible damage to your organization and in turn erode the trust of your partner network. We’ve found in our experience that internal networks and legacy systems are more than often vulnerable due to insufficient file transfer security measures. </p>
                </div>
                <div class="col-sm-1"></div>
            </div>
              <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                 <h5 class="heavy noMargin">IBM Sterling Secure Proxy</h5>
                   <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                   
                    <p class="methodText">IBM Sterling Secure Proxy is an application-based proxy that protects your internal network from malicious attacks that may negatively impact your business processes, both internally and externally with your trading partners. With IBM SSP, partner connections are intercepted at the edge and once authenticated are transparently redirected to trusted connections within your enterprise. </p>
                    <p class="methodText">Nowadays security experts are turning to Proxy Server based approaches to ensure that internal systems can authenticate requests, terminate sessions and encrypt data and systems. This is exactly what IBM Sterling Secure Proxy provides for your global enterprise. </p>
                </div>
                <div class="col-sm-1"></div>
            </div>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                 <center><img width ="100%" src="../images/library/ssp-architecture.png" alt="SSP-Architecture" title="SSP Architecture"></center>
                 <div class="col-sm-1"></div>
                 </div>
            </div>
             <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                 <h5 class="heavy noMargin">Why Choose IBM SSP?</h5>
                   <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                   
                    <p class="methodText">IBM Sterling Secure Proxy offers a unique solution to your data exchange security problems, which is both simple and powerful. With SSP you can enable the Internet with perimeter security for securely transferring data instead of using dedicated lines. </p>
                    <p class="methodText"><strong>The IBM Sterling Secure Proxy Solution offers,</strong></p> 
                    <div class="col-sm-1"></div>
                    </div>
                    </div>
                     <div class="row">
                          <div class="col-sm-1"></div>
                     <div class="col-sm-5">
                    <ul>
                        <li>Access Authentication for restricting unauthorized access</li>
                        <li>Supports Single-On for integration into your enterprise architecture</li>
                        <li>Provides enhanced Edge Security with a Defense-In-Depth strategy</li>
                    </ul>
                </div>
                <div class="col-sm-5">
                <ul>
                       <li>Rapid Trading Partner On-Boarding with Self-Service Management</li>
                        <li>High Scalability in clustered models</li>
                        <li>Secure Internet-based data exchange with your trading partners</li>
               </ul>
              </div>
                <div class="col-sm-1"></div>
           </div>
                        
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-5">
                        <h6 class="heavy noMargin">Firewall Navigation Best Practices</h6>
                        <div class="row">
                            <div class="col-sm-3">
                                <hr>
                            </div><!-- This is the divider line between the heading and the content -->
                        </div>
                        <ul>
                            <li>Prevents inbound holes in the firewall</li>
                            <li>Restricts storage of files, data and credentials in the DMZ to prevent rich targets</li>
                            <li>Enforces external and internal security policies</li>
                            <li>Establishes sessions from more-trusted to less-trusted zones</li>
                        </ul>
                        <h6 class="heavy noMargin">Application Proxy</h6>
                        <div class="row">
                            <div class="col-sm-3">
                                <hr>
                            </div><!-- This is the divider line between the heading and the content -->
                        </div>
                   
                       <ul>
                            <li>Resides in demilitarized zone for providing Edge Security</li>
                            <li>Supports IBM Sterling Connect:Direct, IBM Sterling Connect Express, IBM Sterling B2B Integrator and IBM Sterling File Gateway</li>
                            <li>Compatibility with multiple DMZs (or) Layered architecture</li>
                            <li>Supports FTP, FTPS, HTTP, SSH/SFTP, PeSIT and Sterling Connect:Direct Protocols</li>
                            <li>Ability to use FIPS 140-2 compliant data encryption module</li>
                        </ul>
                        <h6 class="heavy noMargin">Clustering and Scalability</h6>
                        <div class="row">
                            <div class="col-sm-3">
                                <hr>
                            </div><!-- This is the divider line between the heading and the content -->
                        </div>
                        <ul>
                            <li>Central Configuration Manager for managing and scaling multiple engines running in the DMZ</li>
                            <li>High Availability and Load Balancing with clustering provides operational continuity</li>
                        </ul>
                    </div>
                    <div class="col-sm-5">
                       <h6 class="heavy noMargin">Perimeter Security</h6>
                       <div class="row">
                            <div class="col-sm-3">
                                <hr>
                            </div><!-- This is the divider line between the heading and the content -->
                       </div>
                       <ul>
                            <li>Prevents direct communications between external and internal sessions by establishing secure sessions breaks in the DMZ using SSL (or) TSL</li>
                            <li>Enables configurable error handling for violations through protocol inspection</li>
                            <li>Provides protection against DoS attacks with sessions limits and data encryption</li>
                        </ul> 
                        <h6 class="heavy noMargin">Authentication Services</h6>
                        <div class="row">
                            <div class="col-sm-3">
                                <hr>
                            </div><!-- This is the divider line between the heading and the content -->
                        </div>
                        <ul>
                            <li>Customizable portal enables trading partners to self-service password management</li>
                            <li>Easy integration with existing security infrastructure including Active Directory and Tivoli Databases</li>
                            <li>Supports Single-Sign On which enables integration with existing enterprise architecture</li>
                            <li>Multi-factor authentication provides strict control and authentication before being passed on to trusted zone</li>
                            <li>Ability to authenticate based on User Credentials, IP Address, Digital Certificates, SSH Keys and RSA SecureID</li>   
                        </ul>
                    </div>
                    <div class="col-sm-1"></div>
                </div>        
                <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                    <p class="methodText" style="font-style: italic">
                        Eswar Toleti<br>
                        Practice Manager - MFT and B2B Integration<br>
                        Miracle Software Systems, Inc.
                    </p>
                    <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div><a href="#"><button class="btn btn-primary btn-md" type="button">Download Product Brief</button></a><br>
                    <br>
                    <hr>
                    <!--Disqus-->
            <div id="disqus_thread">
          </div>
          <script type="text/javascript">
            /* * * CONFIGURATION VARIABLES * * */
            var disqus_shortname = 'team-mss';
            
            /* * * DON'T EDIT BELOW THIS LINE * * */
            (function() {
              var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
              dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
              (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
            })();
          </script>
          
          <noscript>
            Please enable JavaScript to view the 
            <a href="https://disqus.com/?ref_noscript" rel="nofollow">
              comments powered by Disqus.
            </a>
          </noscript>
            <!--Disqus-->
                </div>
                <div class="col-sm-1"></div>
            </div>
        
        
        </section><?php include '../footer.php';?>
    </body>
</html>