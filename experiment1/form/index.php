<!DOCTYPE html>
<html>
<head>
   <link href="../../css/bootstrap.min.css" rel="stylesheet">
   <link href="../../css/bootstrap.css" rel="stylesheet">
    <link href="../../css/font-awesome.min.css" rel="stylesheet">
    
    <link href="../../css/main.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../css/default.css" />
	<link rel="stylesheet" type="text/css" href="../../css/component.css" />
    <style>textarea#message{height:100px !important;}</style>     
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome.min.css" />

    <script type="text/javascript" src="jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap.min.js"></script>
</head>
<body>
<?php include '../../header.php';?><br><br><br><br>

<section id="career" class="container">      

   <div class="row">          
<form class="pos-right text-center">
    <div>
        <input id="name" name="name" type="text" required>
        <label for="name">First Name</label>
    </div><br>
    <div>
        <input id="name" name="name" type="text" required>
        <label for="name">Last Name</label>
    </div><br>
    <div>
        <input id="phone" name="phone" type="tel" required>
        <label for="phone">Phone</label>
    </div><br>
         
    <div>
        <textarea id="message" name="phone" required></textarea>
        <label for="message">Text Message</label>
    </div><br>
    <div>
            <button type="button" class="btn btn-primary">Submit</button>
    </div>

</form>
</div>
</section>      
<style>

form {float: left;margin: 20px;}
form > div {position: relative;overflow: hidden;}
form input, form textarea {width: 100%;border: 2px solid gray;background: none;position: relative;
    top: 0;left: 0;z-index: 1;padding: 8px 12px;outline: 0;}
form input:valid, form textarea:valid {background: white;}
form input:focus, form textarea:focus {border-color: ##00aae7;}
form input:focus + label, form textarea:focus + label {background: #00aae7;color: white;
font-size: 70%;padding: 1px 6px;z-index: 2;text-transform: uppercase;}
form label {transition: background 0.2s, color 0.2s, top 0.2s, bottom 0.2s, right 0.2s, left 0.2s;
position: absolute;color: #999;padding: 7px 6px;}
form textarea {display: block;resize: vertical;}
form.go-bottom input, form.go-bottom textarea {padding: 12px 12px 12px 12px;}
form.go-bottom label {top: 0;bottom: 0;left: 0;width: 100%;}
form.go-bottom input:focus, form.go-bottom textarea:focus {padding: 4px 6px 20px 6px;}
form.go-bottom input:focus + label, form.go-bottom textarea:focus + label {top: 100%;margin-top: -16px;}
form.pos-right label {top: 2px;right: 100%;width: 100%;margin-right: -100%;bottom: 2px;}
form.pos-right input:focus + label, form.pos-right textarea:focus + label {
    right: 0;margin-right: 0;width: 40%;padding-top: 5px;}
</style>
<!-- Jump To Right Hint - END -->


<?php include '../../footer.php';?>
</body>
</html>