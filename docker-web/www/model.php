
<!-- 

//$dbh = new PDO('mysql:host=mysql;dbname=testcontact', 'root', 'pepito');
// utiliser la connexion ici
//$sth = $dbh->query('SELECT firstname, lastname, mail, phone FROM contacts ORDER BY lastname');

//while ($data=$sth->fetch()) 
//{   
//$sth->closeCursor();

//}

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

	$req = $db->prepare('INSERT INTO contacts (`id`, `firstname`, `lastname`, `mail`, `phone`, `prop_mail`) VALUES (NULL, :firstname, :lastname, :mail, :phone, :prop_mail)');
    $req->execute(array(
	'firstname ' => $firstname,
	'lastname' => $lastname,
	'mail' => $mail,
    'phone' => $phone,
	'prop_mail' => $pro_mail,
	));
	
echo 'Le contact a bien été ajouté !';
}
/*?>
/*<?php
/*function deletecontact()
/*{
/*    try
/*    {
/*        $db = new PDO('mysql:host= $servername; dbname= $dbname;charset=utf8', '$username', '$username');
/*    }
/*    catch (Exception $e)
/*    {
/*       die('Erreur :' .$e->getMessage()); 
/*    }
/*  $req = $db->prepare('DELETE FROM contacts WHERE firstname=$firstname lastname=$lastname'); 
/*      $req->execute()
/*    )); 
/*}
/*?> */