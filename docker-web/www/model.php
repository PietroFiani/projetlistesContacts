<?php
function dbconnect()
{
	try
	{
		$db = new PDO('mysql:host= $servername; dbname= $dbname;charset=utf8', '$username', '$username');
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

	$req = $db->query('SELECT firstname,lastname,mail,phone FROM contacts)');

	return $req;
}

function insertcontact($firstname, $lastname,$mail,$phone,$prop_mail)
{
    $db = dbconnect(); 

	$req = $db->prepare('INSERT INTO contacts (`id`, `firstname`, `lastname`, `mail`, `phone`, `prop_mail`) VALUES (NULL, :firstname, :lastname, :mail, :phone, :prop_mail)');
    $req->execute(array(
	'firstname ' => $firstname,
	'lastname' => $lastname,
	'mail' => $mail,
    'phone' => $phone,
	'prop_mail' => $prop_mail,
	));
	
echo 'Le contact a bien été ajouté !';
}

function updatecontact($firstname,$lastname,$mail,$phone,$prop_mail)
{
	$db = dbconnect(); 

	$req = $db->exec('UPDATE contacts SET prop_mail = $prop_mail WHERE firstname = );
    $req -> execute(array(
	'firstname ' => $firstname,
	'lastname' => $lastname,
	'mail' => $mail,
    'phone' => $phone,
	'prop_mail' => $prop_mail,
	));
	
echo 'Le contact a bien été mis à jour !';
}

function deletecontact()
{
	$db=dbconnect(); 
	
  $req = $db->prepare('DELETE FROM contacts WHERE firstname=$firstname lastname=$lastname'); 
      $req->execute()
	)); 
}
