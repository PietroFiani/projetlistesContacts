<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="test.css"> -->
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <title>Accueil</title>
</head>

<body>

    <header>


    </header>

    <div class="main section-nav">
        <nav class="navbar navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="#">Kontactak</a>
                <button class="btn btn-light my-2 my-sm-0" data-toggle="modal" data-target="#modalAdd">Ajouter</button>
            </div>
        </nav>
        <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="modalAdd" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="insert-contact-container">
                        <div class="modal-body">
                            <form class="form-" action="./controllers/insertContact.php" method="post">
                            <label>Prénom </label>
                                <input type="text" class="form-control" name="firstname" required>
                            <label>Nom</label>
                                <input type="text" class="form-control" name="lastname" required>
                            <label>Email</label>
                                <input type="email" class="form-control" name="mail" required>
                            <label>Téléphone</label>
                                <input type="tel" name="phone" class="form-control" required>
                                <button type="submit" class="btn btn-primary insert-contact-btn" style="margin-top:20px;">Inserer contact</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="margin-top:20px;"> Annuler </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="research-contact-container">
            <form action="./controllers/researchContact.php" method="post">
                <input type="search" name="terms">
                <button type="submit"> rechercher </button>
            </form>
        </div>





        <?php include_once('./controllers/getInfos.php'); ?>

        <?php foreach ($infos as $info): ?>
        <div class="col-sm">
            <div class="card">
                <div class="card-body" style="padding-bottom:10px;">

                    <h5 class="card-text"><?php echo $info['firstname']?></h5>
                    <h5 class="card-text"><?php echo $info['lastname']?></h5>
                    <p class="card-text"><?php echo $info ['mail']?></p>
                    <p class="card-text"><?php echo $info['phone']?></p>

                    <form action='./controllers/deleteContacts.php' method='post' class="deleteContact-form">
                        <input type="hidden" name="id" value="<?php echo $info['id'];?>" />
                        <button class="btn btn-primary" type="button" data-toggle="collapse"
                            data-target="#collapseUpdateContact" aria-expanded="false"
                            aria-controls="collapseUpdateContact">
                            Modifier le contact</button>
                        <button type="submit" class="delete-btn btn btn-danger"> Supprimer contact</button>
                    </form>



                    <div class="collapse" id="collapseUpdateContact">
                        <form class="form-update" action="./controllers/updateInfos.php" method="post">
                            <label for="inputPrenom" style="margin-top:20px;">Prénom</label>
                            <input type="text" class="form-control" name="firstname" value="<?php echo $info['firstname'];?>" required>
                            <label for="inputNom">Nom</label>
                            <input type="text" class="form-control" name="lastname" value="<?php echo $info['lastname'];?>" required>
                            <label for="inputMail">Mail</label>
                            <input type="text" class="form-control" name="mail" value="<?php echo $info['mail'];?>" required>
                            <label for="inputPhone">Téléphone</label>
                            <input type="text" class="form-control" name="phone"  value="<?php echo $info['phone'];?>" required>
                            <input type="hidden" name="id" value="<?php echo $info['id'];?>" />
                            <button type="submit" class="btn btn-primary" style="margin-top:20px;"> Mettre à jour le contact</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php endforeach; ?>
    </div>
    </body>

</html>