<?php

// Example 01 in OOP_Diagram.drawio
include ('MyClass.php');
include ('MyAbstract.php');
include ('MyInterface.php');


// Single Abstract, Many Interfaces
class Ex05 extends Abstract1 implements Interface1 {   

}

$ex = new Ex05();
$ex->theSame();


