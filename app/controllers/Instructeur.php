<?php

class Instructeur extends BaseController
{
    private $instructeurModel;

    public function __construct()
    {
        $this->instructeurModel = $this->model('CountryModel');
    }
    
    public function index()
    {
        $data = [
            'title' => 'Overzicht Instructeurs in dienst'
        ];

        $this->view('country/index', $data);
    }

    public function getInstructeur($id1 = NULL, $id2 = NULL) 
    {
        $result = $this->instructeurModel->getInstructeurs();
        $rows = "";
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
        }
    }
}