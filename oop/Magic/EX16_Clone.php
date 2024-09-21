<?php

/**
 * @ref1  https://www.php.net/manual/en/language.oop5.cloning.php#object.clone
 */

class Foo
{
    // public $sex;
    // public $name;
    // public $age;

    private $sex;
    private $name;
    private $age;


    public function __construct($name = "",  $age = 5, $sex = 'Male')
    {
        $this->name = $name;
        $this->age  = $age;
        $this->sex  = $sex;
    }
    // Khi được gọi clone thì nó sẽ vào đây, để không thì nó vẫn ra kết quả 
    public function __clone()
    {
        $this->name = "Clone Name";
    }
}

$foo = new Foo('John');

$fakeFoo = clone $foo;

var_dump($fakeFoo);