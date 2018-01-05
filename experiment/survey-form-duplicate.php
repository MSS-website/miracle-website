<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="description">
        <meta content="" name="author">
        <title>
            Survey Form | Miracle
        </title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet">
        <link href="../css/main.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="../css/default.css" rel="stylesheet" type="text/css">
        <link href="../css/component.css" rel="stylesheet" type="text/css">
        <script src="../js/modernizr.custom.js"></script>
        <script src="../js/fileinput.js"></script>
        <link href="../boostrap-slider/css/boostrap-slider.css" rel="stylesheet">
        <script src="../js/custom.js" type="text/javascript"></script>
        <!--range slider link-->
        <link href='http://fonts.googleapis.com/css?family=Quantico' rel='stylesheet' type='text/css'>
        <!--range slider link-->
        <script src="../js/Validation.js" type="text/javascript"></script><!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
        <link href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css" rel="stylesheet">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
         <script src="bootstrap-slider.js"></script>	
<style src="slider.css"></style>

         
         <link rel="stylesheet" href="bootstrap-slider.css" type="text/css" />
        <link href="/resources/demos/style.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="../images/favicon.ico" rel="shortcut icon">
        <link rel="script">
    </head><!--/head-->
    
    <?php include '../header.php';?>
    
    <script type="text/javascript">
$('#myModal').modal({backdrop: 'static'}) 
    $(window).load(function(){
        $('#myModal1').modal('show');
    });
    
  
</script>



        <body>
                           <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" data-backdrop="static"   aria-labelledby="myModalLabel">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h3 class="modal-title" id="myModalLabel"><strong>Employee Login</strong></h3>
                                        <hr class="noMargin">
                                      </div>
                                      <div class="modal-body noMargin">
                                       <p class="methodText">Thank you for showing interest in our event. This is an internal event for <strong> Miracle Employees </strong> only, and we will need to validate your credentials before allowing access for this.</p>
                                      <div class="row">
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <input type="text " tabindex="1" class="form-control" required="required" placeholder="Username" id="loginId" name="loginId">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" tabindex="2" class="form-control" required="required" placeholder="Password" id="password" name="password" style="width: 206px">
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top:-10px;">
                            <hr> 
                         </div>
                         <div class="row">
                             <div class="col-sm-4">
                                    <input type="button" data-dismiss="modal" value="Login" tabindex="3" class="btn btn-primary col-sm-12" name="btnSubmit1" id="btnSubmit1" onclick="doSubmit();" style="margin-left:0px;">
                             </div>
                         </div>
                     </div>
                    </div>
                 </div>
             </div> <!-- /.modal-dialog -->
    
        <body>
        <section class="container">
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-sm-7 text-left">
                    <h1 class="heavy"><!-- Survey Form Title Goes Here -->
                        Miracle City Employee Bus Interest Form
                    </h1>
                </div>
                <div class="col-sm-5 text-right">
                    <ul class="breadcrumb pull-right">
                        <li>
                            <a href="../">Home</a>
                        </li>
                        <li class="active">Survey Form
                        </li>
                    </ul>
                </div>
            </div>
            <hr class="noMarginTop">
            <div class="row">
                <div class="col-sm-5">
                   <p class="greyText heavy">Created on July 21st, 2015</p><!-- Created on <Creation-Date>-->
                   <div class="row noMarginTop noMarginBottom">
                        <div class="col-sm-5 noMarginBottom"><hr class="noMargin"></div>
                        <div class="col-sm-7"></div>
                   </div>
                   <!-- Custom Text entered by form creator -->
                   <p class="methodText">We are looking to find out if anybody is interested in boarding daily up-and-down buses to-and-from Miracle City. Anybody who is interested in this bus service, please fill in the adjacent form so that we can make a decision based on the data. </p><!-- Job Description -->
                   <p class="methodText">We are looking to find out if anybody is interested in boarding daily up-and-down buses to-and-from Miracle City. Anybody who is interested in this bus service, please fill in the adjacent form so that we can make a decision based on the data. </p><!-- Job Description -->
                   <!-- Disclaimer text common for all Surveys -->
                   <p class="greyText methodText">All form data entered within the above survey form is stored in an internal secure Miracle Data Store and any distribution of this data externally will be considered illegal. If you would like to contact support regarding the survey form please contact us at hubble@miraclesoft.com (or) marketing@miraclesoft.com</p>
                   <p class="greyText"><i>Created by clokam</i></p><!-- Created by <Creator Hubble ID> -->
                </div>
                <div class="col-sm-7">
                    <form action="#" enctype="multipart/form-data" id="myForm" method="post" name="myForm">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="greyText heavy">Please enter your full name</p>
                            <div class="form-group">
                                <input class="form-control" id="firstname" name="firstname" onchange="fieldLengthValidator(this);" placeholder="First Name" required="required" tabindex="1" type="text">
                            </div>
                            </div>
                        <div class="col-sm-6">
                            <p class="greyText heavy">Please enter your full name</p>
                            <div class="form-group">
                                <input class="form-control" id="firstname" name="firstname" onchange="fieldLengthValidator(this);" placeholder="First Name" required="required" tabindex="1" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row noMarginTop">
                        <div class="col-sm-6">
                            <p class="greyText heavy">Please enter your full name</p>
                            <div class="form-group">
                                <input type="checkbox" name="Sex" value="Male" unchecked>&nbsp;&nbsp;Male  &nbsp;&nbsp; &nbsp;&nbsp;<input type="checkbox" name="Sex" value="Female" >&nbsp;&nbsp;Female &nbsp;&nbsp;<input type="checkbox" name="Sex" value="Other" >&nbsp;&nbsp;Other
                            </div>
                            </div>
                        <div class="col-sm-6">
                            <p class="greyText heavy">Please enter your full name</p>
                            <div class="form-group">
                                <input  type="radio" name="Sex" value="Male" unchecked>&nbsp;&nbsp;Male  &nbsp;&nbsp; &nbsp;&nbsp;<input type="radio" name="Sex" value="Female" >&nbsp;&nbsp;Female &nbsp;&nbsp;<input type="radio" name="Sex" value="Other" >&nbsp;&nbsp;Other
                            </div>
                        </div>
                    </div>
                    <div class="row noMarginTop">
                        <div class="col-sm-12">
                            <p class="greyText heavy">Please enter your full name</p>
                            <div class="form-group">
                                <input type="checkbox" name="Sex" value="Male" unchecked>&nbsp;&nbsp;Male  &nbsp;&nbsp; &nbsp;&nbsp;<input type="checkbox" name="Sex" value="Female" >&nbsp;&nbsp;Female &nbsp;&nbsp;<input type="checkbox" name="Sex" value="Other" >&nbsp;&nbsp;Other
                                &nbsp;&nbsp;&nbsp;&nbsp;<input  type="checkbox" name="Sex" value="Male" unchecked>&nbsp;&nbsp;Male  &nbsp;&nbsp; &nbsp;&nbsp;<input type="checkbox" name="Sex" value="Female" >&nbsp;&nbsp;Female &nbsp;&nbsp;<input type="checkbox" name="Sex" value="Other" >&nbsp;&nbsp;Other                            
                            </div>
                        </div>
                    </div>
                    <div class="row noMarginTop">
                        <div class="col-sm-12">
                            <p class="greyText heavy">Please enter your full name</p>
                            <div class="form-group">
                                <input type="radio" name="Sex" value="Male" unchecked>&nbsp;&nbsp;Male  &nbsp;&nbsp; &nbsp;&nbsp;<input type="radio" name="Sex" value="Female" >&nbsp;&nbsp;Female &nbsp;&nbsp;<input type="radio" name="Sex" value="Other" unchecked >&nbsp;&nbsp;Other
                                &nbsp;&nbsp;&nbsp;&nbsp;<input  type="radio" name="Sex" value="Male" unchecked>&nbsp;&nbsp;Male  &nbsp;&nbsp; &nbsp;&nbsp;<input type="radio" name="Sex" value="Female" >&nbsp;&nbsp;Female &nbsp;&nbsp;<input type="radio" name="Sex" value="Other" >&nbsp;&nbsp;Other                            
                            </div>
                        </div>
                    </div>
                    
                    <div class="row noMarginTop">
                        <div class="col-sm-12">
                            <p class="greyText heavy">Please enter your full name</p>
                            <div class="form-group">
                                <textarea rows="4"  class="form-control"  placeholdercsholder="Input Text">
                                </textarea>    
                            </div>
                        </div>
                    </div>
                    
                    <div class="row noMarginTop">
                        
                          
                        
                        
                            <div class="col-sm-6"></div>
                        </div>
                       
                 
                    <div class="row noMarginTop">
                       
                        <div class="col-sm-6">
                            <link href='http://fonts.googleapis.com/css?family=Quantico' rel='stylesheet' type='text/css'>
                        <div class="container">
                          <div class="slider">
                         <b>0</b> <input type = "range" min="0" max="100"  style="width:230px;" onchange="rangevalue.value=value"/><b>100</b>
                        	<output id="rangevalue"  >50</output>
                          
                          </div>
                          </div> 

                        </div>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-danger btn-file">
                                        Resume<input class="form-control" tabindex="6" onchange="putFileName()" multiple="" name="fileToUpload" id="fileToUpload" required="required" type="file">
                                    </span>
                                </span>
                                <input class="form-control col-sm-4" id="fileDestination" name="fileDestination" required="required" placeholder="Upload" readonly="" type="text">
                            </div>
                        </div>
                    </div>
                            
              
                    </form>
                    <div class="row">
                        
                                <div class="col-sm-6">
                                   <div class="form-group">
                                    <span class="btn btn-danger btn-file col-sm-12">Reset
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <span class="btn btn-success btn-file col-sm-12">Submit
                                    </div>
                                </div>
                        </div>
                </div>
                
            </div><br>
        </section><?php include '../footer.php';?>
       
	<script type='text/javascript' src="../booststrap/dependencies/js/modernizr.js"></script>
        <!--Custom Code ends-->
        
    </body>
</html>