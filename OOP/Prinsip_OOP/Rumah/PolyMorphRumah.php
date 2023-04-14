<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
class Home
{
    public $alamat;
    private $type;

    public function __construct(
        $alamat = "tidak ditemukan",
        $type = "tidak ditemukan",
    ) {
        $this->alamat = $alamat;
        $this->type = $type;
    }

    public function getAlamat()
    {
        return $this->alamat;
    }

    public function setAlamat($alamat)
    {
        $this->alamat = $alamat;
    }
    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }
}
