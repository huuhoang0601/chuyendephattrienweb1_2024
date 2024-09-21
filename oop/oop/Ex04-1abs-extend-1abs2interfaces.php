<?php

// Example 01 in OOP_Diagram.drawio
include ('MyClass.php');
include ('MyAbstract.php');
include ('MyInterface.php');


// Single Abstract, Many Interfaces
abstract class Ex04_Abstract extends Abstract1 implements Interface1, Interface2 {   
    
    function func_from_Ab1_no_body(){
        echo 'Overriding Abstract 01 no body from Abs Ex04 <br/>';
    }
 
    function func_from_Int1(){
        echo 'Overrding Interface 01 from Abs Ex04';
    }

    function func_from_Int2(){
        echo 'Overrding Interface 02 from Abs Ex04';
    }

    public function func_from_Ex04(){
        echo 'Abstract Ex04';
    }
}

class Ex04 extends Ex04_Abstract{

}

$ex = new Ex04();
$ex->func_from_Ab1_no_body();
$ex->func_from_Ex04();


