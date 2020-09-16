<?php
$bdd = new PDO('mysql:host=mySql;dbname=testcontact;charset=utf8', 'root', 'pepito');



$sql = "SELECT firstname FROM users";
$result = $bdd->query($sql);  #les problemes

// if ($result->num_rows > 0) {
// 	// output data of each row
// 	while($row = $result->fetch_assoc()) {
// 		echo $row['name']."&lt;br>";
// 	}
// } else {
// 	echo "0 results";
// }
// $bdd->close();

?>
