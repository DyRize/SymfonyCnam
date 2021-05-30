#Fichier de répartition des tâches
Ce fichier propose la répartition des tâches effectuées par chacun des membre tout au long du projet.

Il se base sur le Board mis en place sur Github : https://github.com/DyRize/SymfonyCnam/projects/1

##Tâches communes :
* Formation sur Symfony - Tutoriels de Lior Chamla
* Allégement du projet
* Ficher de répartition des tâches

##Ludovic Genevois :
* Accès BDE :
    * Gestion des Articles d'informations
* Gestion de son propre compte :
    * Affichage de ses informations personnelles
    * Modification de son adresse e-mail
    * Modification de son numéro de téléphone
    * Modification de son mot de passe (procédure particulière)

##Dylan Le Flour :
* Mise en place du Board sur Github Projects
* Mise en place du projet avec le squelette
* Dockerisation du projet
* Création et refonte du README.md
* Configuration et création de la base de données
* Création des utilisateurs et de l'authentification/registration
* Création des entités principales
* Mise en place automatique des CRUD associés `avec Corentin`
* Gestion du menu en fonction des rôles et redirection selon les droits
* Accès Super Admin :
    * Gestion des promotions, étudiants, intervenants et membres du BDE
* Accès Intervenant :
    * Ajout d'un projet lié à 1 ou n étudiants
* Création du fichier des accès par compte (Personas)
* Mise en production du site sur AlwaysData

##Corentin Maugez :
* Création du Modèle Entité Association et refonte de celui-ci `avec Ludovic`
* Création des méthodes __toString() dans l'ensemble des entités
* Insertion de l'ensemble des fixtures (données de test) dans la base
* Intégration du template XWIN
* Accès libre :
    * Voir la présentation de la formation
* Mise en page de l'ensemble des fonctionnalités existantes avec le template
* Modification du template pour le styliser

##Reste à faire :
* Export de la base de données avec PhpMyAdmin
* Entité évènement et gestion des évènements via Full Calendar
* Ajouter des membres du BDE (suppression possible)
* Accès Intervenant :
    * Gestion des évènements du planning liés à une promotion (Echéance de documents à endre, examens, ... ) ou non ( GGJ, réunions académique, ... )
* Accès Super Admin : 
    * Modification du contenu, via un wysiwyg, des pages du site présentant la formation
* Accès délégué : 
    * Gestion des évènements du planning liés à une promotion (Echéance de documents à rendre, examens, ...)
    * Rédaction d'informations
* Accès libre :
    * Voir le CV des étudiants
    * Voir les projets
* Gestion des templates de pages d'erreur
* Traduction de l'application
