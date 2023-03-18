<?php
    error_reporting(E_ALL);

    ini_set("display_errors", 1);

    class Konser1{

        public $number = 1;

        public function printString(){
            return "Number : " . $this->number++;
        }

        public $classMana = __CLASS__;
        
    }

    class Konser{

        public $peserta, $artis, $kota, $ticket;

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
        
        public function getTicket(){
            return "You Have ticket {$this->ticket}";
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
        public $daftarEvent = array();
        public $jakarta;

        public function __construct($kota=NULL, $ticket=NULL, $artis=Null, $peserta = NULL, $artisBaru=NULL, $jakarta=NULL){
            $this->jakarta = $jakarta;
            parent::__construct($kota, $ticket, $artis, $peserta);
        }

        public function eventJakarta(){
            return "Akan segera hadir di kota {$this->jakarta}";
        }


        public function getTicket(){
            return "You Have ticket {$this->ticket}";
        }

        public function tambahKonser( Konser $daftar ){
            $this->daftarEvent[] = $daftar;
        } 

        public function printEvent(){
            $str = "DAFTAR PRODUK : <br>";

            foreach($this->daftarEvent as $p){
                $p = "-{$p->getTicket()}";
            }
        }

    }

    class TambahKonser extends Konser {
        //variable Tampung
        public $konserLagi = array();


        public function addKonser( Konser $produk){
            $this->konserLagi[] = $produk;
        }

        public function printKonser(){
            $str = "DAFTAR PRODUK : <br>";

            foreach($this->konserLagi as $p){
                $str .= "-{$p->getTicket()} <br>";
            }

            return $str;
        }
    }

$event = new Konser1("Bandung", 10, "Ariel Noah", 100);
$eventKota = new EventKota("Jakarta", 2, "Perterpan", 200);
$eventTambahKonser = new TambahKonser();
$eventTambahKonser->addKonser($event);
$eventTambahKonser->addKonser($eventKota);
echo $eventTambahKonser->printKonser();




?>

   
   