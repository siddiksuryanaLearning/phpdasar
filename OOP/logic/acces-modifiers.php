<?php
/* 
** Definition **
AccesModifier
Mengontrol akses pada sebuah kelas

** Syntax **
keyword : public, protected, private

public = function set_name($n)
protected = protected function set_color($n)
private = private function set_weight($n)

example :
*/
class Fruit {
  public $name;
  protected $color;
  private $weight;
}

$mango = new Fruit();
$mango->name = 'Mango'; // OK
$mango->color = 'Yellow'; // ERROR
$mango->weight = '300'; // ERROR
?>