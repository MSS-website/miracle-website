<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="description">
        <meta content="" name="author">
        <title>
            yes or no | Miracle
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
        <link href="images/ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
        <link href="images/ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
        <link href="images/ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
        <link href="images/ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed">
  
<style>
#radioBtn .notActive{
    color: #3276b1;
    background-color: #fff;
}
   </style>
   
    </head><!--/head-->
    <?php include 'header.php';?>
    <body>
        <section class="container" id="error">
          <div class="row">
		<h2>Use butons to simulate radio butons</h2>
        
        <div class="form-group">
    		<label for="happy" class="col-sm-4 col-md-4 control-label text-right">Are you happy ?</label>
    		<div class="col-sm-7 col-md-7">
    			<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm active" data-toggle="happy" data-title="Y">YES</a>
    					<a class="btn btn-primary btn-sm notActive" data-toggle="happy" data-title="N">NO</a>
    				</div>
    				<input type="hidden" name="happy" id="happy">
    			</div>
    		</div>
    	</div>
        <br /><br />
        <div class="form-group">
        	<label for="fun" class="col-sm-4 col-md-4 control-label text-right">Is it fun ?</label>
    		<div class="col-sm-7 col-md-7">
    			<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm active" data-toggle="fun" data-title="Y">YES</a>
                        <a class="btn btn-primary btn-sm notActive" data-toggle="fun" data-title="X">I don't know</a>
    					<a class="btn btn-primary btn-sm notActive" data-toggle="fun" data-title="N">NO</a>
    				</div>
    				<input type="hidden" name="fun" id="fun">
    			</div>
    		</div>
    	</div>
	</div>
   

        </section><!--/#error-->
        <script>
            $('#radioBtn a').on('click', function(){
    var sel = $(this).data('title');
    var tog = $(this).data('toggle');
    $('#'+tog).prop('value', sel);
    
    $('a[data-toggle="'+tog+'"]').not('[data-title="'+sel+'"]').removeClass('active').addClass('notActive');
    $('a[data-toggle="'+tog+'"][data-title="'+sel+'"]').removeClass('notActive').addClass('active');
})
        </script>
        <?php include 'footer.php';?>
    </body>
</html>