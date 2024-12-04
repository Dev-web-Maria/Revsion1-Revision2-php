<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP1-Ex8</title>
  </head>
  <body>
    <form  action="Exercice 8.php" method="post">  
        <select name="couleurs[]">
          <option value="rouge">Rouge</option>
          <option value="vert">Vert</option>
          <option value="bleu">bleu</option>
        </select><br><br>
        <input type="submit" name="submit" value="envoyer">
    </form>
  </body>

</html>

<?php

  $color = $_POST["couleurs"];
  echo "<br>";
  foreach ($color as $couleurs) {
  echo "Votre couleur préférée est : $couleurs ";
  }

?>
