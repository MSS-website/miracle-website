<!-- 
/* ******************************************************************************
*
* Project : The Digital Valley Summit V1
*
* Date    : October10,2016
*
* Author  : Corporate Applicaiton Support Team<hubble@miraclesoft.com>
*
* File    : header.php
*
* Copyright 2016 Miracle Software Systems, Inc. All rights reserved.
* MIRACLE SOFTWARE PROPRIETARY/CONFIDENTIAL. Use is subject to license terms.
*
* *****************************************************************************
*/
-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport"    content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author"      content="Shankar">
        <meta content="miraclesoft, education,  industry,  IT,industries, " name="keywords"/>
        <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="" type="image/x-icon">
        <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
        <link rel="stylesheet" href="<?= url ?>/includes/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= url ?>/includes/css/font-awesome.min.css">
        <link rel="shortcut icon" href="images/favicon.ico">

        <!-- Stylesheets -->
        <!--<link rel="stylesheet" href="assets/css/reset.css" />-->
        <link rel="stylesheet" href="<?= url ?>/includes/css/styles.css" />

        <!-- Custom styles for our template -->
        <link rel="stylesheet" href="<?= url ?>/includes/css/bootstrap-theme.css" media="screen" >
        <link rel="stylesheet" href="<?= url ?>/includes/css/main.css">
        <link rel="stylesheet" href="<?= url ?>/includes/css/animate.min.css">

        <link rel="stylesheet" href="<?= url ?>/includes/css/customstyle.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        
        <script type="text/javascript" src="<?= url ?>/includes/js/generalScript.js"></script>
      <script type="text/javascript" src="<?= url ?>/includes/js/countdown.js"></script> 
        <link rel="stylesheet" href="<?= url ?>/includes/css/style.css">
        <link rel="stylesheet" href="<?= url ?>/includes/css/mainStyle.css">
<script   type="text/javascript" src="<?= url ?>/includes/js/selectivity-full.min.js"></script>
 <script type="text/javascript" src="<?= url ?>/includes/js/jquery.matchHeight.js"></script> 
   
  
        <style>
            .navbar-inverse{
                border-color: #fff !important;
            }
            
            .btn-cons :hover{
                border:1px solid #5FBAE9;
            }
            
            .navbar-nav .dropdown-menu > li > a{
                color:#333;
            }
            
            .nav ul li > a:hover{
                
            }
            .navbar-nav .btn {
                margin-top:-12px !important;
            }
             .navbar-nav .btn:hover{
                 color:#fff !important;
             }
             .navbar-inverse .navbar-nav > li > a{
                 font-size:14px important;
             }
        </style>
 

        <title></title>
    </head>
    <body>
        <div class="navbar navbar-inverse" >
            <div>
                <div class="navbar-header col-sm-2">
                    <!-- Button for smallest screens -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <a class="navbar-brand" href="<?= url ?>/index.php"><img src="<?= url ?>/images/ds16logo.png"  height="80" alt="LOGO"></a>
                </div>
                <div class="navbar-collapse collapse col-sm-10 pull-right">
                    <ul class="nav navbar-nav pull-right">
                        <li class="current_tab" id="homeLink"><a href="<?= url ?>/index.php"><strong>Home</strong></a></li>
                        

                        <li class="dropdown current_tab1" >
                            <a class="dropdown-toggle current_tab10" id="schedule_tab"><strong>Schedule</strong> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                               
                                
                                 <li class="current_tab8"><a  href="<?= url ?>/jobfair/job_fair.php"><strong>Digital Job Fair</strong></a></li>  
                                  <li class="current_tab11"><a  href="<?= url ?>/schedule/culturals.php"><strong>Culturals</strong></a></li> 
                                  <li class=""><a  href="<?= url ?>/meanhack.php"><strong>MEANHack</strong></a></li>
                                   
                                  
                            </ul>
                        </li>
                        <li class="dropdown current_tab1" >
                            <a class="dropdown-toggle current_tab10" id="schedule_tab"><strong>TechTalk</strong> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                               
                                
                                 <li class="current_tab8"><a  href="<?= url ?>#"><strong>Innovation Summit</strong></a></li>  
                                  <li class="current_tab11"><a  href="<?= url ?>#"><strong>Microsoft TechTalks</strong></a></li> 
                                 
                                   <li class=""><a  href="<?= url ?>/schedule/IBM-innovation-summit.php"><strong> IBM Innovation Summit</strong></a></li> 
                            </ul>
                        </li>
                         
                       <li> <a href="<?= url ?>/schedule/foreign_delegates.php" ><strong>US Customers</strong></a></li>
                        <li ><a  href="<?= url ?>/schedule/Sponsors.php"><strong>Sponsors</strong></a></li>
                         <li class=""><a  href="<?= url ?>/schedule/summit-venues.php"><strong>Venues</strong></a></li> 
                        <li ><a href="<?= url ?>/contact.php"><strong>Contact</strong></a></li>
                          <li><a href="<?= url ?>/registration.php" ><button class="btn btn-info btn-cons register_btn" type="button" >Register</button></a></li>
                       <?php   session_start();
        if (isset($_SESSION['ses_Email']) && $_SESSION['ses_Email'] != "") {
            
        ?>
                          <li><a href="<?= url ?>/logout.php" class="btn btn-info btn-cons register_btn">Logout</a></li>
 <?php } ?>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div> 
    </body>
</html>
