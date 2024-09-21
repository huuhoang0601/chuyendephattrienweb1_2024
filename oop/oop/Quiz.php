<?php

abstract class a{
    abstract static public function b();
}
class c extends a{
    c::b();
}
$a= new c();
$a->b;