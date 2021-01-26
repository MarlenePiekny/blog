<?php

//Afficher les erreurs
error_reporting(E_ALL);
ini_set("display_errors", 1);


//Initialiser la demande d'accès à la bdd une fois
require_once 'config/database.php';

//FRONT CONTROLLER//
//Déclaration et affectation du tableau associatif de pages map
$map = [
    '404' => 'ressources/views/errors/404.php',
    'home' => 'app/controllers/homeController.php',
];

//Traitement du input_get action de l'URL
if (filter_has_var(INPUT_GET, 'action')){
    //L'action existe dans l'URL, redirection vers la page demandée
    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
    if(!isset($map[$action])){
        //L'action n'est pas renseignée dans le tableau associatif map
        $action = '404';
    }
} else {
//L'action n'existe pas, redirection vers la page d'acceuil
    $action = 'home';
}

//On affiche la page
$file = $map [$action];
require $file;
