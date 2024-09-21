<?php

/**
 * @ref1 https://www.php.net/manual/en/language.oop5.overloading.php#object.set
 */

class Foo
{
    protected $height;

    public function __set($property, $value)
    {
        if($property != "height")
        {
            echo "Property $property does not exist...";
        } else{
            // set height
            if ($value > 30)
            {
                $this->height= $value;
                
            } else echo "Height must be greater than 30!";
        }
    }

    public function __get($property)
    {
        if($property)
        {
            return "The child's height is " . $this->height . " cm";
        } else {
            echo "Property $property does not exist";
        }
    }
}

$foo = new Foo();
$foo->name = 'foo';

echo $foo->name;