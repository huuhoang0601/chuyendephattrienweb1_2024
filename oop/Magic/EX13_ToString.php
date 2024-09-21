<?php

/**
 * @ref: https://www.php.net/manual/en/language.oop5.magic.php#object.tostring
 **/

class Foo
{
    // public $sex;
    // public $name;
    // public $age;

    private $sex;
    private $name;
    private $age;

    public function __construct($name="",  $age=5)
    {
        $this->name = $name;
        $this->age  = $age;
    }
    // Trong hàm String thì dù private hay public gì nó vẫn cho ra ngoài vì ở đây mình đã cho phép  
    public function __toString()
    {
        return  "This is: $this->name - Age: $this->age";
    }
}

$foo = new Foo('Foo');
echo $foo;
