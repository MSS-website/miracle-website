<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <!-- meta tags start for Facebook -->
						<!-- meta tags end for facebook   -->
    <title>Microsoft Ignite | Miracle</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/css/default.css" />
	<link rel="stylesheet" type="text/css" href="/css/component.css" />
	<link href="/css/interconnect-2017.css" rel="stylesheet">
	 <link rel="shortcut icon" href="../../images/favicon.ico">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    </head><!--/head-->
     <?php include 'mheader.2.php';?>
    <body>
    <style>
    .hd
    {
      font-size: 40px !important;
      color: #FFF ; 
    }
    .hd1
    {
      font-size: 40px ;
       color: #FFF ; 
       margin-top:-35px ;
       margin-bottom:0px;
    }
    b,strong
    {
      font-weight:600 !important;
      
    }
     .tinted-image {
         background: 
        linear-gradient( rgba(0, 0, 0, 0.55), rgba(0, 0, 0, 0.55) ),  url("images/people.png");
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
         }
    .light{
      color:#fff;
    }
    .text-light{
      color:#fff !important;
    }
    .greyback{
    background-color:#eee;
    color:#000;
    padding:10px;
    }
    .light-blue{
      color:#00aae7;
    }
  .link-text:hover{
    color:#00aae7;
  }
   .modal .modal-header {
     padding:10px 10px 10px 15px !important;
   }
   .modal-title{
     text-transform:none !important;
   }
    .tabs-left, .tabs-right {
      border-bottom: none;
      padding-top: 2px;
    }
    .tabs-left {
      border-right: 1px solid #ddd;
    }
    .tabs-right {
      border-left: 1px solid #ddd;
    }
    .tabs-left>li, .tabs-right>li {
      float: none;
      margin-bottom: 2px;
    }
    .tabs-left>li {
      margin-right: -1px;
    }
    .tabs-right>li {
      margin-left: -1px;
    }
    .tabs-left>li.active>a,
    .tabs-left>li.active>a:hover,
    .tabs-left>li.active>a:focus {
      border-bottom-color: #ddd;
      border-right-color: transparent;
    }
    .tabs-right>li.active>a,
    .tabs-right>li.active>a:hover,
    .tabs-right>li.active>a:focus {
      border-bottom: 1px solid #ddd;
      border-left-color: transparent;
    }
    .tabs-left>li>a {
      border-radius: 4px 0 0 4px;
      margin-right: 0;
      display:block;
    }
    .tabs-right>li>a {
      border-radius: 0 4px 4px 0;
      margin-right: 0;
    }
    .nav-tabs {
        border-bottom: 0px solid #ddd !important;
        border-radius:0px;
    }      
    .text-left h1{color:#fff !important;}
    .pull-right li,.pull-right li a{color:#FFF !important;}
    .i-plain{
        text-shadow:none !important;
        font-size:28px !important;
    }
    .btn1 {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.428571429;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    cursor: pointer;
    border: 0px solid transparent;
    border-radius: 4px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    -o-user-select: none;
    user-select: none;
    width: 845px;
}
    .banner{
       margin-right:0px !important;
        margin-left:0px !important;
    }
    .banner h1{
        color:#ffffff !important;
        font-size:50px !important;
    }
    .bord
    {
        border-top: 4px solid #ef4048;
        width: 34%;
        margin-left: 15px;
       }
    .parallax {
        /* The image used */
        background: linear-gradient( rgba(0, 0, 0, 0.55), rgba(0, 0, 0, 0.55) ),url("images/People2.png");
        /* Set a specific height */
        /* Create the parallax scrolling effect */
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .btn-primary {
        color: #fff!important;
        background-color: #00aae7!important;
        border-color: #00aae7!important;
                  }
    .color-box1{
         background: 
         /* top, transparent red */
         linear-gradient(
         rgba(0, 170, 231, 0.70), 
         rgba(0, 170, 231, 0.70)
         ),
         /* your image */
         url("images/sessions.jpeg");
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
         opacity:0.9;
         color:#ffffff;
         padding:38px 20px 20px 20px;
         margin:5px 20px 11px 15px;
         width:30%;
    }
    .color-box2{
          background: 
         /* top, transparent red */
         linear-gradient(
         rgba(234, 64, 72, 0.80), 
         rgba(234, 64, 72, 0.80)
         ),
         /* your image */
         url("images/money.jpeg");
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
         opacity:0.9;
         color:#ffffff;
         padding:38px 20px 20px 20px;
         margin:5px 20px 11px 20px;
         width:30%;
    }
    .color-box3{
         background: 
         /* top, transparent red */
         linear-gradient(
         rgba(13, 65, 107, 0.70), 
         rgba(13, 65, 107, 0.70)
        ),
         /* your image */
         url("images/attendes.jpeg");
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
        opacity:0.9;
         color:#ffffff;
         padding:38px 20px 20px 20px;
         margin:5px 20px 11px 21px;
         width:30%;
    }
         .img1{
                 background: 
         /* top, transparent red */
         linear-gradient(
         rgba(0, 0, 0, 0.40), 
         rgba(0, 0, 0, 0.40)
         ),
         /* your image */
         url("");
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover; 
             }
             .img3{
                 background: 
         /* top, transparent red */
         linear-gradient(
         rgba(0, 0, 0, 0.40), 
         rgba(0, 0, 0, 0.40)
         ),
         /* your image */
         url("");
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover; 
             }
              .tabd{
              height:75px;background-color:#2368a0;color:#fff;
          }
         .card {
           box-shadow: 0 0 0 0 rgba(0,0,0,0.2);
           transition: 0.3s;
           border:2px solid #232527;
        }
        img {
            border-radius: 0 0 0 0;
        }

        .container {
            padding: 5px 16px;
        }
         #check{
         background: 
         /* top, transparent red */
         linear-gradient(
         rgba(0, 0, 0, 0.65), 
         rgba(0, 0, 0, 0.65)
         ),
         /* your image */
         url("images/mobile-first.jpeg");
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
          height:120px;
          opacity:0.9;
         margin-top:-20px;
        }
        .site-footer {
          padding-top: 11px !important;
          padding-bottom: 40px !important;
        }
        .widget {
            margin-bottom: 0px!important;
        }
        label
        {
            font-size:15px !important;
        }
        .text-dark{
             background-color:#232527;
             height:50px;
         }
        .grey-tile{
               height:110px;
               width:250px;
               background-color:#0d416b;
               margin-top:-20px;
               position:relative;
               transition: 1.5s;
              -moz-transition: 1.5s;
              -webkit-transition:1.5s;
              -o-transition: 1.5s;
              }
           .grey-tile:hover{
                background-color:#0d416b;
                 position:relative;
                 transition: 1.5s;
                margin-top:-100px;
                -moz-transition: 1.5s;
                -webkit-transition:1.5s;
                 -o-transition: 1.5s;
                        }
            .fb-icon{
                height:50px;
                width:80px;
                font-size:25px;
                text-align:center;
                padding:13px;
                color:#fff;
                background-color:#3b5998;
              }
             .fb-icon:hover{
                  color:#b7b2b3;
                 }
              .tw-icon{
                 height:50px;
                 width:80px;
                 font-size:25px;
                 text-align:center;
                 padding:13px;
                 color:#fff;
                 background-color:#29bdc1;
                }
                .tw-icon:hover{
                  color:#b7b2b3;
                 }
               .li-icon{
                    height:50px;
                    width:80px;
                    font-size:25px;
                    text-align:center;
                    padding:13px;
                    color:#fff;
                    background-color:#28a3d2;
                }
               .li-icon:hover{
                     color:#b7b2b3;
                     }
                .response{
                      border-radius:50%;
                 }	
                a{
                      text-decoration:none!important;
                 }
                .designation{
                         color:#b7b2b3;
                        }
 </style>
  <section id="interconnect" >
     <div class="tinted-image">
        <div class="container">
           <div class="row"> <br>
              <div class="col-sm-8 text-left">
                  <h1 class="heavy">Miracle @ Microsoft Ignite</h1>
              </div>
               <div class="col-sm-4 text-right">
                  <ul class="breadcrumb pull-right">
                    <li><a href="../">Home</a></li>
                    <li><a href="../events/recent.php">Events</a></li>
                    <li class="active">Microsoft Ignite</li>
                  </ul>
                </div>
             </div><br>
         </div>
     </div>
 </section><br>
    <div class="container">
         <div class="row">
            <div class="col-sm-12">
              <p class="methodText noMarginBottom">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas sem id rhoncus interdum. Cras venenatis dolor vitae maximus dapibus. Vivamus eleifend mi nec mollis ultrices. Quisque vel elit varius, bibendum nibh nec, vestibulum dolor. Fusce ut lorem at magna ullamcorper iaculis. Phasellus consequat ac dui eget bibendum. Nam elementum interdum maximus. Nunc ac ipsum sit amet felis feugiat suscipit. Cras mattis, ex at congue elementum, lorem magna suscipit quam, id suscipit velit lacus vitae magna. </p>   <br> 
            </div>
        </div>
        <div class="row">
           <div class="col-sm-4 color-box1">
                <center> 
                  <p style="font-size:35px;"> <strong>2000+ </strong></p>
                  <p style="font-size:25px;">Tech Sessions</p>
                </center>
           </div>
           <div class="col-sm-4 color-box2">
              <center>
                <p style="font-size:35px;"> <strong>8000$</strong> </p>
                <p style="font-size:25px;">Worth Training</p>
              </center>
          </div>
            <div class="col-sm-4 color-box3">
               <center> 
                <p style="font-size:35px;"><strong>20,000</strong></p>
                <p style="font-size:25px;">Attendees</p>
               </center>
            </div>
        </div><hr>
    </div>
        <div class="parallax">
            <div class="row banner"> 
                <div  class="" style="margin-top:70px">
                <center> 
                 <h1>Join us at Microsoft Ignite</h1>
                 <h3 style="color:#eeeeee !important">September 25 - 29, 2017 in Orlando, Florida</h3><br>
                 <h2 style="color:#eeeeee !important" class="heavy noMarginBottom noMarginTop">Meet Team Miracle</h2><br>
               </center><br> 
              <div class="row">
                 <div class="col-sm-1"></div>
                   <center> 
                  <div class="col-sm-2">
                      <img src="images/plokam.png" alt="Prasad Lokam" class="img-responsive" height="120" width="120"></img>
                      <h5 style="color:#eeeeee !important" class="heavy">Prasad Lokam</h5>
                      <p class="designation" style="margin-top:-5px;">CEO and President </p>
                 </div>
                 </center>
                 <div class="col-sm-2">
                   <center> 
                     <img src="images/Bharathi.png" alt="Bharathi R" class="img-responsive response" height="120" width="120"></img>
                     <h5 style="color:#eeeeee !important" class="heavy">Bharathi R</h5>
                      <p class="designation" style="margin-top:-5px;"> VP - Product Engineering </p>
                    </center> 
                </div>
                     <center>
                          <div class="col-sm-2">
                              <img src="images/pankaj11.png" alt="Pankaj" class="img-responsive" height="120" width="120"></img>
                              <h5 style="color:#eeeeee !important" class="heavy">Pankaj Lahote</h5>
                              <p class="designation" style="margin-top:-5px;">Practice Lead Microsoft </p>
                         </div>
                     </center>
                  <center> 
                    <div class="col-sm-2">
                         <img src="images/anuj.png" alt="Anuj tyagi" class="img-responsive" height="120" width="120"></img>
                        <h5 class="heavy" style="color:#eeeeee !important" >Anuj Tyagi </h5>
                         <p class="designation" style="margin-top:-5px;">Sr. Architect</p>
                    </div>
                </center>
                <center> 
                    <div class="col-sm-2">
                      <img src="images/Naresh.png" alt="Naresh" class="img-responsive" height="120" width="120"></img>
                      <h5 class="heavy" style="color:#eeeeee !important" >Naresh Jasotani  </h5>
                      <p  class="designation"style="margin-top:-5px;">Director <br>Data Services </p>
                    </div>
                 </center>
                <div class="col-sm-1"></div></div>
          </div>
     </div>    
  </div><br> 
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
               <div class="">
            <h5 class="heavy noMarginBottom noMarginTop">Experience Microsoft Ignite</h5><br>
            <div class="row">
            <div class="col-sm-4">
           <div class="img1">
            <img class="img-responsive" src="/events/microsoft-ignite-17/images/microsoft3.jpg" alt="Experience Future Tech" style="width:100%;">
           </div>
           <div style="background-color: rgba(140, 140, 140, 0.09) ! important;">
            <h5 class="heavy noMarginTop" style="padding: 9px 16px 0px 16px;">1,000+ hours of content</h5>
            <hr class="bord">
            <p class="methodText"  style="padding: 3px 18px 10px 16px;">700+ sessions, insights and roadmaps from industry leaders, 
            and deep dives and live demos.</p>
            <div class="widget-content  text-dark register-hover" style="margin-top:-10px;">
                     <a class="linkText1" href="#">
                        <center style="padding-top:13px;"><strong><font style="color:#ffffff;" onmouseout="this.style.color='#fff'" onmouseover="this.style.color='#b7b2b3'">Explore the show case</font></strong></center>
                     </a>
                  </div>
            </div>
            </div>
            <div class="col-sm-4 ">
            <div class="img2"> 
            <img class="img-responsive" src="/events/microsoft-ignite-17/images/microsoft2.jpg" alt="chat bots and self-cars" style="width:100%;">
            </div>
            <div style="background-color:rgba(140,140,140,0.09) !important;">
             <h5 class="heavy noMarginTop" style="padding: 9px 16px 0px 16px;">Connect with techies</h5>
               <hr class="bord">
              <p class="methodText" style="padding: 3px 16px 10px 16px;">Learn about the next generation of innovations that will shape the future of IT.</p>
             </div>
         <div class="widget-content  text-dark register-hover" style="margin-top:-10px;" >
                     <a class="linkText1" href="#" target="_blank">
                        <center style="padding-top:13px;"><strong><font style="color:#ffffff;" onmouseout="this.style.color='#fff'" onmouseover="this.style.color='#b7b2b3'">Read more today</font></strong></center>
                     </a>
                  </div>
            </div>
            <div class="col-sm-4">
            <div class="img3">
             <img class="img-responsive" src="/events/microsoft-ignite-17/images/microsoft1.jpg" alt="Experts Speak!" style="width:100%;">
            </div>
             <div style="background-color:rgba(140,140,140,0.09) !important;">
             <h5 class="heavy noMarginTop" style="padding: 9px 16px 0px 16px;">Explore the expo</h5>
             <hr class="bord">
             <p class="methodText" style="padding: 3px 16px 10px 16px;">Get your questions answered from the people who built the products you use everyday.</p>
             </div>
             <div class="widget-content  text-dark register-hover" style="margin-top:-10px;">
                     <a class="linkText1" href="#" target="_blank">
                        <center style="padding-top:13px;"><strong><font style="color:#ffffff;" onmouseout="this.style.color='#fff'" onmouseover="this.style.color='#b7b2b3'">Check the agenda</font></strong></center>
                     </a>
                  </div>
            </div>
            </div>
        </div><br/>
  </div>
</div>
</div>
              <div class="container">
            <h5 class="heavy noMarginBottom"> Speakers at Microsoft Ignite</h5><br>
           </div>
         <div class="container">
            <div class="row">
          <div class="col-sm-3">
          <img src="/events/microsoft-ignite-17/images/Satya.jpg" alt="Satya" class="img-responsive"  height="100%" width="100%" ></img>
           <a > <div class="widget-content themed-background text-light-op" style="background-color:rgba(140,140,140,0.15) !important;padding:15px;width:100%;border-bottom: 5px solid #ef4048;">
                   <center><strong><font color="#000000">Satya Nadella</font></strong></center>
                    <center><font color="#000000">Chief Executive Officer,<br> Microsoft   </font></center>
                  </div> </a>
          </div>
          <div class="col-sm-3">
          <img src="/events/microsoft-ignite-17/images/Harry_Shum.jpg" alt="Harry shum" class="img-responsive"  height="100%" width="100%" ></img>
          <a> <div class="widget-content themed-background text-light-op" style="background-color:rgba(140,140,140,0.15)!important;padding:15px;width:100%;border-bottom: 5px solid #ef4048;">
                   <center><strong><font color="#000000">Harry Shum</font></strong></center>
                   <center><font color="#000000">Executive Vice President, <br>Microsoft</font></center>
                  </div> </a>
          </div>
           <div class="col-sm-3">
          <img src="/events/microsoft-ignite-17/images/Joseph_Sirosh.png" alt="Joseph sirosh" class="img-responsive" height="100%" width="100%" ></img>
           <a> <div class="widget-content themed-background text-light-op" style="background-color:rgba(140,140,140,0.15) !important;padding:15px;width:100%;border-bottom: 5px solid #ef4048;">
                   <center><strong><font color="#000000">Joseph Sirosh</font></strong></center>
                   <center><font color="#000000">Corporate Vice President, Data Group, Microsoft</font></center>
                  </div> </a>
          </div>
          <div class="col-sm-3">
          <img src="/events/microsoft-ignite-17/images/Jeff_Teper.png" alt="jeff teper" class="img-responsive"  height="100%" width="100%" ></img>
          <a> <div class="widget-content themed-background text-light-op" style="background-color:rgba(140,140,140,0.15)!important;padding:15px;width:100%;border-bottom: 5px solid #ef4048;">
                   <center><strong><font color="#000000">Jeff Teper</font></strong></center>
                   <center><font color="#000000">Corporate Vice President,<br> Microsoft</font></center>
                  </div> </a>
          </div>
          </div>
            </div> 

</body>
  <?php include '../../footer.php';?>

</html>