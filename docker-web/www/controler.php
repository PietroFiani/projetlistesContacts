
<?php


// $bdd = new PDO('mysql:host=mysql;dbname=testcontact;charset=utf8', 'root', 'pepito');

$dbh = new PDO('mysql:host=mysql;dbname=testcontact', 'root', 'pepito');
// utiliser la connexion ici
$sth = $dbh->query('SELECT firstname, lastname, mail, phone FROM contacts ORDER BY lastname');

while ($data=$sth->fetch()) 
{   
$sth->closeCursor();

}

?>


