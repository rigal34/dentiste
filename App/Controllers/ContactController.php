<?php

namespace App\Controllers;



class contactController {
    private $contactModel;
    public function __construct() {
        // Inclure le modèle d'article
        //include_once '../App/Models/ArticleModel.php';
        // Créer une instance du modèle d'article
    }
    public function contact() {

        // Charger la vue de la page d'accueil
        

        include_once '../App/Views/contact.php';
    }
}