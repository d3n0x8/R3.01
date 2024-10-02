<?php

require_once __DIR__ . '/src/Controllers/RecetteController.php';
require_once __DIR__ . '/src/Controllers/ContactController.php';
require_once __DIR__ . '/src/Models/connectDb.php';

//connexion à la base de données
require_once __DIR__ . '/src/Models/connectDb.php';

require_once __DIR__ . '/src/Views/header.php';

$route = $_GET['c'] ?? 'home';

switch ($route) {
  case 'home':
    require_once __DIR__ . '/src/Controllers/homeController.php';
    break;
  case 'ajout':
    $controller = new RecetteController($pdo);
    $controller->ajouter();
    break;
  case 'recette':
    $controller = new RecetteController($pdo);
    $controller->lister();
    break;
  case 'contact':
    $controller = new ContactController($pdo);
    $controller->ajouter();
    break;
  case 'enregistrer_recette':
    $controller = new RecetteController($pdo);
    $controller->enregistrer();
    break;
  case 'enregistrer_contact':
    $controller = new ContactController($pdo);
    $controller->enregistrer();
    break;
  default: ?>
    <h1>Erreur 404</h1>
    <p>La page demandée n'existe pas.</p>
  <?php break;
}

require_once __DIR__ . '/src/Views/footer.php';