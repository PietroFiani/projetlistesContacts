<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
// A COMPLETER

?>

<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Bienvenue, </title>
	<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
	<div id="header">
		<div id="left">
			<label>Accueil</label>
		</div>
		<div id="right">
			<div id="content">
				Bonjour, <a href="logout.php?logout">Déconnexion</a>
			</div>
		</div>
	</div>
	<div id="body">
		<p>En construction...</p>
		<br>
		
	</div>
</body>
</html>
