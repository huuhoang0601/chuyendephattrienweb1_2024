<?php

/**
 * @ref1 https://www.php.net/manual/en/language.oop5.overloading.php#object.get
 */

class Foo
{
    protected $height;

    public function  __construct($height)
    {
        $this->height = $height;
    }
    
    public function getHeight()
    {
        return $this->height;
    }

    public function __get($property)
    {
        if($property != 'height')
        {
            echo "Property $property does not exist";
            
        } else {
            return "The child's height is " . $this->height . " cm";
        }
    }
}

$foo = new Foo('height');
echo $foo->name;
/*Output
    The child's height is 150 cm
*/

