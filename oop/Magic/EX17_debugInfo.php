<?php

/**
 * @ref: https://www.php.net/manual/en/language.oop5.magic.php#object.debuginfo
 **/

class Foo
{
    private  $sex;
    private  $name;
    private  $age;

    public function __construct($name="",  $age=5, $sex='Male')
    {
        $this->name = $name;
        $this->age  = $age;
        $this->sex  = $sex;
    }
    // Khi var_dump được gọi thì nó sẽ nhảy vào đây, var_dump ko được định nghĩa lại thì nó in hết và chi tiết
    public function __debugInfo()
    {
        return [
            'name' => $this->name,
            'age'=> $this->age
        ];
    }
}

$foo = new Foo('Foo');

var_dump($foo);