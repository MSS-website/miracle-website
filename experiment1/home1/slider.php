<html>
    <head>
        <link href="../../css/bootstrap.min.css" rel="stylesheet">
        <link href="slider/pgwslider.css" rel="stylesheet">
        <link href="slider/pgwslider.min.css" rel="stylesheet">
        <script src="slider/pgwslider.js"></script>
        <script src="slider/pgwslider.jquery.json"></script>
        <script src="slider/pgwslider.min.js"></script>

    </head>
    
    <body>
        
        <div class="container">
            <div class="row">
               <div class="cntr mt20">
	    <div class="pgwSlider wide"><div class="ps-current" style="height: 499px;">
	        <ul>
	            <li class="elt_1" style="display: none; opacity: 0; z-index: 1;">
	                <img src="http://static.pgwjs.com/img/pg/slider/paris.jpg" alt="Paris, France"></li>
	            <li class="elt_2" style="z-index: 1; display: none; opacity: 0;">
	                <img src="http://static.pgwjs.com/img/pg/slider/montreal.jpg" alt="Montréal, Canada"></li>
	            <li class="elt_3" style="z-index: 2; display: list-item; opacity: 1;">
	                <img src="http://static.pgwjs.com/img/pg/slider/shanghai.jpg" alt="Shanghai, China"></li>
	            <li class="elt_4" style="z-index: 1; display: none; opacity: 0;">
	                <a href="#">
	                    <img src="http://static.pgwjs.com/img/pg/slider/new-york.jpg" alt="New York, USA"></a>
	            </li></ul>
	                    <span class="ps-caption" style="display: block;"><b>Shanghai, China</b></span></div><ul class="ps-list">
                <li class="elt_1" style="cursor: pointer; opacity: 0.6; width: 25%; height: 120.25px;"><img src="http://static.pgwjs.com/img/pg/slider/paris.jpg" alt="Paris, France" data-description="Eiffel Tower and Champ de Mars"><span>Paris, France</span></li>
                <li class="elt_2" style="cursor: pointer; opacity: 0.6; width: 25%; height: 120.25px;"><img src="http://static.pgwjs.com/img/pg/slider/montreal_mini.jpg" alt="Montréal, Canada" data-large-src="http://static.pgwjs.com/img/pg/slider/montreal.jpg"><span>Montréal, Canada</span></li>
		<li class="elt_3" style="cursor: pointer; opacity: 1; width: 25%; height: 120.25px;">
		    <img src="http://static.pgwjs.com/img/pg/slider/shanghai.jpg">
		    <span>Shanghai, China</span>
		</li>
                <li class="elt_4" style="cursor: pointer; opacity: 0.6; width: 25%; height: 120.25px;">
		    <a href="#" target="_blank">
	                <img src="http://static.pgwjs.com/img/pg/slider/new-york.jpg">
			<span>New York, USA</span>
		    </a>
                </li>
            </ul></div>
        </div>
            </div>
        </div>


<script>
    $(document).ready(function() {
    $('.pgwSlider').pgwSlider();
});
</script>
        
    </body>
</html>
 