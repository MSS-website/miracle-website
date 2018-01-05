<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="description">
        <meta content="" name="author">
        <title>
Contextual Mobile Experiences with IBM Mobile First</title>
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
               
                <div class="col-sm-6 text-left">
                    <h1>
                  <strong>Contextual Mobile Experiences with IBM Mobile First</strong>
                    </h1>
                </div>
                <div class="col-sm-6 text-right">
                    <ul class="breadcrumb pull-right">
                        <li>
                            <a href="../">Home</a>
                        </li>
                        <li>
                            <a href="index.php">Library</a>
                        </li>
                        <li class="active">WESB-to-IIB
                        </li>
                    </ul>
                </div>
                
            </div>
            <div class="row">
                <div class="col-sm-1"></div>
                 <div class="col-sm-10">
            </div>
           <div class="row">
<div class="col-sm-7">
<p class="methodText">Today's Digital Marketers recognize the power of push and are aggressively integrating these real-time notifications into their Mobile Marketing strategies. </p><br>
<p class="methodText"><strong>The power of the push depends on your perspective. </strong>To users, the push notification represents instant access to information with little to no energy on their part. Want to know if someone scored on your Fantasy Football team? Worried about traffic? Looking for the latest deals? Push notifications deliver key info without consuming user's time or money.</p>
</div>
<div class="col-sm-5">
<img src="../images/library/Mobile.png" class="img-responsive" >
</div>
</div>
<h5 class="heavy noMargin">Contextual Experiences</h5>
 <div class="row">
                        <div class="col-sm-3 noMarginBottom">
                            <hr>
                        </div>
                    </div>
<p class="methodText">Mobile Users in the Digital Era expect highly personalized, omni-channel and multi-device experiences in everything that they do. Organizations can take data from sources such as Location, Weather, History and more to enable highly specific messages to users. This drives a new breed of conversations with your end users, which allows you to have highly personalized conversations with your users. </p>
<h5 class="heavy noMargin">Technology at Play</h5>
 <div class="row">
                        <div class="col-sm-3 noMarginBottom">
                            <hr>
                        </div>
                    </div>
<h6 class="heavy noMargin">IBM Mobile First Platform</h6><br>
<p class="methodText">IBM MFP enables you to build, enhance and continuously deliver mobile apps more efficiently. Along with Geo-Location Services, IBM Mobile First Platform provides support for scalable data services, push notifications, secure integration adapters and native mobile services. </p>
<p class="methodText"><strong>Push Notifications :</strong> Light-Weight notifications that can be sent without the application even running! Who doesn't love push notifications? </p>
<p class="methodText"><strong>Geo-Fencing :</strong> Geo-Fencing allows you to build invisible fences and define business areas. You can then use these business areas to define triggers like <strong>"entered the business area"</strong> to enable customized notifications. </p>
<p class="methodText"><strong>Location Services : </strong>IBM MFP allows us to collect Device Sensor information related to locational context which can then invoke triggers and even handlers running on the Mobile First Server. </p>
<h5 class="heavy noMargin">A Working Example - Context Aware City!</h5>
 <div class="row">
                        <div class="col-sm-3 noMarginBottom">
                            <hr>
                        </div>
                    </div>
 <div class="row">
<div class="col-sm-6">
<img src="../images/library/Map.png" class="img-responsive">
</div>
<div class="col-sm-6">
<p class="methodText">
<strong>What if your city could talk and interact with you based on your location?</strong> Imagine driving through downtown and receiving a notification that there is a sale going on in your favorite retail store. How do they know? You're in the area, and your past history shows that you love shopping on Sunday's in the summer. </p>
<p class="methodText">
The City IT Department can use Geo-Fences to create individual business zones within the city. In the picture above we have 2 business zones defined, and when the user enters Zone #2 they get specific messages based on time, history, weather and location. Business Zones(Geo-Fences) can be defined via WIFI, (or) within a radius based on longitude and latitudes. </p>
</div>
 </div>
<h5 class="heavy noMargin">Context Aware Mobile Application Architecture</h5>
 <div class="row">
                        <div class="col-sm-3 noMarginBottom">
                            <hr>
                        </div>
                    </div>
<p class="methodText">
<strong>So what exactly is Mobile First doing when a user enters a Business Zone?</strong> Application Code on the Mobile Devices, through acquisition policies, handles the collection of contextual data from device sensors. Whenever a change occurs in the context of the device triggers can be activated which can lead to certain events happening like a push notification being sent. 
</p>
<img src="../images/library/Context_Mobile_MFP.png" class="img-responsive">
<p class="methodText">
Once the trigger is activated the request can be handled by a trigger callback on the Client-Side (or) an event can be created with the Device Context and sent to the Service Side Runtime for further steps.
</p>
<p class="methodText">
In our example above, the device would run the trigger when it enters (or) leaves a business zone which will send an event to the Mobile First Server. Using the available adapters in MobileFirst, we can record the event in our database using the SQL Adapter and can create push notifications for the user based on the context. 
</p>
</div>
                  <div class="col-sm-1"></div>
           </div>
          <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                    <p class="methodText" style="font-style: italic">
                     <strong>
                    Keerthi Imandi    <br>
                    DevOps Research Associate - MIL <br>

   
                       </strong>
                       Miracle Software Systems, Inc. <br>
                      November 12th, 2015
                    </p>
                    <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div><a href="#"><button class="btn btn-primary btn-md" type="button">Download Tech </button></a><br>
                    <br>
                             <hr>
                    <!--Disqus-->
           
          
         
                    
                </div>
                <div class="col-sm-1"></div>
            </div>
        </section><!--/#about-us-->
        <?php include '../footer.php';?>
    </body>
</html>