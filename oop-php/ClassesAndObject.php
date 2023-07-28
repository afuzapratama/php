<?php

//define a class

class Fruit
{
    //properties
    public $name;
    public $color;

    //methods
    function set_name($name)
    {
        $this->name = $name;
    }

    function get_name()
    {
        return $this->name;
    }
    function set_color($color)
    {
        $this->color = $color;
    }
    function get_color()
    {
        return $this->color;
    }
}


// define an object

$fruit = new Fruit();

// set object properties values
$fruit->set_name('Apple');
$fruit->set_color('red');


// get object properties values
echo $fruit->get_name();
echo "<br>";
echo $fruit->get_color();


//PHP - The $this Keyword
//The $this keyword refers to the current object, and is only available inside methods.
//Note: The $this keyword is not available in static methods, i.e. methods that do not belong to an object.


// 1  Inside the class (by adding a set_name() method and use $this):

class Car
{
    public $name;

    function set_name($name)
    {
        $this->name = $name;
    }
}

$volvo = new Car();
$volvo->set_name('Volvo');
echo "<br>";
echo $volvo->name;

// 2  Outside the class (by directly change the property value):


$volvo->name = 'ford';
echo "<br>";
echo $volvo->name;


//PHP - instanceof
//The instanceof keyword is used to determine whether an object is an instance of a specific class.

var_dump($fruit instanceof Fruit);
