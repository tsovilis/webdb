<?php

include 'verbinding.php';
mysql_select_db("webdb1247", $con);

if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 20000))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    if (file_exists("images/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"], "images/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "/images/" . $_FILES["file"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }

$bestand = $_FILES["file"]["name"];

$sql="INSERT INTO Taarten (Taartnaam, Taartsoort, KorteInfoTaart, BeschrijvingTaart, Prijs, Plaatje) 
		VALUES		
		('$_POST[Taartnaam]','$_POST[Taartsoort]','$_POST[KorteInfoTaart]','$_POST[BeschrijvingTaart]','$_POST[Prijs]', '$bestand')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

header	("Location: welcomeBaked.html");



?>
