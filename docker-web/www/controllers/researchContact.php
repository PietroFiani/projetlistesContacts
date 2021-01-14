<?php

require('../model.php');

$research = $_POST['terms'];
echo $research; 
$results = researchcontact('$research'); 

foreach ($results as $result)
echo $result; 