<?php
require_once('buku.php');
class Penulis extends Buku
{
    public $nama, $umur;
    public $list_buku = array();
    public function __construct(
        $nama = "tidak ditemukan",
        $umur = "tidak ditemukan",
        $list_buku = NULL
    ) {
        $this->nama = $nama;
        $this->umur = $umur;
        $this->list_buku = $list_buku;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }
    public function getNama()
    {
        return $this->nama;
    }
    public function setUmur($umur)
    {
        $this->umur = $umur;
    }
    public function getUmur()
    {
        return $this->umur;
    }
    public function setListBuku($list_buku)
    {
        $this->list_buku = $list_buku;
    }
    public function getListBuku()
    {
        return $this->list_buku;
    }
}
