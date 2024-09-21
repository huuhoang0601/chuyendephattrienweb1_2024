<?php
define('EOL', "<br>");
abstract class AbsA {
  
    // chơi 1 mình
    private function Foo2(){
        echo 'Alone';
    }
}

interface IA {
    public function IFooA(); 
  }
  
interface IB{
    public function IFooB();
  
}


// Full OOP 
class Ex04 extends AbsA implements IA,IB {

   
    public function IFooA(){
        echo 'Interface FooA'.EOL;
    }
    public function IFooB(){
        echo 'Interface FooB'.EOL;
    }
   
}
$test = new Ex04();

$test->IFooA();
$test->IFooB();
