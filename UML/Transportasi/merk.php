<?php
class Merk
{
    public $merk, $nama, $tahun, $warna;
    public $list_jenis = array();
    public function __construct(
        $merk = "tidak ditemukan",
        $nama = "tidak ditemukan",
        $tahun = "tidak ditemukan",
        $warna = "tidak ditemukan",
        $list_jenis = []
    ) {
        $this->merk = $merk;
        $this->nama = $nama;
        $this->tahun = $tahun;
        $this->warna = $warna;
        $this->list_jenis = $list_jenis;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }
    public function getNama()
    {
        return $this->nama;
    }
    public function setMerk($merk)
    {
        $this->merk = $merk;
    }
    public function getMerk()
    {
        return $this->merk;
    }
    public function setTahun($tahun)
    {
        $this->tahun = $tahun;
    }
    public function getTahun()
    {
        return $this->tahun;
    }
    public function setWarna($warna)
    {
        $this->warna = $warna;
    }
    public function getWarna()
    {
        return $this->warna;
    }
    public function setListJenis($list_jenis)
    {
        $this->list_jenis = $list_jenis;
    }
    public function getListJenis()
    {
        return $this->list_jenis;
    }
}
