<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="description">
        <meta content="" name="author">
        <title>
            Suggestions-Form | Miracle
        </title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/default.css"/>
    <link rel="stylesheet" type="text/css" href="../css/component.css"/>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/fileinput.js"></script>
    <script src="js/custom.js">
    <link rel="stylesheet" href="css/datepicker.css" />
    </script>
    <!--DATE PICKER LINKS-->
     <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
      <link href="http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" media="all" href="daterangepicker-bs3.css" />
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="../experiment/js/moment.js"></script>
      <script type="text/javascript" src="../experiment/js/daterangepicker.js"></script>
     <!--DATE PICKER LINKS-->
     <style>
         .noMargin {
    margin: 3px !important;
}
.modal-dialog {
    position: static !important;
}
     </style>
    </head>
<?php include '../header.php';?>
    <body>
        <script type="text/javascript">
    $(window).load(function(){
        $('#myModal1').modal('show');
    });
    
   
</script>
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        
        <h3 class="modal-title noMarginTop"><strong>Have a suggestion (or) idea to share?</strong> </h3>
      </div>
      <hr class="noMarginBottom">
      <div class="modal-body " >
        <p class="methodText ">Now we have the best way for you to reach out to us and help us out as we shape the future of this organization. With our new <strong> Suggestion Box module </strong>, internal employees can login and suggest changes (or) propose ideas to the management layer to help improve processes and models</p>
        <div class="row">
                        <div class="col-sm-5">
                           <div class="form-group">
                                    <input tabindex="1" class="form-control" required="required" placeholder="Username" id="loginId" name="loginId" onchange="fieldLengthValidator(this);" type="text ">
                           </div>
                           <div class="form-group noMarginBottom">
                                    <input tabindex="1" class="form-control" required="required" placeholder="Password" id="loginId" name="loginId" onchange="fieldLengthValidator(this);" type="text ">
                           </div>
                           </div>
                         </div>
      </div>
      <hr>
      <div class="modal-footer" style="margin-top: 10px;">
       <div class="row noMargin">
           <div class="col-sm-4">
               <button type="button" class="noMargin btn btn-primary col-sm-12 noMargin" data-dismiss="modal" >Login</button>
           </div>
       </div>
        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><
        <section class="container" id="about-us">
            <br>
            <br>
            <br>
            <br>
            
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-4 text-left">
                    <h1 class="heavy">
                        Suggestion Box
                    </h1>
                </div>
                <div class="col-sm-6 text-right">
                    <ul class="breadcrumb pull-right">
                        <li>
                            <a href="../">Home</a>
                        </li>
                        <li>
                            <a href="../">Company </a>
                        </li>
                        <li class="active">Suggestions Box
                        </li>
                    </ul>
                </div>
                <div class="col-sm-1"></div>
            </div>
            
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                        <hr>
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="methodText">
                                    <strong>Constant growth and improvement is at the heart of Miracle's principles</strong>, and who would bebetter to suggest a change, (or) bring an idea to our core management than our huge Miracle Family. All suggestions will be considered and taken to the appropriate personal for revision and analysis. You can post anonymously, but we would be greatful if the suggestion comes from a known source. You will need your Hubble Credentials to reach the form, but we will not mark the suggestion as yours unless you select to do so. 
                                </p>
                                <p class"greyText">Please do note that any unappropriate text (or) language used will be tracked down and punished. The suggestion form is for the company to utilize your intellect and ensure that we create a healthy and suggestive environment.</p>
                            </div>
                            <div class="col-sm-6">
                                
                                <!--<div class="row">
                                   
                                     <div class="row">
                                    <div class="col-sm-4">
                                        <input type="text" tabindex="4" class="form-control" required="required" placeholder="Username">        
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="password" tabindex="4" class="form-control" required="required" placeholder="Password">  
                                    </div>
                                    <div class="col-sm-4">
                                        <button type="button" class="btn btn-primary col-sm-12">Login</button>
                                    </div>
                                </div> -->
                                
                                <div class="row">
                                    <div class="col-sm-8">
                                        Do you want to post anonymously? &nbsp &nbsp
                                        </div>
                                        <div class="btn-group btn-toggle col-sm-4"> 
                                            <button class="btn btn-xs btn-default">YES</button>
                                            <button class="btn btn-xs btn-primary active">NO</button>
                                        </div>
                                    </div>
                               
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" tabindex="1" class="form-control" required="required" placeholder="First Name">        
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" tabindex="2" class="form-control" required="required" placeholder="Last Name">  
                                    </div>
                                </div>
                                <p class="methodText heavy">Your Suggestions please,</p>
                                <div class="form-group">
                                    <textarea class="form-control" tabindex="3" placeholder="Suggestion Form " rows="5" id="description"></textarea>    
                                </div>
                                <button type="button" class="btn btn-primary">Send Suggestion</button>
                                 </div>
                             </div>
                        <hr>
                </div>
                <div class="col-sm-1"></div>
            </div>
           <br>
        </section> 
        
        <script>
                          $('.btn-toggle').click(function() {
                        $(this).find('.btn').toggleClass('active');  
                        
                        if ($(this).find('.btn-primary').size()>0) {
                        	$(this).find('.btn').toggleClass('btn-primary');
                        }
                        if ($(this).find('.btn-danger').size()>0) {
                        	$(this).find('.btn').toggleClass('btn-danger');
                        }
                        if ($(this).find('.btn-success').size()>0) {
                        	$(this).find('.btn').toggleClass('btn-success');
                        }
                        if ($(this).find('.btn-info').size()>0) {
                        	$(this).find('.btn').toggleClass('btn-info');
                        }
                        
                        $(this).find('.btn').toggleClass('btn-default');
                           
                    });
                    
                    $('form').submit(function(){
                    	alert($(this["options"]).val());
                        return false;
                    });
                      </script>
        
        
   <?php include '../footer.php';?>
</body>
</html>