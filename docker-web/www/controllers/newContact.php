<?php
//teste si le visiteur a remplir le formulaire de connexion

require('../model.php'); 

if (isset($_POST['username']) && $_POST['username'] == 'Connexion') {
	if ((isset($_POST['username']) && !empty($_POST['username'])) && (isset($_POST['password']) && !empty($_POST['password']))) {

	$base = mysql_connect ('username', 'password');
	mysql_select_db ('nom_base', $base);

if ($data[0] == 1) {
		session_start();
		$_SESSION['username'] = $_POST['username'];
		header('Location: index.php'); // "inconnu.php" page
		exit();
	}

header('Location: ../View.php')
?>