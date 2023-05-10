<?php
    /**
     * Inclure les fichiers nécessaires
     */
    require_once ('inc/db.php');
    require_once ('inc/Students.php');

    // Instance de DB
    $connecteur = new DB();

    // Appel de la méthode de connexion de l'objet DB
    $connecteur->connexion();

    // Appel de la méthode qui va aller chercher la liste de TOUS les étudiants
    $studentsList = $connecteur->findAllStudents();

    // Création d'un objet Etudiant pour l'affichage du tableau des étudiants
    $studentsObject = new Students();

    // Génération du tableau HTML
    $output = $studentsObject->displayTable( $studentsList );
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AP - Gestion des étudiants</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
    <!--
        Affichage HTML généré
    -->
    <?= $output; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
