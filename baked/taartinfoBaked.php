<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">

/***********************************************
* Textarea Maxlength script- © Dynamic Drive (www.dynamicdrive.com)
* This notice must stay intact for legal use.
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/

function ismaxlength(obj){
var mlength=obj.getAttribute? parseInt(obj.getAttribute("maxlength")) : ""
if (obj.getAttribute && obj.value.length>mlength)
obj.value=obj.value.substring(0,mlength)
}
</script>

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
				<td><a href="chocoladeBaked.php"><img src="images/buttonchocoladetaarten.png" alt="" width="100" height="100"onmouseover="src='images/buttonchocoladetaartenhover.png';" onmouseout="src='images/buttonchocoladetaarten.png';"/></a></td>
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
		
		<?php
		
		include 'verbinding.php';
		$nummer = $_GET['taart'];
		$result = mysql_query("SELECT *	FROM Taarten WHERE Taarten_id='$nummer'");
		
		while($row = mysql_fetch_array($result))
		{
		echo "<table border='0' height='100%' width='100%'>";
		echo "<tr height='180'>";
		echo "<td width='100%-180px'> <center><h1>" . $row['Taartnaam'] . "</h1></center></td>";
		echo "<td id= 'plaatjetaartinfo' width='180'><img src='images/".$row['Plaatje']."'alt='Taart'	width='180'	height='180'/> </td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td id='langetaartinfo'>" .$row['BeschrijvingTaart']. "</td>";
		}
		mysql_close($con);
		?>
		
		<td valign="top"> <center> <h3> Bestellen </h3> </center> </br>
		<dl>
			<form name="taartspecificaties" method="get"
			<dt><center><h4>Oma's appeltaart</h4></center></dt>
			<dd>Grootte:</dd> 	
			<dd>	<select name="grootte">
					<option value="klein">Klein</option>
					<option value="medium" selected>Medium</option>
					<option value="groot">Groot</option>
					</select>
			</dd>
			<dd>Kaarsjes:<i> <font size="1"> <br />(worden apart bijgeleverd)</font></i></dd>
			<dd>			<select name="kaarsjes">
							<option value="0">0</option>
							<option value="5">5</option>
							<option value="10">10</option>
							<option value="15">15</option>
							<option value="20">20</option>
							<option value="25">25</option>
							<option value="1">30</option>
							<option value="1">35</option>
							<option value="1">40</option>
							<option value="1">45</option>
							<option value="1">50</option>
							</select></dd>
			<dd>Tekst:</dd>
			<dd><textarea 	type="text" name="Tekst" cols="15" rows="2"
						maxlength="32" onkeyup="return ismaxlength(this)"
						onfocus="if(this.value == 'Wat voor tekst wilt u erop? (max 32)') {this.value = '';}">Wat voor tekst wilt u erop? (max 32)</textarea></dd>
			
			<dd>Aantal:</dd>
			<dd>			<select name="aantal">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							</select></dd>
			</form>
		</dl>
			<center><a href="winkelwagenBaked.html"><img src="images/bestellen1.png" alt="Bestellen"
			onmouseover="src='images/bestellen2.png';"
			onmouseout="src='images/bestellen1.png';"/></a></center>
		</td>			
	</tr>
</table> 
</div>
</div>
</div>
</body>

</html>