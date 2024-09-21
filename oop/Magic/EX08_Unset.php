<?php

/**
 * @ref1 https://www.php.net/manual/en/language.oop5.overloading.php#object.unset
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

    public function __isset($name) {
        return isset($this->info[$name]);
    }

    public function __unset($name) {
        unset($this->info[$name]);
    }

}

$foo = new Foo();
$foo->name = 'foo';

if(isset($foo->name))
{
    echo "Name: " . $foo->name . "<br>";
    unset($foo->name);
    echo "Name: " . $foo->name . "<br>";
}
/*Output
    The Height of Kid: 140
    The Height of Kid:
*/
