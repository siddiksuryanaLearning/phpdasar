<?php
// Definition
// Meingisiasi objek setalah objek dibuat

// Syantax
  
  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }

// **Logic**

// 1.variable penampung akan dimasukan kedalam parameter pada fungsi constructor
// 2.pemanggilan global variable yang akan menampung parameter constructor
// 3.membuat variable objek untuk menginisiasi class
// 4.memanggil fungsi dalam kelas

// example :


class Fruit {
  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  function get_name() {
    return $this->name;
  }
  function get_color() {
    return $this->color;
  }
}

$apple = new Fruit("Apple", "red");
echo $apple->get_name();
echo "<br>";
echo $apple->get_color();


?>