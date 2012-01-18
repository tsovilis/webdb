<?php
$con = mysql_connect("localhost","webdb1247","9ru7raku");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("webdb1247", $con);

$sql="INSERT INTO Taarten (Taartnaam,Taartsoort,Korte info taart,Beschrijving taart,Prijs,Plaatje) 
VALUES		
('$_POST[Taartnaam]','$_POST[Taartsoort]','$_POST[Korte info taart]','$_POST[Beschrijving taart]','$_POST[Prijs]','$_POST[Plaatje]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con)
?>
