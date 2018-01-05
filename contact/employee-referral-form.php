<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="">
    
    <meta name="author" content="">
    
    <title>
      Employee Referral | Miracle
    </title>
    
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    
    <link href="../css/main.css" rel="stylesheet">
    
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/default.css"/>
    <link rel="stylesheet" type="text/css" href="../css/component.css"/>
    <script src="../js/modernizr.custom.js">
    </script>
    <script src="../js/fileinput.js">
    </script>
    <script src="../js/custom.js">
    </script>
    
    <script type="text/javascript" src="../js/Validation.js">
    </script>
    	<!-- cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js --->
    <!--[if lt IE 9]>
    <script src="../js/html5shiv.js"></script>
    <script src="../js/respond.min.js"></script>
    <![endif]-->
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../images/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    
   

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

  
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  
  <link rel="shortcut icon" href="../images/favicon.ico">
  
  </head>

  <?php include '../header.php';?>
  <body>
    
    
    
   <section class="container">
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-5 text-left">
              <h1 class="heavy">
              Employee Referral
            </h1>
           
          </div>
          <div class="col-sm-5 text-right">
            <ul class="breadcrumb pull-right">
                <li><a href="../">Home</a></li>
                <li><a href="../contact/">Contact</a></li>
                <li class="active">Employee Referral</li>
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
                        <h3 class="heavy">Reference Details</h3>
                        <p class="methodText">Please enter the details of the candidate being referred</p>
                    </div>
                </div>
              <div id="response">
                </div>
                   <!-- <form id="myForm" action="" method="post"> -->
                         <form method="post" >
                             <input type="hidden" id="createdBy" name="createdBy" value="" >
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>First Name*</label>
                               <!-- <input type="text" required="required" class="form-control"  id="fName" placeholder="First Name" > -->
                                  <input type="text" required="required" class="form-control" id="firstname" name="firstname" placeholder="First Name" onchange="fieldLengthValidator(this);" tabindex="1">
                            </div>
                            <div class="form-group">
                                <label >How are you related?*</label>
                               <!-- <select class="form-control" required="required"> -->
                                    <select class="form-control" required="required" id="relation" name="relation" tabindex="4">
                                    <option>Family</option>
                                    <option>Friend</option>
                                    <option>Colleague</option>
                                    <option>Other</option>
                                    
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Current Organization</label>
                               <!-- <input type="text"  class="form-control"  placeholder="Current Organization" > -->
                                 <input type="text"  class="form-control"  placeholder="Current Organization" id="currentOrganization" name="currentOrganization" onchange="fieldLengthValidator(this);" tabindex="7">
                            </div>
                            <div>
                            <label>Interested Location*</label>
                          <!--  <select  class="form-control" required="required"> -->
                                 <select  class="form-control" required="required" id="intrestedLocation" name="intrestedLocation" tabindex="10">
                              <option>India</option>
                              <option>United States</option>
                              <option>Other</option>
                            </select>
                        </div>
                        <br>
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <div class="btn btn-danger btn-file">
                                        Resume  Upload*<!-- <input  type="file" required="required"> -->
                                        <input  type="file" required="required" name="fileToUpload" id="fileToUpload" onchange="putFileName()" tabindex="13">
                                    </div>
                                </div>
                               <!-- <input type="text" class="form-control"  placeholder="Upload" > -->
                                 <input type="text" class="form-control"  placeholder="Upload" id="fileDestination" name="fileDestination">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Last Name*</label>
                              <!--  <input type="text"  class="form-control" required="required"  placeholder="Last Name" > -->
                                <input type="text"  class="form-control" required="required"  placeholder="Last Name" id="lastname" name="lastname" onchange="fieldLengthValidator(this);" tabindex="2">
                            </div>
                            <div class="form-group">
                                <label >Phone Number*</label>
                             <!--   <input type="text"  class="form-control" required="required" placeholder="Phone Number" > -->
                                  <input type="text"  class="form-control" required="required" placeholder="Phone Number" id="phone" name="phone" onchange="return formatPhone(this);" onblur="return validatenumber(this)" tabindex="5"> 
                            </div>
                            <div class="form-group">
                                <label >Current Occupation</label>
                             <!--   <input type="text"  class="form-control"  placeholder="Current Occupation" > -->
                                 <input type="text"  class="form-control"  placeholder="Current Occupation" id="currentOccupation" name="currentOccupation" onchange="fieldLengthValidator(this);" tabindex="8">
                            </div>
                            <label>Interested Department*</label>
                         <!--   <select class="form-control" required="required"> -->
                             <select class="form-control" required="required" id="intrestedDepartment" name="intrestedDepartment" tabindex="11">
                              <option>Development and Delivery</option>
                              <option>Content/Digital Marketing</option>
                              <option>Recruitment and Sourcing</option>
                              <option>Operations and IT Administration</option>
                              <option>Human Capital Management</option>
                              <option>Project Management Office</option>
                              <option>Sales and Business Development</option>
                              <option>Other Departments</option>
                            </select>
                            <br>
                            <button type="submit" tabindex="14" class="btn btn-primary" name="btnSubmit" id="btnSubmit">Submit Reference</button>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Educational Qualification*</label>
                               <!-- <input type="text"  class="form-control" required="required"  placeholder="Educational Qualification" > -->
                                 <input type="text"  class="form-control" required="required"  placeholder="Educational Qualification" id="educationalQualification" name="educationalQualification" onchange="fieldLengthValidator(this);" tabindex="3">
                            </div>
                            <div class="form-group">
                                <label >Email ID*</label>
                              <!--  <input type="text"  class="form-control" required="required" placeholder="Email ID" > -->
                                   <input type="text"  class="form-control" required="required" placeholder="Email ID" id="email" name="email" onchange="return checkEmail(this);fieldLengthValidator(this);" tabindex="6">
                            </div>
                            <div class="form-group">
                                <label >Experience(If Any)</label>
                              <!--  <input type="text"  class="form-control"  placeholder="Experience(If Any)"> -->
                                 <input type="text"  class="form-control"  placeholder="Experience(If Any)" id="experience" name="experience" onchange="fieldLengthValidator(this);" tabindex="9"> 
                            </div>
                             <div class="form-group">
                                <label >Current Location</label>
                              <!--  <input type="text"  class="form-control"  placeholder="Current Location"> -->
                                 <input type="text"  class="form-control"  placeholder="Current Location" id="currentLocation" name="currentLocation" onchange="fieldLengthValidator(this);" tabindex="12">
                            </div>
                        </div>
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"><!-- Modal for showing alerts -->
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
                                </div><!-- Modal ends here -->
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