<?php

/**
 * @ref1 https://www.php.net/manual/en/language.oop5.overloading.php#object.call
 */

class MethodTest
{
    public function __call($name, $arguments)
    {
        echo "Calling Method '$name' With List Of Arguments: ". implode(', ', $arguments). "<br>";
    }

}

$obj = new MethodTest;
$obj->myMethod('In Static Method', "foo", 5);

?>