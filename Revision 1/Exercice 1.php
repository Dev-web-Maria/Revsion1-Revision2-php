<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TP1-Ex1</title>
        
    </head>
    <body>
        
    </body>
</html>

<?php
    $Etudiant = array("Nom"=>"El Hattab" , "Prenom"=>"Maria" , "Matricule"=>"C-2023-0170");

    echo "L'étudiant 1 : <br><br>";

    foreach($Etudiant as $key => $val ){
    echo "$key : $val <br>";
    }
?>
