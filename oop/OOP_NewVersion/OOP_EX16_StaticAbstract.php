<?php
define('EOL', "<br>");
abstract class StaticAbstract {
    // static in abstract
    static  function AFooA(){
        echo 'AFooA';
    }
    // abstract static no body
    abstract static function StaticAbs();
   
}

class Other extends StaticAbstract {
    // Overiding Static function 
    static function StaticAbs(){
        echo ' Static in Abstract'.EOL;
    }
    
   
}
$test = new Other();
$test->AFooA();// AFooA
$test->StaticAbs();// Static in Abstract
