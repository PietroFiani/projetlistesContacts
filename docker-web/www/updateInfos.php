<?php


require('model.php'); 

/*$id=$_POST['id'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$mail=$_POST['mail'];
$phone=$_POST['phone'];
*/


    $id = $_GET['id'];
    $firstname=$_GET['firstname'];
    $lastname=$_GET['lastname'];
    $mail=$_GET['mail'];
    $phone=$_GET['phone'];


updatecontact($firstname, $lastname, $mail, $phone,$id);

?>