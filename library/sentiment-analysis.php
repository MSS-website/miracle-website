<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="description">
        <meta content="" name="author">
        <title>
           Understanding your users with Sentiment Analysis using Hadoop, Flume and MapReduce | Miracle
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
        <style>
            html { overflow: auto; } body { position: absolute; top: 20px; left: 20px; bottom: 20px; right: 20px; padding: 30px; overflow-y: scroll; overflow-x: hidden; } /* Let's get this party started */ ::-webkit-scrollbar { width: 12px; } /* Track */ ::-webkit-scrollbar-track { -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); -webkit-border-radius: 10px; border-radius: 10px; } /* Handle */ ::-webkit-scrollbar-thumb { -webkit-border-radius: 10px; border-radius: 10px; background: rgba(255,255,255,0.8); -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); } ::-webkit-scrollbar-thumb:window-inactive { background: rgba(255,0,0,0.4); }
        </style>
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
                <div class="col-sm-6 text-left">
                    <h1>
                  <strong> Understanding your users with Sentiment Analysis using </strong> <br>Hadoop, Flume and MapReduce
                    </h1>
                </div>
                <div class="col-sm-4 text-right">
                    <ul class="breadcrumb pull-right">
                        <li>
                            <a href="../">Home</a>
                        </li>
                        <li>
                            <a href="index.php">Library</a>
                        </li>
                        <li class="active">Sentiment Analysis
                        </li>
                    </ul>
                </div>
                <div class="col-sm-1"></div>
            </div>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <p class="methodText">What would today’s enterprises give to understand their users? Ever-Demanding Consumers and a Customer-Centric market, means that today’s organizations have to enable themselves to look within the sentiments of their users and understand their needs like never before.</p>
                    <p class="methodText">The explosion of Social and Mobile has led to huge stores of user data, which helps to explain their patterns, behaviors and needs. Incorporating these needs into an organizations business model can always help to drive new opportunities.</p>
                
                    <h5 class="heavy noMargin">The Business	Challenge
                    </h5>
                    <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                    <p class="methodText">Traditionally companies seeking feedback on their products and services send questionnaires and surveys to their users, or try to host a discussion group. This will rather be limited to a handful of people, which might not be always accurate when reflected to the entire population set.</p>
                    <p class="methodText">Companies need insight from their consumers to answer some of the following questions,</p>
                    <ul>
                        <li>
                            What type of products do visitors tend to buy?
                        </li>
                        <li>
                            Where does our company stand in terms of reputation?
                        </li>
                        <li>What features of the product are best used?</li>
                        <li>What needs to be changed to improve the quality of the product's next version? </li>
                        <li>How many people	the	product	has	reached?</li>
                        <li>Whether  the service is good, bad (or) ugly?</li>
                    </ul>
                     <h5 class="heavy noMargin">A New Feedback Model</h5>
                      <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                     <p class="methodText">
                        In today’s Digital era, it is important for organizations to be able to utilize the Social and Mobile trends to their advantage. The Digital Enterprise makes it’s business decisions based on data coming from the Internet. With new channels such as Facebook, Twitter and Mobile Apps, the way a user expresses their feelings has completely changed.
                    </p>
                     <p class="methodText">
                         With evolving technology, social media has become a one-step platform for sharing one's views and experiences. Companies are also increasingly concerned about their overall brand perception online.</p>  
                         <h5 class="heavy noMargin">The Business Challenge</h5>
                         <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div>
                      </div>
                    <p class="methodText">People are expressing their thoughts through online blogs, discussion forums, and social media platforms. If we take Twitter as example, millions of tweets are accumulated every day. If the tweets are analyzed, we can predict the success rate of a product or extract valuable information from them. This will help companies in their market research and even in predicting the future.</p>
                    
                    <img class="img-responsive" src="../images/library/flume.png"> <br>
                   <h5 class="heavy noMargin">Sentiment Analysis</h5> 
                   <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                 
                 
                <p class="methodText"><strong><font color="0d416b">
                  What is Sentiment Analysis?
                 </font></strong>  Sentiment Analysis is the process of taking a block of text and determining if the author of that text is showcasing positive, neutral (or) negative about a particular topic. In our use case, we have extended this analysis to Twitter, where we can analyze a user’s sentiment towards an organization based on a customized algorithm, which picks up specific key words from users tweets.</p>
                <h5 class="heavy noMargin">Understanding your Users</h5>
                <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                <p class="methodText"><strong> <font color="ef4048">What is the goal of this scenario?</font></strong> Enterprises should be able to take decisions based on the analysis of user’s sentiment from a collection of tweets.</p>
                <p class="methodText">Twitter is known for its ability to “TREND” the feelings, sentiments and emotions of users in a large and global scale. Analyzing these tweets based on keywords, usernames and hash tags can help organizations to understand the emotions of their users towards a particular subject.</p>
                <p class="methodText">To extract data from Twitter, a developer can use Twitter’s API. With this tweet data is crawled from the Twitter Web Page and the developers can extend this code in Java, Python, and many other languages. Despite the capability and simplicity of the Twitter API, it stills needs hands-on development experience and coding, and this can sometimes be a roadblock for enterprises.</p>
                <h5 class="heavy noMargin">Twitter Apps, Flume, HDFS and MapReduce</h5>
                <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                <p class="methodText">Instead a better approach would be to use <strong> <font color="00aae7"> Apache Flume,</font></strong> which helps to stream data and from a defined source to a destination in a <strong>configuration-based</strong> approach. With the simple configuration of a Flume Agent you can start streaming data from Twitter and land it directly in HDFS(Hadoop Distributed File System).</p>
                <p class="methodText">This scenario uses the following technologies to enable the sentiment analysis model for the enterprise = <strong><font color="0d416b">Twitter Apps, Hadoop Distributed File System(HDFS_, MapReduce and Apache Flume.</font></strong></p>
                <p class="methodText">The data which is filtered and streamed from Twitter(Based on Keywords and Hashtags) is in JSON format which is difficult to store and retrieve using traditional RDBMS systems.<strong> <font color="ef4048">HDFS</font> </strong>provides a better storage solution for this unstructured JSON data coming from Twitter, which can then easily be queried upon and analyzed using <strong> <font color="00aae7">MapReduce.</font></strong></p>
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
                    Mounika Chirukuri    <br>
                    Big Data Research Associate - MIL <br>

   
                       </strong>
                       Miracle Software Systems, Inc. <br>
                      November 16th, 2015
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