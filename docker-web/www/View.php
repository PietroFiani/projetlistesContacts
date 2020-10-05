<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="test.css">
    <title>Accueil</title>
</head>
<body>
    
    <header>


    </header>

    <div class="main section-nav">

    <button name="insert-contact" id="insert-contact-btn">Ajouter</button>
        
        <div class="insert-contact-container">
            <form class="form-" action="./controllers/insertContact.php" method="post"> 
                <input type="text" name="firstname" placeholder="prénom">
                <input type="text" name="lastname" placeholder="nom">
                <input type="email" name="mail" placeholder="mail">
                <input type="tel" name="phone" placeholder="téléphone">
                <button  type="submit"> inserer contact</button>
            </form>
        </div>
        

    <?php include_once('./controllers/getInfos.php'); ?>

        <?php foreach ($infos as $info): ?>

            <section class="card">
                
                <h5 class="card-text"><?php echo $info['firstname']?></h5>
                <h5 class="card-text"><?php echo $info['lastname']?></h5>
                <p class="card-text"><?php echo $info ['mail']?></p>
                <p class="card-text"><?php echo $info['phone']?></p>
                
                <form action='./controllers/deleteContacts.php' method='post' class="deleteContact-form">
                    <input type="hidden" name="id" value= "<?php echo $info['id'];?>"/>
                    <button  type="submit" class="delete-btn"> Supprimer contact</button>
                </form>

            </section>

            <section class="update-form">
                
                <form class="form-update" action="./controllers/updateInfos.php" method="post"> 
                    <input type="text" name="firstname">
                    <input type="text" name="lastname">
                    <input type="text" name="mail">
                    <input type="text" name="phone">
                    <input type="hidden" name="id" value= "<?php echo $info['id'];?>"/>
                    <button  type="submit"> Mettre à jour contact</button>
                </form>

            </section>
        

        <?php endforeach; ?> 

    </div>

<script src="index.js"></script>
</body>
</html>