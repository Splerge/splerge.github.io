<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>About</title>
	<link rel="stylesheet" href="main.css">
	<?php
	require("init.php");
	?>
</head>
<body>
	<header>
		<h1><center>Silverado Cinema's</center></h1>

	</header>
	<?php
			require_once("nav-view.php");
			echo "${nav}";
	?>

	<div class="content">

		<h2>About Silverado Cinema's</h2>
	

		<p>Silverado Cinema's was established in 1994, orginally a thetre for performaning arts. After years of innovation we have shifted into a Movie market displayed current block busters to our clients. Here at Silverado Cinema's we have always wanted the best for our customers and have proven that over the years by meeting your feedback</p>

		<p>Our newly established Cinemas now incorporate Dolby sound, aswell has 3D projection and more comfortable seats. This change was inspired by our customers wanting the best out of our services, and as a company who listens, we decieded to address your thoughts and made these changes.</p>
	</div>

	<footer>
		<?php

			require_once("footer-view.php");
			echo "${footer}";

	 		include_once("/home/eh1/e54061/public_html/wp/debug.php")
	 	?>
	</footer>
	
</body>
</html>