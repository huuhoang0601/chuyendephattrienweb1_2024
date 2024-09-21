<?php
interface a
{
    // interface must be public not protected, private
    public function foo();
}

interface b
{
    public function bar();
}

interface c extends a, b
{
    public function baz();
}

class d implements c
{
    public function foo()
    {
        echo 'Foo'.PHP_EOL;
    }

    public function bar()
    {
        echo 'Bar'.PHP_EOL;
    }

    public function baz()
    {
        echo 'Baz'.PHP_EOL;
    }
}
$foo = new d();
$foo->foo();//Foo
$foo->bar();//Bar
$foo->baz();//Baz