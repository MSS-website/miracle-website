<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
      <title>
           Corporate Collaterals 
        </title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/main.css" rel="stylesheet" type="text/css">
        <link href="../css/default.css" rel="stylesheet" type="text/css">
        <link href="../css/component.css" rel="stylesheet" type="text/css">
        <link href="../css/font-awesome.min.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="../images/favicon.ico" rel="shortcut icon">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css" rel="stylesheet">
        
         <link href="style.css" rel="stylesheet">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
       
        <script>
           $(document).ready(function(){
    $("#addClass").click(function(){
        $("#chat-msngr").show();
    });
    $("#removeClass").click(function(){
        $("#chat-msngr").hide();
    });
});
        </script>
        <script>
                $(document).ready(function() {
    $('#chat').delay(2000).fadeIn(400);
});
              $(document).ready(function() {
    $('#chat1').delay(3000).fadeIn(400);
});
 $(document).ready(function() {
    $('#chat2').delay(4000).fadeIn(400);
});
          
            </script> 
            
         
         
         <style>
            
/* Media Items */

.tinted-image {
  background: 
    /* top, transparent red */
    linear-gradient(
      rgba(0, 0, 0, 0.55), 
      rgba(0, 0, 0, 0.55)
    ),
    /* your image */
    url("API-Management/images/key.jpg");
-webkit-background-size: cover;
              -moz-background-size: cover;
              -o-background-size: cover;
              background-size: cover;
           
    
}

.breadcrumb {margin:0px !important;}
.breadcrumb li,.breadcrumb li a{color:#FFF !important;}
.text-dark, .text-dark:hover, a.text-dark, a.text-dark:hover, a.text-dark:focus {
    background-color: #232527;
    color:#fff;
}
.title-light{
    color:#fff !important;
    
}
body
{
    font-family: 'Open Sans', sans-serif;
    }
    .popup-box {
   background-color: #ffffff;
    border: 1px solid #b0b0b0;
    bottom: 0;
   display:none;
    height: 415px;
    position: fixed;
    right: 70px;
    width: 300px;
    font-family: 'Open Sans', sans-serif;
}
.round.hollow {
    margin: 40px 0 0;
}
.round.hollow a {
    border: 2px solid #ff6701;
    border-radius: 77px;
    color: red;
    color: #ff6701;
    font-size: 29px;
    padding: 14px 17px;
    text-decoration: none;
    font-family: 'Open Sans', sans-serif;
}
.round.hollow a:hover {
    border: 2px solid #000;
    border-radius: 77px;
    color: red;
    color: #000;
    font-size: 29px;
    padding: 14px 17px;
    text-decoration: none;
}
.glyphicon{
    top:5px !important;
}
.chat_window {
  position: absolute;
  width: calc(100% - 20px);
  max-width: 400px;
  height: 500px;
  border-radius: 10px;
  background-color: #fff;
  left: 50%;
  top: 50%;
  transform: translateX(-50%) translateY(-50%);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
  background-color: #f8f8f8;
  overflow: hidden;
  margin-top:140px;
  display:none;
  z-index:1;
}

.top_menu {
  background-color: #fff;
  width: 100%;
  padding: 20px 0 15px;
  box-shadow: 0 1px 30px rgba(0, 0, 0, 0.1);
}
.top_menu .buttons {
  margin: 3px 0 0 20px;
  position: absolute;
}
.top_menu .buttons .button {
 
  height: 31px;
  border-radius: 50%;
  display: inline-block;
  margin-right: -3px;
  position: relative;
}
.top_menu .buttons .button.close {
  background-color: #f5886e;
}
.top_menu .buttons .button.minimize {
  background-color: #fdbf68;
}
.top_menu .buttons .button.maximize {
  background-color: #a3d063;
}
.top_menu .title {
  text-align: center;
  color: #bcbdc0;
  font-size: 20px;
}

.messages {
  position: relative;
  list-style: none;
  padding: 20px 10px 0 10px;
  margin: 0;
  height: 347px;
  overflow: scroll;
}
.messages .message {
  clear: both;
  overflow: hidden;
  margin-bottom: 20px;
  transition: all 0.5s linear;
  opacity: 0;
}
.messages .message.left .avatar {
  background-color: #f5886e;
  float: left;
}
.messages .message.left .text_wrapper {
  background-color: #ffe6cb;
  margin-left: 20px;
}
.messages .message.left .text_wrapper::after, .messages .message.left .text_wrapper::before {
  right: 100%;
  border-right-color: #ffe6cb;
}
.messages .message.left .text {
  color: #c48843;
}
.messages .message.right .avatar {
  background-color: #fdbf68;
  float: right;
}
.messages .message.right .text_wrapper {
  background-color: #c7eafc;
  margin-right: 20px;
  float: right;
}
.messages .message.right .text_wrapper::after, .messages .message.right .text_wrapper::before {
  left: 100%;
  border-left-color: #c7eafc;
}
.messages .message.right .text {
  color: #45829b;
}
.messages .message.appeared {
  opacity: 1;
}
.messages .message .avatar {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  display: inline-block;
}
.messages .message .text_wrapper {
  display: inline-block;
  padding: 20px;
  border-radius: 6px;
  width: calc(100% - 85px);
  min-width: 100px;
  position: relative;
}
.messages .message .text_wrapper::after, .messages .message .text_wrapper:before {
  top: 18px;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}
.messages .message .text_wrapper::after {
  border-width: 13px;
  margin-top: 0px;
}
.messages .message .text_wrapper::before {
  border-width: 15px;
  margin-top: -2px;
  position:relative;
}
.messages .message .text_wrapper .text {
  font-size: 18px;
  font-weight: 300;
}

.bottom_wrapper {
  position: relative;
  width: 100%;
  background-color: #fff;
  padding: 20px 20px;
  position: absolute;
  bottom: 0;
}
.bottom_wrapper .message_input_wrapper {
  display: inline-block;
  height: 50px;
  border-radius: 25px;
  border: 1px solid #bcbdc0;
  width: calc(100% - 160px);
  position: relative;
  padding: 0 20px;
}
.bottom_wrapper .message_input_wrapper .message_input {
  border: none;
  height: 100%;
  box-sizing: border-box;
  width: calc(100% - 40px);
  position: absolute;
  outline-width: 0;
  color: gray;
}
.bottom_wrapper .send_message {
  width: 140px;
  height: 50px;
  display: inline-block;
  border-radius: 50px;
  background-color: #a3d063;
  border: 2px solid #a3d063;
  color: #fff;
  cursor: pointer;
  transition: all 0.2s linear;
  text-align: center;
  float: right;
}
.bottom_wrapper .send_message:hover {
  color: #a3d063;
  background-color: #fff;
}
.bottom_wrapper .send_message .text {
  font-size: 18px;
  font-weight: 300;
  display: inline-block;
  line-height: 48px;
}

.max{
   border-radius: 48px;
width: 61px;
height: 57px;
}
.msg{
    width:285px;
    background-color:#ffe6cb;
    float:right;
    height:63px;
    position: relative;
    border-radius:20px;
    
    
    
}
.msg1{
    width:285px;
    background-color:#ffe6cb;
    float:left;
    height:63px;
    position: relative;
    border-radius:20px;
    
    
    
}
.msg2{
    width:285px;
    background-color:#ffe6cb;
    float:right;
    height:63px;
    position: relative;
    border-radius:20px;
    margin-top:4px;
    
    
    
}
#chat{
    display:none;
}
#chat1{
    display:none;
}
#chat2{
    display:none;
}


         </style>      
            

        <?php include '../header.php';?>
    </head>
    
    <body >
        
     
        
        
        <br><br><br>
        <div class="emerald tinted-image">
        <div class="container ">
             <div class="row">
                  <br><br><br>
             <div class="col-sm-6 text-left">  
            <h1 class="heavy title-light">Corporate Collaterals</h1>
          
          </div>
          <div class="col-sm-6 text-right">
            <ul class="breadcrumb pull-right">
                <li><a href="#">Home</a></li>
                <li><a href="#">Technologies</a></li>
                <li  class="active" >Corporate Collaterals</li>
                
            </ul>
          </div>
          
          </div>
          </div>
          <br>
        </div>
           
            <br><br><br><br><br>
          
          <div class="row">
              <div class="col-sm-8"></div>
              <div class="col-sm-4">
                  <div class="chat_window" id="chat-msngr">
    <div class="top_menu">
        
            <div class="title">Watson Live Chat <i id="removeClass"  class="glyphicon glyphicon-off pull-right"></i>
            </div>
            
     </div>
            <ul class="messages">
                <li id="chat">
                <div class="button maximize max" style="float:left;">
                
            </div>
            <div class="msg" >
               <center><p style="margin-top:23px;"><strong>Hello!!!!</strong></p></center> 
            </div>
            </li>
            <li id="chat1">
               <div class="button minimize max" style="float:right;background-color:#a3d063">
                
            </div>
            <div class="msg1" >
               <center><p style="margin-top:23px;"><strong>This is Watson !1</strong></p></center> 
            </div> 
            </li>
             <li id="chat2"><br>
                  <div class="button minimize max" style="float:left;">
                
            </div>
            <div class="msg2">
                <center><p style="margin-top:23px;"><strong>How are you doing ?</strong></p></center> 
            </div>
             </li>
            </ul>
            <div class="bottom_wrapper clearfix">
                <div class="message_input_wrapper">
                    <input class="message_input" placeholder="Type your message here..." />
                    </div>
                    <div class="send_message">
                        <div class="icon">
                            
                        </div>
                        <div class="text">Send
                        </div>
                        </div>
                        </div>
        </div>
              </div>
          </div>
          
          
          <div class="container">
              <div class="container text-center">
	<div class="row">
	<div class="col-sm-2"></div>
	<div class="col-sm-10">
	    <div class="round hollow text-center">
        <a href="#" id="addClass"><span class="glyphicon glyphicon-comment"></span></a>
        </div>
	</div>
        
        
       
	</div>
</div>


 
              
              
                   </div>
           <br><br><br><br><br>
<?php include '../footer.php';?>
          
     <script src="API-Management/js/vendor/jquery-2.2.0.min.js"></script>
        <script src="API-Management/js/vendor/bootstrap.min.js"></script>
        <script src="API-Management/js/plugins.js"></script>
        <script src="API-Management/js/app.js"></script>
    </body>
    
</html>