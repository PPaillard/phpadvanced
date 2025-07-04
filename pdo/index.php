<?php
// inclure la configuration
require "config.php";
// connexion à la BDD
$pdo = new PDO(DSN, USER, PASS);
// requête 
$query = "SELECT * FROM story";
// Execution de la requete
$statement = $pdo->query($query);
// Récuperation des enregistrements formater comme on le souhaite.
// PDO::FETCH_ASSOC OU PDO::FETCH_OBJ (privilégiez)
$stories = $statement->fetchAll(PDO::FETCH_OBJ);

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des histoires</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <h1>Liste des histoires</h1>
    <section class="container">
        <?php
        foreach ($stories as $story): ?>
            <article class="card m-1">
                <h2><?= $story->title ?></h2>
                <p><?= nl2br($story->content) ?></p>
                <em><?= $story->author ?></em>
            </article>
        <?php
        endforeach;
        ?>
    </section>
</body>

</html>