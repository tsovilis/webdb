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
				<td><a href="fruitBaked.html"><img src="images/buttonfruittaarten.png" alt="" width="100" height="100"/></a></td>
			</tr>
			<tr>
				<td><a href="combiBaked.html"><img src="images/buttonslagroomtaarten.png" alt="" width="100" height="100"/></a></td>
			</tr>
			<tr>
				<td><a href="chocoladeBaked.html"><img src="images/buttonchocoladetaarten.png" alt="" width="100" height="100"/></a></td>
			</tr>
			<tr>
				<td><a href="combiBaked.html"><img src="images/buttoncombitaarten.png" alt="" width="100" height="100"/></a></td>
			</tr>
			<tr>
				<td><a href="registratieBaked.html"><img src="images/buttonregistratie.png" alt="" width="100" height="100"/></a></td>
			</tr>
			<tr>
				<td><a href="contact.html"><img src="images/buttoncontact.png" alt="" width="100" height="100"/></a></td>
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

		<div style="height:10px"></div>
        <div class="lijntje"></div>
        <div style="height:10px"></div>

		<strong>Administrator opties</strong>
<br /><br />
<a href="adminBaked.html">De bestellingen lijst</a> <br />
<a href="admintaarttoevoegenBaked.html">Taarten toevoegen</a>


		</div>
		
		<div id="inhoud">
<h2>
Administrator
</h2>

<div>

<div>
<div><h3>Geplaatste bestellingen</h3></div>


	<?php
		$con = mysql_connect("localhost","webdb1247","9ru7raku");
		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }

		mysql_select_db("webdb1247", $con);

		$result = mysql_query("SELECT Bestellingen.Bestellingen_id, Account.Account_id, Taarten.Taartnaam, Bestellingen.Aantal, Bestellingen.Tekst, Bestellingen.Kaarsjes, Bestellingen.Leverdatum, Bestelstatus.Status
					FROM Bestellingen
					INNER JOIN Account ON Account.Account_id=Bestellingen.Account_id
					INNER JOIN Taarten ON Taarten.Taarten_id=Bestellingen.Taarten_id
					INNER JOIN Bestelstatus ON Bestelstatus.Statusnummer=Bestellingen.BestelStatus");

		echo "<table border='1'>
		<tr>
		<th>Bestelling ID</th>
		<th>Account ID</th>
		<th>Taartnaam</th>
		<th>Aantal</th>
		<th>Tekst</th>
		<th>Kaarsjes</th>
		<th>Leverdatum</th>
		<th>Status</th>
		</tr>";

		while($row = mysql_fetch_array($result))
		  {
		  echo "<tr>";
		  echo "<td>" . $row['Bestellingen_id'] . "</td>";
		  echo "<td>" . $row['Account_id'] . "</td>";
		  echo "<td>" . $row['Taartnaam'] . "</td>";
		  echo "<td>" . $row['Aantal'] . "</td>";
		  echo "<td>" . $row['Tekst'] . "</td>";
		  echo "<td>" . $row['Kaarsjes'] . "</td>";
		  echo "<td>" . $row['Leverdatum'] . "</td>";
		  echo "<td>" . $row['Status'] . "</td>";
		  echo "</tr>";
		  }
	

		echo "</table>";

	?>

<h3>Wijzig de status van de bestelling</h3>


<table border="1">
<tr>
	<th>Nummer van de bestelling</th>
	<th>Status</th>
  	<th> Wijzig!</th>
</tr>
<tr>
<td>
<form action="status.php" method="post">
<select name="bestelling">
	<?php


		$query1 = mysql_query("SELECT Bestellingen_id
				       FROM Bestellingen");

		while($row1 = mysql_fetch_array($query1))
			{
			  echo "<option value=\"".$row1['Bestellingen_id']."\">".$row1['Bestellingen_id']."</option>\n  ";
			}

		mysql_close($con);

	?>
</select>
</td>
<td>
<select name="status">
  <option value="0">Besteld</option>
  <option value="1">Betaald</option>
  <option value="2">Gebakken</option>
  <option value="3">Verzonden</option>
</select>
</td>
<td>
<input type="submit" value="Wijzig" />
</td>
</tr>
</form>


</div>


</div>
		</div>
		
		

		


	</div>
</div>
</body>

</html>