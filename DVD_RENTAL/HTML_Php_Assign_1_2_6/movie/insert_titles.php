<?php
  include "db_connect.php";

  $asin = $_POST["asin"];
  $title = $_POST['title'];
  $price = $_POST['price'];
  $file = addslashes(file_get_contents($_FILES['image']['tmp_name']));

  $sql = "INSERT INTO dvd_titles(asin, title, price, image)".
	     "VALUES ('$asin', '$title', $price, '$file')";

  $query = $connection->query($sql) or
	     die ("Problem in sorting the new film");

  if ($query)
	{
		?>
		<script language = "JavaScript">document.location = "dvd_titles.php" </script>
		<?php
	}
?>