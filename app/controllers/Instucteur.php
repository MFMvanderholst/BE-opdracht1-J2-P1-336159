<?php

class Instructeur extends BaseController
{
    private $InstructeurModel;

    public function __construct()
    {
        $this->InstructeurModel = $this->model('InstructeurModel');
    }

    public function index()
    {
        $data = [
            'title' => 'Overzicht van Instructeurs'
        ];

        $this->view('instructeur/index', $data);
    }


    public function getInstructeurs_in_dienst($id1=NULL, $id2=NULL) 
    {
        $instructeurs = $this->InstructeurModel->getInstructeurs_in_dienst();

        $tableRows = "";
        foreach ($instructeurs as $value) {
            $tableRows .= "<tr>
                                <td>$value->Id</td>
                                <td>$value->Name</td>
                           </tr>";
        }

        $data = [
            'title' => 'Overzicht van Instructeurs',
            'tableRows' => $tableRows
        ];

        $this->view('instructeur/Instructeurs_in_dienst', $data);
    }
}