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
        
        <div class="" data-toggle="buttons">
            <label class="btn btn-lg btn-success active">
                <input type="radio" name="options" id="option1" autocomplete="off" checked>
                <i class="fa fa-check"></i> Success
            </label>
            <label class="btn btn-lg btn-danger">
                <input type="radio" name="options" id="option2" autocomplete="off">
                <i class="fa fa-warning"></i> Error
            </label>          
        </div>
      
      <br />
    
        <div class="" data-toggle="buttons">
            <label class="btn btn-lg btn-default active">
            <input type="radio" name="options" id="option1" autocomplete="off" checked>
            <i class="fa fa-thumbs-o-up"></i>
        </label>
        <label class="btn btn-lg btn-default">
            <input type="radio" name="options" id="option2" autocomplete="off">
            <i class="fa fa-thumbs-o-down"></i>
        </label>   
		</div>
      
      <br />
      
      <div class="" data-toggle="buttons">
        <label class="btn btn-lg btn-block btn-success text-success active">
            <input type="radio" name="options" id="option1" autocomplete="off" checked>
            <i class="fa fa-check-circle-o fa-3x animated fadeIn"></i>
            <br />
           Saved
        </label>
        <label class="btn btn-lg btn-block btn-default text-default">
            <input type="radio" name="options" id="option2" autocomplete="off">
            <i class="fa fa-circle-o fa-3x"></i>
            <br />
           Save
        </label>
        
      </div>
    
    </div>
</div>
    
</div>

</body>
</html>