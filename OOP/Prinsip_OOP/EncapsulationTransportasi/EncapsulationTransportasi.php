<?php

class Transportasi
{
    public $jenis;
    protected $sarana;

    public function __construct(
        $jenis = "tidak ditemukan",
        $sarana = "tidak ditemukan"
    ) {
        $this->jenis = $jenis;
        $this->sarana = $sarana;
    }

    public function getJenis()
    {
        return $this->jenis;
    }

    public function setJenis($jenis)
    {
        $this->jenis = $jenis;
    }

    public function getSarana()
    {
        return $this->sarana;
    }

    public function setSarana($sarana)
    {
        $this->sarana = $sarana;
    }
}

$sepeda = new Transportasi();
$sepeda->setJenis("Darat");
$sepeda->setSarana("Aspal");

echo "Jenis Kendaraan : " . $sepeda->getJenis();
echo "<br>";
echo "Type Kendaraan : " . $sepeda->getSarana();
