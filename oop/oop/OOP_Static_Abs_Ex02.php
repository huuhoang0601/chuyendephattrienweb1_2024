<?php
define('EOL', "<br>");
abstract class AbsA {
    // Khai báo  định nghĩa hàm
    static public function AFooA(){
        echo 'AFooA';
    }
    
   
}

interface IA {
    public function IFooA(); 
  }
  
interface IB{
    public function IFooB();
  
}
$dong = function(){
    return $this->Foo();
};
// Full OOP 
class Ex02 extends AbsA implements IA,IB {
  
    static public function AFooA(){
        echo 'AFooA'.EOL;
    }
    public function IFooA(){
        echo 'Interface FooA'.EOL;
    }
    public function IFooB(){
        echo 'Interface FooB'.EOL;
    }
   
}
$test = new Ex02();
$test->AFooA();

$test->IFooA();
$test->IFooB();
