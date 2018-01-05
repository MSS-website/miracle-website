
<!DOCTYPE html>
<html lang="en">
  <head>
    

    <title>
   Miracle Email Signature Standards
    </title>
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

   
   <?php include'header.php'?>
   
       <section class="container" id="about-us">
    <section class="container">
        <input type="hidden" name="actualdesignation" id="actualdesignation"/>
		 <input type="hidden" id="empLoginID" name="empLogiID" value=""/>
         <input type="hidden" id="empPassword" name="empPassword" value=""/>
            <br>
            <br>
          <br><br>
            <div class="row">
              
                <div class="col-sm-6 text-left">
                    <h2>
                    <strong>Miracle Email Signature Standards </strong>
                    </h2>
                </div>
                <div class="col-sm-6 text-right">
                    <ul class="breadcrumb pull-right">
                        <li>
                            <a href="../">Home</a>
                        </li>
                        <li>
                            <a href="../standards">Standards</a>
                        </li>
                        
                        <li class="active">Signature
                        </li>
                    </ul>
                </div>
               
            </div>
    
     <div class="row ">
         <div class="col-sm-6">
             <p class="methodText">
                While new forms of collaboration such as instant messaging are becoming popular everyday, email still remains as the top form of information passing in the corporate world. At Miracle we depend heavily on our corporate communications and it is important that we uphold the Miracle brand within these emails as well. With our emails being read by partners and customers everyday it is essential that we all showcase a uniform image to them. </p>
               <p class="methodText">Our Corporate Email Standards helps us to give everybody a chance to create their own signature and integrate that with their email clients to ensure that we all have the same standard. Go ahead and get started by putting in your details in the right-hand side form and generate your signature. <strong>Check out the <a href="signature-document.php" class="linkText" target="_blank"><strong><font color="#00aae7">"How To"</font></strong> </a> documentation right here if you are having trouble setting up your signature!</strong></p>
         </div>
         <div class="col-sm-6">
             <div class="row ">
              <div class="col-sm-6">
         <label > Name</label>
         <input tabindex="1" class="form-control" required="required" placeholder="Full name" id="firstname" name="firstname"  type="text" onkeydown="return enableSignatureEnter(event);" onchange="fieldLengthValidator(this);">
        <br>
        <label > Email</label>
         <input class="form-control" required="required" placeholder="Email"  name="email" id="email"  type="text" onkeydown="return enableSignatureEnter(event);">
         <br><label > Mobile</label>
        <input tabindex="5" class="form-control" required="required" placeholder="Mobile"  name="mobile" id="mobile" type="text" onchange="return formatPhone(this);" onblur="return validatenumber(this)" onkeypress="return isNumberKey(event)" onkeydown="return enableSignatureEnter(event);">
         <br>
          </div>
           <div class="col-sm-6">
         <label >Designation</label>
        <input tabindex="2" class="form-control" required="required" placeholder="Designation" id="designation" name="designation"  type="text" onkeydown="return enableSignatureEnter(event);" onchange="fieldLengthValidator(this);">
        <br>
        <label > Work Phone</label>
         <input tabindex="4" class="form-control" required="required" placeholder="Work Phone"  name="workPhone" id="workPhone"  type="text" onchange="return formatPhone(this);" onblur="return validatenumber(this)" onkeypress="return isNumberKey(event)" onkeydown="return enableSignatureEnter(event);"/>
         <br><label > Location</label>
         <select class="form-control" id="location" onchange="checkLocationType(this);" tabindex="6" onkeydown="return enableSignatureEnter(event);">
 <option value="">--Please Select--</option>
  <option value="Atlanta">Atlanta</option>
  <option value="Bentonville"> Bentonville</option>
  <option value="Cincinnati">Cincinnati</option>
  <option value="GDC">Miracle City</option>
  <option value="HQ">Headquarters</option>
  <option value="IO">LB Colony</option>
  <option value="IH">Miracle Heights</option>
  
  <option value="OL">Other Locations</option>
  </select> 
       </div>  
             
             </div>
             <div class="row ">
                  <div class="col-sm-12">
                       
          <button  type="button" class="btn btn-primary form-control col-sm-12 noMarginTop" onclick="insertEmployeeSignatureData();" style="margin-top: 5px;" id="generateButton">Generate Signature&nbsp;&nbsp;&nbsp;&nbsp;</button><br>
       
               </div>
             </div>
         </div>
         <input type="hidden" name="livingCountry" id="livingCountry" />
        <input type="hidden" name="empSignId" id="empSignId" value="0"/>
         <input type="hidden" name="empSignUpdate" id="empSignUpdate" value="0"/>
     </div>
         </section>
<div id="insertionLoading" style="display: none" ><font color="red" size="3px">Loading please wait...</font></div>

    <hr id="topHr" style="display: none"></hr>
    <br>  
   
       <div class="row" id="signatureDiv" style="display: none">
           <section class="container">
       <div class="col-sm-6" id="signatureDivId">
  </div>
               <div class="col-sm-6" >
         
            <div id="signatureView" class="embed-responsive-item col-sm-12"></div> 
  
       </div>
       </section>    </div>
    <br>
     <div class="row container" id="buttonDiv" style="display: none">
        <div class="col-sm-6"><button type="button" class="btn btn-primary form-control" onclick="updateEmployeeSignatureData();" id="copyButton">Copy Code to Clipboard</button><br><br></div>
              <div class="col-sm-6">
                
                      <button type="button" class="btn btn-success form-control " tabindex="8">Signature Preview </button>
                 
                  </div>
         </div>
    <section class="container">
        <div class="row" id="italicDiv" style="display: none" class="container">
        <div class="col-sm-12">
             <i>Now that you have generated your signature, go over to the <a href="signature-document.php" class="linkText" target="_blank"><strong><font color="#00aae7">How To Documentation</font></strong></a> to start adding your signature to your email client!</i>
        </div>
    </div>
    </section>
    
    <div id="faqDiv" style="display:none">
    <div class="col-sm-12">
                    <h5 class="heavy noMarginBottom">FAQs </h5>
                    <div class="row noMarginBottom">
                        <div class="col-sm-2 noMargin">
                            <hr>
                        </div>
                    </div>
                </div>
   <div class="col-sm-12">
                    <p class="methodText">
                        <strong>Q#1. What is the suggested font details for corporate email?</strong><br>
                       We would highly recommend using Calibri 15 for all emails whether it be your phone (or) laptop.  <br><br>
                        <strong>Q#2. What if I need to setup a non-HTML regular signature for my mobile device?</strong><br>
                       We understand that for some devices HTML Signatures might be too heavy and there will be the need to setup regular test signatures, like on your mobile email client. In such cases use the format below to define your email signature. 

 <br><br>
                          <div class="row">
                             <div class="col-sm-4">
                                 
<strong>Regards,</strong><br>
<strong>Chanakya Lokam</strong><br>
Director Marketing | Innovation<br>
Miracle Software Systems, Inc.<br>
45625&nbsp;Grand&nbsp;River&nbsp;Avenue,&nbsp;Novi,&nbsp;MI&nbsp;-&nbsp;48374<br>
clokam@miraclesoft.com<br>
Phone : 1-248-233-1900<br>
Home : 1-248-679-2661<br>
India: 011-91-9704478300<br>

                             </div>
                               <div class="col-sm-3">
                                   <strong>Regards,</strong><br>
                                   <strong>&lt; Full Name&gt;</strong><br>
&lt;Designation&gt;<br>
Miracle Software Systems, Inc.<br>
&lt;Address Based on Location&gt;<br>
&lt;Email Address&gt;<br>
Phone : &lt;Your Work Phone&gt;<br>
Home : &lt;Your Mobile Phone&gt;<br>
                               </div>
                </div><br>
                     <strong>Q#3. Do you have "How To" documents for all device type?</strong><br>
                    While our “How To” guides cover most of the email clients available such as Outlook, Thunderbird, Zimbra and more there will always be an email client that we haven’t covered. While we will actively add more clients to the documentation, please feel free to reach out to us for more information and help. <strong><font color="#00aae7">Check out our documentation collection</font> <a href=""><font color="#0d416b">today!</font></a></strong>  <br><br>
                     <strong>Q#4. Who should I reach out to if I have a question?</strong><br>
                     Please feel free to contact the Marketing Team at <a href="mailto:marketing@miraclesoft.com"><strong>marketing@miraclesoft.com</strong></a> (or) give us a call at <strong>248-412-0428</strong>. The Web Experience and the Content Team are in-charge of the Email Signature Standards and will be more than happy to help you out.  </p>
    
   <br></br>
   </div>
        </div> 
    
        <div class="row">
         <!-- Modal -->
<div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
      
       
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="loginModalClosId" style="display: none"><span aria-hidden="true">&times;</span>
                </button>
                 <h3 class="modal-title" id="memberModalLabel"><strong>Employee LogIn</strong> </h3>
                    <hr class="noMarginBottom">
            </div>
            <div class="modal-body">
               <p class="methodText" style="margin-top: -10px;">You must be a Miraclite to gain access to this. Please validate yourself using your Miracle credentials for further access. </p>
               <div class="row">
               <div class=" col-sm-6">
                      <input tabindex="9" class="form-control" required="required" placeholder="LoginId" id="loginId" name="loginId" value="" type="text" onkeydown="return enableLoginEnter(event);"/>
                    <br>
                     <input tabindex="10" class="form-control" required="required" placeholder="Password" name="password" id="password"  value="" type="password" onkeydown="return enableLoginEnter(event);"/>
                    
                  </div>
                  <div class="col-sm-6"></div>
                  </div>
            <hr  class="">
          <div class="row ">
           <div class="col-sm-4">
               <span id="resultMessage"></span>
               <span id="loading" style="display: none"><font color="red" size="3px">Loading please wait...</font></span>
           </div>
            <div class="col-sm-4"></div>
                    <div class="col-sm-4"></div>
       </div>
            <div class=" row ">
              
                    <div class="col-sm-4"> <!--<button class="btn btn-primary col-sm-12 noMarginBottom" type="button" data-dismiss="modal">Log In</button>-->
                    <span id="resultMessage"></span>
                        <input type="button" value="Login" tabindex="7" class="btn btn-primary col-sm-12" name="btnSubmit1" id="btnSubmit1" onclick="doSignatureLogin();"/></div>
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4"></div>
               
             
            </div>
            </div>
        </div>
    </div>
</div>
        </div>
        <div class="col-sm-1"></div>
     
      </div>
</div>
        
        <div class="row">
         <!-- Modal -->
<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="display: none" id="olmodalClose"><span aria-hidden="true">&times;</span>
                </button>
                 <h3 class="modal-title" id="memberModalLabel"><strong>Enter your location</strong> </h3>
                <hr>
            </div>
            <div class="modal-body">
             
                 <div class="row">
                   <div class=" col-sm-6">
                      
                    <label>Select Country :</label><br>   <select id="country" name ="country" style="width: 253px !important;" class="form-control"></select>
<br><label>Address</label>
            <input tabindex="1" class="form-control" required="required" placeholder="Address" id="address" name="address" type="text">
       
         </div>
                    
                   <div class=" col-sm-6">
               <label>Select State :</label> <br>  <select name ="state" id ="state"  style="width: 253px !important;" class="form-control"></select>
 <script language="javascript">
populateCountries("country", "state");
 </script><br> 
 <label>City</label>
            <input tabindex="1" class="form-control" required="required" placeholder="City" id="city" name="city" type="text">
       
             </div> 
                    </div>
                 <hr>
              </div>
            
            <div class="row ">
           <div class="col-sm-4">
               <span id="alertMessage"></span>
               
           </div>
            <div class="col-sm-4"></div>
                    <div class="col-sm-4"></div>
       </div>
        <div class="modal-footer row" style="margin-left: 3px;"> 
                
                     
                    <div class="col-sm-4"> 
                        
                        <input type="button" value="Submit" tabindex="7" class="btn btn-primary col-sm-12" name="btnSubmit2" id="btnSubmit2" onclick="setOtherLocations();" /> 
                    </div>
                   <div class="col-sm-4"></div>
                    <div class="col-sm-4"></div>
                
           
           </div>
            </div>
            
        </div>
    </div>
</div>
       
       
       <!-- Alert Modal Start -->
         <div class="row">
    <div class="col-sm-12">
 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body">
              <strong><div id="showAlertText"></div></strong>
            </div>
            <div class="modal-footer row">
                 <div class="col-sm-8"></div>
                <div class="col-sm-3">
                    <button type="button" class="btn btn-danger col-sm-12" data-dismiss="modal">
                Close
              </button>
                </div>
               <div class="col-sm-1"></div>
            </div><!-- Modal Footer -->
          </div><!-- Modal Content -->
        </div><!-- Modal Dialog -->
      </div><!-- Modal Container-->
     
     
    </div>
  </div>
       <!-- Alert Modal End -->
     
   </section> 
<?php include 'footer.php';?>  

<script src="js/custom.js"></script>
<script type="text/javascript" src="js/Validation.js"></script>
<script src="js/signtaure.js"></script>
 <!-- <script type="text/javascript" src="../js/jquery-1.4.2.min.js"></script>-->
 <script type="text/javascript">
    $(window).load(function(){
        //$('#myModal1').modal('show');
		   var empLoginID=document.getElementById("empLoginID").value;
        var empPassword=document.getElementById("empPassword").value;
        if(empLoginID!='' && empPassword!=''){
             doSignatureLogin();
        }else{
             $('#myModal1').modal('show');
        }
    });
</script>  
   
 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>  
       
      <script src="js/bootstrap.min.js"></script>
      <script src="js/main.js"></script>
  
        
        
  </body>
</html>
