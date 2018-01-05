<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta content="Home | Miracle" name="Title">
      <meta content="Miracle Software Systems, Inc. is a 20 year firm headquartered in Novi ,MI ,USA. Miracle has been a leader in the IT space as Systems Integrator in ERP/B2B/BPM." name="Description">
      <meta itemscope itemtype="http://schema.org/Organization">
      <meta itemprop="Miracle Software Systems, Inc, is a Global Systems Integrator specializing in ERP/ BPM (EAI/SOA) / B2B / Digital Experience Technologies, headquartered in Novi, MI – USA. Miracle has a global presence on four continents with multiple Global Development Centers spanning across the USA, Canada and India.Miracle has been and continues to be a leader in the niche space of Business Integration and SOA services over the past 20 Years with Premier Partnerships with software giants such as SAP, IBM, Oracle and Microsoft, Other partnerships also includes Amazon, Redhat, apigee, Rally, HP and Axway.">
      <meta content="INDEX,FOLLOW" name="Robots">
      <title> Event Nominations | Miracle </title>
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/animate.css" rel="stylesheet">
      <link href="css/main.css" rel="stylesheet">
      <link href="css/default.css" rel="stylesheet" type="text/css">
      <link href="css/component.css" rel="stylesheet" type="text/css">
      <script src="js/modernizr.custom.js"></script> 
      <link href="css/font-awesome.min.css" rel="stylesheet">
      <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
      <link href="images/favicon.ico" rel="shortcut icon">
      <style> 
      body{
         overflow-x:hidden;
      }
      .parallax{ background-image:url('../images/events/event-header.png'); background-position:center; background-size:cover; background-repeat:no-repeat; height:170px; } .overlay{ background-color:rgba(0,0,0,0.3); height:170px; } /* Rounded sliders */ .slider.round { border-radius: 34px; } .slider.round:before { border-radius: 50%; } .modal-dialog { width:660px; } </style>
   </head>
   <!--/head--> <?php include 'header.php';?> 
   <body>
      <br><br><br> 
      <div class="row parallax">
         <div class="overlay">
            <section class="container">
               <div class="row">
                  <div class="col-sm-6 text-left">
                     <br><br>
                     <h1 class="heavy micro" style="color:#ffffff;">Event Nominations</h1>
                  </div>
                  <div class="col-sm-6 text-right" >
                     <br><br>
                     <ul class="breadcrumb pull-right" >
                        <li><a href=".."><font color="#ffffff"> Home</font></a></li>
                        <li class="active"><font color="#ffffff">Event Nominations</font></li>
                     </ul>
                  </div>
               </div>
            </section>
         </div>
      </div>
      <br> 
      <section class="container">
        
         <div class="row">
            <div class="col-sm-8">
               
               <div class="modal fade" id="rajModal" role="dialog">
                  <div class="modal-dialog">
                     <!-- Modal content--> 
                     <div class="modal-content">
                        <div class="modal-header">
                           <button type="button" class="close" style="margin-top:-8px;" data-dismiss="modal">&times;</button> 
                           <div class="col-sm-12">
                              <div class="col-sm-12">
                                 <h3 class="heavy" style="margin-top:5px;">
                                 Suggest an event!</h4> 
                              </div>
                           </div>
                        </div>
                        <hr>
                        <div class="modal-body">
                           <form>
                              <div class="form-group">
                                 <div class="col-sm-12">
                                    <div class="col-sm-12">
                                       <p>Please fill in the following details regarding the event that you would like for Miracle to attend (or) conduct, we will analyze and see the possibility.</p>
                                    </div>
                                    <div class="col-sm-6"> <input type="text" style="margin-top:15px" placeholder="Event Name" class="form-control" id=""> </div>
                                    <div class="col-sm-6"> <input type="text" style="margin-top:15px" class="form-control" name="daterange" value="01/01/2015 - 01/31/2015" /> </div>
                                 </div>
                                 <div class="col-sm-12">
                                    <div class="col-sm-6"> <input type="text" style="margin-top:15px" placeholder="City" class="form-control" id="pwd"> </div>
                                    <div class="col-sm-6"> <input type="text" style="margin-top:15px" placeholder="State" class="form-control" id="pwd"> </div>
                                 </div>
                                 <div class="col-sm-12">
                                    <div class="col-sm-6"> <input type="text" style="margin-top:15px" placeholder="Country" class="form-control" id="pwd"> </div>
                                    
                                 </div>
                                 <div class="col-sm-12" style="margin-top:162px;">
                                    <div class="col-sm-12 form-group"> <textarea style="margin-top:15px" placeholder="Event Link" class="form-control"></textarea> </div>
                                 </div>
                                 <div class="col-sm-12" style="margin-top:15px;">
                                    <div class="col-sm-12">
                                       <div class="form-group"> <textarea style="margin-top:15px" class="form-control" placeholder="Why do you think it will be advantageous for Miracle to attend this event?" rows="5" id="comment"></textarea> <br> <button class="btn btn-primary">Submit</button> <br> </div>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                        <div class="modal-footer"> </div>
                     </div>
                  </div>
               </div>
            </div>
            <!---modal on suggest event button---> <!---modal on suggest event button---> 
            <div class="col-sm-4"></div>
         </div>
         <div class="row">
            <div class="col-sm-4">
               <select class="form-control" name="industry" id="industry" onkeydown="return enableSearchEnter(event);">
                  <option disabled="disabled" selected="selected"> Search by Events </option>
                  <option value="Upcoming Events">Upcoming Events</option>
                  <option value="Past Events">Past Events</option>
               </select>
            </div>
            <div class="col-sm-4">
               <script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script> <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script> <!-- Include Date Range Picker --> <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script> 
               <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
               </head> <input type="text" class="form-control" name="daterange" value="01/01/2015 - 01/31/2015" /> <script type="text/javascript"> $(function() { $('input[name="daterange"]').daterangepicker(); }); </script> 
            </div>
            <div class="col-sm-4">
               <div class="form-group">
                  <div class="input-group"> <input class="form-control" placeholder="Enter Event Title" type="text" name="keyWords" id="keyWords" ><span class="input-group-btn"><span class="btn btn-primary btn-file" style="line-height:20px;"><input type="siv" onclick="doSubmit();" name="btnJobSubmit" id="btnJobSubmit"> Search…</span></span> </div>
               </div>
            </div>
         </div>
        <div class="row">
                <div class="col-sm-4 ">
                    <div ><h6  align="left" class="heavy"> Product Catalog Implementation and Support for Global Carpet Retailer</h3>
                    <div align="left" class="greyText">With over 10,000 products in their catalog and a global presence demanding 1800 employees and 49 distribution centers for their 11,000 customer base...| <br><br><a href="#"><button class="btn btn-primary btn-md" type="button">Watch Video</button></a> </div>
                    </div>
                </div>
                <div class="col-sm-4 ">
                    <div><h6  align="left" class="heavy">Automated Scripting and Data load Functions for Global Carpet Retailer</h3>
                    <div align="left" class="greyText">With over 10,000 products in their catalog and a global presence demanding 1800 employees and 49 distribution centers for their 11,000 customer base...|  <br><br><a href="#"><button class="btn btn-primary btn-md" type="button">Watch Video</button></a> </div>
                    </div>
                </div>
                <div class="col-sm-4 ">
                   <div><h6  align="left" class="heavy">End-to-End Validation QA and Testing for Finanical Holdings Firms </h3>
                    <div align="left" class="greyText">Our customer is a financial holding company with investments primarily in companies focused on providing financial services. The migration process req...|  <br><br> <a href="#"><button class="btn btn-primary btn-md" type="button">Watch Video</button></a> </div>
                    </div>
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
      </section>
      <?php include 'footer.php';?> 
   </body>
</html>



