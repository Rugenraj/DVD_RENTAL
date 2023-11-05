<?php
  include "db_connect.php";

  $asin = $_POST['asin'];
  $actorID = $_POST['actorID'];

  $sql = "INSERT INTO dvd_actors_titles(asin, actorID)".
	     "VALUES ('$asin', '$actorID')";

  $query = $connection->query($sql) or
	     die ("Problem in sorting the new relationship");

  if ($query)
	{
		?>
		<script language = "JavaScript">document.location = "dvd_actors_titles.php" </script>
		<?php
	}
?>