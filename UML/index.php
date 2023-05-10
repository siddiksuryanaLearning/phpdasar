<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('init.php');

//inisiasi class Rumah, Summarecon dan Payment
$rumah1 = new Rumah("Suryana", "A-10", "Summarecon Gedebage", "Cash");
$rumah2 = new Rumah("Sutrisno", "A-1", "Summarecon Gedebage", "KPR");
$Summarecon = new Summarecon();
$payment3 = new Payment();
$payment3->setPayment("Cash");
$payment3->setPemilik("Dadang");
$payment3->setBlok("A-2");
$payment3->setSummaRecon("Summarecon Gedebage");
$rumah3 = new Rumah(
    $payment3->getPemilik(),
    $payment3->getBlok(),
    $payment3->getSummarecon(),
    $payment3->getPayment()
);

//menampung array
$objRumah = array($rumah1, $rumah2, $rumah3);

//convert objek to array
$arrRumah = json_decode(json_encode($objRumah), true);

//setListRumah di class Summarecon
$Summarecon->setListRumah($arrRumah);

//tampilkan data dengan getListRumah
echo PHP_EOL;
echo "===== List Rumah dari Class Summarecon =====" . PHP_EOL;
foreach ($Summarecon->getListRumah() as $array) {
    foreach ($array as $key => $value) {
        static $i = 1;
        if ($key == "pemilik") {
            echo $i++ . "." . $key . ": " . $value . PHP_EOL;
            if ($value == "KPR" || $value == "Cash") {
                echo PHP_EOL;
            }
        } else {
            echo $key . ": " . $value . PHP_EOL;
            if ($value == "KPR" || $value == "Cash") {
                echo PHP_EOL;
            }
        }
    }
}

//inisiasi Penulis
$J_K_Rowling = new Penulis("J.K.Rowling", "57 Tahun");
$Tere_Liye = new Penulis("Tere Liye", "43 Tahun");
$William_Strunk_Jr = new Penulis("William Strunk Jr.", "RIP");
$E_B_White = new Penulis("E_B_White", "RIP");

// setListBuku
$J_K_Rowling->setListBuku([
    "Harry Potter Seriers",
    "Quidditch: Through The Ages"
]);
$Tere_Liye->setListBuku([
    "Hafalan Shalat Delisa",
    "Negeri 5 Menara",
    "Rindu",
    "Ayahku (Bukan) Pembohong",
    "Daun yang Jatuh Tak Pernah Membenci Angin",
    "Pulang",
    "Kau, Aku & Sepucuk Angpau Merah",
    "Bumi",
    "Sepotong Hati yang Baru",
    "Manusia Harimau"
]);

//convert object ke array
$objPenulis = array($Tere_Liye, $J_K_Rowling);
$arrPenulis = json_decode(json_encode($objPenulis), true);

//set list_penulis di class buku
$Buku = new Buku();
$Buku->setListPenulis($arrPenulis);
$dataPenulis = $Buku->getListPenulis();

// menampikan data buku dari class penulis
echo PHP_EOL;
echo "===== List Buku dari Class Penulis =====" . PHP_EOL;
static $numberPenulis = 1;
foreach ($dataPenulis as $data) {
    echo $numberPenulis++ . "." . "Penulis : " . $data["nama"] . PHP_EOL;
    echo "Umur : " . $data["umur"] . PHP_EOL;
    echo "List Buku : " . PHP_EOL;
    foreach ($data["list_buku"] as $list) {
        echo "-" . $list . PHP_EOL;
    }
    echo PHP_EOL;
}

// inisiasi Kategori
$Fiktif = new Kategori("Fiktif");
$Fiktif->setListBuku([
    $J_K_Rowling->getListBuku(),
    $Tere_Liye->getListBuku(),
]);

$Novel = new Kategori("Novel");
$Novel->setListBuku([
    $J_K_Rowling->getListBuku(),
    $Tere_Liye->getListBuku(),
]);

//convert object ke array
$objKategori = array($Fiktif, $Novel);
$arrKategori = json_decode(json_encode($objKategori), true);

//set List Buku di class Kategori
$kategori = new Kategori();
$kategori->setListBuku($arrKategori);

// menampikan list_buku dari class kategori
echo PHP_EOL;
echo "===== List Buku dari Class Kategori =====" . PHP_EOL;
foreach ($kategori->getListBuku() as $data) {
    echo "Kategori : " . $data["kategori"] . PHP_EOL;
    echo "List Buku : " . PHP_EOL;
    foreach ($data["list_buku"] as $arrListBuku) {
        foreach ($arrListBuku as $loop) {
            echo "-" . $loop . PHP_EOL;
        }
    }
    echo PHP_EOL;
}

//inisiasi Buku
$The_Elements_of_Style = new Buku(
    "The Elements of Style",
    "1918",
    [
        $William_Strunk_Jr->getNama(),
        $E_B_White->getNama()
    ],
    [
        $Fiktif->getKategori(),
        $Novel->getKategori()
    ]
);


//set List Buku di class Kategori
$rawBuku = new Buku();
$rawBuku->setJudul($The_Elements_of_Style->getJudul());
$rawBuku->setTahun($The_Elements_of_Style->getTahun());
$rawBuku->setListPenulis($The_Elements_of_Style->getListPenulis());
$rawBuku->setListKategori($The_Elements_of_Style->getListKategori());


//convert object ke array
$objBuku = array($rawBuku);
$arrBuku = json_decode(json_encode($objBuku), true);

//menampilkan list penulis dan list kategori
echo PHP_EOL;
echo "===== List Penulis dan List List Kategori dari Class Buku =====" . PHP_EOL;
foreach ($arrBuku as $dataBuku) {
    echo "Judul : " . $dataBuku["judul"] . PHP_EOL;
    echo "Tahun : " . $dataBuku["tahun"] . PHP_EOL;
    echo "List Penulis : " . PHP_EOL;
    foreach ($dataBuku["list_penulis"] as $listPenulis) {
        echo "- " . $listPenulis . PHP_EOL;
    }
    echo "List Kategori : " . PHP_EOL;
    foreach ($dataBuku["list_kategori"] as $listKategori) {
        echo "- " . $listKategori . PHP_EOL;
    }
}

// inisiasi Transportasi, jenis dan merk
$transportasi = new Transportasi();
$transportasi->setListJenis(["Darat", "Laut", "Air"]);
$transportasi->setSarana(["Tol", "Pelabuhan", "Bandara"]);

//convert object ke array
$objTransportasi = array($transportasi);
$arrTransportasi = json_decode(json_encode($objTransportasi), true);

//menampilkan data list_jenis dari class Transportasi
echo PHP_EOL;
echo "===== List Jenis dari Class Transportasi =====" . PHP_EOL;
foreach ($arrTransportasi as $dataTransportasi) {
    echo "List Jenis : " . PHP_EOL;
    foreach ($dataTransportasi["list_jenis"] as $rawTransportasi) {
        echo "-" . $rawTransportasi . PHP_EOL;
    }
    echo "Sarana : " . PHP_EOL;
    foreach ($dataTransportasi["sarana"] as $rawTransportasi) {
        echo "-" . $rawTransportasi . PHP_EOL;
    }
}

//inisiasi merk
$honda = new Merk("Honda", "Brio", "2022", "merah");
$honda->setListJenis(["darat"]);
$GMC = new Merk("GMC", "DUKW", "1942", "hitam");
$GMC->setListJenis(["air", "udara"]);

//convert object ke arr
$objMerk = array($honda, $GMC);
$arrMerk = json_decode(json_encode($objMerk), true);

//menampilkan list_jenis di class Merk
echo PHP_EOL;
echo "===== List Jenis dari Class Merk =====" . PHP_EOL;
foreach ($arrMerk as $data) {
    echo "Merk : " . $data["merk"] .  PHP_EOL;
    echo "Nama : " . $data["nama"] . PHP_EOL;
    echo "Tahun : " . $data["tahun"] . PHP_EOL;
    echo "Warna : " . $data["warna"] . PHP_EOL;
    echo "List Jenis : " . PHP_EOL;
    foreach ($data["list_jenis"] as $row) {
        echo "- " .  $row . PHP_EOL;
    }
    echo PHP_EOL;
    // var_dump($data["list_jenis"]);
}

//inisiai class jenis
$darat = new Jenis(NULL, "Mistsubisi");
$darat->setListTransportasi(["umum", "pribadi"]);

//convert object to array
$objJenis = array($darat);
$arrJenis = json_decode(json_encode($objJenis), true);

echo PHP_EOL;
echo "===== List Transportasi dari Class Jenis =====" . PHP_EOL;
foreach ($arrJenis as $data) {
    echo "Merk : " . $data["merk"] .  PHP_EOL;
    echo "List Transportasi : " . PHP_EOL;
    foreach ($data["list_transportasi"] as $row) {
        echo "- " .  $row . PHP_EOL;
    }
    echo PHP_EOL;
    // var_dump($data["list_jenis"]);
}
