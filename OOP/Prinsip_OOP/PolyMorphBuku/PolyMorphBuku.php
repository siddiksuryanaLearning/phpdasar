<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class Book
{
    public $penulis, $judul;
    private $halaman;

    public function __construct(
        $penulis = "tidak ditemukan",
        $judul = "tidak ditemukan",
        $halaman = "tidak ditemukan"
    ) {
        $this->penulis = $penulis;
        $this->judul = $judul;
        $this->halaman = $halaman;
    }

    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }

    public function setJudul($penulis)
    {
        $this->penulis = $penulis;
    }

    public function setHalaman($penulis)
    {
        $this->penulis = $penulis;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }
    public function getJudul()
    {
        return $this->judul;
    }
    public function getHalaman()
    {
        return $this->halaman;
    }
}


class J_K_Rowling extends Book
{
    private $discount;

    public function setDiscount($discount)
    {
        return $this->discount = $discount;
    }

    public function getDiscount()
    {
        return $this->discount;
    }
}

class Asma_Nadia extends Book
{
    private $discount;

    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

    public function getDiscount()
    {
        return $this->discount;
    }
}

$J_K_Rowling = new J_K_Rowling("", "Harry Potter", "300 Halaman");
$Asma_Nadia = new Asma_Nadia("", "Assalamuaikum Paris", "340 Halaman");

$J_K_Rowling->setDiscount("10%");
$Asma_Nadia->setDiscount("20%");

echo $J_K_Rowling->getJudul();
echo $J_K_Rowling->getHalaman();
echo $J_K_Rowling->getDiscount();
echo "<br>";
echo $Asma_Nadia->getJudul();
echo $Asma_Nadia->getHalaman();
echo $Asma_Nadia->getDiscount();


// $J_K_Rowling 
// $J_K_Rowling
// $J_K_Rowling