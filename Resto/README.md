Projet de création d’une application web avec le framework PHP Laravel

par FORET Thomas et SOUBEYRAN Josué


1) Guide d'installation
git clone
cd resto
composer install
->Avoir installé nodeJS depuis Internet, puis:
npm install
fichier .env : modifier DB_CONNECTION=sqlite et APP_URL=http://localhost:8000
créer un fichier database.sqlite dans Resto/database et modifier le path de la base de données

php artisan migrate:fresh
php artisan db:seed
php artisan serve

utiliser le login admin pour les fonctions d'admin:
login admin@admin
mdp   adminadmin


2) Parties implémentés

En plus des 8 exercices du TP2, nous avons implémenté les fonctionnalités suivantes :

- 1 : Gestion des commentaires 
Nous avons implémenter un système de commentaires sur chaque page de restaurants, ces commentaires peuvent contenir un texte et/ou une note. la liste des commentaires s'affiche normalement sous le formulaire. 
POUR TESTER : remplissez le formulaire et poster quelques commentaires.
Attention: le système accepte malheuresement les commentaires sans note ni texte à condition qu'un utilisateur soit entré, le cas échéant causera une erreur du au NULL de l'utilisateur.

- 2 :Gestion des tags ou du type de cuisine 
La gestion des tags as était commencé mais reste incomplète, les tables, seeder et factories on était écrite cependant l'affichage n'as pas était complété et les seeders incomplet ne nous permettent pas de voir cette fonctionalité dans la base de données. 
POUR TESTER: Intestable, vous pouvez constater l'avancement en regardant les dossiers.
Attention: non-fonctionnel

- 3 :Notes 
Les notes sont immplémentées avec les commentaires par un sytème de gradation étoilé entre 1 et 5. 0 ne vaut aucune note et n'est pas compté dans la moyenne. une note moyenne par restaurants et présentes sur sa page et dans la liste des restaurants.
POUR TESTER: lire les notes dans la liste et noter un restaurants dans sa section commentaires.
ATTENTION: les notes s'affichent comme étant 0 dans la liste des restaurants si il n'y pas de notes.

- 5 : Authentification qui protège l'accès à l'administration
Deux rôles existent pour les utilisateurs : user et admin
Le CRUD de l'administrateur est protégé grace au middleware EnsureUserHasRole qui vérifie que le role de l'utilisateur est bien 'admin', sinon il renvoie une erreur. Son dashboard personnalisé permet de consulter la liste des restaurants, les utilisateurs et les commentaires.
Il est possible de supprimer un restaurant de la base de donnée. L'ajout et la modification de restaurants fonctionnaient, mais ce n'est plus le cas.
Les suppressions de commentaires et utilisateurs sont implémentés mais non fonctionnelles.
POUR TESTER :
- Créez un compte via le bouton Register, et tentez de rejoindre la page http://localhost:8000/admin/dashboard par exemple. Une erreur doit s'afficher car un compte créé via register possède le rôle 'user' par défault.
- Supprimer un restaurant ici http://localhost:8000/admin/restaurants en étant connecté avec les log admin en haut de ce document.

- 6 : Mise en place et utilisation de Laravel Jetstream avec Livewire
Toute notre partie CRUD est gérée Jetstream, avec une personnalisation en component blade et TailwingCSS
POUR TESTER :
- se connecter via login et créer un utilisateur avec register
- explorer depuis http://localhost:8000/dashboard avec un un compte rôle 'user' et depuis http://localhost:8000/admin/restaurants avec un compte admin. On peut gerer sont profil (mettre une photo de profil, changer ses information)

Bonus:
- le logo en bannière
- les composants livewire cousu main, notamment la galerie.

3) Remarques

Il manque un peu de tutoriels sur Laravel 10 qui est encore récent.
