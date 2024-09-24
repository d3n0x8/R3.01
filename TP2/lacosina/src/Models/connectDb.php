<?php

try{
    //connexion à la base de données
    //modifier les paramètres de connexion
    //(host, dbname, user, password)
    $host = "db";
    $dbname = "lacosina";
    $user = "myuser";
    $password = "monpassword";

    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
}
catch(Exception $e)
{
        echo "Connection failed: ".$e->getMessage();
}
