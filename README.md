# SymfonyCnam
TP Symfony collaboratif réalisé par GENEVOIS Ludovic, LE FLOUR Dylan & MAUGEZ Corentin

# Récupération du projet
Se mettre dans le répertoire souhaité, ouvrir un shell et lancer la commande : `git clone git@github.com:DyRize/SymfonyCnam.git`

# Lancement du projet
- Ouvrir le projet avec PhpStorm (ou VSCode).
- Installer le plugin ``SonarLint`` directement dans PhpStorm pour assurer la qualité du code et une bonne maintenabilité de celui-ci.
- Installer le plugin ``.env files support`` afin de pouvoir manipuler le .env ultérieurement.
- Installer le plugin ``Symfony Support``.
- Lancer l'application dans un navigateur avec la commande ``php bin/console server:run``

# Compilation avec Docker
- Compiler avec `docker-compose build`
- Exécuter avec `docker-compose up`, ajouter ` -d` pour lancer en daemon
- Se déplacer dans le container avec `docker-compose exec php bash` puis `cd SymfonyCnam/` afin de lancer les commandes Symfony dans celui-ci
- Lancer un `composer install`
- Stopper avec `docker-compose down`

# Gestion collaborative
- Le Workflow utilisé est Gitflow : https://www.atlassian.com/fr/git/tutorials/comparing-workflows/gitflow-workflow
- Ne jamais commit sur la branche master !
- La branche develop sert de branche de développement et permet d'y intégrer le code des différentes features.
- Une feature est une branche ayant pour nom feature/*<votre trigramme (Première lettre de votre prénom, 2 Premières lettres de votre nom) en minuscule>*/<*le nom de votre feature en minuscule et séparé par des -*>
- Lorsqu'une feature est terminée et poussée, faire une Pull Request afin que le code soit inspecté et validé. Les Pull Request devront impérativement être approuvées par les 2 autres membres de l'équipe avant le merge de la feature dans la branche develop.
- Aucun merge ne doit directement être effectué sur develop

# Rappel des commandes essentielles pour Symfony :

Création d'un projet avec un squelette : ``composer create-project symfony/website-skeleton <nom du projet>``

Installer un serveur pour le lancement de l'application : ``composer require server --dev ^4.4.2``

Lancer l'application dans un navigateur : ``php bin/console server:run``

Créer un controller : ``php bin/console make:controller``

Créer une base de données avec les paramètres du .env : ``php bin/console doctrine:database:create``

Créer une classe Entité qui représente une table : ``php bin/console make:entity``

Créer une migration SQL à partir des entités présentes : ``php bin/console make:migration``

Lancer les scripts de migration afin de mettre à jour la table : ``php bin/console doctrine:migrations:migrate``

Installer le composant de fixture : ``composer require orm-fixtures --dev``

Créer des données de test dans la base : ``php bin/console make:fixtures``

Charger les données de test dans la base : ``php bin/console doctrine:fixtures:load``