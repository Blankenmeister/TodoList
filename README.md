#TO-DO List

##Brief:
Créer une todolist en SPA (Single Page Application) pour faciliter vos journées de travail ! Chaque Utilisateur pourra retrouver sa liste des tâches facilement et n'importe où !

L'utilisateur pourra, une fois connecté, retrouver sa session.

Dans notre cas, cela s’articulera autour d’une liste de tâches, aussi appelée “todo list”. Lorsque l’utilisateur interagit avec la page web, pour créer une nouvelle tâche ou en valider une, la page ne sera pas rechargée grâce à AJAX (Asynchronous JavaScript And XML).

​Le traitement des données se fera par l’intermédiaire de requêtes envoyés au backend en PHP.

​Les données seront stockées dans une base de données créée spécialement pour le brief. Vous communiquerez avec cette dernière par l’intermédiaire de PHP et PDO.

Dans une démarche de gain de temps, vous devrez utiliser des composants Bootstrap pour accélérer l’intégration de la todolist.

###Liste des actions réalisables dans la liste des tâches :
Créer une tâche.
Consulter le détail d’une tâche.
Valider une tâche.
Mettre à jour une tâche.
​
###Liste des actions réalisables pour le compte utilisateur :
S'inscrire.
Consulter son compte après connexion.
Modifier son mail, nom, prénom, mot de passe.
Supprimer son compte.
​
###Liste des livrables :
MCD de la base de données.
Maquettes / wireframes.
Dépôt GitHub avec README.

###INSTALLATION
**Le fichier config se trouve à la racine du projet.**
Lors de l'installation en production, veuillez renseigner dans le fichier config.php les bonnes informations relatives à la base de données.

###MIGRATION
Lors de l'installation, la base de données va initialiser le code du fichier stocké dans les Migrations.

Si vous souhaitez faire des modifications avant la création de la base de données, c'est donc dans ce fichier que vous devez modifier les choses.

###VERSIONS
Le programme a été conçu avec:

PHP 8.2.13
MySQL 8.2.0 

###Fichiers:
Le fichier jpg du MCD se trouve dans le dossier /public/assets/image/MCDsonia.jpg

###lien maquette:
https://www.figma.com/file/v3Pz9LV96MfvWeTWwPcX3P/maquette-todo-list?type=design&mode=design&t=kCDeusuVFQz7YHe0-0



