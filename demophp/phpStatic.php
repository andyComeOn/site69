<?php
// class Foo
// {
//     public static $my_static = 'foo';

//     public function staticValue()
//     {
//         return self::$my_static;   // bak
//         // return $this->my_static;
//     }
// }

// class Bar extends Foo
// {
//     public function fooStatic()
//     {
//         return parent::$my_static;
//     }
// }


// print Foo::$my_static . "\n";

// $foo = new Foo();
// print $foo->staticValue() . "\n";

// print $foo->my_static . "\n";      // Undefined "Property" my_static 

// print $foo::$my_static . "\n";

// $classname = 'Foo';
// print $classname::$my_static . "\n"; // As of PHP 5.3.0

// print Bar::$my_static . "\n";

// $bar = new Bar();
// print $bar->fooStatic() . "\n";


?>

<title>静态方法示例</title>

<?php
class Foo {
    public static function aStaticMethod()
    {
        return 21;
    }
}
print Foo::aStaticMethod();

$classname = 'Foo';
print $classname::aStaticMethod(); // 自 PHP 5.3.0 起
?>