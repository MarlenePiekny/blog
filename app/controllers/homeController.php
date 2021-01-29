<?php

//Appel de la page dans laquelle se trouve la fonction lastBlogPost
require 'app/persistences/blogPostData.php';

    //Appel de la fonction lastBlogPost pour affecter le résultat à une variable à portée globale
    $tenLastPosts = lastBlogPosts($dbh);

require 'ressources/views/home.tpl.php';

