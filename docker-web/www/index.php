<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>

    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalForm">
  Ajouter un contact
</button>

<!-- Modal -->
<div class="modal fade" id="ModalForm" tabindex="-1" role="dialog" aria-labelledby="ModalLabelFrom" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabelFrom">Nouveau Contact</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


      	<form method="post" action="post_contact.php">
          <?php 
            if(!empty($error_message)){
            ?>
            <div class="alert alert-danger">
              <strong>Error!</strong> <?= $error_message ?>
            </div>

            <?php
            }
            ?>

            <?php 
            // Display Success message
            if(!empty($success_message)){
            ?>
            <div class="alert alert-success">
              <strong>Success!</strong> <?= $success_message ?>
            </div>

            <?php
            }
            ?>
		  <div class="form-group">
		    <label for="formGroupInputNom">Nom</label>
		    <input type="text" class="form-control" id="formGroupInputNom" placeholder="Nom" name="lastname">
		  </div>
		  <div class="form-group">
		    <label for="formGroupInputPrenom">Prénom</label>
		    <input type="text" class="form-control" id="formGroupInputPrenom" placeholder="Prénom" name="firstname">
		  </div>		
		  <div class="form-group">
		    <label for="formGroupInputMail">Email</label>
		    <input type="text" class="form-control" id="formGroupInputMail" placeholder="Email"name="mail">
		  </div>
		  <div class="form-group">
		    <label for="formGroupInputTel">Téléphone</label>
		    <input type="text" class="form-control" id="formGroupInputTel" placeholder="Téléphone" name="phone">
		  </div>
		</form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="submit" class="btn btn-primary" name="btnsubmit">Enregister contact</button>
      </div>
    </div>
  </div>
</div>
  </div>
</nav>


</head>

<body>

<?php
include_once("controler.php");
$sql = "SELECT firstname, lastname, mail, phone FROM contacts ORDER BY lastname";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
while( $record = mysqli_fetch_assoc($resultset) ) {
?>




 

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-9">
    <div class="card">
  <div class="card-body">
      <h5 class="card-title"><?php echo $record['firstname']?> <?php echo $record['lastname']?></h5>
      <p class="card-text"><?php echo $record ['mail']?></p>
      <p class="card-text"><?php echo $record['phone']?></p>

     


</div>
  </div>
  </div> 
</div>
</div>
<?php } ?>



</body> 