# Todo List App

## Description des besoins mentionnés
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

## Requis pour l'installation du projet

    * PHP >=8.1
    * Composer   
    * Symfony CLI
    * Docker
    * Docker-compose

## Créez votre répertoire pour installer le projet, suivez les étapes

```bash
mkdir P8_todoListApp_KF

cd P8_todoListApp_KF

mkdir database
```

## Clonez le projet todoListApp

```bash
git clone https://github.com/killiadmin/TodoList.git
```

## Lancer l'environnement de développement

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

## Lancer les migrations

```bash
symfony console d:m:m
```

## Ajout des données de tests

```bash
symfony console d:f:l
```