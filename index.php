<?php
    /** Inclusion des fichiers nécessaires */
    require_once ('inc/db.php' );
    require_once ('inc/Students.php' );


    /**
     * Initialisation des variables et objets
     */
    // Objet gestion Base de données (connexion immédiate)
    $db = new DB();


    /**
    *   Selon l'url sur laquelle on est, on appelle des méthodes de DB différentes
    */
    switch ( $_GET['action'] )
    {
        // Lecture des étudiants
        case 'read_students':
            // Appel de la méthode de récupération des étudiants
            $students_data = $db->findAllStudents();

            // Instance de etudiants
            $students_obj = new Students();

            // Appel de la méthode d'affichage des étudiants
            $output = $students_obj->display( $students_data );
            break;
    }

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion Stages des étudiants</title>
</head>
<body>

<?= $output ?>
</body>
</html>