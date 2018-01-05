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
        
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet">
          <link href="../css/main.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="../css/default.css" rel="stylesheet" type="text/css">
        <link href="../css/component.css" rel="stylesheet" type="text/css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script language="javascript" type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script language="javascript" type="text/javascript" src="js/modernizr.custom.js"></script>
<script language="javascript" type="text/javascript" src="js/jquery.hoverdir.js"></script>	
<!-- Latest compiled JavaScript -->	
        <!--[if lt IE 9]>
        
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="../images/favicon.ico" rel="shortcut icon">
        <link href="images/ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
        <link href="images/ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
        <link href="images/ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
        <link href="images/ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed">
    </head><!--/head-->

 <script>
$(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });

});
</script>     
    <?php include '../header.php';?>
    <body>
        <section class="container" id="portfolio">
            <br>
            <br>
            <br>
            <br>
            <br>
           <div class="row">
                <div class="col-sm-7 text-left">
                    <h1 class="micro">
                        Events Gallery
                       
                    </h1>
                </div>
                <div class="col-sm-5 text-right">
                    <ul class="breadcrumb pull-right">
                        <li>
                            <a href="../">Home</a>
                        </li>
                        <li>
                            <a href="../events">Events</a>
                        </li>
                        <li class="active">Gallery
                        </li>
                    </ul>
                </div>
            </div>
           
      <div>
        <button class="btn btn-default show filter-button" data-filter="all">Show All</button>
        <button class="btn btn-default show filter-button" data-filter="photo">2016</button>
        <button class="btn btn-default show filter-button" data-filter="graphic">2015</button>
        <button class="btn btn-default  show filter-button" data-filter="webdesign">2014</button>
    </div>
      
    <br/>
    
      <div class="row">
        <div class="col-sm-4 tab filter photo">
            <div class="each-item">
                 <img class="port-image" alt="q1 meet 2017" src="../images/gallery/q1meet-2017.png">
                <div class="cap1">
                    <center><h3>Q#1 Meet 2017</h3></center>
        <center><h4>May 4th, 2017</h4></center>
                </div>
                <div class="cap2">
                    <center><a href="#">Read More</a></center>
                </div>
                
            </div>
            
        </div>
        
        <div class="col-sm-4 tab filter photo">
            <div class="each-item">
                <img class="port-image"  alt="q1 meet 2017" src="../images/gallery/araku-gallery-index.png"/>
                <div class="cap1">
                     <center><h3>Annual Winter Picnic 2016</h3></center>
        <center><h4>November 5th, 2016</h4></center>
                </div>
                <div class="cap2">
                   <center><a href="#">Read More</a></center>
                </div>
            </div>
        </div>
        
        
        <div class="col-md-4 tab filter graphic">
            <div class="each-item">
                <img class="port-image" alt="q1 meet 2017" src="../images/gallery/diwali-2015.png"/>
                <div class="cap1">
                 <center><h3>Diwali-2015</h3></center>
                <center><h4>November 11th, 2015</h4></center>
                </div>
                <div class="cap2">
                    <center><a href="#">Read More</a></center>
                </div>
            </div>
        </div>
        <div class="col-sm-4 tab filter photo">
            <div class="each-item">
                <img class="port-image" alt="q1 meet 2017" src="../images/gallery/apcloud-gallery.png"/>
                <div class="cap1">
                    <center><h3>AP Cloud Initiative</h3></center>
                   <center><h4>August 5th, 2016</h4></center>
                </div>
                <div class="cap2">
                    <center><a href="#">Read More</a></center>
                </div>
            </div>
        </div>
  
        <div class="col-md-4 tab filter photo">
            <div class="each-item">
                <img class="port-image" alt="q1 meet 2017" src="../images/gallery/q2-gallery-2016.png"/>
                <div class="cap1">
                   <center><h3>Q#2 Meet 2016</h3></center>
                   <center><h4>July 23rd, 2016</h4>center>
                </div>
                <div class="cap2">
                    <center><a href="#">Read More</a></center>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 tab filter photo">
            <div class="each-item">
                <img class="port-image" alt="q1 meet 2017" src="../images/gallery/aioug-vizag-2016.png"/>
                <div class="cap1">
                    <center><h3>Vizag Chapter-AIOUG-2016</h3></center>
                   <center><h4>June 18th, 2016</h4></center>
                </div>
                <div class="cap2">
                    <center><a href="#">Read More</a></center>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 tab filter photo">
            <div class="each-item">
                <img class="port-image" alt="q1 meet 2017" src="../images/gallery/q1-gallery-2016.png"/>
                <div class="cap1">
                   <center><h3>Q#1 Meet 2016</h3></center>
                <center><h4>April 2nd, 2016</h4></center>
                </div>
                <div class="cap2">
                    <center><a href="#">Read More</a></center>
                </div>
            </div>
        </div>

        <div class="col-md-4 tab filter photo">
            <div class="each-item">
                <img class="port-image" alt="q1 meet 2017" src="../images/gallery/cubicle-contest-gallery.png"/>
                <div class="cap1">
                  <center><h3>Cubicle Contest-2016</h3></center>
                 <center><h4>February 16th, 2016</h4></center>
                </div>
                <div class="cap2">
                    <center><a href="#">Read More</a></center>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 tab filter photo">
            <div class="each-item">
                <img class="port-image" alt="q1 meet 2017" src="../images/gallery/republic-day-gallery.png"/>
                <div class="cap1">
                   <center><h3>Republic Day-2016</h3></center>
                <center><h4>January 26th, 2016</h4></center>
                </div>
                <div class="cap2">
                   <center><a href="#">Read More</a></center>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 tab filter photo">
            <div class="each-item">
                <img class="port-image" alt="q1 meet 2017" src="../images/gallery/pongal-gallery-index-2016.png"/>
                <div class="cap1">
                     <center><h3>Pongal Celebrations</h3></center>
                   <center><h4>January 15th, 2016</h4></center>
                </div>
                <div class="cap2">
                  <center><a href="#">Read More</a></center>
                </div>
            </div>
        </div>

        <div class="col-md-4 tab filter photo">
            <div class="each-item">
                <img class="port-image" alt="q1 meet 2017" src="../images/gallery/christmas-gallery-index.png"/>
                <div class="cap1">
                      <center><h3>Christmas-2015</h3></center>
                     <center><h4>December 25th, 2015</h4></center>
                </div>
                <div class="cap2">
                    <center><a href="#">Read More</a></center>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 tab filter photo">
            <div class="each-item">
                <img class="port-image" alt="q1 meet 2017" src="../images/gallery/beach-party-gallery-index.png"/>
                <div class="cap1">
                    <center><h3>Beach Party-2015</h3></center>
                    <center><h4>December 19th, 2015</h4></center>
                </div>
                <div class="cap2">
                  <center><a href="#">Read More</a></center>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 tab filter photo">
            <div class="each-item">
                <img class="port-image" alt="q1 meet 2017" src="../images/gallery/araku-gallery-index1.png"/>
                <div class="cap1">
                   <center><h3>Winter Picnic-2015</h3></center>
                    <center><h4>November 14-15th, 2015</h4></center>
                </div>
                <div class="cap2">
                   <center><a href="#">Read More</a></center>
                </div>
            </div>
        </div>

        
        <div class="col-md-4 tab filter graphic">
            <div class="each-item">
                <img class="port-image" alt="q1 meet 2017" src="../images/gallery/q2meet2015.png"/>
                <div class="cap1">
                      <center><h3>Quarterly Meet 2</h3></center>
            <center><h4>August 15th, 2015</h4></center>
                </div>
                <div class="cap2">
                 <center><a href="#">Read More</a></center>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 tab filter graphic">
            <div class="each-item">
                <img class="port-image" alt="q1 meet 2017" src="../images/gallery/q1-meet-2015.png"/>
                <div class="cap1">
                    <center><h3>Quarterly Meet 1</h3></center>
                     <center><h4>April 11th, 2015</h4></center>
                </div>
                <div class="cap2">
                   <center><a href="#">Read More</a></center>
                </div>
            </div>
        </div>

        <div class="col-md-4 tab filter graphic">
            <div class="each-item">
                <img class="port-image" alt="q1 meet 2017" src="../images/gallery/fight-for-cause.png"/>
                <div class="cap1">
                    <center><h3>Republic Day</h3></center>
                   <center><h4>January 26th, 2015</h4></center>
                </div>
                <div class="cap2">
                     <center><a href="#">Read More</a></center>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 tab filter graphic">
            <div class="each-item">
                <img class="port-image" alt="q1 meet 2017" src="../images/gallery/20years-celebrations.png"/>
                <div class="cap1">
                    <center><h3>20 Years Celebrations</h3></center>
                    <center><h4>December 20th, 2014</h4></center>
                </div>
                <div class="cap2">
                     <center><a href="#">Read More</a></center>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 tab filter graphic">
            <div class="each-item">
                <img class="port-image" alt="q1 meet 2017" src="../images/gallery/unity-walk.png"/>
                <div class="cap1">
                    <center><h3>Miracle Unity Walk</h3></center>
                   <center> <h4>December 14th, 2014</h4></center>
                </div>
                <div class="cap2">
                     <center><a href="#">Read More</a></center>
                </div>
            </div>
        </div>


        <div class="col-md-4 tab filter webdesign">
            <div class="each-item">
                <img class="port-image" alt="q1 meet 2017" src="../images/gallery/winter-picnic.png"/>
                <div class="cap1">
                   <center><h3>Winter Picinic</h3></center>
                   <center><h4>December 6th, 2014</h4></center>
                </div>
                <div class="cap2">
                      <center><a href="#">Read More</a></center>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 tab filter webdesign">
            <div class="each-item">
                <img class="port-image" alt="q1 meet 2017" src="../images/gallery/q3-meet.png"/>
                <div class="cap1">
                     <center><h3>Quarterly Meet 3</h3></center>
                  <center><h4>October 25th, 2014</h4></center>
                </div>
                <div class="cap2">
                      <center><a href="#">Read More</a></center>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 tab filter webdesign">
            <div class="each-item">
                <img class="port-image" alt="q1 meet 2017" src="../images/gallery/diwali-celebrations.png"/>
                <div class="cap1">
                    <center><h3>Diwali Celebrations</h3></center>
                      <center><h4>October 23rd, 2014</h4></center>
                </div>
                <div class="cap2">
                      <center><a href="#">Read More</a></center>
                </div>
            </div>
        </div>

        <div class="col-md-4 tab filter webdesign">
            <div class="each-item">
                <img class="port-image" alt="q1 meet 2017" src="../images/gallery/cubicle-contest.png"/>
                <div class="cap1">
                    <center><h3>Cubicle Contest</h3></center>
                 <center><h4>September 23rd, 2014</h4></center>
                </div>
                <div class="cap2">
                      <center><a href="#">Read More</a></center>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 tab filter webdesign">
            <div class="each-item">
                <img class="port-image"  alt="q1 meet 2017" src="../images/gallery/q2-meet.png"/>
                <div class="cap1">
                     <center><h3>Quarterly Meet 2</h3></center>
        <center><h4>August 2nd, 2014</h4></center>
                </div>
                <div class="cap2">
                     <center><a href="#">Read More</a></center>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 tab filter photo">
          
        </div>

        </section><?php include '../footer.php';?>
 
    </body>
    <style>
.port-image
{
    width: 100%;
}

.tab
{
    margin-bottom:20px;
}

.each-item
{
    position:relative;
    overflow:hidden;
}

.each-item:hover .cap2, .each-item:hover .cap1
{
    left:0px;
}

.cap1
{
    position:absolute;
    width:100%;
    height:70%;
    background:rgba(255, 255, 255, 0.7);
    top:0px;
    left:-100%;
    padding:10px;
    
    transition: all .5s;
}

.cap2
{
    position:absolute;
    width:100%;
    height:30%;
    background:rgba(0, 178, 255, 0.7);
    bottom:0px;
    left:100%;
    padding:10px;
    
    transition: all .5s;
}

.cap1 h3{
    color:#232527 !important;
}

.cap2 a{
    color:#ffffff !important;
    font-size:18px !important;
}

.show{
    font-size: 16px;
border: 1px solid #b7b2b3;
border-radius: 0;
}
</style>
</html>