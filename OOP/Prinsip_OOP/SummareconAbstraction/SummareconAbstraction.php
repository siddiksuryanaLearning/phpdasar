<?php

class Summarecon extends ARumah
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
