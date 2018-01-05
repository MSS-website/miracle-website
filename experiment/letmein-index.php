<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Let Me In Modal</title>
		<meta name="description" content="Nifty Modal Window Effects with CSS Transitions and Animations" />
		<meta name="keywords" content="modal, window, overlay, modern, box, css transition, css animation, effect, 3d, perspective" />
		<meta name="author" content="Codrops" />
		
		 <link href="../css/bootstrap.min.css" rel="stylesheet">
         <link href="../css/font-awesome.min.css" rel="stylesheet">
          <link href="../css/main.css" rel="stylesheet">
         <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
          <script src="../js/modernizr.custom.js"></script>
           <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
           <script src="js/respond.min.js"></script>
           <![endif]-->
           <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
           <link rel="shortcut icon" href="../images/favicon.ico">
		
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="./css1/default1.css" />
		<link rel="stylesheet" type="text/css" href="./css1/component1.css" />
		<link rel="stylesheet" type="text/css" href="./css/default.css"/>
         <link rel="stylesheet" type="text/css" href="./css/component.css"/>
		<script src="js/modernizr.custom.js"></script>
		
	<style>
     /* entire container, keeps perspective */
.flip-container {
	perspective: 1000;
}
	/* flip the pane when hovered */
	.flip-container.hover .flipper {
		transform: rotateY(180deg);
	}
    

.flip-container, .front, .back {
	width: 650px;
	height: 650px;
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
 
	</head>
	


	<body>
		<!-- All modals added here for the demo. You would of course just have one, dynamically created -->
		<section class="container">
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
		</section>
	</body>
</html>
