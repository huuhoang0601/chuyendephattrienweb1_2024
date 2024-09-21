<?php

/**
 * @ref: https://www.php.net/manual/en/language.oop5.magic.php#object.set-state
 **/

class Foo
{
    public $name;
    public $color = 'blue';

    public static function __set_state($an_array)
    {
        $ret = new Foo;
        $ret->name = $an_array['name'];
        return $ret;
    }
}

$foo = new Foo;
$foo->name = 'foo';
$foo->color = 'red';
$bar='';
// Khi làm var_export thì thằng _SetState sẽ làm 
eval('$bar = '.var_export($foo, true).';');

var_dump($bar);