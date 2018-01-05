<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
      <title>
          SOA, Connectivity and Middleware
        </title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/main.css" rel="stylesheet" type="text/css">
        <link href="../css/default.css" rel="stylesheet" type="text/css">
        <link href="../css/component.css" rel="stylesheet" type="text/css">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="../images/favicon.ico" rel="shortcut icon">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <style type="text/css">
         
        /* Custom Styles */
        ul.nav-tabs {

        margin-top: 20px;

        border-radius: 0px;


        }
        ul.nav-tabs li {
        margin: 0;

        }
        a.active{
            background-color:#0d416b;
            color:#ffffff;
            
        }
        a:hover{
            color:#232527;
        }
        ul.nav-tabs li:first-child {
        border-top: none;
        }
        ul.nav-tabs li a {
        border-style: zero;
        border-bottom: 1px solid black;
        margin: 0;
        padding: 8px 16px;
        border-radius: 0;
        }
        ul.nav-tabs li.active a, ul.nav-tabs li.active a:hover {
        color: #232527;
        border: 0px solid #232527;
        }
        ul.nav-tabs li:first-child a {
        border-radius: 4px 4px 0 0;
        }
        ul.nav-tabs li:last-child a {
        border-radius: 0 0 4px 4px;
        }
        ul.nav-tabs.affix {
        top: 65px;
        /* Set the top position of pinned element */
        }
        </style>
        <script>
            
$(document).ready(function(){  $('[data-toggle=offcanvas]').click(function() {
    $('.row-offcanvas').toggleClass('active');
  });
});
        </script>
        <script src="jquery-1.7.1.min.js" type="text/javascript"></script>
    <script type="text/javascript">
		$(function(){ // document ready

		  if (!!$('.sticky').offset()) { // make sure ".sticky" element exists

		    var stickyTop = $('.sticky').offset().top; // returns number 

		    $(window).scroll(function(){ // scroll event

		      var windowTop = $(window).scrollTop(); // returns number 

		      if (stickyTop < windowTop){
		        $('.sticky').css({ position: 'fixed', top: 0 });
		      }
		      else {
		        $('.sticky').css('position','static');
		      }

		    });

		  }

		});
	</script>
	 <style>
                #wrapper { 
	
}
#sidebar {
	float:right;
	width:auto;
}
	#sidebar #widget {
		width:auto;
		margin-bottom:500px;
		
	h6 {
    text-align: center;
} 

border {
    border-style: zero;
    border-bottom: solid black;
}
	    
	}
	@media (min-width: 300px) {

  #sidebar.affix-top {

  }


  #sidebar.affix {
  width:90px;
  height:100%;
  top: 100px;
  }
  #sidebar.bottom{
     
  }
}
            </style>
            <script>
            
            </script>
        <?php include '../header.php';?>
    </head>
    
    <body data-spy="scroll" data-target="#myScrollspy">
        <div class="container">
            <br>
            <br>
            <br>
            <br>
            <div class="row">
               <div class="col-sm-6 text-left">
                    
                </div>
                <div class="col-sm-6 text-right">
                    
                </div>
               
           
            <div id="wrapper" class="row">
                <div class="row">
                    <div class"col-xs-1"></div>
                    <div class="col-sm-9 col-md-9 col-xs-7">
                        <div class="row">
                            <div class="col-sm-6 text-left">  
                            <div class="pageTitle">
                        <strong>SOA, Connectivity and Middleware</strong>
                    </div>
                            </div>
                            <div class="col-sm-6 text-right">
                                
                                <ul class="breadcrumb pull-right">
                        <li>
                            <a href="../">Home</a>
                        </li>
                        <li>
                            <a href="../technologies/">Technologies</a>
                        </li>
                        <li class="active">SOA, Connectivity and Middleware
                        </li>
                    </ul>
                    </div>
                    </div>
                         <section class="container" id="about-us">
            
            
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a data-toggle="tab" href="#overview">Overview</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#Framework">Framework</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#SOA">SOA</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#Products">Products</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#Services">Services</a>
                        </li>
                    </ul><!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="overview">
                            <br>
                            <p class="methodText">
                                An enterprise whose business processes are integrated end-to-end across the organization with key partners, suppliers, and customer will be able to respond with better speed and agility to any customer demand, market opportunity, (or) external threat.
                            </p>
                            <p class="methodText">
                                Over the years, Miracle has gained experience and expertise in rapidly integrating Applications, Processes and Data in order to enable an organization to be flexible and agile. Seamless Integration of People and Operations across and beyond your enterprise gives you the power to leverage your existing IT investments and quickly adapt to changing business conditions.
                            </p>
                            <div class="row">
                                <div class="col-sm-3 center">
                                    <center>
                                    <img alt="Responsive image" class="img-responsive" src="../images/services/app-integration.png" alt="App-Integration" title="App Integration"><br>
                                    </center>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h3 class="heavy">
                                                <strong>App Integration</strong>
                                            </h3><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 center">
                                    <center>
                                    <img alt="Responsive image" class="img-responsive" src="../images/services/cloud-integration.png" alt="Cloud-integration" title="Cloud Integration"><br>
                                    </center>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h3 class="heavy">
                                                <strong>Cloud Integration</strong>
                                            </h3><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 center">
                                    <center>
                                    <img alt="Responsive image" class="img-responsive" src="../images/services/process-integration.png" alt="Process-Integration" title="Process Integration"><br>
                                    </center>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h3 class="heavy">
                                                <strong>Process Integration</strong>
                                            </h3><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 center">
                                    <center>
                                    <img alt="Responsive image" class="img-responsive" src="../images/services/mobile-integration.png" alt="Mobile-Integration" title="Mobile Integration"><br>
                                    </center>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h3 class="heavy">
                                                <strong>Mobile Integration</strong>
                                            </h3><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="methodText">
                                Putting products together from our partners like IBM, SAP and Oracle along with our Service Portfolio, provides you with a complete range of Integration Solutions which can help you move closer to an on-demand and transformed business, regardless of the size, the industry and the challenges of your business.
                            </p>
                            <p class="methodText">
                                Integration is at the heart of every business transformation initiative. Contact us today to see how we can help with your transformation initiatives and take you to the next level.
                            </p>
                            <p>
                                For more information on <strong>SOA, Connectivity and Middleware</strong>, contact us at <a class="linkText" href="mailto:soa@miraclesoft.com"><strong style="text-decoration: underline">soa@miraclesoft.com</strong></a>
                            </p><br>
                            <br>
                        </div>
                        <div class="tab-pane" id="Framework">
                            <br>
                            <p class="methodText">
                                With over 20 years of expertise in the space of Business Integration and SOA, our teams have been able to create a unique Integration Framework which helps organizations migrate and use SOA with faster time-to-market, reduced implementation costs and easy adoption. The Integration framework is capable of running on IBM Integration Bus (v9.0), SAP Process Integrator and Oracle SOA Fusion.
                            </p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="methodText">
                                        <strong>The robust and customizable framework consists of the following,</strong>
                                    </p>
                                    <ul>
                                        <li>Best Practices and Standards
                                        </li>
                                        <li>Implementation Methodology
                                        </li>
                                        <li>Project Plan Template for Integration
                                        </li>
                                        <li>DevOps Accelerators
                                        </li>
                                        <li>Code Repository Services
                                        </li>
                                        <li>Automated Configuration Management
                                        </li>
                                        <li>Enterprise Error Handler
                                        </li>
                                        <li>Enterprise Email Content Generator
                                        </li>
                                        <li>Enterprise Event Manager
                                        </li>
                                        <li>Visibility Management Portal
                                        </li>
                                        <li>Enterprise Object Logger
                                        </li>
                                        <li>MTOM
                                        </li>
                                        <li>Cloud Integration Best Practices and Templates
                                        </li>
                                        <li>Visual Integration Portal for SAP
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <br>
                                    <img class="img-responsive" src="../images/services/integration-framework.png" alt="Integration-Framework" title="Integration Framework">
                                </div>
                            </div><br>
                            <br>
                        </div>
                        <div class="tab-pane" id="SOA">
                            <br>
                            <p class="methodText">
                                SOA starts with a simple idea – the concept of a service. This goes on to give other ideas such as a service bus and service virtualization, which when combined together, gives enterprises a Service Oriented Architecture along with many benefits. With a SOA approach you can enable your data and resources to be exposed as well defined services, which can then be consumed and discovered.
                            </p>
                            <p class="methodText">
                                A SOA approach gives the organization better efficiency, agility and flexibility at a reduced cost. Gone are the days of Point-to-Point connectivity with tightly associated applications and tough-coded integration. Enterprises need to become nimble and agile in order to constantly change in a rapidly growing marketplace. SOA enables you to obtain complete integration with lesser efforts, reduced costs and increased efficiency.
                            </p>
                            <p class="methodText">
                                <strong>With Miracle’s Solutions Pyramid, we offer 4 layers of services,</strong>
                            </p>
                            <ul>
                                <li>Business – IT Alignment
                                </li>
                                <li>Business Process Transformation (BPX)
                                </li>
                                <li>SOA Architectural Services
                                </li>
                                <li>SOA Industrialization Services
                                </li>
                            </ul>
                            <p class="methodText">
                                Our teams have derived the Solutions Pyramid through over 20 years of expertise in providing innovative and custom integration solutions for numerous Global 1000 companies.
                            </p>
                            <p class="methodText">
                                <strong>Why should you choose SOA?</strong>
                            </p>
                            <p class="methodText">
                                Today’s CIO’s are burdened by the need to justify IT projects and ROI on IT infrastructure. With an array of non-compatible IT systems and the need for communication and flexibility higher than ever, many CIO’s are finding it difficult to achieve this. 21st Century enterprises need to be agile and flexible to the changing business needs, and a rapidly changing marketplace.
                            </p>
                            <p class="methodText">
                                Disparate, non-compatible and disconnected IT systems reduce process efficiency and hinder the growth of an organization. It is absolutely critical that enterprises take steps towards optimizing their processes and reducing implementation costs. This is exactly what SOA provides to large enterprises, which are looking to integrate their disparate systems to enable flexibility and efficiency.
                            </p>
                            <p class="methodText">
                                <strong>Advantages of SOA</strong>
                            </p>
                            <p class="methodText">
                                An enterprise that has enabled Service Oriented Architecture through Miracle’s Solutions Pyramid can experience the following advantages,
                            </p>
                            <ul>
                                <li>Increased IT Efficiency by aligning IT with business goals
                                </li>
                                <li>Reduced costs and increased revenues by transforming your business processes
                                </li>
                                <li>Increased ROI on existing assets
                                </li>
                                <li>Competitive advantage through increased business flexibility
                                </li>
                                <li>Ability to respond quickly to change
                                </li>
                            </ul>
                            <p class="methodText">
                                <strong>Awards</strong>
                            </p>
                            <p class="methodText">
                                Through our experience in SOA Implementation, Governance and Cost Optimization, our teams have been awarded by IBM multiple times.
                            </p>
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th>
                                            Award
                                        </th>
                                        <th>
                                            Year
                                        </th>
                                        <th>
                                            Description
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            <strong>IBM IMPACT Smart SOA Award</strong>
                                        </td>
                                        <td>
                                            2011
                                        </td>
                                        <td>
                                            At IBM IMPACT 2011, Miracle was awarded the Smart SOA award for its expertise and work in the SOA space
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            2
                                        </td>
                                        <td>
                                            <strong>IBM SOA Cost Optimization Award</strong>
                                        </td>
                                        <td>
                                            2009
                                        </td>
                                        <td>
                                            Miracle was awarded the award at IMPACT 2009 for our impressive work in Cost Optimization using SOC architecture
                                        </td>
                                    </tr>
                                    <tr></tr>
                                </tbody>
                            </table><br>
                            <br>
                        </div>
                        <div class="tab-pane" id="Products">
                            <br>
                            <ul>
                                <li>SAP Netweaver Process Integrator
                                </li>
                                <li>IBM Integration Bus v9.0
                                </li>
                                <li>IBM WebSphere ESB
                                </li>
                                <li>IBM WebSphere Transformation Extender(WTX)
                                </li>
                                <li>IBM WebSphere ODM
                                </li>
                                <li>WebMethods
                                </li>
                                <li>Oracle Fusion Middleware
                                </li>
                                <li>IBM Cast Iron Live
                                </li>
                                <li>IBM Datapower Appliances
                                </li>
                            </ul><br>
                            <br>
                        </div>
                        <div class="tab-pane" id="Services">
                            <br>
                            <p class="methodText">
                                We offer a wide range of customized services in our EAI/SOA Practice, which can help with your transformation initiatives.
                            </p>
                            <ul>
                                <li>EAI/SOA Product Evaluation and Selection
                                </li>
                                <li>EAI/SOA Architecture and Best Practices
                                </li>
                                <li>Migrations, Upgrades and Re-Engineering
                                </li>
                                <li>COE Establishment
                                </li>
                                <li>EAI/SOA Support and Maintenance Services
                                </li>
                                <li>EAI/SOA Managed Services
                                </li>
                                <li>SOA Development Services
                                </li>
                            </ul><br>
                            <br>
                        </div>
                    </div>
                
        </section><!--/#about-us-->
               
                       
                      <br>
                        <br>
                    </div>
                    <div class="cold-md-9  col-xs-3" id="">
                      
                        <div id="sidebar">
				
				            <div id="widget" class="sticky">
				           
                            <ul class="nav nav-tabs nav-stacked affix-top" data-offset-top="100" data-offset-bottom="500" data-spy="affix">
                        
                            <li>
                                <a href="./api-management.php">API Management</a>
                            </li>
                            <li>
                                <a href="./big-data-cloud-mobile.php">Big Data, Cloud and Mobile</a>
                            </li>
                            <li>
                                <a href="./business-process-management.php">Process Management</a>
                            </li>
                            <li>
                                <a href="./data-analytics.php">Data, ETL</a>
                            </li>
                            <li>
                                <a href="./digital-experience-commerence.php">Digital Experience</a>
                            </li>
                            <li>
                                <a href="./b2b_edi_mft.php">File Transfer</a>
                            </li>
                            <li>
                                <a class="active">SOA Connectivity</a>
                            </li>
                            <li>
                                <a href="#">Testing (QA)</a>
                            </li>
                            <br>
                            <a href="https://mss-templete-sivanmyc.c9.io/why/success.php"> <img src="fss.png"></img </a>
                            
                            
                            
                        </ul>
                        </div>
                        </div>
                        
                    </div>
                    <div class"col-xs-1"></div>
                </div>
            </div>
        </div>
        </div>
        <div class="footer-wrapper">
            <div class="footer">
                <?php include '../footer.php';?>
            </div>
        </div>
    
    </body>
</html>