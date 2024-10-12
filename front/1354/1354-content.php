<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1354">


    <div class='container'>
  
        <!--COL 1-->


       <div class="pross1">
        <div class='col-md-4 col-2' >

            <div class='col-2-top'>
                <span class="fa fa-globe" aria-hidden="true"></span>
                
            </div>

            <div class='col-2-bottom'>
                <h3> DỰ KIẾN</h3>
                <h5> Đặt chỗ tại nhà hàng chỉ mất vài phút:
                    <br>
                    123456789141</h5>

                <p><a href="#">Đặt Ngay</a></p>
            </div>

            <div class='col-2-hinh'></div>


        </div>
        <!--COL 3-->
 

    </div>
</div>
</div>
</div>
