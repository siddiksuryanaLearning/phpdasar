<?php namespace Namespaces\pekerjaan;

    class Guru extends Pekerjaan{

        //  public function __construct($kerja){
        //     parent::__construct($kerja);
        // }
        // public function printWork(){
        //     return parent::printWork();
        // }
         public function __construct(){
            echo "ini adalah class dari " . __CLASS__;
        }
    }  

?>