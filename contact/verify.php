<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <META NAME="Title" CONTENT="Home | Miracle">
    <META NAME="Description" CONTENT="Need to check a previous employee of ours. Contact us today and our team can help you out with the verification process. ">
    <META NAME="Robots" CONTENT="INDEX,FOLLOW">
    <title>Employee Verification | Miracle</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    

    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    
	<link rel="stylesheet" type="text/css" href="../css/default.css" />
	<link rel="stylesheet" type="text/css" href="../css/component.css" />
	<script src="../js/modernizr.custom.js"></script>
    <!--[if lt IE 6]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../images/favicon.ico">

<script type="text/javascript">
    var datefield=document.createElement("input")
    datefield.setAttribute("type", "date")
    if (datefield.type!="date"){ //if browser doesn't support input type="date", load files for jQuery UI Date Picker
        document.write('<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />\n')
        document.write('<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"><\/script>\n')
        document.write('<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"><\/script>\n')
    }
</script>
 <script>
if (datefield.type!="date"){ //if browser doesn't support input type="date", initialize date picker widget:
    jQuery(function($){ //on document.ready
        $('#startDate').datepicker();
        $('#endDate').datepicker();
    })
}
</script>
<style type="text/css">
.ui-datepicker-calendar tr, .ui-datepicker-calendar td,
.ui-datepicker-calendar td a, .ui-datepicker-calendar th{font-size:inherit;}
div.ui-datepicker{font-size:12px;width:inherit;height:inherit;}
.ui-datepicker-title span{font-size:12px;}
</style>
</head><!--/head-->
 <!DOCTYPE html>
 <html>
     <meta name=viewport content="width=device-width, initial-scale=1">
<!--[if lte IE 8]>
<div id="warning">
<META http-equiv="refresh" content="0;URL=http://www.miraclesoft.com/outdated-browser.php">
</div>-->


		
		
    <!--[if lt IE 9]>

<script src="js/html5shiv.js">
</script>

<script src="js/respond.min.js">
</script>
<![endif]-->

  

  
  </head>
  <?php include '../header.php';?>
  <body>
    
     <?php
      
    require '../classes/EmployeeDetails.php';
?> 
    
   <section class="container">
        <br>
        <br>
        <br>
        
      
        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-5 text-left">
            
              <h1 class="heavy">Employee Verification</h1>
              
            
          </div>
          <div class="col-sm-5 text-right">
            <ul class="breadcrumb pull-right">
                <li><a href="../">Home</a></li>
                <li><a href="../contact">Contact</a></li>
                <li class="active">Employee Verification</li>
            </ul>
          </div>
          <div class="col-sm-1"></div>
        </div>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <div class="jumbotron">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="heavy">Employer Details</h3>
                        <p class="methodText">Please enter your details for future reference and contact purposes</p>
                    </div>
                </div>
              <!--  <form id="myForm" onsubmit="return validateForm();" action="../thank-you.php"> -->
              <div id="response">
                     
    
                   
        </div>
                    <form id="myForm" action="" method="post">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="fName">First Name</label>
                                <input type="text" tabindex="1" class="form-control" required="required" placeholder="First Name" id="firstname" name="firstname" onchange="fieldLengthValidator(this);" tabindex="1">
                            </div>
                            <div class="form-group">
                                <label for="organization">Organization</label>
                                <input type="text" tabindex="4" class="form-control" required="required" placeholder="Organization" id="organization" name="organization" onchange="fieldLengthValidator(this);" tabindex="4">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="lName">Last Name</label>
                                <input type="text" tabindex="2" class="form-control" required="required" placeholder="Last Name" id="lastname" name="lastname" onchange="fieldLengthValidator(this);" tabindex="2">
                            </div>
                            <div class="form-group">
                                <label for="designation">Designation</label>
                                <input type="text" tabindex="5" class="form-control" required="required" placeholder="Designation" name="designation" id="designation" onchange="fieldLengthValidator(this);">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="email">Email ID</label>
                                <input type="text" tabindex="3" class="form-control" required="required" placeholder="Email" id="email" name="email" onchange="return checkEmail(this);fieldLengthValidator(this);" tabindex="3">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>    
                                <input type="text" tabindex="6" class="form-control" required="required" onkeypress="return isNumberKey(event)" placeholder="Work Phone" id="phone" name="phone" onchange="return formatPhone(this);" onblur="return validatenumber(this)" tabindex="6">
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="heavy">Employee Details</h3>
                            <p class="methodText">Please enter your details of the employee whom you would like to verify</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="eName">Employee Name</label>
                                <input type="text" tabindex="7" class="form-control" required="required" placeholder="Employee Name" id="employeeName" name="employeeName" onchange="fieldLengthValidator(this);" tabindex="7">
                            </div>
                            <div class="form-group">
                                <label for="eId">Employee ID</label>
                                <input type="text" tabindex="10" class="form-control" required="required" onkeypress="return isNumberKey(event)" placeholder="Employee ID" id="employeeId" name="employeeId" onkeypress="NumericValidation(this);" tabindex="10">
                            </div>
                            <label for="location">Employment Location</label>
                            <select class="form-control" id="location" name="location" tabindex="13">
                              <option>United States</option>
                              <option>India</option>
                              <option>Other</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="designation">Designation</label>
                                <input type="text" tabindex="8" class="form-control" required="required" placeholder="Designation" name="empDesignation" id="empDesignation" onchange="fieldLengthValidator(this);">
                            </div>
                            <div class="form-group">
                                <label for="sDate">Employment Started</label>
                                <input type="date" tabindex="11" class="form-control" required="required" placeholder="Start Date" id="startDate" name="startDate">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="eDepartment">Department</label>
                                <input type="text" tabindex="9" class="form-control" required="required" placeholder="Department" name="department" id="department" onchange="fieldLengthValidator(this);">
                            </div>
                            <div class="form-group">
                                <label for="eDate">Employment Ended</label>
                                <input type="date" tabindex="12" class="form-control" required="required" placeholder="End Date" id="endDate" name="endDate">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-body">
                                        <strong><div id="showAlertText"></div></strong>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            <button type="submit" tabindex="14" class="btn btn-primary" name="btnSubmit" id="btnSubmit">Submit Verification Enquiry</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>
         <br>
    </section>
  
  <?php include '../footer.php';?>
  
  </body>
</html>