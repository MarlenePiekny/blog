<?php


//Appel de la page dans laquelle se trouve la fonction blogPostById et commentsByBlogPost
require 'app/persistences/blogPostData.php';

//Fonction blogPostById qui prend la connexion pdo, l'id article et retourne un tableau des derniers posts
$postById = blogPostById($dbh, filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING));

//CONTROLLER
if ($postById == false) {
    //On ne demande pas la page d'un article particulier
    echo "L'article demandé n'existe pas";
}else{
    //On demande un post existant
    require 'ressources/views/blogPost.tpl.php';
}


//Fonction commentsByBlogPost pour affecter le résultat à une variable à portée globale
$comments = commentsByBlogPost(PDO $connection, $idArticle)




