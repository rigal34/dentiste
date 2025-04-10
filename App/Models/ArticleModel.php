<?php

namespace App\Models;

use PDO;
use App\Core\Database;

class ArticleModel
{
    private PDO $pdo;

    public function __construct()
    {
        // Appel direct de la méthode qui crée la connexion
        Database::getConnection();

        // On récupère la variable $pdo déclarée dans Database (via self::$pdo)
        // Donc ici, on récupère la valeur depuis la classe Database
        $reflection = new \ReflectionClass(Database::class);
        $property = $reflection->getProperty('pdo');
        $property->setAccessible(true);
        $this->pdo = $property->getValue();
    }

    public function getAllArticles(): array
    {
        $stmt = $this->pdo->query("SELECT * FROM articles");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createTable(): void
    {
        $sql = "
            CREATE TABLE IF NOT EXISTS articles (
                id INT AUTO_INCREMENT PRIMARY KEY,
                titre VARCHAR(255) NOT NULL,
                contenu TEXT NOT NULL,
                date_creation DATETIME DEFAULT CURRENT_TIMESTAMP
            )
        ";
        $this->pdo->exec($sql);
    }
}
