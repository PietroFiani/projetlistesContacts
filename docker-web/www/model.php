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

	$infos = $db->query('SELECT id,firstname,lastname,mail,phone FROM contacts');

	return $infos;
}

function insertcontact($firstname, $lastname, $mail, $phone, $prop_mail) //ok
{
    $db = dbconnect(); 

	$req = $db->exec("INSERT INTO `contacts` (`id`, `firstname`, `lastname`, `mail`, `phone`,`prop_mail`) VALUES (NULL, '$firstname', '$lastname', '$mail', '$phone','$prop_mail')");	

}


function updatecontact($firstname, $lastname,$mail,$phone, $id) //ok
{
	$db = dbconnect(); 

    $req = $db->prepare('UPDATE `contacts` SET firstname = :prenom, lastname = :nom, mail=:mail, phone=:phone WHERE id = :id ');
    $req->execute(array(
 
        'id' => $id,
  
        'prenom' => $firstname,
  
		'nom' => $lastname,
		
		'mail' => $mail,

		'phone' => $phone
	)); 
}



/*function deletecontact($lastname,$firstname,$prop_mail) //ok
{
    $db = dbconnect(); 

    $req = $db->prepare('DELETE FROM `contacts` WHERE lastname = :lastname AND firstname = :firstname AND prop_mail = :prop_mail'); 
    $req->execute(array(
        'lastname' => $lastname, 
		'firstname' => $firstname,
		'prop_mail' => $prop_mail
	)); 
    
    echo 'contact supprimé !'; 
}*/

function deletecontact($id) //ok
{
    $db = dbconnect(); 

    $req = $db->prepare('DELETE FROM contacts WHERE id = :id '); 
    $req->execute(array(
        'id'=>$id
    )); 
}

