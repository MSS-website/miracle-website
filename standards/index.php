<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="description">
        <meta content="" name="author">
        <title>
            Corporate Standards Library | Miracle
        </title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet">
        <link href="../css/main.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="../css/default.css" rel="stylesheet" type="text/css">
        <link href="../css/component.css" rel="stylesheet" type="text/css">
        <script src="../js/modernizr.custom.js"></script><!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="../images/favicon.ico" rel="shortcut icon">
    </head><!--/head-->
    <?php include '../header.php';?>
    <body>
        <section class="container">
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-6 text-left">
                    <h1 class="heavy">
                        Corporate Standards Library
                    </h1>
                </div>
                <div class="col-sm-4 text-right">
                    <ul class="breadcrumb pull-right">
                        <li>
                            <a href="../">Home</a>
                        </li>
                        <li class="active">Corporate Standards
                        </li>
                    </ul>
                </div>
                <div class="col-sm-1"></div>
            </div>
            <div class="row">
             <div class="col-sm-1"></div>    
             <div class="col-sm-6">
                <p class="methodText">
                    Download our corporate branding packet by entering your Miracle credentials in the form. Once you have been validated as a Miraclite you will be redirected to the Corporate Standards Page for downloading the Corporate Standards Packet (or) individual elements also. The package consists of the following artifacts : 
                </p>
                    <ul>
                        <li>Miracle Corporate Logos(light/dark) : EPS/PNG/JPEG</li>
                        <li>Miracle Corporate Document Template for MS Word : Dark/Light(.dotx)</li>
                        <li>Miracle Corporate Presentation Template for MS PowerPoint : Light(.potx)</li>
                        <li>Miracle Partnership Logos : (IBM/Oracle/SAP/RedHat)</li>
                        <li>Miracle Corporate Standards and Guidelines Document</li>
                    </ul>    
                <p class="greyText methodText">
                    Please use only Miracle approved corporate templates for showcasing ourselves, and do not use the corporate templates for innapropriate uses. 
                </p>
                <p class="greyText"></p>
             </div>
             <div class="col-sm-4">
                <div class="jumbotron">
                   <!-- <form id="referralForm"> -->
                   <form id="referralForm" method="post" action="#">
                        <div class="row">
                            <div class="col-sm-12">
                                <h5 class="heavy">Employee Login</h5>
                                <div class="form-group">
                                    <input type="text" tabindex="1" class="form-control" required="required" placeholder="Login Id" id="loginId" name="loginId"onchange="fieldLengthValidator(this);">
                                </div>
                                <div class="form-group">
                                    <input type="password" tabindex="2" class="form-control" required="required" placeholder="Password" id="password" name="password"onchange="fieldLengthValidator(this);">
                                </div>
                                 <?php echo $resultMessage;?>
                                <button type="submit" tabindex="3" class="btn btn-primary" name="btnSubmit" id="btnSubmit">
                                    I'm Ready! Let's Go. 
                                </button>
                                <hr>
                                <p>Forgot password!<a href="../forgot-password.php" class="linkText"><strong> Click here.</strong></a></p>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row"><!-- Alert Modal for Validations - Starts Here -->
                        <div class="col-sm-12">
                          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-body">
                                  <strong>
                                    <div id="showAlertText">
                                    </div>
                                  </strong>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-danger" data-dismiss="modal">
                                    Close
                                  </button>
                                </div><!-- Modal Footer -->
                              </div><!-- Modal Content -->
                            </div><!-- Modal Dialog -->
                          </div><!-- Modal Container-->
                        </div>
                      </div><!-- Alert Modal ends here -->
             </div>
             <div class="col-sm-1"></div>
         </div>
        </section>
        <?php include '../footer.php';?>
    </body>
</html>