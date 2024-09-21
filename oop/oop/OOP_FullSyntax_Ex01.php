<?php
define('EOL', "<br>");
abstract class AbsA {
    // Khai báo  định nghĩa hàm
    public function AFooA(){
        echo 'AFooA'.EOL;
    }
    // Khai báo ko định nghĩa hàm
    abstract function BFooB();
}
interface IA {
    public function IFooA();
    
  }
  
interface IB{
    public function IFooB();
  
}
// Full OOP 
class Ex01 extends AbsA implements IA,IB {

   
    
    public function BFooB(){
        echo 'BFooB'.EOL;
    }
    public function IFooA(){
        echo 'Interface FooA'.EOL;
    }
    public function IFooB(){
        echo 'Interface FooB'.EOL;
    }
}
$test = new Ex01();
$test->AFooA();
$test->BFooB();
$test->IFooA();
$test->IFooB();
