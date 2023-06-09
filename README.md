##Contexte du projet
La ville de Chambéry souhaite mettre en place un système de covoiturage dans l’agglomération du grand Chambéry. Votre agence a décroché l’appel d’offre pour la version 1 du projet !

​

La ville de Chambéry est adepte de la méthode “lean”, cette méthode vise à créer une première version d’un projet en apportant le maximum de valeur ajoutée pour l’utilisateur tout en consommant le minimum de ressources. L’objectif est de créer une version minimale du produit à mettre entre les mains des utilisateurs puis adapter la suite du développement selon les retours des usagés.

​

En d’autres termes, la ville a accordé un budget très restreint pour le développement de la version 1 du projet, elle souhaite se concentrer sur les fonctionnalités, ce pour quoi aucun budget n’a été alloué au design de la plateforme. Vous êtes donc libre dans le design de la plateforme, néanmoins le client à donner des instructions : la plateforme aborde un design moderne, épuré et faisant echo à un monde moins polluant. Point important : le site doit être responsif.

​

Contrairement aux maquettes, un cahier des charges et un schéma de la base de données précis vous ont été remis par le responsable technique, ils doivent être scrupuleusement suivis.

​

Déroulé :

Temps #1 collectivement - découverte du cahier des charges
Temps #2 collectivement - remédiation, récapitulatif du brief et stratégie de développement
Temps #3 individuel - réalisation

Mission: mettre en place un systeme de covoiturage en y integrant une base de donnees et une authentification des utilisateurs

Outils: PHP Symfony, Tailwind CSS, MYSQL, PHPMyAdmin

Run le projet
Cloner le projet

  git clone git@github.com:OrhanMA/Simplon-BlablaChambe.git
Go to the project directory

  cd Simplon-BlablaChambe/
Installer les dependencies

  composer install
  npm install
Changer l'URL de BDD dans le .env

DATABASE_URL="mysql://phpmyadmin:root@127.0.0.1:3306/<MY-DATABASE>?serverVersion=8.0.32&charset=utf8mb4"
Start the server

  php/bin console server:start
  npm run watch
Effectuer les migrations pour la BDD

php/bin console m:mig
php/bin console d:m:m
php/bin console d:f:l