<?php
//Create a constant with a case-sensitive name:
define("NATAMA", "afuza pratama");

//Create a constant with a case-insensitive name:
define("budi", "Natama", true);

//As of PHP 8.0.0, the ability to define case-insensitive constants using the third argument in the define() function has been removed. Case-insensitive constants are no longer supported.

echo NATAMA; // Output: afuza pratama
echo "<br>";
echo budi;   // Output: Natama 

//array constant
echo "<br>";

define("cards", ["Ace of Spades", "Ace of Hearts", "Ace of Diamonds"]);

echo cards[0]; // Output: Ace of Spades

echo "<br>";
// global constant

function myTest()
{
    echo NATAMA;
}

myTest();
