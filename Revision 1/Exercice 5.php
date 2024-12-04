<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP1-Ex5</title>
</head>
<body>
    
</body>
</html>

<?php
    $Pays = array ("Maroc" => 40, "USA" => 220, "France" => 100, "Algerie" => 90);


    arsort($Pays);

    foreach ($Pays as $key => $val){
        echo "$key : $val <br>";
    }
?>