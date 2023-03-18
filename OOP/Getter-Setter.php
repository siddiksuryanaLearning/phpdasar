<?php
    error_reporting(E_ALL);

    ini_set("display_errors", 1);

    class Konser{

        private $peserta, $artis, $kota, $ticket;

        public function __construct($kota=NULL, $ticket=NULL, $artis=Null, $peserta = NULL){
            $this->kota = $kota;
            $this->ticket = $ticket;
            $this->artis = $artis;
            $this->peserta = $peserta;

        }

        public function jadwal(){
            return "Event Terdekat di Kota {$this->kota} peserta terbatas {$this->peserta}";
        }

        public function setKota($kota){
            if (!is_string($kota)){
                throw new Exception("Judual Harus String");
            }
            return $this->kota = $kota;
        }

        public function getKota(){
            return $this->kota;
        }

        public function setTicket($ticket){
            return $this->ticket = $ticket;
        }
        
        public function getTicket(){
            return $this->ticket;
        }

        public function setArtis($artis){
            return $this->artis = $artis;
        }

        public function getArtis(){
            return $this->artis;
        }

        public function setPeserta($peserta){
            return $this->peserta = $peserta;
        }

        public function getPeserta(){
            return $this->peserta;
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

$event = new Konser("Bandung", 10, "Ariel Noah", 100);
echo $event->getKota();
echo $event->getTicket();
echo $event->getArtis();
echo $event->getPeserta();
echo $event->setKota(1);





?>