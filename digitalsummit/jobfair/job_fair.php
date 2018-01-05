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
                color:#53bce8 ;
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
                color:#53bce8  !important;
            }

            .current_tab8:hover{
                color:#53bce8  !important;
            }

            .current_tab10{
                color:#53bce8  !important;
            }
            
             .parallax{
                background-image:url('../images/banner/jobfair-header.png');
                background-attachment:fixed;
                background-size:cover;
                background-position:center;
            }
            .nomargintop{
    margin-top:-5px !important;
}
        </style>

        <script>
            $(document).ready(function () {
                $(".current_tab1 >  a").css("color", "#333");

                $(".current_tab8").css("color", "#53bce8");
                $("#schedule_tab").addClass(".current_tab8");

            });
        </script>
    </head>
    <?php include '../header.php'; ?>
    <body class="home">




        <div style="clear:both;" class="clearfix"></div>

        <!-- /Header -->

        <!-- Intro -->

        <div clas="row">
            <!-- TIMER -->

            <!-- end timer-area --> 

        </div>

        <!-- /Intro-->

        <section class="parallax">
            <div class="overlay">
                <div class="container">

                    <div class="row" style="margin-top:40px; margin-bottom:45px;">

                        <div class="col-sm-6 text-left">
                                                                                                                                                                                                                    
                            <h1 style="color:#fff"><strong>Job Fair</strong></h1>
                        </div>
                        <div class="col-sm-6 text-right">
                            <ul class="breadcrumb pull-right">
                                <li><a href="../"><font color="#fff">Home</font></a></li>

                                <li class="active"><font color="#fff"><strong>Job Fair</strong></font></li>
                            </ul>
                        </div>

                    </div>

                </div></div>
        </section>

        <div class="">


            <div class="container">
                <div class="row" style="max-width:1000px;margin:0 9%">
                    <div class="row">
                        <div class="col-sm-12 text-left">
                            <h2 style="color:#0d416b"><strong>Available Positions</strong></h2>
                            </div>
                        
                       
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><hr class="nomargintop"></div>
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4"></div>
                    </div>

                    <!--                    <div class="col-sm-12 session-details ">
                                            <div class="col-sm-6">
                                                <i class="fa fa-1x fa-user" aria-hidden="true"></i> HR Managers<br> 
                                                <i class="fa fa-1x fa-user" aria-hidden="true"></i> Facilities Managers <br>
                                                <i class="fa fa-1x fa-user" aria-hidden="true"></i> Freshers (Software) <br>
                                                <i class="fa fa-1x fa-user" aria-hidden="true"></i>Freshers(Marketing)<br>
                                                <i class="fa fa-1x fa-user" aria-hidden="true"></i>Freshers(HR)<br>
                                                <i class="fa fa-1x fa-user" aria-hidden="true"></i>Freshers(Accounting)<br>
                                                <i class="fa fa-1x fa-user" aria-hidden="true"></i> Software Engineers<br> 
                                                <i class="fa fa-1x fa-user" aria-hidden="true"></i>.NET Developers<br>
                                            </div>
                                            <div class="col-sm-6">
                    
                                                <i class="fa fa-1x fa-user" aria-hidden="true"></i>PHP Developers<br>
                    
                                                <i class="fa fa-1x fa-user" aria-hidden="true"></i>Creative Designer (PhotoShop ) <br>
                                                <i class="fa fa-1x fa-user" aria-hidden="true"></i> Network Engineers<br>
                                                <i class="fa fa-1x fa-user" aria-hidden="true"></i>System Administrators<br>
                                                <i class="fa fa-1x fa-user" aria-hidden="true"></i>Database Administrators.
                                            </div>
                                        </div>-->
                    <!--                    <div class="col-sm-12">
                                            <div class="row session-date"><div class="col-xs-12"><h3>Monday, Dec 12</h3></div></div>
                    
                                        </div>-->


                    <div class="row">

                        <div class="col-sm-12">
                            <div class="subSectionTitle"><strong></strong></div>
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Eligibility</th>
                                        <th>Requirements</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td><span id="id">1</span></td>
                                        <td><strong><span id="jobTitle">Software Fresher </span></strong></td>
                                        <td><span id="qualification"><ul>
                                                    <li>2015/2016/2017 Pass outs.</li>
                                                    <li> B.Tech (CSE/IT/ECE), MCA - 65% marks. No backlogs</li>
                                                    

                                                </ul></span></td>
                                        <td><span id="requirements"><ul>
                                                    <li>
                                                        Work on various Technologies.
                                                    </li>
                                                    <li>
                                                        Prepares solutions by determining and designing system specifications, standards, and programming.
                                                    </li>
                                                    <li>
                                                        Explore on different domains (i.e. Banking, Retail, Healthcare etc.)
                                                    </li>

                                                    <li>
                                                        Provides reliable solutions to a variety of problems using problem solving approaches.
                                                    </li>
                                                    <li>Knowledge in Core Java is must.</li>
                                                    <li>Certification in Java is added advantage.</li>
                                                </ul> </span></td>
                                    </tr>

                                    <tr>
                                        <td><span id="id">2</span></td>
                                        <td><strong><span id="jobTitle">PMO Executives</span></strong></td>
                                        <td><span id="qualification">Any Degree/MBA 2014/2015/2016 passouts.</span></td>
                                        <td><span id="requirements"> <ul><li>Work in US time zone. </li>
                                                    <li>Excellent English Communication Skills.</li>
                                                    <li>Versatile with using the MS Office Tools.</li>
                                                    <li>Fresher/experienced are eligible to apply.</li>
                                                </ul></span></td>
                                    </tr>

                                    <tr>
                                        <td><span id="id">3</span></td>
                                        <td><strong><span id="jobTitle">US-IT Sales</span></strong></td>
                                        <td><span id="qualification">Any Degree/MBA - 2014/15/16 passouts are eligible</span></td>
                                        <td><span id="requirements">
                                                <ul>
                                                    <li>Work with the various Fortune 1000 Companies in USA</li>
                                                    <li>Coordinate with the US Team on Various Software Sales / Services Opportunities</li>
                                                    <li>Resell IBM / Oracle / Microsoft Software & Services</li>
                                                    <li>Software focused on IBM B2B / IBM BPM / IBM SOA / SAP / Oracle Products.</li>
                                                    <li>Should be interested in learning about USA Business Processes/ terminology</li>
                                                    <li>Location: MCity/MHeights</li>
                                                </ul>

                                            </span></td>
                                    </tr>

                                    <tr>
                                        <td><span id="id">4</span></td>
                                        <td><strong><span id="jobTitle">US-IT Recruitment</span></strong></td>
                                        <td><span id="qualification">
                                                <ul>
                                                    <li>   Any Degree/MBA/B.Tech(Who are interested in BDE side) 2014/2015/2016 pass outs.</li>
                                                   
                                                </ul>

                                            </span></td>
                                        <td><span id="requirements"><ul>
                                                    <li>     Excellent communication skills, creative skills, writing skills are a must, and knowledge in HTML/CSS is an added advantage.</li>
                                                    <li>Versatile with using the MS Office Tools. </li>
                                                    <li>Ready to work in US/UK time zones(night shifts).</li>
                                                    <li>Should be interested in learning about USA Business Processes / terminology.</li>
                                                     
                                                    <li>
                                                        Basic knowledge in Recruitment process is added advantage.
                                                    </li>
                                                    
                                                </ul> 


                                            </span></td>
                                    </tr>

                                    <tr>
                                        <td><span id="id">5</span></td>
                                        <td><strong><span id="jobTitle">PMO Executive </span></strong></td>
                                        <td><span id="qualification">Any Degree/MBA - 2014/15/16 passouts are eligible</span></td>
                                        <td><span id="requirements"><ul><li>Excellent communication skills </li>
                                                    <li>knowledge of MS Office Tools </li>
                                                    <li>flexibility with US shifts.</li>
                                                </ul> </span></td>
                                    </tr>

                                    <tr>
                                        <td><span id="id">6</span></td>
                                        <td><strong><span id="jobTitle">Soft Skills Trainer </span></strong></td>
                                        <td><span id="qualification">Any Degree/PG with 0 - 2 yrs of experience in teaching/training</span></td>
                                        <td><span id="requirements"><ul>
                                                    <li>       Communicative english, excellent comm. skills, and ability to carry out soft skills training for new hires are a must.</li>

                                                </ul> </span></td>
                                    </tr>



                                    <tr>
                                        <td><span id="id">7</span></td>
                                        <td><strong><span id="jobTitle">Business Development Executive </span></strong></td>
                                        <td><span id="qualification"><ul>
                                                    <li>Any Degree/MBA/B.Tech(Who are interested in BDE side) 2014/2015/2016 pass outs.</li>
                                                   
                                                </ul></span></td>
                                        <td><span id="requirements"><ul><li>Work with the various Fortune 1000 Companies in USA</li>
                                                    <li>Coordinate with the US Team on Various Software Sales / Services Opportunities
                                                    </li>
                                                    <li>Resell IBM / Oracle / Microsoft Software & Services</li>
                                                    <li>Software focused on IBM B2B / IBM BPM / IBM SOA / SAP / Oracle Products</li>
                                                    
                                                     <li>Excellent English Communication Skills.</li>
                                                    <li>Versatile with using the MS Office Tools.</li>
                                                    <li> Ready to work in US/UK time zones(night shifts).</li>
                                                    <li>Should be interested in learning about USA Business Processes / terminology.</li>
                                                    
                                                </ul></span></td>
                                    </tr>



<!--                                    <tr>
                                        <td><span id="id">13</span></td>
                                        <td><strong><span id="jobTitle">EDI Business Analyst </span></strong></td>
                                        <td><span id="qualification">6+ Years of experience, being good at communicating across functional areas at different levels</span></td>
                                        <td><span id="requirements">Sound knowledge on OpenText BizTalk mapper and process orchestration are a must. </span></td>
                                    </tr>-->

<!--  <tr>
<td><span id="id">1</span></td>
<td><strong><span id="jobTitle">Software Trainee</span></strong></td>
<td><span id="qualification">B.Tech with above 70%<br>MCA with above 75%</span></td>
<td><span id="requirements">Good knowledge in Java<br>Good Communication Skills<br>Analytical and Resoning Skills required</span></td>
</tr>
<tr>
<td><span id="id">2</span></td>
<td><strong><span id="jobTitle">Software Trainee</span></strong></td>
<td><span id="qualification">B.Tech with above 70%<br>MCA with above 75%</span></td>
<td><span id="requirements">Good knowledge in Java<br>Good Communication Skills<br>Analytical and Resoning Skills required</span></td>
</tr>
<tr>
<td><span id="id">3</span></td>
<td><strong><span id="jobTitle">Software Trainee</span></strong></td>
<td><span id="qualification">B.Tech with above 70%<br>MCA with above 75%</span></td>
<td><span id="requirements">Good knowledge in Java<br>Good Communication Skills<br>Analytical and Resoning Skills required</span></td>
</tr> -->
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-left">
                            <h2 style="color:#0d416b"><strong>Schedule</strong></h2>
                            </div>
                        
                       
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><hr class="nomargintop"></div>
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4"></div>
                    </div>
                    <div class="row session session-break session-details">
                        <div class="col-md-6">
                            <div class="  location">   <font><i class="fa fa-1x fa-map-marker" aria-hidden="true"></i></font>AU convocation hall</div>  
                            <b>Friday: 16th Dec, 2016</b> <br>
                            <b>9:30AM to 4:30PM</b> 

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
                            <div class="location">  <i class="fa fa-1x fa-map-marker" aria-hidden="true"></i>AU convocation hall</div>
                            <b>Saturday: 17th Dec, 2016</b> <br> 
                            <b>9:30AM to 4:30PM</b> 

                        </div>
                        <div class="col-md-6"><div class="">
                                <div class=" ">
                                    <font>        <i class="fa fa-circle" aria-hidden="true"> </i></font>Job Fair<br>
                                    <font>     <i class="fa fa-circle" aria-hidden="true"></i></font>There will be between 20 and 50 IT Companies onsite to do candidate screening and selection.<br>


                                </div></div></div>

                    </div>
                    <div class="gap" style="line-height: 10px; height: 10px;"></div>



                    <div class="uparrow" id="uparrow"><i class="fa fa-3x fa-angle-up" aria-hidden="true"></i></div>


                    <div class="row">
                        <div class="col-sm-offset-5 col-sm-2 pull-left">
                            <div class="btn-group">
                                <p class="">   <a href="../applicant.php" target="_blank"><input type="button" value="Submit Your Application" name="btnSubmit" id="btnSubmit" style="text-transform: none; padding: 10px;text-align: center" class="btn btn-primary m-t-10"/></a>

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sx-12 text-center" style="color:red;">*<font style="font-size:12px;color:red;">Please submit an Online Application before coming to the Job Fair .</font></div> 
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

            function urlCalling() {
                window.open("http://www.google.com", "_blank");
            }


        </script>
        <?php include '../footer.php'; ?>
    </body>
</html>

