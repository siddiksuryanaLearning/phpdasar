<?php
/*
** Definition **
Memungkinkan pengembang untuk menetukan fungsi yang harus ada di pada kelas
membuat fungsi yang sama pada kelas yang berbeda

1. tidak boleh memiliki protperty
2. acces modiefier harus bersifat publik
3. dapat mewarisi kelas secara bersamaan


** Syntax **
keyword : interface, implements
interface class_name{}
class Cat implements Animal{}

** Logic **
1. inisiasi dengan keyword interface
2. pada kelas turunan harus memakai keyword impelements

example :
*/
interface Animal {
  public function makeSound();
}

// Class definitions
class Cat implements Animal {
  public function makeSound() {
    echo " Meow ";
  }
}

class Dog implements Animal {
  public function makeSound() {
    echo " Bark ";
  }
}

class Mouse implements Animal {
  public function makeSound() {
    echo " Squeak ";
  }
}

// Create a list of animals
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);

// Tell the animals to make a sound
foreach($animals as $animal) {
  $animal->makeSound();
}

?>