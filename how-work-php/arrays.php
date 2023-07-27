<?php

//first array
$car = array("Volvo", "BMW", "Toyota");
echo "I like " . $car[0] . ", " . $car[1] . " and " . $car[2] . ".";

echo "<br>";
//index array

for ($i = 0; $i < count($car); $i++) {
    echo "I like " . $car[$i] . ".";
    echo "<br>";
}


// associative array

$cars = array(
    "Volvo" => "I like Volvo.",
    "BMW" => "I like BMW.",
    "Toyota" => "I like Toyota."
);

echo "I like " . $cars["Volvo"] . ", " . $cars["BMW"] . " and " . $cars["Toyota"] . ".";

echo "<br>";

//looping through associative array

foreach ($cars as $key => $value) {
    echo "I like " . $value . ".";
    echo "<br>";
}

//multidimensional array

$carsv = array(
    array("Volvo", "I like Volvo."),
    array("BMW", "I like BMW."),
    array("Toyota", "I like Toyota.")
);

echo "I like " . $carsv[0][0] . ", " . $carsv[1][1] . " and " . $carsv[2][0] . ".";

echo "<br>";


// sorting array

$cars = array(
    "Volvo" => "I like Volvo.",
    "BMW" => "I like BMW.",
    "Toyota" => "I like Toyota."
);

var_dump(ksort($cars));
var_dump(rsort($cars));
var_dump(asort($cars));
var_dump(sort($cars));
var_dump(krsort($cars));
var_dump(arsort($cars));

// sort() - sort arrays in ascending order
// rsort() - sort arrays in descending order
// asort() - sort associative arrays in ascending order, according to the value
// ksort() - sort associative arrays in ascending order, according to the key
// arsort() - sort associative arrays in descending order, according to the value
// krsort() - sort associative arrays in descending order, according to the key