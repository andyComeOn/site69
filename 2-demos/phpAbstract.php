<?php
abstract class AbstractClass
{
    // 强制要求子类定义这些方法，不定义功能实现
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);

    // 普通方法（非抽象方法），子类可以不重写
    public function printOut()
    {
        print $this->getValue() . "\n";
    }
}

class ConcreteClass1 extends AbstractClass
{
    protected function getValue()
    {
        return "ConcreteClass1";
    }

    public function prefixValue($prefix)
    {
        return "{$prefix}ConcreteClass1";
    }
}

class ConcreteClass2 extends AbstractClass
{
    //访问方式可以更宽松
    public function getValue()
    {
        return "ConcreteClass2";
    }

    public function prefixValue($prefix)
    {
        return "{$prefix}ConcreteClass2";
    }
}

$class1 = new ConcreteClass1;

$class1->printOut();
echo $class1->prefixValue('FOO_') . "\n";

// $class2 = new ConcreteClass2;
// $class2->printOut();
// echo $class2->prefixValue('FOO_') . "\n";










// abstract class AbstractClass
// {
//     // 我们的抽象方法仅需要定义需要的参数
//     abstract protected function prefixName($name);

// }

// class ConcreteClass extends AbstractClass
// {

//     // 我们的子类可以定义父类签名中不存在的 可选参数
//     public function prefixName($name, $separator = ".") {
//         if ($name == "Pacman") {
//             $prefix = "Mr";
//         } elseif ($name == "Pacwoman") {
//             $prefix = "Mrs";
//         } else {
//             $prefix = "";
//         }
//         return "{$prefix}{$separator} {$name}";
//     }
// }

// $class = new ConcreteClass;
// echo $class->prefixName("Pacman"), "\n";
// echo $class->prefixName("Pacwoman"), "\n";
