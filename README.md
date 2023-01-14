# Projet Gestion Des Stages de UPF
Gestion de Stagiaires - Projet Symfony
Ce projet a été créé pour gérer les stagiaires de l'Université privée de Fès. Il permet de programmer les soutenances des stagiaires ainsi que d'autres fonctionnalités liées à la gestion des stagiaires.

## Fonctionnalités
1. Programmation des soutenances de stage
2. Ajout et gestion des informations des stagiaires (nom, prénom, courriel, etc.)
3. Gestion des tuteurs de stage (ajout, modification, suppression)

## Prérequis
PHP 7.4 ou supérieur
MySQL 5.7 ou supérieur
Serveur web (Apache, Nginx, etc.)

## Installation
1. Télécharger ou cloner le dépôt sur votre ordinateur
2. Installer les dépendances avec la commande `composer install`
3. Configurer les paramètres de connexion à la base de données dans le fichier .env
4. Créer la base de données en exécutant la commande `php bin/console doctrine:database:create`
5. Appliquer les migrations avec la commande `php bin/console doctrine:migrations:migrate`
6. Lancer le serveur de développement avec la commande `php bin/console server:run`

## Utilisation
Une fois l'installation terminée, vous pouvez accéder à l'application en vous rendant sur l'URL http://localhost:8000 dans votre navigateur. Les utilisateurs peuvent alors ajouter, modifier et supprimer les stagiaires et les soutenances, ainsi que générer des rapports.

## Badges

The Officiel Symfony Website: [symfony.com](https://www.symfony.com/)

[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](https://choosealicense.com/licenses/mit/)
[![GPLv3 License](https://img.shields.io/badge/License-GPL%20v3-yellow.svg)](https://opensource.org/licenses/)
[![AGPL License](https://img.shields.io/badge/license-AGPL-blue.svg)](http://www.gnu.org/licenses/agpl-3.0)

## License

[MIT](https://choosealicense.com/licenses/mit/)
