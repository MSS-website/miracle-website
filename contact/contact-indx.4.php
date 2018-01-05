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
    
    
    
    <link href="../css/main.css" rel="stylesheet">
    
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/default.css"/>
    <link rel="stylesheet" type="text/css" href="../css/component.css"/>
  
   
  
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
      <br><br><br>
            
     
        
    
      
          
          
           
            
            <form id="myForm">
  
  <div class="row">
    
    <div class="col-sm-12">
      
      
    <button type="button" id="contactSubmit" class="btn btn-primary">Submit Details</button>  
    </div>
  
  </div>
  
  
  </form>
  

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