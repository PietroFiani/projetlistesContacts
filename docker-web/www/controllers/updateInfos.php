<?php

require('../model.php'); 

$firstname= $_POST['firstname'];
$lastname= $_POST['lastname'];
$mail= $_POST['mail'];
$phone= $_POST['phone'];
$id= $_POST['id'];
 
updatecontact($firstname,$lastname ,$mail ,$phone , $id);
header('Location: ../index.php'); 
?>