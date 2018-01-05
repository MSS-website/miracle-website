<!doctype html>
<html lang="en-us" dir="ltr" class="no-js">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>3D Flip Cards // CSS3 Playground</title>
<link rel="stylesheet" href="/main.css" />
<script src="/js/modernizr.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

</head>
<body>
	<script>
  // For IE11. May we one day live without your BS.
  Modernizr.addTest('preserve3d', function(){return Modernizr.testAllProps('transformStyle', 'preserve-3d');});
</script>
<link href="../css/flip.css" rel="stylesheet">
<script>
	$(document).ready(function(){
		$('.hover').hover(function(){
			$(this).addClass('flip');
		},function(){
			$(this).removeClass('flip');
		});
	// set up contact form link
		$('.contact .action').click(function(e){
			$('.contact').addClass('flip');
			e.preventDefault();
		});
		$('.contact .edit-submit').click(function(e){
			$('.contact').removeClass('flip');
			e.preventDefault();
		});

	});
</script>


<div class="contact panel">
	<div class="front">
		<h3>Contact Us</h3>
		Acme, Co.<br>
		123 Easy St.<br>
		Austin, TX 78731
		<p>Or <a class="action" href="#form">send us a message</a></p>
	</div>
	<div class="back" id="contact">
		<div class="pad">
			<h3>Send us a Fake Message</h3>
			<form method="post">
				<p><input id="f-name" name="f-name" type="text" placeholder="name" /></p>
				<p><input id="f-email" name="f-email" type="text" placeholder="email" /></p>
				<p><select id="f-how" name="f-how"><option value="">How did you find us?</option><option value="internet">Internet</option></select></p>
				<p><textarea id="f-msg" name="f-msg" placeholder="Enter your message"> </textarea></p>
				<input type="submit" class="edit-submit" value="Fake Send Message" />
			</form>
		</div>
	</div>
</div>


	<script type="text/javascript">
		
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-432773-11']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
</body>
</html>
