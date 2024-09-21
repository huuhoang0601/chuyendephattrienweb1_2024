<?php
// function spl_autoload_register to be automatically loaded 
// if they are currently not defined
spl_autoload_register(function ($name) {
    echo "Want to load $name.\n";
    throw new Exception("Unable to load $name.");
});

try {
    $obj = new Foo();
    // -> Want to load Fo "then run throw Exception" -> Unable to load Foo
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}
?>