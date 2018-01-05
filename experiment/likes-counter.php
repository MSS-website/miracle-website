<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Employee Growth, Diversified Services and Customer Satisfaction are the way forward for the team at Miracle">
    
    <meta name="author" content="">
    
    <title>
     Toggle button
    </title>
    
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    
    <link href="../css/main.css" rel="stylesheet">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/default.css"/>
    <link rel="stylesheet" type="text/css" href="../css/component.css"/>
    <script src="../js/modernizr.custom.js"></script>
    <script src="../js/Validation.js" type="text/javascript"></script>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">   
    <!--Chisato script-->
    
    <!--[if lt IE 9]>

<script src="js/html5shiv.js">
</script>

<script src="js/respond.min.js">
</script>
<![endif]-->
  
 
  
  <link rel="shortcut icon" href="../images/favicon.ico">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
  <style type="text/css">
     .btn.active {                
	display: none;		
}

.btn span:nth-of-type(1)  {            	
	display: none;
}
.btn span:last-child  {            	
	display: block;		
}

.btn.active  span:nth-of-type(1)  {            	
	display: block;		
}
.btn.active span:last-child  {            	
	display: none;			
}
  </style>
  </head>
  
  <?php include '../header.php';?>
 <body>
    <div class="container">
    <h1 class="text-center">Toggle!</h1>
</div>

<div class="container">

    <div class="well well-sm text-center">        
            <label class="btn btn-lg btn-default">
            <i class="fa fa-thumbs-o-up"></i>
        </label>
      
      
      <label class="btn btn-lg btn-default">
          <i class="fa fa-thumbs-o-down"></i>
        </label>   
      <br />
      
      
    
    </div>
</div>
    
</div>



<div ng-app="myApp" ng-controller="myCtrl">

<button ng-click="count = count + 1">Click Me!</button>

<div>{{ count }}</div>

</div>
<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
    
    $scope.count = 0;
});
</script>



<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
</body>
</html>