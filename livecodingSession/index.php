<?php
// Si la session n'est pas démarré, je la lance.
if (!isset($_SESSION)) session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Affichage de mon username -->
    <?= $_SESSION['username'] ?>
</body>

</html>