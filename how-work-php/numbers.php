<?php

$x = 544;
var_dump(is_int($x)); // true

$x = 59.85;
var_dump(is_int($x)); // false

//float

$x = 544.0;
var_dump(is_float($x)); // true

$x = 59.85;
var_dump(is_float($x)); // true

$x = 544;
var_dump(is_float($x)); // false

//infinite

// is_finite()
// is_infinite()

$x = INF;
var_dump(is_infinite($x)); // true

$x = -INF;
var_dump(is_infinite($x)); // true

$y = 1.9e411;
var_dump(is_infinite($y)); // true

//Nan


$x = NAN;
var_dump(is_nan($x)); // true

$x = -NAN;
var_dump(is_nan($x)); // true


// numerical string

$x = "544";
var_dump(is_numeric($x)); // true

$x = "59.85";
var_dump(is_numeric($x)); // true

$x = "544a";
var_dump(is_numeric($x)); // false

echo "<br>";
// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;
echo "<br>";
// Cast string to float
$int_cast = "23465.768";
$float_cast = (int)$int_cast;
echo $float_cast;
echo "<br>";
// Cast int to float
$int_cast = 23465;
$float_cast = (float)$int_cast;
echo $float_cast;

echo "<br>";
// Cast float to string