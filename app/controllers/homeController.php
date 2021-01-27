<?php
echo 'Hello World';

require 'app/persistences/blogPostData.php';

//Afficher les 10 derniers articles du blog
$tenLastPosts = lastBlogPosts($dbh);
var_dump($tenLastPosts);