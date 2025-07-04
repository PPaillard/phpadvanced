<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {

    $name = isset($_POST['name']) ? trim($_POST['name']) : "";

    // Validation des champs

    require "config.php";
    $pdo = new PDO(DSN, USER, PASS);

    $query = "INSERT INTO user (name) VALUES (:name)";
    $statement = $pdo->prepare($query);

    $statement->bindValue(":name", $name, PDO::PARAM_STR);
    $statement->execute();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="name">Nom</label>
        <input type="text" name="name" id="name">
        <br><br>
        <input type="submit" value="Ajouter le nom">
    </form>
</body>

</html>