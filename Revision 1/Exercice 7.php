<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP1-Ex7</title>
</head>
<body>
    <form action="Exercice 7.php" method="post">
        <label>Nom :</label>
        <input type="text" name="nom">
        <label>Age :</label>
        <input type="number" name="age">
        <input type="submit" value="Envoyer"><br>
    </form>
</body>

</html>

<?php
    $nom = $_POST["nom"];
    $age = $_POST["age"];

    echo "<br>";
    
    if(filter_var($age, FILTER_VALIDATE_INT) && $age > 0){

       echo "Bienvenue, $nom, vous avez $age ans !";

    }
    else{

        echo "L'âge saisi est invalide !";
    }
?>