<?php
echo 'bienvenue'; 
?>

<form action="./controllers/insertContact.php" method="post">
    
    <input type="text" name="firstname"/>
    <input type="text" name="lastname"/>

    <button type="submit">envoyer</button>

</form>


<br/>
<br/>

<form action="./controllers/deleteContact.php" method="post">
    
    <input type="text" name="firstname"/>
    <input type="text" name="lastname"/>

    <button type="submit">envoyer</button>

</form>