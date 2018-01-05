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
                border: 3px solid #00a79b;
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
            .font-cond-b {
                font-weight: 700 !important;
            }
            
            .parallax{
    background-image:url('../images/agenda-paralx.png');
    background-attachment:fixed;
    background-size:cover;
    background-position:center;
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
         
            </div></div>
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
            <div class="row" style="max-width:1000px;margin:0 4%">
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6">

                </div>

                <!--                    <div class="col-sm-12">
                                        <div class="row session-date"><div class="col-xs-12"><h3>Monday, Dec 12</h3></div></div>
                
                                    </div>-->

                <div class="row session-heading">
                    <div class="col-sm-12 text-center" style=""><p>Monday, December 12th</p></div>
                </div>

                <div class="row session session-break">
                    <div class="col-md-3">
                        <div class="col-sm-12 location">  <i class="fa fa-1x fa-map-marker" aria-hidden="true"></i>AU Convocation Hall</div>
                        <div class="col-sm-12">  <h5 class="time_strip"><strong>9:00AM &ndash; 10:30AM</strong></h5></div>

                    </div>

                    <div class="col-md-9"><div class="session-details col-sm-12" style="border:0"><h4>Digital Summit - Key Note</h4><div class="description">
                                <br>
                                <strong>  Speakers:</strong>
                                <div class="wpb_wrapper"> 
                                    <div class=" ">
                                        <!--    <div class="mgb-40 padb-30 auto-invert line-b-4 align-center">
                                                <h4 class="font-cond-l fg-accent lts-md mgb-10" contenteditable="false">Not Yet Convinced?</h4>
                                                <h1 class="font-cond-b fg-text-d lts-md fs-300 fs-300-xs no-mg" contenteditable="false">Read Customer Reviews</h1>
                                            </div>-->
                                        <ul class="hash-list cols-3 cols-1-xs pad-30-all align-center text-sm">
                                            <li>
                                                <img  src="<?= url ?>/images/profile_pics/cm.jpg"  class="wpx-100  mgb-20 " title="" alt="" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">
                                      <!--          <p class="fs-110 font-cond-l" contenteditable="false">" Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae. "</p>-->
                                                <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Shri Nara Chandrababu Naidu</h5>
                                                <small class="font-cond case-u lts-sm fs-80 fg-text-l" contenteditable="false">State Chief Minister - AP,India.</small>
                                            </li>
                                            <li>
                                                <img src="<?= url ?>/images/profile_pics/IT_min.jpg" class="wpx-100  mgb-20" title="" alt="" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">

                                                <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false"> Shri Palle Raghunatha Reddy</h5>
                                                <small class="font-cond case-u lts-sm fs-80 fg-text-l" contenteditable="false">State IT Minister- AP,India.</small>
                                            </li>
                                            <li>
                                                <img src="<?= url ?>/images/profile_pics/chikki.jpg" class="wpx-100   mgb-20" title="" alt="" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">

                                                <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Chanakya Lokam</h5>
                                                <small class="font-cond case-u lts-sm fs-80 fg-text-l" contenteditable="false">VP Innovation Labs,<br> Miracle Software Systems, Inc.</small>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div></div></div>
                </div>

                <div class="row session session-break session-details"><div class="col-md-3 item">
                        <div class="col-sm-12 location">  <i class="fa fa-1x fa-map-marker" aria-hidden="true"></i>AU Convocation Hall</div>
                        <div class="col-sm-12">   <h5 class="time_strip"><strong>10:30AM &ndash;11:30AM</strong></h5></div>

                    </div>
                    <div class="col-md-9 item"><div class=" col-sm-12"><h4>Digital Transformation Trends</h4><div class="description"><strong>Market Research Firm / Guest of Honor</strong><br>
                                <br>
                            </div></div></div>
                </div>

                <div class="row session session-break session-details"><div class="col-md-3 item">
                        <div class="col-sm-12 location">  <i class="fa fa-1x fa-map-marker" aria-hidden="true"></i>AU Convocation Hall</div>
                        <div class="col-sm-12">   <h5 class="time_strip"><strong>12:00AM &ndash; 1:30AM</strong></h5></div>

                    </div>
                    <div class="col-md-9 item"><div class=" col-sm-12"><h4>  Lunch Break</h4><div class="description">

                            </div></div></div>
                </div>




                <div class="row session session-break session-details"><div class="col-md-3">
                        <div class="col-sm-12 location">  <i class="fa fa-1x fa-map-marker" aria-hidden="true"></i>Miracle Heights</div>
                        <div class="col-sm-12">  <h5 class="time_strip"><strong>2:00PM  &ndash; 2:45PM </strong></h5></div>

                    </div>
                    <div class="col-md-9">
                        <div class=" col-sm-12"><h4> DevOps Journey</h4><div class="description">
                                <strong> 
                                    Speaker : Bharathi Ramachandran</strong><br>
                                <!--   <br>DevOps = Deveopment + Operations.<br>
                                  Server Provisioning, Application Provisioning,<br>
                                  Application Deployment, Application Build,<br>
                                  Application Testing, Application Load Testing,<br>
                                  Application Performance Management - all being integrated into the Agile
                                  Development.
                                  <br>
                                  <strong> Tools:</strong><br>
                                  IBM UrbanCode<br>
                                  Jenkins + Chef/Puppet<br>
                                  QA Automation<br> Performance Testing and<br> Source Code / Configuration
                                  Management Platforms - All Integrated end to end.
                              </div>-->
                                <div class="">
                                    <div class="wpb_wrapper"> 
                                        <img class="alignleft" title="Michael Salamon - Lousy" src="<?= url ?>/images/speakers/images.jpg" alt="Michael Salamon - Lousy" width="90" height="90"><p></p>
                                        <h4><strong>Devops Journey : Lean &amp; Mean</strong></h4>
                                        <h5><span style="text-decoration: underline;">Bharathi Ramachandran | Vice-president &amp; DevOps Delivery</span></h5>
                                        <p> As digital marketers and strategists, our careers depend on facilitating and driving the vision to the rest of the team.</p>

                                        <div class="read-more-content active-read-more-content"><p>The focus of this workshop is on understanding the current consumer and anticipating the consumer of the near future. Specifically, this session focuses on understanding a consumer who is empowered, participatory and discriminating and thinking about how they behave across platforms.</p><p>By investigating the shift in the traditional Consumer Decision Journey,</p><p>In this session you will understand:</p><ul>
                                                <li>DevOps = Deveopment + Operations.</li>
                                                <li>Server Provisioning, Application Provisioning</li>
                                                <li>Application Deployment, Application Build,</li>
                                                <li>Application Testing, Application Load Testing,</li>
                                                <li> Application Performance Management - all being integrated into the Agile
                                                    Development.</li>
                                            </ul></div>




                                        <p class="read-more-btn active-read-more-btn">Tools</p></div>
                                    <ul>
                                        <li>IBM UrbanCode.</li>
                                        <li>Jenkins + Chef/Puppet</li>
                                        <li>QA Automation</li>
                                        <li>Performance Testing and</li>
                                        <li> Source Code / Configuration Management Platforms - All Integrated end to end. </li>
                                    </ul>
                                </div>
                            </div></div>
                    </div>
                    <div class=" ">
                        <div class="row">
                            <!--                        <div class=" col-sm-12">
                                                        <div class="wpb_wrapper"> 
                                                            <img class="alignleft" title="Michael Salamon - Lousy" src="<?= url ?>/images/images.jpg" alt="Michael Salamon - Lousy" width="90" height="90"><p></p>
                                                            <h4><strong>Devops Journey: Lean &amp; Mean</strong></h4>
                                                            <h5><span style="text-decoration: underline;">Bharathi Ramachandran | Vice-president &amp; DevOps Delivery</span></h5>
                                                            <p>  But ecosystem design is hard, and successful campaigns typically cross a wide section of �silos�. As digital marketers and strategists, our careers depend on facilitating and driving the vision to the rest of the team.</p>
                            
                                                            <div class="read-more-content active-read-more-content"><p>The focus of this workshop is on understanding the current consumer and anticipating the consumer of the near future. Specifically, this session focuses on understanding a consumer who is empowered, participatory and discriminating and thinking about how they behave across platforms.</p><p>By investigating the shift in the traditional Consumer Decision Journey,</p><p>In this session you will understand:</p><ul>
                                                                    <li>DevOps = Deveopment + Operations.</li>
                                                                    <li>Server Provisioning, Application Provisioning</li>
                                                                    <li>Application Deployment, Application Build,</li>
                                                                    <li>Application Testing, Application Load Testing,</li>
                                                                    <li> Application Performance Management - all being integrated into the Agile
                                                            Development.</li>
                                                                </ul></div>
                            
                            
                            
                            
                                                            <p class="read-more-btn active-read-more-btn">Tools</p></div>
                                                            <ul>
                                                                    <li>IBM UrbanCode.</li>
                                                                    <li>Jenkins + Chef/Puppet</li>
                                                                    <li>QA Automation</li>
                                                                    <li>Performance Testing and</li>
                                                                    <li> Source Code / Configuration Management Platforms - All Integrated end to end. </li>
                                                                </ul>
                                                    </div>-->


                        </div>
                    </div>
                    <div class="row session session-break session-details"><div class="col-md-3">
                            <div class="col-sm-12 location">  <i class="fa fa-1x fa-map-marker" aria-hidden="true"></i>Miracle Heights</div>
                            <div class="col-sm-12">   <h5 class="time_strip"><strong>3:00PM &ndash; 4:00PM</strong></h5></div>

                        </div>
                        <div class="col-md-9"><div class=" col-sm-12"><h4> Cloud Management, Morpheus</h4><div class="description">
                                    <strong>  Speakers : TBD.</strong>
                                    <div class="wpb_wrapper"> 
                                        <img class="alignleft" title="Michael Salamon - Lousy" src="<?= url ?>/images/speakers/human.png" alt="Michael Salamon - Lousy" width="90" height="90"><p></p>
    <!--                                    <h4><strong>Devops Journey: Lean &amp; Mean</strong></h4>
                                        <h5><span style="text-decoration: underline;">Bharathi Ramachandran | Vice-president &amp; DevOps Delivery</span></h5>
                                        <p> As digital marketers and strategists, our careers depend on facilitating and driving the vision to the rest of the team.</p>-->







                                    </div>
                                </div></div></div>
                    </div>
                    <div class="row session session-break session-details"><div class="col-md-3  item">
                            <div class="col-sm-12 location">  <i class="fa fa-1x fa-map-marker" aria-hidden="true"></i>Miracle Heights</div>
                            <div class="col-sm-12">  <h5 class="time_strip"><strong>4:00PM &ndash; 4:15PM</strong></h5></div>

                        </div>
                        <div class="col-md-9 item"><div class="col-sm-12"><h4> Tea Break</h4><div class="description">

                                </div></div></div>
                    </div>

                    <div class="row session session-break session-details"><div class="col-md-3">
                            <div class="col-sm-12 location">  <i class="fa fa-1x fa-map-marker" aria-hidden="true"></i>Miracle Heights</div>
                            <div class="col-sm-12">  <h5 class="time_strip"><strong>4:15PM &ndash; 5:00PM</strong></h5></div>

                        </div>
                        <div class="col-md-9"><div class="col-sm-12"><h4> Cognitive Computing</h4><div class="description">
                                    <strong> 
                                        Speaker : Monika, Miracle Innovation Labs</strong> 
                                </div>
                                <div class="wpb_wrapper"> 
                                    <img class="alignleft" title="Michael Salamon - Lousy" src="<?= url ?>/images/speakers/monica.jpg" alt="Michael Salamon - Lousy" width="90" height="90"><p></p>
    <!--                                <h4><strong>Devops Journey: Lean &amp; Mean</strong></h4>
                                    <h5><span style="text-decoration: underline;">Bharathi Ramachandran | Vice-president &amp; DevOps Delivery</span></h5>
                                    <p> As digital marketers and strategists, our careers depend on facilitating and driving the vision to the rest of the team.</p>
    
                                    <div class="read-more-content active-read-more-content"><p>The focus of this workshop is on understanding the current consumer and anticipating the consumer of the near future. Specifically, this session focuses on understanding a consumer who is empowered, participatory and discriminating and thinking about how they behave across platforms.</p><p>By investigating the shift in the traditional Consumer Decision Journey,</p><p>In this session you will understand:</p><ul>
                                            <li>DevOps = Deveopment + Operations.</li>
                                            <li>Server Provisioning, Application Provisioning</li>
                                            <li>Application Deployment, Application Build,</li>
                                            <li>Application Testing, Application Load Testing,</li>
                                            <li> Application Performance Management - all being integrated into the Agile
                                                Development.</li>
                                        </ul></div>-->





                                </div>
                            </div>
                        </div>
                    </div>
                    <!--                    <div class="col-sm-12">
                                            <div class="row session-date"><div class="col-xs-12"><h3>Tuesday, Dec 13</h3></div></div>
                    
                                        </div>-->
                    <div class="row session-heading">
                        <div class="col-sm-12 text-center" style=""><p> Tuesday, Dec 13</p></div>
                    </div>


                    <div style="line-height: 50px; height: 50px;" class="gap"></div>


                    <div class="row session session-break session-details"><div class="col-md-3">
                            <div class="col-sm-12 location">  <i class="fa fa-1x fa-map-marker" aria-hidden="true"></i>Miracle Heights</div>
                            <div class="col-sm-12">   <h5 class="time_strip"><strong>9:30AM &ndash; 9:45AM</strong></h5></div>

                        </div>
                        <div class="col-md-9"><div class=" col-sm-12"><h4>Cloud Deployment</h4><div class="description">
                                    <strong> 
                                        Virtual Machines to Containers
                                    </strong> <br>
                                    <strong>  Speakers : TBD.</strong>
                                    <div class="wpb_wrapper"> 
                                        <img class="alignleft" title="Michael Salamon - Lousy" src="<?= url ?>/images/speakers/human.png" alt="Michael Salamon - Lousy" width="90" height="90"><p></p>
    <!--                                    <h4><strong>Devops Journey: Lean &amp; Mean</strong></h4>
                                        <h5><span style="text-decoration: underline;">Bharathi Ramachandran | Vice-president &amp; DevOps Delivery</span></h5>
                                        <p> As digital marketers and strategists, our careers depend on facilitating and driving the vision to the rest of the team.</p>-->
                                    </div>
                                </div></div></div>
                    </div>
                    <div class="row session session-break session-details"><div class="col-md-3">
                            <div class="col-sm-12 location">  <i class="fa fa-1x fa-map-marker" aria-hidden="true"></i>Miracle Heights</div>
                            <div class="col-sm-12">   <h5 class="time_strip"><strong>9:45AM &ndash; 10:30AM</strong></h5></div>

                        </div>
                        <div class="col-md-9"><div class="col-sm-12"><h4>IBM Bluemix
                                </h4><div class="description">
                                    <strong>  Speakers : TBD.</strong>
                                    <div class="wpb_wrapper"> 
                                        <img class="alignleft" title="Michael Salamon - Lousy" src="<?= url ?>/images/speakers/human.png" alt="Michael Salamon - Lousy" width="90" height="90"><p></p>
    <!--                                    <h4><strong>Devops Journey: Lean &amp; Mean</strong></h4>
                                        <h5><span style="text-decoration: underline;">Bharathi Ramachandran | Vice-president &amp; DevOps Delivery</span></h5>
                                        <p> As digital marketers and strategists, our careers depend on facilitating and driving the vision to the rest of the team.</p>-->
                                    </div>
                                </div></div></div>
                    </div>
                    <div class="row session session-break session-details"><div class="col-md-3 item">
                            <div class="col-sm-12 location">  <i class="fa fa-1x fa-map-marker" aria-hidden="true"></i>Miracle Heights</div>
                            <div class="col-sm-12">    <h5 class="time_strip"><strong>10:30AM	 &ndash; 10:45AM</strong></h5></div>

                        </div>
                        <div class="col-md-9 item"><div class=" col-sm-12"><h4> Tea Break</h4><div class="description">

                                </div></div></div>
                    </div>
                    <div class="row session session-break session-details"><div class="col-md-3">
                            <div class="col-sm-12 location">  <i class="fa fa-1x fa-map-marker" aria-hidden="true"></i>Miracle Heights</div>
                            <div class="col-sm-12">    <h5 class="time_strip"><strong>10:45AM	 &ndash; 12:00PM	</strong></h5></div>

                        </div>
                        <div class="col-md-9"><div class="col-sm-12"><h4>IoT - Use Cases
                                </h4><div class="description">
                                    <strong>  Speakers : TBD.</strong>
                                    <div class="wpb_wrapper"> 
                                        <img class="alignleft" title="Michael Salamon - Lousy" src="<?= url ?>/images/speakers/human.png" alt="Michael Salamon - Lousy" width="90" height="90"><p></p>
    <!--                                    <h4><strong>Devops Journey: Lean &amp; Mean</strong></h4>
                                        <h5><span style="text-decoration: underline;">Bharathi Ramachandran | Vice-president &amp; DevOps Delivery</span></h5>
                                        <p> As digital marketers and strategists, our careers depend on facilitating and driving the vision to the rest of the team.</p>-->
                                    </div>
                                </div></div></div>
                    </div>
                    <div class="row session session-break session-details"><div class="col-md-3 item">
                            <div class="col-sm-12 location">  <i class="fa fa-1x fa-map-marker" aria-hidden="true"></i>Miracle Heights</div>
                            <div class="col-sm-12"> <h5 class="time_strip"><strong>12:00PM	 &ndash; 1:00PM	</strong></h5></div>

                        </div>
                        <div class="col-md-9 item"><div class="col-sm-12"><h4>Lunch Break</h4><div class="description">

                                </div></div></div>
                    </div>
                    <div class="row session session-break session-details"><div class="col-md-3">
                            <div class="col-sm-12 location">  <i class="fa fa-1x fa-map-marker" aria-hidden="true"></i>Miracle Heights</div>
                            <div class="col-sm-12">   	<h5 class="time_strip"><strong>1:00PM	 &ndash;2:00PM	</strong></h5></div>

                        </div>
                        <div class="col-md-9"><div class="col-sm-12"><h4>Mobile Application Development Trends
                                </h4><div class="description">
                                    <strong>  Speakers : TBD.</strong>
                                    <div class="wpb_wrapper"> 
                                        <img class="alignleft" title="Michael Salamon - Lousy" src="<?= url ?>/images/speakers/human.png" alt="Michael Salamon - Lousy" width="90" height="90"><p></p>
        <!--                                <h4><strong>Devops Journey: Lean &amp; Mean</strong></h4>
                                        <h5><span style="text-decoration: underline;">Bharathi Ramachandran | Vice-president &amp; DevOps Delivery</span></h5>
                                        <p> As digital marketers and strategists, our careers depend on facilitating and driving the vision to the rest of the team.</p>-->
                                    </div>
                                </div></div></div>
                    </div>
                    <div class="row session session-break session-details"><div class="col-md-3">
                            <div class="col-sm-12 location">  <i class="fa fa-1x fa-map-marker" aria-hidden="true"></i>Miracle Heights</div>
                            <div class="col-sm-12">   <h5 class="time_strip"><strong>2:00PM &ndash;3:00PM	</strong></h5></div>

                        </div>
                        <div class="col-md-9"><div class="col-sm-12"><h4>Mobile Application Security & Architectures
                                </h4><div class="description">
                                    <strong>  Speakers : TBD.</strong>
                                    <div class="wpb_wrapper"> 
                                        <img class="alignleft" title="Michael Salamon - Lousy" src="<?= url ?>/images/speakers/human.png" alt="Michael Salamon - Lousy" width="90" height="90"><p></p>
        <!--                                <h4><strong>Devops Journey: Lean &amp; Mean</strong></h4>
                                        <h5><span style="text-decoration: underline;">Bharathi Ramachandran | Vice-president &amp; DevOps Delivery</span></h5>
                                        <p> As digital marketers and strategists, our careers depend on facilitating and driving the vision to the rest of the team.</p>-->
                                    </div>
                                </div></div></div>
                    </div>
                    <div class="row session session-break session-details"><div class="col-md-3 item">
                            <div class="col-sm-12 location">  <i class="fa fa-1x fa-map-marker" aria-hidden="true"></i>Miracle Heights</div>
                            <div class="col-sm-12">   <h5 class="time_strip"><strong>3:00PM &ndash;3:30PM	</strong></h5></div>

                        </div>
                        <div class="col-md-9 item"><div class="col-sm-12"><h4>
                                    Tea Break</h4><div class="description">

                                </div></div></div>
                    </div>
                    <div class="row session session-break session-details"><div class="col-md-3">
                            <div class="col-sm-12 location">  <i class="fa fa-1x fa-map-marker" aria-hidden="true"></i>Miracle Heights</div>
                            <div class="col-sm-12">   <h5 class="time_strip"><strong>3:30PM &ndash;4:30PM	</strong></h5></div>

                        </div>
                        <div class="col-md-9"><div class="col-sm-12"><h4>
                                    Big Data and Predictive Analytics
                                </h4><div class="description">
                                    <strong>  Speakers : TBD.</strong>
                                    <div class="wpb_wrapper"> 
                                        <img class="alignleft" title="Michael Salamon - Lousy" src="<?= url ?>/images/speakers/human.png" alt="Michael Salamon - Lousy" width="90" height="90"><p></p>
        <!--                                <h4><strong>Devops Journey: Lean &amp; Mean</strong></h4>
                                        <h5><span style="text-decoration: underline;">Bharathi Ramachandran | Vice-president &amp; DevOps Delivery</span></h5>
                                        <p> As digital marketers and strategists, our careers depend on facilitating and driving the vision to the rest of the team.</p>-->
                                    </div>
                                </div></div></div>
                    </div>
                    <div class="row session session-break session-details"><div class="col-md-3">
                            <div class="col-sm-12 location">  <i class="fa fa-1x fa-map-marker" aria-hidden="true"></i>Miracle Heights</div>
                            <div class="col-sm-12">   <h5 class="time_strip"><strong>4:30PM &ndash;5:30PM  	</strong></h5></div>

                        </div>
                        <div class="col-md-9"><div class="col-sm-12"><h4>
                                    IBM Watson vs Google Analytics vs Microsoft vs Amazon
                                </h4><div class="description">
                                    <strong>  Speakers : TBD.</strong>
                                    <div class="wpb_wrapper"> 
                                        <img class="alignleft" title="Michael Salamon - Lousy" src="<?= url ?>/images/speakers/human.png" alt="Michael Salamon - Lousy" width="90" height="90"><p></p>
        <!--                                <h4><strong>Devops Journey : Lean &amp; Mean</strong></h4>
                                        <h5><span style="text-decoration: underline;">Bharathi Ramachandran | Vice-president &amp; DevOps Delivery</span></h5>
                                        <p> As digital marketers and strategists, our careers depend on facilitating and driving the vision to the rest of the team.</p>-->
                                    </div>
                                </div></div></div>
                    </div>
                    <div class="row session-heading">
                        <div class="col-sm-12 text-center" style=""><p> Friday, Dec 16 and Saturday, Dec 17</p></div>
                    </div>
                    <div class="row session session-break">
                        <div class="col-md-3" style="margin: 0px 0px 35px;">
                            <div class="  location">   <font><i class="fa fa-1x fa-map-marker" aria-hidden="true"></i></font>Miracle Heights,</div>  
                            <b> SEZ, Hill No.1 ,</b> <br>
                            <b>
                                Rushikonda,  
                            </b>

                            <br>
                            <b>Visakhapatnam,</b><br>
                            <b>
                                AP, India
                            </b><br>
                            <br>
                            <b>Friday, 9:00AM - 7:00PM</b> <br>
                            <b>
                                Saturday, 9:00AM - 2:00PM
                            </b>
                            <br>
                        </div>
                        <!--                        <div class="col-md-3">
                                                    <div class=" location">  <div class="pull-left col-sm-1"><i class="fa fa-1x fa-map-marker" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="pull-left col-sm-10">Miracle Heights,<br> IT SEZ, Hill No.1 ,<br> Rushikonda, Visakhapatnam, AP, India<br>
                                                            <b style="margin:1%;white-space: nowrap">Friday, 9:00AM to 7:00PM<br> Saturday, 9:00AM to 2:00PM							</b></div></div>
                        
                                                </div>-->

                        <div class="col-md-9"><div class="col-sm-12"><h4>
                                    Digital Hackathon
                                </h4><div class="description">
                                    <strong>
                                        Overview :
                                    </strong>
                                    <div class="description">   Each Team that will be participating in this hackathon will consist of 1 to 4 People and they will be responsible for building 	a Mobile / Web Application using Node.Js, Angular, Rest API  and No SQL Database and any showcasing of DevOps activities / Best Practices will be awarded additional marks.</div>
                                    <br>
                                    The team will have to come with their own laptops and will have to build the applications end to end within the time limit given from 10:30AM to 2:00PM the following day.
                                </div>
                                <strong>Selection Committee :</strong>
                                <div class="description">
                                    The Selection Committee will be reviewing all the teams as they are collaborating and working on the application and will be making observations and taking notes to be to be able to select the top 10 teams..
                                </div>
                                <strong>
                                    Prizes :
                                </strong>
                                <div class="description">  Several Awards will be given to the best teams and there are several lakhs of rupees worth of awards that will be given at the closing ceremony on Saturday, December 17, 2016.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="uparrow" id="uparrow"><i class="fa fa-3x fa-angle-up" aria-hidden="true"></i></div>



        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>



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
