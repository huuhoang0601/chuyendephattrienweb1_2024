<?php

// Example 01 in OOP_Diagram.drawio
include ('MyClass.php');
include ('MyAbstract.php');
include ('MyInterface.php');
// Single Abstract, Many Interfaces
class Ex01 extends Abstract1 implements Interface1, Interface2, Interface3 {   
    
    function func_from_Ab1_no_body(){
        echo 'Abstract 01 no body from Ex01';
    }
 
    function func_from_Int1(){

    }

    function func_from_Int2(){
        
    }

    function func_from_Int3(){
        
    }
}


$ex = new Ex01();
// $ex01->func_from_Int1();
   


// public function func_from_Abs1(){
    //     echo 'b';
    // }
    
    // public function func_from_Abs2(){
    //     echo 'Abstract 02';
    // }
    
    // public function func_from_Abs3(){
    //     echo 'Abstract 03';
    // }
