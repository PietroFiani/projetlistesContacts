<!DOCTYPE html>
<html lang="en">
<head>
	<title>Kontactak | Mot de passe oublier</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/html" href="index3.php">

	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="main.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	
	<script src="js/mainn.js"></script>

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	
	
<!--===============================================================================================-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="login.php">Kontactak</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">A propos</a></li>
      <li><a href="#">FAQ</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </div>
</nav>
</head>

<body>
	<div class="container-login100" style="background-image: url('bg-01.jpg');">
	<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" class="form-" action="./controllers/connectLogin.php" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username">
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="changer" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Changer mot de passe">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--===============================================================================================-->


</body>
</html>