<?php
error_reporting(E_ALL);

    ini_set("display_errors", 1);
class UT{
    //property
    public $prodi, $daerah, $dosen, $mahasiswa;

    //method
    public function UT_Daerah(){
        return "UT $this->daerah memiliki ribuan $this->mahasiswa dengan 8 $this->prodi dan 10 $this->dosen";
    }

    //construct
    public function __construct($prodi=NULL, $daerah="a", $dosen="dosen", $mahasiswa="mahasiswa"){
        $this->prodi = $prodi;
        $this->daerah = $daerah;
        $this->dosen = $dosen;
        $this->mahasiswa = $mahasiswa;
    }
    
    //construct
    // public function __construct($p)

}

class Seminar extends UT{
    public $tanggal = "10 Oktober Nanti";
    public function infoSeminar(){
        return parent::UT_Daerah() . " {$this->tanggal}";
    }
}



$UT_Bandung = new UT();
$seminar = new Seminar("Sistem Informasi", "Bandung");
$ujian = new Ujian("Sistem Informasi", "Bandung", "M.Abbduh", "junnior Mahasiswa", "9 April");
echo $UT_Bandung->UT_Daerah();
echo "<br>";
echo $seminar->infoSeminar();
?>