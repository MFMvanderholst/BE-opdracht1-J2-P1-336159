<?php

class Country extends BaseController
{
    private $countryModel;

    public function __construct()
    {
        $this->countryModel = $this->model('CountryModel');
    }
    
    public function index()
    {
        $data = [
            'title' => 'Overzicht landen van de wereld'
        ];

        $this->view('country/index', $data);
    }

    public function getCountries($id1 = NULL, $id2 = NULL) 
    {
        echo 'We zijn binnen de method getCountries()';
        echo 'De meegegeven parameters zijn:' . $id1 . ' en ' . $id2;

        $data = [
            'title' => 'Overzicht landen van Europa', 
            'eersteParameter' => $id1,
            'tweedeParameter' => $id2
        ];

        $this->view('Country/getCountries', $data);
    }
}