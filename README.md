# 🦷 Dentiste

Ce projet est un site web pour un cabinet dentaire, développé en **PHP** avec une structure **MVC** (Modèle-Vue-Contrôleur).

---

## 📄 Description

Le site permet d’afficher :

- Une page d’accueil
- Une page de contact
- Une page "À propos"
- Une page d’articles reliée à une base de données MySQL

🗃️ La table `articles` contient les champs :
- `id`
- `titre`
- `contenu`
- `date_creation`

🎯 Le but est que ce site soit plus tard **mis en ligne sur un vrai domaine**, accessible au public.

---

## 📁 Structure du projet

```yaml
dentiste/
├── App/
│   ├── Controllers/     # Contrôleurs : Gèrent la logique des pages
│   ├── Models/          # Modèles : Interagissent avec la base de données
│   ├── Views/           # Vues : Gèrent l'affichage (HTML)
│   └── Config/          # Fichiers de configuration (BDD, etc.)
├── public/
│   ├── assets/          # Fichiers statiques (CSS, JS, images...)
│   │   ├── css/         # Feuilles de style CSS
│   │   ├── js/          # Scripts JavaScript
│   │   └── images/      # Images
│   └── index.php        # Point d'entrée unique de l'application
├── .gitignore           # Fichiers/dossiers ignorés par Git
├── composer.json        # Configuration Composer (dépendances, autoload)
└── README.md            # Description du projet
⚙️ Fonctionnalité testée
[x] Base de données dentiste créée
[x] Table articles créée dans PhpMyAdmin
[x] Insertion de données via PhpMyAdmin
[x] Affichage dynamique des articles dans /article
👨‍💻 Auteur
Développé avec passion par Bruno Rigal
👉 https://github.com/rigal34

