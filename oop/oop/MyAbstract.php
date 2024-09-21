<?php

abstract class AbsA {
    // Khai báo  định nghĩa hàm
    public function Declare(){
        echo 'abcd';
    }
    // Khai báo ko định nghĩa hàm
    abstract function NotDeclare();
    // Final trong abstract
    
     
   
}

abstract class AbsB {
    abstract function runB();
    
}

abstract class AbsC {
    abstract function runC();
    
}

