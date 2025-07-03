<?php
// Je récup ma configuration
require "config.php";
// Je me connecte
$pdo = new PDO(DSN, USER, PASS);
// Je créé ma requête
$query = "SELECT * FROM person WHERE firstname LIKE '%A%'";
// J'execute ma requete
$statement = $pdo->query($query);
// Je recup tt mes résultats en tableau associatif
$students = $statement->fetchAll();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Tableau associatif</h2>
    <?php // J'affiche chacun de mes résultats
    foreach ($students as $student): ?>
        <div><?= $student['firstname'] ?></div>
    <?php endforeach; ?>


</body>

</html>