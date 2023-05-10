# Application de gestion des étudiants

L'objectif est de créer une application de gestion des stages des étudiants.

# Rappel

Sur la WSL, les services **apache2** et **mariadb** divent être lancés.

```bash
sudo service apache2 start
sudo service mariadb start
```

# Base de données

Accéder à PHPMyAdmin via l'URL correpondante à votre WSL.

Ici, ce sera *http://localhost/phpmyadmin*.

> Vous devez disposer une d'une base de données spécifique ainsi que d'un utilisateur autorisé à se connecter et manipuler les données de cette base.

## Table ETUDIANT

![readm_docs/img.png](readme_docs/img.png)


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