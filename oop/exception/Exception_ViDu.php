<?php
define('EOL', "<br>");
// Cú pháp đầy đủ
echo ' Cú pháp đầy đủ :'.EOL;
class TongHop{
    function fullException($number){
      try {
          if($number == 0) {
            echo 'Số bằng 0 '.EOL;
            throw new Exception("Lỗi số bằng 0 ");
          }
      }
      catch(Exception $ex){
          echo('Exception: '. $ex->getMessage().EOL);
      }
      finally{
        // Luôn thực thi
        echo 'Luôn thực thi '.EOL;
      }
    }
   
  
}


