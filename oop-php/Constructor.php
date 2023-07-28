<?php
//PHP - The __construct Function

//example 1
class Fruit
{
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    function get_name()
    {
        return $this->name;
    }
}

$apple = new Fruit("Apple");
echo $apple->get_name();

echo "<br>";

//example 2
class Car
{
    public $name;
    public $merek;

    function __construct($name, $merek)
    {
        $this->name = $name;
        $this->merek = $merek;
    }

    function get_name()
    {
        return $this->name;
    }

    function get_merek()
    {
        return $this->merek;
    }
}

$car = new Car("BMW", "X5");
echo $car->get_name();
echo "<br>";
echo $car->get_merek();
