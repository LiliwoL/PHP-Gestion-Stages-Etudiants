<?php

class Students
{
    // Attributs
    private string $tableStructure = '<table class="table">
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

    private string $studentTableLine = '<tr>
                <th scope="row">%d</th>
                <td>%s</td>
                <td>%s</td>
                <td>Editer - Supprimer</td>
            </tr>';

    // Méthodes
    public function displayTable ( array $data ) : string
    {
        $outputLines = '';

        // Parcours des données
        foreach ( $data as $student )
        {
            print_r($student);

            $outputLines .= sprintf( $this->studentTableLine, $student['id'], $student['nom'], $student['prenom'] );
        }

        $output = sprintf( $this->tableStructure, $outputLines );

        return $output;
    }
}