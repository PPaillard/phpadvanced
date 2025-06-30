<?php
// quand le bouton connecter à été cliqué.
if (!empty($_POST)) {
    $username = isset($_POST["username"]) ? trim($_POST["username"]) : "";
    $password = isset($_POST["password"]) ? trim($_POST["password"]) : "";

    $errors = [];
    // securiser mes données.

    // Mes données sont bonnes,
    // je veux mettre mon username en session pour y avoir accès partout.
    session_start();
    $_SESSION['username'] = $username;
    var_dump($_SESSION);

    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>

<body>
    <h1>Connexion</h1>
    <form action="login.php" method="post">
        <label for="username">Utilisateur</label>
        <input type="text" name="username" id="username">
        <br><br>
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password">
        <br><br>
        <input type="submit" value="Connecter">
    </form>
</body>

</html>