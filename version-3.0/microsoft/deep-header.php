<html>
  <head>
    <script src="../js/main.js"></script>
<link href="css/normalize.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="css/normalize.css" rel="stylesheet">
        <script src="modernizr.custom.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="/css/header.css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </head>
<style>
.navbar {
   
    margin-bottom: 0px;
}
  @import url(http://fonts.googleapis.com/css?family=Open+Sans:400,700);
body {
  font-family:'Open Sans'!important;
}
.mega-dropdown {
  position: static !important;
}
.mega-dropdown-menu {
    padding: 20px 0px;
    width: 100%;
    box-shadow: none;
    -webkit-box-shadow: none;
}
.mega-dropdown-menu > li > ul {
  padding: 0;
  margin: 0;
  
}
.mega-dropdown-menu > li > ul > li {
  list-style: none;
}
.mega-dropdown-menu > li > ul > li > a {
  display: block;
  color: #222;
  padding: 3px 5px;
  font-size:large;
  font-weight:normal;
  
}
.mega-dropdown-menu > li ul > li > a:hover,
.mega-dropdown-menu > li ul > li > a:focus {
  color: #fff;
}

.mega-dropdown-menu .dropdown-header {
  font-size: 18px;
  color: #ff3546;
  padding: 5px 60px 5px 5px;
 
}

.carousel-control {
  width: 30px;
  height: 30px;
  top: -35px;

}
.left.carousel-control {
  right: 30px;
  left: inherit;
}

  
.carousel-control .glyphicon-chevron-left, 
.carousel-control .glyphicon-chevron-right {
  font-size: 12px;
  background-color: #fff;
  line-height: 30px;
  text-shadow: none;
  color: #333;
  border: 1px solid #ddd;
}
</style>
<style>
  .navbar-inverse {
    background-color: #fff;
  
  }
  .navbar {
   
    border: 0px;}
    .navbar-inverse .navbar-nav > li > a {
    color: #232527!important;}
    .navbar-inverse .navbar-nav > li > a:hover {
    color: #232527!important;}
    .navbar-inverse .navbar-nav > .open > a, .navbar-inverse .navbar-nav > .open > a:hover, .navbar-inverse .navbar-nav > .open > a:focus {
    color: #fff;
    background-color: #00aae7!important;
   
}

.dropdown-menu
{
  background-color:#00aae7!important;
  
}

.navbar-inverse .navbar-nav > li > a:hover, .navbar-inverse .navbar-nav > li > a:focus {
    color: #232527}
    .navbar-nav > li {
   font-weight: bolder;
font-size: 18px;
    padding-right: 0px!important;
}
    .mega-dropdown-menu .dropdown-header {
    font-size:25px!important;
    color: #fff}
    .mega-dropdown-menu .dropdown-header:hover {
    font-size:25px!important;
    color: #000}

    .mega-dropdown-menu .dropdown-header:hover {
    font-size:25px!important;
    color: #000}
    
    .mega-dropdown-menu > li > ul > li > a {
    color: #fff;}
    .mega-dropdown-menu > li > ul > li > a:hover {
    color: #000 !important;}
    .btn-black
    {
      background-color:#fff;
      color:#fff;
      
    }
    
    .dark:hover {
    background-color: #000000;
}
  
    
</style>
<script>
  $(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true);
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true);
            $(this).toggleClass('open');       
        }
    );
});
$('#dropdown-menu').show();
</script>

  <nav class="navbar navbar-inverse" style="position: fixed;width: 100%;border-radius:0px;">
    <div class="navbar-header">
    	<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#"><img  alt="logo" src="http://www.miraclesoft.com/images/logo-black.png" height="50px"></a>
	</div>
	
	<div class="collapse navbar-collapse js-navbar-collapse">
		
        <ul class="nav navbar-nav navbar-right" >
          <li class="dropdown mega-dropdown">
    			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Company </a>				
    		
				<ul class="dropdown-menu mega-dropdown-menu black"><br>
					<li class="col-sm-4 ">
    					<ul >
							<li class="dropdown-header ">About Us</li>
							<li><a href="#">Company</a></li>
              <li><a href="#">Partnerships</a></li>
              <li><a href="#">Vision 2020</a></li>
							<li><a href="#">Awards & Certifications</a></li>
					
						</ul>
					</li>
					<li class="col-sm-4">
						<ul>
							<li class="dropdown-header">Why Miracle</li>
							<li><a href="#">Global Delivery Modal</a></li>
							<li><a href="#">Our Methodologies</a></li>
							<li><a href="#">Success Stories</a></li>                            
							<li><a href="#">COE Ecosystem</a></li>							
							<li><a href="#">Innovation Center</a></li>	<br>						
						</ul>
					</li>	
					<li class="col-sm-4">
						<ul>
							<li class="dropdown-header">Reach Out</li>
              <li><a href="#">Contact Us</a></li>
							<li><a href="#">Global Presence</a></li>
							<li><a href="#">Employee Verification</a></li>
							<li><a href="#">Employee Referral</a></li>                         
							<li><a href="#">Suggestion Box</a></li>							
						</ul>
					</li>
					
        </ul>			
			</li>
          <li class="dropdown mega-dropdown">
    			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Services </a>				
				<ul class="dropdown-menu mega-dropdown-menu">
				<br>
					<li class="col-sm-4">
    					<ul>
							<li class="dropdown-header">Services</li>
						 <li><a href="#">Application Services</a></li>
              <li><a href="#">Architecture and Consulting</a></li>
              <li><a href="#">BPO Services</a></li>
							<li><a href="#">Cloud Services</a></li>
							<li><a href="#">Infrastructure Services</a></li>
              <li><a href="#">Managed Services</a></li>
              <li><a href="#">RPO / HCM Services</a></li>
							<li><a href="#">Software Sales and Renewals</a></li>
							<li><a href="#">Testing and QA Services</a></li>
						</ul>
					</li>
					<li class="col-sm-4">
						<ul>
							<li class="dropdown-header">Technologies</li>
							<li><a href="#">API Management</a></li>
							<li><a href="#">Big Data, Cloud and Mobile</a></li>
							<li><a href="#">Business Process Management</a></li>                            
							<li><a href="#">Data, ETL and Analytics</a></li>
							<li><a href="#">Digital Experience</a></li>
							<li><a href="#">File Transfer and B2B/EDI</a></li>
							<li><a href="#">Oracle Middleware</a></li>                            
							<li><a href="#">SAP Services</a></li>				
							<li><a href="#">SOA, Connectivity and Middleware</a></li>				
						</ul><br><br>
					</li>
					
                   <li class="col-sm-4">
						<ul>
							<li class="dropdown-header">Industries</li>
							<li><a href="#">Energy and Utilities</a></li>
							<li><a href="#">Finance and Insurance</a></li>
							<li><a href="#">Healthcare Industry</a></li>                            
							<li><a href="#">Logistics Industry</a></li>
							<li><a href="#">Manufacturing Industry</a></li>
							<li><a href="#">Retail Industry</a></li>
							
						</ul><br><br>
					</li>
				</ul>				
			</li>
        <li class="dropdown mega-dropdown">
    			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Careers </a>				
				<ul class="dropdown-menu mega-dropdown-menu">
					<br>
					<li class="col-sm-4">
    					<ul>
							<li class="dropdown-header">Careers</li>
							<li><a href="#">Careers in India</a></li>
              <li><a href="#">Careers in USA</a></li>
              <li><a href="#">Life at Miracle</a></li>
							<li><a href="#">Open Positions</a></li>
							<br>
						</ul>
					</li>
					<li class="col-sm-4">
						<ul>
							<li class="dropdown-header">Freshers</li>
							<li><a href="#">Career Growth Plan</a></li>
							<li><a href="#">Frequently Asked Questions</a></li>
							<li><a href="#">Job Fairs and Drives</a></li>                            
							<li><a href="#">Opportunities</a></li>						
						</ul>
					</li>
					<li class="col-sm-4">
						<ul>
							<li class="dropdown-header">Programs</li>
              <li><a href="#">IT Gurukulam</a></li>
							<li><a href="#">MILE - Leadership Institute</a></li>
							<li><a href="#">Refresh America</a></li>
					</ul>
					</li>
               
				</ul>			
			</li>
        <li class="dropdown mega-dropdown">
    			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Events </a>				
				<ul class="dropdown-menu mega-dropdown-menu">
				    	<br>
					<li class="col-sm-4">
    				<center>	<img src="http://www.miraclesoft.com/images/events/upcoming-events.png"></img></center><br>
					</li>
					<li class="col-sm-4">
						<center><img src="http://www.miraclesoft.com/images/events/recent-events.png"></img></center>
					</li>
					<li class="col-sm-4">
						<center><img src="http://www.miraclesoft.com/images/events/gallery.png"></img></center>
					</li>
				</ul><br>				
			</li>
			<li class="dropdown mega-dropdown">
    			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Sign In</a>				
				<ul class="dropdown-menu mega-dropdown-menu">
				    	<br>
					<li class="col-sm-4">
    				<center>	<img src="http://www.miraclesoft.com/images/login/Login1.png"></img></center><br>
					</li>
					<li class="col-sm-4">
					<center><img src="http://www.miraclesoft.com/images/login/Login2.png"></img></center>
					</li>
					<li class="col-sm-4">
						<center><img src="http://www.miraclesoft.com/images/login/Login3.png"></img></center>
					</li>
          
				</ul>				
			</li>
      </ul>
	</div><!-- /.nav-collapse -->
  </nav>

</html>