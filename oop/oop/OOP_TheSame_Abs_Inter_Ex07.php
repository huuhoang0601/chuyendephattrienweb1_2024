<?php
define('EOL', "<br>");
abstract class AbstractTest {
    // Have body
    public function FooA(){
        echo 'Foo'.EOL;
    }
    // No body
    abstract function FooB();
}
interface InterfaceTest {
    // interface Foo A the same Foo A in abstract
    public function FooA();
}

class Test extends AbstractTest implements InterfaceTest {

   // Overiding 
    public function FooA(){
        echo 'The Same FooA'.EOL;
    }
    public function FooB(){
        echo 'The Same FooB'.EOL;
    }
   
}
$test = new Ex01();
$foo->FooA();// The Same FooA
$foo->FooB();

