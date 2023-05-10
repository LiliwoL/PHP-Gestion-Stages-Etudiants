<?php

/**
 * Classe d'interfaçage avec la base de données
 */

class DB
{
    // Attributs
    private $dbh;

    // Méthodes
    // ****************************

    // Constructeur
    public function __construct()
    {
        // Inclusion des fichiers nécessaires
        require_once ('inc/config.php');

        // Connexion à la base avec le constructeur de PDO
            // https://www.php.net/manual/fr/pdo.construct.php
        $this->dbh = new PDO( DSN, DB_USER, DB_PASS);
    }

    // READ
    // ***************************

    // Lecture des étudiants
    public function findAllStudents ()
    {
        $output = [];

        // Requête
        $query = "SELECT * FROM STUDENTS";

        // Préparation de la requête et récupération de son statement
        $statement = $this->dbh->prepare( $query );

        if ( $statement ) {
            // Exécution de la requête préparée (= statement)
            $countResults = $statement->execute();

            // Test du résultat et affichage si OK
            if ($countResults !== 0) {
                // Renvoi du tableau des résultats
                $output = $statement->fetchAll();
            }
        }

        return $output;
    }
}