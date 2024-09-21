<?php
class ExTest {
      
      
    public function __call($name, $arguments) {
          
        echo "Calling object method '$name' "
            . implode(', ', $arguments). "\n";
    }
  
      
    public static function __callStatic($name, $arguments) {
          
        echo "Calling static method '$name' "
            . implode(', ', $arguments). "\n";
    }
}
  
// Create new object
$obj = new ExTest;
  
$obj->runTest('in object context');
  
ExTest::runTest('in static context'); 
  
?>