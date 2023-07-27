<?php

//Use the switch statement to select one of many blocks of code to be executed.

$color = 'blue';

switch ($color) {
    case 'red':
        echo "You chose red";
        break;
    case 'green':
        echo "You chose green";
        break;
    case 'blue':
        echo "You chose blue";
        break;
    default:
        echo 'Not a color';
        break;
}

echo "<br>";


$car = 'BMW';

switch ($car) {
    case 'BMW':
        $car = 'You chose BMW';
        break;
    case 'Audi':
        $car = 'You chose Audi';
        break;
    case 'Mercedes':
        $car = 'You chose Mercedes';
        break;
    default:
        $car = 'Not a car';
        break;
}


echo $car;
