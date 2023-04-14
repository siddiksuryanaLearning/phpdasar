<?php

//encapsulation
class ERumah
{
    public $alamat;
    private $sertifikat;
    private $pajak;

    public function __construct($alamat = "tidak ditemukan", $sertifikat = "tidak ditemukan", $pajak = "tidak ditemukan")
    {
        $this->alamat = $alamat;
        $this->sertifikat = $sertifikat;
        $this->pajak = $pajak;
    }

    public function GetAlamat()
    {
        return $this->alamat;
    }
    public function SetAlamat($alamat)
    {
        $this->alamat = $alamat;
    }
    public function GetSertifikat()
    {
        return $this->sertifikat;
    }
    public function SetSertifikat($sertifikat)
    {
        $this->sertifikat = $sertifikat;
    }
    public function GetPajak()
    {
        return $this->pajak;
    }
    public function SetPajak($pajak)
    {
        $this->pajak = $pajak;
    }
}
