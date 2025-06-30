<?php
// Quand l'utilisateur paramètre le theme.
if (isset($_GET['theme']) && in_array($_GET['theme'], ["light", "dark"])) {
    $theme = $_GET['theme'];
    setcookie("theme", $theme, time() + (3600 * 24 * 30));
} elseif (isset($_COOKIE['theme']) && in_array($_COOKIE['theme'], ["light", "dark"])) {
    // Quand un cookie est présent
    $theme = $_COOKIE['theme'];
} else {
    // quand aucun theme n'est paramètré
    $theme = "light";
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thème dark / light</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="<?= $theme === "dark" ? "dark" : "" ?>">
    <a href=" ?theme=light">Thème clair</a>
    <a href="?theme=dark">Thème sombre</a>
    <?php
    if ($theme === "dark"): ?>
        <p>Le thème dark est activé</p>
    <?php endif; ?>
</body>

</html>