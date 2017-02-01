<?php
 class Person
 {
     protected $name;

    public function sayHello()
    {
        echo 'Hello ' . $this->name;
    }
    public function setName($name)
    {
        $this->name=$name;
    }

     public function setLevel($level)
     {
         if ($this->xp > 2000)
         {
             $this->level = $level;
         }
     }
     public function getName()
     {
         return $this->name;
     }
 }


?>