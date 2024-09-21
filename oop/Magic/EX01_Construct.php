<?php

/**
 * @ref1: https://www.php.net/manual/en/language.oop5.decon.php#object.construct
 */

class EX01_Construct
{
    function __construct() {
        echo "In EX01_Construct constructor" . "<br>";
    }

}

class SubClass extends EX01_Construct
{
    function __construct() {
        parent::__construct();
        echo "In SubClass constructor" . "<br>";
    }
}

class OtherSubClass extends EX01_Construct {
    
}

$obj = new EX01_Construct();
/*Output
    In EX01_Construct constructor
*/

$obj = new SubClass();
/*Output
    In EX01_Construct constructor
    In SubClass constructor
*/

$obj = new OtherSubClass();
/*Output
    In EX01_Construct constructor
*/