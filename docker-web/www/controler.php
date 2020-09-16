
<!-- <?php


// $bdd = new PDO('mysql:host=mysql;dbname=testcontact;charset=utf8', 'root', 'pepito');

//$dbh = new PDO('mysql:host=mysql;dbname=testcontact', 'root', 'pepito');
// utiliser la connexion ici
//$sth = $dbh->query('SELECT firstname, lastname, mail, phone FROM contacts ORDER BY lastname');

//while ($data=$sth->fetch()) 
//{   
//$sth->closeCursor();

//}

?>

 -->
<?php
$servername = "mysql";
$username = "root";
$password = "pepito";
$dbname = "testcontact";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());

$error_message = "NON";$success_message = "OUI";

// Register user
if(isset($_POST['btnsubmit'])){
   $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
   $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
   $mail = mysqli_real_escape_string($conn, $_POST['mail']);
   $phone = mysqli_real_escape_string($conn, $_POST['phone']);


  if (empty($firstname)) { array_push($errors, "Username is required"); }
  if (empty($lastname)) { array_push($errors, "Email is required"); }
  if (empty($mail)) { array_push($errors, "mail is required"); }
  if (empty($phone)) { array_push($errors, "phone is required"); }

/*      if($isValid){

     // Check if Email-ID already exists
     $stmt = $con->prepare("SELECT * FROM contacts WHERE phone = ?");
     $stmt->bind_param("s", $phone);
     $stmt->execute();
     $result = $stmt->get_result();
     $stmt->close();
     if($result->num_rows > 0){
       $isValid = false;
       $error_message = "Phone is already existed.";
     }

   }

   if($isValid){

     // Check if Email-ID already exists
     $stmt = $con->prepare("SELECT * FROM contacts WHERE mail = ?");
     $stmt->bind_param("s", $mail);
     $stmt->execute();
     $result = $stmt->get_result();
     $stmt->close();
     if($result->num_rows > 0){
       $isValid = false;
       $error_message = "Email-ID is already existed.";
     }

   }
*/
   // Insert records
/*   if($isValid){
     $insertSQL = "INSERT INTO contacts(firstname,lastname,mail,phone ) values($firstname,$lastname,$mail,$phone)";
     $stmt = $con->prepare($insertSQL);
     $stmt->bind_param("ssss",$firstname,$lastname,$mail,$phone);
     $stmt->execute();
     $stmt->close();

     $success_message = "Account created successfully.";
   }*/

   if (count($errors) == 0) {

    $query = "INSERT INTO contacts (firstname,lastname,mail,phone) 
                VALUES ('$firstname','$lastname','$mail','$phone')";
    mysqli_query($conn, $query);
    header('location: index.php');
  }
}
?>