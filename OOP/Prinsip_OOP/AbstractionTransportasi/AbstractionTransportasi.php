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
