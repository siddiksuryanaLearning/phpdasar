<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('init.php');

//encapsulation Buku
echo "_____ Encapsulation Buku_____ ";
echo "<br>";
$buku = new EBuku("J.K.Rowling", "2018", "1000 pcs");
echo "Nama Penulis : " . $buku->getPenulis();
echo "<br>";
echo "Tahun : " . $buku->getTahun();
echo "<br>";
echo "Stock : " . $buku->getStock();
echo "<br>";
echo "<br>";


//abstraction Buku
echo "_____ Abstraction Buku_____ ";
echo "<br>";
$pendidikan = new Pendidikan("PKN", "Madani");
echo "Judul Buku :" . $pendidikan->getJudul();
echo "<br>";
echo "Terbitan : "  . $pendidikan->getTerbitan();
echo "<br>";
$sport = new Sport("Otomotif", "AutoOtto");
echo "<br>";
echo "Judul Buku : " . $sport->getJudul();
echo "<br>";
echo "Terbitan : "  . $sport->getTerbitan();
echo "<br>";
echo "<br>";

//PolyMorph Buku
echo "_____ PolyMorph Buku_____ ";
echo "<br>";
$J_K_Rowling = new J_K_Rowling("", "Harry Potter", "300 Halaman");
$J_K_Rowling->setDiscount("10%");
echo "Judul Buku : " . $J_K_Rowling->getJudul();
echo "<br>";
echo "Halaman : " . $J_K_Rowling->getHalaman();
echo "<br>";
echo "Discount : " . $J_K_Rowling->getDiscount();
echo "<br>";
echo "<br>";

$Asma_Nadia = new Asma_Nadia("", "Assalamuaikum Paris", "340 Halaman");
$Asma_Nadia->setDiscount("20%");
echo "Judul Buku : " . $Asma_Nadia->getJudul();
echo "<br>";
echo "Halaman : " . $Asma_Nadia->getHalaman();
echo "<br>";
echo "Discount : " . $Asma_Nadia->getDiscount();
echo "<br>";
echo "<br>";

//encapsulation Rumah
echo "_____ Encapsulation Rumah_____ ";
echo "<br>";
$Home = new ERumah("Bandung");
echo "Alamat : " . $Home->GetAlamat();
echo "<br>";
echo "<br>";

//abstraction Rumah 
echo "_____ Abstraction Rumah_____ ";
echo "<br>";
$GBI = new GBI();
$GBI->setPayment("KPR");
echo "Perumahan : GBI";
echo "<br>";
echo "Payment : " . $GBI->getPayment();
echo "<br>";
echo "<br>";
$Summarecon = new Summarecon();
echo "Perumahan : Summarecon";
echo "<br>";
$Summarecon->setPayment("Cash");
echo "Payment : " . $Summarecon->getPayment();
echo "<br>";
echo "<br>";


//PolyMorph Rumah
echo "_____ PolyMorph Rumah_____ ";
echo "<br>";
$nonSubsidi = new NonSubsidi();
$nonSubsidi->setAlamat("Jawa Timur");
$nonSubsidi->setType("B");
$nonSubsidi->setLuas("40 x 40 meter");
echo "Alamat : " . $nonSubsidi->getAlamat();
echo "<br>";
echo "Type : " . $nonSubsidi->getType();
echo "<br>";
echo "Luas : " . $nonSubsidi->getLuas();
echo "<br>";
echo "<br>";

$subsidi = new Subsidi();
$subsidi->setAlamat("Jawa Barat");
$subsidi->setType("A");
$subsidi->setLuas("20 x 20 meter");
echo "Alamat : " . $subsidi->getAlamat();
echo "<br>";
echo "Type : " . $subsidi->getType();
echo "<br>";
echo "Luas : " . $subsidi->getLuas();
echo "<br>";
echo "<br>";

//Encapsulation Tranpsortasi
echo "____ Encapsulation Transportasi ____";
echo "<br>";
$sepeda = new ETransportasi();
$sepeda->setJenis("Darat");
$sepeda->setSarana("Aspal");
echo "Jenis Kendaraan : " . $sepeda->getJenis();
echo "<br>";
echo "Type Kendaraan : " . $sepeda->getSarana();
echo "<br>";
echo "<br>";

//Abstraction Transportasi
echo "____ Abstraction Transportasi ____";
echo "<br>";

$udara = new Udara("Pesawat", "2010", "Blue");
echo "Nama Transportasi : " . $udara->getNama();
echo "<br>";
echo "Tahun : " . $udara->getTahun();
echo "<br>";
echo "Warna : " . $udara->getWarna();
echo "<br>";
echo "<br>";

$air = new Air("Kapal Feri", "2012", "Coklat");
echo "Nama Transportasi : " . $air->getNama();
echo "<br>";
echo "Tahun : " . $air->getTahun();
echo "<br>";
echo "Warna : " . $air->getWarna();
echo "<br>";
echo "<br>";


$darat = new Darat("Mobil", "2020", "Merah");
echo "Nama Transportasi : " . $darat->getNama();
echo "<br>";
echo "Tahun : " . $darat->getTahun();
echo "<br>";
echo "Warna : " . $darat->getWarna();
echo "<br>";
echo "<br>";

//PolyMorph Transportasi
echo "_____ PolyMorph Transportasi _____";
echo "<br>";
$Su_27 = new Su_27;
echo "Pesawat Su-17";
$Su_27->setJenis("Udara");
$Su_27->setBahanBakar("Solar");
$Su_27->setPrasarana("Bandara");
echo "<br>";
echo "Jenis : " . $Su_27->getJenis();
echo "<br>";
echo "Bahan Bakar : " . $Su_27->getBahanBakar();
echo "<br>";
echo "Prasarana : " . $Su_27->getPrasarana();
echo "<br>";
$Brio = new Brio;
$Brio->setJenis("Darat");
$Brio->setBahanBakar("Mobil");
$Brio->setPrasarana("Jalan atau Tol");
echo "<br>";
echo "Jenis : " . $Brio->getJenis();
echo "<br>";
echo "Bahan Bakar : " . $Brio->getBahanBakar();
echo "<br>";
echo "Prasarana : " . $Brio->getPrasarana();
