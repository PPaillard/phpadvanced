<?php
///////// RECUPERATION DES DONNESS ///////////
// Si aucun formulaire n'est présent, on redirige
if (empty($_POST)) {
    // on redirige la personne vers l'accueil et on arrête le script.
    header('Location: form.php');
    exit;
}

// on veut verifier si username existe et s'il existe le mettre dans la variable $username
$username = isset($_POST["username"]) ? trim($_POST["username"]) : "";
$password = isset($_POST["password"]) ? trim($_POST["password"]) : "";

/*********  VALIDATION DES DONNEES ***********/
$errors = [];
if (empty($username)) {
    $errors[] = "Le champs nom d'utilisateur ne doit pas être vide.";
} elseif (strlen($username) > 20) {
    $errors[] = "Le champs nom d'utilisateur doit comporter 20 caractères maximum";
}

if (empty($password)) {
    $errors[] = "Le champs mot de passe ne doit pas être vide.";
} elseif (strlen($password) < 12) {
    $errors[] = "Le mot de passe doit contenir au moins 12 caractères";
}
?>
<!-- Réponse visible par le client / navigateur -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistrement</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>

    <?php if (empty($errors)) : ?>
        <!-- Si la liste d'erreurs est vide -->
        <h3>L'enregistrement s'est bien passé</h3>
        <?php else :
        foreach ($errors as $error) : ?>
            <div class="alert alert-danger">
                <?php echo $error; ?>
            </div>
    <?php
        endforeach;
    endif;
    ?>
</body>

</html>