<?php
// $bdd = new PDO('mysql:host=mysql;dbname=testcontact;charset=utf8', 'root', 'pepito');

$dbh = new PDO('mysql:host=mysql;dbname=testcontact', 'root', 'pepito');
// utiliser la connexion ici
$sth = $dbh->query('SELECT user_mail FROM users ORDER BY user_mail');

while ($data=$sth->fetch()) 
{   ?>
    <h1>c bon (enfin presque)<?php echo $data['user_mail']?></h1>
    <?php
}

$sth->closeCursor();
?>