<?php
$con = mysql_connect("localhost","webdb1247","9ru7raku");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("webdb1247", $con);

$sql="SELECT Taartnaam, 'Korte info taart', Prijs FROM Taarten"; 
$result = mysql_query($sql),

while($row = mysql_fetch_assoc($result))
{
    echo "Taart :{$row['Taartnaam']} <br />" .
         "Info : {$row['Korte info taart']} <br />" .
         "Money! : {$row['Prijs']} <br /><br />";
} 

mysql_close($con)
?>
