<?php
$datas = [
    "firstname" => "Pierre"
];
var_dump(isset($datas['firstname']));

if (isset($datas['firstname']) && isset($datas['email']) && isset($datas['phone'])) {
    // je peux aller l'enregistrer en base de données.
}
// Si dans le tableau $datas, j'ai bien accès à la clé firstname
// je prend la valeur, sinon je met une chaine vide.
$firstname = isset($datas['firstname']) ? $datas['firstname'] : "";

if (isset($datas['firstname'])) {
    $firstname = $datas['firstname'];
} else {
    $firstname = "";
}

$email = isset($datas['email']) ? $datas['email'] : "";

if (isset($datas['email'])) {
    $email = $datas['email'];
} else {
    $email = "";
}
var_dump($email);
