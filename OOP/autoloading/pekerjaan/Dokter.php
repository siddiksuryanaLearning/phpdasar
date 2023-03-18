<?php
    class Dokter extends Pekerjaan{
        public function __construct($kerja){
            parent::__construct($kerja);
        }
        public function printWork(){
            return parent::printWork();
        }
    }  

?>