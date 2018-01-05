<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="description">
        <meta content="" name="author">
        <title>
            Modal with Progress bar | Miracle
        </title>
       
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="css/default.css" rel="stylesheet" type="text/css">
        <link href="css/component.css" rel="stylesheet" type="text/css">
        <script src="js/menuLoad.js"></script>
         
        <script src="js/modernizr.custom.js"></script><!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
        <meta content="width=device-width, initial-scale=1" name="viewport"><!--[if lte IE 8]>
    <div id="warning">
    <META http-equiv="refresh" content="0;URL=http://www.miraclesoft.com/outdated-browser.php">
    </div>-->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="images/favicon.ico" rel="shortcut icon">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.1.js"></script>

  <style>
      .glyphicon-lg
{
    font-size:4em
}
.info-block
{
    border-right:5px solid #E6E6E6;margin-bottom:25px
}
.info-block .square-box
{
    width:100px;min-height:110px;margin-right:22px;text-align:center!important;background-color:#676767;padding:20px 0
}
.info-block.block-info
{
    border-color:#20819e
}
.info-block.block-info .square-box
{
    background-color:#20819e;color:#FFF
}
  </style>
   
    </head><!--/head-->
    <?php include 'header.php';?>
    <body>
        <section class="container" id="error">
         <div class="row container">
             	<h2>Filtered List</h2>
        <div class="col-lg-12">
            <input type="search" class="form-control" id="input-search" placeholder="Search Attendees..." >
        </div>
        <div class="searchable-container">
            <div class="items col-xs-12 col-sm-6 col-md-6 col-lg-6 clearfix">
               <div class="info-block block-info clearfix">
                    <div class="square-box pull-left">
                        <span class="glyphicon glyphicon-user glyphicon-lg"></span>
                    </div>
                    <h5>Company Name</h5>
                    <h4>Name: Tyreese Burn</h4>
                    <p>Title: Manager</p>
                    <span>Phone: 555-555-5555</span>
                    <span>Email: sample@company.com</span>
                </div>
            </div>
            <div class="items col-xs-12 col-sm-12 col-md-6 col-lg-6 clearfix">
               <div class="info-block block-info clearfix">
                    <div class="square-box pull-left">
                        <span class="glyphicon glyphicon-user glyphicon-lg"></span>
                    </div>
                    <h5>Company Name</h5>
                    <h4>Name: Brenda Tree</h4>
                    <p>Title: Manager</p>
                    <span>Phone: 555-555-5555</span>
                    <span>Email: sample@company.com</span>
                </div>
            </div>
            <div class="items col-xs-12 col-sm-12 col-md-6 col-lg-6">
               <div class="info-block block-info clearfix">
                    <div class="square-box pull-left">
                        <span class="glyphicon glyphicon-user glyphicon-lg"></span>
                    </div>
                    <h5>Company Name</h5>
                    <h4>Name: Glenn Pho shizzle</h4>
                    <p>Title: Manager</p>
                    <span>Phone: 555-555-5555</span>
                    <span>Email: sample@company.com</span>
                </div>
            </div>
            <div class="items col-xs-12 col-sm-12 col-md-6 col-lg-6">
               <div class="info-block block-info clearfix">
                    <div class="square-box pull-left">
                        <span class="glyphicon glyphicon-user glyphicon-lg"></span>
                    </div>
                    <h5>Company Name</h5>
                    <h4>Name: Brian Hoyies</h4>
                    <p>Title: Manager</p>
                    <span>Phone: 555-555-5555</span>
                    <span>Email: sample@company.com</span>
                </div>
            </div>
        </div>
	</div>
       
        </section><!--/#error-->
        <script>
     $(function() {    
        $('#input-search').on('keyup', function() {
          var rex = new RegExp($(this).val(), 'i');
            $('.searchable-container .items').hide();
            $('.searchable-container .items').filter(function() {
                return rex.test($(this).text());
            }).show();
        });
    });
        </script>
        <?php include 'footer.php';?>
    </body>
</html>