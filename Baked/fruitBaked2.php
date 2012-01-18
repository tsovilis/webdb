<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/php; charset=utf-8" />
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
				<td><a href="fruitBaked.html"><img src="images/buttonfruittaartenhover.png" alt="" width="100" height="100"/></a></td>
			</tr>
			<tr>
				<td><a href="slagroomBaked.html"><img src="images/buttonslagroomtaarten.png" alt="" width="100" height="100" onmouseover="src='images/buttonslagroomtaartenhover.png';" onmouseout="src='images/buttonslagroomtaarten.png';"/></a></td>
			</tr>
			<tr>
				<td><a href="chocoladeBaked.html"><img src="images/buttonchocoladetaarten.png"  alt="" width="100" height="100" onmouseover="src='images/buttonchocoladetaartenhover.png';" onmouseout="src='images/buttonchocoladetaarten.png'";/></a></td>
			</tr>
			<tr>
				<td><a href="combiBaked.html"><img src="images/buttoncombitaarten.png" alt="" width="100" height="100" onmouseover="src='images/buttoncombitaartenhover.png';" onmouseout="src='images/buttoncombitaarten.png';"/></a></td>
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
			<h3>
				Fruittaarten
			</h3>
	
			<?php
	
				$con = mysql_connect("localhost","webdb1247","9ru7raku");
				if (!$con)
				{
				die('Could not connect: ' . mysql_error());
				}

				mysql_select_db("webdb1247", $con);

				$sql = mysql_query("SELECT Taartnaam, 'Korte info taart', Prijs FROM Taarten")
				or die(mysql_error());
				Print "<table border=1>";
				while($info = mysql_fetch_array( $sql ))
				{
				Print "<tr>";
				Print "<td>" .$info['Taartnaam'] "</td>";
				Print "<td>" .$info['Prijs'] "</td>";
				Print "</tr>"
				Print "<tr><td>" .$info['Korte info taart'] "</td></tr>";
				}
				Print "</table>";

			?>


		</div>
</div>
</body>

</html>