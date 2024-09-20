<?php

try{
    //connexion à la base de données
    //modifier les paramètres de connexion
    //(host, dbname, user, password)
    $host = "localhost";
    $dbname = "lacosina";
    $user = "root";
    $password = "";

    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
}
catch(Exception $e)
{
        die("Erreur: ".$e->getMessage());
}
