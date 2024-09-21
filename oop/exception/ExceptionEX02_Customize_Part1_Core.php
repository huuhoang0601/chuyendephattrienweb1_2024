<?php
define('EOL', "<br>");
/**
 * ExceptionEX02_Customize class
 */
class ExceptionEX02_Customize_Part1_Core extends Exception {
    
    public function myCustomize() {
        $info = ''
                . 'getCode: '           . $this->getCode()          . EOL .''
                . 'getFile: '           . $this->getFile()          . EOL .''
                . 'getMessage: '        . $this->getMessage()       . EOL .''
                . 'getPrevious: '       . $this->getPrevious()      . EOL .''
                //. 'getTrace: '          . $this->getTrace()         . EOL .''
                . 'getTraceAsString: '  . $this->getTraceAsString() . EOL .''
                ;
        return $info;
    }
//    getCode: 999
//    getFile: *\ExceptionEX02_Customize.php
//    getMessage: fooBar
//    getPrevious:
//    getTraceAsString: #0 *\ExceptionEX02_Customize.php(44): AppEX02->callCustomizeExcetion('fooBar') 
//                      #1 {main}
}

/**
 * AppEX02
 */
class AppEX02 {
    public function callCustomizeExcetion($bar) {
        try {
            if ($bar == 'fooBar') {
                throw new ExceptionEX02_Customize_Part1_Core('fooBar', 999);
            } else {
                echo "OK. Write your code here";
            }
        } 
        catch (ExceptionEX02_Customize_Part1_Core $e) {
            echo $e->myCustomize();
        }
    }
}

$foo = new AppEX02();
$bar = 'fooBar';
$foo->callCustomizeExcetion($bar);