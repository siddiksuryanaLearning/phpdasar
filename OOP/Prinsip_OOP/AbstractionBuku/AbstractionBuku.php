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
