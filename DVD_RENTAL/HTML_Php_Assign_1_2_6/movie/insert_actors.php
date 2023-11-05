<?php
  include "db_connect.php";

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];

  $sql = "INSERT INTO dvd_actors(actorID, fname, lname)".
	     "VALUES (NULL, '$fname', '$lname')";

  $query = $connection->query($sql) or
	     die ("Problem in sorting the new actor");

  if ($query)
	{
		?>
		<script language = "JavaScript">document.location = "dvd_actors.php" </script>
		<?php
	}
?>