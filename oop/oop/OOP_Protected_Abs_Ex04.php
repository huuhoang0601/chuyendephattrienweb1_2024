<?php
define('EOL', "<br>");
abstract class AbsA {
    // final thì không thể ghi đc
    protected function AFooA(){
        echo 'Foo';
    }
    abstract protected function Foo();
  
}

interface IA {
    public function IFooA(); 
  }
  
interface IB{
    public function IFooB();
  
}
$dong = function(){
    return $this->AFooA();
};
$a = function(){
    return $this->Foo();
};

// Full OOP 
class Ex04 extends AbsA implements IA,IB {

    protected function AFooA(){
        echo 'Test Protected'.EOL;
    }
    protected function Foo(){
        echo 'Test Protected Abs'.EOL;
    }
    public function IFooA(){
        echo 'Interface FooA'.EOL;
    }
    public function IFooB(){
        echo 'Interface FooB'.EOL;
    }
   
}
$test = new Ex04();

$dong ->call($test);
$a->call($test);
$test->IFooA();
$test->IFooB();
