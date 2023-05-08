<?php

class Instructeur extends BaseController
{
    private $instructeurModel;

    public function __construct()
    {
        $this->instructeurModel = $this->model('InstructeurModel');
    }
    
    public function index()
    {
        $data = [
            'title' => 'Overzicht Instructeurs in dienst'
        ];

        $this->view('instructeur/overzichtInstructeur', $data);
    }

    

    public function overzichtInstructeur() 
    {
        

        $result = $this->instructeurModel->getInstructeur();
        var_dump($result);

        $rows = "";

        // var_dump($rows);

        foreach ($result as $instructeur) {
            $rows .= "<tr>
                    <td>$instructeur->Voornaam</td>
                    <td>$instructeur->Tussenvoegsel</td>
                    <td>$instructeur->Achternaam</td>
                    <td>$instructeur->Mobiel</td>
                    <td>$instructeur->DatumInDienst</td>
                    <td>$instructeur->AantalSterren</td>
                    <td><a href='http://www.mvc-2209a-framework-periode4.com/GebruikteVoertuig/overzichtvoertuigen.php'>auto-icon</a></td>
                    </tr>";

                    $data = [
                        'title' => 'Instructeur in dienst',
                        'rows' => $rows
                    ];
                    // var_dump($rows);

                    $this->view('instructeur/overzichtinstructeur', $data);
                    
        }
    }

    public function overzichtVoertuigen($Id)
    {
        $result = $this->instructeurModel->getGebruikteVoertuigen($Id);

        // var_dump($result);
    }
}