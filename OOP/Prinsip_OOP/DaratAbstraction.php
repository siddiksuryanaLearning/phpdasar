<?php

class Darat extends Transportasi
{
    public function setNama($nama): string
    {
        return $this->nama = $nama;
    }

    public function setTahun($tahun): string
    {
        return $this->tahun = $tahun;
    }

    public function setWarna($warna): string
    {
        return $this->warna = $warna;
    }
}
