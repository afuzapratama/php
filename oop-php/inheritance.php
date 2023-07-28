<?php

//Inheritance adalah sebuah proses dimana sebuah class mewariskan property dan methodnya ke class lain atau childnya

class Fruit
{
    public $name;
    public $color;
    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    public function intro()
    {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}

// Strawberry is inherited from Fruit
class Strawberry extends Fruit
{
    public function message()
    {
        echo "Am I a fruit or a berry? ";
    }
}
$strawberry = new Strawberry("Strawberry", "red");
$strawberry->message();
$strawberry->intro();


//Inheritance and the Protected Access Modifier

// class Car
// {
//     public $name;
//     public $color;
//     public function __construct($name, $color)
//     {
//         $this->name = $name;
//         $this->color = $color;
//     }
//     protected function intro()
//     {
//         echo "The fruit is {$this->name} and the color is {$this->color}.";
//     }
// }

// class Honda extends Car
// {
//     public function message()
//     {
//         echo "Am I a fruit or a berry? ";
//     }
// }

// // Try to call all three methods from outside class
// $strawberry = new Honda("Strawberry", "red");  // OK. __construct() is public
// $strawberry->message(); // OK. message() is public
// $strawberry->intro(); // ERROR. intro() is protected



// class Fruit {
//   public $name;
//   public $color;
//   public function __construct($name, $color) {
//     $this->name = $name;
//     $this->color = $color;
//   }
//   protected function intro() {
//     echo "The fruit is {$this->name} and the color is {$this->color}.";
//   }
// }

// class Strawberry extends Fruit {
//   public function message() {
//     echo "Am I a fruit or a berry? ";
//     // Call protected method from within derived class - OK
//     $this -> intro();
//   }
// }

// $strawberry = new Strawberry("Strawberry", "red"); // OK. __construct() is public
// $strawberry->message(); // OK. message() is public and it calls intro() (which is protected) from within the derived class

//Overriding Inherited Methods
//=============================

class Car
{
    public $name;
    public $color;
    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    public function intro()
    {
        echo "The car is {$this->name} and the color is {$this->color}.";
    }
}

class Honda extends Car
{
    public function message()
    {
        echo "Am I a car or a bike? ";
    }
    public function intro()
    {
        echo "The car is <i>{$this->name}</i> and the color is <i>{$this->color}</i>.";
    }
}


$honda = new Honda("Honda", "red");
$honda->message();
