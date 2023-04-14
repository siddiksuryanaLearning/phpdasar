<?php
class Sport extends Buku
{
    public function setJudul($judul): string
    {
        return $this->judul = $judul;
    }
    public function setTerbitan($terbitan): string
    {
        return $this->terbitan = $terbitan;
    }
}
