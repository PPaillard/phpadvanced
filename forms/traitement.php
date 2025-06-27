<?php
/* Créer traitement.php pour :
- Récupérer les données via $_POST
- Afficher un message :
  Merci Prénom pour votre message : "..."
- Afficher une erreur si un champ est vide
Ex : "Veuillez remplir tous les champs." 

Améliorer traitement.php :
- Nettoyage avec trim()
- Validation :
  * prénom < 20 caractères
  * email valide (filter_var)
  * message < 500 caractères
  * consentement coché
- Protection XSS : htmlentities()
- Affichage des erreurs ou message de confirmation
*/

$errors = [];

if (!empty($_POST)) {
    // Dans $lastname, si data['lastname'] est paramètré, présent, je trim sa valeur et je la stock.
    // s'il n'est pas présent, je met une chaine vide.
    $lastname = isset($_POST['lastname']) ? trim($_POST['lastname']) : "";
    $email = isset($_POST['email']) ? trim($_POST['email']) : "";
    $message = isset($_POST['message']) ? trim($_POST['message']) : "";
    $consent = isset($_POST['consent']);

    // validation du prénom
    if (empty($lastname)) {
        $errors[] = "Le champs prénom est obligatoire";
    } elseif (strlen($lastname) > 20) {
        $errors[] = "Le champs prénom doit faire moins de 20 caractères";
    }

    // validation du mail
    if (empty($email)) {
        $errors[] = "Le champs email est obligatoire";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Le format du mail n'est pas valide";
    }

    // validation du message
    if (empty($message)) {
        $errors[] = "Le champs message est obligatoire !!!";
    } elseif (strlen($lastname) > 500) {
        $errors[] = "Le champs message doit faire moins de 500 caractères !!!";
    }

    // validation du conssentement
    if (!$consent) {
        $errors[] = "Vous devez accepter les CGU !!!";
    }
} else {
    // Si le tableau de la requête post est vide
    $errors[] = "Veuillez remplir le formulaire !!!";
}

// On prend le tableau $_POST, et on demande à ce que trim soit déclenché
// sur chacun de ses éléments. Le résultat est renvoyé dans un nouveau tableau ($data)
//$data = array_map('trim', $_POST);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact envoyé</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <?php
    if (empty($errors)) {
        echo "<p>Merci $lastname pour votre message : $message</p>";
    } else {
    ?>
        <h3 class="danger">Erreurs dans le formulaire</h3>
        <ul>
            <?php
            foreach ($errors as $error) {
                echo "<li>$error</li>";
            }
            ?>
        </ul>
    <?php
    }
    ?>

    <?php if (empty($errors)) : ?>
        <p>Merci <?= $lastname ?> pour votre message : <?= $message ?></p>
    <?php else: ?>
        <h3 class="alert alert-danger">Erreurs dans le formulaire</h3>
        <ul>
            <?php foreach ($errors as $error) : ?>
                <li class="alert alert-danger"><?= $error ?></li>
            <?php endforeach ?>
        </ul>
    <?php endif ?>
</body>

</html>