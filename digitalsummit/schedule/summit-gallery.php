<!-- 
/* ******************************************************************************
*
* Project : The Digital Valley Summit V1
*
* Date    : October10,2016
*
*
* File    : Index.php
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
        <meta name="author"     >
        <meta content="miraclesoft, education,  industry,  IT,industries, " name="keywords"/>
        <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="" type="image/x-icon">
        <title>Digital Valley Summit</title>

       <link rel="stylesheet" type="text/css" href="../gallery/css/style.css"/>
		<script src="../gallery/js/modernizr.custom.70736.js"></script>
        <link rel="stylesheet" href="../../css/font-awesome.min.css" type="text/css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3./includes/cssfont-awesome.min.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="../includes/css/selectivity-full.css">


        <?php include '../context.php'; ?>

        <?php
        ?>

        <style>

  .current_tab11{
                color:#53bce8 !important;
            }
            
           .current_tab10{
                color:#53bce8 !important;
            }
            div.table-title {
                display: block;
                margin: auto;
                max-width: 600px;
                padding:5px;
                width: 100%;
            }

            .table-title h3 {
                color: #fafafa;
                
                font-weight: 400;
                font-style:normal;
                font-family: "Roboto", helvetica, arial, sans-serif;
                text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
                text-transform:uppercase;
            }



            .table-fill {
                background: white;
                border-radius:3px;
                border-collapse: collapse;
                height: 320px;
                margin: auto;
                max-width: 100%;
                padding:5px;
                width: 100%;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
                animation: float 5s infinite;
                text-align: center !important;
            }

            th {
                color:#D5DDE5;
                background:#1b1e24;
                border-bottom:4px solid #9ea7af;
                border-right: 1px solid #343a45;
                font-size:23px;
                font-weight: 100;
                padding:24px;

                text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
                vertical-align:middle;
            }

            th:first-child {
                border-top-left-radius:3px;
            }

            th:last-child {
                border-top-right-radius:3px;
                border-right:none;
            }

            tr {
                border-top: 1px solid #C1C3D1;
                border-bottom-: 1px solid #C1C3D1;
                color:#666B85;
                font-size:16px;
                font-weight:normal;
                text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
            }

            tr:hover td {
                background:#4E5066;
                color:#FFFFFF;
                border-top: 1px solid #22262e;
                border-bottom: 1px solid #22262e;
            }

            tr:first-child {
                border-top:none;
            }

            tr:last-child {
                border-bottom:none;
            }

            tr:nth-child(odd) td {
                background:#EBEBEB;
            }

            tr:nth-child(odd):hover td {
                background:#4E5066;
            }

            tr:last-child td:first-child {
                border-bottom-left-radius:3px;
            }

            tr:last-child td:last-child {
                border-bottom-right-radius:3px;
            }

            td {
                background:#FFFFFF;
                padding:20px;

                vertical-align:middle;
                font-weight:300;
                font-size:18px;
                text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
                border-right: 1px solid #C1C3D1;
            }

            td:last-child {
                border-right: 0px;
            }



            th.text-center {
                text-align: center;
            }

            th.text-right {
                text-align: right;
            }



            td.text-center {
                text-align: center;
            }

            td.text-right {
                text-align: right;
            }

            .description{
                padding:30px;



            }

            .agenda-date { width: 170px; }
            .dayofmonth {
                width: 40px;
                font-size: 36px;
                line-height: 36px;
                float: left;
                text-align: right;
                margin-left: 10px; 
            }

            .agenda .agenda-date .shortdate {
                font-size: 0.75em; 
            }




            .lib-panel {
                margin-bottom: 20Px;
            }
            .lib-panel img {
                width: 100%;
                background-color: transparent;
            }

            .lib-panel .row,
            .lib-panel .col-md-6 {
                padding: 0;
                background-color: #FFFFFF;
            }


            .lib-panel .lib-row {
                padding: 0 20px 0 20px;
            }

            .lib-panel .lib-row.lib-header {
                background-color: #FFFFFF;
               
                padding: 0px 20px 0 20px;
            }
            h2{
                margin-top:0 !important;
            }
            .lib-panel .lib-row.lib-header .lib-header-seperator {
                height: 2px;
                width: 26px;
                background-color: #d9d9d9;
                margin: 7px 0 7px 0;
            }

            .lib-panel .lib-row.lib-desc {
                position: relative;
                height: 100%;
                display: block;
                font-size: 13px;
            }
            .lib-panel .lib-row.lib-desc a{
                position: absolute;
                width: 100%;
                bottom: 10px;
                left: 20px;
            }

            .row-margin-bottom {
                margin-bottom: 20px;
            }

            .box-shadow {
                -webkit-box-shadow: 0 0 10px 0 rgba(0,0,0,.10);
                box-shadow: 0 0 10px 0 rgba(0,0,0,.10);
            }

            .no-padding {
                padding: 0;
            }


            .lib-img-show{
                width:200px;
                height: 200px;
            }
            
            .lib-header{
                font-weight: bold;
            }
            .nomargintop{
    margin-top:-15px !important;
}
            .h2-text{
                color:#00aae7;
                font-weight:bold;
            }
            .parallax{
    background-image:url('../images/banner/venue.png');
    background-attachment:fixed;
    background-size:cover;
    background-position:center;
}
.overlay{
    background-color:rgba(0,0,0,0.5);
}
.greyback{
    background-color:#232527;
    padding:10px 15px;
}
.greyback1{
    background-color:#eee;
    padding:10px 15px;
    color:#232527;
}
.methodText{
    text-align: justify !important;
}
        
        .map_container {
            position:relative;
            padding-bottom:74%; /* 16:9 */
            padding-top:125px;
            padding-left:0px;  
            height:0;
            max-width:100%;

}
        .map_container iframe {
            padding-left:0px;    
            position:absolute;
            top:0px;
            bottom:0px;
            left:0;
            width:100%;
            height:98%;
}        
h5 {
    color: #fff!important;
    font-size: 16px !important;
    font-weight: 500;
}
      
        </style>
        <script>
//            $(document).ready(function(){
//                $(".current_tab1 >  a").css("color","#333");
//              
//                $(".current_tab8").css("color","#53bce8");
//                $("#schedule_tab").addClass(".current_tab8");
//                 
//            });        
        </script>
        <script type="text/javascript" src="includes/js/ConfScripts.js"></script>
    </head>
    <?php include '../header.php'; ?>
    <body class="home" onload="getStates()">

        <section class="parallax">
            <div class="overlay">
            <div class="container">
               
            <div class="row" style="margin-top:40px; margin-bottom:45px;">
         
          <div class="col-sm-6 text-left">
             
            <h1 style="color:#fff"><strong>Venue</strong></h1>
          </div>
          <div class="col-sm-6 text-right">
            <ul class="breadcrumb pull-right">
                <li><a href="../"><font color="#fff">Home</font></a></li>
               
                <li class="active"><font color="#fff">Venue</font></li>
            </ul>
          </div>
         
        </div>
        
            </div></div>
        </section>
        <div class="gap" style="line-height: 50px; height: 30px;"></div>

        </div>
        <div class="container">
            
            <ul class="nav nav-tabs">
                       
                        <li class="active">
                            <a data-toggle="tab" href="#one"><h4><strong>MeanHack</strong></h4></a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#two"><h4><strong>Culturals</strong></h4></a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#three"><h4><strong>Job Fair</strong></h4></a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#four"><h4><strong>Innovation Summit</strong></h4></a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#five"><h4><strong>Awards</strong></h4></a>
                        </li>
                        
                         
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="one">
                            
              
                            
                              
            <!-- gallery starts -->
            
            <div class="main">

				<div class="gamma-container gamma-loading" >

					<ul class="gamma-gallery" id="loadmore">					
						<li>
							<div data-alt="img06" data-description="<h3>Chatoyant</h3>" data-max-width="1800" data-max-height="1350">
								<div data-src="../gallery/images/xxxlarge/1.jpg" data-min-width="1300"></div>
								<div data-src="../gallery/images/xxlarge/1.jpg" data-min-width="1000"></div>
								<div data-src="../gallery/images/xlarge/1.jpg" data-min-width="700"></div>
								<div data-src="../gallery/images/large/1.jpg" data-min-width="300"></div>
								<div data-src="../gallery/images/medium/1.jpg" data-min-width="200"></div>
								<div data-src="../gallery/images/small/1.jpg" data-min-width="140"></div>
								<div data-src="../gallery/images/xsmall/1.jpg"></div>
								<noscript>
									<img src="../gallery/images/xsmall/1.jpg" alt="img06"/>
								</noscript>
							</div>
						</li>
					</ul>

					<div class="gamma-overlay"></div>
				</div>

			</div><!--/main-->
                
            <!-- gallery ends -->
                            
                            
                            
                            
                        </div>
                        <div class="tab-pane fade" id="two">
                            
                               <!-- gallery starts -->
            
            <div class="main">

				<div class="gamma-container gamma-loading">

					<ul class="gamma-gallery">					
						<li>
							<div data-alt="img06" data-description="<h3>Chatoyant</h3>" data-max-width="1800" data-max-height="1350">
								<div data-src="../gallery/images/xxxlarge/1.jpg" data-min-width="1300"></div>
								<div data-src="../gallery/images/xxlarge/1.jpg" data-min-width="1000"></div>
								<div data-src="../gallery/images/xlarge/1.jpg" data-min-width="700"></div>
								<div data-src="../gallery/images/large/1.jpg" data-min-width="300"></div>
								<div data-src="../gallery/images/medium/1.jpg" data-min-width="200"></div>
								<div data-src="../gallery/images/small/1.jpg" data-min-width="140"></div>
								<div data-src="../gallery/images/xsmall/1.jpg"></div>
								<noscript>
									<img src="../gallery/images/xsmall/1.jpg" alt="img06"/>
								</noscript>
							</div>
						</li>
					</ul>

					<div class="gamma-overlay"></div>
				</div>

			</div><!--/main-->
                
            <!-- gallery ends -->
                              
                            
                            
                        </div>
                        <div class="tab-pane fade" id="three">
                            Three
                        </div>
                        <div class="tab-pane fade" id="four">
                            
                        </div>
                        <div class="tab-pane fade" id="five">
                            
                        </div>
                    </div>
            
            
            
          
            
            
            
           
        </div>
        <div style="clear:both;" class="clearfix"></div>

        <!-- /Header -->

        <!-- Intro -->

        
        <!-- Social links. @TODO: replace by link/instructions in template -->
       
        <!-- /social links -->
        <div class="uparrow" id="uparrow"><i class="fa fa-3x fa-angle-up" aria-hidden="true"></i></div>



        <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>



        <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.4/waypoints.min.js"></script>



        <!--animate_end-->




        <script>
            $(document).ready(function () {
                          


                           
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
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script src="../gallery/js/jquery.masonry.min.js"></script>
		<script src="../gallery/js/jquery.history.js"></script>
		<script src="../gallery/js/js-url.min.js"></script>
		<script src="../gallery/js/jquerypp.custom.js"></script>
		<script src="../gallery/js/gamma.js"></script>
		<script type="text/javascript">
			
			$(function() {
				var GammaSettings = {
						viewport : [ {
							width : 1200,
							columns : 5
						}, {
							width : 900,
							columns : 4
						}, {
							width : 500,
							columns : 3
						}, { 
							width : 320,
							columns : 2
						}, { 
							width : 0,
							columns : 2
						} ]
				};
				Gamma.init( GammaSettings, fncallback );
				var page = 0,
					items = ['']

			});

		</script>	
        <br>
        <?php include '../footer.php'; ?>
    </body>
</html>
