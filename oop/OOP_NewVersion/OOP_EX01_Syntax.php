<?php
define('EOL', "<br>");
// Syntax Create Class in PHP 
    class Foo {
        // Properties
        public $foo;
        // Methods
        public function bar() {
           echo 'FooBar';
            
        }
       
    }

$foo = new Foo();
$foo->bar();