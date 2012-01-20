<?php
$con = mysql_connect("localhost","webdb1247","9ru7raku");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("webdb1247", $con);

	$emailadres=$_POST['Emailadres'];
	$wachtwoord=$_POST['Wachtwoord'];
	
	$emailadres = stripslashes($emailadres);
	$wachtwoord = stripslashes($wachtwoord);
	$emailadres = mysql_real_escape_string($emailadres);
	$wachtwoord = mysql_real_escape_string($wachtwoord);


    $sql = "SELECT * FROM `Account` WHERE Emailadres = '$emailadres' and Wachtwoord = '$wachtwoord'" ; //alle gebruikers met het ingevoerde e-mailadres ophalen
	$result=mysql_query($sql);
	
    // Mysql_num_row is counting table row
	$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row

	if($count==1)
	{
// Register $myusername, $mypassword and redirect to file "login_success.php"
		session_register("Emailadres");
		session_register("Wachtwoord");
		header("location:loginsucces.php");
	}
	else 
	{
		echo "Wrong Username or Password";
	}

?>