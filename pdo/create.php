<?php
$errors = [];
// DS le cadre ou je reçois les données du form
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $title = isset($_POST["title"]) ? trim($_POST["title"]) : "";
    $content = isset($_POST["content"]) ? trim($_POST["content"]) : "";
    $author = isset($_POST["author"]) ? trim($_POST["author"]) : "";

    // TODO : gestion des erreurs
    if (empty($title)) {
        $errors[] = "Le titre doit être remplis !";
    } elseif (strlen($title) > 255) {
        $errors[] = "Le titre doit contenir 255 caractères maximum !";
    }
    if (empty($content)) {
        $errors[] = "Le contenu doit être remplis !";
    }
    if (empty($author)) {
        $errors[] = "L'auteur doit être remplis !";
    } elseif (strlen($author) > 100) {
        $errors[] = "Le champs auteur doit contenir 100 caractères maximum !";
    }

    if (empty($errors)) {
        // TODO : Securiser les données
        // TODO : Gestion des erreurs de connexion à la BDD

        // Inserer les données
        // On appelle la config
        require "config.php";
        // on se connecte
        $pdo = new PDO(DSN, USER, PASS);
        // on construit notre requête
        $query = "INSERT INTO story (title, content, author) VALUES ('$title','$content','$author')";
        // On execute la requête
        $rowCount = $pdo->exec($query);

        // je redirige vers la liste des histoires
        header("Location: index.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une histoire</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

</head>

<body>
    <h1>Ajouter une histoire</h1>

    <?php
    /* Affichage des erreurs */
    if (!empty($errors)):
        foreach ($errors as $error): ?>
            <div class="alert alert-danger"><?= $error ?></div>
    <?php
        endforeach;
    endif; ?>
    <form action="create.php" method="post">
        <label for="title">Titre</label>
        <?php /* TODO : s'il y avait une erreur, on prérempli le champs titre avec l'ancien titre */ ?>
        <input type="text" name="title" id="title" required maxlength="255">
        <br><br>
        <label for="content">Contenu</label>
        <textarea name="content" id="content" required></textarea>
        <br><br>
        <label for="author">Auteur</label>
        <input type="text" name="author" id="author" required maxlength="100">
        <br><br>
        <input type="submit" value="Ajouter">
    </form>
</body>

</html>