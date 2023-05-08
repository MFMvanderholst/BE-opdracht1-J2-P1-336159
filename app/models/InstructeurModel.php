<?php

class instructeurModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getInstructeur()
    {
        $sql = 'SELECT  Id
                       ,Voornaam
                       ,Tussenvoegsel
                       ,Achternaam
                       ,Mobiel
                       ,DatumInDienst
                       ,Aantal_Sterren
                FROM    Country
                ORDER BY AantalSterren DESC';

        $this->db->query($sql);

        return $this->db->resultSet();        
    }

    

}