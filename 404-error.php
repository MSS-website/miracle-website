<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            404 | Miracle
        </title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="css/default.css" rel="stylesheet" type="text/css">
        <link href="css/component.css" rel="stylesheet" type="text/css">
        <link href="http://www.miraclesoft.com/images/favicon.ico" rel="shortcut icon">
        <style>
 
.wrapper { 
  	width:100%;
  	margin:-200px auto 0;
  	display:table;
	position:absolute;
	top:50%;
}

/* content wrapper */
.mainWrapper {
    margin: 0 auto;
    position: relative;
    width: 100%;
    background-image: url(images/error.png);
    background-repeat: no-repeat;
    background-size: cover;
}

/* main holder */
.mainHolder {
    /*background: url("images/error.png") no-repeat scroll left top transparent;*/
    display: block;
    height: 416px;
    position: relative;
}
/* airplane message holder */
.message {
    color: #000000;
    font-size: 20px;
    height: 23px;
    line-height: 23px;
    margin: 0;
    padding: 40px 0 0 520px;
    position: relative;
}

/* error 404 */
.errorNumber {
    color: #FFFFFF;
    display: block;
    float: left;
    font-size: 81px;
    height: 70px;
    margin:99px 0 0 400px;
    text-align: center;
    width: 190px;
}

/*search holder */
.search {
    float: left;
    /*height: 44px;*/
    margin: 69px 0 0 110px;
}
.search button{width:100%;float: right;}
</style>
    </head>
    <?php include 'headerm.php';?>
    <body>
        <section class="" >
            

	<div class="mainWrapper">
   
        <div class="mainHolder">
            <div class="message">Oooops....we can't find that page.</div>
            <!-- end .message -->
            <div class="errorNumber">404</div> 
          <br>
            <div class="search">
           <div style="">
               <button class="btn btn-primary"><i class="fa fa-home"></i> &nbsp; Go back to Home</button><br><br>
               <button class="btn btn-default"><i class="fa fa-envelope"></i> &nbsp;  Contact Support</button>
           </div>
            </div>
            
            
        </div>
        
	</div>
   
        </section>
        <?php include 'footer.php';?>
    </body>
</html>