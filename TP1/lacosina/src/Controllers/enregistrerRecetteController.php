<?php

    // Récupération des données de formulaire
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $auteur = $_POST['auteur'];

    // Préparation de la requête d'insert dans la BDD
    /** @var PDO $pdo **/
    $requete = $pdo->prepare('INSERT INTO RECETTES (titre, description, auteur, date_creation) VALUES (:titre, :description, :auteur, NOW())');

    // Liaison des paramètres
    $requete->bindParam(':titre', $titre);
    $requete->bindParam(':description', $description);
    $requete->bindParam(':auteur', $auteur);

    // Exécution de la requête
    $ajoutOk = $requete->execute();

    if ($ajoutOk) {
        // Redirection vers la vue d'enregistrement effectué
        require_once("./src/Views/enregistrementRecette.php");
    } else {
        echo 'Erreur lors de l\'enregistrement de la recette.';
    }
?>
