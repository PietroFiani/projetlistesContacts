<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['user'])!="")
{
	header("Location: home.php");
}

if(isset($_POST['inscription']))
{
	// A COMPLETER
	
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Page d'inscription</title>
	<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
	<center>
		<div id="login-form">
			<form method="post">
				<table align="center" width="30%" border="0">
					<tr>
						<td><input type="text" name="nom" placeholder="Nom" required /></td>
					</tr>
					<tr>
						<td><input type="text" name="prenom" placeholder="Prénom" required /></td>
					</tr>
					<tr>
						<td><input type="text" name="ville" placeholder="Ville" required /></td>
					</tr>
					<tr>
						<td><input type="text" name="user" placeholder="Identifiant" required /></td>
					</tr>
					<tr>
						<td><input type="password" name="pass" placeholder="Mot de passe" required /></td>
					</tr>
					<tr>
						<td><button type="submit" name="inscription">Inscription</button></td>
					</tr>
					<tr>
						<td><a href="index.php">Connexion</a></td>
					</tr>
				</table>
			</form>
		</div>
	</center>
</body>
</html>