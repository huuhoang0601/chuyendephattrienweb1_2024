<?php
define('EOL', "<br>");
// First way - anonymous class assigned directly to variable
$ano_class_obj = new class{
    public $foo = 'hello';
    public $bar = 123;
    const SETT = 'some config';

    public function getValue()
    {
        // do some operation
        return 'some returned value'.EOL;
    }

    public function getValueWithArgu($str)
    {
        // do some operation
        return 'returned value is '.$str;
    }
};
var_dump($ano_class_obj);
echo $ano_class_obj->foo;
echo EOL;
echo $ano_class_obj->bar;
echo EOL;
echo $ano_class_obj::SETT;
echo EOL;
echo $ano_class_obj->getValue();
echo EOL;
echo $ano_class_obj->getValueWithArgu('OOP');
