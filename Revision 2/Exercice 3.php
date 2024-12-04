<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TP2-Ex3</title>
    </head>
    <body>
        <form action="Exercice 3.php" method="post">
            <label>Utilisateur : </label>
            <input type="mail" name="mail" placeholder="mail@gmail.com " required>
            <label>Mot de passe : </label>
            <input type="password" name="mdp" placeholder="Mot de passe " required>
            <input type="submit" name="submit" value="Chercher">
        </form>
    </body>
</html>

<?php
    $Users =    [   "User1" => ["mail" => "user1@gmail.com" , "mdp" => "mdp1"],
                    "User2" => ["mail" => "user2@gmail.com" , "mdp" => "mdp2"],
                    "User3" => ["mail" => "user3@gmail.com" , "mdp" => "mdp3"],
                    "User4" => ["mail" => "user4@gmail.com" , "mdp" => "mdp4"],
                    "User5" => ["mail" => "user5@gmail.com" , "mdp" => "mdp5"]
                ] ;


    $username = $_POST["mail"];
    $password = $_POST["mdp"];
    $bool = 0;
   
    echo "<br>";

    foreach ($Users as $User) {
        
        if($User["mail"] == $username && $User["mdp"] == $password  ){
            $bool = 1;
            break;
        }
    }
  
    
    if($bool == 1){
        echo " $username" . ": Utilisateur existant ! ";
    }
    else{
        echo " $username" . ": Utilisateur introuvable ! "; 
    }

?>