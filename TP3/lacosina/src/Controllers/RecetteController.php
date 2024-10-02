<?php

class RecetteController {
    
    private $pdo;

    function __construct($pdo) {
        $this->pdo = $pdo;
    }

    function ajouter() {
        require_once __DIR__ . '/../Views/ajout.php';
    }

    function enregistrer() {    
        $titre = $_POST['titre'];
        $description = $_POST['description'];
        $auteur = $_POST['auteur'];
    
        $query = $this->pdo->prepare('INSERT INTO RECETTES (titre, description, auteur, date_creation) VALUES (:titre, :description, :auteur, NOW())');
      
        $query->bindValue(':titre', $titre, PDO::PARAM_STR);
        $query->bindValue(':description', $description, PDO::PARAM_STR);
        $query->bindValue(':auteur', $auteur, PDO::PARAM_STR);
        $ok = $query->execute();
    
        if ($ok) {
            require_once __DIR__ . '/../Views/enregistrementRecette.php';
        } else {
            echo "Erreur lors de l'enregistrement";
        }
    }

    function lister() {
        $query = $this->pdo->prepare("SELECT * FROM RECETTES");
        $query->execute();
        $recettes = $query->fetchAll(PDO::FETCH_ASSOC);
        $recipes = $recettes; // Assign $recettes to $recipes
        require_once __DIR__ . '/../Views/liste.php';
    }
}