<?php

require('../model.php'); 

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$mail=$_POST['mail'];
$phone=$_POST['phone'];
echo($firstname); 
insertcontact($firstname,$lastname, 'tatata', 'tatat','michel@mail.mail');

?>