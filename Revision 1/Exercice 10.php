<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP1-Ex10</title>
</head>
<body>
    <form  method="POST" action=" Exercice 10.php" >  
        <label>Compte : </label>
        <select name = "compte">
            <option value="admin">Administrateur</option>
            <option value="user">Utilisateur</option>
        </select>
        <input type="submit" name="submit" value="Envoyer">
    </form>
</body>
</html>

<?php

    $cmpt = $_POST["compte"]; 
    echo "<br>";

    if($cmpt== "admin"){
        echo "Bienvenue, administrateur ! <br> ";
    }else{
        echo "Bienvenue, utilisateur simple ! <br>";
    }

?>