<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Miracle</title>


<meta name="viewport" content="width=device-width,initial-scale=1.0" />

 <link href="../../css/bootstrap.min.css" rel="stylesheet">
 
 <link href="../../css/font-awesome.min.css" rel="stylesheet">
      <link href="../../css/main.css" rel="stylesheet">
      
      <link rel="stylesheet" type="text/css" href="../../css/default.css" />
      <link rel="stylesheet" type="text/css" href="../../css/component.css" />
      
      
      <link rel="shortcut icon" href="../../images/favicon.ico">
       
<style>


         .breadcrumb {margin:0px !important;}
         .breadcrumb li,.breadcrumb li a{color:#FFF !important;}
         .text-dark, .text-dark:hover, a.text-dark, a.text-dark:hover, a.text-dark:focus {
         background-color: #232527;
         color:#fff;
         }
         .card {border:0px !important;} 
         .emerald{background-color:#0d416b !important;width:100%;padding-bottom:35px;}


input.ico-01 {
    background-position: 95.5% 20px;
}

input.ico-01 {
    background: #fff url("images/ico-01.png") no-repeat scroll 97% 20px/ 21px 21px;
}
.search-container input {
    font-weight: 500;
    font-size: 18px;
    float: left;
    box-sizing: border-box;
    padding: 19px 20px;
    border: none;
    margin-right: 2%;
    width: 44.5%;
    float: left;
}

input.ico-02 {
    background-position: 95% 20px;
}

input.ico-02 {
    background: #fff url("images/ico-02.png") no-repeat scroll 96% 20px/ 14px 21px;
}

.search-container button {
    background-color: #00aae7;
    color: #fff;
    border: none;
    cursor: pointer;
    font-size: 20px;
    box-sizing: border-box;
    text-align: center;
    height: 60px;
    width: 7%;
    position: relative;
    border-radius:4px;
}

.parallax {
    /* The image used */
  background-image: linear-gradient(
         rgba(0, 0, 0, 0.55), 
         rgba(0, 0, 0, 0.55)
         ),url("https://static.pexels.com/photos/7059/man-people-space-desk.jpg");
    /* Set a specific height */
    min-height:150px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

#popular-categories {
    margin: 1px 0 0 1px;
    display: block;
}
li {
   list-style:none !important;
}
#popular-categories li a {
    width: 25% !important;
    display: inline-block !important;
    border: 1px solid #e0e0e0 !important;
    float: left !important;
    margin: -1px 0 0 -1px !important;
    box-sizing: border-box !important;
    text-align: center !important;
    position: relative !important;
    background-color: #fff !important;
    font-size: 13px !important;
    text-transform: uppercase;
    color: #666 !important;
    padding: 70px 15px !important;
    max-height: 157px !important;
}

#popular-categories li a:hover::before {
    opacity: 1;
}
#popular-categories li:hover:{
    background-color:rgba(0,170,231,0.7) !important;
    
}
#popular-categories li a::after {
    content: "";
    width: 100%;
    height: 100%;
    display: inline-block;
    position: absolute;
    -webkit-box-shadow: 0px 0px 0px 1px rgba(80,80,80,0.7);
    -moz-box-shadow: 0px 0px 0px 1px rgba(80,80,80,0.7);
    box-shadow: 0px 0px 0px 1px rgba(80,80,80,0.7);
    top: 0;
    left: 1px;
    z-index: 101;
    opacity: 0;
}

#popular-categories li a::before {
    content: "";
    width: 100%;
    height: 100%;
    display: inline-block;
    position: absolute;
    -webkit-box-shadow: 0px 0px 0px 1px rgba(80,80,80,0.7);
    -moz-box-shadow: 0px 0px 0px 1px rgba(80,80,80,0.7);
    box-shadow: 0px 0px 0px 1px rgba(80,80,80,0.7);
    top: 1px;
    left: 1px;
    z-index: 101;
    opacity: 0;
}
#popular-categories li a::before {
    -webkit-box-shadow: 0px 0px 0px 1px rgba(0,170,231,0.7);
    -moz-box-shadow: 0px 0px 0px 1px rgba(0,170,231,0.7);
    box-shadow: 0px 0px 0px 1px rgba(0,170,231,0.7);
}
#popular-categories li a::after {
    -webkit-box-shadow: 0px 0px 0px 1px rgba(0,170,231,0.7);
    -moz-box-shadow: 0px 0px 0px 1px rgba(0,170,231,0.7);
    box-shadow: 0px 0px 0px 1px rgba(0,170,231,0.7);
}
#popular-categories li a, #popular-categories li a::after {
    -webkit-transition: all 0.15s ease-in-out;
    -moz-transition: all 0.15s ease-in-out;
    -o-transition: all 0.15s ease-in-out;
    -ms-transition: all 0.15s ease-in-out;
    transition: all 0.15s ease-in-out;
}
#popular-categories li a:hover::after {
    opacity: 1;
}

#popular-categories li a img.ln {
    font-size: 36px;
    margin-top: -55px;
}
 #popular-categories li a:hover {
    background-color: rgba(0,170,231, 0.2) !important;
}
#popular-categories li a span{
    font-size:12px;
    text-transform:capitalize;
}
.btn.view {
    padding: 13px 100px;
    background-color: #0d416b;
}

.btn.view:hover{
    background-color:#ffffff !important;
    color:#2368a0 !important;
    border:3px solid #2368a0 !important;
}
.job-list li.highlighted {
    background-color: #fefff6 !important;
    border-color: #e0da94 !important;
    z-index: 100 !important;
}

.job-list li a:hover::before
{
    opacity:1;
}
.job-list li a:hover::after
{
    opacity:1 !important;
}
.resumes-list li, .job-list li {
    background-color: #fff;
    border-top: 1px solid #e0e0e0;
    position: relative;
    z-index: auto !important;
}
.resumes-list li.highlighted a::after, .resumes-list li a::after, .job-list li.highlighted a::after, .job-list li a::after {
    background-color: #26ae61 !important;
}
.resumes-list li.highlighted a::after, .job-list li.highlighted a::after {
    content: "";
    width: 100%;
    height: 1px;
    display: inline-block;
    position: absolute;
    bottom: -1px;
    left: 0;
    transition: 0.3s;
    background-color: #e0da94 !important;
    opacity: 1 !important;
}
.resumes-list li.highlighted a::before, .job-list li.highlighted a::before, .resumes-list li.highlighted a::after, .job-list li.highlighted a::after {
    display: none;
}
.resumes-list li.highlighted a::after, .resumes-list li a::after, .job-list li.highlighted a::after, .job-list li a::after {
    content: "";
    width: 100%;
    height: 1px;
    display: inline-block;
    position: absolute;
    bottom: -1px;
    left: 0;
    opacity: 0;
    transition: 0.3s;
    z-index: 111 !important;
    }
.resumes-list li a::before, .job-list li a::before, table.manage-table tr::before {
    -webkit-box-shadow: 0px 1px 0px 0px rgba(0,170,231,0.7);
    -moz-box-shadow: 0px 1px 0px 0px rgba(0,170,231,0.7);
    box-shadow: 0px 1px 0px 0px rgba(0,170,231,0.7);
}

.resumes-list li a::after, .job-list li a::after, table.manage-table tr::after {
    -webkit-box-shadow: 0px 1px 0px 0px rgba(0,170,231,0.7);
    -moz-box-shadow: 0px 1px 0px 0px rgba(0,170,231,0.7);
    box-shadow: 0px 1px 0px 0px rgba(0,170,231,0.7);
}
.resume-titlebar span a:hover i, .resumes-list li, .resumes-list li a::before, .job-list li, .job-list li a::before {
    -webkit-transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
}
.resumes-list li a::before, .job-list li a::before {
    content: "";
    width: 100%;
    height: 1px;
    display: inline-block;
    position: absolute;
    top: -2px;
    left: 0;
    opacity: 0;
    transition: 0.3s;
    z-index: 999 !important;
}
.resumes-list li.highlighted:hover, .job-list li.highlighted:hover, .resumes-list li.highlighted, .job-list li.highlighted {
    background-color: #fefff6 !important;
    border-color: #e0da94 !important;
    z-index: 100 !important;
}
table.manage-table tr:hover td, .resumes-list li:hover, .job-list li:hover, #popular-categories li a:hover {
    background-color: rgba(38, 102, 174, 0.1);
}
.resumes-list .resumes-list-content, .job-list .job-list-content, .job-list img {
    padding: 35px 0;
}
.job-list img {
    float: left;
    display: inline-block;
    margin-left: 35px;
    margin-top: 2px;
    width: 60px;
    height: 60px;
}
.job-list .job-list-content {
    padding-right: 20px;
}
.job-list .job-list-content h4 {
    line-height: 31px;
    margin: 0px 0 8px 0;
}
.resume-titlebar span, .job-spotlight span, .job-list li a span, .resumes-list li a span {
    margin-right: 17px;
    display: inline-block;
}
h4 span {
    color: #fff;
    font-size: 11px;
    font-weight: 600;
    text-transform: uppercase;
    padding: 0 10px;
    line-height: 28px;
    position: relative;
    margin: 0 0 0 4px;
    top: -2px;
}
span.full-time {
    background-color: #186fc9;
}
.resume-titlebar i, .job-spotlight i, .job-list li a i, .resumes-list li a i {
    color: #999;
    margin-right: 4px;
}
.padding-right {
    padding-right: 20px;
}
.resumes-list, .job-list {
    margin-bottom: 30px;
}
</style>

</head>
   <?php include '../../headerm.php';?>
<body>
    <div class="">    
 <section id="services" >
 
        <div class="emerald tinted-image parallax">
            <div class="container ">
               <div class="row">
                  <br><br><br>
                  <div class="col-sm-7 text-left">
                     <h1 class="heavy micro">Recent Events</h1>
                  </div>
				  <br>
                  <div class="col-sm-5 text-right">
                     <ul class="breadcrumb pull-right">
                        <li><a href="../">Home</a></li>
                        <li><a href="#">Careers</a></li>
                        <li class="active">Freshers</li>
                     </ul>
                  </div>
             
               </div>
               <br>
  <div class="container">
  <div class="row search-container" style="transform: translateY(-12.6667px);">
    <input class="ico-01" placeholder="Job Title or Skills" value="" type="text">
 <input class="ico-02" placeholder="city, Zip or Country" value="" type="text">
 <button><i class="fa fa-search"></i></button>
   </div>
  </div>
  <br><br><br>
    </div>
      </div>
</div>         
      </section>

<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="sixteen columns">
<h3><strong>Popular Categories</strong></h3>
<br>
<p>The only qualification for you to join us is to have the right passion.</p>
<br>
<ul id="popular-categories">
<li><a href="#">
 <img class="ln" src="/version-3.0/data-services/images/Software-01.png" style="height:50px;width:50px">
 <br>Jr.Software Engineer 
 <br><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;<span>Miracle City IND Development</span>
 </a></li>
 <li><a href="#">
<img class="ln" src="/version-3.0/data-services/images/Digital Content.png" style="height:50px;width:50px;">
 <br>Digital Content Creator 
<br><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;<span>Miracle City IND Marketing</span>
</a></li>
<li><a href="#">
 <img class="ln" src="/version-3.0/data-services/images/OMS-01.png" style="height:50px;width:50px;">
 <br>Sterling OMS Consultant 
<br><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;<span>USA-Michigan Development</span>
 </a></li>
<li><a href="#">
    <img class="ln" src="/version-3.0/data-services/images/SystemsEng.png" style="height:50px;width:50px;">
 <br>Jr. Systems Engineer 
<br><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;<span>Miracle City IND Operations</span>
</a></li>
<li><a href="#">
<img class="ln" src="/version-3.0/data-services/images/HR-01.png" style="height:50px;width:50px;">
 <br>Human Resources Executive 
<br><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;<span>Miracle Heights Operations</span>
</a></li>
<li><a href="#">
<img class="ln" src="/version-3.0/data-services/images/US IT-01-01.png" style="height:50px;width:50px;">
 <br>Sr.US - IT Recruiter  
<br><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;<span> Miracle City Development</span>
</a></li>
<li><a href="#">
<img class="ln" src="/version-3.0/data-services/images/Project mgt-01.png" style="height:50px;width:50px;">
 <br>Project Management   
<br><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;<span>Miracle Heights Project Management</span>
</a></li>
<li><a href="#">
<img class="ln" src="/version-3.0/data-services/images/Apigee.png" style="height:50px;width:50px;">
 <br>Apigee API Gateway Developer  
<br><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;<span>USA Development</span>
</a></li>
<li><a href="#">
<img class="ln" src="/version-3.0/data-services/images/informatica-01.png" style="height:50px;width:50px;">
 <br>Informatica Developer   
<br><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;<span>USA Development</span>
</a></li>
<li><a href="#">
<img class="ln" src="/version-3.0/data-services/images/Business Development Executive-01.png" style="height:50px;width:50px;">
 <br>BDE   
<br><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;<span>Miracle Heights Sales</span>
</a></li>
<li><a href="#">
<img class="ln" src="/version-3.0/data-services/images/Sr Full stack- Java.png" style="height:50px;width:50px;">
 <br>Sr Full stack Developer - Java    
<br><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;<span>USA-Georgia Development</span>
</a></li>
<li><a href="#">
<img class="ln" src="/version-3.0/data-services/images/UX Manager-01.png" style="height:50px;width:50px;">
 <br>UX Manager    
<br><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;<span>USA-Michigan Development</span>
</a></li>
		</ul>
		
	

</div>
</div>
</div>	<br><br>
<div class="row">
<div class="col-sm-12 job">
<center><a href="#" style="color:#ffffff !important"><button class="btn view">View More Jobs</button></a></center>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="col-sm-8">
    <div class="padding-right">
		<h3 class="margin-bottom-25">Recent Jobs</h3>
		<ul class="job-list popular-categories">

			<li class=""><a href="job-page.html">
				<img src="images/job-list-logo-01.png" alt="">
				<div class="job-list-content">
					<h4>Marketing Coordinator - SEO / SEM Experience <span class="full-time">Full-Time</span></h4>
					<div class="job-icons">
						<span><i class="fa fa-briefcase"></i> King</span>
						<span><i class="fa fa-map-marker"></i> Sydney</span>
						<span><i class="fa fa-money"></i> $100 / hour</span>
					</div>
				</div>
				</a>
				<div class="clearfix"></div>
			</li>

			<li><a href="job-page.html">
				<img src="images/job-list-logo-02.png" alt="">
				<div class="job-list-content">
					<h4>Core PHP Developer for Site Maintenance <span class="part-time">Part-Time</span></h4>
					<div class="job-icons">
						<span><i class="fa fa-briefcase"></i> Cubico</span>
						<span><i class="fa fa-map-marker"></i> London</span>
						<span><i class="fa fa-money"></i> $50 / hour</span>
					</div>
				</div>
				</a>
				<div class="clearfix"></div>
			</li>

			<li><a href="job-page.html">
				<img src="images/job-list-logo-03.png" alt="">
				<div class="job-list-content">
					<h4>Restaurant Team Member - Crew <span class="full-time">Full-Time</span></h4>
					<div class="job-icons">
						<span><i class="fa fa-briefcase"></i> King</span>
						<span><i class="fa fa-map-marker"></i> Sydney</span>
						<span><i class="fa fa-money"></i> $15 / hour</span>
					</div>
				</div>
				</a>
				<div class="clearfix"></div>
			</li>

			<li><a href="job-page.html">
				<img src="images/job-list-logo-04.png" alt="">
				<div class="job-list-content">
					<h4>Power Systems User Experience Designer  <span class="internship">Internship</span></h4>
					<div class="job-icons">
						<span><i class="fa fa-briefcase"></i> Hexagon</span>
						<span><i class="fa fa-map-marker"></i> London</span>
						<span><i class="fa fa-money"></i> $75 / hour</span>
					</div>
				</div>
				</a>
				<div class="clearfix"></div>
			</li>

			<li><a href="job-page.html">
				<img src="images/job-list-logo-05.png" alt="">
				<div class="job-list-content">
					<h4>iPhone / Android Music App Development <span class="temporary">Temporary</span></h4>
					<div class="job-icons">
						<span><i class="fa fa-briefcase"></i> Mates</span>
						<span><i class="fa fa-map-marker"></i> New York</span>
						<span><i class="fa fa-money"></i> $115 / hour</span>
					</div>
				</div>
				</a>
				<div class="clearfix"></div>
			</li>
		</ul>

		<a href="browse-jobs.html" class="button centered"><i class="fa fa-plus-circle"></i> Show More Jobs</a>
		<div class="margin-bottom-55"></div>
	</div>
</div>
<div class="col-sm-4"></div>
</div>
</div>

</div>


 
 <?php include '../../footer.php';?>
</body>
 
 <script src="js/query.js"></script>
         <script src="js/bootstrap.js"></script>
         
         
         <script src="js/jquery-2.2.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
        <script src="js/plugins.js"></script>
        
        <script src="js/app.js"></script>
</html>
