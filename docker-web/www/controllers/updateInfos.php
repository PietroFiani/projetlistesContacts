<?php

require('../model.php'); 

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$mail=$_POST['mail'];
$phone=$_POST['phone'];

updatecontact($firstname,$lastname ,$mail ,$phone , 7);

header('Location : index.php'); 
?>