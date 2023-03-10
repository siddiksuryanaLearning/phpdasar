<?php
    //strlen
    echo strlen("PT.FATTAH DIGITAL TEKNO");
    //strcmp
    echo strcmp("hello World", "Hello World");
    //explode
    $str = 'satu,dua,tiga,empat';
    print_r(explode(",", $str, 2));
    //htmlspecialchars
    $string = 'Janji-janji "DPR".';
    echo htmlspecialchars($string, ENT_QUOTES);
?>