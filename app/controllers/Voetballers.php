<?php 
    class Voetballer extends Basecontroller
    {
        private $voetbalModel;

        public function __construct()
        {
            $this->voetbalModel = $this->model('VoetballersModel')
        }

        public function index()
        {
            $result = $this->voetbalModel->getVoetballers();

            var_dump($result);

            $rows = '';
            foreach

            $data = [
                'title' => 'Top 5 best betaalde voetballers ter wereld'
            ];
        }
    }