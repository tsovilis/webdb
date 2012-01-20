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
					<form name="login" action="login.php" method="post">
						<tr>
							<td>E-mail</td>
							<td><input type="text" name="E-mail" size="18" value="Emailadres" id="Emailadres"
							onfocus="if(this.value == 'Emailadres') {this.value = '';}" /></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input type="password" name="wachtwoord" size="18" value="Wachtwoord" id="Wachtwoord"
							onfocus="if(this.value == 'Wachtwoord') {this.value = '';}"/></td>
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
		include 'verbinding.php';

		$result = mysql_query("SELECT Bestellingen.Bestellingen_id, Account.Account_id, Taarten.Taartnaam, TaartBestelling.Aantal, TaartBestelling.Tekst, TaartBestelling.Kaarsjes, Bestellingen.Leverdatum, Bestelstatus.Status
					FROM Bestellingen
					INNER JOIN Account ON Account.Account_id=Bestellingen.Account_id
					INNER JOIN TaartBestelling ON TaartBestelling.Bestellingen_id=Bestellingen.Bestellingen_id
					INNER JOIN Taarten ON Taarten.Taarten_id=TaartBestelling.Taarten_id
					INNER JOIN Bestelstatus ON Bestelstatus.Statusnummer=Bestellingen.BestelStatus");

		echo "<table border='0' class='leettable'>
		<tr>
		<th class='leetcell'>Bestelling ID</th>
		<th class='leetcell'>Account ID</th>
		<th class='leetcell'>Taartnaam</th>
		<th class='leetcell'>Aantal</th>
		<th class='leetcell'>Tekst</th>
		<th class='leetcell'>Kaarsjes</th>
		<th class='leetcell'>Leverdatum</th>
		<th class='leetcell'>Status</th>
		</tr>";

		while($row = mysql_fetch_array($result))
		  {
		  echo "<tr>";
		  echo "<td class='leetcell'>" . $row['Bestellingen_id'] . "</td>";
		  echo "<td class='leetcell'>" . $row['Account_id'] . "</td>";
		  echo "<td class='leetcell'>" . $row['Taartnaam'] . "</td>";
		  echo "<td class='leetcell'>" . $row['Aantal'] . "</td>";
		  echo "<td class='leetcell'>" . $row['Tekst'] . "</td>";
		  echo "<td class='leetcell'>" . $row['Kaarsjes'] . "</td>";
		  echo "<td class='leetcell'>" . $row['Leverdatum'] . "</td>";
		  echo "<td class='leetcell'>" . $row['Status'] . "</td>";
		  echo "</tr>";
		  }
	

		echo "</table>";

	?>

<h3>Wijzig de status van de bestelling</h3>


<table border="0" class="leettable">
<tr>
	<th class='leetcell'>Nummer van de bestelling</th>
	<th class='leetcell'>Status</th>
  	<th class='leetcell'> Wijzig!</th>
</tr>
<tr>
<td class="leetcell">
<form action="status.php" method="post">
<select name="bestelling">
	<?php


		$query1 = mysql_query("SELECT Bestellingen_id
				       FROM Bestellingen");

		while($row1 = mysql_fetch_array($query1))
			{
			  echo "<option value=\"".$row1['Bestellingen_id']."\">".$row1['Bestellingen_id']."</option>\n  ";
			}


	?>
</select>
</td>
<td class="leetcell">
<select name="status">
  <option value="0">Besteld</option>
  <option value="1">Betaald</option>
  <option value="2">Gebakken</option>
  <option value="3">Verzonden</option>
</select>
</td>
<td class="leetcell">
<input type="submit" value="Wijzig" />
</td>
</tr>
</form>
</table>




<h3>Factureer</h3>


<table border="0" class="leettable">
<tr>
	<th class="leetcell">Nummer van de bestelling</th>
  	<th class="leetcell"> Naar factuur!</th>
</tr>
<tr>
<td class="leetcell">
<form action="factuurBaked.php" method="post">
<select name="bd">
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
<td class="leetcell">
<input type="submit" value="Factuur" />
</td>
</tr>
</form>
</table>



</div>


</div>
		</div>
		
		

		


	</div>
</div>
</body>

</html>
