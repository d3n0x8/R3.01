<?php
try {
    // Connexion à la base de données
    $host = "localhost";
    $dbname = "monsite";
    $user = "root";
    $password = "";
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    //echo "la connexion est faite !";
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
?>