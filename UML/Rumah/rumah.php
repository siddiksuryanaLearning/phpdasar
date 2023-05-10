<?php
class Rumah
{
    public $pemilik, $blok, $summarecon;
    public $payment;
    public function __construct(
        $pemilik = "tidak ditemukan",
        $blok = "tidak ditemukan",
        $summarecon = "tidak ditemukan",
        $payment = "tidak ditemukan"
    ) {
        $this->pemilik = $pemilik;
        $this->blok = $blok;
        $this->summarecon = $summarecon;
        $this->payment = $payment;
    }
    public function setPemilik($pemilik)
    {
        $this->pemilik = $pemilik;
    }
    public function getPemilik()
    {
        return $this->pemilik;
    }
    public function setBlok($blok)
    {
        $this->blok = $blok;
    }
    public function getBlok()
    {
        return $this->blok;
    }
    public function setSummarecon($summarecon)
    {
        $this->summarecon = $summarecon;
    }
    public function getSummarecon()
    {
        return $this->summarecon;
    }
}
