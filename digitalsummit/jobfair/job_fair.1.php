<!-- 
/* ******************************************************************************
*
* Project : The Digital Valley Summit V1
*
* Date    : October10,2016
*
* Author  : Corporate Applicaiton Support Team<hubble@miraclesoft.com>
*
* File    : Agenda.php
*
* Copyright 2016 Miracle Software Systems, Inc. All rights reserved.
* MIRACLE SOFTWARE PROPRIETARY/CONFIDENTIAL. Use is subject to license terms.
*
* *****************************************************************************
*/
-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport"    content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author"      content="Shankar">
        <meta content="miraclesoft, education,  industry,  IT,industries, " name="keywords"/>
        <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
       <link rel="icon" href="" type="image/x-icon">
        <title>Digital Valley Summit</title>



        <?php include '../context.php'; ?>

        <style>

            .current_tab10{
                color:#53bce8;
            }
            .session-break  b{

                margin-left:16px;
            }

            .description{
                padding: 2% 0;
            }

            .session-details i{
                font-size:12px;color:#00A79B;margin:1%
            }


            .session-details font{
                font-size: 15px;
                color:#00A79B;

            }
            .jumbotron {

                color: #FFF;
                border-radius: 0px;
            }
            
            .current_tab8{
                color:#53bce8 !important;
            }
            
            .current_tab8:hover{
                color:#53bce8 !important;
            }
            
             .current_tab10{
                color:#53bce8 !important;
            }
            .btn-single{
                background-color:#00aae7 !important;
            }
            .btn-single :hover{
                background-color:#00A79B !important;
            }
            .parallax{
    background-image:url('../images/hand-2.jpg');
    background-attachment:fixed;
    background-size:cover;
    background-position:center;
}
.session-details{
    font-size:17px;
}
     
        </style>

       <script>
            $(document).ready(function(){
                 $(".current_tab1 >  a").css("color","#333");
              
                 $(".current_tab8").css("color","#53bce8");
                 $("#schedule_tab").addClass(".current_tab8");
                 
            });    
        </script>
    </head>
    <?php include '../header.php'; ?>
    <body class="home">
<section class="parallax">
            <div class="overlay">
            <div class="container">
               
            <div class="row" style="margin-top:40px; margin-bottom:45px;">
         
          <div class="col-sm-6 text-left">
             
            <h1 style="color:#fff"><strong> Digital Job Fair</strong></h1>
           
          </div>
          
          <div class="col-sm-6 text-right">
            <ul class="breadcrumb pull-right">
                <li><a href="../"><font color="#fff">Home</font></a></li>
               
                <li class="active"><font color="#fff">Digital Job Fair</font></li>
            </ul>
          </div>
          </div>
        
            </div></div>
        </section>


            <div class="container">
                <div class="row">
                    <div class="row session-heading">
                        <div class="col-sm-12 text-center" style=""><p>Positions</p></div>
                    </div>

                    <div class="col-sm-12 session-details ">
                        <div class="col-sm-6">
                            <i class="fa fa-1x fa-user" aria-hidden="true"></i>HR Managers<br> 
                            <i class="fa fa-1x fa-user" aria-hidden="true"></i>Facilities Managers <br>
                            <i class="fa fa-1x fa-user" aria-hidden="true"></i>Freshers (Software) <br>
                            <i class="fa fa-1x fa-user" aria-hidden="true"></i>Freshers(Marketing)<br>
                            <i class="fa fa-1x fa-user" aria-hidden="true"></i>Freshers(HR)<br>
                            <i class="fa fa-1x fa-user" aria-hidden="true"></i>Freshers(Accounting)<br>
                            <i class="fa fa-1x fa-user" aria-hidden="true"></i>Software Engineers<br> 
                            <i class="fa fa-1x fa-user" aria-hidden="true"></i>.NET Developers<br>
                        </div>
                        <div class="col-sm-6">

                            <i class="fa fa-1x fa-user" aria-hidden="true"></i>PHP Developers<br>

                            <i class="fa fa-1x fa-user" aria-hidden="true"></i>Creative Designer (PhotoShop ) <br>
                            <i class="fa fa-1x fa-user" aria-hidden="true"></i>Network Engineers<br>
                            <i class="fa fa-1x fa-user" aria-hidden="true"></i>System Administrators<br>
                            <i class="fa fa-1x fa-user" aria-hidden="true"></i>Database Administrators.
                        </div>
                    </div>
                    <!--                    <div class="col-sm-12">
                                            <div class="row session-date"><div class="col-xs-12"><h3>Monday, Dec 12</h3></div></div>
                    
                                        </div>-->

                    <div class="row session-heading">
                        <div class="col-sm-12 text-center" style=""><p>Schedule</p></div>
                    </div>

                    <div class="row session session-break session-details">
                        <div class="col-md-6">
                            <div class="  location">   <font><i class="fa fa-1x fa-map-marker" aria-hidden="true"></i></font>AU convocation hall/Dr. Ambedkar Assembly Hall</div>  
                            <b>Saturday: 17th Dec, 2016</b> <br>
                            <b>11:00AM to 4:00PM</b> 

                        </div>
                        <div class="col-md-6">
                            <div class="">
                                <div class=" ">
                                    <font>        <i class="fa fa-circle" aria-hidden="true"> </i></font>Eminent industry speakers on how to face the interview<br>
                                    <font>     <i class="fa fa-circle" aria-hidden="true"></i></font>How to prepare for the interview<br>
                                    <font>  <i class="fa fa-circle" aria-hidden="true"></i></font>Job opportunities

                                </div></div>
                        </div>
                    </div>

                    <div class="row session session-break session-details">
                        <div class="col-md-6">
                            <div class="location">  <i class="fa fa-1x fa-map-marker" aria-hidden="true"></i>AU convocation hall/Dr. Ambedkar Assembly Hall</div>
                            <b>Sunday: 18th Dec, 2016</b> <br> 
                            <b>10:00AM to 4:00PM</b> 

                        </div>
                        <div class="col-md-6"><div class="">
                                <div class=" ">
                                    <font>        <i class="fa fa-circle" aria-hidden="true"> </i></font>Job Fair<br>
                                    <font>     <i class="fa fa-circle" aria-hidden="true"></i></font>There will be between 20 to 50 IT Companies onsite to do candidate screening and selection.<br>


                                </div></div></div>

                    </div>
                    <div class="gap" style="line-height: 10px; height: 10px;"></div>



                    <div class="uparrow" id="uparrow"><i class="fa fa-3x fa-angle-up" aria-hidden="true"></i></div>


                                    <div class="row">
                                            
                                            <div class="col-sm-4">
                                                <center>
                                                <a href="../applicant.php" target="_blank">    <button type="button" class="btn btn-info col-sm-12">Submit Your Application  </button>
                                                  <br>
                                                  <div class="col-sx-12 text-center" style="color:red;">*<font style="font-size:12px;color:red;">Please submit Application before coming to the Job Fair .</font></div> 
                                                    </center>
                                           <br>
                                        </div>
                                        <div class="col-sm-4"></div>
                                        <div class="col-sm-4"></div>
                                    </div>
                    
                    
                    
                    
                </div> 


            </div>
       
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.4/waypoints.min.js"></script>


        <script>
            $(document).ready(function () {
                $('.location_map > h2').addClass('animated fadeInUp');
                $('.location_map  img').addClass('animated bounceIn');
                // fade in and fade out
                $(function () {
                    $(window).scroll(function () {
                        if ($(this).scrollTop() > 50) {
                            $('#uparrow').fadeIn();
                        } else {
                            $('#uparrow').fadeOut();
                        }
                    });

                    // scroll body to 0px on click
                    $('#uparrow').click(function () {
                        $('body,html').animate({
                            scrollTop: 0
                        }, 800);
                        return false;
                    });
                });
                

            });
            
            function urlCalling(){
                window.open("http://www.google.com", "_blank");
            }
            
            
        </script>
        <?php include '../footer.php'; ?>
    </body>
</html>
