<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


class Transport
{
    public $jenis;
    private $bahanBakar;

    public function __construct(
        $jenis = "tidak ditemukan",
        $bahanBakar = "tidak ditemukan"
    ) {
        $this->jenis = $jenis;
        $this->bahanBakar = $bahanBakar;
    }

    public function setJenis($jenis)
    {
        $this->jenis = $jenis;
    }

    public function getJenis()
    {
        return $this->jenis;
    }

    public function setBahanBakar($bahanBakar)
    {
        $this->bahanBakar = $bahanBakar;
    }

    public function getBahanBakar()
    {
        return $this->bahanBakar;
    }
}
