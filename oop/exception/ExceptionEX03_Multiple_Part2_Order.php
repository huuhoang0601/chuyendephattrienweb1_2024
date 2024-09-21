<?php
define('EOL', "<br>");

class FooException extends RuntimeException {
    public static function foo() {
        return new self ('MessageFoo');
    }
}

class BarException extends RuntimeException {
    public static function bar() {
        return new self ('MessageBar');
        // self sẽ đại diện cho BarException
        // vì vậy như này sẽ không khác gì
        //              return new BarException('MessageBar');
    }
}
class ExceptionEX03_Multiple_Part2_Order {
    public function fooBar($foo) {
        try {
            if ($foo == 'foo') {
                throw  FooException::foo();
                // dòng này bằng với throw new FooException('MessageFoo');
                // Khi throw FooException() thì sẽ ưu tiên những thằng nào mà giống nó hoặc là cha của nó
            } else if ($foo == 'bar') {
                throw BarException::bar();
                // Bên này cũng vậy
            } else {
                echo 'Write your code here!' . EOL;
            }
        }
        catch (FooException $e) {
            echo $e->getMessage() . EOL ;
        }
       
        catch (RuntimeException $e) {
            echo "RuntimeException!" . EOL;
        }
        catch (Exception $e) {
            echo "Exception!" . EOL;
        }
        catch (BarException $e) {
            echo $e->getMessage() . EOL;
        } 
    }
//    Foo!
//    RuntimeException!
}

/**
 * Calling
 */
$foo = new ExceptionEX03_Multiple_Part2_Order();
// $foo->fooBar('foo');
$foo->fooBar('bar');