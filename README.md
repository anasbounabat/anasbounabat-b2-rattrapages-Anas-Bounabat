# 11-Symfony - Rattrapage B2 - Anas Bounabat

## Description
Ce projet correspond au rattrapage B2 réalisé sur Symfony dans le cadre du développement du site Mongoo, une chaîne de restauration rapide spécialisée dans la salade à composer.

## Vidéo explicative
Lien vers la vidéo explicative et démonstration complète :  
https://www.youtube.com/watch?v=rd43ugTnO08

## Installation & Setup

### Cloner le dépôt
```bash
git clone https://github.com/anasbounabat/b2-rattrapages-Anas-Bounabat.git
cd b2-rattrapages-Anas-Bounabat/11-Symfony


Installer les dépendances
composer install:

Configurer la base de données:
Modifier le fichier .env pour renseigner les identifiants de connexion à votre base de données.


Créer la base de données:
php bin/console doctrine:database:create

Lancer les migrations (si utilisées):
php bin/console doctrine:migrations:migrate

Charger les fixtures avec Faker:
php bin/console doctrine:fixtures:load

Lancer le serveur local:
symfony server:start

J'ai créé le projet Symfony en suivant la documentation disponible à l'adresse suivante : https://docs.yoanncoualan.com/symfony.
J'ai utilisé les lignes de commande pour générer les entités, les contrôleurs et configurer la base de données.
La base a ensuite été remplie avec des données fictives grâce à l'utilisation de Faker via les fixtures.
Documentation Faker utilisée : https://fakerphp.github.io/