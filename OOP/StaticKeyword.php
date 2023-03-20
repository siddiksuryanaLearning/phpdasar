<?php
    error_reporting(E_ALL);

    ini_set("display_errors", 1);

    class Konser{

        public static $number = 1;

        public function printString(){
            return "Number : " . self::$number++;
        }
        
    }

    echo Konser::$number;
    echo "<br>";
    echo Konser::printString();
    echo "<br>";
    echo Konser::printString();
    echo "<br>";
    $numberAdd = new Konser();
    echo $numberAdd->printString();
     echo "<br>";
    $numberTwo = new Konser();
    echo $numberTwo->printString();


?>