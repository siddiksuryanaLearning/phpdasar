<?php
       error_reporting(E_ALL);

    ini_set("display_errors", 1);

    require_once "init.php";
    class Pekerjaan {
        public $kerja;
        public function printWork(){
            return "Pekerjaan saya adalah {$this->kerja}";
        }
        public function __construct($kerja){
            $this->kerja = $kerja;
        }
    }
    
    $guru = new Guru("Guru");
    $dokter = new Dokter("Dokter");
    $pilot = new Pilot("Pilot");
    $data = array($guru, $dokter, $pilot);
    var_dump($data);
    foreach($data as $print){
            echo "{$print->printWork()}<br>";

    }

  
    

?>