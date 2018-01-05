<!DOCTYPE html>

<html>
   <head>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    
    <link href="../css/main.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/default.css" />
	<link rel="stylesheet" type="text/css" href="../css/component.css" />
    </style>
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    
  </head>
<?php include '../header.php';?><br><br>
<body>
 <section id="career" class="container">      
        <br>
        <br>
        <div class="row">
         
          <div class="col-sm-6 text-left">
            <h1 class="heavy">
              Password Change 
            </h1>
          </div>
          <div class="col-sm-6 text-right">
            <ul class="breadcrumb pull-right">
                <li><a href="../">Home</a></li>
                <li><a href="../contact">Contact</a></li>
                <li class="active">Password Change </li>
            </ul>
          </div>
          
          </div>
          
         <div class="row">
               
             <div class="col-sm-6">
                <p class="methodText">
                    <strong>Forgot your password! Not a problem at all ! </strong><br><br>
                   It is very common for someone to forget their password, and this is the most commonly used link on most Account Based Websites. 
                    <br><br>
                   Don't worry as with a simple click you can get back on track with your work. Let us know your email ID and will send a verification link back to you to change your password. 
                   
                </p>
             </div>
             <div class="col-sm-6">
                <div class="jumbotron">

<form method="post" id="passwordForm">
 <div class="input-group">
	<input class="input-xs form-control" name="password1" id="password1" placeholder="New Password" autocomplete="off" type="password"> 
		<span class="input-group-btn">
		<button type="button" class="btn btn-default">
		<span class="glyphicon glyphicon-lock"></span></button>
		</span>
 </div>
	

<div class="col-sm-6">
<span id="8char" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> 8 Characters Long<br>
<span id="ucase" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> One Uppercase Letter
</div>
<div class="col-sm-6">
<span id="lcase" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> One Lowercase Letter<br>
<span id="num" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> One Number
</div>


 <div class="input-group">
<input class="input-xs form-control" name="password2" id="password2" placeholder="Repeat Password" autocomplete="off" type="password">
		<span class="input-group-btn">
		<button type="button" class="btn btn-default">
		<span class="glyphicon glyphicon-log-in"></span></button>
		</span>
 </div>

<div class="row">
<div class="col-sm-12">
<span id="pwmatch" class="glyphicon glyphicon-ok" style="color: rgb(0, 164, 30);"></span> Passwords Match
</div>
</div>
<input class="col-xs-12 btn btn-primary btn-load btn-md" data-loading-text="Changing Password..." value="Change Password" type="submit">
</form>
</div></div><br><br>
</div><!--/col-sm-6--></section>
	<script type="text/javascript">
	$("input[type=password]").keyup(function(){
    var ucase = new RegExp("[A-Z]+");
	var lcase = new RegExp("[a-z]+");
	var num = new RegExp("[0-9]+");
	
	if($("#password1").val().length >= 8){
		$("#8char").removeClass("glyphicon-remove");
		$("#8char").addClass("glyphicon-ok");
		$("#8char").css("color","#00A41E");
	}else{
		$("#8char").removeClass("glyphicon-ok");
		$("#8char").addClass("glyphicon-remove");
		$("#8char").css("color","#FF0004");
	}
	
	if(ucase.test($("#password1").val())){
		$("#ucase").removeClass("glyphicon-remove");
		$("#ucase").addClass("glyphicon-ok");
		$("#ucase").css("color","#00A41E");
	}else{
		$("#ucase").removeClass("glyphicon-ok");
		$("#ucase").addClass("glyphicon-remove");
		$("#ucase").css("color","#FF0004");
	}
	
	if(lcase.test($("#password1").val())){
		$("#lcase").removeClass("glyphicon-remove");
		$("#lcase").addClass("glyphicon-ok");
		$("#lcase").css("color","#00A41E");
	}else{
		$("#lcase").removeClass("glyphicon-ok");
		$("#lcase").addClass("glyphicon-remove");
		$("#lcase").css("color","#FF0004");
	}
	
	if(num.test($("#password1").val())){
		$("#num").removeClass("glyphicon-remove");
		$("#num").addClass("glyphicon-ok");
		$("#num").css("color","#00A41E");
	}else{
		$("#num").removeClass("glyphicon-ok");
		$("#num").addClass("glyphicon-remove");
		$("#num").css("color","#FF0004");
	}
	
	if($("#password1").val() == $("#password2").val()){
		$("#pwmatch").removeClass("glyphicon-remove");
		$("#pwmatch").addClass("glyphicon-ok");
		$("#pwmatch").css("color","#00A41E");
	}else{
		$("#pwmatch").removeClass("glyphicon-ok");
		$("#pwmatch").addClass("glyphicon-remove");
		$("#pwmatch").css("color","#FF0004");
	}
});
	</script>

<?php include '../footer.php';?>
</body></html>