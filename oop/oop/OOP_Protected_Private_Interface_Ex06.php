<?php
define('EOL', "<br>");
abstract class AbsA {
    // Khai báo  định nghĩa hàm
    public function AFooA(){
        echo 'Declare'.EOL;
    }
    // Khai báo ko định nghĩa hàm
    abstract function BFooB();
}
interface IA {
    // Báo lỗi Interface must be public
    protected function IFooA();
    
  }
  
interface IB{
    // Báo lỗi Interface must be public
    private function IFooB();
  
}
// Full OOP 
class Ex01 extends AbsA implements IA,IB {

   
    public function AFooA(){
        echo 'AFooA'.EOL;
    }
    public function BFooB(){
        echo 'BFooB'.EOL;
    }
  
}
$test = new Ex01();
$test->AFooA();
$test->BFooB();

