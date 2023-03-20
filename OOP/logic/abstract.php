<?php
/*
** Definition **
Memungkinkan pengembang untuk membuat kerangka kerja pada class dan hanya bisa di inisiasi
1. mendekalarisikan nama, argumen dan fungsi yang sama
2. acces modiefier harus setara atau di bawahnya 


** Syntax **
keyword : abstract
abstract public function class_name{}

** Logic **
1.inisiasi keyword abstrack 
2.bisa menanbahkan constructor berserta valuenya
3.

example :
*/
// Parent class
abstract class Car {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract public function intro() : string;
}

// Child classes
class Audi extends Car {
  public function intro() : string {
    return "Choose German quality! I'm an $this->name!";
  }
}

class Volvo extends Car {
  public function intro() : string {
    return "Proud to be Swedish! I'm a $this->name!";
  }
}

class Citroen extends Car {
  public function intro() : string {
    return "French extravagance! I'm a $this->name!";
  }
}

// Create objects from the child classes
$audi = new audi("Audi");
echo $audi->intro();
echo "<br>";

$volvo = new volvo("Volvo");
echo $volvo->intro();
echo "<br>";

$citroen = new citroen("Citroen");
echo $citroen->intro();

?>