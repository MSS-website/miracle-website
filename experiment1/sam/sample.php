<!DOCTYPE html>
<html lang="en"><head>

  <link rel="stylesheet" href="normalize.css">
  <link rel="stylesheet" href="bootstrap1.css">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" href="knockback-navigators.css">

<link href="../../css/main.css" rel="stylesheet">
    <link href="../../css/default.css" rel="stylesheet" type="text/css">
    <link href="../../css/component.css" rel="stylesheet" type="text/css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../../images/favicon.ico" rel="shortcut icon">

  <style type="text/css">
    .pane-navigator.page  {top: 80px;} /* offset the page to start after the fixed-position header */
    .pane.page            {background-color: white;} 
    .hero-unit {padding: 20px;background-color:#FFF !important;}
    input[type="text"]{height:100% !important;border-radius:4px;}
  </style>
</head>
<?php include '../../header.php';?><br><br>
<body>

  <div class="embed page pane-navigator" id="app">
    <div id="main" class="pane page active">
      <div class="container hero-unit">
<div class="row">        
<div class="col-sm-3">
	<a href="#pane_navigator"><img src="services1.png">Enterprise Cloud and Mobility</a>
	</div>
	<div class="col-sm-3">
	<a href="#page_navigator_simple"><img src="services2.png">Enterprise Cloud and Mobility</a>
	</div>
	<div class="col-sm-3">
	<a href="#page_navigator_panes"><img src="services3.png">Enterprise Cloud and Mobility</a>
	</div>
	<div class="col-sm-3">
	<a href="#page_navigator_panes1"><img src="services1.png">Enterprise Cloud and Mobility</a>
	</div>
	<div class="col-sm-3">
	<a href="#page_navigator_panes1"><img src="services1.png">Enterprise Cloud and Mobility</a>
	</div>
	<div class="col-sm-3">
	<a href="#page_navigator_panes1"><img src="services1.png">Enterprise Cloud and Mobility</a>
	</div>
	<div class="col-sm-3">
	<a href="#page_navigator_panes1"><img src="services1.png">Enterprise Cloud and Mobility</a>
	</div>
	<div class="col-sm-3">
	<a href="#page_navigator_panes1"><img src="services1.png">Enterprise Cloud and Mobility</a>
	</div>
  </div>	        
      </div><br><br><br>
    </div>

    <div id="pane_navigator" class="pane">
      <div class="container hero-unit">
        <legend>Enterprise Cloud and Mobility</legend>
          <div class="row">
				        
				         <div class="col-sm-6">
				             <h3 class="heavy">Invite a Colleague</h3><br>
				             <div class="col-sm-6">
				                <div class="form-group">
                          <input class="form-control" placeholder="Your Email Id*" required="required" type="text" onchange="fieldLengthValidator(this);">
                      </div>
				             </div>
				             <div class="col-sm-6">
				                 <div class="form-group">
                            <input class="form-control" placeholder="Colleague/Friend Email Id*" required="required" type="text" onchange="fieldLengthValidator(this);">
                           </div>
				             </div>
				             
				            
				             <div class="col-sm-6">
				         <select class="form-control">
                              
        <option value="0" selected="selected" disabled>Technology</option>
        <option value="1">Enterprise Cloud and Mobility</option>
        <option value="2">SOA and Connectivity</option>
        <option value="3">B2B Integration and File Transfer</option>
        <option value="4">SAP/ERP Services</option>
        <option value="5">Application Life Cycle Management</option>
        <option value="6">Business Process Management</option>
        <option value="7">Quality Assurance and Testing</option>
        <option value="8">Digital Experience and Commerce</option>
        <option value="12">DevOps and Continuos Integration</option>
        <option value="13">Big Data and Analytics</option>
        <option value="14">Internet of Things and M2M</option>
        <option value="15">Infrastructure Management</option>
        <option value="17">IT Service Management</option> 
            </select>
				             </div>
				            
				             <div class="col-sm-6">
				                <button type="button" class="btn btn-primary col-sm-12">Invite</button>
				             </div>
                         
				             
                         </div>
    
     <div class="col-sm-6">
				             <h3 class="heavy" style="opacity:1 !important;">Add Myself</h3><br>
				             <div class="col-sm-6">
				                <div class="form-group">
                                <input class="form-control" placeholder="Your Email Id*" required="required" type="text" onchange="fieldLengthValidator(this);">
                                </div>
				             </div>
				             <div class="col-sm-6">
				         <select class="form-control" >
                              
        <option value="0" selected="selected" disabled>Technology</option>
        <option value="1">Enterprise Cloud and Mobility</option>
        <option value="2">SOA and Connectivity</option>
        <option value="3">B2B Integration and File Transfer</option>
        <option value="4">SAP/ERP Services</option>
        <option value="5">Application Life Cycle Management</option>
        <option value="6">Business Process Management</option>
        <option value="7">Quality Assurance and Testing</option>
        <option value="8">Digital Experience and Commerce</option>
        <option value="12">DevOps and Continuos Integration</option>
        <option value="13">Big Data and Analytics</option>
        <option value="14">Internet of Things and M2M</option>
        <option value="15">Infrastructure Management</option>
        <option value="17">IT Service Management</option> 
            </select>
				             </div>
				             
				            
				             <div class="col-sm-6">
				                 <div class="form-group"></div>
				             </div>
				            
				             <div class="col-sm-6">
				                <button type="button" class="btn btn-primary col-sm-12">Invite</button>
				             </div>
                         
				             
                         </div>
				        
				    </div>
			
      </div>
    </div>

    <div style="" id="page_navigator_simple" class="pane">
      <div class="container hero-unit">
       <div class="container">
				        <div class="row">
				        
				         <div class="col-sm-6">
				             <h3 class="heavy" style="opacity:1 !important;">Invite a Colleague</h3><br>
				             <div class="col-sm-6">
				                <div class="form-group">
                                <input class="form-control" placeholder="Your Email Id*" required="required" type="text" onchange="fieldLengthValidator(this);">
                                </div>
				             </div>
				             <div class="col-sm-6">
				                 <div class="form-group">
                                <input class="form-control" placeholder="Colleague/Friend Email Id*" required="required" type="text" onchange="fieldLengthValidator(this);">
                                </div>
				             </div>
				             
				            
				             <div class="col-sm-6">
				         <select class="form-control" >
                              
        <option value="0" selected="selected" disabled>Technology</option>
        <option value="1">Enterprise Cloud and Mobility</option>
        <option value="2">SOA and Connectivity</option>
        <option value="3">B2B Integration and File Transfer</option>
        <option value="4">SAP/ERP Services</option>
        <option value="5">Application Life Cycle Management</option>
        <option value="6">Business Process Management</option>
        <option value="7">Quality Assurance and Testing</option>
        <option value="8">Digital Experience and Commerce</option>
        <option value="12">DevOps and Continuos Integration</option>
        <option value="13">Big Data and Analytics</option>
        <option value="14">Internet of Things and M2M</option>
        <option value="15">Infrastructure Management</option>
        <option value="17">IT Service Management</option> 
            </select>
				             </div>
				            
				             <div class="col-sm-6">
				                <button type="button" class="btn btn-primary col-sm-12">Invite</button>
				             </div>
                         
				             
                         </div>
    
     <div class="col-sm-6">
				             <h3 class="heavy" style="opacity:1 !important;">Add Myself</h3><br>
				             <div class="col-sm-6">
				                <div class="form-group">
                                <input class="form-control" placeholder="Your Email Id*" required="required" type="text" onchange="fieldLengthValidator(this);">
                                </div>
				             </div>
				             <div class="col-sm-6">
				         <select class="form-control" >
                              
        <option value="0" selected="selected" disabled>Technology</option>
        <option value="1">Enterprise Cloud and Mobility</option>
        <option value="2">SOA and Connectivity</option>
        <option value="3">B2B Integration and File Transfer</option>
        <option value="4">SAP/ERP Services</option>
        <option value="5">Application Life Cycle Management</option>
        <option value="6">Business Process Management</option>
        <option value="7">Quality Assurance and Testing</option>
        <option value="8">Digital Experience and Commerce</option>
        <option value="12">DevOps and Continuos Integration</option>
        <option value="13">Big Data and Analytics</option>
        <option value="14">Internet of Things and M2M</option>
        <option value="15">Infrastructure Management</option>
        <option value="17">IT Service Management</option> 
            </select>
				             </div>
				             
				            
				             <div class="col-sm-6">
				                 <div class="form-group"></div>
				             </div>
				            
				             <div class="col-sm-6">
				                <button type="button" class="btn btn-primary col-sm-12">Invite</button>
				             </div>
                         
				             
                         </div>
				        
				    </div></div>

      </div>
    </div>

    <div style="" id="page_navigator_panes" class="pane">
      <div class="container hero-unit">
       <div class="container">
				        <div class="row">
				        
				         <div class="col-sm-6">
				             <h3 class="heavy" style="opacity:1 !important;">Invite a Colleague</h3><br>
				             <div class="col-sm-6">
				                <div class="form-group">
                                <input class="form-control" placeholder="Your Email Id*" required="required" type="text" onchange="fieldLengthValidator(this);">
                                </div>
				             </div>
				             <div class="col-sm-6">
				                 <div class="form-group">
                                <input class="form-control" placeholder="Colleague/Friend Email Id*" required="required" type="text" onchange="fieldLengthValidator(this);">
                                </div>
				             </div>
				             
				            
				             <div class="col-sm-6">
				         <select class="form-control" >
                              
        <option value="0" selected="selected" disabled>Technology</option>
        <option value="1">Enterprise Cloud and Mobility</option>
        <option value="2">SOA and Connectivity</option>
        <option value="3">B2B Integration and File Transfer</option>
        <option value="4">SAP/ERP Services</option>
        <option value="5">Application Life Cycle Management</option>
        <option value="6">Business Process Management</option>
        <option value="7">Quality Assurance and Testing</option>
        <option value="8">Digital Experience and Commerce</option>
        <option value="12">DevOps and Continuos Integration</option>
        <option value="13">Big Data and Analytics</option>
        <option value="14">Internet of Things and M2M</option>
        <option value="15">Infrastructure Management</option>
        <option value="17">IT Service Management</option> 
            </select>
				             </div>
				            
				             <div class="col-sm-6">
				                <button type="button" class="btn btn-primary col-sm-12">Invite</button>
				             </div>
                         
				             
                         </div>
    
     <div class="col-sm-6">
				             <h3 class="heavy" style="opacity:1 !important;">Add Myself</h3><br>
				             <div class="col-sm-6">
				                <div class="form-group">
                                <input class="form-control" placeholder="Your Email Id*" required="required" type="text" onchange="fieldLengthValidator(this);">
                                </div>
				             </div>
				             <div class="col-sm-6">
				         <select class="form-control" >
                              
        <option value="0" selected="selected" disabled>Technology</option>
        <option value="1">Enterprise Cloud and Mobility</option>
        <option value="2">SOA and Connectivity</option>
        <option value="3">B2B Integration and File Transfer</option>
        <option value="4">SAP/ERP Services</option>
        <option value="5">Application Life Cycle Management</option>
        <option value="6">Business Process Management</option>
        <option value="7">Quality Assurance and Testing</option>
        <option value="8">Digital Experience and Commerce</option>
        <option value="12">DevOps and Continuos Integration</option>
        <option value="13">Big Data and Analytics</option>
        <option value="14">Internet of Things and M2M</option>
        <option value="15">Infrastructure Management</option>
        <option value="17">IT Service Management</option> 
            </select>
				             </div>
				             
				            
				             <div class="col-sm-6">
				                 <div class="form-group"></div>
				             </div>
				            
				             <div class="col-sm-6">
				                <button type="button" class="btn btn-primary col-sm-12">Invite</button>
				             </div>
                         
				             
                         </div>
				        
				    </div></div>
      </div>
    </div>



 <div style="" id="page_navigator_panes1" class="pane">
      <div class="container hero-unit">
       <div class="container">
				        <div class="row">
				        
				         <div class="col-sm-6">
				             <h3 class="heavy" style="opacity:1 !important;">Invite a Colleague</h3><br>
				             <div class="col-sm-6">
				                <div class="form-group">
                                <input class="form-control" placeholder="Your Email Id*" required="required" type="text" onchange="fieldLengthValidator(this);">
                                </div>
				             </div>
				             <div class="col-sm-6">
				                 <div class="form-group">
                                <input class="form-control" placeholder="Colleague/Friend Email Id*" required="required" type="text" onchange="fieldLengthValidator(this);">
                                </div>
				             </div>
				             
				            
				             <div class="col-sm-6">
				         <select class="form-control" >
                              
        <option value="0" selected="selected" disabled>Technology</option>
        <option value="1">Enterprise Cloud and Mobility</option>
        <option value="2">SOA and Connectivity</option>
        <option value="3">B2B Integration and File Transfer</option>
        <option value="4">SAP/ERP Services</option>
        <option value="5">Application Life Cycle Management</option>
        <option value="6">Business Process Management</option>
        <option value="7">Quality Assurance and Testing</option>
        <option value="8">Digital Experience and Commerce</option>
        <option value="12">DevOps and Continuos Integration</option>
        <option value="13">Big Data and Analytics</option>
        <option value="14">Internet of Things and M2M</option>
        <option value="15">Infrastructure Management</option>
        <option value="17">IT Service Management</option> 
            </select>
				             </div>
				            
				             <div class="col-sm-6">
				                <button type="button" class="btn btn-primary col-sm-12">Invite</button>
				             </div>
                         
				             
                         </div>
    
     <div class="col-sm-6">
				             <h3 class="heavy" style="opacity:1 !important;">Add Myself</h3><br>
				             <div class="col-sm-6">
				                <div class="form-group">
                                <input class="form-control" placeholder="Your Email Id*" required="required" type="text" onchange="fieldLengthValidator(this);">
                                </div>
				             </div>
				             <div class="col-sm-6">
				         <select class="form-control" >
                              
        <option value="0" selected="selected" disabled>Technology</option>
        <option value="1">Enterprise Cloud and Mobility</option>
        <option value="2">SOA and Connectivity</option>
        <option value="3">B2B Integration and File Transfer</option>
        <option value="4">SAP/ERP Services</option>
        <option value="5">Application Life Cycle Management</option>
        <option value="6">Business Process Management</option>
        <option value="7">Quality Assurance and Testing</option>
        <option value="8">Digital Experience and Commerce</option>
        <option value="12">DevOps and Continuos Integration</option>
        <option value="13">Big Data and Analytics</option>
        <option value="14">Internet of Things and M2M</option>
        <option value="15">Infrastructure Management</option>
        <option value="17">IT Service Management</option> 
            </select>
				             </div>
				             
				            
				             <div class="col-sm-6">
				                 <div class="form-group"></div>
				             </div>
				            
				             <div class="col-sm-6">
				                <button type="button" class="btn btn-primary col-sm-12">Invite</button>
				             </div>
                         
				             
                         </div>
				        
				    </div></div>
      </div>
    </div>



  </div>

  <script src="zepto-1.js"></script>
  <script src="path-0.js"></script>
  <script src="knockback-page-navigator-panes.js"></script>
  <script src="knockback-sample-transitions.js"></script>

  <script type="text/javascript">
    ////////////////////////////////////
    // Page Routing and Navigating
    // Don't allow pages to be detached since they are owned by the DOM (default is to assume dynamic pages and to therefore detach)
    ////////////////////////////////////
    var page_navigator = new kb.PageNavigatorPanes($('#app')[0], {no_remove: true});
    Path.map('').to(page_navigator.dispatcher(function(){
      page_navigator.loadPage({el: $('#main')[0], transition: 'FadeIn'});
    }));
    Path.map('#page_navigator_simple').to(page_navigator.dispatcher(function(){
      page_navigator.loadPage({el: $('#page_navigator_simple')[0], transition: 'NavigationSlide'});
    }));
    Path.map('#page_navigator_panes').to(page_navigator.dispatcher(function(){
      page_navigator.loadPage({el: $('#page_navigator_panes')[0], transition: 'NavigationSlide'});
    }));
    Path.map('#page_navigator_panes1').to(page_navigator.dispatcher(function(){
      page_navigator.loadPage({el: $('#page_navigator_panes1')[0], transition: 'NavigationSlide'});
    }));
    Path.map('#pane_navigator').to(page_navigator.dispatcher(function(){
      page_navigator.loadPage({el: $('#pane_navigator')[0], transition: 'NavigationSlide'});
    }));
    
    Path.listen();
    Path.dispatch(window.location.hash);

  </script>
<style>.ft{margin-top:500px;position:relative;}</style>
<div class="ft">
 <?php include '../../footer.php';?></div>
</body></html>
