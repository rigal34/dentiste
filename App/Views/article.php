<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Articles</title>
</head>
<body>
    <h1>Liste des Articles</h1>

    <?php if (empty($articles)): ?>
        <p>Aucun article pour le moment.</p>
    <?php else: ?>
        <ul>
            <?php foreach ($articles as $article): ?>
                <li>
                    <strong><?= htmlspecialchars($article['titre']) ?></strong><br>
                    <em><?= htmlspecialchars($article['date_creation']) ?></em><br>
                    <p><?= nl2br(htmlspecialchars($article['contenu'])) ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>
</html>
