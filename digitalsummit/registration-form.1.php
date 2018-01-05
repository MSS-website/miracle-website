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
        
        <link rel="stylesheet" href="../css/main.css" type="text/css" />
        <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3./includes/cssfont-awesome.min.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="./includes/css/selectivity-full.css">
        <script type="text/javascript" src="./includes/js/selectivity-full.min.js"></script>

<!--        <script type="text/JavaScript" src="./includes/js/jquery.min.js"/></script>-->
<!--    <script type="text/javascript" src="./includes/js/jquery.js"/></script>-->

<style type="text/css">
.btn-sign
{
    padding: 6px 16px !important;
}
    h3{
        color:#0d416b  ;
    }
    .btn {
    padding: 8px 15px !important;
    }
    .navbar-inverse .navbar-nav .dropdown-menu > li > a {
    color: #333; }
    .current_tab1 >a:hover {
    color: #00aae7 !important;
}
.current_tab1:hover{
     background-color: rgba(255, 255, 255, .7); 
     color: #00aae7 !important;
}
</style>


        <?php
        include './context.php';
        //require '../config/ConnectionProvider.php';

        function random_string($length) {
            $key = '';
            $keys = array_merge(range(0, 9), range('a', 'z'));

            for ($i = 0; $i < $length; $i++) {
                $key .= $keys[array_rand($keys)];
            }

            return $key;
        }

       
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
                $tempGraduation = isset($_POST["graduation"]) ? $_POST["graduation"] : '';
                $tempGraduationPercentage = isset($_POST["graduationPer"]) ? $_POST["graduationPer"] : '';
                $tempPostGraduation = isset($_POST["postGraduation"]) ? $_POST["postGraduation"] : '';
                $tempPostGraduationPercentage = isset($_POST["postGraduationPer"]) ? $_POST["postGraduationPer"] : '';
                $tempYearsofExperience = isset($_POST["experience"]) ? $_POST["experience"] : '';
                $tempLastDrawnMonthlySalary = isset($_POST["salary"]) ? $_POST["salary"] : '';
                
                
                $selectQuery = "SELECT Id FROM tblConfApplicant WHERE Email=:remail OR MobileNumber=:rmobile";
                $rowcount=0;
                $stmt = $conn->prepare($selectQuery);
                $stmt->bindParam(':remail', $tempEmail);
                  $stmt->bindParam(':rmobile', $tempMobileNumber);
                  $stmt->execute();
                  $rowcount = $stmt->rowCount();
                  
                //  echo '$rowcount-->'.$rowcount;
                   if ($rowcount > 0) {
                       $resultMessage = "Oops!Your details are already existed in our system.";
                   }else {
                 $sql = "INSERT INTO tblConfApplicant (FirstName,LastName,MiddleName,Email,MobileNumber,ResumePath,SkillSet,Comments,RandomKey,FileName,ApplyingFor,Graduation,GraduationPercentage,PostGraduation,PostGraduationPercentage,YearsofExperience,LastDrawnMonthlySalary) 
            VALUES(:tempFirstName,:tempLastName,:tempMiddleName,:tempEmail,:tempMobileNumber,:tempResumePath,:tempSkillSet,:tempComments,:tempRandomKey,:tempFileName,:tempApplyingFor,:tempGraduation,:tempGraduationPercentage,:tempPostGraduation,:tempPostGraduationPercentage,:tempYearsofExperience,:tempLastDrawnMonthlySalary)";
       
                 $stmt = $conn->prepare($sql);
                

                $fileref = $_FILES['fileToUpload'];
                $upload_Path = APPLICANT_ATTACHMENT_LOCATION . date('Y') . '/' . date('F') . '/' . date("d") . "/";

                if (!file_exists($upload_Path)) {
                    if (!mkdir($upload_Path, 0777, true)) {
                        die('Failed to create folders...');
                    }
                }

                $rootPath = $upload_Path . $fileref['name'];
                $filname = $fileref['name'];

                $randomKey = random_string(8);

                require '../classes/FileUploadUtility.php';
                $fileUpload = new FileUploadUtility();

                if ($fileUpload->fileMove($fileref, $upload_Path)) {

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
                    $stmt->bindParam(':tempGraduation', $tempGraduation);
                    $stmt->bindParam(':tempGraduationPercentage', $tempGraduationPercentage);
                    $stmt->bindParam(':tempPostGraduation', $tempPostGraduation);
                    $stmt->bindParam(':tempPostGraduationPercentage', $tempPostGraduationPercentage);
                    $stmt->bindParam(':tempYearsofExperience', $tempYearsofExperience);
                    $stmt->bindParam(':tempLastDrawnMonthlySalary', $tempLastDrawnMonthlySalary);

                    if (!$stmt->execute()) {
                        $resultMessage = "Opps!Something went wrong.Please try later!";
                    } else {
                        $consultantId = $conn->lastInsertId();
                        $resultMessage = "Thank you for showing interest to participate in Digital Job fair.";

                        $eflag=CONF_EMAILFLAG;
                        if($eflag==1){
                       require 'classes/ConfMailManager.php';
                          $mailmanager = new ConfMailManager();
                         $mailmanager->sendConfApplicantDetails($tempFirstName, $tempLastName,$tempMiddleName, $tempEmail, $tempMobileNumber, $rootPath, $tempSkillSet, $tempComments, $randomKey, $filname, $tempApplyingFor,$tempGraduation,$tempGraduationPercentage,$tempPostGraduation,$tempPostGraduationPercentage,$tempYearsofExperience,$tempLastDrawnMonthlySalary,$consultantId);
                            $mailmanager->sendConfApplicantAcknowledgement($tempFirstName, $tempLastName, $tempEmail);
                         }
                    }
                } else {
                    $resultMessage = "Oops!Unable to upload attachment.Please try again!";
                }
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


            .location_map .h1 {
                font-size: 43px !important;
            }

            .applicant h4{
                border-bottom: 2px solid #00a79b;
                padding: 1% 0;
            }
           .top-space {
   margin-top: 0px !important;
}

.parallax{
    background-image:url('images/jobfairs.jpg');
    background-attachment:fixed;
    background-size:cover;
    background-position:center;
}
 .footer-nav-links a {padding:0 4px !important;min-width:20px !important;}
 #footer ul > li { margin-left: 1px; !important}
        </style>
        <script type="text/javascript" src="includes/js/ConfScripts.js"></script>
        <script type="text/javascript">
            function fun_AllowOnlyAmountAndDot(txt)
            {
              //  alert(txt.value);
                if(event.keyCode > 47 && event.keyCode < 58 || event.keyCode == 46)
                {
                    var txtbx=document.getElementById(txt);
                    var amount = document.getElementById(txt).value;
                    var present=0;
                    var count=0;

                    if(amount.indexOf(".",present)||amount.indexOf(".",present+1));
                    {
                        // alert('0');
                    }
                    do
                    {
                        present=amount.indexOf(".",present);
                        if(present!=-1)
                        {
                            count++;
                            present++;
                        }
                    }
                    while(present!=-1);
                    if(present==-1 && amount.length==0 && event.keyCode == 46)
                    {
                        event.keyCode=0;
                        //alert("Wrong position of decimal point not  allowed !!");
                        return false;
                    }

                    if(count>=1 && event.keyCode == 46)
                    {

                        event.keyCode=0;
                        //alert("Only one decimal point is allowed !!");
                        return false;
                    }
                    if(count==1)
                    {
                        var lastdigits=amount.substring(amount.indexOf(".")+1,amount.length);
                        if(lastdigits.length>=2)
                        {
                            //alert("Two decimal places only allowed");
                            event.keyCode=0;
                            return false;
                        }
                    }
                    return true;
                }
                else
                {
                    event.keyCode=0;
                    //alert("Only Numbers with dot allowed !!");
                    return false;
                }
            }
        </script>

    </head>
    <?php include './header.php'; ?>
    <body class="home">
<section class="parallax">
            <div class="overlay">
            <div class="container">
                 <br><br><br>
            <div class="row">
          <div class="col-sm-8">
            <h1 style="color:#fff"> <strong>MEANHack Registration Form</strong></h1>
          </div>
          <div class="col-sm-4"><br><br>
              <h4 style="color:#fff" class="pull-right">
    <a href="../"><font color="#fff">Home</font></a> / <font color="#fff">
        <strong>MEANHack Registration</strong></font></h4>
          </div>
         
        </div>
            <br><br><br>
            </div></div>
        </section>

       
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <?php
                        if ($isSubmitted) {

                            if ($consultantId > 0) {
                                ?>  

                                <div class="alert alert-success" id="success">

                                    <a href="javascript:closeSuccessDiv(success)" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>Success! </strong> <?php echo $resultMessage ?>
                                </div>
                            <?php } else { ?>

                                <div class="alert alert-danger" id="danger">
                                    <a href="javascript:closeSuccessDiv(danger)" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>Exception! </strong><?php echo $resultMessage ?>
                                </div> 

                                <?php
                            }
                        }
                        ?>        

                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12">
                        
                                <div class="row">
                                    <div class="col-sm-12"> 
                                        <div class="alert alert-danger" style="display:none" id="errorMsgDiv">
                                            <button type="button" class="close" onclick="closeErrorMsg()" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <strong><span id="resultMessage">Invalid details!!</span></strong> 
                                        </div>                        
                                    </div>
                                </div>
                               
                                
                                <form role="form" method="post" action="" accept-charset="UTF-8" enctype='multipart/form-data'>
                                    <div class="row">
                                        <div class="col-sm-12"> <h3 class="heavy">College Details</h3></div>
                                     <div class="col-sm-4">                                            
                                           <input type="text" id="fname" class="form-control" name="fname" placeholder="College Name" required="true" onchange="fieldLengthValidator(this);">

                                        </div>
                                        <div class="col-sm-4">
                                               <input type="text" id="fname" class="form-control" name="fname" placeholder="City" required="true" onchange="fieldLengthValidator(this);">
                                        </div>
                                        <div class="col-sm-4">
                                               <input type="text" id="fname" class="form-control" name="fname" placeholder="State" required="true" onchange="fieldLengthValidator(this);">
                                        </div>
                                       
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-sm-12">  <h3 class="heavy">Personal information</h3></div>
                                        <div class="col-sm-4">
                                            
                                            <input type="text" id="fname" class="form-control" name="fname" placeholder="First Name" required="true" onchange="fieldLengthValidator(this);">
                                        </div>
                                        <div class="col-sm-4">
                                            
                                            <input type="text" id="lname" class="form-control" name="lname" placeholder="Last Name" required="true" onchange="fieldLengthValidator(this);">
                                        </div>
                                        <div class="col-sm-4">
                                            
                                            <input type="text" id="mname" class="form-control" name="mname" placeholder="Branch" required="true" onchange="fieldLengthValidator(this);">
                                        </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                        <div class="col-sm-4">
                                            
                                         <select class="form-control" id="graduation" name="graduation" required="required">
                                                <option value="" selected="selected" disabled="disabled">Year</option>
                                                <option value="B.E/B.Tech">3rd</option>
                                                <option value="B.Sc">4th</option>
                                                
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                            
                                            <input type="text" id="mobileNo" class="form-control" name="mobileNo" placeholder="Mobile Number" required="true" onchange="return formatPhone(this);">
                                        </div> 
                                        <div class="col-sm-4">
                                            
                                            <input type="text" id="mobileNo" class="form-control" name="mobileNo" placeholder="Alternate Phone Number" required="true" onchange="return formatPhone(this);">
                                        </div> 
                                        </div><br>
                                        <div class="row">
                                        <div class="col-sm-4">
                                            
                                            <input type="text" id="mobileNo" class="form-control" name="mobileNo" placeholder="Email ID" required="true" onchange="return formatPhone(this);">
                                        </div> 

                                    </div> 
                                    <div class="row">
                                     <div class="col-sm-12" >
                                            <label for="comments"></label>
                                            <textarea placeholder="Tell us a bit about yourself " rows="3" class="form-control" id="comments" name="comments" onchange="fieldLengthValidator(this);"></textarea>
                                        </div>
                                        </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                              <h3 class="heavy">Team Registration</h3>
                                              <p class="methodText">You will need to select a team of 3 (or) 4 people including yourselves – Please add the remaining team members name in the below form. </p>
                                              </div>
                                        
                                        <div class="col-sm-3">
                                           
                                            <input type="text" id="graduationPer" class="form-control" name="graduationPer" placeholder="Name" required="true"  ondrop="return false;" onpaste="return false;">
                                      
                                        </div>
                                        
                                        <div class="col-sm-3">
                                            
                                            <input type="text" id="graduationPer" class="form-control" name="graduationPer" placeholder="Branch" required="true"  ondrop="return false;" onpaste="return false;">
                                        </div>
                                        
                                        <br>
                                        
                                        <div class="col-sm-3">
                                          <select class="form-control" id="graduation" name="graduation" required="required">
                                                <option value="" selected="selected" disabled="disabled">Year</option>
                                                <option value="B.E/B.Tech">3rd</option>
                                                <option value="B.Sc">4th</option>
                                                
                                            </select>
                                        </div>

                                        <div class="col-sm-3">
                                           
                                            <input type="text" id="postGraduationPer" class="form-control" name="postGraduationPer" placeholder="Email ID"  ondrop="return false;" onpaste="return false;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            
                                            <button type="button" class="btn btn-info">
      <span class="glyphicon glyphicon-plus"></span> 
    </button>
 <button type="button" class="btn btn-info">
      <span class="glyphicon glyphicon-minus"></span> 
    </button>
                                        </div>
                                    </div>
                                    <div class="row">
                                      
                                       
                                         <div class="col-sm-4">

                                            <!--<input type="file" name="fileToUpload" id="fileToUpload" required="required" class="form-control" onchange="resumeCheck(this);">-->
                                            <!---input type="file" class="btn btn-primary col-sm-6" id="btnSubmit" name="btnSubmit" value="Upload Resume"> ---->
                                   
                                            
                                        
                                        </div>
                                    </div>
                                   
                                    <div class="row">
                                       <div class="col-sm-6" >
                                            <h3 class="heavy">Technical Expertise </h3>
                                            <br>
                                            <textarea placeholder="What is your teams technical expertise? Explain how you rate yourself and what technologies you have worked with in the past." rows="3" class="form-control" id="comments" name="comments" onchange="fieldLengthValidator(this);"></textarea>
                                        </div>

                                        <div class="col-sm-6" >
                                             <h3 class="heavy">Why are you the best?</h3>
                                             <br>
                                            <textarea placeholder="Why do you think your team can win MEANHack? Explain in detail, this will be used to determine your selection to participate. " rows="3" class="form-control" id="comments" name="comments" onchange="fieldLengthValidator(this);"></textarea>
                                        </div>


                                        </div>
                                        <br>
                                        <div class="row">
                                            
                                            <div class="col-sm-4">
                                                <center>
                                                    <button type="button" class="btn btn-info col-sm-12">Submit </button>
                                                    </center>
                                           
                                            
                                        </div>
                                        <div class="col-sm-4"></div>
                                            <div class="col-sm-4"></div>
                                    </div>
                                </form>
                    </div>
                </div>
            </div>
        




        <!-- Social links. @TODO: replace by link/instructions in template -->
      
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
    <script type="text/javascript" src="./includes/js/jquery.price_format.2.0.min.js"></script>
    <script>
        $('#postGraduationPer').priceFormat({
            prefix: '',
            centsSeparator: '.',
            limit: 4,
            centsLimit: 2
        });
        $('#graduationPer').priceFormat({
            prefix: '',
            centsSeparator: '.',
            limit: 4,
            centsLimit: 2
        });
        $('#experience').priceFormat({
            prefix: '',
            centsSeparator: '.',
            limit: 4,
            centsLimit: 2
        });
//        $('#salary').priceFormat({
//            prefix: '',
//            centsSeparator: '.',
//            limit: 15,
//            centsLimit: 2
//        });
       
    </script>
</html>




