<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fishvillae - Your nearby Restaurant </title>
	<link rel="shortcut icon" href="images/favicon.ico">

	<!-- Preload the resources -->
	<link rel="preload" href="css/bootstrap.min.css" as="style">
	<link rel="preload" href="rev/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css" as="style">
	<link rel="preload" href="rev/fonts/font-awesome/css/font-awesome.css" as="style">
	<link rel="preload" href="rev/css/rs6.css" as="style">
	<link rel="preload" href="fonts/font-awesome/css/all.min.css" as="style">
	<link rel="preload" href="fonts/themify-icons/themify-icons.css" as="style">
	<link rel="preload" href="fonts/ionicons/ionicons.min.css" as="style">
	<link rel="preload" href="fonts/flaticons/flaticon.css" as="style">
	<link rel="preload" href="css/owl.carousel.min.css" as="style">
	<link rel="preload" href="css/magnific-popup.min.css" as="style">
	<link rel="preload" href="css/animations.min.css" as="style">
	<link rel="preload" href="css/style.css" as="style">
	<link rel="preload" href="css/responsive.css" as="style">

	<!-- Apply the stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="rev/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
	<link rel="stylesheet" type="text/css" href="rev/fonts/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="rev/css/rs6.css">
	<link rel="stylesheet" href="fonts/font-awesome/css/all.min.css">
	<link rel="stylesheet" href="fonts/themify-icons/themify-icons.css">
	<link rel="stylesheet" href="fonts/ionicons/ionicons.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/flaticons/flaticon.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/magnific-popup.min.css">
	<link rel="stylesheet" href="css/animations.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">

</head>

<body> 
	
	@include('partials._header')
	@include('partials._hero')
	@include('partials._about')
	@include('partials._services')
	@include('partials._menu')
	@include('partials._cta')
	@include('partials._reservation')
	@include('partials._counter') 
	@include('partials._testimonial') 
	@include('partials._location') 
	@include('partials._blog')  
	@include('partials._footer')  

	<div id="back-to-top">
		<div class="top" id="top">
			<a id="pq-back-to-top" href="#" class="on">
				<span class="pq-icon-up">
					<i class="ion-ios-arrow-up"></i> </span>
			</a>
		</div>
	</div> 

	<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="js/jquery.min.js" rel="preload" as="script"></script>
	<script src="js/bootstrap.min.js" rel="preload" as="script"></script>
	<script src="js/owl.carousel.min.js" rel="preload" as="script"></script>
	<script src="js/jquery.countTo.min.js" rel="preload" as="script"></script>
	<script src="js/jquery.magnific-popup.min.js" rel="preload" as="script"></script>
	<script src="rev/js/rbtools.min.js" rel="preload" as="script"></script>
	<script src="rev/js/rs6.min.js" rel="preload" as="script"></script>
	<script src="js/rev-custom.js" rel="preload" as="script"></script>
	<script src="js/am-charts-core.js" rel="preload" as="script"></script>
	<script src="js/am-charts-maps.js" rel="preload" as="script"></script>
	<script src="js/am-charts-worldlow.js" rel="preload" as="script"></script>
	<script src="js/am-charts-animated.js" rel="preload" as="script"></script>
	<script src="js/map-chart.js" rel="preload" as="script"></script>
	<script src="js/custom.js" rel="preload" as="script"></script>
</body>
</html>