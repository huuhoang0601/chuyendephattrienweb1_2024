<?php
define("EOL","<br>");

class Foo implements Serializable
{
    private $name = 'secret';
    protected $bar = 'bar';

    public function serialize()
    {
        return serialize([
            "name" => $this->name,
            "bar" => $this->bar
        ]);
    }
    //  public function __serialize(): array
    // {
    //     return ["name" => $this->name];
    // }

    public function unserialize($serialized)
    {

    }
}

class Bar
{
    public Foo $foo;

    public function __construct($foo)
    {
        $this->foo = $foo;
    }
}

$foo = new Foo();
echo serialize($foo).EOL;
//C:3:"Foo":37:{a:2:{i:0;s:6:"secret";i:1;s:3:"bar";}}
$bar = new Bar($foo);
echo serialize($bar);