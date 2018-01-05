<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Induction | Miracle</title>
      <link href="../../css/bootstrap.min.css" rel="stylesheet">
      <link href="../../css/font-awesome.min.css" rel="stylesheet">
      <link href="../../css/main.css" rel="stylesheet">
      <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="../../css/default.css" />
      <link rel="stylesheet" type="text/css" href="../../css/component.css" />
      <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
      <link href="/css/themes.css" rel="stylesheet">
      <link rel="shortcut icon" href="../../images/favicon.ico">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <style>
         
    
         .tinted-image {
         background-image:
          /* top, transparent red */
         linear-gradient(
         rgba(0, 0, 0, 0.55), 
         rgba(0, 0, 0, 0.55)
         ),
         /* your image */
         url('images/header.png');
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
         }
         label {
         font-weight: 600;
         }
         a{text-decoration:none !important;}
         .contact{border: solid 3px #00aae7 !important;border-radius: 3px !important;
         color: #00aae7 !important;display: inline-block;font-size: 17px;letter-spacing: 1px;
         margin-bottom: 5px;moz-border-radius: 3px;padding: 11px 59px;transition: all 0.5s ease;
         webkit-border-radius: 3px;background:#fff;font-weight:bolder;}
         .contact:hover{color:#00aae7;background: #232527;}
         .h4{color:#fff !important; }
         /* Widgets */
         .widget {background-color: #ffffff;margin-bottom: 10px;position: relative;border-radius: 2px;}
         .widget > .widget-content:first-child,.widget > .widget-image:first-child {
         border-top-right-radius: 2px;border-top-left-radius: 2px;}
         .widget > .widget-content:last-child {border-bottom-right-radius: 2px;border-bottom-left-radius: 2px;}
         .widget,.widget-content {display: block;-webkit-transition: all .1s ease-out;
         transition: all .1s ease-out;}
         
         .widget:active,.widget-content:active {text-decoration: none;-webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, .02);
         box-shadow: 0 1px 3px rgba(0, 0, 0, .02);-webkit-transform: translateY(0);transform: translateY(0);}
         .widget-image {height: 310px;overflow: hidden;position: relative;}
         .widget-image > img {min-width: 787px;}
         .widget-image.widget-image-bottom img {position: absolute;left: 0;bottom: 0;}
         .widget-image.widget-image-sm {height: 270px;}
         .widget-image.widget-image-xs {height: 175px;}
         .widget-image > i {position: absolute;right: 30px;bottom: 30px;color: #ffffff;
         font-size: 70px;opacity: .5;}
         .widget-image-content {position: absolute;top: 0;left: 0;right: 0;bottom: 0;padding: 15px 25px;
         background: rgba(0, 0, 0, .65);}
         .widget-content {padding: 1px;}
         .widget-content.widget-content-mini {padding-top: 7px;padding-bottom: 7px;}
         .widget-content.widget-content-full {padding: 0;}
         .widget-content.widget-content-full-top-bottom {padding-top: 0;padding-bottom: 0;}
         .widget-content .pull-left {margin-right: 20px;}
         .widget-content .pull-right {margin-left: 20px;}
         a.widget-content {display: block;}a.widget-content {display: block;}
         .widget-heading {margin: 10px 0;}
         .widget-icon {display: inline-block;width: 64px;height: 64px;line-height: 60px;
         margin: 5px;font-size: 20px;text-align: center;border-radius: 50%;
         background: rgba(0, 0, 0, .05);}
         .widget-icon.pull-left {margin: 5px 5px 5px 0;}.widget-icon.pull-right {margin: 5px 0 5px 5px;}
         .widget-icon .gi,.widget-icon .hi,.widget-icon .si,.widget-icon .fi {margin-top: -3px;}
         /* Full Background Image */
         img.full-bg {min-height: 100%;min-width: 1280px;width: 100%;height: auto;
         position: fixed;top: 0;left: 0;}
         img.full-bg.full-bg-bottom {top: auto;bottom: 0;}
         @media screen and (max-width: 1280px) {img.full-bg {left: 50%;margin-left: -640px;}}
         /* Content which contains floats */
         .content-float .pull-left {margin: 0 20px 20px 0;}
         .content-float .pull-right {margin: 0 0 20px 20px;}
         .content-float-hor .pull-left {margin-right: 20px;}
         .content-float-hor .pull-right {margin-left: 20px;}
         .themed-background {background-color: #00aae7 !important;}
         .themed-color-dark {color: #454e59 !important;}
         .themed-background-dark {
         background-color: #454e59 !important;
         }
         .breadcrumb {0px !important;}
         .text-dark, .text-dark:hover, a.text-dark, a.text-dark:hover, a.text-dark:focus {
         background-color: #232527;
         color: #fff !important;
         }
         .emerald{
         background-color:#0d416b !important;}
         }
         .list-group-item {
         position: relative;
         display: block;
         padding-top: 10px!important;
         padding-right: 5px!important;
         padding-bottom: 10px!important;
         padding-left: 5px!important;
         margin-bottom: -1px;
         background-color: #fff;
         border: 1px solid #ddd;
         }
         .micro{
         margin-top:3px !important;
         }
         .footer-nav-links a:hover,
         .footer-nav-links a:focus {
         color: #ffffff;
         background-color: #0d416b;
         -webkit-box-shadow: 0 2px 3px rgba(0, 0, 0, .46);
         box-shadow: 0 2px 3px rgba(0, 0, 0, .46);
         }
         .footer-nav-links a.social-twitter:hover,
         .footer-nav-links a.social-twitter:focus {
         background-color: #55acee!important;
         }
         .footer-nav-links a.social-facebook:hover,
         .footer-nav-links a.social-facebook:focus {
         background-color: #3b5998!important;
         }
         .footer-nav-links a.social-google-plus:hover,
         .footer-nav-links a.social-google-plus:focus {
         background-color: #dd4b39!important;
         }
         .footer-nav-links a.social-dribbble:hover,
         .footer-nav-links a.social-dribbble:focus {
         background-color: #ea4c89!important;
         }
         .footer-nav-links a.social-youtube:hover,
         .footer-nav-links a.social-youtube:focus {
         background-color: #b31217!important;
         }
         .footer-nav-links a.social-flickr:hover,
         .footer-nav-links a.social-flickr:focus {
         background-color: #ed1983!important;
         }
         .footer-nav-links a.social-linkedin:hover,
         .footer-nav-links a.social-linkedin:focus {
         background-color: #0077b5!important;
         }
      </style>
      <style type="text/css">
         .display-1 {font-size: 3rem !important;}
         .card {overflow:hidden;height:100% !important;}
         .card-block .rotate {z-index: 8;float: right;height: 100% !important;}
         .card-block .rotate i{color: rgba(20, 20, 20, 0.15);position:absolute;left:0;
         left: auto;right: -10px;bottom: 0;
         display: block;-webkit-transform: rotate(-44deg);
         -moz-transform: rotate(-44deg);-o-transform: rotate(-44deg);
         -ms-transform: rotate(-44deg);transform: rotate(-44deg);
         }
      </style>
      <style>
         a{text-decoration:none !important;}
         .contact{border: solid 3px #00aae7 !important;border-radius: 3px !important;
         color: #00aae7 !important;display: inline-block;font-size: 17px;letter-spacing: 1px;
         margin-bottom: 5px;moz-border-radius: 3px;padding: 11px 59px;transition: all 0.5s ease;
         webkit-border-radius: 3px;background:#fff;font-weight:bolder;}
         .contact:hover{color:#00aae7;background: #232527;}
         .h4{color:#fff !important; }
         /* Widgets */
         .widget {background-color: #ffffff;margin-bottom: 10px;position: relative;border-radius: 2px;}
         box-shadow: 0 1px 3px rgba(0, 0, 0, .02);-webkit-transform: translateY(0);transform: translateY(0);}
         .widget-image {height: 310px;overflow: hidden;position: relative;}
         .widget-image > img {min-width: 787px;}
         .widget-image.widget-image-bottom img {position: absolute;left: 0;bottom: 0;}
         .widget-image.widget-image-sm {height: 270px;}
         .widget-image.widget-image-xs {height: 175px;}
         .widget-image > i {position: absolute;right: 30px;bottom: 30px;color: #ffffff;
         font-size: 70px;opacity: .5;}
         .widget-image-content {position: absolute;top: 0;left: 0;right: 0;bottom: 0;padding: 15px 25px;
         background: rgba(0, 0, 0, .65);}
         .widget-content {padding: 8px;}
         .widget-content > a: {padding: 15px;}
         .widget-content.widget-content-mini {padding-top: 7px;padding-bottom: 7px;}
         .widget-content.widget-content-full {padding: 0;}
         .widget-content.widget-content-full-top-bottom {padding-top: 0;padding-bottom: 0;}
         .widget-content .pull-left {margin-right: 20px;}
         .widget-content .pull-right {margin-left: 20px;}
         .widget-heading {margin: 10px 0;}
         .widget-icon {display: inline-block;width: 64px;height: 64px;line-height: 60px;
         margin: 5px;font-size: 28px;text-align: center;border-radius: 50%;
         background: rgba(0, 0, 0, .05);}
         .widget-icon.pull-left {margin: 5px 5px 5px 0;}.widget-icon.pull-right {margin: 5px 0 5px 5px;}
         .widget-icon .gi,.widget-icon .hi,.widget-icon .si,.widget-icon .fi {margin-top: -3px;}
         /* Full Background Image */
         img.full-bg {min-height: 100%;min-width: 1280px;width: 100%;height: auto;
         position: fixed;top: 0;left: 0;}
         img.full-bg.full-bg-bottom {top: auto;bottom: 0;}
         @media screen and (max-width: 1280px) {img.full-bg {left: 50%;margin-left: -640px;}}
         /* Content which contains floats */
         .content-float .pull-left {margin: 0 20px 20px 0;}
         .content-float .pull-right {margin: 0 0 20px 20px;}
         .content-float-hor .pull-left {margin-right: 20px;}
         .content-float-hor .pull-right {margin-left: 20px;}
         .themed-background {background-color: #00aae7 ;}
         .themed-background-info {
         background-color: #5cafde !important;
         }
         .themed-color-dark {color: #454e59 !important;}
         .themed-background-dark {
         background-color: #454e59 !important;
         }
         .breadcrumb {margin:0px !important;}
         .breadcrumb li,.breadcrumb li a{color:#FFF !important;}
         .text-dark, .text-dark:hover, a.text-dark, a.text-dark:hover, a.text-dark:focus {
         background-color: #232527;
         color:#fff;
         }
         .card {border:0px !important;} 
         .emerald{background-color:#0d416b !important;width:100%;}
         .list-inline {
         margin-left: 0px!important;
         list-style: none;
         }
         .effect:hover{
            top:-5px;
         }
      </style>
   </head>
   <!--/head-->
   <?php include '../../headerm.php';?>
   <body>
      <section id="services" >
        
         <div class="emerald tinted-image">
            <div class="container ">
               <div class="row">
                  <br><br><br>
                  <div class="col-sm-6 text-left">
                     <h1 class="heavy micro">Induction </h1>
                  </div>
                  <div class="col-sm-6 text-right">
                     <ul class="breadcrumb pull-right">
                        <li><a href="../">Home</a></li>
                        <li><a href="../technologies/">Technologies</a></li>
                        <li class="active">Induction</li>
                     </ul>
                  </div>
               </div>
               </div>
            </div>
            <br>
         
      </section>
      <section id="services" class="container">
         <div class="row">
         <div class="col-sm-9">
            <div class="row">
               <div class="col-sm-12">
                  <br>
                  
                  <p class="methodText"><strong>Miracle Software Systems, Inc </strong>, founded in 1994, is a Global Systems Integrator specializing in ERP/ BPM (EAI/SOA) / B2B / Digital Experience Technologies and is a Minority Certified Private Business headquartered in Novi, MI – USA. Over the past twenty years, Miracle has helped numerous large and mid-sized businesses transition their IT to a Service Oriented Architecture, with IT Transformation Initiatives, deploying SAP / Oracle ERP Systems. Miracle has a global presence on four continents with multiple Global Development Centers spanning across the USA, Canada and India. Today, Miracle’s team includes 2000 IT Professionals with a projected targeted expansion to 2500 by the end of 2016.  </p>
                  <p class="methodText">Whether it is Internal Application to Application(A2A/EAI) Integration, Process Integration(BPM), Process Integration, or Business to Business Integration using EDI / Web Services, API Management, Machine to Machine (M2M) Communications, Internet of Things(IOT), Cloud Integration or Mobile Application Integration, Miracle is the Systems Integrator of Choice and the Thought Leader in this industry. Miracle has been and continues to be a leader in the niche space of Business Integration and SOA services over the past 21 Years with Premier Partnerships with companies such as SAP, IBM, Oracle and Microsoft. 

                  </p>
                  
                  <p class="methodText">Read more about us at,</p>
                  <p class="methodText"><strong><a href="http://www.miraclesoft.com/"><font color="#ef4048">www.miraclesoft.com</font></a></strong></p>
                             </div>
               <hr>
              
               <div class="col-sm-12">
                     <h1 class="heavy micro">Our Services</h1>
                       <div class="col-sm-6">
                    <ul>
                        <li>Architecture and Consulting</li>
                        <li>Application Management Services</li>
                        <li>Business Process Out-Sourcing</li>
                        <li>Cloud Integration and Infrastructure </li>
                        <li>Managed Services</li>
                        <li>Enterprise Mobilty Services</li>
                        <li>Recruitment(HCM) Services</li>
                     </ul>
                       </div>
                       <div class="col-sm-6">
                    <ul>
                        <li>QA/Testing Services</li>
                        <li>B2B/EDI and File Transfer Services</li>
                        <li>EAI/SOA Services</li>
                        <li>Data,Analytics and ETL Services </li>
                        <li>Enterprise IOT Solutions</li>
                        <li>Legacy Modernization Services</li>
                        <li>Software Sales and Renewals</li>
                     </ul>
                       </div>
                     
                  </div>
                 <div class="col-sm-12"><hr></div>
                      <div class="col-sm-6">
                     <h2 class="heavy micro">Miracle Headquarters</h2>
                     <p>45625, Grand River Avenue</p>
                     <p>Novi, Mi-48374 (USA)</p>
                     <p>Ph.248.350.1515</p>
                  </div> 
                  <div class="col-sm-6">
                     <h2 class="heavy micro">APAC Headquarters</h2>
                     <p>Hill #1 Chinna Rushikonda</p>
                     <p>Visakhapatnam, AP-IND</p>
                     <p>Ph.0891-6623556</p>
                  </div>
                  <div class="col-sm-6">
                     <h2 class="heavy micro">Asia Pacific Operations</h2>
                     <p>MIG-49, LB Colony(530017)</p>
                     <p>Visakhapatnam, AP-IND</p>
                     <p>Ph.0891-6696666</p>
                  </div>
                  <div class="col-sm-6">
                     <h2 class="heavy micro">Global Delivery Center</h2>
                     <p>Miracle City, Munjeru</p>
                     <p>Visakhapatnam, AP-IND</p>
                     <p>Ph.0891-6623556sss</p>
                  </div>
               <br>
               <div class="col-sm-12">
               <div class="bs-example">
                <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><strong>Miracle Corporate Achievements</strong></a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse ">
                <div class="panel-body">
                    <p class="methodText">Miracle Software Systems, Inc. has established itself as a leader and visionary in the IT space over the last 21 years and has achieved multiple awards and certifications to prove it. Our Teams have been recognized for their groundbreaking work in many fields and the company itself has been appreciated for the stability and growth shown over the last two decades.  <a class="linkText" href="http://www.miraclesoft.com/company/awards.php" target="_blank"><strong>Learn more.</strong></a></p>
                         <table class="table">
                             <thead>
                               <tr>
                               <th>Year</th>
                                <th>Achievement</th>
                               </tr>
                              </thead>
                              <tbody>
                              <tr>
                              <th scope="row">2015</th>
                             <td>Diamond sponsor for IBM Interconnect 2015</td>
                              </tr>
                             <tr>
                           <th scope="row">2015</th>
                              <td>Elite Exhibitors in SAP SAPPHIRENOW 2015</td>
                               </tr>
                             <tr>
                              <th scope="row">2014</th>
                              <td>NASSCOM Accreditation</td>
                            </tr>
                            <tr>
                              <th scope="row">2014</th>
                              <td>Recognized by SiliconIndia</td>
                            </tr>
                            <tr>
                              <th scope="row">2013</th>
                              <td>Recognized CIO Magazine</td>
                            </tr>
                            </tbody>
                            </table>
                             <p><strong>Miracle Community Activities</strong></p>
                             <p class="methodText">Recent Community activities Undertaken by Team Miracle:</p>
                             <table class="table">
                             <thead>
                               <tr>
                               <th>Date</th>
                                <th>Activity</th>
                               </tr>
                              </thead>
                              <tbody>
                              <tr>
                              <th scope="row">26th JAn 2015</th>
                             <td>Fight for cause,an event of books distribution to children in local schoolss</td>
                              </tr>
                             <tr>
                           <th scope="row">17th Dec 2014</th>
                              <td>A 2-Day Medical Camp in the villages around Bhogapuram</td>
                               </tr>
                             <tr>
                              <th scope="row">17th Dec 2014</th>
                              <td>Blood Donation Camp in Visakhapatnam</td>
                            </tr>
                            
                            </tbody>
                            </table>
                          </div>
                             </div>
                             </div>
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><strong>Office and Resource Usage Guidelines</strong></a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p><strong>Office - Dress Code</strong></p>
                                <p class="methodText">It is the company policy that each employee's dress, grooming and personal hygiene should be appropriate to the work environment.The following broad guildelines should be adhered to at all times. <a class="linkText" href="#" target="_blank"><strong>Learn more.</strong></a></p>
                            <p><strong>Office - Time & Breaks & Vacation</strong></p>
                                <div class="col-sm-12">
                                    
                                        <ul>
                        <li>Lock Your System and Switch-off the monitor before you leave your desk/go for a break.</li>
                        <li>No employee is allowed to go to the hostel/out of the office premises during office hours without the permission from your immediate superior.</li>
                        <li>During Lunch break, forward your IP number to your team member.</li>
                    </ul>
                                    
                                </div>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><strong>Workplace - Do's and Don'ts</strong></a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                    <p><strong>What to do</strong></p>
                 
                        <ul>
                        <li>Formal attire</li>
                        <li>Do file and secure all confidential information at close of business</li>
                    </ul>
         
                    <p><strong>What not to do</strong></p>
                     
                    <ul>
                        <li>Don't discuss business matters in public places</li> 
                         <li>Don't send large attachments of anything to corporate Groups like Wedding/Birthday Invites</li>
                    </ul>
                    
                    <p>  <a class="linkText" href="#" target="_blank"><strong>Learn more.</strong></a></p>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><strong>Us States with Time Zones</strong></a>
                </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>State</th>
                          <th>USPS</th>
                          <th>Capital</th>
                          <th>Pronunciation</th>
                        </tr>
                        <tr>
                                  <th></th>
                          <th></th>
                          <th></th>
                            <th>EST</th>
                            <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Connecticut</td>
                          <td>CT</td>
                          <td>Hartford</td>
                          <td>Ka-ne-di-cut</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Dealware</td>
                          <td>DE</td>
                          <td>Dover</td>
                          <td>Del-ware</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Florida</td>
                          <td>FL</td>
                          <td>Tallahassee</td>
                          <td>Flor-i-da</td>
                        </tr>
                        <tr>
                          <th scope="row">4</th>
                          <td>Georgia</td>
                          <td>GA</td>
                          <td>Atlanta</td>
                          <td>Jorj-a</td>
                        </tr>
                     <tr>
                          <th scope="row">5</th>
                          <td>Indiana</td>
                          <td>IN</td>
                          <td>Indianapolis</td>
                          <td>In-dee-a-na</td>
                        </tr>
                        <tr>
                          <th scope="row">6</th>
                          <td>Kentucky</td>
                          <td>KY</td>
                          <td>Frankfort</td>
                          <td>Keen-tuck-ee</td>
                        </tr>
                        <tr>
                          <th scope="row">7</th>
                          <td>Maine</td>
                          <td>ME</td>
                          <td>Augusta</td>
                          <td>Mane</td>
                        </tr>
                        <tr>
                          <th scope="row">8</th>
                          <td>Maryland</td>
                          <td>MD</td>
                          <td>Annapolis</td>
                          <td>Mare-a-Lind</td>
                        </tr>
                        <tr>
                          <th scope="row">9</th>
                          <td>Massachusetts</td>
                          <td>MA</td>
                          <td>Boston</td>
                          <td>Mass-a-chu-sets</td>
                        </tr>
                         <tr>
                          <th scope="row">10</th>
                          <td>Michigan</td>
                          <td>MI</td>
                          <td>Lansing</td>
                          <td>Mi-she-gan</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                </div>
            </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive"><strong>Phonetic Alphabets Table</strong></a>
                </h4>
            </div>
            <div id="collapseFive" class="panel-collapse collapse">
                <div class="panel-body">
                    <p class="methodText">A spelling alphabet is used to spell parts of a message containing letters and numbers to avoid confusion, because many letters sound similar, for instance "n" and "m" or "b" and "d"; the potential for confusion increases if static or other interference is present. For instance the message" proceed to map grid DH98" could be transmitted as "proceed to map grid Delta-Hotel-Niner-Ait". Using "Delta" instead of "D" avoids confusion between "BH98" and "DH98". The Unusual pronunciation of certain numbers was designed to reduce confusion. </p>
                <p class="methodText">The NATO phonetic alphabet, more accurately Known as the International Radiotelephony Spelling Alphabet and also called the ICAO phonetic or ICAO spelling alphabet, as well as the ITU phonetic alphabet, is the most widely used spelling alphabet.</p>
 <p class="methodText">The 26 code words in the NATO phonetic alphabet are assigned to the 26 letters of the English alphabet in alphabetical order.<a class="linkText" href="#" target="_blank"><strong>Learn more.</strong></a></p>
               
                <div class="col-sm-6">
                    <ul>
                    <li>A - Alpha</li>
                    <li>B - Bravo</li>
                    <li>C - Charlie</li>
                    <li>D - Delta</li>
                    <li>E - Echo</li>
                    <li>F - Foxtrot</li>
                    <li>G - Golf</li>
                    <li>H - Hotel</li>
                    <li>I - India</li>
                    <li>J - Juliet</li>
                    <li>K - Kilo</li>
                    <li>L - Lima</li>
                    <li>M - Mike</li>
                </ul>
                
                </div>
                
                <div class="col-sm-6">
                    <ul>
                    <li>N - November</li>
                    <li>O - Oscar</li>
                    <li>P - Papa</li>
                    <li>Q - Quebec</li>
                    <li>R - Romeo</li>
                    <li>S - Sierra</li>
                    <li>T - Tango</li>
                    <li>U - Uniform</li>
                    <li>V - Victor</li>
                    <li>W - Whisky</li>
                    <li>X - X-ray</li>
                    <li>Y - Yankee</li>
                    <li>Z - Zulu</li>
                </ul>
                </div>
               
                </div>
            </div>
        </div>
    </div>
	
</div>
            </div>
            </div>
            </div>
            <div class="col-sm-3">
         <center><img src="../../images/services/application-services.png" alt="logo"></center>
           <center> <p>Enterprise Application Integration</p></center>
            </div>
             <div class="col-sm-3">
         <center><img src="../../images/services/cloud-integration.png" alt="logo"></center>
           <center> <p>Business Process Management</p></center>
            </div> 
            <div class="col-sm-3">
         <center><img src="../../images/services/application-services.png" alt="logo"></center>
           <center> <p>Cloud Integration and Infrastructure </p></center>
            </div> 
            <div class="col-sm-3">
         <center><img src="../../images/services/cloud-integration.png" alt="logo"></center>
           <center> <p>Enterprise Mobility</p></center>
            </div>
            <div class="col-sm-3">
         <center><img src="../../images/services/application-services.png" alt="logo"></center>
           <center> <p>Big Data and Analytics </p></center>
            </div><div class="col-sm-3">
         <center><img src="../../images/services/cloud-integration.png" alt="logo"></center>
           <center> <p>B2B/EDI and Commerce </p></center>
            </div>
         </div>
         
       


                               		                                		
               
         </section>
         <link rel="stylesheet" href="../../css/box.css">
         
         <script src="js/query.js"></script>
         <script src="js/bootstrap.js"></script>
         
         
         <script src="js/jquery-2.2.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
        <script src="js/plugins.js"></script>
        
        <script src="js/app.js"></script>
         
         <br>
         
      </section>
      <!--/#about-us-->
      <?php include '../../footer.php';?>
   </body>
</html>