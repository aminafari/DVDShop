# Projet CMS : Site E-commerce de DVD avec WordPress et WooCommerce

## Description du Projet
Ce projet consiste à créer un site e-commerce dédié à la vente de DVD dans quatre catégories principales : **Animation**, **Horreur**, **Comédie** et **Documentaire**.
Le site est construit avec **WordPress** et **WooCommerce**, offrant une expérience utilisateur fluide et moderne.

## Fonctionnalités Principales

1. **Pages principales du site** :
   - Page d'accueil : Présentation générale et mise en avant des catégories de produits.
   - Boutique : Catalogue de DVD avec options de tri et de filtrage.
   - Panier : Gestion des articles ajoutés pour l'achat.
   - À propos : Informations sur la boutique.
   - Contact : Formulaire pour joindre l'équipe de la boutique.

2. **Catalogue produits** :
   - Organisation en 4 catégories principales.
   - Plus de 19 produits avec descriptions détaillées, images de qualité et gestion de stocks.

3. **Navigation et UX** :
   - Menu structuré avec accès rapide aux pages principales.
   - Tri des produits par prix et autres critères.
   - Compatible avec les appareils mobiles.

4. **Couleurs utilisées** :
   - Palette : `#ff6310`, `#fd7c47`, `#14272c`, `#687279`, `#111518`, `#E9EBEC`, `#ffffff`.

## Installation et Configuration

### Prérequis
- Serveur local (XAMPP, MAMP, ou équivalent).
- PHP (version >= 7.4) et MySQL.
- Navigateur web.

### Étapes d'installation

1. **Télécharger le projet** :
   - Clonez ce dépôt GitHub sur votre machine locale :
     git clone https://github.com/votre-utilisateur/nom-du-repo.git
  

2. **Configuration du serveur local** :
   - Placez les fichiers dans le répertoire du serveur local (`htdocs` pour XAMPP).
   - Créez une base de données MySQL via phpMyAdmin.
   - Importez le fichier SQL situé dans le dossier `database` :
    database/wordpress_db.sql
     

3. **Configurer le fichier `wp-config.php`** :
   - Mettez à jour les informations de connexion à la base de données (nom, utilisateur, mot de passe).

4. **Accéder au site** :
   - Lancez votre serveur local.
   - Accédez à `http://localhost/nom-du-projet` dans votre navigateur.

### Identifiants Administrateurs
- **Utilisateur** : admin
- **Mot de passe** : admin1234

## Structure du Dépôt

- `wp-content/` : Contient les thèmes, plugins et autres fichiers spécifiques au site.
- `database/` : Fichier SQL pour la base de données.
- `README.md` : Documentation du projet.

## Auteur
- Nom : Amina Faris/Fatima Iboubkarne/ Oumaima Kourchte
- Promotion : 2024/2025
- Module : CMS

