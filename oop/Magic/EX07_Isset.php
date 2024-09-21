<?php

/**
 * @ref1 https://www.php.net/manual/en/language.oop5.overloading.php#object.isset
 */

class Foo
{
    protected $info = [];

    public function __set($name, $value) {
        $this->info[$name] = $value;
    }

    public function __get($name) {
        if (!array_key_exists($name, $this->info)) {
            return null;
        }
    
        return $this->info[$name];
    }
    // Isset
    public function __isset($name) {
        // $name = 'name'
        return isset($this->info[$name]);
    }

}

$foo = new Foo();
$foo->name = 'foo';

if(isset($foo->name))
{
    echo "Name: " . $foo->name;
}