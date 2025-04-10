<?php

namespace App\Controllers;



class AccueilController {
    private $accueilModel;
    public function __construct() {
        // Inclure le modèle d'article
        //include_once '../App/Models/ArticleModel.php';
        // Créer une instance du modèle d'article
    }
    public function index() {

        // Charger la vue de la page d'accueil
        

        include_once __DIR__ . '/../Views/index.php';
    }
}