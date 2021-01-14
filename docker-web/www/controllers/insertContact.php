<?php

require('../model.php'); 

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$mail=$_POST['mail'];
$phone=$_POST['phone']; 

insertcontact($firstname,$lastname, $phone, $mail,'michel@mail.mail');

header('Location: ../View.php')
?>