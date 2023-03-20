
<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
//buat implemantasi merk, realis, os

    Interface setHP{
        public function Merk($merk);
        public function Realis($realis);
        public function Os($os);
    }

    class Samsung implements setHP{
        public $merk, $realis, $os;
        public function Merk($merk){
            echo "Merk : {$this->merk}";
        }

        public function Realis($realis){
            echo "Realis : {$this->realis}";
        }

        public function Os($os){
            echo "OS : {$this->os}";
        }

    }

      class Xiaomi implements setHP{
        public function Merk($merk){
            echo "Merk : {$merk}";
        }

        public function Realis($realis){
            echo "Realis : {$realis}";
        }

        public function Os($os){
            echo "OS : {$os}";
        }

    }

    $samsung = new Samsung();
    $dataSamsung = array(
                        $samsung->Merk("Samsung A04"), 
                        $samsung->Realis("2022"),
                        $samsung->Os("Android 10")
                    );
    var_dump($dataSamsung);
    $xiaomi = new Xiaomi();
    $dataXiaomi = array(
                        $xiaomi->Merk("MI4"), 
                        $xiaomi->Realis("2021"),
                        $xiaomi->Os("Android 11")
                    );
    $data = array($dataSamsung, $dataXiaomi);
    var_dump($data);


    foreach($data as $data1){
        echo "{$data1}<br>";
    }

?>