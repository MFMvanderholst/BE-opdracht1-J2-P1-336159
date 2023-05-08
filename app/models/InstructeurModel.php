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
        $sql = 'SELECT  *
                FROM    instructeur
                ORDER BY AantalSterren DESC';

        $this->db->query($sql);

        return $this->db->resultSet();        
    }

    

}