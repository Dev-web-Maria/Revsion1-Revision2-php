<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP1-Ex4</title>
</head>
<body>
    
</body>
</html>

<?php
    $Scores = array("Etudiant 1"  => 15.5 , "Etudiant 2" => 18.75 , "Etudiant 3"  => 14.25 , "Etudiant 4" => 10 , "Etudiant 5"  => 20);

    $somme = 0;
    $taille = count($Scores);

    foreach($Scores as $key => $val){
        echo "$key : $val <br>";
        $somme += $val;
    }
  
    echo "La moyenne des scores des étudiants est :" . ($somme/$taille);
?>