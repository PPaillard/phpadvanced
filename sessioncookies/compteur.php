<?php
/* Crée une page compteur.php.
À chaque visite de la page :
- Lis le cookie 'visites' (ou initialise-le à 1)
- Incrémente sa valeur et réécris le cookie
- Affiche : “Ceci est votre Xᵉ visite.”
*/
// si le cookie est déjà présent
if (isset($_COOKIE["visites"])) {
    var_dump($_COOKIE["visites"]);
    // Je cast (convertit) la valeur du cookie en entier.
    $visites = (int) $_COOKIE["visites"];
    $visites++;
} else {
    $visites = 1;
}
// on paramètre le cookie pour 1 mois.
setcookie("visites", $visites, time() + (3600 * 24 * 30));
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de visite</title>
</head>

<body>
    <h3>Ceci est la visite numéro <?= $visites ?></h3>
</body>

</html>