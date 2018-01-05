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
       
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/main.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="../css/default.css" rel="stylesheet" type="text/css">
        <link href="../css/component.css" rel="stylesheet" type="text/css">
        <script src="../js/menuLoad.js"></script>
         
        <script src="../js/modernizr.custom.js"></script><!--[if lt IE 9]>
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
       .progress-bar.animate {
   width: 100%;
}

   </style>
   
    </head><!--/head-->
    <?php include 'header.php';?>
    <body>
        <section class="container" id="error">
          <button id="load">Load It!</button>
<div class="modal js-loading-bar">
 <div class="modal-dialog">
   <div class="modal-content">
     <div class="modal-body">
       <div class="progress progress-popup">
        <div class="progress-bar"></div>
       </div>
     </div>
   </div>
 </div>
</div>
<force-ui-data-table sobject="Contact" fields='Id, Name, FirstName, LastName, Phone, Email' orderby="Name" tableclasses="table-hover" theme="success" limitresults="14"></force-ui-data-table>

        </section><!--/#error-->
         <script>
        //Setup
this.$('.js-loading-bar').modal({
  backdrop: 'static',
  show: false
});

$('#load').click(function() {
  var $modal = $('.js-loading-bar'),
      $bar = $modal.find('.progress-bar');
  
  $modal.modal('show');
  $bar.addClass('animate');

  setTimeout(function() {
    $bar.removeClass('animate');
    $modal.modal('hide');
  }, 1500);
});
    </script>
        <?php include 'footer.php';?>
    </body>
</html>