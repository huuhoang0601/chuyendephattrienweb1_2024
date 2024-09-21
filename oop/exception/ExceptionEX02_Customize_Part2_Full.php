<?php
define('EOL', "<br>");

interface IException {
    // get code with code variable is string type
    public function getCodeCustom();
}

class CustomException extends Exception implements IException {

    protected $message = 'CustomException';     // Exception message
    protected$code = "";                    // User-defined exception code

    //Overrideable methods inherited from Exception class
    public function __construct($message = null, $code = null) {
        
        $this->message = $message;
        $this->code = $code;
    }

    // define our method
    public function getCodeCustom() {
        return (string) $this->code;
    }
}

class ExceptionEX02_Customize_Part2_Full {

    function bar() {
        try {
            throw new CustomException("Foo", "Code:02");
        } 
        catch (CustomException $e) {
            echo "Caught TestException ('{$e->getMessage()}')" . EOL;
            echo "Exception Code: {$e->getCodeCustom()}";
        } 
        catch (Exception $e) {
            echo "Caught Exception ('{$e->getMessage()}')";
        }
    }
//    Caught TestException ('Foo')
//    Exception Code: Code:02
}

/**
 * Calling
 */
$foo = new ExceptionEX02_Customize_Part2_Full();
$foo->bar();