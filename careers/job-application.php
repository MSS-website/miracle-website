<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="description">
        <meta content="" name="author">
        <title>
            Apply Job | Miracle
        </title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet">
        <link href="../css/main.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="../css/default.css" rel="stylesheet" type="text/css">
        <link href="../css/component.css" rel="stylesheet" type="text/css">
        <script src="../js/modernizr.custom.js"></script>
        <script src="../js/fileinput.js"></script>
        <script src="../js/custom.js" type="text/javascript"></script>
        <script src="../js/Validation.js" type="text/javascript"></script><!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
        <link href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css" rel="stylesheet">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
        <link href="/resources/demos/style.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="../images/favicon.ico" rel="shortcut icon">
        <link rel="script">
    </head><!--/head-->
    <?php include '../header.php';?>
    <body>
        <section class="container">
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-sm-7 text-left">
                    <h1 class="heavy"><!-- Job Title Goes Here -->
                        Sr. MB Developer
                    </h1>
                </div>
                <div class="col-sm-5 text-right">
                    <ul class="breadcrumb pull-right">
                        <li>
                            <a href="../">Home</a>
                        </li>
                        <li>
                            <a href="../careers">Careers</a>
                        </li>
                        <li>
                            <a href="open-positions.php">Oppurtunities</a>
                        </li>
                        <li class="active">Job Application
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-5">
                   <p class="greyText heavy">Development | 6-8 Years of Experience</p><!-- Department Name | Experience Required-->
                   <div class="row noMarginTop noMarginBottom">
                        <div class="col-sm-5 noMarginBottom"><hr class="noMargin"></div>
                        <div class="col-sm-7"></div>
                   </div>
                   <p class="methodText">Looking for a Sr. MB Developer with 6-8 years of experience deploying, configuring and developing Integration Servers. Knowledge and experience with IBM IIB is an added advantage. Require a capable and responsible person who can lead the team, document reports and interact with the customer. Strong expertise with Web Services, XML, SOA Governance and SDLC is also very important for the job role. Job will include managing team members, reviewing project performance, and taking steps to improve the overall process.<br><br> Knowledge and experience with IBM IIB is an added advantage. Require a capable and responsible person who can lead the team, document reports and interact with the customer. Strong expertise with Web Services, XML, SOA Governance and SDLC is also very important for the job role. </p><!-- Job Description -->
                   <p class="greyText heavy">Minneapolis USA | Permanent Hire</p>
                   <p class="greyText"><i>March 22nd, 2015</i></p>
                   <!-- Location Details | Position Type-->
                   <!-- Job Post Date -->
                </div>
                <div class="col-sm-7">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="heavy">Applicant Details</h3>
                            
                            <p class="methodText">
                               Please enter your contact information
                            </p>
                        </div>
                    </div>
                    <form action="#" enctype="multipart/form-data" id="myForm" method="post" name="myForm">
                        <input id="jobId" name="jobId" type="hidden" value=""> <input id="country" name="country" type="hidden" value=""> <input id="jobPosition" name="jobPosition" type="hidden" value="">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input class="form-control" id="firstname" name="firstname" onchange="fieldLengthValidator(this);" placeholder="First Name" required="required" tabindex="1" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="phone" name="phone" onblur="return validatenumber(this)" onchange="return formatPhone(this);" placeholder="Phone" required="required" tabindex="4" type="text">
                                </div>
                                
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input class="form-control" id="lastname" name="lastname" onchange="fieldLengthValidator(this);" placeholder="Last Name" required="required" tabindex="2" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" onchange="return checkEmail(this);fieldLengthValidator(this);" placeholder="Email ID" required="required" tabindex="6" type="text">
                                </div>
                                 
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input class="form-control" id="middlename" name="middlename" onchange="fieldLengthValidator(this);" placeholder="Middle Name" required="required" tabindex="3" type="text">
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn"><span class="btn btn-danger btn-file">Resume<input id="fileToUpload" multiple name="fileToUpload" onchange="putFileName()" required="required" tabindex="6" type="file"></span></span> <input class="form-control" id="fileDestination" name="fileDestination" placeholder="Upload" readonly required="required" type="text">
                                </div>
                                
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="heavy">Professional Experience</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input class="form-control" id="educational background" name="educational background" onblur="return validatenumber(this)" onchange="return formatPhone(this);" placeholder="Educational Background" required="required" tabindex="4" type="text">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input class="form-control" id="current organization" name="current organization" onchange="return checkEmail(this);fieldLengthValidator(this);" placeholder="Current Organization" required="required" tabindex="6" type="text">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input class="form-control" id="experience" name="experience" onchange="fieldLengthValidator(this);" placeholder="Experience" required="required" tabindex="3" type="text">
                                </div>
                            </div>
                        </div>
                        
                        <hr>
                        
                        
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="heavy">Current Work Location</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input class="form-control" id="cCity" name="cCity" onchange="fieldLengthValidator(this);" placeholder="City" required="required" tabindex="10" type="text">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input class="form-control" id="currentState" name="currentState" onchange="fieldLengthValidator(this);" placeholder="State" required="required" tabindex="11" type="text">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input class="form-control" id="currentZipcode" name="currentZipcode" onchange="fieldLengthValidator(this);" onkeypress="return isNumberKey(event)" placeholder="Zip Code" required="required" tabindex="12" type="text">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="modal fade" id="myModal" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <strong></strong>
                                                
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-danger" data-dismiss="modal" type="button">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div><button class="btn btn-primary" id="btnJobSubmit" name="btnJobSubmit" tabindex="13" type="submit">Submit Application</button>
                            </div>
                        </div>
                    </form>
                   
                </div>
            </div><br>
        </section><?php include '../footer.php';?>
    </body>
</html>