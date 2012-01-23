<?php
$con = mysql_connect("localhost","webdb1247","9ru7raku");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("webdb1247", $con);

	if($_POST[nieuwsbrief] == '1')
			{
			$nieuwsbrief = 1;;
			}
	else{
	     $nieuwsbrief = 0;
	    }
	
	$encryptedpassword = md5($_POST['wachtwoord']);
	
	if($_POST[emailadres] == $_POST[bevestig_emailadres]  && $_POST[wachtwoord] == $_POST[bevestig_wachtwoord])
	    {
		$sql="INSERT INTO Account (Emailadres,Wachtwoord,Voornaam,Tussenvoegsel,Achternaam,Postcode,Straatnaam,Huisnummer,Toevoeging,Plaatsnaam,Telefoon,Nieuwsbrief) 
		VALUES		
		('$_POST[emailadres]','$encryptedpassword','$_POST[voornaam]','$_POST[tussenvoegselnaam]','$_POST[achternaam]','$_POST[postcode]','$_POST[straatnaam]','$_POST[postbusnummer]','$_POST[postbustoevoeging]','$_POST[plaatsnaam]','$_POST[telefoonnummer]','$nieuwsbrief')";

	    }
		
	else	{ 
		if($_POST[nieuwsbrief] == '1')
			{
			print"wel nieuwsbrief";
			}
		print "PENISSSSSSSS je wachtwoord of emeulsje is not de same";
		}



if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

header	("Location: accountBaked.html");


mysql_close($con)
?>
