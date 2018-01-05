<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Employee Growth, Diversified Services and Customer Satisfaction are the way forward for the team at Miracle">
    
    <meta name="author" content="">
    
    <title>
     Appraisal Form
    </title>
    
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    
    <link href="../css/main.css" rel="stylesheet">
    
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/default.css"/>
    <link rel="stylesheet" type="text/css" href="../css/component.css"/>
    <script src="../js/modernizr.custom.js">
    </script>
    <link rel='stylesheet' type='text/css' href='https://static.ctctcdn.com/h/contacts-embedded-signup-assets/1.0.2/css/signup-form.css'>
    
    <script type='text/javascript'>
   var localizedErrMap = {};
   localizedErrMap['required'] = 		'This field is required.';
   localizedErrMap['ca'] = 			'An unexpected error occurred while attempting to send email.';
   localizedErrMap['email'] = 			'Please enter your email address in name@email.com format.';
   localizedErrMap['birthday'] = 		'Please enter birthday in MM/DD format.';
   localizedErrMap['anniversary'] = 	'Please enter anniversary in MM/DD/YYYY format.';
   localizedErrMap['custom_date'] = 	'Please enter this date in MM/DD/YYYY format.';
   localizedErrMap['list'] = 			'Please select at least one email list.';
   localizedErrMap['generic'] = 		'This field is invalid.';
   localizedErrMap['shared'] = 		'Sorry, we could not complete your sign-up. Please contact us to resolve this.';
   localizedErrMap['state_mismatch'] = 'Mismatched State/Province and Country.';
	localizedErrMap['state_province'] = 'Select a state/province';
   localizedErrMap['selectcountry'] = 	'Select a country';
   var postURL = 'https://visitor2.constantcontact.com/api/signup';
</script>
<script type='text/javascript' src='https://static.ctctcdn.com/h/contacts-embedded-signup-assets/1.0.2/js/signup-form.js'></script>
    
    <!--[if lt IE 9]>

<script src="js/html5shiv.js">
</script>

<script src="js/respond.min.js">
</script>
<![endif]-->
  
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  
  <link rel="shortcut icon" href="../images/favicon.ico">
  <style type="text/css">
.ui-datepicker-calendar tr, .ui-datepicker-calendar td,
.ui-datepicker-calendar td a, .ui-datepicker-calendar th{font-size:inherit;}
div.ui-datepicker{font-size:12px;width:inherit;height:inherit;}
.ui-datepicker-title span{font-size:12px;}
</style>
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
  </head>
  
  <?php include '../header.php';?>
  <body>
    
    <section id="about-us" class="container">
      
      <br>
      <br>
      <br>
      <br>
      <div class="row">
        
        <div class="col-sm-6 text-left">
          
              <h1 class="heavy">
           Appraisal Form
              </h1>
            
        </div>
        <div class="col-sm-6 text-right">
          
          <ul class="breadcrumb pull-right">
            
            <li>
              <a href="../">
                Home
              </a>
            </li>
            <li>
              <a href="../company/about-us.php">
                Company
              </a>
            </li>
            <li class="active">
             
            </li>
          </ul>
          
        </div>
     </div>
 
     
   <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <div class="jumbotron">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="heavy">Part A – Basic Information</h3>
                        
                    </div>
                </div>
            
                <form id="myForm" action="" method="post">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="fName">Full Name:</label>
                                <input type="text" tabindex="1" class="form-control" required="required" placeholder="Full Name:" id="firstname" name="firstname" onchange="fieldLengthValidator(this);" tabindex="1">
                            </div>
                            <div class="form-group">
                                <label for="organization">Designation: </label>
                                <input type="text" tabindex="4" class="form-control" required="required" placeholder="Designation:" id="organization" name="organization" onchange="fieldLengthValidator(this);" tabindex="4">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="lName">Department:</label>
                               <select class="form-control" id="location" name="location" tabindex="13">
                              <option>Development</option>
                              <option>Marketing</option>
                              <option>Sales</option>
                              <option>HR</option>
                              <option>Operations</option>
                              <option>Recruitment</option>
                            </select>
                            </div>
                            <div class="form-group">
                                <label for="sDate">Employment Started</label>
                                <input type="date" tabindex="11" class="form-control" required="required" placeholder="Start Date" id="startDate" name="startDate">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="email">Time in this Position:</label>
                                <input type="text" tabindex="3" class="form-control" required="required" placeholder="Time in this Position:" id="email" name="email" onchange="return checkEmail(this);fieldLengthValidator(this);" tabindex="3">
                            </div>
                            <div class="form-group">
                                <label for="phone">Work Location</label>    
                                <input type="text" tabindex="6" class="form-control" required="required" onkeypress="return isNumberKey(event)" placeholder="Work Phone" id="phone" name="phone" onchange="return formatPhone(this);" onblur="return validatenumber(this)" tabindex="6">
                            </div>
                           
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-sm-4">
                     <div class="form-group">
                                <label for="phone">Appraisal Month and Date:</label>    
                               </div></div>
                               <div class="col-sm-2">
                     <div class="form-group">
                                 <select class="form-control" id="location" name="location" tabindex="13">
                              <option>Month</option>
                              <option>Jan</option>
                              <option>Feb</option>
                              <option>Mar</option>
                              <option>Apr</option>
                              <option>May</option>
                               <option>Jun</option>
                              <option>Jul</option>
                              <option>Aug</option>
                              <option>Sep</option>
                              <option>Oct</option>
                               <option>Nov</option>
                              <option>Dec</option>
                             
                            </select>
                               </div></div>
                               <div class="col-sm-2">
                     <div class="form-group">
                              <select class="form-control" id="location" name="location" tabindex="13">
                              <option>Date</option>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                              <option>6</option>
                              <option>7</option>
                              <option>8</option>
                              <option>9</option>
                              <option>10</option>
                              <option>11</option>
                              <option>12</option>
                              <option>13</option>
                              <option>14</option>
                              <option>15</option>
                              <option>16</option>
                              <option>17</option>
                              <option>18</option>
                              <option>19</option>
                              <option>20</option>
                              <option>21</option>
                              <option>22</option>
                              <option>23</option>
                              <option>24</option>
                              <option>25</option>
                              <option>26</option>
                              <option>27</option>
                              <option>28</option>
                              <option>29</option>
                              <option>30</option>
                              <option>31</option>
                             
                            </select>
                               </div></div>
                    </div>
                  
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="heavy">Part B – Employee’s Assessment</h3>
                           
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                           <div class="form-group">
                                    <textarea class="form-control" rows="3" tabindex="3" placeholder="State your current duties and responsibilities. " rows="5" required="true" name="suggestions" id="suggestions" onchange="fieldLengthValidator(this);"></textarea>  
                                    
                                </div>
                        </div>
                         <div class="col-sm-6">
                           <div class="form-group">
                                    <textarea class="form-control" rows="3" tabindex="3" placeholder="What elements of your job do you find most difficult and interesting?  " rows="5" required="true" name="suggestions" id="suggestions" onchange="fieldLengthValidator(this);"></textarea>  
                                    
                                </div>
                        </div>
                      
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                           <div class="form-group">
                                    <textarea class="form-control" rows="3" tabindex="3" placeholder="What do you consider to be your most important achievement/s till date?  " rows="5" required="true" name="suggestions" id="suggestions" onchange="fieldLengthValidator(this);"></textarea>  
                                    
                                </div>
                        </div>
                         <div class="col-sm-6">
                           <div class="form-group">
                                    <textarea class="form-control" rows="3" tabindex="3" placeholder="What are your efforts in improving the work environment:  " rows="5" required="true" name="suggestions" id="suggestions" onchange="fieldLengthValidator(this);"></textarea>  
                                    
                                </div>
                        </div>
                      
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                           <div class="form-group">
                                    <textarea class="form-control" rows="3" tabindex="3" placeholder="How is your Interaction with peers and colleagues: " rows="5" required="true" name="suggestions" id="suggestions" onchange="fieldLengthValidator(this);"></textarea>  
                                    
                                </div>
                        </div>
                         <div class="col-sm-6">
                           <div class="form-group">
                                    <textarea class="form-control" rows="3" tabindex="3" placeholder="Do you believe Employee Evaluations are an important part of driving success:  " rows="5" required="true" name="suggestions" id="suggestions" onchange="fieldLengthValidator(this);"></textarea>  
                                    
                                </div>
                        </div>
                        </div>
                      <div class="row">
                        <div class="col-sm-12">
                            <h3 class="heavy">Part C – Management Evaluation</h3>
                           
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                           <div class="form-group">
                                    <textarea class="form-control" rows="3" tabindex="3" placeholder="TM Comments: " rows="5" required="true" name="suggestions" id="suggestions" onchange="fieldLengthValidator(this);"></textarea>  
                                    
                                </div>
                        </div>
                         <div class="col-sm-6">
                           <div class="form-group">
                                    <textarea class="form-control" rows="3" tabindex="3" placeholder="VP Comments (On-site):  " rows="5" required="true" name="suggestions" id="suggestions" onchange="fieldLengthValidator(this);"></textarea>  
                                    
                                </div>
                        </div>
                      
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                           <div class="form-group">
                                    <textarea class="form-control" rows="3" tabindex="3" placeholder="HR Comments:   " rows="5" required="true" name="suggestions" id="suggestions" onchange="fieldLengthValidator(this);"></textarea>  
                                    
                                </div>
                        </div>
                         <div class="col-sm-6">
                           <div class="form-group">
                                    <textarea class="form-control" rows="3" tabindex="3" placeholder="VP Comments (Offshore):  " rows="5" required="true" name="suggestions" id="suggestions" onchange="fieldLengthValidator(this);"></textarea>  
                                    
                                </div>
                        </div>
                      
                    </div>
                   <div class="row">
                   <div class="col-sm-11"></div>
                    <div class="col-sm-1"> <button class="btn btn-primary btn-md" type="button" style="margin-left:-21px">Submit</button></div>
                   </div>
                </form>
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>
      
    </section>
    
    
  
    <?php include '../footer.php';?>
    
  </body>
</html>