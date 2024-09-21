<?php

/**
 * @ref: https://www.php.net/manual/en/language.oop5.magic.php#object.wakeup
 */
class Foo
{
    public $name;
    public $age;

    public function __wakeup() 
    {
        // Dùng var_dump để chuyển hóa class Foo
        var_dump($this); // object(Foo)#2 (2) { ["name"]=> string(3) "foo" ["age"]=> int(18) }
    }

}

$kid= new Foo();
$kid->name= 'foo';
$kid->age= 18;

// Mục đích : Đảo JSON lại chuyển hóa thành format bình thường
unserialize(serialize($kid));

