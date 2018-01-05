<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
      <title>
            Example of Sticky SideBar
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
        color: #fff;
        background: #0088cc;
        border: 1px solid #0088cc;
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
               
            <br>
           
            <div id="wrapper" class="row">
                <div class="row">
                    <div class"col-xs-1"></div>
                    <div class="col-sm-9 col-md-9 col-xs-7">
                        <div class="row">
                            <div class="col-sm-6 text-left">  
                            <div class="pageTitle">
                        <strong>API Management</strong>
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
                        <li class="active">API Management
                        </li>
                    </ul>
                    </div>
                    </div>
                                
                        <!-- Tab panes -->
                        <p class="methodText">
                            With customers becoming more demanding than ever, enterprises are becoming more adventurous and in turn the traditional enterprise boundaries are blurring rapidly. Organizations are willing to open their on-premise data and applications to partners, customers, cloud services, mobile apps and websites. This definition of the modern “Open Enterprise” is being driven by the emergence of API’s and enterprises are looking to leverage their power to cope with the ever-changing business needs.
                        </p>
                        <p class="methodText">
                            API’s provide a solution to enterprises that are looking to open up new revenue streams and add value to existing infrastructure. Rapid Scalability, Extreme Flexibility and Redefined Business Value are all advantages of an API initiative. To tell you the truth, API’s aren’t that much different from the SOA option selected by so many enterprises. We expose services for consumption as API’s, but in turn create a much more open consumption model, with rapid consumption and innovative usage possible.
                        </p>
                        <div class="row">
                            <div class="col-sm-3 center">
                                <img alt="Responsive image" class="img-responsive" src="../images/services/build.png"><br>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="whyTitle">
                                            <strong>Build</strong>
                                        </div><br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 center">
                                <img alt="Responsive image" class="img-responsive" src="../images/services/expose.png"><br>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="whyTitle">
                                            <strong>Expose</strong>
                                        </div><br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 center">
                                <img alt="Responsive image" class="img-responsive" src="../images/services/secure.png"><br>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="whyTitle">
                                            <strong>Secure</strong>
                                        </div><br>
                                    </div>
                                </div>
                            </div>
                          
                            <div class="col-sm-3 center">
                                <img alt="Responsive image" class="img-responsive" src="../images/services/innovate.png"><br>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="whyTitle">
                                            <strong>Innovate</strong>
                                        </div><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="methodText">
                            These API’s provide options for developers to do magical things through these gateways into back-end systems. But, how do we <strong>manage</strong> these API’s? Is there a way to provide <strong>security</strong> for these openly exposed services? How do we control <strong>access</strong> to their consumption? What happens to applications consuming these API’s when we make <strong>version</strong> changes to the original API?
                        </p>
                        <p class="methodText">
                            These are all questions that will pop up for an enterprise looking to adopt an open and flexible API solution for their growth. The answer to all these questions is the upcoming trend in IT, API Management.
                        </p>
                        <p class="methodText">
                            API Management products help enterprises to understand, document and analyze their API’s. It is very important that organizations secure their API’s and provide restricted access to these API’s. API Management also provides a way for organizations to gain insights into the usage of their APIs through analytics. This helps organizations to provide better service and experience to consumers of their API’s.
                        </p>
                        <p class="methodText">
                            API’s provide a simple, flexible and scalable approach to solve the needs of a rapidly changing enterprise. Contact us at <a class="linkText" href="mailto:api@miraclesoft.com"><strong style="text-decoration: underline">api@miraclesoft.com</strong></a> today to gain more insight into how an API initiative can drive your organization.
                        </p>
                        <p class="methodText">
                            With customers becoming more demanding than ever, enterprises are becoming more adventurous and in turn the traditional enterprise boundaries are blurring rapidly. Organizations are willing to open their on-premise data and applications to partners, customers, cloud services, mobile apps and websites. This definition of the modern “Open Enterprise” is being driven by the emergence of API’s and enterprises are looking to leverage their power to cope with the ever-changing business needs.
                        </p>
                        <p class="methodText">
                            API’s provide a solution to enterprises that are looking to open up new revenue streams and add value to existing infrastructure. Rapid Scalability, Extreme Flexibility and Redefined Business Value are all advantages of an API initiative. To tell you the truth, API’s aren’t that much different from the SOA option selected by so many enterprises. We expose services for consumption as API’s, but in turn create a much more open consumption model, with rapid consumption and innovative usage possible.
                        </p>
                        <p class="methodText">
                            With customers becoming more demanding than ever, enterprises are becoming more adventurous and in turn the traditional enterprise boundaries are blurring rapidly. Organizations are willing to open their on-premise data and applications to partners, customers, cloud services, mobile apps and websites. This definition of the modern “Open Enterprise” is being driven by the emergence of API’s and enterprises are looking to leverage their power to cope with the ever-changing business needs.
                        </p>
                        <p class="methodText">
                            API’s provide a solution to enterprises that are looking to open up new revenue streams and add value to existing infrastructure. Rapid Scalability, Extreme Flexibility and Redefined Business Value are all advantages of an API initiative. To tell you the truth, API’s aren’t that much different from the SOA option selected by so many enterprises. We expose services for consumption as API’s, but in turn create a much more open consumption model, with rapid consumption and innovative usage possible.
                        </p>
                        <p class="methodText">
                            With customers becoming more demanding than ever, enterprises are becoming more adventurous and in turn the traditional enterprise boundaries are blurring rapidly. Organizations are willing to open their on-premise data and applications to partners, customers, cloud services, mobile apps and websites. This definition of the modern “Open Enterprise” is being driven by the emergence of API’s and enterprises are looking to leverage their power to cope with the ever-changing business needs.
                        </p>
                        <p class="methodText">
                            API’s provide a solution to enterprises that are looking to open up new revenue streams and add value to existing infrastructure. Rapid Scalability, Extreme Flexibility and Redefined Business Value are all advantages of an API initiative. To tell you the truth, API’s aren’t that much different from the SOA option selected by so many enterprises. We expose services for consumption as API’s, but in turn create a much more open consumption model, with rapid consumption and innovative usage possible.
                        </p>
                        <p class="methodText">
                            With customers becoming more demanding than ever, enterprises are becoming more adventurous and in turn the traditional enterprise boundaries are blurring rapidly. Organizations are willing to open their on-premise data and applications to partners, customers, cloud services, mobile apps and websites. This definition of the modern “Open Enterprise” is being driven by the emergence of API’s and enterprises are looking to leverage their power to cope with the ever-changing business needs.
                        </p>
                        <p class="methodText">
                            API’s provide a solution to enterprises that are looking to open up new revenue streams and add value to existing infrastructure. Rapid Scalability, Extreme Flexibility and Redefined Business Value are all advantages of an API initiative. To tell you the truth, API’s aren’t that much different from the SOA option selected by so many enterprises. We expose services for consumption as API’s, but in turn create a much more open consumption model, with rapid consumption and innovative usage possible.
                        </p>
                      <br>
                        <br>
                    </div>
                    <div class="cold-md-9  col-xs-3" id="">
                      
                        <div id="sidebar">
				
				            <div id="widget" class="sticky">
				           
                            <ul class="nav nav-tabs nav-stacked affix-top" data-offset-top="100" data-offset-bottom="500" data-spy="affix">
                        
                            <li>
                                <a class="active">API Management</a>
                            </li>
                            <li>
                                <a href="./big-data-cloud-mobile.php">Big Data, Cloud and Mobile</a>
                            </li>
                            <li>
                                <a href="#">Process Management</a>
                            </li>
                            <li>
                                <a href="#">Data, ETL</a>
                            </li>
                            <li>
                                <a href="#">Digital Experience</a>
                            </li>
                            <li>
                                <a href="#">File Transfer</a>
                            </li>
                            <li>
                                <a href="#">SOA Connectivity</a>
                            </li>
                            <li>
                                <a href="#">Testing (QA)</a>
                            </li>
                            
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