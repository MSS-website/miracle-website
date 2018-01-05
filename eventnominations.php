<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="Home | Miracle" name="Title">
        <meta content="Miracle Software Systems, Inc. is a 20 year firm headquartered in Novi ,MI ,USA. Miracle has been a leader in the IT space as Systems Integrator in ERP/B2B/BPM." name="Description">
        <meta itemscope itemtype="http://schema.org/Organization">
        <meta itemprop="Miracle Software Systems, Inc, is a Global Systems Integrator specializing in ERP/ BPM (EAI/SOA) / B2B / Digital Experience Technologies, headquartered in Novi, MI – USA. Miracle has a global presence on four continents with multiple Global Development Centers spanning across the USA, Canada and India.Miracle has been and continues to be a leader in the niche space of Business Integration and SOA services over the past 20 Years with Premier Partnerships with software giants such as SAP, IBM, Oracle and Microsoft, Other partnerships also includes Amazon, Redhat, apigee, Rally, HP  and Axway.">
        <meta content="INDEX,FOLLOW" name="Robots">
        <title>
            Event Nominations | Miracle
        </title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/default.css" rel="stylesheet" type="text/css">
        <link href="css/component.css" rel="stylesheet" type="text/css">
        <script src="js/modernizr.custom.js"></script>
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="images/favicon.ico" rel="shortcut icon">
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
           <style>
        .parallax{
    background-image:url('images/conference-spec/event-nomination-header.jpeg');
    background-size:cover;
    background-repeat:no-repeat;
    background-position:center;
    }
    .overlay{
        background-color:rgba(0,0,0,0.3);
    }

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
.modal-dialog {
    width:660px;
}
.black{
    color:#000000 !important;
}
.red{
    color:#ef4048;
}
.blue{
    color:#00aae7;
}
    </style>
    
    </head><!--/head-->
    <?php include 'header.php';?>
 <body>
   <br><br><br>
   <div class="row parallax">
     <div class="overlay">
       <section class="container">
        <div class="row">
          <div class="col-sm-6 text-left"> <br><br>
           <h1 class="heavy micro" style="color:#ffffff;">Event Nominations</h1>
          </div>
           <div class="col-sm-6 text-right" ><br><br>
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
       <div class="col-sm-12">
          <p class="methodText">
           <strong>Welcome to Miracle’s Event Nomination Portal!</strong> As you know Miracle attends many networking and marketing events across the year, and we want to ensure that we get the right people to the right events. Through this portal you can suggest new events, nomination yourself and colleagues to attend events and keep yourselves up to date regarding upcoming events that we are attending.
          </p>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-8">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal">Suggest an Event</button>
                
           <div class="modal fade" id="Modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" style="margin-top:-8px;" data-dismiss="modal">&times;</button>
          <div class="col-sm-12">
              <div class="col-sm-12">
                  <h3 class="heavy" style="margin-top:5px;">Suggest an event!</h4>        
              </div>
              
          </div>
          
        </div>
        <hr>
        <div class="modal-body">
          
          <form>
            <div class="form-group">
                <div class="col-sm-12">
                    <div class="col-sm-12">
                        <p class="methodText">Please fill in the following details regarding the event that you would like for Miracle to attend (or) conduct, we will analyze and see the possibility.</p>    
                    </div>
                    
                    
                    <div class="col-sm-6">
              
              <input type="text" style="margin-top:15px" placeholder="Event Name" class="form-control" id="">
                    </div>
                    <div class="col-sm-6">
              
              <input type="text" style="margin-top:15px" class="form-control" name="daterange" value="01/01/2015 - 01/31/2015" />
                  </div>
                  
            </div>
            
            <div class="col-sm-12">
                <div class="col-sm-6">
              
              <input type="text" style="margin-top:15px" placeholder="City" class="form-control" id="pwd">
                  </div>
                  
                  <div class="col-sm-6">
              
              <input type="text" style="margin-top:15px" placeholder="State" class="form-control" id="pwd">
                  </div>
            </div>
            
            <div class="col-sm-12">
                <div class="col-sm-6">
              
              <input type="text" style="margin-top:15px" placeholder="Country" class="form-control" id="pwd">
                  </div>
                  
                  <div class="col-sm-6">
              
              <input type="text" style="margin-top:15px" placeholder="Event Link" class="form-control" id="pwd">
                  </div>
            </div>
            
            <div class="col-sm-12" style="margin-top:162px;">
                <div class="col-sm-12">
                    <div class="form-group">
          
                      <textarea style="margin-top:15px" class="form-control" placeholder="Why do you think it will be advantageous for Miracle to attend this event?" rows="5" id="comment"></textarea>
                   <br>
                   <button class="btn btn-primary">Submit Suggestion</button> <br>
                    </div>
                </div>
            
            </div>
            
        </div>    
          </form>
          
        </div>
        <div class="modal-footer">
        </div>
      </div>
      
    </div>
  </div>
        </div>
<!---modal on suggest event button--->
       
  <!---modal on suggest event button--->
            <div class="col-sm-4"></div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    
                            <select class="form-control" name="industry" id="industry" onkeydown="return enableSearchEnter(event);">
                                <option disabled="disabled" selected="selected">
                                  Search by Events
                                </option>
                                  <option value="Upcoming Events">Upcoming Events</option>
                                  <option value="Past Events">Past Events</option>
                               </select>
                       
                </div>
                 <div class="col-sm-4">
                        
   
        <input type="text" class="form-control" name="daterange" value="01/01/2015 - 01/31/2015" />

<script type="text/javascript">
$(function() {
    $('input[name="daterange"]').daterangepicker();
});
</script>
   
       <script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" /></head>
 
                        </div>
                        
                <div class="col-sm-4">
                <div class="form-group">
                                
                <div class="input-group">
                    
                  <input class="form-control" placeholder="Enter Event Title" type="text" name="keyWords" id="keyWords" ><span class="input-group-btn"><span class="btn btn-primary btn-file" style="line-height:20px;"><input type="siv" onclick="doSubmit();" name="btnJobSubmit" id="btnJobSubmit"> Search</span></span> 
             
                </div>
                    
                </div>
           
            </div>
            </div>
            <div class="row">
               
               <div class="effect col-sm-4">
                  <div class="card">
                  <a class="linkText1" target="_blank" href="#"><img class="img-responsive" src="images/conference-spec/IBM2.png" alt="Avatar">
                  <div class="container" style="background-color:#eee;">
                    
                    <h5 class="black"><strong>IBM Interconnect 2017</strong> </h5
                    <br><p class="methodText">March 19th-23rd, 2017</p> 
                  <div class="row">
                            <div class="col-sm-1">
                               <i class="fa fa-envelope-open blue" aria-hidden="true"></i></div>
                               <div class="col-sm-11"> <p class="methodText">Nominations are Opened</p></span>
                            </div>
                        </div>
                  </div>
                  </a>
                </div>
               </div> 
                <div class="effect col-sm-4">
                    <div class="card">
                      <a class="linkText1" target="_blank" href="#" data-toggle="modal" data-target="#myModalup1"><img  class="img-responsive" src="images/conference-spec/Informatic.png" alt="Avatar" >
                      <div class="container" style="background-color:#eee;">
                        
                        <h5 class="black"> <strong>Informatica Partner Kickoff 2017</strong></h5>
                         <p class="methodText">January 15-17, 2017</p>
                         <div class="row">
                            <div class="col-sm-1">
                               <i class="fa fa-envelope-open blue" aria-hidden="true"></i></div>
                               <div class="col-sm-11"> <p class="methodText">Nominations are Opened</p></span>
                            </div>
                        </div>
                      </div>
                      </a>
                      
                    </div>
                </div>
                <!--- modal up1--->
                <div id="myModalup1" class="modal fade" role="dialog" data-backdrop="static">
                  <div class="modal-dialog modal-lg">
                    <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
              <button type="button" class="close" style="margin-top:-8px;" data-dismiss="modal">&times;</button>
                <h3 class="modal-title heavy">Event Nominations</h3>
              </div>
              <div class="modal-body">
                   <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Nominate yourself</a></li>
    <li><a data-toggle="tab" href="#menu1">Nominate a collegue</a></li>
    <li><a data-toggle="tab" href="#menu2"> Collegue Nominations</a></li>
  </ul><br>
  <div class="row">
    
    <div class-"col-sm-12" >
      <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
           <form>
                 <div class="form-group">
                                      <div class="col-sm-12">
                                          <div class="col-sm-6">
                                              <input type="text" style="margin-top:15px" placeholder="Name" class="form-control" id="">
                                          </div>
                                          
                                          <div class="col-sm-6">
                                              <input type="text" style="margin-top:15px" placeholder="Designation" class="form-control" id="">
                                          </div>
                                          <div class="col-sm-6">
                                              <input type="text" style="margin-top:15px" placeholder="Phone" class="form-control" id="">
                                          </div>
                                          <div class="col-sm-6">
                                              <input type="text" style="margin-top:15px" placeholder="Work Location" class="form-control" id="">
                                          </div>
                                          <div class="col-sm-6">
                                              <input type="text" style="margin-top:15px" placeholder="Reporting Manager" class="form-control" id="">
                                          </div>
                                          <div class="col-sm-6">
                                              <input type="text" style="margin-top:15px" placeholder="Nearest Airport" class="form-control" id="">
                                          </div>
                                         
                                      </div>
                                      <div class="col-sm-12" style="margin-top:50px;margin-bottom:50px;">
                                          <div class="col-sm-11"><br>
                                           <div class="checkbox">
                                                    
                                                 <form> <label><input type="checkbox" value="passport">Passport Availibility</label></form>  
                                          </div>
                                          </div>
                                      </div><br>
                                      <div class="col-sm-12">
                                      <div class="col-sm-11">
                                       <label for="male"> Why do you want to attend the event?</label>
                                      </div>
                                      </div>
                                      <div class="col-sm-12" style="margin-top:142px">
                                          <div class="col-sm-12">
                                          <textarea style="margin-top:15px" class="form-control" placeholder=" Explain your goals and intent on attending the event to help us better understand" rows="5" id="comment"></textarea>
                                          <button data-dismiss="modal" style="margin-top:15px;" class="form-control btn btn-primary" placeholder="Submit Nomination" type="button">Submit Nomination </button>
                                          </div>
                                      </div>
                                  </div>
                                  
                               </form>
                               </div>
                               
                               
                             <div id="menu1" class="tab-pane fade">
                              <form>
                                  <div class="form-group">
                                      <div class="col-sm-12">
                                          <div class="col-sm-12">
                                              <input type="text" style="margin-top:15px" placeholder="Employee Name" class="form-control" id="">
                                          </div>
                                          <div class="col-sm-12">
                                              <textarea style="margin-top:15px" class="form-control" placeholder="Please let us know why you would like to nominate your colleague --Explain your goals and intent on attending the event to help us better understand" rows="5" id="comment"></textarea>
                                              <button type="button" style="margin-top:15px;" data-dismiss="modal" class="btn btn-primary col-md-12" data-loading-text="<i class='fa fa-spinner fa-spin '></i> loading..." style="margin-left:5px;" name="btnLoginSubmit" id="btnLoginSubmit" onclick="doSubmit();" tabindex="3">Submit Nomination</button>
                                          </div>
                                      </div>
                                  </div>     
                              </form>
                              </div>
                              <div id="menu2" class="tab-pane fade">
                                 <div class="col-sm-12">
                              <table class="table table-striped">
                                              <thead>
                                                       <tr>
                                                        <th>Name</th>
                                                        <th>Comments</th>
                                                        <th>Updates</th>
                                                         </tr>
                                                 </thead>
                                                 <tbody>
                                                           <tr>
                                                             <td>John</td>
                                                            <td data-toggle="modal" data-target="#myModal">Comments</td>
                                                            <td><button type="button" class="btn btn-primary">Update</button></td>
                                                       </tr>
                                                         <tr>
                                                             <td >Mary</td>
                                                            <td>Moe</td>
                                                       <td><button type="button" class="btn btn-primary">Update</button></td>
     
                                                           </tbody>
                                                     </table>
                                                     
                              </div>
                              </div>
                              </div>
                               </div>
                  </div>
              </div>
              
            </div>
  </div>
</div>
   <!--- modal up1--->
   
                 <div class="effect col-sm-4">
                     <div class="card">
                     <a class="linkText1" target="_blank" href="#" data-toggle="modal" data-target="#myModalpast">
                          <img src="images/conference-spec/Ds.png" alt="Avatar" class="img-responsive">
                      <div class="container" style="background-color:#eee;">
                        
                        <h5 class="black"> <strong>Digital Summit</strong> </h5>
                        <p class="methodText">December 12-17, 2016</p>
                        <div class="row">
                            <div class="col-sm-1">
                               <i class="fa fa-envelope red" aria-hidden="true"></i> </div>
                               <div class="col-sm-11"> <p class="methodText">Nominations are Closed</p></span>
                            </div>
                        </div>
                      </div>
                      </a>
                    </div>
                 </div>
                 <!-- modal past--->
                 <div id="myModalpast" class="modal fade" role="dialog" data-backdrop="static">
          <div class="modal-dialog">
        
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title heavy">Event Completed</h3>
              </div>
              <div class="modal-body">
                <p class="methodText">The event is already competed, nominations have been closed, thank you.</p>
              </div>
              
            </div>

  </div>
</div>
  <!-- modal past--->
            </div>
            <br>
        </div>
        <!--modal comments-->
        <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Comments</h4>
        </div>
        <div class="modal-body">
          <p>Here are the comments</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

        </section>
    
       
 
      <?php include 'footer.php';?>
    </body>
</html>