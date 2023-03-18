<?php
//vardump
$a = array(1, 2, 3);
var_dump($a);

//isset
$a = "i";
if (isset($a)){
    echo "Variable a sudah di setting <br>";
}

$b = null;
if(isset($b)){
    echo "variable b sudah di setting";
} else {
    echo "varibale b belum di setting"; 
}

//empty
$c = 1;
$d = null;
if (empty($a)) {
  echo "Variable 'c' is empty.<br>";
}
if (empty($d)) {
  echo "Variable 'd' is empty.<br>" ;
}

//die
$site = "a";
fopen($site, "r") or die("Tidak dapat membuka Url");

//sleep
echo date('h:i:s') . "\n";
sleep(10);
echo date('h:i:s');
?>