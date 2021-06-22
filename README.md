# DOJO DEBUG SYMFONY

## BUT

Déboguer un projet Symfony tout pété, et arriver à afficher la page d'acceuil (à la route "/") qui affiche une liste d'animaux de compagnie.

## INSTALLATION

* Clone ce repo
* Créé un fichier `.env.local` à partir du fichier `.env` à la racine du projet, et configure tes informations de connexion à ta base de donnée 
* Lance `composer install` à la racine du projet
* Lance `yarn install` à la racine du projet
* Lance `yarn encore dev` à la racine du projet
* Lance `bin/console doctrine:database:create`
* Lance `bin/console doctrine:migrations:migrate`
* Lance `bin/console doctrine:fixtures:load` (enfin... essaie 🙃)

