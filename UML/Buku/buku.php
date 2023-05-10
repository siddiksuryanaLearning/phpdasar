<?php
require_once('penulis.php');
class Buku
{
    public $judul, $tahun;
    public $list_penulis = array();
    public $list_kategori = array();
    public function __construct(
        $judul = "tidak ditemukan",
        $tahun = "tidak ditemukan",
        $list_penulis = NULL,
        $list_kategori = NULL
    ) {
        $this->judul = $judul;
        $this->tahun = $tahun;
        $this->list_penulis = $list_penulis;
        $this->list_kategori = $list_kategori;
    }

    public function setJudul($judul)
    {
        $this->judul = $judul;
    }
    public function getJudul()
    {
        return $this->judul;
    }
    public function setTahun($tahun)
    {
        $this->tahun = $tahun;
    }
    public function getTahun()
    {
        return $this->tahun;
    }
    public function setListPenulis($list_penulis)
    {
        $this->list_penulis = $list_penulis;
    }
    public function getListPenulis()
    {
        return $this->list_penulis;
    }
    public function setListKategori($list_kategori)
    {
        $this->list_kategori = $list_kategori;
    }
    public function getListKategori()
    {
        return $this->list_kategori;
    }
}
