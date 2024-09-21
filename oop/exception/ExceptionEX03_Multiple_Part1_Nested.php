<?php
define('EOL', "<br>");

/**
 * ExceptionEX03_Multiple_Nested class
 */
class FooException extends RuntimeException {
    public static function foo() {
        return new self ('MessageFoo');
    }
}

class ExceptionEX03_Multiple_Part1_Nested  {

    public function multipleException($foo, $bar) {
        try {
            try {
                if ($foo == 'foo') {
                    throw new Exception("Hi foo");
                }
            } 
            catch (Exception $e) {
                echo $e->getMessage() . EOL;
                if ($bar == 'bar') {
                    throw new Exception("Hi boon");
                }
            }
        } catch (Exception $e) {
           
            echo $e->getMessage();
        }
    }
//    Hi foo
//    Hi bar

    public function multipleOrderException($foo, $bar) {
        try {
            try {
                if ($foo == 'foo') {
                    throw new Exception("#D");
                }
            } 
            catch (RuntimeException $e) {
                echo $e->getMessage() . EOL;
                if ($bar == 'bar') {
                    throw new Exception("Hi bar");
                }
            }
            finally {
                echo 'foobar' . EOL;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
//    foobar
//    Hi foo
    
}

$foo = new ExceptionEX03_Multiple_Part1_Nested();
// $foo->multipleException('foo', 'bar');
$foo->multipleOrderException('foo', 'bar');