<?php
require_once __DIR__ . '/vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;


$loader = new FilesystemLoader("./templates");
$twig = new Environment($loader, [
    "cache" => false
]);
/* Exercice 1
$member = new stdClass();
$member->firstname = "Toto";
$member->membership = 2024;
$member->active = false;

echo $twig->render("showMember.html.twig", [
    "member" => $member
]);*/
/* Exercice 2
$temperature = 23;

echo $twig->render("readingPlace.html.twig", [
    "temperature" => $temperature
]);*/
/* Exercice 3
$books = [
    ['title' => '1984', 'author' => 'George Orwell'],
    ['title' => 'Le Meilleur des mondes', 'author' => 'Aldous Huxley'],
    ['title' => 'Fahrenheit 451', 'author' => 'Ray Bradbury']
];

echo $twig->render("bookList.html.twig", [
    "books" => $books
]);
*/
/* Crée une structure de page en trois parties :
Un en-tête (header.twig)
Un pied de page (footer.twig)
Un corps principal (accueil.twig) qui inclut les deux autres! 
 */

echo $twig->render("home.html.twig");
