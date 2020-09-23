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

/*function insertcontact($firstname, $lastname, $mail, $phone) //ok
{
    $db = dbconnect(); 

	$req = $db->exec("INSERT INTO `contacts` (`id`, `firstname`, `lastname`, `mail`, `phone`) VALUES (NULL, '$firstname', '$lastname', '$mail', '$phone')");	

echo 'Le contact a bien été ajouté !';


}*/


function insertcontact($firstname, $lastname, $mail, $phone) //ok
{
    $db = dbconnect(); 

    $req = $db->exec("INSERT INTO contacts (id, firstname, lastname, mail, phone) VALUES (NULL, '$firstname', '$lastname', '$mail', '$phone')");

echo 'Le contact a bien été ajouté !';
}

function updatecontact($firstname, $lastname,$mail,$phone, $id) //ok
{
	$db = dbconnect(); 

    $req = $db->prepare('UPDATE `contacts` SET nom = :nom, prenom = :prenom, mail=:mail, phone=:phone WHERE id = :id ');
    $req->execute(array(
 
        'id' => $id,
  
        'nom' => $firstname,
  
		'prenom' => $lastname,
		
		'mail' => $mail,

		'phone' => $phone
	)); 
     
    echo 'contact mis à jour'; 
}

/*function deletecontact($nom,$prenom,$prop_mail) //ok
{
    $db = dbconnect(); 

    $req = $db->prepare('DELETE FROM contacts WHERE nom = :nom AND prenom = :prenom AND prop = :prop_mail'); 
    $req->execute(array(
        'prenom' => $prenom, 
		'nom' => $nom,
		'prop_mail' => $prop_mail
	)); 
    
    echo 'contact supprimé !'; 
}*/


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

    echo 'contact supprimé !'; 
}

