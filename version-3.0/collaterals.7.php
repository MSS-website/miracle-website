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
        
        
        
        
            
         <style>
             #page-content {
    padding: 10px 5px 1px;
   
}
/* Media Items */
.media-items {
    position: relative;
    margin-bottom: 20px;
    padding: 10px;
    border-radius: 5px;
    text-align: center;
     background-color: #ebeef2;
    -webkit-transition: all .1s ease-out;
    transition: all .1s ease-out;
}

.media-items:hover {
    background: rgba(255, 255, 255, 1);
    -webkit-box-shadow: 0 3px 5px rgba(0, 0, 0, .1);
    box-shadow: 0 3px 5px rgba(0, 0, 0, .1);
}

.media-items:hover .media-items-options {
    display: block;
}

.media-items .media-items-options {
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    padding: 10px;
    display: none;
}

.media-items .media-items-content {
    padding: 10px 0;
}
 #page-content.inner-sidebar-left,
    #page-content.inner-sidebar-right {
        position: relative;
    }

    #page-content.inner-sidebar-left {
        padding-left: 240px;
    }

    #page-content.inner-sidebar-right {
        padding-right: 240px;
    }

    #page-content-sidebar {
        margin: 0;
        width: 220px;
        position: absolute;
        top: 0;
        bottom: 0;
        overflow-y: auto;
        border-bottom: none;
    }

    #page-content.inner-sidebar-left #page-content-sidebar {
        left: 0;
        border-right: 1px solid #dae0e8;
    }

    #page-container.sidebar-light #page-content.inner-sidebar-left #page-content-sidebar {
        border-left: 1px solid #dae0e8;
    }

    #page-content.inner-sidebar-right #page-content-sidebar {
        right: 0;
        border-left: 1px solid #dae0e8;
    }





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
.view{
    margin-top:-20px;
}
.modal-body{
    padding:0px !important;
    
}
.modal-dialog{
    margin-top:150px !important;
}
         </style>      
            

        <?php include '../header.php';?>
    </head>
    
    <body >
        
        <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    <button type="button" class="view btn btn-xs btn-success pull-right" data-dismiss="modal">X</button>
      <!-- Modal content-->
      <div class="modal-content">
        
        <div class="modal-body">
         <img src="API-Management/images/bigdataimage.png" height="300" width="600"></img>
        </div>
        
      </div>
      
    </div>
  </div>
        
        
        
        <br><br><br>
        <div class="emerald tinted-image">
        <div class="container ">
             <div class="row">
                  <br><br><br>
             <div class="col-sm-6 text-left">  
            <h1 class="heavy micro">Corporate Collaterals</h1>
          
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
            
            
            
                
                    
                        <div class="container">
                            <div class="row">
                        <div class="col-sm-3">
                            <select class="form-control" name="trackName" id="trackName" onkeydown="return enableSearchEnter(event);">
                              <!--  <option disabled selected value="default"> -->
                                                               <option value="" selected="">
                                                                      Search by Practice
                                </option>
                  <option value="1">Enterprise Cloud and Mobility</option><option value="2">SOA and Connectivity</option><option value="3">B2B Integration and File Transfer</option><option value="4">SAP/ERP Services</option><option value="5">Application Development and Delivery</option><option value="6">Business Process Management</option><option value="7">Quality Assurance and Testing</option><option value="8">Digital Experience and Commerce</option><option value="12">DevOps and Continuos Integration</option><option value="13">Big Data and Analytics</option><option value="14">Internet of Things and M2M</option><option value="15">Infrastructure Management</option><option value="17">IT Service Management</option><option value="18">Microsoft Platform</option> 
                             
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <select class="form-control" name="docType" id="docType" onkeydown="return enableSearchEnter(event);">
                                                                 <option value="-1">
                                                                       Search by Type
                                </option>
                  <option value="Flyer">Flyer</option>
                  <option value="Presentation">Presentation</option>
                  <option value="Social Banner">Social Banner</option>
                  <option value="Image">Image</option>
                  
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <select class="form-control" name="industry" id="industry" onkeydown="return enableSearchEnter(event);">
                                                                 <option value="" selected="">
                                                                      Search by Technology
                                </option>
                  <option value="IBM">IBM</option>
                  <option value="Microsoft">Microsoft</option>
                  <option value="Oracle">Oracle</option>
                  <option value="SAP">SAP</option>
                  <option value="Mulesoft">Mulesoft</option>
                  
                                 
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                
                                    <div class="input-group">
                                        
                                                                                 <input class="form-control" placeholder="Enter Key Words" name="keyWords" id="keyWords" onkeydown="return enableSearchEnter(event);" type="text"><span class="input-group-btn"><span class="btn btn-primary btn-file"><input onclick="doSubmit();" name="btnJobSubmit" id="btnJobSubmit" type="siv"> Search…</span></span> 
                                                                     <!-- <button type="submit" tabindex="13" class="btn btn-primary" name="btnJobSubmit" id="btnJobSubmit">Search&hellip;</button>   -->
                                    </div>
                                
                            </div>
                        </div>
                    </div>
            
                            
                        <div class="row">
                            <div class="col-sm-4 col-lg-3">
                                <div class="media-items animation-fadeInQuick2" data-category="zip">
                                    <div class="media-items-options text-right">
                                        <a href="javascript:void(0)" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                    </div>
                                    <div class="media-items-content">
                                        <i class="fa fa-file-archive-o fa-5x text-muted"></i>
                                    </div>
                                    <h4>
                                        <strong>Document</strong>.pdf<br>
                                        <small>3 hours ago, 3.2MB</small>
                                    </h4>
                                </div>
                            </div>
                            <div class="col-sm-4 col-lg-3">
                                <div class="media-items animation-fadeInQuick2" data-category="image">
                                    <div class="media-items-options text-right">
                                        <a class="view-pdf"> 	<button type="button" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#myModal" class="btn btn-Primary">&nbsp; View</button></a>
                                        <a href="javascript:void(0)" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                    </div>
                                    <div class="media-items-content">
                                        <i class="fa fa-file-picture-o fa-5x text-success"></i>
                                    </div>
                                    <h4>
                                        <strong>Bigdata</strong>.jpg<br>
                                        <small>API-Management, 1.5MB</small>
                                    </h4>
                                </div>
                            </div>
                            <div class="col-sm-4 col-lg-3">
                                <div class="media-items animation-fadeInQuick2" data-category="video">
                                    <div class="media-items-options text-right">
                                        <a href="javascript:void(0)" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                    </div>
                                    <div class="media-items-content">
                                        <i class="fa fa-file-video-o fa-5x text-danger"></i>
                                    </div>
                                    <h4>
                                        <strong>Presentation</strong>.ppt<br>
                                        <small>7 hours ago, 120MB</small>
                                    </h4>
                                </div>
                            </div>
                            <div class="col-sm-4 col-lg-3">
                                <div class="media-items animation-fadeInQuick2" data-category="video">
                                    <div class="media-items-options text-right">
                                        <a href="javascript:void(0)" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                    </div>
                                    <div class="media-items-content">
                                        <i class="fa fa-file-archive-o fa-5x text-danger"></i>
                                    </div>
                                    <h4>
                                        <strong>Presentation</strong>.ppt<br>
                                        <small>7 hours ago, 120MB</small>
                                    </h4>
                                </div>
                            </div>
                            
                        </div>
                        <!-- END Media Box Content -->
                    </div>
                    <!-- END Page Content -->
                </div>
                <!-- END Main Container -->
          
            
            <br><br><br><br><br>
            
                    
                    
                 </div>
                 
     
                
                <?php include '../footer.php';?>
          
     <script src="API-Management/js/vendor/jquery-2.2.0.min.js"></script>
        <script src="API-Management/js/vendor/bootstrap.min.js"></script>
        <script src="API-Management/js/plugins.js"></script>
        <script src="API-Management/js/app.js"></script>
    </body>
    
</html>