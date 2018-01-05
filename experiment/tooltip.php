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
   
    <!--[if lt IE 9]>

<script src="js/html5shiv.js">s
</script>

<script src="js/respond.min.js">
</script>
<![endif]-->
  <script src="../assets/jquery/1.9.1/jquery.js"></script>
<script>
	var createAllErrors = function() {
		var form = $( this ),
			errorList = $( "ul.errorMessages", form );

		var showAllErrorMessages = function() {
			errorList.empty();

			// Find all invalid fields within the form.
			var invalidFields = form.find( ":invalid" ).each( function( index, node ) {

				// Find the field's corresponding label
				var label = $( "label[for=" + node.id + "] "),
					// Opera incorrectly does not fill the validationMessage property.
					message = node.validationMessage || 'Invalid value.';

				errorList
					.show()
					.append( "<li><span>" + label.html() + "</span> " + message + "</li>" );
			});
		};

		// Support Safari
		form.on( "submit", function( event ) {
			if ( this.checkValidity && !this.checkValidity() ) {
				$( this ).find( ":invalid" ).first().focus();
				event.preventDefault();
			}
		});

		$( "input[type=submit], button:not([type=button])", form )
			.on( "click", showAllErrorMessages);

		$( "input", form ).on( "keypress", function( event ) {
			var type = $( this ).attr( "type" );
			if ( /date|email|month|number|search|tel|text|time|url|week/.test ( type )
			  && event.keyCode == 13 ) {
				showAllErrorMessages();
			}
		});
	};
	
	$( "form" ).each( createAllErrors );
</script>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  
  <link rel="shortcut icon" href="../images/favicon.ico">
  



		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script>
      $('form').on('submit', function (e) {
        var focusSet = false;
        if (!$('#email').val()) {
            if ($("#email").parent().next(".validation").length == 0) // only add if not added
            {
                $("#email").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>Please enter email address</div>");
            }
            e.preventDefault(); // prevent form from POST to server
            $('#email').focus();
            focusSet = true;
        } else {
            $("#email").parent().next(".validation").remove(); // remove it
        }
        if (!$('#password').val()) {
            if ($("#password").parent().next(".validation").length == 0) // only add if not added
            {
                $("#password").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>Please enter password</div>");
            }
            e.preventDefault(); // prevent form from POST to server
            if (!focusSet) {
                $("#password").focus();
            }
        } else {
            $("#password").parent().next(".validation").remove(); // remove it
        }
    });
</script>
   	<style type="text/css">
   	  @charset"utf-8";

/* CSS Document */

/* ---------- FONTAWESOME ---------- */

/* ---------- http://fortawesome.github.com/Font-Awesome/ ---------- */

/* ---------- http://weloveiconfonts.com/ ---------- */
 @import url(http://weloveiconfonts.com/api/?family=fontawesome);

/* ---------- ERIC MEYER'S RESET CSS ---------- */

/* ---------- http://meyerweb.com/eric/tools/css/reset/ ---------- */
 @import url(http://meyerweb.com/eric/tools/css/reset/reset.css);

/* ---------- FONTAWESOME ---------- */
[class*="fontawesome-"]:before {
    font-family:'FontAwesome', sans-serif;
}
/* ---------- GENERAL ---------- */
 body {
    background-color: #C0C0C0;
    color: #000;
    font-family:"Varela Round", Arial, Helvetica, sans-serif;
    font-size: 16px;
    line-height: 1.5em;
}
input {
    border: none;
    font-family: inherit;
    font-size: inherit;
    font-weight: inherit;
    line-height: inherit;
    -webkit-appearance: none;
}
/* ---------- LOGIN ---------- */
 #login {
    margin: 50px auto;
    width: 400px;
}
#login h2 {
    background-color: #f95252;
    -webkit-border-radius: 20px 20px 0 0;
    -moz-border-radius: 20px 20px 0 0;
    border-radius: 20px 20px 0 0;
    color: #fff;
    font-size: 28px;
    padding: 20px 26px;
}
#login h2 span[class*="fontawesome-"] {
    margin-right: 14px;
}
#login fieldset {
    background-color: #fff;
    -webkit-border-radius: 0 0 20px 20px;
    -moz-border-radius: 0 0 20px 20px;
    border-radius: 0 0 20px 20px;
    padding: 20px 26px;
}
#login fieldset p {
    color: #777;
    margin-bottom: 14px;
}
#login fieldset p:last-child {
    margin-bottom: 0;
}
#login fieldset input {
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
}
#login fieldset input[type="email"], #login fieldset input[type="password"] {
    background-color: #eee;
    color: #777;
    padding: 4px 10px;
    width: 328px;
}
#login fieldset input[type="submit"] {
    background-color: #33cc77;
    color: #fff;
    display: block;
    margin: 0 auto;
    padding: 4px 0;
    width: 100px;
}
#login fieldset input[type="submit"]:hover {
    background-color: #28ad63;
}
   	</style>
  </head>
  
  <?php include '../header.php';?>
  <body>
    
    <section id="about-us" class="container">
      
      <br>
      <br>
      <br>
      <br>
      <div class="row">
        
        <div class="col-sm-6 text-left">
          
              <h1 class="heavy">
            Empty
              </h1>
            
        </div>
        <div class="col-sm-6 text-right">
          
          <ul class="breadcrumb pull-right">
            
            <li>
              <a href="../">
                Home
              </a>
            </li>
            <li>
              <a href="../company/about-us.php">
                Company
              </a>
            </li>
            <li class="active">
             Empty
            </li>
          </ul>
          
        </div>
     </div>
      <div id="login">
    	

    <form action="javascript:alert('FORM SUBMITTED');" method="POST">
        <fieldset>
            <p>
                <label for="email">E-mail address</label>
            </p>
            <p>
                <input type="email" id="email">
            </p>
            <p>
                <label for="password">Password</label>
            </p>
            <p>
                <input type="password" id="password">
            </p>
            <!-- JS because of IE support; better: placeholder="Email" -->
            <p>
                <input type="submit" value="Sign In">
            </p>
        </fieldset>
    </form>
</div>
<!-- end login -->
        </form>


 
    <br><br><br><br><br><br><br><br><br><br><br><br>
 
 
   
        </div>
        <div class="col-sm-1"></div>
      
      </div>
      
    </section>
    
    <?php include '../footer.php';?>
    
  </body>
</html>