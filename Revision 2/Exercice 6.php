<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TD2-Ex6</title>
</head>
<body>
    
</body>
</html>

<?php

    $villes = [
        "Casablanca" => 28,
        "Marrakech" => 35,
        "Rabat" => 25,
        "Fès" => 32,
        "Agadir" => 30
    ];


    function villePlusChaud($villes) {
        $maxTemp = max($villes); 
        $villeChaud = array_search($maxTemp, $villes); 
        return ["ville" => $villeChaud, "temperature" => $maxTemp];
    }


    $resultat = villePlusChaud($villes);


    echo "La ville ayant la température la plus élevée est : " . $resultat['ville'] . " avec " . $resultat['temperature'] . "°C.";
?>
