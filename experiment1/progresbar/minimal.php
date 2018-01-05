<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="description">
        <meta content="" name="author">
        <title>
            Resource Depot | Miracle
        </title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet">
        <link href="../css/main.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="../css/default.css" rel="stylesheet" type="text/css">
        <link href="../css/component.css" rel="stylesheet" type="text/css">
        <script src="../js/modernizr.custom.js"></script>
        <script src="../js/fileinput.js"></script>
        <script src="../js/custom.js"></script>
        <script type="in/Login"></script>
        <script type="text/javascript" src="//platform.linkedin.com/in.js"></script>
        
        <link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/comp.css" />
        <script src="../js/Validation.js" type="text/javascript"></script><!--[if lt IE 9]>
        
<script src="../js/html5shiv.js"></script>

<script src="../js/respond.min.js"></script>
<![endif]-->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="../images/favicon.ico" rel="shortcut icon">
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
<script>
			var theForm = document.getElementById( 'theForm' );

			new stepsForm( theForm, {
				onSubmit : function( form ) {
					// hide form
					classie.addClass( theForm.querySelector( '.simform-inner' ), 'hide' );

					/*
					form.submit()
					or
					AJAX request (maybe show loading indicator while we don't have an answer..)
					*/

					// let's just simulate something...
					var messageEl = theForm.querySelector( '.final-message' );
					messageEl.innerHTML = 'Thank you! We\'ll be in touch.';
					classie.addClass( messageEl, 'show' );
				}
			} );
		</script>
		<!-- For the demo ad only -->   
<script src="http://tympanus.net/codrops/adpacks/demoad.js"></script>
<script src="../js/classie.js"></script>
		<script src="../js/stepsForm.js"></script>
    </head><?php include '../header.php';?>
    <body>
        <section class="container">
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-5 text-left">
                    <h1 class="heavy">
                        Resource Depot
                    </h1>
                </div>
                <div class="col-sm-5 text-right">
                    <ul class="breadcrumb pull-right">
                        <li>
                            <a href="../">Home</a>
                        </li>
                        <li class="active">Resource Depot
                        </li>
                    </ul>
                </div>
                <div class="col-sm-1"></div>
            </div>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10"><hr class="noMargin"></div>
                <div class="col-sm-1"></div>
            </div>
            <!--contact form copy starts-->
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-6">
                   <h2 class="heavy noMarginTop">Enhanced MFT Visibility and Control with IBM Sterling Control Center</h2>
                       <div class="row noMarginTop">
                            <div class="col-sm-5 noMarginTop">
                                <hr class="noMarginTop noMarginBottom">
                            </div><!-- This is the divider line between the heading and the content -->
                        </div>
                    <p class="greyText heavy">Product Brief | January 26th, 2015</p><!-- Resource Type -->
                    <p class="methodText">
                        Our customer is a financial holding company with investments primarily in companies focused on providing financial services. The migration process required an exhaustive QA and testing process to be put inplace, but lack of expertise, documentation and test case design meant the customer was facing some very big challenges.
                    <p class="methodText">
                       <strong> Some of the challenges for the customer were, </strong>
                    <ul>
                        <li> Various modules and web applications were to be tested</li>
                        <li>Some areas were not adequately tested earlier</li>
                        <li>Documentation was obsolete</li>
                    </ul>
                    </p>
                </div>
                <div class="col-sm-4">
                    <section>
				<form id="theForm" class="simform" autocomplete="off">
					<div class="simform-inner">
						<ol class="questions">
							<li>
								<span><label for="q1">What's your favorite movie?</label></span>
								<input id="q1" name="q1" type="text"/>
							</li>
							<li>
								<span><label for="q2">Where do you live?</label></span>
								<input id="q2" name="q2" type="text"/>
							</li>
							<li>
								<span><label for="q3">What time do you go to work?</label></span>
								<input id="q3" name="q3" type="text"/>
							</li>
							<li>
								<span><label for="q4">How do you like your veggies?</label></span>
								<input id="q4" name="q4" type="text"/>
							</li>
							<li>
								<span><label for="q5">What book inspires you?</label></span>
								<input id="q5" name="q5" type="text"/>
							</li>
							<li>
								<span><label for="q6">What's your profession?</label></span>
								<input id="q6" name="q6" type="text"/>
							</li>
						</ol><!-- /questions -->
						<button class="submit" type="submit">Send answers</button>
						<div class="controls">
							<button class="next"></button>
							<div class="progress"></div>
							<span class="number">
								<span class="number-current"></span>
								<span class="number-total"></span>
							</span>
							<span class="error-message"></span>
						</div><!-- / controls -->
					</div><!-- /simform-inner -->
					<span class="final-message"></span>
				</form><!-- /simform -->			
			</section>
                    <!--third part starts
                    <div class="row">
                     <div class="row">
                           <form>
                        <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" id="firstname" name="firstname" placeholder="First Name*" required="required" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Last Name*" required="required" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Organization*" required="required" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Designation*" required="required" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Email*" required="required" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Work Phone*" required="required" type="text">
                                </div>
                            </div>
                          </div>
                         </form>
                       
                        <hr>
                        <p class="methodText greyText">
                        The given information will not be used or be distributed to any sources and will be used only for User Authentication. Miracle has copyrights and is authorized to use and circulate all the resources which are being provided to you.
                        </p>
                     
           
            </div> -->
            <div class="col-sm-1"></div>
            </div>
            <br>
        </section><!--/#error-->
        <?php include '../footer.php';?>
    </body>
</html>