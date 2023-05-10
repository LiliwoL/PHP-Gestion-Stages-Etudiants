<?php

class Students
{
    public function display ( array $data ) : string
    {
        $output = '';

        // Parcours des données
        foreach ( $data as $student )
        {
            print_r($student);

            //$output .= $student
        }

        return $output;
    }
}