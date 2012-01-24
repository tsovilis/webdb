<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Baked!</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="baked.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="main">
	<a href="infoBaked.html"><img src="images/Bakedsign.png" alt=""/></a>

	<div id="content">
		
		<div id="totheleft">
		<table border="0">
			
			
			<tr>
				<td><a href="fruitBaked.php"><img src="images/buttonfruittaarten.png" alt="" width="100" height="100" onmouseover="src='images/buttonfruittaartenhover.png';" onmouseout="src='images/buttonfruittaarten.png';"/></a></td>
			</tr>
			<tr>
				<td><a href="slagroomBaked.php"><img src="images/buttonslagroomtaarten.png" alt="" width="100" height="100" onmouseover="src='images/buttonslagroomtaartenhover.png';" onmouseout="src='images/buttonslagroomtaarten.png';"/></a></td>
			</tr>
			<tr>
				<td><a href="chocoladeBaked.php"><img src="images/buttonchocoladetaartenhover.png" alt="" width="100" height="100"/></a></td>
			</tr>
			<tr>
				<td><a href="combiBaked.php"><img src="images/buttoncombitaarten.png" alt="" width="100" height="100" onmouseover="src='images/buttoncombitaartenhover.png';" onmouseout="src='images/buttoncombitaarten.png';"/></a></td>
			</tr>
			<tr>
				<td><a href="registratieBaked.html"><img src="images/buttonregistratie.png" alt="" width="100" height="100" onmouseover="src='images/buttonregistratiehover.png';" onmouseout="src='images/buttonregistratie.png';"/></a></td>
			</tr>
			<tr>
				<td><a href="contact.html"><img src="images/buttoncontact.png" alt="" width="100" height="100" onmouseover="src='images/buttoncontacthover.png';" onmouseout="src='images/buttoncontact.png';"/></a></td>
			</tr>

		</table> 
		</div>
		
		<div id="rightside">	

								<table border="0">
				<form name="login" method="get">
				<tr>
					<td>E-mail</td>
					<td><input type="text" name="naam" size="18" value="E-mail"
					onfocus="if(this.value == 'E-mail') {this.value = '';}" /></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="wachtwoord" size="18" value="password"
					onfocus="if(this.value == 'password') {this.value = '';}"/></td>
				</tr>
				<tr>
					<td colspan="2">
		<sub>Nog geen account? <a href="registratieBaked.html"> Registreer </a></sub>
		&nbsp;<input type="submit" value="Login" />
		</td>
	</tr>
</form>
</table>
		</div>
		
		<div id="inhoud">
<h2>
Factuur
</h2>

<?php
		include 'verbinding.php';
		
		//$bestellingnr 	= 	$_POST["bd"];
		$bestellingnr	=	1;
		$account_id 	= 	mysql_query("SELECT Account_id FROM Bestellingen WHERE Bestellingen_id='$bestellingnr'");
		$datumfactuur 	= 	mysql_query("SELECT Besteldatum FROM Bestellingen WHERE Bestellingen_id = '$bestellingnr'");
		
		
		$info = mysql_query("	SELECT 
					Account.Voornaam,
					Account.Tussenvoegsel,
					Account.Achternaam,
					Account.Straatnaam,
					Account.Huisnummer,
					Account.Toevoeging,
					Account.Postcode,
					Account.Plaatsnaam
					FROM Account
					INNER JOIN Bestellingen ON Bestellingen.Account_id=Account.Account_id
					WHERE Bestellingen.Bestellingen_id='$bestellingnr'");
		
		
		
		echo "Baked taartenbedrijf <br /> Bakerstreet 12 <br /> 1723 GH  Zuid - Scharwoude <br /> Nederland <br /><br /><br /> ";
		

		
			echo "<table border ='0'>";
			echo "<tr>";
				while($array = mysql_fetch_array($account_id))
				  {
				  echo "<td> Account ID:" . $array['Account_id'] . "</td>";
				  }
			echo "</tr>";
			echo "<tr>";
				while($array2 = mysql_fetch_array($datumfactuur))
					  {
					  echo "<td> Datum:" . $array2['Besteldatum'] . "</td>";
					  }
			echo "</tr>";
			echo "<tr> Bestelnummer: 1 </tr>";
			echo "<tr>";
				while($info2 = mysql_fetch_array($info))
					{
					echo "<tr>";
					echo "<td>" . $info2['Voornaam'] . "</td>";
					echo "<td>" . $info2['Tussenvoegsel'] . "</td>";
					echo "<td>" . $info2['Achternaam'] . "</td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td>" . $info2['Straatnaam'] . "</td>";
					echo "<td>" . $info2['Huisnummer'] . "</td>";
					echo "<td>" . $info2['Toevoeging'] . "</td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td>" . $info2['Postcode'] . "</td>";
					echo "<td>" . $info2['Plaatsnaam'] . "</td>";
					echo "</tr>" ;
					}
			echo "</tr>";
		mysql_close($con);
		echo " </table> ";
	?>
</div>
</div>
</div>
</body>
</html>
