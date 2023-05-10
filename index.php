<?php
    /**
     * Inclure les fichiers nécessaires
     */
    require_once ('inc/db.php');

    // Instance de DB
    $connecteur = new DB();

    // Appel de la méthode de connexion de l'objet DB
    $connecteur->connexion();

    // Appel de la méthode qui va aller chercher la liste de TOUS les étudiants
    $studentsList = $connecteur->findAllStudents();
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
    <h1>Liste des étudiants</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // Pas propre, mais possible. On va placer du code PHP au milieu du HTML

                // Parcours du tableau des étudiants
                foreach( $studentsList as $student )
                {
                    echo '<tr>';
                        echo '<th scope="row">' . $student['id'] .'</th>';
                        echo '<td>' . $student['nom'] .'</td>';
                        echo '<td>' . $student['prenom'] .'</td>';
                        echo '<td> <a href="edit.php?id=' . $student['id'] . '">Editer</a> - Supprimer</td>';
                    echo '</tr>';
                }
            ?>
        </tbody>
    </table>

    <a href="edit.php" class="btn btn-primary">Ajout</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
