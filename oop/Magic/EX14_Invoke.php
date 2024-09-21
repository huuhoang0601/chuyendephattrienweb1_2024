<?php

/**
 * @ref1 https://www.php.net/manual/en/language.oop5.magic.php#object.invoke
 */
class Foo
{
    // Nếu không có invoke sẽ ra lỗi 
    public function __invoke($bar)
    {
        echo "name = $bar";
    }
}
// Khi cố gắng mà gọi đối tượng ra giống như thằng array thì invoke sẽ làm
$foo = new Foo;
$foo('bar');