<?php
function dbconnect()
{
	try
	{
		$db = new PDO('mysql:host=mysql; dbname=testcontact; charset=utf8', 'root', 'pepito');
		return $db; 
	}
	catch(Exception $e)
	{
	    die('Erreur : '.$e->getMessage());
	}
}

function getinfos()
{
	$db = dbconnect(); 

	$infos = $db->query('SELECT firstname,lastname,mail,phone FROM contacts');

	return $infos;
}

function insertcontact($firstname, $lastname, $mail, $phone)
{
    $db = dbconnect(); 

	$req = $db->exec("INSERT INTO `contacts` (`id`, `firstname`, `lastname`, `mail`, `phone`) VALUES (NULL, '$firstname', '$lastname', '$mail', '$phone')");


//$content = file_get_contents('./../img/etchebest_beau_ca.gif');
//header('Content-Type: image/gif');
//echo $content;	

echo 'Le contact a bien été ajouté !';
}

function updatecontact($firstname, $lastname, $mail, $phone, $id)
{
	$db = dbconnect(); 

	$req = $db->exec("UPDATE contacts SET firstname = $firstname, lastname = $lastname, mail = $mail, phone = $phone WHERE id = $id ");
	
echo 'Le contact a bien été mis à jour !'; 
}
