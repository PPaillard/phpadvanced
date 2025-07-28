<?php
require_once __DIR__ . '/vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;


$loader = new FilesystemLoader("./templates");
$twig = new Environment($loader, [
    "cache" => false
]);

$member = new stdClass();
$member->firstname = "Toto";
$member->membership = 2024;
$member->active = false;

echo $twig->render("showMember.html.twig", [
    "member" => $member
]);
