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
		
		// $bestellingnr1 	= 	$_POST["bd"];
		$bestellingnr	=	1;
		$account_id 	= 	mysql_query("SELECT Account_id FROM Bestellingen WHERE Bestellingen_id='$bestellingnr'");
		$datumfactuur 	= 	mysql_query("SELECT Besteldatum FROM Bestellingen WHERE Bestellingen_id = '$bestellingnr'");
		
		
		$info = mysql_query("SELECT Taarten.Taartnaam,
								Account.Emailadres,
								Account.Voornaam,
								Account.Tussenvoegsel,
								Account.Achternaam,
								Account.Postcode,
								Account.Straatnaam,
								Account.Huisnummer,
								Account.Toevoeging,
								Account.Telefoon,
								Account.Plaatsnaam,
								Taarten.Taartnaam,
								Taarten.Prijs,
								TaartBestelling.Aantal,
								TaartBestelling.Kaarsjes,
								TaartBestelling.Tekst
					FROM Bestellingen
					INNER JOIN Account ON Account.Account_id=Bestellingen.Account_id
					INNER JOIN TaartBestelling ON TaartBestelling.Bestellingen_id=Bestellingen.Bestellingen_id
					INNER JOIN Taarten ON Taarten.Taarten_id=TaartBestelling.Taarten_id
					INNER JOIN Bestelstatus ON Bestelstatus.Statusnummer=Bestellingen.BestelStatus
					WHERE Account_id='$account_id'");
		
		
		
		echo "Baked taartenbedrijf <br /> Bakerstreet 12 <br /> 1723 GH  Zuid - Scharwoude <br /> Nederland <br /><br /><br /> ";
		echo "
			Account ID: ". $account_id . "
			Datum: " . $datumfactuur .  " <br />
			Bestelnummer: " . $bestellingnr . " <br />
			" . $info['Voornaam'] . " " . $info['Tussenvoegsel'] . " " . $info['Achternaam'] . " <br />
			" . $info['Straatnaam'] . " " . $info['Huisnummer'] . "" . $info['Toevoeging'] . " <br /> 
			" . $info['Postcode'] . " " . $info['Plaats'] . " <br />
			";
			
		echo "<table>
		<tr>
		<th>Product</th>
		<th>Aantal</th>
		<th>Kaarsjes</th>
		<th>Tekst</th>
		<th>Prijs</th>
		</tr>";

		while($row = mysql_fetch_array($info))
		  {
		  echo "<tr>";
		  echo "<td>" . $row['Taartnaam'] . "</td>";
		  echo "<td>" . $row['Aantal'] . "</td>";
		  echo "<td>" . $row['Kaarsjes'] . "</td>";
		  echo "<td>" . $row['Tekst'] . "</td>";
		  echo "<td>" . $row['Prijs'] . "</td>";
		  echo "</tr>";
		  }
		mysql_close($con);
		echo " </table> "
	?>
</div>
</div>
</div>
</body>
</html>
