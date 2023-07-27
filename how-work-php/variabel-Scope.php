<?php

//A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:

$x = 5; // global scope

function test()
{
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x </p>";
}


test(); //Warning: Undefined variable $x in /home/natama/Desktop/Github AfuzaPratama/php/how-work-php/variabel-Scope.php on line 10



//$x tidak terbaca letakan di dalam fungsi

function test2()
{
    $x = 15;
    echo "<p>Variable x inside function is: $x </p>";
}

test2(); //Variable x inside function is: 5


//jika menginginkan di luar function, maka kamu haru menggunakan global scope

function test3()
{
    global $x;
    echo "<p>Variable x inside function is: $x </p>";
}


test3(); //Variable x inside function is: 5