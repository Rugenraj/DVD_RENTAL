<?php
  include "db_connect.php";

  $actorID = $_GET['actorID'];
  $sql = "DELETE FROM dvd_actors WHERE actorID = '$actorID' ";

  $query = $connection->query($sql) or 
	     die ("Problem in deleting the Actor data");
  if ($query)
  {
  	?>
	<script language = "JavaScript">document.location = "dvd_actors.php" </script>
	<?php
  }
?>