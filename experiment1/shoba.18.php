<!DOCTYPE html>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>
            Events | Miracle
        </title>
    <link href="../../css/bootstrap.css" rel="stylesheet">
    <link href="../../css/main.css" rel="stylesheet">
    <link href="../../css/default.css" rel="stylesheet" type="text/css">
    <link href="../../css/component.css" rel="stylesheet" type="text/css">
    <link href="../../css/font-awesome.css" rel="stylesheet">
    <link href="../../css/font-awesome.min.css" rel="stylesheet">
    <link href="../../images/favicon.ico" rel="shortcut icon">

 

<?php include '../header.php';?><br><br><br>
<body>
    
   <section id="career" class="container">
     <br>
         <div class="row">
          <div class="col-sm-7 text-left">
            <div class="pageTitle">
              <strong>Microsoft Partner</strong>
              
            </div>
          </div>
         <!-- <div class="col-sm-5 text-right">
            <ul class="breadcrumb pull-right">
                <li><a href="../">Home</a></li>
                <li><a href="#">Events</a></li>
                <li class="active">Upcoming</li>
            </ul>
          </div>-->
        </div><br>
   <?php 
error_reporting(E_ALL ^ E_NOTICE); // hide all basic notices from PHP

//If the form is submitted
if(isset($_POST['submitted'])) {
	
	// require a name from user
	if(trim($_POST['contactName']) === '') {
		$nameError =  'Forgot your name!'; 
		$hasError = true;
	} else {
		$name = trim($_POST['contactName']);
	}
	
	// need valid email
	if(trim($_POST['email']) === '')  {
		$emailError = 'Forgot to enter in your e-mail address.';
		$hasError = true;
	} else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
		$emailError = 'You entered an invalid email address.';
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}
		
	// we need at least some content
	if(trim($_POST['comments']) === '') {
		$commentError = 'You forgot to enter a message!';
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['comments']));
		} else {
			$comments = trim($_POST['comments']);
		}
	}
		
	// upon no failure errors let's email now!
	if(!isset($hasError)) {
		
		$emailTo = 'shobalekkala@gmail.com';
		$subject = 'Submitted message from '.$name;
		$sendCopy = trim($_POST['sendCopy']);
		$body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
		$headers = 'From: ' .' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, $subject, $body, $headers);
        
        // set our boolean completion value to TRUE
		$emailSent = true;
	}
}
?> 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

  <div class="row">
      <div class="col-sm-7">
          <p>Microsoft's ambitions are anything but small, and they are now venturing into the world of Enterprises Software and Miracle can use its excellent technical know-how to help simplify implementation for customers </p>
          <p>Miracle always believes in thought leadership and disruptive innovations, and that is the direction that we want to take the company forward. Our teams are given a chance to play with the latest cutting edge technologies and experiment extensively with them as part of our COE. </p>
      </div>
      <div class="col-sm-5">
          
          
          
          
          
          	<div id="contact" class="section">
		<div class="content">
		
	        <?php if(isset($emailSent) && $emailSent == true) { ?>
                <p class="info">Your email was sent. Huzzah!</p>
            <?php } else { ?>
            
				<div class="desc">
					<h2>Contact Us</h2>
					
				</div>
				
				<div id="contact-form">
					<?php if(isset($hasError) || isset($captchaError) ) { ?>
                        <p class="alert">Error submitting the form</p>
                    <?php } ?>
				
					<form id="contact-us" action="shoba.18.php" method="post">
						<div class="form-group">
							<label class="screen-reader-text">Name</label>
							<input type="text" name="contactName" class="form-control" id="contactName" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" class="txt requiredField" placeholder="Name:" />
							<?php if($nameError != '') { ?>
								<br /><span class="error"><?php echo $nameError;?></span> 
							<?php } ?>
						</div>
                        
						<div class="form-group">
							<label class="screen-reader-text">Email</label>
							<input type="text" class="form-control" name="email" id="email" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" class="txt requiredField email" placeholder="Email:" />
							<?php if($emailError != '') { ?>
								<br /><span class="error"><?php echo $emailError;?></span>
							<?php } ?>
						</div>
                        
						<div class="form-group">
							<label class="screen-reader-text">Message</label>
							 <textarea name="comments" class="form-control" id="commentsText" class="txtarea requiredField" placeholder="Message:"><?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?></textarea>
							<?php if($commentError != '') { ?>
								<br /><span class="error"><?php echo $commentError;?></span> 
							<?php } ?>
						</div>
                        
							<button name="submit" type="submit" class="btn btn-primary subbutton">Send us Mail!</button>
							<input type="hidden" name="submitted" id="submitted" value="true" />
					</form>			
				</div>
				
			<?php } ?>
		</div>
    </div><!-- End #contact -->
          
          
          
      </div>
  </div>  
    
</section>
<?php include '../footer.php';?>

<style>

#contact {background: #eef4f9; border: 1px solid #c6d2dd; line-height:1.4em;padding:5px 15px;}
.form-control{width:100% !important;}
#contact .desc { }
#contact .desc h2 { font-family: Georgia, Tahoma, sans-serif; font-weight: normal; letter-spacing: -0.03em; color: #444; font-size: 1.4em; }

#contact .desc p { font-family: Arial, Verdana, sans-serif; font-size: 1.2em; color: #333; line-height: 1.3em; margin-bottom: 15px; }

#contact .formblock { display: block; margin-bottom: 11px; }
#contact .formblock label { font-size: 1.1em; display: block; font-style: italic; font-weight: normal; color: #232323; font-family: Georgia, "Times New Roman", Times, serif; color: #5f6d7a; }

#contact .formblock .txt { padding: 4px 6px; font-family: Arial, Tahoma, sans-serif; color: #666; width: 330px; }
#contact .formblock .txtarea {font-family: Arial, Tahoma, sans-serif; padding: 3px 5px; color: #666; width: 330px; height: 140px; }

#contact .formblock .error { font-weight: bold; font-style: normal; font-family: Arial, Tahoma, sans-serif; color: #9d3131; }
#contact .info { font-weight: bold; font-size: 1.3em; color: #59913d; margin-bottom: 10px; font-family: Arial, Tahoma, sans-serif; }

#contact p.tick { font-family: Arial, Helvetica, sans-serif; font-style: italic; font-size: 1.2em; color: #3e669c; }

#contact .subbutton { padding: 3px 7px; font-weight: bold; font-family: "Trebuchet MS", Arial, Tahoma, sans-serif; color: #FFFFFF; }
</style>

<script type="text/javascript">
	<!--//--><![CDATA[//><!--
	$(document).ready(function() {
		$('form#contact-us').submit(function() {
			$('form#contact-us .error').remove();
			var hasError = false;
			$('.requiredField').each(function() {
				if($.trim($(this).val()) == '') {
					var labelText = $(this).prev('label').text();
					$(this).parent().append('<span class="error">Your forgot to enter your '+labelText+'.</span>');
					$(this).addClass('inputError');
					hasError = true;
				} else if($(this).hasClass('email')) {
					var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
					if(!emailReg.test($.trim($(this).val()))) {
						var labelText = $(this).prev('label').text();
						$(this).parent().append('<span class="error">Sorry! You\'ve entered an invalid '+labelText+'.</span>');
						$(this).addClass('inputError');
						hasError = true;
					}
				}
			});
			if(!hasError) {
				var formInput = $(this).serialize();
				$.post($(this).attr('action'),formInput, function(data){
					$('form#contact-us').slideUp("fast", function() {				   
						$(this).before('<p class="tick"><strong>Thanks!</strong> Your email has been delivered. We will reach you!</p>');
					});
				});
			}
			
			return false;	
		});
	});
	//-->!]]>
</script>
</body>
</html>