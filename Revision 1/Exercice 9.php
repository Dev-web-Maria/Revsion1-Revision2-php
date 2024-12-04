<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP1-Ex9</title>
</head>
<body>
    <form action="Exercice 9.php" method="get">
        <label>Nombre 1 :</label>
        <input type="number" name="nbr1">
        <label>Nombre 2 :</label>
        <input type="number" name="nbr2">
        <input type="submit" value="Envoyer"><br>
    </form>
</body>
</html>

<?php
    $nbr1 = $_GET["nbr1"];
    $nbr2 = $_GET["nbr2"];
    $somme = $nbr1 + $nbr2;

    echo "<br>";
    echo "La somme de $nbr1 et $nbr2 est : $somme";
?>