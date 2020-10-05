<?php

require('../model.php'); 


$id = $_POST['id'];

deletecontact($id);

header('Location: ../View.php')
?>
