<?php
      error_reporting(E_ALL);

    ini_set("display_errors", 1);
    class Discont{

        //property
        public $harga, $potongan, $hargaJual;

        //method
        public function countDiscon(){
            return $this->harga * $this->potongan;
        }

        //constructor
        public function __construct($harga=10000, $potongan=10, $hargaJual=100){
            $this->harga = $harga;
            $this->potongan = $potongan;
            $this->hargaJual = $hargaJual;
        }
    }

    $baju = new Discont(100, 10, 90);


    class Animals{

        public $nama, $jenis, $pemakan, $kaki;
        public function melata(){
            return "Hewan $this->nama termasuk hewan $this->jenis dan pemakan $this->pemakan yang $this->kaki";
            //  termasuk jenis hewan $this->jenis yang $this->pemakan tumbhan dan cenderung tidak memiliki $this->kaki";
        }
        public function __construct($nama, $jenis="w", $pemakan="g", $kaki="Tidak berkaki"){
            $this->nama = $nama;
            $this->jenis = $jenis;
            $this->pemakan = $pemakan;
            $this->kaki = $kaki;
        }
    }

    class TempatAnimals{
        public function tempat(Animals $animal){
            $str = "Hewan $animal->nama bertempat di Hutan, dan termasuk hewan $animal->jenis";
            return $str;
        }
    }

    $snake = new Animals("Ular","Melata","Tumbuhan","Tidak mempunyai Kaki");
    $singa = new Animals("Singa");

    //mencetak info tempat Hewan
    $infoHewan = new TempatAnimals();
    echo $infoHewan->tempat($snake);
    echo "<br>";
    echo $snake->melata();
    echo "<br>";
    echo $singa->melata();



?>

