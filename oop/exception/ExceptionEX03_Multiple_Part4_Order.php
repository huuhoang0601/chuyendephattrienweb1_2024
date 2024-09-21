<?php
define('EOL', "<br>");

class Sub1Exception extends Exception {}
class Sub2Exception extends Sub1Exception {}
class Sub3Exception extends Sub2Exception {}

class ExceptionEX03_Multiple_Part4_Order {
    /** 
     * Order ASC
     * @throws Sub2Exception
     */
    public function orderASC() {
        try {
            throw new Sub2Exception("2 ");
        } 
        catch (Sub3Exception $e) {
            echo "3: " . $e->getMessage() . EOL;
        } catch (Sub2Exception $e) {
            echo "2: " . $e->getMessage() . EOL;
        } catch (Sub1Exception $e) {
            echo "1: " . $e->getMessage() . EOL;
        } catch (Exception $e) {
            echo "Exception: " . $e->getMessage() . EOL;
        }
    }
//    2: 2
    
    /**
     * Order DESC
     * @throws Sub2Exception
     */
    public function orderDESC() {
        try {
            throw new Sub2Exception("2");
        }
        // Theo lý thuyết thì nó sẽ chấp nhận những thằng nào là nó hoặc là cha của nó 
        // Catch chỉ catch 1 lần và out ra
         catch (Exception $e) {
            echo "Exception: " . $e->getMessage() . EOL;
        } catch (Sub1Exception $e) {
            echo "1: " . $e->getMessage() . EOL;
        } catch (Sub2Exception $e) {
            echo "2: " . $e->getMessage() . EOL;
        } catch (Sub3Exception $e) {
            echo "3: " . $e->getMessage() . EOL;
        } 
    }
//    Exception: 2    

    //Required: PHP 7x
    public function byInstanceof() {
        try {
            throw new Sub2Exception("2");
        } catch (Sub3Exception|Sub2Exception|Sub1Exception|Exception $e) {
            switch ($e) {
               // instanceof có nghĩa là hỏi có phải là 1 bản thể của class đó không
               // VD: $a = new myClass(); -> $a là 1 bản thể của myClass()
                case ($e instanceof Sub1Exception): 
                    // var_dump dùng để xác định kiểu dữ liệu
                    var_dump($e instanceof Exception);
                    echo "1: " . $e->getMessage() . EOL;
                    break;
                case ($e instanceof Sub2Exception): 
                    echo "2: " . $e->getMessage() . EOL;
                    break;
                case ($e instanceof Sub3Exception): 
                    echo "3: " . $e->getMessage() . EOL;
                    break;
                    case ($e instanceof Exception):
                        var_dump($e instanceof Exception);
                        echo "Exception: " . $e->getMessage() . EOL;
                        break;
            }
        }
    }
//    Exception: 2    
    
    public function byClass() {
        try {
            // Dùng get_class sẽ trả ra tên dùng để định nghĩa class
            // VD :
                echo get_class( new Sub2Exception());
            //  Sub2Exceptionstring(13)
            throw new Sub2Exception("2");
        } 
        catch (Exception $e) { //Sub2Exception
            
            switch (get_class($e)) {
                case Exception::class:
                    echo "Exception : " . $e->getMessage() . EOL;
                    break;
                case Sub3Exception::class:
                    echo "3: " . $e->getMessage() . EOL;
                    break;
                case Sub2Exception::class:
                    var_dump(get_class($e));
                    echo "2: " . $e->getMessage() . EOL;
                    break;
                case Sub1Exception::class:
                    echo "1: " . $e->getMessage() . EOL;
                    break;
            }
        }
    }
//    2: 2

}

/**
 * Calling
 */
$foo = new ExceptionEX03_Multiple_Part4_Order();
// $foo->orderASC();
// $foo->orderDESC();
// $foo->byInstanceof();
$foo->byClass();


