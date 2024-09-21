<?php
/**
 * @ref: https://www.php.net/manual/en/language.oop5.magic.php#object.unserialize
 **/

class Foo
{
    // public $name;
    // public $age;

    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    // Hàm này mặc định là như vậy không cần thiết phải viết ngoại trừ thêm vài dòng code vào để xử lý.
    // Ngoài ra nếu biến là private thì rất cần để thay đổi dữ liệu nhằm không cho dữ liệu thất thoát ra ngoài
    // những hàm này nếu để mặc định thì private hay protected nó vẫn cho xài được.
    public function __serialize(): array
    {
        return array('name' => $this->name, 'age' => $this->age + 1);
    }
    // Hàm này cũng mặc định là như vậy,
    public function __unserialize(array $data): void
    {
        echo 'unserialize go here <br>';
        var_dump($data); // array(2) { ["name"]=> string(3) "foo" ["age"]=> int(9) } 
        echo '<br>';
        var_dump($this); // object(Foo)#2 (2) { ["name"]=> NULL ["age"]=> NULL }  
        echo '<br>';
        echo 'Loading to $this->variables.. <br>';
        $this->name = $data['name'];
        $this->age = $data['age'];
    }
}

$foo = new Foo('foo', 9);
echo serialize($foo);
echo '<br>';
$bar = unserialize(serialize($foo));
echo 'Result: <br>';
// echo $bar;
var_dump($bar);

// object(Foo)#2 (2) { ["name"]=> string(3) "foo" ["age"]=> int(9) }