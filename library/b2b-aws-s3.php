<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="description">
        <meta content="" name="author">
        <title>
            Next Gen EDI Processing and Archiving
with Google, AWS and Sterling Integrator | Miracle
        </title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet">
        <link href="../css/main.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="../css/default.css" rel="stylesheet" type="text/css">
        <link href="../css/component.css" rel="stylesheet" type="text/css">
        <script src="js/modernizr.custom.js"></script><!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="../images/favicon.ico" rel="shortcut icon">
    </head><!--/head-->
    <?php include '../header.php';?>
    <body>
        <section class="container" id="about-us">
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-7 text-left">
                    <h1>
                  <strong>     Next Gen EDI Processing and Archiving </strong>with Google, AWS and Sterling Integrator
                    </h1>
                </div>
                <div class="col-sm-3 text-right">
                    <ul class="breadcrumb pull-right">
                        <li>
                            <a href="../">Home</a>
                        </li>
                        <li>
                            <a href="index.php">Library</a>
                        </li>
                        <li class="active"> EDI Processing and Archiving
                        </li>
                    </ul>
                </div>
                <div class="col-sm-1"></div>
            </div>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <hr>
                    <h5 class="heavy noMargin">NextGen EDI Processing and Archiving with IBM Sterling Integrator,Google and AWS
                    </h5>
                    <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                    <div class="row">
                    <div class="col-sm-5">
                    <p class="methodText">
                      With Digitalization truly underway, Enterprises of the Future are required to re-invent themselves to ensure that they stay competent. Business Integration with EDI is becoming more important to ever for organization to be able to scale their business networks rapidly. Along with this they need to be able to execute rapid changes to their EDI operations to ensure that they stay up to date with the users demands while still maintaining the automation, reliability and security of enterprise-class EDI operations.
                    </p> 
                     <h5 class="heavy noMargin">The Business Challenge</h5>
                       <div class="row">
                        <div class="col-sm-7">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                    <p class="methodText">To battle the challenges of low reliability, security and inflated costs our experts came together to define a scenario where enterprises can leverage existing B2Bi infrastructure along with Next Generation technologies to enable business networks.  </p>
                    </div>
                    <div class="col-sm-7"><img class="img-responsive" src="../images/library/aws-s3.png">
                    </div>
                    </div>
                    
                    
                    
                </div>     
               <div class="col-sm-1"></div>
               
            </div>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                <p class="methodText">   <strong>Technologies Used</strong></p>
                 <div class="row">
                 
                 <div class="col-sm-4">
                 <ol>
                 <li> Amazon S3 </li>
                  <li> Amazon Glacier</li>
                   <li> Google Drive (Gdrive)</li>
                   </ol>
                 </div>
                  <div class="col-sm-4">
                 <ol start="4">
                 <li> Google APIs </li>
                  <li>Google Mail (Gmail)</li>
                   <li>IBM B2B Sterling Integrator</li>
                   </ol>
                 </div>
            </div>
        </div>
               <div class="col-sm-1"></div>
               </div>
           <div class="row">
               <div class="col-sm-1"></div>
               <div class="col-sm-10">
                 <p class="methodText">
                   The technical scenario uses <strong>Sterling Business Processes </strong>and <strong>Automated Java Tasks</strong> to pick up EDI files(Random Formats) from <strong>Gmail</strong>. The EDI file is them immediately archived into <strong>Amazon S3</strong> and is also sent to the <strong>Sterling Integrator Translator Java Task</strong> for conversion into XML.
                 </p>
                  <p class="methodText">The converted XML file then gets pushed into <strong>Google Drive</strong> using Google’s APIs and is picked up by a Sterling Java Task once again to load back into the Back-End EDI system. In case of a failure in the processing of the EDI file, the archived EDI file is pulled back from Amazon S3 by <strong>Sterling Integrator</strong> and re-processed. </p>
                   <p class="methodText">The archived EDI files will be moved to <strong>Amazon Glacier</strong> after a certain time period, to ensure longer storage of the EDI files at much more reduced prices. </p>
                 <h5 class="heavy noMargin">
                        The Enterprise Advantage
                 </h5>
                 <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                    <p class="methodText">Large Enterprises with hundreds of Trading Partners struggle to find ways to process their EDI documents in a reliable, secure and low cost manner. Through this scenario an enterprise can achieve the following advantages,
                    </p>
                     <p class="methodText">
                         <ol>
                             <li>Low cost for archival through Cloud based Amazon S3 Storage
                             <li>Archival Costs can be reduced by archiving files to Amazon Glacier automatically after defined time intervals</li>
                             <li>Reliable EDI process with automatic (or) web GUI based EDI re-processing</li>
                             <li>Ability to create Web/Mobile Dashboards for visibility into the EDI processing using the Amazon and Google APIs</li>
                             <li>Enterprise Class Security provided by Google and Amazon for your EDI documents</li>
                            
                             </ol>
                      </p>
                       <h5 class="heavy noMargin">
                What is Amazon S3?
                 </h5>
                 <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                    <p class="methodText">
                       <strong>Amazon Simple Storage Service (Amazon S3)</strong>, provides developers and IT teams with secure, durable, highly-scalable object storage. Amazon S3 is easy to use, with a simple web services interface to store and retrieve any amount of data from anywhere on the web. With Amazon S3, you pay only for the storage you actually use. There is no minimum fee and no setup cost.
                   </p>
                     <p class="methodText">Amazon S3 can be used alone or together with other AWS services such as Amazon Elastic Compute Cloud (Amazon EC2), Amazon Elastic Block Store (Amazon EBS), and Amazon Glacier, as well as third party storage repositories and gateways. Amazon S3 provides cost-effective object storage for a wide variety of use cases including cloud applications, content distribution, backup and archiving, disaster recovery, and big data analytics.</p>
                     <h5 class="heavy noMargin">
                 Glacier Storage = The Longer The Cheaper
                 </h5>
                 <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                    <p class="methodText">
                       <strong>Amazon Glacier</strong> is a secure, durable, and extremely low-cost storage service for data archiving and online backup. Customers can reliably store large or small amounts of data for as little as $0.01 per gigabyte per month, a significant savings compared to on-premises solutions. To keep costs low, Amazon Glacier is optimized for infrequently accessed data where a retrieval time of several hours is suitable.
                    </p>
                    <h5 class="heavy noMargin">
               The Cost Charts
                 </h5>
                 <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                    <p class="methodText">
With no setup costs involved the costs for each of the services used above are insanely cheap for an enterprise and as the EDI processing numbers go up and the archival duration increases the prices seem even more reduced.
                    </p>
                    
                <h5 class="heavy noMargin">Google APIS</h5>
                    <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                    <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                           Service


                                        </th>
                                        <th>
                                            Setup Cost


                                        </th>
                                        <th>
                                            Free Range


                                        </th>
                                        <th>
                                            Premium range
                                        </th>
                                    </tr>
                                </thead>    
                                <tr>
                                    <td>Google Drive API</td>
                                     <td>No</td>
                                      <td>500,000 Requests/Day</td>
                                       <td>No,Can request for more</td>
                                </tr>
                                 <tr>
                                    <td>Google Mail API</td>
                                     <td>No</td>
                                      <td>1000,000,000</td>
                                       <td>No,Can request for more</td>
                                </tr>
                            </table>
                            <h5 class="heavy noMargin">Amazon S3 and Glacier Storage</h5>
                             <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                             <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                           Storage
                                        </th>
                                        <th>
                                            Standard
                                         </th>
                                        <th>
                                           Reduced Redundancy
                                        </th>
                                        <th>
                                          Glacier
                                        </th>
                                    </tr>
                                </thead>    
                                <tr>
                                    <td>First 1 TB</td>
                                     <td>$0.03 per GB</td>
                                      <td>$0.024 per GB</td>
                                       <td>$0.01 per GB</td>
                                </tr>
                                 <tr>
                                   <td>Next 49 TB</td>
                                     <td>$0.0295 per GB</td>
                                      <td>$0.0236 per GB</td>
                                       <td>$0.01 per GB</td>
                                </tr>
                                <tr>
                                  <td>Next 450 TB</td>
                                     <td>$0.029 per GB</td>
                                      <td>$0.0232 per GB</td>
                                       <td>$0.01 per GB</td>
                                </tr>
                                 <tr>
                                  <td>Next 500 TB</td>
                                     <td>$0.0285 per GB</td>
                                      <td>$0.0228 per GB</td>
                                       <td>$0.01 per GB</td>
                                </tr>
                                <tr>
                                  <td>Next 4000 TB</td>
                                     <td>$0.028 per GB</td>
                                      <td>$0.0224 per GB</td>
                                       <td>$0.01 per GB</td>
                                </tr>
                                <tr>
                                  <td>Next 5000 TB</td>
                                     <td>$0.0275 per GB</td>
                                      <td>$0.0220 per GB</td>
                                       <td>$0.01 per GB</td>
                                </tr>
                            </table>
                            <h5 class="heavy noMargin">Amazon S3 and Glacier Storage</h5>
                             <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                             <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                           Requests


                                        </th>
                                        <th>
                                         Price
                                         </th>
                                        
                                    </tr>
                                </thead>
                                <tr>
                                    <td>PUT/COPY/POST/LIST</td>
                                     <td>$0.005 per 1,000 requests</td>
                                      
                                </tr>
                                <tr>
                                    <td>Glacier Archive and Restore</td>
                                     <td>$0.05 per 1,000 requests</td>
                                      
                                </tr>
                                <tr>
                                    <td>Delete Request</td>
                                     <td>Free</td>
                                      
                                </tr>
                                 <tr>
                                    <td>GET and all other requests</td>
                                     <td>$0.004 per 10,000 requests</td>
                                      
                                </tr>
                                 <tr>
                                    <td>Glacier Data Restores</td>
                                     <td>Free</td>
                                      
                                </tr>
                            </table>
             </div>
               <div class="col-sm-1"></div>
           </div>
           
           
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-4">
                  <div class="row">
                        <div class="col-sm-5">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>  
                    <p class="methodText">
                     <strong>
                    Srinivasa Aditya Mumani   <br>
                     B2Bi/EDI Developer  <br>
                       </strong>
                       Miracle Software Systems, Inc. <br>
                       July 22nd, 2015
                    </p>
                  
                    <div class="row">
                        <div class="col-sm-5">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                    <a href="#"><button class="btn btn-primary btn-md" type="button">Download Product Brief</button></a><br>
                    </div>
                 
                    
                    <div class="col-sm-4">
                        <br>
                    <p class="methodText">
                     <strong>
                    Venkat Aditya Chinni  <br>
                     Cloud and DevOps Associate – Miracle Labs <br>
                       </strong>
                       Miracle Software Systems, Inc. <br>
                       July 22nd, 2015
                    </p>
                    </div>
                     <div class="col-sm-1"></div>
                    </div>
                    
                    <br>
                            
                   
                    
                </div>
                <div class="col-sm-1"></div>
            </div>
        </section><!--/#about-us-->
        <?php include '../footer.php';?>
    </body>
</html>