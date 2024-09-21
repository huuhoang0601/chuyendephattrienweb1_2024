<?php
define('EOL', "<br>");

class ExceptionEX05_Error_Handler_Part3_Class_Method {
    public function __construct()
    {
        // Test thử nó vẫn chạy khi trỏ bằng $this 
        $this->foo(1,'helo','da',2);
    }
    public function foo($errno, $errstr, $error_file, $error_line) {
        echo "<b>Error:</b> [$errno] $errstr - $error_line" . EOL;
    }
    // Sử dụng cách này để nhượng quyền cho thằng system bằng cách dưới
    public function setParams() {
        set_error_handler(array($this, "foo"));
        // Vì nếu không dùng foo thì lẽ ra foo chỉ được dùng bên trong class này và không được phép dùng bên ngoài class
        
    }
}
$foo = new ExceptionEX05_Error_Handler_Part3_Class_Method();
$foo->setParams();

echo $test;
//    Error: [8] Undefined variable: test - 19