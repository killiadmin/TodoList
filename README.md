# Todo List App

---

## Sommaire

- [Versioning](#versioning)
- [Besoins](#besoins)
- [Installation](#installation)
- [Logs de connexion](#compte_administrateur)
- [Test unitaire](#test_unitaire)
- [Contribution](#contribution)

---

<div id='versioning'>

## Mise en place des différentes versions 

### Main

   - La production contient la V2 - Todolist

#### V1 - Todolist

   - Version initial du projet 
   - Symfony 3 
   - Php 7.1 

#### V2 - Todolist

   - Version mis à jour sans modification majeur 
   - Symfony 6.4
   - Php 8.1

#### V3 - Todolist

   - Version mis à jour avec modification majeur
   - Symfony 6.4
   - Php 8.1
   - Améliorations proposées :

     - ###### Mention de l'auteur sur chaque tâches
     - ###### Une pagination des tâches
     - ###### Une route supplémentaire pour afficher une tâche en détail
     - ###### Une structure solide et cadrées des tâches (texte trop long par exemple)

</div>

---

<div id='besoins'>

## Description des besoins mentionné
### Corrections d'anomalies
 - Une tâche doit être attachée à un utilisateur
 - Pour les tâches déjà créées, il faut qu’elles soient rattachées à un utilisateur “anonyme”.
 

 - L’utilisateur authentifié devra être rattaché à la tâche nouvellement créée qu'il aura soumit.


 - Lors de la modification de la tâche, l’auteur ne peut pas être modifié.
 - Lors de la création d’un utilisateur, il doit être possible de choisir un rôle pour celui-ci. Les rôles listés sont les suivants :

        - Rôle utilisateur (ROLE_USER) ;
        - Rôle administrateur (ROLE_ADMIN).
 
    

  - Lors de la modification d’un utilisateur, il est également possible de changer le rôle d’un utilisateur.


### Implémentation de nouvelles fonctionnalités

#### Autorisation

- Seuls les utilisateurs ayant le rôle administrateur (ROLE_ADMIN) doivent pouvoir accéder aux pages de gestion des utilisateurs.

- Les tâches ne peuvent être supprimées que par les utilisateurs ayant créé les tâches en question.

- Les tâches rattachées à l’utilisateur “anonyme” peuvent être supprimées uniquement par les utilisateurs ayant le rôle administrateur (ROLE_ADMIN).

#### Implémentation de tests automatisés

- Les tests automatisés (tests unitaires et fonctionnels) sont nécessaires pour le fonctionnement de l’application.
- Ces tests sont implémentés avec PHPUnit.
- Des données de tests afin de pouvoir prouver le fonctionnement sont disponibles
- Un rapport de couverture de code au terme du projet est disponible. Le taux de couverture devra être supérieur à 70 %.

</div>

---

<div id='installation'>

## Installation

### Requis pour l'installation du projet

    * PHP >=8.1
    * Composer   
    * Symfony CLI
    * Docker
    * Docker-compose

### Créez votre répertoire pour installer le projet, suivez les étapes

```bash
mkdir P8_todoListApp_KF

cd P8_todoListApp_KF

mkdir database
```

### Clonez le projet todoListApp

```bash
git clone https://github.com/killiadmin/TodoList.git
```

### Lancer l'environnement de développement

```bash
cd TodoList
```

```bash
composer update 
```

```bash
docker compose up -d
```

```bash
symfony server:start -d
```

### Lancer les migrations

```bash
symfony console d:m:m
```

### Ajout des données de tests

```bash
symfony console d:f:l
```

</div>

---

<div id="compte_administrateur">

## Compte administrateur de connexions :

Utilisateur :
```bash
killiadmin
```

Mot de passe :
```bash
password
```

</div>

---

<div id='test_unitaire'>

## Environnement de test :

Appliquer les migrations

```bash
symfony console doctrine:migration:migrate --env=test
```

Appliquer les fixtures
```bash
symfony console doctrine:fixtures:load --env=test
```

Tester si l'environnement test est correct
```bash
vendor/bin/phpunit
```

Générer le rapport de couverture
```bash
vendor/bin/phpunit --coverage-html public/test-coverage
```

Ouvrir le rapport dans le navigateur (macOS)
```bash
open public/test-coverage/index.html
```

</div>

---

<div id='versioning'>

## Contribution 

Si vous désirez apporter votre [contribution](https://github.com/killiadmin/TodoList/blob/main/CONTRIBUTION.md) à ce projet

</div>
