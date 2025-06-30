<?php
//
session_start();
if (!empty($_POST)) {

    // Si la session vient d'être créé, on doit créer un tableau qui contient les produits
    if (!isset($_SESSION['panier'])) {
        $_SESSION['panier'] = [];
    }
    $_SESSION['panier'][] = $_POST['produit'];
}
// Si le tableau panier existe dans la session, on le prend
// sinon on paramètre un tableau vide.
$panier = isset($_SESSION['panier']) ? $_SESSION['panier'] : [];

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
</head>

<body>
    <?php
    if (empty($panier)): ?>
        <p>Votre panier est vide</p>
    <?php else: ?>
        <ul>
            <?php foreach ($panier as $produit): ?>
                <li>
                    <?= $produit ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>

</html>