<?php
require_once __DIR__ . "/vendor/autoload.php";

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader, [
    'cache' => false
]);

echo $twig->render(
    "index.html.twig",
    [
        "firstname" => "Jean",
        "lastname" => "Bonbeur"
    ]
);
