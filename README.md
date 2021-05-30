# SymfonyCnam
Projet Symfony collaboratif réalisé par GENEVOIS Ludovic, LE FLOUR Dylan & MAUGEZ Corentin

# Introduction
Ce site web permet de promouvoir la formation "Informatique & Multimédia" (IM) du Conservatoire National des Arts et 
Métiers (CNAM) PACA.
Il permet également d'offrir une plateforme de communication et de centralisation des données.

Ce site web comporte 3 parties distinctes :
* **Une partie publique** avec : une présentation de la formation et de l'école, les CV des étudiants de la formation, 
  les projets organisés par les enseignants et les étudiants, les événements organisés, nos partenaires, ainsi que le 
  BDE.
* **Une partie privée** avec : la gestion de son compte (et de son CV) ainsi que la proposition d'un projet.
* **Une partie administration** avec : un accès Super Admin (Gestion des promotions, des utilisateurs, des étudiants, 
  des intervenants, des membres du BDE & Modification du contenu des pages du site présentant la formation), un accès 
  Intervenant (Gestion des évènements liés à une promotion ou non, Ajout de projets liés à 1 ou plusieurs étudiants), 
  un accès Délégué (Gestion des événements liés à une promotion, Rédaction des informations) ainsi qu'un accès BDE
  (Gestion des articles d'information)

# Gestion collaborative
- Nous utilisons Git pour versionner le projet. Celui-ci se trouve sur un dépot GitHub.
- Le Workflow utilisé est Gitflow : https://www.atlassian.com/fr/git/tutorials/comparing-workflows/gitflow-workflow
- Les tâches et l'avancement du projet sont suivis sur notre projet Kanban sur GitHub Projects.
- Pour chaque fonctionnalité, il faut créer une nouvelle branche de feature.
- Une feature est une branche ayant pour nom feature/*votre trigramme*/*nom de la feature en minuscule et séparé par des -*
- Lorsqu'une feature est terminée et poussée, faire une Pull Request afin que le code soit inspecté et validé. Les Pull Request devront impérativement être approuvées par les 2 autres membres de l'équipe avant le merge de la feature dans la branche develop.
- Avant la création d'une Pull Request, bien vérifier si la version de la branche mère est à jour avec la version de la branche mère actuelle. Si ce n'est pas le cas il faut se mettre à jour.
- La branche develop sert de branche de développement et permet d'y intégrer le code des différentes features.
- Aucun merge ne doit directement être effectué sur develop
- Et surtout, la règle la plus importante : Ne jamais commit sur la branche master !

# Conception
Ce projet est développé avec Symfony 5 et déployé sur une stack Docker.
Le schéma relationnel & les spécifications sont dans le dossier `conception` de ce projet.

# Récupération du projet
Se mettre dans le répertoire souhaité, ouvrir un shell et lancer la commande : `git clone git@github.com:DyRize/SymfonyCnam.git`

# Comptes de tests
Les accès et via compte de tests se trouvent dans le dossier `access` de ce projet.

# Lancement du projet
- Ouvrir le projet avec PhpStorm (ou VSCode).
- Installer le plugin ``SonarLint`` directement dans PhpStorm pour assurer la qualité du code et une bonne maintenabilité de celui-ci.
- Installer le plugin ``.env files support`` afin de pouvoir manipuler le .env ultérieurement.
- Installer le plugin ``Symfony Support``.

# Compilation avec Docker
- Compiler avec `docker-compose build`
- Exécuter avec `docker-compose up`, ajouter ` -d` pour lancer en daemon
- Se déplacer dans le container avec `docker-compose exec php bash` puis `cd SymfonyCnam/` afin de lancer les commandes Symfony dans celui-ci
- Lancer un `composer install`
- Créer la base de données avec `php bin/console doctrine:database:create`
- Lancer les scripts de migration avec `php bin/console doctrine:migrations:migrate`
- Stopper avec `docker-compose down`

# Configuration
Dans le fichier `.env` :
* _DATABASE_URL_ : Informations permettant à Symfony de se connecter à la Base de Données.
* _APP_ENV_ :
  * ``dev`` : Permet l'accès à certaines fonctionnalités de debug et au profiler Symfony.
  * `prod`: Switch de l'application en mode rendu final sans les fonctions de développement.

# Base de Données
Symfony intègre nativement un ORM : Doctrine. Il est ainsi possible de générer le schéma dans la Base de Données via quelques commandes et annotations dans l'entité.

Pour plus d'informations :
* Maker-Bundle : https://symfony.com/doc/current/bundles/SymfonyMakerBundle/index.html
* https://zetcode.com/symfony/entity/

# Commandes :
Quelques explications et commandes pour créer certains objets dans un projet Symfony.

Dans le conteneur, à la racine du répertoire :

* **Créer l'entité User** : `php bin/console make:user`
* **Créer ou modifier une classe Entité qui représente une table** : `php bin/console make:entity`
  * Suivre les instructions pour ajouter et spécifier les propriétés des attributs.
  * Deux fichiers seront créés grâce à cette commande :
    1. L'entité avec des attributs, getter et setter
    2. Le Repository grâce auquel on peut intéragir avec les données contenues dans la base de données.
* **Créer une migration SQL à partir des entités présentes** : `php bin/console make:migration`
* **Exécuter les scripts de migration afin de mettre à jour le schéma de la base** : `php bin/console doctrine:migrations:migrate`
* **Créer ou modifier un controller** : `php bin/console make:controller`
* **Ajouter une dépendance de composer / PHP dans le projet** : `composer require <package_name>`
* **Supprimer une dépendance de composer / PHP dans le projet** : `composer remove <package_name>`
* **Installer le composant de fixture** : `composer require orm-fixtures --dev`
* **Créer des données de test** : `php bin/console make:fixtures`
* **Charger les données de test dans la base** : `php bin/console doctrine:fixtures:load`
* **Créer un CRUD pour une entité** : `php bin/console make:crud <entity_created>`
  * Création du contrôleur d'objet avec les méthodes Create Read Update Delete
  * Création d'un FormType pour la création/mise à jour de l'entité.
  * Création des modèles Twig pour chaque méthode.
* **Liste des commandes disponibles** : `php bin/console list`
* **Effacer le cache** : `php bin/console cache:clear`

# Securité
Pour créer un système d'authentification, vous pouvez exécuter les commandes suivantes :
```
php bin/console make:user
php bin/console make:auth
```

Voici quelques paramètres définis :
* **Hiérarchie des rôles** : Le rôle par défaut est _ROLE_USER_. Tous les autres rôles dépendent de lui par défaut. La liste est la suivante : 
  * _ROLE_ADMIN_ : SuperAdmin, tous les droits
  * _ROLE_SPEAKER_ : Intervenant, (professeurs, administrateurs CNAM & UTV)
  * _ROLE_BDE_ : Administrateur BDE
  * _ROLE_DELEGATE_ : Délégué
  * _ROLE_STUDENT_ : Étudiant
* **Algorithme de codage** : Chiffrement du mot de passe.
* **Firewalls** : Restreint l'accès à certaines parties du site web pour certains rôles.

Pour plus d'informations :
* https://symfony.com/doc/current/reference/configuration/security.html
* https://symfony.com/doc/current/security.html

# Formulaires
Les formulaires peuvent être créés grâce au champ FormType et appelés en vue. Il est également possible de les créer de manière moins automatique et plus personnalisée.
Tous les formulaires sont dans le répertoire `SymfonyCnam/src/Form`.

Pour plus d'informations :
* https://symfony.com/doc/current/forms.html
* https://symfony.com/doc/current/reference/forms/types/form.html#block-name
* https://symfony.com/doc/current/reference/forms/types.html
* https://symfony.com/doc/current/form/form_customization.html

# Assets
Les Assets (CSS, fichiers, JS) sont stockés dans ``SymfonyCnam/public/assets``.
Grâce aux méthodes Symfony, il est possible d'accéder aux fichiers de ce répertoire, en utilisant un chemin. Pour ces méthodes, le répertoire `public` fait office de racine.
* **Faire appel à un asset** : `asset('assets/.../...)`

# Template
Le template utilisé pour ce projet est le suivant : http://preview.themeforest.net/item/xwin-multipupose-html5-template/full_screen_preview/19669954

# Mise en production
Effectuer un merge de la branche `master` sur la branche `production` et suivre la manipulation de mise en prod