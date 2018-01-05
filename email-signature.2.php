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
   
     <link rel="stylesheet" href="css/signature.css">
    
      <script src="js/custom.js"></script>   
      <script type="text/javascript" src="js/Validation.js"></script>
   <link rel="stylesheet" type="text/css" href="css/codemirror.css" />
    <script type="text/javascript" src="js/codemirror.js"></script> 
    <script src="js/signtaure.js"></script>
    <script type="text/javascript">
function enableSignatureEnter(e) {
    var keynum;
    var keychar;
    var numcheck;
    
    if(window.event) {
        keynum = e.keyCode;
    }
    else if(e.which) // Netscape/Firefox/Opera
    {
        keynum = e.which;
    }
    try{
        if(keynum==13){
            getSignature();
            return false;
        }
    }catch(e){
        alert("Error"+e);
    }
};
    
    function enableLoginEnter(e) {
    var keynum;
    var keychar;
    var numcheck;
    
    if(window.event) {
        keynum = e.keyCode;
    }
    else if(e.which) // Netscape/Firefox/Opera
    {
        keynum = e.which;
    }
    try{
        if(keynum==13){
            doSignatureLogin();
            return false;
        }
    }catch(e){
        alert("Error"+e);
    }
};
    
    </script>
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
 $("p1").hide();
    $("#show").click(function(){
       
   
   
        $("p1").show();
    });
});
</script>
   
    
  </head>
 
<style>
    body,p,div,table,tr,td,ul,li,textarea,span,a{font-family:'Lato',Calibri,Arial,sans-serif;}
    .methodText, .job {
    font-size: 16px!important;
    text-align: justify!important;}
</style> 
  
  <body>
      <?php include 'header.php';?>
      
      
       <section class="container" id="about-us">
           

    <section class="container">
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
         
          <h3>Additional Options</h3>
             <hr>
             <div class="row">
             <div class="col-sm-6">
               <button  type="button" id="show" class="btn btn-primary form-control col-sm-12 ">Partners</button><br>   
             
             <p1>
             <label > Partners</label>
         <select class="form-control" id="location" onchange="checkLocationType(this);" tabindex="6" onkeydown="return enableSignatureEnter(event);">
 <option value="">--Please Select--</option>
  
  <option value="HQ">IBM</option>
  <option value="IO">SAP</option>
  <option value="IH">ORACLE</option>
  <option>HP</option>
 
  </select>
  </p1>
  </div>
             <div class="col-sm-6">
                  <button  type="button" class="btn btn-primary form-control col-sm-12 ">Events</button><br>
             </div>
             </div>
         </div>
         
         
         <div class="col-sm-6">
             <div class="row ">
             <div class="col-sm-6">
         <label > Name</label>
         <input tabindex="1" class="form-control" required="required" placeholder="Full name" id="firstname" name="firstname"  type="text" onkeydown="return enableSignatureEnter(event);" onchange="fieldLengthValidator(this);">
        <br>
        <label > Email</label>
         <input class="form-control" required="required" placeholder="Email"  name="email" id="email"  type="text"  onkeydown="return enableSignatureEnter(event);">
         <br><label > Mobile</label>
        <input tabindex="5" class="form-control" required="required" placeholder="Mobile"  name="mobile" id="mobile" type="text" onchange="return formatPhone(this);" onblur="return validatenumber(this)" onkeypress="return isNumberKey(event)" onkeydown="return enableSignatureEnter(event);">
         
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
                <br><br><br>       
          <button  type="button" class="btn btn-primary form-control col-sm-12 noMarginTop" onclick="insertEmployeeSignatureData();" style="margin-top: 5px;" id="generateButton">Generate Signature&nbsp;&nbsp;&nbsp;&nbsp;</button><br>
       
               </div>
             </div>
            
         </div>
            
         <input type="hidden" name="livingCountry" id="livingCountry" />
        <input type="hidden" name="empSignId" id="empSignId" value="0"/>
         <input type="hidden" name="empSignUpdate" id="empSignUpdate" value="0"/>
     </div>
        
               
        
         </section>

<div id="insertionLoading" style="display: none" >
    <font color="red" size="3px">Loading please wait...</font></div>

    <hr id="topHr" style="display: none"></hr>
    <br>  
   
       <div class="row" id="signatureDiv" style="display: none">
           <section class="container">
       <div class="col-sm-6" id="signatureDivId">
  </div>
               <div class="col-sm-6" >
         
            <div id="signatureView" class="embed-responsive-item col-sm-12"></div> 
  
       </div>
       </section>
     </div>
    <br>
   <div class="row" id="signatureDiv" style="">
           <section class="container">
       <div class="col-sm-6" id="signatureDivId">
           <textarea id="signatureCode" style="display: none;"></textarea><div class="CodeMirror cm-s-default"><div style="overflow: hidden; position: relative; width: 3px; height: 0px; top: 4px; left: 81.3594px;"><textarea id="cmTextArea" name="cmTextArea" autocorrect="off" autocapitalize="off" spellcheck="false" style="position: absolute; padding: 0px; width: 1000px; height: 1em; outline: none;" tabindex="0"></textarea></div><div class="CodeMirror-vscrollbar" cm-not-content="true" style="display: block; bottom: 15px;"><div style="min-width: 1px; height: 844px;"></div></div><div class="CodeMirror-hscrollbar" cm-not-content="true" style="display: block; right: 15px; left: 30px;"><div style="height: 100%; min-height: 1px; width: 1521px;"></div></div><div class="CodeMirror-scrollbar-filler" cm-not-content="true" style="display: block; height: 15px; width: 15px;"></div><div class="CodeMirror-gutter-filler" cm-not-content="true"></div><div class="CodeMirror-scroll" tabindex="-1"><div class="CodeMirror-sizer" style="margin-left: 30px; margin-bottom: -15px; border-right-width: 15px; min-height: 844px; min-width: 1521.36px; padding-right: 15px; padding-bottom: 15px;"><div style="position: relative; top: 0px;"><div class="CodeMirror-lines"><div style="position: relative; outline: none;"><div class="CodeMirror-measure">AخA</div><div class="CodeMirror-measure"><pre class="CodeMirror-line"><span style="padding-right: 0.1px;">                        <span class="cm-tag cm-bracket">&lt;</span><span class="cm-tag">a</span> <span class="cm-attribute">href</span>=<span class="cm-string">"https://www.linkedin.com/company/miracle-software-systems-inc"</span> <span class="cm-attribute">target</span>=<span class="cm-string">"blank"</span> <span class="cm-attribute">style</span>=<span class="cm-string">"color:#ef4048; text-decoration: none;"</span><span class="cm-tag cm-bracket">&gt;&lt;</span><span class="cm-tag">img</span> <span class="cm-attribute">src</span>=<span class="cm-string">"http://www.miraclesoft.com/images/newsletters/Linkedin1.png"</span><span class="cm-tag cm-bracket">/&gt;&lt;/</span><span class="cm-tag">a</span><span class="cm-tag cm-bracket">&gt;</span></span></pre></div><div style="position: relative; z-index: 1;"></div><div class="CodeMirror-cursors" style="visibility: hidden;"><div class="CodeMirror-cursor" style="left: 51.3594px; top: 0px; height: 22px;">&nbsp;</div></div><div class="CodeMirror-code"><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="left: -30px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 21px;">1</div></div><pre class=" CodeMirror-line "><span style="padding-right: 0.1px;"><span class="cm-tag cm-bracket">&lt;</span><span class="cm-tag">html</span><span class="cm-tag cm-bracket">&gt;</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="left: -30px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 21px;">2</div></div><pre class=" CodeMirror-line "><span style="padding-right: 0.1px;">     <span class="cm-tag cm-bracket">&lt;</span><span class="cm-tag">head</span><span class="cm-tag cm-bracket">&gt;&lt;/</span><span class="cm-tag">head</span><span class="cm-tag cm-bracket">&gt;</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="left: -30px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 21px;">3</div></div><pre class=" CodeMirror-line "><span style="padding-right: 0.1px;">              <span class="cm-tag cm-bracket">&lt;</span><span class="cm-tag">body</span><span class="cm-tag cm-bracket">&gt;</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="left: -30px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 21px;">4</div></div><pre class=" CodeMirror-line "><span style="padding-right: 0.1px;">        <span class="cm-tag cm-bracket">&lt;</span><span class="cm-tag">table</span><span class="cm-tag cm-bracket">&gt;</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="left: -30px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 21px;">5</div></div><pre class=" CodeMirror-line "><span style="padding-right: 0.1px;">            <span class="cm-tag cm-bracket">&lt;</span><span class="cm-tag">tbody</span><span class="cm-tag cm-bracket">&gt;</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="left: -30px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 21px;">6</div></div><pre class=" CodeMirror-line "><span style="padding-right: 0.1px;">                <span class="cm-tag cm-bracket">&lt;</span><span class="cm-tag">tr</span><span class="cm-tag cm-bracket">&gt;</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="left: -30px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 21px;">7</div></div><pre class=" CodeMirror-line "><span style="padding-right: 0.1px;">                    <span class="cm-tag cm-bracket">&lt;</span><span class="cm-tag">td</span> <span class="cm-attribute">style</span>=<span class="cm-string">"font-size: 15px; font-family: Calibri;"</span> <span class="cm-attribute">valign</span>=<span class="cm-string">"top"</span> <span class="cm-attribute">align</span>=<span class="cm-string">"left"</span><span class="cm-tag cm-bracket">&gt;&lt;</span><span class="cm-tag">b</span><span class="cm-tag cm-bracket">&gt;</span>Shoba Lekkala<span class="cm-tag cm-bracket">&lt;/</span><span class="cm-tag">b</span><span class="cm-tag cm-bracket">&gt;&lt;</span><span class="cm-tag">br</span><span class="cm-tag cm-bracket">/&gt;</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="left: -30px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 21px;">8</div></div><pre class=" CodeMirror-line "><span style="padding-right: 0.1px;">                       <span class="cm-tag cm-bracket">&lt;</span><span class="cm-tag">span</span> <span class="cm-attribute">style</span>=<span class="cm-string">"font-size: 14px"</span><span class="cm-tag cm-bracket">&gt;</span> Webmaster</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="left: -30px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 21px;">9</div></div><pre class=" CodeMirror-line "><span style="padding-right: 0.1px;">                        <span class="cm-tag cm-bracket">&lt;/</span><span class="cm-tag">span</span><span class="cm-tag cm-bracket">&gt;</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="left: -30px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 21px;">10</div></div><pre class=" CodeMirror-line "><span style="padding-right: 0.1px;">                    <span class="cm-tag cm-bracket">&lt;/</span><span class="cm-tag">td</span><span class="cm-tag cm-bracket">&gt;</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="left: -30px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 21px;">11</div></div><pre class=" CodeMirror-line "><span style="padding-right: 0.1px;">                    <span class="cm-tag cm-bracket">&lt;</span><span class="cm-tag">td</span> <span class="cm-attribute">width</span>=<span class="cm-string">"80"</span><span class="cm-tag cm-bracket">&gt;&lt;/</span><span class="cm-tag">td</span><span class="cm-tag cm-bracket">&gt;</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="left: -30px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 21px;">12</div></div><pre class=" CodeMirror-line "><span style="padding-right: 0.1px;">                    <span class="cm-tag cm-bracket">&lt;</span><span class="cm-tag">td</span> <span class="cm-attribute">align</span>=<span class="cm-string">"right"</span><span class="cm-tag cm-bracket">&gt;&lt;</span><span class="cm-tag">a</span> <span class="cm-attribute">href</span>=<span class="cm-string">"http://www.miraclesoft.com"</span> <span class="cm-attribute">target</span>=<span class="cm-string">"blank"</span><span class="cm-tag cm-bracket">&gt;&lt;</span><span class="cm-tag">img</span> <span class="cm-attribute">src</span>=<span class="cm-string">"http://www.miraclesoft.com/images/newsletters/miracle-logo-dark1.png"</span> <span class="cm-attribute">alt</span>=<span class="cm-string">"logo"</span><span class="cm-tag cm-bracket">/&gt;&lt;/</span><span class="cm-tag">a</span><span class="cm-tag cm-bracket">&gt;&lt;/</span><span class="cm-tag">td</span><span class="cm-tag cm-bracket">&gt;</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="left: -30px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 21px;">13</div></div><pre class=" CodeMirror-line "><span style="padding-right: 0.1px;">           
           <span class="cm-tag cm-bracket">&lt;/</span><span class="cm-tag">tr</span><span class="cm-tag cm-bracket">&gt;</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="left: -30px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 21px;">14</div></div><pre class=" CodeMirror-line "><span style="padding-right: 0.1px;">                <span class="cm-tag cm-bracket">&lt;</span><span class="cm-tag">tr</span><span class="cm-tag cm-bracket">&gt;</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="left: -30px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 21px;">15</div></div><pre class=" CodeMirror-line "><span style="padding-right: 0.1px;">                    <span class="cm-tag cm-bracket">&lt;</span><span class="cm-tag">td</span> <span class="cm-attribute">colspan</span>=<span class="cm-string">"4"</span><span class="cm-tag cm-bracket">&gt;</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="left: -30px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 21px;">16</div></div><pre class=" CodeMirror-line "><span style="padding-right: 0.1px;">                        <span class="cm-tag cm-bracket">&lt;</span><span class="cm-tag">hr</span><span class="cm-tag cm-bracket">/&gt;</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="left: -30px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 21px;">17</div></div><pre class=" CodeMirror-line "><span style="padding-right: 0.1px;">                    <span class="cm-tag cm-bracket">&lt;/</span><span class="cm-tag">td</span><span class="cm-tag cm-bracket">&gt;</span></span></pre></div></div></div></div></div></div><div style="position: absolute; height: 15px; width: 1px; top: 844px;"></div><div class="CodeMirror-gutters" style="height: 859px;"><div class="CodeMirror-gutter CodeMirror-linenumbers" style="width: 29px;">
       </div></div></div></div></div>
       
               <div class="col-sm-6">
         
            <div id="signatureView" class="embed-responsive-item col-sm-12">
        <table>
            <tbody>
                <tr>
                    <td style="font-size: 15px; font-family: Calibri;" valign="top" align="left"><b>Shoba Lekkala</b><br>
                       <span style="font-size: 14px"> Webmaster
                        </span>
                    </td>
                    <td width="80"></td>
                    <td align="right"><a href="http://www.miraclesoft.com" target="blank"><img src="http://www.miraclesoft.com/images/newsletters/miracle-logo-dark1.png" alt="logo"></a></td>
                </tr>
                <tr>
                    <td colspan="4">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td style="font-size: 14px; font-family: Calibri;" valign="top" align="left"><b>Phone: </b>(248)-232-7405<br>
                        <b>Mobile: </b>(949)-176-5035<br>
                        <b>Email: </b><a href="mailto:slekala@miraclesoft.com" target="blank">slekala@miraclesoft.com</a><br>
                        <a href="https://www.facebook.com/miracle45625/" target="blank" style="color:#ef4048; text-decoration: none;"><img src="http://www.miraclesoft.com/images/newsletters/facebook1.png"></a>
                        <a href="https://plus.google.com/+Team_MSS" target="blank" style="color:#ef4048; text-decoration: none;"><img src="http://www.miraclesoft.com/images/newsletters/googleplus1.png"></a>
                        <a href="https://www.linkedin.com/company/miracle-software-systems-inc" target="blank" style="color:#ef4048; text-decoration: none;"><img src="http://www.miraclesoft.com/images/newsletters/Linkedin1.png"></a>
                        <a href="https://www.youtube.com/c/Team_MSS" target="blank" style="color:#ef4048; text-decoration: none;"><img src="http://www.miraclesoft.com/images/newsletters/youtube1.png"></a>
                        <a href="https://twitter.com/Team_MSS" target="blank" style="color:#ef4048; text-decoration: none;"><img src="http://www.miraclesoft.com/images/newsletters/Twitter1.png"></a>
                    </td>
                    <td width="80"></td>
                    <td style="font-size:14px; font-family: calibri" valign="top" align="right">
                    Miracle Heights – APAC HQ<br>
                    Hill No. 1, IT SEZ, Chinna Rushi Konda<br>
                    Visakhapatnam, AP - 530045, India <br>
                    <a href="http://www.miraclesoft.com" target="blank">www.miraclesoft.com</a>
                    </td>
                </tr>
            </tbody>
        </table> </div> 
  
       </div>
       </section>
     </div>
   
<br>
   
   <div class="row container" id="buttonDiv" style="">
        <div class="col-sm-6"><button type="button" class="btn btn-primary form-control" onclick="updateEmployeeSignatureData();" id="copyButton">Copy Code to Clipboard</button><br><br></div>
              <div class="col-sm-6">
                
                      <button type="button" class="btn btn-success form-control " tabindex="8">Signature Preview </button>
                 
                  </div>
         </div>
<section class="container">
        <div class="row" id="italicDiv" style="">
        <div class="col-sm-12">
             <i>Now that you have generated your signature, go over to the <a href="signature-document.php" class="linkText" target="_blank"><strong><font color="#00aae7">How To Documentation</font></strong></a> to start adding your signature to your email client!</i>
        </div>
    </div>
    </section>   
<br>
<div id="faqDiv" style="">
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
                          </p><div class="row">
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
                     Please feel free to contact the Marketing Team at <a href="mailto:marketing@miraclesoft.com"><strong>marketing@miraclesoft.com</strong></a> (or) give us a call at <strong>248-412-0428</strong>. The Web Experience and the Content Team are in-charge of the Email Signature Standards and will be more than happy to help you out.  <p></p>
    
   <br><br>
   </div>
        </div>
        <br>
 </section>  
 
    <?php include 'footer.php';?> 
  </body>
</html>
