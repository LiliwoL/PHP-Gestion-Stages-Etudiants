<?php

/**
 * Fichier de configuration de l'application
 *
 * A protéger!!
 */

// Base de données
const DB_USER="root";
const DB_PASS="root";
const DB_HOST="127.0.0.1";
const DB_NAME="ap-gestion-stages";

// DSN
//  Le Data Source Name, ou DSN, qui contient les informations requises pour se connecter à la base.
//En général, un DSN est constitué du nom du pilote PDO, suivi d'une syntaxe spécifique au pilote.
//const DSN='mysql:dbname=' . DB_NAME . ';host=' . DB_HOST;
const DSN='sqlite:./database.sqlite';