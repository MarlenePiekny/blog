<?php

//Se connecter à la BDD blog via un pdo
$dsn = 'mysql:host=localhost;dbname=Blog;charset=UTF8';
$username = 'marlene';
$password = 'mysql';

try {
$dbh = new PDO($dsn, $username, $password);
} catch(PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

