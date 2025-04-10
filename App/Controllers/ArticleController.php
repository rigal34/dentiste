<?php

namespace App\Controllers;
use App\Models\ArticleModel;


class ArticleController {
    private $articleModel;
    public function __construct() {
        $this->articleModel = new ArticleModel();
    }
    public function article() {

        $this->articleModel->createTable();

        // Récupération des articles
        $articles = $this->articleModel->getAllArticles();
        

        include_once '../App/Views/article.php';
    }
}