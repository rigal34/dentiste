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

dentiste/ ├── App/ │ ├── Controllers/ │ ├── Models/ │ ├── Views/ │ └── Config/ ├── public/ │ └── index.php ├── .gitignore ├── composer.json ├── README.md

yaml
Copier
Modifier

---

## ⚙️ Fonctionnalité testée

- [x] Base de données `dentiste` créée
- [x] Table `articles` créée dans PhpMyAdmin
- [x] Insertion de données via PhpMyAdmin
- [x] Affichage dynamique des articles dans `/article`

---

## 👨‍💻 Auteur

Développé avec passion par **Bruno Rigal**  
👉 [https://github.com/rigal34](https://github.com/rigal34)