<!DOCTYPE html>
<html lang="en">
  <head>
    

    <title>
   Email Siganture
    </title>
    
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    
    <link href="../css/main.css" rel="stylesheet">
    
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/default.css"/>
    <link rel="stylesheet" type="text/css" href="../css/component.css"/>
    <script src="../js/modernizr.custom.js"></script>
    <link rel='stylesheet' type='text/css' href='https://static.ctctcdn.com/h/contacts-embedded-signup-assets/1.0.2/css/signup-form.css'>
    <script type='text/javascript' src='https://static.ctctcdn.com/h/contacts-embedded-signup-assets/1.0.2/js/signup-form.js'></script>

  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  
  <link rel="shortcut icon" href="../images/favicon.ico">
  <link rel="stylesheet" href="bootstrap.vertical-tabs.css">
  
  </head>
<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
  

.tabs-below > .nav-tabs,
.tabs-right > .nav-tabs,
.tabs-left > .nav-tabs {
  border-bottom: 0;
}

.tab-content > .tab-pane,
.pill-content > .pill-pane {
  display: none;
}

.tab-content > .active,
.pill-content > .active {
  display: block;
}

.tabs-below > .nav-tabs {
  border-top: 1px solid #ddd;
}

.tabs-below > .nav-tabs > li {
  margin-top: -1px;
  margin-bottom: 0;
}

.tabs-below > .nav-tabs > li > a {
  -webkit-border-radius: 0 0 4px 4px;
     -moz-border-radius: 0 0 4px 4px;
          border-radius: 0 0 4px 4px;
}

.tabs-below > .nav-tabs > li > a:hover,
.tabs-below > .nav-tabs > li > a:focus {
  border-top-color: #ddd;
  border-bottom-color: transparent;
}

.tabs-below > .nav-tabs > .active > a,
.tabs-below > .nav-tabs > .active > a:hover,
.tabs-below > .nav-tabs > .active > a:focus {
  border-color: transparent #ddd #ddd #ddd;
}

.tabs-left > .nav-tabs > li,
.tabs-right > .nav-tabs > li {
  float: none;
}

.tabs-left > .nav-tabs > li > a,
.tabs-right > .nav-tabs > li > a {
  min-width: 74px;
  margin-right: 0;
  margin-bottom: 3px;
}

.tabs-left > .nav-tabs {
  float: left;
  margin-right: 19px;
  border-right: 1px solid #ddd;
}

.tabs-left > .nav-tabs > li > a {
  margin-right: -1px;
  -webkit-border-radius: 4px 0 0 4px;
     -moz-border-radius: 4px 0 0 4px;
          border-radius: 4px 0 0 4px;
}

.tabs-left > .nav-tabs > li > a:hover,
.tabs-left > .nav-tabs > li > a:focus {
  border-color: #eeeeee #dddddd #eeeeee #eeeeee;
}

.tabs-left > .nav-tabs .active > a,
.tabs-left > .nav-tabs .active > a:hover,
.tabs-left > .nav-tabs .active > a:focus {
  border-color: #ddd transparent #ddd #ddd;
  *border-right-color: #ffffff;
}

.tabs-right > .nav-tabs {
  float: right;
  margin-left: 19px;
  border-left: 1px solid #ddd;
}

.tabs-right > .nav-tabs > li > a {
  margin-left: -1px;
  -webkit-border-radius: 0 4px 4px 0;
     -moz-border-radius: 0 4px 4px 0;
          border-radius: 0 4px 4px 0;
}

.tabs-right > .nav-tabs > li > a:hover,
.tabs-right > .nav-tabs > li > a:focus {
  border-color: #eeeeee #eeeeee #eeeeee #dddddd;
}

.tabs-right > .nav-tabs .active > a,
.tabs-right > .nav-tabs .active > a:hover,
.tabs-right > .nav-tabs .active > a:focus {
  border-color: #ddd #ddd #ddd transparent;
  *border-left-color: #ffffff;
}
.textarea {
    position:relative;
    width: 450px;
    height: 200px;
    border: 1px solid #ddd;
    font-family:Helvetica, Arial, san-serif;
    font-size:12px;
    overflow:scroll;
    overflow-x:hidden;
    overflow-y:scroll;
}
button {
    float:right;
    width: 60px;
    margin: 5px;
}
textarea {
    position:relative;
    border:none;
    width:232px;
    height: 95px;
    resize: none
}

</style>

  
  <?php include '../header.php';?>
  <body>
       <section class="container" id="about-us">
            <br>
            <br>
          <br><br>
            <div class="row">
              
                <div class="col-sm-6 text-left">
                    <h1>
                    <strong>   Email Signature</strong>
                    </h1>
                </div>
                <div class="col-sm-6 text-right">
                    <ul class="breadcrumb pull-right">
                        <li>
                            <a href="../">Home</a>
                        </li>
                        
                        <li class="active">Email Signature
                        </li>
                    </ul>
                </div>
               
            </div>
     <br>
 
     <div class="row">
       <div class="col-sm-3">
         <label > Name</label>
        <input tabindex="1" class="form-control" required="required" placeholder="First Name" id="firstname" name="firstname"  type="text">
        
        </div>
       <div class="col-sm-3">
         <label >Designation</label>
        <input tabindex="1" class="form-control" required="required" placeholder="Designation" id="firstname" name="firstname"  type="text">
      
            
       </div>
       <div class="col-sm-3">
         <label > Department</label>
                                <input tabindex="1" class="form-control" required="required" placeholder="Department"  name="firstname"  type="text">
                            
                      
       </div>
       <div class="col-sm-3">
         <label > Work Phone</label>
                                <input tabindex="1" class="form-control" required="required" placeholder="Work Phone"  name="firstname"  type="text">
                                
       </div>
     </div> <br>
     <div class="row">
       <div class="col-sm-3">
          <label >Mobile</label>
                                <input tabindex="1" class="form-control" required="required" placeholder="Mobile"  name="firstname"  type="text">
              
       </div>
       <div class="col-sm-3">
         <label > Email</label>
         <input tabindex="1" class="form-control" required="required" placeholder="Department"  name="firstname"  type="text">
       </div>
       <div class="col-sm-3">
         <label>Location</label>
                            <select>
  <option value="Head Quarters">Head Quarters</option>
  <option value="Arkansas">Arkansas</option>
  <option value="Atlanta">Atlanta</option>
  <option value="Indian APAC HeadQuaters">Indian APAC HeadQuaters</option>
</select>   
       </div>
       <!--Java Script for the HTMl Code Generation-->
       <script>
$("button[type=submit]").click(function(){
    $("<div1 />").html("<br><div class='row'><div class='col-sm-3'><label> Correlation </label>          <select  class='form-control'>          <option value='-1'>Select Attribute</option>          <option value='Invoice Number'>Invoice Number</option>          </select>         </div>  <div class='col-sm-3'><label>Value </label>  <input class='form-control' id='firstname' name='Full Name' type='text'></div></div> ").appendTo("div2");})
</script>
       <!--Java Script for the HTMl Code Generation-->
       
       
       
       <div class="col-sm-3"> <br>
        <div class="col-sm-2"><a href="#" onclick="mydiv();"><button type="button" id="hideme" class="btn btn-primary form-control ">Generate code</button></a></div>
           <button  type="button" class="btn btn-primary form-control">Generate code</button>
       </div>
     </div> <br>
     <div class="row">
       <div class="col-sm-6">
          <div class="textarea" contenteditable="true">
   <button type="button" class="btn btn-primary  col-sm-5 pull-right">Copy to Clipboard</button><br><br><br>
    Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. 
</div></div>
       
      
       <div class="col-sm-6">
          <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe ></iframe></div> 
       </div>
     </div>
     <br>
     <div class="row">
       <div class="col-sm-12">
          <div class="tabbable tabs-left">
        <ul class="nav nav-tabs">
          <li><a href="#a" data-toggle="tab">One</a></li>
          <li class="active"><a href="#b" data-toggle="tab">Two</a></li>
          <li><a href="#c" data-toggle="tab">Three</a></li>
        </ul>
        <div class="tab-content">
         <div class="tab-pane active" id="a">Lorem ipsum dolor sit amet, charetra varius quam sit amet vulputate. 
         Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero.</div>
         <div class="tab-pane" id="b">Secondo sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
         Aliquam in felis sit amet augue.</div>
         <div class="tab-pane" id="c">Thirdamuno, ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
         Quisque mauris augue, molestie tincidunt condimentum . </div>
        </div>
      </div> 

       </div>
     </div>
     <br>
   </section> 
    <?php include '../footer.php';?> 
    
  </body>
</html>