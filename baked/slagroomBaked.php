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
						<td><a href="slagroomBaked.php"><img src="images/buttonslagroomtaartenhover.png" alt="" width="100" height="100" /></a></td>
					</tr>
					<tr>
						<td><a href="chocoladeBaked.php"><img src="images/buttonchocoladetaarten.png"  alt="" width="100" height="100" onmouseover="src='images/buttonchocoladetaartenhover.png';" onmouseout="src='images/buttonchocoladetaarten.png'";/></a></td>
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
					Slagroomtaarten
				</h2>
		<?php
		include 'verbinding.php';
		
		$result = mysql_query("SELECT *	FROM Taarten WHERE Taartsoort='3'");
		
		while($row = mysql_fetch_array($result))
		{
		echo "<table border='1' width='580'>";
		echo "<tr>";
		echo "<td width='100'> &euro;" . $row['Prijs'] . "</td>";
		echo "<td><b><a href='taartinfoBaked.php?taart=".$row['Taarten_id']."'>" . $row['Taartnaam'] . "</a></b></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td height='100'><a href='taartinfoBaked.php?taart=".$row['Taarten_id']."'> <img src='images/".$row['Plaatje']."'alt='Slagroomtaart'	width='100'	height='100'/></a> </td>";
		echo "<td>" . $row['KorteInfoTaart'] . "</td>";
		echo "</tr>";
		echo "</table>";
		echo "<br /><br />";
		 }
		mysql_close($con);
		?>
			</div>
	</div>
</div>
