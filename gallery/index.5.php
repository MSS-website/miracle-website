<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="description">
        <meta content="" name="author">
        <title>
            Miracle Software Systems, Inc. | Events Gallery 
        </title>
        <link rel="stylesheet" href="galry.css" type="text/css" />
        <script type="text/javascript" src="galry.js"></script>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet">
        <link href="../css/prettyPhoto.css" rel="stylesheet">
        <link href="../css/animate.css" rel="stylesheet">
        <link href="../css/main.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="../css/default.css" rel="stylesheet" type="text/css">
        <link href="../css/component.css" rel="stylesheet" type="text/css">
        <script src="js/modernizr.custom.js"></script><!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="../images/favicon.ico" rel="shortcut icon">
        <link href="images/ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
        <link href="images/ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
        <link href="images/ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
        <link href="images/ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed">
   <style>
   .scroll {
   max-height: 150px;
    overflow-y: auto;
}
</style>
    </head><!--/head-->
    <?php include '../header.php';?>
    <body>
        <section class="container" id="portfolio">
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-sm-8 text-left">
                    <h1 class="heavy">
                        Presentations Gallery
                       
                    </h1>
                </div>
                <div class="col-sm-4 text-right">
                    <ul class="breadcrumb pull-right">
                        <li>
                            <a href="../">Home</a>
                        </li>
                       
                        <li class="active">Newsletters</li>
                    </ul>
                </div>
            </div>
            
            <div class="row">
            <div class="col-sm-4">
                <select class="form-control" name="trackName" id="trackName">
                    <option value="" selected="">Search by Type</option>
                    <option value="1">Presentations</option>
                    <option value="2">Documents</option>
                </select>
        </div>
            
          <link rel="stylesheet" href="../js/daterangepicker-bs3.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="../js/moment.js"></script>
    <script src="../js/daterangepicker.js"></script> 
  
                       <div class="col-sm-4"> 
                <input type="text" id="reportrange" class="form-control pull-left"  value="01/01/2015 - 01/01/2015 " /> 
  
  <script type="text/javascript">
$(function() {
    function cb(start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }
    cb(moment().subtract(29, 'days'), moment());

    $('#reportrange').daterangepicker({
        ranges: {
           'Today': [moment(), moment()],
           
           'Last 7 Days': [moment().subtract(6, 'days'), moment()],
           'Last 30 Days': [moment().subtract(29, 'days'), moment()],
           'This Month': [moment().startOf('month'), moment().endOf('month')],
           'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
           'Transactions Until': [moment()]
        }
    }, cb);

});
</script>
</div>
     <div class="col-sm-4">
            <form class="" role="search">
    <div class="input-group add-on">
      <input class="form-control" placeholder="Search"type="text">
      <div class="input-group-btn">
        <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i></button>
      </div>
    </div>
  </form>
    </div>
    </div> 
    
    <br>
  
<!--Modal-->

        <div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Subscribe our Newsletter</h4>
            </div>
            <div class="modal-body">
				<p>Subscribe to our newsletter to get the latest updates straight in your inbox.</p>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email Address">
                    </div>
        <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</div>
    
<!--<script>
function myFunction() {
    alert("Thank you ! Successfully subscribed your email address!");
}
</script>-->

<!--end of modal-->
    <section class="row">
       <div class="col-sm-12">
        <div class="row text-center">

            <div class="col-md-3 col-sm-6 hero-feature">
                 <div class="thumbnail">
                    <img src="http://placehold.it/800x500" alt="" height="100%" width="100%">                  <div class="caption">
                <h4><a href="#">Presentation 1</a></h4>
<a href="#" class="btn btn-primary"  data-toggle="modal" data-target="#myModal">Preview</a> 
<a href="#" class="btn btn-default">Download</a>
                      
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                 <div class="thumbnail">
                    <img src="http://placehold.it/800x500" alt="">
                    <div class="caption">
                <h4><a href="#">Presentation 2</a></h4>
<a href="#" class="btn btn-primary">Preview</a> 
<a href="#" class="btn btn-default">Download</a>
                      
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                 <div class="thumbnail">
                    <img src="http://placehold.it/800x500" alt="">
                    <div class="caption">
                <h4><a href="#">Presentation 3</a></h4>
<a href="#" class="btn btn-primary">Preview</a> 
<a href="#" class="btn btn-default">Download</a>
                        
                    </div>
                </div>
            </div>

          <div class="col-md-3 col-sm-6 hero-feature">
                 <div class="thumbnail">
                    <img src="http://placehold.it/800x500" alt="">
                    <div class="caption">
                <h4><a href="#">Presentation 4</a></h4>
<a href="#" class="btn btn-primary">Preview</a> 
<a href="#" class="btn btn-default">Download</a>
                        
                    </div>
                </div>
            </div>

        </div>                                       
  </div>

<div class="col-sm-12">
        <div class="row text-center">

            <div class="col-md-3 col-sm-6 hero-feature">
                 <div class="thumbnail">
                    <img src="http://placehold.it/800x500" alt="">
                    <div class="caption">
                <h4><a href="#">
                    <!--How important is Data Integration in this new era of Digital Data?-->
                   Presentation 5</a></h4>
<a href="#" class="btn btn-primary">Preview</a> 
<a href="#" class="btn btn-default">Download</a>
                       
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                 <div class="thumbnail">
                    <iframe src="https://docs.zoho.com/show/publish/qu3o1e0a793e891c34b1fbfff951f82dbd841/params?toolbar=false&menu=false&loop=true" width="100%" height="150" style="border:1px solid #000000" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
                    <div class="caption">
                <h4><a href="#">Presentation 6</a></h4>
<a href="https://docs.zoho.com/show/publish/qu3o1e0a793e891c34b1fbfff951f82dbd841" class="btn btn-primary">Preview</a> 
<a href="#" class="btn btn-default">Download</a>
                      
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                 <div class="thumbnail">
                    <img src="http://placehold.it/800x500" alt="">
                    <div class="caption">
                <h4><a href="#">Presentation 7</a></h4>
<a href="#" class="btn btn-primary">Preview</a> 
<a href="#" class="btn btn-default">Download</a>
                        
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                 <div class="thumbnail">
                    <iframe src="https://www.slideshare.net/slideshow/embed_code/key/ijai3Yw12oj75v" width="427" height="150px" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="https://www.slideshare.net/SivaKusampudi/marketing-58972037" title="Marketing" target="_blank"></strong> </div>
                    <div class="caption">
                <h4><a href="#">Presentation 8</a></h4>
<a href="#" class="btn btn-primary">Preview</a> 
<a href="#" class="btn btn-default">Download</a>
                    </div>
                </div>
            </div>

        </div>                                       
  </div>

</section>
</div>

  
        </section><?php include '../footer.php';?>
    </body>
</html>



<script type="text/javascript">
        $(function () {
            $('#datetimepicker8').datetimepicker({
                icons: {
                    time: "fa fa-clock-o",
                    date: "fa fa-calendar",
                    up: "fa fa-arrow-up",
                    down: "fa fa-arrow-down"
                }
            });
        });
    </script>
  <!-- Reference: https://github.com/ashleydw/lightbox/ -->
<script src="http://rawgithub.com/ashleydw/lightbox/master/dist/ekko-lightbox.js"></script>
<link type="text/css" href="webinar.css">

<style>
    .embed-container embed{border-radius:0px !important;}
    h4 {font-size:14px !important;font-weight:bold;}
    .modal-footer{ margin:0px 5px 5px 0px !important;}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>