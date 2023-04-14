<?php

class Asma_Nadia extends PBook
{
    private $discount;

    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

    public function getDiscount()
    {
        return $this->discount;
    }
}
