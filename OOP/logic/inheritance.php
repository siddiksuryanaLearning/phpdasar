<?php
/* 
** Definition **
Inheritance (Pewarisan)
memungkinakan pengembang membuat sifat dan perilaku turunan dari kelas parent.

** Syntax **
keyword : extends
class name_class extends parent_class{
    public function 
}

** Logic **
1. inisiasi class dengan menggunakan keyword extends  

example :
*/
class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}

// Strawberry is inherited from Fruit
class Strawberry extends Fruit {
  public function message() {
    echo "Am I a fruit or a berry? ";
  }
}
$strawberry = new Strawberry("Strawberry", "red");
$strawberry->message();
$strawberry->intro();

?>