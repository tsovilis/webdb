<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Baked!</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="baked.css" rel="stylesheet" type="text/css" />

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
<h4>
Taart informatie
</h4>

<table>
<tr>

<form action="taartenwijzigenBaked2.php" method="post" enctype="multipart/form-data">

<select name="taartje">
	<?php
		include 'verbinding.php';

		$query1 = mysql_query("SELECT Taartnaam
				       FROM Taarten");

		while($row1 = mysql_fetch_array($query1))
			{
			  echo "<option value=\"".$row1['Taartnaam']."\">".$row1['Taartnaam']."</option>\n  ";
			}
	

	?>
</select>


		<input type="submit" name="submit" value="Submit" />
	
</form>
	
	</div>

	<div>


</div>
		</div>
		
		

		


	</div>
</div>
</body>

</html>
