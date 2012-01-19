<?php
	$con = mysql_connect("localhost","webdb1247","9ru7raku");
		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }

		mysql_select_db("webdb1247", $con);

?>
