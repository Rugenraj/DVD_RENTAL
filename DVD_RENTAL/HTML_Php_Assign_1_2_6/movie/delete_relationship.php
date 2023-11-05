<?php
  include "db_connect.php";

  $asin = $_GET['asin'];
  $actorID = $_GET['actorID'];
  
  $sql = "DELETE FROM dvd_actors_titles WHERE asin = '$asin' AND actorID = '$actorID' ";

  $query = $connection->query($sql) or 
	     die ("Problem in deleting the Relationship data");
  if ($query)
  {
  	?>
	<script language = "JavaScript">document.location = "dvd_actors_titles.php" </script>
	<?php
  }
?>