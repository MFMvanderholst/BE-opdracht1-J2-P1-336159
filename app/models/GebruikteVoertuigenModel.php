<?php 

class gebruikteVoertuigen
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getInstructeurVoertuig()
    {
        $sql ='SELECT tyvo.TypeVoertuig, voer.Type, voer.Kenteken, voer.Bouwjaar, voer.Brandstof, tyvo.Rijbewijscategorie 
        FROM voertuiginstructeur vtin
        INNER JOIN voertuig voer ON vtin.VoertuigId = voer.id
        INNER JOIN TypeVoertuig tyvo ON voer.TypeVoertuigId = tyvo.id
        WHERE InstructeurId = (SELECT id FROM instructeur WHERE id = 5)';

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}