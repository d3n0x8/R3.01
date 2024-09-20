<?php

    //connexion à la BDD
    require_once __DIR__.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'Models'.DIRECTORY_SEPARATOR.'connectDb.php';

    //ajout de l'en tete
    require_once __DIR__.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'Views'.DIRECTORY_SEPARATOR.'header.php';

    $route = $_GET['c'] ?? 'home';
    
    //inclusion du controller correspondant à la route
    switch($route){
        case 'home':
            require_once __DIR__.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'Controllers'.DIRECTORY_SEPARATOR.'homeController.php';
            break;
        case 'contact':
            require_once __DIR__.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'Controllers'.DIRECTORY_SEPARATOR.'contactController.php';
            break;
    }

    //ajout du pied de page 
    require_once(__DIR__.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'Views'.DIRECTORY_SEPARATOR.'footer.php');
