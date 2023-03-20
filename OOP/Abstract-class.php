<?php
    error_reporting(E_ALL);

    ini_set("display_errors", 1);
     abstract class ParentClass1 {
        
        abstract protected function prefixName($name);
        abstract protected function lastName($name);
    }

    abstract class ParentClass {
        
        abstract protected function prefixName($name);
        abstract protected function lastName($name);
    }
    
    class ChildClass extends ParentClass{
        public $fullname;
        public function prefixName($name){
            if ($name === "John Doe"){
                $prefix = "Mr.";
                $this->fullname = "{$prefix} {$name}";
            }elseif ($name === "Jane Doe"){
                $prefix = "Mrs.";
                $this->fullname = "{$prefix} {$name}";
            }else {
                $prefix = "";
            }
            return;  
        }

        public function lastName($name){
            return "{$this->fullname} {$name}";
        }


    }

    $class = new ChildClass;
    echo $class->prefixName("John Doe");
    echo $class->lastName("Yump Pie");
    echo "<br>";
    echo $class->prefixName("Jane Doe");
    // echo $class->lastName("Jie poe");

?>