<?php
class Kategori
{
    public $kategori;
    public $list_buku = array();
    public function __construct(
        $kategori = "tidak ditemukan",
        $list_buku = NULL
    ) {
        $this->kategori = $kategori;
        $this->list_buku = $list_buku;
    }
    public function setKategori($kategori)
    {
        $this->kategori = $kategori;
    }
    public function getKategori()
    {
        return $this->kategori;
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
