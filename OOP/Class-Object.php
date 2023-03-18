<?php
    class Discont{
        public $harga, $potongan, $hargaJual;
        public function countDiscon(){
            return $this->harga * $this->potongan;
        }
    }

    $baju = new Discont();
    $baju->harga = 10;
    $baju->potongan = 0.1;
    $baju->hargaJual = $baju->harga - $baju->harga * $baju->potongan;

    // echo "Harga Baju : $baju->hargaJual";

    // echo $baju->countDiscon();
    echo "$baju->potongan";
?>

