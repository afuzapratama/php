<?php

// Besides the built-in PHP functions, it is possible to create your own functions.

// A function is a block of statements that can be used repeatedly in a program.
// A function will not execute automatically when a page loads.
// A function will be executed by a call to the function.



//syntax
// function functionName() {
//     code to be executed;
//   }


// function example

function myFunction()
{
    echo "Hello World";
}

myFunction();

echo "<br>";
// parameters

function name($name)
{
    echo "Hello $name";
}

name("John");

// two parameters

function nameandlastname($name, $surname)
{
    echo "Hello $name $surname";
}

nameandlastname("John", "Doe");

//loosely typed language

function addnumber($num1, $num2)
{
    return $num1 + $num2;
}

echo addnumber(10, 20);

//sctrictly typed language

function declaretype(int $num1, int $num2)
{
    return $num1 + $num2;
}

echo declaretype(10, 20);

// Default Argument Value

function defaultvalue($name = "John", $surname = "Doe")
{
    echo "Hello $name $surname";
}

defaultvalue();


//passing arguments by reference

function passbyreference($num1, &$num2)
{
    echo $num2 = $num1 * 2;
}

$num1 = 10;
$num2 = 20;

passbyreference($num1, $num2);
