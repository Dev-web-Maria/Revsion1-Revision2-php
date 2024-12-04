<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TD2-Ex5</title>
</head>
<body>
  
    <form action="Exercice 5.php" method="POST">
        <label for="commentaire">Ajoutez un commentaire :</label><br>
        <textarea name="commentaire" id="commentaire" rows="5" cols="50" required></textarea><br><br>
        <button type="submit" name="submit">Soumettre</button>
    </form>

</body>
</html>

<?php

    $tab = [];

    $comm = $_POST["commentaire"];  
    array_push($tab, $comm);   

    foreach ($tab as $index => $commentaire) {
        echo "<h3>Commentaire soumis :</h3>";
        echo ($commentaire) ;
    }

?>