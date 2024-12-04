<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP1-Ex3</title>
</head>
<body>
    
</body>
</html>

<?php
    $Produits = [ "Produit 1" => ["nom" => "Prd 1" , "prix" => "100 dhs"],
                  "Produit 2" => ["nom" => "Prd 2" , "prix" => "150 dhs"],
                  "Produit 3" => ["nom" => "Prd 3" , "prix" => "180 dhs"],
                ];

    foreach ($Produits as $key => $val){
        echo "$key : <br>";
        foreach($Produits[$key] as $k => $v){
            echo "$k : $v <br>";
        }
        echo "<br>";
    }

?>