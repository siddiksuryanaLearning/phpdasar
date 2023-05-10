<?php
class Jenis
{
    public $list_transportasi = array();
    public $merk;
    public function __construct(
        $list_transportasi = "tidak ditemukan",
        $merk = "tidak ditemukan",
    ) {
        $this->list_transportasi = $list_transportasi;
        $this->merk = $merk;
    }

    public function setListTransportasi($list_transportasi)
    {
        $this->list_transportasi = $list_transportasi;
    }
    public function getListTransportasi()
    {
        return $this->list_transportasi;
    }
    public function setMerk($merk)
    {
        $this->merk = $merk;
    }
    public function getMerk()
    {
        return $this->merk;
    }
}
