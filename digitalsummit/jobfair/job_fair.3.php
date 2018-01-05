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

     
            <div class="container">
                <div class="row">
                   
                        <div class="col-sm-12">
                    <h2 style="color:#0d416b"><strong>Available Positions</strong></h2>
                    <p>With almost 5000 Students attending the Digital Summit. This Job Fair happening over 2 days will bring out many  companies ranging from local startups to multi national companies with almost 1200 positions this is going to be the biggest job fair ever held in the IT industry.</p>
                            </div>
                 </div>
            <br>      
<div class="row">
<div class="col-sm-12">
    <table class="table">
        <thead>
            <tr><th>Company</th><th>Job Title</th><th>Eligibility</th>
                <th>Location</th></tr>
        </thead>
        <tbody>
            <tr>
                <td style="width:150px;"><img src="../../images/logo-black.png"></td>
                <td><strong>Software Fresher</strong></td>
                <td><p>2015/2016/2017 Pass outs.</p>
                    <p> B.Tech (CSE/IT/ECE), MCA - 65% marks. No backlogs</p>
                </td>
                <td>Visakhapatnam</td>
            </tr>
            <tr>
                <td style="width:150px;"><img src="../../images/logo-black.png"></td>
                <td><strong>PMO Executives</strong></td>
                <td><p>Any Degree/MBA 2014/2015/2016 passouts.</p>
                </td>
                <td>Visakhapatnam</td>
            </tr>
        </tbody>
        
        
    </table>
    
    
</div>


<div class="col-sm-12"><br></div>
 

          
 </div>           
 </div> <br><br>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.4/waypoints.min.js"></script>
<style>
    tr:hover{border:5px solid #00aae7;}
    tr{background:white;font-size:16px;}
    thead>tr{background:#00aae7;color:#FFF;font-weight:bold;border:5px solid #00aae7;font-size:16px;}
</style>
        <?php include '../footer.php'; ?>
    </body>
</html>

