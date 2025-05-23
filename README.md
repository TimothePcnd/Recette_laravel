<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# 📖 Laravel - Gestion d’un Livre de Recettes (Projet CuisineNet)

## 📝 Brief du Projet

**Brief 1 Laravel : Gestion d’un livre de recettes**

L’entreprise **CuisineNet** souhaite mettre en ligne un site permettant de publier et gérer des recettes de cuisine. En tant que développeur, votre mission est de concevoir une **application web Laravel** permettant aux utilisateurs de **lister**, **ajouter**, **modifier** et **supprimer** des recettes.

---

## 🎯 Objectifs pédagogiques

Ce projet vous permet de :

- Comprendre la structure **MVC** de Laravel
- Mettre en place un **CRUD complet** avec **Blade**
- Utiliser **SQLite** pour stocker les données
- Utiliser les **requêtes Eloquent**
- Manipuler des **formulaires Laravel**
- Afficher les données dynamiquement

---

## ⚙️ Étapes de réalisation

1. Créer un projet Laravel
2. Configurer le fichier `.env` pour utiliser **SQLite**
3. Créer :
    - Le modèle `Recette`
    - La migration associée
    - Le contrôleur CRUD
4. Écrire et exécuter la migration
5. Gérer les routes web
6. Créer les vues **Blade** (index, create, edit, show)
7. Tester les fonctionnalités CRUD

---

## 🔧 Installation et lancement

### Prérequis

- PHP ≥ 8.1
- Composer
- Node.js & NPM
- SQLite (fichier `.sqlite`)
- Git

### Étapes d’installation

```bash
git clone https://github.com/votre-utilisateur/cuisinenet.git
cd cuisinenet
composer install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
```

Modifie le fichier `.env` comme suit :

```env
DB_CONNECTION=sqlite
DB_DATABASE=${absolute_path}/database/database.sqlite
```

Puis exécute :

```bash
php artisan migrate
npm install
npm run dev
php artisan serve
```

📍 Accès : [http://localhost:8000](http://localhost:8000)

---

## ✅ Fonctionnalités

- 🧾 **Lister** toutes les recettes
- ➕ **Ajouter** une nouvelle recette
- ✏️ **Modifier** une recette existante
- 🗑️ **Supprimer** une recette
- 🖼️ Affichage simple et propre avec **Blade**

---

## 📄 Modalités de rendu

### Livrables

- 🔗 Lien GitHub vers le **code source**
- 📷 Document Word avec **captures d’écran** des vues principales (`index`, `create`, `edit`, `show`)

### Critères de performance

- ✔️ Le **CRUD** fonctionne parfaitement
- ✔️ L’affichage est **lisible et clair**
- ✔️ Les **routes et vues** sont cohérentes
- ✔️ Les **données sont correctement enregistrées** dans SQLite

---

## 🧪 Tests

```bash
php artisan test
```

---

## 📁 Structure du projet

- `app/Models/Recette.php` – Modèle Eloquent
- `app/Http/Controllers/RecetteController.php` – Contrôleur CRUD
- `resources/views/recettes/` – Vues Blade
- `routes/web.php` – Routes web
- `database/migrations/` – Migration de la table `recettes`

---

## 🤝 Contribution

Forkez ce dépôt, créez une branche, proposez vos améliorations via une Pull Request. Merci !

---

Développé en Laravel dans le cadre du Brief 1 : *Gestion d’un livre de recettes* – Projet **CuisineNet**.
