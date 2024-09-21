<?php
define('EOL', '<br>');

/**
 * @ref1: https://www.php.net/manual/en/language.oop5.magic.php#object.serialize
 *
 **/

class Foo{
    public $name;
    public $age;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function __serialize(): array
    {
        return [
            'nameX' => $this->name,
            'ageX' => $this->age
        ];

        return [];
    }
}

class Bar
{
    // public Foo $foo;
    // protected Foo $foo;
    // private Foo $foo;
    static Foo $foo;
    public function __construct($foo)
    {
        $this->foo = $foo;
    }
}

$foo = new Foo('foxxxxxo');
echo serialize($foo).EOL;;
// undefined: __serialize:  O:3:"Foo":2:{s:4:"name";s:3:"foo";s:3:"age";N;}
// defined:                 O:3:"Foo":2:{s:5:"nameX";s:8:"foxxxxxo";s:4:"ageX";N;}
// defined + return []: O:3:"Foo":0:{}


// echo ['a','b'].EOL;  Error 
echo serialize(['a','b']).EOL;

// a:2:{i:0;s:1:"a";i:1;s:1:"b";}
/*Output
    O:3:"Foo":2:{s:4:"name";s:3:"foo";s:3:"age";N;}
*/

$bar = new Bar($foo);
echo serialize($bar);
// public    ->  O:3:"Bar":1:{s:3:"foo";O:3:"Foo":2:{i:0;s:4:"name";i:1;s:3:"age";}}
// protected ->  O:3:"Bar":1:{s:6:"*foo";O:3:"Foo":2:{s:4:"name";s:3:"foo";s:3:"age";N;}}
// private   ->  O:3:"Bar":1:{s:8:"Barfoo";O:3:"Foo":2:{s:4:"name";s:3:"foo";s:3:"age";N;}}
// static    ->  Notice: Accessing static property Bar::$foo as non static in D:\Env\Xampp\htdocs\Core\Magic\EX11_Serialize_Part1.php on line 
//           ->  O:3:"Bar":1:{s:3:"foo";O:3:"Foo":2:{s:4:"name";s:3:"foo";s:3:"age";N;}} // Giống với public