<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    require"Abstract-class.php";

    // class EventFile extends Konser{
    //     public $kotaTambahan;

    //     public function __construct($kota=NULL, $kotaTambahan=NULL){
    //         parent::__construct($kota);
    //         $this->kotaTambahan = $kotaTambahan;
    //     }
        
    //     public function addKota(){
    //         return "Konser Tambahan {$this->kota} dan {$this->kotaTambahan}";
    //     }

    // }

    // $eventTambahan = new EventFile("Bandung", "Jakarta");
    // echo $eventTambahan->kotaTambahan = "Jawa";
    // echo $eventTambahan->addKota();

    class TambahinKonser {
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

$event = new Konser("Bandung", 10, "Ariel Noah", 100);
$eventKota = new EventKota("Jakarta", 2, "Perterpan", 200);
$eventTambahKonser = new TambahinKonser();
$eventTambahKonser->addKonser($event);
var_dump($event);
$eventTambahKonser->addKonser($eventKota);
echo $eventTambahKonser->printKonser();


?>
