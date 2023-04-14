<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class PBook
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
