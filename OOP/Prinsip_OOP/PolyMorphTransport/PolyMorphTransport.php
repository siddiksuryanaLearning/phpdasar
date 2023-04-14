<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


class Transport
{
    public $jenis;
    private $bahanBakar;

    public function __construct(
        $jenis = "tidak ditemukan",
        $bahanBakar = "tidak ditemukan"
    ) {
        $this->jenis = $jenis;
        $this->bahanBakar = $bahanBakar;
    }

    public function setJenis($jenis)
    {
        $this->jenis = $jenis;
    }

    public function getJenis()
    {
        return $this->jenis;
    }

    public function setBahanBakar($bahanBakar)
    {
        $this->bahanBakar = $bahanBakar;
    }

    public function getBahanBakar()
    {
        return $this->bahanBakar;
    }
}

class Brio extends Transport
{
    protected $praSarana;

    public function setPrasarana($praSarana)
    {
        $this->praSarana = $praSarana;
    }

    public function getPrasarana()
    {
        return $this->praSarana;
    }
}

class Su_27 extends Transport
{
    protected $praSarana;

    public function setPrasarana($praSarana)
    {
        $this->praSarana = $praSarana;
    }
    public function getPrasarana()
    {
        return $this->praSarana;
    }
}

$Brio = new Brio;
$Su_27 = new Su_27;

$Brio->setJenis("Darat");
$Brio->setBahanBakar("Mobil");
$Brio->setPrasarana("Jalan atau Tol");

$Su_27->setJenis("Udara");
$Su_27->setBahanBakar("Pesawat");
$Su_27->setPrasarana("Bandara");


echo $Brio->getJenis();
echo $Brio->getBahanBakar();
echo $Brio->getPrasarana();
echo "<br>";
echo $Su_27->getJenis();
echo $Su_27->getBahanBakar();
echo $Su_27->getPrasarana();
