<?php
class Summarecon
{
    public $alamat, $developer;
    public $listRumah = array();
    private $IMB;
    public function __construct(
        $alamat = "tidak ditemukan",
        $developer = "tidak ditemukan",
        $listRumah = "tidak ditemukan",
        $IMB = "tidak ditemukan"
    ) {
        $this->alamat = $alamat;
        $this->developer = $developer;
        $this->listRumah = $listRumah;
        $this->IMB = $IMB;
    }
    public function setAlamat($alamat)
    {
        $this->alamat = $alamat;
    }
    public function getAlamat()
    {
        return $this->alamat;
    }
    public function setDeveloper($developer)
    {
        $this->developer = $developer;
    }
    public function getDeveloper()
    {
        return $this->developer;
    }
    public function setListRumah($listRumah)
    {
        $this->listRumah = $listRumah;
    }
    public function getListRumah()
    {
        return $this->listRumah;
    }
    public function setIMB($IMB)
    {
        $this->IMB = $IMB;
    }
    public function getIMB()
    {
        return $this->IMB;
    }
}
