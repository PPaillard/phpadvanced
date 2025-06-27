<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire live coding</title>
</head>

<body>
    <h1>Formulaire live Coding</h1>
    <form action="register.php" method="post">
        <label for="username">Nom d'utilisateur*</label>
        <input type="text" name="username" id="username" maxlength="20">
        <br><br>
        <label for="password">Mot de passe (12 caractères minimum)</label>
        <input type="password" name="password" id="password" minlength="12">
        <br><br>
        <input type="submit" value="Créer l'utilisateur">
    </form>
</body>

</html>