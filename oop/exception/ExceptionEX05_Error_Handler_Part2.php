<?php
define('EOL', "<br>");

// error handler function
// Hàm này dùng để phân loại các lỗi với nhau thông qua ID của lỗi được lưu trong những keyword của System
function myErrorHandler($errno, $errstr, $errfile, $errline) {
    
    if (!(error_reporting() & $errno)) {
        return false;
    }
    switch ($errno) {
        case E_USER_ERROR:
            echo "MY ERROR: [$errno] $errstr" . EOL;
            break;
        
        case E_USER_WARNING:
            echo "MY WARNING: [$errno] $errstr" . EOL;
            break;

        case E_USER_NOTICE:
            echo "MY NOTICE: [$errno] $errstr" . EOL;
            break;

        default:
            echo "Unknown error type: [$errno] $errstr" . EOL;
            break;
    }
    return true;
}

// Phát động lỗi để lỗi nhảy vào cái switch 
class ExceptionEX05_Error_Handler_Part2{
    // function to test the error handling
    public function fooBar($foo)
    {
        if ($foo == 'foo') {
            trigger_error("Is foo", E_USER_ERROR);
            //MY ERROR: [256] Is foo
        }

        if ($foo == 'bar') {
            trigger_error("Is bar", E_USER_WARNING);
            //MY WARNING: [512] Is bar
        }

        if ($foo == 'fooBar') {
            trigger_error("is fooBar", E_USER_NOTICE);
            //MY NOTICE: [1024] is fooBar
        }
    }
}


// set to the user defined error handler
$old_error_handler = set_error_handler("myErrorHandler");

$foo = new ExceptionEX05_Error_Handler_Part2();
$foo->fooBar('foo');
$foo->fooBar('bar');
$foo->fooBar('fooBar');

/**OUTPUT
 * 
MY ERROR: [256] Is foo
Fatal error on line 40 in file K:\dev\0-php-training\2-php-core\exception\ExceptionEX05_Error_Handler_Part2.php
, PHP 7.3.21 (WINNT)
MY WARNING: [512] Is bar
MY NOTICE: [1024] is fooBar 
 */