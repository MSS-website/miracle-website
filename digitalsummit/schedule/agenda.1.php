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
        <title>Digital  Summit</title>
        <?php include '../context.php'; ?>
        <style>
            .current_tab1 >  a{
            color:#53bce8 !important;
            }
            .session-break  b{
            margin-left:16px;
            }
            .description{
            padding: 2% 0;
            }
            .jumbotron {
            background: #00A79B !important;
            color: #FFF;
            border-radius: 0px;
            }
            .box {
            border-radius: 3px;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
            padding: 10px 25px;
            text-align: right;
            display: block;
            margin-top: 60px;
            }
            .box-icon {
            background-color: #57a544;
            border-radius: 50%;
            display: table;
            height: 100px;
            margin: 0 auto;
            width: 100px;
            margin-top: -61px;
            }
            .box-icon span {
            color: #fff;
            display: table-cell;
            text-align: center;
            vertical-align: middle;
            }
            .info h4 {
            font-size: 26px;
            letter-spacing: 2px;
            text-transform: uppercase;
            }
            .info > p {
            color: #717171;
            font-size: 16px;
            padding-top: 10px;
            text-align: justify;
            }
            .info > a {
            background-color: #03a9f4;
            border-radius: 2px;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
            color: #fff;
            transition: all 0.5s ease 0s;
            }
            .info > a:hover {
            background-color: #0288d1;
            box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.16), 0 2px 5px 0 rgba(0, 0, 0, 0.12);
            color: #fff;
            transition: all 0.5s ease 0s;
            }
            .wpb_alert p:last-child, #content .wpb_alert p:last-child, .wpb_text_column p:last-child, .wpb_text_column *:last-child, #content .wpb_text_column p:last-child, #content .wpb_text_column *:last-child, .wpb_toggle_content p:last-child {
            margin-bottom: 0;
            }
            .alignleft {
            float: left;
            margin: 5px 30px 10px 0;
            }
            img.alignleft {
            border-radius: 50%;
            height: 90px;
            width: 90px;
            border: 3px solid #00a79b;
            }
            h4 {
            color: #000;
            font-size: 15px;
            padding: 10px 0 0;
            }
            h5 {
            color: inherit;
            font-size: 14px;
            }
            .active-read-more-btn::before {
            content: ">";
            font-size: 16px;
            line-height: 0.9;
            background: #189ac6 none repeat scroll 0 0;
            border-radius: 50%;
            color: #fff;
            display: inline-block;
            font-size: 14px;
            height: 14px;
            line-height: 1;
            margin: 0 5px 0 0;
            text-align: center;
            width: 14px;
            }
            .time_strip{
            background: #e7e7e7 none repeat scroll 0 0;
            border-radius: 4px;
            color: #000;
            font-size: 15px;
            padding: 12px;
            text-align: center;
            } 
            .align-center {
            text-align: center;
            }
            .hash-list {
            display: block;
            padding: 0;
            margin: 0 auto;
            }
            @media (min-width: 768px){
            .hash-list.cols-3 > li:nth-last-child(-n+3) {
            border-bottom: none;
            }
            }
            @media (min-width: 768px){
            .hash-list.cols-3 > li {
            width: 33.3333%;
            }
            }
            .hash-list > li {
            display: block;
            float: left;
            /*                border-right: 1px solid rgba(0, 0, 0, 0.2);
            border-bottom: 1px solid rgba(0, 0, 0, 0.2);*/
            }
            .pad-30, .pad-30-all > * {
            padding: 30px;
            }
            .mgb-20{
            width: 100px;
            height: 100px;
            border-radius:50%;
            border: 3px solid #00aae7;
            }
            .mgb-20, .mgb-20-all > * {
            margin-bottom: 20px;
            }
            .wpx-100, .wpx-100-after:after {
            width: 100px;
            }
            .img-round, .img-rel-round {
            border-radius: 50%;
            }
            .padb-30, .padb-30-all > * {
            padding-bottom: 30px;
            }
            .mgb-40, .mgb-40-all > * {
            margin-bottom: 40px;
            }
            .align-center {
            text-align: center;
            }
            [class*="line-b"] {
            position: relative;
            padding-bottom: 20px;
            border-color: #E6AF2A;
            }
            .fg-text-d, .fg-hov-text-d:hover, .fg-active-text-d.active {
            color: #222;
            }
            .font-cond-b {font-weight: 700 !important;}
            .parallax{
            background-image:url('../images/banner/us-customers.png');
            background-attachment:fixed;
            background-size:cover;
            background-position:center;
            }
            .methodText{
            text-align: justify !important;
            }
            .blue-text{
            color:#00aae7 !important;
            }
            .greyback1{
            background-color:#eee;
            padding:10px 15px;
            color:#000;
            border-bottom:#ccc;
            }
            .nomargintop{
            margin-top:-15px !important;
            }
            .session-details h4{
            color:#0d416b !important;
            }
            .bg-time{
            color:#fff;
            background-color:#0d416b;
            padding:3px 6px;
            font-size:12px;
            }
            .location-head {
            font-size: 15px !important;
            color: #0d416b!important;
            
            }
        </style>
    </head>
    <?php include '../header.php'; ?>
    <body class="home">
        <section class="parallax">
            <div class="overlay">
                <div class="container">
                    <div class="row"  style="margin-top:40px; margin-bottom:45px;">
                        <div class="col-sm-6 text-left">
                            <h1 style="color:#fff"><strong>Agenda</strong></h1>
                        </div>
                        <div class="col-sm-6 text-right">
                            <ul class="breadcrumb pull-right">
                                <li><a href="../"><font color="#fff">Home</font></a></li>
                                <li class="active"><font color="#fff">Agenda</font></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div style="clear:both;" class="clearfix"></div>
        <!-- /Header -->
        <!-- Intro -->
        <div clas="row">
            <!-- TIMER -->
            <!-- end timer-area --> 
        </div>
        <!-- /Intro-->
        <!--            <div style="width:100%;overflow:hidden">    
            <div class="header-bar">
                <div class="container">
                    <h2 class="text-center"><span class="visuallyhidden"></span></h2>
                </div>
            </div></div>-->
        <div class="container">
            <div class="row">
                <br>
                <div class="col-sm-12">
                    <p class="methodText">Being hosted in Visakhapatnam, the inaugural Digital Summit will held from December 12th-17th. The event will take place at multiple venues provided by Andhra University and Miracle Software Systems and will be packed with over 3000 attendees across technical talks, executive meetings, job fairs, hacakthons, celebrations and more.</p>
                </div>
                <br>
            </div>
            <h3 class=""><strong>Monday – December 12th, 2016</strong></h3>
            <div class="row session-heading">
                <div class="col-sm-12">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3"><br> 
                    <h5 class="time_strip"><strong> 9:30 AM to 12:30 PM IST</strong></h5>
                </div>
                <div class="col-sm-9">
                    <br> 
                    <div class="session-details col-sm-12" style="border:0">
                        
                        <h4 style=" margin-top:20px;"><strong><font color="#00aae7">Digital Summit Kick Off  </font></strong></h4>
                        <br> 
                        <a href="summit-venues.php">
                            <h4 class="location-head"><em>@ YVS Murty Auditorium(Andhra University)</em></h4>
                        </a>
                        <br>
                        <div class="methodText">
                            An invite only event which will host government officials, IT leaders, professionals, NRIs and academicians to discuss about the future of Digital Andhra, the need-of-the-hour, grooming our talent and the AP Cloud initiative. This half day kick-off even will put the wheels in motion for our inaugural Digital Summit as we start a week full of fun and excitement. 
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <br>
                    <h5 class="time_strip"><strong>2:30 PM to 6:00 PM IST </strong></h5>
                </div>
                <div class="col-sm-9">
                    <div class="session-heading-g">
                        <div class="col-sm-12"></div>
                    </div>
                    <h4><strong><font color="#00aae7">  Executive Summit Kick Off </font></strong></h4>
                    <a href="summit-venues.php">
                        <h4 class="location-head"><i>@ Miracle Heights(Rushikonda)</i></h4>
                    </a>
                    <br>
                    <div class="methodText">An invite only event for NRIs and Miracle Customers from the US – this event will see IT experts and leaders showcasing the talent of AP, the need for digital transformation, and why Visakhapatnam is the best choice for them. </div>
                </div>
            </div>
            <h3><strong>Tuesday – December 13th, 2016</strong></h3>
            <div class="row session-heading">
                <div class="col-sm-12"></div>
            </div>
            <div class="row">
                <div class="col-sm-3"><br>
                    <h5 class="time_strip"><strong> 7:00 AM to 11:00 PM IST</strong></h5>
                </div>
                <div class="col-sm-9">
                    <div class="session-details" style="border:0; margin-top:20px;">
                        <br>  
                        <h4><strong><font color="#00aae7">Executive Summit Day #2 </font>  </strong></h4>
                        <br> 
                        <a href="summit-venues.php">
                            <h4 class="location-head"><i>@ Miracle Heights(Rushikonda)</i></h4>
                        </a>
                        <div class="row session-heading-g">
                            <div class="col-sm-12"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <h5 class="time_strip"><strong> 8:00 AM to 10:00 AM IST</strong></h5>
                </div>
                <div class="col-sm-9">
                    <h4 style=" margin-top:10px;"><strong><font color="#00aae7">DS16 Student Sign In Booths Open  </font></strong></h4>
                    <a href="summit-venues.php">
                        <h4 class="location-head"><i>@ AU Convocation Hall(Andhra University)</i></h4>
                    </a>
                    <div class="methodText">
                        All students must register online before hand so that they can pick up their badges and kits at the booths on Day #1. 
                    </div>
                    <div class="session-heading-g">
                        <div class="col-sm-12"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <h5 class="time_strip"><strong>  10:30 AM to 5:30 PM IST</strong></h5>
                </div>
                <div class="col-sm-9">
                    <h4 style=" margin-top:10px;"><strong><font color="#00aae7">Innovation Summit 2016 Talks Start  </font></strong></h4>
                    <a href="summit-venues.php">
                        <h4 class="location-head"><i>@ AU Convocation Hall(Andhra University)</i></h4>
                    </a>
                    <div class="methodText">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-9">
                    <div class="greyback1">
                        <h4><font color="#00aae7"> <strong>Keynote – Welcome to Digital Summit 2016! </strong></font> <font class="bg-time pull-right">10:30 AM to 11:30 AM IST </font></h4>
                        <br> 
                        <div class="methodText">
                            Join us as we kick off Digital Summit 2016 with an enthralling keynote where you will hear from great speakers about the activities of the week, the need for Digital Transformation and how you can become the leaders of the future. 
                        </div>
                        <div class="session-heading-g">
                            <div class="col-sm-12"></div>
                        </div>
                        <br>  
                        <a href="InnovationSummit.php">
                            <h4><font color="#00aae7"><strong>Innovation Summit Talks Start</strong> </font> <font class="bg-time pull-right"> 11:30 AM to 5:15 PM IST  </font></h4>
                        </a>
                        <br> 
                        <div class="methodText">
                            Microsoft, Oracle, IBM and more – December 13th will be a great day as we take you through some great topics including technical talks from Miracle’s Innovation Labs, Microsoft and Oracle.  
                        </div>
                        <div class="session-heading-g">
                            <div class="col-sm-12"></div>
                        </div>
                        <br>  
                        <h4> <font color="#00aae7"><strong>Keynote – A Digital Day Indeed </strong></font><font class="bg-time pull-right"> 05:15 PM to 5:30 PM IST </font></h4>
                        <br>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <br>
                    <h5 class="time_strip"><strong>1:00 PM to 2:00 PM IST</strong></h5>
                </div>
                <div class="col-sm-9">
                    <div class="session-heading-g">
                        <div class="col-sm-12"></div>
                    </div>
                    <h4 style=" margin-top:25px;"><strong><font color="#00aae7">Day #1 Lunch @ Digital Summit ’16 </font></strong></h4>
                    <a href="summit-venues.php">
                        <h4 class="location-head"><i>@ AU Convocation Hall(Andhra University)</i></h4>
                    </a>
                    <div class="methodText">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <br>
                    <h5 class="time_strip"><strong> 5:30 PM to 7:30 PM IST</strong></h5>
                </div>
                <div class="col-sm-9">
                    <div class="session-heading-g">
                        <div class="col-sm-12"></div>
                    </div>
                    <h4 style=" margin-top:25px;"><strong><font color="#00aae7">Hungama@Digital Summit 2015 Day #1 </font></strong></h4>
                    <a href="summit-venues.php">
                        <h4 class="location-head"><i>@ AU Convocation Hall(Andhra University)</i></h4>
                    </a>
                    <div class="methodText">
                    </div>
                </div>
            </div>
            <h3><strong>Wednesday – December 14th, 2016</strong></h3>
            <div class="row session-heading">
                <div class="col-sm-12"></div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <br>
                    <h5 class="time_strip"><strong> 9:00 AM to 6:00 PM IST</strong></h5>
                </div>
                <div class="col-sm-9">
                    <div class="session-details col-sm-12" style="border:0">
                        
                        <a href="microsoft-techtalks.php">
                            <h4 style=" margin-top:35px;"><strong><font color="#00aae7"> Microsoft TechTalks @ Digital Summit 2016  </font> </strong></h4>
                        </a>
                        <br>  
                        <a href="summit-venues.php">
                            <h4 class="location-head"><i>@ AU Convocation Hall(Andhra University)</i></h4>
                        </a>
                        <div class="session-heading-g">
                            <div class="col-sm-12"></div>
                        </div>
                        <br>
                        <div class="row">
                            
                            <div class="col-sm-12">
                                <div class="greyback1">
                                    <h4> <font color="#00aae7"><strong>Keynote – Connected, Cloud and Cognitive</strong>  </font><font class="bg-time pull-right"> 09:00 AM to 10:00 AM IST </font></h4>
                                    <br>
                                    <div class="methodText"> Day #2 at Digital Summit will host leaders and speakers from Microsoft as we deep dive into Azure and its offerings around Digital Transformation! Live Bot Demos, industry view of Digital Transformation and more at DS16  </div>
                                    <div class="row session-heading-g">
                                        <div class="col-sm-12"></div>
                                    </div>
                                    <a href="IBM-innovation-summit.1.php">
                                        <h4><font color="#00aae7"> <strong> Microsoft TechTalks Sessions Start</strong>  </font> <font class="bg-time pull-right"> 10:00 AM to 5:30 PM IST </font></h4>
                                    </a>
                                    <br>
                                    <div class="methodText"> From DevOps to the Internet of Things, up to the cloud and about the next age of servers – Day #2 of the Technical Talks at Digital Summit will have it all with 5 great speaker sessions lined up for you. We are proud to have our partner Microsoft take you through their view of a beautiful digital future </div>
                                    <div class="row session-heading-g">
                                        <div class="col-sm-12"></div>
                                    </div>
                                    <h4><font color="#00aae7"> <strong> Keynote – Looking forward to Tomorrow! </strong> </font><font class="bg-time pull-right"> 05:30 PM to 05:45 PM IST </font></h4>
                                    <br>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <br>
                    <h5 class="time_strip"><strong>10:00 AM to 12 PM IST </strong></h5>
                </div>
                <div class="col-sm-9">
                    <div class="session-heading-g">
                        <div class="col-sm-12"></div>
                    </div>
                    <h4><strong><font color="#00aae7"> Adopt-a-Village  </font></strong></h4>
                    <a href="summit-venues.php">
                        <i>
                            <h4 class="location-head">@ Miracle City(Bhogapuram)</h4>
                        </i>
                    </a>
                    <p class="methodText">
                        Feed the poor, give them medicines and help them to get educated. All participants of the Executive Summit @ Digital Summit 2016 will get an unique opportunity to assist the villages of Bhogapuram in a program fully sponsor by Miracle. 
                    </p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-3">
                    <br>
                    <h5 class="time_strip"><strong>12:30 PM to 1:30 PM IST </strong></h5>
                </div>
                <div class="col-sm-9">
                    <div class="session-heading-g">
                        <div class="col-sm-12"></div>
                    </div>
                    <h4><strong><font color="#00aae7">@ AU Convocation Hall(Andhra University)</font></strong></h4>
                    <p class="methodText">
                        Feed the poor, give them medicines and help them to get educated. All participants of the Executive Summit @ Digital Summit 2016 will get an unique opportunity to assist the villages of Bhogapuram in a program fully sponsor by Miracle. 
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <br>
                    <h5 class="time_strip"><strong>6:00 PM to 8:00 PM IST </strong></h5>
                </div>
                <div class="col-sm-9">
                    <div class="session-heading-g">
                        <div class="col-sm-12"></div>
                    </div>
                    <h4><strong><font color="#00aae7"> Hungama@Digital Summit 2015 Day #2</font></strong></h4>
                    <p class="methodText">
                        Feed the poor, give them medicines and help them to get educated. All participants of the Executive Summit @ Digital Summit 2016 will get an unique opportunity to assist the villages of Bhogapuram in a program fully sponsor by Miracle. 
                    </p>
                </div>
            </div>
            <h3><strong>Thursday – December 15th, 2016</strong></h3>
            <div class="row session-heading">
                <div class="col-sm-12"></div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <br>
                    <h5 class="time_strip"><strong> 9:30 AM to 5:45 PM IST  </strong></h5>
                </div>
                <div class="col-sm-9">
                    <div class="session-details col-sm-12" style="border:0">
                        <br>
                        <a href="IBM-innovation-summit.1.php">
                            <h4 style=" margin-top:20px;"><strong><font color="#00aae7">IBM Innovation Summit @ Digital Summit 2016  </font> </strong></h4>
                        </a>
                        <br>  
                        <a href="summit-venues.php">
                            <i>
                                <h4 class="location-head"> @ AU Convocation Hall(Andhra University)</h4>
                            </i>
                        </a>
                        <div class="session-heading-g">
                            <div class="col-sm-12"></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="greyback1">
                                    <h4> <font color="#00aae7"><strong>  Keynote – A Changing Digital World!</strong>  </font><font class="bg-time pull-right"> 09:30 AM to 10:30 AM IST </font></h4>
                                    <br>
                                    <div class="methodText">    Flying drones from the cloud is just the start of a new world in which the gap between the physical and digital worlds shrinks. We welcome IBM to the party at Digital Summit 2016 with an enthralling keynote full of live demos and eminent speakers.  </div>
                                    <div class="row session-heading-g">
                                        <div class="col-sm-12"></div>
                                    </div>
                                    <a href="IBM-innovation-summit.1.php">
                                        <h4><font color="#00aae7"><strong>  IBM Innovation Summit Talks Start </strong> </font> <font class="bg-time pull-right"> 10:30 AM to 5:30 AM IST </font></h4>
                                    </a>
                                    <br>
                                    <div class="methodText">      IBM is a leader in IT, a giant if you should say – and they’ve seen it all, from the type writer to the digital transformation of today. So who better to talk to us about the way the world is changing! From how you can build an IoT solution for a manufacturing plant to the cognitive solution capabilities of Watson, Day #3 will have it all!  </div>
                                    <div class="row session-heading-g">
                                        <div class="col-sm-12"></div>
                                    </div>
                                    <h4><font color="#00aae7"><strong>  Keynote – Your Welcome, AP Cloud! </strong> </font><font class="bg-time pull-right"> 05:30 PM to 05:50 PM IST </font></h4>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div>

        <div class="row">
            
            <div class="col-sm-3">
                <br>
                <h5 class="time_strip"><strong>12:30 PM to 1:30 PM IST</strong></h5>
            </div>
            <div class="col-sm-9">
                <div class="session-heading-g">
                    <div class="col-sm-12"></div>
                </div>
                <h4><strong><font color="#00aae7">Day #3 Lunch @ Digital Summit ’16  </font></strong></h4>
                <a href="summit-venues.php">
                    <h4 class="location-head"><i> @ AU Convocation Hall(Andhra University)</i></h4>
                </a>
                </div>
                </div>
            
            <div class="row">
            
            <div class="col-sm-3">
                <br>
                <h5 class="time_strip"><strong>6:00 PM to 8:00 PM IST </strong></h5>
            </div>
            <div class="col-sm-9">
                <div class="session-heading-g">
                    <div class="col-sm-12"></div>
                </div>
                                <a href="culturals.php">
                <h4><strong><font color="#00aae7">Hungama@Digital Summit 2015 Day #3  </font></strong></h4>
                </a>
                
                <a href="summit-venues.php">
                    <h4 class="location-head"><i> @ AU Convocation Hall(Andhra University)</i></h4>
                </a>
                </div>
                
                
            </div>
            
            
            
            <h3><strong>Friday – December 16th, 2016</strong></h3>
            <div class="row session-heading">
                <div class="col-sm-12"></div>
            </div>
        
        <div class="row">
            <div class="col-sm-3"><br>
                <h5 class="time_strip"><strong>8:00 AM to 12:00 PM IST</strong></h5>
            </div>
            <div class="col-sm-9">
                
                <div class="session-details col-sm-12" style="border:0">
                    <br> 
                    <a href="meanhack.php">
                        <h4 style=" margin-top:20px;"><strong> <font color="#00aae7">MEANHack @ Digital Summit 2016 </font></strong></h4>
                    </a>
                    <br> 
                    <a href="summit-venues.php">
                        <h4 class="location-head"><i>  @ Miracle Heights(Rushikonda)</i></h4>
                    </a>
                    <br><p class="methodText">
                        30 Teams, 24 hours and 3 Winners! 150 students take on technology and ideas to showcase themselves off to the world. From building cognitive chat bots to mobile applications that make lives easier, these students will explore the depths of technology and digital transformation while getting a first hand look at the new world. Thanks to Miracle’s Innovation Labs for hosting MEANHack 2016.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3"><br>
                <h5 class="time_strip"><strong>10:00 AM to 6:00 PM IST</strong></h5>
            </div>
            <div class="col-sm-9">
                <div class="session-heading-g">
                    <div class="col-sm-12"></div>
                </div>
                 <a href="jobfair/job_fair.php">
                        <h4 style=" margin-top:20px;"><strong>  <font color="#00aae7">Digital Job Fair Day #1 </font> </strong></h4>
                    </a>
               
                    <a href="summit-venues.php">
                        <h4 class="location-head"><i>@ AU Engineering College and AU Convocation Hall(Andhra University)</i></h4>
                    </a>
                    <br>
            </div>
        </div>
                
        <!--saturday-->
                    <h3><strong>Saturday– December 17th, 2016</strong></h3>
            <div class="row session-heading">
                <div class="col-sm-12"></div>
            </div>
        
        <div class="row">
            <div class="col-sm-3"><br>
                <h5 class="time_strip"><strong>10:00 AM to 12:00 PM IST</strong></h5>
            </div>
            <div class="col-sm-9">
                
                <div class="session-details col-sm-12" style="border:0">
                    <br> 
                    <a href="meanhack.php">
                        <h4 style=" margin-top:10px;"><strong> <font color="#00aae7">MEANHack @ Digital Summit 2016(Continues) </font></strong></h4>
                    </a>
                    <br> 
                    <a href="summit-venues.php">
                        <h4 class="location-head"><i>  @ Miracle Heights(Rushikonda)</i></h4>
                    </a>
                    <br><p class="methodText">
                        30 Teams, 24 hours and 3 Winners! 150 students take on technology and ideas to showcase themselves off to the world. From building cognitive chat bots to mobile applications that make lives easier, these students will explore the depths of technology and digital transformation while getting a first hand look at the new world. Thanks to Miracle’s Innovation Labs for hosting MEANHack 2016.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3"><br>
                <h5 class="time_strip"><strong>9:30 AM to 5:00 PM IST</strong></h5>
            </div>
            <div class="col-sm-9">
                <div class="session-heading-g">
                    <div class="col-sm-12"></div>
                </div>
                 <a href="jobfair/job_fair.php">
                        <h4 style=" margin-top:10px;"><strong>  <font color="#00aae7">Digital Job Fair Day #2 </font> </strong></h4>
                    </a>
               
                    <a href="summit-venues.php">
                        <h4 class="location-head"><i>@ AU Engineering College and AU Convocation Hall(Andhra University)</i></h4>
                    </a>
                    <br>
                    
            </div>
            </div>
            <div class="row">
                <div class="col-sm-3"><br>
                     <h5 class="time_strip"><strong>5:30 PM to 8:30 PM IST</strong></h5>
                </div>
                <div class="col-sm-9">
                    <div class="session-heading-g">
                    <div class="col-sm-12"></div>
                </div>
                    <a href="culturals.php">
                        <h4 style=" margin-top:10px;"><strong> <font color="#00aae7"> Celebration Night @ Digital Summit 2016   </font></strong></h4>
                    </a>
                    
                    <a href="summit-venues.php">
                        <h4 class="location-head"><i> @ AU Convocation Hall(Andhra University)</i></h4>
                    </a>
                    <br> 
                    <p class="methodText">
                        After a great week of learning, opportunities and networking it is finally time to loosen up and have some fun. Party through the night with your friends as we celebrate the success of Vishakhpatnam, Andhra Pradesh and Digital Transformation. Also come and greet the winners of MEANHack 2016 and Hungama 2016. 
                    </p>
                    
                </div>
                    
                    
            </div>
        </div>
        
        <!--saturday-->
                    
                    
                </div>
            </div>
        </div>
        <br>
        </div></div></div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <div class="uparrow" id="uparrow"><i class="fa fa-3x fa-angle-up" aria-hidden="true"></i></div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.4/waypoints.min.js"></script>
        <script>
            $(document).ready(function () {
                $(function () {
                    $('.item').matchHeight();
                });
            
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
        <?php include '../footer.php'; ?>
    </body>
</html>