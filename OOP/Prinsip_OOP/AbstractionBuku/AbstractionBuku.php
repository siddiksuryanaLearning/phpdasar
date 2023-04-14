<?php

abstract class Buku
{

    public $judul, $terbitan;

    public function __construct(
        $judul = "tidak ditemukan",
        $terbitan = "tidak ditemukan"
    ) {
        $this->judul = $judul;
        $this->terbitan = $terbitan;
    }

    abstract public function setJudul($judul): string;
    abstract public function setTerbitan($terbitan): string;


    public function getJudul()
    {
        return $this->judul;
    }

    public function getTerbitan()
    {
        return $this->terbitan;
    }
}

class Pendidikan extends Buku
{
    public function setJudul($judul): string
    {
        return $this->judul = $judul;
    }
    public function setTerbitan($terbitan): string
    {
        return $this->terbitan = $terbitan;
    }
}
class Sport extends Buku
{
    public function setJudul($judul): string
    {
        return $this->judul = $judul;
    }
    public function setTerbitan($terbitan): string
    {
        return $this->terbitan = $terbitan;
    }
}

$pendidikan = new Pendidikan("PKN", "Madani");
$sport = new Sport("Otomotif", "AutoOtto");

echo $pendidikan->getJudul();
echo $pendidikan->getTerbitan();
echo "<br>";
echo $sport->getJudul();
echo $sport->getTerbitan();
