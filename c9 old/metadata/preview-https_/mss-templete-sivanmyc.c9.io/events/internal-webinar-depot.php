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
    <script src="js/modernizr.custom.js">
    </script>
    <script src="js/fileinput.js">
    </script>
    <script src="js/custom.js">
    </script>
    <script>
    $(".date-picker").datepicker();

$(".date-picker").on("change", function () {
    var id = $(this).attr("id");
    var val = $("label[for='" + id + "']").text();
    $("#msg").text(val + " changed");
});</script>
    <script type="text/javascript" src="../js/Validation.js">
    </script>
    <!--[if lt IE 9]>

<script src="js/html5shiv.js">
</script>

<script src="js/respond.min.js">
</script>
<![endif]-->
  
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  
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

}
.form-horizontal .form-group {
    margin-left: 0;
    margin-right: 0;
}
.form-group .form-control:last-child {
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
}


}
.input-group .form-control {
    float: right;
width: 50%;
}
  </style>
  
  
  </head>
  <?php include '../header.php';?>
  <body>
     <section  class="container">
<br>
      <div class="row">
               
                <div class="col-sm-6 text-left">
                    <h1 class="heavy">
                       Webinar Depot
                    </h1>
                </div>
                <div class="col-sm-6 text-right">
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
     
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="memberModalLabel"><strong>Registration Successful</strong> </h4>
      </div>

            <div class="modal-body">
               <p class="methodText">Thank you for registering for our webinar "IBM Partner University Enablement
for Sales Professionals " on "June 17th, 2015 " at "2:00 PM to 3:00 PM EST". You will be receiving a confirmation email soon. For more webinars and information about our organization please click continue and browse through our vast collection. </p>
            </div>
            <div class="modal-footer">
               <button class="btn btn-primary btn-lg" type="button">Continue</button>
            </div>
        </div>
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
          
          <h3 class="heavy noMargin">
         On-Demand Webinars </h3>
         
         <div class="row">
                        <div class="col-sm-4">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                    <br>
                    <form method="post" action="" id="myForm" name="myForm">
                       <div class="row">
                        <div class="col-sm-3">
                            <select class="form-control" name="trackName" id="trackName">
                              <!--  <option disabled selected value="default"> -->
                                                               <option value="" selected="">
                                                                      Search by Track
                                </option>
                  <option value="Cloud-Services">Cloud-Services</option><option value="SOA and Connectivity">SOA and Connectivity</option><option value="B2B Integration and File Transfer">B2B Integration and File Transfer</option><option value="SAP/ERP Services">SAP/ERP Services</option><option value="Application Management">Application Management</option><option value="Business Process Management">Business Process Management</option><option value="Application Development">Application Development</option><option value="Quality Assurance and Testing">Quality Assurance and Testing</option><option value="Digital Experience and Commerce">Digital Experience and Commerce</option> 
                             
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
                                    <label for="filter">Filter by</label>
                                    <select class="form-control">
                                        <option value="0" selected>All Snippets</option>
                                        <option value="1">Featured</option>
                                        <option value="2">Most popular</option>
                                        <option value="3">Top rated</option>
                                        <option value="4">Most commented</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="contain">Author</label>
                                    <input class="form-control" type="text" />
                                  </div>
                                  <div class="form-group">
                                    <label for="contain">Contains the words</label>
                                    <input class="form-control" type="text" />
                                  </div>
                                  <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                </form
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
          </div>

                            <!--Date search-->
                            

                         
                          <div class="col-sm-3">
                            <select class="form-control" name="industry" id="industry">
                                                                 <option value="" selected="">
                                                                      Search by Department
                                </option>
                  <option value="Retail">Retail</option><option value="Manufacturing">Manufacturing</option><option value="Health Care">Health Care</option><option value="Logistics">Logistics</option><option value="Finance and Insurance">Finance and Insurance</option><option value="Application Development">Application Development</option> 
                                 
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
                    </div>
                    </div>
                      </form>
        <div class="row">
                <div class="col-sm-4 center">
                    <center><img src="../images/events/sales-enablement.jpg" class="img-responsive" alt="Thought Leadership" title="Thought Leadership"></center><br>
                    <h6 class="heavy">Sales Enablement</h3>
                    <div class="greyText">At Miracle we believe in execution at the speed of thought along with the power of leadership which helps us drive forward</div>
                    
                </div>
                <div class="col-sm-4 center">
                    <center><img src="../images/events/team-enablement.jpg" class="img-responsive" alt="Technical Excellence" title="Technical Excellence"></center><br>
                    <h6 class="heavy">Team Enablement</h3>
                    <div class="greyText">Miracle's core strength is its Technical Excellence which helps us to give our customers the highest possible business value</div>
                </div>
                <div class="col-sm-4 center">
                    <center><img src="../images/events/technical-webinar.jpg" class="img-responsive" alt="Industry Expertise" title="Industry Expertise"></center><br>
                    <h6 class="heavy">Technical Webinar</h3>
                    <div class="greyText">Nobody knows the IT landscape and Industry verticals as we do at Miracle and this helps us to understand your problems much better</div>
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

    </section><!--/#error-->
   <?php include '../footer.php';?>   
      <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body>
</html>