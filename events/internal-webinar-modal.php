<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="">
    
    <meta name="author" content="">
    
    <title>
      Internal Webinar Depot | Miracle
    </title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/default.css"/>
    <link rel="stylesheet" type="text/css" href="../css/component.css"/>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/fileinput.js"></script>
    <script src="js/custom.js">
    <link rel="stylesheet" href="css/datepicker.css" />
    </script>
    
   <script type="text/javascript">
        $(function () {
            $('#datetimepicker1').datetimepicker({
                inline: true,
                sideBySide: true
            });
        });
    </script>
    <script type="text/javascript" src="../js/Validation.js">
    </script>
    <!--[if lt IE 9]>

<script src="js/html5shiv.js">
</script>

<script src="js/respond.min.js">
</script>
<![endif]-->
  
 
  
  <link rel="shortcut icon" href="../images/favicon.ico">
  <style>
  body {
    padding-top: 50px;
    
}
.dropdown.dropdown-lg .dropdown-menu {
    margin-top: -1px;
    padding: 6px 20px;
    
}
.input-group-btn .btn-group {
    display: flex !important;
}
.btn-group .btn {
    border-radius: 0;
    margin-left: -1px;
}
.btn-group .btn:last-child {
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
}
.btn-group .form-horizontal .btn[type="submit"] {
  border-top-left-radius: 4px;
  border-bottom-left-radius: 4px;
}
.form-horizontal .form-group {
    margin-left: 0;
    margin-right: 0;
}
.form-group .form-control:last-child {
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
}

@media screen and (min-width: 768px) {
    #adv-search {
        
        margin: 0 auto;
    }
    .dropdown.dropdown-lg {
        position: static !important;
    }
    .dropdown.dropdown-lg .dropdown-menu {
        min-width: 280px;
    }
}
  </style>

  </head>
  <?php include '../header.php';?>
  <body>
<script type="text/javascript">
$('#myModal').modal({backdrop: 'static'}) 
    $(window).load(function(){
        $('#myModal1').modal('show');
    });
    
  
</script>

  <!-- Modal -->
  <body>
    <div class="modal" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
       
        <h3 class="modal-title" id="memberModalLabel"><strong>Employee Login</strong> </h4>
      </div>
        
        <div class="modal-body"> 
       
                        <div class="row">
                        <div class="col-sm-5">
                           <div class="form-group">
                                    <input type="text " tabindex="1" class="form-control" required="required" placeholder="Username" id="loginId" name="loginId"onchange="fieldLengthValidator(this);">
                           </div>
                           <div class="form-group">
                                    <input type="text " tabindex="1" class="form-control" required="required" placeholder="Password" id="loginId" name="loginId"onchange="fieldLengthValidator(this);">
                           </div>
                           <br>
                           <a href="../forgot-password.php"> Forgot password !!&nbsp;&nbsp;</a>
                        </div>
                          <div class="col-sm-7"></div> 
                     </div>
                          <div class="modal-footer">     
                        <div class="row">
                       <div class="col-sm-4"> 
                            
                        </div>
                            <?php echo $resultMessage;?>
                         <div class="col-sm-4"></div>      
                       <div class="col-sm-4">
                          <button type="submit" tabindex="3" class="btn btn-primary col-sm-12" data-dismiss="modal" name="btnSubmit" id="btnSubmit">
                              Login 
                                </button>
                        </div>
                     </div>
              </div>
           </div>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  
  </div>
     <section  class="container">
<br>
      <div class="row">
               
                <div class="col-sm-7 text-left" style="margin-left:-12px;">
                    <h1 class="heavy">
                       Webinar Depot
                    </h1>
                </div>
                <div class="col-sm-5 text-right">
                    <ul class="breadcrumb pull-right">
                        <li>
                            <a href="../">Home</a>
                        </li>
                        <li>
                       <a href="../events/upcoming.php">
                Events
              </a></li>
                        <li class="active">Webinar Depot
                        </li>
                    </ul>
                </div>
                
            </div>
     
<div class="row">
        <br>
        <h3 class="heavy noMargin">Upcoming Webinars </h3>
        <div class="row">
                        <div class="col-sm-4">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
         <table class="table table-hover table-striped">
            
            <thead>
              
              <tr>
                
                <th>
                  #
                </th>
                
                <th>
                  Title
                </th>
                
                <th>
                  Date
                </th>
                 <th>
                 Time
                </th>
                <th>
                 Speaker(s)
                </th>
                <th>
                Register
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
                   
               IBM Partner University Enablement <br>for Sales Professionals
                   
                  </strong>
                </td>
                <td>
                 June 17th, 2015
                </td>
                <td>
               2:00 PM to 3:00 PM EST
                </td>
                <td>
                Rick Paila</td>
                <td><button class="btn btn-primary btn-sm btn-success" type="button">Register</button></td>
              </tr>
             <tr>
                
                <td>
                  2
                </td>
                <td>
                  <strong>
                   
                Miracle Who we are and What we do
                   
                  </strong>
                </td>
                <td>
                 June 18th, 2015
                </td>
                <td>
               3:00 PM  to 4:00 PM EST
                </td>
                 <td>
                Chanakya Lokam
                </td>
                <td><button class="btn btn-primary btn-sm btn-success" type="button">Register</button></td>
              </tr>
             <tr>
                
                <td>
                  3
                </td>
                <td>
                  <strong>
                   
                Data Power - SOMA Scripts
                <br>for Auto Deployment and What Next?
                   
                  </strong>
                </td>
                <td>
                  June 30th, 2015
                </td>
                <td>
                 1:00 PM  to 1:30 PM EST
                </td>
                 <td>
                Hanu Veluri</td>
                <td><button class="btn btn-primary btn-sm btn-success" type="button">Register</button></td>
              </tr>
              
            </tbody>
            
          </table>
          </div>
          <div class="row">
          <h3 class="heavy noMargin">
         On-Demand Webinars </h3>
        <div class="row">
                        <div class="col-sm-4">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div><!-- This is the divider line between the heading and the content -->
                    
                    <br>
                    <div class="row">
                    <form method="post" action="" id="myForm" name="myForm">
                       
                        <div class="col-sm-3">
                            <select class="form-control" name="trackName" id="trackName">
                              <!--  <option disabled selected value="default"> -->
                                                               <option value="" selected="">
                                                                      Search by Track
                                </option>
                  <option value="Cloud-Services">Cloud-Services</option><option value="SOA and Connectivity">SOA and Connectivity</option><option value="B2B Integration and File Transfer">B2B Integration and File Transfer</option><option value="SAP/ERP Services">SAP/ERP Services</option><option value="Application Life Cycle Management">Application Life Cycle Management</option><option value="Business Process Management">Business Process Management</option><option value="Quality Assurance and Testing">Quality Assurance and Testing</option><option value="Digital Experience and Commerce">Digital Experience and Commerce</option> 
                             
                            </select>
                        </div>
                        <div class="col-sm-3">
                            
                            
                            <!--Date search-->
                           

          
            <div class="input-group" id="adv-search">
                <input type="text" class="form-control" placeholder="Search for snippets" />
                <div class="input-group-btn">
                    <div class="btn-group" role="group">
                        <div class="dropdown dropdown-lg">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                <form class="form-horizontal" role="form">
                                 
                                  <div class="form-group">
                                    <label for="contain">From Date</label>
                                   <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
                                  <div class="form-group">
                                    <label for="contain">To Date</label>
                                      <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
                                  </div>
                                 
                                </form>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
          </div>
        <!--Date search-->
               <script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {
                
                $('.input-daterange').datepicker({
                    todayBtn: "linked"
                });
            
            });
        </script>              

              </div>           
                          <div class="col-sm-3">
                            <select class="form-control" name="trackName" id="trackName">
                              <!--  <option disabled selected value="default"> -->
                                                               <option value="" selected="">
                                                                      Department
                                </option>
                  <option value="Business Development">Business Development</option><option value="Marketing">Marketing</option><option value="Recruitment">Recruitment</option><option value="All">All</option><option value="Other">Other</option><option value="Development">Development</option><option value="Operations">Operations</option>
                             
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                
                                    <div class="input-group">
                                                                                 <input class="form-control" placeholder="Enter Key Words" name="keyWords" id="keyWords" type="text"><span class="input-group-btn"><span class="btn btn-primary btn-file"><input onclick="doSubmit();" name="btnJobSubmit" id="btnJobSubmit" type="siv"> Search…</span></span> 
                                                                     <!-- <button type="submit" tabindex="13" class="btn btn-primary" name="btnJobSubmit" id="btnJobSubmit">Search&hellip;</button>   -->
                                    </div>
                                
                            </div>
                        </div>
                    </div>
                    </form>
                    </div>
        
                      
      <div class="row"><!-- Article Listing starts here -->
            <div class="col-sm-4">
                   
                   <h5 class="heavy noMargin" align="left" class="heavy">Product Catalog Implementation and Support for Global Carpet Retailer</h5>
                   <div class="row">
                       <div class="col-sm-6 noMargin"><hr></div>
                   </div>
                   <p class="noMargin">With over 10,000 products in their catalog and a global presence demanding 1800 employees and 49 distribution centers for their 11,000 customer base...| <a href="#"><button class="btn btn-primary btn-md" type="button">Watch Video</button></a></p>
                  
            </div>
             <div class="col-sm-4">
                   
                   <h5 class="heavy noMargin" align="left" class="heavy">Automated Scripting and Data load Functions for Global Carpet Retailer</h5>
                   <div class="row">
                       <div class="col-sm-6 noMargin"><hr></div>
                   </div>
                   <p class="noMargin">With over 10,000 products in their catalog and a global presence demanding 1800 employees and 49 distribution centers for their 11,000 customer base...| <a href="#"><button class="btn btn-primary btn-md" type="button">Watch Video</button></a></p>
                  
            </div>
             <div class="col-sm-4">
                   
                   <h5 class="heavy noMargin" align="left" class="heavy">End-to-End Validation QA and Testing for Finanical Holdings Firms </h5>
                   <div class="row">
                       <div class="col-sm-6 noMargin"><hr></div>
                   </div>
                   <p class="noMargin">Our customer is a financial holding company with investments primarily in companies focused on providing financial services. The migration process req...| <a href="#"><button class="btn btn-primary btn-md" type="button">Watch Video</button></a></p>
                  
            </div>
        </div>
            <br>
        <div class="row">
          <div class="col-sm-2"></div>
          <div class="col-sm-10">
            <button class="btn btn-default col-sm-10" data-dismiss="modal" type="button">Load More</button>
          </div>
          <div class="col-sm-1"></div>
        </div>
        
      </div>
      <!--contact form copy starts-->
      </div>
          
      </div>  
      <br/>
      <!--contact form copy ends-->

    </section> <!--/#error-->
   <?php include '../footer.php';?>   
      
</body>
</html>