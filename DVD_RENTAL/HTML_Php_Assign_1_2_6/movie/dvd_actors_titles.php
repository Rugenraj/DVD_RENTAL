<?php
	include "db_connect.php";
?>

<html>

<head>
	<title> Movie Titles & Actors </title>
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
	<form method = "POST" action = "insert_relationship.php">
	<fieldset>
		<legend><h2> Inserting New Relationship </h2></legend>
		<p><label> ASIN : </label>
			<input type = "text" name = "asin"
			 maxlength = "15"
			 placeholder = "ASIN" required/>
		</p>
		
		<p><label> Actor ID : </label>
			<input type = "number" name = "actorID"
			 maxlength = "5"
			 placeholder = "Actor ID" required/>
		</p>
		
		<p>
		<input class="button" type = "submit" value = "ADD" />
		<input class="button2" type ="reset" value ="CLEAR" />
		</p>
	</fieldset>
	
	<br><br>

	<table border = "1">
	 <tr>
	 	<th> No. </th>
		<th> ASIN </th>
		<th> Actor ID </th>
		<th> Action </th>
	 </tr>
	</center>
	<?php
 
	  $j = 0;

	  $result = $connection->query("SELECT * FROM dvd_actors_titles ORDER BY asin");
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
			echo $row["actorID"];
			echo "</td>";
			
			echo "<td>";
			echo "<a href = \"delete_relationship.php?asin=" . $row['asin'] . "&actorID=".$row['actorID']."\"" .">
				Delete </a>" ;
			echo "</td></tr> \n";

			$j++;	
		}
	  }

	  $connection->close();
?>
	</table>
	
	<br><br><br>
	<!--FOOTER------------->
	<div id="footer">
		Copyright © DVD RENTAL SYSYTEM, 2022.
	</div>
	
</body>
</html>
