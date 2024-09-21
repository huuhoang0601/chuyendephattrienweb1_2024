<?php
define('EOL', "<br>");
function handleError($errno, $errstr,$error_file,$error_line) {
    echo "<b>Error:</b> [$errno] $errstr - $error_file:$error_line";
}
/**
 * Undocumented function
 *
 * @param $errno : xác định mức độ lỗi [ ID của lỗi ]
 * @param $errstr: xác định thông báo lỗi dưới dạng chuỗi [ Message của lỗi ]
 * @param $err_file: xác định tên file của tập lệnh trong đó xảy lỗi [ File nào xảy ra lỗi ]
 * @param $err_line: xác định số dòng mà lỗi xảy ra [ Dòng nào gây ra lỗi ]
 *
 */
//    Error: [8] Undefined variable: test - 
//    *\ExceptionEX05_Error_Handler_Part1.php:19
function customError_noParam() {
  // echo "<b>Error:</b> [$errno] $errstr".EOL;
  echo "Opps, something went wrong:".EOL;
  echo "Error number: []".EOL;
   echo "Error Description: []".EOL;
}
function customError($errno, $errstr) {
    // echo "<b>Error:</b> [$errno] $errstr".EOL;
    echo "Opps, something went wrong:".EOL;
    echo "Error number: [$errno]".EOL;
     echo "Error Description: [$errstr]".EOL;
}
// Không thể để 1 closure vì đây không phải là 1 callable function 
$lamError = function($errno, $errstr){
    echo "Opps, something went wrong:".EOL;
    echo "Error number: [$errno]".EOL;
    echo "Error Description: [$errstr]".EOL;
};
//    Error: [8] Undefined variable: test
//* Tùy theo số param mà nó sẽ tương ứng với hàm gốc là handleError($errno, $errstr,$error_file,$error_line)
//  Tối thiểu 1, tối đa 4
set_error_handler("customError");

function customError2($error_no, $error_msg, $more)
{
  echo "Error ID: [$error_no]".EOL;
  echo "Error Message: [$error_msg]".EOL;
  echo "File info: $more".EOL;
}
function customError3($error_no)
{
  echo "Error ID: [$error_no]";
}
 // thiết lập error handler
set_error_handler("customError2");
// Use a undefined variable

// Phát động lỗi không có biến $test
echo ($test);
// Hoặc 
trigger_error("User null",E_USER_ERROR);
//  ( ! ) Notice: Undefined variable: test in 
//  *\ExceptionEX05_Error_Handler_Part1.php on line 19
// set_error_handler("lamError");
