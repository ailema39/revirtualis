<!DOCTYPE html>
<html lang="en-us">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">		
	<meta content="telephone=no" name="format-detection">										<!--Remove styling of telephone numbers on IOS-->
    <meta name="description" content="A Template by Designzway Team"> 							<!--Change content-->	
    <meta name="keywords" content="HTML, LESS, CSS, JavaScript"> 								<!--Change content-->	
    <meta name="author" content="Designzway Team"> 												<!--Change content-->						
	<title>Revirtualis - Coming soon</title>															<!--Change title-->	        
    <link href="css/style_green.css?v=2" rel="stylesheet">                          		 			<!-- Stylesheet -->    
	<link rel="icon" type="image/x-icon" href="images/favicon.ico" />

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
<div class="wrapper">

	<!-- Begin header -->
	<header class="coming-header">
		<!-- Logo -->
        <div class="logo">
            <a href="#">
				<div class="decorative-lines">	
	            	<!-- Remove comments to choose image and add comment to h1 -->
	            	<img class="logo-img" src="images/logo.png" alt="Revirtualis logo"/>	
	                <!--<h1 class="logo-text">re<span class="text-highlight">virtualis</span></h1>-->	
				</div>	
            </a>
        </div>
        <!-- End Logo -->
	</header>
	<!-- End header -->

	<!-- Begin main content -->
	<section class="coming-content">
		<div class="container">
			<h2 class="coming-title">Coming soon</h2>
	        <h3 class="section-title-simple">We are under construction and almost ready!</h3>
		</div>
		
		<!-- Begin counters -->
		<div class="decorative-lines"></div>	
		<div class="container">
			<div class="counters clearfix">
	            <div class="timer-wrap">
	            	<div class="timer-bg" id="timer"></div>
	                <span class="digits"></span>
	                <input class="knob day" data-min="0" data-max="100" data-bgColor="rgba(33,44,67,0.1)" data-fgColor="#212c43" data-displayInput=false data-width="200" data-height="200" data-thickness=".11" data-readOnly=true>
	                <div class="digits-label">days</div>
	            </div>
	            <div class="timer-wrap">
	            	<div class="timer-bg"></div>
	                <span class="digits"></span>
	                <input class="knob hour" data-min="0" data-max="24" data-bgColor="rgba(33,44,67,0.1)" data-fgColor="#212c43" data-displayInput=false data-width="200" data-height="200" data-thickness=".11" data-readOnly=true>
	                <div class="digits-label">hours</div>
	            </div>
	            <div class="timer-wrap">
	            	<div class="timer-bg"></div>
	                <span class="digits"></span>
	                <input class="knob minute" data-min="0" data-max="60" data-bgColor="rgba(33,44,67,0.1)" data-fgColor="#212c43" data-displayInput=false data-width="200" data-height="200" data-thickness=".11" data-readOnly=true>
	                <div class="digits-label">minutes</div>
	            </div>
	            <div class="timer-wrap">
	            	<div class="timer-bg"></div>
	                <span class="digits"></span>
	                <input class="knob second" data-min="0" data-max="60" data-bgColor="rgba(33,44,67,0.1)" data-fgColor="#212c43" data-displayInput=false data-width="200" data-height="200" data-thickness=".11" data-readOnly=true>
	                <div class="digits-label">seconds</div>
	            </div>
	        </div> 	
		</div>	
		<!-- End counters -->

		<div class="container">
	        <p class="coming-text">Revitualis is a firm with global reach founded in 2014 with experience developing in a wide range of languages for different industries  and a wide variety of software solutions that go from e-commerce web sites to web based applications using 3D technology.</p> 

	        <div class="divider-triangle divider-triangle--thin"></div>

	        <h3 class="section-title-simple">Subscribe to get notified when we launch:</h3>

			<!-- Begin subscribe form -->
	        <form class="subscribe-form subscribe-form--simple" id="subscribe-form" name="subscribe-form" method="post" action="getEmail.php" novalidate>
	            <input class="subscribe-input" id="input-email" name="input-email" type="email" placeholder="your email here">
	            <button class="submit-button" id="submit-button" type="submit">
	                <i class="icon-circle icon-circle--thin fa fa-arrow-right"></i>
	            </button>
	        </form>
			<!-- End subscribe form -->
		</div>	

	</section>
	<!-- End main content -->

	<?php include '/include/coming-soon/footer.php'; ?>
</div>

<!--End wrapper -->

<script src="external/modernizr/modernizr.custom.91224.js"></script>		<!--Script Modernizr-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> <!--Script jQuery-->	
<script>window.jQuery || document.write('<script src="external/jquery/jquery-1.11.0.min.js"><\/script>')</script> <!--Script jQuery-->
<script src="external/jquery/jquery-migrate-1.2.1.min.js"></script>			<!--Script jQuery for old version jQuery-->
<script src="external/bootstrap/js/bootstrap.min.js"></script>				<!--Bootstrap JavaScript-->
<script src="external/jquery-twitter/jquery.twitter.js"></script>			<!--Script Twitter-->
<script src="external/jflickrfeed/jflickrfeed.js"></script>					<!--Script Widget Flikr-->
<script src="external/gozha-nav/jquery.mobile.menu.js"></script>			<!--Script Mobile menu-->
<script src="external/colorbox/jquery.colorbox.js"></script>				<!--Script Сolorbox-->
<script src="external/jquery-knob/jquery.knob.min.js"></script>				<!--Script Knob-->
<script src="external/countdown/count.down.js"></script>					<!--Script Count down-->
<script src="js/form.js"></script>											<!--Script Forms -->
<!--<script src="js/custom.js"></script>-->										<!--Script Custom-->
	
<script>
	$(document).ready(function() {

		//Count down
		var dateOfBeginning = "May 1, 2015", //type your date of the Beginnig
		dateOfEnd = "May 31, 2015"; //type your date of the end

		countDown(dateOfBeginning, dateOfEnd);

		$('#flickr').jflickrfeed({
				limit: 			10,
				qstrings: 		{id: '52617155@N08'},
				itemTemplate: 	'<li><a href="{{image_b}}" data-rel="colorbox"><img src="{{image_s}}" alt="{{title}}" /><span class="flickr__hover"></span></a></li>'
				},function(data){$('#flickr a').colorbox({'data-rel':'colorbox'});}
		);

		
		//Colorbox responsive
		$.colorbox.settings.maxWidth  = '95%';
		$.colorbox.settings.maxHeight = '95%';

		//colorBox resize function
		var resizeTimer;
		function resizeColorBox()
		{
			if (resizeTimer) clearTimeout(resizeTimer);
			resizeTimer = setTimeout(function() {
					if ($('#cboxOverlay').is(':visible')) {
							$.colorbox.load(true);
					}
			}, 300);
		}

		//resize ColorBox when resizing window or changing mobile device orientation
		$(window).resize(resizeColorBox);
		window.addEventListener("orientationchange", resizeColorBox, false);

	});
</script>

</body>
</html>
