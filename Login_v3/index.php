<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="util.css">
	<link rel="stylesheet" type="text/css" href="main.css">
<!--===============================================================================================-->
	<nav class="navbar navbar-dark bg-dark">
	 		<li class="nav-item">
	    <a class="nav-link active" href="#">Accueil</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="#">A propos</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="#">Services</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="#">Contact</a>
	  </li>
	</nav>
</head>
<body>
	

	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
			   <div class="login-space">
				<form class="login100-form validate-form">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>
					<div class="login">
						<div class="login-snip"> 
							<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Identifiant</label><input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Inscription</label>
						</div>

						<div class="wrap-input100 validate-input" data-validate = "Enter username">
							<input class="input100" type="text" name="username" placeholder="Username">
							<span class="focus-input100" data-placeholder="&#xf207;"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Enter password">
							<input class="input100" type="password" name="pass" placeholder="Password">
							<span class="focus-input100" data-placeholder="&#xf191;"></span>
						</div>

						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div class="container-login100-form-btn">
							<button class="login100-form-btn">
								Login
							</button>
						</div>

						<div class="text-center p-t-90">
							<a class="txt1" href="#">
								Forgot Password?
							</a>
						</div>
					</div>
					
					<div class="sign-up-form">
                            <div class="group"> <label for="user" class="label">Username</label> <input id="user" type="text" class="input" placeholder="Create your Username"> </div>
                            <div class="group"> <label for="pass" class="label">Password</label> <input id="pass" type="password" class="input" data-type="password" placeholder="Create your password"> </div>
                            <div class="group"> <label for="pass" class="label">Repeat Password</label> <input id="pass" type="password" class="input" data-type="password" placeholder="Repeat your password"> </div>
                            <div class="group"> <label for="pass" class="label">Email Address</label> <input id="pass" type="text" class="input" placeholder="Enter your email address"> </div>
                            <div class="group"> <input type="submit" class="button" value="Sign Up"> </div>
                            <div class="hr"></div>
                            <div class="foot"> <label for="tab-1">Already Member?</label> </div>
                    </div>
				</form>
				</div>
			</div>
		</div>
	</div>
	<div id="dropDownSelect1"></div>

<?php
//teste si le visiteur a remplir le formulaire de connexion
if (isset($_POST['connexion']) && $_POST['connexion'] == 'Connexion') {
	if ((isset($_POST['username']) && !empty($_POST['username'])) && (isset($_POST['pass']) && !empty($_POST['pass']))) {

	$base = mysql_connect ('serveur', 'login', 'password');
	mysql_select_db ('nom_base', $base);

	// rappel : voir avec les autres la BDD
	$sql = 'SELECT count(*) FROM membre WHERE username="'.mysql_escape_string($_POST['username']).'" AND pass_md5="'.mysql_escape_string(md5($_POST['pass'])).'"';
	$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
	$data = mysql_fetch_array($req);

	mysql_free_result($req);
	mysql_close();

	// si c'est bon acces aa la suite...
	if ($data[0] == 1) {
		session_start();
		$_SESSION['username'] = $_POST['username'];
		header('Location: inconnu.php'); // "inconnu.php" page
		exit();
	}
	// soit user ou mdp erroné
	elseif ($data[0] == 0) {
		$erreur = 'Compte non reconnu.';
	}
	// cas si les compte on les meme ID
	else {
		$erreur = 'Probème dans la base de données : plusieurs membres ont les mêmes identifiants de connexion.';
	}
	}
	else {
	$erreur = 'Au moins un des champs est vide.';
	}
}
?>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>