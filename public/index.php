<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once '../App/Config/config.php';   // ✅ la configuration de l'application
require_once __DIR__ . '/../App/Core/Database.php';    // ✅ la connexion PDO

use App\Controllers\AccueilController;
use App\Controllers\ArticleController;
use App\Controllers\ContactController;
use App\Controllers\AproposController;

//\App\Core\Database::getConnection(); // Connexion à la base de données

$accueilController = new AccueilController();
$articleController = new ArticleController();
$contactController = new ContactController();
$aproposController = new AproposController(); 
// Récupérer l'URI de la requête
$uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$uriSegments = explode('/', trim($uri, '/'));
switch ($uriSegments[0]) {
    case '':
    case '/':
    case 'index.php':
        // afficher la page d'accueil ou une page par défaut
        $accueilController->index();
        break;


    case 'contact':    
        // afficher la page de contact
         $contactController->contact();
        break; 
    
     case 'about':
            // afficher la page à propos    
         $aproposController->about();
         break;     
        


    case 'article':
        // afficher la liste des articles
        $articleController->article();
        break;



        default:
        echo "404 - Page non trouvée";
        break;

    }

    