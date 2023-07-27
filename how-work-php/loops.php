<?php

//while loop

$x = 1;

while ($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
}

//for loop

for ($x = 1; $x <= 5; $x++) {
    echo "The number is: $x <br>";
}

// do while loop

$x = 1;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);


// foreach loop

$arr = [1, 2, 3, 4, 5];

foreach ($arr as $key => $value) {
    echo "The number is: $value <br>";
}

// break statement

for ($x = 1; $x <= 5; $x++) {
    if ($x == 3) {
        break;
    }
    echo "The number is: $x <br>";
}
