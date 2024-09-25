<?php
// Connexion à la base de données
$qr = $pdo->query('SELECT * FROM test');
$qr->execute();
$recipes = $qr->fetchAll(PDO::FETCH_ASSOC);
require_once('./views/home.php');
