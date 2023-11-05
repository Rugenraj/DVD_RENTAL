<?php
  include "db_connect.php";

  $asin = $_GET['asin'];
  $sql = "DELETE FROM dvd_titles WHERE asin = '$asin' ";

  $query = $connection->query($sql) or 
	     die ("Problem in deleting the Movie Titles data");
  if ($query)
  {
  	?>
	<script language = "JavaScript">document.location = "dvd_titles.php" </script>
	<?php
  }
?>