<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    interface Mahasiswa {
        public function prodi();
    }

    class SistemInformasi implements Mahasiswa {
        public function prodi(){
            echo "Sistem Informasi";
        }
    }

    class Bisnis implements Mahasiswa {
        public function prodi(){
            echo "Bisnis";
        }
    }

    class Komunikasi implements Mahasiswa {
        public function prodi(){
            echo "Komunikasi";
        }
    }

    class Akutansi implements Mahasiswa {
        public function prodi(){
            echo "Akutansi";
        }
    }

    $sistemInformasi = new SistemInformasi();
    $sistemInformasi->prodi();
    echo "<br>";
    $bisnis = new Bisnis();
    $bisnis->prodi();
    echo "<br>";
    $komunikasi = new Komunikasi();
    $komunikasi->prodi();
    echo "<br>";
    $akutansi = new Akutansi();
    $akutansi->prodi();
    echo "<br>";


?>