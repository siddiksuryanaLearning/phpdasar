<?php
//perbandingan <, >, <=, >=, ==, !=
$angkaPertama = 100;
$angkaKedua = 10;
$angkaKetiga = 10;
$string = "10";

var_dump($angkaPertama < $angkaKedua);
var_dump($angkaPertama > $angkaKedua);
var_dump($angkaPertama <= $angkaKetiga);
var_dump($angkaKedua >= $angkaKetiga);
var_dump($angkaKedua == $angkaKetiga);
var_dump($angkaPertama != $angkaKetiga);

// Identitas ===, !==

var_dump($angkaKetiga === $string);
var_dump($angkaKetiga !== $string);

?>
