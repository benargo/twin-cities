<?php

// Include the configuration file
require_once('config/framework.php');

// Define $cities as an array which will hold each of our cities
$cities = array();

// Loop through the number of cities and create a new city object
for($i = 0; $i < $num_cities; $i++) {
	
	$city = new city($i);
	
	array_push($cities, $city);

}

?><!DOCTYPE HTML>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="author" content="Ben Argo">
	<meta name="author" content="Rachel Borkala">
	<meta name="author" content="Richard George">
	
	<title>DSA Twin Cities</title>
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/styles/twintown.css" />
	<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=AIzaSyC61w44aikgA6Us_8qVbx20xoe4RDSHlNI" type="text/javascript"></script>
</head>

<body onunload="GUnload()">

	<header><!-- Define Header -->
	
		<h1>Twin Towns</h1>
		<h2><?php
		
		foreach($cities as $city) {
			
			echo $city->name;
			echo '<br />';
			
		} ?>
	
	</header><!-- End Header -->

	<nav id="main"><!-- Define Navigation/Menu -->
		
		<ul>
			<li><a href="news">News</a></li>
			<li><a href="weather">Weather</a></li>
			<li><a href="map">Map</a></li>
			<li><a href="instagram">Instagram</a></li>
			<li><a href="ebay">eBay</a></li>
			<li><a href="twitter">Twitter</a></li>
	
		<ul>

	</nav><!-- End Navigation -->

	<section id="primary-content-area"><!-- Main content area -->
	
		<article><!-- Article (to load content via AJAX) -->
		
			<?php if(isset($_GET['app'])) {
			
				/** This is a fallback in case the user does not support JavaScript **/
				
				// Switch through the possible applications
				switch ($_GET['app']) {

					/* News */
					case 'news':

						require(BASE_URI.'/config/news.php');

						break;

					/* Weather */
					case 'weather':

						require(BASE_URI.'/config/weather.php');

						break;

					/* Map */
					case 'map':

						require(BASE_URI.'/config/maps.php');

						break;

					/* Instagram */
					case 'instagram':

						require(BASE_URI.'/config/instagram.php');

						break;

					/* Richard */
					case 'ebay':
					
						require(BASE_URI.'/config/ebay.php');

						break;

					/* Twitter */
					case 'twitter':
					
						require(BASE_URI.'/config/twitter.php');

						break;

				}
			
			} else {
			
				// Print out the welcome message
				
			} ?>
			
		</article><!-- End of Article -->

	</section><!-- End of Main content area -->

	<footer><!-- Footer -->
		<small>
			<p>Ben Argo - 10008548</p>
			<p>Rachel Borkala - 10011585</p>
			<p>Richard George - 09011635</p>
		</small>
	</footer><!-- End of Footer -->

</body>

</html>

