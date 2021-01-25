<?php

//Déclaration et affectation de la variable pageFiltree avec le filter_input
$pageFiltree = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_SPECIAL_CHARS);


if (isset($pageFiltree)){
//Le getpage existe
if ($pageFiltree== "cv") {
//La page demandée est la page cv.php
require 'action/cv.php';
} else if ($pageFiltree == "hobby" ) {
//La page demandée est la page hobby.php
require 'action/hobby.php';
} else if ($pageFiltree == "contact" ) {
//La page demandée est la page contact.php
require 'action/contact.php';
} else {
//Le $_GET['page'] n'est pas une page du site
require 'action/erreur404.php';
}

} else {
//La page demandée n'exite pas, on renvoie la page d'accueil
require 'action/cv.php';
}

?>
