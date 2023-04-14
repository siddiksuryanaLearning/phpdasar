<?php

abstract class ARumah
{
    public $payment, $lokasi;

    public function __construct($payment = "cash", $lokasi = "indonesia")
    {
        $this->payment = $payment;
        $this->lokasi = $lokasi;
    }

    abstract public function setPayment($payment): string;
    abstract public function setLokasi($lokasi): string;

    public function getPayment()
    {
        return $this->payment;
    }

    public function getLokasi()
    {
        return $this->lokasi;
    }
}
