************** pour lancer l'application **************

aprés l'extraction du projet dans le dossier du serveur local :

IMPORTANT : avec le framework laravel c'est obligatoire de suivi le nom du projet pas le mot public dans l'URL,
EXAMPLE : localhost/athena/public

************** paramètres de connexion sur la base de données **************

	DB_CONNECTION=mysql
	DB_HOST=127.0.0.1
	DB_PORT=3306
	DB_DATABASE=latenzaag
	DB_USERNAME=root
	DB_PASSWORD=

si vous utilizez des paramètres différentes que les notres
vous devez les indiquer dans le fichier .env qui se trouve a la racin du projet.

************** les dossiers importants **************

/app/Http/Controllers : contient tous les contrôleurs de l'application
/public : contient les fichiers public (.*js, .*css et les images)
/routes/web.php : ce fichier contient les définitions des URLs et ces liaison avec les contrôleurs
/database/migrations : les définitions des tables de la base de données

************** le projet est disponible su le site github.com **************
lien vers le projet ------> https://github.com/mbareck7/latenzaag
