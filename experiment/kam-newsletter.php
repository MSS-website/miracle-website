<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Employee Growth, Diversified Services and Customer Satisfaction are the way forward for the team at Miracle">
    
    <meta name="author" content="">
    
    <title>
     Newsletter Subscirption 
    </title>
    
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    
    <link href="../css/main.css" rel="stylesheet">
    
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/default.css"/>
    <link rel="stylesheet" type="text/css" href="../css/component.css"/>
    <script src="../js/modernizr.custom.js"></script>
    <script src="../js/Validation.js" type="text/javascript"></script>
     
  
    
    <!--[if lt IE 9]>

<script src="js/html5shiv.js">
</script>

<script src="js/respond.min.js">
</script>
<![endif]-->
  
  <link rel="shortcut icon" href="../images/favicon.ico">
   <link rel="stylesheet" href="newsletter-css/normalize.css">
        <link rel="stylesheet" href="newsletter-css/main.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
<style>
	body {
  background: url(../images/career/career.1.png) no-repeat center fixed;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
 	background-size: cover;
  font-family: 'Open Sans', sans-serif;
 
 
}input[type=checkbox] + label {
  position: relative;
  padding-left: 25px;
  cursor: pointer;
  background: url('checkbox.png') left -132px no-repeat;
  color: #0d416b;
  font-size: 14px;
}
</style>

  </head>
  
  <?php include '../header.php';?>
  <body>
  
   <section class="" id="about-us">
           
            <br><br><br><br><br>
          <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <form id="subscribe-form" class="subscribe-form hide">
            <div class="form-title">Subscribe to our newsletter</div>
            <hr>
            <div class="form-loading hide"><i class="fa fa-circle-o-notch fa-spin"></i></div>
            <div class="form-message hide">
                Thank you for subscribing!</div>
            <div class="form-content">
                <div class="group">
                    <label for="email">Your email</label>
                    <div class="input-prefix">
                        <i class="fa fa-user"></i>
                        <input id="email" name="email" class="form-control" type="email" placeholder="Your email">
                    </div>
                </div>
                <div class="group">
                    <label for="name">Your name</label>
                    <div class="input-prefix">
                        <i class="fa fa-envelope"></i>
                        <input id="name" name="name" class="form-control" type="text" placeholder="Your name">
                    </div>
                </div>
                <div class="group group-submit">
                    <label class="empty"></label>
                    <div align="right"><button class="btn-submit" type="submit">Subscribe</button></div>
                </div>
            </div>
            <div class="fomr-foot">
                <a class="btn" data-toggle="unsubscribe" href="#">Unsubscribe</a>
            </div>
            <input type="hidden" name="action" value="subscribe">
        </form>

        <form id="unsubscribe-form" class="subscribe-form hide">
            <div class="form-title unsubscribe">Unsubscribe from our newsletter</div>
            <hr>
            <div class="form-loading hide"><i class="fa fa-circle-o-notch fa-spin"></i></div>
            <div class="form-message hide">
                You've been unsubscribed.</div>
            <div class="form-content">
                <div class="group">
                    <label for="unsubscribe_email">Your email</label>
                    <div class="input-prefix">
                        <i class="fa fa-user"></i>
                        <input id="unsubscribe_email" name="unsubscribe_email" class="form-control" type="email" placeholder="Your email">
                    </div>
                </div>
                 <div class="group">
                    <label class="empty"></label>
                    <div>
                        <input id="confirm" type="checkbox" name="confirm" value="T">
                        <label for="confirm">Click to confirm you want to unsubscribe</label>
                    </div>
                </div>
                <div class="group group-submit">
                    <label class="empty"></label>
                    <div align="right"><button class="btn-submit" type="submit">Unsubscribe</button></div>
                </div>
            </div>
            <div class="fomr-foot">
                <a class="btn" data-toggle="subscribe" href="#">Subscribe</a>
            </div>
            <input type="hidden" name="action" value="unsubscribe">

        </form>
   
        
</section>
    <br><br><br>
            
  </body>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
         <script src="newsletter-js/plugins.js"></script>
        <script src="newsletter-js/main.js"></script>
  
  <?php include '../footer.php';?>
</html>