<?php



abstract class Transportasi
{
    public $nama, $tahun, $warna;

    public function __construct(
        $nama = "tidak ditemukan",
        $tahun = "tidak ditemukan",
        $warna = "tidak ditemukan"
    ) {
        $this->nama = $nama;
        $this->tahun = $tahun;
        $this->warna = $warna;
    }

    abstract public function setNama($nama): string;
    abstract public function setTahun($tahun): string;
    abstract public function setWarna($warna): string;


    public function getNama()
    {
        return $this->nama;
    }


    public function getTahun()
    {
        return $this->tahun;
    }

    public function getWarna()
    {
        return $this->warna;
    }
}

class Udara extends Transportasi
{
    public function setNama($nama): string
    {
        return $this->nama = $nama;
    }

    public function setTahun($tahun): string
    {
        return $this->tahun = $tahun;
    }

    public function setWarna($warna): string
    {
        return $this->warna = $warna;
    }
}

class Air extends Transportasi
{
    public function setNama($nama): string
    {
        return $this->nama = $nama;
    }

    public function setTahun($tahun): string
    {
        return $this->tahun = $tahun;
    }

    public function setWarna($warna): string
    {
        return $this->warna = $warna;
    }
}

class Darat extends Transportasi
{
    public function setNama($nama): string
    {
        return $this->nama = $nama;
    }

    public function setTahun($tahun): string
    {
        return $this->tahun = $tahun;
    }

    public function setWarna($warna): string
    {
        return $this->warna = $warna;
    }
}

$udara = new Udara();
$air = new Air();
$darat = new Darat();

$udara->setNama("Pesawat");
$udara->setTahun("2010");
$udara->setWarna("Biru");

$air->setNama("Kapal Feri");
$air->setTahun("2012");
$air->setWarna("Coklat");

$darat->setNama("Mobil");
$darat->setTahun("2020");
$darat->setWarna("Merah");

echo $udara->getNama();
echo $udara->getTahun();
echo $udara->getWarna();
echo "<br>";
echo $air->getNama();
echo $air->getTahun();
echo $air->getWarna();
echo "<br>";
echo $darat->getNama();
echo $darat->getTahun();
echo $darat->getWarna();
echo "<br>";
