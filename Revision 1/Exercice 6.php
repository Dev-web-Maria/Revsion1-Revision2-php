<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP1-Ex6</title>
</head>
<body>
    <form action="Exercice 6.php" method="post">
        <label>Nom :</label>
        <input type="text" name="nom">
        <label>Age :</label>
        <input type="number" name="age">
        <input type="submit" value="Envoyer">
    </form>
</body>

</html>

<?php
    $nom = $_POST["nom"];
    $age = $_POST["age"];

    echo "<br> Bienvenue, $nom, vous avez $age ans !";
?>
