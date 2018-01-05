<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="As we are growing we need our team members to help us out to bring the best to our team. Refer a friend today and help grow the Miracle Family. ">
    <meta name="author" content="">
    <title>Webinar Depot| Miracle</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/default.css" />
	<link rel="stylesheet" type="text/css" href="../css/component.css" />
	<script src="../js/modernizr.custom.js"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="/images/favicon.ico">
   
</head><!--/head-->
<?php 
  include '../config/general.php';
/*
$url = 'http://localhost:8084/EmployeeService/es/general/nseerapu/123';
 
// prepare the body data. Example is JSON here
$data = json_encode(array(
'description' => 'Inspiring Poetry',
'public' => 'true',
'files' => array(
'poem.txt' => array(
'content' => 'If I had the time, I\'d make a rhyme'
)
)
));
 
// set up the request context
$options = ["http" => [
"method" => "POST",
"header" => ["Authorization: token " . $access_token,
"Content-Type: application/json"],
"content" => $data
]];
$context = stream_context_create($options);
 
// make the request
$response = file_get_contents($url, false, $context);
$resultMessage = '';
*/
$resultMessage = '';
if(isset($_POST['btnSubmit'])){
    
     /*  $service_url = 'http://localhost:8084/EmployeeService/es/general/nseerapu/123';
       $curl = curl_init($service_url);
      // $curl_post_data = array(
        //    "user_id" => 42,
        ////    "emailaddress" => 'lorna@example.com',
        //    );
       curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
       curl_setopt($curl, CURLOPT_POST, true);
      // curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
       $curl_response = curl_exec($curl);
       curl_close($curl);
 
      // $xml = new SimpleXMLElement($curl_response);

      */
    
   try{ 
       
       
       if(! get_magic_quotes_gpc() ){
            $rloginId = addslashes ($_POST['loginId']);
            $rpassword = addslashes ($_POST['password']);
       }else {
           $rloginId = $_POST['loginId'];
           $rpassword = $_POST['password'];
       }
       
       
ini_set('user_agent', "PHP"); // github requires this
echo $rloginId;
echo $rpassword;

//$api = 'http://localhost:8084/EmployeeService';
$api =SERVICE_URL;
$url = $api . '/es/general/' .$rloginId .'/' .$rpassword;
// make the request
$response = file_get_contents($url);

// check we got something back before decoding
if(false !== $response) {
    echo $response;
    $gists = json_decode($response, true);
  //  echo $gists['message'];
   if($gists['message']=='success'){
  //  echo $gists['name'];
  //  echo $gists['email'];
  //  echo $gists['phone'];
 //   echo $response;
    session_start();
    // Set session variables
//$_SESSION["ses_EmpName"] = $gists['name'];
//$_SESSION["ses_EmpEmail"] = $gists['email'];
//$_SESSION["ses_EmpWorkPhone"] = $gists['phone'];
$_SESSION["ses_EmpLoginId"] = $rloginId;
//echo "Employee Name is " . $_SESSION["ses_EmpName"] . ".<br>";
// remove all session variables
//session_unset();

// destroy the session
//session_destroy();
//echo "Employee Name is " . $_SESSION["ses_EmpName"] . ".<br>";

    //if($gists['email'] )
        if(strripos($gists['email'],"@")>0){
            //header('Location: employee-referrals.php');    
            header('Location: employee-referral-form.php');    
            
        }
    }else {
       $resultMessage = '<font color=red size=2px>'.$gists['message'].'</font>';
    }
} // otherwise something went wrong
       
       
}catch(Exception $exc){
       
   
      $exc->getMessage();
         $resultMessage= '<font color=red size=2px>'.$exc.'</font>';
          header('Location: ../back-end-error.php?resultMessage='.$resultMessage); 
                 
                   
}
}
?>

<?php include '../header.php';?>
<body>
  
   <section id="career" class="container">      
        <br>
        <br>
        <br>
        <br>
        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-5 text-left">
            <h1 class="heavy">
             Webinar Depot
            </h1>
          </div>
          <div class="col-sm-5 text-right">
            <ul class="breadcrumb pull-right">
                <li><a href="../">Home</a></li>
                <li><a href="../events/">Events</a></li>
                <li class="active">Webinar Depot</li>
            </ul>
          </div>
          <div class="col-sm-1"></div>
          </div>
         <div class="row">
             <div class="col-sm-1"></div>    
             <div class="col-sm-6">
                
                                <p class="methodText">
                               <strong>Knowledge which is not shared, is food turning into poison.</strong> At Miracle we feel that we have loads of unique knowledge that needs to be shared across the organization. With this in mind, we created the Internal Knowledge Sharing Webinar Series, which allows unique individuals from varying backgrounds to come out and let their colleagues know something new. </p>
                               <p class="methodText">Login today to check out our upcoming internal webinars, along with recordings of all the past webinars as well. Search through our collection and see which webinar will be useful for you. If you would like to be a speaker and share knowledge with the team, contact us today at <a class="linkText" href="mailto:marketing@miraclesoft.com"><strong>marketing@miraclesoft.com</strong></a> and we will coordinate the same for you. </p>
                            
             </div>
             <div class="col-sm-4">
                <div class="jumbotron">
                   <!-- <form id="referralForm"> -->
                   <form id="referralForm" method="post" action="#">
                        <div class="row">
                            <div class="col-sm-12">
                                <h5 class="heavy">Employee Login</h5>
                                <div class="form-group">
                                    <input type="text" tabindex="1" class="form-control" required="required" placeholder="Login Id" id="loginId" name="loginId"onchange="fieldLengthValidator(this);">
                                </div>
                                <div class="form-group">
                                    <input type="password" tabindex="2" class="form-control" required="required" placeholder="Password" id="password" name="password"onchange="fieldLengthValidator(this);">
                                </div>
                                 <?php echo $resultMessage;?>
                                <button type="submit" tabindex="3" class="btn btn-primary" name="btnSubmit" id="btnSubmit">
                                    Login 
                                </button>
                                <hr>
                                <p>Forgot password!<a href="../forgot-password.php" class="linkText"><strong>Click here.</strong></a></p>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row"><!-- Alert Modal for Validations - Starts Here -->
                        <div class="col-sm-12">
                          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-body">
                                  <strong>
                                    <div id="showAlertText">
                                    </div>
                                  </strong>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-danger" data-dismiss="modal">
                                    Close
                                  </button>
                                </div><!-- Modal Footer -->
                              </div><!-- Modal Content -->
                            </div><!-- Modal Dialog -->
                          </div><!-- Modal Container-->
                        </div>
                      </div><!-- Alert Modal ends here -->
             </div>
             <div class="col-sm-1"></div>
         </div>
    </section>


 <?php include '../footer.php';?>
    
</body>
</html>

   