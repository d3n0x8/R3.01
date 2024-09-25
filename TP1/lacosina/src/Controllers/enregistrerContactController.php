<?php

    //récupération des données de formulaire
    $nom = $_POST['nom'];
    $auteur = $_POST['auteur'];
    $description = $_POST['description'];
    
    //préparation de la requête d'insert dans la BDD

    /** @var PDO $pdo **/
    $requeteC = $pdo->prepare('INSERT INTO FORMULAIRE (nom, auteur, description, date_creation) VALUES (:nom, :auteur, :description, NOW())');
    $requeteC->bindParam(':nom', $nom);
    $requeteC->bindParam(':auteur', $auteur);
    $requeteC->bindParam(':description', $description);
    


    //exécution de la requête
    $ajoutOk = $requeteC->execute();

    if($ajoutOk){
        //redirection vers la vue d'enregistrement effectué
        require_once("./src/Views/enregistrementContact.php");
    } else {
        echo 'Erreur lors de l\'enregistrement du formulaire.';
    }
    