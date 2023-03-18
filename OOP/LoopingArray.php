<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    $arr = [
        ["nama"=>"Siddik",
        "umur"=>26,
        "kampus"=>"Universitas Terbuka",
        "hobi"=>"Game"],

        ["nama"=>"Suryana",
        "umur"=>25,
        "kampus"=>"Universitas Bojonegoro",
        "hobi"=>"Olahrga"],

        ["nama"=>"Siddik",
        "umur"=>26,
        "kampus"=>"Universitas Terbuka",
        "hobi"=>"Game"],

        ["nama"=>"Suryana",
        "umur"=>25,
        "kampus"=>"Universitas Bojonegoro",
        "hobi"=>"Olahrga"],
        

        
    ];

    foreach ($arr as $data){
        // return var_dump($data);
    }
    for($i = 0; $i < count($arr); $i++){
        print_r($arr[$i]["nama"]);
    }


    // function getArr($data){
    //     $arr1[] = $data;
    //     $data1 = array();
    //     foreach($arr1 as $arr2){
    //         $data1 = "{$arr2}";
    //     }
 
    //     return $data1;
    // }

    // function printArr($arr){
    //     $str = $arr;

    //     foreach($str as $l){
    //         $str = "data {$l}";
    //     }
 
    //     return $str;
    // }    

    // echo getArr($arr);

    // echo $arr['nama'];
    

?>