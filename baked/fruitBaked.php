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
						<td><a href="fruitBaked.php"><img src="images/buttonfruittaartenhover.png" alt="" width="100" height="100"/></a></td>
					</tr>
					<tr>
						<td><a href="slagroomBaked.php"><img src="images/buttonslagroomtaarten.png" alt="" width="100" height="100" onmouseover="src='images/buttonslagroomtaartenhover.png';" onmouseout="src='images/buttonslagroomtaarten.png';"/></a></td>
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
			<?php include ("loginform.php"); ?>
			</div>
			
			<div id="inhoud">
				<h2>
					Fruittaarten
				</h2>
		<?php
		include 'verbinding.php';
		
		$result = mysql_query("SELECT *	FROM Taarten WHERE Taartsoort='2'");
		
		while($row = mysql_fetch_array($result))
		{
		echo "<table border='0' width='580'>";
		echo "<tr>";
		echo "<td width='100'> &euro;" . $row['Prijs'] . "</td>";
		echo "<td colspan='2' id='titeltaartinfo'><strong><a href='taartinfoBaked.php?taart=".$row['Taarten_id']."'>" . $row['Taartnaam'] . "</a></strong></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td height='100'><a href='taartinfoBaked.php?taart=".$row['Taarten_id']."'> <img src='images/".$row['Plaatje']."'alt='Fruittaart'	width='100'	height='100'/></a> </td>";
		echo "<td id='kortetaartinfo'>" . $row['KorteInfoTaart'] . "</td>";
		echo "<td width='95'><a href='taartinfoBaked.php?taart=".$row['Taarten_id']. 
			 "'> <img src= 'images/Meerinfo1.png' alt='Meer info' width='95'	height='36'
				onmouseover= src='images/Meerinfo2.png'; onmouseout= src='images/Meerinfo1.png'; /></a> </td>";
		echo "</tr>";
		echo "</table>";
		echo "<br /><div class='lijntje'></div>	<br />";
		 }
		mysql_close($con);
		?>
			</div>
	</div>
</div>
</body>
</html>
