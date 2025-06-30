<?php
session_start();
$pseudo = isset($_SESSION['pseudo']) ? $_SESSION['pseudo'] : "invité";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>

<body>
    <p>Bienvenue <?= $pseudo ?></p>
    <?php if (isset($_SESSION['pseudo'])): ?>
        <a href="disconnect.php">Deconnexion</a>
    <?php endif; ?>
</body>

</html>