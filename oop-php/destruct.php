<?php

class Fruit
{
    public $name;
    public $color;

    function __construct($name)
    {
        $this->name = $name;
    }
    function __destruct()
    {
        echo "The fruit is {$this->name}";
    }
}

$apple = new Fruit('apple');


class Car
{
    public $name;
    public $merek;

    function __construct($name, $merek)
    {
        $this->name = $name;
        $this->merek = $merek;
    }
    function __destruct()
    {
        echo "The Card IS {$this->name} and teh merek is {$this->merek}.";
    }
}

$car = new Car("BWM", "932");
