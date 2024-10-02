<?php

class ContactController {
    
    private $pdo;

    function __construct($pdo) {
        $this->pdo = $pdo;
    }

    function ajouter() {
        require_once __DIR__ . '/../Views/contact.php';
    }

    function enregistrer() {    
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $message = $_POST['message'];
    
        $query = $this->pdo->prepare('INSERT INTO contacts (nom, email, message, date_envoi) VALUES (:nom, :email, :message, NOW())');
      
        $query->bindValue(':nom', $nom, PDO::PARAM_STR);
        $query->bindValue(':email', $email, PDO::PARAM_STR);
        $query->bindValue(':message', $message, PDO::PARAM_STR);
        $ok = $query->execute();
    
        if ($ok) {
          require_once 'Views/enregistrerContact.php';
        }
        else echo "Erreur lors de l'enregistrement du contact";
      }
}