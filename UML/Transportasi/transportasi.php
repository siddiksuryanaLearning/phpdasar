<?php
require_once('jenis.php');
class Transportasi extends Jenis
{
    public $list_jenis = array();
    public $sarana;
    public function __construct(
        $list_jenis = "tidak ditemukan",
        $sarana = "tidak ditemukan",
    ) {
        $this->list_jenis = $list_jenis;
        $this->sarana = $sarana;
    }

    public function setListJenis($list_jenis)
    {
        $this->list_jenis = $list_jenis;
    }
    public function getListJenis()
    {
        return $this->list_jenis;
    }
    public function setSarana($sarana)
    {
        $this->sarana = $sarana;
    }
    public function getSarana()
    {
        return $this->sarana;
    }
}
