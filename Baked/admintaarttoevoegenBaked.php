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
* Textarea Maxlength script- � Dynamic Drive (www.dynamicdrive.com)
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
<h4>
Taart informatie
</h4>

<table>
<tr>

<?php
		$con = mysql_connect("localhost","webdb1247","9ru7raku");
		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }

		mysql_select_db("webdb1247", $con);
		
		if (!$_POST['uploaded']){ 
?>


<form action="taarttoevoegen.php" method="post">

	<tr>
	<td> Naam voor de taart: </td> <td> <input type="text" name="Taartnaam" /> </td>
	</tr>

	<tr>
	<td>Soort taart:</td> <td> <select name="Taartsoort">
							<option value="fruittaart">fruittaart</option>
							<option value="slagroomtaart">slagroomtaart</option>
							<option value="chocoladetaart">chocoladetaart</option>
							<option value="combitaart">combitaart</option>
							</select></td>
	</tr>

	<tr>
	<td>Korte beschrijving:</td> <td> <textarea 	type="text" name="KorteInfoTaart" cols="56" rows="3"
						maxlength="168" onkeyup="return ismaxlength(this)"
						onfocus="if(this.value == 'Hier een korte beschrijving van de taart.(max 168)') {this.value = '';}">Hier een korte beschrijving van de taart.(max 168)</textarea> </td>
	</tr>

	<tr>
	<td>Uitgebreide beschrijving:</td> <td> <textarea 	type="text" name="BeschrijvingTaart" cols="56" rows="12"
						maxlength="672" onkeyup="return ismaxlength(this)"
						onfocus="if(this.value == 'Hier een uitgebreide beschrijving van de taart. (max 672)') {this.value = '';}">Hier een uitgebreide beschrijving van de taart. (max 672)</textarea></td>
	</tr>

	<tr>
	<td> Prijs: </td> <td> <input type="text" name="Prijs" /></td>
	</tr>

	<tr>
		<td>	
			<form action="<? echo $_SERVER['PHP_SELF']; ?>" method="post" ENCTYPE="multipart/form-data"> 
			Upload plaatje:<br /><br /> 
			<td><input type="file" name="image">
			<input type="hidden" name="uploaded" value="1"> 

			</form></td>
			
			<?
				}else{ 
				
				$ip=$REMOTE_ADDR; 
				
				if (!empty($image)){ 
				
				copy($image, "./temporary/".$ip.""); 
				
				$filename1 = "./temporary/".$REMOTE_ADDR; 
				$fp1 = fopen($filename1, "r"); 
				$contents1 = fread($fp1, filesize($filename1)); 
				fclose($fp1);
				$encoded = chunk_split(base64_encode($contents1));  
				
				mysql_query("INSERT INTO images (img,data)"."VALUES ('NULL', '$encoded')"); 
				
				unlink($filename1); } 
				} 
				
				?>
				
				
		</td>
	</tr>

	
	</table>
	<br />
	<br />
		<input type="submit" name="toevoegen" value="Toevoegen" />
	
</form>
	
	</div>

	<div>


</div>
		</div>
		
		

		

<? mysql_close($con); ?>
	</div>
</div>
</body>

</html>