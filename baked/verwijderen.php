<?php
 include 'verbinding.php';
		
		$taartnaam = $_POST["verwijderen"];
		

		$sql=("DELETE FROM Taarten WHERE Taartnaam='$taartnaam'");

	    


if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

header	("Location: adminBaked.php");


mysql_close($con)
?>
