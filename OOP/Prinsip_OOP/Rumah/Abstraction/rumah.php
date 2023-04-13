<?php

abstract class Rumah
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

class Summarecon extends Rumah
{
    public function setPayment($payment): string
    {
        return $this->payment = $payment;
    }

    public function setLokasi($lokasi): string
    {
        return $this->lokasi = $lokasi;
    }
}

class GBI extends Rumah
{
    public function setPayment($payment): string
    {
        return $this->payment = $payment;
    }

    public function setLokasi($lokasi): string
    {
        return $this->lokasi = $lokasi;
    }
}

$GBI = new GBI();
$Summarecon = new Summarecon();

$GBI->setPayment("KPR");
$Summarecon->setPayment("Cash");
echo "Payment : " . $GBI->getPayment();
echo "<br>";
echo "Payment : " . $Summarecon->getPayment();
