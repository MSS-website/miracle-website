<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Employee Growth, Diversified Services and Customer Satisfaction are the way forward for the team at Miracle">
    
    <meta name="author" content="">
    
    <title>
     Content Syndication
    </title>
    
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    
    <link href="../css/main.css" rel="stylesheet">
    
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/default.css"/>
    <link rel="stylesheet" type="text/css" href="../css/component.css"/>
   
    <!--[if lt IE 9]>

<script src="js/html5shiv.js">s
</script>

<script src="js/respond.min.js">
</script>
<![endif]-->
  
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  
  <link rel="shortcut icon" href="../images/favicon.ico">
  

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  


		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>


<style>
   .tinted-image {
         background: 
         /* top, transparent red */
         linear-gradient(
         rgba(0, 0, 0, 0), 
         rgba(0, 0, 0, 0)
         ),
         /* your image */
         url("vmenu/interconnect-2017-paralx.png");
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
         
         }
</style>

  </head>
  
  <?php include '../header.php';?>
  <body>
    
     <div class="tinted-image">
        <div class="container">
        <div class="row"> <br><br><br>
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
               </div>
               <br>
            </div>
            </div>
  <br><br><br>  <br><br><br><br><br><br>
  
 
  
  
  <br><br><br>
  <div class="container">
      <div class="row">
          <div class="col-sm-12">
              
               
<input type="text" id="myans" value="">
<button type="button" onclick="myWish()">Click me</button>
<p id="srini"></p>
<script>
    function myWish(){
        
        var text = document.getElementById("myans").value;
        
        document.getElementById("srini").innerHTML = document.getElementById("srini").innerHTML  + "<br>"+  text;
        
        
    }
</script>
              
              
              
             <p id="textchange">this is the sample text</p>
  <button type ="button" onclick="document.getElementById('textchange').innerHTML='mytext'">click me</button>
  
  
   <br><br><br>  <br><br><br>
  
         <img src="cubicle-contest.png" id="demo" height="200" width="300"></img>
         <button type="button" onclick="document.getElementById('demo').src = 'Badge2.png'">on image</button>
         <button type="button" onclick="document.getElementById('demo').src = 'cubicle-contest.png'">change image</button>
   <br><br><br>  <br><br><br>
   <p id="demo2">This is the sample text</p>
   <button type="button" onclick="document.getElementById('demo2').style.fontSize = '30px'">change color</button>
       <br><br><br>  <br><br><br>
       
       <button type="button" onclick="alert()">click me for alert</button>
       <br><br><br>  <br><br><br>
        
       <p id="add">add value </p>
       <button type="button"onclick="addfunction()">click for ans</button>
       
       <script>
           function addfunction(){
               var x = 25, 
               y = 35,
               z = x + y;
               document.getElementById('add').innerHTML = z ;
           }
       </script>
        <br><br><br>  <br><br><br>
        
        <p id="mul" >this is the sample text</p>
        <button type="button" onclick="mulFunction()">click me</button>
        
        <button type="button" onmouseout="mulFunction()">click me</button>
        
        <script>
            function mulFunction(){
                document.getElementById('mul').innerHTML = "the text";
            }
        </script>
        
        
        <br><br><br>  <br><br><br>
        <p id="textdisplay">john<br> doe</p>
        <button type="button" onclick="textfunction()">click for text change</button>
        <script>
            function textfunction(){
                text = "john doe"
                document.getElementById('textdisplay').innerHTML = text ;
            } 
        </script>
        <br><br><br>  <br><br><br>
        <p id="textdisplay2"></p>
        <button type="button" onclick="textfunction()">click for ans change</button>
        <script>
            function textfunction(){
                var person = {firstName:"srini", lastName:"Vasu", age: 23,
                    fullName : function(){
                      return this.firstName + " " + this.lastName;
                    }
                };
                document.getElementById('textdisplay2').innerHTML = person.fullName();
            } 
        </script>
        
        <br><br><br>  <br><br><br>
        
          </div>
      </div>
  </div>
  
  
  
  
  
    
  <br><br><br>  <br><br><br>
  
  
  
  
  <div class="container">
  <div class="row">
    <div class="col-sm-12">
      <table>
       <thead>
         <tr>
           <th>Cost</th>
           <th>Unit</th>
           <th>Total</th>
         </tr>
       </thead>
       <tbody>
         <tr>
           <td>200</td>
           <td>
             <input onmouseout="multiplication()" name="table" id="mul" type="text" />
               
             
           </td>
           <td>
             <input type="text" id="total" value="$0"/>
           </td>
         </tr>
         
         <tr >
           <td>400</td>
           <td>
             <select onchange="multiplication2()" id="mul2">
               <option value="0">0</option>
               <option value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
             </select>
           </td>
           <td>
             <input type="text" id="total2" value="0">
           </td>
         </tr>
         
       </tbody>
        
      </table>
    </div>
  </div>
  
  </div>












  
  <script>
   function multiplication(){
     var x = 200;
     var y = document.getElementById('mul').value;
     var z = y * x;
     document.getElementById('total').value = "$" + z;
   }
   
   function multiplication2(){
     var x = 400;
     var y = document.getElementById('mul2');
     var value = y[y.selectedIndex].text;
     var z = value * x;
     document.getElementById('total2').value = z;
   }
   
  </script>
  
  
 
  
  <br><br><br>  <br><br><br>  <br><br><br>  <br><br><br>  <br><br><br>  
   
  
   
   
   <?php include '../footer.php';?>
</html>