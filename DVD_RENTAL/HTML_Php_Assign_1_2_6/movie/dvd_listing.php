<?php
	include "db_connect.php";
?>

<html>

<head>
	<title> Movie Listing </title>
	<link rel = "stylesheet" href = "layoutstyle_lab4.css">
	
	<!--add icon library--------------->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
				<li><button class="home_button" onclick="window.location.href=  'home.php';">
					<i class="fa fa-home"></i> Home</button></li>
				<li><a href = "dvd_titles.php"> Movie Titles </a></li>
				<li><a href = "dvd_actors.php"> Movie Actors </a></li>
				<li><a href = "dvd_actors_titles.php"> Movie Actors & Titles </a></li>
				<li><a href = "dvd_listing.php"> Movie Listing </a></li>
				<li><a href = "dvd_listing_improved.php"> Movie Listing Improved </a></li>
			</ul>
		</nav>
		<br><br><br><br><br>
		
	<center>
	<table border = "2">
	 <tr>
	 	<th> No. </th>
		<th> ASIN </th>
		<th> Movie Title </th>
		<th> Price </th>
		<th> Movie Image </th>
		<th> Actor </th>
	 </tr>
	</center>
	<?php
 
	  $j = 0;

	  $result = $connection->query("SELECT * FROM dvd_titles T 
									JOIN dvd_actors_titles AT
									ON T.asin = AT.asin
									JOIN dvd_actors A 
									ON A.actorID = AT.actorID");
	  if ($result->num_rows > 0)
	  {
		while ($row = $result->fetch_array() )
		{
			echo "<tr><td>";
			echo $j+1;
			echo "</td>";
			
			echo "<td>";
			echo $row["asin"];
			echo "</td>";
			
			echo "<td>";
			echo $row["title"];
			echo "</td>";
			
			echo "<td>";
			echo $row["price"];
			echo "</td>";
			
			echo "<td>";
			echo '<img src = "data:image;base64,'.base64_encode($row['image']).'"
					alt = "Movie Image" style = "width: 100px; height: 150px;">';
			echo "</td>";
			
			echo "<td>";
			echo $row["fname"]. " " .$row["lname"];
			echo "</td>";

			$j++;	
		}
	  }


	  $connection->close();
?>
	</table>
	
	<br><br><br><br>
	<!--FOOTER------------->
	<div id="footer">
		Copyright © DVD RENTAL SYSYTEM, 2022.
	</div>
	
</body>
</html>
