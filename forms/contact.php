<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coté client</title>
</head>

<body>
    <h1>Formulaire de contact</h1>
    <form action="traitement.php" method="post">
        <label for="lastname">Prénom*</label>
        <input type="text" name="lastname" id="lastname" required maxlength="20" size="">
        <br><br>
        <label for="email">Mail*</label>
        <input type="email" name="email" id="email" required>
        <br><br>
        <label for="message">Message*</label>
        <textarea name="message" id="message" maxlength="500">
        </textarea>
        <br><br>
        <input type="checkbox" name="consent" id="consent" required>
        <label for="consent">Acceptez vous les CGU ?</label>
        <br><br>
        <input type="submit" value="Soumettre">
    </form>

</body>

</html>