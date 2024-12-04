<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP2-Ex4</title>
</head>
<body>
    <form action="Exercice 4.php" method="post">  
        <label for="prd1">Produit 1 (500 DH) :</label>
        <input type="number" name="quantites[Prd1]" min="0" value="0"><br><br>

        <label for="prd2">Produit 2 (700 DH) :</label>
        <input type="number" name="quantites[Prd2]" min="0" value="0"><br><br>

        <label for="prd3">Produit 3 (170 DH) :</label>
        <input type="number" name="quantites[Prd3]" min="0" value="0"><br><br>

        <input type="submit" name="submit" value="Ajouter au panier">
    </form>

</body>
</html>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Définition des produits disponibles
        $Produits = [
            "Prd1" => ["nom" => "Produit 1", "prix" => 500],
            "Prd2" => ["nom" => "Produit 2", "prix" => 700],
            "Prd3" => ["nom" => "Produit 3", "prix" => 170]
        ];

        // Initialisation du panier vide
        $Panier = [];

        // Récupération des quantités saisies par l'utilisateur
        $quantites = $_POST['quantites'];
        $totalPanier = 0;

        // Traitement des quantités pour remplir le panier
        foreach ($quantites as $codeProduit => $qte) {
            if ($qte > 0) {  // Vérifie si la quantité est supérieure à 0
                $nom = $Produits[$codeProduit]['nom'];
                $prixUnitaire = $Produits[$codeProduit]['prix'];
                $prixTotalProduit = $qte * $prixUnitaire;

                // Ajout au panier
                $Panier[$codeProduit] = [
                    "nom" => $nom,
                    "quantite" => $qte,
                    "prix" => $prixUnitaire,
                    "total" => $prixTotalProduit
                ];

                // Calcul du total général du panier
                $totalPanier += $prixTotalProduit;
            }
        }

        // Affichage des produits sélectionnés
        if (!empty($Panier)) {
            echo "<h3>Produits commandés :</h3>";
            echo "<ul>";
            foreach ($Panier as $item) {
                echo "<li>" . $item['nom'] . " - Quantité : " . $item['quantite'] . " - Prix unitaire : " . $item['prix'] . " DH - Total : " . $item['total'] . " DH</li>";
            }
            echo "</ul>";
            echo "<h3>Total du panier : " . $totalPanier . " DH</h3>";
        } else {
            echo "<p>Votre panier est vide.</p>";
        }
    }
?>
