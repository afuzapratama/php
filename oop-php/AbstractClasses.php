<?php

//abstract class adalah class yang tidak bisa diinstansiasi, artinya kita tidak bisa membuat object dari class tersebut

abstract class ParentClass
{
    abstract public function someMethod1();
    abstract public function someMethod2($name, $color);
    abstract public function someMethod3(): string;
}


// example 1

// Parent class
abstract class Car
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    abstract public function intro(): string;
}

// Child classes
class Audi extends Car
{
    public function intro(): string
    {
        return "Choose German quality! I'm an $this->name!";
    }
}

class Volvo extends Car
{
    public function intro(): string
    {
        return "Proud to be Swedish! I'm a $this->name!";
    }
}

class Citroen extends Car
{
    public function intro(): string
    {
        return "French extravagance! I'm a $this->name!";
    }
}

// Create objects from the child classes
$audi = new audi("Audi");
echo $audi->intro();
echo "<br>";

$volvo = new volvo("Volvo");
echo $volvo->intro();
echo "<br>";

$citroen = new citroen("Citroen");
echo $citroen->intro();

//Kelas Audi, Volvo, dan Citroen diwarisi dari kelas Car. Ini berarti bahwa kelas Audi, Volvo, dan Citroen dapat menggunakan properti $nama publik serta metode __construct() publik dari kelas car karena pewarisan.

// Tapi, intro() adalah metode abstrak yang harus didefinisikan di semua kelas anak dan mereka harus mengembalikan sebuah string.

//More Abstract Class Examples

abstract class UtamaClass
{
    // Abstract method with an argument
    abstract protected function prefixName($name);
}

class ChildClass extends UtamaClass
{
    public function prefixName($name)
    {
        if ($name == "John Doe") {
            $prefix = "Mr.";
        } elseif ($name == "Jane Doe") {
            $prefix = "Mrs.";
        } else {
            $prefix = "";
        }
        return "{$prefix} {$name}";
    }
}

$class = new ChildClass;
echo $class->prefixName("John Doe");
echo "<br>";
echo $class->prefixName("Jane Doe");


//Mari kita lihat contoh lain di mana metode abstrak memiliki argumen, dan kelas anak memiliki dua argumen opsional yang tidak ditentukan dalam metode abstrak induk:

abstract class AbstractClass
{
    // Abstract method with an argument
    abstract protected function prefixName($name);
}

class Twoclasse extends AbstractClass
{
    // The child class may define optional arguments that are not in the parent's abstract method
    public function prefixName($name, $separator = ".", $greet = "Dear")
    {
        if ($name == "John Doe") {
            $prefix = "Mr";
        } elseif ($name == "Jane Doe") {
            $prefix = "Mrs";
        } else {
            $prefix = "";
        }
        return "{$greet} {$prefix}{$separator} {$name}";
    }
}

$class = new Twoclasse;
echo $class->prefixName("John Doe");
echo "<br>";
echo $class->prefixName("Jane Doe");
