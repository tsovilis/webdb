<?php
$con = mysql_connect("localhost","webdb1247","9ru7raku");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("webdb1247", $con);

$sql="INSERT INTO Account (Emailadres,Wachtwoord,Voornaam,Tussenvoegsel,Achternaam,Postcode,Straatnaam,Huisnummer,Toevoeging,Telefoon) 
VALUES		
('$_POST[emailadres]','$_POST[wachtwoord]','$_POST[voornaam]','$_POST[tussenvoegselnaam]','$_POST[achternaam]','$_POST[postcode]','$_POST[straatnaam]','$_POST[postbusnummer]','$_POST[postbustoevoeging]','$_POST[telefoonnummer]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con)
?>
