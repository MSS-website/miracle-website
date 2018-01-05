<!-- 
/* ******************************************************************************
*
* Project : The Digital Valley Summit V1
*
* Date    : October10,2016
*
* Author  : Corporate Applicaiton Support Team<hubble@miraclesoft.com>
*
* File    : Index.php
*
* Copyright 2016 Miracle Software Systems, Inc. All rights reserved.
* MIRACLE SOFTWARE PROPRIETARY/CONFIDENTIAL. Use is subject to license terms.
*
* *****************************************************************************
*/
-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport"    content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author"      content="Shankar">
        <meta content="miraclesoft, education,  industry,  IT,industries, " name="keywords"/>
        <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="" type="image/x-icon">
        <title>Digital Valley Summit</title>

      
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3./includes/cssfont-awesome.min.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <link rel="stylesheet" href="./includes/css/selectivity-full.css">
        <script type="text/javascript" src="./includes/js/selectivity-full.min.js"></script>
        
        <?php include './context.php'; ?>
       
<?php 
require '../config/ConnectionProvider.php';

function random_string($length) {
    $key = '';
    $keys = array_merge(range(0, 9), range('a', 'z'));

    for ($i = 0; $i < $length; $i++) {
        $key .= $keys[array_rand($keys)];
    }

    return $key;
}

 $sql = "INSERT INTO tblConfApplicant (FirstName,LastName,MiddleName,Email,MobileNumber,ResumePath,SkillSet,Comments,RandomKey,FileName,ApplyingFor) 
            VALUES(:tempFirstName,:tempLastName,:tempMiddleName,:tempEmail,:tempMobileNumber,:tempResumePath,:tempSkillSet,:tempComments,:tempRandomKey,:tempFileName,:tempApplyingFor)";
        $stmt = $conn->prepare($sql);
        $resultMessage = '';
        $consultantId = 0;
        $isSubmitted = false;
        if (isset($_POST['btnSubmit'])) {
            $isSubmitted = true;
            try {

                
                
                
                $tempFirstName = isset($_POST["fname"]) ? $_POST["fname"] : '';
                $tempLastName = isset($_POST["lname"]) ? $_POST["lname"] : '';
                $tempMiddleName = isset($_POST["mname"]) ? $_POST["mname"] : '';
                $tempEmail = isset($_POST["email"]) ? $_POST["email"] : '';
                $tempMobileNumber = isset($_POST["mobileNo"]) ? $_POST["mobileNo"] : '';
                $tempFileToUpload = isset($_POST["fileToUpload"]) ? $_POST["fileToUpload"] : '';
                $tempSkillSet = isset($_POST["skillSet"]) ? $_POST["skillSet"] : '';
                $tempComments = isset($_POST["comments"]) ? $_POST["comments"] : '';
                $tempApplyingFor = isset($_POST["applyingFor"]) ? $_POST["applyingFor"] : '';
                //tempApplyingFor

                $fileref = $_FILES['fileToUpload'];
                $upload_Path = APPLICANT_ATTACHMENT_LOCATION.date('Y').'/'.date('F').'/'.date("d")."/"; 
                
                  if (!file_exists($upload_Path)) {
    if (!mkdir($upload_Path, 0777, true)) {
    die('Failed to create folders...');
}
} 

$rootPath = $upload_Path.$fileref['name'];
    $filname = $fileref['name'];
   
$randomKey = random_string(8);

                require '../classes/FileUploadUtility.php';
                $fileUpload = new FileUploadUtility();
                
                if($fileUpload->fileMove($fileref,$upload_Path)){
                
                $stmt->bindParam(':tempFirstName', $tempFirstName);
                $stmt->bindParam(':tempLastName', $tempLastName);
                $stmt->bindParam(':tempMiddleName', $tempMiddleName);
                $stmt->bindParam(':tempEmail', $tempEmail);
                $stmt->bindParam(':tempMobileNumber', $tempMobileNumber);
                $stmt->bindParam(':tempResumePath', $rootPath);
                $stmt->bindParam(':tempSkillSet', $tempSkillSet);
                $stmt->bindParam(':tempComments', $tempComments);
                $stmt->bindParam(':tempRandomKey', $randomKey);
                $stmt->bindParam(':tempFileName', $filname);
                $stmt->bindParam(':tempApplyingFor', $tempApplyingFor);
                
                if (!$stmt->execute()) {
                    $resultMessage = "Opps!Something went wrong.Please try later!";
                } else {
                    $consultantId = $conn->lastInsertId();
                    $resultMessage = "Thank you for showing intrest on Digital Valley Summit .";
                    
                    //$eflag=CONF_EMAILFLAG;
                //if($eflag==1){
                //require 'classes/ConfMailManager.php';
             //  $mailmanager = new ConfMailManager();
             
              // $mailmanager->sendConfRegistraintsDetails($tempFirstName, $tempLastName,$tempEmail,$tempMobileNumber,$tempTitle,$tempAttendeeType,$tempCity,$tempState,$tempAreasOfInterest,$tempComments); 
               //$mailmanager->sendConfRegistraintsAcknowledgement($tempFirstName,$tempLastName,$tempEmail);
              // }
                }  
                }else {
                     $resultMessage = "Oops!Unable to upload attachment.Please try again!";
                }
                
            } catch (Exception $exc) {

                $exc->getMessage();
                $resultMessage = $exc;

                //header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
            }
        }





?>

        <style>
            .home >  .jumbotron {
                background-color: #00a79b !important;
                color: inherit;
                margin-bottom: 0;
                padding-bottom: 10px;
                padding-top: 10px;
            }
            .jumbotron-sm { padding-top: 24px;
                            padding-bottom: 24px; }
           
            .h1 small {
                font-size: 24px;

            }


            .location_map{
                font-size: 16px;
                padding: 22px 0;
            }

            body{padding-top:20px}

            .pricing-table .plan {
                margin-left:0px;
                border-radius: 5px;

                background-color: #f3f3f3;
                -moz-box-shadow: 0 0 6px 2px #b0b2ab;
                -webkit-box-shadow: 0 0 6px 2px #b0b2ab;
                box-shadow: 0 0 6px 2px #b0b2ab;
                margin:47px;
            }

            /* .plan:hover {
              background-color: #fff;
              -moz-box-shadow: 0 0 12px 3px #b0b2ab;
              -webkit-box-shadow: 0 0 12px 3px #b0b2ab;
              box-shadow: 0 0 12px 3px #b0b2ab;
            }
            */


            .m-t-10 {
                margin-top: 10px;
            }

            .panel-primary > .panel-heading {
                background-color: #5fbae9;
                border-color: #5fbae9;
                color: #fff;
            }

            .location_map .h1 {
                font-size: 43px !important;
            }
        </style>
        <script type="text/javascript" src="includes/js/ConfScripts.js"></script>
    </head>
    <?php include './header.php'; ?>
    <body class="home">

       <div class="jumbotron jumbotron-sm">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-12">
                        
                            
                           <div class="location_map col-sm-6">
                            <h2>
                              Digital Job Fair<br>
                            <small style="color:#fff"> Apply now! </small>
                            </h2>
                        </div>
                        <div class="location_map col-sm-6">  <i  aria-hidden="true" class="fa fa-pencil-square-o fa-4x pull-right"></i></div>
 
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="container">
                <div class="gap" style="line-height: 50px; height: 50px;"></div>
                
                
                 <div class="row">
                            <div class="col-sm-12">
                                <?php
                                if ($isSubmitted) {

                                    if ($consultantId > 0) {
                                        ?>  

                                        <div class="alert alert-success" id="success">
                                            
                                            <a href="javascript:closeSuccessDiv(success)" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            <strong>Success!</strong> Thank you for showing interest to participate in Digital Job fair.
                                        </div>
                                    <?php } else { ?>

                                        <div class="alert alert-danger" id="danger">
                                            <a href="javascript:closeSuccessDiv(danger)" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            <strong>Exception!</strong> Opps!Something went wrong.Please try later.
                                        </div> 

                                    <?php
                                    }
                                }
                                ?>        

                            </div>
                        </div>
                
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">Applicant Details</div>
                            <div class="panel-body">
                                  <div class="row">
                                    <div class="col-sm-12"> 
                                        <div class="alert alert-danger" style="display:none" id="errorMsgDiv">
                                            <button type="button" class="close" onclick="closeErrorMsg()" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <strong><span id="resultMessage">Invalid details!!</span></strong> 
                                        </div>                        
                                    </div>
                                </div>
                                <form role="form" method="post" action="" accept-charset="UTF-8" enctype='multipart/form-data'>
                                    <div class="col-sm-4">
                                        <label for="fname">First Name</label>
                                        <input type="text" id="fname" class="form-control" name="fname" placeholder="Example: John" required="true" onchange="fieldLengthValidator(this);">
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="lname">Last Name</label>
                                        <input type="text" id="lname" class="form-control" name="lname" placeholder="Example: Smith" required="true" onchange="fieldLengthValidator(this);">
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="lname">Middle Name</label>
                                        <input type="text" id="mname" class="form-control" name="mname" placeholder="Example: Smith" required="true" onchange="fieldLengthValidator(this);">
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="email" >Email Address</label>
                                        <input type="text" id="email" class="form-control" name="email" placeholder="Example: john.smith@gmail.com" required="true" onchange="return checkEmail(this);fieldLengthValidator(this);">
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="mobileNo">Mobile No :</label>
                                        <input type="text" id="mobileNo" class="form-control" name="mobileNo" placeholder="Mobile Number" required="true" onchange="return formatPhone(this);">
                                    </div>
                                    <div class="col-sm-4">
                                       
                                            <label for="Resume" >Resume :</label>
                                            <input type="file" name="fileToUpload" id="fileToUpload" required="required" class="form-control" onchange="resumeCheck(this);">
                               
                                    </div>
                                       <div class="col-sm-4">
                                        <label for="mobileNo">Applying For :</label>
                                        <select class="form-control" name="applyingFor" id="applyingFor" required="required">
                                            <option value="">Select Position</option>
                                             <?php  
                  
               $query = "SELECT Description FROM tblConfPositions WHERE STATUS='Active'";
             // $result = mysql_query($query) or die(mysql_error());
$stmt = $conn->prepare($query);
             $stmt->execute();
                 $stmt->setFetchMode(PDO::FETCH_ASSOC);
          
                     while ($row = $stmt->fetch()) {
          //  while ($row=mysql_fetch_array($result)) {

            $dDescription=$row['Description'];
             

            
                 echo "<option value=\"$dDescription\">$dDescription</option>";
                     }
            
            //}
          
    ?> 
                                        </select>
                                        
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="mobileNo" >Skill Set :</label>
                                        <input type="text" id="skillSet" class="form-control" name="skillSet" placeholder="Example:J2Se,J2EE,HTML,Jquery,AngularJs,NodeJs" required="true" onchange="fieldLengthValidator(this);">
                                         
                                    </div>
                                   

                                    <div class="col-sm-12" >
                                        <label for="comments">Comments</label>
                                        <textarea placeholder="Enter Comments Here.." rows="3" class="form-control" id="comments" name="comments" onchange="fieldLengthValidator(this);"></textarea>
                                    </div>


                                    <div class="col-sm-12">
                                        <center><input type="submit" class="btn btn-primary m-t-10" id="btnSubmit" name="btnSubmit" value="Submit"></center>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div style="clear:both;" class="clearfix"></div>

        <!-- /Header -->

        <!-- Intro -->

        <div class="clearfix"></div>




        <div class="clearfix"></div>
        <!--mainwrapper start-->




        <!-- Social links. @TODO: replace by link/instructions in template -->
        <section id="social">
            <div class="container">
                <div class="wrapper clearfix">
                    <!-- AddThis Button BEGIN -->
                    <div class="addthis_toolbox addthis_default_style">
                        <a class="addthis_button_facebook_like" ></a>
                        <a class="addthis_button_tweet"></a>
                        <a class="addthis_button_linkedin_counter"></a>
                        <a class="addthis_button_google_plusone" ></a>
                    </div>
                    <!-- AddThis Button END -->
                </div>
            </div>
        </section>
        <!-- /social links -->
        <div class="uparrow" id="uparrow"><i class="fa fa-3x fa-angle-up" aria-hidden="true"></i></div>



        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>



        <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.4/waypoints.min.js"></script>




        <script>
            $(document).ready(function () {
               

              
                // fade in and fade out
                $(function () {
                    $(window).scroll(function () {
                        if ($(this).scrollTop() > 50) {
                            $('#uparrow').fadeIn();
                        } else {
                            $('#uparrow').fadeOut();
                        }
                    });

                    // scroll body to 0px on click
                    $('#uparrow').click(function () {
                        $('body,html').animate({
                            scrollTop: 0
                        }, 800);
                        return false;
                    });
                });

            });
        </script>
        <?php include './footer.php'; ?>
    </body>
</html>
