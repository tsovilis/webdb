<?php
  if (!empty($_POST['email'])) {
    include("verbinding1.php");

    $success = false;

    # HTML form and PHP code merged,
    # username and password stored in database,
    # password checked by database:
    # note change in form action: action="{$_SERVER['PHP_SELF']}",
    # form input is escaped,
    # switch to HTTPS connection if necessary,
    # password hashed into db with MD5().

    # Uncomment to quickly insert username/password in db:
    #$q = "INSERT INTO users1 ( username, password ) VALUES " .
    #     "( '{$_POST["username"]}', '" .
    #     MD5($_POST["password"]) . "')";

    $q = 'SELECT 1 FROM Account WHERE ' .
         'Emailadres = "' .  $_POST["email"] . '" AND ' .
         'Wachtwoord = "' .  $_POST["wachtwoord"] . '"';

    $result = mysql_query($q);
    if (!$result) {
      die("Invalid query: " . mysql_error());
    }
    $pw = mysql_fetch_row($result);

    if ($pw[0] === "1")
      $success = true;

    if ($success)
      print('Login succesful!<br />Click <a href="accountBaked.php\">here</a> to continue.<br />');
    else
      print('Login incorrect.<br />Click <a href="' .
            $_SERVER['PHP_SELF'] . '">here</a> to try again.<br />');

    include("closedb.php");
  }
  else
    # Switch to SSL connection if necessary.
    # note the two '=' and '@' in the following:
    if (@$_SERVER['HTTPS'] !== 'on')
    {
      # Note: this only works if https is on default port
      $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
      header("Location: $redirect", true, 301); // 301: "Moved permanently"
      exit();
    }


echo <<<EOT
<html>
<table border="0">
	<form name="login" method="post" action="{$_SERVER['PHP_SELF']}">
		<tr>
			<td>E-mail</td>
			<td><input type="text" name="email" size="18" value="E-mail"
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
</html>
EOT;
?>