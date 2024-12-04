<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TP2-Ex1</title>
    </head>
    <body>
        
    </body>
</html>

<?php
    $Employes = [   "Emp1" => ["nom" => "Ahmed" , "poste" => "poste1" , "salaire" => 5500],
                    "Emp2" => ["nom" => "Jamal" , "poste" => "poste2" , "salaire" => 6700],
                    "Emp3" => ["nom" => "Jihan" , "poste" => "poste3" , "salaire" => 7300],
                    "Emp4" => ["nom" => "Faiza" , "poste" => "poste4" , "salaire" => 8900],
                    "Emp5" => ["nom" => "Karim" , "poste" => "poste5" , "salaire" => 9100]
                ] ;

    $somme = 0;
    $taille = count($Employes);

    foreach ($Employes as $employe) {
        echo "Nom : " . $employe["nom"] . ", Poste : " . $employe["poste"] . ", Salaire  : " . $employe["salaire"] . " dhs <br>";
        $somme += $employe["salaire"];
    }
  
    echo "<br>";
    echo "Le salaire moyen des employés est : " . ($somme/$taille) . "dhs";
?>