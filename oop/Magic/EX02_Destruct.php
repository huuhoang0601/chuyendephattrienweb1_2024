<?php

/**
 * @ref1 https://www.php.net/manual/en/language.oop5.decon.php#object.destruct
 */

class EX02_Destruct {
    function __construct() {
        echo "Construct - " . __CLASS__ . "<br>";
    }

    function __destruct() {
        echo "Destruct - " . __CLASS__ . "<br>";
    }
}

class SubClass extends EX02_Destruct {
    function __construct() {
        echo "Construct - " . __CLASS__ . "<br>";

        exit(); // Hàm hủy vẫn thực thi ngay cả khi dùng exit();
    }

    function __destruct() {
        parent::__destruct();
        echo "Destruct - " . __CLASS__ . "<br>";
    }
}

$obj = new EX02_Destruct();
/*Output
    Construct - EX02_Destruct
    Destruct - EX02_Destruct
*/

$obj_2 = new SubClass();
/*Output
    Construct - SubClass
    Destruct - EX02_Destruct
    Destruct - SubClass
*/


