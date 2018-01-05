<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Employee Growth, Diversified Services and Customer Satisfaction are the way forward for the team at Miracle">
    
    <meta name="author" content="">
    
    <title>
     Content Syndication
    </title>
    
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    
    <link href="../css/main.css" rel="stylesheet">
    
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/default.css"/>
    <link rel="stylesheet" type="text/css" href="../css/component.css"/>
    <script src="../js/modernizr.custom.js">
    </script>
 <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  
  <link rel="shortcut icon" href="../images/favicon.ico">
 <style>
 .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
     /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    /* Fallback color */
    background-color: rgba(0,0,0,0.8); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #232527 !important;
   
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
input[type="text"]
{
    background: transparent;
    border: 1px solid #ffffff;
     width:313px;
}
input[type="password"]
{
    background: transparent;
    border: 1px solid #ffffff;
     width:313px;
}
button[type="submit"]
{
    background: transparent;
    border: 1px solid #00aae7;
    color:#ffffff;
   width:313px;
}
h3{
    color:#ffffff !important;
    }
 </style>
  </head>
  
  <?php include '../header.php';?>
  <body>
   <script>
   $(window).load(function(){ 
         setTimeout(function(){
   $('#myModal').modal('show');
         },2000);
    }); 
   </script>

    <section id="about-us" class="container">
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
     
      <button id="myBtn">Open Modal</button>


<div id="myModal" class="modal">

 
  <div class="modal-content">
              <div class="modal-header">
   <center><h3>Employee Login</h3></center>
   </div>
   <div class="modal-body">
   <div class="row">
   <div class="col-sm-4">
   </div>
   <div class="col-sm-4">
    <p style="color:#ffffff">You must be a Miraclite to gain access to this meet. Please validate yourself using your Miracle credentials for further access.</p>
  <form>
  <div class="form-group">
   
    <input type="text" class="form-control" id="name"  placeholder="Name">
  </div>
  <div class="form-group">
    
    <input type="password" class="form-control" id="pwd" placeholder="Password">
  </div><br>
  <button type="submit" class="btn btn-default" data-dismiss="modal">Login</button>
  </form>
  
  </div>
  <div class="col-sm-4">
   </div>
 </div>
  </div>
 <div class="modal-footer">
 <div class="row">
 <div class="col-sm-4">
 </div>
 <div class="col-sm-4">
 
 
   </div>
    <div class="col-sm-4">
 </div>
   </div>
   </div>
 </div>
</div>
 <script>
var modal = document.getElementById('myModal');

var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
    modal.style.display = "block";
}

span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>
       <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    </section>
    
    <?php include '../footer.php';?>
    
  </body>
</html>