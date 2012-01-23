<?php
 include 'verbinding.php';
		
		$taartnaam = $_POST["Taartnaam"];
		$kinfo = $_POST["KorteInfoTaart"];
		$info = $_POST["BeschrijvingTaart"];
		$prijs = $_POST["Prijs"];
		$id = $_POST["id"];
		

		$sql="UPDATE Taarten SET Taartnaam = $taartnaam  WHERE Taarten_id = '$id'";

	    


if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

header	("Location: taartenwijzigenBaked2.php");


mysql_close($con)
?>
