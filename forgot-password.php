<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta content="" name="description">
        <meta content="" name="author">
        <title>
            Password Change | Miracle
        </title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="css/default.css" rel="stylesheet" type="text/css">
        <link href="css/component.css" rel="stylesheet" type="text/css">
        <script src="js/menuLoad.js"></script>
        <script src="js/modernizr.custom.js"></script>
        <script src="js/Validation.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script><!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
        <!--[if lte IE 8]>
<div id="warning">
<META http-equiv="refresh" content="0;URL=http://www.miraclesoft.com/outdated-browser.php">
</div>-->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="images/favicon.ico" rel="shortcut icon">
        <link href="images/ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
        <link href="images/ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
        <link href="images/ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
        <link href="images/ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed">
    </head><!--/head-->
    <?php
    include 'config/general.php';
    $resultMessage = '';
    if(isset($_POST['btnSubmit'])){
    try{
         if(! get_magic_quotes_gpc() ){
                $remail = addslashes ($_POST['email']);
                
           }else {
               $remail = $_POST['email'];
               
           }
           
           ini_set('user_agent', "PHP"); // github requires this
          // $api = 'http://localhost:8084/EmployeeService';
           $api =SERVICE_URL;
    $url = $api . '/es/ps/' .$remail;
         $response = file_get_contents($url);
         if(false !== $response) {
             $gists = json_decode($response, true);
              if($gists['message']=='success'){
                  $resultMessage = "<font color=green size=2px>Congrats! We have sent the password to your Official EmailId.</font>";
              }else {
                  $resultMessage = "<font color=red size=2px>".$gists['message']."</font>";
              }
         }else{
             $resultMessage = "<font color=red size=2px>Oops!Please try later.</font>";
         }
           
           
           
    }catch(Exception $exc){
           
        
          $exc->getMessage();
             $resultMessage= '<font color=red size=2px>'.$exc.'</font>';
             header('Location: ../back-end-error.php?resultMessage='.$resultMessage); 
                     
                       
    }
    }


    ?><?php include 'header.php';?>
    <body>
        <section class="container" id="career">
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-5 text-left">
                    <h1 class="heavy">
                        Password Change
                    </h1>
                </div>
                <div class="col-sm-5 text-right">
                    <ul class="breadcrumb pull-right">
                        <li>
                            <a href="../">Home</a>
                        </li>
                        <li class="active">Forgot Password
                        </li>
                    </ul>
                </div>
                <div class="col-sm-1"></div>
            </div>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-6">
                    <p class="methodText">
                        <strong>Forgot your password! Not a problem at all.</strong><br>
                    </p>
                    <p class="methodText">
                        It is very common for someone to forget their password, and this is the most commonly used link on most Account Based Websites. Don't worry as with a simple click you can get back on track with your work. Let us know your email ID and will send a verification link back to you to change your password.
                    </p>
                    <p>
                </div>
                <div class="col-sm-4">
                    <div class="jumbotron">
                        <form action="#" id="referralForm" method="post" name="referralForm">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h5>
                                        <strong>Password Change</strong>
                                    </h5>
                                    <div class="form-group">
                                        <!--  <input type="text" tabindex="1" class="form-control" required="required" placeholder="Email ID" id="email" name="email"onchange="fieldLengthValidator(this);"> -->
                                        <input class="form-control" id="email" name="email" onblur="return valueCheck(this);" onchange="return checkEmail(this);fieldLengthValidator(this);" placeholder="Email ID" required="required" tabindex="1" type="text">
                                    </div><?php echo $resultMessage;?><button class="btn btn-primary" id="btnSubmit" name="btnSubmit" tabindex="3" type="submit">Send Verification Link</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <!-- Alert Modal for Validations - Starts Here -->
                        <div class="col-sm-12">
                            <div class="modal fade" id="myModal" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <strong></strong>
                                            <div id="showAlertText">
                                                <strong></strong>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-danger" data-dismiss="modal" type="button">Close</button>
                                        </div><!-- Modal Footer -->
                                    </div><!-- Modal Content -->
                                </div><!-- Modal Dialog -->
                            </div><!-- Modal Container-->
                        </div>
                    </div><!-- Alert Modal ends here -->
                    <div class="row">
                        <!-- Modal for Forgot Password Starts here -->
                        <div class="col-sm-12">
                            <div class="modal fade" id="pwdModal" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <form action="#" id="forgotPwdForm" name="forgotPwdForm">
                                                <div class="row">
                                                    <div class="col-sm-10">
                                                        <div class="form-group">
                                                            <input class="form-control" id="corporateEmail" name="corporateEmail" onchange="fieldLengthValidator(this);" placeholder="Email" required="required" tabindex="1" type="text">
                                                        </div><button class="btn btn-primary" id="btnSubmit" name="btnSubmit" tabindex="2" type="submit">Submit Username</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-danger" data-dismiss="modal" type="button">Close</button>
                                        </div><!-- Modal Footer -->
                                    </div><!-- Modal Content -->
                                </div><!-- Modal Dialog -->
                            </div><!-- Modal Container-->
                        </div>
                    </div><!-- Forgot Password Modal - Ends Here -->
                </div>
                <div class="col-sm-1"></div>
            </div>
        </section><?php include 'footer.php';?>
    </body>
</html>