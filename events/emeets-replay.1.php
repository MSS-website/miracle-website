<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="">
    
    <meta name="author" content="">
    
    <title>
      Executive Meets Replay | Miracle
    </title>
    
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    
    <link href="../css/main.css" rel="stylesheet">
    
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/default.css"/>
    <link rel="stylesheet" type="text/css" href="../css/component.css"/>
    <script src="js/modernizr.custom.js">
    </script>
    <script src="js/fileinput.js">
    </script>
    <script src="js/custom.js">
    </script>
    
    <script type="text/javascript" src="../js/Validation.js">
    </script>
    <!--[if lt IE 9]>

<script src="js/html5shiv.js">
</script>

<script src="js/respond.min.js">
</script>
<![endif]-->
  
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  
  <link rel="shortcut icon" href="../images/favicon.ico">
  
  
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/js/bootstrap.min.js'></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">   
 </head>
  <?php include '../header.php';?>
  <body>
    <script type="text/javascript">
    $(window).load(function(){
        $('#myModal').modal('show');
    });
    
   
</script>
    
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" data-backdrop= static data-keyboard= false aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="myModalLabel"><strong>Employee Login</strong></h3>
      </div>
      <div class="modal-body">
       <p class="methodText"> You must be a Miraclite to gain access to this meet. Please validate yourself using your Miracle credentials for further access.</p>
      <br> <div class="row">
                        <div class="col-sm-5">
                           <div class="form-group">
                                    <input type="text " tabindex="1" class="form-control" required="required" placeholder="Username" id="loginId" name="loginId"onchange="fieldLengthValidator(this);">
                           </div>
                           <div class="form-group">
                                    <input type="text " tabindex="1" class="form-control" required="required" placeholder="Password" id="loginId" name="loginId"onchange="fieldLengthValidator(this);">
                           </div>
                           <br>
                          
                        </div>
                          <div class="col-sm-7"></div> 
                     </div>
                          
                        <div class="row">
                          
                         <div class="col-sm-4"> 
                         <div class="alert alert-danger alert-dismissible fade in" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <strong>Invalid Details!</strong> 
</div>
          <button type="button" class="btn btn-primary col-md-12" id="load" data-loading-text="<i class='fa fa-spinner fa-spin '></i> loading...">Login</button>

</div>
                         <div class="col-sm-8"></div>  
                     </div>
              
    </div>
  </div>
</div>
     </div> 
     <script>
$('.btn').on('click', function() {
    var $this = $(this);
  $this.button('loading');
    setTimeout(function() {
       $this.button('reset');
   }, 2000);
});
</script>
     <section  class="container">

<br>
      <br>
      <br>
      <br>
      <div class="row">
       
        <div class="col-sm-6 text-left">
          <br>
          <h2 class="noMargin">
             <strong>Global Sales Meet</strong> 
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
              <a href="../events/">
                Events
              </a>
            </li>
            <li class="active">
             Emeets
            </li>
          </ul>
        </div>
       
      </div>
      <hr>
      <p class="greyText heavy"> January 19, 2016 from 09:00 to 10:00 AM EST</p>
      <!--contact form copy starts-->
      </div>
        <div class="row">
        
        <br>
        <div class="col-sm-12">
          <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style>
          <div class='embed-container'><iframe src="https://player.vimeo.com/video/129792670" width="550" height="250" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>

       </div>
       
        </div>
       
       
      </div>  
      <br/>
      <!--contact form copy ends-->

    </section><!--/#error-->
   <?php include '../footer.php';?>   
 
  
</body>
</html>