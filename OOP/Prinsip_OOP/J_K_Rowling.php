<?php
class J_K_Rowling extends PBook
{
    private $discount;

    public function setDiscount($discount)
    {
        return $this->discount = $discount;
    }

    public function getDiscount()
    {
        return $this->discount;
    }
}
