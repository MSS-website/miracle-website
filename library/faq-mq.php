<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="description">
        <meta content="" name="author">
        <title>
            FAQ MQ | Miracle
        </title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet">
        <link href="../css/main.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="../css/default.css" rel="stylesheet" type="text/css">
        <link href="../css/component.css" rel="stylesheet" type="text/css">
        <script src="../js/modernizr.custom.js"></script><!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="/images/favicon.ico" rel="shortcut icon">
    </head><!--/head-->
    <?php include '../header.php';?>
    <body>
        <!-- Tab panes -->
        <br>
        <br>
        <br>
        <section id="title">
            <div class="container">
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-6">
                        <h1 class="heavy">
                           10 things that you need to know about IBM’s new MQ Appliance
                        </h1>
                    </div>
                    <div class="col-sm-4">
                        <ul class="breadcrumb pull-right">
                            <li>
                                <a href="../">Home</a>
                            </li>
                            <li>
                            <a href="index.php">Library</a>
                        </li>
                            <li class="active">FAQ - MQ
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section><!--/#title-->
        <section class="container" id="faqs">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <ul class="faq unstyled">
                <li>
                    <span class="number">Q1</span>
                    <div>
                        <h6 class="heavy">
                           What capabilities does the appliance have in terms of memory?
                        </h6>
                        <p class="methodText">
                          The MQ Appliance has 2 on-board discs, which adds up to about 1 TB of usable memory for your messages on each disc which is RAID enabled for replication of 1 disc on to the RAID copy disc. SSD and Flash based memory is not available on the appliance due to the heavy writing load that is expected with a messaging appliance. Higher amounts of storage for logging data can be provided using fiber channels.The appliance also supports only circular logging but does not support linear logging.
                    </div>
                </li>
                <li>
                    <span class="number">Q2</span>
                    <div>
                        <h6 class="heavy">
                           What are the pricing models for the appliance?
                        </h6>
                        <p class="methodText">
                          The MQ Appliance comes in 2 physical form factors, the MQ M2000 A and the MQ M2000 B. Both the appliances consist of the same features in terms of deployment, security and messaging. The major difference between the low-cost M2000 B and the high-cost M2000 A is the number of processor cores, which means that the workload capability is reduced for the B appliance.
                        </p>
                    </div>
                </li>
                <li>
                    <span class="number">Q3</span>
                    <div>
                        <h6 class="heavy">
                            Can applications and agents be run on a MQ Appliance?
                        </h6>
                        <p class="methodText">
                          No, Applications cannot be run (or) deployed on a MQ Appliance. The appliance follows a Hub Pattern, which means that any application that wants to connect to the appliance must connect as a remote client. It is not possible to run agents such as MQ agents, MFT agents and monitoring agents as well on the appliance and they must all be used as remote clients to ensure messaging, file transfer and monitoring capabilities. This ensures that the workload of the appliance is all allocated to the messaging aspects.
                    </p>
                    </div>
                </li>
                <li>
                    <span class="number">Q4</span>
                    <div>
                        <h6 class="heavy">
                          Can we use an MQ Appliance in collaboration with existing MQ deployments?
                        </h6>
                        <p class="methodText">
                          The MQ Appliance is not disruptive to existing MQ deployments and can be integrated seamlessly with your existing MQ networks and clusters. The MQ Appliance runs MQ v8 firmware but it has the capability to connect with lower version MQ Deployments in your network.
                        </p>
                    </div>
                </li>
                <li>
                    <span class="number">Q5</span>
                    <div>
                        <h6 class="heavy">
                            Is it recommended to deploy the appliance in the DMZ like a Data Power Appliance?
                        </h6>
                        <p class="methodText">
                          No, this is not recommended for your MQ Appliance deployment as even though the appliance is based on IBM’s proven Data Power Appliance hardware, the MQ software built on top is not suited and designed for DMZ deployments. Also it is to be noted that the MQ appliance cannot be configured to act as a Data Power appliance.
                    </p>
                    </div>
                </li>
                <li>
                    <span class="number">Q6</span>
                    <div>
                        <h6 class="heavy">
                            Can we use the MQ Appliance for Managed File Transfer activities?
                        </h6>
                        <p class="methodText">
                         Yes, the MQ Appliance is still capable of handling MFT activities, but a MFT agent cannot be deployed on the appliance and files cannot be stored on the appliance. All file data (contents) is transferred across the network as MQ Messages, and remote MFT agents are deployed at end-points where the files are present. This helps to still maintain the managed quality of file transfer using the appliance.
                    </p>
                    </div>
                </li>
                <li>
                    <span class="number">Q7</span>
                    <div>
                        <h6 class="heavy">
                             Is a shared disk required to provide High Availability for messaging with the appliance?
                        </h6>
                        <p class="methodText">
                      No, the MQ Appliance comes with High Availability out-of-the-box and there is no shared file system (or) disk requirement for this. The appliance pair is configured for automatic failover for HA Queue Managers and also supports manual failover during rolling out upgrades. Replication is synchronous over the Ethernet(For 100% Fidelity) and it can be routed as well but this is not intended for long distances.
                    </p>
                    </div>
                </li>
                  <li>
                    <span class="number">Q8</span>
                    <div>
                        <h6 class="heavy">
                           How many Queue Managers can be run on an appliance?
                        </h6>
                        <p class="methodText">
                  You can run as many queue managers as you would like on a MQ Appliance, but it is advised to run only single-digit queue managers to make sure that you gain optimum performance and the highest performance from your MQ Appliance.
                    </p>
                    </div>
                </li>
                  <li>
                    <span class="number">Q9</span>
                    <div>
                        <h6 class="heavy">
                           Are the Paired Appliances used in a Master-Slave configuration?
                        </h6>
                        <p class="methodText">
                  The appliances need not be used in a Master-Slave configuration, and can both be used as Masters while providing failover options for their paired appliance. Each paired appliance can have its own unique Queue Managers running on it with replicated queue managers sitting on the other pair. Whenever one of the appliances fails, all the queue managers are activated on the paired second appliance.
                    </p>
                    </div>
                </li>
                  <li>
                    <span class="number">Q10</span>
                    <div>
                        <h6 class="heavy">
                           How are firmware updates made to the appliance?
                        </h6>
                        <p class="methodText">
                    All firmware updates are made through IBM certified firmware updates, which will be sent as single fix pack updates. These fix packs help to ensure a singular approach to firmware updates and make the appliance a locked-down version, which means agents, files (or) applications cannot be loaded onto the appliance. With this approach, it helps to ensure that the appliance has a single-always-updated image.
                    </p>
                    </div>
                </li>
                
            </ul>        
          <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                    <p class="methodText" style="font-style: italic">
                      <strong> Chanakya Lokam <br>
                       Director :
                       Marketing and Innovation<br></strong>
                       Miracle Software Systems, Inc. <br>
                       March 25th, 2015
                    </p>
                    <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div><a href="#"><button class="btn btn-primary btn-md" type="button">Download Product Brief</button></a><br>
                    <br><hr>
                    <!--Disqus-->
            <div id="disqus_thread">
          </div>
          <script type="text/javascript">
            /* * * CONFIGURATION VARIABLES * * */
            var disqus_shortname = 'team-mss';
            
            /* * * DON'T EDIT BELOW THIS LINE * * */
            (function() {
              var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
              dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
              (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
            })();
          </script>
          
          <noscript>
            Please enable JavaScript to view the 
            <a href="https://disqus.com/?ref_noscript" rel="nofollow">
              comments powered by Disqus.
            </a>
          </noscript>
            <!--Disqus-->
                    
                </div>
                <div class="col-sm-1"></div>
            </div>
        </section><!--#faqs-->
        <br>
        <?php include '../footer.php';?>
    </body>
</html>
                    