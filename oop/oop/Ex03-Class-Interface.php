<?php
define('EOL', "<br>");
abstract class AbsA {
    // Khai báo  định nghĩa hàm
    static public function AFooA(){
        echo 'AFooA';
    }
    // Khai báo ko định nghĩa hàm
    protected function BFooB(){
        echo 'BFooB';
    }
}
// Interface bắt buộc phải dùng public 
interface IA {
    public function IFooA();
    public function IFooAB();
    static public function SFooA();
    
  }
  
interface IB{
    public function IFooB();
  
}
// Full OOP 
class Ex01 extends AbsA implements IA,IB {

   static public function SFooA(){
        echo 'Static Interface FooA';
   }
    public function Declare(){
        echo 'run A';
    }
    public function NotDeclare(){
        echo 'run B';
    }
    public function IFooA(){
        echo 'Interface FooA';
    }
    public function IFooB(){
        echo 'Interface FooB';
    }
    public function IFooAB(){
        echo 'Interface FooAB';
    }
}
$test = new Ex01();
$test->Declare();
$test->NotDeclare();
$test->IFooA();
$test->IFooB();
