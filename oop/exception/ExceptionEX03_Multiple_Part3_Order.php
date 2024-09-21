<?php
define('EOL', "<br>");

class FooException extends RuntimeException {
    public static function foo() {
        return new self("Foo!");
    }
}

class BarException extends FooException {
    // : self thuộc về phạm trù TypeHint nó sẽ khai báo kiểu dữ liệu sẽ trả về
    public static function bar(): self {
        return new self("Bar!");      
    }
}

class ExceptionEX03_Multiple_Part3_Order {
    
    public function fooBar($foo) {
        try {
            if ($foo == 'foo') {
                throw FooException::foo();
            } else if ($foo == 'bar') {
                throw BarException::bar();
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
//    Bar!
}

/**
 * Calling
 */
$foo = new ExceptionEX03_Multiple_Part3_Order();
$foo->fooBar('foo');
$foo->fooBar('bar');