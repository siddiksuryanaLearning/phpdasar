<?php
/* 
** Definition **
Konstanta tidak dapat diubah ketika telah dideklarasikan

** Syntax **
keyword : const, self
syntax  : const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
get     : echo class (Goodbye::LEAVING_MESSAGE);

**Logic**
1. inisiasi const 
2. pemanggilan dengan self 

example :
*/
 class Goodbye {
  const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
  
  public function byebye() {
    echo self::LEAVING_MESSAGE;
  }
}

echo Goodbye::LEAVING_MESSAGE;
echo byebye();
?>