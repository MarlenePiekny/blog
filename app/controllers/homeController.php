<?php

require 'app/persistences/blogPostData.php';
$tenLastPosts = lastBlogPosts($dbh);

require 'ressources/views/home.tpl.php';

