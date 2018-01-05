<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="We are here to help you grow, reach your targets and achieve your business goals. Contact us today to learn more about our services. ">
    
    <meta name="author" content="">
    
    <title>
      Contact Us | Miracle
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
    <!--[if lt IE 9]>

<script src="js/html5shiv.js">
</script>

<script src="js/respond.min.js">
</script>
<![endif]-->
  
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  
  <link rel="shortcut icon" href="../images/favicon.ico">
  
  <style type="text/css">
    .box-div {

    width: 600px;
    height:130px;
    border: 3px solid black;
    padding: 25px;
    margin: 25px;
}

.checkmark {
  width: 120px;
  margin: 0 auto;
  padding-top: 40px;
}


.path {
  stroke-dasharray: 1000;
  stroke-dashoffset: 0;
  animation: dash 2s ease-in-out;
  -webkit-animation: dash 2s ease-in-out;
}

.spin {
  animation: spin 2s;
  -webkit-animation: spin 2s;
  transform-origin: 50% 50%;
  -webkit-transform-origin: 50% 50%;
}

p2 {
  	font-family: 'Open Sans' sans-serif;
  color: #000000;
  font-size: 30px;
  font-weight: bold;
  margin: 20px auto;
  text-align: center;
  animation: text .5s linear .4s;
  -webkit-animation: text .4s linear .3s;
}

p3 {
  font-family: 'Open Sans' sans-serif;
  color: #00aae7;
  font-size: 30px;
  font-weight: bold;
  margin: 20px auto;
  text-align: center;
  animation: text .5s linear .4s;
  -webkit-animation: text .4s linear .3s;
}


@-webkit-keyframes dash {
 0% {
   stroke-dashoffset: 1000;
 }
 100% {
   stroke-dashoffset: 0;
 }
}

@keyframes dash {
 0% {
   stroke-dashoffset: 1000;
 }
 100% {
   stroke-dashoffset: 0;
 }
}

@-webkit-keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
  }
}

@keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
  }
}

@-webkit-keyframes text {
  0% {
    opacity: 0; }
  100% {
    opacity: 1;
  }

  
  @keyframes text {
  0% {
    opacity: 0; }
  100% {
    opacity: 1;
  }
}

</style>
  
  </head>
  <?php include '../header.php';?>
  <body>
    
   
    
    <section class="container" id="contactForm">
      
      <br>
      <br>
      <br>
      <br>
      <div class="row">
        
        <div class="col-sm-1">
        </div>
        <div class="col-sm-5 text-left">
          <h1 class="heavy">
              Contact Us
            </h1>
        </div>
        <div class="col-sm-5 text-right">
          
          <ul class="breadcrumb pull-right">
            
            <li>
              <a href="../">
                Home
              </a>
            </li>
            
            <li class="active">
              Contact Us
            </li>
          </ul>
          
        </div>
        <div class="col-sm-1">
        </div>
      </div>
      <br/>
      
      <div class="row">
        
        <div class="col-sm-1">
        </div>
        <div class="col-sm-10">
          
          <p class="methodText">
            At Miracle we believe that we can help you reach your business goals and achieve more. Our teams can understand your business needs and customize solutions to fit perfectly for your business. Fill in the following form if you would like to reach out to us for more information.
          </p>
        </div>
        <div class="col-sm-1">
        </div>
      </div>
      <div class="row">
        
        <div class="col-sm-1">
        </div>
        <div class="col-sm-10">
          
          <div class="jumbotron">
            
            <div class="row">
              
              <div class="col-sm-12">
                
                <h3 class="heavy">
                    Contact Form
                  </h3>
              </div>
            </div>
            <div id="resultmessage">
              
              <?php echo $resultMessage; ?>
              
            </div>
            <form id="myForm" action="
<?php $_PHP_SELF ?>
" method="post">
  

  <div class="row">
    
    <div class="col-sm-4">
      
      <div class="form-group">
        
        <input type="text" tabindex="1" class="form-control" required="required" placeholder="First Name" id="firstname" name="firstname" tabindex="1" onchange="fieldLengthValidator(this);">
        
      </div>
      <div class="form-group">
        
        <input type="text" tabindex="4" class="form-control" required="required" placeholder="Organization" id="organization" name="organization" tabindex="4" onchange="fieldLengthValidator(this);">
        
      </div>
    </div>
    <div class="col-sm-4">
      
      <div class="form-group">
        
        <input type="text" tabindex="2" class="form-control" required="required" placeholder="Last Name" id="lastname" name="lastname" tabindex="2" onchange="fieldLengthValidator(this);">
        
      </div>
      <div class="form-group">
        
        <input type="text" tabindex="5" class="form-control" required="required" placeholder="Designation" id="designation" name="designation" tabindex="5" onchange="fieldLengthValidator(this);">
        
      </div>
    </div>
    <div class="col-sm-4">
      
      <div class="form-group">
        
        <input type="text" tabindex="3" class="form-control" required="required" placeholder="Email" id="email" name="email" tabindex="3" onchange="return checkEmail(this);fieldLengthValidator(this);">
        
      </div>
      <div class="form-group">
        
        <input type="text" tabindex="6" class="form-control" required="required" onkeypress="return isNumberKey(event)" placeholder="Work Phone" id="phone" name="phone" tabindex="6" onchange="return formatPhone(this);" onblur="return validatenumber(this)">
        
      </div>
    </div>
  </div>
  <div class="row">
    
    <div class="col-sm-3">
      
      <div class="form-group">
        
        <input type="text" tabindex="7" class="form-control" required="required" placeholder="City" id="city" name="city" tabindex="7" onchange="fieldLengthValidator(this);">
        
      </div>
    </div>
    <div class="col-sm-3">
      
      <div class="form-group">
        
        <input type="text" tabindex="8" class="form-control" required="required" placeholder="State" name="state" id="state" onchange="fieldLengthValidator(this);">
        
      </div>
    </div>
    <div class="col-sm-3">
      
      <div class="form-group">
        
        <input type="text" tabindex="9" class="form-control" required="required" placeholder="Country" id="country" name="country" onchange="fieldLengthValidator(this);">
        
      </div>
    </div>
    <div class="col-sm-3">
      
      <div class="form-group">
        
        <input type="text" tabindex="10" class="form-control" required="required" onkeypress="return isNumberKey(event)" placeholder="Zip Code" id="zip" name="zip" onchange="fieldLengthValidator(this);">
        
      </div>
    </div>
  </div>
  <div class="row">
    
    <div class="col-sm-12">
      
      <div class="form-group">
        
        <textarea class="form-control" tabindex="11" placeholder="What kind of services are you looking for?" rows="3" id="description" name="description" value="" onchange="fieldLengthValidator(this);">
        </textarea>
        
      </div>
    <button type="button" id="contactSubmit" class="btn btn-primary">Submit Details</button>  
    </div>
  
  </div>
  
  

  
  
  </form>
  </div>
  </div>
  <div class="col-sm-1">
  </div>
  </div>
  <br>
  </section>
  
  <section id="thankYou">
  <br><br><br><br>
  
  
  <div class="row">
    
     <div class="col-sm-1"></div>
     <div class="col-sm-10">
       <div class="checkmark">
  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 161.2 161.2" enable-background="new 0 0 161.2 161.2" xml:space="preserve">

<circle class="path" fill="none" stroke="green" stroke-width="4" stroke-miterlimit="10" cx="80.6" cy="80.6" r="62.1"/>
<polyline class="path" fill="none" stroke="green" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="113,52.8 
	74.1,108.4 48.2,86.4 "/>
<circle class="spin" fill="none" stroke="green" stroke-width="4" stroke-miterlimit="10" stroke-dasharray="12.2175,12.2175" cx="80.6" cy="80.6" r="73.9"/>

</svg>
</div>  
<center><p2> Your details have been submitted<p2><br><p3> We’ll be in touch shortly.</p3></center>
<br><br>
<div class="row">
  <div class="col-sm-4">
    <button class="btn btn-primary col-sm-8">Button1</button>
  </div>
  <div class="col-sm-4">
    <button class="btn btn-primary col-sm-8">Button2</button>
  </div>
  <div class="col-sm-4">
    <button class="btn btn-primary col-sm-8">Button3</button>
  </div>
</div>
     <br><br><br><br><br><br><br><br><br><br>
     
     </div>
     <div class="col-sm-1"></div>
     
   </div>
  </section>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  
  <script>
  $(document).ready(function(){
    $("#thankYou").hide(0);
      $("#contactSubmit").click(function(){
      $("#contactForm").hide(0);
      $("#thankYou").show(0);
    });
    
  });
</script>



  
  <?php include '../footer.php';?>
  
 
  </body>
</html>