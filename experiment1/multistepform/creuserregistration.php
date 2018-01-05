
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>
            CRE Registration
        </title>


        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="../multistep-css/bootstrap.min.css" rel="stylesheet">
        <link href="../multistep-css/font-awesome.min.css" rel="stylesheet">
        <link href="../multistep-css/main.css" rel="stylesheet">
        <link href="../multistep-css/default.css" rel="stylesheet" type="text/css">
        <link href="../multistep-css/component.css" rel="stylesheet" type="text/css">
        <!--HEADER------------>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
        <script src="../multistep-js/bootstrap.min.js"></script>
        <link rel="shortcut icon" href="../images/favicon.ico">
        <!--range slider link-->
        <link href='http://fonts.googleapis.com/css?family=Quantico' rel='stylesheet' type='text/css'>
        <!--range slider link-->
        <!--dynamic div link-->
        <link rel="stylesheet" 
              href=" http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/themes/ui-lightness/jquery-ui.css" type="text/css" />



        <script type="text/JavaScript" src="../js/CreRegistration.js"></script>
        <script type="text/JavaScript" src="../js/Validation.js"></script>


        <style>
            .otpsuccess {
                background-color: yellow;
                position: absolute;
                top: 30%;
                left: 30%;
                margin-top: -30px;
                margin-left: -180px;
            }

        </style>

        <script>
            $(function(){
                cbpHorizontalMenu.init();
            });
        </script>

        <script>
         
            function goTop(){
                window.scrollTo(500, 0);
            }
  
      

    
        </script> 
        <script>
            $(function(){
                cbpHorizontalMenu.init();
            });
        </script>




<?php include 'header.php';?>
    <!--/head-->

    <?php
    ini_set('display_errors', 'Off');
    $idvalue = intval($_GET['id']);
    $drive = $_GET['drive'];
    $from = $_GET['from'];
    ?>
<body onload="selectDrive('<?php echo $drive ?>','<?php echo $idvalue ?>','<?php echo $from ?>')">



    <section class="container">
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-sm-6 text-left">
                <h1 class="heavy">CRE Registration Form</h1>
            </div>
            <div class="col-sm-6 text-right">
                <ul class="breadcrumb pull-right">
                    <li><a href="../">Home</a></li>
                    <li><a href="../company">Company</a></li>
                    <li class="active">CRE Registration Form</li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-7 text-left">
                <h1 class="heavy">
                </h1>
            </div>

            <form>
                <div class="tab-content">


                    <!-- PAGE ONE STARTS HERE -->


                    <div class="tab-pane active" id="pageone">
                        <div class="row">
                            <div id="main-container">
                                <div id="page-content">
                                    <!-- Top Header (Fixed) Header -->
                                    <div id="content">

                                        <!-- - - - - - - - - - - - - Content - - - - - - - - - - - - -  -->
                                        <div id="top">
                                            <div class="form-container">
                                                <div id="tmm-form-wizard" class="container substrate" >
                                                    <div class="row">
                                                        <div class="col-sm-1"></div>

                                                        <div class="row stage-container wid">
                                                            <div class="stage tmm-current col-md-2 col-sm-2">
                                                                <div class="stage-header head-number">1</div>
                                                                <div class="stage-content">
                                                                    <mhead class="stage-title">
                                                                        <strong>          Personal Details</strong>      
                                                                    </mhead>
                                                                    <div class="stage-info">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/ .stage-->
                                                            <div class="stage col-md-2 col-sm-2">
                                                                <div class="stage-header head-number">2</div>
                                                                <div class="stage-content">
                                                                    <mhead class="stage-title">
                                                                        Contact Details
                                                                    </mhead>

                                                                </div>
                                                            </div>
                                                            <!--/ .stage-->
                                                            <div class="stage col-md-2 col-sm-2">
                                                                <div class="stage-header head-number">3</div>
                                                                <div class="stage-content">
                                                                    <mhead class="stage-title">
                                                                        Education
                                                                    </mhead>

                                                                </div>
                                                            </div>
                                                            <!--/ .stage-->
                                                            <div class="stage col-md-2 col-sm-2">
                                                                <div class="stage-header head-number">4</div>
                                                                <div class="stage-content">
                                                                    <mhead class="stage-title">
                                                                        Experience
                                                                    </mhead>
                                                                    <div class="stage-info">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/ .stage-->
                                                            <div class="stage col-md-2 col-sm-2">
                                                                <div class="stage-header head-number">5</div>
                                                                <div class="stage-content">
                                                                    <mhead class="stage-title">
                                                                        Finish
                                                                    </mhead>
                                                                    <div class="stage-info">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/ .stage-->
                                                        </div>

                                                        <div class="col-sm-1"></div>
                                                    </div>
                                                    <form action="/" role="form">
                                                        <div class="">



                                                            <div class="row">

                                                                <div class="col-sm-4">
                                                                    <label>Select Event</label>
                                                                    <select id="attendingInterviewAt" onchange="getLocation()" class="form-control">
                                                                        <option value="0">Select</option>
                                                                        <option value="3">Job Fair (Campus Drive)</option>
                                                                        <option value="5">Job Fair (Pool Drive)</option>
                                                                        <option value="2">Campus Drive</option>
                                                                        <option value="1">Walk-In</option>


                                                                    </select> 

                                                                </div>



                                                                <div class="col-sm-4">
                                                                    <label>Select Location</label>
                                                                    <select id="location" onchange="getPositions()" class="form-control">


                                                                    </select> 
                                                                </div>

                                                                <div class="col-sm-4">
                                                                    <label>Post Applied for :</label>
                                                                    <select class="form-control"  id="posttype">


                                                                    </select> 

                                                                </div>

                                                            </div>


                                                            <br><br>
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <label id="firstname"> First Name </label>
                                                                    <input type="text" class="form-control"   placeholder="First Name" id="firstName" name="firstName" title="Please Provide First Name" onchange="changeCase(this);" onblur="isNameAlpha(this.value);" > <br><br>
                                                                    <label id="mstatus">Marital Status</label><br>
                                                                    <select name="maritalStatus" id="maritalStatus"  class="form-control"  title="Please Provide Marital Status">
                                                                        <option value="0">Select</option>
                                                                        <option value="Single">Single</option>
                                                                        <option value="Married">Married</option>
                                                                        <option value="Divorced">Divorced</option>
                                                                    </select>
                                                                    <br>
                                                                </div>
                                                                <div class="col-sm-4">

                                                                    <label id="middleName"> Middle Name</label>
                                                                    <input type="text" class="form-control"  placeholder="Middle name"  name="midName" id="midName" onchange="changeCase(this);" onblur="isNameAlpha(this.value);"  title="Please Provide Middle Name"><br><br>


                                                                    <label> Gender :</label> <br>
                                                                    <input type="radio" name="Sex" value="Male" checked>&nbsp;&nbsp;Male  &nbsp;&nbsp; &nbsp;&nbsp;<input type="radio" name="Sex" value="Female">&nbsp;&nbsp;Female &nbsp;&nbsp;<input type="radio" name="Sex" value="Other">&nbsp;&nbsp;Other
                                                                    <br> <br>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <label id="lastname">Last Name</label>
                                                                    <input type="text" class="form-control"  placeholder="Last Name" name="lastName" id="lastName" title="Please Provide Last Name" onchange="changeCase(this);" onblur="isNameAlpha(this.value);">   
                                                                    <div class="form-group">
                                                                        <br>    
                                                                        <label for="sDate" id="dob">Date of Birth</label>


                                                                        <input type="date" tabindex="11" class="form-control"  placeholder="startDate" name="birthDate" id="birthDate"  title="Please Provide Date of Birth" onChange=" return checkDates(this)">


                                                                    </div>  
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <label id="fathername">Father Name</label>
                                                                    <input type="text" class="form-control"   placeholder="Father Name" name="fatherName" id="creFatherName" title="Please Provide Father Name">
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <label id="foccup">Father Occupation</label>
                                                                    <input type="text" class="form-control"   placeholder="Father Ocupation" name="fatherOccupation"   id="fatherOccupation"   title="Please Provide Father Ocupation"  onblur="isNameAlpha(this.value);"/>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <label id="annualIncom">Annual Income</label>
                                                                    <select  class="form-control" id="annual income"  title="Please Provide Annual Income">
                                                                        <option value="0">Select</option>
                                                                        <option value="Below 1 lakh">Below 1 lakh</option>
                                                                        <option value="2 lakh to 3 lakh">2 lakh to 3 lakh</option>
                                                                        <option value="3 lakh to 5 lakh">3 lakh to 5 lakh</option>
                                                                        <option value="5 lakh to 7 lakh">5 lakh to 7 lakh</option>
                                                                        <option value="7 lakh to 9 lakh">7 lakh to 9 lakh</option>
                                                                        <option value="Above 10 lakh">Above 10 lakh</option>
                                                                    </select> 
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <label id="email">SSN/PAN</label>
                                                                    <input type="text" class="form-control"  placeholder="SSN/PAN"   name="pan" id="pan"  title="Please Provide SSN/PAN Number">
                                                                </div>
                                                                <div class="col-sm-4"><br>
                                                                    <div class="input-group">
                                                                        <span class="input-group-btn">
                                                                            <span class="btn btn-danger btn-file">
                                                                                <input  multiple name="resumePath" id="resumePath"  onchange="resumeName();" required="required" tabindex="6" type="file" />
                                                                                Resume Upload
                                                                            </span>
                                                                        </span> 
                                                                        <input class="form-control" id="fileDestination" name="fileDestination" placeholder="Upload" readonly required="required" type="text" title="Please Upload Resume"/>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4"><br>
                                                                    <div class="input-group">
                                                                        <span class="input-group-btn">
                                                                            <span class="btn btn-danger btn-file">
                                                                                Photo Upload
                                                                                <input multiple name="imagePath" class="form-control" id="imagePath" onchange="imageName();" required="required" tabindex="6" type="file">
                                                                            </span>
                                                                        </span> 
                                                                        <input class="form-control" id="imageFileDestination" name="imagefileDestination" placeholder="Upload" readonly required="required" type="text" title="Please Upload Photo">

                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <br>
                                                            <div class="row">


                                                                <div class="col-sm-4">
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-10"></div>
                                                                    <div class="col-sm-2">
                                                                        <br>
                                                                        <button class="btn btn-primary btn-md col-sm-11 " type="button" onclick="goTop();firstForm();">Next</button>
                                                                        <a data-toggle="tab" href="#pagetwo" id="first"></a>
                                                                        <br><br>
                                                                    </div>
                                                                </div> 
                                                            </div><!--/ .row-->
                                                        </div><!--/ .form-wizard-->
                                                    </form><!--/ form-->
                                                </div><!--/ .container-->
                                            </div><!--/ .form-container-->
                                        </div><!--/ #content-->
                                        <!-- - - - - - - - - - - - end Content - - - - - - - - - - - - - -->
                                    </div>
                                    <!-- END Page Content -->
                                </div>
                                <!-- END Main Container -->
                            </div>
                        </div>
                        </form>
                    </div>
                    <!-- PAGE ONE ENDS HERE -->


                    <!-- PAGE TWO STARTS HERE -->

                    <div class="tab-pane" id="pagetwo">
                        <div class="row">
                            <div id="main-container">
                                <div id="page-content">
                                    <!-- Top Header (Fixed) Header -->
                                    <div id="content">
                                        <div class="form-container">
                                            <div id="tmm-form-wizard" class="container substrate">
                                                <div class="col-sm-1"></div>
                                                <div class="row stage-container wid">

                                                    <div class="stage tmm-success col-md-2 col-sm-2">
                                                        <a data-toggle="tab" href="#pageone"> <div class="stage-header head-number">1</div></a>
                                                        <div class="stage-content">
                                                            <mhead class="stage-title">
                                                                Personal Details
                                                            </mhead>
                                                            <div class="stage-info">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/ .stage-->
                                                    <div class="stage tmm-current col-md-2 col-sm-2">
                                                        <div class="stage-header head-number">2</div>
                                                        <div class="stage-content">
                                                            <mhead class="stage-title">
                                                                <strong>             Contact Details</strong>      
                                                            </mhead>

                                                        </div>
                                                    </div>
                                                    <!--/ .stage-->
                                                    <div class="stage col-md-2 col-sm-2">
                                                        <div class="stage-header head-number">3</div>
                                                        <div class="stage-content">
                                                            <mhead class="stage-title">
                                                                Education
                                                            </mhead>

                                                        </div>
                                                    </div>
                                                    <!--/ .stage-->
                                                    <div class="stage col-md-2 col-sm-2">
                                                        <div class="stage-header head-number">4</div>
                                                        <div class="stage-content">
                                                            <mhead class="stage-title">
                                                                Experience
                                                            </mhead>
                                                            <div class="stage-info">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/ .stage-->
                                                    <div class="stage col-md-2 col-sm-2">
                                                        <div class="stage-header head-number">5</div>
                                                        <div class="stage-content">
                                                            <mhead class="stage-title">
                                                                Finish
                                                            </mhead>
                                                            <div class="stage-info">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/ .stage-->
                                                </div>


                                                <form action="/" role="form">


                                                    <div class="row">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <div><label>Address Line 1</label>
                                                                    <input type="text" class="form-control"   placeholder="Address " name="addressOne" id="addressOne" title="Please Provide Address">

                                                                </div><br><div><label id="cityLable">City</label>
                                                                    <input type="text" class="form-control"   placeholder="City"  name="city" id="city" title="Please Provide City Name" onblur="isNameAlpha(this.value);"></div><br>
                                                                <div><label id="altmobile">Alternate Mobile Number</label>
                                                                    <input type="text" class="form-control"   placeholder="Alternate Mobile Number " id="altPhoneNo" name="altPhoneNo"   onchange="return formatPhone(this);" onblur="return validatenumber(this);" title="Please Provide Alternate Mobile Number">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div><label id="address2">Address Line 2</label>
                                                                    <input type="text" class="form-control"   placeholder="Address" name="addressTwo" id="addressTwo" title="Please Provide Address">
                                                                </div><br>
                                                                <div><label id="stateLable">State</label>
                                                                    <input type="text" class="form-control"   placeholder="State"  name="state"   id="state" title="Please Provide State Name" onblur="isNameAlpha(this.value);" ></div><br>
                                                                <div><label>Home Phone Number</label>
                                                                    <input type="num" class="form-control"   placeholder="Home Number" id="home phone number" name="Home Number" title="Please Provide Home Phone Number">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div><label id="phone">Mobile Number</label>
                                                                    <input type="text" class="form-control"   placeholder=" Mobile Number" id="cellPhoneNo"  title="Please Provide Mobile Number" onfocus="formInUse = true;" onblur="return formatPhone(this);return validatenumber(this);" >
                                                                </div><br>
                                                                <div><label id="pincode">Pin Code</label>
                                                                    <input type="text" class="form-control"   placeholder="Pin Code" name="pin" id="pin" title="Please Provide Pin Code" onblur="pincode(this.value)" ></div><br>
                                                                <div>
                                                                    <label id="email">Email</label>
                                                                    <input type="email" class="form-control"   placeholder="Email" id="personalEmail" name="personalEmail" title="Please Provide Email" onblur="return checkEmail(this);allSmalls(this);">
                                                                </div>
                                                                <div id="Mobiledialog" title="Basic dialog" style="display:none; width:1000px;height:500px;min-height: 500px;">
                                                                    <p>Your Mobile Number is existed in database..</p>
                                                                </div>
                                                            </div>
                                                            </form>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-2">
                                                                <br>
                                                                <a data-toggle="tab" href="#pageone"><button class="btn btn-primary btn-md col-sm-11" onclick="goTop();" type="button">Prev</button></a>
                                                            </div>
                                                            <div class="col-sm-8"></div>
                                                            <div class="col-sm-2">
                                                                <br>

                                                                <div class="input-group">
                                                                    <span class="input-group-btn">
                                                                        <!-- Trigger the modal with a button -->
                                                                        <!--a data-toggle="tab"  href="#pagethree"-->
                                                                        <button class="btn btn-primary btn-md col-sm-11"  onclick="goTop();secondForm()" type="button">Next</button><!--/a--> 

                                                                        <a data-toggle="modal"  href="#myModal" id="overlay"></a>
                                                                        <!-- Modal -->
                                                                        <div id="myModal" class="modal fade" data-backdrop="static" role="dialog" style="visibility: visible">
                                                                            <div class="modal-dialog">

                                                                                <!-- Modal content-->
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">

                                                                                        <h4 class="modal-title"><strong> E-Mail ID Verification </strong></h4>
                                                                                        <hr></div>
                                                                                    
                                                                                    <div class="modal-body">
                                                                                        <div class="row">
                                                                                            <div class="col-sm-6">
                                                                                                <label>E-Mail ID &nbsp; </label>
                                                                                                <input class="form-control" placeholder="E-Mail ID" placeholder="Email Id" id="autoemail" onfocus="formInUse = true;" onblur="return checkEmail(this);allSmalls(this);" type="text">
                                                                                                <br><br>

                                                                                            </div>
                                                                                            <div  id="loadingimg" style="display:none"><font color="blue" style="bold">Processing...Please Wait</font></div>  
                                                                                            <div class="col-sm-2"></div>
                                                                                            <div class="col-sm-2" id="validate1" style="display:block;"> 
                                                                                                <input type="button" value="Send OTP" class="btn btn-primary btn-md" onclick="generateOtp();"> 
                                                                                                <a href="#processing-modal" id="otpsuccess" data-toggle="modal"></a>
                                                                                            </div> 


                                                                                        </div>



                                                                                        <div class="row">


                                                                                            <div id="OTPdiv" class="col-sm-6" style="visibility:hidden;">

                                                                                                <label class="col-sm-1">OTP </label><div class="col-sm-2"></div>
                                                                                                <input type="text" name="OTP"  class="form-control" id="OTP" title="Please Provide OTP" onblur="isNumber1(this.value)" />
                                                                                                <input type="hidden" id="generatedOtp" name="generatedOtp" value=""/>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div id="otpsuccess" class="modal-content"  title="Basic dialog" style="display:none; width:500px;height:500px;min-height: 500px;">
                                                                                            <p>We just sent an email with OTP deatils to registered personal emailid.Please provide OTP listed in your email for the further Process.</p>
                                                                                        </div>

                                                                                        <div id="emailexist" class="modal-content"  title="Basic dialog" style="display:none; width:1000px;height:1000px;min-height: 500px;">
                                                                                            <p>EMail ID Existed in Database</p>
                                                                                        </div>

                                                                                        <div id="error" class="modal-content"  title="Basic dialog" style="display:none; width:500px;height:500px;min-height: 500px;">
                                                                                            <p>Try After Some Time</p>
                                                                                        </div>


                                                                                    </div>



                                                                                    <div class="modal-footer">
                                                                                        <div class="row">
                                                                                            <div class="col-sm-2" id="resend" style="visibility:hidden;">
                                                                                                <button type="button" class="btn btn-primary btn-md "  onclick="generateOtp();">Resend OTP</button> 
                                                                                                <a data-toggle="tab" id="resendclick"></a>
                                                                                            </div>
                                                                                            <div class="col-sm-6"></div>
                                                                                            <div class="col-sm-4" id="process1" style="display:none;">
                                                                                                <button type="button" class="btn btn-primary btn-md "   onclick="checkOTP();">Verify OTP</button>
                                                                                                <a data-toggle="tab" href="#pagethree" data-dismiss="modal" id="verifyclick"></a>   
                                                                                                </a>

                                                                                            </div>
                                                                                        </div>



                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>



                                                                        <!-- /.modal-content -->

                                                                </div>

                                                                <br><br>
                                                            </div>
                                                        </div> 
                                                        <!--/ .row-->
                                                    </div><!--/ .form-wizard-->
                                                </form><!--/ form-->
                                            </div><!--/ .container-->
                                        </div><!--/ .form-container-->
                                    </div><!--/ #content-->
                                </div>
                                <!-- END Page Content -->
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->



                    <!--OTP Success Div-->

                    <!-- Static Modal -->
                    <div  class="modal modal-static fade" id="processing-modal" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="text-center">
                                       
                                        <h4>We just sent an email with OTP deatils to registered personal emailid.Please provide OTP listed in your email for the further Process.
                                            </h4>
                                 
                               <div class="modal-footer">
                                <div class="row">

                                    <div class="col-sm-6"></div>

                                    <div class="col-sm-2" id="validate1" style="display:block;"> 

                                         <button type="button"  class="btn btn-primary btn-md "  style="float: none;" data-dismiss="modal" aria-hidden="true">OK</button>
                                    </div>

                                </div>

                            </div>
                           
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Close OTP SUCCESS DIV-->

                  
                    
                    


                    <!-- PAGE TWO ENDS HERE -->

                    <!-- PAGE Three starts HERE -->
                    <div class="tab-pane" id="pagethree">

                        <div class="row">
                            <div id="page-content">
                                <!-- Top Header (Fixed) Header -->
                                <div id="content">
                                    <div class="form-container">
                                        <div class="col-sm-1"></div>
                                        <div id="tmm-form-wizard" class="container substrate">

                                            <div class="row stage-container wid">
                                                <div class="stage tmm-success col-md-2 col-sm-2">
                                                    <a data-toggle="tab" href="#pageone">  <div class="stage-header head-number">1</div></a>
                                                    <div class="stage-content">
                                                        <mhead class="stage-title">
                                                            Personal Details
                                                        </mhead>
                                                        <div class="stage-info">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/ .stage-->
                                                <div class="stage tmm-success col-md-2 col-sm-2">
                                                    <a data-toggle="tab" href="#pagetwo"> <div class="stage-header head-number">2</div></a>
                                                    <div class="stage-content">
                                                        <mhead class="stage-title">
                                                            Contact Details
                                                        </mhead>

                                                    </div>
                                                </div>
                                                <!--/ .stage-->
                                                <div class="stage tmm-current col-md-2 col-sm-2">
                                                    <div class="stage-header head-number">3</div>
                                                    <div class="stage-content">
                                                        <mhead class="stage-title">
                                                            <strong>               Education</strong>      
                                                        </mhead>

                                                    </div>
                                                </div>
                                                <!--/ .stage-->
                                                <div class="stage col-md-2 col-sm-2">
                                                    <div class="stage-header head-number">4</div>
                                                    <div class="stage-content">
                                                        <mhead class="stage-title">
                                                            Experience
                                                        </mhead>
                                                        <div class="stage-info">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/ .stage-->
                                                <div class="stage col-md-2 col-sm-2">
                                                    <div class="stage-header head-number">5</div>
                                                    <div class="stage-content">
                                                        <mhead class="stage-title">
                                                            Finish
                                                        </mhead>
                                                        <div class="stage-info">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/ .stage-->
                                            </div>
                                            <div class="row">

                                                <table class="table table-hover table-striped">
                                                    <thead>
                                                        <tr>
                                                            <td id="qual">
                                                                <strong>     Qualification</strong>
                                                            </td>
                                                            <td id="stream">
                                                                <strong>    Stream </strong>
                                                            </td>
                                                            <td >
                                                                <strong id="colg">   College/Universtiy</strong>
                                                            </td>
                                                            <td id="med">
                                                                <strong>Medium </strong>
                                                            </td>
                                                            <td id="yop">
                                                                <strong>Year of Pass </strong>
                                                            </td>
                                                            <td id="percent">
                                                                <strong>Percentage </strong>
                                                            </td>
                                                        </tr>

                                                    </thead>
                                                    <tbody>

                                                        <tr>
                                                            <td>


                                                                <div id="qualificationDiv" style="border: 0px solid">
                                                                    <select name="qualification"    id="qualification"  class="form-control" class="required" title="Please Select qualification">
                                                                        <option value="0">Please Select</option>
                                                                        <option value="SSC">Secondary Education</option>
                                                                        <option value="other">Other</option>

                                                                    </select>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control"  required="required" placeholder="Ex:-SSC,CBSC,Other" name="qualification"    id="Stream" title="Please Provide Tenth Stream">

                                                            </td>
                                                            <td>

                                                                <input type="text" class="form-control"  required="required" placeholder="" name="college"     id="college" onblur="isNameAlpha(this.value);" title="Please Provide Tenth School Name">
                                                            </td>
                                                            <td>



                                                                <div id="mediumDiv" style="border: 0px solid">
                                                                    <select name="medium"  id="medium"  class="form-control" title="Please Select Tenth Medium">
                                                                        <option value="0">Select</option>
                                                                        <option value="English">English</option>
                                                                        <option value="Hindi">Hindi</option>
                                                                        <option value="Telugu">Telugu</option>
                                                                        <option value="Other">Other</option>
                                                                    </select>
                                                                </div>

                                                            </td>
                                                            <td>


                                                                <!--input type="date" class="form-control"  required="required" placeholder="" name="yearOfPass" id="yearOfPass" title="Please Provide Tenth Year Of Pass" onblur="isNumber1(this.value)" -->

                                                                <div id="tenthpassout">
                                                                    <select id="yearOfPass" class="form-control" title="Please Provide Tenth Year Of Pass" value="select" onclick="callYear(this.id);">
                                                                        <option value="0">Select</option>

                                                                    </select>
                                                                </div>

                                                            </td>
                                                            <td>
                                                                <link href='http://fonts.googleapis.com/css?family=Quantico' rel='stylesheet' type='text/css'>
                                                                <div class="container">
                                                                    <div id="tenth" class="slider">
                                                                        <input type="range" id="tenthInput" name="tenthInput" min="0" max="100" title="Please Provide Tenth Percentage" oninput="tenthOutput.value=tenthInput.value"> 
                                                                        <output name="tenthOutput" id="tenthOutput" for="tenthInput">0</output>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr> 
                                                        <tr>
                                                            <td>
                                                                <div id="ipeCategoryDiv" style="border: 0px solid">
                                                                    <select name="ipeCategory"   id="ipeCategory"  class="form-control" title="Please select 12th qualification">
                                                                        <option value="0">Select Category</option>
                                                                        <option value="Intermediate">Intermediate</option>
                                                                        <option value="Diploma">Diploma</option>
                                                                        <option value="Other">Other</option>
                                                                    </select>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control"  required="required" placeholder="" name="ipeStream"   id="ipeStream" title="Please Provide 12th Stream" onblur="isNameAlpha(this.value);" >

                                                            </td>
                                                            <td>

                                                                <input type="text" class="form-control"  required="required" placeholder="" name="ipeCollege"  id="ipeCollege"  title="Please Provide 12th College Name" onblur="isNameAlpha(this.value);">
                                                            </td>
                                                            <td>
                                                                <div id="ipeMediumDiv" style="border: 0px solid">
                                                                    <select name="ipmedium"  id="ipeMedium"  class="form-control" title="Please Select 12th Medium">
                                                                        <option value="0">Select</option>
                                                                        <option value="English">English</option>
                                                                        <option value="Hindi">Hindi</option>
                                                                        <option value="Telugu">Telugu</option>
                                                                        <option value="Other">Other</option>
                                                                    </select>
                                                                </div>
                                                            </td>
                                                            <td >
                                                                <!--input type="date" class="form-control"  required="required" placeholder="" name="ipeYearOfPass"  id="ipeYearOfPass" title="Please Provide 12th Year Of Pass" onblur="isNumber1(this.value)" -->

                                                                <div id="interpassout">                                                   
                                                                    <select id="ipeYearOfPass" class="form-control" title="Please Provide Tenth Year Of Pass"  value="select" onclick="callYear(this.id);">
                                                                        <option value="0">Select</option>

                                                                    </select>
                                                                </div>


                                                            </td>
                                                            <td>
                                                                <link href='http://fonts.googleapis.com/css?family=Quantico' rel='stylesheet' type='text/css'>
                                                                <div class="container">
                                                                    <div id="inter" class="slider">

                                                                        <input type="range" id="interInput" name="interInput" min="0" max="100" title="Please Provide 12th Percentage" oninput="interOutput.value=interInput.value"> 
                                                                        <output name="interOutput" id="interOutput" for="interInput">0</output>

                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr> 
                                                        <tr>
                                                            <td>

                                                                <div id="degreeQualDiv" style="border: 0px solid">
                                                                    <select name="degreeQual"  id="degreeQual"  class="form-control" title="Please Select Graduation qualification">
                                                                        <option value="0">Select Graduation</option>
                                                                        <option value="B.Tech">B.Tech</option>
                                                                        <option value="B.E">B.E</option>
                                                                        <option value="B.Sc">B.Sc</option>
                                                                        <option value="B.Com">B.Com</option>
                                                                        <option value="B.A">B.A</option>
                                                                        <option value="BBM">BBM</option>
                                                                        <option value="Other">Other</option>
                                                                    </select>
                                                                </div>

                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control"  required="required" placeholder="" name="degreeBranch"   id="degreeBranch" title="Please Provide Graduation Branch" onblur="isNameAlpha(this.value);">

                                                            </td>
                                                            <td>

                                                                <input type="text" class="form-control"  required="required" placeholder="" name="degreeCollege"  id="degreeCollege" title="Please Provide Graduation College" onblur="isNameAlpha(this.value);" >
                                                            </td>
                                                            <td>
                                                                <div id="degreeMediumDiv" style="border: 0px solid">
                                                                    <select name="degreeMedium"  id="degreeMedium" class="form-control" title="Please Select Graduation Medium">
                                                                        <option value="0">Select</option>
                                                                        <option value="English">English</option>
                                                                        <option value="Hindi">Hindi</option>
                                                                        <option value="Telugu">Telugu</option>
                                                                        <option value="Other">Other</option>
                                                                    </select>
                                                                </div>
                                                            </td>
                                                            <td >
                                                                <!--input type="date" class="form-control"  required="required" placeholder="" name="degreeYearOfPass"  id="degreeYearOfPass" title="Please Provide Degree Year Of Pass" onblur="isNumber1(this.value)" -->

                                                                <div id="degreepassout">                                                
                                                                    <select id="degreeYearOfPass" class="form-control" title="Please Provide Tenth Year Of Pass"  value="select" onclick="callYear(this.id);">
                                                                        <option value="0">Select</option>

                                                                    </select>   
                                                                </div>                                     

                                                            </td>
                                                            <td>
                                                                <div class="container">
                                                                    <div id="degree" class="slider">
                                                                        <input type="range" id="degreeInput" name="degreeInput" min="0" max="100" title="Please Provide Degree Percentage" oninput="degreeOutput.value=degreeInput.value"> 
                                                                        <output name="degreeOutput" id="degreeOutput" for="degreeInput">0</output>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr> 
                                                        <tr>
                                                            <td>
                                                                <select name="pgQual"  id="pgQual"  class="form-control" title="Please Select PG Qualification">
                                                                    <option value="0">Select PG</option>
                                                                    <option value="MCA">MCA</option>
                                                                    <option value="MBA">MBA</option>
                                                                    <option value="M.Tech">M.Tech</option>
                                                                    <option value="M.Com">M.Com</option>
                                                                    <option value="M.Sc">M.Sc</option>
                                                                    <option value="MS">MS</option>
                                                                    <option value="Other">Other</option>
                                                                </select>
                                                            <td>
                                                                <input type="text" class="form-control"  required="required" placeholder="" name="pgStream"    id="pgStream" title="Please Provide PG Stream" onblur="isNameAlpha(this.value);">

                                                            </td>
                                                            <td>

                                                                <input type="text" class="form-control"  required="required" placeholder="" name="pgCollege"   id="pgCollege" title="Please Provide PG College/Universtiy" onblur="isNameAlpha(this.value);">
                                                            </td>
                                                            <td>
                                                                <select name="pgMedium"   id="pgMedium"  class="form-control" title="Please Select PG Medium">
                                                                    <option value="0">Select</option>
                                                                    <option value="English">English</option>
                                                                    <option value="Hindi">Hindi</option>
                                                                    <option value="Telugu">Telugu</option>
                                                                    <option value="Other">Other</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <!--input type="date" class="form-control"  required="required" placeholder="" name="pgYearOfPass"   id="pgYearOfPass" title="Please Provide PG Year Of Pass" onblur="isNumber1(this.value)"-->

                                                                <select id="pgYearOfPass" class="form-control" title="Please Provide Tenth Year Of Pass"  value="select" onclick="callYear(this.id);">
                                                                    <option value="0">Select</option>

                                                                </select>   



                                                            </td>
                                                            <td>
                                                                <link href='http://fonts.googleapis.com/css?family=Quantico' rel='stylesheet' type='text/css'>
                                                                <div class="container">
                                                                    <div  class="slider">
                                                                        <input type="range" id="pgInput" name="pgInput" min="0" max="100" title="Please Provide PG percentage" oninput="pgOutput.value=pgInput.value"> 
                                                                        <output name="pgOutput" id="pgOutput" for="pgInput">0</output>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr> 

                                                    </tbody>
                                                </table>   
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <br>
                                                    <a data-toggle="tab" href="#pagetwo"><button class="btn btn-primary btn-md col-sm-11" onclick="goTop();" type="button">Prev</button></a>
                                                </div>
                                                <div class="col-sm-8"></div>
                                                <div class="col-sm-2">
                                                    <br> 
                                                    <button class="btn btn-primary btn-md col-sm-12" onclick="goTop();thirdForm();"  type="button">Next</button>
                                                    <a data-toggle="tab" href="#pagefour" id="third"></a>    
                                                    <br><br>
                                                </div>
                                            </div>



                                        </div><!--/ .container-->
                                    </div><!--/ .form-container-->
                                </div><!--/ #content-->
                            </div>   
                        </div></div>

                    <!-- PAGE FOUR STARTS HERE -->


                    <div class="tab-pane" id="pagefour">
                        <div class="row">
                            <div id="page-content">
                                <!-- Top Header (Fixed) Header -->
                                <div id="content">
                                    <div class="form-container">
                                        <div id="tmm-form-wizard" class="container substrate">

                                            <div class="col-sm-1"></div>
                                            <div class="row stage-container wid">
                                                <div class="stage tmm-success col-md-2 col-sm-2">
                                                    <a data-toggle="tab" href="#pageone">  <div class="stage-header head-number">1</div></a>
                                                    <div class="stage-content">
                                                        <mhead class="stage-title">
                                                            Personal Details
                                                        </mhead>
                                                        <div class="stage-info">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/ .stage-->
                                                <div class="stage tmm-success col-md-2 col-sm-2">
                                                    <a data-toggle="tab" href="#pagetwo"> <div class="stage-header head-number">2</div></a>
                                                    <div class="stage-content">
                                                        <mhead class="stage-title">
                                                            Contact Details
                                                        </mhead>

                                                    </div>
                                                </div>
                                                <!--/ .stage-->
                                                <div class="stage tmm-success col-md-2 col-sm-2">
                                                    <a data-toggle="tab" href="#pagethree"> <div class="stage-header head-number">3</div></a>
                                                    <div class="stage-content">
                                                        <mhead class="stage-title">
                                                            Education
                                                        </mhead>

                                                    </div>
                                                </div>
                                                <!--/ .stage-->
                                                <div class="stage tmm-current col-md-2 col-sm-2">
                                                    <div class="stage-header head-number">4</div>
                                                    <div class="stage-content">
                                                        <mhead class="stage-title">
                                                            <strong> Experience</strong>      
                                                        </mhead>
                                                        <div class="stage-info">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/ .stage-->
                                                <div class="stage col-md-2 col-sm-2">
                                                    <div class="stage-header head-number">5</div>
                                                    <div class="stage-content">
                                                        <mhead class="stage-title">
                                                            Finish
                                                        </mhead>
                                                        <div class="stage-info">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/ .stage-->
                                            </div>

                                            <script language="javascript">
	   
	 
	  
	   
                                                function addRow(tableID){
  
                                                    var table=document.getElementById(tableID);
                                                    var rowCount=table.rows.length;
                                                    var row=table.insertRow(rowCount);
                                                    var colCount=table.rows[0].cells.length;
                                                    for(var i=0;i<colCount;i++){
                                                        var newcell=row.insertCell(i);
                                                        newcell.innerHTML=table.rows[0].cells[i].innerHTML;
                                                        switch(newcell.childNodes[0].type){
                                                            case"text":newcell.childNodes[0].value="";
                                                                break;
                                                            case"checkbox":newcell.childNodes[0].checked=false;
                                                                break;
                                                            case"select-one":newcell.childNodes[0].selectedIndex=0;
                                                                break;
                                                        }
                                                    }
                                                }
	  
	  
                                                function addCompanyRow(){
                                                    //alert('its done');
                                                    var Parenttblid = document.getElementById('companydataTable');
                                                    var Parenttbodyid = document.getElementById('companydatabodyTable');
                                                    var rowCount=Parenttbodyid.rows.length;
                                                    var tr = document.createElement("tr");
                                                    var td1 = document.createElement("td");
                                                    var td2 = document.createElement("td");
                                                    var td3 = document.createElement("td");
                                                    var td4 = document.createElement("td");
                                                    var td5 = document.createElement("td");
                                                    var td6 = document.createElement("td");
			
			
                                                    var inputCheckelement = document.createElement("input");   
                                                    inputCheckelement.setAttribute("type", "checkbox");    	  
                                                    inputCheckelement.setAttribute("name", "companychk"); 
                                                    td1.appendChild(inputCheckelement); 
			
                                                    var inputTextelement1 = document.createElement("input"); 
                                                    inputTextelement1.setAttribute("type", "textbox");
                                                    inputTextelement1.setAttribute("name", "companyName");
                                                    inputTextelement1.setAttribute("id", "companyName");
                                                    inputTextelement1.setAttribute("class", "form-control");
                                                    inputTextelement1.setAttribute("placeholder", "companyName");
                                                    td2.appendChild(inputTextelement1); 
			
			
                                                    var inputTextelement2 = document.createElement("input"); 
                                                    inputTextelement2.setAttribute("type", "textbox");
                                                    inputTextelement2.setAttribute("name", "designation");
                                                    inputTextelement2.setAttribute("id", "designation");
                                                    inputTextelement2.setAttribute("class", "form-control");
                                                    inputTextelement2.setAttribute("placeholder", "designation");
                                                    td3.appendChild(inputTextelement2); 
			
                                                    var inputTextelement3 = document.createElement("input"); 
                                                    inputTextelement3.setAttribute("class", "form-control hasDatepicker");
                                                    inputTextelement3.setAttribute("type", "date");
                                                    inputTextelement3.setAttribute("name", "companyfrom");
                                                    inputTextelement3.setAttribute("id", "companyfrom"+rowCount);
                                                    inputTextelement3.setAttribute("placeholder", "companyfrom");
			
			
                                                    td4.appendChild(inputTextelement3); 
			
                                                    var inputTextelement4 = document.createElement("input");
                                                    inputTextelement4.setAttribute("class", "form-control hasDatepicker");			
                                                    inputTextelement4.setAttribute("type", "date");
                                                    inputTextelement4.setAttribute("name", "companyto");
                                                    inputTextelement4.setAttribute("id", "companyto"+rowCount);
                                                    inputTextelement4.setAttribute("placeholder", "companyto");
                                                    td5.appendChild(inputTextelement4); 
			
                                                    var inputTextelement5 = document.createElement("input"); 
                                                    inputTextelement5.setAttribute("type", "text");
                                                    inputTextelement5.setAttribute("name", "companylocation");
                                                    inputTextelement5.setAttribute("id", "companylocation");
                                                    inputTextelement5.setAttribute("class", "form-control");
                                                    inputTextelement5.setAttribute("placeholder", "companylocation");
                                                    td6.appendChild(inputTextelement5); 
			
			
			
			
			
                                                    tr.appendChild(td1); 
                                                    tr.appendChild(td2);
                                                    tr.appendChild(td3);  			 
                                                    tr.appendChild(td4); 
                                                    tr.appendChild(td5); 
                                                    tr.appendChild(td6); 
                                                    Parenttbodyid.appendChild(tr); 
                                                    Parenttblid.appendChild(Parenttbodyid); 
			
                                                    //$(window).load(function () {
                                                    //jQuery(function($){
                                                    //alert('in loading');
                                                    //$('#companyto').datepicker();
                                                    //$('#companyfrom').datepicker();
                                                    //});
                                                    //})
			
			
			 
			
                                                    $('input[id^="companyfrom"]').live('click', function() {
                                                        var $this = $(this);
                                                        if(!$this.data('datepicker')) {
                                                            $this.removeClass("hasDatepicker");
                                                            $this.datepicker();
                                                            $this.datepicker("show");
                                                        }
			
                                                    }); 
			
                                                    $('input[id^="companyto"]').live('click', function() {
                                                        var $this = $(this);
                                                        if(!$this.data('datepicker')) {
                                                            $this.removeClass("hasDatepicker");
                                                            $this.datepicker();
                                                            $this.datepicker("show");
                                                        }
			
                                                    }); 
			
			
	  
                                                }
	  
	  
	  
                                                function addSlierRow(){
	  
	  
                                                    var Parenttblid = document.getElementById('slider4dataTable');
                                                    var rowCount=Parenttblid.rows.length;
	  
                                                    var Parenttbodyid = document.getElementById('skillbodydataTable');
                                                    var tr = document.createElement("tr");
                                                    var td1 = document.createElement("td");
                                                    var td2 = document.createElement("td");
                                                    var td3 = document.createElement("td");	
	  
                                                    var inputCheckelement = document.createElement("input");   
                                                    inputCheckelement.setAttribute("type", "checkbox");    	  
                                                    inputCheckelement.setAttribute("name", "chk"); 
                                                    td1.appendChild(inputCheckelement); 
	  
                                                    var td2 = document.createElement("td");
                                                    var inputTextelement = document.createElement("input"); 
                                                    inputTextelement.setAttribute("name", "Skill");
                                                    inputTextelement.setAttribute("class", "form-control");
                                                    inputTextelement.setAttribute("placeholder", "Skill");
                                                    td2.appendChild(inputTextelement); 
	  
	 
	  
	  
                                                    var Parentdivid = document.createElement("div");
                                                    Parentdivid.setAttribute("class", "container"); 
	  
                                                    var divelement = document.createElement("div"); 
                                                    divelement.setAttribute("class", "slider"); 
                                                    var rangelement = document.createElement("input");
                                                    rangelement.setAttribute("type", "range");
                                                    var inputidname = "skillrangeInput" + (rowCount-1);
                                                    var outputidname ="skillscale"+(rowCount-1);
                                                    var func_val = outputidname+ ".value="  + inputidname + ".value";
                                                    rangelement.setAttribute("id", inputidname);
                                                    rangelement.setAttribute("name", "skillrangeInput");
                                                    rangelement.setAttribute("min", "0");
                                                    rangelement.setAttribute("max", "10");
                                                    rangelement.setAttribute("oninput", func_val);
                                                    var rangeoutlement = document.createElement("output");
                                                    rangeoutlement.setAttribute("id", outputidname);
                                                    rangeoutlement.setAttribute("name", "skillscale");
                                                    rangeoutlement.setAttribute("for", inputidname);
                                                    rangeoutlement.setAttribute("text", "0");
                                                    divelement.appendChild(rangelement);  
                                                    divelement.appendChild(rangeoutlement); 
                                                    Parentdivid.appendChild(divelement); 
                                                    td3.appendChild(Parentdivid); 
	  
                                                    tr.appendChild(td1); 
                                                    tr.appendChild(td2);  
                                                    tr.appendChild(td3); 
	  
                                                    Parenttbodyid.appendChild(tr); 
                                                    Parenttblid.appendChild(Parenttbodyid); 
	  
                                                }
	 
	 
                                                function removeRowFromTable(tblId)
                                                {
                                                    var tbl = document.getElementById(tblId);
                                                    var lastRow = tbl.rows.length;
                                                    if (lastRow > 2) tbl.deleteRow(lastRow - 1);
	 
  
                                                }
				
				
				
				
                                            </script>

                                            <form action="/" role="form">
                                                <div class="">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="row">

                                                                <table id="companydataTable"class="table table-hover table-striped" >
                                                                    <thead>
                                                                        <tr>
                                                                            <td>#</td>
                                                                            <td id="cname"><strong>Company Name</strong></td>
                                                                            <td id="desg"><strong>Designation</strong></td>
                                                                            <td id="from"><strong>From</strong></td>
                                                                            <td id="to"><strong>To</strong></td>
                                                                            <td id="location"><strong>Location</strong></td>
                                                                        </tr>
                                                                    </thead>

                                                                    <tbody id="companydatabodyTable">
                                                                        <tr>
                                                                            <TD><INPUT type="checkbox" name="companychk"/></TD>
                                                                            <td>
                                                                                <input type="text" class="form-control"   placeholder="companyName" id="companyName" name="companyName" title="Please Provide Company Name">
                                                                            </td>
                                                                            <td>
                                                                                <input type="text" class="form-control"   placeholder="designation" id="designation" name="designation" title="Please Provide Designation">
                                                                            </td>
                                                                            <td>
                                                                                <input type="date" class="form-control"   placeholder="companyfrom" id="companyfrom0" name="companyfrom" title="Please Provide Date Of Joining">
                                                                            </td>
                                                                            <td>
                                                                                <input type="date" class="form-control"   placeholder="companyto" id="companyto0" name="companyto" title="Please Provide Date Of Relieving">
                                                                            </td>
                                                                            <td>
                                                                                <input type="text" class="form-control"   placeholder="companylocation" id="companylocation" name="companylocation" title="Please Provide Company Location">
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <input type="hidden" id="experienceInfo" name="experienceInfo">
                                                                <input type="hidden" id="skillSetInfo" name="skillSetInfo">
                                                                <div class="row">
                                                                    <div class="col-sm-2 ">
                                                                        <a data-toggle="tooltip" data-placement="top" title="Add Skill" type="button" value="Add Row" onclick="addCompanyRow()" class="btn btn-success left" href="#"><i class="icon-plus"></i></a>


                                                                        <a data-toggle="tooltip" data-placement="top" title="Delete Skill" type="button" value="Delete Row"  class="btn btn-danger center" href="#"><i class="icon-minus"></i></a>

                                                                        <a data-toggle="tooltip" data-placement="top" title="Edit Skill" type="button" value="" onclick="" class="btn btn-primary right" href="#"><i class="icon-pencil"></i></a>
                                                                    </div>
                                                                    <div class="col-sm-10"></div>
                                                                </div>
                                                                <div class="row">  
                                                                    <div class="col-sm-6">


                                                                        <TABLE id="slider4dataTable" width="50px" border="0" class="table table-hover table-striped" >
                                                                            <hr>
                                                                            <thead>
                                                                                <tr>
                                                                                    <td>#</td>
                                                                                    <td id="skill"><strong>Skill</strong></td>
                                                                                    <td id="Scale"><strong>Scale</strong></td>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody id="skillbodydataTable">
                                                                                <TR>
                                                                                    <TD><INPUT type="checkbox" name="chk"/></TD>
                                                                                    <TD><INPUT type="text" name="Skill" class="form-control"  placeholder="Skill" title="Please Provide Your Skill"/></TD>
                                                                                    <TD>
                                                                                        <div class="container" id="slider4pageId">

                                                                                            <div class="slider">
                                                                                                <input type="range" id="skillrangeInput0" name="skillrangeInput" min="0" max="10" title="Please Provide Skill Range" oninput="skillscale0.value=skillrangeInput0.value"> 
                                                                                                <output name="skillscale" id="skillscale0" for="skillrangeInput0">0</output>
                                                                                            </div>

                                                                                        </div>

                                                                                        </div>

                                                                                    </TD>
                                                                                </TR>
                                                                            </tbody>
                                                                        </TABLE>

                                                                    </div>
                                                                    <div class="col-sm-6"></div>
                                                                </div>


                                                                <div class="row">
                                                                    <div class="col-sm-2 ">
                                                                        <a data-toggle="tooltip" data-placement="top" title="Add Skill" type="button" value="Add Row" onclick="addSlierRow()" class="btn btn-success left" href="#"><i class="icon-plus"></i></a>


                                                                        <a data-toggle="tooltip" data-placement="top" title="Delete Skill" type="button" value="Delete Row" onclick="removeRowFromTable('slider4dataTable')" class="btn btn-danger center" href="#"><i class="icon-minus"></i></a>

                                                                        <a data-toggle="tooltip" data-placement="top" title="Edit Skill" type="button" value="Edit Row" onclick="editRow('slider4dataTable')" class="btn btn-primary right" href="#"><i class="icon-pencil"></i></a>
                                                                    </div>
                                                                    <div class="col-sm-10"></div>
                                                                </div>
                                                            </div>  <!--/ .row-->
                                                            <div class="row">
                                                                <div class="col-sm-2">
                                                                    <br>
                                                                    <a data-toggle="tab" href="#pagethree"><button class="btn btn-primary btn-md col-sm-11 left" onclick="goTop();" type="button">Prev</button></a>
                                                                </div>
                                                                <div class="col-sm-8"></div>
                                                                <div class="col-sm-2">
                                                                    <br> 
                                                                    <a data-toggle="tab" href="#pagefive"><button class="btn btn-primary btn-md col-sm-12" onclick="goTop();insertText();"  type="button">Next</button></a>
                                                                    <br><br><br>
                                                                </div>
                                                            </div> 
                                                        </div>
                                                    </div><!--/ .row-->
                                                </div><!--/ .form-wizard-->
                                            </form><!--/ form-->

                                        </div><!--/ .container-->
                                    </div><!--/ .form-container-->
                                </div><!--/ #content-->

                            </div>   
                        </div>
                    </div>

                    <!-- PAGE FOUR ENDS HERE -->

                    <!--PAGE FIVE STARTS HERE-->       

                    <div class="tab-pane" id="pagefive">
                        <div class="row">
                            <div id="page-content">
                                <!-- Top Header (Fixed) Header -->
                                <div id="content">
                                    <div class="form-container">
                                        <div id="tmm-form-wizard" class="container substrate">
                                            <div class="col-sm-1"></div>

                                            <div class="row stage-container wid">
                                                <div class="stage tmm-success col-md-2 col-sm-2">
                                                    <a data-toggle="tab" href="#pageone"> <div class="stage-header head-number">1</div></a>
                                                    <div class="stage-content">
                                                        <mhead class="stage-title">
                                                            Personal Details
                                                        </mhead>
                                                        <div class="stage-info">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/ .stage-->
                                                <div class="stage tmm-success col-md-2 col-sm-2">
                                                    <a data-toggle="tab" href="#pagetwo"> <div class="stage-header head-number">2</div></a>
                                                    <div class="stage-content">
                                                        <mhead class="stage-title">
                                                            Contact Details
                                                        </mhead>

                                                    </div>
                                                </div>
                                                <!--/ .stage-->
                                                <div class="stage tmm-success col-md-2 col-sm-2">
                                                    <a data-toggle="tab" href="#pagethree">  <div class="stage-header head-number">3</div></a>
                                                    <div class="stage-content">
                                                        <mhead class="stage-title">
                                                            Education
                                                        </mhead>

                                                    </div>
                                                </div>
                                                <!--/ .stage-->
                                                <div class="stage tmm-success col-md-2 col-sm-2">
                                                    <a data-toggle="tab" href="#pagefour"> <div class="stage-header head-number">4</div></a>
                                                    <div class="stage-content">
                                                        <mhead class="stage-title">
                                                            Experience
                                                        </mhead>
                                                        <div class="stage-info">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/ .stage-->
                                                <div class="stage tmm-current col-md-2 col-sm-2">
                                                    <div class="stage-header head-number">5</div>
                                                    <div class="stage-content">
                                                        <mhead class="stage-title">
                                                            <strong>    Finish</strong>      
                                                        </mhead>
                                                        <div class="stage-info">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/ .stage-->
                                            </div>


                                            <form action="/" role="form">
                                                <div class="">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div  id="loading" style="display:none"><font color="red" style="bold"><strong>Processing...Please Wait</strong></font></div>
                                                            <h1> <strong> Registration Summary  </strong></h1>
                                                            <h2>    <strong> Personal Details </strong><a href="#pageone" value="Edit" data-toggle="tab"> <img alt="logo" src="../images/edit-icon.png" onclick="goTop();" height="30" width="30" title="Edit"> </a></h2>
                                                            <div class="row">
                                                                <div class="col-sm-6">

                                                                    <table class="table table-hover table-striped" >

                                                                        <thead>

                                                                            <tr>

                                                                                <th>
                                                                                    Attribute
                                                                                </th>

                                                                                <th>
                                                                                    Value
                                                                                </th>

                                                                            </tr>
                                                                        </thead>

                                                                        <tbody>

                                                                            <tr>


                                                                                <td >
                                                                                    <strong>

                                                                                        First Name

                                                                                    </strong>
                                                                                </td>
                                                                                <td >

                                                                                    <input type="text" class="form-control"   placeholder="Firstname" id="firstnameid" name="firstname" >
                                                                                </td>
                                                                            </tr>
                                                                            <tr>

                                                                                <td>
                                                                                    <strong>

                                                                                        Middle Name

                                                                                    </strong>
                                                                                </td>
                                                                                <td >
                                                                                    <input type="text" class="form-control"   placeholder="middleName" id="middlenameid" name="middlename" >
                                                                                </td>

                                                                            </tr>
                                                                            <tr>

                                                                                <td>
                                                                                    <strong>

                                                                                        Last Name

                                                                                    </strong>
                                                                                </td>
                                                                                <td id="lastnameid">
                                                                                    <input type="text" class="form-control"   placeholder="middleName" id="middlenameid" name="middlename" >
                                                                                </td>

                                                                            </tr>
                                                                            <tr>

                                                                                <td>
                                                                                    <strong>

                                                                                        Marital Status

                                                                                    </strong>
                                                                                </td>
                                                                                <td >
                                                                                    <input type="text" class="form-control"   placeholder="marital Status" id="marital statusid" name="marital Status" >
                                                                                </td>

                                                                            </tr>
                                                                            <tr>

                                                                                <td>
                                                                                    <strong>

                                                                                        Gender

                                                                                    </strong>
                                                                                </td>
                                                                                <td >
                                                                                    <input type="text" class="form-control"   placeholder="Gender" id="genderid" name="gender" >
                                                                                </td>

                                                                            </tr>
                                                                        </tbody>
                                                                    </table>   






                                                                </div>


                                                                <div class="col-sm-6">
                                                                    <table class="table table-hover table-striped">

                                                                        <thead>

                                                                            <tr>

                                                                                <th>
                                                                                    Attribute
                                                                                </th>

                                                                                <th>
                                                                                    Value
                                                                                </th>

                                                                            </tr>
                                                                        </thead>

                                                                        <tbody>

                                                                            <tr>

                                                                                <td>
                                                                                    <strong>

                                                                                        Date of Birth

                                                                                    </strong>
                                                                                </td>

                                                                                <td>
                                                                                    <input type="text" class="form-control"   placeholder="date Of Birth" id="startDateid" name="Date Of Birth" >
                                                                                </td>

                                                                            </tr>
                                                                            <tr>

                                                                                <td>
                                                                                    <strong>

                                                                                        Father Name

                                                                                    </strong>
                                                                                </td>
                                                                                <td >
                                                                                    <input type="text" class="form-control"   placeholder="Father Name" id="fathernameid" name="Father Name" >
                                                                                </td>

                                                                            </tr>
                                                                            <tr>

                                                                                <td>
                                                                                    <strong>

                                                                                        Father Occupation

                                                                                    </strong>
                                                                                </td>
                                                                                <td >
                                                                                    <input type="text" class="form-control"   placeholder="Father Occupation" id="fatherocupationid" name="Father Occupation" >
                                                                                </td>

                                                                            </tr>
                                                                            <tr>

                                                                                <td>
                                                                                    <strong>

                                                                                        Annual Income

                                                                                    </strong>
                                                                                </td>
                                                                                <td >
                                                                                    <input type="text" class="form-control"   placeholder="Annual Income" id="annual incomeid" name="Annual Income" >
                                                                                </td>

                                                                            </tr>
                                                                            <tr>

                                                                                <td>
                                                                                    <strong>

                                                                                        SSN/PAN

                                                                                    </strong>
                                                                                </td>
                                                                                <td >
                                                                                    <input type="text" class="form-control"   placeholder="SSN/PAN" id="panid" name="SSN/PAN" >
                                                                                </td>

                                                                            </tr>
                                                                        </tbody>
                                                                    </table>





                                                                </div>
                                                            </div>
                                                            <!-- PERSONAL DETAILS TABLE ROW ENDS HERE-->

                                                            <h2> <strong>Contact Details </strong><a href="#pagetwo" value="Edit" data-toggle="tab"> <img alt="logo" src="../images/edit-icon.png" onclick="goTop();" height="30" width="30"> </a></h2>
                                                            <div class="row">

                                                                <div class="col-sm-6">

                                                                    <table class="table table-hover table-striped">

                                                                        <thead>

                                                                            <tr>

                                                                                <th>
                                                                                    Attribute
                                                                                </th>

                                                                                <th>
                                                                                    Value
                                                                                </th>

                                                                            </tr>
                                                                        </thead>

                                                                        <tbody>

                                                                            <tr>
                                                                                <td>
                                                                                    <strong>

                                                                                        Address Line 1

                                                                                    </strong>
                                                                                </td>
                                                                                <td >
                                                                                    <input type="text" class="form-control"   placeholder="Address Line 1" id="addressline1id" name="Address Line 1" >
                                                                                </td>

                                                                            </tr>
                                                                            <tr>

                                                                                <td>
                                                                                    <strong>

                                                                                        Address Line 2

                                                                                    </strong>
                                                                                </td>
                                                                                <td >
                                                                                    <input type="text" class="form-control"   placeholder="Address Line 2" id="addressline2id" name="Address Line 2" >
                                                                                </td>

                                                                            </tr>

                                                                            <tr>

                                                                                <td>
                                                                                    <strong>

                                                                                        City

                                                                                    </strong>
                                                                                </td >
                                                                                <td >
                                                                                    <input type="text" class="form-control"   placeholder="City" id="cityid" name="City" >
                                                                                </td>

                                                                            </tr>
                                                                            <tr>

                                                                                <td>
                                                                                    <strong>

                                                                                        State

                                                                                    </strong>
                                                                                </td>
                                                                                <td >
                                                                                    <input type="text" class="form-control"   placeholder="State" id="stateid" name="State" >
                                                                                </td>

                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>


                                                                <div class="col-sm-6">

                                                                    <table class="table table-hover table-striped">

                                                                        <thead>

                                                                            <tr>


                                                                                <th>
                                                                                    Attribute
                                                                                </th>

                                                                                <th>
                                                                                    Value
                                                                                </th>

                                                                            </tr>
                                                                        </thead>

                                                                        <tbody>
                                                                            <tr>

                                                                                <td>
                                                                                    <strong>

                                                                                        Mobile Number

                                                                                    </strong>
                                                                                </td>
                                                                                <td >
                                                                                    <input type="text" class="form-control"   placeholder="Mobile Number" id="mobile numberid" name="Mobile Number" >
                                                                                </td>

                                                                            </tr>
                                                                            <tr>

                                                                                <td>
                                                                                    <strong>

                                                                                        Pincode

                                                                                    </strong>
                                                                                </td>
                                                                                <td >
                                                                                    <input type="text" class="form-control"   placeholder="Pincode" id="pin codeid" name="Pincode" >
                                                                                </td>

                                                                            </tr>
                                                                            <tr>

                                                                                <td>
                                                                                    <strong>

                                                                                        Alternate Mobile Number

                                                                                    </strong>
                                                                                </td>
                                                                                <td >
                                                                                    <input type="text" class="form-control"   placeholder="Alternate Mobile Number" id="alternate phone numberid" name="Alternate Mobile Number" >
                                                                                </td>

                                                                            </tr>
                                                                            <tr>

                                                                                <td>
                                                                                    <strong>

                                                                                        Home Phone Number

                                                                                    </strong>
                                                                                </td>
                                                                                <td >
                                                                                    <input type="text" class="form-control"   placeholder="Home Phone Number" id="home phone numberid" name="Home Phone Number" >
                                                                                </td>

                                                                            </tr>
                                                                            <tr>

                                                                                <td>
                                                                                    <strong>

                                                                                        E-Mail ID

                                                                                    </strong>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control"   placeholder="E-Mail ID"  id="emailid" name="E-Mail ID" >
                                                                                </td>

                                                                            </tr>

                                                                        </tbody>
                                                                    </table>


                                                                </div>
                                                            </div>
                                                            <!-- CONTACT DETAILS TABLE ROW ENDS HERE-->

                                                            <h2> <strong> Education Details </strong><a href="#pagethree" value="Edit" data-toggle="tab"> <img alt="logo" src="../images/edit-icon.png" onclick="goTop();" height="30" width="30"> </a></h2>
                                                            <div class="row">

                                                                <div class="col-sm-12">
                                                                    <table class="table table-hover table-striped">
                                                                        <thead>
                                                                            <tr>
                                                                                <td>
                                                                                    <strong>     Qualification</strong>
                                                                                </td>
                                                                                <td>
                                                                                    <strong>    Stream </strong>
                                                                                </td>
                                                                                <td>
                                                                                    <strong>   College/Universtiy</strong>
                                                                                </td>
                                                                                <td>
                                                                                    <strong>Medium </strong>
                                                                                </td>
                                                                                <td>
                                                                                    <strong>Year of Pass </strong>
                                                                                </td>
                                                                                <td>
                                                                                    <strong>Percentage </strong>
                                                                                </td>
                                                                            </tr>

                                                                        </thead>
                                                                        <tbody>

                                                                            <tr>
                                                                                <td >
                                                                                    <input type="text" class="form-control"    id="secondary educationid" name="category" >
                                                                                </td>
                                                                                <td  >
                                                                                    <input type="text" class="form-control"    id="sscid" name="stream" >
                                                                                </td>
                                                                                <td >
                                                                                    <input type="text" class="form-control"    id="schoolnameid" name="schoolname" >
                                                                                </td>
                                                                                <td >
                                                                                    <input type="text" class="form-control"    id="languageid" name="language" >
                                                                                </td>
                                                                                <td >
                                                                                    <input type="text" class="form-control"    id="yearofpass" name="year of pass" >
                                                                                </td>
                                                                                <td >
                                                                                    <input type="text" class="form-control"    id="percentageid" name="percentage" >
                                                                                </td>
                                                                            </tr> 
                                                                            <tr>
                                                                                <td >
                                                                                    <input type="text" class="form-control"    id="intermediateid" name="inter" >
                                                                                </td>
                                                                                <td >

                                                                                    <input type="text" class="form-control"    id="ipstreamid" name="ipestream" >
                                                                                </td>
                                                                                <td >
                                                                                    <input type="text" class="form-control"    id="ipcollegenameid" name="ipecollegename" >
                                                                                </td>
                                                                                <td >
                                                                                    <input type="text" class="form-control"    id="iplanguageid" name="ipelanguage" >
                                                                                </td>
                                                                                <td >
                                                                                    <input type="text" class="form-control"    id="ipyearofpass" name="ipeyearofpass" >
                                                                                </td>
                                                                                <td >
                                                                                    <input type="text" class="form-control"    id="ippercentage" name="percentage" >
                                                                                </td>
                                                                            </tr> 
                                                                            <tr>
                                                                                <td >
                                                                                    <input type="text" class="form-control"    id="degreeid" name="degree" >
                                                                                </td>
                                                                                <td >
                                                                                    <input type="text" class="form-control"    id="degreestreamid" name="degreestream" >
                                                                                </td>
                                                                                <td >
                                                                                    <input type="text" class="form-control"    id="degreecollegenameid" name="degrecollegename" >
                                                                                </td>
                                                                                <td >
                                                                                    <input type="text" class="form-control"    id="degreelanguageid" name="degreelanguage" >
                                                                                </td>
                                                                                <td >
                                                                                    <input type="text" class="form-control"    id="degreeyearofpassid" name="degreeyearofpass" >
                                                                                </td>
                                                                                <td >
                                                                                    <input type="text" class="form-control"    id="degreepercentageid" name="degreepercentage" >
                                                                                </td>
                                                                            </tr> 
                                                                            <tr>
                                                                                <td >
                                                                                    <input type="text" class="form-control"    id="pg" name="pg"style="border: none" >
                                                                                </td>
                                                                                <td >
                                                                                    <input type="text" class="form-control"    id="pgstreamid" name="pgstream" style="border: none">

                                                                                </td>
                                                                                <td >
                                                                                    <input type="text" class="form-control"    id="pgcollegename" name="pgcollegename" style="border: none" >
                                                                                </td>
                                                                                <td >
                                                                                    <input type="text" class="form-control"    id="pglanguage" name="pglanguage" style="border: none" >
                                                                                </td>
                                                                                <td >
                                                                                    <input type="text" class="form-control"    id="pgyearofpass" name="pgyearofpass"  style="border: none">
                                                                                </td>
                                                                                <td >
                                                                                    <input type="text" class="form-control"    id="pgpercentage" name="pgpercentage"  style="border: none">
                                                                                </td>
                                                                            </tr> 

                                                                        </tbody>
                                                                    </table> 




                                                                </div>
                                                            </div>
                                                            <!--EDUCATION DETAILS ROW ENDS HERE-->
                                                            <!--EDUCATION DETAILS ROW ENDS HERE-->
                                                            <div id="professioanl5Id"  style="display:none">
                                                                <h2> <strong>Professional Experience Details <a href="#pagefour" value="Edit" data-toggle="tab"> <img alt="logo" src="../images/edit-icon.png" onclick="goTop();" height="30" width="30"> </a></strong></h2>
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <table id="dataTable1"class="table table-hover table-striped" >
                                                                            <thead>
                                                                                <tr>
                                                                                    <td>#</td>
                                                                                    <td><strong>Company Name</strong></td>
                                                                                    <td><strong>Designation</strong></td>
                                                                                    <td><strong>From</strong></td>
                                                                                    <td><strong>To</strong></td>
                                                                                    <td><strong>Location</strong></td>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody id="ProfessionalExperienceDataTable">

                                                                            </tbody>
                                                                        </table>
                                                                    </div> 
                                                                </div>

                                                            </div>



                                                            <div class="row"> 

                                                                <div class="col-sm-6">
                                                                    <div id="skill5Table" style="display:none;">
                                                                        <h2><strong>Skill Set <a href="#pagefour" value="Edit" data-toggle="tab"> <img alt="logo" src="../images/edit-icon.png" onclick="goTop();" height="30" width="30"> </a></strong></h2>
                                                                        <table id="dbTable" width="50px" border="0" class="table table-hover table-striped" >

                                                                            <thead>
                                                                                <tr>
                                                                                    <td>#</td>
                                                                                    <td><strong>Skill</strong></td>
                                                                                    <td><strong>Scale</strong></td>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody id="skillSetDataTable" >

                                                                            </tbody>
                                                                        </table>
                                                                    </div>




                                                                    <div class="col-sm-6">
                                                                        <h2><strong>Upload <a href="#pageone" value="Edit" data-toggle="tab"> <img alt="logo" src="../images/edit-icon.png" onclick="goTop();" height="30" width="30"> </a></strong></h2>
                                                                        <table class="table table-hover table-striped">

                                                                            <thead>

                                                                                <tr>

                                                                                    <th>
                                                                                        #
                                                                                    </th>

                                                                                    <th>
                                                                                        Attribute
                                                                                    </th>

                                                                                    <th>
                                                                                        Value
                                                                                    </th>

                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>

                                                                                <tr>

                                                                                    <td>
                                                                                        1
                                                                                    </td>
                                                                                    <td>
                                                                                        <strong>

                                                                                            Uploaded Image

                                                                                        </strong>
                                                                                    </td>
                                                                                    <td id="photo">

                                                                                    </td>

                                                                                </tr>
                                                                                <tr>

                                                                                    <td>
                                                                                        2
                                                                                    </td>
                                                                                    <td>
                                                                                        <strong>

                                                                                            Uploaded Resume

                                                                                        </strong>
                                                                                    </td>
                                                                                    <td id="resume">

                                                                                    </td>

                                                                                </tr>



                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <!-- PROFESSIONAL EXPERIENCE ROW ENDS HERE-->

                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <br>
                                            <a data-toggle="tab" href="#pagefour"><button class="btn btn-primary btn-md col-sm-11" onclick="goTop();" type="button">Prev</button></a>
                                        </div>
                                        <div class="col-sm-8"></div>
                                        <div class="col-sm-2">
                                            <br> 
                                            <button id="btnOpenDialog" class="btn btn-primary btn-md col-sm-12" onclick="goTop();fnOpenNormalDialog();"  type="button">Finish</button>
                                            <a data-toggle="tab" href="#pagesix" id="five"></a>
                                            <div id="dialog-confirm"></div>
                                            <br><br><br>
                                        </div>
                                    </div> 



                                </div>
                            </div><!--/ .row-->
                        </div><!--/ .form-wizard-->
                        </form><!--/ form-->
                    </div><!--/ .container-->




                    <!-- PAGE FIVE ENDS HERE-->  

                    <!--PAGE SIX STARTS-->
                    <div id="pagesix" class="modal fade" data-backdrop="static" role="dialog" style="visibility: visible">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">

                                    <h4 class="modal-title"><strong> Registration Success </strong></h4>
                                    <hr></div>
                                <!--div  id="loadingimg" style="display:none"><font color="blue" style="bold">Processing...Please Wait</font></div-->
                                <div class="modal-body">
                                    <div class="row">
                                        <!--div class="col-sm-6">
                                            <label>E-Mail ID &nbsp; </label>
                                            <input class="form-control" placeholder="E-Mail ID" placeholder="Email Id" id="autoemail" onfocus="formInUse = true;" onblur="return checkEmail(this);allSmalls(this);" type="text">
                                            <br><br>

                                        </div>

                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-2" id="validate1" style="display:block;"> 
                                            <input type="button" value="Send OTP" class="btn btn-primary btn-md" onclick="generateOtp();"> 
                                        </div--> 

                                    </div>



                                    <div class="row">


                                        <div  class="col-sm-12">


                                            <h3 class="heavy"> <strong>Congratulations !! </strong> <br> You Have Successfully Completed The Registration Process</h3> 
                                        </div>
                                    </div>
                                    <br><br><br>
                                    <div id="displayconsultantDetails"></div>   
                                    <div class="row">
                                        <strong><div class="col-sm-4"><label>ConsultantId::</label></div></strong>  <strong> <div class="col-sm-6" id="creid"></div></strong>
                                    </div>
                                    <div class="row">
                                        <strong> <div class="col-sm-4"><label>Email ::</label></strong></div><strong><div class="col-sm-6" id="creemail"></div></strong>
                                </div>

                            </div>



                            <div class="modal-footer">
                                <div class="row">

                                    <div class="col-sm-6"></div>

                                    <div class="col-sm-2" id="validate1" style="display:block;"> 

                                        <a data-toggle="tab" href="#pagefive" data-dismiss="modal"> <button type="button" class="btn btn-primary btn-md ">OK</button></a>   
                                    </div>

                                </div>



                            </div>
                        </div>

                    </div>
                </div>


                <!--PAGE SIX ENDS-->
        </div>

    </div>
</section>

<script type="text/javascript">
    var datefield=document.createElement("input")
    datefield.setAttribute("type", "date")
    if (datefield.type!="date"){ //if browser doesn't support input type="date", load files for jQuery UI Date Picker
        document.write('<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />\n')
        document.write('<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"><\/script>\n')
        document.write('<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"><\/script>\n')
    }
</script>
<script>
    if (datefield.type!="date"){ //if browser doesn't support input type="date", initialize date picker widget:
        jQuery(function($){ //on document.ready
            $('#birthDate').datepicker();
            $('#Pin4').datepicker();
            $('#Pin3').datepicker();
            $('#Pin2').datepicker();
            $('#Pin1').datepicker();
            $('#companyto0').datepicker();
            $('#companyfrom0').datepicker();
            $('#yearOfPass').datepicker();
            $('#ipeYearOfPass').datepicker();
            $('#degreeYearOfPass').datepicker();
            $('#pgYearOfPass').datepicker();
                 
               
            
        })
    }
</script>

<br>
<br>




<!--FOOTER-->


<!-- Bottom Part -->

<section id="bottom" class="wet-asphalt">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <h4 class="noMargin">Recent Articles</h4>
                <div class="row">
                    <div class="col-sm-3 noMargin">
                        <hr>
                    </div>
                </div>
                <a class="noMargin" href="../library/scc-product-brief.php"><strong>Enhanced MFT Visibility and Control</strong><br>with IBM Sterling Control Center</a>
                <div class="greyText noMargin">
                    B2B Integration and MFT
                </div>
                <br>
                <a class="noMargin" href="../library/faq-mq.php"><strong>The 10 things that you need to know</strong><br>about IBM's new MQ Appliance</a>
                <div class="greyText noMargin">
                    SOA and Connectivity
                </div>
                <br>
                <a class="noMargin" href="../why/sstory7.php"><strong>Enhanced Visibility and Control</strong><br>for Global Food Distributor</a>
                <div class="greyText noMargin">
                    B2B Integration and MFT
                </div>
            </div>
            <!--/.col-md-3-->
            <div class="col-md-2 col-sm-6">
                <h4 class="noMargin">Team Miracle</h4>
                <div class="row">
                    <div class="col-sm-5 noMargin">
                        <hr>
                    </div>
                </div>
                <div>
                    <ul class="arrow">
                        <li><a href="../">Home</a></li>
                        <li><a href="../company/">The Company</a></li>
                        <li><a href="../company/partnerships.php">Partnerships</a></li>
                        <li><a href="../services/">Our Services</a></li>
                        <li><a href="../coming-soon.php">Library</a></li>
                        <li><a href="../contact/locations.php">Locations</a></li>
                        <li><a href="../privacy.php">Privacy Policy</a></li>
                        <li><a href="../gallery/">Memory Gallery</a></li>
                        <li><a href="../contact/">Contact Us</a></li>
                    </ul>
                </div>
            </div><!--/.col-md-3-->

            <div class="col-md-3 col-sm-6">
                <h4 class="noMargin">Opportunities</h4>
                <div class="row">
                    <div class="col-sm-3 noMargin">
                        <hr>
                    </div>
                </div>
                <div>
                    <div class="media">
                        <div class="media-body">
                            <span class="media-heading"><a href="../careers/refresh-america.php">Refresh America<br/>Ph : (248)-233-1100</a></span>
                            <small class="muted"><a href="../careers/jobs-us.php">Multiple Positions Available - USA</a></small>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-body">
                            <span class="media-heading"><a href="../careers/itg.php">IT Gurukulam<br/>Ph : +91-(891)-662-3555</a></span>
                            <small class="muted"><a href="../careers/jobs-india.php">Hiring 2015 Freshers - India</a></small>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-body">
                            <span class="media-heading"><a href="../careers/">Opportunities<br/>Ph : (248)-233-1175</a></span>
                        </div>
                    </div>
                </div>  
            </div><!--/.col-md-3-->

            <div class="col-md-3 col-sm-6">
                <h4 class="noMargin">Corporate HQ</h4>
                <div class="row">
                    <div class="col-sm-3 noMargin">
                        <hr>
                    </div>
                </div>
                <address>
                    <strong>Miracle Software Systems, Inc.</strong><br>
                    Global Headquarters<br>
                    45625 Grand River Avenue<br>
                    Novi, MI - USA(48374)<br>
                    Ph: (248)-233-1100<br>
                    E : info@miraclesoft.com
                </address>
                <a href="../contact/"><button type="button" class="btn btn-primary btn-md">Get in Touch</button></a>
            </div> <!--/.col-md-3-->
        </div>
    </div>
</section><!--/#bottom-->
<!--
<script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        
          ga('create', 'UA-57869278-1', 'auto');
          ga('send', 'pageview');
    
</script>-->
<footer id="footer" class="midnight-blue">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                &copy; 2015 <a target="_blank" href="http://www.miraclesoft.com" title="Copyright">Miracle Software Systems, Inc.</a>
            </div>
            <div class="col-sm-6">
                <ul class="pull-right socialHover">
                    <a class="btn btn-social btn-facebook" href="https://www.facebook.com/miracle45625"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="https://plus.google.com/105262074634409319991/"><i class="icon-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="https://twitter.com/Team_MSS"><i class="icon-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="https://www.linkedin.com/company/miracle-software-systems-inc"><i class="icon-linkedin"></i></a>
                    <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li><!--#gototop-->
                </ul>
            </div>
        </div>
    </div>
</footer><!--/#footer-->
</body>

<!--FOOTER-->
</html>
<!-- Bottom Part -->