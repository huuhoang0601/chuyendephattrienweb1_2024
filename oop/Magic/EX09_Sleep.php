<?php
/**
 * @ref: https://www.php.net/manual/en/language.oop5.magic.php#object.sleep
 *
 */
class Foo
{
    public $name;
    public $age;

    public function __sleep()
    {
        // Nó là $name
        return ['name']; // -> O:3:"Foo":1:{s:4:"name";i:35;}
        // có thể thay bằng
        // return ['age']; // -> O:3:"Foo":1:{s:3:"age";i:18;}
    }

/*    public function __serialize(): array
    {
        return ['age'];
    }*/

}

$foo= new Foo();
$foo->name= 35;
$foo->age= 18;
// Kiểu JSON PHP
echo serialize($foo);
