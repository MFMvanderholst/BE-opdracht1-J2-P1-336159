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

    

    public function overzichtInstructeur($id1=NULL, $id2=NULL) 
    {
        

        $result = $this->instructeurModel->getInstructeur();

        $rows = "";

        var_dump($result);

        foreach ($result as $instructeur) {
            $rows .= "<tr>
                    <td>$instructeur->Voornaam</td>
                    <td>$instructeur->Tussenvoegsel</td>
                    <td>$instructeur->Achternaam</td>
                    <td>$instructeur->Mobiel</td>
                    <td>$instructeur->Datum_in_Dienst</td>
                    <td>$instructeur->Aantal_sterren</td>
                    <td>auto-icon</td>
                    </tr>";

                    $data = [
                        'title' => 'Instructeur in dienst',
                        'rows' => $rows
                    ];

                    $this->view('instructeur/overzichtinstructeur', $data);
        }
    }

    public function overzichtVoertuigen($Id)
    {
        $result = $this->instructeurModel->getGebruikteVoertuigen($Id);

        var_dump($result);
    }
}