<?php


require('model.php'); 

/*$id=$_POST['id'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$mail=$_POST['mail'];
$phone=$_POST['phone'];
*/


    $id = $_GET['id'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $mail=$_POST['mail'];
    $phone=$_POST['phone'];


updatecontact($firstname, $lastname, $mail, $phone,$id);

?>