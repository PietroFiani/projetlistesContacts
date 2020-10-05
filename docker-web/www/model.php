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

	$infos = $db->query('SELECT id,firstname,lastname,mail,phone FROM contacts ORDER BY lastname ASC');

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


function deletecontact($id) //ok
{
    $db = dbconnect(); 

    $req = $db->prepare('DELETE FROM contacts WHERE id = :id '); 
    $req->execute(array(
        'id'=>$id
    )); 
}

function researchcontact($input){
	$db = dbconnect(); 

	$infos = $db->prepare('SELECT id,firstname,lastname,mail,phone FROM contacts WHERE firstname LIKE "%:prenom%" '); 
	$infos->execute(array(
		'prenom' => $input
	)); 

	return $infos;
}
