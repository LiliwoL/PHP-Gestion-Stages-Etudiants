# Application de gestion des étudiants

L'objectif est de créer une application de gestion des stages des étudiants.

# Rappel

Sur la WSL, les services **apache2** et **mariadb** doivent être lancés.

```bash
sudo service apache2 start
sudo service mariadb start
```

Vous devez avoir accès au serveur web via un navigateur et travailler dans le **DocumentRoot** de votre serveur Web.

# Sommaire

<!-- TOC -->
* [Application de gestion des étudiants](#application-de-gestion-des-tudiants)
* [Rappel](#rappel)
* [Sommaire](#sommaire)
* [Base de données](#base-de-donnes)
  * [Table ETUDIANT](#table-etudiant)
  * [Requêtes à utiliser](#requtes--utiliser)
    * [Lecture](#lecture)
    * [Mise à jour](#mise--jour)
    * [Suppression](#suppression)
    * [Création](#cration)
<!-- TOC -->

***

# Base de données

> Il faut pour cette partie réaliser les tâches suivantes:
> - Accéder à PHPMyAdmin
> - Créer une base de données spécifique ainsi qu'un utilisateur spécifique
> - Créer une table **ETUDIANT** avec les champs donnés plus bas
> - Saisir des données factices
> - Commencer à rédiger les requêtes qui seront utilisées ultérieurement

Accéder à PHPMyAdmin via l'URL correpondante à votre WSL.

Ici, ce sera *http://localhost/phpmyadmin*.

## Table ETUDIANT

![readm_docs/img.png](readme_docs/img.png)

On crée une table **ETUDIANT** comprenant les champs suivants:
- id
  - INT AUTO_INCREMENT PRIMARY KEY
- nom
  - VARCHAR 255
- prenom
  - VARCHAR 255

## Requêtes à utiliser

### Lecture

- Lecture de tous les étudiants **findAll**
```sql
SELECT * FROM ETUDIANT;
```

- Lecture d'un étudiant en fournissant son id **findOne**
```sql
SELECT * FROM ETUDIANT WHERE id = ....;
```

### Mise à jour

```sql
UPDATE ......
```

### Suppression

```sql
DELETE ......
```

### Création

```sql
INSERT ......
```

# Fichiers HTML (FrontEnd)

Abordons maintenant l'aspect visuel.

## Affichage d'un tableau affichant toutes les données

Ce tableau affichera les informations ainsi que des liens permettant la suppression

## Formulaire de création net modification

Un formulaire contenant les champs *nom* et *prenom*.