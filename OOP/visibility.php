<?php
    error_reporting(E_ALL);

    ini_set("display_errors", 1);

    class Konser{

        public $peserta, $artis, $kota;

        public $ticket;

        public function __construct($kota=NULL, $ticket=NULL, $artis=Null, $peserta = NULL){
            $this->kota = $kota;
            $this->ticket = $ticket;
            $this->artis = $artis;
            $this->peserta = $peserta;

        }

        public function jadwal(){
            return "Event Terdekat di Kota {$this->kota} peserta terbatas {$this->peserta}";
        }

       

    }

    class ArtisTambahan extends Konser{
        public $artisBaru;

        public function __construct($kota=NULL, $ticket=NULL, $artis=Null, $peserta = NULL, $artisBaru=NULL){
            parent::__construct($kota, $ticket, $artis, $peserta);
            $this->artisBaru = $artisBaru;
        }

        public function jadwal(){
            //Dengan kedatangna para artis (Value)
            return parent::jadwal() . " dengan kedatangan para artis {$this->artisBaru}, tiket 
            terjual {$this->ticket}";
        }

        // public function getTicket(){
        //     return "Tiket sudah ada";
        // }

         public function getTicket(){
            return "You Have ticket {$this->ticket}";
        }
    }

    class EventKota extends Konser{
        private $jakarta;

        private function __construct($jakarta=NULL, $kota=NULL, $ticket=NULL, $artis=Null, $peserta = NULL, 
        $artisBaru=NULL){
            $this->jakarta = $jakarta;
            parent::__construct($kota, $ticket, $artis, $peserta);
        }

        private function eventJakarta(){
            return "Akan segera hadir di kota {$this->jakarta}";
        }

    }

$event = new Konser("Bandung", 10, "BCL", "1000 orang", "Ariel Noah");
echo $event->jadwal("Bandung");
echo "<br>";
$newArtist = new ArtisTambahan("Jakarta", 10, "BCL", "1000 orang", "Ariel Noah");
echo "Perwarisan : " . $newArtist->jadwal();
echo "<br>";
echo $newArtist->getTicket();
echo "<br>";
$eventJakarta = new EventKota("Jakarta");
echo "Event Jakarta : {$eventJakarta->eventJakarta()}";




?>