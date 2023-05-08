<?php

class Voertuig extends BaseController
{
    private $GebruikteVoertuigenModel;

    public function __construct()
    {
        $this->GebruikteVoertuigenModel = $this->model('GebruikteVoertuigenModel');
    }

    public function overzichtVoertuig() 
    {
        

        $result = $this->GebruikteVoertuigenModel->getInstructeurVoertuig();
        var_dump($result);

        $row = "";

        // var_dump($rows);

        foreach ($result as $instructeur) {
            $row .= "<tr>
                    <td>$instructeur->TypeVoertuig</td>
                    <td>$instructeur->Type</td>
                    <td>$instructeur->Kenteken</td>
                    <td>$instructeur->Bouwjaar</td>
                    <td>$instructeur->Brandstof</td>
                    <td>$instructeur->Rijbewijscategorie</td>
                    </tr>";

                    $data2 = [
                        'title' => 'Door Instructeur Gebruikte Voertuigen',
                        'rows' => $row
                    ];
                    var_dump($row);

                    $this->view('GebruikteVoertuig/overzichtvoertuigen', $data2);
                    
        }
    }
}