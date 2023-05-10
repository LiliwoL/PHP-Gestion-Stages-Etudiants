<?php
/**
 * Définition de la classe DB
 */
class DB
{
    // Attributs
    private string $db_user = "slam1";
    private string $db_pass = "SlaM1";
    private string $db_name = "AP";
    private string $db_host = "127.0.0.1";
    private object $dbh; // Attribut qui conservera l'objet PDO


    // ************************************

    // Méthodes
    public function connexion()
    {
        // Utilisation de la classe PDO
        // https://www.php.net/manual/fr/class.pdo.php

        // DSN = Data Source Name
            // mysql:dbname=testdb;host=127.0.0.1
            // Création du DSN à partir des attributs
        // En MySQL
            //$dsn = 'mysql:dbname=' . $this->db_name . ';host=' . $this->db_host;
        // En SQLite
        $dsn = 'sqlite:./DATA/database.sqlite';

        // Appel du constructeur de PDO
        // On stocke le handler dans $this->dbh
        $this->dbh = new PDO( $dsn, $this->db_user, $this->db_pass );

        // echo gettype( $dbh ); // Renvoie Object PDO
    }

    /**
     * Méthode qui va renvoyer un tableau contenant les étudiants
     *
     *
     * @return array
     */
    public function findAllStudents() : array
    {
        // Requête
        $query = 'SELECT * FROM ETUDIANT';

        // Utilisation du dbh pour lancer la requête
            // https://www.php.net/manual/fr/pdo.query.php
        $statement = $this->dbh->query( $query );

        if ( $statement ){
            // Renvoi des résultats
            return $statement->fetchAll();
        }else{
            die('Erreur');
        }
    }

    /**
     * Méthode qui va renvoyer un tableau contenant les étudiants
     *
     *
     * @return array
     */
    public function findOneStudent( int $id ) : array
    {
        // Requête
        $query = 'SELECT * FROM ETUDIANT WHERE id = :idStudent';

        try {

            // Utilisation du dbh pour lancer la requête
            // https://www.php.net/manual/fr/pdo.query.php
            $statement = $this->dbh->prepare($query);

            // Ajout du paramètre à la requête préparée
            $statement->bindParam('idStudent', $id);

            // Exécution de la requête
            $statement->execute();

            // Renvoi du résultat
            return $statement->fetch();
        }
        catch (PDOException $e){
            echo "Erreur : " . $e->getMessage();
        }
    }
}