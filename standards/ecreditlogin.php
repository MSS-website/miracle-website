<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="description">
        <meta content="" name="author">
        <title>
            Happy New Year | Miracle
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
         
            <style type="text/css">
                .tinted-image {
         background: 
         /* top, transparent red */
         linear-gradient(
         rgba(0, 0, 0, 0.55), 
         rgba(0, 0, 0, 0.55)
         ),
         /* your image */
         url("holiday.jpg");
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
         height:150px;
         }
         .breadcrumb {margin:0px !important;}
.breadcrumb li,.breadcrumb li a{color:#FFF !important;
    
}
.btn{
    font-size:16px !important;
}

            </style>
        <section class="">
            <br>
            <br>
            <br>
            
           
            
               
                <div class="emerald tinted-image">
                    <div class="container">
                <div class="row">
                <br><br>
                <div class="col-sm-6 text-left">
                    <h1 class="heavy">
                             Happy New Year Team Miracle!
                    </h1>
                </div>
                <br>
                <div class="col-sm-6 text-right">
                    <ul class="breadcrumb pull-right">
                        <li>
                            <a href="../">Home</a>
                        </li>
                        <li class="active">HNY Team Miracle
                        </li>
                    </ul>
                </div>
                
            </div>
            </div>
            </div>
            </section>
            <div class="container">
            <div class="row">
              
             <div class="col-sm-7">
                <p class="methodText"><br>
                    <strong>A new year and a new beginning!</strong> We made a great start to 2017, and had an awesome 2016 – at this moment we’d like to take the time to thank you for your efforts and passion. Team Miracle is at its strongest because of all us working together, and we will continue to rise in the new year. 
                </p>
                <p class="methodText">
                    As a token of appreciation we would like to offer you an eCredit voucher that you can use for friends and family. Just go ahead, sign in with your Hubble credentials and go ahead and download the coupon. For more information regarding the gift (or) if you have any issues please feel free to reach out <a class="linkText" href="mailto:marketing@miraclesoft.com"><strong style="text-decoration: none">marketing@miraclesoft.com</strong></a> and we would be delighted to help you out. 
                </p>
                        
                
                <p class="greyText"></p>
             </div>
             <div class="col-sm-5"><br>
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
                                 </div>
                                 
                                     <div class="col-sm-6">
                                        <p class="methodText pull-left"  style="margin-top:6px"><a href="../forgot-password.php" class="linkText"> Forgot password!</a></p>
                                     </div>
                                   
                                        <div class="col-sm-6">
                                             <button type="submit" tabindex="3" class="btn btn-sm btn-primary pull-right" name="btnSubmit" id="btnSubmit">
                                    Download eCredit
                                </button>
                                            </div>
                               
                                 <hr>
                                 <div class="col-sm-12">
                                
                               </div>
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
        </div>
        <?php include '../footer.php';?>
    </body>
</html>