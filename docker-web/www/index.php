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


      	<form action="index.php" method="post">
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  </div>
</nav>


</head>

<body>

<div class="row">
	<?php foreach ($sth as $data): ?>
  <div class="col-sm-10">
  
 <div class="card" style="min-width:20%; min-height: 20%;  margin: 10px 10px 10px 10px">
  <div class="card-header"><?= $data['firstname']?></div>
  <div class="card-body">
      <h5 class="card-title"><?= $data['firstname']?> <?= $data['lastname']?></h5>
      <p class="card-text"><?= $data ['mail']?></p>
      <p class="card-text"><?=$data ['phone']?></p>

      <?php endforeach; ?>
  </div>
</div>
</div></div>
</body> 
<?php

require 'controler.php';
   ?>