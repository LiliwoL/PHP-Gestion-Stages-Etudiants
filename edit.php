<?php
/**
 * Selon la méthode par laquelle on arrive sur cette page, le comportement diffère
 */
// Vérification que des données ont été envoyées par POST
if ( isset($_POST['idStudent']) && isset($_POST['nameStudent']) && isset($_POST['firstnameStudent']) ){
    echo "POST envoyé";
}

// Vérification si l'on arrive sur un état de modification
if ( isset($_GET['id']) ){
    // On vérifie qu'un étudiant avec et ID existe bien
    require_once ('inc/db.php');

    // Instance de DB
    $connecteur = new DB();

    // Appel de la méthode de connexion de l'objet DB
    $connecteur->connexion();

    // Appel de la méthode qui va aller chercher la liste de TOUS les étudiants
    $studentData = $connecteur->findOneStudent( $_GET['id'] );
}
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
    <h1>Ajout / Edition d'un étudiant</h1>

    <form method="POST" action="edit.php">
        <div class="form-group">
            <label for="idStudent">ID Etudiant</label>
            <input type="number" class="form-control" id="idStudent" aria-describedby="idHelp" placeholder="Id de l'étudiant" name="idStudent" value="<?php if ( isset( $studentData['id'] ) ){ echo  $studentData['id']; } ?>" >
            <small id="idHelp" class="form-text text-muted">Identifiant unique de l'étudiant (non modifiable)</small>
        </div>
        <div class="form-group">
            <label for="nameStudent">Nom</label>
            <input type="text" class="form-control" id="nameStudent" placeholder="Nom" name="nameStudent" value="<?php if ( isset( $studentData['nom'] ) ) { echo  $studentData['nom']; } ?>" >
        </div>
        <div class="form-group">
            <label for="firstnameStudent">Prénom</label>
            <input type="text" class="form-control" id="firstnameStudent" placeholder="Prénom" name="firstnameStudent" value="<?php if ( isset( $studentData['prenom'] ) ) { echo  $studentData['prenom']; } ?>" >
        </div>

        <input type="submit" class="btn btn-primary">Ajout / Modifier</input>
    </form>

    <a href="index.php" class="btn btn-primary">Retour à la liste</a>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
