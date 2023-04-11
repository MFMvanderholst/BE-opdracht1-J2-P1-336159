<?php

class InstructeurModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getInstructeurs_in_dienst()
    {
        $sql = 'SELECT  Id
                       ,Name
                FROM    Country';

        $this->db->query($sql);

        return $this->db->resultSet();        
    }

}