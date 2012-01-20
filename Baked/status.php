<?php
$con = mysql_connect("localhost","webdb1247","9ru7raku");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("webdb1247", $con);
		
		$bestelling = $_POST["bestelling"];
		$status = $_POST["status"];
		

		$sql="UPDATE Bestellingen SET BestelStatus = $status  WHERE Bestellingen_id = $bestelling";

	    


if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

header	("Location: adminBaked.php");


mysql_close($con)
?>
