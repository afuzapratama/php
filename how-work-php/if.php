<?php

//if statement

$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
}


// if else statement

$t = date("H");

if ($t < "5") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}


// if else if else statement

$t = date("H");

if ($t < "5") {
    echo "Have a good morning!";
} else if ($t < "10") {
    echo "Have a good night!";
} else {
    echo "Have a good day!";
}



//exaple 1
$a = 50;
$b = 10;

if ($a > $b) {
    echo "Hello World";
}
