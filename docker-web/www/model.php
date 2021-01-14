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

function connectLogin(){
	if (isset($_POST['connexion']) && $_POST['connexion'] == 'Connexion') {
		if ((isset($username) && !empty($username)) && (isset($pass) && !empty($pass))) {

	$db = new PDO('mysql:host=mysql; dbname=testcontact; charset=utf8', 'root', 'pepito');
	mysqli_select_db ('testcontact', $db);

	$sql = 'SELECT count(*) FROM membre WHERE login="'.mysql_escape_string($username).'" AND pass_md5="'.mysql_escape_string(md5($pass)).'"';
	$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
	$data = mysql_fetch_array($req);

	mysql_free_result($req);
	mysql_close();

	if ($data[0] == 1) {
		session_start();
		$_SESSION['username'] = $username;
		header('Location: index.php');
		exit();
	}
	elseif ($data[0] == 0) {
		$erreur = 'Compte non reconnu.';
		}
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


function insertlogin($username, $mail, $pass, $passconfirm) //ok
{
    $db = dbconnect(); 

	$req = $db->exec("INSERT INTO `membre` (`id`, `username`, `mail`, `pass`, `passconfirm`) VALUES (NULL, '$username', '$mail', '$pass', '$passconfirm')");

if ($pass != $passconfirm) {
	$erreur = 'Les 2 mots de passe sont différents.';
	}	

}

function updatePass(){
	if (isset($_POST['changer']) && $_POST['changer'] == 'Changer mot de passe') {
		if ((isset($username) && !empty($username)) && (isset($email) && !empty($email))) {

	$db = new PDO('mysql:host=mysql; dbname=testcontact; charset=utf8', 'root', 'pepito');
	mysqli_select_db ('testcontact', $db);

// va verifier en base si id et email correspondent
	$sql = 'SELECT count(*) FROM membre WHERE login="'.mysql_escape_string($username).'" AND pass_md5="'.mysql_escape_string(md5($email)).'"';
	$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
	$data = mysql_fetch_array($req);

	mysql_free_result($req);
	mysql_close();

	if ($data[0] == 1) {
		session_start();
		$_SESSION['username'] = $username;
		if($_POST["currentPassword"] == $row["pass"] && $_POST["newPassword"] == $row["confirmPassword"] ) {
				mysqli_query($db,"UPDATE membre set password='" . $_POST["newPassword"] . "' WHERE name='" . $id . "'");
						$message = "Password Changed Sucessfully";
				}
		exit();
	}
	elseif ($data[0] == 0) {
		$erreur = 'Compte non reconnu.';
		}
	}
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
