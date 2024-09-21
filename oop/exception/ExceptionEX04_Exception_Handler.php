<?php
define('EOL', "<br>");

// TEST CASE DÙNG ĐỂ KIỂM THỬ >>>>>>>>>>>>>>>>>>>>>>>>>>>
// function exception_handler(Throwable $exception){
//     echo "Bắt được lỗi ".EOL, $exception->getMessage();
// }
// // gọi lại hàm exception_handler
// set_exception_handler('exception_handler');
// throw new Exception ('Tùm lum');
// echo EOL;
// echo 'Lệnh sẽ không được thực hiện';

// CHUẨN >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> 
// Work
$exception_handler = function () {
    echo "Uncaught exception: \n";
};
// Work
$exception_handler = function (Throwable $ex) {
    echo "Uncaught exception: " , $ex->getMessage(), "\n";
};

function exception_handler(Throwable $ex) {
    echo "Uncaught exception: " , $ex->getMessage(), "\n";
};
// Error - hàm khi set yêu cầu chỉ có 1 param nên khi khai báo 2 sẽ báo lỗi
// $exception_handler = function (Throwable $ex, $more) {
//     echo "Uncaught exception: " , $ex->getMessage(), "\n";
//     echo "More : ", $more;
// };

class DefaultExceptionHandler{
    public function set_exception_handler($exception_handler) {
        // Đây là 1 hàm của system định nghĩa và không liên quan gì đến tên hàm 
        // Hàm này có nhiệm vụ set cái exception_handler vào cho hệ thống và khi hệ thống bắt được những Exception nào 
        // thì nó sẽ làm exception_handler này.
        set_exception_handler($exception_handler);
        // Lưu ý : Thân hàm này chỉ làm 1 lần, không lặp. 'echo 1;' để kiểm tra 
    } 
}

$default_exception_handler = new DefaultExceptionHandler();
$default_exception_handler->set_exception_handler($exception_handler);
set_exception_handler("exception_handler");
throw new Exception('Uncatched'); 
//  Uncaught exception: Uncached


//  ( ! ) Fatal error: Uncaught Exception: Uncatched in 
//        *\ExceptionEX04_Exception_Handler.php on line 20
//  ( ! ) Exception: Uncatched in 
//        *\ExceptionEX04_Exception_Handler.php on line 20






