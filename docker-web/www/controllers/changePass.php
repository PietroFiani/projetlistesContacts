<?php

require('../model.php'); 

$username=$_POST['username'];
$email=$_POST['email'];

changePass($username,$email);

header('Location: ../index.php')
?>