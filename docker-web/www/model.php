
<!-- 

//$dbh = new PDO('mysql:host=mysql;dbname=testcontact', 'root', 'pepito');
// utiliser la connexion ici
//$sth = $dbh->query('SELECT firstname, lastname, mail, phone FROM contacts ORDER BY lastname');

//while ($data=$sth->fetch()) 
//{   
//$sth->closeCursor();

//}

?>

<?php

function getinfos()
{
	try
	{
	    $db = new PDO('mysql:host= $servername; dbname= $dbname;charset=utf8', '$username', '$username');
	}
	catch(Exception $e)
	{
	    die('Erreur : '.$e->getMessage());
	}

	$req = $db->query('SELECT firstname,lastname,mail,phone FROM contacts)');

	return $req;
}

function insertcontact()
{
    try
	{
	    $db = new PDO('mysql:host= $servername; dbname= $dbname;charset=utf8', '$username', '$username');
	}
	catch(Exception $e)
	{
	    die('Erreur : '.$e->getMessage());
	}

	$req = $db->query('SELECT firstname,lastname,mail,phone FROM contacts)');

	return $req;
}
?>
