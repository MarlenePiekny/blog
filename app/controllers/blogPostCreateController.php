<?php

//Appel de la persistance : fonction blogAuthor

require 'app/persistences/blogPostData.php';
$listAuthor = blogAuthor($dbh);

require 'ressources/views/blogPostCreate.tpl.php';

//if filter_has_var(INPUT_POST, 'submit'){
    //blogPostCreate($dbh, $postTitle, $postContent, $publicationStartDate, $publicationEndDate, $postImportance, $pseudo);
//}
?>