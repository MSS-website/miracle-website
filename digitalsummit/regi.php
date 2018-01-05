

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport"    content="width=device-width, initial-scale=1.0">

<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />

        <meta name="description" content="">
        <meta name="author"      content="Shankar">
        <meta content="miraclesoft, education,  industry,  IT,industries, " name="keywords"/>
        <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="" type="image/x-icon">
        <title>Digital Valley Summit</title>


        
        
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="./includes/css/selectivity-full.css">


        <?php include './context.php'; ?>

       
      
    </head>
    <?php include './header.php'; ?>
    <body>

       
        <div class="container">
            <div class="container">


           


                <div class="row">
                    <div class="col-md-12">
                        <div class=" ">

                            <div class=" ">
                                <div class="row">
                                    <div class="col-sm-12"> 
                                        <h3 class="heavy">Personal details</h3>
                                        <div class="alert alert-danger" style="display:none" id="errorMsgDiv">
                                            <button type="button" class="close" onclick="closeErrorMsg()" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <strong><span id="resultMessage">Invalid details!!</span></strong> 
                                        </div>                        
                                    </div>
                                </div>
                                <form role="form" method="post" action="" accept-charset="UTF-8" class="reg_form">
                                
                                    <br>
                                        <br>
                                        <br>
                                        <div class="row">
                                            <div class="col-sm-12">
<!--                                                <label for="areasOfInterest" class="m-t-10" style="">Areas Of interest</label>-->
                                                <h3 class="heavy">Areas Of interest</h3>
                                                <div id="areasOfInterest" class="selectivity-input example-input" name="areasOfInterest" required="required">


                                                </div>
                                                <input type="hidden" id="areasOfInterestHidden" name="areasOfInterestHidden"/>
        <!--                                        <select id="states1" class="form-control" name="state">
                                                    <option value="alabama">IOT</option>
                                                    <option value="alaska">Cloud</option>
                                                    <option value="arizona">Analytics</option>
                                                    <option value="arkansas">Mobile</option>
                                                    <option value="california">Security </option>
        
        
                                                </select>-->
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-sm-12" style="margin-top:15px">

                                                <textarea placeholder="Comments" rows="3" class="form-control" id="comments" name="comments" onchange="fieldLengthValidator(this);"></textarea>
                                            </div>
                                        </div>
                                        <br>

                                        
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




      




        <!-- JavaScript libs are placed at the end of the document so the pages load faster -->



        <script src="includes/js/jQuery.headroom.min.js"></script>






        <script>
            $(document).ready(function () {
                $('#areasOfInterest').selectivity({
                    items: ['IOT', 'Cloud', 'Analytics', 'Mobile', 'Security'],
                    multiple: true,
                    placeholder: 'Type your area of interest'
                });
            
                $('#areasOfInterest').change(function(e){
                    var myString = $('#areasOfInterest').selectivity('value');
                    //  alert(myString.length);
                    if(myString.length>4){
                        $('#areasOfInterest').selectivity('remove', myString[myString.length-1]);
                        alert("Selecting more than 4 not allowed");
                    }else {
                        // alert(myString.length-1);
                        document.getElementById("areasOfInterestHidden").value=myString;
                    }
                });
                
                

               
            });
        </script>
        <?php include './footer.php'; ?>
    </body>
</html>
