<?php
define('EOL', '<br>');

/**
 * @ref1: https://www.php.net/manual/en/language.oop5.magic.php#object.serialize
 **/

class Foo
{
    protected $bar = 'bar';
    // Sử dụng khai báo instance bên trong class đó
    // '?' nghĩa là cho phép dữ liệu null 
    private ?Foo $instance = null;
    private ?Foo $instance2 = null;

    public function __construct($bar)
    {
        $this->bar = $bar;

        if($this->instance === null){
            $this->instance = $this;
            $this->instance2 = $this->instance;
        }
        // Nếu thằng $instance này là một thằng bên trong thằng Foo thì liệu khi gán this rồi
        // thì Foo con có tạo ra thêm 2 thằng instance  ?
        // -> Không
    }
    // Ở chế độ không khai kháo thì hàm __serialize() vẫn có nội dung là
    // __serialize(){ return serialize(['bar','instance','instance2']); }
}

$foo = new Foo('bar');
echo serialize($foo);
// O:3:"Foo":3:{s:6:"*bar";s:3:"bar";s:13:"Fooinstance";r:1;s:14:"Fooinstance2";r:1;}
// r for Relative ?

// Inner Class 