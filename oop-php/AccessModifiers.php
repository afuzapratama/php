<?php
// class Fruit
// {
//     public $name;
//     public $color;
//     public $weight;

//     function set_name($n)
//     {  // a public function (default)
//         $this->name = $n;
//     }
//     protected function set_color($n)
//     { // a protected function
//         $this->color = $n;
//     }
//     private function set_weight($n)
//     { // a private function
//         $this->weight = $n;
//     }
// }

// $mango = new Fruit();
// $mango->set_name('Mango'); // OK
// $mango->set_color('Yellow'); // ERROR
// $mango->set_weight('300'); // ERROR


// public - the property or method can be accessed from everywhere. This is default
// protected - the property or method can be accessed within the class and by classes derived from that class
// private - the property or method can ONLY be accessed within the class


//example 1

class Car
{
    public $name;
    public $merek;
    public $type;

    public function __construct($name, $merek, $type)
    {
        $this->name = $name;
        $this->merek = $merek;
        $this->set_type($type);
    }

    function set_name($name)
    {
        $this->name = $name;
    }
    protected function set_merek($merek)
    {
        $this->merek = $merek;
    }
    private function set_type($type)
    {
        $this->type = $type;
    }
    public function __destruct()
    {
        echo "The car is {$this->name} and the merek is {$this->merek} and the type is {$this->type}";
    }
}

// Create a new Car object
$car = new Car("Honda", "Accord", "Sedan");

// Set the name using the public method
$car->set_name("MyCar");

// Set the merek using the protected method (This is valid since we are inside the class)
// $car->set_merek("ABC Manufacturer");

// Attempt to set the type using the private method (This will result in an error since we are outside the class)
// $car->set_type("SUV"); // Error: Call to private method Car::set_type() from context ...

// Display the car details using the public method
// $car->print_car("SUV");