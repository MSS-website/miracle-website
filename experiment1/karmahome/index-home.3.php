<!DOCTYPE html>
 <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
   <link href='http://fonts.googleapis.com/css?family=Comfortaa:400,700' rel='stylesheet' type='text/css'>
	  <link rel="stylesheet" href="../css/bootstrap.css">
      <!-- CSS Bootstrap & Custom -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">  
    <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="css/templatemo_style.css" rel="stylesheet" type="text/css">

         <script type="text/javascript" src="http://100widgets.com/js_data.php?id=249"></script> 
       
  
</head>
 
<style>
a{text-decoration:none !important;}cbp-hrmenu{margin-top:2em !important;}
.arrow-left {
    display: block;
    width: 30px;
    height: 58px;
    background: url(left_arrow.png) no-repeat 0 0;
    position: absolute;
    left: 1px;
    margin-top: 20px;
}
.arrow-box {
    position: relative;
    color: white;
    background-color: #0d416b;
    border-radius: 4px;
    margin-left: 16px;
    height: 100%;
}


.fa {
    display: inline-block;
    font-family: FontAwesome;
    font-style: normal;
    font-weight: normal;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
</style>

<body>

<br><br><br>
 
  <section id="services">
    <div class="outer_container">
      <div class="container">
        <div class="row">
         
          <div class="col-md-2 col-sm-2 col-xs-2">
            <div class="services_buttons">
              <ul id="services_tabs">
                <li class="icon-button active" data-target="#pencil"><i class="glyphicon glyphicon-pencil" style="vertical-align: middle"></i></li>
                <li class="icon-button" data-target="#cog"><i class="glyphicon glyphicon-cog"></i></li>            
                <li class="icon-button" data-target="#signal"><i class="glyphicon glyphicon-signal"></i></li>
              </ul>
            </div>
          </div>
          <div class="col col-md-5 col-sm-10 col-xs-10 center-row" id="services_content">
            <div class="arrow-left"></div>
            <div class="arrow-box center-row">
              <div class="tab-content center">              
                <div class="tab-pane fade in active" id="pencil">
                  	<h3>Web Design</h3>
                  	<p>Donec vehicula lectus ac ultrices aliquam. Pellentesque aliquam erat justo, nec auctor sem vulputate vitae. Praesent varius neque in dolor cursus dictum. Donec dignissim nibh nec adipiscing vehicula.</p>
               	  	<p><a href="#">Mobile website template</a> is ready to use for your website. Quisque euismod enim et dignissim dictum. Vivamus eu tortor pharetra, mollis orci eget, pulvinar nisl.</p>
                </div>
                <div class="tab-pane fade" id="cog">
                	<h3>Online Marketing</h3>
                  	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tempor elit nec metus pellentesque posuere. Donec velit arcu, vehicula nec tellus eu.</p>
                  	<p>Vestibulum ac enim.Vestibulum at mollis justo, eu elementum nisi. Sed consequat odio eget nunc tristique venenatis. Nullam non eros molestie, tristique libero ut, lacinia diam.</p>
                </div>
                <div class="tab-pane fade" id="signal">
                	<h3>Social Media</h3>
                  	<p>Quisque gravida ac nisl nec ultrices. Mauris tincidunt magna vitae feugiat tincidunt. Maecenas semper quis arcu in porta.</p>
                  	<p>Download free templates for your websites. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean adipiscing quam sed neque dapibus, id convallis mauris eleifend. Quisque sit amet nisl a ante pulvinar sodales.</p>
                </div>
              </div>                                     
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
 
  <script src="js/templatemo_custom.js"></script>
  <script defer src="js/jquery.flexslider.js"></script>
  
  <script type="text/javascript">

    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
          $('.menu').singlePageNav();
        }
      });
    });

    $('#go-top').click(function(event) {
      event.preventDefault();
      jQuery('html, body').animate({scrollTop: 0}, 1000);
      return false;
    });

  </script>
  <!-- templatemo 403 karma -->

</body>
</html>