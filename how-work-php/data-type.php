<?php

// PHP supports the following data types:

// String
// Integer
// Float (floating point numbers - also called double)
// Boolean
// Array
// Object
// NULL
// Resource



// String
echo 'String';
echo "<br>===========<br>";
$x = "Hello World Petik 2";
echo $x . "<br>";
var_dump($x);

// Integer
echo "<br>===========<br>";
echo " Integer";
echo "<br>===========<br>";
$x = 1021;
var_dump($x);
echo "<br>";

// Float
echo "<br>===========<br>";
echo " Float";
echo "<br>===========<br>";

$x = 10.21;
var_dump($x);
echo "<br>";

// Boolean
echo "<br>===========<br>";
echo " Boolean";
echo "<br>===========<br>";

$x = true;
var_dump($x);
echo "<br>";

// Array
echo "<br>===========<br>";
echo " Array";
echo "<br>===========<br>";

$c = array(1, 2, 3, 4, 5);
var_dump($c); //kurung array
echo "<br>";
$x = [1, 2, 3, 4, 5]; // [ aray]
var_dump($x);
echo "<br>";

// Object
echo "<br>===========<br>";
echo " Object";
echo "<br>===========<br>";

class Motor
{
    public $name;
    public $brand;
    public function __construct($name, $brand)
    {
        $this->name = $name;
        $this->brand = $brand;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getBrand()
    {
        return $this->brand;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }
}


$motor = new Motor("Honda", "Civic");
var_dump($motor);
echo "<br>";


// NULL
echo "<br>===========<br>";
echo " NULL";
echo "<br>===========<br>";


$x = null;
var_dump($x);
echo "<br>";

// Resource
echo "<br>===========<br>";
echo " Resource";
echo "<br>===========<br>";

$x = fopen("php://stdin", "r"); // read from stdin
var_dump($x);
echo "<br>";
