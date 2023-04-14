<?php
class Brio extends Transport
{
    protected $praSarana;

    public function setPrasarana($praSarana)
    {
        $this->praSarana = $praSarana;
    }

    public function getPrasarana()
    {
        return $this->praSarana;
    }
}
