<?php

require('../model.php'); 

$username=$_POST['username'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$passconfirm=$_POST['pass_confirm']; 

insertlogin($username,$email, $pass, $passconfirm);

header('Location: ../index.php')
?>