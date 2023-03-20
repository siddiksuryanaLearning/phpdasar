<?php
/*
** Definition **
tipe number akan terus bertambah pada variable

** Syntax **
keyword : static, self::, 
public static $number = 1;
public static printString(){
            return "Number : " . self::$number++;
        }
greeting::printString();


** Logic **
1. deklarasi fungsi menggunakan static
2. memanggil variable dalam function dengan self::
3. melihat output dengan nama_class::nama_function

example :
 */
class A {
  public static function welcome() {
    echo "Hello World!";
  }
}

class B {
  public function message() {
    A::welcome();
  }
}

$obj = new B();
echo $obj -> message();

class pi {
  public static $value=3.14159;
}

class x extends pi {
  public function xStatic() {
    return parent::$value;
  }
}

// Get value of static property directly via child class
echo x::$value;

// or get value of static property via xStatic() method
$x = new x();
echo $x->xStatic();
?>