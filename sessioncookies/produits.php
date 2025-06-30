<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produits</title>
</head>

<body>
    <form action="panier.php" method="post">
        <label for="produit">Produit</label>
        <select name="produit" id="produit">
            <option value="tshirt">T-Shirt</option>
            <option value="shoes">Chaussures</option>
            <option value="jean">Jean</option>
        </select>
        <br><br>
        <input type="submit" value="Ajouter">
    </form>
</body>

</html>