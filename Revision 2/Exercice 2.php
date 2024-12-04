<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TP2-Ex2</title>
    </head>
    <body>
        <form action="Exercice 2.php" method="post">
            <label>Utilisateur : </label>
            <input type="text" name="username" placeholder="Entrez votre nom : " required>
            <input type="submit" name="submit" value="Chercher">
        </form>
    </body>
</html>

<?php
    $Employes = [   "Emp1" => ["nom" => "Ahmed" , "poste" => "poste1" , "salaire" => 5500],
                    "Emp2" => ["nom" => "Jamal" , "poste" => "poste2" , "salaire" => 6700],
                    "Emp3" => ["nom" => "Jihan" , "poste" => "poste3" , "salaire" => 7300],
                    "Emp4" => ["nom" => "Faiza" , "poste" => "poste4" , "salaire" => 8900],
                    "Emp5" => ["nom" => "Karim" , "poste" => "poste5" , "salaire" => 9100]
                ] ;


    $user = $_POST["username"];
    $nom;
    $poste;
    $salaire;
    $bool = 0;
    echo "<br>";


    foreach ($Employes as $employe) {

        if($employe["nom"] == $user){

            $bool = 1;
            $nom = $employe["nom"];
            $poste = $employe["poste"];
            $salaire = $employe["salaire"];
            break;

        }
        
    }


    if($bool == 1){
        echo "Nom : " . $nom . ", Poste : " . $poste . ", Salaire  : " . $salaire . " dhs <br>";
    }
    else{
        echo " $user" . ": Utilisateur introuvable ! "; 
    }
  
?>