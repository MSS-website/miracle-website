<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
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
   $(document).ready(function(){
               
                 
                 $('#showPopup').click();
                 
             });
function whichsite(form){
	var sites = form.elements.site, i = sites.length;
	while (--i > -1){
		if(sites[i].checked){
			return sites[i].value;
		}
	}
}
</script>

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
<script type="text/javascript">
$(document).ready(function(){
	$('.open-modal').click(function(){
		$('#myModal').modal('show');
	});
    $("#myModal").on('hidden.bs.modal', function(){
		alert("Modal window has been completely closed.");
	});
});
</script>
<style type="text/css">
.bs-example{
	margin: 20px;
}
.open-modal{
	position: absolute;
	margin: 0 auto;
	top: 20px;
	right: 0;
	left: 0;
}
</style>
<style type="text/css">
.ui-datepicker-calendar tr, .ui-datepicker-calendar td,
.ui-datepicker-calendar td a, .ui-datepicker-calendar th{font-size:inherit;}
div.ui-datepicker{font-size:12px;width:inherit;height:inherit;}
.ui-datepicker-title span{font-size:12px;}
</style>
<!--/head-->
 
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
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>First Name*</label>
                               <!-- <input type="text" required="required" class="form-control"  id="fName" placeholder="First Name" > -->
                                  <input type="text" required="required" class="form-control" id="firstname" name="firstname" placeholder="First Name" onchange="fieldLengthValidator(this);" tabindex="1">
                            </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group">
                                <label>Last Name*</label>
                              <!--  <input type="text"  class="form-control" required="required"  placeholder="Last Name" > -->
                                <input type="text"  class="form-control" required="required"  placeholder="Last Name" id="lastname" name="lastname" onchange="fieldLengthValidator(this);" tabindex="2">
                            </div>
                            </div>
                            </div>
                           
                           
                            
                            
                            <div class="row">
                            <div class="col-sm-4">
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
                            </div>
                            <div class="col-sm-4">
                            <div class="form-group">
                                <label >Phone Number*</label>
                             <!--   <input type="text"  class="form-control" required="required" placeholder="Phone Number" > -->
                                  <input type="text"  class="form-control" required="required" placeholder="Phone Number" id="phone" name="phone" onchange="return formatPhone(this);" onblur="return validatenumber(this)" tabindex="5"> 
                            </div>
                            </div>
                            <div class="col-sm-4">
                             <div class="form-group">
                                <label >Email ID*</label>
                              <!--  <input type="text"  class="form-control" required="required" placeholder="Email ID" > -->
                                   <input type="text"  class="form-control" required="required" placeholder="Email ID" id="email" name="email" onchange="return checkEmail(this);fieldLengthValidator(this);" tabindex="6">
                            </div>
                            </div>
                            </div>
                          
                          <div class="row">
                          <div class="col-sm-4">
                           <div class="form-group">
                                <label >Current Work Location</label>
                               <!-- <input type="text"  class="form-control"  placeholder="Current Organization" > -->
                                 <input type="text"  class="form-control"  placeholder="City" id="currentOrganization" name="currentOrganization" onchange="fieldLengthValidator(this);" tabindex="7">
                            </div>
                          </div>
                          <div class="col-sm-4">
                           <div class="form-group">
                                <label></label>
                               <!-- <input type="text"  class="form-control"  placeholder="Current Organization" > -->
                                 <input type="text"  class="form-control"  placeholder="State" id="currentOrganization" name="currentOrganization" onchange="fieldLengthValidator(this);" tabindex="7">
                            </div>
                          </div>
                          <div class="col-sm-4">
                           <div class="form-group">
                                <label ></label>
                               <!-- <input type="text"  class="form-control"  placeholder="Current Organization" > -->
                                 <input type="text"  class="form-control"  placeholder="Zip Code" id="currentOrganization" name="currentOrganization" onchange="fieldLengthValidator(this);" tabindex="7">
                            </div>
                          </div>
                          </div>
                           
                           <div class="row">
                            <div class="col-sm-4">
                            <div class="form-group">
                                <label >Educational Background</label>
                               <!-- <input type="text"  class="form-control"  placeholder="Current Organization" > -->
                                 <input type="text"  class="form-control"  placeholder="Educational Background" id="currentOrganization" name="currentOrganization" onchange="fieldLengthValidator(this);" tabindex="7">
                            </div>
                           </div>
                            <div class="col-sm-4">
                            <div class="form-group">
                                <label >Current Organisation</label>
                               <!-- <input type="text"  class="form-control"  placeholder="Current Organization" > -->
                                 <input type="text"  class="form-control"  placeholder="Current Organisation" id="currentOrganization" name="currentOrganization" onchange="fieldLengthValidator(this);" tabindex="7">
                            </div>
                           </div>
                            <div class="col-sm-4">
                            <div class="form-group">
                                <label >Experience</label>
                               <!-- <input type="text"  class="form-control"  placeholder="Current Organization" > -->
                                 <input type="text"  class="form-control"  placeholder="Experience" id="currentOrganization" name="currentOrganization" onchange="fieldLengthValidator(this);" tabindex="7">
                            </div>
                           </div>
                            </div>
                            
                            <div class="row">
                            <div class="col-sm-4">
                             <div class="input-group">
                                <div class="input-group-btn">
                                    <div class="btn btn-danger btn-file">
                                    <input  type="file" required="required" name="fileToUpload" id="fileToUpload" onchange="putFileName()" tabindex="13">
                                        Resume  Upload*<!-- <input  type="file" required="required"> -->
                                        
                                    </div>
                                </div>
                               <!-- <input type="text" class="form-control"  placeholder="Upload" > -->
                                 <input type="text" class="form-control"  placeholder="File" id="fileDestination" name="fileDestination">
                            </div></div>
                            <div class="col-sm-4">
                       <div class="input-group">
                       <span class="input-group-btn">
  <a href="#" class="btn btn-primary"
   data-toggle="modal"
   data-target="#basicModal" id="showPopup">Select Position</a></span>
   
   <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Which kind of position are you looking for?</h4>
            </div>
            <hr>
            <div class="modal-body">
               <div class="container">
                            <div class="row">
                                <form  target="self" action="" onsubmit="window.open(whichsite(this), '_parent'); return false;">

<label><input type="radio" name="s"  checked>Freshers</label>

<label><input type="radio" name="s"  >Experienced</label>

<label><input type="radio" name="s" >Others</label>


                          </form>
                            </div>
     
                </div>
            </div>
           <div class="modal-footer">
               <button type="submit" value="Submit" onclick="loopForm(document.thisForm);" tabindex="14" class="btn btn-primary" name="btnSubmit" id="btnSubmit">Let's Go!!</button>
             
    </div>
    </div>
  </div>
</div>
<!-- /.modal-content -->
  <input type="text" class="form-control">
    </div>
    </div>
    <div class="col-sm-4">
                          <div class="form-group">
                       
                        <button type="submit" tabindex="14" class="btn btn-primary col-sm-12" name="btnSubmit" id="btnSubmit">Submit Reference</button>
                        </div>
                        </div>
                        
                      
                        </div>
                      
                       <!-- Modal ends here -->
                    
                  
                </form>
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>
         <br>
    </section>
    <script>
        function loopForm(form) {
    var cbResults = 'Checkboxes: ';
    var radioResults = 'Radio buttons: ';
    for (var i = 0; i < form.elements.length; i++ ) {
        if (form.elements[i].type == 'checkbox') {
            if (form.elements[i].checked == true) {
                cbResults += form.elements[i].value + ' ';
            }
        }
        if (form.elements[i].type == 'radio') {
            if (form.elements[i].checked == true) {
                radioResults += form.elements[i].value + ' ';
            }
        }
    }
    document.getElementById("radioResults").innerHTML = radioResults;
}
    </script>
  
  <?php include '../footer.php';?>
  
  </body>
</html>