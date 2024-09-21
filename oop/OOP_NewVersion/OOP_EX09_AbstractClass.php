<?php
define('EOL', "<br>");
abstract class Fruit
{
    // abstract cannot be declared private
    // Force Extending class to define this method
    abstract protected function eat();
    abstract protected function color($foo);

    // Common method
    public function printOut() {
        print $this->eat() . EOL;
    }
}

class Apple extends Fruit
{
    // Override method
    protected function eat() {
        return "Fruit Apple";
    }

    public function color($foo) {
        return "{$foo}Fruit";
    }
}

class Mango extends Fruit
{
    public function eat() {
        return "Fruit Mango";
    }

    public function color($foo) {
        return "{$foo}Fruit";
    }
}

$class1 = new Apple;
$class1->printOut();// Fruit Apple
echo $class1->color('FOO_') .EOL; //FOO_Fruit

$class2 = new Mango;
$class2->printOut();//Fruit Mango
echo $class2->color('FOO_') .EOL; //FOO_Fruit
?>