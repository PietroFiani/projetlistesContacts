
<!-- <?php


// $bdd = new PDO('mysql:host=mysql;dbname=testcontact;charset=utf8', 'root', 'pepito');

//$dbh = new PDO('mysql:host=mysql;dbname=testcontact', 'root', 'pepito');
// utiliser la connexion ici
//$sth = $dbh->query('SELECT firstname, lastname, mail, phone FROM contacts ORDER BY lastname');

//while ($data=$sth->fetch()) 
//{   
//$sth->closeCursor();

//}

?>

 -->
<?php
$servername = "mysql";
$username = "root";
$password = "pepito";
$dbname = "testcontact";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());


?>