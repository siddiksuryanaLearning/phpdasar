<?php
require_once('rumah.php');
class Payment extends Rumah
{
    public $rumah;
    public $payment;
    public function __construct(
        $rumah = "tidak ditemukan",
        $payment = "tidak ditemukan"
    ) {
        $this->rumah = $rumah;
        $this->payment = $payment;
    }
    public function setRumah($rumah)
    {
        $this->rumah = $rumah;
    }
    public function getRumah()
    {
        return $this->rumah;
    }
    public function setPayment($payment)
    {
        $this->payment = $payment;
    }
    public function getPayment()
    {
        return $this->payment;
    }
}
