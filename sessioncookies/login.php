<?php

$errors = [];

if (!empty($_POST)) {
    $pseudo = isset($_POST['pseudo']) ? trim($_POST['pseudo']) : "";

    if (empty($pseudo)) {
        $errors[] = "Vous devez remplir un pseudo !";
    }

    if (empty($errors)) {
        session_start();
        $_SESSION['pseudo'] = $pseudo;

        header("Location: welcome.php");
        exit();
    }
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
        <label for="pseudo">Pseudo</label>
        <input type="text" name="pseudo" id="pseudo">
        <br><br>
        <input type="submit" value="Connecter">
    </form>
</body>

</html>