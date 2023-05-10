<?php

class Students
{
    // Attributs
    // ******************************************************
    // Structure TABLE
    private string $tableStructure = '
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
            %s            
        </tbody>
    </table>';

    // Ligne TR d'un étudiant
    private string $studentTableLine = '<tr>
                <th scope="row">%d</th>
                <td>%s</td>
                <td>%s</td>
                <td>Editer - Supprimer</td>
            </tr>';


    // Méthodes
    // ******************************************************

    /**
     * Génération d'un tableau HTML affichant les étudiants
     *
     * @param array $data
     * @return string
     */
    public function displayTable ( array $data ) : string
    {
        $outputLines = '';

        // Parcours des données
        foreach ( $data as $student )
        {
            //print_r($student);
            // Chaque étudiant est lu et ses informations sont remplies dans une ligne HTML de type TR
            $outputLines .= sprintf( $this->studentTableLine, $student['id'], $student['nom'], $student['prenom'] );
        }

        // Les lignes TR contenant les étudiants sont placées dans la structure d'une TABLE
        $output = sprintf( $this->tableStructure, $outputLines );

        return $output;
    }
}