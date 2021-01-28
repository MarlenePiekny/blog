<?php
//Fonction lastBlogPosts qui prend la connexion pdo et retourne un tableau des derniers posts
function lastBlogPosts(PDO $connection) : array {
    $rawResult = $connection->query('SELECT title, content, pseudo
                        FROM Posts
                        INNER JOIN Authors
                        ON Posts.Authors_id=Authors.id
                        ORDER BY Posts.id DESC
                        LIMIT 10');
    $postTab = $rawResult->fetchAll(PDO::FETCH_ASSOC);
    return $postTab;
}

