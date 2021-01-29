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

//Fonction blogPostById qui prend la connexion pdo, l'id de l'article et retourne l'article avec l'auteur
function blogPostById(PDO $connection, $idArticle){
    $sh = $connection->query("SELECT title, content, pseudo
                        FROM Posts
                        INNER JOIN Authors ON Posts.Authors_id=Authors.id
                        WHERE Posts.id = $idArticle");
    $onePost = $sh->fetch(PDO::FETCH_ASSOC);
    return $onePost;
}

//Fonction commentsByBlogPost qui prend la connexion pdo, l'id de l'article et retourne l'article avec l'auteur
function commentsByBlogPost(PDO $connection, $idArticle) {
    $sh = $connection->query("SELECT Comments.content, Authors.pseudo
                        FROM Posts
                        INNER JOIN Authors ON Posts.Authors_id=Authors.id
                        INNER JOIN Comments ON Posts.id=Comments.Posts_id
                        WHERE Posts.id = $idArticle");
    $commentList = $sh->fetchAll(PDO::FETCH_ASSOC);
    return $commentList;
}

//Fonction blogPostCreate qui prend les champs de la table Posts pour créer un article et retourne [?]
function blogPostCreate($connection, $postTitle, $postContent, $publicationStartDate, $publicationEndDate, $postImportance, $pseudo){
    $sh = $connection->query("INSERT INTO Posts.title, Posts.content, Posts.publicationStartDate, Posts.publicationEndDate, Posts.importance, Authors.pseudo
                        FROM Posts
                        INNER JOIN Authors ON Posts.Authors_id=Authors.id
                        VALUES ");
    $commentList = $sh->fetchAll(PDO::FETCH_ASSOC);
    return $commentList;
}

//Fonction blogAuthor qui prend la connexion pdo et retourne l'id et le pseudo de l'auteur
function blogAuthor($connection) {
    $sh = $connection->query("SELECT Authors.id, Authors.pseudo
                        FROM Authors");
    $authorList = $sh->fetchAll(PDO::FETCH_ASSOC);
    return $authorList;
}

