<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['user'])!="")
{
	header("Location: home.php");
}

if(isset($_POST['connexion']))
{
	// voir apres
	
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Page de connexion</title>
	<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
	<center>
		<div id="login-form">
			<form method="post">
				<table align="center" width="30%" border="0">
				<tr>
					<td><input type="text" name="user" placeholder="Identifiant" required /></td>
				</tr>
				<tr>
					<td><input type="password" name="pass" placeholder="Mot de passe" required /></td>
				</tr>
				<tr>
					<td><button type="submit" name="connexion">Connexion</button></td>
				</tr>
				<tr>
					<td><a href="register.php">Inscription</a></td>
				</tr>
				</table>
			</form>
		</div>
	</center>
</body>
</html>