<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);

class EBuku
{
    public $penulis, $tahun;
    private $stock;

    public function __construct(
        $penulis = "tidak ditemukan",
        $tahun = "tidak ditemukan",
        $stock = "tidak ditemukan"
    ) {
        $this->penulis = $penulis;
        $this->tahun = $tahun;
        $this->stock = $stock;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }

    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }


    public function getTahun()
    {
        return $this->tahun;
    }

    public function setTahun($tahun)
    {
        $this->tahun = $tahun;
    }
    public function getStock()
    {
        return $this->stock;
    }
    public function setStock($stock)
    {
        $this->stock = $stock;
    }
}