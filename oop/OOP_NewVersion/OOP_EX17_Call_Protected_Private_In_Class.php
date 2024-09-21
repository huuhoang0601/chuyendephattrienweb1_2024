<?php
define('EOL', "<br>");
abstract class CallAbstractProtected {
    // method protected 
    protected function AFooA(){
        echo 'Foo';
    }
    // method protected abstract 
    abstract protected function Foo();
  
}

class EX017 extends CallAbstractProtected {

    protected function AFooA(){
        echo 'Test Protected'.EOL;
    }
    protected function Foo(){
        echo 'Test Protected Abs'.EOL;
    }
   
}
$foo = function(){
    return $this->AFooA();
};
$bar = function(){
    return $this->Foo();
};
$test = new EX017();
$foo ->call($test);// Test Protected
$bar->call($test);// Test Protected Abs

