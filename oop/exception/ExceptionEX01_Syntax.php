<?php
define('EOL', "<br>");

/**
 * ExceptionEX01_Syntax class
 */
class ExceptionEX01_Syntax {

    /**
     * Cú pháp đầy đủ
     * Full syntax try...catch
     */
    public function fullSyntax($bar) {

        try {
            if ($bar == 'fooBar') {
                throw new Exception('with fooBar');
            }
        }
        catch (Exception $e) {
            echo('Exception caught: ' . $e->getMessage() . EOL);
        } 
        finally {
            echo('End fullSyntax' . EOL);
        }
    }
//    Exception caught: with fooBar
//    End fullSyntax
    
    
    //Miss Throw
    /*
    * Thiếu throw thì ko nhảy ra catch mà chạy luôn finally
    */
    public function missThrow() {

        try {
            echo('OK - Missed Throw statement is running very good' . EOL);
        } 
        catch (Exception $e) {
            echo('Exception caught: ' . $e->getMessage() . EOL);
        } 
        finally {
            echo('End missThrow' . EOL);
        }
    }
//    OK - Missed Throw statement is running very good
//    End missThrow

    //Miss Catch
    // Thiếu catch báo lỗi Uncaught Exception
    public function missCatch($bar) {

        try {
            if ($bar == 'fooBar') {
                throw new Exception('with fooBar');
            }
        } 
        finally {
            echo('End missCatch' . EOL);
        }
    }

//( ! ) Fatal error: Uncaught Exception: with fooBar in *\ExceptionEX01_Syntax.php on line 51
//( ! ) Exception: with fooBar in *\ExceptionEX01_Syntax.php on line 51

    
    
    /**
     * Miss finally
     */
    public function missFinally($bar) {

        try {
            if ($bar == 'fooBar') {
                throw new Exception('with fooBar');
            }
        } 
        catch (Exception $e) {
            echo('Exception missFinally: ' . $e->getMessage() . EOL);
        }
    }
//    Exception missFinally: with fooBar
    
    //Throw Interface exceptionư
    // throw thằng con catch thằng cha thì được
    // còn ngược lại thì không
    public function throwInterface() {
        try {
            throw new Throwable('ABCDXEYZ');
        } 
        catch (Error $e) {//object(Error)[2]
            echo $e->getMessage();
        }
    }
//    Cannot instantiate interface Throwable

    //Only throw statement
    public function onlyThrow() {
        throw new Exception('onlyThrow');
    }
//    ( ! ) Fatal error: Uncaught Exception: with fooBar in 
//    *\ExceptionEX01_Syntax.php on line 93
//    ( ! ) Exception: with fooBar in 
//    *\ExceptionEX01_Syntax.php on line 93

}

class AppEX01 {
    public function callMissCatch() {
        $foo = new ExceptionEX01_Syntax();
        $bar = 'fooBar';
        try {
            $foo->missCatch($bar);
        } 
        catch (Exception $e) {
            echo $e->getMessage();
        }
    }
//    End missCatch
//    with fooBar
}

/**
 * Testing
 */
$foo = new ExceptionEX01_Syntax();
$bar = 'fooBar';
$foo->fullSyntax($bar);
$foo->missThrow();
// Dòng Error cuối cùng do thằng missCatch gây ra 
$foo->missCatch($bar);
$foo->missFinally($bar);
$foo->throwInterface();
// //$foo->onlyThrow();

// /**
//  * Call from another class
//  */
// $foo = new AppEX01();
// $foo->callMissCatch($bar);