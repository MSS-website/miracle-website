<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    
    <link href="../css/main.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/default.css"/>
    <link rel="stylesheet" type="text/css" href="../css/component.css"/>
    <script src="../js/modernizr.custom.js">
    </script>
</head>

  
  <?php include '../header.php';?>
  <body>
      <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    
<style>

img {
     width: 50%;
	}
.car{
	      height:300px;
	      width:300px;
	  }

.carousel.vertical .carousel-inner {
  height: 100%;
}
.carousel.vertical .item {
  -webkit-transition: 0.6s ease-in-out top;
  -moz-transition:    0.6s ease-in-out top;
  -ms-transition:     0.6s ease-in-out top;
  -o-transition:      0.6s ease-in-out top;
  left:               0;
}
.carousel.vertical .active,
.carousel.vertical .next.left,
.carousel.vertical .prev.right    { top:     0; }
.carousel.vertical .next,
.carousel.vertical .active.right  { top:  100%; }
.carousel.vertical .prev,
.carousel.vertical .active.left   { top: -100%; }        
</style>
   
   
    
<br><br><br><br><br><br><br><br><br><br><br>       
    
    <div class="row">
        <div class="col-sm-8"></div>
        <div class="col-sm-4">
          <div class="container car">

<!--The main div for carousel-->
<div id="carousel-demo" class="carousel vertical slide" data-ride="carousel" data-interval="2000">
 <!-- Indicators -->
 
  
  <!-- Sliding images statring here --> 
   <div class="carousel-inner"> 
    <div class="item active"> 
      <img src="../images/two/1.jpg" alt="banana"> 
      
    </div> 
    <div class="item"> 
      <img src="../images/two/OMS.jpg" alt="currant"> 
            
   </div> 
    <div class="item"> 
      <img src="../images/two/1.jpg" alt="mango"> 
               
    </div>
    <div class="item"> 
      <img src="../images/two/OMS.jpg" alt="strawberries">
               
    </div> 
     
  </div> 
  
  <!-- Next / Previous controls here -->
  <a class="left carousel-control" href="#carousel-demo" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <a class="right carousel-control" href="#carousel-demo" data-slide="next">
    <span class="glyphicon glyphicon-chevron-down"></span>
  </a>

              </div>
            </div> 
        </div>
    </div>
     
     
    
            
            
    <?php include '../footer.php';?>
    
  </body>
</html>