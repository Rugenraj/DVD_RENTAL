<?php
  include "db_connect.php";
?>

<html>
	<head>
		<title>Home DVD Rental System</title>
		<link rel = "stylesheet" href = "layoutstyle_lab4.css">
	</head>

	<body>
		<!--navigation----------------->
		<nav>
			<!--logo------>
			<a href="#" class="logo">
				<img src="dvdlogo.jpg"/>
			</a>

			<!--menu----------->
			<ul class="menu">
				<li><a href = "dvd_titles.php"> Movie Titles </a></li>
				<li><a href = "dvd_actors.php"> Movie Actors </a></li>
				<li><a href = "dvd_actors_titles.php"> Movie Actors & Titles </a></li>
				<li><a href = "dvd_listing.php"> Movie Listing </a></li>
				<li><a href = "dvd_listing_improved.php"> Movie Listing Improved </a></li>
			</ul>
		</nav>
		<br>
		<section id="main">
			<!--movie showcase------------->
			<div class="showcase-title">Movie Showcase </div>
			

				<div class="showcase-content">
					<div class="row">
					 <div class="column">
					  <img src="CAPTAIN AMERICA 1.jpg" />
					 </div>
					 <div class="column">
					  <img src="CAPTAIN AMERICA 2.jpg" />
					 </div>
					 <div class="column">
					  <img src="CAPTAIN AMERICA 3.jpg" />
					 </div>
					 <div class="column">
					  <img src="DR STRANGE 1.jpg" />
					 </div>
					 <div class="column">
					  <img src="DR STRANGE 2.jpg" />
					 </div>
					</div>
					
					<div class="row">
					 <div class="column">
					  <img src="IRON MAN.jpg" />
					 </div>
					 <div class="column">
					  <img src="IRON MAN 2.jpg" />
					 </div>
					 <div class="column">
					  <img src="IRON MAN 3.jpg" />
					 </div>
					 <div class="column">
					  <img src="THOR 1.jpg" />
					 </div>
					 <div class="column">
					  <img src="THOR 2.jpg" />
					 </div>
					</div>
				</div>
				<br><br><br>
		</section>
		
		<!--FOOTER----------->
		<div id="footer">
			Copyright © DVD RENTAL SYSYTEM, 2022.
		</div>
	</body>
</html>