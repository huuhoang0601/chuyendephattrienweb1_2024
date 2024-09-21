<?php

/**
 * @ref1 https://www.php.net/manual/en/language.oop5.overloading.php#object.callstatic
 */

class MethodTest
{
    public static function __callStatic($name, $arguments)
    {
        echo "Calling Static Method '$name' With List Of Arguments: ". implode(', ', $arguments). "<br>";
    }
}

MethodTest::myMethod('In Static Method', "bar");  
/*Output
    Calling Static Method 'myMethod' With List Of Arguments: In Static Method, bar
*/

?>